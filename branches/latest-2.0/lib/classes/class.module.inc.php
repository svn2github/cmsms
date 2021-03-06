<?php
# CMS - CMS Made Simple
# (c)2004-6 by Ted Kulp (ted@cmsmadesimple.org)
# This project's homepage is: http://cmsmadesimple.org
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# BUT withOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	02111-1307	USA
#
#$Id$

/**
 * Base module class.
 *
 * All modules should inherit and extend this class with their functionality.
 *
 * @since		0.9
 * @package		CMS
 */

class CMSModule extends CmsObject 
{
	/**
	 * ------------------------------------------------------------------
	 * Initialization Functions and parameters
	 * ------------------------------------------------------------------
	 */
	protected $wysiwygactive;
	protected $syntaxactive;

	const PARAM_INT = 'CLEAN_INT';
	const PARAM_FLOAT = 'CLEAN_FLOAT';
	const PARAM_NONE = 'CLEAN_NONE';
	const PARAM_STRING = 'CLEAN_STRING';
	const PARAM_REGEXP = 'CLEAN_REGEXP';
	const PARAM_FILE = 'CLEAN_FILE';

	var $curlang;
	var $langhash;
	var $params;
	var $error;
	var $modinstall;
	var $modtemplates;
	var $modlang;
	var $modform;
	var $modredirect;
	var $modmisc;
	var $modblock;
	var $param_map;
	var $restrict_unknown_params;
	
	var $smarty;  // this should go to, but left for backwards compatibility.
	
	public function __construct()
	{
		CmsProfiler::get_instance()->mark('loading: ' . get_class($this) . " module");
		// specify that the autoload member will be used
		// for autoloading undefined classes.
		spl_autoload_register(array($this,'autoload'));

		$gCms = cmsms();
		$config = cms_config();		
		$this->smarty = $gCms->GetSmarty();

		global $CMS_ADMIN_PAGE;
		global $CMS_MODULE_PAGE;
		if (isset($CMS_ADMIN_PAGE))
		{
			$this->curlang = '';
		}
		else
		{
			$this->curlang = get_site_preference('frontendlang','');
			if (isset($config['locale']) && $config['locale'] != '') {
				$this->curlang = $config['locale'];
			}
			if( $this->curlang == '' ) {
				$this->curlang = 'en_US';
			}
		}
		$this->langhash = array();
		$this->params = array();
		$this->param_map = array();
		$this->restrict_unknown_params = false;
		$this->wysiwygactive = false;
		$this->error = '';

		$this->params[] = array(
			'name' => 'lang',
			'default' => 'en_US',
			'help' => lang('langparam'),
			'optional' => true);

		if( !isset($CMS_ADMIN_PAGE) || isset($CMS_MODULE_PAGE) )
		{
			$this->SetParameterType('assign',self::PARAM_STRING);
			$this->SetParameterType('module',self::PARAM_STRING);
			$this->SetParameterType('lang',self::PARAM_STRING);
			$this->SetParameterType('returnid',self::PARAM_INT);
			$this->SetParameterType('action',self::PARAM_STRING);
			$this->SetParameterType('showtemplate',self::PARAM_STRING);
			$this->SetParameterType('inline',self::PARAM_INT);
			$this->SetParameters();
		}

		$this->modinstall = false;
		$this->modtemplates = false;
		$this->modlang = false;
		$this->modform = false;
		$this->modredirect = false;
		$this->modmisc = false;
		$this->modblock = false;
	}

	/**
	 * Function to handle autoloading of undefined classes.
	 * by default it looks for a class.xxxxxx.php file in
	 * the lib directory of the module.
	 */
	public function autoload($classname)
	{
	  $fn = $this->GetModulePath()."/lib/class.{$classname}.php";
	  if( file_exists($fn) )
	    {
	      require_once($fn);
	    }
	}

	public function include_file_in_scope($filename)
	{
	  // todo: check to make sure the filename is in the module directory.
	  $gCms = cmsms();
	  $config = cms_config();
	  $smarty = cms_smarty();

	  include $filename;
	}

	public function LoadTemplateMethods()
	{
		if (!$this->modtemplates)
		{
			require_once(cms_join_path(dirname(__FILE__), 'module_support', 'modtemplates.inc.php'));
			$this->modtemplates = true;
		}
	}
	
	public function LoadLangMethods()
	{
		if (!$this->modlang)
		{
			require_once(cms_join_path(dirname(__FILE__), 'module_support', 'modlang.inc.php'));
			$this->modlang = true;
		}
	}
	
	public function LoadFormMethods()
	{
		if (!$this->modform)
		{
			require_once(cms_join_path(dirname(__FILE__), 'module_support', 'modform.inc.php'));
			$this->modform = true;
		}
	}
	
	public function LoadRedirectMethods()
	{
		if (!$this->modredirect)
		{
			require_once(cms_join_path(dirname(__FILE__), 'module_support', 'modredirect.inc.php'));
			$this->modredirect = true;
		}
	}
	
	public function LoadMiscMethods()
	{
		if (!$this->modmisc)
		{
			require_once(cms_join_path(dirname(__FILE__), 'module_support', 'modmisc.inc.php'));
			$this->modmisc = true;
		}
	}


	/**
	 * ------------------------------------------------------------------
	 * Plugin Functions.
	 * ------------------------------------------------------------------
	 */

	/**
	 * Callback function for module plugins
	 * this function should not be overridden
	 */
	public function function_plugin($params,&$smarty)
	{
	  $params['module'] = $this->GetName();
	  return cms_module_plugin($params,$smarty);
	}

	/**
	 * Register a plugin to smarty with the
	 * name of the module.  This method should be called
	 * from the module constructor, or from the SetParameters
	 * method.
	 */
	public function RegisterModulePlugin($name = '', $plugin = 'function_plugin')
	{
		global $gCms;
		
		if ($name == '')
			$name = $this->GetName();

		$smarty = $gCms->GetSmarty();
		$smarty->register_function($name, array($this, $plugin));
	}

	/**
	 * ------------------------------------------------------------------
	 * Basic Functions.	 Name and Version MUST be overridden.
	 * ------------------------------------------------------------------
	 */

	/**
	 * Returns a sufficient about page for a module
	 */
	public function GetAbout()
	{
		$this->LoadMiscMethods();
		return cms_module_GetAbout($this);
	}

	/**
	 * Returns a sufficient help page for a module
	 * this function should not be overridden
	 */
	public function GetHelpPage()
	{
		$this->LoadMiscMethods();
		return cms_module_GetHelpPage($this);
	}

	/**
	 * Returns the name of the module
	 * @deprecated Deprecated. Use CmsModuleBase::get_name() instead.
	 */
	public function GetName()
	{
		return 'unset';
	}

    /**
     * ------------------------------------------------------------------
     * Basic Methods. get_name and get_version MUST be overridden.
     * ------------------------------------------------------------------
     */

    /**
     * Returns the name of the module
     */
    public function get_name()
	{
		return $this->GetName();
	}

	/**
	 * Returns the full path of the module directory.
	 */
	public function GetModulePath()
	{
		if (is_subclass_of($this, 'CMSModule'))
		{
		  $config = cms_config();
			return cms_join_path($config['root_path'], 'modules' , $this->GetName());
		}
		else
		{
			return dirname(__FILE__);
		}
	}

	/**
	 * Returns a translatable name of the module.  For modulues who's names can
	 * probably be translated into another language (like News)
	 */
	public function GetFriendlyName()
	{
		return $this->GetName();
	}

	/**
	 * Returns the version of the module
	 * @deprecated Deprecated. Use CmsModuleBase::get_version() instead.
	 */
	public function GetVersion()
	{
		return '0.0.0.1';
	}

    /**
     * Returns the version of the module
     */
    public function get_version()
	{
		return $this->GetVersion();
	}

	/**
	 * Returns the minimum version necessary to run this version of the module.
	 */
	public function MinimumCMSVersion()
	{
		global $CMS_VERSION;
		return $CMS_VERSION;
	}

	/**
	 * Returns the maximum version necessary to run this version of the module.
	 */
	public function MaximumCMSVersion()
	{
		global $CMS_VERSION;
		return $CMS_VERSION;
	}

	/**
	 * Returns the help for the module
	 *
	 * @param string Optional language that the admin is using.	 If that language
	 * is not defined, use en_US.
	 */
	public function GetHelp()
	{
		return '';
	}

	/**
	 * Returns XHTML that nees to go between the <head> tags
	 */
	public function GetHeaderHTML()
	{
		return '';
	}
	
	public function get_header_html($admin = true)
	{
		return $this->GetHeaderHTML();
	}

	/**
	 * Use this method to prevent the admin interface from outputting header, footer,
	 * theme, etc, so your module can output files directly to the administrator.
	 * Do this by returning true.
	 *
	 */
	public function SuppressAdminOutput(&$request)
	{
		return false;
	}
	
	public function suppress_admin_output(&$request)
	{
		return $this->SuppressAdminOutput($request);
	}

	/**
	 * Register a route to use for pretty url parsing
	 *
	 * @param string Route to register
	 * @param array Defaults for parameters that might not be included in the url
	 */
	public function RegisterRoute($routeregex, $defaults = array())
	{
		global $gCms;
		$route = new CmsRoute();
		$route->module = $this->GetName();
		$route->defaults = $defaults;
		$route->regex = $routeregex;
		$routes =& $gCms->variables['routes'];
		$routes[] =& $route;
	}

	/**
	 * Returns a list of parameters and their help strings in a hash.  This is generally
	 * used internally.
	 */
	public function GetParameters()
	{
	  if( count($this->params) == 1 && $this->params[0]['name'] == 'lang' )
	    {
	      // quick hack to load parameters if they are not already loaded.
	      $this->SetParameters();
	    }
	  return $this->params;
	}

	/**
	 * Setup your parameters here.  It doesn't have to be here, but it makes the
	 * code more legible.
	 */
	public function SetParameters()
	{
	}

	public function RestrictUnknownParams($flag = true)
	{
	  $this->restrict_unknown_params = $flag;
	}

	public function SetParameterType($param, $type)
	{
	  switch($type)
	    {
	    case CLEAN_INT:
	    case CLEAN_FLOAT:
	    case CLEAN_NONE:
	    case CLEAN_STRING:
	      $this->param_map[trim($param)] = $type;
	      break;
	    default:
	      trigger_error('Attempt to set invalid parameter type');
	      break;
	    }
	}

	public function CreateParameter($param, $defaultval='', $helpstring='', $optional=true)
	{
		//was: array_unshift(
		array_push($this->params, array(
			'name' => $param,
			'default' => $defaultval,
			'help' => $helpstring,
			'optional' => $optional
		));
	}

	/**
	 * Returns a short description of the module
	 *
	 * @param string Optional language that the admin is using.	 If that language
	 * is not defined, use en_US.
	 */
	public function GetDescription($lang = 'en_US')
	{
		return '';
	}

	/**
	 * Returns a description of what the admin link does.
	 *
	 * @param string Optional language that the admin is using.	 If that language
	 * is not defined, use en_US.
	 */
	public function GetAdminDescription()
	{
		return '';
	}

	/**
	 * Returns whether this module should only be loaded from the admin
	 */
	public function IsAdminOnly()
	{
		return false;
	}

	/**
	 * Returns the changelog for the module
	 */
	public function GetChangeLog()
	{
		return '';
	}

	/**
	 * Returns the name of the author
	 */
	public function GetAuthor()
	{
		return '';
	}

	/**
	 * Returns the email address of the author
	 */
	public function GetAuthorEmail()
	{
		return '';
	}

	/**
	 * ------------------------------------------------------------------
	 * Reference functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Returns the cms->config object as a reference
	 */
	public function & GetConfig()
	{
		global $gCms;
		$config = &$gCms->GetConfig();
		return $config;
	}

	/**
	 * Returns the cms->db object as a reference
	 */
	public function & GetDb()
	{
		global $gCms;
		$db = &$gCms->GetDb();
		return $db;
	}

	/**
	 * Returns the cms->variables as a reference
	 */
	public function & GetVariables()
	{
	  global $gCms;
	  return $gCms->variables;
	}

	/**
	 * ------------------------------------------------------------------
	 * Content Block Related Functions
	 * ------------------------------------------------------------------
	 */
	
	/**
	 * Get an input field for a specific content block type
	 */
	public function GetContentBlockInput($blockName,$value,$params,$adding = false)
	{
	  return FALSE;
	}

	public function GetContentBlockValue($blockName,$blockParams,$inputParams)
	{
	  return FALSE;
	}


	public function ValidateContentBlockValue($blockName,$value,$blockparams)
	{
	  return '';
	}

	/**
	 * Register a bulk content action
	 */
	public function RegisterBulkContentFunction($label,$action)
	{
	  bulkcontentoperations::register_function($label,$action,$this->GetName());
	}

	/**
	 * ------------------------------------------------------------------
	 * Content Type Related Functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Does this module support a custom content type?
	 */
	public function HasContentType()
	{
		return FALSE;
	}
	
	public function RegisterContentType($name, $file, $friendlyname = '')
	{
		global $gCms;
		$contenttypes =& $gCms->contenttypes;
		if (!isset($contenttypes[strtolower($name)]))
		{
			$obj = new CmsContentTypePlaceholder();
			$obj->type = strtolower($name);
			$obj->filename = $file;
			$obj->loaded = false;
			$obj->friendlyname = ($friendlyname != '' ? $friendlyname : $name);
			$contenttypes[strtolower($name)] =& $obj;
		}
	}

	/**
	 * Return an instance of the new content type
	 */
	public function GetContentTypeInstance()
	{
		return FALSE;
	}

	public function IsExclusive()
	{
		return FALSE;
	}

	/**
	 * ------------------------------------------------------------------
	 * Installation Related Functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Function that will get called as module is installed. This function should
	 * do any initialization functions including creating database tables. It
	 * should return a string message if there is a failure. Returning nothing (FALSE)
	 * will allow the install procedure to proceed.
	 */
	public function Install()
	{
		$filename = dirname(dirname(dirname(__FILE__))) . '/modules/'.$this->GetName().'/method.install.php';
		if (@is_file($filename))
		{
			{
				global $gCms;
				$db =& $gCms->GetDb();
				$config =& $gCms->GetConfig();
				$smarty =& $gCms->GetSmarty();

				include($filename);
			}
		}
		else
		{
			return FALSE;
		}
	}

	/**
	 * Display a message after a successful installation of the module.
	 */
	public function InstallPostMessage()
	{
		return FALSE;
	}

	/**
	 * Function that will get called as module is uninstalled. This function should
	 * remove any database tables that it uses and perform any other cleanup duties.
	 * It should return a string message if there is a failure. Returning nothing
	 * (FALSE) will allow the uninstall procedure to proceed.
	 */
	public function Uninstall()
	{
		$filename = dirname(dirname(dirname(__FILE__))) . '/modules/'.$this->GetName().'/method.uninstall.php';
		if (@is_file($filename))
		{
		  global $gCms;
		  $db =& $gCms->GetDb();
		  $config =& $gCms->GetConfig();
		  $smarty =& $gCms->GetSmarty();
		  
		  include($filename);
		}
		else
		{
			return FALSE;
		}
	}

	/**
	 * Display a message and a Yes/No dialog before doing an uninstall.	 Returning noting
	 * (FALSE) will go right to the uninstall.
	 */
	public function UninstallPreMessage()
	{
		return FALSE;
	}

	/**
	 * Display a message after a successful uninstall of the module.
	 */
	public function UninstallPostMessage()
	{
		return FALSE;
	}

	/**
	 * Function to perform any upgrade procedures. This is mostly used to for
	 * updating databsae tables, but can do other duties as well. It should
	 * return a string message if there is a failure. Returning nothing (FALSE)
	 * will allow the upgrade procedure to proceed. Upgrades should have a path
	 * so that they can be upgraded from more than one version back.  While not
	 * a requirement, it makes life easy for your users.
	 *
	 * @param string The version we are upgrading from
	 * @param string The version we are upgrading to
	 */
	public function Upgrade($oldversion, $newversion)
	{
		$filename = dirname(dirname(dirname(__FILE__))) . '/modules/'.$this->GetName().'/method.upgrade.php';
		if (@is_file($filename))
		{
			{
				global $gCms;
				$db =& $gCms->GetDb();
				$config =& $gCms->GetConfig();
				$smarty =& $gCms->GetSmarty();

				include($filename);
			}
		}
	}

	/**
	 * Display a message and a Yes/No dialog before doing an uninstall.	 Returning noting
	 * (FALSE) will go right to the uninstall.
	 */
	public function UpgradePostMessage()
	{
	  return FALSE;
	}

	/**
	 * Returns whether or not modules should be autoupgraded while upgrading
	 * CMS versions.  Generally only useful for modules included with the CMS
	 * base install, but there could be a situation down the road where we have
	 * different distributions with different modules included in them.	 Defaults
	 * to TRUE, as there is not many reasons to not allow it.
	 */
	public function AllowAutoInstall()
	{
		return TRUE;
	}

	/**
	 * Returns whether or not modules should be autoupgraded while upgrading
	 * CMS versions.  Generally only useful for modules included with the CMS
	 * base install, but there could be a situation down the road where we have
	 * different distributions with different modules included in them.	 Defaults
	 * to TRUE, as there is not many reasons to not allow it.
	 */
	public function AllowAutoUpgrade()
	{
		return TRUE;
	}

	/**
	 * Returns a list of dependencies and minimum versions that this module
	 * requires. It should return an hash, eg.
	 * return array('somemodule'=>'1.0', 'othermodule'=>'1.1');
	 */
	public function GetDependencies()
	{
		return array();
	}

	/**
	 * Checks to see if currently installed modules depend on this module.	This is
	 * used by the plugins.php page to make sure that a module can't be uninstalled
	 * before any modules depending on it are uninstalled first.
	 */
	public function CheckForDependents()
	{
		global $gCms;
		$db =& $gCms->GetDb();

		$result = false;

		$query = "SELECT child_module FROM ".cms_db_prefix()."module_deps WHERE parent_module = ?";
		$tmp = $db->GetOne($query,array($this->GetName()));
		if( $tmp ) 
		  {
		    $result = true;
		  }

		return $result;
	}


	/**
	 * Creates an xml data package from the module directory.
	 */
	public function CreateXMLPackage( &$message, &$filecount )
	{
		global $gCms;
		$modops =& $gCms->GetModuleOperations();
		return $modops->CreateXmlPackage($this, $message, $filecount);
	}


	/**
	 * Return true if there is an admin for the module.	 Returns false by
	 * default.
	 */
	public function HasAdmin()
	{
		return false;
	}

	/**
	 * Should we use output buffering in the admin for this module?
	 */
	public function HasAdminBuffering()
	{
		return true;
	}

	/**
	 * Returns which admin section this module belongs to.
	 * this is used to place the module in the appropriate admin navigation
	 * section. Valid options are currently:
	 *
	 * content, layout, files, usersgroups, extensions, preferences, admin
	 *
	 */
	public function GetAdminSection()
	{
		return 'extensions';
	}

	/**
	 * Returns true or false, depending on whether the user has the
	 * right permissions to see the module in their Admin menus.
	 *
	 * Defaults to true.
	 */
	public function VisibleToAdminUser()
	{
		return true;
	}

	/**
	 * Returns true if the module should be treated as a content module.
	 * Returns false by default.
	 */
	public function IsContentModule()
	{
		return false;
	}

	/**
	 * Returns true if the module should be treated as a plugin module (like
	 * {cms_module module='name'}.	Returns false by default.
	 */
	public function IsPluginModule()
	{
		return false;
	}

	/**
	 * Returns true if the module acts as a soap server
	 */
	public function IsSoapModule()
	{
		return false;
	}

	/**
	 * Returns true if the module may support lazy loading in the front end
	 */
	public function SupportsLazyLoading()
	{
	  return false;
	}


  /**
	 * ------------------------------------------------------------------
	 * Module capabilities, a new way of checking what a module can do
	 * ------------------------------------------------------------------
	 */
	
  /**
	 * Returns true if the modules thinks it has the capability specified
	 *
	 * @param an id specifying which capability to check for, could be "wysiwyg" etc.
	 * @param associative array further params to get more detailed info about the capabilities. Should be syncronized with other modules of same type
	 */
  public function HasCapability($capability, $params=array())
  {
    return false;
  }
	
	/**
	 * ------------------------------------------------------------------
	 * Syntax Highlighter Related Functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Returns true if this module should be treated as a Syntax Highlighting module. It
	 * returns false be default.
	 */
	public function IsSyntaxHighlighter()
	{
		return false;
	}
	
	/**
	 * Returns true if this SyntaxHighlighter should be considered active, eventhough it's
	 * not the choice of the user. Used for forcing a wysiwyg.
	 * returns false be default.
	 */
	public function SyntaxActive()
	{
		return $this->syntaxactive;
	}

	/**
	 * Returns content destined for the <form> tag.	 It's useful if javascript is
	 * needed for the onsubmit of the form.
	 */
	public function SyntaxPageForm()
	{
		return '';
	}

	/**
	 * This is a function that would be called before a form is submitted.
	 * Generally, a dropdown box or something similar that would force a submit
	 * of the form via javascript should put this in their onchange line as well
	 * so that the SyntaxHighlighter can do any cleanups before the actual form submission
	 * takes place.
	 */
	 public function SyntaxPageFormSubmit()
	 {
		return '';
	 }

	 /**
	  * Returns header code specific to this SyntaxHighlighter
	  *
	  * @param string The html-code of the page before replacing SyntaxHighlighter-stuff
	  */
	  public function SyntaxGenerateHeader($htmlresult='')
	  {
		return '';
	  }

	 /**
	  * Returns body code specific to this SyntaxHighlighter
	  */
	  public function SyntaxGenerateBody()
	  {
		return '';
	  }

	/**
	 * Returns the textarea specific for this WYSIWYG.
	 *
	 * @param string HTML name of the textarea
	 * @param string the language which the content should be highlighted as
	 * @param int Number of columns wide that the textarea should be
	 * @param int Number of rows long that the textarea should be
	 * @param string Encoding of the content
	 * @param string Content to show in the textarea
	 * @param string Stylesheet for content, if available
	 */
	  public function SyntaxTextarea($name='textarea',$syntax='html',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='',$addtext='')
	{
		$this->syntaxactive=true;
		return '<textarea name="'.$name.'" cols="'.$columns.'" rows="'.$rows.'" '.$addtext.' >'.$content.'</textarea>';
	}

	/**
	 * Returns whether or not this module should show in any module lists generated by a WYSIWYG.
	 */
	public function ShowInSyntaxList()
	{
		return true;
	}
	
	
	
	/**
	 * ------------------------------------------------------------------
	 * WYSIWYG Related Functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Returns true if this module should be treated as a WYSIWYG module. It
	 * returns false be default.
	 */
	public function IsWYSIWYG()
	{
		return false;
	}

	/**
	 * Returns true if this wysiwyg should be considered active, eventhough it's
	 * not the choice of the user. Used for forcing a wysiwyg.
	 * returns false be default.
	 */
	public function WYSIWYGActive()
	{
		return $this->wysiwygactive;
	}

	/**
	 * Returns content destined for the <form> tag.	 It's useful if javascript is
	 * needed for the onsubmit of the form.
	 */
	public function WYSIWYGPageForm()
	{
		return '';
	}

	/**
	 * This is a function that would be called before a form is submitted.
	 * Generally, a dropdown box or something similar that would force a submit
	 * of the form via javascript should put this in their onchange line as well
	 * so that the WYSIWYG can do any cleanups before the actual form submission
	 * takes place.
	 */
	 public function WYSIWYGPageFormSubmit()
	 {
		return '';
	 }

	 /**
	  * Returns header code specific to this WYSIWYG
	  *
	  * @param string The html-code of the page before replacing WYSIWYG-stuff
	  */
	  public function WYSIWYGGenerateHeader($htmlresult='')
	  {
		return '';
	  }

	 /**
	  * Returns body code specific to this WYSIWYG
	  */
	  public function WYSIWYGGenerateBody()
	  {
		return '';
	  }

	/**
	 * Returns the textarea specific for this WYSIWYG.
	 *
	 * @param string HTML name of the textarea
	 * @param int Number of columns wide that the textarea should be
	 * @param int Number of rows long that the textarea should be
	 * @param string Encoding of the content
	 * @param string Content to show in the textarea
	 * @param string Stylesheet for content, if available
	 */
	  public function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='',$addtext='')
	{
		$this->wysiwygactive=true;
		return '<textarea name="'.$name.'" cols="'.$columns.'" rows="'.$rows.'" '.$addtext.' >'.$content.'</textarea>';
	}

	/**
	 * Returns whether or not this module should show in any module lists generated by a WYSIWYG.
	 */
	public function ShowInWYSIWYG()
	{
		return true;
	}

	/**
	 * ------------------------------------------------------------------
	 * Navigation Related Functions
	 * ------------------------------------------------------------------
	 */

	/**
	 * Used for navigation between "pages" of a module.	 Forms and links should
	 * pass an action with them so that the module will know what to do next.
	 * By default, DoAction will be passed 'default' and 'defaultadmin',
	 * depending on where the module was called from.  If being used as a module
	 * or content type, 'default' will be passed.  If the module was selected
	 * from the list on the admin menu, then 'defaultadmin' will be passed.
	 *
	 * @param string Name of the action to perform
	 * @param string The ID of the module
	 * @param string The parameters targeted for this module
	 */
	public function DoAction($name, $id, $params, $returnid='')
	{
		$this->smarty->assign($this->GetName(),$this);
		switch ($name)
		{
			case '':break;
			case 'admin_templates':
				$this->admin_templates($id,$params,$returnid='');
				break;
			case 'edit_template':
				$this->edit_template($id,$params,$returnid='');
				break;
			default:
				$filename = dirname(dirname(dirname(__FILE__))) . '/modules/'.$this->GetName().'/action.' . $name . '.php';
				if (@is_file($filename))
				{
					global $gCms;
					$db =& $gCms->GetDb();
					$config =& $gCms->GetConfig();
					$smarty = cms_smarty();

					include($filename);
				}
				break;
		}
	}

	public function DoActionBase($name, $id, $params, $returnid='')
	{
	  if( $returnid != '' )
	    {
	      if( !$this->restrict_unknown_params && 
		  get_site_preference('allowparamcheckwarnings',0))
		{
		  trigger_error('WARNING: '.$this->GetName().' is not properly cleaning input params.',E_USER_WARNING);
		}
	      // used to try to avert XSS flaws, this will
	      // clean as many parameters as possible according
	      // to a map specified with the SetParameterType metods.
	      $params = cleanParamHash($this->GetName(),$params,$this->param_map,
				       !$this->restrict_unknown_params);
	    }

	  if (isset($params['lang']))
	    {
	      $this->curlang = $params['lang'];
	      $this->langhash = array();
	    }
	  if( !isset($params['action']) )
	    {
	      $params['action'] = $name;
	    }
	  $params['action'] = cms_htmlentities($params['action']);
	  $returnid = cms_htmlentities($returnid);
	  $id = cms_htmlentities($id);
	  $name = cms_htmlentities($name);
	  $output = $this->DoAction($name, $id, $params, $returnid);

	  if( isset($params['assign']) )
	    {
	      global $gCms;
	      $smarty =& $gCms->GetSmarty();
	      $smarty->assign(cms_htmlentities($params['assign']),$output);
	      return;
	    }
	  return $output;
	}


  /**
	 * Returns the xhtml equivalent of a tooltip help link.
	 *
	 * @param string The help text to be shown on mouse over
	 * @param string The text to be shown as the link, default to a simple question mark
   * @param string Forces another width of the popupbox than the one set in admin css
   * @param string An alternative classname for the a-link of the tooltip
	 */
  
  public function CreateTooltip($helptext, $linktext="?", $forcewidth="", $classname="admin-tooltip admin-tooltip-box", $href="")
  {
    $result='<a class="'.$classname.'"';
    if ($href!='') $result.=' href="'.$href.'"';
    $result.='>'.$linktext.'<span';
    if ($forcewidth!="" && is_numeric($forcewidth)) $result.=' style="width:'.$forcewidth.'px"';
    $result.='>'.htmlentities($helptext)."</span></a>\n";
    return $result;
  }

  /**
	 * Returns the xhtml equivalent of a tooltip-enabled href link	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the link is clicked
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string The text that will have to be clicked to follow the link
   * @param string The helptext to be shown as tooltip-popup
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 */

  public function CreateTooltipLink($id, $action, $returnid, $contents, $tooltiptext, $params=array())
  {
    return $this->CreateTooltip($tooltiptext,$contents,"","admin-tooltip",$this->CreateLink($id,$action,$returnid,"admin-tooltip",$params,"",true) );
  }

   /**
	 * Returns the xhtml equivalent of an fieldset and legend.  This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution (not really used yet, but might be later)
	 * @param string The html name of the textbox (not really used yet, but might be later on)
	 * @param string The legend_text for this fieldset, if applicaple
	 * @param string Any additional text that should be added into the tag when rendered
	 * @param string Any additional text that should be added into the legend tag when rendered
	 */
	public function CreateFieldsetStart( $id, $name, $legend_text='', $addtext='', $addtext_legend='' )
	{
		$this->LoadFormMethods();
		return cms_module_CreateFieldsetStart($this, $id, $name, $legend_text, $addtext, $addtext_legend);
	}

	/**
	* Returns the end of the fieldset in a  form.  This is basically just a wrapper around </form>, but
	* could be extended later on down the road.  It's here mainly for consistency.
	*/
	public function CreateFieldsetEnd()
	{
		return '</fieldset>'."\n";
	}


	/**
	 * Returns the start of a module form, optimized for frontend use
	 *
	 * @param string The id given to the module on execution
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string The action that this form should do when the form is submitted
	 * @param string Method to use for the form tag.  Defaults to 'post'
	 * @param string Optional enctype to use, Good for situations where files are being uploaded
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 * @param string Text to append to the end of the id and name of the form
	 * @param array Extra parameters to pass along when the form is submitted
	 */
	public function CreateFrontendFormStart($id,$returnid,$action='default',$method='post',
					 $enctype='',$inline=true,$idsuffix='',$params=array())
	{
	  return $this->CreateFormStart($id,$action,$returnid,$method,$enctype,$inline,$idsuffix,$params);
	}


	/**
	 * Returns the start of a module form
	 *
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the form is submitted
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string Method to use for the form tag.  Defaults to 'post'
	 * @param string Optional enctype to use, Good for situations where files are being uploaded
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 * @param string Text to append to the end of the id and name of the form
	 * @param array Extra parameters to pass along when the form is submitted
	 * @param string Text to append to the <form>-statement, for instanse for javascript-validation code
	 */
	public function CreateFormStart($id, $action='default', $returnid='', $method='post', $enctype='', $inline=false, $idsuffix='', $params = array(), $extra='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateFormStart($this, $id, $action, $returnid, $method, $enctype, $inline, $idsuffix, $params, $extra);
	}

	/**
	 * Returns the end of the a module form.  This is basically just a wrapper around </form>, but
	 * could be extended later on down the road.  It's here mainly for consistency.
	 */
	public function CreateFormEnd()
	{
		return '</form>'."\n";
	}

	/**
	 * Returns the xhtml equivalent of an input textbox.  This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the textbox
	 * @param string The predefined value of the textbox, if any
	 * @param string The number of columns wide the textbox should be displayed
	 * @param string The maximum number of characters that should be allowed to be entered
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputText($id, $name, $value='', $size='10', $maxlength='255', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputText($this, $id, $name, $value, $size, $maxlength, $addttext);
	}

        /**
         * Returns the xhtml equivalent of an label for input field.  This is basically a nice little wrapper
         * to make sure that id's are placed in names and also that it's xhtml compliant.
         *
         * @param string The id given to the module on execution
         * @param string The html name of the input field this label is associated to
         * @param string The text in the label
         * @param string Any additional text that should be added into the tag when rendered
         */
        public function CreateLabelForInput($id, $name, $labeltext='', $addttext='')
        {
	        $this->LoadFormMethods();
	        return cms_module_CreateLabelForInput($this, $id, $name, $labeltext, $addttext);
        }

	/**
	 * Returns the xhtml equivalent of an input textbox with label.  This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the textbox
	 * @param string The predefined value of the textbox, if any
	 * @param string The number of columns wide the textbox should be displayed
	 * @param string The maximum number of characters that should be allowed to be entered
	 * @param string Any additional text that should be added into the tag when rendered
	 * @param string The text for label 
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputTextWithLabel($id, $name, $value='', $size='10', $maxlength='255', $addttext='', $label='', $labeladdtext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputTextWithLabel($this, $id, $name, $value, $size, $maxlength, $addttext, $label, $labeladdtext);
	}

	/**
	 * Returns the xhtml equivalent of a file-selector field.  This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the textbox
	 * @param string The MIME-type to be accepted, default is all
	 * @param string The number of columns wide the textbox should be displayed
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputFile($id, $name, $accept='', $size='10',$addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputFile($this, $id, $name, $accept, $size, $addttext);
	}

	/**
	 * Returns the xhtml equivalent of an input password-box.  This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the textbox
	 * @param string The predefined value of the textbox, if any
	 * @param string The number of columns wide the textbox should be displayed
	 * @param string The maximum number of characters that should be allowed to be entered
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputPassword($id, $name, $value='', $size='10', $maxlength='255', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputPassword($this, $id, $name, $value, $size, $maxlength, $addttext);
	}

	/**
	 * Returns the xhtml equivalent of a hidden field.	This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the hidden field
	 * @param string The predefined value of the field, if any
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputHidden($id, $name, $value='', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputHidden($this, $id, $name, $value, $addttext);
	}

	/**
	 * Returns the xhtml equivalent of a checkbox.	This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the checkbox
	 * @param string The value returned from the input if selected
	 * @param string The current value. If equal to $value the checkbox is selected 
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputCheckbox($id, $name, $value='', $selectedvalue='', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputCheckbox($this, $id, $name, $value, $selectedvalue, $addttext);
	}


	/**
	 * Returns the xhtml equivalent of a submit button.	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the button
	 * @param string The predefined value of the button, if any
	 * @param string Any additional text that should be added into the tag when rendered
	 * @param string Use an image instead of a regular button
	 */
	public function CreateInputSubmit($id, $name, $value='', $addttext='', $image='', $confirmtext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputSubmit($this, $id, $name, $value, $addttext, $image, $confirmtext);
	}

	/**
	 * Returns the xhtml equivalent of a reset button.	This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the button
	 * @param string The predefined value of the button, if any
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputReset($id, $name, $value='Reset', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputReset($this, $id, $name, $value, $addttext);
	 }

	/**
	 * Returns the xhtml equivalent of a file upload input.	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the input
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateFileUploadInput($id, $name, $addttext='',$size='10', $maxlength='255')
	{
		$this->LoadFormMethods();
		return cms_module_CreateFileUploadInput($this, $id, $name, $addttext, $size, $maxlength);
	}


	/**
	 * Returns the xhtml equivalent of a dropdown list.	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it is xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the dropdown list
	 * @param string An array of items to put into the dropdown list... they should be $key=>$value pairs
	 * @param string The default selected index of the dropdown list.  Setting to -1 will result in the first choice being selected
	 * @param string The default selected value of the dropdown list.  Setting to '' will result in the first choice being selected
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateInputDropdown($id, $name, $items, $selectedindex=-1, $selectedvalue='', $addttext='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputDropdown($this, $id, $name, $items, $selectedindex, $selectedvalue, $addttext);
	}

	/**
	 * Returns the xhtml equivalent of a multi-select list.	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it is xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the select list
	 * @param string An array of items to put into the list... they should be $key=>$value pairs
	 * @param string An array of items in the list that should default to selected.
	 * @param string The number of rows to be visible in the list (before scrolling).
	 * @param string Any additional text that should be added into the tag when rendered
	 * @param boolean indicates wether multiple selections are allowed (defaults to true)
	 */
	public function CreateInputSelectList($id, $name, $items, $selecteditems=array(), $size=3, $addttext='', $multiple = true)
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputSelectList($this, $id, $name, $items, $selecteditems, $size, $addttext, $multiple);
	}

	/**
	 * Returns the xhtml equivalent of a set of radio buttons.	This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it is xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The html name of the radio group
	 * @param string An array of items to create as radio buttons... they should be $key=>$value pairs
	 * @param string The default selected index of the radio group.	 Setting to -1 will result in the first choice being selected
	 * @param string Any additional text that should be added into the tag when rendered
	 * @param string A delimiter to throw between each radio button, e.g., a <br /> tag or something for formatting
	 */
	public function CreateInputRadioGroup($id, $name, $items, $selectedvalue='', $addttext='', $delimiter='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateInputRadioGroup($this, $id, $name, $items, $selectedvalue, $addttext, $delimiter);
	}

	/**
	 * Returns the xhtml equivalent of a textarea.	Also takes WYSIWYG preference into consideration if it's called from the admin side.
	 *
	 * @param bool Should we try to create a WYSIWYG for this textarea?
	 * @param string The id given to the module on execution
	 * @param string The text to display in the textarea's content
	 * @param string The html name of the textarea
	 * @param string The CSS class to associate this textarea to
	 * @param string The html id to give to this textarea
	 * @param string The encoding to use for the content
	 * @param string The text of the stylesheet associated to this content.	 Only used for certain WYSIWYGs
	 * @param string The number of characters wide (columns) the resulting textarea should be
	 * @param string The number of characters high (rows) the resulting textarea should be
	 * @param string The wysiwyg-system to be forced even if the user has chosen another one
	 * @param string The language the content should be syntaxhightlighted as
	 */
	public function CreateTextArea($enablewysiwyg, $id, $text, $name, $classname='', $htmlid='', $encoding='', $stylesheet='', $cols='80', $rows='15',$forcewysiwyg='',$wantedsyntax='',$addtext='')
	{
	  return create_textarea($enablewysiwyg, $text, $id.$name, $classname, $htmlid, $encoding, $stylesheet, $cols, $rows,$forcewysiwyg,$wantedsyntax,$addtext);
	}


	/**
	 * Returns the xhtml equivalent of a textarea.	Also takes Syntax hilighter preference 
         * into consideration if it's called from the admin side.
	 *
	 * @param string The id given to the module on execution
	 * @param string The text to display in the textarea's content
	 * @param string The html name of the textarea
	 * @param string The CSS class to associate this textarea to
	 * @param string The html id to give to this textarea
	 * @param string The encoding to use for the content
	 * @param string The text of the stylesheet associated to this content.	 Only used for certain WYSIWYGs
	 * @param string The number of characters wide (columns) the resulting textarea should be
	 * @param string The number of characters high (rows) the resulting textarea should be
	 * @param string Additional text for the text area tag.
	 */
	public function CreateSyntaxArea($id,$text,$name,$classname='',$htmlid='',$encoding='',
				  $stylesheet='',$cols='80',$rows='15',$addtext='')
	{
	  return create_textarea(false,$text,$id.$name,$classname,$htmlid, $encoding, $stylesheet,
				 $cols,$rows,'','html',$addtext);
	}

	/**
	 * Returns the xhtml equivalent of an href link	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string The action that this form should do when the link is clicked
	 * @param string The text that will have to be clicked to follow the link
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 * @param string Text to display in a javascript warning box.  If they click no, the link is not followed by the browser.
	 * @param boolean A flag to determine if only the href section should be returned
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateFrontendLink( $id, $returnid, $action, $contents='', $params=array(), $warn_message='',
					 $onlyhref=false, $inline=true, $addtext='', $targetcontentonly=false, $prettyurl='' )
	{
	  return $this->CreateLink( $id, $action, $returnid, $contents, $params, $warn_message, $onlyhref,
					$inline, $addtext, $targetcontentonly, $prettyurl );
	}

	/**
	 * Returns the xhtml equivalent of an href link	 This is basically a nice little wrapper
	 * to make sure that id's are placed in names and also that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the link is clicked
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string The text that will have to be clicked to follow the link
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 * @param string Text to display in a javascript warning box.  If they click no, the link is not followed by the browser.
	 * @param boolean A flag to determine if only the href section should be returned
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 * @param string Any additional text that should be added into the tag when rendered
	 */
	public function CreateLink($id, $action, $returnid='', $contents='', $params=array(), $warn_message='', $onlyhref=false, $inline=false, $addttext='', $targetcontentonly=false, $prettyurl='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateLink($this, $id, $action, $returnid, $contents, $params, $warn_message, $onlyhref, $inline, $addttext, $targetcontentonly, $prettyurl);
	}

	public function CreateURL($id,$action,$returnid,$params=array(),$inline=false,$prettyurl='')
	{
	  return $this->CreateLink($id,$action,$returnid,'',$params,'',true,$inline,'',false,$prettyurl);
	}

	/**
	* Returns the xhtml equivalent of an href link for content links.	This is basically a nice
	* little wrapper to make sure that we go back to where we want and that it's xhtml complient
	*
	* @param string the page id of the page we want to direct to
	*/
	public function CreateContentLink($pageid, $contents='')
	{
		$this->LoadFormMethods();
		return cms_module_CreateContentLink($this, $pageid, $contents);
	}


	/**
	 * Returns the xhtml equivalent of an href link for Content links.	This is basically a nice little wrapper
	 * to make sure that we go back to where we want to and that it's xhtml compliant.
	 *
	 * @param string The id given to the module on execution
	 * @param string The id to return to when the module is finished it's task
	 * @param string The text that will have to be clicked to follow the link
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 * @param boolean A flag to determine if only the href section should be returned
	 */
	public function CreateReturnLink($id, $returnid, $contents='', $params=array(), $onlyhref=false)
	{
		$this->LoadFormMethods();
		return cms_module_CreateReturnLink($this, $id, $returnid, $contents, $params, $onlyhref);
	}


	/**
	 * Redirects the user to another action of the module.
	 * This function is optimized for frontend use.
	 *
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the form is submitted
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 */
	public function RedirectForFrontEnd($id, $returnid, $action, $params = array(), $inline = true )
	{
	  return $this->Redirect($id, $action, $returnid, $params, $inline );
	}

	/**
	 * Redirects the user to another action of the module.
	 *
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the form is submitted
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string An array of params that should be inlucded in the URL of the link.	 These should be in a $key=>$value format.
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 */
	public function Redirect($id, $action, $returnid='', $params=array(), $inline=false)
	{
		$this->LoadRedirectMethods();
		return cms_module_Redirect($this, $id, $action, $returnid, $params, $inline);
	}

	/**
	 * Redirects to an admin page
	 * @param string php script to redirect to
	 * @param array  optional array of url parameters
	 */
	public function RedirectToAdmin($page,$params = array())
	{
		$this->LoadRedirectMethods();
		return cms_module_RedirectToAdmin($this,$page,$params);
	}

	/**
	 * Redirects the user to a content page outside of the module.	The passed around returnid is
	 * frequently used for this so that the user will return back to the page from which they first
	 * entered the module.
	 *
	 * @param string Content id to redirect to.
	 */
	public function RedirectContent($id)
	{
	  redirect_to_alias($id);
	}

	/**
	 * ------------------------------------------------------------------
	 * Intermodule Functions
	 * ------------------------------------------------------------------
	 */

	public static function GetModuleInstance($module)
	{
		return CmsModuleLoader::get_module_class($module);
	}

  /**
	 * Returns an array of modulenames with the specified capability
	 * and which are installed and enabled, of course
	 *
   * @param an id specifying which capability to check for, could be "wysiwyg" etc.
	 * @param associative array further params to get more detailed info about the capabilities. Should be syncronized with other modules of same type
	*/
  public function GetModulesWithCapability($capability, $params=array())
	{
		global $gCms;
    $result=array();
    foreach ($gCms->modules as $module=>$values)
    {
		  if ($gCms->modules[$module]['installed'] == true &&
			  $gCms->modules[$module]['active'] == true &&
        $gCms->modules[$module]['object']->HasCapability($capability,$params))
		  {
			  $result[]=$module;
		  }
    }
    return $result;
	}

  /**
   * ------------------------------------------------------------------
   * Language Functions
   * ------------------------------------------------------------------
   */
  
  /**
   * Sets the current langauge
   */
  public function SetModuleLanguage($lang = '')
  {
    if( $lang == '' )
      {
	$lang = $this->DefaultLanguage();
      }
    $this->curlang = $lang;
  }

  /**
   * Gets the current language
   */
  public function GetModuleLanguage()
  {
    return $this->curlang;
  }

	/**
	 * Sets the default language (usually en_US) for the module.  There
	 * should be at least a language file for this language if the Lang()
	 * function is used at all.
	 */
	public function DefaultLanguage()
	{
		return 'en_US';
	}

	/**
	 * Returns the corresponding translated string for the id given.
	 *
	 * @param string Id of the string to lookup and return
	 * @param array Corresponding params for string that require replacement.
	 *		  These params use the vsprintf command and it's style of replacement.
	 */
	public function Lang()
	{
		$this->LoadLangMethods();

		//Push $this onto front of array
		$args = func_get_args();
		array_unshift($args,'');
		$args[0] =& $this;

		return call_user_func_array('cms_module_Lang', $args);
	}

	/**
	 * ------------------------------------------------------------------
	 * Template/Smarty Functions
	 * ------------------------------------------------------------------
	 */

	public function ListTemplates($modulename = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_ListTemplates($this, $modulename);
	}

	/**
	 * Returns a database saved template.  This should be used for admin functions only, as it doesn't
	 * follow any smarty caching rules.
	 */
	public function GetTemplate($tpl_name, $modulename = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_GetTemplate($this, $tpl_name, $modulename);
	}

	/**
	 * Returns contents of the template that resides in modules/ModuleName/templates/{template_name}.tpl
	 * Code adapted from the Guestbook module
	 */
	public function GetTemplateFromFile($template_name)
	{
		$this->LoadTemplateMethods();
		return cms_module_GetTemplateFromFile($this, $template_name);
	}

	public function SetTemplate($tpl_name, $content, $modulename = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_SetTemplate($this, $tpl_name, $content, $modulename);
	}

	public function DeleteTemplate($tpl_name = '', $modulename = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_DeleteTemplate($this, $tpl_name, $modulename);
	}

	public function IsFileTemplateCached($tpl_name, $designation = '', $timestamp = '', $cacheid = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_IsFileTemplateCached($this, $tpl_name, $designation, $timestamp, $cacheid);
	}

	public function ProcessTemplate($tpl_name, $designation = '', $cache = false, $cacheid = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_ProcessTemplate($this, $tpl_name, $designation, $cache = false, $cacheid);
	}

	public function IsDatabaseTemplateCached($tpl_name, $designation = '', $timestamp = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_IsDatabaseTemplateCached($this, $tpl_name, $designation, $timestamp);
	}

	/**
	 * Given a template in a variable, this method processes it through smarty
	 * note, there is no caching involved.
	 */
	public function ProcessTemplateFromData( $data )
	{
		$this->LoadTemplateMethods();
		return cms_module_ProcessTemplateFromData($this, $data);
	}

	public function ProcessTemplateFromDatabase($tpl_name, $designation = '', $cache = false, $modulename = '')
	{
		$this->LoadTemplateMethods();
		return cms_module_ProcessTemplateFromDatabase($this, $tpl_name, $designation, $cache, $modulename);
	}

	public function ListUserTags()
	{
		global $gCms;
		$usertagops =& $gCms->GetUserTagOperations();
		return $usertagops->ListUserTags();
	}

	public function CallUserTag($name, $params = array())
	{
		global $gCms;
		$usertagops =& $gCms->GetUserTagOperations();
		return $usertagops->CallUserTag($name, $params);
	}

    /**
     * Creates an Admin List of Module Templates for editing
     * @param id - Module actionid
	 * @param params - List of parameters from action
	 * @param returnid - The returnid
     * ------------------------------------------------------------------
     */

    public function admin_templates($id, $params, $returnid='')
    {
		if( !$this->CheckPermission('Modify Templates') )
		{
			die('permission denied');
		}
		
		if ( $params['select'] == 'all' )
		{
			$parms = array();
			$parms[CMS_SECURE_PARAM_NAME] = $params[CMS_SECURE_PARAM_NAME];
			$parms['select'] = $params['select'];
			$parms['action'] = 'admin_templates';
			$modulelist = CmsModuleTemplate::get_modules();
			echo '<form name="module_select" method="post">';
			echo '<input type=hidden name="id" value="'.$id.'"/>';
			foreach ($parms as $key=>$one)
			{
				echo '<input type=hidden name="'.$key.'" value="'.$one.'"/>';
				echo '<input type=hidden name="'.$id.$key.'" value="'.$one.'"/>';
			}
			echo '<select name="module" onchange="document.module_select.submit();">';
			echo '<option value="">Select a module:</option>';
			foreach ($modulelist as $modulename)
			{
				echo '<option value="'.$modulename.'">'.$modulename.'</option>';
			}
			echo '</select>';
			echo '</form>';
		}

		$this->mActiveSubTab = array();

		$module_templates = $this->list_templates();
		if ($params['errors'])
		{
			echo '<div class="pageerrorcontainer"><ul class="pageerror"><li>'.$params['errors'].'</li></ul></div>';
		}
		if ($params['message'])
		{
			echo '<div class="pagemcontainer"><p class="pagemessage">'.$params['message']."</p></div>";
		}

		
		echo '<div class="pageoverflow" style="text-align: right; width: 80%;"><a href="'.
		$this->CreateLink($id,'defaultadmin',$returnid,
		       $this->Lang('back'),array(),'',true).'" title="'.$this->Lang('back').'">'.$this->Lang('back').'</a></div><br/>';

		$sorted_templates = array();
		foreach ($module_templates as $template)
		{
			$sorted_templates[$template->params['template_type']][] = $template->params;
		}
		
		echo $this->StartTabHeaders();
		foreach ($sorted_templates as $type=>$templates)
		{
			echo $this->SetTabHeader($type,	 $this->Lang($type.'_templates'));
			$sorted_templates[$type][] = array('name'=>'New');
		}
		echo $this->EndTabHeaders();

		echo $this->StartTabContent();
		foreach ($sorted_templates as $type=>$templates)
		{
			echo $this->StartTab($type);
			echo '<div id="page_tabs">';
			foreach ($templates as $one)
			{
				echo '<div onclick="jQuery(\'.sub_'.$type.'_content\').hide();jQuery(\'#'.$type.$one['name'].'\').show();">'.$one['name'].'</div>';
			}
			echo '</div>';
			echo '<div id="page_content">';
			foreach ($templates as $one)
			{
				if (empty($this->mActiveSubTab[$type])) $this->mActiveSubTab[$type] = $type.$one['name'];
				if ( $this->mActiveSubTab[$type] == $type.$one['name'] )
				{
					echo '<div class="sub_'.$type.'_content" id="'.$type.$one['name'].'">';
				}
				else
				{
					echo '<div class="sub_'.$type.'_content" id="'.$type.$one['name'].'" style="display:none;">';
				}
				echo $this->CreateFormStart ($id, 'edit_template',$returnid,'post','',
						    false, '', $params);
				if ( $one['name'] == 'New')
				{
					$name = $this->CreateInputText ($id, 'template', '', '15','150');
				}
				else
				{
				    $name = $this->CreateInputHidden($id, 'template', $one['name'] ).$one['name'];
				}
				echo $this->CreateInputHidden($id, 'template_type', $type );
				echo '<div class="pageoverflow"><p class="pagetext">'.$this->Lang('prompt_templatename').':</p>
						<p class="pageinput">'.$name.' '.$this->CreateInputCheckbox ($id,'defaulttemplate',true,$one['default']).' '.$this->Lang('default_template').'</p></div>';
				echo '<div class="pageoverflow"><p class="pagetext">'.$this->Lang('prompt_template').':</p><p class="pageinput">';
				echo $this->CreateSyntaxArea($id,$one['content'],'templatecontent');
				echo '</p></div><div class="pageoverflow"><p class="pagetext">&nbsp;</p><p class="pageinput">';
				echo $this->CreateInputSubmit ($id, 'submitbutton', $this->Lang('submit'));
				echo $this->CreateInputSubmit ($id, 'cancel', $this->Lang('cancel'));
				if ( $one['name'] != 'New')
				{
					echo $this->CreateInputSubmit ($id, 'deletebutton', $this->Lang('delete'));
				}
				echo $this->CreateInputSubmit ($id, 'applybutton', $this->Lang('apply')).'</p></div>';
				echo $this->CreateFormEnd();
				echo '</div>';	
			}
			echo '</div>';
			echo $this->EndTab();
		}
		echo $this->EndTabContent();

    }

    /**
     * Saves Module Templates form return from CmsModule::admin_templates
     * @param id - Module actionid
	 * @param params - List of parameters from action
	 * @param returnid - The returnid
     * ------------------------------------------------------------------
     */

    public function edit_template($id, $params, $returnid='')
	{
		if( isset( $params['cancel'] ) )
		  {
			$this->Redirect($id,'defaultadmin');
		  }
		if( empty( $params['template'] ) )
		  {
			$params['errors'] = $this->Lang('error_insufficientparams');
			$this->admin_templates($id,$params,$returnid);
			return;
		  }
		if( empty( $params['template_type'] ) )
		  {
			$params['errors'] = $this->Lang('error_insufficientparams');
			$this->admin_templates($id,$params,$returnid);
			return;
		  }
		if( isset( $params['deletebutton'] ) )
		  {
			if ( $this->delete_template($params['template_type'],$params['template']) )
			{
				$params['message'] = $this->Lang('template_deleted');
			}
			$this->admin_templates($id,$params,$returnid);
			return;
		  }
		if( empty( $params['templatecontent'] ) )
		  {
			$params['errors'] = $this->Lang('error_insufficientparams');
			$this->admin_templates($id,$params,$returnid);
			return;
		  }
		if ( $this->set_template($params['template_type'],$params['template'],$params['templatecontent'],$params['defaulttemplate']) )
		{
			$params['message'] = $this->Lang($params['template_type'].'_template_updated'); 
		}
		if( isset( $params['applybutton'] ) )
		  {
			$this->admin_templates($id,$params,$returnid);
			return;
		  }
		if( isset( $params['submitbutton'] ) )
		  {
			$this->Redirect($id,'defaultadmin');
			return;
		  }
	}
	/**
	 * ------------------------------------------------------------------
	 * Other Functions
	 * ------------------------------------------------------------------
	 */

	 /**
	  *
	  * Module can spit out extra CSS for the admin side
	  *
	  */
	public function AdminStyle()
	{
	  return '';
	}

	/**
	 * Set the content-type header.
	 *
	 * @param string Value to set the content-type header too
	 */
	public function SetContentType($contenttype)
	{
		$variables = &$this->cms->variables;
		$variables['content-type'] = $contenttype;
	}

	/**
	 * Put an event into the audit (admin) log.	 This should be
	 * done on most admin events for consistency.
	 */
	public function Audit($itemid, $itemname, $action)
	{
		#$userid = get_userid();
		#$username = $_SESSION["cms_admin_username"];
		audit($itemid,$itemname,$action);
	}

	/**
	 * Create's a new permission for use by the module.
	 *
	 * @param string Name of the permission to create
	 * @param string Description of the permission
	 */
	public function CreatePermission($permission_name, $permission_text)
	{
		global $gCms;
		$db =& $gCms->GetDB();

		$query = "SELECT permission_id FROM ".cms_db_prefix()."permissions WHERE permission_name = ?";
		$count = $db->GetOne($query, array($permission_name));

		if (intval($count) == 0)
		{
			$time = $db->DBTimeStamp(time());
			$query = "INSERT INTO ".cms_db_prefix()."permissions (permission_name, permission_text, create_date, modified_date) VALUES (?,?,".$time.",".$time.")";
			$db->Execute($query, array($permission_name, $permission_text));
		}
	}

	/**
	 * Checks a permission against the currently logged in user.
	 *
	 * @param string The name of the permission to check against the current user
	 */
	public function CheckPermission($permission_name)
	{
		$userid = get_userid(false);
		return check_permission($userid, $permission_name);
	}

	/**
	 * Removes a permission from the system.  If recreated, the
	 * permission would have to be set to all groups again.
	 *
	 * @param string The name of the permission to remove
	 */
	public function RemovePermission($permission_name)
	{
	  cms_mapi_remove_permission($permission_name);
	}

	/**
	 * Returns a module preference if it exists.
	 *
	 * @param string The name of the preference to check
	 * @param string The default value, just in case it doesn't exist
	 */
	public function GetPreference($preference_name, $defaultvalue='')
	{
		return get_site_preference($this->GetName() . "_mapi_pref_" . $preference_name, $defaultvalue);
	}

	/**
	 * Sets a module preference.
	 *
	 * @param string The name of the preference to set
	 * @param string The value to set it to
	 */
	public function SetPreference($preference_name, $value)
	{
	  return set_site_preference($this->GetName() . "_mapi_pref_" . $preference_name, $value);
	}

	/**
	 * Removes a module preference.  If no preference name
	 * is specified, removes all module preferences.
	 *
	 * @param string The name of the preference to remove
	 */
	public function RemovePreference($preference_name='')
	{
	  if( $preference_name == '' )
	    {
	      return remove_site_preference($this->GetName()."_mapi_pref_",true);
	    }
	  return remove_site_preference($this->GetName() . "_mapi_pref_" . $preference_name);
	}

	/**
	 * Creates a string containing links to all the pages.
	 * @param string The id given to the module on execution
	 * @param string The action that this form should do when the form is submitted
	 * @param string The id to eventually return to when the module is finished it's task
	 * @param string the current page to display
	 * @param string the amount of items being listed
	 * @param string the amount of items to list per page
	 * @param boolean A flag to determine if actions should be handled inline (no moduleinterface.php -- only works for frontend)
	 */
	public function CreatePagination($id, $action, $returnid, $page, $totalrows, $limit, $inline=false)
	{
		$this->LoadMiscMethods();
		return cms_module_CreatePagination($this, $id, $action, $returnid, $page, $totalrows, $limit, $inline);
	}

    /**
     * ShowMessage
     * Returns a formatted page status message
     *
     * @param message - Message to be shown
     */
    public function ShowMessage($message)
    {
		global $gCms;
		if (isset($gCms->variables['admintheme']))
		{
			$admintheme =& $gCms->variables['admintheme']; //php4 friendly
			return $admintheme->ShowMessage($message);
		}
		return '';
	}

    /**
     * ShowErrors
     * Outputs errors in a nice error box with a troubleshooting link to the wiki
     *
     * @param errors - array or string of errors to be shown
     */
    public function ShowErrors($errors)
    {
        global $gCms;
        if (isset($gCms->variables['admintheme']))
        {
            $admintheme =& $gCms->variables['admintheme']; //php4 friendly
            return $admintheme->ShowErrors($errors);
        }
        return '';
    }

	/**
	 * ------------------------------------------------------------------
	 * Event Handler Related functions
	 * ------------------------------------------------------------------
	 */


	/**
	* Add an event handler for a module event
	*
	* @param string $modulename      The name of the module sending the event
	* @param string $eventname       The name of the event
	* @param boolean $removable      Can this event be removed from the list?
	*
	* @returns mixed If successful, true.  If it fails, false.
	*/
	public function AddEventHandler( $modulename, $eventname, $removable = true )
	{
		Events::AddEventHandler( $modulename, $eventname, false, $this->GetName(), $removable );
	}


	/**
	 * Inform the system about a new event that can be generated
	 *
	 * @param string The name of the event
	 *
	 * @returns nothing
	 */
	public function CreateEvent( $eventname )
	{
		Events::CreateEvent($this->GetName(), $eventname);
	}


	/**
	 * Handle an event triggered by another module
	 * This method must be over-ridden if this module is capable of handling events.
	 * of any type.
	 *
	 * @param string The name of the originating module
	 * @param string The name of the event
	 * @param array  Array of parameters provided with the event.
	 *
	 * @returns boolean
	 */
	public function DoEvent( $originator, $eventname, &$params )
	{
		if ($originator != '' && $eventname != '')
		{
			$filename = dirname(dirname(dirname(__FILE__))) . '/modules/'.$this->GetName().'/event.' 
			. $originator . "." . $eventname . '.php';

			if (@is_file($filename))
			{
				{
					global $gCms;
					$db =& $gCms->GetDb();
					$config =& $gCms->GetConfig();
					$smarty = cms_smarty();

					include($filename);

				}
			}
		}
	}


	/**
	 * Get a (langified) description for an event this module created.
	 * This method must be over-ridden if this module created any events.
	 *
	 * @param string The name of the event
	 *
	 * @returns text string
	 */
	public function GetEventDescription( $eventname )
	{
		return "";
	}


	/**
	 * Get a (langified) descriptionof the details about when an event is
	 * created, and the parameters that are attached with it.
	 * This method must be over-ridden if this module created any events.
	 *
	 * @param string The name of the event
	 */
	public function GetEventHelp( $eventname )
	{
		return "";
	}


	/**
	 * A callback indicating if this module has a DoEvent method to
	 * handle incoming events.
         */
	public function HandlesEvents()
	{
		return false;
	}

	/**
	 * Remove an event from the CMS system
	 * This function removes all handlers to the event, and completely removes
	 * all references to this event from the database
	 *
	 * Note, only events created by this module can be removed.
	 *
	 * @param string The name of the event
	 *
	 * @returns nothing
	 */
	public function RemoveEvent( $eventname )
	{
		Events::RemoveEvent($this->GetName(), $eventname);
	}

	/**
	 * Remove an event from the CMS system
	 * This function removes all handlers to the event, and completely removes
	 * all references to this event from the database
	 *
	 * Note, only events created by this module can be removed.
	 *
	 * @param string The name of the event
	 *
	 * @returns nothing
	 */
	public function RemoveEventHandler( $modulename, $eventname )
	{
		Events::RemoveEventHandler($modulename, $eventname, false, $this->GetName());
	}


	/**
	 * Trigger an event.
	 * This function will call all registered event handlers for the event
	 *
	 * @param string The name of the event
	 * @param array  The parameters associated with this event.
	 *
	 * @returns nothing
	 */
	public function SendEvent( $eventname, $params )
	{
		Events::SendEvent($this->GetName(), $eventname, $params);
	}
	
	/**
	 * Returns the output the module wants displayed in the dashboard
	 * 
	 * @returns dashboard-content
	 */
	public function GetDashboardOutput() 
        {
	  return '';
	}


	/**
	 * Returns the output the module wants displayed in the notification area
	 * 
	 * @returns a stdClass object with two properties.... priority (1->3)... and
	 * html, which indicates the text to display for the Notification.
	 */
	public function GetNotificationOutput($priority=2) 
        {
	  return '';
	}
	
	/**
	 * ------------------------------------------------------------------
	 * Tab Functions
	 * ------------------------------------------------------------------
	 */
	public function get_theme_object()
	{
		return CmsAdminTheme::get_instance();
	}
	
	function StartTabHeaders()
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->start_tab_headers(CmsResponse::make_dom_id('module_page_tabs_orig'));
		
		return '';
	}

	function SetTabHeader($tabid,$title,$active=false)
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->set_tab_header($tabid, $title, $active);
		
		if ($active)
		{
			$this->module->mActiveTab = $tabid;
		}
		
		return '';
	}

	function EndTabHeaders()
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->end_tab_headers();
		
		return '';
	}

	function StartTabContent()
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->start_tab_content();
		
		return '';
	}

	function EndTabContent()
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->end_tab_content(CmsResponse::make_dom_id('module_page_tabs_orig'));
		
		return '';
	}

	function StartTab($tabid, $params = array())
	{
		if (FALSE == empty($this->mActiveTab) &&
				$tabid == $this->mActiveTab &&
				FALSE == empty($params['tab_message']))
		{
			$message = $this->ShowMessage($this->Lang($params['tab_message']));
		}
		else
		{
			$message = '';
		}
		
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->start_tab($tabid, $params);
		
		return '';
	}

	function EndTab()
	{
		$theme_obj = $this->get_theme_object();
		if ($theme_obj)
			return $theme_obj->end_tab();
		
		return '';
	}

}


# vim:ts=4 sw=4 noet
?>

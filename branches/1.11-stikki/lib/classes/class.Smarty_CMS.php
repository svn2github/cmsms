<?php
#CMS - CMS Made Simple
#(c)2004-2012 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: content.functions.php 6863 2011-01-18 02:34:48Z calguy1000 $

require_once(dirname(dirname(__FILE__)).'/smarty/SmartyBC.class.php');

/**
 * Extends the Smarty class for content.
 *
 * Extends the Smarty class for checking timestamps and rendering content to the browser.
 *
 * @package CMS
 * @since 0.1
 */

class Smarty_CMS extends SmartyBC 
{	
	public $id; // <- triggers error without
	public $params; // <- triggers error without
	private $_global_cache_id;
	private static $_instance;

// 	public function _compile_source($a,$b,$c)
// 	{
// 	  stack_trace(); die();
// 	}

	/**
	* Constructor
	*
	* @param array The hash of CMSMS config settings
	*/
	public function __construct()
	{ 
		parent::__construct();

		global $CMS_ADMIN_PAGE;
		global $CMS_INSTALL_PAGE;  
		$config = cmsms()->GetConfig();

		// Set template and config dirs according witch instance we are at.
		if( isset($CMS_ADMIN_PAGE) && $CMS_ADMIN_PAGE == 1 ) {
		  $this->setTemplateDir(cms_join_path($config['root_path'],$config['admin_dir'],'templates'));
		  $this->setConfigDir(cms_join_path($config['root_path'],$config['admin_dir'],'/configs'));;
		} else {
		    $this->setTemplateDir(cms_join_path($config['root_path'],'tmp','templates'));
		    $this->setConfigDir(cms_join_path($config['root_path'],'tmp','templates'));
		}

		// Set template_c and canche dirs
		$this->setCompileDir(TMP_TEMPLATES_C_LOCATION);
		$this->setCacheDir(TMP_CACHE_LOCATION);

		// Set plugins dirs
		$this->addPluginsDir(cms_join_path($config['root_path'],'plugins'));

		// register default plugin handler
		$this->registerDefaultPluginHandler(array(&$this, 'defaultPluginHandler'));

		$this->assign('app_name','CMS');
		if ($config["debug"] == true) {
		  $this->force_compile = true;
		  $this->debugging = true;
		}

		if (is_sitedown()) {
			$this->setCaching(false);
			$this->force_compile = true;
		}

		// Check if we are at install page, don't register anything if so, cause nothing below is needed.
		if(isset($CMS_INSTALL_PAGE)) return;

		if( isset($CMS_ADMIN_PAGE) && $CMS_ADMIN_PAGE == 1 ) {
		  $this->setCaching(false);
		  //$this->force_compile = true;
		}
// 		else {
// 		  $this->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
// 		}


		// Load User Defined Tags
		{
		  $utops = cmsms()->GetUserTagOperations();
		  $usertags = $utops->ListUserTags();
		  foreach( $usertags as $id => $name )
		    {
		      $utops->CreateTagFunction($name);
		    }
		}

		//$this->load_file_plugins();

		// See new style
		$this->registerResource("db", array(
						array(&$this, "template_get_template"),
						array(&$this, "template_get_timestamp"),
						array(&$this, "db_get_secure"),
						array(&$this, "db_get_trusted")));
						 
		$this->registerResource("print", array(
						array(&$this, "template_get_template"),
						array(&$this, "template_get_timestamp"),
						array(&$this, "db_get_secure"),
						array(&$this, "db_get_trusted")));

		$this->registerResource('template',new CMSPageTemplateResource(''));
		$this->registerResource('tpl_top',new CMSPageTemplateResource('top'));
		$this->registerResource('tpl_head',new CMSPageTemplateResource('head'));
		$this->registerResource('tpl_body',new CMSPageTemplateResource('body'));
		$this->registerResource('module_db_tpl',new CMSModuleDbTemplateResource());
		$this->registerResource('module_file_tpl',new CMSModuleFileTemplateResource());
		$this->registerResource('content',new CMSContentTemplateResource());
		$this->registerResource('htmlblob',new CMSGlobalContentTemplateResource());
		$this->registerResource('globalcontent',new CMSGlobalContentTemplateResource());
							  
		$this->registerResource("module", array(
						array(&$this, "module_get_template"),
						array(&$this, "module_get_timestamp"),
						array(&$this, "db_get_secure"),
						array(&$this, "db_get_trusted")));

						
		$this->registerPlugin('function','content','CMS_Content_Block::smarty_fetch_contentblock',false);
		$this->registerPlugin('function','process_pagedata','CMS_Content_Block::smarty_fetch_pagedata',false);
		$this->registerPlugin('function','content_image','CMS_Content_Block::smarty_fetch_imageblock',false);
		$this->registerPlugin('function','content_module','CMS_Content_Block::smarty_fetch_moduleblock',false);
	}


	public function loadPlugin($plugin_name,$check = true)
	{
	  $res = parent::loadPlugin($plugin_name,$check);
	  if( $res ) 
	    {
	      if( !function_exists($plugin_name) )
		{
		  $parts = explode('_',$plugin_name);
		  if( $parts[0] != 'smarty' || $parts[1] == 'internal' ) return $res;
		  return false;
		}
	    }
	  return $res;
	}

	public function defaultPluginHandler($name, $type, $template, &$callback, &$script)
	{
	  $config = cmsms()->GetConfig();
	  $fn = cms_join_path($config['root_path'],'plugins',$type.'.'.$name.'.php');
	  if( file_exists($fn) )
	    {
	      // plugins with the smarty_cms_function
	      $callback = 'smarty_cms_'.$type.'_'.$name;
	      $script = $fn;
	      require_once($fn);
	      if( function_exists('smarty_cms_'.$type.'_'.$name) )
		{
		  $callback = 'smarty_cms_'.$type.'_'.$name;
		  return TRUE;
		}
	    }

	  // now see if we've loaded udt's.
	  if( UserTagOperations::get_instance()->UserTagExists($name) )
	    {
	      $callback = 'cms_user_tag_'.$name;
	      return TRUE;
	    }

	  // maybe it was loaded by a module
	  $modulename = module_meta::get_instance()->find_module_by_plugin($name);
	  if( $modulename )
	    {
	      $obj = cms_utils::get_module($modulename);
	      if( is_object($obj) ) return TRUE;
	    }
	  return FALSE;
	}


	public static function &get_instance()
	{
		if( !is_object(self::$_instance) ) {
			
			self::$_instance = new Smarty_CMS();
		}
		
		return self::$_instance;
	}


	public function set_global_cacheid($id)
	{
	  if( is_null($id) || $id === '' )
	    {
	      $this->_global_cache_id = null;
	    }
	  else
	    {
	      $this->_global_cache_id = $id;
	    }
	}

	public function fetch($template = null,$cache_id = null, $compile_id = null, $parent = null, $display = false, $merge_tpl_vars = true, $no_output_filter = false)
	{
	  if( is_null($cache_id) || $cache_id === '' )
	    {
	      $cache_id = $this->_global_cache_id;
	    }
	  else if( $cache_id[0] == '|' )
	    {
	      $cache_id = $this->_global_cache_id . $cache_id;
	    }
	  return parent::fetch($template,$cache_id,$compile_id,$parent,$display,$merge_tpl_vars,$no_output_filter);
	}

	public function clearCache($template_name = null,$cache_id = null,$compile_id = null,$exp_time = null,$type = null)
	{
	  if( is_null($cache_id) || $cache_id === '' )
	    {
	      $cache_id = $this->_global_cache_id;
	    }
	  else if( $cache_id[0] == '|' )
	    {
	      $cache_id = $this->_global_cache_id . $cache_id;
	    }
	  return parent::clearCache($template_name,$cache_id,$compile_id,$exp_time,$type);
	}

	public function isCached($template = null,$cache_id = null,$compile_id = null, $parent = null)
	{
	  if( is_null($cache_id) || $cache_id === '' )
	    {
	      $cache_id = $this->_global_cache_id;
	    }
	  else if( $cache_id[0] == '|' )
	    {
	      $cache_id = $this->_global_cache_id . $cache_id;
	    }
	  return parent::isCached($template,$cache_id,$compile_id,$parent);
	}

	/**
	* A method to load smarty plugins
	* NOTE: Totally incomplete - Stikki
	*
	* @ return void
	*/
	public function load_file_plugins($params = '')
	{
		$load_filter   = TRUE;
		$load_compiler = TRUE;
		$load_function = FALSE;
		$load_modifier = FALSE;
		$load_block    = FALSE;

		$config = cmsms()->GetConfig();		
		$dirs = array($config['root_path'].'/plugins');
		//print_r($dirs);
		if( is_array($params) )
		  {
		if( isset($params['dir']) )
		  {
			if( !is_array($params['dir']) )
			  {
			$dirs = explode(',',trim($params['dir']));
			  }
			else
			  {
			$dirs = $params['dir'];
			  }
		  }

		if( isset($params['load_all']) && $params['load_all'])
		  {
			$load_filter = $load_compilter = $load_function = $load_modifier = $load_block = TRUE;
		  }
		else
		  {
			foreach( $params as $key => $value )
			  {
			switch( $key )
			  {
			  case 'load_filter':
				$load_filter = (int)$value;
				break;
			  case 'load_compiler':
				$load_compiler = (int)$value;
				break;
			  case 'load_function':
				$load_function = (int)$value;
				break;
			  case 'load_modifier':
				$load_modifier = (int)$value;
				break;
			  case 'load_block':
				$load_block = (int)$value;
				break;
			  }
			  }
		  }
		  }

		// now search through the dirs.
		$caching = false;
		foreach( $dirs as $onedir )
		  {
		if( !is_dir($onedir) ) continue;

		$it = new DirectoryIterator($onedir);
		foreach( $it as $fi )
		  {
			if( !$fi->isFile() ) continue;
			if( !endswith($fi->getFilename(),'.php') ) continue;
			
			$tmp = explode('.',$fi->getFilename());
			if( count($tmp) != 3 ) continue;

			$name = $tmp[1];
			$type = $tmp[0];
			//echo $name ."-" . $type . "<br />";

			switch( $type )
			  {
			  case 'function':

				require_once($fi->getPathname());
				$this->register_function($name,'smarty_cms_function_'.$name,$caching);	
				break;

			  case 'modifier':

				require_once($fi->getPathname());
				$this->register_modifier($name,'smarty_cms_modifier_'.$name);
				break;
	/*
			  case 'compiler':
			if( $load_compiler && !$this->loadPlugin($name) )
			  {
				$this->register_compiler_function($name,'smarty_cms_compiler_'.$name,$caching);
				require_once($fi->getPathname());
			  }
			break;

			  case 'block':
			if( $load_block && !$this->loadPlugin($name) )
			  {
				$this->register_block($name,'smarty_cms_block_'.$name,$caching);
				require_once($fi->getPathname());
			  }
			break;

			  case 'postfilter':
			if( $load_filter && !$this->loadPlugin($name) )
			  {
				$this->register_postfilter('smarty_cms_postfilter_'.$name);
				require_once($fi->getPathname());
			  }
			break;

			  case 'prefilter':
			if( $load_filter && !$this->loadPlugin($name) )
			  {
				$this->register_prefilter('smarty_cms_prefilter_'.$name);
				require_once($fi->getPathname());
			  }
			break;

			  case 'outputfilter':
			if( $load_filter && !$this->loadPlugin($name) )
			  {
				$this->register_outputfilter('smarty_cms_outputfilter_'.$name);
				require_once($fi->getPathname());
			  }
			break;

			  default:
			continue; // unknown file type.
			break;
			  */
			  }
			  
		  }
		  }
	}

	/**
	* wrapper for include() retaining $this
	* NOTE: Where do we need this? - Stikki
	*
	* @ignore
	* @access private
	* @param  string The input filename
	* @param  boolean A flag wether include_once should be called or just include
	* @return mixed
	*/
	function _include($filename, $once=false, $params=null)
	{
		if ($filename != '')
		{
		if ($once) {
		return include_once($filename);
		} else {
		return include($filename);
		}
		}
	}

    /**
     * wrapper for eval() retaining $this
	 *
     * @ return mixed
	 * @ author Stikki
     */
    function _eval($code, $params=null)
    {
        return eval($code);
    }
	
	/**
	* Wrapper for the trigger_error method
	*
	* @ignore
	* @access private
	* @param string The error message
	* @param int    The error type E_USER_WARNING or E_USER_NOTICE
	* @return void
	*/
	function trigger_error($error_msg, $error_type = E_USER_WARNING)
	{   
		stack_trace();
		var_dump("Smarty error: $error_msg");
	}


	/**
	* Method to test if a function/item is registered
	* NOTE: Changed to use new style - Stikki
	*
	* @access public
	* @param string The function/item name to test
	* @param string An optional type (block,filter,...) default is function.
	* @return bool
	* @since 1.10
	* @author calguy1000
	*/
	function is_registered($name,$type = 'function')
	{
		if( !$type ) return FALSE;
		if( !isset($this->registered_plugins[$type]) ) return FALSE;
		if( !isset($this->registered_plugins[$type][$name]) ) return FALSE;
		return TRUE;
	}



	/**
	* Given a page template name, return it's entire contents.
	*
	* @access private
	* @param string The page template name.
	* @param  string (returned) The database template contents
	* @param  object The smarty object.
	* @return boolean
	*/
	function template_get_template($tpl_name, &$tpl_source, $smarty_obj)
	{
		$gCms = cmsms();
		$config = $gCms->GetConfig();

		if (is_sitedown())
		  {
		$tpl_source = get_site_preference('sitedownmessage');
		return true;
		  }
		else
		  {
		if ($tpl_name == 'notemplate')
		  {
			$tpl_source = '{content}';

			return true;
		  }
		else if (isset($_GET["print"]))
		  {
			// this should really just go.
			$script = '';

			if (isset($_GET["js"]) and $_GET["js"] == 1)
			  $script = '<script type="text/javascript">window.print();</script>';

			if (isset($_GET["goback"]) and $_GET["goback"] == 0)
			  {
			$tpl_source = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"'."\n".'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'.'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">'.'<head><title>{title}</title><meta name="robots" content="noindex"></meta>{metadata}{stylesheet}{literal}<style type="text/css" media="print">#back {display: none;}</style>{/literal}</head><body style="background-color: white; color: black; background-image: none; text-align: left;">{content}'.$script.'</body></html>';
			  }
			else
			  {
			$hm = $gCms->GetHierarchyManager();
			if ('mod_rewrite' == $config['url_rewriting'])
			  {
				$curnode = $hm->getNodeByAlias($tpl_name);
			  }
			else
			  {
				$curnode = $hm->getNodeById($tpl_name);
			  }
			$curcontent = $curnode->GetContent();
			$page_url = $curcontent->GetURL();
					  
			$tpl_source = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"'."\n".'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'.'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">'.'<head><title>{title}</title><meta name="robots" content="noindex"></meta>{metadata}{stylesheet}{literal}<style type="text/css" media="print">#back {display: none;}</style>{/literal}</head><body style="background-color: white; color: black; background-image: none; text-align: left;"><p><a id="back" href="'.$page_url.'">&laquo; Go Back</a></p>{content}'.$script.'</body></html>';
			  }

			return true;
		  }
		if( isset($_SESSION['cms_preview']) )
		  {
			// get serialized data filename
			$tpl_name = trim($_SESSION['cms_preview']);
			unset($_SESSION['cms_preview']);
			$fname = '';
			if (is_writable($config["previews_path"]))
			  {
			$fname = cms_join_path($config["previews_path"] , $tpl_name);
			  }
			else
			  {
			$fname = cms_join_path(TMP_CACHE_LOCATION , $tpl_name);
			  }
			if( !file_exists($fname) )
			  {
			$tpl_source = 'Error: Cache file: '.$tpl_name.' does not exist.';
			return false;
			  }

			// get the serialized data
			$handle = fopen($fname, "r");
			$data = unserialize(fread($handle, filesize($fname)));
			fclose($handle);
			unlink($fname);

			$tpl_source = $data["template"];
			return true;
		  }
		else
		  {
			$gCms = cmsms();
			$contentobj = $gCms->variables['content_obj'];
			$templateops =& $gCms->GetTemplateOperations();
			$templateobj =& $templateops->LoadTemplateByID($contentobj->TemplateId());
			if (isset($templateobj) && $templateobj !== FALSE)
			  {
			$tpl_source = $templateobj->content;

		#So no one can do anything nasty, take out the php smarty tags.  Use a user
		#defined plugin instead.
			if (!(isset($config["use_smarty_php_tags"]) && $config["use_smarty_php_tags"] == true))
			  {
				$tpl_source = preg_replace("/\{\/?php\}/", "", $tpl_source);
			  }
						
			return true;
			  }
		  }
		return false;
		  }
	}


	/**
	* Given a page template name, return it's modification date.
	*
	* @access private
	* @param string The page template name.
	* @param  int (returned) The database template modification time.
	* @param  object The smarty object.
	* @return boolean
	*/
	function template_get_timestamp($tpl_name, &$tpl_timestamp, $smarty_obj)
	{
		$gCms = cmsms();

		if (is_sitedown() || $tpl_name == 'notemplate')
		  {
		$tpl_timestamp = time();
		return true;
		  }
		else if (isset($_GET['id']) && isset($_GET[$_GET['id'].'showtemplate']) && $_GET[$_GET['id'].'showtemplate'] == 'false')
		  {
		$tpl_timestamp = time();
		return true;
		  }
		else if (isset($_GET['print']))
		  {
		$tpl_timestamp = time();
		return true;
		  }
		else
		  {
		$contentobj = $gCms->variables['content_obj'];
		$templateops =& $gCms->GetTemplateOperations();
		$templateobj =& $templateops->LoadTemplateByID($contentobj->TemplateId());
		if (isset($templateobj) && $templateobj !== FALSE)
		  {
			$tpl_timestamp = $templateobj->modified_date;
			return true;
		  }
		  }
	}


	/**
	* Retrieve output from a module.
	* This method grabs parameters from the request, and given the module name
	* will call the module with the specified parameters to retrieve the module output.
	* This is used to replace the contents of the {content} tag when a module action is
	* called in a non inline manner.
	*
	* @access private
	* @param string The module name.
	* @param  string (returned) The moduleoutput.
	* @param  object The smarty object.
	* @return boolean
	*/
	function module_get_template ($tpl_name, &$tpl_source, &$smarty_obj)
	{
	  debug_display("module_get_template $tpl_name");
		$gCms = cmsms();
		$contentobj = $gCms->variables['content_obj'];
		$config = $gCms->config;

		#Run the execute_user function and replace {content} with it's output 
		$obj = cms_utils::get_module($tpl_name);
		if (is_object($obj))
		  {
		@ob_start();

		$id = $smarty_obj->id;
		$returnid = is_object($contentobj)?$contentobj->Id():'';
		$params = GetModuleParameters($id);
		$action = 'default';
		if (isset($params['action']))
		  {
			$action = $params['action'];
		  }
		echo $obj->DoActionBase($action, $id, $params, is_object($contentobj)?$contentobj->Id():'');
		$modoutput = @ob_get_contents();
		@ob_end_clean();

		$tpl_source = $modoutput;
		  }
			
		header("Content-Type: ".$gCms->variables['content-type']."; charset=" . get_encoding());
		if (isset($gCms->variables['content-filename']) && $gCms->variables['content-filename'] != '')
		  {
		header('Content-Disposition: attachment; filename="'.$gCms->variables['content-filename'].'"');
		header("Pragma: public");
		  }

		#So no one can do anything nasty, take out the php smarty tags.  Use a user
		#defined plugin instead.
		if (!(isset($config["use_smarty_php_tags"]) && $config["use_smarty_php_tags"] == true))
		  {
		$tpl_source = preg_replace("/\{\/?php\}/", "", $tpl_source);
		  }

		return true;
	}

	/**
	* A dummy function to return the modified date of the latest module output.  
	* This function always returns the current time which essentially disables smarty compile caching
	* for non-inline module output.
	*
	* @access private
	* @param string The page template name (ignored)
	* @param  int (returned) The timestamp of the modification date of the matching template (always current time)
	* @param  object The smarty object.
	* @return boolean
	*/
	function module_get_timestamp($tpl_name, &$tpl_timestamp, &$smarty_obj)
	{
		$tpl_timestamp = time();
		return true;
	}

	/** 
	* A dummy function that indicates that all db templates are secure.
	* (always returns true)
	*
	* @access private
	* @param  string The template name (ignored)
	* @param  object The smarty object
	* @return boolean
	*/
	function db_get_secure($tpl_name, &$smarty_obj)
	{
		// assume all templates are secure
		return true;
	}

	/** 
	* A dummy function that indicates that all db templates are truested.
	* (always returns true)
	*
	* @access private
	* @param  string The template name (ignored)
	* @param  object The smarty object
	* @return boolean
	*/
	function db_get_trusted($tpl_name, &$smarty_obj)
	{
		// not used for templates
	}
	
} // end of class
?>

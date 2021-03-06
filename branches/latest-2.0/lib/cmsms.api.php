<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
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
#$Id$

/**
 * Misc functions
 *
 * @package CMS
 */

define("ROOT_DIR", dirname(dirname(__FILE__)));
define("DS", DIRECTORY_SEPARATOR);

$CMS_VERSION = "2.0-beta1";
$CMS_VERSION_NAME = "Canala";
$CMS_SCHEMA_VERSION = "1";

define('CMS_VERSION', $CMS_VERSION);
define('CMS_VERSION_NAME', $CMS_VERSION_NAME);
define('CMS_SCHEMA_VERSION', $CMS_SCHEMA_VERSION);
define('CMS_DEFAULT_VERSIONCHECK_URL', 'http://dev.cmsmadesimple.org/latest_version.php');
define('CMS_SECURE_PARAM_NAME', 'sp_');
define('CMS_USER_KEY', 'cmsuserkey');

//Load file location defines
require_once(cms_join_path(ROOT_DIR, 'fileloc.php'));

//So we can use them in __autoload
require_once(cms_join_path(ROOT_DIR, 'lib', 'classes', 'class.cms_object.php'));
require_once(cms_join_path(ROOT_DIR, 'lib', 'classes', 'class.cms_config.php'));
require_once(cms_join_path(ROOT_DIR, 'lib', 'classes', 'class.cms_cache.php'));
require_once(cms_join_path(ROOT_DIR, 'lib', 'classes', 'class.cms_profiler.php'));
require_once(cms_join_path(ROOT_DIR, 'lib', 'page.functions.php'));
require_once(cms_join_path(ROOT_DIR, 'lib', 'content.functions.php'));

set_error_handler('cms_warning_handler', E_WARNING | E_USER_WARNING | E_STRICT);

/**
 * The one and only autoload function for the system.  This basically allows us 
 * to remove a lot of the require_once BS and keep the file loading to as much 
 * of a minimum as possible.
 */
function cms_autoload($class_name)
{
	//Hack in the smarty loading
	$_class = strtolower($class_name);
	if (substr($_class, 0, 16) === 'smarty_internal_' || $_class == 'smarty_security')
	{
		include cms_join_path(ROOT_DIR, 'lib', 'smarty', 'sysplugins', $_class . '.php');
		return;
	}
	
	$files = scan_classes();
	//$files = CmsCache::get_instance()->call('scan_classes');
	
	//Fix references to older classes
	if ($class_name == 'CMSModule')
		$class_name = 'CmsModule';
	
	if ($class_name == 'string')
		return;
		
	CmsProfiler::get_instance()->mark('Load ' . $class_name);
		
	if (array_key_exists('class.' . underscore($class_name) . '.php', $files))
	{
		require($files['class.' . underscore($class_name) . '.php']);
	}
	else if (array_key_exists('class.' . underscore($class_name) . '.inc.php', $files))
	{
		require($files['class.' . underscore($class_name) . '.inc.php']);
	}
	else if (array_key_exists('class.' . strtolower($class_name) . '.php', $files))
	{
		require($files['class.' . strtolower($class_name) . '.php']);
	}
	else if (array_key_exists('class.' . strtolower($class_name) . '.inc.php', $files))
	{
		require($files['class.' . strtolower($class_name) . '.inc.php']);
	}
// 	else if (CmsContentOperations::load_content_type($class_name))
// 	{
// 	}
	else
	{
		CmsProfiler::get_instance()->mark('Failed to load ' . $class_name);
	}
}

spl_autoload_register('cms_autoload');

// some defines for backwards compatibility.
// needed to be done justafter he autoloader is setup.
// note:: should use CMSModule::PARAM_ consts.
define('CLEAN_INT','CLEAN_INT');
define('CLEAN_FLOAT','CLEAN_FLOAT');
define('CLEAN_NONE','CLEAN_NONE');
define('CLEAN_STRING','CLEAN_STRING');
define('CLEAN_REGEXP','regexp:');
define('CLEAN_FILE','CLEAN_FILE');


//Setup a global $gCms.  Even if this goes away,
//we need to instantiate CmsApplication near the
//beginning so that event firing starts right away.
$gCms = cmsms();
$GLOBALS['gCms'] = $gCms;

function scan_classes()
{
	$dir = cms_join_path(ROOT_DIR,'lib','classes');
	if (!isset($GLOBALS['dirscan']))
	{
		$files = array();
		/*
		$time1 = microtime(true);
		*/
		scan_classes_recursive($dir, $files);
		/*
		$time2 = microtime(true);
		var_dump($time2 - $time1);
		*/
		$GLOBALS['dirscan'] = $files;
		return $files;
	}
	else
	{
		return $GLOBALS['dirscan'];
	}
}

function scan_classes_recursive($dir = '.', &$files)
{
	foreach(new DirectoryIterator($dir) as $file)
	{
		if (!$file->isDot() && $file->getFilename() != '.svn')
		{
			if ($file->isDir())
			{
				$newdir = $file->getPathname();
				scan_classes_recursive($newdir, $files);
			}
			else 
			{
				if (starts_with(basename($file->getPathname()), 'class.'))
					$files[basename($file->getPathname())] = $file->getPathname();
			}
		}
	}
	
	return $files;
}

/**
 * Returns the global CmsApplication singleton.  This is the equivalent of
 * global $gCms from days gone by.
 */
function cmsms()
{
	return CmsApplication::get_instance();
}

function cms_smarty()
{
	//return cmsms()->GetSmarty();
	return CmsSmarty::get_instance();
}

function cms_request($request_param = '')
{
	if ($request_param != '')
		return CmsRequest::get_instance()->get($request_param);
	else
		return CmsRequest::get_instance();
}

function cms_response()
{
	return CmsResponse::get_instance();
}

/**
 * Returns a reference to the adodb(lite) connection singleton object.
 * Replaces the global $gCms; $db =& $gCms->GetDb(); routine.
 */
function cms_db()
{
	return CmsDatabase::get_instance();
}

function cms_config()
{
	return CmsConfig::get_instance();
}

function cms_orm($class = '')
{
	if ($class == '')
		return CmsObjectRelationalManager::get_instance();
	else
		return CmsObjectRelationalManager::get_instance()->$class;
}

function lang()
{
	$name = '';
	$params = array();

	if (func_num_args() > 0)
	{
		$name = func_get_arg(0);
		if (func_num_args() == 2 && is_array(func_get_arg(1)))
		{
			$params = func_get_arg(1);
		}
		else if (func_num_args() > 1)
		{
			$params = array_slice(func_get_args(), 1);
		}
	}
	
	return CmsLanguage::translate($name, $params);
}

/**
 * Looks through the hash given.  If a key named val1 exists, then it's value is 
 * returned.  If not, then val2 is returned.  Furthermore, passing one of the php
 * filter ids (http://www.php.net/manual/en/ref.filter.php) will filter the 
 * returned value.
 *
 * @param array The has to parse through
 * @param string The key to look for
 * @param mixed The value to return if the key isn't found
 * @param integer An optional filter id to pass the returned value through
 * @param array Optional parameters for the filter_var call
 * @return mixed The result of the coalesce
 * @author Ted Kulp
 * @since 1.1
 **/
function coalesce_key($array, $val1, $val2, $filter = -1, $filter_options = array())
{
	if (isset($array[$val1]))
	{
		if ($filter > -1)
			return filter_var($array[$val1], $filter, $filter_options);
		else
			return $array[$val1];
	}
	return $val2;
}

/**
 * Check to see if all keys in the given hash exist
 * in the check array.  If there are any extra, it will
 * return false.
 *
 * @param array The hash to check
 * @param array The hash to test against
 * @return boolean Returns false if there are extra keys
 * @author Ted Kulp
 **/
function are_all_keys_valid($array, $valid_keys)
{
	return invalid_key($array, $valid_keys) == null;
}

/**
 * Finds all keys_to_remove in the hash, removes them,
 * and returns the new hash.
 *
 * @param array The original hash
 * @param array The names of the keys to remove
 * @return array The result of the key removal
 * @author Ted Kulp
 * @since 1.1
 */
function remove_keys($array, $keys_to_remove)
{
	if (is_array($array))
	{
		foreach ($keys_to_remove as $k)
		{
			if (array_key_exists($k, $array))
			{
				unset($array[$k]);
			}
		}
	}

	return $array;
}

/**
 * Check to see if all keys in the given hash exist
 * in the check array.  If there are any extra, it will
 * return the name of the first extra one.
 *
 * @param array The hash to check
 * @param array The hash to test against
 * @return string The name of the extra key, if any.  If there are none, it returns null.
 * @author Ted Kulp
 **/
function invalid_key($array, $valid_keys)
{
	if (array_keys($valid_keys) != $valid_keys)
		$valid_keys = array_keys($valid_keys);

	foreach (array_keys($array) as $one_key)
	{
		if (!in_array($one_key, $valid_keys))
		{
			return $one_key;
		}
	}

	return null;
}

function array_search_keys($array, $keys_to_search)
{
	$result = array();

	foreach ($array as $k=>$v)
	{
		if (in_array($k, $keys_to_search))
		{
			$result[$key] = $value;
		}
	}

	return $result;
}

/**
 * Redirects to relative URL on the current site
 *
 * @since 0.1
 */
function redirect($to, $noappend=false)
{
	return CmsResponse::redirect($to, $noappend);
}


/**
 * Given a page ID or an alias, redirect to it
 */
function redirect_to_alias($alias)
{
	return CmsResponse::redirect_to_alias($alias);
}

/**
 * Shows the difference in seconds between two microtime() values
 *
 * @since 0.3
 */
function microtime_diff($a, $b) {
	list($a_dec, $a_sec) = explode(" ", $a);
	list($b_dec, $b_sec) = explode(" ", $b);
	return $b_sec - $a_sec + $b_dec - $a_dec;
}

/**
 * Joins a path together using proper directory separators
 * Taken from: http://www.php.net/manual/en/ref.dir.php
 *
 * @since 0.14
 */
function cms_join_path()
{
	$args = func_get_args();
	return implode(DIRECTORY_SEPARATOR,$args);
}


/**
 * Shows a very close approximation of an Apache generated 404 error.
 *
 * Shows a very close approximation of an Apache generated 404 error.
 * It also sends the actual header along as well, so that generic
 * browser error pages (like what IE does) will be displayed.
 *
 * @since 0.3
 */
#function ErrorHandler404($errno, $errmsg, $filename, $linenum, $vars)
function ErrorHandler404()
{
	CmsReponse::send_error_404();
}

/**
 * Simple template parser
 *
 * @since 0.6.1
 */

	function parse_template ($template, $tpl_array, $warn=0)
	{
		while ( list ($key,$val) = each ($tpl_array) )
		{
			if (!(empty($key)))
			{
				if(gettype($val) != "string")
				{
					settype($val,"string");
				}
				$template = eregi_replace('\{' . $key . '\}',$val,$template);
			}
		}

		if(!$warn)
		{
			// Silently remove anything not already found

			$template = ereg_replace('\{[A-Z0-9_]+\}', "", $template);
		}
		else
		{
			// Warn about unresolved template variables
			if (ereg('\{[A-Z0-9_]+\}',$template))
			{
				$unknown = split("\n",$template);
				while (list ($Element,$Line) = each($unknown) )
				{
					$UnkVar = $Line;
					if(!(empty($UnkVar)))
					{
						$this->show_unknowns($UnkVar);
					}
				}
			}
		}
		return $template;

	}	// end parse_template();

function cms_htmlentities($string, $param=ENT_QUOTES, $charset="UTF-8", $convert_single_quotes = false)
{
	$result = "";
	#$result = htmlentities($string, $param, $charset);
	$result = my_htmlentities($string, $convert_single_quotes);
	return $result;
}

/**
 * Clean up the filename, and ensure that the filename resides underneath
 * the cms_root directory, if it does not replace it with the hardcoded
 * string CLEANED_FILENAME
 */
define('CLEANED_FILENAME','BAD_FILE');
function cms_cleanfile($filename)
{
	$realpath = realpath($filename);
	if( $realpath === FALSE ) {
		return CLEANED_FILENAME;
	}

	// This ensures that the file specified is somewhere
	// underneath the cms root path
	global $gCms;
	$config =& $gCms->GetConfig();
	if( strpos($realpath, $config['root_path']) !== 0 ) {
		return CLEANED_FILENAME;
	}
	return $realpath;
}

/**
 * Figures out the page name from the uri string.  Has to use different logic
 * based on the type of httpd server.
 */
function cms_calculate_url()
{
	$result = '';

	$gCms = cmsms();
	$config = cmsms()->GetConfig();

	//Apache
	/*
	if (isset($_SERVER["PHP_SELF"]) && !endswith($_SERVER['PHP_SELF'], 'index.php'))
	{
		$matches = array();

		//Seems like PHP_SELF has whatever is after index.php in certain situations
		if (strpos($_SERVER['PHP_SELF'], 'index.php') !== FALSE) {
			if (preg_match('/.*index\.php\/(.*?)$/', $_SERVER['PHP_SELF'], $matches))
			{
				$result = $matches[1];
			}
		}
		else
		{
			$result = $_SERVER['PHP_SELF'];
		}
	}
	*/
	//lighttpd
	#else if (isset($_SERVER["REQUEST_URI"]) && !endswith($_SERVER['REQUEST_URI'], 'index.php'))

	//apache and lighttpd
	if (isset($_SERVER["REQUEST_URI"]) && !endswith($_SERVER['REQUEST_URI'], 'index.php'))
	{
		$matches = array();
		if (preg_match('/.*index\.php\/(.*?)$/', $_SERVER['REQUEST_URI'], $matches))
		{
			$result = $matches[1];
		}
	}

	//trim off the extension, if there is one set
	if ($config['page_extension'] != '' && endswith($result, $config['page_extension']))
	{
		$result = substr($result, 0, strlen($result) - strlen($config['page_extension']));
	}

	return $result;

}

/**
 * Enter description here...
 *
 * @param unknown $val
 * @param integer $quote_style
 * @return unknown
 *
 * $quote_style may be one of:
 *     ENT_COMPAT   : Will convert double-quotes and leave single-quotes alone.
 *     ENT_QUOTES   : Will convert both double and single quotes.
 *     ENT_NOQUOTES : Will leave both double and single quotes unconverted.
 */
function my_htmlentities($val, $convert_single_quotes = false)
{
	if ($val == "")
	{
		return "";
	}
	$val = str_replace( "&#032;", " ", $val );

	//Remove sneaky spaces
	// $val = str_replace( chr(0xCA), "", $val );

	$val = str_replace( "&"            , "&amp;"         , $val );
	$val = str_replace( "<!--"         , "&#60;&#33;--"  , $val );
	$val = str_replace( "-->"          , "--&#62;"       , $val );
	$val = preg_replace( "/<script/i"  , "&#60;script"   , $val );
	$val = str_replace( ">"            , "&gt;"          , $val );
	$val = str_replace( "<"            , "&lt;"          , $val );


	$val = str_replace( "\""           , "&quot;"        , $val );

	// Uncomment it if you need to convert literal newlines
	//$val = preg_replace( "/\n/"        , "<br>"          , $val );

	$val = preg_replace( "/\\$/"      , "&#036;"        , $val );

	// Uncomment it if you need to remove literal carriage returns
	//$val = preg_replace( "/\r/"        , ""              , $val );

	$val = str_replace( "!"            , "&#33;"         , $val );
	$val = str_replace( "'"            , "&#39;"         , $val );

	// Uncomment if you need to convert unicode chars
	//$val = preg_replace("/&#([0-9]+);/s", "&#\1;", $val );

	// Strip slashes if not already done so.

	//if ( get_magic_quotes_gpc() )
	//{
	//	$val = stripslashes($val);
	//}

	if ($convert_single_quotes)
	{
		$val = str_replace("\\'", "&apos;", $val);
		$val = str_replace("'", "&apos;", $val);
	}

	// Swop user inputted backslashes

	//$val = preg_replace( "/\(?!&#|?#)/", "&#092;", $val );

	return $val;
}


/**
 * Enter description here...
 *
 * @param unknown $val
 * @return unknown
 */
function cms_utf8entities($val)
{
	if ($val == "")
	{
		return "";
	}
	$val = str_replace( "&#032;", " ", $val );

	//Remove sneaky spaces
	// $val = str_replace( chr(0xCA), "", $val );

	$val = str_replace( "&"            , "\u0026"         , $val );
#	$val = str_replace( "<!--"         , "&#60;&#33;--"  , $val );
#	$val = str_replace( "-->"          , "--&#62;"       , $val );
#	$val = preg_replace( "/<script/i"  , "&#60;script"   , $val );
	$val = str_replace( ">"            , "\u003E"          , $val );
	$val = str_replace( "<"            , "\u003C"          , $val );


	$val = str_replace( "\""           , "\u0022"        , $val );

	// Uncomment it if you need to convert literal newlines
	//$val = preg_replace( "/\n/"        , "<br>"          , $val );

	#$val = preg_replace( "/\\$/"      , "&#036;"        , $val );

	// Uncomment it if you need to remove literal carriage returns
	//$val = preg_replace( "/\r/"        , ""              , $val );

	$val = str_replace( "!"            , "\u0021"         , $val );
	$val = str_replace( "'"            , "\u0027"         , $val );

	// Uncomment if you need to convert unicode chars
	//$val = preg_replace("/&#([0-9]+);/s", "&#\1;", $val );

	// Strip slashes if not already done so.

	//if ( get_magic_quotes_gpc() )
	//{
	//	$val = stripslashes($val);
	//}

	// Swop user inputted backslashes

	//$val = preg_replace( "/\(?!&#|?#)/", "&#092;", $val );

	return $val;
}


//Taken from http://www.webmasterworld.com/forum88/164.htm
function nl2pnbr( $text )
{
	// Use \n for newline on all systems
	$text = preg_replace("/(\r\n|\n|\r)/", "\n", $text);

	// Only allow two newlines in a row.
	$text = preg_replace("/\n\n+/", "\n\n", $text);

	// Put <p>..</p> around paragraphs
	$text = preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>", $text);

	// Convert newlines not preceded by </p> to a <br /> tag
	$text = preg_replace('|(?<!</p>)\s*\n|', "<br />", $text);

	return $text;
}

function debug_bt()
{
    $bt=debug_backtrace();
    $file = $bt[0]['file'];
    $line = $bt[0]['line'];

    echo "\n\n<p><b>Backtrace in $file on line $line</b></p>\n";

    $bt = array_reverse($bt);
    echo "<pre><dl>\n";
    foreach($bt as $trace)
    {
        $file = $trace['file'];
        $line = $trace['line'];
        $function = $trace['function'];
        $args = implode(',', $trace['args']);
        echo "
        <dt><b>$function</b>($args) </dt>
        <dd>$file on line $line</dd>
		";
	}
    echo "</dl></pre>\n";
}

/**
 * Returns the currently configured database prefix.
 *
 * @since 0.4
 */
function cms_db_prefix()
{
	return CmsConfig::get('db_prefix');
}

/**
* Debug function to display $var nicely in html.
*
* @param mixed $var
* @param string $title (optional)
* @param boolean $echo_to_screen (optional)
* @return string
*/
function debug_display($var, $title="", $echo_to_screen = true, $use_html = true)
{
	global $gCms;
	$variables =& $gCms->variables;

	$starttime = microtime();
	if (isset($variables['starttime']))
		$starttime = $variables['starttime'];
	else
		$variables['starttime'] = $starttime;

	$titleText = "Debug: ";
	if($title)
	{
		$titleText = "Debug display of '$title':";
	}
	$titleText .= '(' . microtime_diff($starttime,microtime()) . ')';

	if (function_exists('memory_get_usage'))
	{
		$titleText .= ' - ('.memory_get_usage().')';
	}

	ob_start();
	if ($use_html)
		echo "<div><b>$titleText</b>\n";

	if(FALSE == empty($var))
	{
		if ($use_html)
		{
			echo '<pre>';
		}
		if(is_array($var))
		{
			echo "Number of elements: " . count($var) . "\n";
			print_r($var);
		}
		elseif(is_object($var))
		{
			print_r($var);
		}
		elseif(is_string($var))
		{
			print_r(htmlentities(str_replace("\t", '  ', $var)));
		}
		elseif(is_bool($var))
		{
			echo $var === true ? 'true' : 'false';
		}
		else
		{
			print_r($var);
		}
		if ($use_html)
		{
			echo '</pre>';
		}
	}
	if ($use_html)
		echo "</div>\n";

	$output = ob_get_contents();
	ob_end_clean();

	if($echo_to_screen)
	{
		echo $output;
	}

	return $output;
}

/**
 * Display $var nicely only if $config["debug"] is set
 *
 * @param mixed $var
 * @param string $title
 */
function debug_output($var, $title="")
{
	global $gCms;
	if($gCms->config["debug"] == true)
	{
		debug_display($var, $title, true);
	}

}

function debug_to_log($var, $title='')
{
	global $gCms;

	$errlines = explode("\n",debug_display($var, $title, false, false));
	$filename = TMP_CACHE_LOCATION . '/debug.log';
	//$filename = dirname(dirname(__FILE__)) . '/uploads/debug.log';
	foreach ($errlines as $txt)
	{
		error_log($txt . "\n", 3, $filename);
	}
}

/**
 * Display $var nicely to the $gCms->errors array if $config['debug'] is set
 *
 * @param mixed $var
 * @param string $title
 */
function debug_buffer($var, $title="")
{
	$gCms = cmsms();
	if ($gCms)
	{
		if(CmsConfig::get("debug") == true)
		{
			$gCms->errors[] = debug_display($var, $title, false, true);
		}
	}
}

function debug_sql($str, $newline)
{
	global $gCms;
	if ($gCms)
	{
		$config =& $gCms->GetConfig();

		if($config["debug"] == true)
		{
			$gCms->errors[] = debug_display($str, '', false, true);
		}
	}
}

/**
* Retrieve value from $_REQUEST. Returns $default_value if
*		value is not in $_REQUEST or is not the same basic type as
*		$default_value.
*		If $session_key is set, then will return session value in preference
*		to $default_value if $_REQUEST[$value] is not set.
*
* @param string $value
* @param mixed $default_value (optional)
* @param string $session_key (optional)
* @return mixed
*/
function get_request_value($value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['request_values'][$session_key][$value]))
		{
			$default_value = $_SESSION['request_values'][$session_key][$value];
		}
	}
	if(isset($_REQUEST[$value]))
	{
		$result = get_value_with_default($_REQUEST[$value], $default_value);
	}
	else
	{
		$result = $default_value;
	}

	if($session_key != '')
	{
		$_SESSION['request_values'][$session_key][$value] = $result;
	}

	return $result;
}

/**
* Return $value if it's set and same basic type as $default_value,
*			otherwise return $default_value. Note. Also will trim($value)
*			if $value is not numeric.
*
* @param string $value
* @param mixed $default_value
* @return mixed
*/
function get_value_with_default($value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['default_values'][$session_key]))
		{
			$default_value = $_SESSION['default_values'][$session_key];
		}
	}

	// set our return value to the default initially and overwrite with $value if we like it.
	$return_value = $default_value;

	if(isset($value))
	{
		if(is_array($value))
		{
			// $value is an array - validate each element.
			$return_value = array();
			foreach($value as $element)
			{
				$return_value[] = get_value_with_default($element, $default_value);
			}
		}
		else
		{
			if(is_numeric($default_value))
			{
				if(is_numeric($value))
				{
					$return_value = $value;
				}
			}
			else
			{
				$return_value = trim($value);
			}
		}
	}

	if($session_key != '')
	{
		$_SESSION['default_values'][$session_key] = $return_value;
	}

	return $return_value;
}

/**
 * Retrieve the $value from the $parameters array checking for
 * $parameters[$value] and $params[$id.$value]. Returns $default
 * if $value is not in $params array.
 * Note: This function will also trim() string values.
 *
 * @param array $parameters
 * @param string $value
 * @param mixed $default_value
 * @param string $session_key
 * @return mixed
 */
function get_parameter_value($parameters, $value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['parameter_values'][$session_key]))
		{
			$default_value = $_SESSION['parameter_values'][$session_key];
		}
	}

	// set our return value to the default initially and overwrite with $value if we like it.
	$return_value = $default_value;
	if(isset($parameters[$value]))
	{
		if(is_bool($default_value))
		{
			// want a boolean return_value
			if(isset($parameters[$value]))
			{
				$return_value = (boolean)$parameters[$value];
			}
		}
		else
		{
			// is $default_value a number?
			$is_number = false;
			if(is_numeric($default_value))
			{
				$is_number = true;
			}

			if(is_array($parameters[$value]))
			{
				// $parameters[$value] is an array - validate each element.
				$return_value = array();
				foreach($parameters[$value] as $element)
				{
					$return_value[] = get_value_with_default($element, $default_value);
				}
			}
			else
			{
				if(is_numeric($default_value))
				{
					// default value is a number, we only like $parameters[$value] if it's a number too.
					if(is_numeric($parameters[$value]))
					{
						$return_value = $parameters[$value];
					}
				}
				elseif(is_string($default_value))
				{
					$return_value = trim($parameters[$value]);
				}
				else
				{
					$return_value = $parameters[$value];
				}
			}
		}
	}

	if($session_key != '')
	{
		$_SESSION['parameter_values'][$session_key] = $return_value;
	}

	return $return_value;
}

function create_encoding_dropdown($name = 'encoding', $selected = '')
{
	$result = '';

	$encodings = array(''=>'Default','UTF-8'=>'Unicode','ISO-8859-1'=>'Latin 1/West European','ISO-8859-2'=>'Latin 2/Central European','ISO-8859-3'=>'Latin 3/South European','ISO-8859-4'=>'Latin 4/North European','ISO-8859-5'=>'Cyrilic','ISO-8859-6'=>'Arabic','ISO-8859-7'=>'Greek','ISO-8859-8'=>'Hebrew','ISO-8859-9'=>'Latin 5/Turkish','ISO-8859-11'=>'TIS-620/Thai','ISO-8859-14'=>'Latin 8','ISO-8859-15'=>'Latin 9','Big5'=>'Taiwanese','GB2312'=>'Chinese','EUC-JP'=>'Japanese','EUC-KR'=>'Korean','KOI8-R'=>'Russian','Windows-1250'=>'Central Europe','Windows-1251'=>'Cyrilic','Windows-1252'=>'Latin 1','Windows-1253'=>'Greek','Windows-1254'=>'Turkish','Windows-1255'=>'Hebrew','Windows-1256'=>'Arabic','Windows-1257'=>'Baltic','Windows-1258'=>'Vietnam');

	$result .= '<select name="'.$name.'">';
	foreach ($encodings as $key=>$value)
	{
		$result .= '<option value="'.$key.'"';
		if ($selected == $key)
		{
			$result .= ' selected="selected"';
		}
		$result .= '>'.$key.($key!=''?' - ':'').$value.'</option>';
	}
	$result .= '</select>';

	return $result;
}


function cms_mapi_remove_permission($permission_name)
{
  global $gCms;
  $db =& $gCms->GetDB();

  $query = "SELECT permission_id FROM ".cms_db_prefix()."permissions WHERE permission_name = ?";
  $row = $db->GetRow($query, array($permission_name));

  if ($row)
    {
      $id = $row["permission_id"];

      $query = "DELETE FROM ".cms_db_prefix()."group_perms WHERE permission_id = ?";
      $db->Execute($query, array($id));

      $query = "DELETE FROM ".cms_db_prefix()."permissions WHERE permission_id = ?";
      $db->Execute($query, array($id));
    }
}

function cms_mapi_create_permission($cms, $permission_name, $permission_text)
{
	global $gCms;
	$db = &$gCms->GetDb();

	$query = "SELECT permission_id FROM ".cms_db_prefix()."permissions WHERE permission_name =" . $db->qstr($permission_name);
	$result = $db->Execute($query);

	if ($result && $result->RecordCount() < 1) {

		$new_id = $db->GenID(cms_db_prefix()."permissions_seq");
		$query = "INSERT INTO ".cms_db_prefix()."permissions (permission_name, permission_text, create_date, modified_date) VALUES (".$db->qstr($permission_name).",".$db->qstr($permission_text).",".$db->DBTimeStamp(time()).",".$db->DBTimeStamp(time()).")";
		$db->Execute($query);
	}

	if ($result)
	{
		$result->Close();
		return true;
	}
	return false;
}


function filespec_is_excluded( $file, $excludes )
{
  // strip the path from the file
  if( empty($excludes) ) return false;
  foreach( $excludes as $excl )
    {
      if( @preg_match( "/".$excl."/i", basename($file) ) )
	{
	  return true;
	}
    }
  return false;
}


/**
 * Check the permissions of a directory recursively to make sure that
 * we have write permission to all files
 * &param  path      start path
*/
function is_directory_writable( $path )
{
//   if( can_admin_upload() == FALSE )
//     {
//       return false;
//     }

  if ( substr ( $path , strlen ( $path ) - 1 ) != '/' )
    {
      $path .= '/' ;
    }

  $result = true;
  if( $handle = @opendir( $path ) )
    {
      while( false !== ( $file = readdir( $handle ) ) )
	{
	  if( $file == '.' || $file == '..' )
	    {
	      continue;
	    }

	  $p = $path.$file;

	  if( !@is_writable( $p ) )
	    {
	      return false;
	    }

	  if( @is_dir( $p ) )
	    {
	      $result = is_directory_writable( $p );
	      if( !$result )
		{
		  return false;
		}
	    }
	}
      @closedir( $handle );
    }
  else
    {
      return false;
    }

  return true;
}

/**
 * Return an array containing a list of files in a directory
 * performs a non recursive search
 * @param dir - (string) path to search
 * @param extensions - (comma separated string) include only files matching these extensions
 * @param excludedot - (boolean) exclude files starting with .
 * @param excludedir - (boolean) exclude directories
 * @param fileprefix - (string) prefix for filename matches
 * @param excludefiles - (boolean) if false, and fileprefix is not empty, only include files that match the prefix.  if true, and fileprefix is not empty, exclude all files that match the prefix.
 */
function get_matching_files($dir,$extensions = '',$excludedot = true,$excludedir = true,
			    $fileprefix='',$excludefiles=1)
{

  $dh = @opendir($dir);
  if( !$dh )
    {
      die('DEBUG: '.$dir.' does not exist');
      return false;
    }

  if( !empty($extensions) )
    {
      $extensions = explode(',',strtolower($extensions));
    }
  $results = array();
  while( false !== ($file = readdir($dh)) )
    {
      if( $file == '.' || $file == '..' ) continue;
      if( startswith($file,'.') && $excludedot ) continue;
      if( is_dir(cms_join_path($dir,$file)) && $excludedir ) continue;
      if( !empty($fileprefix) )
	{
	  // are we explicitly excluding files that start with a prefix.
	  if( $excludefiles == 1 && startswith($file,$fileprefix) ) continue;

	  // are we explicitly only including files that start with a prefix.
	  if( $excludefiles == 0 && !startswith($file,$fileprefix) ) continue;
	}

      $ext = strtolower(substr($file,strrpos($file,'.')+1));
      if( is_array($extensions) && count($extensions) && !in_array($ext,$extensions) ) continue;
      $results[] = $file;
    }
  closedir($dh);
  if( !count($results) ) return false;
  return $results;
}


/**
 * Return an array containing a list of files in a directory
 * performs a recursive serach
 * @param  path      start path
 * @param  maxdepth  how deep to browse (-1=unlimited)
 * @param  mode      "FULL"|"DIRS"|"FILES"
 * @param  d         for internal use only
**/
function get_recursive_file_list ( $path , $excludes, $maxdepth = -1 , $mode = "FULL" , $d = 0 )
{
   if ( substr ( $path , strlen ( $path ) - 1 ) != '/' ) { $path .= '/' ; }
   $dirlist = array () ;
   if ( $mode != "FILES" ) { $dirlist[] = $path ; }
   if ( $handle = opendir ( $path ) )
   {
       while ( false !== ( $file = readdir ( $handle ) ) )
       {
	 if( $file == '.' || $file == '..' ) continue;
	 if( filespec_is_excluded( $file, $excludes ) ) continue;

	 $file = $path . $file ;
	 if ( ! @is_dir ( $file ) ) { if ( $mode != "DIRS" ) { $dirlist[] = $file ; } }
	 elseif ( $d >=0 && ($d < $maxdepth || $maxdepth < 0) )
	   {
	     $result = get_recursive_file_list ( $file . '/' , $excludes, $maxdepth , $mode , $d + 1 ) ;
	     $dirlist = array_merge ( $dirlist , $result ) ;
	   }
       }
       closedir ( $handle ) ;
   }
   if ( $d == 0 ) { natcasesort ( $dirlist ) ; }
   return ( $dirlist ) ;
}


function recursive_delete( $dirname )
{
  // all subdirectories and contents:
  if(is_dir($dirname))$dir_handle=opendir($dirname);
  while($file=readdir($dir_handle))
  {
    if($file!="." && $file!="..")
    {
      if(!is_dir($dirname."/".$file))
	{
	  if( !@unlink ($dirname."/".$file) )
	    {
	      closedir( $dir_handle );
	      return false;
	    }
	}
      else
	{
	  recursive_delete($dirname."/".$file);
	}
    }
  }
  closedir($dir_handle);
  if( ! @rmdir($dirname) )
    {
      return false;
    }
  return true;
}


function chmod_r( $path, $mode )
{
  if( !is_dir( $path ) )
    return chmod( $path, $mode );

  $dh = @opendir( $path );
  if( !$dh ) return FALSE;

  while( $file = readdir( $dh ) )
  {
    if( $file == '.' || $file == '..' ) continue;

    $p = $path.DIRECTORY_SEPARATOR.$file;
    if( is_dir( $p ) )
    {
      if( !@chmod_r( $p, $mode ) )
	{
	  closedir( $dh );
	  return false;
	}
    }
    else if( !is_link( $p ) )
    {
      if( !@chmod( $p, $mode ) )
	{
	  closedir( $dh );
	  return false;
	}
    }
  }
  @closedir( $dh );
  return @chmod( $path, $mode );
}


function SerializeObject(&$object)
{
	return base64_encode(serialize($object));
}

function UnserializeObject(&$serialized)
{
	return  unserialize(base64_decode($serialized));
}

function starts_with( $haystack, $needle )
{
	if (!is_string($haystack)) return false;
	return ( substr( $haystack, 0, strlen( $needle ) ) == $needle );
}

function startswith( $haystack, $needle )
{
	return starts_with( $haystack, $needle );
}

function ends_with( $haystack, $needle )
{
	if (!is_string($haystack)) return false;
	return ( substr( $haystack, strlen( $haystack ) - strlen( $needle ) ) == $needle );
}

function endswith( $haystack, $needle )
{
	return ends_with( $haystack, $needle );
}

/**
 * Returns given $lower_case_and_underscored_word as a camelCased word.
 * Take from cakephp (http://cakephp.org)
 * Licensed under the MIT License
 *
 * @param string $lower_case_and_underscored_word Word to camelize
 * @return string Camelized word. likeThis.
 */
function camelize($lowerCaseAndUnderscoredWord)
{
	$replace = str_replace(" ", "", ucwords(str_replace("_", " ", $lowerCaseAndUnderscoredWord)));
	return $replace;
}

/**
 * Returns an underscore-syntaxed ($like_this_dear_reader) version of the $camel_cased_word.
 * Take from cakephp (http://cakephp.org)
 * Licensed under the MIT License
 *
 * @param string $camel_cased_word Camel-cased word to be "underscorized"
 * @return string Underscore-syntaxed version of the $camel_cased_word
 */
function underscore($camelCasedWord)
{
	$replace = strtolower(preg_replace('/(?<=\\w)([A-Z])/', '_\\1', $camelCasedWord));
	return $replace;
}

/**
 * Returns a human-readable string from $lower_case_and_underscored_word,
 * by replacing underscores with a space, and by upper-casing the initial characters.
 * Take from cakephp (http://cakephp.org)
 * Licensed under the MIT License
 *
 * @param string $lower_case_and_underscored_word String to be made more readable
 * @return string Human-readable string
 */
function humanize($lowerCaseAndUnderscoredWord)
{
	$replace = ucwords(str_replace("_", " ", $lowerCaseAndUnderscoredWord));
	return $replace;
}

function showmem($string = '')
{
	var_dump($string . ' -- ' . memory_get_usage());
}

function munge_string_to_url($alias, $tolower = false)
{
	// replacement.php is encoded utf-8 and must be the first modification of alias
	include(dirname(__FILE__) . '/replacement.php');
	$alias = str_replace($toreplace, $replacement, $alias);

	// lowercase only on empty aliases
	if ($tolower == true)
	{
		$alias = strtolower($alias);
	}

	$alias = preg_replace('/[^a-z0-9-_]+/i','-',$alias);
	$alias = trim($alias, '-');

	return $alias;
}

/*
 * Sanitize input to prevent against XSS and other nasty stuff.
 * Taken from cakephp (http://cakephp.org)
 * Licensed under the MIT License
 */
function cleanValue($val) {
	if ($val == "") {
		return $val;
	}
	//Replace odd spaces with safe ones
	$val = str_replace(" ", " ", $val);
	$val = str_replace(chr(0xCA), "", $val);
	//Encode any HTML to entities (including \n --> <br />)
	$val = cleanHtml($val);
	//Double-check special chars and remove carriage returns
	//For increased SQL security
	$val = preg_replace("/\\\$/", "$", $val);
	$val = preg_replace("/\r/", "", $val);
	$val = str_replace("!", "!", $val);
	$val = str_replace("'", "'", $val);
	//Allow unicode (?)
	$val = preg_replace("/&amp;#([0-9]+);/s", "&#\\1;", $val);
	//Add slashes for SQL
	//$val = $this->sql($val);
	//Swap user-inputted backslashes (?)
	$val = preg_replace("/\\\(?!&amp;#|\?#)/", "\\", $val);
	return $val;
}

/*
 * Method to sanitize incoming html.
 * Take from cakephp (http://cakephp.org)
 * Licensed under the MIT License
 */
function cleanHtml($string, $remove = false) {
	if ($remove) {
		$string = strip_tags($string);
	} else {
		$patterns = array("/\&/", "/%/", "/</", "/>/", '/"/', "/'/", "/\(/", "/\)/", "/\+/", "/-/");
		$replacements = array("&amp;", "&#37;", "&lt;", "&gt;", "&quot;", "&#39;", "&#40;", "&#41;", "&#43;", "&#45;");
		$string = preg_replace($patterns, $replacements, $string);
	}
	return $string;
}


/**
 * Method to sanitize all entries in
 * a hash
 *
*/
function cleanParamHash($modulename,$data,$map = false,
			$allow_unknown = false,$clean_keys = true)
{
  $mappedcount = 0;
  $result = array();
  foreach( $data as $key => $value )
	{
	  $mapped = false;
	  $paramtype = '';
	  if( is_array($map) )
		{
		  if( isset($map[$key]) )
			{
				$paramtype = $map[$key];
			}
		  else {
			  // Key not found in the map
			  // see if one matches via regular expressions
			  foreach( $map as $mk => $mv ) {
				  if(strstr($mk,CLEAN_REGEXP) === FALSE) continue;

				  // mk is a regular expression
				  $ss = substr($mk,strlen(CLEAN_REGEXP));
				  if( $ss !== FALSE ) {
					  if( preg_match($ss, $key) ) {
						  // it matches, we now know what type to use
						  $paramtype = $mv;
						  break;
					  }
				  }
			  }
		  } // else

		  if( $paramtype != '' ) {
			  switch( $paramtype ) {
			  case 'CLEAN_INT':
				  $mappedcount++;
				  $mapped = true;
				  $value = (int) $value;
				  break;
			  case 'CLEAN_FLOAT':
				  $mappedcount++;
				  $mapped = true;
				  $value = (float) $value;
				  break;
			  case 'CLEAN_NONE':
				  // pass through without cleaning.
				  $mappedcount++;
				  $mapped = true;
				  break;
			  case 'CLEAN_STRING':
				  $value = cms_htmlentities($value);
				  $mappedcount++;
				  $mapped = true;
				  break;
			  case 'CLEAN_FILE':
				  $value = cms_cleanfile($value);
				  $mappedcount++;
				  $mapped = true;
				  break;
			  default:
				  $mappedcount++;
				  $mapped = true;
				  $value = cms_htmlentities($value);
				  break;
			  } // switch
		  } // if $paramtype

		}

	  // we didn't clean this yet
	  if( $allow_unknown && !$mapped )
		{
		  // but we're allowing unknown stuff so we'll just clean it.
		  $value = cms_htmlentities($value);
		  $mappedcount++;
		  $mapped = true;
		}

	  if( $clean_keys )
		{
		  $key = cms_htmlentities($key);
		}

	  if( !$mapped && !$allow_unknown )
		{
		  trigger_error('Parameter '.$key.' is not known by module '.$modulename.' dropped',E_USER_WARNING);
		  continue;
		}
	  $result[$key]=$value;
	}
  return $result;
}

/**
 * Returns all parameters sent that are destined for the module with
 * the given $id
 */
function GetModuleParameters($id)
{
	$params = array();

	if ($id != '')
	{
		foreach ($_REQUEST as $key=>$value)
		{
			if (strpos($key, (string)$id) !== FALSE && strpos($key, (string)$id) == 0)
			{
				$key = str_replace($id, '', $key);
				if( $key == 'id' || $key == 'returnid' )
				{
					$value = (int)$value;
				}
				$params[$key] = $value;
			}
		}
	}

	return $params;
}

function can_users_upload()
{
  # first, check to see if safe mode is enabled
  # if it is, then check to see the owner of the index.php, moduleinterface.php
  # and the uploads and modules directory.  if they all match, then we
  # can upload files.
  # if safe mode is off, then we just have to check the permissions.
  global $gCms;
  $file_index = $gCms->config['root_path'].DIRECTORY_SEPARATOR.'index.php';
  $dir_uploads = $gCms->config['uploads_path'];

  $stat_index = @stat($file_index);
  $stat_uploads = @stat($dir_uploads);

  if( $stat_index == FALSE || $stat_uploads == FALSE )
    {
      // couldn't get some necessary information.
      return false;
    }

  $safe_mode = ini_get_boolean('safe_mode');
  if( $safe_mode )
    {
      // we're in safe mode.
      if( $stat_index[4] != $stat_uploads[4] )
	{
	  return FALSE;
	}
    }

  // now check to see if we can write to the directories
  if( !is_writable( $dir_modules ) )
    {
      return FALSE;
    }
  if( !is_writable( $dir_uploads ) )
    {
      return FALSE;
    }

  // It all worked.
  return TRUE;
}

function can_admin_upload()
{
  # first, check to see if safe mode is enabled
  # if it is, then check to see the owner of the index.php, moduleinterface.php
  # and the uploads and modules directory.  if they all match, then we
  # can upload files.
  # if safe mode is off, then we just have to check the permissions.
  global $gCms;
  $file_index = $gCms->config['root_path'].DIRECTORY_SEPARATOR.'index.php';
  $file_moduleinterface = $gCms->config['root_path'].DIRECTORY_SEPARATOR.
    $gCms->config['admin_dir'].DIRECTORY_SEPARATOR.'moduleinterface.php';
  $dir_uploads = $gCms->config['uploads_path'];
  $dir_modules = $gCms->config['root_path'].DIRECTORY_SEPARATOR.'modules';

  $stat_index = @stat($file_index);
  $stat_moduleinterface = @stat($file_moduleinterface);
  $stat_uploads = @stat($dir_uploads);
  $stat_modules = @stat($dir_modules);

  $my_uid = @getmyuid();

  if( $my_uid === FALSE || $stat_index == FALSE ||
      $stat_moduleinterface == FALSE || $stat_uploads == FALSE ||
      $stat_modules == FALSE )
    {
      // couldn't get some necessary information.
      return FALSE;
    }

  $safe_mode = ini_get_boolean('safe_mode');
  if( $safe_mode )
    {

      // we're in safe mode.
      if( ($stat_moduleinterface[4] != $stat_modules[4]) ||
	  ($stat_moduleinterface[4] != $stat_uploads[4]) ||
	  ($my_uid != $stat_moduleinterface[4]) )
	{
	  // owners don't match
	  return FALSE;
	}
    }

  // now check to see if we can write to the directories
  if( !is_writable( $dir_modules ) )
    {
      return FALSE;
    }
  if( !is_writable( $dir_uploads ) )
    {
      return FALSE;
    }

  // It all worked.
  return TRUE;
}

function interpret_permissions($perms)
{
  $owner = array();
  $group = array();
  $other = array();

  if( $perms & 0400 )
    {
      $owner[] = lang('read');
    }
  if( $perms & 0200 )
    {
      $owner[] = lang('write');
    }
  if( $perms & 0100 )
    {
      $owner[] = lang('execute');
    }

  if( $perms & 0040 )
    {
      $group[] = lang('read');
    }
  if( $perms & 0020 )
    {
      $group[] = lang('write');
    }
  if( $perms & 0010 )
    {
      $group[] = lang('execute');
    }

  if( $perms & 0004 )
    {
      $other[] = lang('read');
    }
  if( $perms & 0002 )
    {
      $other[] = lang('write');
    }
  if( $perms & 0001 )
    {
      $other[] = lang('execute');
    }

  return array($owner,$group,$other);
}

function ini_get_boolean($str)
{
	$val1 = ini_get($str);
	$val2 = strtolower($val1);

	$ret = 0;
	if( $val2 == 1 || $val2 == '1' || $val2 == 'yes' || $val2 == 'true' || $val2 == 'on' )
		$ret = 1;
	return $ret;
}

function stack_trace()
{
	$stack = debug_backtrace();
	foreach( $stack as $elem )
	{
		if( $elem['function'] == 'stack_trace' ) continue;
		if( isset($elem['file']) )
			echo $elem['file'].':'.$elem['line'].' - '.$elem['function'].'<br/>';
	}
}


function cms_move_uploaded_file( $tmpfile, $destination )
{
   global $gCms;
   $config = & $gCms->GetConfig();

   if( !@move_uploaded_file( $tmpfile, $destination ) )
   {
      return false;
   }

   @chmod($destination,octdec($config['default_upload_permission']));
   return true;
}

function csscache_csvfile_to_hash($filename)
{
	if( !is_readable($filename) ) return false;
	$tmp = @file($filename);
	if( !is_array($tmp) || !count($tmp) ) return false;

	$result = array();
	foreach( $tmp as $one )
	{
		$vals = explode(',',trim($one));
		$result[$vals[0]] = $vals[1];
	}
	return $result;
}

function csscache_hash_to_csvfile($filename,$hash)
{
	$fh = @fopen($filename,'w');
	if( !$fh ) return false;
	foreach( $hash as $key => $val )
	{
		$key = trim($key); $val = trim($val);
		$line = "$key,$val\n";
		fwrite($fh,$line);
	}
	fclose($fh);
}

function css_cache_clear($filename)
{
	@unlink($filename);
}

function cms_ipmatches($ip,$checklist)
{
	if( !function_exists('__testip') ) {
		function __testip($range,$ip)
		{
			$result = 1;

			// IP Pattern Matcher
			// J.Adams <jna@retina.net>
			//
			// Matches:
			//
			// xxx.xxx.xxx.xxx        (exact)
			// xxx.xxx.xxx.[yyy-zzz]  (range)
			// xxx.xxx.xxx.xxx/nn    (nn = # bits, cisco style -- i.e. /24 = class C)
			//
			// Does not match:
			// xxx.xxx.xxx.xx[yyy-zzz]  (range, partial octets not supported)

			if (ereg("([0-9]+)\.([0-9]+)\.([0-9]+)\.([0-9]+)/([0-9]+)",$range,$regs)) {
				// perform a mask match
				$ipl = ip2long($ip);
				$rangel = ip2long($regs[1] . "." . $regs[2] . "." . $regs[3] . "." . $regs[4]);

				$maskl = 0;

				for ($i = 0; $i< 31; $i++) {
					if ($i < $regs[5]-1) {
						$maskl = $maskl + pow(2,(30-$i));
					}
				}

				if (($maskl & $rangel) == ($maskl & $ipl)) {
					return 1;
				} else {
					return 0;
				}
			} else {
				// range based
				$maskocts = split("\.",$range);
				$ipocts = split("\.",$ip);

				// perform a range match
				for ($i=0; $i<4; $i++) {
					if (ereg("\[([0-9]+)\-([0-9]+)\]",$maskocts[$i],$regs)) {
						if ( ($ipocts[$i] > $regs[2]) || ($ipocts[$i] < $regs[1])) {
							$result = 0;
						}
					}
					else
					{
						if ($maskocts[$i] <> $ipocts[$i]) {
							$result = 0;
						}
					}
				}
			}
			return $result;
		} // __testip
	} // if

	if( !is_array($checklist) )
	{
		$checklist = explode(',',$checklist);
	}
	foreach( $checklist as $one )
	{
		if( __testip(trim($one),$ip) ) return TRUE;
	}
	return FALSE;
}

function get_current_url()
{
	return CmsRequest::get_requested_uri();
}

/**
 * @package	isemail
 * @author	Dominic Sayers <dominic_sayers@hotmail.com>
 * @copyright	2009 Dominic Sayers
 * @license	http://www.opensource.org/licenses/cpal_1.0 Common Public Attribution License Version 1.0 (CPAL) license
 * @link	http://www.dominicsayers.com/isemail
 * @version	1.9 - Minor modifications to make it compatible with PHPLint
 * @return boolean
 * @var string  $email
 * @var boolean $checkDNS
*/
function is_email( $email, $checkDNS=false ) {
	// Check that $email is a valid address. Read the following RFCs to understand the constraints:
	// 	(http://tools.ietf.org/html/rfc5322)
	// 	(http://tools.ietf.org/html/rfc3696)
	// 	(http://tools.ietf.org/html/rfc5321)
	// 	(http://tools.ietf.org/html/rfc4291#section-2.2)
	// 	(http://tools.ietf.org/html/rfc1123#section-2.1)

	// the upper limit on address lengths should normally be considered to be 256
	// 	(http://www.rfc-editor.org/errata_search.php?rfc=3696)
	// 	NB I think John Klensin is misreading RFC 5321 and the the limit should actually be 254
	// 	However, I will stick to the published number until it is changed.
	//
	// The maximum total length of a reverse-path or forward-path is 256
	// characters (including the punctuation and element separators)
	// 	(http://tools.ietf.org/html/rfc5321#section-4.5.3.1.3)
	$emailLength = strlen($email);
	if ($emailLength > 256)	return false;	// Too long

	// Contemporary email addresses consist of a "local part" separated from
	// a "domain part" (a fully-qualified domain name) by an at-sign ("@").
	// 	(http://tools.ietf.org/html/rfc3696#section-3)
	$atIndex = strrpos($email,'@');

	if ($atIndex === false) return false;	// No at-sign
	if ($atIndex === 0) return false;	// No local part
	if ($atIndex === $emailLength) return false;	// No domain part

	// Sanitize comments
	// - remove nested comments, quotes and dots in comments
	// - remove parentheses and dots from quoted strings
	$braceDepth	= 0;
	$inQuote	= false;
	$escapeThisChar	= false;

	for ($i = 0; $i < $emailLength; ++$i) {
		$char = $email[$i];
		$replaceChar = false;

		if ($char === '\\') {
			$escapeThisChar = !$escapeThisChar;	// Escape the next character?
		} else {
			switch ($char) {
			case '(':
				if ($escapeThisChar) {
					$replaceChar = true;
				} else {
					if ($inQuote) {
						$replaceChar = true;
					} else {
						if ($braceDepth++ > 0) $replaceChar = true;	// Increment brace depth
					}
				}

				break;
			case ')':
				if ($escapeThisChar) {
					$replaceChar = true;
				} else {
					if ($inQuote) {
						$replaceChar = true;
					} else {
						if (--$braceDepth > 0) $replaceChar = true;	// Decrement brace depth
						if ($braceDepth < 0) $braceDepth = 0;
					}
				}

				break;
			case '"':
				if ($escapeThisChar) {
					$replaceChar = true;
				} else {
					if ($braceDepth === 0) {
						$inQuote = !$inQuote;	// Are we inside a quoted string?
					} else {
						$replaceChar = true;
					}
				}

				break;
			case '.':	// Dots don't help us either
				if ($escapeThisChar) {
					$replaceChar = true;
				} else {
					if ($braceDepth > 0) $replaceChar = true;
				}

				break;
			default:
			}

			$escapeThisChar = false;
			if ($replaceChar) $email[$i] = 'x';	// Replace the offending character with something harmless
		}
	}

	$localPart	= substr($email, 0, $atIndex);
	$domain		= substr($email, $atIndex + 1);
	$FWS		= "(?:(?:(?:[ \\t]*(?:\\r\\n))?[ \\t]+)|(?:[ \\t]+(?:(?:\\r\\n)[ \\t]+)*))";	// Folding white space
	// Let's check the local part for RFC compliance...
	//
	// local-part      =       dot-atom / quoted-string / obs-local-part
	// obs-local-part  =       word *("." word)
	// 	(http://tools.ietf.org/html/rfc5322#section-3.4.1)
	//
	// Problem: need to distinguish between "first.last" and "first"."last"
	// (i.e. one element or two). And I suck at regexes.
	$dotArray = preg_split('/\\.(?=(?:[^\\"]*\\"[^\\"]*\\")*(?![^\\"]*\\"))/m', $localPart);
	$partLength	= 0;

	foreach ($dotArray as $element) {
		// Remove any leading or trailing FWS
		$element = preg_replace("/^$FWS|$FWS\$/", '', $element);

		// Then we need to remove all valid comments (i.e. those at the start or end of the element
		$elementLength = strlen($element);

		if ($element[0] === '(') {
			$indexBrace = strpos($element, ')');
			if ($indexBrace !== false) {
				if (preg_match('/(?<!\\\\)[\\(\\)]/', substr($element, 1, $indexBrace - 1)) > 0) {
					return false;	// Illegal characters in comment
				}
				$element = substr($element, $indexBrace + 1, $elementLength - $indexBrace - 1);
				$elementLength = strlen($element);
			}
		}

		if ($element[$elementLength - 1] === ')') {
			$indexBrace = strrpos($element, '(');
			if ($indexBrace !== false) {
				if (preg_match('/(?<!\\\\)(?:[\\(\\)])/', substr($element, $indexBrace + 1, $elementLength - $indexBrace - 2)) > 0) {
					return false;	// Illegal characters in comment
				}
				$element = substr($element, 0, $indexBrace);
				$elementLength = strlen($element);
			}
		}

		// Remove any leading or trailing FWS around the element (inside any comments)
		$element = preg_replace("/^$FWS|$FWS\$/", '', $element);

		// What's left counts towards the maximum length for this part
		if ($partLength > 0) $partLength++;	// for the dot
		$partLength += strlen($element);

		// Each dot-delimited component can be an atom or a quoted string
		// (because of the obs-local-part provision)
		if (preg_match('/^"(?:.)*"$/s', $element) > 0) {
			// Quoted-string tests:
			//
			// Remove any FWS
			$element = preg_replace("/(?<!\\\\)$FWS/", '', $element);
			// My regex skillz aren't up to distinguishing between \" \\" \\\" \\\\" etc.
			// So remove all \\ from the string first...
			$element = preg_replace('/\\\\\\\\/', ' ', $element);
			if (preg_match('/(?<!\\\\|^)["\\r\\n\\x00](?!$)|\\\\"$|""/', $element) > 0)	return false;	// ", CR, LF and NUL must be escaped, "" is too short
		} else {
			// Unquoted string tests:
			//
			// Period (".") may...appear, but may not be used to start or end the
			// local part, nor may two or more consecutive periods appear.
			// 	(http://tools.ietf.org/html/rfc3696#section-3)
			//
			// A zero-length element implies a period at the beginning or end of the
			// local part, or two periods together. Either way it's not allowed.
			if ($element === '') return false;	// Dots in wrong place

			// Any ASCII graphic (printing) character other than the
			// at-sign ("@"), backslash, double quote, comma, or square brackets may
			// appear without quoting.  If any of that list of excluded characters
			// are to appear, they must be quoted
			// 	(http://tools.ietf.org/html/rfc3696#section-3)
			//
			// Any excluded characters? i.e. 0x00-0x20, (, ), <, >, [, ], :, ;, @, \, comma, period, "
			if (preg_match('/[\\x00-\\x20\\(\\)<>\\[\\]:;@\\\\,\\."]/', $element) > 0) return false;	// These characters must be in a quoted string
		}
	}

	if ($partLength > 64) return false;	// Local part must be 64 characters or less

	// Now let's check the domain part...
	// The domain name can also be replaced by an IP address in square brackets
	// 	(http://tools.ietf.org/html/rfc3696#section-3)
	// 	(http://tools.ietf.org/html/rfc5321#section-4.1.3)
	// 	(http://tools.ietf.org/html/rfc4291#section-2.2)
	if (preg_match('/^\\[(.)+]$/', $domain) === 1) {
		// It's an address-literal
		$addressLiteral = substr($domain, 1, strlen($domain) - 2);
		$matchesIP = array();

		// Extract IPv4 part from the end of the address-literal (if there is one)
		if (preg_match('/\\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/', $addressLiteral, $matchesIP) > 0) {
			$index = strrpos($addressLiteral, $matchesIP[0]);

			if ($index === 0) {
				// Nothing there except a valid IPv4 address, so...
				return true;
			} else {
				// Assume it's an attempt at a mixed address (IPv6 + IPv4)
				if ($addressLiteral[$index - 1] !== ':') return false;	// Character preceding IPv4 address must be ':'
				if (substr($addressLiteral, 0, 5) !== 'IPv6:') return false;	// RFC5321 section 4.1.3
				$IPv6 = substr($addressLiteral, 5, ($index ===7) ? 2 : $index - 6);
				$groupMax = 6;
			}
		} else {
			// It must be an attempt at pure IPv6
			if (substr($addressLiteral, 0, 5) !== 'IPv6:') return false;	// RFC5321 section 4.1.3
			$IPv6 = substr($addressLiteral, 5);
			$groupMax = 8;
		}

		$groupCount	= preg_match_all('/^[0-9a-fA-F]{0,4}|\\:[0-9a-fA-F]{0,4}|(.)/', $IPv6, $matchesIP);
		$index = strpos($IPv6,'::');

		if ($index === false) {
			// We need exactly the right number of groups
			if ($groupCount !== $groupMax) return false;	// RFC5321 section 4.1.3
		} else {
			if ($index !== strrpos($IPv6,'::')) return false;	// More than one '::'
			$groupMax = ($index === 0 || $index === (strlen($IPv6) - 2)) ? $groupMax : $groupMax - 1;
			if ($groupCount > $groupMax) return false;	// Too many IPv6 groups in address
		}

		// Check for unmatched characters
		array_multisort($matchesIP[1], SORT_DESC);
		if ($matchesIP[1][0] !== '') return false;	// Illegal characters in address

		// It's a valid IPv6 address, so...
		return true;
	} else {
		// It's a domain name...

		// The syntax of a legal Internet host name was specified in RFC-952
		// One aspect of host name syntax is hereby changed: the
		// restriction on the first character is relaxed to allow either a
		// letter or a digit.
		// 	(http://tools.ietf.org/html/rfc1123#section-2.1)
		//
		// NB RFC 1123 updates RFC 1035, but this is not currently apparent from reading RFC 1035.
		//
		// Most common applications, including email and the Web, will generally not
		// permit...escaped strings
		// 	(http://tools.ietf.org/html/rfc3696#section-2)
		//
		// the better strategy has now become to make the "at least one period" test,
		// to verify LDH conformance (including verification that the apparent TLD name
		// is not all-numeric)
		// 	(http://tools.ietf.org/html/rfc3696#section-2)
		//
		// Characters outside the set of alphabetic characters, digits, and hyphen MUST NOT appear in domain name
		// labels for SMTP clients or servers
		// 	(http://tools.ietf.org/html/rfc5321#section-4.1.2)
		//
		// RFC5321 precludes the use of a trailing dot in a domain name for SMTP purposes
		// 	(http://tools.ietf.org/html/rfc5321#section-4.1.2)
		$dotArray = preg_split('/\\.(?=(?:[^\\"]*\\"[^\\"]*\\")*(?![^\\"]*\\"))/m', $domain);
		$partLength = 0;
		if (count($dotArray) === 1) return false;	// Mail host can't be a TLD

		foreach ($dotArray as $element) {
			// Remove any leading or trailing FWS
			$element = preg_replace("/^$FWS|$FWS\$/", '', $element);

			// Then we need to remove all valid comments (i.e. those at the start or end of the element
			$elementLength = strlen($element);

			if ($element[0] === '(') {
				$indexBrace = strpos($element, ')');
				if ($indexBrace !== false) {
					if (preg_match('/(?<!\\\\)[\\(\\)]/', substr($element, 1, $indexBrace - 1)) > 0) {
						return false;	// Illegal characters in comment
					}
					$element = substr($element, $indexBrace + 1, $elementLength - $indexBrace - 1);
					$elementLength = strlen($element);
				}
			}

			if ($element[$elementLength - 1] === ')') {
				$indexBrace = strrpos($element, '(');
				if ($indexBrace !== false) {
					if (preg_match('/(?<!\\\\)(?:[\\(\\)])/', substr($element, $indexBrace + 1, $elementLength - $indexBrace - 2)) > 0) {
						return false;	// Illegal characters in comment
					}
					$element = substr($element, 0, $indexBrace);
					$elementLength = strlen($element);
				}
			}

			// Remove any leading or trailing FWS around the element (inside any comments)
			$element = preg_replace("/^$FWS|$FWS\$/", '', $element);

			// What's left counts towards the maximum length for this part
			if ($partLength > 0) $partLength++;	// for the dot
			$partLength += strlen($element);

			// The DNS defines domain name syntax very generally -- a
			// string of labels each containing up to 63 8-bit octets,
			// separated by dots, and with a maximum total of 255
			// octets.
			// 	(http://tools.ietf.org/html/rfc1123#section-6.1.3.5)
			if ($elementLength > 63) return false;	// Label must be 63 characters or less

			// Each dot-delimited component must be atext
			// A zero-length element implies a period at the beginning or end of the
			// local part, or two periods together. Either way it's not allowed.
			if ($elementLength === 0) return false;	// Dots in wrong place

			// Any ASCII graphic (printing) character other than the
			// at-sign ("@"), backslash, double quote, comma, or square brackets may
			// appear without quoting.  If any of that list of excluded characters
			// are to appear, they must be quoted
			// 	(http://tools.ietf.org/html/rfc3696#section-3)
			//
			// If the hyphen is used, it is not permitted to appear at
			// either the beginning or end of a label.
			// 	(http://tools.ietf.org/html/rfc3696#section-2)
			//
			// Any excluded characters? i.e. 0x00-0x20, (, ), <, >, [, ], :, ;, @, \, comma, period, "
			if (preg_match('/[\\x00-\\x20\\(\\)<>\\[\\]:;@\\\\,\\."]|^-|-$/', $element) > 0) {
				return false;
			}
		}

		if ($partLength > 255) return false;	// Local part must be 64 characters or less
		if (preg_match('/^[0-9]+$/', $element) > 0)	return false;	// TLD can't be all-numeric

		// Check DNS?
		if ($checkDNS && function_exists('checkdnsrr')) {
			if (!(checkdnsrr($domain, 'A') || checkdnsrr($domain, 'MX'))) {
				return false;	// Domain doesn't actually exist
			}
		}
	}

	// Eliminate all other factors, and the one which remains must be the truth.
	// (Sherlock Holmes, The Sign of Four)
	return true;
}

function cms_file_get_contents($filename)
{
	$content = '';
	if( !preg_match('!^(http|ftp)://!i', $filename) )
	{
		if($fp = @fopen($params['file'],'r')) {
			while(!feof($fp)) {
				$content .= fgets ($fp,4096);
			}
			fclose($fp);
		}
	}
	else if( startswith('http',$filename) )
	{
		$obj = new CmsHttpClient();
		$content  = $obj->do_get($filename);
	}
	return $content;
}

function cms_module_plugin($params, &$smarty)
{
	return CmsModuleOperations::cms_module_plugin($params, $smarty);
}

function in_debug()
{
	return CmsConfig::get("debug") == true;
}

/**
 * Error handler so that we can swallow warning messages and put
 * them in a better place.
 *
 * @author Ted Kulp
 */
function cms_warning_handler($errno, $errstr, $errfile = '', $errline = -1, $errcontext = array())
{
	CmsProfiler::get_instance()->mark('WARNING: ' . $errstr);
}

function strip_extra_params(&$params, $default_params, $other_params_key = '')
{
	$extra_params = array_diff_key($params, $default_params);
	$params = $default_params;
	if ($other_params_key != '' && isset($params[$other_params_key]) && is_array($params[$other_params_key]))
	{
		$extra_params = array_merge($extra_params, $params[$other_params_key]);
		unset($params[$other_params_key]);
	}
	return $extra_params;
}

function start_tag($name, $params, $self_close = false, $extra_html = '', $drop_empty_values = true)
{
	$text = "<{$name}";
	
	foreach ($params as $key=>$value)
	{
		if ($value != '' || !$drop_empty_values)
			$text .= " {$key}=\"{$value}\"";
	}
	
	if ($extra_html != '')
	{
		$text .= " {$extra}";
	}
	
	$text .= ($self_close ? ' />' : '>');
	
	return $text;
}

function end_tag($name)
{
	return "</{$name}>";
}

function substr_match($str1, $str2, $reverse = false)
{
        $len = strlen($str1) <= strlen($str2) ? strlen($str1) : strlen($str2);
        $i = 0;
        
        $cmpstr1 = $str1;
        $cmpstr2 = $str2;
        
        if ($reverse)
        {
                $cmpstr1 = strrev($str1);
                $cmpstr2 = strrev($str2);
        }
        
        for (; $i < $len; $i++)
        {
                if (!isset($cmpstr1[$i]) || !isset($cmpstr2[$i]) || $cmpstr1[$i] != $cmpstr2[$i])
                {
                        break;
                }
        }
        
        if ($reverse)
        {
                $i = strlen($str1) - $i;
                return substr($str1, $i);
        }
        else
        {
                return substr($str1, 0, $i);
        }
        
}

# vim:ts=4 sw=4 noet
?>

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

class CMSInstallerPage1 extends CMSInstallerPage
{
	var $continueon;
	var $special_failed;

	/**
	 * Class constructor
	 * @var object $smarty
	 * @var array  $errors
	 */
	function CMSInstallerPage1(&$smarty, $errors)
	{
		$this->CMSInstallerPage(1, $smarty, $errors);
		$return = testGlobal(array(true, false), true);
	}

	function assignVariables()
	{
		if(isset($_SESSION['debug'])) $debug = true;
		else $debug = false;

		$settings = array('info'=>array(), 'required'=>array(), 'recommended'=>array());

		$open_basedir = ini_get('open_basedir');
		$session_save_path = ini_get('session.save_path');


		/*
		 * Info Settings
		 */
		$settings['info']['server_software'] = $_SERVER['SERVER_SOFTWARE'];
		$settings['info']['server_api'] = PHP_SAPI;
		$settings['info']['server_os'] = PHP_OS .' '. php_uname('r') .' '. lang('on') .' '. php_uname('m');


		/*
		 * Required Settings
		 */
		list($minimum, $recommended) = getTestValues('phpversion');
		$settings['required'][] =
			testVersionRange(true, lang('test_check_php', $minimum) .'<br />'. lang('test_min_recommend', $minimum, $recommended),
				phpversion(), lang('test_requires_php_version', phpversion(), $recommended), $minimum, $recommended, false);

		$settings['required'][] = testBoolean(1, lang('test_check_md5_func'), function_exists('md5'), '', false);

		$settings['required'][] = testBoolean(1, lang('test_check_tokenizer'), function_exists('token_get_all'), lang('test_check_tokenizer_failed'), false);

		list($minimum, $recommended) = getTestValues('gd_version');
		$settings['required'][] = testGDVersion(1, lang('test_check_gd'), $minimum, lang('test_check_gd_failed'));

		$settings['required'][] =
			testBoolean(1, lang('test_check_write') .' '. CONFIG_FILE_LOCATION,
				@is_writable(CONFIG_FILE_LOCATION), lang('test_may_not_exist'), false);

		if (! isset($_SESSION['allowsafemode']))
		{
			$settings['required'][] = testCreateDirAndFile(1, lang('test_create_dir_and_file'), lang('info_create_dir_and_file'), $debug);
		}


		/*
		 * Recommended Settings
		 */
		list($minimum, $recommended) = getTestValues('memory_limit');
		$settings['recommended'][] =
			testRange(0, lang('test_check_memory') .'<br />'. lang('test_min_recommend', $minimum, $recommended),
				'memory_limit', lang('test_check_memory_failed'), $minimum, $recommended, true, true);

		list($minimum, $recommended) = getTestValues('max_execution_time');
		$settings['recommended'][] =
			testRange(0, lang('test_check_time_limit') .'<br />'. lang('test_min_recommend', $minimum, $recommended),
				'max_execution_time', lang('test_check_time_limit_failed'), $minimum, $recommended, true, false, 0);

		if(! isset($_SESSION['allowsafemode']))
		{
			$settings['recommended'][] = testBoolean(0, lang('test_check_safe_mode'), 'safe_mode', lang('test_check_safe_mode_failed'), true, true);
		}

		if (! empty($open_basedir))
		{
        	$settings['recommended'][] = testDummy(lang('test_check_open_basedir'), $open_basedir, 'yellow', lang('test_check_open_basedir_failed'));
		}
		else
		{
			$settings['recommended'][] = testDummy(lang('test_check_open_basedir'), '', 'green');
		}

		$settings['recommended'][] = testRemoteFile(0, lang('test_remote_url'), '', lang('test_remote_url_failed'), $debug);

		$settings['recommended'][] = testBoolean(0, lang('test_check_file_upload'), 'file_uploads', lang('test_check_file_failed'), true, false);

		list($minimum, $recommended) = getTestValues('post_max_size');
		$settings['recommended'][] =
			testRange(0, lang('test_check_post_max') .'<br />'. lang('test_min_recommend', $minimum, $recommended),
				'post_max_size', lang('test_check_post_max_failed'), $minimum, $recommended, true, true);

		list($minimum, $recommended) = getTestValues('upload_max_filesize');
		$settings['recommended'][] =
			testRange(0, lang('test_check_upload_max') .'<br />'. lang('test_min_recommend', $minimum, $recommended),
				'upload_max_filesize', lang('test_check_upload_max_failed'), $minimum, $recommended, true, true);

		$f = cms_join_path(CMS_BASE, 'uploads');
		$settings['recommended'][] = testDirWrite(0, lang('test_check_writable', $f), $f, lang('test_check_upload_failed'), 0, $debug);

		$f = cms_join_path(CMS_BASE, 'uploads' . DIRECTORY_SEPARATOR . 'images');
		$settings['recommended'][] = testDirWrite(0, lang('test_check_writable', $f), $f, lang('test_check_images_failed'), 0, $debug);

		$f = cms_join_path(CMS_BASE, 'modules');
		$settings['recommended'][] = testDirWrite(0, lang('test_check_writable', $f), $f, lang('test_check_modules_failed'), 0, $debug);

		if ( (ini_get('session.save_handler') == 'files') && (empty($session_save_path)) )
		{
			$settings['recommended'][] = testDummy(lang('test_check_session_save_path'), '', 'yellow', lang('test_empty_session_save_path'));
		}
		elseif (! empty($open_basedir))
		{
			$settings['recommended'][] = testDummy(lang('test_check_session_save_path'), '', 'yellow', lang('test_open_basedir_session_save_path'));
		}
		else
		{
			if (strrpos($session_save_path, ";") !== false)
			{
				$session_save_path = substr($session_save_path, strrpos($session_save_path, ";")+1); //Can be 5;777;/tmp
			}
			$settings['recommended'][] = testDirWrite(0, lang('test_check_session_save_path'), $session_save_path, lang('test_check_session_save_path_failed', $session_save_path), 1, $debug);
		}

		$settings['recommended'][] = testBoolean(0, lang('test_check_xml_func'), function_exists('xml_parser_create'), lang('test_check_xml_failed'), false);

		$settings['recommended'][] = testBoolean(0, lang('test_check_file_get_contents'), function_exists('file_get_contents'), lang('test_check_file_get_contents_failed'), false);

		ini_set('max_execution_time', '123');
		$result = (ini_get('max_execution_time') == 123);
		$settings['recommended'][] = testBoolean(0, lang('test_check_ini_set'), $result, lang('test_check_ini_set_failed'), false);

		// assign settings
		list($this->continueon, $this->special_failed) = testGlobal(array(true, false), true);

		$this->smarty->assign('settings', $settings);
		$this->smarty->assign('continueon', $this->continueon);
		$this->smarty->assign('special_failed', $this->special_failed);
	}
}
# vim:ts=4 sw=4 noet
?>

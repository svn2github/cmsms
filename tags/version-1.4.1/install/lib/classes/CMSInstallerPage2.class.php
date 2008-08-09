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

class CMSInstallerPage2 extends CMSInstallerPage
{
	var $continueon;
	var $special_failed;

	/**
	 * Class constructor
	 * @var object $smarty
	 * @var array  $errors
	 */
	function CMSInstallerPage2(&$smarty, $errors)
	{
		$this->CMSInstallerPage(2, $smarty, $errors);
	}

	function assignVariables()
	{
		$values['umask'] = isset($_POST['umask']) ? $_POST['umask'] : '022';

		if (isset($_POST['umask']))
		{
			$settings = array('recommended'=>array());
			$settings['recommended'][] = testUmask(1, lang('test_check_umask'), $values['umask'], lang('test_check_umask_failed'));

			// assign settings
			list($this->continueon, $this->special_failed) = testGlobal(array(true, false), true);

			$this->smarty->assign('settings', $settings);
			$this->smarty->assign('errors', $this->errors);
		}

		$this->smarty->assign('values', $values);
	}
}
# vim:ts=4 sw=4 noet
?>
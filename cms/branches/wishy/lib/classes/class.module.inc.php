<?php
# CMS - CMS Made Simple
# (c)2004 by Ted Kulp (tedkulp@users.sf.net)
# This project's homepage is: http://cmsmadesimple.org
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# BUT withOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
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
class CMSModule
{
	/**
	 * ------------------------------------------------------------------
	 * Basic Functions.  Name and Version MUST be overridden.
	 * ------------------------------------------------------------------
	 */

	/**
	 * Returns the name of the module
	 */
	function GetName()
	{
		return 'unset';
	}

	/**
	 * Returns the version of the module
	 */
	function GetVersion()
	{
		return '0.0.0.1';
	}

	/**
	 * Returns the help for the module
	 *
	 * @param string Optional language that the admin is using.  If that language
	 * is not defined, use en_US.
	 */
	function GetHelp($lang = 'en_US')
	{
		return '';
	}

	/**
	 * Returns a short description of the module
	 *
	 * @param string Optional language that the admin is using.  If that language
	 * is not defined, use en_US.
	 */
	function GetDescription($lang = 'en_US')
	{
		return '';
	}

	/**
	 * Returns the changelog for the module
	 */
	function GetChangeLog()
	{
		return '';
	}

	/**
	 * Returns the name of the author
	 */
	function GetAuthorName()
	{
		return '';
	}

	/**
	 * Returns the email address of the author
	 */
	function GetAuthorEmail()
	{
		return '';
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
	function Install()
	{
		return FALSE;
	}

	/**
	 * Function that will get called as module is uninstalled. This function should
	 * remove any database tables that it uses and perform any other cleanup duties.
	 * It should return a string message if there is a failure. Returning nothing
	 * (FALSE) will allow the uninstall procedure to proceed.
	 */
	function Uninstall()
	{
		return FALSE;
	}

	/**
	 * Function to perform any upgrade procedures. This is mostly used to for
	 * updating databsae tables, but can do other duties as well. It should
	 * return a string message if there is a failure. Returning nothing (FALSE)
	 * will allow the upgrade procedure to proceed. Upgrades should have a path
	 * so that they can be upgraded from more than one version back.  While not
	 * a requirement, it makes like easy for your users.
	 *
	 * @param string The version we are upgrading from
	 * @param string The version we are upgrading to
	 */
	function Upgrade($oldversion, $newversion)
	{
		return FALSE;
	}
 
 	/**
	 * Returns a list of dependencies and minimum versions that this module
	 * requires. It should return an hash, eg.
	 * return array('somemodule'=>'1.0', 'othermodule'=>'1.1');
	 */
	function GetDependencies()
	{
		return array();
	}

	/**
	 * ------------------------------------------------------------------
	 * Login Related Functions
	 * ------------------------------------------------------------------
	 */
	
	/**
	 * Called after a successful login.  It sends the user object.
	 *
	 * @param User The user that just logged in
	 */
	function LoginPost(&$user)
	{
	}

	/**
	 * Called after a successful logout.  It sends the user object.
	 *
	 * @param User The user that just logged in
	 */
	function LogoutPost(&$user)
	{
	}
}

/**
 * "Static" module functions for internal use and module development.
 *
 * @since		0.9
 * @package		CMS
 */
class ModuleOperations
{
}

# vim:ts=4 sw=4 noet
?>

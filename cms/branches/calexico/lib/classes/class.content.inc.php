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

/**
 * This file respect the PHP Coding Standards : http://alltasks.net/code/php_coding_standard.html
 *
 * @author		calexico@cmsmadesimple.org
 * @revision	0.1
 * @created		28/09/2004
 *
 */

/**
 * Generic content class.
 *
 * @since		0.7
 * @package		CMS
 */
class Content
{
	/**
	 * The unique ID identifier of the element
	 */
	var $mId;

	/**
	 * The name of the element (like a filename)
	 */
	 var $mName

	/**
	 * The type of content (page, url, etc..)
	 */
	var $mType;

	/**
	 * The owner of the content
	 */
	var $mOwner;

	/**
	 * The advanced part of the content
	 * It should contain all treatments specific to this type of content
	 */
	 var $mProperties

	/**
	 * The ID of the parent, 0 if none
	 */
	var $mParentId;

	/**
	 * The item order of the content in his level
	 */
	var $mItemOrder;

	/**
	 * The full hierarchy of the content
	 * A string of the form : 1.4.3
	 */
	var $mHierarchy;

	/**
	 * Is the content active ?
	 */
	var $mActive;

	/**
	 * Creation date
	 */
	var $mCreationDate;

	/**
	 * Modification date
	 */
	var $mModifiedDate;

	/***********************************************************************/
	/***********************************************************************/

	/**
	 * Generic constructor.  Runs the SetInitialValues fuction.
	 */
	function Content()
	{
		$this->SetInitialValues();
	}

	/**
	 * Sets object to some sane initial values
	 */
	function SetInitialValues()
	{
		$this->mId				= -1 ;
		$this->mName			= "" ;
		$this->mType			= "" ;
		$this->mOwner			= -1 ;
		$this->mrAdvanced		= NULL ;
		$this->mParentId		= -1 ;
		$this->mItemOrder		= -1 ;
		$this->mHierarchy		= "" ;
		$this->mActive			= false ;
		$this->mCreationDate	= "" ;
		$this->mModifiedDate	= "" ;
	}

	/***********************************************************************/
	/***********************************************************************/

	/**
	 * Returns the ID
	 */
	function Id()
	{
		return $this->mId;
	}

	/**
	 * Returns the Name
	 */
	function Name()
	{
		return $this->mName;
	}

	/**
	 * Returns the Type
	 */
	function Type()
	{
		return $this->mType;
	}

	/**
	 * Returns the Owner
	 */
	function Owner()
	{
		return $this->mOwner;
	}

	/**
	 * Returns the ParentId
	 */
	function ParentId()
	{
		return $this->mParentId;
	}

	/**
	 * Returns the ItemOrder
	 */
	function ItemOrder()
	{
		return $this->mItemOrder;
	}

	/**
	 * Returns the Hierarchy
	 */
	function Hierarchy()
	{
		return $this->mHierarchy;
	}

	/**
	 * Returns the Active state
	 */
	function Active()
	{
		return $this->mActive;
	}

	/***********************************************************************/
	/***********************************************************************/

	/**
	 * Load the content of the object from an ID
	 * Returns FALSE if something failed, else TRUE
	 *
	 * @param id				the ID of the element
	 * @param loadProperties	whether to load or not the properties
	 */
	 function LoadFromId($id, $loadProperties = false)
	 {
	 }

	/**
	 * Save or update the content
	 */
	function Save()
	{
	}

	/**
	 * Test if the array given contains valid data for the object
	 * This function is used to check that no compulsory argument
	 * has been forgotten by the user
	 *
	 * It returns TRUE if data is ok, and an array of invalid parameters else
	 */
	function ValidateData()
	{
	}

	/**
	 * Delete the content
	 */
	function Delete()
	{
	}

	/**
	 * Show the content
	 */
	function Show()
	{
	}

	/**
	 * Show the Edit interface
	 */
	function Edit()
	{
	}

	/**
	 * Show the Advanced Edit interface
	 */
	function AdvancedEdit()
	{
	}

	/**
	 * Show Help
	 */
	function Help()
	{
	}
}

?>

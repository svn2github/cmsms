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
 * As for some treatment we don't need the extra properties of the content
 * we load them only when required. However, each function which makes use
 * of extra properties should first test if the properties object exist.
 *
 * @since		svn
 * @package		CMS
 */
class Content
{
	/**
	 * The unique ID identifier of the element
	 * Integer
	 */
	var $mId;

	/**
	 * The name of the element (like a filename)
	 * String
	 */
	 var $mName

	/**
	 * The type of content (page, url, etc..)
	 * String
	 */
	var $mType;

	/**
	 * The owner of the content
	 * Integer
	 */
	var $mOwner;

	/**
	 * The properties part of the content. This is an object of the good type.
	 * It should contain all treatments specific to this type of content
	 */
	 var $mProperties

	/**
	 * The ID of the parent, 0 if none
	 * Integer
	 */
	var $mParentId;

	/**
	 * The item order of the content in his level
	 * Integer
	 */
	var $mItemOrder;

	/**
	 * The full hierarchy of the content
	 * String of the form : 1.4.3
	 */
	var $mHierarchy;

	/**
	 * Is the content active ?
	 * Integer : 0 / 1
	 */
	var $mActive;

	/**
	 * Creation date
	 * Date
	 */
	var $mCreationDate;

	/**
	 * Modification date
	 * Date
	 */
	var $mModifiedDate;

	/************************************************************************/
	/* Constructor related													*/
	/************************************************************************/

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
		$this->mProperties		= NULL ;
		$this->mParentId		= -1 ;
		$this->mItemOrder		= -1 ;
		$this->mHierarchy		= "" ;
		$this->mActive			= false ;
		$this->mCreationDate	= "" ;
		$this->mModifiedDate	= "" ;
	}

	/************************************************************************/
	/* Functions giving access to needed elements of the content			*/
	/************************************************************************/

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

	/************************************************************************/
	/* The rest																*/
	/************************************************************************/

	/**
	 * Load the content of the object from an ID
	 *
	 * @param $id				the ID of the element
	 * @param $loadProperties	whether to load or not the properties
	 *
	 * @returns					If it fails, the object comes back to initial values and returns FALSE
	 *							If everything goes well, it returns TRUE
	 */
	function LoadFromId($id, $loadProperties = false)
	{
		global $gCms, $config, $sql_queries, $debug_errors;
		$db = &$gCms->db;
		
		$result = false;

		if ($id > -1)
		{
			$query		= "SELECT * FROM ".cms_db_prefix()."contents WHERE id = ?";
			$dbresult	= $db->Execute($query, array($id));

			# debug mode
			if ($config["debug"] == true)
			{
				$sql_queries .= "<p>$query</p>\n";
			}

			if ($dbresult && (1 == $dbresult->RowCount()))
			{
				$row = $dbresult->FetchRow();

				$this->mId				= $row["id"];
				$this->mName			= $row["name"];
				$this->mType			= $row["type"];
				$this->mOwner			= $row["owner"];
				$this->mProperties		= NULL;
				$this->mParentId		= $row["parent_id"];
				$this->mItemOrder		= $row["item_order"];
				$this->mHierarchy		= $row["hierarchy"];
				$this->mActive			= $row["active"];
				$this->mCreationDate	= $row["creation_date"];
				$this->mModifiedDate	= $row["modified_date"];

				$result = true;
			}
			else
			{
				if ($config["debug"] == true)
				{
					# :TODO: Translate the error message
					$debug_errors .= "<p>Could not retrieve content from db</p>\n";
				}
			}

			if ($result && $loadProperties)
			{
				$this->mProperties = ContentOperations::LoadProperties($this->mType, $this->mId);

				if (NULL == $this->mProperties)
				{
					$result = FALSE;

					# debug mode
					if ($config["debug"] == true)
					{
						# :TODO: Translate the error message
						$debug_errors .= "<p>Could not load properties for content</p>\n";
					}
				}
			}

			if (FALSE == $result)
			{
				$this->SetInitialValues();
			}
		}
		else
		{
			# debug mode
			if ($config["debug"] == true)
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>The id wasn't valid : $id</p>\n";
			}
		}

		return $result;
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
	 * @returns	TRUE if data is ok, and an array of invalid parameters else
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

/**
 * Class for doing content related functions. Many of the content object functions
 * are just wrappers around these.
 *
 * @since svn
 * @package CMS
 */
class ContentOperations
{
	/**
	 * This function create an object of type $type and loads its content
	 * from the db.
	 */
	function LoadProperties($type, $id)
	{
	}
}

?>

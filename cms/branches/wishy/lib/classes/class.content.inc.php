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
 * @modified	09/10/2004
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
	 var $mName;

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
	 var $mProperties;

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
	 * Generic constructor. Runs the SetInitialValues fuction.
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
		$this->mProperties		= new ContentProperties();
		$this->mParentId		= -1 ;
		$this->mItemOrder		= -1 ;
		$this->mHierarchy		= "" ;
		$this->mActive			= false ;
		$this->mCreationDate	= "" ;
		$this->mModifiedDate	= "" ;
	}

	/**
	 * Subclasses should override this to set their property types using a lot
	 * of mProperties.Add statements
	 */
	function SetProperties()
	{
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

		if (-1 < $id)
		{
			$query		= "SELECT * FROM ".cms_db_prefix()."contents WHERE id = ?";
			$dbresult	= $db->Execute($query, array($id));

			# debug mode
			if (true == $config["debug"])
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
				if (true == $config["debug"])
				{
					# :TODO: Translate the error message
					$debug_errors .= "<p>Could not retrieve content from db</p>\n";
				}
			}

			if ($result && $loadProperties)
			{
				$this->mProperties = ContentOperations::LoadPropertiesFromId($this->mType, $this->mId);

				if (NULL == $this->mProperties)
				{
					$result = false;

					# debug mode
					if (true == $config["debug"])
					{
						# :TODO: Translate the error message
						$debug_errors .= "<p>Could not load properties for content</p>\n";
					}
				}
			}

			if (false == $result)
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
	 * Load the content of the object from an array
	 *
	 * There is no check on the data provided, because this is the job of
	 * ValidateData
	 *
	 * @returns					If it fails, the object comes back to initial values and returns FALSE
	 *							If everything goes well, it returns TRUE
	 */
	function LoadFromData($data, $loadProperties = false)
	{
		global $config, $debug_errors;
		
		$result = true;

		$this->mId				= $data["id"];
		$this->mName			= $data["name"];
		$this->mType			= $data["type"];
		$this->mOwner			= $data["owner"];
		$this->mProperties		= NULL;
		$this->mParentId		= $data["parent_id"];
		$this->mItemOrder		= $data["item_order"];
		$this->mHierarchy		= $data["hierarchy"];
		$this->mActive			= $data["active"];
		$this->mCreationDate	= $data["creation_date"];
		$this->mModifiedDate	= $data["modified_date"];

		if ($loadProperties)
		{
			$this->mProperties = ContentOperations::LoadPropertiesFromData($this->mType, $data);

			if (NULL == $this->mProperties)
			{
				$result = false;

				# debug mode
				if (true == $config["debug"])
				{
					# :TODO: Translate the error message
					$debug_errors .= "<p>Could not load properties for content</p>\n";
				}
			}
		}

		if (false == $result)
		{
			$this->SetInitialValues();
		}

		return $result;
	}

	/**
	 * Save or update the content
	 */
	# :TODO: This function should return something
	function Save()
	{
		if (-1 < $this->mId)
		{
			$this->Update();
		}
		else
		{
			$this->Insert();
		}
	}

	/**
	 * Update the content
	 * We can notice, that only a few things are updated
	 * We do not care about hierarchy for example. This is because hierarchy,
	 * order or parents management is the job of the content manager.
	 * Remember that a content is like a file, and a file don't know where it is
	 * on the disk, it only knows its own content. It's the same here.
	 */
	# :TODO: This function should return something
	function Update()
	{
		global $gCms, $config, $sql_queries, $debug_errors;
		$db = &$gCms->db;
		
		$result = false;

		$query		= "UPDATE ".$config["db_prefix"]."contents SET
			name			= ?,
			owner			= ?,
			active			= ?,
			modified_date	= ?
			WHERE id = ?";
		$dbresult	= $db->Execute($query, array(
			$this->mName,
			$this->mOwner,
			$this->mActive,
			$db->DBTimeStamp(time()),
			$this->mId
			));

		# debug mode
		if (true == $config["debug"])
		{
			$sql_queries .= "<p>$query</p>\n";
		}

		if (! $dbresult)
		{
			if (true == $config["debug"])
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Error updating content</p>\n";
			}
		}

		if (NULL != $this->mProperties)
		{
			# :TODO: There might be some error checking there
			$this->mProperties.Update();
		}
		else
		{
			if (true == $config["debug"])
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Error updating : the content has no properties</p>\n";
			}
		}
	}
	
	/**
	 * Insert the content in the db
	 */
	# :TODO: This function should return something
	# :TODO: Take care bout hierarchy here, it has no value !
	function Insert()
	{
		global $gCms, $config, $sql_queries, $debug_errors;
		$db = &$gCms->db;
		
		$result = false;

		$newid = $db->GenID(cms_db_prefix()."contents_seq");

		$query	= "INSERT INTO".$config["db_prefix"]."contents (
			id,
			name,
			type,
			owner,
			parent_id,
			item_order,
			hierarchy,
			active,
			creation_date,
			modified_date
			)
			VALUES (?,?,?,?,?,?,?,?,?,?)";
		$dbresult	= $db->Execute($query, array(
			$newid,
			$this->mName,
			$this->mType,
			$this->mOwner,
			$this->mParentId,
			$this->mItemOrder,
			$this->mHierarchy,
			$this->mActive,
			$db->DBTimeStamp(time()),
			$db->DBTimeStamp(time()),
			));

		# debug mode
		if ($config["debug"] == true)
		{
			$sql_queries .= "<p>$query</p>\n";
		}

		if (! $dbresult)
		{
			if ($config["debug"] == true)
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Error inserting content</p>\n";
			}
		}
		
		if (NULL != $this->mProperties)
		{
			# :TODO: There might be some error checking there
			$this->mProperties.Insert($newid);
		}
		else
		{
			if (true == $config["debug"])
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Error inserting : the content has no properties</p>\n";
			}
		}
	}

	/**
	 * Test if the array given contains valid data for the object
	 * This function is used to check that no compulsory argument
	 * has been forgotten by the user
	 *
	 * We do not check the Id because there can be no Id (new content)
	 * That's up to Save to check this.
	 *
	 * @returns	TRUE if data is ok, and an array of invalid parameters else
	 */
	function ValidateData()
	{
		$result = true;
		$errors = array();

		# :TODO: translate all strings
		
		if (0 >= strlen($this->mName))
		{
			# :TODO: Translate the error message
			array_push($errors, "Name not valid");
			$result = false;
		}
		if (! ContentOperations::CheckType($this->mType))
		{
			# :TODO: Translate the error message
			array_push($errors, "Type not valid");
			$result = false;
		}
		if (0 >= $this->mOwner)
		{
			# :TODO: Translate the error message
			array_push($errors, "Owner not valid");
			$result = false;
		}
		if (0 > $this->mParentId)
		{
			# :TODO: Translate the error message
			array_push($errors, "Parent not valid");
			$result = false;
		}
		if (0 >= strlen($this->mHierarchy))
		{
			# :TODO: Translate the error message
			array_push($errors, "Hierarchy not valid");
			$result = false;
		}
		if (NULL == $this->mProperties)
		{
			# :TODO: Translate the error message
			array_push($errors, "No properties !");
			$result = false;
		}
		else
		{
			$resultprop = $this->mProperties.ValidateData();
			$result = ($result) ? $resultprop : $result ;
		}

		return ($result) ? $result : $errors;
	}

	/**
	 * Delete the content
	 */
	# :TODO: This function should return something
	function Delete()
	{
		global $gCms, $config, $sql_queries, $debug_errors;
		$db = &$gCms->db;
		
		$result = false;

		if (-1 > $this->mId)
		{
			if (true == $config["debug"])
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Could not delete content : invalid Id</p>\n";
			}
		}
		else
		{
			$query		= "DELETE FROM ".$config["db_prefix"]."contents WHERE id = ?";
			$dbresult	= $db->Execute($query, array($this->mId));

			# debug mode
			if (true == $config["debug"])
			{
				$sql_queries .= "<p>$query</p>\n";
			}

			if (! $dbresult)
			{
				if (true == $config["debug"])
				{
					# :TODO: Translate the error message
					$debug_errors .= "<p>Error deleting content</p>\n";
				}
			}

			if (NULL != $this->mProperties)
			{
				# :TODO: There might be some error checking there
				$this->mProperties.Delete();
			}
			else
			{
				if (true == $config["debug"])
				{
					# :TODO: Translate the error message
					$debug_errors .= "<p>Error deleting : the content has no properties</p>\n";
				}
			}
		}
	}

	/**
	 * Show the content
	 */
	function Show()
	{
		# :TODO:
		# This is the responsibility of the subclass, no?
		if (NULL != $this->mProperties)
		{
			$this->mProperties.Show();
		}
		else
		{
			if (true == $config["debug"])
			{
				# :TODO: Translate the error message
				$debug_errors .= "<p>Error the content has no properties</p>\n";
			}
		}
	}

	/**
	 * Show the Edit interface
	 */
	function Edit()
	{
		# :TODO:
		echo "Edit";
	}

	/**
	 * Show the Advanced Edit interface
	 */
	function AdvancedEdit()
	{
		# :TODO:
		echo "Advanced edit";
	}

	/**
	 * Show Help
	 */
	function Help()
	{
		# :TODO:
		echo "Help";
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
	function LoadPropertiesFromId($type, $id)
	{
	}

	function LoadPropertiesFromData($type, $data)
	{
	}

	function CheckType($type)
	{
	}
}

class ContentManager
{
	/**
	 * Determine proper type of object, load it and return it
	 */
	function LoadContentFromId($id)
	{
	}

	/**
	 * Display content
	 */
	funciton DisplayContent($content)
	{
		//This should be straight forward, since the content will pretty much determine how it is displayed
		$content->Show();
	}

	/**
	 * Determine if content should be loaded from cache
	 */
	function IsCached($id)
	{
	}
}

class ContentProperties
{
	var $mPropertyTypes;
	var $mPropertyValues;

	/**
	 * Generic constructor. Runs the SetInitialValues fuction.
	 */
	function ContentProperties()
	{
		$this->SetInitialValues();
	}

	/**
	 * Sets object to some sane initial values
	 */
	function SetInitialValues()
	{
		$this->mPropertyTypes = {}; 
		$this->mPropertyValues = {}; 
	}

	function Add($type, $name)
	{
		$this->mPropertyTypes[$name] = $type;
		$this->mPropertyValues[$name] = "";
	}

	function Show()
	{
	}

	function Update()
	{
	}

	function Insert()
	{
	}

	function ValidateData()
	{
	}

	function Delete()
	{
	}
}

# vim:ts=4 sw=4 noet
?>

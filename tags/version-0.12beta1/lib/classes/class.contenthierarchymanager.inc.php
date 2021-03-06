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

class ContentHierarchyManager {
	var $rootNode; // root node of the hierarchy
	var $id_index; // index for quick node access
	var $alias_index; // index for aliases
	var $hier_index; // index for hierarchies
	var $size; // number of nodes
  var $check;
  
	// -------------- CONSTRUCTOR AND CONSTRUCTOR HELPER ------------------

	/**
	 *  Constructs the hierarchy index from a root node
	 */
	function ContentHierarchyManager() {
		$this->rootNode = new ContentNode(); // creates a default root node
		$this->id_index = array();
		$this->alias_index = array();
		$this->hier_index = array();
		$this->size=0;
	}

	function setRoot(&$root) {
		$this->rootNode = &$root;
		$this->populateIndex($root);
	}

	/**
	 *  Private function which populates the index
	 */
	function populateIndex(&$root) {
		$this->indexNode($root);
		$children = &$root->getChildren();
		foreach ($children as $child) {
			$this->populateIndex($child);
		}
	}

	/**
	 * Private function for indexing a single node
	 */
	function indexNode(&$node) {
    $this->size++;
		$content = $node->getContent();
		if (isset($content)) {
		  $id = $content->Id();
			$this->id_index[intval($id)]=$node;
			// other indexes are stored with id
			// avoids a PHP4 reference issue
			if ($content->Alias()) {
				$this->alias_index[strtolower($content->Alias())] = $id; // ensure string index
			}
			$this->hier_index[$content->Hierarchy()]=$id;
		}
	}
	// ------------ GETTERS -------------------

	/**
	 * Returns the root node of the hierarchy
	 */
	function &getRootNode() {
		return $this->rootNode;
	}

	/**
	 * Returns a node, given an Id. Node must have been loaded to be found
	 * @param id  the id of the searched element
	 * @see sureGetNodeById
	 */
	function &getNodeById($id) {
		return $this->id_index[intval($id)];
	}

	/**
	 * Returns a node, given an alias. Node must have been loaded to be found
	 * @param alias  the alias of the searched element
	 * @see sureGetNodeByAlias
	 */
	function &getNodeByAlias($alias) {
		$id = $this->alias_index[strtolower($alias)];
		if (isset($id))
		  return $this->id_index[$id];
		return null;
	}


	/**
	 * Returns a node, given a hierachy. Node must have been loaded to be found
	 * @param hierarchy  the hierarchy of the searched element, dotted notation
	 */
	function &getNodeByHierarchy($hierarchy) {
		$id = $this->hier_index[strtolower($hierarchy)];
		if (isset($id))
		  return $this->id_index[$id];
	}

	/**
	 * Returns an array equivalent to the ContentManager::GetAllContent method
	 * Only returns elements currently loaded from the hierarchy
	 * @return array  array of ContentNode
	 */
	function &getIndexedContent() {
		return $this->id_index;
	}

	/**
	 * Returns the number of indexed nodes in the hierarchy
	 */
	function getNodeCount() {
		return $this->size;
	}

	// --------------- Tests --------------------

	/**
	 *  Returns true if an element with the specified id is loaded in the hierarchy
	 *  @param id the id of the searched element
	 */
	function containsId($id) {
		return isset($this->id_index[intval($id)]);
	}

	/**
	 *  Returns true if an element with the specified alias is loaded in the hierarchy
	 *  @param alias the alias of the searched element
	 */
	function containsAlias($alias) {
		return isset($this->alias_index[strtolower($alias)]);
	}

	/**
	 *  Returns true if an element with the specified hierarchy is loaded in the hierarchy
	 *  @param hierarchy the hierarchy of the searched element (dotted notation)
	 */
	function containsHierarchy($h) {
		return isset($this->hier_index[$h]);
	}

	/**
	 *  Opens a node for the specified content_id
	 *  If the parent node is not loaded in the hierarchy
	 *  then the parent node is automatically loaded
	 *  @param id the content id
	 */
	function openNodeWithId($ids) {
		if (!is_array($ids)) $ids = array($ids);
		$to_be_loaded = array();
		foreach ($ids as $id) {
			if (!$this->containsId($id)) $to_be_loaded[] = $id;
		}
		$contents = &ContentManager::LoadMultipleFromId($to_be_loaded);
		$to_be_loaded=array();
		foreach ($contents as $content) {
			$path = explode('.',$content->IdHierarchy());
			// build the list of content elements to be loaded
			foreach ($path as $element) {
				if (($element!=$content->Id()) && (!in_array($element,$to_be_loaded)) && (!$this->containsId($element))) {
					$to_be_loaded[] = $element;
				}
			}
		}
		// load the missing elements
		$missing=&ContentManager::LoadMultipleFromId($to_be_loaded);
		$complete=array_merge($contents,$missing);

		// now we have all the contents, and we have to link them all

		// first loop adds the elements to the hierarchy
		// do not use foreach since PHP4 can't manage the foreach ($complete as &$item) syntax
		$cpt = count($complete);
		for ($i=0; $i<$cpt; $i++) {
			$content = &$complete[$i];
			$node = new ContentNode();
			$node->setContent($content); // parent is still not set !
			$this->indexNode($node); // add it to the hierarchy
		}

		// second loop will link the nodes
		for ($i=0; $i<$cpt; $i++) {
			$content = &$complete[$i];
			$parent_id = $content->ParentId();
			if ($parent_id==-1) {
				$parentNode = &$this->rootNode;
			} else {
				$parentNode = &$this->getNodeById($parent_id);
			}
			$node = &$this->getNodeById($content->Id());
			$node->setParentNode($parentNode);
			$parentNode->addChild($node);
		}
	}

	/**
	 *  Opens a node for the specified content alias
	 *  If the parent node is not loaded in the hierarchy
	 *  then the parent node is automatically loaded
	 *  @param id the content id
	 */
	function openNodeWithAlias($aliases) {
		if (!is_array($aliases)) $aliases = array($aliases);
		$to_be_loaded = array();
		foreach ($aliases as $alias) {
			if (!$this->containsAlias($alias)) $to_be_loaded[] = $alias;
		}
		$contents = &ContentManager::LoadMultipleFromAlias($to_be_loaded);
		$to_be_loaded=array();
		foreach ($contents as $content) {
			$path = explode('.',$content->IdHierarchy());
			// build the list of content elements to be loaded
			foreach ($path as $element) {
				if (($element!=$content->Id()) && (!in_array($element,$to_be_loaded))&& (!$this->containsId($element))) {
					$to_be_loaded[] = $element;
				}
			}
		}
		// load the missing elements
		$missing=&ContentManager::LoadMultipleFromId($to_be_loaded);
		$complete=array_merge($contents,$missing);

		// now we have all the contents, and we have to link them all

		// first loop adds the elements to the hierarchy
		// do not use foreach since PHP4 can't manage the foreach ($complete as &$item) syntax
		$cpt = count($complete);
		for ($i=0; $i<$cpt; $i++) {
			$content = &$complete[$i];
			$node = new ContentNode();
			$node->setContent($content); // parent is still not set !
			$this->indexNode($node); // add it to the hierarchy
		}

		// second loop will link the nodes
		for ($i=0; $i<$cpt; $i++) {
			$content = &$complete[$i];
			$parent_id = $content->ParentId();
			if ($parent_id==-1) {
				$parentNode = &$this->rootNode;
			} else {
				$parentNode = &$this->getNodeById($parent_id);
			}
			$node = &$this->getNodeById($content->Id());
			$node->setParentNode($parentNode);
			$parentNode->addChild($node);
		}
	}


# The following methods try to retrieve a content node
# If the node is not found in the index, then it will try to load it

	/**
	 * Returns a node, given the id of the searched element.
	 * Ensures that even if the node is not yet loaded in the hierarchy
	 * it will be found and added.
	 * @param id  the id of the element
	 * @return ContentNode the associated node. NULL if not found
	 */
	function &sureGetNodeById($id) {
		$node = &$this->getNodeById($id);
		if (!isset($node)) { // not found !
			$this->openNodeWithId($id); // try to load it
			$node=&$this->getNodeById($id); // and get it
		}
		return $node;
	}

	/**
	 * Returns a node, given the alias of the searched element.
	 * Ensures that even if the node is not yet loaded in the hierarchy
	 * it will be found and added.
	 * @param alias  the alias of the element
	 * @return ContentNode the associated node. NULL if not found
	 */
	function &sureGetNodeByAlias($alias) {
		$node = &$this->getNodeById($alias);
		if (!isset($node)) { // not found !
			$this->openNodeWithAlias($alias); // try to load it
			$node=&$this->getNodeByAlias($alias); // and get it
		}
		return $node;
	}

	/**
	 *  This method allows expanding the tree from a node, meaning that
	 *  children nodes will be loaded.
	 *  @param id   the id to start from
	 *  @param recurse  if set true (default false), then children will be expanded too
	 */
	function expandNodeFromId($id, $recurse=false) {
		global $gCms;
		$db = &$gCms->getDB();
		$to_be_loaded=array();
		if (($id!=-1) && (!$this->containsId($id))) {
			$to_be_loaded[] = $id;
		}
		$query = "SELECT content_id FROM ".cms_db_prefix()."content WHERE parent_id = ?";
		$result = &$db->Execute($query,array($id));
		while (isset($result) && $row = &$result->FetchRow()) {
			$child_id = $row['content_id'];
			if ((!$this->containsId($child_id)) && (!in_array($child_id,$to_be_loaded))) {
				$to_be_loaded[] = $child_id;
			}
		}
		$this->openNodeWithId($to_be_loaded);
		if ($recurse) {
			foreach ($to_be_loaded as $c_id) {
				if ($c_id != $id) $this->expandNodeFromId($c_id);
			}
		}
	}

	/**
	 *  This method allows expanding the tree from a node, meaning that
	 *  children nodes will be loaded.
	 *  @param alias   the alias of the element to start from
	 *  @param recurse  if set true (default false), then children will be expanded too
	 */
	function expandNodeFromAlias($alias, $recurse=false) {
		global $gCms;
		$db = &$gCms->getDB();
		$to_be_loaded=array();
		if (!$this->containsAlias($alias)) {
			$this->openNodeWithAlias($alias);
		}
		$query = "SELECT c1.content_id FROM ".cms_db_prefix()."content as c1,".cms_db_prefix()."content as c2 WHERE c1.parent_id = c2.content_id AND c2.content_alias = ?";
		$result = &$db->Execute($query,array($alias));
		while (isset($result) && $row = &$result->FetchRow()) {
			$child_id = $row['content_id'];
			if ((!$this->containsId($child_id)) && (!in_array($child_id,$to_be_loaded))) {
				$to_be_loaded[] = $child_id;
			}
		}
		$this->openNodeWithId($to_be_loaded);
		if ($recurse) {
			foreach ($to_be_loaded as $c_id) {
				$this->expandNodeFromId($c_id);
			}
		}
	}

	function & getFlattenedContent()
	{
		$content = array();
		$rn = $this->getRootNode();
		$count = 0;
		$this->getFlattenedChildren($rn, $content, $count);
		return $content;
	}

	function getFlattenedChildren(&$parentnode, &$nodelist, &$count)
	{
        $children =& $parentnode->getChildren();
        if (isset($children) && count($children))
        {
            reset($children);
            while (list($key) = each($children))
            {
                $onechild =& $children[$key];
                $content =& $onechild->GetContent();
				$content->flatIndex = $count;
				array_push($nodelist, $content);
				$count++;
				$this->getFlattenedChildren($onechild, $nodelist, $count);
			}
		}
	}
}

# vim:ts=4 sw=4 noet
?>

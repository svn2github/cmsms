<?php
#Bookmarks. A plugin for CMS - CMS Made Simple
#Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#
#CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
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

/**
 * @return unknown
 * @param ADOConnection $db
 * @param string $order_by
 * @desc get list of categories
*/
function bookmarks_module_get_categories($db, $order_by='category_order, category_name')
{
    $categories_table_name = cms_db_prefix().'module_bookmarks_categories';
	$sql = "SELECT * FROM $categories_table_name";
	if($order_by != '')
    {
        $sql .= " ORDER BY $order_by";
    }

    $result = array();
    $rs = $db->Execute($sql);
    if($rs && $rs->RowCount() > 0)
        $result = $rs->GetArray();
    return $result;
}

/**
 * @return void
 * @param CmsObject $cms
 * @param string $module_id
 * @desc Display categories edit form
*/
function bookmarks_module_admin_display_category($cms, $module_id)
{
    $db = $cms->db; /* @var $db ADOConnection */
	$categories = bookmarks_module_get_categories($db);
	$num_cats = count($categories);
	echo <<<EOT
	<p>
	<a href='moduleinterface.php?module=Bookmarks'>Add Bookmark</a>
	| <a href='moduleinterface.php?module=Bookmarks&amp;action=bookmarks'>Manage Bookmarks</a>
	| Manage Categories
	</p>

    <h4>Manage Categories</h4>

EOT;
    echo cms_mapi_create_admin_form_start("Bookmarks", $module_id);
    echo <<<EOT
	<input type='hidden' name='action' value='categories_update'>

	<table border=0 cellspacing=0 cellpadding=3>
	<tr>
		<th>Name</th>
		<th>Order</th>

EOT;
	if($num_cats > 0)
	{
		echo <<<EOT
		<th>Name</th>
		<th>Order</th>

EOT;
	}

	echo <<<EOT
	</tr>
	<tr>

EOT;
	$categories[$num_cats]['category_id'] = -1;
	$categories[$num_cats]['category_name'] = '';
	$categories[$num_cats]['category_order'] = 50;
	$num_cats ++;

	$num_cols = 2;
	$rows_per_col = intval($num_cats / $num_cols);
	
	$count = 1;
	for($i = 0; $i < $num_cats; $i++,$count ++)
	{
		if($count >= $rows_per_col)
		{
			$count = 1;
			echo <<<EOT
	</tr>
	<tr>

EOT;
			$padding = 0;
		}

		if($i < $num_cats)
		{
			$category = $categories[$i];
			$id = $category['category_id'];
			$name = (empty($category['category_name']) && $id > 0) ? '== NOT SET ==' : $category['category_name'];
			$order = $category['category_order'];
			echo <<<EOT
		<td><input type='hidden' name='{$module_id}id[]' value='$id'>
			<input type='text' name='{$module_id}name[]' value='$name'></td>
		<td><input type='text' name='{$module_id}order[]' value='$order'></td>

EOT;
		}
	}
	echo <<<EOT
	</tr>
	<tr>
		<td valign='top' colspan='4' align='center'><input type='submit' value='Update Categories'></td>
	</tr>
	</table>

EOT;

    echo cms_mapi_create_admin_form_end();
}

/**
 * @return void
 * @param CmsObject $cms
 * @param string $module_id
 * @desc Update database with changes from categories edit form.
*/
function bookmarks_module_admin_update_categories($cms, $module_id)
{
    $db = $cms->db; /* @var $db ADOConnection */
	$categories_table_name = cms_db_prefix().'module_bookmarks_categories';
	$bookmarks_to_categories_table_name = cms_db_prefix().'module_bookmarks_to_categories';

	/* @var $db ADOConnection */
	/* @var $rs ADORecordset */
	$ids = getRequestValue($module_id.'id');
	$names = getRequestValue($module_id.'name');
	$order_bys = getRequestValue($module_id.'order');

	//$db->debug = true;
	//DB($ids, '$ids');
	//DB($names, '$names');
	//DB($order_bys, '$order_bys');

	$num_records = count($ids);
	for($i = 0; $i < $num_records; $i++)
	{
		// don't trust user input, but do $name later as quote() will add '' to it.
		$id = intval($ids[$i]);
		$order_by = intval($order_bys[$i]);
		$name = $names[$i];
		if($id > -1)
		{
			if($name == '')
			{
				// delete this category - remove the links first though.
				$sql = "DELETE FROM $bookmarks_to_categories_table_name WHERE category_id = $id";
				$db->Execute($sql);

				$sql = "DELETE FROM $categories_table_name WHERE category_id = $id";
				$db->Execute($sql);
			}
			else
			{
				$name = $db->quote($names[$i], get_magic_quotes_runtime());
				$sql = "UPDATE $categories_table_name SET
						category_name = $name
							,category_order = $order_by
						WHERE category_id = $id";
				$db->Execute($sql);
			}
		}
		elseif($name != '')
		{
			$name = $db->quote($names[$i], get_magic_quotes_runtime());
			$new_id = $db->GenID(cms_db_prefix()."module_bookmarks_categories_seq");

			$sql = "INSERT INTO $categories_table_name (category_id, category_name, category_order)
					VALUES ($new_id, $name, $order_by)";
			$db->Execute($sql);
		}
	}

	RedirectTo($_SERVER['PHP_SELF'] . '?module=Bookmarks&action=categories&result=1');
}


?>

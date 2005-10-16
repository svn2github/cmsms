<?php
# Calendar. A plugin for CMS - CMS Made Simple
# Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#
# CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


class Calendar extends CMSModule
{
	var $categories_table_name;
	var $events_to_categories_table_name;
	var $events_table_name;
	var $language;

	function Calendar()
	{
		$this->CMSModule();

		$this->categories_table_name = cms_db_prefix() . 'module_calendar_categories';
		$this->events_to_categories_table_name = cms_db_prefix().'module_calendar_events_to_categories';
		$this->events_table_name = cms_db_prefix().'module_calendar_events';

		$this->language = $this->GetPreference('Calendar-language', 'en_US');
	}

	function GetName()
	{
		return 'Calendar';
	}

	function GetAuthor()
	{
		return 'Rob Allen';
	}

	function GetAuthorEmail()
	{
		return 'rob@akrabat.com';
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return '0.7alpha1';
	}

	function GetDescription($lang = 'en_US')
	{
		return '<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the content menu
		that will allow you to manage your events.</p>';
	}

	function GetAdminDescription()
	{
		return $this->Lang('cal_description');
	}

	function GetAdminSection()
	{
		return 'content';
	}

	function GetHelp($lang = 'en_US')
	{
		$string = $this->Lang('cal_help', null);
		return $string;
	}

	function GetChangeLog()
	{
		return <<<EOT
			<p>Author: Rob Allen &lt;rob@akrabat.com&gt;</p>
			<dl>
			    <dt>Version: 0.7</dt>
                    <dd>Complete rewrite to fit into 0.10.x better. Also support language for day and month
                     names and use smarty templates for controlling the display.
                     Rewrite the SQL used to select the events to hopefully be more maintainable.
                     Note that the language files are not fully updated for this version!</dd>
				<dt>Version: 0.6.1</dt>
					<dd>More fixes for multi-day event on calendar. Added new parameter "time_format" so we can make
					the display of a single day event with a start and stop time look better.
					Change de_DE's "to" to "bis" as per Mordran's post on the boards.</dd>
				<dt>Version: 0.6</dt>
					<dd>Fix event display so that if the end date is not set, we don't display "to".
					Filter by category when displaying an upcominglist.
					Fix End date setting that was off by one.
					Fix odd behaviour of year when transitioning from Jan to Dec or Dec to Jan in the calendar view.
					Support mutli-day events in the calendar view.</dd>
				<dt>Version: 0.5</dt>
					<dd>Fix the drop down list for end date year. Fix DE translation of "Return" (thanks Piratos!).
					 Fix spacing around "to" (thanks Greg!). Add Danish and Dutch translations courtesy of board members esmann and dont.</dd>
				<dt>Version: 0.4</dt>
					<dd>Support for language translations. Default to a NULL end date. Improved the help information.
					Display upcoming events in the correct order! Other minor bug fixes.</dd>
				<dt>Version: 0.3</dt>
					<dd>Initial support for "From" and "To" dates for events. Ability to filter admin list of events by category.</dd>
				<dt>Version: 0.2</dt>
					<dd>New display option: "upcominglist". Also many bugfixes!</dd>
				<dt>Version: 0.1</dt>
					<dd>Initial release.</dd>

			</dl>
EOT;
	}

	function Install()
	{
		$db = $this->cms->db;				/* @var $db ADOConnection */
		$dict = NewDataDictionary($db); 	/* @var $dict ADODB_DataDict */

		$table_options = array('mysql' => 'TYPE=MyISAM');

		// create categories table
		$fields = "
			category_id I KEY,
			category_name C(255),
			category_order I
		";
		$sql_array = $dict->CreateTableSQL($this->categories_table_name, $fields, $table_options);
		$dict->ExecuteSQLArray($sql_array);

		$db->CreateSequence($this->categories_table_name . '_seq');

		// create events table
		$fields = "
			event_id I KEY,
			event_title C(255),
			event_summary X,
			event_details X,
			event_date_start T,
			event_date_end T,
			event_created_by I,
			event_create_date T,
			event_modified_date T
		";
		$sql_array = $dict->CreateTableSQL($this->events_table_name, $fields, $table_options);
		$dict->ExecuteSQLArray($sql_array);

		$db->CreateSequence($this->events_table_name.'_seq');

		// create events_to_categories table
		$fields = "
			category_id I KEY,
			event_id I KEY
		";
		$sql_array = $dict->CreateTableSQL($this->events_to_categories_table_name, $fields, $table_options );
		$dict->ExecuteSQLArray( $sql_array );

		$this->CreatePermission('Modify Calendar', 'Modify Calendar');

		// set up a General category
		$new_id = $db->GenID($this->categories_table_name.'_seq');

		$sql = 'INSERT INTO ' . $this->categories_table_name . " (category_id, category_name, category_order)
						VALUES ($new_id, 'General', 50)";
		$db->Execute($sql);

		// templates
		$this->SetTemplate('calendar', $this->GetDefaultTemplate('calendar'));
		$this->SetTemplate('list', $this->GetDefaultTemplate('list'));
		$this->SetTemplate('upcominglist', $this->GetDefaultTemplate('upcominglist'));
		$this->SetTemplate('event', $this->GetDefaultTemplate('event'));

	}

	function InstallPostMessage()
	{
		return 'Make sure to set the "Modify Calendar" permission on users who will be administering calendar events.';
	}

	function Upgrade($oldversion, $newversion)
	{
		// 0.3 introduces new event_date_start and event_date_end
		$db = $this->cms->db;				/* @var $db ADOConnection */
		$dict = NewDataDictionary($db); 	/* @var $dict ADODB_DataDict */

		if(version_compare($oldversion, 0.3, "<"))
		{
			// this is version 0.2 or 0.1
			$sqlarray = $dict->RenameColumnSQL($this->events_table_name, "event_date", "event_date_start", "event_date_start T");
			$dict->ExecuteSQLArray($sqlarray);
			$sqlarray = $dict->AddColumnSQL($this->events_table_name, "event_date_end T");
			$dict->ExecuteSQLArray($sqlarray);

			$sql = "UPDATE {$this->events_table_name} SET event_date_end = event_date_start";
			$db->Execute($sql);
		}

		if(version_compare($oldversion, 0.7, "<"))
		{
		    // less than 0.7
            $this->SetTemplate('calendar', $this->GetDefaultTemplate('calendar'));
            $this->SetTemplate('list', $this->GetDefaultTemplate('list'));
            $this->SetTemplate('upcominglist', $this->GetDefaultTemplate('upcominglist'));
            $this->SetTemplate('event', $this->GetDefaultTemplate('event'));
		}

	}

	function Uninstall()
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$dict = NewDataDictionary($db);

		$sqlarray = $dict->DropTableSQL($this->events_table_name);
		$dict->ExecuteSQLArray($sqlarray);

		$sqlarray = $dict->DropTableSQL($this->events_to_categories_table_name);
		$dict->ExecuteSQLArray($sqlarray);

		$sqlarray = $dict->DropTableSQL($this->categories_table_name);
		$dict->ExecuteSQLArray($sqlarray);

		$db->DropSequence($this->events_table_name.'_seq');
		$db->DropSequence($this->categories_table_name.'_seq');
		$this->RemovePermission('Modify Calendar');

		// templates
		$this->DeleteTemplate('calendar');
		$this->DeleteTemplate('list');
		$this->DeleteTemplate('upcominglist');
		$this->DeleteTemplate('event');
	}


	function GetEvent($event_id)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */

		$sql = 'SELECT * FROM ' . $this->events_table_name .' WHERE event_id = ' . $event_id;
		$rs = $db->Execute($sql);
		if($rs->RowCount() > 0)
		{
			$result = $rs->FetchRow();
			$result['categories'] = array();
			// now pick up categories
			$sql = 'SELECT category_id FROM ' . $this->events_to_categories_table_name . ' WHERE event_id = ' . $event_id;
			$rs = $db->Execute($sql);
			if($rs)
			{
				while($row = $rs->FetchRow())
				{
					$result['categories'][] = $row['category_id'];
				}
			}
		}
		else
		{
			// create an empty record
			$result = array();
			$result['event_id'] = -1;
			$result['event_title'] = '';
			$result['event_summary'] = '';
			$result['event_details'] = '';
			$result['event_date_start'] = NULL;
			$result['event_date_end'] = NULL;
			$result['event_created_by'] = -1;
			$result['event_create_date'] = NULL;
			$result['event_modified_date'] = NULL;
			$result['categories'] = array();
		}

		return $result;
	}


	function GetCategories($order_by='category_order, category_name')
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories_table_name = $this->categories_table_name;
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

	function AllowAccess($permission='Modify Calendar')
	{
		$access = $this->CheckPermission($permission);
		if (!$access)  {
			echo "<p class=\"error\">You need the '$permission' permission to perform that function.</p>";
			return false;
		}
		else return true;

	}

	function DoAction($name, $id, $parameters, $returnid='')
	{
		switch($name)
		{
			case 'default':  // default user front end page
				$this->UserDisplay($id, $parameters, $returnid);
				break;

			case 'defaultadmin': // default admin page
				if($this->AllowAccess())
				{
					$this->AdminDisplayDefaultAdminPage($id, $parameters, $returnid, $name);
				}
				break;

			case 'admin_categories_update':
				if($this->AllowAccess())
				{
					$this->AdminUpdateCategories($id, $parameters, $returnid);
				}
				break;

			case 'admin_add_event':
			case 'admin_edit_event':
				if($this->AllowAccess())
				{
					$this->AdminDisplayAddEvent($id, $parameters, $returnid);
				}
				break;

			case 'admin_event_update':
				if($this->AllowAccess())
				{
					$this->AdminUpdateEvent($id, $parameters, $returnid);
					$url = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='', $params=array('result'=>'1'), '', true);
					$url = str_replace('&amp;', '&', $url);

					redirect($url);
				}
				break;

			case 'admin_delete_event':
				if($this->AllowAccess())
				{
					$this->AdminDeleteEvent($id, $parameters, $returnid);
					$url = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='', $params=array('result'=>'1'), '', true);
					$url = str_replace('&amp;', '&', $url);

					redirect($url);
				}
				break;

			case 'admin_settings_update':
				if($this->AllowAccess())
				{
					$this->AdminUpdateSettings($id, $parameters, $returnid);
				}
				break;

			case 'admin_update_template':
				if($this->AllowAccess())
				{
					$this->AdminUpdateTemplate($id, $parameters, $returnid);
				}
				break;

			// tab handling in admin
			case 'admin_manage_categories':
			case 'admin_manage_settings':
            case 'admin_calendar_template':
            case 'admin_list_template':
            case 'admin_upcominglist_template':
            case 'admin_event_template':
				if($this->AllowAccess())
				{

					$this->AdminDisplayDefaultAdminPage($id, $parameters, $returnid, $name);
				}
                break;

			default:
    			die("UNKNOWN ACTION: $name");
				break;
		}
	}

	function AdminDisplayDefaultAdminPage($id, $parameters, $returnid, $name='')
	{
	    // use tabs for default admin page
		echo $this->StartTabHeaders();
		echo $this->SetTabHeader('defaultadmin', $this->Lang('cal_events'), $name == 'defaultadmin' ? true : false);
		echo $this->SetTabHeader('admin_manage_categories', $this->Lang('cal_categories'), $name == 'admin_manage_categories' ? true : false);
		echo $this->SetTabHeader('admin_calendar_template', $this->Lang('cal_calendar_template'), $name == 'admin_calendar_template' ? true : false);
		echo $this->SetTabHeader('admin_list_template', $this->Lang('cal_list_template'), $name == 'admin_list_template' ? true : false);
		echo $this->SetTabHeader('admin_upcominglist_template', $this->Lang('cal_upcominglist_template'), $name == 'admin_upcominglist_template' ? true : false);
		echo $this->SetTabHeader('admin_event_template', $this->Lang('cal_event_template'), $name == 'admin_event_template' ? true : false);
		echo $this->SetTabHeader('admin_manage_settings',$this->Lang('cal_settings'), $name == 'admin_manage_settings' ? true : false);

		echo $this->EndTabHeaders();

		echo $this->StartTabContent();

		echo $this->StartTab("defaultadmin");
		$this->AdminDisplayManageEvents($id, $parameters, $returnid);
        echo $this->EndTab();

        echo $this->StartTab("admin_manage_categories");
		$this->AdminDisplayCategories($id, $parameters, $returnid);
		echo $this->EndTab();

        echo $this->StartTab("admin_calendar_template");
		$this->AdminDisplayTemplate('calendar', $id, $parameters, $returnid);
		echo $this->EndTab();

        echo $this->StartTab("admin_list_template");
		$this->AdminDisplayTemplate('list', $id, $parameters, $returnid);
		echo $this->EndTab();

        echo $this->StartTab("admin_upcominglist_template");
		$this->AdminDisplayTemplate('upcominglist', $id, $parameters, $returnid);
		echo $this->EndTab();

        echo $this->StartTab("admin_event_template");
		$this->AdminDisplayTemplate('event', $id, $parameters, $returnid);
		echo $this->EndTab();

        echo $this->StartTab("admin_manage_settings");
        $this->AdminManageSettings($id, $parameters, $returnid);
		echo $this->EndTab();

		echo $this->EndTabContent();

	}

	function AdminDisplayAddEvent($id, $parameters, $returnid)
	{

		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		$event_id = get_parameter_value($parameters, 'event_id', -1);
		$event = $this->GetEvent($event_id);

		$button_text = 'Add';
		if($event_id > 0)
		{
			$button_text = 'Update';
		}


		echo <<<EOT
		<h4 class="admintitle">$button_text Event</h4>

EOT;

		echo $this->CreateFormStart($id, 'admin_event_update', $returnid, $method='post', $enctype='');
		echo $this->CreateInputHidden($id, 'event_id', $event_id);
		echo <<<EOT

	<table border=0 cellpadding=5 cellspacing=0>
	    <tr>
	        <td align="right">Start Date of Event:</td>
	        <td colspan=3>
EOT;

		$current_year = date('Y');
		$start = $current_year - 2;
		$end = $current_year + 10;
		$year_array = array();
		for($i = $start; $i < $end; $i++)
		{
			$year_array[$i] = $i;
		}
		$month_array = array();
		for($i = 0; $i < 12; $i++)
		{
			$month_name = strftime('%b', mktime(12,0,0,$i+1));
			$month_number = sprintf('%02d', $i+1);
			$month_array[$month_name] = $month_number;
		}
		$day_array = array();
		for($i=1; $i < 32; $i++)
		{
			$day = sprintf('%02d', $i);
			$day_array[$i] = $day;
		}
		$hour_array = array();
		for($i=0; $i < 24; $i++)
		{
			$hour = sprintf('%02d', $i);
			$hour_array[$hour] = $hour;
		}
		$minute_array = array();
		for($i=0; $i < 60; $i++)
		{
			$minute = sprintf('%02d', $i);
			$minute_array[$minute] = $minute;
		}
		if(isset($event['event_date_start']))
		{
			$event_date_start_time = strtotime($event['event_date_start']);
			$event_date_start_minute = date('i', $event_date_start_time);
			$event_date_start_hour = date('H', $event_date_start_time);
			$event_date_start_day = date('d', $event_date_start_time);
			$event_date_start_month = date('m', $event_date_start_time);
			$event_date_start_year = date('Y', $event_date_start_time);
		}
		else
		{
			$event_date_start_minute = 0; //date('i');
			$event_date_start_hour = 0; //date('H');
			$event_date_start_day = date('d');
			$event_date_start_month = date('n');
			$event_date_start_year = $current_year;
		}

		echo $this->CreateInputDropdown($id, 'event_date_start_day', $day_array, -1, $event_date_start_day);
		echo $this->CreateInputDropdown($id, 'event_date_start_month', $month_array, -1, $event_date_start_month);
		echo $this->CreateInputDropdown($id, 'event_date_start_year', $year_array, -1, $event_date_start_year);
		echo '&nbsp;at&nbsp;';
		echo $this->CreateInputDropdown($id, 'event_date_start_hour', $hour_array, -1, $event_date_start_hour);
		echo ':';
		echo $this->CreateInputDropdown($id, 'event_date_start_minute', $minute_array, -1, $event_date_start_minute);
	    echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	        <td align="right">End Date of Event:</td>
	        <td colspan=3>

EOT;

		if(isset($event['event_date_end']))
		{
			$event_date_end_time = strtotime($event['event_date_end']);
			$event_date_end_minute = date('i', $event_date_end_time);
			$event_date_end_hour = date('H', $event_date_end_time);
			$event_date_end_day = date('d', $event_date_end_time);
			$event_date_end_month = date('m', $event_date_end_time);
			$event_date_end_year = date('Y', $event_date_end_time);
		}
		else
		{
			$event_date_end_minute = 0;
			$event_date_end_hour = 0;
			$event_date_end_day = 0;
			$event_date_end_month = 0;
			$event_date_end_year = 0;
		}

		$day_array[''] = 0;
		$month_array[''] = 0;
		$year_array[''] = 0;
		asort($day_array);
		asort($month_array);
		asort($year_array);
		echo $this->CreateInputDropdown($id, 'event_date_end_day', $day_array, -1, $event_date_end_day);
		echo $this->CreateInputDropdown($id, 'event_date_end_month',$month_array, -1, $event_date_end_month);
		echo $this->CreateInputDropdown($id, 'event_date_end_year', $year_array, -1, $event_date_end_year);
		echo '&nbsp;at&nbsp;';
		echo $this->CreateInputDropdown($id, 'event_date_end_hour', $hour_array, -1, $event_date_end_hour);
		echo ':';
		echo $this->CreateInputDropdown($id, 'event_date_end_minute', $minute_array, -1, $event_date_end_minute);

	    echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	        <td align="right">Title:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'event_title', $event['event_title'], 50, 50);
	    echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	        <td align="right">Summary:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'event_summary', $event['event_summary'], 50, 100);
	    echo <<<EOT
			</td>
	    </tr>
		<tr>
	        <td align="right">Description:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateTextArea(true, $id, $event['event_details'], 'event_details', 'content', $id);
	    echo <<<EOT
			</td>
	    </tr>
	    <tr>
	        <td align="right">Categories:</td>
	        <td>
EOT;
		$num_cats = count($categories);
		$num_cols = 2;
		$rows_per_col = intval($num_cats / $num_cols);
		$count = 0;
		for($i = 0; $i < $num_cats; $i++,$count ++)
		{
			if($count >= $rows_per_col && $rows_per_col != 0)
			{
				$count = 0;
				echo "</td><td valign='top' style='padding-left: 40px;' >\n";
				$padding = 0;
			}

			if($i < $num_cats)
			{
				$category = $categories[$i];
				$cat_id = $category['category_id'];
				$cat_name = $category['category_name'];
				$checked = '';
				if(in_array($cat_id, $event['categories']))
					$checked = $cat_id;
				echo "<div>";
				echo $this->CreateInputCheckbox($id, 'event_categories[]', $cat_id, $checked);
				echo $cat_name;
				echo "</div>\n";
			}
		}

		echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	    	<td></td>
	        <td align="left">
EOT;

		echo $this->CreateInputSubmit($id, '', $button_text);

		echo <<<EOT

	            <input type="button" value="Cancel" onclick='javascript:window.history.go(-1)' />
		</td>
	    </tr>
	</table>

EOT;

		echo $this->CreateFormEnd();
	}

	function AdminDisplayCategories($id, $parameters, $returnid)
	{

		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		$num_cats = count($categories);

		echo $this->CreateFormStart($id, 'admin_categories_update', $returnid, $method='post', $enctype='');
	    echo <<<EOT

		<table border=0 cellspacing=0 cellpadding=3>
		<tr>
			<th>Name</th>
			<th>Order</th>
		</tr>

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
			if($i < $num_cats)
			{
				$category = $categories[$i];
				$category_id = $category['category_id'];
				$category_name = (empty($category['category_name']) && $id > 0) ? '== NOT SET ==' : $category['category_name'];
				$category_order = $category['category_order'];

				echo '<tr><td>';
				echo $this->CreateInputHidden($id, 'category_ids[]', $category_id);
				echo $this->CreateInputText($id, 'category_names[]', $category_name);
				echo '</td><td>';
				echo $this->CreateInputText($id, 'category_orders[]', $category_order);
				echo "</td></tr>\n";

			}
		}

		// submit button
		echo "<tr><td valign='top' colspan='2' align='center'>";
		echo $this->CreateInputSubmit($id, '', 'Update Categories');
		echo '</td></tr></table>';
		echo $this->CreateFormEnd();
	}

	function AdminUpdateCategories($id, $parameters, $returnid)
	{
	    $db = $this->cms->db; /* @var $db ADOConnection */
	    $db->debug = true; /* @var $rs ADORecordset */

		$ids = $parameters['category_ids'];
		$names = $parameters['category_names'];
		$orders = $parameters['category_orders'];

		$num_records = count($ids);
		for($i = 0; $i < $num_records; $i++)
		{
			// don't trust user input, but do $name later as quote() will add '' to it.
			$category_id = intval($ids[$i]);
			$category_order = intval($orders[$i]);
			$category_name = $names[$i];
			if($category_id > -1)
			{
				if($category_name == '')
				{
					// delete this category - remove the links first though.
					$sql = 'DELETE FROM ' . $this->events_to_categories_table_name . ' WHERE category_id = ' . $category_id;
					$db->Execute($sql);

					$sql = 'DELETE FROM ' . $this->categories_table_name . ' WHERE category_id = ' . $category_id;
					$db->Execute($sql);
				}
				else
				{
					$category_name = $db->quote($names[$i], get_magic_quotes_runtime());
					$sql = 'UPDATE ' . $this->categories_table_name . " SET
							category_name = $category_name
								,category_order = $category_order
							WHERE category_id = $category_id";
					$db->Execute($sql);
				}
			}
			elseif($category_name != '')
			{
				$category_name = $db->quote($names[$i], get_magic_quotes_runtime());
				$new_id = $db->GenID($this->categories_table_name.'_seq');

				$sql = 'INSERT INTO ' . $this->categories_table_name . " (category_id, category_name, category_order)
						VALUES ($new_id, $category_name, $category_order)";
				$db->Execute($sql);
			}
		}

		$url = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='', $params=array('categories_result'=>'1'), '', true);
		$url = str_replace('&amp;', '&', $url);
		redirect($url);
	}

	function AdminUpdateEvent($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$events_to_categories_table_name = cms_db_prefix().'module_events_to_categories';


		/* @var $rs ADORecordset */
		$user_id = $this->cms->variables['user_id'];
		$categories = get_parameter_value($parameters, 'event_categories');

		$event_id = get_parameter_value($parameters, 'event_id', -1);
		$event_title = $db->quote(get_parameter_value($parameters, 'event_title'), get_magic_quotes_runtime());
		$event_summary = $db->quote(get_parameter_value($parameters, 'event_summary'), get_magic_quotes_runtime());
		$event_details = $db->quote(get_parameter_value($parameters, 'event_details'), get_magic_quotes_runtime());
		$event_date_start_minute = get_parameter_value($parameters, 'event_date_start_minute', date('i'));
		$event_date_start_hour = get_parameter_value($parameters, 'event_date_start_hour', date('H'));
		$event_date_start_day = get_parameter_value($parameters, 'event_date_start_day', date('d'));
		$event_date_start_month = get_parameter_value($parameters, 'event_date_start_month', date('m'));
		$event_date_start_year = get_parameter_value($parameters, 'event_date_start_year', date('Y'));

		$event_date_start = sprintf("'%04d-%02d-%02d %02d:%02d'", $event_date_start_year, $event_date_start_month, $event_date_start_day,
								$event_date_start_hour, $event_date_start_minute);

		$event_date_end_minute = get_parameter_value($parameters, 'event_date_end_minute', 0);
		$event_date_end_hour = get_parameter_value($parameters, 'event_date_end_hour', 0);
		$event_date_end_day = get_parameter_value($parameters, 'event_date_end_day', 0);
		$event_date_end_month = get_parameter_value($parameters, 'event_date_end_month', 0);
		$event_date_end_year = get_parameter_value($parameters, 'event_date_end_year', 0);

		if($event_date_end_year == 0)
			$event_date_end = 'NULL';
		else
			$event_date_end = sprintf("'%04d-%02d-%02d %02d:%02d'", $event_date_end_year, $event_date_end_month, $event_date_end_day,
								$event_date_end_hour, $event_date_end_minute);
		if($event_id > -1)
		{
			// update
			$sql = "UPDATE " . $this->events_table_name . " SET
						event_title = $event_title
						,event_summary = $event_summary
						,event_details = $event_details
						,event_date_start = $event_date_start
						,event_date_end = $event_date_end
						,event_modified_date = NOW()
					WHERE event_id = $event_id";
			$db->Execute($sql);
		}
		else
		{
			$event_id = $db->GenID(cms_db_prefix()."module_events_seq");

			$sql = "INSERT INTO " . $this->events_table_name . " (
						event_id
						,event_title
						,event_summary
						,event_details
						,event_date_start
						,event_date_end
						,event_created_by
						,event_create_date
						,event_modified_date
					) VALUES (
					$event_id
					,$event_title
					,$event_summary
					,$event_details
					,$event_date_start
					,$event_date_end
					,$user_id
					,NOW()
					,NOW()
					)";
			$db->Execute($sql);
		}

		// delete current events_to_categories records for this event
		$sql = "DELETE FROM " . $this->events_to_categories_table_name . " WHERE event_id = $event_id";
		$db->Execute($sql);

		// update events_to_categories
		if(count($categories) > 0)
		{
			foreach($categories as $category_id)
			{
				$category_id = intval($category_id);
				if($category_id > 0)
				{
					$sql = "INSERT INTO " . $this->events_to_categories_table_name . "
								(category_id, event_id)
							VALUES
								($category_id, $event_id)";
					$db->Execute($sql);
				}
			}
		}

	}

	function AdminDeleteEvent($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$events_table_name = $this->events_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;

		$event_id = get_parameter_value($parameters, 'event_id', -1);

		// delete current events_to_categories records for this event
		$sql = "DELETE FROM $events_to_categories_table_name WHERE event_id = $event_id";
		$db->Execute($sql);

		// delete this event
		$sql = "DELETE FROM $events_table_name WHERE event_id = $event_id";
		$db->Execute($sql);
	}

	function AdminDisplayManageEvents($id, $parameters, $returnid)
	{
		$keyword = get_parameter_value($parameters, 'keyword', '', 'Calendar-keyword');
		$category_filter = get_parameter_value($parameters, 'category_filter', -1, 'Calendar-category_filter');
		$not_approved_only = get_parameter_value($parameters, 'not_approved_only', 0, 'Calendar-not_approved_only');

		echo "<p>", $this->CreateFormStart($id, 'defaultadmin', $returnid, $method='get', $enctype='');
		echo <<<EOT
	<table border=0 cellpadding=1 cellspacing=0 style='margin: 10px'>
	    <tr>
	        <td align="right" style='margin-right: 5px;'>Filter By:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'keyword', $keyword, 25, '100', 'style="width: 180px; margin-right: 5px;"');
		echo <<<EOT
			</td>
	    </tr>
	    <tr>
	        <td align="right" style='padding-right: 5px;'>Show Only Events in:</td>
	        <td colspan=3>
EOT;

		$categories = $this->GetCategories();

		//debug_display($cats ,'$cats');
		$category_array = array('Any Category'=>-1);
		foreach($categories as $category)
		{
			$category_array[$category['category_name']] = $category['category_id'];
		}

		echo $this->CreateInputDropdown($id, 'category_filter', $category_array, -1, $category_filter, 'style="width: 180px; margin-right: 5px;"');
		echo <<<EOT
			</td>
			<td><input type="submit" value="Go"></td>
	    </tr>
	</table>


EOT;
		echo $this->CreateFormEnd();

		global $gCms;
		echo $this->CreateLink($id, 'admin_add_event', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/newobject.gif', $this->Lang('cal_add_event'),'','','systemicon'), array(), '', false, false, '') .' '. $this->CreateLink($id, 'admin_add_event', $returnid, $this->Lang('cal_add_event'), array(), '', false, false, 'class="pageoptions"');

		$db = $this->cms->db;
		$db->debug = false;
		$where = 'WHERE';

		$sql = "SELECT ". $this->events_table_name . ".*
			FROM ". $this->events_table_name . " ";

		if($category_filter != -1)
		{

			$sql .= 'LEFT JOIN ' . $this->events_to_categories_table_name . ' ON ' .
							$this->events_to_categories_table_name . '.event_id = ' . $this->events_table_name . ".event_id \n" .
					$where . ' ' .$this->events_to_categories_table_name . '.category_id = ' . $category_filter . ' ';
			$where = 'AND';
		}

		if(!empty($keyword))
		{
			$sql .= "$where ". $this->events_table_name . ".event_title LIKE '%$keyword%'
						OR ". $this->events_table_name . ".event_details LIKE '%$keyword%'
						OR ". $this->events_table_name . ".event_summary LIKE '%$keyword%' ";
		}
		$order_by = get_parameter_value($parameters, 'order_by', '');
		if(empty($order_by))
		{
			$sql .= "ORDER BY ". $this->events_table_name . ".event_date_start ASC
						,". $this->events_table_name . ".event_title ";
		}
		else
		{
			$sql .= "ORDER BY ". $this->categories_table_name . ".$order_by";
		}

		$rs = $db->Execute($sql);

		if ($rs && $rs->RowCount() > 0)
		{
			$number_of_columns = get_parameter_value($parameters, 'columns', 2);

			$num_rows = $rs->RecordCount();
			$rows_per_column = intval($num_rows / $number_of_columns) + 0; /* 10 is a fudge factor to make it look better! */

			$row_count = 0;

			echo "<table cellspacing=0 class='pagetable'><thead>\n";
			echo "<tr><th>Title</th><th>From Date</th><th>To Date</th><th>Summary</th><th class=\"pageicon\"></th><th class=\"pageicon\"></th></tr></thead>\n";

			while( ($row = $rs->FetchRow()) )
			{
				$row_count++;
				$row_class = ($row_count % 2) ? 'row1' : 'row2';

				$event_id = $row['event_id'];
				//$category_name = $row['category_name'];
				$event_title = $row['event_title'];

				$event_date_start = $row['event_date_start'];
				$event_date_start_time = strtotime($row['event_date_start']);
				if(strftime('%H%M', $event_date_start_time)== '0000')
					$event_date_start_string = strftime('%d/%b/%Y', $event_date_start_time);
				else
					$event_date_start_string = strftime('%d/%b/%Y %H:%M', $event_date_start_time);

				$event_date_end = $row['event_date_end'];
				if($event_date_end)
				{
					$event_date_end_time = strtotime($row['event_date_end']);
					if(strftime('%H%M', $event_date_end_time)== '0000')
						$event_date_end_string = strftime('%d/%b/%Y', $event_date_end_time);
					else
						$event_date_end_string = strftime('%d/%b/%Y %H:%M', $event_date_end_time);
				}
				else
				{
					$event_date_end_string = '&nbsp;';
				}

				$event_summary = $row['event_summary'];
				$event_created_by = $row['event_created_by'];
				$create_date = $row['event_create_date'];
				$modified_date = $row['event_modified_date'];

				$edit_url = $this->CreateLink($id, 'admin_edit_event', $returnid, $contents='Manage Events', $params=array('event_id'=>$event_id), '', true);

				echo <<<EOT
					<tr class="$row_class">
						<td><a href='$edit_url'>$event_title</a></td>
						<td>$event_date_start_string</td>
						<td>$event_date_end_string</td>
						<td>$event_summary </td>

EOT;
				// edit and delete icons - borrowed from content list for consistency
				$editlink = $this->CreateLink($id, 'admin_edit_event', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/edit.gif', $this->Lang('cal_edit'),'','','systemicon'), array('event_id'=>$event_id));
				$deletelink = $this->CreateLink($id, 'admin_delete_event', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/delete.gif', $this->Lang('cal_delete'),'','','systemicon'), array('event_id'=>$event_id), $this->Lang('cal_areyousure') . ' \\\'' . $event_title . '\\\'?');

				echo "\t\t\t\t<td>$editlink</td>\n";
				echo "\t\t\t\t<td>$deletelink</td>\n";

				echo <<<EOT
					</tr>

EOT;
			}

			// close off final column
			echo "\t\t</ul>\n";
			echo "\t</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
			echo "<!-- End of Events Module -->\n";

		}
	}

	function AdminUpdateSettings($id, $parameters, $returnid)
	{
		$submit = get_parameter_value($parameters, 'submit');
		if($submit != '')
		{
			$language = get_parameter_value($parameters, 'language');
			$this->SetPreference('Calendar-language', $language);
		}

		$url = $this->CreateLink($id, 'admin_manage_settings', $returnid, $contents='', $params=array('settings_result'=>'1'), '', true);
		$url = str_replace('&amp;', '&', $url);
		redirect($url);
		exit;
	}

	function AdminManageSettings($id, $parameters, $returnid)
	{
		$language = $this->GetPreference('Calendar-language', 'en_US');

		echo $this->CreateFormStart($id, 'admin_settings_update', $returnid, $method='post', $enctype='');

		echo <<<EOT

	    <table border=0 cellspacing=0 cellpadding=3>
	    <tr>
	        <td align="right">Language:</td>
	        <td colspan=3>
EOT;
		$language_array = array();

		// find all the current languages
		$dir = dirname(__FILE__)."/lang";
		$ls = dir($dir);
		while (($file = $ls->read()) != "") {
			if (is_file("$dir/$file") && strpos($file, ".php") != 0)
			{
				$this_lang = str_replace('.php', '', $file);
				$language_array[$this_lang] = $this_lang;
			}
		}

		echo $this->CreateInputDropdown($id, 'language', $language_array, -1, $language);

	    echo <<<EOT
	        </td>
	    </tr>
EOT;

	    echo "<tr><td valign='top' colspan='2' align='center'>";
		echo $this->CreateInputSubmit($id, 'submit', 'Update Settings');
		echo '</td></tr></table>';
		echo $this->CreateFormEnd();

	}


	function AdminDisplayTemplate($template, $id, $parameters, $returnid)
	{
        echo $this->CreateFormStart($id, 'admin_update_template');
        echo $this->CreateInputHidden($id, 'template_name', $template);
        echo '<p style="margin-top: 10px">'.$this->CreateTextArea(false, $id, $this->GetTemplate($template), 'template_content', '').'</p>';
        echo '<p style="margin-top: 5px">'.$this->CreateInputSubmit($id, 'submitbutton', $this->Lang('cal_update_template')) .' </p>';
        echo $this->CreateFormEnd();
	}

	function AdminUpdateTemplate($id, $parameters, $returnid)
	{
	    if(isset($parameters['template_name']))
	    {
	        $template_name = $parameters['template_name'];
	        $template_content = $parameters['template_content'];
            $this->SetTemplate($template_name, $template_content);
    		$url = $this->CreateLink($id, 'admin_'.$template_name.'_template', $returnid, $contents='', $params=array('settings_result'=>'1'), '', true);
    		$url = str_replace('&amp;', '&', $url);
    		redirect($url);
	    }
	    else
	    {
            $this->Redirect($id, 'defaultadmin');
	    }
	    exit;
	}

	function UserDisplay($id, $parameters, $returnid)
	{
	    $lang = get_parameter_value($parameters, 'lang');
	    if($lang == '')
	    {
	        $parameters['lang'] = $this->language;
	        $old_curlang = $this->curlang;
	        $this->curlang = $this->language;
	    }
	    $display = get_parameter_value($parameters, 'display', 'calendar');
	    unset($this->langhash);

		switch($display)
		{
		    case 'calendar':
                $this->DisplayCalendar($id, $parameters, $returnid);
                break;

            case 'event':
                $this->DisplayEvent($id, $parameters, $returnid);
                break;

            case 'list':
                $this->DisplayList($id, $parameters, $returnid);
                break;

            case 'upcominglist':
                $this->DisplayUpcomingList($id, $parameters, $returnid);
                break;

            default:
                echo "Calendar: unknown display attribute '$display'!";
            break;
		}

		unset($this->langhash); // force the original language to be reloaded
		$this->curlang = $old_curlang;
	}

	function DisplayCalendar($id, $parameters, $returnid)
	{
	    $category = get_parameter_value($parameters, 'category', '');
	    $summaries = get_parameter_value($parameters, 'summaries', 1);
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;
		$first_day_of_week = get_parameter_value($parameters, 'first_day_of_week', 1);
		$table_id = get_parameter_value($parameters, 'table_id', 'calendar-'.$id.$returnid);

		$use_session = get_parameter_value($parameters, 'use_session', true);
		if($use_session)
		{
			$month = get_parameter_value($parameters, 'month', date('n'), 'calendar-month'.$id.$returnid);
			$year = get_parameter_value($parameters, 'year', date('Y'), 'calendar-year'.$id.$returnid);
		}
		else
		{
			$month = get_parameter_value($parameters, 'month', date('n'));
			$year = get_parameter_value($parameters, 'year', date('Y'));
		}

		// basic information about dates
		$prev_month['timestamp'] = strtotime("-1 month", mktime(0,0,0,$month, 1, $year));
		$prev_month['year'] = date('Y', $prev_month['timestamp']);
		$prev_month['month'] = date('n', $prev_month['timestamp']);
		$next_month['timestamp'] = strtotime("+1 month", mktime(0,0,0,$month, 1, $year));
		$next_month['year'] = date('Y', $next_month['timestamp']);
		$next_month['month'] = date('n', $next_month['timestamp']);

		$last_day_of_month = mktime(0, 0, 0, $next_month['month'], 0, $next_month['year']);


		$db = $this->cms->db;
        $where = 'WHERE';
		$sql = "SELECT DISTINCT $events_table_name.*
				FROM $events_table_name\n";
		if($category)
		{
		    $sql .= "INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";
		}

        $start = sprintf('%04d-%02d-01 00:00:00', $year, $month);
        $end = sprintf('%04d-%02d-%02d 23:59:59', date('Y', $last_day_of_month), date('m', $last_day_of_month), date('d', $last_day_of_month));

        $sql .= "$where ($events_table_name.event_date_start >= '$start' \n\tOR $events_table_name.event_date_end >= '$start')\n";
        $sql .= "AND ($events_table_name.event_date_start <= '$end' \n\tOR $events_table_name.event_date_end <= '$end')\n";

		$where = ' AND ';

		if($category)
		{
			$cats = explode(',', $category);
			$sql .= $where . ' (';
			$count = 0;
			foreach($cats as $cat)
			{
				$cat = trim($cat);
				if($count != 0)
				{
					$sql .= ' OR ';
				}
				$count++;
				$sql .= "$categories_table_name.category_name LIKE '$cat' ";
			}
			$sql .=	') ';
			$where = ' AND ';
		}
		$sql .= " ORDER BY $events_table_name.event_date_start ASC";

		$rs = $db->Execute($sql); /* @var $rs ADOConnection */
		//debug_display($sql);
		$number_of_days_in_month = date('d', $last_day_of_month);

		$days = array();
		for($i = 1; $i <= $number_of_days_in_month; $i++)
		{
		    $days[$i]['url'] = $this->CreateLink($id, 'default', $returnid, $contents='',
		          $params=array('year'=>$year, 'month'=>$month, 'day'=>$i, 'display'=>'list','return_link'=>1,'detail'=>1, 'lang'=>$this->curlang), '', true);
		    $days[$i]['events'] = array();
		}
		if($rs->RowCount() > 0)
		{
			while($row = $rs->FetchRow())
			{
			    //debug_display($row, '$row');
			    $start_date = strtotime($row['event_date_start']);

			    if(empty($row['event_date_end']))
			    {
			        $end_date = $start_date;
			    }
			    else
			    {
                    $end_date = strtotime($row['event_date_end']);
			    }

                $start_month = date('n', $start_date);
                $end_month = date('n', $end_date);

                // find out where the event starts within this month
                $first_day_of_event_in_this_month = date('j', $start_date);
			    if($start_month < $month)
                {
                    $first_day_of_event_in_this_month = 1;
                }

                // find out where the event ends within in this month
                $last_day_of_event_in_this_month = date('j', $end_date);
			    if($end_month > $month)
                {
                    $last_day_of_event_in_this_month = $number_of_days_in_month;
                }

                $url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'event_id'=>$row['event_id'], 'display'=>'event', 'lang'=>$this->curlang), '', true);
                $row['url'] = $url;

                // stick the event into the $days array
                for($i = $first_day_of_event_in_this_month; $i <= $last_day_of_event_in_this_month; $i++)
                {
                    $days[$i]['events'][] = $row;
                }
			}
		}

		if($year == date('Y') && $month == date('m'))
		{
			// month being displayed is this month. Therefore today exists
			$today = date('j');
			$days[$today]['class'] .= ' calendar-today';
		}


		$navigation['next'] = $this->CreateReturnLink($id, $returnid, '', array('year'=>$next_month['year'], 'month'=>$next_month['month']), true);
		$navigation['prev'] = $this->CreateReturnLink($id, $returnid, '', array('year'=>$prev_month['year'], 'month'=>$prev_month['month']), true);


		$day_names[0] = $this->Lang('cal_sunday');
		$day_names[1] = $this->Lang('cal_monday');
		$day_names[2] = $this->Lang('cal_tuesday');
		$day_names[3] = $this->Lang('cal_wednesday');
		$day_names[4] = $this->Lang('cal_thursday');
		$day_names[5] = $this->Lang('cal_friday');
		$day_names[6] = $this->Lang('cal_saturday');
		$day_short_names[0] = $this->Lang('cal_sun');
		$day_short_names[1] = $this->Lang('cal_mon');
		$day_short_names[2] = $this->Lang('cal_tues');
		$day_short_names[3] = $this->Lang('cal_wed');
		$day_short_names[4] = $this->Lang('cal_thurs');
		$day_short_names[5] = $this->Lang('cal_fri');
		$day_short_names[6] = $this->Lang('cal_sat');
		$month_names[1] = $this->Lang('cal_january');
		$month_names[2] = $this->Lang('cal_february');
		$month_names[3] = $this->Lang('cal_march');
		$month_names[4] = $this->Lang('cal_april');
		$month_names[5] = $this->Lang('cal_may');
		$month_names[6] = $this->Lang('cal_june');
		$month_names[7] = $this->Lang('cal_july');
		$month_names[8] = $this->Lang('cal_august');
		$month_names[9] = $this->Lang('cal_september');
		$month_names[10] = $this->Lang('cal_october');
		$month_names[11] = $this->Lang('cal_november');
		$month_names[12] = $this->Lang('cal_december');
		// note that we need the "0x" version because {date_format} doesn't give us the month number without a leading zero
		$month_names["01"] = $this->Lang('cal_january');
		$month_names["02"] = $this->Lang('cal_february');
		$month_names["03"] = $this->Lang('cal_march');
		$month_names["04"] = $this->Lang('cal_april');
		$month_names["05"] = $this->Lang('cal_may');
		$month_names["06"] = $this->Lang('cal_june');
		$month_names["07"] = $this->Lang('cal_july');
		$month_names["08"] = $this->Lang('cal_august');
		$month_names["09"] = $this->Lang('cal_september');

		if($first_day_of_week != 0)
		{
		    for($i = 0; $i < $first_day_of_week; $i++)
		    {
    		    $first = array_shift($day_names);
    		    $day_names[] = $first;
    		    $first = array_shift($day_short_names);
    		    $day_short_names[] = $first;
		    }
		}

		// calendar stuff
        $first_of_month = gmmktime(0,0,0,$month,1,$year);
        $first_of_month_weekday_number = gmstrftime('%w',$first_of_month);
        $first_of_month_weekday_number = ($first_of_month_weekday_number + 7 - $first_day_of_week) % 7; #adjust for $first_day

        // assign to Smarty
        $this->smarty->assign_by_ref('month_names', $month_names);
        $this->smarty->assign_by_ref('day_names', $day_names);
        $this->smarty->assign_by_ref('day_short_names', $day_short_names);
        $this->smarty->assign_by_ref('first_of_month_weekday_number', $first_of_month_weekday_number);
        $this->smarty->assign_by_ref('table_id', $table_id);
		$this->smarty->assign_by_ref('navigation', $navigation);
		$this->smarty->assign_by_ref('days', $days);
		$this->smarty->assign_by_ref('month', $month);
		$this->smarty->assign_by_ref('year', $year);
		$this->smarty->assign_by_ref('summaries', $summaries);

		// Display template
		if (isset($params['calendartemplate']))
		{
			echo $this->ProcessTemplate($params['calendartemplate']);
		}
		else
		{
		    $t = $this->GetTemplate('calendar');
			if(empty($t))
			{
			    $this->SetTemplate('calendar', $this->GetDefaultTemplate('calendar'));
			}

			echo $this->ProcessTemplateFromDatabase('calendar');
		}
	}

	function DisplayEvent($id, $parameters, $returnid)
	{
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;

		$category = get_parameter_value($parameters, 'category', '');
	    $summaries = get_parameter_value($parameters, 'summaries', 1);
		$first_day_of_week = get_parameter_value($parameters, 'first_day_of_week', 1);
		$table_id = get_parameter_value($parameters, 'table_id', 'calendar-'.$id.$returnid);
		$event_id = get_parameter_value($parameters, 'event_id', -1);
		if($event_id == -1)
		{
		    // no event
		    echo '<div class="calendar-error">Cannot find event</div>';
    		return;
		}

		$use_session = get_parameter_value($parameters, 'use_session', true);
		if($use_session)
		{
			$month = get_parameter_value($parameters, 'month', date('n'), 'calendar-month'.$id.$returnid);
			$year = get_parameter_value($parameters, 'year', date('Y'), 'calendar-year'.$id.$returnid);
		}
		else
		{
			$month = get_parameter_value($parameters, 'month', date('n'));
			$year = get_parameter_value($parameters, 'year', date('Y'));
		}


		$db = $this->cms->db;
        $where = 'WHERE';
		$sql = "SELECT DISTINCT $events_table_name.*
				FROM $events_table_name
                WHERE event_id = $event_id";

        $rs = $db->Execute($sql);
        if($rs->RecordCount() != 1)
        {
		    // something's wrong
		    echo '<div class="calendar-error">Either event_id is not in the database, or there is more than one event with this id! ('.$event_id.')</div>';
    		return;
        }

        $event = $rs->FetchRow();

		// pick up categories
	    $sql = "SELECT DISTINCT $categories_table_name.*
                FROM $categories_table_name
                LEFT JOIN $events_to_categories_table_name
                ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
                WHERE $events_to_categories_table_name.event_id = $event_id";
	    $rs = $db->Execute($sql);
	    $categories = array();
	    if($rs)
	    {
	        $categories = $rs->GetArray();
	    }

        $return_url = $this->CreateReturnLink($id, $returnid, $this->lang('cal_return'));

		$day_names[0] = $this->Lang('cal_sunday');
		$day_names[1] = $this->Lang('cal_monday');
		$day_names[2] = $this->Lang('cal_tuesday');
		$day_names[3] = $this->Lang('cal_wednesday');
		$day_names[4] = $this->Lang('cal_thursday');
		$day_names[5] = $this->Lang('cal_friday');
		$day_names[6] = $this->Lang('cal_saturday');
		$day_short_names[0] = $this->Lang('cal_sun');
		$day_short_names[1] = $this->Lang('cal_mon');
		$day_short_names[2] = $this->Lang('cal_tues');
		$day_short_names[3] = $this->Lang('cal_wed');
		$day_short_names[4] = $this->Lang('cal_thurs');
		$day_short_names[5] = $this->Lang('cal_fri');
		$day_short_names[6] = $this->Lang('cal_sat');

		$month_names[1] = $this->Lang('cal_january');
		$month_names[2] = $this->Lang('cal_february');
		$month_names[3] = $this->Lang('cal_march');
		$month_names[4] = $this->Lang('cal_april');
		$month_names[5] = $this->Lang('cal_may');
		$month_names[6] = $this->Lang('cal_june');
		$month_names[7] = $this->Lang('cal_july');
		$month_names[8] = $this->Lang('cal_august');
		$month_names[9] = $this->Lang('cal_september');
		$month_names[10] = $this->Lang('cal_october');
		$month_names[11] = $this->Lang('cal_november');
		$month_names[12] = $this->Lang('cal_december');
		// note that we need the "0x" version because {date_format} doesn't give us the month number without a leading zero
		$month_names["01"] = $this->Lang('cal_january');
		$month_names["02"] = $this->Lang('cal_february');
		$month_names["03"] = $this->Lang('cal_march');
		$month_names["04"] = $this->Lang('cal_april');
		$month_names["05"] = $this->Lang('cal_may');
		$month_names["06"] = $this->Lang('cal_june');
		$month_names["07"] = $this->Lang('cal_july');
		$month_names["08"] = $this->Lang('cal_august');
		$month_names["09"] = $this->Lang('cal_september');

		if($first_day_of_week != 0)
		{
		    for($i = 0; $i < $first_day_of_week; $i++)
		    {
    		    $first = array_shift($day_names);
    		    $day_names[] = $first;
    		    $first = array_shift($day_short_names);
    		    $day_short_names[] = $first;
		    }
		}

		// other language fields
        $lang['date'] = $this->Lang('cal_date');
        $lang['summary'] = $this->Lang('cal_summary');
        $lang['details'] = $this->Lang('cal_details');
        $lang['return'] = $this->Lang('cal_return');
        $lang['to'] = $this->Lang('cal_to');

        // assign to Smarty
        $this->smarty->assign_by_ref('month_names', $month_names);
        $this->smarty->assign_by_ref('day_names', $day_names);
        $this->smarty->assign_by_ref('day_short_names', $day_short_names);
        $this->smarty->assign_by_ref('event', $event);
        $this->smarty->assign_by_ref('categories', $categories);
        $this->smarty->assign_by_ref('return_url', $return_url);
        $this->smarty->assign_by_ref('table_id', $table_id);
        $this->smarty->assign_by_ref('lang', $lang);
        $this->smarty->assign_by_ref('mo', $lang);

		// Display template
		if (isset($params['eventtemplate']))
		{
			echo $this->ProcessTemplate($params['eventtemplate']);
		}
		else
		{
		    $t = $this->GetTemplate('event');
			if(empty($t))
			{
			    $this->SetTemplate('event', $this->GetDefaultTemplate('event'));
			}

			echo $this->ProcessTemplateFromDatabase('event');
		}

	}

	function DisplayList($id, $parameters, $returnid)
	{
	    $category = get_parameter_value($parameters, 'category', '');
	    $summaries = get_parameter_value($parameters, 'summaries', 1);
	    $detail = get_parameter_value($parameters, 'detail', 0);
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;
		$first_day_of_week = get_parameter_value($parameters, 'first_day_of_week', 1);
		$table_id = get_parameter_value($parameters, 'table_id', 'calendar-'.$id.$returnid);
		$return_link = get_parameter_value($parameters, 'return_link', 0);
		$limit = get_parameter_value($parameters, 'limit', -1);

		$use_session = get_parameter_value($parameters, 'use_session', true);
		if($use_session)
		{
			$month = get_parameter_value($parameters, 'month', date('n'), 'calendar-month'.$id.$returnid);
			$year = get_parameter_value($parameters, 'year', date('Y'), 'calendar-year'.$id.$returnid);
		}
		else
		{
			$month = get_parameter_value($parameters, 'month', date('n'));
			$year = get_parameter_value($parameters, 'year', date('Y'));
		}

		$day = get_parameter_value($parameters, 'day', -1);

		$db = $this->cms->db;
        $where = 'WHERE';
		$sql = "SELECT DISTINCT $events_table_name.*
				FROM $events_table_name\n";
		if($category)
		{
		    $sql .= "INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";
		}

		if($day > 0)
		{
		    $start = sprintf('%04d-%02d-%02d 00:00:00', $year, $month, $day);
            $end = sprintf('%04d-%02d-%02d 23:59:59', $year, $month, $day);
		}
		else
		{
		    $start = sprintf('%04d-%02d-01 00:00:00', $year, $month);
            $end = sprintf('%04d-%02d-%02d 23:59:59', date('Y', $last_day_of_month), date('m', $last_day_of_month), date('d', $last_day_of_month));
		}
        $sql .= "$where ($events_table_name.event_date_start >= '$start' \n\tOR $events_table_name.event_date_end >= '$start')\n";
        $sql .= "AND ($events_table_name.event_date_start <= '$end' \n\tOR $events_table_name.event_date_end <= '$end')\n";
		$where = ' AND ';

		if($category)
		{
			$cats = explode(',', $category);
			$sql .= $where . ' (';
			$count = 0;
			foreach($cats as $cat)
			{
				$cat = trim($cat);
				if($count != 0)
				{
					$sql .= ' OR ';
				}
				$count++;
				$sql .= "$categories_table_name.category_name LIKE '$cat' ";
			}
			$sql .=	') ';
			$where = ' AND ';
		}
		$sql .= " ORDER BY $events_table_name.event_date_start ASC";

		if($limit > 0)
		{
            $rs = $db->SelectLimit($sql, $limit);
		}
		else
		{
		  $rs = $db->Execute($sql); /* @var $rs ADOConnection */
		}

		$events = array();
        if($rs->RowCount() > 0)
		{
			while($row = $rs->FetchRow())
			{

			    // debug_display($row, '$row');
                $url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'event_id'=>$row['event_id'], 'display'=>'event', 'lang'=>$this->curlang), '', true);
                $row['url'] = $url;

                $events[] = $row;
			}
		}

		$day_names[0] = $this->Lang('cal_sunday');
		$day_names[1] = $this->Lang('cal_monday');
		$day_names[2] = $this->Lang('cal_tuesday');
		$day_names[3] = $this->Lang('cal_wednesday');
		$day_names[4] = $this->Lang('cal_thursday');
		$day_names[5] = $this->Lang('cal_friday');
		$day_names[6] = $this->Lang('cal_saturday');
		$day_short_names[0] = $this->Lang('cal_sun');
		$day_short_names[1] = $this->Lang('cal_mon');
		$day_short_names[2] = $this->Lang('cal_tues');
		$day_short_names[3] = $this->Lang('cal_wed');
		$day_short_names[4] = $this->Lang('cal_thurs');
		$day_short_names[5] = $this->Lang('cal_fri');
		$day_short_names[6] = $this->Lang('cal_sat');
		$month_names[1] = $this->Lang('cal_january');
		$month_names[2] = $this->Lang('cal_february');
		$month_names[3] = $this->Lang('cal_march');
		$month_names[4] = $this->Lang('cal_april');
		$month_names[5] = $this->Lang('cal_may');
		$month_names[6] = $this->Lang('cal_june');
		$month_names[7] = $this->Lang('cal_july');
		$month_names[8] = $this->Lang('cal_august');
		$month_names[9] = $this->Lang('cal_september');
		$month_names[10] = $this->Lang('cal_october');
		$month_names[11] = $this->Lang('cal_november');
		$month_names[12] = $this->Lang('cal_december');
		// note that we need the "0x" version because {date_format} doesn't give us the month number without a leading zero
		$month_names["01"] = $this->Lang('cal_january');
		$month_names["02"] = $this->Lang('cal_february');
		$month_names["03"] = $this->Lang('cal_march');
		$month_names["04"] = $this->Lang('cal_april');
		$month_names["05"] = $this->Lang('cal_may');
		$month_names["06"] = $this->Lang('cal_june');
		$month_names["07"] = $this->Lang('cal_july');
		$month_names["08"] = $this->Lang('cal_august');
		$month_names["09"] = $this->Lang('cal_september');

		if($first_day_of_week != 0)
		{
		    for($i = 0; $i < $first_day_of_week; $i++)
		    {
    		    $first = array_shift($day_names);
    		    $day_names[] = $first;
    		    $first = array_shift($day_short_names);
    		    $day_short_names[] = $first;
		    }
		}

		$return_url = '';
		if($return_link == 1)
		{
            $return_url = $this->CreateReturnLink($id, $returnid, $this->lang('cal_return'));
		}

		// other language fields
        $lang['date'] = $this->Lang('cal_date');
        $lang['summary'] = $this->Lang('cal_summary');
        $lang['details'] = $this->Lang('cal_details');
        $lang['return'] = $this->Lang('cal_return');
        $lang['to'] = $this->Lang('cal_to');

        // assign to Smarty
        $this->smarty->assign_by_ref('month_names', $month_names);
        $this->smarty->assign_by_ref('day_names', $day_names);
        $this->smarty->assign_by_ref('day_short_names', $day_short_names);
        $this->smarty->assign_by_ref('table_id', $table_id);
		$this->smarty->assign_by_ref('events', $events);
		$this->smarty->assign_by_ref('day', $day);
		$this->smarty->assign_by_ref('month', $month);
		$this->smarty->assign_by_ref('year', $year);
		$this->smarty->assign_by_ref('summaries', $summaries);
		$this->smarty->assign_by_ref('detail', $detail);
		$this->smarty->assign_by_ref('return_url', $return_url);
		$this->smarty->assign_by_ref('lang', $lang);

		// Display template
		if (isset($params['listtemplate']))
		{
			echo $this->ProcessTemplate($params['listtemplate']);
		}
		else
		{
		    $t = $this->GetTemplate('list');
			if(empty($t))
			{
			    $this->SetTemplate('list', $this->GetDefaultTemplate('list'));
			}

			echo $this->ProcessTemplateFromDatabase('list');
		}
	}

	function DisplayUpcomingList($id, $parameters, $returnid)
	{
	    $category = get_parameter_value($parameters, 'category', '');
	    $summaries = get_parameter_value($parameters, 'summaries', 1);
	    $detail = get_parameter_value($parameters, 'detail', 0);
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;
		$first_day_of_week = get_parameter_value($parameters, 'first_day_of_week', 1);
		$table_id = get_parameter_value($parameters, 'table_id', 'calendar-'.$id.$returnid);
		$return_link = get_parameter_value($parameters, 'return_link', 0);
		$limit = get_parameter_value($parameters, 'limit', -1);

		$use_session = get_parameter_value($parameters, 'use_session', true);
		if($use_session)
		{
			$month = get_parameter_value($parameters, 'month', date('n'), 'calendar-month'.$id.$returnid);
			$year = get_parameter_value($parameters, 'year', date('Y'), 'calendar-year'.$id.$returnid);
		}
		else
		{
			$month = get_parameter_value($parameters, 'month', date('n'));
			$year = get_parameter_value($parameters, 'year', date('Y'));
		}

		$day = get_parameter_value($parameters, 'day', -1);

		$db = $this->cms->db;
        $where = 'WHERE';
		$sql = "SELECT DISTINCT $events_table_name.*
				FROM $events_table_name\n";
		if($category)
		{
		    $sql .= "INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";
		}

		$start = date('Y-m-d H:i:s'); // start now !

        $sql .= "$where ($events_table_name.event_date_start >= '$start' \n\tOR $events_table_name.event_date_end >= '$start')\n";
		$where = ' AND ';

		if($category)
		{
			$cats = explode(',', $category);
			$sql .= $where . ' (';
			$count = 0;
			foreach($cats as $cat)
			{
				$cat = trim($cat);
				if($count != 0)
				{
					$sql .= ' OR ';
				}
				$count++;
				$sql .= "$categories_table_name.category_name LIKE '$cat' ";
			}
			$sql .=	') ';
			$where = ' AND ';
		}
		$sql .= " ORDER BY $events_table_name.event_date_start ASC";

		if($limit > 0)
		{
            $rs = $db->SelectLimit($sql, $limit);
		}
		else
		{
		  $rs = $db->Execute($sql); /* @var $rs ADOConnection */
		}

		$events = array();
        if($rs->RowCount() > 0)
		{
			while($row = $rs->FetchRow())
			{
			    // debug_display($row, '$row');
                $url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'event_id'=>$row['event_id'], 'display'=>'event', 'lang'=>$this->curlang), '', true);
                $row['url'] = $url;

                $events[] = $row;
			}
		}

		$day_names[0] = $this->Lang('cal_sunday');
		$day_names[1] = $this->Lang('cal_monday');
		$day_names[2] = $this->Lang('cal_tuesday');
		$day_names[3] = $this->Lang('cal_wednesday');
		$day_names[4] = $this->Lang('cal_thursday');
		$day_names[5] = $this->Lang('cal_friday');
		$day_names[6] = $this->Lang('cal_saturday');
		$day_short_names[0] = $this->Lang('cal_sun');
		$day_short_names[1] = $this->Lang('cal_mon');
		$day_short_names[2] = $this->Lang('cal_tues');
		$day_short_names[3] = $this->Lang('cal_wed');
		$day_short_names[4] = $this->Lang('cal_thurs');
		$day_short_names[5] = $this->Lang('cal_fri');
		$day_short_names[6] = $this->Lang('cal_sat');
		$month_names[1] = $this->Lang('cal_january');
		$month_names[2] = $this->Lang('cal_february');
		$month_names[3] = $this->Lang('cal_march');
		$month_names[4] = $this->Lang('cal_april');
		$month_names[5] = $this->Lang('cal_may');
		$month_names[6] = $this->Lang('cal_june');
		$month_names[7] = $this->Lang('cal_july');
		$month_names[8] = $this->Lang('cal_august');
		$month_names[9] = $this->Lang('cal_september');
		$month_names[10] = $this->Lang('cal_october');
		$month_names[11] = $this->Lang('cal_november');
		$month_names[12] = $this->Lang('cal_december');
		// note that we need the "0x" version because {date_format} doesn't give us the month number without a leading zero
		$month_names["01"] = $this->Lang('cal_january');
		$month_names["02"] = $this->Lang('cal_february');
		$month_names["03"] = $this->Lang('cal_march');
		$month_names["04"] = $this->Lang('cal_april');
		$month_names["05"] = $this->Lang('cal_may');
		$month_names["06"] = $this->Lang('cal_june');
		$month_names["07"] = $this->Lang('cal_july');
		$month_names["08"] = $this->Lang('cal_august');
		$month_names["09"] = $this->Lang('cal_september');

		if($first_day_of_week != 0)
		{
		    for($i = 0; $i < $first_day_of_week; $i++)
		    {
    		    $first = array_shift($day_names);
    		    $day_names[] = $first;
    		    $first = array_shift($day_short_names);
    		    $day_short_names[] = $first;
		    }
		}

		$return_url = '';
		if($return_link == 1)
		{
            $return_url = $this->CreateReturnLink($id, $returnid, $this->lang('cal_return'));
		}

		// other language fields
        $lang['date'] = $this->Lang('cal_date');
        $lang['summary'] = $this->Lang('cal_summary');
        $lang['details'] = $this->Lang('cal_details');
        $lang['return'] = $this->Lang('cal_return');
        $lang['to'] = $this->Lang('cal_to');
        $lang['upcoming_events'] = $this->Lang('cal_upcoming_events');

        // assign to Smarty
        $this->smarty->assign_by_ref('month_names', $month_names);
        $this->smarty->assign_by_ref('day_names', $day_names);
        $this->smarty->assign_by_ref('day_short_names', $day_short_names);
        $this->smarty->assign_by_ref('table_id', $table_id);
		$this->smarty->assign_by_ref('events', $events);
		$this->smarty->assign_by_ref('day', $day);
		$this->smarty->assign_by_ref('month', $month);
		$this->smarty->assign_by_ref('year', $year);
		$this->smarty->assign_by_ref('summaries', $summaries);
		$this->smarty->assign_by_ref('detail', $detail);
		$this->smarty->assign_by_ref('return_url', $return_url);
		$this->smarty->assign_by_ref('lang', $lang);

		// Display template
		if (isset($params['upcominglisttemplate']))
		{
			echo $this->ProcessTemplate($params['upcominglisttemplate']);
		}
		else
		{
		    $t = $this->GetTemplate('upcominglist');
			if(empty($t))
			{
			    $this->SetTemplate('upcominglist', $this->GetDefaultTemplate('upcominglist'));
			}

			echo $this->ProcessTemplateFromDatabase('upcominglist');
		}
	}

	function GetDefaultTemplate($template)
	{
	    switch($template)
	    {
	        case 'calendar':
                return '{strip}
<table class="calendar" id="{$table_id}">
<caption class="calendar-month"><span class="calendar-prev"><a href="{$navigation.prev}">&laquo;</a></span>&nbsp;{$month_names[$month]}&nbsp;{$year}&nbsp;<span class="calendar-next"><a href="{$navigation.next}">&raquo;</a></span></caption>
<tbody><tr>
{foreach from=$day_names item=day key=key}
<th abbr="{$day}">{$day_short_names[$key]}</th>
{/foreach}</tr>

<tr>
{* initial empty days *}
{if $first_of_month_weekday_number > 0}
<td colspan="{$first_of_month_weekday_number}">&nbsp;</td>
{/if}

{* iterate over the days of this month *}
{assign var=weekday value=$first_of_month_weekday_number}
{foreach from=$days item=day key=key}
{if $weekday == 7}
    {assign var=weekday value=0}
</tr>
<tr>
{/if}
<td {if $day.class}class="{$day.class}"{/if}>
{if $day.events.0}<a href="{$day.url}">{$key}</a>
{if $summaries == true}
<ul>
{foreach from=$day.events item=event}
<li><a href="{$event.url}">{$event.event_title}</a></li>
{/foreach}
</ul>
{/if}
{else}{$key}{/if}
</td>
{math assign=weekday equation="x + 1" x=$weekday}
{/foreach}

{* remaining empty days *}
{if $weekday != 7}
<td colspan="{math equation="7-x" x=$weekday}">&nbsp;</td>
{/if}


</tr>
</table>

{/strip}';
	           break;

	        case 'list':
                return '
<div id="$table_id">
<h1>{if $day > 0}{$day} {/if}{$month_names[$month]} {$year}</h1>
{foreach from=$events key=key item=event}
    <div class="calendar-event">
    <h2>{$event.event_title}</h2>

    {assign var=month_number value=$event.event_date_start|date_format:"%m"}
    {assign var=end_month_number value=$event.event_date_end|date_format:"%m"}
    {if $event.event_date_start == $event.event_date_end || $event.event_date_end == ""}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y"}</div>
    {else}
    {if $event.event_date_start|date_format:"%d%m%Y" == $event.event_date_end|date_format:"%d%m%Y"}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%H:%M"}</div>
    {else}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%d"}/{$month_names[$end_month_number]}/{$event.event_date_end|date_format:"%Y %H:%M"}</div>
    {/if}
    {/if}
    {if $event.event_summary !=""}
    	<p class="calendar-summary"><span class="calendar-summary-title">{$lang.summary}: </span>{$event.event_summary}</p>
    {/if}
    {if $detail == 1}
        {if $event.event_details !="" && $event.event_details != "<br />"}
    	<p class="calendar-details"><span class="calendar-details-title">{$lang.details}: </span>{$event.event_details}</p>
    	{/if}
    {else}
        <a href="{$event.url}">{$lang.details}</a>
    {/if}

    <div>
{/foreach}

{if $return_url != ""}
<p class="calendar-returnlink">{$return_url}</p>
{/if}
</div>

';
	           break;

	        case 'upcominglist':
                return '
<div id="$table_id">
<h1>{$lang.upcoming_events}</h1>
{foreach from=$events key=key item=event}
    <div class="calendar-event">
    <h2>{$event.event_title}</h2>

    {assign var=month_number value=$event.event_date_start|date_format:"%m"}
    {assign var=end_month_number value=$event.event_date_end|date_format:"%m"}
    {if $event.event_date_start == $event.event_date_end || $event.event_date_end == ""}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y"}</div>
    {else}
    {if $event.event_date_start|date_format:"%d%m%Y" == $event.event_date_end|date_format:"%d%m%Y"}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%H:%M"}</div>
    {else}
    <div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%d"}/{$month_names[$end_month_number]}/{$event.event_date_end|date_format:"%Y %H:%M"}</div>
    {/if}
    {/if}
    {if $event.event_summary !=""}
    	<p class="calendar-summary"><span class="calendar-summary-title">{$lang.summary}: </span>{$event.event_summary}</p>
    {/if}
    {if $detail == 1}
        {if $event.event_details !="" && $event.event_details != "<br />"}
    	<p class="calendar-details"><span class="calendar-details-title">{$lang.details}: </span>{$event.event_details}</p>
    	{/if}
    {else}
        <a href="{$event.url}">{$lang.details}</a>
    {/if}
    <div>
{/foreach}

{if $return_url != ""}
<p class="calendar-returnlink">{$return_url}</p>
{/if}
</div>
';
	           break;

	        case 'event':
                return '
<div class="calendar-event" id="{$table_id}">
<h1>{$event.event_title}</h1>

{assign var=month_number value=$event.event_date_start|date_format:"%m"}
{assign var=end_month_number value=$event.event_date_end|date_format:"%m"}
{if $event.event_date_start == $event.event_date_end || $event.event_date_end == ""}
<div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y"}</div>
{else}
{if $event.event_date_start|date_format:"%d%m%Y" == $event.event_date_end|date_format:"%d%m%Y"}
<div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%H:%M"}</div>
{else}
<div class="calendar-date-from"><span class="calendar-date-title">{$lang.date}: </span>{$event.event_date_start|date_format:"%e"}/{$month_names[$month_number]}/{$event.event_date_start|date_format:"%Y %H:%M"} {$lang.to} {$event.event_date_end|date_format:"%d"}/{$month_names[$end_month_number]}/{$event.event_date_end|date_format:"%Y %H:%M"}</div>
{/if}
{/if}
{if $event.event_summary !=""}
	<p class="calendar-summary"><span class="calendar-summary-title">{$lang.summary}: </span>{$event.event_summary}</p>
{/if}
{if $event.event_details !="" && $event.event_details != "<br />"}
	<p class="calendar-details"><span class="calendar-details-title">{$lang.details}: </span>{$event.event_details}</p>
{/if}
<p class="calendar-returnlink">{$return_url}</p>
</div>
';
	           break;

	    }
	}
};

/*


*/
?>
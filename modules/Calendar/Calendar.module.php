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
	var $language_file_loaded;
	var $language_strings;
	
	function Calendar()
	{
		$this->CMSModule();
		
		$this->categories_table_name = cms_db_prefix() . 'module_calendar_categories';
		$this->events_to_categories_table_name = cms_db_prefix().'module_calendar_events_to_categories';
		$this->events_table_name = cms_db_prefix().'module_calendar_events';
		
		$this->language = $this->GetPreference('Calendar-language', 'en_GB');
		$this->language_file_loaded = false;
		$this->language_strings = array();
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
		return '0.5';
	}

	function GetDescription($lang = 'en_GB')
	{
		return '<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the plugins menu
		that will allow you to manage your events.</p>';
	}

	
	/**
	 * Retrieve string in the correct language
	 *
	 * @param string $string
	 * @return string
	 */
	function lang($string)
	{
		$language = $this->language;
		if($language)
		{
			if(!$this->language_file_loaded)
			{
				$dir = dirname(__FILE__) . '/lang';
				if(file_exists("$dir/$language.inc.php"))
				{
					include("$dir/$language.inc.php");
					$this->language_strings = $calendar_language_strings;
					$this->language_file_loaded = true;
					return $this->language_strings[$string];
				}
				else 
				{
					return "-- missing file: $dir/$language.inc.php -- ";
				}

			}
			else 
			{
				return $this->language_strings[$string];
			}
			
		}
		else
		{
			return "-- $language is missing string: $string -- ";
		}
		
	}
	
	function GetHelp($lang = 'en_US')
	{
		return <<<EOT

		<h3>What does this do?</h3>
		<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the plugins menu
		that will allow you to manage your events.</p>
		<h3>Security</h3>
		<p>The user must belong to a group with the 'Modify Calendar' permission
		in order to add, edit, or delete calendar event entries.</p>
		<h3>How do I use it?</h3>
		<p>The module is used in conjunction with the cms_module tag.
		This will insert the module into your template or page anywhere you wish,
		and display the calendar.  The code would look something like:
		<code>{cms_module module="Calendar"}</code></p>
		<h3>Locale</h3>
		<p>The month names are set to the language used by the webserver. To override this,
			add <pre>setlocale(LC_ALL, 'German');</pre> (or whatever language!) into the
			config.php file.</p>
		<p>Calendar also supports translation of all text strings to another language. To support
		your language, add a file named <b><code>&lt;language&gt;.inc.php</code></b> to the 
		<code>modules/Calendar/lang</code> directory. I would suggest copying en_GB.inc.php as a starting point.
		<br />You can then select your language from the Settings menu in the Calendar admin.</p>
		<h3>What Parameters Exist?</h3>
		<table border=0 cellpadding=3 cellspacing=0>
		<tr>
			<td>display</td>
			<td>Either "calendar" or "list" or "upcominglist".
			Defaults to "calendar" <em>(optional)</em></td>
		</tr>
		<tr>
			<td>category</td>
			<td>Only display items for that category. Leaving unset, will show all categories. Note that
			you can limit to muliple categories by separating each one with a comma.<em>(optional)</em></td>
		</tr>
		<tr>
			<td>month</td>
			<td>Only display entries for a particular month. If year is not set, then the current year is 
				assumed. This option only works if display is set to "list" or "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>year</td>
			<td>Only display entries for a particular year. 
				This option only works if display is set to "list" or "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>limit</td>
			<td>Set to the maximum number of events to display. This option only works if display is set to "list" or "upcominglist". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>first_day_of_week</td>
			<td>Set to the first day of the week as a number between 0 and 6 (0 = Sumday). Default is 1 (Monday).
				This option only works if display is set to "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>summaries</td>
			<td>Set to "true" to display the summary information. Default is true. <em>(optional)</em></td>
		</tr>
		<tr>
			<td>table_id</td>
			<td>Id to set for this calendar or list. This is useful for applying CSS styling. Default is "calendar-&lt;autogenerated id number&gt;". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>date_format</td>
			<td>Format to display the event's date (as used in <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>strftime()</a>). Default is "%d/%b/%Y". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>datetime_format</td>
			<td>Format to display the event's date if there is a time as well (as used in <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>strftime()</a>). Default is "%d/%b/%Y %H:%M". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>list_title_format</td>
			<td>Format to display the title of a list. This is a date as used in <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>strftime()</a>. Default is "%b %Y". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>use_session</td>
			<td>Use a session variable to store the current month of the calendar. Default is ture. <em>(optional)</em></td>
		</tr>
		</table>

EOT;
	}

	function GetChangeLog()
	{
		return <<<EOT
			<p>Author: Rob Allen &lt;rob@akrabat.com&gt;</p>
			<dl>
				<dt>Version: 0.5+</dt>
					<dd>Fix event display so that if the end date is not set, we don't display "to". 
					Filter by category when displaying an upcominglist.</dd>
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
					$this->AdminDisplayDefaultAdminPage($id, $parameters, $returnid);
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
				
			case 'admin_manage_categories':
				if($this->AllowAccess())
				{
					$this->AdminDisplayCategories($id, $parameters, $returnid);
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
				
			case 'admin_settings';
				if($this->AllowAccess())
				{
					$this->AdminSettings($id, $parameters, $returnid);
				}			
				break;
				
			default:
				break;
		}
	}
	
	function AdminDisplayDefaultAdminPage($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		if(count($categories) == 0)
		{
			// Display category admin
			$this->AdminDisplayCategories($id, $parameters, $returnid);
		}
		else
		{
			$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
			//$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
			$manage_categories_link = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='Manage Categories', $params=array());
			$settings_link = $this->CreateLink($id, 'admin_settings', $returnid, $contents='Settings', $params=array());
			
			echo <<<EOT
			<p>Manage Events | $add_event_link | $manage_categories_link | $settings_link</p>	
			<h4 class="admintitle">Manage Events</h4>
	
EOT;
			// display manage events page
			$this->AdminDisplayManageEvents($id, $parameters, $returnid);
		}		
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


		//$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
		$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
		$manage_categories_link = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='Manage Categories', $params=array());
		$settings_link = $this->CreateLink($id, 'admin_settings', $returnid, $contents='Settings', $params=array());
			
		echo <<<EOT
		<p>$manage_event_link | Add Event | $manage_categories_link | $settings_link</p>	
		<h4 class="admintitle">Manage Events</h4>
	
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
		echo $this->CreateInputDropdown($id, 'event_date_end_day', array_merge(array(''=>0), $day_array), -1, $event_date_end_day);
		echo $this->CreateInputDropdown($id, 'event_date_end_month', array_merge(array(''=>0), $month_array), -1, $event_date_end_month);
		$year_array[''] =0;
		asort($year_array);
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
	            <input type="button" value="Cancel" onclick='javascript:window.history.go(-1)' />
EOT;

		echo $this->CreateInputSubmit($id, '', $button_text);
		echo <<<EOT
	        </td>
	    </tr>
	</table>
	
EOT;

		echo $this->CreateFormEnd();
	}
	
	function AdminDisplayCategories($id, $parameters, $returnid)
	{
		$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
		$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
		$settings_link = $this->CreateLink($id, 'admin_settings', $returnid, $contents='Settings', $params=array());
		
		echo <<<EOT
		<p>$manage_event_link | $add_event_link | Manage Categories | $settings_link</p>
	    <h4>Manage Categories</h4>
	
EOT;

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
		
		$url = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='', $params=array('result'=>'1'), '', true);
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
	<table border=0 cellpadding=0 cellspacing=0 style='margin-bottom: 10px'>
	    <tr>
	        <td align="right" style='padding-right: 5px;'>Filter By:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'keyword', $keyword, 25);
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

		echo $this->CreateInputDropdown($id, 'category_filter', $category_array, -1, $category_filter);
		echo <<<EOT
			</td>
	    </tr>
	    <tr>
	    	<td style='padding-right: 5px;'></td>
	    	<td><input type="submit" value="Go"></td>
	    </tr>
	</table>
	
	
EOT;
		echo $this->CreateFormEnd();

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

			echo "<table cellspacing=0 class='admintable  AdminTable'><thead>\n";
			echo "<tr><th>Title</th><th>From Date</th><th>To Date</th><th>Summary</th><th></th><th></th></tr></thead>\n";
		
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
				$delete_url = $this->CreateLink($id, 'admin_delete_event', $returnid, $contents='Manage Events', $params=array('event_id'=>$event_id), '', true);
				
	
				echo <<<EOT
					<tr class="$row_class">
						<td><a href='$edit_url'>$event_title</a></td>
						<td>$event_date_start_string</td>
						<td>$event_date_end_string</td>
						<td>$event_summary </td>
						
EOT;
				// edit and delete icons - borrowed from content list for consistency
				echo "\t\t\t\t<td align='center'><a href='$edit_url'><img src='../images/cms/edit.gif' width='16' height='16' border='0' alt='" . lang('edit') . "' title='" . lang('edit') . "'></a></td>\n";
				echo "\t\t\t\t<td align='center'><a href='$delete_url' onclick=\"return confirm('" . lang('deleteconfirm') . "');\"><img src='../images/cms/delete.gif' width='16' height='16' border='0' alt='" . lang('delete') . "' title='" . lang('delete') . "'></a></td>\n";
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
	
	function AdminSettings($id, $parameters, $returnid)
	{
		$submit = get_parameter_value($parameters, 'submit');
		if($submit != '')
		{
			$language = get_parameter_value($parameters, 'language');
			$this->SetPreference('Calendar-language', $language);
			
			$url = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array(), '', true);
			$url = str_replace('&nbsp;', '&', $url);
			redirect($url);
			exit;
		}
		$language = $this->GetPreference('Calendar-language', 'en_GB');
		
		$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
		$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
		$manage_categories_link = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='Manage Categories', $params=array());
		$settings_link = $this->CreateLink($id, 'admin_settings', $returnid, $contents='Settings', $params=array());
		
		echo <<<EOT
			<p>$manage_event_link | $add_event_link | $manage_categories_link | Settings</p>	
			<h4 class="admintitle">Settings</h4>
	
EOT;

		echo $this->CreateFormStart($id, 'admin_settings', $returnid, $method='post', $enctype='');
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
			if (is_file("$dir/$file") && strpos($file, "inc.php") != 0) 
			{
				$this_lang = str_replace('.inc.php', '', $file);
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
	
	
	function UserDisplay($id, $parameters, $returnid)
	{
		// handling of display of {cms_module module=Calender}
		
		$this->language = get_parameter_value($parameters, 'language', $this->language);
		$display = get_parameter_value($parameters, 'display', 'calendar');
		$category = get_parameter_value($parameters, 'category', '');
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
		$limit = get_parameter_value($parameters, 'limit', -1);
		$summaries = get_parameter_value($parameters, 'summaries', true);
		$first_day_of_week = get_parameter_value($parameters, 'first_day_of_week', 1);
		$table_id = get_parameter_value($parameters, 'table_id', 'calendar-'.$id.$returnid);
		$day = get_parameter_value($parameters, 'day', -1);
		$event_id = get_parameter_value($parameters, 'event_id', -1);
		$date_format = get_parameter_value($parameters, 'date_format', '%d/%b/%Y');
		$datetime_format = get_parameter_value($parameters, 'datetime_format', '%d/%b/%Y %H:%M');
		$list_title_format = get_parameter_value($parameters, 'list_title_format', '%b %Y');

		// get the events
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;
	
		//debug_display($id, '$id');
		//debug_display($parameters, '$parameters');
		
		$db = $this->cms->db;

		$sql = "SELECT $events_to_categories_table_name.category_id
						,$categories_table_name.category_name
						,$events_table_name.*
				FROM $events_table_name
				INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";
	
		$where = 'WHERE';
		if($display == 'event')
		{
			if($event_id > 0)
				$sql .= "$where ($events_table_name.event_id = $event_id) ";
			else 
			{
				return;
			}
		}
		elseif($display == 'upcominglist')
		{
			$start = date('Y-m-d H:i');
			$start_midnight = date('Y-m-d 00:00:00');
			$sql .= "$where ($events_table_name.event_date_start >= '$start' OR $events_table_name.event_date_start = '$start_midnight') ";
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
		}
		else
		{
			if($month != -1)
			{
				if($day != -1)
				{
					$start = sprintf('%04d-%02d-%0d 00:00:00', $year, $month, $day);
					$end = sprintf('%04d-%02d-%0d 23:59:59', $year, $month, $day);
				}
				else 
				{
					$start = sprintf('%04d-%02d-01 00:00:00', $year, $month);
					$nextmonth = $month+1;
					if($nextmonth > 12)
					{
						$nextmonth = 1;
						$year++;
					}
					$last_day_of_month = mktime(0, 0, 0, $nextmonth, 0, $year);
					$end = sprintf('%04d-%02d-%02d 23:59:59', date('Y', $last_day_of_month), date('m', $last_day_of_month), date('d', $last_day_of_month));
					
				}
				$sql .= "$where ($events_table_name.event_date_start >= '$start'  AND ($events_table_name.event_date_end <= '$end' OR $events_table_name.event_date_end IS NULL)) ";
				$where = ' AND ';
			}
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
		}
		//debug_display($sql, '$sql');
		if(($display == 'list' || $display == 'upcominglist') && $limit > 0)
		{
			$rs = $db->SelectLimit($sql, $limit);
		}
		else 
		{
			$rs = $db->Execute($sql);
		}

		if($display == 'calendar')
		{
			$days = array();
			for($i = 1; $i < 32; $i++)
			{
				$days[$i] = array(NULL, 'calendar-day', NULL, NULL);
			}
			$content = array();
			if($rs->RowCount() > 0)
			{
				while($row = $rs->FetchRow())
				{
					$day_of_month = date('j', strtotime($row['event_date_start']));
					if($summaries)
					{
						if(!isset($content[$day_of_month]))
							$content[$day_of_month] = '';
						$label = $row['event_summary'];
						$title = $row['event_title'];
						$event_id = $row['event_id'];
						$url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'event_id'=>$event_id, 'display'=>'event'), '', true);
						$url = str_replace('&amp;', '&', $url);
							
						$content[$day_of_month] .= "<li><a href='$url' title='$label' alt='$label' >$title</a></li>"; 
					}
					else 
					{
						$url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'day'=>$day_of_month, 'display'=>'list', 'summaries'=>true), '', true);
						$url = str_replace('&amp;', '&', $url);
						
						$days[$day_of_month][0] = $url;
					}
				}
			}
			
			if($summaries)
			{
				foreach($content as $day=>$info)
				{
					$info  = '<ul>' . $info . '</ul>';
					$days[$day][3] = $info;
				}
			}
			
			
			// add the css class "calendar-today" if this month is being displayed 
			if(sprintf("%04d-%02d-01", $year, $month) == sprintf("%04d-%02d-01", date('Y'), date('m')))
			{
				// month being displayed is this month. Therefore today exists
				$today = date('j');
				$days[$today][1] .= ' calendar-today';
			}
			
			
			$nextyear = $year;
			$nextmonth = $month + 1;
			if($nextmonth > 12)
			{
				$nextmonth = 1;
				$nextyear ++;
			}
			$next = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$nextyear, 'month'=>$nextmonth), '', true);
			$prevyear = $year;
			$prevmonth = $month - 1;
			if($prevmonth < 1)
			{
				$prevmonth = 12;
				$prevyear --;
			}
			
			$next = $this->CreateReturnLink($id, $returnid, '', array('year'=>$nextyear, 'month'=>$nextmonth), true);
			$next = str_replace('&amp;', '&', $next);
			$prev = $this->CreateReturnLink($id, $returnid, '', array('year'=>$prevyear, 'month'=>$prevmonth), true);
			$prev = str_replace('&amp;', '&', $prev);

			include_once(dirname(__FILE__) . '/phpcalendar.php');
			
			$day_name_length = 3;
			$month_href = null;
			$pn = array('&laquo;'=>$prev, '&raquo;'=>$next);
			$cal = generate_calendar($year, $month, $days, $day_name_length, $month_href, $first_day_of_week, $pn, $table_id);
			echo $cal;
		}
		elseif($display == 'list')
		{
			if($rs->RowCount() > 0)
			{
				if($day == -1)
					$title_string = strftime($list_title_format, strtotime($start));
				else
					$title_string = strftime($date_format, strtotime($start));
				echo "<div id='$table_id'><h1>$title_string</h1>\n";
				while($event = $rs->FetchRow())
				{
					//debug_display($row, '$row');
					unset($event_date_end);
					extract($event);
				
					$event_date_start_time = strtotime($event_date_start);
					if(strftime('%H%M', $event_date_start_time)== '0000')
						$event_date_start_string = strftime($date_format, $event_date_start_time);
					else
						$event_date_start_string = strftime($datetime_format, $event_date_start_time);
						
					if($event_date_end)
					{
						$event_date_end_time = strtotime($event_date_end);
						if(strftime('%H%M', $event_date_end_time)== '0000')
							$event_date_end_string = strftime($date_format, $event_date_end_time);
						else
							$event_date_end_string = strftime($datetime_format, $event_date_end_time);
					}
					else
					{
						$event_date_end_string = '';
					}
						
					$summary_string = '';
					if($summaries && $event_summary != '')
						$summary_string = "<p class='calendar-summary'><span class='calendar-summary-title'>" . $this->lang('Summary') . ": </span>$event_summary</p>";
					
					echo <<<EOT
					<div class='calendar-event' id='$table_id'>
					<h2>$event_title</h2>
EOT;
					if($event_date_start == $event_date_end || $event_date_end_string == '')
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ": </span>$event_date_start_string</div>\n";
					}
					else 
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ": </span>$event_date_start_string to $event_date_end_string</div>\n";
					}
					
					$details_string =  $this->lang('Details');
					echo <<<EOT
					$summary_string
					<p class='calendar-details'><span class='calendar-details-title'>$details_string: </span>$event_details</p>					
					</div>
EOT;
				}
				
				if(strstr(basename($_SERVER ['SCRIPT_NAME']), 'index') === false)
				{
					$link = $this->CreateReturnLink($id, $returnid, 'Return');
				
					echo <<<EOT
				<p class='calendar-returnlink'>$link.</p>
EOT;
				}
				echo '</div>';
			}		

		}
		elseif($display == 'upcominglist')
		{
			if($rs->RowCount() > 0)
			{
				echo "<div id='$table_id'>\n";
				while($event = $rs->FetchRow())
				{
					//debug_display($row, '$row');
					unset($event_date_end);
					extract($event);
				
					$event_date_start_time = strtotime($event_date_start);
					if(strftime('%H%M', $event_date_start_time)== '0000')
						$event_date_start_string = strftime($date_format, $event_date_start_time);
					else
						$event_date_start_string = strftime($datetime_format, $event_date_start_time);

					if($event_date_end)
					{
						$event_date_end_time = strtotime($event_date_end);
						if(strftime('%H%M', $event_date_end_time)== '0000')
							$event_date_end_string = strftime($date_format, $event_date_end_time);
						else
							$event_date_end_string = strftime($datetime_format, $event_date_end_time);
					}
					else 
					{
						$event_date_end_string = '';
					}
					$url = $this->CreateLink($id, 'default', $returnid, $contents='', $params=array('year'=>$year, 'month'=>$month, 'event_id'=>$event_id, 'display'=>'event'), '', true);
					$url = str_replace('&amp;', '&', $url);
					
					$summary_string = '';
					if($summaries)
						$summary_string = "<p class='calendar-summary'><span class='calendar-summary-title'>" . $this->lang('Summary') . ": </span>$event_summary</p>";
					
					echo <<<EOT
					<div class='calendar-event' id='$table_id'>
					<h2><a href='$url'>$event_title</a></h2>

EOT;
					if($event_date_start == $event_date_end || $event_date_end_string == '')
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ": </span>$event_date_start_string</div>\n";
					}
					else 
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ": </span>$event_date_start_string to $event_date_end_string</div>\n";
					}
					
					echo <<<EOT
					$summary_string					
					</div>
EOT;
				}
				echo '</div>';
			}		

		}
		elseif($display == 'event')
		{
			$event = $this->GetEvent($event_id);
			extract($event);
		
			$event_date_start_time = strtotime($event_date_start);
			if(strftime('%H%M', $event_date_start_time)== '0000')
				$event_date_start_string = strftime($date_format, $event_date_start_time);
			else
				$event_date_start_string = strftime($datetime_format, $event_date_start_time);
				
			if($event_date_end)
			{
				$event_date_end_time = strtotime($event_date_end);
				if(strftime('%H%M', $event_date_end_time)== '0000')
					$event_date_end_string = strftime($date_format, $event_date_end_time);
				else
					$event_date_end_string = strftime($datetime_format, $event_date_end_time);
			}
			else 
			{
				$event_date_end_string = '';
			}

			$link = $this->CreateReturnLink($id, $returnid, $this->lang('Return'));
			
						
			echo <<<EOT
			<div class='calendar-event' id='$table_id'>
			<h1>$event_title</h1>

EOT;
					if($event_date_start == $event_date_end || $event_date_end_string == '')
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ":</span>$event_date_start_string</div>\n";
					}
					else 
					{
						echo "<div class='calendar-date-from'><span class='calendar-date-title'>" . $this->lang('Date') . ": </span>$event_date_start_string " . $this->lang('to') . " $event_date_end_string</div>\n";
					}
					
					$summary_string = $this->lang('Summary');
					$details_string = $this->lang('Details');
					echo <<<EOT

			<p class='calendar-summary'><span class='calendar-summary-title'>$summary_string: </span>$event_summary</p>
			<p class='calendar-details'><span class='calendar-details-title'>$details_string: </span>$event_details</p>
			<p class='calendar-returnlink'>$link.</p>
			
			</div>
EOT;

		}
		else 
		{
			die('Unknown display type!');
		}		
	}
	
};
?>
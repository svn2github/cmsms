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

class AkraCalendar
{
    /* Static functions */
    function &Version() { return '0.1'; }
    function &MinCommonCodeVersion() { return '1.2'; }

    /* Public functions */

    function SetContentModule(&$content_module)
    {
        $this->contentModule &= $content_module;
    }

    function SetParams($params)
    {
        $this->params = $params;
    }

    function SetReturnId($return_id)
    {
        $this->return_id = $return_id;
    }

    /**
    * @return Calendar
    * @desc Constructor
    */
    function AkraCalendar($cms, $id=-1)
    {
        $this->minCommonCodeVersion = '1.2';
        $this->cms = $cms;
        $this->id = $id;

        $this->commonCodeModuleName = 'CommonCode';
        $this->moduleName = 'Calendar';
    }

    /**
    * @return void
    * @desc Display some help information
    */
    function Help()
    {
        echo <<<EOT
            <h3>What does this do?</h3>
            <p>Calendar is a module for displaying events on a calendar on page. When the
            module is installed, a Calendar admin page is added to the bottom menu
            that will allow you to manage your events.</p>
            <h3>Security</h3>
            <p>The user must belong to a group with the 'Modify Calendar' permission
            in order to add, edit, or delete Calendar entries.</p>
            <h3>How do I use it?</h3>
            <p>The easiest way to use it is in conjunction with the cms_module tag.
            This will insert the module into your template or page anywhere you wish,
            and display the calendar or events list.  The code would look something like:
            <code>{cms_module module="calendar"}</code></p>
            <h3>What Parameters Exist?</h3>
            <table border=0 cellpadding=3 cellspacing=0>
            <tr>
                <td>mode</td>
                <td>Display mode. One of: calendar, list, rss, rss_header_link, rssbutton. Leaving unset will display the calendar. <em>(optional)</em></td>
            </tr>
            <tr>
                <td>category</td>
                <td>Only display items for that category. Leaving unset will show all categories. <em>(optional)</em></td>
            </tr>
            <tr>
                <td>number</td>
                <td>Set to the maximum number of calendar entries to display. Most useful when used with
                order_by_date. <em>(optional)</em></td>
            </tr>
            <tr>
                <td>summaries</td>
                <td>Set to "true" to display the summary information. <em>(optional)</em></td>
            </tr>
            </table>

EOT;

    }

    /**
    * @return void
    * @desc Installation routine. Creates databases etc.
    */
    function Install()
    {
        $db = $this->cms->db; 				/* @var $db ADOConnection */
        $dict = NewDataDictionary($db); 	/* @var $dict ADODB_DataDict */

        // create categories table
        $fields = "
        category_id I KEY,
        category_name C(255),
        category_order I
        ";

        $table_opt_array = array('mysql' => 'TYPE=MyISAM');
        $sql_array = $dict->CreateTableSQL(cms_db_prefix().'module_calendar__categories',
        $fields, $table_opt_array);
        $dict->ExecuteSQLArray($sql_array);

        $db->CreateSequence(cms_db_prefix().'module_calendar__categories_seq');

        // create bookmarks table
        $fields = '
        event_id I KEY,
        event_date T,
        event_title C(255),
        event_summary X,
        event_details X,
        event_created_by I,
        event_create_date T,
        event_modified_date T
        ';

        $table_opt_array = array('mysql' => 'TYPE=MyISAM');
        $sql_array = $dict->CreateTableSQL(cms_db_prefix().'module_calendar__events',
        $fields, $table_opt_array);
        $dict->ExecuteSQLArray($sql_array);

        $db->CreateSequence(cms_db_prefix().'module_calendar__events_seq');

        // create calendar_to_categories table
        $fields = '
        category_id I KEY,
        event_id I KEY
        ';

        $table_opt_array = array('mysql' => 'TYPE=MyISAM');
        $sql_array = $dict->CreateTableSQL(cms_db_prefix().'module_calendar__events_to_categories',
        $fields, $table_opt_array);
        $dict->ExecuteSQLArray($sql_array);

        cms_mapi_create_permission($this->cms, 'Modify Calendar', 'Modify Calendar');
    }

    /**
    * @return void
    * @desc Handle version upgrades
    */
    function Upgrade($oldversion, $newversion)
    {
        // Nothing to upgrade yet!
    }

    /**
    * @return void
    * @desc Uninstallation: remove databases etc.
    */
    function Uninstall()
    {
        $db = $this->cms->db; 				/* @var $db ADOConnection */
        $dict = NewDataDictionary($db); 	/* @var $dict ADODB_DataDict */

        $db->DropSequence(cms_db_prefix().'module_calendar__events_seq');
        $db->DropSequence(cms_db_prefix().'module_calendar__categories_seq');

        $sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_calendar__events_to_categories');
        $dict->ExecuteSQLArray($sqlarray);

        $sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_calendar__events');
        $dict->ExecuteSQLArray($sqlarray);

        $sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_calendar__categories');
        $dict->ExecuteSQLArray($sqlarray);

        cms_mapi_remove_permission($this->cms, 'Modify Calendar');
    }

    /**
    * @return void
    * @desc Called when the user clicks on the the menu in the admin menu
    */
    function ExecuteAdmin()
    {
        $access = cms_mapi_check_permission($this->cms, "Modify Calendar");
        if (!$access)
        {
            echo "<p class='error'>You need the 'Modify Calendar' permission to perform that function.</p>";
            return;
        }

        $action = get_request_value($this->id.'action', 'main');
        switch($action)
        {
            case 'main':
                $this->DisplayAdminHeader($action);
                break;

            case 'add_event':
                $this->DisplayAdminHeader($action);
                break;

            case 'categories':
                $this->DisplayAdminHeader($action);
                break;

            default:
                echo "oops";
                exit;
        }
    }

    /**
    * @return void
    * @desc Enter description here...
    */
    function Execute()
    {
    }

    /**
    * @return void
    * @desc Enter description here...
    */
    function ExecuteUser()
    {
    }

    /* Private variables */
    var $minCommonCodeVersion;
    var $cms;
    var $id;
    var $params;
    var $return_id;
    var $commonCodeModuleName;
    var $moduleName;

    /*  Private functions */
    function DisplayAdminHeader($current_action)
    {
        $title = '';

        if($this->DisplayAdminMenuItem('Manage Events', 'main', $current_action))
        {
            $title = 'Manage Events';
        }
        echo ' | ';
        if($this->DisplayAdminMenuItem('Add Event', 'add_event', $current_action))
        {
            $title = 'Add Event';
        }
        echo ' | ';
        if($this->DisplayAdminMenuItem('Manage Categories', 'categories', $current_action))
        {
            $title = 'Manage Categories';
        }
        echo "\n<h4 class='admintitle'>$title</h4>\n";

    }

    function DisplayAdminMenuItem($title, $action, $current_action)
    {

        if($action != $current_action)
        {
            echo "<a href='moduleinterface.php?module={$this->moduleName}&amp;{$this->id}action=$action'>$title</a>";
            $selected = false;
        }
        else
        {
            echo $title;
            $selected = true;
        }
        return $selected;
    }
};

?>

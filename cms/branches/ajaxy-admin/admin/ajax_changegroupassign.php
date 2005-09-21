<?php

function usersInGroup($arg)
{
    global $db;
    $userid = get_userid();
    $access = check_permission($userid, 'Modify Group Assignments');

	// Instantiate the xajaxResponse object
	$objResponse = new xajaxResponse();

    $members = array();
    $nonmembers = array();
    if (! is_numeric($arg) || ! $access)
        {
        $arg = -1;
        }
    if ($arg != -1)
        {
	    $query = "SELECT u.user_id, u.username, ug.group_id FROM ".cms_db_prefix()."users u LEFT JOIN ".
            cms_db_prefix()."user_groups ug ON u.user_id = ug.user_id and group_id = ?";
        $result = $db->Execute($query,array($arg));
        while($result && $row = $result->FetchRow())
            {
            if (isset($row['group_id']))
                {
                $members[$row['user_id']] = $row['username'];
                }
            else
                {
                $nonmembers[$row['user_id']] = $row['username'];
                }
            }

       $disp = '<br /><div><div style="float:left;"><h1>Members</h1>';
       $disp .= '<ul class="sortable" id="members">';
       foreach ($members as $key=>$val)
            {
            $disp .= '<li id="members_members'.$key.'">'.$val.'</li>';
            }
       $disp .= "</ul></div>";
       $disp .= '<div style="float:left;"><h1>Nonmembers</h1>';
       $disp .= '<ul class="sortable" id="nonmembers">';
       foreach ($nonmembers as $key=>$val)
            {
            $disp .= '<li id="nonmembers_nonmembers'.$key.'">'.$val.'</li>';
            }
       $disp .= "</ul></div></div>";

	   // add a command to the response to assign the innerHTML attribute of
	   // the element with id="SomeElementId" to whatever the new content is
	   $objResponse->addAssign("feedback","innerHTML", $disp);
     $objResponse->addScript('function addMember() {xajax_saveChange('.$arg.', Sortable.serialize(\'members\'));}');

	 $objResponse->addScript('Sortable.create(\'members\',{dropOnEmpty:true,containment:[\'members\',\'nonmembers\'],constraint:false,onUpdate:addMember()});');
	 $objResponse->addScript('Sortable.create(\'nonmembers\',{dropOnEmpty:true,containment:[\'members\',\'nonmembers\'],constraint:false});');
        }

	//return the XML response generated by the xajaxResponse object
	return $objResponse->getXML();

}

function saveChange($gid,$arg)
{
    global $db;
    $userid = get_userid();
    $access = check_permission($userid, 'Modify Group Assignments');
    if (! $access)
        {
        return;
        }
	$query = "DELETE FROM ".cms_db_prefix()."user_groups WHERE group_id = ?";
    $result = $db->Execute($query,array($gid));
    $matches = array();
    preg_match_all( '/members(\d+)/', $arg, &$matches);
    foreach ($matches[1] as $thisOne)
        {
          $query = "INSERT INTO ".cms_db_prefix()."user_groups (group_id, user_id, create_date, modified_date) VALUES (".
            $db->qstr($gid).", ".$db->qstr($thisOne).", '".$db->DBTimeStamp(time())."', '".$db->DBTimeStamp(time())."')";
          $result = $db->Execute($query);
        }
}


require_once(dirname(__FILE__)."/../include.php");
$xajax = new xajax("ajax_changegroupassign.php");
$xajax->registerFunction("usersInGroup");
$xajax->registerFunction("saveChange");
$xajax->processRequests();
//debug_display($db);
?>
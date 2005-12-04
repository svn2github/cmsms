<?php
#-------------------------------------------------------------------------
# Module: Ell-Nav Menu
# Version: 0.6.1, released 19 October 2005
#
# Copyright (c) 2005, Samuel Goldstein <sjg@cmsmodules.com>
# For Information, Support, Bug Reports, etc, please visit SjG's
# module homepage at http://www.cmsmodules.com
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
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
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------

class EllNav extends CMSModule
{
	var $map=array();

	function GetName()
	{
		return 'EllNav';
	}

	function GetFriendlyName()
	{
		return $this->Lang('friendlyname');
	}


	function GetVersion()
	{
		return '0.7';
	}

	function GetHelp()
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'SjG';
	}

	function GetAuthorEmail()
	{
		return 'sjg@cmsmodules.com';
	}

    function Install()
    {
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
    }

    function Upgrade()
    {
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
    }

    function Uninstall()
    {
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
    }

	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}

	function IsPluginModule()
	{
		return true;
	}


    // recursively generate the menu
    function recurseMenu(&$nodelist, $node, $depth, $maxdepth, $skipfirst, $expandall)
    {
        $retStr = '';
        if ($maxdepth > 0 && $depth > $maxdepth)
            {
            return;
            }
        else
            {
            $dstr = "";
            for ($j=0;$j<$depth;$j++)
                {
                $dstr .= " ";
                }
            }
        $thisNode = $nodelist[$node];
        if (! isset($thisNode['display']) || !$thisNode['display'])
            {
            return;
            }
        if (isset($thisNode['current']) && $thisNode['current'])
            {
            $thisClass = ' class="current"';
            }
        else if (isset($thisNode['active']) && $thisNode['active'])
            {
            $thisClass = ' class="active"';
            }
        else
            {
            $thisClass = '';
            }
        $skipping = true;
        if (isset($thisNode['name']) && ($depth > 0 || !$skipfirst))
            {
            $retStr .= $dstr."<li${thisClass}><a${thisClass} href=\"".$thisNode['url'].
                "\">".$thisNode['name']."</a>";
            $skipping = false;
            }
        if ((
            ((isset($thisNode['current']) && $thisNode['current']) ||
             (isset($thisNode['active']) && $thisNode['active'])) &&
                strlen($thisNode['children']) > 0) ||
        	   $expandall)
            {
            $children = explode(",",rtrim($thisNode['children'],","));
            if ($children != false && count($children) > 0)
                {
                if (! $skipping)
                    {
                    $retStr .= $dstr . "<ul>";
                    }
                foreach ($children as $child)
                    {
                    $retStr .= $this->recurseMenu($nodelist, $child, $depth+1, $maxdepth, $skipfirst, $expandall);
                    }
                if (! $skipping)
                    {
                    $retStr .= $dstr. "</ul>";
                    }
                }
            }
        if (! $skipping)
            {
            $retStr .= "</li>";
            }
        return $retStr;
    }

	function DoAction($name, $id, $params, $return_id='')
	{
		$list = ContentManager::GetAllContent(false);
        if (count($this->map) == 0)
            {
            $count = 0;
            foreach($list as $thisItem)
                {
                $this->map[$thisItem->Id()] = $count++;
                }
            }
		switch ($name)
		{
			case 'default':
  	        // get menu parameters
  	        // show admin link? It shows up at top level
  	        $showadmin = isset($params["showadmin"]) ? $params["showadmin"] : 0 ;
  	        // orientation of menu
  	        $horizontal = isset($params["horizontal"]) ? $params["horizontal"] : 0 ;
  	        // show the top level of the active hierarchy?
  	        $showTopLevel = isset($params["showtoplevel"]) ? $params["showtoplevel"] : 0 ;
  	        // show only the top level of the hierarchy?
            $showTopOnly = isset($params["toponly"]) ? $params["toponly"] : 0 ;
            // expand the whole hierarchy?
            $expandall = isset($params["expandall"]) ? $params["expandall"] : 0 ;
            // css id for this menu
            $cssid = isset($params["cssid"]) ? $params["cssid"] : '' ;
            // lower-case all link targets?
            $lclinks = isset($params["lclinks"]) ? $params["lclinks"] : 0 ;
            // bulletmode?
            $bulletmode = isset($params["bulletmode"]) ? $params["bulletmode"] : 0 ;

            if ($bulletmode)
                {
                $showTopLevel = 1;
                }

  	        $hideTopLevel = !$showTopLevel;

            if ($horizontal)
	           {
	           $orient = 'horiz';
	           }
            else
	           {
	           $orient = 'vert';
	           }

            // which page are we viewing?
            $curPageID = $this->cms->variables['content_id'];

            $curPage = $list[$this->map[$curPageID]];
            
            // figure out the details of the current page and where it fits in
            // the content hierarchy
            $curHierarchy = $curPage->Hierarchy().'.';
            $hierTopItem = substr($curHierarchy,0,strpos($curHierarchy,'.'));

            $menu = "<ul class=\"menu_${orient}\"";
            if (strlen($cssid) > 0)
               {
               $menu .= " id=\"$cssid\"";
               }
            $menu .= ">\n";

            if ($showTopOnly)
               {
               // only showing the very top level of the content hierarchy
               //$allcontent = $this->LoadTopLevel();
          	   foreach ($list as $onecontent)
          	      {
          	      if ($onecontent->ParentId() != -1 || !$onecontent->Active() || !$onecontent->ShowInMenu())
                     {
          		     continue;
          		     }
                  $thisClass="";
                  if (substr($curHierarchy,0,strlen($onecontent->Hierarchy())) == $onecontent->Hierarchy())
                      {
                      if ($onecontent->Id() == $curPageID)
                          {
                          $thisClass = " class=\"current\"";
                          }
                      else
                          {
                          $thisClass = " class=\"active\"";
                          }
                      }
                  $menu .= "<li${thisClass}><a${thisClass} href=\"";
                  if ($lclinks && $this->Type() == 'content')
                    {
                    $menu .= strtolower($onecontent->GetUrl());
                    }
                  else
                    {
                    $menu .= $onecontent->GetUrl();
                    }
                  $menu .= "\">".$onecontent->MenuText()."</a></li>";
          	      }
               }
           else
              {
              // load the hierarchy that contains the current page
             // $allcontent = $this->LoadContentInHierarchy($hierTopItem, 0);
      
              // create a quick tree structure so we can present this stuff recursively.
              $iteration = 0;
              $startKey = -1;
              foreach ($list as $value)
				{
				if (! $bulletmode && substr($value->Hierarchy(),0,strlen($hierTopItem)) != $hierTopItem)
					{
					continue;
					}
				if ($bulletmode && $value->ParentId() != -1 &&
                    substr($value->Hierarchy(),0,strlen($hierTopItem)) != $hierTopItem)
				    {
                    continue;
				    }
				$key = $value->Id() + 1;
              	$hier[$key]['id'] = $key;
                $hier[$key]['name'] = $value->MenuText();
                if ($lclinks && $this->Type() == 'content')
                    {
                    $hier[$key]['url'] = strtolower($value->GetUrl());
                    }
                else
                    {
                    $hier[$key]['url'] = $value->GetUrl();
                    }
                $hier[$key]['children'] = "";
                $hier[$key]['parent'] = $value->ParentId() + 1;
          	    $hier[$key]['display'] = ($value->Active() && $value->ShowInMenu());
          	    if ($hier[$key]['display'])
          	       {
          	       if (! isset($hier[$value->ParentId()+1]['children']))
          	           {
          	           $hier[$value->ParentId()+1]['children'] = $key . ",";
          	           }
                   else
                       {
          	           $hier[$value->ParentId()+1]['children'] .= $key . ",";
          	           }
          	       }
                if (substr($curHierarchy,0,strlen($value->Hierarchy())) == $value->Hierarchy())
                      {
                      if ($value->Id() == $curPageID)
                          {
                          $hier[$key]['current'] = true;
                          }
                      else
                          {
                          $hier[$key]['active'] = true;
                          }
                      }
                  if ($iteration == 0)
          	         {
          	         $startKey = $key;
          	         }
          	    $iteration++;
              }
            if ($bulletmode)
                {
                $startKey = 0;
                $hier[0]['display'] = true;
                $hier[0]['active'] = true;
                }
            $menu .= $this->recurseMenu( $hier, $startKey, 0, -1, $hideTopLevel, $expandall);
          	if ($showadmin == 1)
          	{
          		$menu .= "<li><a href=\"/admin/\">Admin</a></li>";
          	}
          }
      	$menu .= "</ul>\n";
      	echo $menu;
		break;
		}

	}
}

?>

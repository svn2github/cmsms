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
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $

class MenuManager extends CMSModule
{
	function GetName()
	{
		return 'MenuManager';
	}

	function GetFriendlyName()
	{
		return $this->Lang('menumanager');
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

    function VisibleToAdminUser()
    {
      return $this->CheckPermission('Manage Menu');
    }

    function Uninstall()
    {
        // remove the permissions
        $this->RemovePermission('Manage Menu');
    }

	function GetVersion()
	{
		return '1.2';
	}

	function MinimumCMSVersion()
	{
		return '0.12';
	}

	function GetAdminDescription()
	{
		return $this->Lang('description');
	}

	function GetAdminSection()
	{
		return 'layout';
	}

	function SetParameters()
	{
		$this->CreateParameter('collapse', '1', $this->lang('help_collapse'));
		$this->CreateParameter('items', 'contact,home', $this->lang('help_items'));
		$this->CreateParameter('number_of_levels', '1', $this->lang('help_number_of_levels'));
		$this->CreateParameter('show_root_siblings', '1', $this->lang('help_show_root_siblings'));
		$this->CreateParameter('start_level', '2', $this->lang('help_start_level'));
		$this->CreateParameter('start_element', '1.2', $this->lang('help_start_element'));
		$this->CreateParameter('start_page', 'home', $this->lang('help_start_page'));
		$this->CreateParameter('template', 'bulletmenu.tpl', $this->lang('help_template'));
	}

	/**
	 * Recursive function to go through all nodes and put them into a list
	 */
	function GetChildNodes(&$parentnode, &$nodelist, &$gCms, &$prevdepth, &$count, &$params, $origdepth, &$showparents)
	{
		if (isset($parentnode))
		{
			$children =& $parentnode->getChildren();
			if (isset($children) && count($children))
			{
				reset($children);
				while (list($key) = each($children))
				{
					$onechild =& $children[$key];
					$content =& $onechild->GetContent();
					if ($content != NULL && $content->Active() && $content->ShowInMenu())
					{
						$newnode =& $this->FillNode($content, $onechild, $nodelist, $gCms, $count, $prevdepth, $origdepth);
						//Ok, this one is nasty...
						//First part checks to see if number_of_levels is set and whether the current depth is deeper than the set number_of_levels depth (opposite logic, actually)
						//Second part checks to see if showparents is set...  if so, then it checks to see if this hierarchy position is one of them
						//If either of these things occurs, then try to show the children of this node
						if (!(isset($params['number_of_levels']) && $newnode->depth > ($params['number_of_levels']) - ($origdepth)) && (count($showparents) == 0 || (count($showparents) > 0 && in_array($content->Hierarchy() . '.', $showparents))))
						{
							$this->GetChildNodes($onechild, $nodelist, $gCms, $prevdepth, $count, $params, $origdepth, $showparents);
						}
					}
				}
			}
		}
	}

	function & FillNode(&$content, &$node, &$nodelist, &$gCms, &$count, &$prevdepth, $origdepth)
	{
		$onenode = new stdClass();
		$onenode->id = $content->Id();
		$onenode->url = $content->GetURL();
		$onenode->accesskey = $content->AccessKey();
		$onenode->type = strtolower($content->Type());
		$onenode->tabindex = $content->TabIndex();
		$onenode->titleattribute = $content->TitleAttribute();
		$onenode->hierarchy = $content->Hierarchy();
		$onenode->depth = count(explode('.', $content->Hierarchy())) - ($origdepth - 1);
		$onenode->prevdepth = $prevdepth - ($origdepth - 1);
		if ($onenode->prevdepth == 0)
		$onenode->prevdepth = 1;
		if (isset($node))
		$onenode->haschildren = $node->HasChildren();
		else
		$onenode->haschildren = false;
		$prevdepth = $onenode->depth + ($origdepth - 1);
		$onenode->menutext = my_htmlentities($content->MenuText());
		$onenode->target = '';
		if ($content->HasProperty('target'))
		$onenode->target = $content->GetPropertyValue('target');
		$onenode->index = $count;
		$onenode->alias = $content->Alias();
		$onenode->parent = false;
		$count++;

		if (isset($gCms->variables['content_id']) && $onenode->id == $gCms->variables['content_id'])
		$onenode->current = true;
		else
		{
			$onenode->current = false;
			//So, it's not current.  Lets check to see if it's a direct parent
			if (isset($gCms->variables["friendly_position"]))
			{
				if (strstr($gCms->variables["friendly_position"] . '.', $content->Hierarchy() . '.') == $gCms->variables["friendly_position"] . '.')
				{
					$onenode->parent = true;
				}
			}
		}

		array_push($nodelist, $onenode);

		return $onenode;
	}

	function nthPos($str, $needles, $n=1)
	{
		//  Found at: http://us2.php.net/manual/en/function.strpos.php
		//  csaba at alum dot mit dot edu
		//  finds the nth occurrence of any of $needles' characters in $str
		//  returns -1 if not found; $n<0 => count backwards from end
		//  e.g. $str = "c:\\winapps\\morph\\photos\\Party\\Phoebe.jpg";
		//      substr($str, nthPos($str, "/\\:", -2)) => \Party\Phoebe.jpg
		//      substr($str, nthPos($str, "/\\:", 4)) => \photos\Party\Phoebe.jpg
		$pos = -1;
		$size = strlen($str);
		if ($reverse=($n<0)) { $n=-$n; $str = strrev($str); }
		while ($n--)
		{
			$bestNewPos = $size;
			for ($i=strlen($needles)-1;$i>=0;$i--)
			{
				$newPos = strpos($str, $needles[$i], $pos+1);
				if ($newPos===false) $needles = substr($needles,0,$i) . substr($needles,$i+1);
				else $bestNewPos = min($bestNewPos,$newPos);
			}
			if (($pos=$bestNewPos)==$size) return -1;
		}
		return $reverse ? $size-1-$pos : $pos;
	}

	function GetHelp($lang='en_US')
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'Ted Kulp';
	}

	function GetAuthorEmail()
	{
		return 'ted@cmsmadesimple.org';
	}

	function GetChangeLog()
	{
		return $this->Lang('changelog');
	} 

	function GetMenuTemplate($tpl_name)
	{
		$data = false;
		if (endswith($tpl_name, '.tpl'))
		{
			global $gCms;
			// template file, we're gonna have to get it from
			// the filesystem, 
			$fn = $gCms->config['root_path'].DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR;
			$fn .= $this->GetName().DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR;
			$fn .= $tpl_name;
			if( file_exists( $fn ) )
			{
				$data = file_get_contents($fn);
			}
		}
		else
		{
			$data = $this->GetTemplate($tpl_name);
		}

		return $data;
	}

	function SetMenuTemplate( $tpl_name, $content )
	{
		if (endswith($tpl_name, '.tpl'))
		{
			return false;
		}

		$this->SetTemplate( $tpl_name, $content );
		return true;
	}
}

# vim:ts=4 sw=4 noet
?>

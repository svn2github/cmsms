<?php
#CMS - CMS Made Simple
#(c)2004=6 by Ted Kulp (ted@cmsmadesimple.org)
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
#$Id$

class NewsModule extends CMSModuleContentType
{
	function SetProperties()
	{
		$this->mProperties->Add('string', 'start', '');
		$this->mProperties->Add('string', 'number', '');
		$this->mProperties->Add('string', 'dateformat', 'F j, Y, g:i a');
		$this->mProperties->Add('string', 'category');
		$this->mProperties->Add('string', 'moretext', 'more...');
		$this->mProperties->Add('bool', 'sortasc', 0);

		#Turn on preview
		$this->mPreview = true;

		#Turn off caching
		$this->mCachable = false;
	}

	function EditAsArray($adding = false)
	{
		global $gCms;
		$config =& $gCms->GetConfig();
		$templateops =& $gCms->GetTemplateOperations();

		$ret = array();

		$ret[]= array(lang('title').':','<input type="text" name="title" value="'.$this->mName.'">');
		$ret[]= array(lang('menutext').':','<input type="text" name="menutext" value="'.$this->mMenuText.'">');
		$ret[]= array(lang('pagealias').':','<input type="text" name="alias" value="'.$this->mAlias.'">');
		$ret[]= array(lang('template').':',$templateops->TemplateDropdown('template_id', $this->mTemplateId));
		$ret[]= array($this->Lang('numbertodisplay').':','<input type="text" name="number" value="'.$this->GetPropertyValue('number').'" />');
		$ret[]= array($this->Lang('startoffset').':','<input type="text" name="start" value="'.$this->GetPropertyValue('start').'" />');
		$ret[]= array($this->Lang('category').':','<input type="text" name="category" value="'.$this->GetPropertyValue('category').'" />');
		$ret[]= array($this->Lang('moretext').':','<input type="text" name="moretext" value="'.$this->GetPropertyValue('moretext').'" />');
		$ret[]= array($this->Lang('sortascending').':','<input type="checkbox" name="sortasc" '.($this->GetPropertyValue('sortasc') == 1?' checked="true"':'').' />');
		$ret[]= array(lang('active').':','<input type="checkbox" name="active"'.($this->mActive?' checked="true"':'').'>');
		$ret[]= array(lang('showinmenu').':','<input type="checkbox" name="showinmenu"'.($this->mShowInMenu?' checked="true"':'').'>');
		$contentops =& $gCms->GetContentOperations();
		$ret[]= array(lang('parent').':',$contentops->CreateHierarchyDropdown($this->mId, $this->mParentId));

		return $ret;
	}


	function Edit($adding = false)
	{
		global $gCms;
		$config =& $gCms->GetConfig();
		$templateops =& $gCms->GetTemplateOperations();

		$text = '';

		$text .= '<tr><td>'.lang('title').':</td><td><input type="text" name="title" value="'.$this->mName.'"></td></tr>';
		$text .= '<tr><td>'.lang('menutext').':</td><td><input type="text" name="menutext" value="'.$this->mMenuText.'"></td></tr>';
		$text .= '<tr><td>'.lang('pagealias').':</td><td><input type="text" name="alias" value="'.$this->mAlias.'"></td></tr>';
		$text .= '<tr><td>'.lang('template').':</td><td>'.$templateops->TemplateDropdown('template_id', $this->mTemplateId).'</td></tr>';
		$text .= '<tr><td>'.$this->Lang('numbertodisplay').':</td><td><input type="text" name="number" value="'.$this->GetPropertyValue('number').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('startoffset').':</td><td><input type="text" name="start" value="'.$this->GetPropertyValue('start').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('category').':</td><td><input type="text" name="category" value="'.$this->GetPropertyValue('category').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('moretext').':</td><td><input type="text" name="moretext" value="'.$this->GetPropertyValue('moretext').'" /></td></tr>';
		$text .= '<tr><td>'.$this->Lang('sortascending').':</td><td><input type="checkbox" name="sortasc" '.($this->GetPropertyValue('sortasc')?' checked="true"':'').' /></td></tr>';
		$text .= '<tr><td>'.lang('active').':</td><td><input type="checkbox" name="active"'.($this->mActive?' checked="true"':'').'></td></tr>';
		$text .= '<tr><td>'.lang('showinmenu').':</td><td><input type="checkbox" name="showinmenu"'.($this->mShowInMenu?' checked="true"':'').'></td></tr>';
		$contentops =& $gCms->GetContentOperations();
		$text .= '<tr><td>'.lang('parent').':</td><td>'.$contentops->CreateHierarchyDropdown($this->mId, $this->mParentId).'</td></tr>';

		return $text;
	}

	function FillParams(&$params)
	{
		global $gCms;
		$config = $gCms->config;

		if (isset($params))
		{
			$parameters = array('start', 'number', 'category', 'moretext');
			foreach ($parameters as $oneparam)
			{
				if (isset($params[$oneparam]))
				{
					$this->SetPropertyValue($oneparam, $params[$oneparam]);
				}
			}
			if (isset($params['sortasc']))
			{
				$this->SetPropertyValue('sortasc', 1);
			}
			else
			{
				$this->SetPropertyValue('sortasc', 0);
			}
			if (isset($params['title']))
			{
				$this->mName = $params['title'];
			}
			if (isset($params['menutext']))
			{
				$this->mMenuText = $params['menutext'];
			}
			if (isset($params['template_id']))
			{
				$this->mTemplateId = $params['template_id'];
			}
			if (isset($params['alias']))
			{
				$this->SetAlias($params['alias']);
			}
			else
			{
				$this->SetAlias('');
			}
			if (isset($params['parent_id']))
			{
				if ($this->mParentId != $params['parent_id'])
				{
					$this->mHierarchy = '';
					$this->mItemOrder = -1;
				}
				$this->mParentId = $params['parent_id'];
			}
			if (isset($params['active']))
			{
				$this->mActive = true;
			}
			else
			{
				$this->mActive = false;
			}
			if (isset($params['showinmenu']))
			{
				$this->mShowInMenu = true;
			}
			else
			{
				$this->mShowInMenu = false;
			}
		}
	}

	function Show($param = 'content_en')
	{
		if ($param == 'content_en')
		{
			global $gCms;
			$variables = &$gCms->variables;

			$params = array();

			if (strlen($this->GetPropertyValue('number')) > 0)
			{
				$params['number'] = $this->GetPropertyValue('number');
			}

			if (strlen($this->GetPropertyValue('start')) > 0)
			{
				$params['start'] = $this->GetPropertyValue('start');
			}

			if (strlen($this->GetPropertyValue('category')) > 0)
			{
				$params['category'] = $this->GetPropertyValue('category');
			}

			$params['moretext'] = $this->GetPropertyValue('moretext');
			$params['sortasc'] = $this->GetPropertyValue('sortasc');

			$newnews = new News();

			//Buffer all this crap spit out by the News module and return it
			@ob_start();
			$newnews->DoAction('default', 'newsmodule', $params, $variables['content_id']);
			$text = @ob_get_contents();
			@ob_end_clean();
			#return $text;
			return '{literal}'.$text.'{/literal}';
		}
		else
		{
			return '';
		}
	}

	function GetURL()
	{
		global $gCms;
		$config = $gCms->config;

		$url = "";

		if ($config["assume_mod_rewrite"])
		{
			// we could use $this->mId instead of mAlias but i think it's better
			$url = $config["root_url"]."/".$this->mAlias . $config["page_extension"];
		}
		else 
		{
			$url = $config["root_url"]."/index.php?".$config["query_var"]."=". $this->mAlias;
		}

		return $url;
	}

    function FriendlyName()
	{
		return 'News';
	}

	function ModuleName()
	{
		return 'News';
	}

	function IsDefaultPossible()
	{
		return TRUE;
	}
	function ValidateData()
	{
		$errors = array();

		if ($this->mName == '')
		{
		  if ($this->mMenuText != '')
		    {
		      $this->mName = $this->mMenuText;
		    }
		  else
		    {
		      $errors[]= lang('nofieldgiven',array(lang('title')));
		      $result = false;
		    }
		}

		if ($this->mMenuText == '')
		{
		  if ($this->mName != '')
		    {
		      $this->mMenuText = $this->mName;
		    }
		  else
		    {
		      	$errors[]=lang('nofieldgiven',array(lang('menutext')));
			$result = false;
		    }
		}
		if ($this->mAlias != $this->mOldAlias)
		{
			global $gCms;
			$contentops =& $gCms->GetContentOperations();
			$error = $contentops->CheckAliasError($this->mAlias, $this->mId);
			if ($error !== FALSE)
			{
				$errors[]= $error;
				$result = false;
			}
		}
		if ($this->mTemplateId == '')
		{
			$errors[]= lang('nofieldgiven',array(lang('template')));
			$result = false;
		}
                return (count($errors) > 0?$errors:FALSE);
	}
}

?>
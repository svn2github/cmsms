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
 * @author		Ted Kulp <wishy@cmsmadesimple.org>	
 * @revision	0.1
 * @created		28/09/2004
 * @modified	09/10/2004
 *
 */

class Content extends ContentBase
{
	function SetProperties()
	{
		$this->mProperties->Add("string", "title");
		$this->mProperties->Add("string", "menutext");
		$this->mProperties->Add("string", "content_en"); //For later language support
		$this->mProperties->Add("string", "headtags");

		#Turn on preview
		$this->mPreview = true;
	}

	function FillParams($params)
	{
		if (isset($params))
		{
			$parameters = array('title', 'menutext', 'content_en', 'headtags');
			foreach ($parameters as $oneparam)
			{
				if (isset($params[$oneparam]))
				{
					$this->mProperties->SetValue($oneparam, $params[$oneparam]);
				}

				#Make the name the same as the title
				if ($oneparam == 'title')
				{
					$this->mName = $params[$oneparam];
				}
			}
			if (isset($params['template_id']))
			{
				$this->mTemplateId = $params['template_id'];
			}
			if (isset($params['alias']))
			{
				$this->mAlias = $params['alias'];
			}
		}
	}

	function Show()
	{
		return $this->mProperties->GetValue('content_en');
	}

	function Edit()
	{
		$text = "";

		$text .= '<tr><td>'.lang('title').':</td><td><input type="text" name="title" value="'.$this->mProperties->GetValue('title').'"></td></tr>';
		$text .= '<tr><td>'.lang('menutext').':</td><td><input type="text" name="menutext" value="'.$this->mProperties->GetValue('menutext').'"></td></tr>';
		$text .= '<tr><td>'.lang('template').':</td><td><input type="text" name="template_id" value="'.$this->mTemplateId.'"></td></tr>';
		$text .= '<tr><td>'.lang('content').':</td><td>'.textarea_highlight((isset($use_javasyntax)?$use_javasyntax:false), $this->mProperties->GetValue('content_en'), "content_en", "syntaxHighlight", "HTML (Complex)", "content_en") . '</td></tr>';
		$text .= '<tr><td>'.lang('headtags').':</td><td>'.textarea_highlight((isset($use_javasyntax)?$use_javasyntax:false), $this->mProperties->GetValue('headtags'), "headtags").'</td></tr>';

		return $text;
	}
}

class Link extends ContentBase
{
}

# vim:ts=4 sw=4 noet
?>

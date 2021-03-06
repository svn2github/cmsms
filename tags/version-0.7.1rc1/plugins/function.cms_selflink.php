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

function smarty_cms_function_cms_selflink($params, &$smarty) {

	global $gCms;
	$db = $gCms->db;
	$config = $gCms->config;

	if (isset($params['page']))
	{
		echo '<a href="'.$config['root_url'].'/index.php?'.$config['query_var'].'='.$params['page'].'"';
		if (isset($params['target']))
		{
			echo ' target="'.$params['target'].'"';
		}
		echo '>';
		if (isset($params['text']))
		{
			echo $params['text'];
		}
		else
		{
			echo $params['page'];
		}
		echo '</a>';
	}
	else
	{
		echo "<!-- Not a valid cms_selflink -->";
	}
}

function smarty_cms_help_function_cms_selflink() {
	?>
	<h3>What does this do?</h3>
	<p>Creates a link to another cms content page inside your template or content.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{cms_selflink page="1"}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
		<li><tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the page variable is used instead.</li>
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
	</ul>
	</p>

	<?php
}

function smarty_cms_about_function_cms_selflink() {
	?>
	<p>Author: Ted Kulp &lt;tedkulp@users.sf.net&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}

# vim:ts=4 sw=4 noet
?>

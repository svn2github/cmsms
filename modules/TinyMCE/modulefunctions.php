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

function tinymce_module_header_function(&$cms)
{
	if (array_key_exists('tinymce_textareas', $cms->variables))
	{
	?>

	<script language="javascript" type="text/javascript" src="<?php echo $cms->config['root_url'] ?>/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script language="javascript" type="text/javascript">
		tinyMCE.init({
			mode : "exact",
			elements : "<?php
				$elements = '';
				foreach ($cms->variables['tinymce_textareas'] as $oneelement)
				{
					$elements .= $oneelement . ', ';
				}
				if (strlen($elements))
				{
					$elements = substr($elements, 0, strlen($elements) -2);
				}
				echo $elements;
			?>",
			<?php
			if (isset($cms->variables['tinymce_stylesheet']))
			{
				$css = $cms->variables['tinymce_stylesheet'];

				$striptags = cms_mapi_get_preference('TinyMCE', 'striptags', 'false');

				if ($striptags == 'true')
				{
					$css .= '&stripbackground=true';
				}

				echo 'content_css : "' . $css . "\",\n";
			}
			?>
			theme : "advanced",
			theme_advanced_toolbar_location: "top",
			verify_html: "false",
			plugins : "advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,ibrowser",
			theme_advanced_buttons1_add : "fontselect,fontsizeselect,forecolor",
			theme_advanced_buttons2_add_before: "cut,copy,paste,separator",
			theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom",
			theme_advanced_buttons3_add : "emotions,iespell,flash,advhr,ibrowser",
			document_base_url : "<?php echo $cms->config['root_url']?>/",
			relative_urls : "false",
			plugin_insertdate_dateFormat : "%Y-%m-%d",
			extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],font[face|size|color],hr[class|width|size|noshade],form[name|id|action]"
			plugin_insertdate_timeFormat : "%H:%M:%S",
		});
	</script>

	<?php
	}
}

function tinymce_module_form_submit_function(&$cms)
{
	echo 'tinyMCE.triggerSave();';
}

function tinymce_module_textbox_function(&$cms, $name='textbox', $columns='80', $rows='15', $encoding='', $content='', $stylesheet='')
{
	$variables = &$cms->variables;
	if ($stylesheet != '')
	{
		$variables['tinymce_stylesheet'] = $stylesheet;
	}
	if (!array_key_exists('tinymce_textareas', $variables))
	{
		$variables['tinymce_textareas'] = array();
	}
	array_push($variables['tinymce_textareas'], $name);
	return '<textarea id="'.$name.'" name="'.$name.'" cols="'.$columns.'" rows="'.($rows+5).'">'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';
}

function tinymce_module_executeadmin($cms, $id)
{
	$striptags = 'false';
	if (isset($_REQUEST[$id.'submit']))
	{
		if (isset($_REQUEST[$id.'striptags']))
		{
			$striptags = $_REQUEST[$id.'striptags'];
			cms_mapi_set_preference('TinyMCE', 'striptags', $striptags);
		}
	}
	else
	{
		$striptags = cms_mapi_get_preference('TinyMCE', 'striptags', 'false');
	}

	echo cms_mapi_create_admin_form_start('TinyMCE', $id);

	?>

	<div class="adminform">

	<table border="0">
		<tr>
			<td>Strip background tags from CSS:</td>
			<td>
				<select name="<?php echo $id?>striptags">
					<option value="true"<?php echo ($striptags=='true'?' selected="selected"':'') ?>>True</option>
					<option value="false"<?php echo ($striptags=='false'?' selected="selected"':'') ?>>False</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="<?php echo $id?>submit" value="Submit" /></td>
		</tr>
	</table>

	</div>

	<?php

	echo cms_mapi_create_admin_form_end();
}

function tinymce_module_help($cms)
{
    //Text to show for the help box...
    ?>

    <h3>What does this do?</h3>
    <p>Enables TinyMCE to be used as a WYSIWYG.</p>
    <h3>How do I use it?</h3>
    <p>Install it, then go to User Preferences and Set TinyMCE  to be your wysiwyg of choice.</p>

    <?php
}

function tinymce_module_about()
{
	?>
	<p>Author: Ted Kulp &lt;wishy@cmsmadesimple.org&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}

# vim:ts=4 sw=4 noet
?>

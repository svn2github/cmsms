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
	if (isset($cms->variables['tinymce_textareas']))
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
				echo 'content_css : "' . $cms->variables['tinymce_stylesheet'] . "\",\n";
			}
			?>
			theme : "advanced"
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
	if (!isset($variables['tinymce_textareas']))
	{
		$variables['tinymce_textareas'] = array();
	}
	array_push($variables['tinymce_textareas'], $name);
	return '<textarea name="'.$name.'" cols="80" rows="15">'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';
}

function tinymce_module_help($cms)
{
    //Text to show for the help box...
    ?>

    <h3>What does this do?</h3>
    <p>Enalbes TinyMCE to be used as a WYSIWYG.</p>
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

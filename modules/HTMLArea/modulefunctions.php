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

function htmlarea_module_header_function(&$cms)
{
	$nls = $cms->nls;
	$config = $cms->config;
	$variables = $cms->variables;

	if (array_key_exists('htmlarea_textareas', $cms->variables))
	{

	?>
	<script type="text/javascript">
		<!--
		_editor_url = "<?php echo $config["root_url"]?>/modules/HTMLArea/htmlarea/";
		<?php echo "_editor_lang = \"".$nls['htmlarea'][$cms->current_language]."\";\n" ?>
		-->
	</script>

	<script type="text/javascript" src="<?php echo $config["root_url"]?>/modules/HTMLArea/htmlarea/htmlarea.js"></script>

	<script type="text/javascript">
		<!--

		HTMLArea.loadPlugin("ImageManager");
		HTMLArea.loadPlugin("InsertFile");
		HTMLArea.loadPlugin("TableOperations");
		HTMLArea.loadPlugin("ContextMenu");
		HTMLArea.loadPlugin("CharacterMap");
		HTMLArea.loadPlugin("FindReplace");
		HTMLArea.loadPlugin("InvertBackground");
		<?php if ($config["use_Indite"] == true) { ?>	
			//HTMLArea.loadPlugin("Indite");	
		<?php } ?>

		function initHtmlArea()
		{
			var config = new HTMLArea.Config();
			<?php
				$count = 1;
				foreach ($cms->variables['htmlarea_textareas'] as $onearea)
				{
			?>

			var editor<?php echo $count?> = new HTMLArea("<?php echo $onearea?>", config);
			//editor<?php echo $count?>.registerPlugin(ImageManager);
			<?php 
				// Ugly Hack alert! making setting session var to send language setting to insertFile
				if ($config["disable_htmlarea_translation"] != true)
				{
					$_SESSION['InsertFileLang'] = $cms->nls['htmlarea'][$cms->current_language];
				}
				else
				{
					if (isset($_SESSION['InsertFileLang']))
					{
						unset($_SESSION['InsertFileLang']);
					}
				}
		 	?>

			editor<?php echo $count?>.registerPlugin(InsertFile);
			editor<?php echo $count?>.registerPlugin(TableOperations);
			editor<?php echo $count?>.registerPlugin(ContextMenu);
			editor<?php echo $count?>.registerPlugin(CharacterMap);
			editor<?php echo $count?>.registerPlugin(FindReplace);
			editor<?php echo $count?>.registerPlugin(InvertBackground);

			<?php
				if ($config["use_Indite"] == true)
					echo "editor".$count.".registerPlugin(Indite);";

				$template_id = -1;
				if (isset($_POST["template_id"])) 
				{
					$template_id = $_POST["template_id"];
				}
				else if (isset($_GET['page_id']))
				{
					$query = "SELECT template_id FROM ".cms_db_prefix()."pages WHERE ".$_GET['page_id']." = page_id";
					$template_id = $db->GetOne($query);
				}

				if (array_key_exists('htmlarea_stylesheet', $cms->variables))
				{
					$obj = get_stylesheet(str_replace('../stylesheet.php?templateid=', '', $cms->variables['htmlarea_stylesheet']));
			?>	

			editor<?php echo $count?>.config.pageStyle = editor<?php echo $count?>.config.pageStyle + "<?php echo preg_replace('/\r?\n/', '', str_replace('"', '\\"', str_replace("'", "\\'", $obj['stylesheet'])))?>";
			<?php
				}
			?>

			editor<?php echo $count?>.config.baseURL = "<?php echo $cms->config['root_url']?>/";
			editor<?php echo $count?>.generate();
			<?php
					$count++;
				}
			?>

		}
		-->
	</script>

	<script type="text/javascript" language="Javascript">
		<!--
		function page_load()
		{
			initHtmlArea();

			for (var j=0; j < document.forms.length; j++)
			{
				for (var i=0; i < (document.forms[j].elements).length; i++)
				{
					if (document.forms[j].elements[i].id == "plain")
					{
						//document.forms[j].elements[i].style.display='none';
					}
				}
			}
		}
		-->
	</script>

	<?php
	}
}

function htmlarea_module_body_function($cms)
{
	$variables = $cms->variables;

	if (array_key_exists('htmlarea_textareas', $cms->variables))
	{
		echo "onload='page_load();'";
	}
}

function htmlarea_module_textbox_function(&$cms, $name='textbox', $columns='80', $rows='8', $encoding='', $content='', $stylesheet='')
{
	$variables = &$cms->variables;
	$rows = $rows + 10;
	if ($stylesheet != '')
	{
		$variables['htmlarea_stylesheet'] = $stylesheet;
	}
	if (!array_key_exists('htmlarea_textareas', $variables))
	{
		$variables['htmlarea_textareas'] = array();
	}
	array_push($variables['htmlarea_textareas'], $name);
	return '<textarea id="'.$name.'" name="'.$name.'" columns="'.$columns.'" rows="'.$rows.'">'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';
}

function htmlarea_module_help($cms)
{
	//Text to show for the help box...
	?>

	<h3>What does this do?</h3>
	<p>RSS is a module for displaying news feeds from other sites in your site.  It can be inserted into a template or content page as a tag and will display the title and url of each item from the feed given.</p>
	<h3>Anything else I should know?</h3>
	<p>The RSS module will cache feeds so that they are not downloaded and parsed on every refresh.  Instead, it pulls the feed down every so many page refreshes and stores the data locally so it's easily accessible.  When the local data becomes stale, it will pull fresh data.  You should notice no performance hit by using it in a template.</p>
	<h3>How do I use it?</h3>
	<p>As this is just a tag module, it's inserted into your page or template by using the cms_module tag.  Example syntax would be: <br /><code>{cms_module module="rss" url="http://download.freshmeat.net/backend/fm-releases.rdf" numbertoshow="5"}</code></p>
	<h3>What parameters are there?</h3>
	<p>
	<ul>
		<li>url="http://feed_url" - RSS feed URL</li>
		<li><em>(optional)</em>numbertoshow="5" - Maximum number of items to display -- leaving empty will show all items</li>
	</ul>
	</p>

	<?php

}

function htmlarea_module_about() {
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

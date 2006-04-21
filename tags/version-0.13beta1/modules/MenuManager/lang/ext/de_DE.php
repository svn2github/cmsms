<?php
$lang['addtemplate'] = 'Template hinzuf&uuml;gen';
$lang['areyousure'] = 'Sind Sie sicher, dass sie dies l&ouml;schen wollen?';
$lang['changelog'] = '	<ul>
	<li>
	<p>Version: 1.0</p>
	<p>Initial Release.</p>
	</li> 
	</ul> ';
$lang['dbtemplates'] = 'Template-Datenbank';
$lang['description'] = 'Verwaltet die Men&uuml;-Templates, um die Men&uuml;s in jeder vorstellbaren Weise anzuzeigen.';
$lang['deletetemplate'] = 'Template l&ouml;schen';
$lang['edittemplate'] = 'Template bearbeiten';
$lang['filename'] = 'Dateiname';
$lang['filetemplates'] = 'Template-Datei';
$lang['help_collapse'] = 'Schalten sie dies ein (auf 1 setzen), wenn das Men&uuml; Eintr&auml;ge verbergen  soll, die in keinem Bezug zur aktuell ausgew&auml;hlten Seite stehen.';
$lang['help_items'] = 'Verwenden Sie diesen Eintrag, um eine Liste mit Seiten auszuw&auml;hlen, die dieses Men&uuml; anzeigen soll. Der Wert sollte eine Liste mit durch Kommata getrennten Seiten-Aliasen sein.';
$lang['help_number_of_levels'] = 'Diese Einstellung erlaubt dem Men&uuml;, dessen Eintr&auml;ge nur bis zu einer bestimmten Tiefe anzuzeigen.';
$lang['help_show_root_siblings'] = 'Diese Option ist nur n&uuml;tzlich, wenn ein Startelement oder eine Startseite vorgegeben werden. Es werden dann alle Eintr&auml;ge angezeigt, die die gleiche Leveltiefe wie die ausgew&auml;hlte Startseite bzw. das ausgew&auml;hlte Startelements haben.';
$lang['help_start_level'] = 'Mit dieser Option zeigt das Men&uuml; nur Eintr&auml;ge ab einem vorgegebenen Level an.  Ein einfaches Beispiel: Sie haben auf der Seite ein Men&uuml; mit einer Level-Tiefe von 1. Dann haben sie noch ein zweites Men&uuml;, bei dem der Startlevel auf 2 gesetzt ist. Jetzt werden nur die untergeordneten Eintr&auml;ge des im ersten Men&uuml; ausgew&auml;hlten Eintrages angezeigt. ';
$lang['help_start_element'] = 'Beginnt die Men&uuml;anzeige ab einem festgelegten Startelement und zeigt nur das Element und dessen untergeordneten Seiten an. Verwendet die hierarchische Position (z.B. 5.1.2).';
$lang['help_start_page'] = 'Beginnt die Men&uuml;anzeige ab einer festgelegten Startseite und zeigt nur dieses Element und dessen untergeordneten Seiten an. Verwendet den Seiten-Alias.';
$lang['help_template'] = 'Das Template, welches f&uuml;r die Anzeige des Men&uuml;s verwendet wird.  Die Templates sind in der Template-Datenbank abgelegt, au&szlig;er der Name des Templates endet auf .tpl. Dann befindet sich das Template im Template-Verzeichnis des Men&uuml;-Managers.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that&#039;s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user&#039;s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{cms_module module=&#039;menumanager&#039;}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called bulletmenu.tpl, cssmenu.tpl and ellnav.tpl. They all basically create a simple unordered list of pages, using different classes and ID&#039;s for styling with CSS.  They are similar to the menu systems included in previous versions: bulletmenu, CSSMenu and EllNav.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to bulletmenu.tpl.</li>
			<li>Give the template copy a name.  We&#039;ll call it &quot;Test Template&quot;.</li>
			<li>You should now see the &quot;Test Template&quot; in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id&#039;s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {cms_module module=&#039;menumanager&#039; template=&#039;Test Template&#039;}. Note that the .tpl extension must be included if a file template is used.</p>
	<p>The parameters for the $node object used in the template are as follows:
		<ul>
			<li>$node->id -- Content ID</li>
			<li>$node->url -- URL of the Content</li>
			<li>$node->accesskey -- Access Key, if defined</li>
			<li>$node->tabindex -- Tab Index, if defined</li>
			<li>$node->titleattribute -- Title Attribute (title), if defined</li>
			<li>$node->hierarchy -- Hierarchy position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Depth (level) of this node in the current menu</li>
			<li>$node->prevdepth -- Depth (level) of the node that was right before this one</li>
			<li>$node->haschildren -- Returns true if this node has child nodes to be displayed</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Template in die Datenbank importieren';
$lang['menumanager'] = 'MenuManager';
$lang['newtemplate'] = 'Neuer Template-Name';
$lang['nocontent'] = 'Es wurde kein Inhalt vorgegeben.';
$lang['notemplatefiles'] = 'Keine Template-Datei in %s';
$lang['notemplatename'] = 'Es wurde kein Template-Name vergeben.';
$lang['templatecontent'] = 'Template-Inhalt';
$lang['templatenameexists'] = 'Ein Template mit diesem Namen existiert bereits';
?>
<?php
$lang['addtemplate'] = 'Template hinzuf&uuml;gen';
$lang['areyousure'] = 'Sind Sie sicher, dass sie dies l&ouml;schen wollen?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
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
$lang['help'] = '	<h3>Was macht das Modul?</h3>
	<p>Mit dem Men&uuml;Manager-Modul k&ouml;nnen Men&uuml;s so abstrahiert werden, dass diese einfach verwendbar und anpassbar sind. Die Anzeige der Men&uuml;s wird in Smarty-Templates abstrahiert, so dass es einfach an die Benutzerbed&uuml;rfnisse angepasst werden kann. Der Men&uuml;Manager liefert nur die Daten und gibt diese an das Template weiter. Mit der Anpassung der Templates oder der Erstellung Ihrer eigenen ist jedes nur denkbare Men&uuml; m&ouml;glich.</p>
	<h3>Wie wird es eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag wie folgt in Ihr Template bzw. Seite ein: <code>{cms_module module=&#039;menumanager&#039;}</code>.  Die m&ouml;glichen Parameter sind weiter unten aufgef&uuml;hrt.</p>
	<h3>Was sollte ich &uuml;ber die Men&uuml;-Templates wissen?</h3>
	<p>Das Men&uuml;Manager-Modul verwendet Templates f&uuml;r die Anzeigelogik. Es werden standardm&auml;&szlig;ig drei Templates mitgeliefert: cssmenu.tpl, minimal_menu.tpl und simple_navigation.tpl. Mit diesen Templates werden grunds&auml;tzlich ungeordnete Listen der Seiten erstellt, f&uuml;r deren Gestaltung per CSS verschiedene Klassen und IDs eingesetzt werden.</p>
	<p>HINWEIS: Das Aussehen der Men&uuml;s wird mit CSS gestaltet. Die Stylesheets sind nicht im Men&uuml;Manager enthalten, sondern m&uuml;ssen jeweils separat mit dem Seiten-Template verkn&uuml;pft werden. Damit das Template cssmenu.tpl auch im Internet Explorer angezeigt wird, m&uuml;ssen Sie im head-Bereich des Seiten-Templates einen Link zu einem JavaScript einf&uuml;gen. Dies ist zur Anzeige des Hover-Effekts notwendig.</p>
	<p>Wenn Sie eine angepasste Version eines Templates erstellen m&ouml;chten, k&ouml;nnen Sie dies einfach in die Datenbank importieren und direkt in der CMSms-Administration bearbeiten. Gehen Sie dazu wie folgt vor:
		<ol>
			<li>Klicken Sie in der Administration auf Men&uuml;Manager.</li>
			<li>Klicken Sie nun auf den Reiter Template-Dateien und dann in der Zeile des gew&uuml;nschten Templates auf das Symbol f&uuml;r &quot;Template in die Datenbank importieren&quot;</li>
			<li>Geben Sie der Template-Kopie einen Namen, zum Beispiel &quot;Test-Template&quot;.</li>
			<li>Nun sollte das &quot;Test-Template&quot; in Ihrer Liste der Template-Datenbank erscheinen.</li>
		</ol>
	</p>
	<p>Jetzt k&ouml;nnen Sie das Template einfach an die Bed&uuml;rfnisse Ihrer Webseite anpassen. F&uuml;gen Sie die entsprechenden Klassen, IDs und andere Tags ein, damit das Men&uuml; exakt wie gew&uuml;nscht aussieht. Anschlie&szlig;end k&ouml;nnen Sie das Template mit {menu&#039; template=&#039;Test Template&#039;} in Ihre Seite einf&uuml;gen. Bitte beachten Sie, dass dem Template die Endung .tpl hinzugef&uuml;gt werden muss, falls Sie eine Template-Datei verwenden.</p>
	<p>Die im Template zu verwendeten Parameter f&uuml;r das $node-Objects lauten wie folgt:
		<ul>
			<li>$node->id -- Inhalts-ID</li>
			<li>$node->url -- URL des Inhalts</li>
			<li>$node->accesskey -- Taste f&uuml;r Direktzugriff, falls definiert</li>
			<li>$node->tabindex -- Tab-Index, falls definiert</li>
			<li>$node->titleattribute -- Beschreibung oder Titel-Attribut (Titel), falls definiert</li>
			<li>$node->hierarchy -- hierarchische Position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Tiefe (Ebene) dieses Nodes im aktuellen Men&uuml;</li>
			<li>$node->prevdepth -- Tiefe (Ebene) des vorherigen Nodes</li>
			<li>$node->haschildren -- gibt true zur&uuml;ck, wenn dieser Node anzuzeigende, untergeordnete Nodes hat</li>
			<li>$node->menutext -- Men&uuml;text</li>
                        <li>$node->alias -- Seiten-Alias</li>
			<li>$node->target -- Ziel f&uuml;r den Link. Ist leer, wenn bei den Einstellungen des Inhalts nichts gesetzt wurde.</li>
			<li>$node->index -- Zahl dieses Nodes im gesamten Men&uuml;</li>
			<li>$node->parent -- ist true, wenn der Node eine &uuml;bergeordnete Seite der aktuell ausgew&auml;hlten Seite ist</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Template in die Datenbank importieren';
$lang['menumanager'] = 'Men&uuml;Manager';
$lang['newtemplate'] = 'Neuer Template-Name';
$lang['nocontent'] = 'Es wurde kein Inhalt vorgegeben.';
$lang['notemplatefiles'] = 'Keine Template-Datei in %s';
$lang['notemplatename'] = 'Es wurde kein Template-Name vergeben.';
$lang['templatecontent'] = 'Template-Inhalt';
$lang['templatenameexists'] = 'Ein Template mit diesem Namen existiert bereits.';
$lang['utmz'] = '156861353.1155715318.25.19.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/home.shtml|utmcmd=referral';
$lang['utma'] = '156861353.717462736.1147511856.1155722697.1155725401.27';
?>
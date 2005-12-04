<?php
$lang['addarticle'] = 'Eintrag anlegen';
$lang['addcategory'] = 'Kategorie hinzuf&uuml;gen';
$lang['addnewsitem'] = 'News-Eintrag hinzuf&uuml;gen';
$lang['allcategories'] = 'Alle Kategorien';
$lang['allentries'] = 'Alle Eintr&auml;ge';
$lang['areyousure'] = 'Wollen Sie dies wirklich l&ouml;schen?';
$lang['articles'] = 'Artikel';
$lang['cancel'] = 'Abbrechen';
$lang['category'] = 'Kategorie';
$lang['categories'] = 'Kategorien';
$lang['content'] = 'Inhalt';
$lang['dateformat'] = '%s ist kein g&uuml;ltiges yyyy-mm-dd hh:mm:ss Format';
$lang['delete'] = 'L&ouml;schen';
$lang['description'] = 'News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten und l&ouml;schen';
$lang['detailtemplate'] = 'Detail-Template';
$lang['displaytemplate'] = 'Template anzeigen';
$lang['edit'] = 'Bearbeiten';
$lang['enddate'] = 'Verfallsdatum';
$lang['endrequiresstart'] = 'Die Angabe eines Verfallsdatums erfordert auch die Angabe eines Startdatums.';
$lang['entries'] = '%s Eintr&auml;ge';
$lang['expiry'] = 'Verf&auml;llt';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mehr';
$lang['moretext'] = 'Mehr-Text';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['newcategory'] = 'Neue Kategorie';
$lang['needpermission'] = 'Sie ben&ouml;tigen die Berechtigung \'%s\', um diese Funktion nutzen zu k&ouml;nnen.';
$lang['nocategorygiven'] = 'Keine Kategorie vorhanden';
$lang['nocontentgiven'] = 'Kein Inhalt vorhanden';
$lang['noitemsfound'] = '<strong>Keine</strong> Eintr&auml;ge in dieser Kategorie gefunden: %s';
$lang['nopostdategiven'] = 'Kein Erstellungsdatum vorhanden';
$lang['note'] = '<em>Hinweis:</em> Datum/Zeit muss ein g&uuml;ltiges \'yyyy-mm-dd hh:mm:ss\' Format sein.';
$lang['notitlegiven'] = 'Kein Titel eingegeben';
$lang['numbertodisplay'] = 'Anzuzeigende Anzahl (leer lassen, um alle anzuzeigen)';
$lang['options'] = 'Optionen';
$lang['print'] = 'Drucken';
$lang['postdate'] = 'Erstellt am:';
$lang['postinstall'] = 'Stellen Sie sicher, dass User, welche News administrieren d&uuml;rfen, die Berechtigung "Modify News" haben.';
$lang['rsstemplate'] = 'RSS-Template';
$lang['selectcategory'] = 'Kategorie ausw&auml;hlen';
$lang['showchildcategories'] = 'Unterkategorien anzeigen';
$lang['sortascending'] = 'Aufsteigend sortieren';
$lang['startdate'] = 'Anfangsdatum';
$lang['startrequiresend'] = 'Die Eingabe eines Startdatums erfordert auch die Eingabe eines Verfallsdatums.';
$lang['status'] = 'Status';
$lang['submit'] = 'Speichern';
$lang['summary'] = 'Zusammenfassung';
$lang['summarytemplate'] = 'Zusammenfassungs-Template';
$lang['title'] = 'Titel';
$lang['useexpiration'] = 'Verfallsdatum verwenden';
$lang['showautodiscovery'] = 'Link bei Erkennung eines Feeds automatisch anzeigen';
$lang['autodiscoverylink'] = 'URL f&uuml;r die automatische Feed-Erkennung (leer f&uuml;r Standardeinstellung)';
$lang['helpcategory'] = 'Zeigt nur Eintr&auml;ge aus dieser Kategorie an. Um auch die Unterkategorien anzuzeigen, geben Sie nach dem Kategorienamen ein * ein. Mehrere Kategorien k&ouml;nnen angezeigt werden, wenn diese mit Komma getrennt sind. Ohne entsprechende Angabe werden alle Kategorien angezeigt.';
$lang['helpdateformat'] = 'Format, mit dem Datum und Zeit des Artikels angezeigt werden. Es basiert auf der <a href="http://php.net/strftime" target="_blank">strftime</a>-Funktion und kann im Template mit $entry->formatpostdate verwendet werden.';
$lang['helpdetailtemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige des Artikels. Das Template muss sich im Ordner modules/News/templates befinden.';
$lang['helpmakerssbutton'] = 'Erzeugt einen Button mit einem Link zum RSS-Feed der News-Eintr&auml;ge.';
$lang['helpmoretext'] = 'Text, der am Ende eines News-Eintrages erscheint, wenn der Artikel l&auml;nger ist als die vorgegebene Zusammenfassungs-L&auml;nge. Standard ist "more..."';
$lang['helpnumber'] = 'Maximal anzuzeigende Eintr&auml;ge - ohne Parameter werden alle Eintr&auml;ge angezeigt.';
$lang['helpsortasc'] = 'Sortiert Eintr&auml;ge in aufsteigende Folge schneller als in absteigender (nach Datum).';
$lang['helpsortby'] = 'Felder, nach denen die Eintr&auml;ge sortiert werden. Folgende Optionen sind m&ouml;glich: "news_date", "summary", "news_data", "news_category", "news_title". Standard ist "news_date".';
$lang['helpsummarytemplate'] = 'Verwendet ein separates Template f&uuml;r die Anzeige der Artikel-Zusammenfassung. Das Template muss sich im Ordner modules/News/templates befinden.';
$lang['help'] = <<<EOF
	<h3>Was macht dieses Modul?</h3>
	<p>News ist ein Modul, um Neuigkeiten im Blog-&auml;hnlichem Stil auf Ihrer Seite anzuzeigen, aber mit mehr M&ouml;glichkeiten. Nach der Installation des Moduls wird dem Admin-Men&uuml; ein Link zur News-Administrationsseite hinzugef&uuml;gt, &uuml;ber welchen Sie News-Kategorien ausw&auml;hlen oder hinzuf&uuml;gen k&ouml;nnen. Wurde eine Kategorie angelegt oder ausgew&auml;hlt, wird eine Liste der vorhandenen Eintr&auml;ge dieser Kategorie angezeigt. Von hier aus k&ouml;nnen Sie f&uuml;r diese Kategorie Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen.</p>
	<h3>Sicherheit</h3>
	<p>Um News-Eintr&auml;ge hinzuf&uuml;gen, bearbeiten oder l&ouml;schen zu k&ouml;nnen, muss der User einer Gruppe angeh&ouml;ren, die die 'Modify News'-Berechtigung besitzt.</p>
	<h3>Wie wird es eingesetzt ?</h3>
	<p>Der einfachste Weg ist der Einsatz in Verbindung mit dem cms_module-Tag. Dieser f&uuml;gt das Modul in Ihr Template oder Seite oder wo immer Sie wollen ein und zeigt die News-Eintr&auml;ge an. Der einzuf&uuml;gende Code sollte so aussehen: <code>{cms_module module="news" number="5" category="Bier"}</code></p>
EOF;
?>

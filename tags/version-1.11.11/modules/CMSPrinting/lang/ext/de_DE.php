<?php
$lang['friendlyname'] = 'Druckfreundliche Seiten';
$lang['description'] = 'Mit diesem Modul lassen sich die Inhalte von CMSMS-Seiten für den Ausdruck anpassen.';
$lang['postinstall'] = 'Das Modul wurde installiert';
$lang['confirmuninstall'] = 'Wollen Sie dieses Modul wirklich deinstallieren?';
$lang['postuninstall'] = 'Das Modul wurde deinstalliert';
$lang['linktemplate'] = 'Link-Template';
$lang['printtemplate'] = 'Druck-Template';
$lang['templatesaved'] = 'Das Template wurde gespeichert';
$lang['templatereset'] = 'Das Template wurde auf die programmseitigen Voreinstellungen zurückgesetzt';
$lang['confirmresettemplate'] = 'Wollen Sie das Template wirklich auf die programmseitigen Voreinstellungen zurücksetzen?';
$lang['reset'] = 'Auf die Voreinstellungen zurücksetzen';
$lang['save'] = 'Speichern';
$lang['upgraded'] = 'wurde auf Version %s aktualisiert';
$lang['savetemplate'] = 'Template speichern';
$lang['savesettings'] = 'Einstellungen speichern';
$lang['template'] = 'Template';
$lang['notemplatecontent'] = 'Es wurde kein neues Template vorgegeben ...';
$lang['defaultlinktext'] = 'Diese Seite drucken';
$lang['backbuttontext'] = 'Zurück';
$lang['overridestylereset'] = 'Das überschreibende Stylesheet wurde auf die programmseitigen Voreinstellungen zurückgesetzt.';
$lang['overridestylesaved'] = 'Das überschreibende Stylesheet wurde gespeichert';
$lang['overridestyle'] = 'Stylesheet überschreiben';
$lang['confirmresetstyle'] = 'Wollen Sie das Stylesheet wirklich auf die programmseitigen Voreinstellungen zurücksetzen?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Den vorgegebenen Text für den Druck-Link überschreiben';
$lang['help_popup'] = 'Wird dieser Wert auf \'true\' gesetzt, öffnet sich für den Druck eine neue Seite.';
$lang['help_script'] = 'Wenn Sie diesen Wert auf \'true\' setzen, wird auf der Druckseite ein Javascript genutzt, um den Druck-Dialog anzuzeigen.';
$lang['help_showbutton'] = 'Wenn Sie diesen Wert auf \'true\' setzen, wird ein grafischer Button angezeigt.';
$lang['help_class'] = 'CSS-Klasse für den Link, Standard ist \'noprint\'';
$lang['help_src_img'] = 'Zeigt eine Bild-Datei anstatt eines Text-Links';
$lang['help_class_img'] = 'Name der Klasse des <img>-Tags (falls der Parameter showbutton gesetzt wurde)';
$lang['help_more'] = 'Hier können zusätzliche Parameter für den Link (a) angegeben werden';
$lang['help_onlyurl'] = 'Es wird nur die URL ausgegeben, nicht der komplette Link';
$lang['help_includetemplate'] = 'Wenn Sie diese Option auf \'true\' setzen, wird das gesamte Template verarbeitet, nicht nur der Haupt-Content. Dies erfordert eventuell einige spezielle druckerspezifische Stylesheets mit dem Medientyp \'print\'.';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>

<p>Dieses Modul fügt einen Link in die Seiten/Templates ein, der Ihren Besucher auf eine speziell für den Ausdruck vorbereitete Seite weiterleitet.</p>

<p>Bitte beachten Sie jedoch, dass das Modul aktuell nur den Haupt-Inhaltsblock ausgegeben wird (außer bei Verwendung des Parameters <em>includetemplate=true</em>). </p>

<h3>Wie wird es eingesetzt?</h3>

<p>Nach der Installation des Moduls können Sie sich über die Modul-Administration im Menü \'Inhalte\' die Templates für die Links und den Druck der Seite ansehen und ändern.</p>

<p>In der Seite oder dem Template müssen Sie dann nur noch</p>
<pre>
{cms_module module=\'CMSPrinting\' <i>parameter</i>}
</pre>
<p>oder einfach</p>
<pre>
{print <i>params</i>}
</pre>
<p>einfügen und Ihren Seiten wird ein Link zum Drucken der Seiten hinzugefügt.</p>';
?>
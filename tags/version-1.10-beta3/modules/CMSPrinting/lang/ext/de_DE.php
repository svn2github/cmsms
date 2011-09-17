<?php
$lang['friendlyname'] = 'Druckfreundliche Seiten';
$lang['description'] = 'Mit diesem Modul lassen sich die Inhalte von CMSms-Seiten f&uuml;r den Ausdruck anpassen.';
$lang['postinstall'] = 'Das Modul wurde installiert';
$lang['confirmuninstall'] = 'Wollen Sie dieses Modul wirklich deinstallieren?';
$lang['postuninstall'] = 'Das Modul wurde deinstalliert';
$lang['linktemplate'] = 'Link-Template';
$lang['printtemplate'] = 'Druck-Template';
$lang['templatesaved'] = 'Das Template wurde gespeichert';
$lang['templatereset'] = 'Das Template wurde auf die programmseitigen Voreinstellungen zur&uuml;ckgesetzt';
$lang['confirmresettemplate'] = 'Wollen Sie das Template wirklich auf die programmseitigen Voreinstellungen zur&uuml;cksetzen?';
$lang['reset'] = 'Auf die Voreinstellungen zur&uuml;cksetzen';
$lang['save'] = 'Speichern';
$lang['upgraded'] = 'wurde auf Version %s aktualisiert';
$lang['savetemplate'] = 'Template speichern';
$lang['savesettings'] = 'Einstellungen speichern';
$lang['template'] = 'Template ';
$lang['notemplatecontent'] = 'Es wurde kein neues Template vorgegeben ...';
$lang['defaultlinktext'] = 'Diese Seite drucken';
$lang['backbuttontext'] = 'Zur&uuml;ck';
$lang['overridestylereset'] = 'Das &uuml;berschreibende Stylesheet wurde auf die programmseitigen Voreinstellungen zur&uuml;ckgesetzt.';
$lang['overridestylesaved'] = 'Das &uuml;berschreibende Stylesheet wurde gespeichert';
$lang['overridestyle'] = 'Stylesheet &uuml;berschreiben';
$lang['confirmresetstyle'] = 'Wollen Sie das Stylesheet wirklich auf die programmseitigen Voreinstellungen zur&uuml;cksetzen?';
$lang['stylesheet'] = 'Stylesheet ';
$lang['help_text'] = 'Den vorgegebenen Text f&uuml;r den Druck-Link &uuml;berschreiben';
$lang['help_popup'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird f&uuml;r den Ausdruck eine neue Seite ge&ouml;ffnet.';
$lang['help_script'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird auf der Druckseite ein Javascript genutzt, um den Druck-Dialog anzuzeigen';
$lang['help_showbutton'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird ein grafischer Button angezeigt';
$lang['help_class'] = 'CSS-Klasse f&uuml;r den Link, Standard ist &#039;noprint&#039;';
$lang['help_src_img'] = 'Zeigt eine Bild-Datei anstatt eines Text-Links';
$lang['help_class_img'] = 'Name der Klasse des <img>-Tags (falls der Parameter showbutton gesetzt wurde)';
$lang['help_more'] = 'Hier k&ouml;nnen zus&auml;tzliche Parameter f&uuml;r den Link (a) angegeben werden';
$lang['help_onlyurl'] = 'Es wird nur die URL ausgegeben, nicht der komplette Link';
$lang['help_includetemplate'] = 'Wenn Sie diese Option auf &#039;true&#039; setzen, wird das gesamte Template verarbeitet, nicht nur der Haupt-Content. Dies erfordert eventuell einige spezielle druckerspezifische Stylesheets mit dem Medientyp &#039;print&#039;.';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>

<p>Dieses Modul f&uuml;gt einen Link in die Seiten/Templates ein, der Ihren Besucher auf eine speziell f&uuml;r den Ausdruck vorbereitete Seite weiterleitet.</p>

<p>Bitte beachten Sie jedoch, dass das Modul aktuell nur den Haupt-Inhaltsblock ausgegeben wird (au&szlig;er bei Verwendung des Parameters <em>includetemplate=true</em>). </p>

<h3>Wie wird es eingesetzt?</h3>

<p>Nach der Installation des Moduls k&ouml;nnen Sie sich &uuml;ber die Modul-Administration im Men&uuml; &#039;Inhalte&#039; die Templates f&uuml;r die Links und den Druck der Seite ansehen und &auml;ndern.</p>

<p>In der Seite oder dem Template m&uuml;ssen Sie dann nur noch</p>
<pre>
{cms_module module=&#039;printing&#039; <i>parameter</i>}
</pre>
<p>oder einfach</p>
<pre>
{print <i>params</i>}
</pre>
<p>einf&uuml;gen und Ihren Seiten wird ein Link zum Drucken der Seiten hinzugef&uuml;gt.</p>';
$lang['qca'] = 'P0-1458450664-1284573084918';
$lang['utmz'] = '156861353.1305350831.254.63.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['utma'] = '156861353.1403231767.1300657837.1305575823.1305578369.272';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1305578369';
?>
<?php
$lang['friendlyname'] = 'Druckfreundliche Seiten';
$lang['description'] = 'Mit diesem Modul lassen sich die Inhalte von CMSms auf einfache Weise f&uuml;r den Ausdruck optimieren. Alternativ k&ouml;nnen die Inhalte des Hauptblocks als PDF-Dateien ausgegeben werden.';
$lang['postinstall'] = 'Das Modul wurde installiert';
$lang['confirmuninstall'] = 'Wollen Sie dieses Modul wirklich deinstallieren?';
$lang['postuninstall'] = 'Das Modul wurde deinstalliert';
$lang['linktemplate'] = 'Link-Template';
$lang['printtemplate'] = 'Druck-Template';
$lang['pdftemplate'] = 'PDF-Template';
$lang['templatesaved'] = 'Das Template wurde gespeichert';
$lang['templatereset'] = 'Das Template wurde auf die programmseitigen Voreinstellungen zur&uuml;ckgesetzt.';
$lang['confirmresettemplate'] = 'Wollen Sie das Template wirklich auf die programmseitigen Voreinstellungen zur&uuml;cksetzen?';
$lang['reset'] = 'Auf die Voreinstellungen zur&uuml;cksetzen';
$lang['save'] = 'Speichern';
$lang['upgraded'] = 'wurde aktualisiert auf Version %s';
$lang['savetemplate'] = 'Template speichern';
$lang['savesettings'] = 'Einstellungen speichern';
$lang['settings'] = 'Einstellungen';
$lang['settingssaved'] = 'Die Einstellungen wurden gespeichert';
$lang['pdfheader'] = 'PDF-Header';
$lang['headerfontsize'] = 'Schriftgr&ouml;&szlig;e der &Uuml;berschrift';
$lang['contentfontsize'] = 'Schriftgr&ouml;&szlig;e des Inhalts';
$lang['fonttypetext'] = 'Schriftart';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
$lang['orientation'] = 'Orientierung';
$lang['landscape'] = 'Landschaft';
$lang['portrait'] = 'Portrait';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Template';
$lang['notemplatecontent'] = 'Es wurde kein neues Template vorgegeben ...';
$lang['defaultlinktext'] = 'Diese Seite drucken';
$lang['defaultpdflinktext'] = 'PDF erzeugen';
$lang['backbuttontext'] = 'Zur&uuml;ck';
$lang['overridestylereset'] = 'Das &uuml;berschreibende Stylesheet wurde auf die programmseitigen Voreinstellungen zur&uuml;ckgesetzt.';
$lang['overridestylesaved'] = 'Das &uuml;berschreibende Stylesheet wurde gespeichert';
$lang['overridestyle'] = 'Stylesheet &uuml;berschreiben';
$lang['confirmresetstyle'] = 'Wollen Sie wirklich das Stylesheet auf die programmseitigen Voreinstellungen zur&uuml;cksetzen?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Den vorgegebenen Text f&uuml;r den Druck-/PDF-Link &uuml;berschreiben';
$lang['help_pdf'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird ein Link zum Erzeugen einer PDF-Datei (anstatt eines Ausdrucks) angezeigt';
$lang['help_popup'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird f&uuml;r den Ausdruck eine neue Seite ge&ouml;ffnet.';
$lang['help_script'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird auf der Druckseite ein Javascript genutzt, um den Druck-Dialog anzuzeigen';
$lang['help_showbutton'] = 'Wenn Sie diesen Wert auf &#039;true&#039; setzen, wird ein grafischer Button angezeigt';
$lang['help_class'] = 'CSS-Klasse f&uuml;r den Link, Standard ist &#039;noprint&#039;';
$lang['help_src_img'] = 'Zeigt eine Bild-Datei anstatt eines Text-Links';
$lang['help_class_img'] = 'Name der Klasse des <img>-Tags (falls der Parameter showbutton gesetzt wurde)';
$lang['help_more'] = 'Hier k&ouml;nnen zus&auml;tzliche Parameter f&uuml;r den Link (a) angegeben werden';
$lang['help_onlyurl'] = 'Es wird nur die URL ausgegeben, nicht der komplette Link';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.3 (silmarillion)</p>
<p>Switched to freesans and freeserif for fonts as they have more foreign chars</p>
<p>Implemented a switch between serif/sansserif fonts</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.2 (silmarillion)</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Tweaks to the default list template.  Adds more smarty variables to the
list template, and cleans up a warning.</p>
<p>Fixed a wierd little typo causing the module to break</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>

<p>Dieses Modul f&uuml;gt einen Link in die Seiten/Templates ein, der Ihren Besucher auf eine speziell f&uuml;r den Ausdruck vorbereitete Seite weiterleitet. Mit dem Modulaufruf k&ouml;nnen einige Parameter gesetzt werden, um den Link sowie den
Ausdruck entsprechend Ihren Vorstellungen zu gestalten. Ab der Version 0.2.0 kann &uuml;ber einen Parameter anstatt einer Druckseite auch eine PDF-Datei erzeugt werden.</p>

<p>Aktuell unterst&uuml;tzt das Modul nur einfache Inhaltsseiten, also keine Weiterleitungen durch andere Module o.&auml;. Das Modul ist derzeit nur in der Lage, den Inhalt des Haupt-Content-Block auszudrucken bzw. als PDF auszugeben.</p>

<h3>Wie wird dieses Modul eingesetzt?</h3>

<p>Nach der Installation des Moduls k&ouml;nnen Sie sich &uuml;ber die Modul-Administration im Men&uuml; &#039;Inhalte&#039; die Templates f&uuml;r die Links und den Druck der Seite
ansehen und &auml;ndern.</p>

<p>In der Seite oder dem Template m&uuml;ssen Sie dann nur noch folgendes einf&uuml;gen:</p>
<pre>
{cms_module module=&#039;printing&#039; <i>parameter</i>}
</pre>
<p>und Ihren Seiten wird ein Link zum Drucken der Seiten hinzugef&uuml;gt.</p>

<h4>Hinweise:</h4>
<ul>
<li>Die Erzeugung von PDF-Dokumenten befindet sich derzeit noch im experimentellem Stadium.</li>
<li>Die Erzeugung von PDF-Dokumenten wird auf Servern mit PHP 4.x h&ouml;chstwahrscheinlich nicht funktionieren. Wenn Sie diese Funktion ben&ouml;tigen, sollten Sie Ihren Hoster nach einer Aktualisierung auf PHP5 fragen.</li>
</ul>';
$lang['utma'] = '156861353.717462736.1147511856.1204776557.1204988561.317';
?>
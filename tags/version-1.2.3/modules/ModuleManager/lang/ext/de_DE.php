<?php
$lang['prompt_settings'] = 'Einstellungen';
$lang['prompt_otheroptions'] = 'Weitere Optionen';
$lang['reset'] = 'Zur&uuml;cksetzen';
$lang['error_permissions'] = '<strong><em>WARNUNG:</em></strong> Die Verzeichnisberechtigungen sind f&uuml;r die Installation von Modulen nicht ausreichend. Eventuell k&ouml;nnten Sie auch Probleme mit dem Safe-Modus Ihres Servers haben. Bitte stellen Sie sicher, dass der Safe-Modus Ihres Servers deaktiviert und die Dateiberechtigungen ausreichend sind.';
$lang['error_minimumrepository'] = 'Die Repository-Version ist mit diesem ModulManager nicht kompatibel';
$lang['prompt_reseturl'] = 'Die URL auf den Standard zur&uuml;cksetzen';
$lang['prompt_resetcache'] = 'Den lokalen Zwischenspeicher der Repository-Daten zur&uuml;cksetzen';
$lang['prompt_dl_chunksize'] = 'Maximale Teil-Gr&ouml;&szlig;e (Kb)';
$lang['text_dl_chunksize'] = 'Maximalwert der an einem St&uuml;ck vom Server herunter zu ladenden Daten (beim Installieren eines Moduls)';
$lang['error_nofilesize'] = 'Der Parameter Dateigr&ouml;&szlig;e wurde nicht angegeben';
$lang['error_nofilename'] = 'Der Parameter Dateiname wurde nicht angegeben';
$lang['error_checksum'] = 'Pr&uuml;fsummen-Fehler. Dieser Fehler deutet auf eine besch&auml;digte Datei hin. Die Datei kann entweder beim Hochladen in das Depot oder bei der &Uuml;bertragung auf Ihr System besch&auml;digt worden sein.';
$lang['cantdownload'] = 'Konnte nichts herunterladen';
$lang['download'] = 'Herunterladen &amp; Installieren';
$lang['error_moduleinstallfailed'] = 'Modulinstallation fehlerhaft';
$lang['error_connectnomodules'] = 'Die Verbindung zu dem festgelegten Moduldepot wurde erfolgreich aufgebaut. Es scheint jedoch, als ob in diesem Depot gegenw&auml;rtig noch keine Module verf&uuml;gbar sind.';
$lang['submit'] = 'Absenden';
$lang['text_repository_url'] = 'Die URL sollte folgendes Format haben:  http://www.meine-webseite.de/Pfad/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL des Moduldepots:';
$lang['availmodules'] = 'Verf&uuml;gbare Module';
$lang['preferences'] = 'Voreinstellungen';
$lang['preferencessaved'] = 'Voreinstellungen gespeichert';
$lang['repositorycount'] = 'Module im Depot gefunden';
$lang['instcount'] = 'Module aktuell installiert';
$lang['availablemodules'] = 'Aktueller Status der im Depot verf&uuml;gbaren Module';
$lang['helptxt'] = 'Hilfe';
$lang['abouttxt'] = '&Uuml;ber';
$lang['xmltext'] = 'XML-Datei';
$lang['nametext'] = 'Modul-Name';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'Gr&ouml;&szlig;e (Kilobytes)';
$lang['statustext'] = 'Status/Aktion';
$lang['uptodate'] = 'Installiert';
$lang['install'] = 'Installieren';
$lang['newerversion'] = 'Neuere Version installiert';
$lang['onlynewesttext'] = 'Nur die neueste Modulversion anzeigen';
$lang['upgrade'] = 'Aktualisieren';
$lang['error_nosoapconnect'] = 'Die Verbindung zum SOAP-Server konnte nicht hergestellt werden.';
$lang['error_soaperror'] = 'SOAP-Problem';
$lang['error_norepositoryurl'] = 'Die URL f&uuml;r das Moduldepot wurde nicht festgelegt.';
$lang['friendlyname'] = 'ModulManager';
$lang['postinstall'] = 'Der ModulManager wurde erfolgreich installiert.';
$lang['postuninstall'] = 'Der ModulManager wurde deinstalliert. Es k&ouml;nnen keine Module aus dem Remote-Depot installiert werden. Es ist nur noch eine Installation von lokalen Dateien m&ouml;glich.';
$lang['really_uninstall'] = 'Wollen Sie wirklich dieses Modul deinstallieren? Sie werden diese Funktionalit&auml;t vermissen.';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['moddescription'] = 'Ein Client f&uuml;r das Modul &quot;ModuleRepository&quot;. Dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese &uuml;ber FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.';
$lang['error'] = 'Fehler!';
$lang['admindescription'] = 'Ein Werkzeug zum Auffinden und Installieren von Modulen auf Remote-Servern.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10. Januar 2006. Erste Ver&ouml;ffentlichung.</li>
<li>Version 1.1. July, 2006. Ver&ouml;ffentlicht mit 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Ben&ouml;tigt nuSOAP-Modul Version 1.0.1</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Ein Client f&uuml;r das Modul &quot;ModuleRepository&quot;. Dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese per FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Zur Verwendung dieses Moduls ben&ouml;tigen Sie die Berechtigung &#039;Modify Modules&#039; und die URL einer &#039;Module Repository&#039;-Installation. Diese URL k&ouml;nnen Sie unter &#039;Administrator > Globale Einstellungen&#039; festlegen.</p><br />
<p>Die Administration dieses Moduls finden Sie im Men&uuml; &#039;Erweiterungen&#039;. Bei Auswahl dieses Moduls wird automatisch eine Liste der verf&uuml;gbaren XML-Module abgefragt.  Diese Liste wird auf die Liste der aktuell installierten Module referenziert und eine Zusammenfassung angezeigt. Sie k&ouml;nnen sich die Beschreibung und die Hilfe der zu Module anzeigen lassen, ohne diese installieren zu m&uuml;ssen. Von hier aus k&ouml;nnen die Module dann auch installiert oder aktualisiert werden.</p>
<h3>Support</h3>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>
<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['utma'] = '156861353.717462736.1147511856.1191386925.1191537866.219';
$lang['utmz'] = '156861353.1189002384.179.113.utmccn=(referral)|utmcsr=blog.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
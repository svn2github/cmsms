<?php
$lang['available_updates'] = 'Zur Aktualisierung bereitstehende Module; Bevor Sie die Module aktualisieren, lesen Sie die Versionsinformationen Im Forge und erstellen eine Sicherungskopie (Datenbank + Dateien) Ihrer Webseite.';
$lang['all_modules_up_to_date'] = 'Es sind keine neueren Module im Moduldepot verf&uuml;gbar';
$lang['error_module_object'] = 'Fehler: konnte keine Instanz des %s-Moduls finden';
$lang['error_nomatchingmodules'] = 'Fehler: konnte keine &uuml;bereinstimmenden Module im Moduldepot finden';
$lang['error_nomodules'] = 'Fehler: konnte die Liste der installierten Module nicht abfragen';
$lang['upgrade_available'] = 'Neuere Version verf&uuml;gbar (%s), Sie verwenden (%s)';
$lang['newversions'] = 'Verf&uuml;gbare Aktualisierungen';
$lang['notice_depends'] = '%s ist von den folgenden Aktionen abh&auml;ngig. Klicken Sie zum Weitermachen auf &quot;Installieren&quot;.';
$lang['install_submit'] = 'Installieren';
$lang['depend_upgrade'] = 'Das Modul %s muss auf Version %s aktualisiert werden.';
$lang['depend_install'] = 'Das Modul %s (Version %s oder h&ouml;her) muss installiert werden.';
$lang['depend_activate'] = 'Das Modul %s muss aktiviert werden.';
$lang['action_activated'] = 'Das Modul %s wurde aktiviert.';
$lang['action_installed'] = 'Das Modul %s wurde mit den folgenden Hinweisen installiert: %s';
$lang['action_upgraded'] = 'Das Modul %s wurde aktualisiert';
$lang['title_installation_complete'] = 'Die Installation wurde vollst&auml;ndig abgeschlossen!';
$lang['install_with_deps'] = 'Alle Abh&auml;ngigkeiten pr&uuml;fen und installieren';
$lang['msg_nodependencies'] = 'Dieses Modul hat keine Abh&auml;ngigkeiten von anderen Modulen.';
$lang['error_upgrade'] = 'Die Aktualisierung des Moduls %s ist felgeschlagen!';
$lang['error_skipping'] = 'Aufgrund von Fehlern in den Einstellungen der Abh&auml;ngigkeiten wurde die Installation/Aktualisierung von %s &uuml;bersprungen. Bitte schauen Sie sich die unten stehenden Hinweise an und versuchen es dann noch einmal.';
$lang['dependstxt'] = 'Abh&auml;ngigkeiten';
$lang['use_at_your_own_risk'] = 'Verwendung auf eigene Gefahr';
$lang['compatibility_disclaimer'] = 'Die hier angezeigten Module wurden sowohl von CMSms-Entwicklern als auch Drittanbietern erstellt. Wir k&ouml;nnen nicht garantieren, dass jedes hier angebotene Modul mit Ihrem System funktionsf&auml;hig, getestet oder kompatibel ist. Vor der Installation sollten Sie daher die Modulhilfe und die Informationen/Postings im Forum lesen.';
$lang['notice'] = 'Hinweis';
$lang['general_notice'] = 'Die hier angezeigte Version repr&auml;sentiert die jeweils letzte, im ausgew&auml;hlten Moduldepot (wahrscheinlich das CMS %s) als XML-Datei vorhandene Modulversion. Diese Version kann die letzte/aktuellste sein, muss aber nicht. Um dies zu pr&uuml;fen, k&ouml;nnen Sie sich die verf&uuml;gbaren Dateien im gew&auml;hlten Moduldepot anschauen. Wenn Sie das voreingestellte Moduldepot verwenden, k&ouml;nnen Sie im Suchfeld von <a href="http://dev.cmsmadesimple.org">forge</a> den Namen des Moduls eingeben und dann auf &quot;Files&quot; klicken.';
$lang['incompatible'] = 'Inkompatibel';
$lang['prompt_settings'] = 'Einstellungen';
$lang['prompt_otheroptions'] = 'Weitere Optionen';
$lang['reset'] = 'Zur&uuml;cksetzen';
$lang['error_permissions'] = '<strong><em>WARNUNG:</em></strong> Die Berechtigungen des Verzeichnisses sind f&uuml;r die Installation von Modulen nicht ausreichend. Eventuell k&ouml;nnten auch Probleme mit dem Safe-Modus Ihres Servers auftreten. Bitte stellen Sie sicher, dass der Safe-Modus Ihres Servers deaktiviert ist und die Dateiberechtigungen ausreichend sind.';
$lang['error_minimumrepository'] = 'Die Moduldepot-Version ist mit diesem ModulManager nicht kompatibel';
$lang['prompt_reseturl'] = 'Die URL auf den Standard zur&uuml;cksetzen';
$lang['prompt_resetcache'] = 'Den lokalen Zwischenspeicher der Moduldepot-Daten l&ouml;schen';
$lang['prompt_dl_chunksize'] = 'Maximale Teil-Gr&ouml;&szlig;e (Kb)';
$lang['text_dl_chunksize'] = 'Der Maximalwert der an einem St&uuml;ck vom Server herunter zu ladenden Daten (beim Installieren eines Moduls)';
$lang['error_nofilesize'] = 'Der Parameter Dateigr&ouml;&szlig;e wurde nicht angegeben';
$lang['error_nofilename'] = 'Der Parameter Dateiname wurde nicht angegeben';
$lang['error_unsatisfiable_dependency'] = 'Konnte das erforderliche Modul &quot;%s&quot; (Version %s oder h&ouml;her) nicht im Moduldepot finden. Es wird direkt von %s ben&ouml;tigt; dies k&ouml;nnte auf ein Problem mit der im Moduldepot vorhandenen Version des Moduls hinweisen. Bitte kontaktieren Sie den Autor des Moduls. Vorgang abgebrochen.';
$lang['error_checksum'] = 'Pr&uuml;fsummen-Fehler. Dieser Fehler deutet auf eine besch&auml;digte Datei hin. Die Datei kann entweder beim Hochladen in das Moduldepot oder bei der &Uuml;bertragung auf Ihr System besch&auml;digt worden sein. (erwartet %s, zur&uuml;ckgegeben wurde %s)';
$lang['cantdownload'] = 'Konnte nichts herunterladen';
$lang['download'] = 'Herunterladen und Installieren';
$lang['error_moduleinstallfailed'] = 'Die Modulinstallation ist fehlgeschlagen';
$lang['error_connectnomodules'] = 'Die Verbindung zu dem festgelegten Moduldepot wurde erfolgreich aufgebaut. Es scheint jedoch, als ob in diesem Depot gegenw&auml;rtig noch keine Module verf&uuml;gbar sind.';
$lang['submit'] = 'Speichern';
$lang['text_repository_url'] = 'Die URL sollte folgendes Format haben:  http://www.meine-webseite.de/Pfad/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL des Moduldepots';
$lang['title_installation'] = 'Installation ';
$lang['availmodules'] = 'Verf&uuml;gbare Module';
$lang['preferences'] = 'Voreinstellungen';
$lang['preferencessaved'] = 'Voreinstellungen gespeichert';
$lang['repositorycount'] = 'Module im Moduldepot gefunden';
$lang['instcount'] = 'Module aktuell installiert';
$lang['availablemodules'] = 'Aktueller Status der im Moduldepot verf&uuml;gbaren Module';
$lang['time_warning'] = 'Wenn die Installationsliste mehr als zwei Module enth&auml;lt, kann die Installation ein paar Minuten in Anspruch nehmen. Bitte haben Sie erwas Geduld!';
$lang['helptxt'] = 'Hilfe';
$lang['abouttxt'] = '&Uuml;ber';
$lang['xmltext'] = 'XML-Datei';
$lang['nametext'] = 'Modulname';
$lang['mod_name_ver'] = '%s Version %s';
$lang['unknown'] = 'Unbekannt';
$lang['vertext'] = 'Version ';
$lang['sizetext'] = 'Gr&ouml;&szlig;e (Kilobytes)';
$lang['statustext'] = 'Status/Aktion';
$lang['uptodate'] = 'Installiert';
$lang['install'] = 'Installieren';
$lang['newerversion'] = 'Neuere Version installiert';
$lang['onlynewesttext'] = 'Nur die neueste Modulversion anzeigen';
$lang['upgrade'] = 'Aktualisieren';
$lang['error_nosoapconnect'] = 'Es konnte keine Verbindung zum SOAP-Server hergestellt werden.';
$lang['error_soaperror'] = 'SOAP-Problem';
$lang['soaperror'] = 'SOAP-Fehler: %s';
$lang['error_norepositoryurl'] = 'Die URL f&uuml;r das Moduldepot wurde nicht festgelegt.';
$lang['friendlyname'] = 'ModulManager';
$lang['postinstall'] = 'Der ModulManager wurde erfolgreich installiert.';
$lang['postuninstall'] = 'Der ModulManager wurde deinstalliert. Es k&ouml;nnen keine Module mehr direkt aus dem Moduldepot installiert werden. Es ist jedoch noch die Installation von XML-Dateien m&ouml;glich, die zuvor hochgeladen werden m&uuml;ssen.';
$lang['really_uninstall'] = 'Wollen Sie wirklich dieses Modul deinstallieren? Sie werden diese tolle Funktion vermissen.';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['moddescription'] = 'Ein Client f&uuml;r das Modul &quot;ModuleRepository&quot;. Dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese &uuml;ber FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.';
$lang['back_to_module_manager'] = '&laquo; Zur&uuml;ck zum ModulManager';
$lang['error'] = 'Fehler!';
$lang['admindescription'] = 'Ein Werkzeug zum Auffinden und Installieren von Modulen in Moduldepots.';
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
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking.
</li>
<li>Version 1.3.3 March, 2010.<br/>
<ul>
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Ein Client f&uuml;r das Modul &quot;ModuleRepository&quot;. Dieses Modul erlaubt die Vorschau und die Modul-Installation von Remote-Seiten aus, ohne dass diese per FTP auf den Server geladen oder entpackt werden m&uuml;ssen. Die XML-Modul-Dateien werden &uuml;ber die SOAP-Technologie herunter geladen, auf Integrit&auml;t &uuml;berpr&uuml;ft und automatisch entpackt.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Zur Verwendung dieses Moduls ben&ouml;tigen Sie die Berechtigung &#039;Modify Modules&#039; und die URL einer &#039;ModuleRepository&#039;-Installation. Diese URL k&ouml;nnen Sie auf der Seite &#039;Erweiterungen > ModulManager > Einstellungen&#039; festlegen.</p><br />
<p>Die Administration dieses Moduls finden Sie im Men&uuml; &#039;Erweiterungen&#039;. Bei Auswahl dieses Moduls wird automatisch eine Liste der verf&uuml;gbaren XML-Module abgefragt.  Diese Liste wird auf die Liste der aktuell installierten Module referenziert und eine Zusammenfassung angezeigt. Sie k&ouml;nnen sich die Beschreibung und die Hilfe der zu Module anzeigen lassen, ohne diese installieren zu m&uuml;ssen. Von hier aus k&ouml;nnen die Module dann auch installiert oder aktualisiert werden.</p>
<h3>Support</h3>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>
<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['utma'] = '156861353.448336968.1277008087.1277008087.1277008087.1';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1277008087.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>
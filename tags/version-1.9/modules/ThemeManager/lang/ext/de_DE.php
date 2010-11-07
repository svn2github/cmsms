<?php
$lang['error_uploadpermissions'] = '<strong>WARNUNG:</strong> Sie sind nicht berechtigt, Themes hochzuladen oder zu installieren. Entweder sind die Rechte f&uuml;r die Unterverzeichnisse im Uploads- oder Modul-Verzeichnis nicht gesetzt, oder der Safe-Modus Ihres Servers ist aktiviert.';
$lang['error_nomenumanager'] = 'Das Men&uuml;Manager-Modul wurde nicht gefunden.';
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Theme exportieren als:';
$lang['info_themename'] = 'In diesem Feld k&ouml;nnen Sie den Namen festlegen, unter dem dieses Theme exportiert werden soll (unabh&auml;ngig vom Namen des Themes in Ihrem System).';
$lang['error_editingproblem'] = 'Beim Entfernen und Wechsel der angegebenen Dateien in diesem Theme ist ein Problem aufgetreten.';
$lang['error_problemsavingincludes'] = 'Beim Speichern der Dateien, die in diesem Theme enthalten sind, ist ein Problem aufgetreten.';
$lang['error_nofilesuploaded'] = 'Es wurden keine Dateien hochgeladen. Stellen Sie sicher, dass die Kodierung Ihres form-Tags auf multipart/form-data gesetzt wurde und dass das richtige Feld auf hochgeladene Dateien &uuml;berpr&uuml;ft wird.';
$lang['error_templateexists'] = 'Ein Template mit dem Namen &#039;%s&#039; existiert bereits.';
$lang['error_stylesheetexists'] = 'Ein Stylesheet mit dem Namen &#039;%s&#039; existiert bereits.';
$lang['error_nostylesheets'] = 'In diesem Theme wurden keine Stylesheets gefunden.';
$lang['error_couldnotcreatetemplate'] = 'Die Template-Definition konnte nicht erstellt werden.';
$lang['error_couldnotassoccss'] = 'Problem beim Verbinden des Sylesheets mit dem Template';
$lang['error_nooutput'] = 'Nichts zum Ausgeben';
$lang['error_notemplate'] = 'Konnte das Template nicht finden';
$lang['error_dtdmismatch'] = 'Die DTD-Version stimmt nicht &uuml;berein, konnte das Theme nicht importieren!';
$lang['import'] = 'Importieren';
$lang['upload'] = 'Theme hochladen';
$lang['id'] = 'ID';
$lang['name'] = 'Name ';
$lang['export'] = 'Exportieren';
$lang['submit'] = 'Abschicken';
$lang['friendlyname'] = 'ThemeManager';
$lang['postinstall'] = 'Stellen Sie sicher, dass zur Verwendung dieses Moduls die Berechtigung &quot;Manage Themes&quot; gesetzt wurde!';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['prefsupdated'] = 'Moduleinstellungen aktualisiert.';
$lang['accessdenied'] = 'Zugriff verweigert! Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert .';
$lang['moddescription'] = 'Ein Modul zum Im- und Exportieren von Themes (Templates und Stylesheets)';
$lang['import_succeeded'] = 'Das Theme wurde erfolgreich importiert';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Mit diesem Modul k&ouml;nnen Sie Templates und die mit ihnen verbundenen Stylesheets als &quot;Themes&quot; im- und exportieren, so dass Sie Ihr Theme auch an andere CMSms-Anwender weitergeben k&ouml;nnen.</p
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul hat keine Oberfl&auml;che f&uuml;r den Besucher der Webseite, sondern nur eine Administration. W&auml;hlen Sie ein existierendes (aktives) Template aus und klicken auf &quot;Exportieren&quot;. Daraufhin wird eine XML-Datei erstellt, die das Template und die mit ihr verbundenen Stylesheets enth&auml;lt, und Ihnen anschlie&szlig;end zum Herunterladen angeboten.</p>
<p><strong>Hinweis:</strong> Wenn das Template des Men&uuml;Managers mitexportiert werden soll, muss dieses Template zuvor im Men&uuml;Manager in die Datenbank importiert werden (siehe Hilfe des MenuManager-Moduls). Wurde im Template nur ein Verweis auf eine Template-Datei eingetragen (<em>(also z.Bsp. {menu template=&#039;simple_navigation<strong>.tpl</strong>&#039;}), wird dies nicht mit exportiert.</p>
<p>Umgekehrt existiert die gleiche Funktionalit&auml;t. Sie k&ouml;nnen eine Theme-Datei im XML-Format hochladen. Das darin enthaltene Templates und das Stylesheets werden dann automatisch in Ihr System importiert.</p>
<p><strong>Hinweis:</strong> Nach dem Import des Templates muss dieses noch aktiviert werden (Men&uuml; Layout > Templates), bevor es bei der Seitenbearbeitung ausgew&auml;hlt werden kann.</p>
<h3>Berechtigungen</h3>
<p>Um die Integrit&auml;t der Datenbank zu sichern, verwendet das ThemeManager-Modul ein strenges Berechtigungskonzept. F&uuml;r den Export von Themes ist die Berechtigung &quot;Manage Themes&quot; erforderlich. F&uuml;r den Import von Themes werden die drei Berechtigungen &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot; und &quot;Add Templates&quot;) ben&ouml;tigt.</p>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte die Modul-Homepage unter <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Weitere Diskussionen zu diesem Modul sind auch in den Foren von <a href="http://forum.cmsmadesimple.org">CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000 ist h&auml;ufig im <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte Email.</li>    
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den
 Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['qca'] = 'P0-617342851-1252404665837';
$lang['utma'] = '156861353.343462282.1252405474.1252405474.1252408135.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1252405474.1.1.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
?>
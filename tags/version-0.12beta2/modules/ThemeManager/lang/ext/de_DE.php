<?php
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Theme-Name:';
$lang['error_editingproblem'] = 'Problem beim Entfernen und Wechsel der angegebenen Dateien un diesem Theme.';
$lang['error_problemsavingincludes'] = 'Problem beim Speichern der Dateien, die in diesem Theme kodiert sind.';
$lang['error_nofilesuploaded'] = 'Es wurden keine Dateien hochgeladen. Stellen Sie sicher, dass die Kodierung ihres form-Tags auf multipart/form-data gesetzt wurde und dass das richtige Feld auf hochgeladene Dateien überprüft wird.';
$lang['error_templateexists'] = 'Ein Template mit dem Namen "%s" existiert bereits.';
$lang['error_stylesheetexists'] = 'Ein Stylesheet mit dem namen "%s" existiert bereits.';
$lang['error_nostylesheets'] = 'F&uuml;r dieses Theme konnte kein Stylesheets ermittelt werden.';
$lang['error_couldnotcreatetemplate'] = 'Die Template-Definition konnte nicht erstellt werden.';
$lang['error_couldnotassoccss'] = 'Problem bei der Verbindung des Sylesheets mit dem Template';
$lang['error_nooutput'] = 'Nichts zum Ausgeben';
$lang['error_notemplate'] = 'Konnte das Template nicht finden';
$lang['error_dtdmismatch'] = 'Die DTD-Version stimmt nicht &uuml;berein, konnte das Theme nicht importieren!';
$lang['import'] = 'Import';
$lang['upload'] = 'Theme hochladen';
$lang['id'] = 'ID';
$lang['name'] = 'Name';
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['export'] = 'Export';
$lang['submit'] = 'Abschicken';
$lang['friendlyname'] = 'Theme Manager';
$lang['postinstall'] = 'Stellen Sie sicher, dass User, welche Themes importieren/exportieren d&uuml;rfen, die Berechtigung "Manage Themes" haben!';
$lang['postuninstall'] = '"So ein Mist! Wieder nichts!"';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['prefsupdated'] = 'Moduleinstellungen aktualisiert.';
$lang['accessdenied'] = 'Zugriff verweigert! Bitte &uuml;berpr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Modul aktualisiert auf Version %s.';
$lang['moddescription'] = 'Ein Modul, welches den Im- und Export des Themes erm&ouml;glicht (Templates und Stylesheets)';
$lang['changelog'] = '<ul>
<li>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Dieses Modul erm&ouml;glicht den Import und Export von Templates und den mit Ihnen verbundenen Stylesheets, so dass Sie Ihr Template ganz einfach an andere CMSms-User weitergeben k&ouml;nnen.</p
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul hat keine Oberfl&auml;che f&uuml;r den Besucher, sondern nur f&uuml;r den Administrator. Sie k&ouml;nnen dort ein existierendes (aktives) Template ausw&auml;hlen und dieses mit einem Klick auf "Export" exportieren. Daraufhin wird eine XML-Datei erstellt, welche das Template und das mit ihr verbundene Stylesheets enth&auml;lt. Diese Theme-Datei wird Ihnen anschlie&szlig;end per Download zugesandt.</p>
<h3>Berechtigungen</h3>
<p>Um die Integrität der Datenbank zu sichern, ist das Berechtigungskonzept für den ThemeManager streng. Die Berechtigung "Manage Themes" ist für den Export von Themes erforderlich. Für den Import von Themes werden die drei Berechtigungen "Add Stylesheets", "Add StyleSheet Assocations" und "Add Templates") benouml;tigt.</p>
<p>Umgekehrt existiert die gleiche Funktionalit&auml;t. Sie k&ouml;nnen eine Theme-Datei (XML Format) hochladen. Das darin enthaltene Templates und das Stylesheets werden dann automatisch in Ihre CMSms-Installation importiert.</p>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte calguys Homepage unter <a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href="http://forum.cmsmadesimple.org">CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000, ist h&auml;ufig im <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte Email.</li>    
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den
 Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright and Lizenz</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com">&lt;calguy1000@hotmail.com&gt;</a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>
';
?>

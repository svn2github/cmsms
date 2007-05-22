<?php
$lang['error_uploadpermissions'] = '<strong>WARNUNG:</strong> Ihre Berechtigung ist nicht ausreichend, um Themes hochzuladen oder zu installieren. Entweder sind die Rechte f&uuml;r die Unterverzeichnisse im Uploads- oder Modul-Verzeichnis nicht gesetzt, oder der Safe-Modus Ihres Servers ist aktiviert.';
$lang['error_nomenumanager'] = 'Das MenuManager-Modul wurde nicht gefunden.';
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Das Theme exportieren als:';
$lang['info_themename'] = 'In diesem Feld k&ouml;nnen Sie den Namen festlegen, unter dem dieses Theme exportiert werden soll (unabh&auml;ngig vom Namen des Themes in Ihrem System).';
$lang['error_editingproblem'] = 'Problem beim Entfernen und Wechsel der angegebenen Dateien in diesem Theme.';
$lang['error_problemsavingincludes'] = 'Problem beim Speichern der Dateien, die in diesem Theme enthalten sind.';
$lang['error_nofilesuploaded'] = 'Es wurden keine Dateien hochgeladen. Stellen Sie sicher, dass die Kodierung Ihres form-Tags auf multipart/form-data gesetzt wurde und dass das richtige Feld auf hochgeladene Dateien &uuml;berpr&uuml;ft wird.';
$lang['error_templateexists'] = 'Ein Template mit dem Namen &quot;%s&quot; existiert bereits.';
$lang['error_stylesheetexists'] = 'Ein Stylesheet mit dem Namen &quot;%s&quot; existiert bereits.';
$lang['error_nostylesheets'] = 'In diesem Theme wurden keine Stylesheets gefunden.';
$lang['error_couldnotcreatetemplate'] = 'Die Template-Definition konnte nicht erstellt werden.';
$lang['error_couldnotassoccss'] = 'Problem beim Verbinden des Sylesheets mit dem Template';
$lang['error_nooutput'] = 'Nichts zum Ausgeben';
$lang['error_notemplate'] = 'Konnte das Template nicht finden';
$lang['error_dtdmismatch'] = 'Die DTD-Version stimmt nicht &uuml;berein, konnte das Theme nicht importieren!';
$lang['import'] = 'Importieren';
$lang['upload'] = 'Theme hochladen';
$lang['id'] = 'ID';
$lang['name'] = 'Name';
$lang['export'] = 'Exportieren';
$lang['submit'] = 'Abschicken';
$lang['friendlyname'] = 'ThemeManager';
$lang['postinstall'] = 'Stellen Sie sicher, dass zur Verwendung dieses Moduls die Berechtigung &quot;Manage Themes&quot; gesetzt wurde!';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['prefsupdated'] = 'Moduleinstellungen aktualisiert.';
$lang['accessdenied'] = 'Zugriff verweigert! Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Modul auf Version % saktualisiert .';
$lang['moddescription'] = 'Ein Modul zum Im- und Exportieren von Themes (Templates und Stylesheets)';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylesheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
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
<p>Mit diesem Modul k&ouml;nnen Sie Templates und die mit ihnen verbundenen Stylesheets als &quot;Themes&quot; im- und exportieren, so dass Sie Ihr Theme auch an andere CMSms-User weitergeben k&ouml;nnen.</p
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul hat keine Oberfl&auml;che f&uuml;r den Besucher, sondern nur eine Administration. W&auml;hlen Sie ein existierendes (aktives) Template aus und klicken auf &quot;Exportieren&quot;. Daraufhin wird eine XML-Datei erstellt, die das Template und die mit ihr verbundenen Stylesheets enth&auml;lt, und Ihnen anschlie&szlig;end als Download zugesandt.</p>
<p>Umgekehrt existiert die gleiche Funktionalit&auml;t. Sie k&ouml;nnen eine Theme-Datei im XML-Format hochladen. Das darin enthaltene Templates und das Stylesheets werden dann automatisch in Ihr System importiert.</p>
<h3>Berechtigungen</h3>
<p>Um die Integrit&auml;t der Datenbank zu sichern, ist das Berechtigungskonzept f&uuml;r den ThemeManager streng. F&uuml;r den Export von Themes ist die Berechtigung &quot;Manage Themes&quot; erforderlich. F&uuml;r den Import von Themes werden die drei Berechtigungen &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot; und &quot;Add Templates&quot;) ben&ouml;tigt.</p>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte calguys Homepage unter <a href=&quot;http://techcom.dyndns.org&quot;>techcom.dyndns.org</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000, ist h&auml;ufig im <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte Email.</li>    
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den
 Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['utma'] = '156861353.717462736.1147511856.1176742330.1176744343.136';
$lang['utmz'] = '156861353.1176742330.135.82.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,11359.msg57478/topicseen.html|utmcmd=referral';
?>
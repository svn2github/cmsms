<?php
$lang['error_nomenumanager'] = 'Modulen Menu Manager hittades inte';
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Tema:';
$lang['info_themename'] = 'Detta f&auml;ltet &auml;r f&ouml;r namnet p&aring; temat som exporteras, oavsett vad temats namn var vid import';
$lang['error_editingproblem'] = 'Problem att rensa upp och &auml;ndra filerna som detta tema refererar till.';
$lang['error_problemsavingincludes'] = 'Problem att spara filer som kodats (encoded) i temat.';
$lang['error_nofilesuploaded'] = 'Inga filer laddades upp. Kontrollera att din formul&auml;rtaggs enctype (avkodningstype) &auml;r satt till multipart/form-data och att det h&ouml;gra f&auml;ltet &auml;r ikryssat f&ouml;r den uppladdade filen.';
$lang['error_templateexists'] = 'En mall med namnet &quot;%s&quot; finns redan';
$lang['error_stylesheetexists'] = 'En stilmall med namnet &quot;%s&quot; finns redan';
$lang['error_nostylesheets'] = 'Inga stilmallar hittades i det h&auml;r temat';
$lang['error_couldnotcreatetemplate'] = 'Kunde inte skapa malldefinitionen';
$lang['error_couldnotassoccss'] = 'Problem att koppla stilmallar med mallen';
$lang['error_nooutput'] = 'Inga data att skicka';
$lang['error_notemplate'] = 'Kunde inte hitta mall';
$lang['error_dtdmismatch'] = 'DTD-versionen st&auml;mmer inte, kan inte importera';
$lang['import'] = 'Importera';
$lang['upload'] = 'Ladda upp tema';
$lang['id'] = 'Id';
$lang['name'] = 'Namn';
$lang['export'] = 'Exportera';
$lang['submit'] = 'Skicka';
$lang['friendlyname'] = 'Temahanterare';
$lang['postinstall'] = 'Gl&ouml;m inte att st&auml;lla in r&auml;ttigheten &quot;Manage Themes&quot; f&ouml;r att anv&auml;nda den h&auml;r modulen!';
$lang['postuninstall'] = '&quot;Oh no, besegrad igen!&quot;';
$lang['uninstalled'] = 'Modulen har avinstallerats.';
$lang['installed'] = 'Modul med versionsnummer %s &auml;r installerad.';
$lang['prefsupdated'] = 'Modulinst&auml;llningar uppdaterade.';
$lang['accessdenied'] = 'Tillst&aring;nd nekat. V&auml;nligen kontrollera dina r&auml;ttigheter.';
$lang['error'] = 'Fel!';
$lang['upgraded'] = 'Modulen upgraderad till version %s.';
$lang['moddescription'] = 'En modul som g&ouml;r det m&ouml;jligt att importera och exportera inneh&aring;llsteman (mallar och sidmallar)';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. Januari, 2006</p>
<p>Fixade flera mallar i en xml-fil, la till CSS till mallkopplingar i xml-filen, fixade n&aring;gra URL-parsing i CSS-filer, och n&aring;gra spr&aring;kstr&auml;ngar (tack Pat)</p>
<p><strong>Note:</strong> XML-filer skapade med &auml;ldre versioner av Theme Manager kommer <em>&aring;terigen</em> inte att importeras. Detta &auml;r pga &auml;ndring i DTD-versionering, och detta &auml;r en s&auml;kerhets&aring;tg&auml;rd. Ledsen f&ouml;r det.</p>
</li>
<li><p>Version 1.0.4. Januari, 2006</p>
<p>Ser till att samma mall, stilmall eller fil bara kommer med en g&aring;ng (eller f&ouml;rs&ouml;ker s&aring; gott det g&aring;r) och la till en DTD-versionstagg till utmatningen. Ocks&aring; en mycket striktare modell f&ouml;r r&auml;ttigheterna. Tog ocks&aring; bort extra debug-meddelanden.</p>
<p><strong>Note:</strong> XML-filer skapade med &auml;ldre versioner av Theme Manager kommer inte att importeras. Detta &auml;r pga &auml;ndring i DTD-versionering, och detta &auml;r en s&auml;kerhets&aring;tg&auml;rd. Ledsen f&ouml;r det.</p>
</li>
<li><p>Version 1.0.3. Januari, 2006</p>
<p>St&ouml;djer nu flera mallar i ett tema, rekursivt skapande av katalog (dvs. s&ouml;kv&auml;g med underkataloger), och base64-kodning f&ouml;r alla stilmallar och mallar.</p>
</li>
<li><p>Version 1.0.2. December, 2005 - Hanterar nu inkluderade bilder och javascript i b&aring;de stilmallarna och mallarna. N&auml;r de &aring;terst&auml;lls &aring;terst&auml;lls filerna till en katalog som skapas under uploads/temanamn.</p></li>
<li>Version 1.0.1. December, 2005 - Fixade beroenden, hj&auml;lpen, och allm&auml;n upprensning.</li>
<li>Version 1.0.0. 31 November, 2005 - F&ouml;rsta utg&aring;van.</li>
</ul>';
$lang['help'] = '<h3>Vad g&ouml;r den h&auml;r modulen?</h3>
<p>Den h&auml;r modulen l&aring;ter dig importera och exportera mallar och deras kopplade stilmallar som &quot;teman&quot;. Den l&aring;ter dig dela din layou och design med andra CMSMS-anv&auml;ndare.</p>
<h3>Hur anv&auml;nder jag den?</h3>
<p>Den h&auml;r modulen har inget frontendgr&auml;nssnitt, bara ett administrationsgr&auml;nssnitt. D&auml;r kan du v&auml;lja en existerande (aktiv) mall och klicka p&aring; &quot;Exportera&quot;. En XML-fil som inneh&aring;ller mallen och de stilmallar som &auml;r kopplade till den skapas och skickas till dig via nedladdning.</p>
<p>Dessutom finns den motsatta funktionen, du kan ladda upp en temafil (i XML-format) och f&aring; mallarna och stilmallarna importerade automatiskt till din CMSMS-installation.</p>
<h3>R&auml;ttigheter</h3>
<p>R&auml;ttighetsmodellen &auml;r strikt f&ouml;r Theme Manager f&ouml;r att f&ouml;rs&auml;kra databasintegritet. R&auml;ttigheten &quot;Manage Themes&quot; kr&auml;vs f&ouml;r att exportera teman, och de tre r&auml;ttigheterna &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Associations&quot; och &quot;Add Templates&quot; kr&auml;vs f&ouml;r att kunan importera ett tema.</p>
<h3>Support</h3>
<p>F&ouml;r den h&auml;r modulen ing&aring;r inte kommersiell support. Men det finns flera s&auml;tt att f&aring; hj&auml;lp:</p>
<ul>
<li>F&ouml;r senaste versionen av den h&auml;r modulen, Vanliga Fr&aring;gor, eller l&auml;mna buggrapport eller k&ouml;pa kommersiell support, bes&ouml;k SjG\&#039;s
modulhemsida p&aring; <a href=&quot;<p>F&ouml;r den h&auml;r modulen ing&aring;r inte kommersiell support. Men det finns flera s&auml;tt att f&aring; hj&auml;lp:</p>
<ul>
<li>F&ouml;r senaste versionen av den h&auml;r modulen, Vanliga Fr&aring;gor, eller l&auml;mna buggrapport eller k&ouml;pa kommersiell support, bes&ouml;k modulens hemsida p&aring; <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Mer diskussion om den h&auml;r modulen kan hittas p&aring; <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple\&#039;s forum</a>.</li>
<li>F&ouml;rfattaren, calguy1000, hittas ofta p&aring; <a href=&quot;irc://irc.freenode.net/#cms&quot;>IRC-kanalen CMS</a>.</li>
<li>Slutligen, du kan ha viss framg&aring;ng genom att skicka e-post direkt till f&ouml;rfattaren.</li>  
</ul>
<p>Enligt GPL erbjuds den h&auml;r mjukvaran som den &auml;r. V&auml;nligen l&auml;s licenstexten nedan.</p>.

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alla r&auml;ttigheter reserverade.</p>
<p>Den h&auml;r modulen &auml;r utgiven under <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. Du m&aring;ste godk&auml;nna denna licens innan du anv&auml;nder modulen.</p>
';
$lang['utmz'] = '156861353.1157183171.1.1.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utma'] = '156861353.760159704.1157183171.1157235643.1157811247.4';
$lang['utmc'] = '156861353';
?>
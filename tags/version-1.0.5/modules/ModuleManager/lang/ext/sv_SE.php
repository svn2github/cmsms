<?php
$lang['prompt_settings'] = 'Inst&auml;llningar';
$lang['prompt_otheroptions'] = 'Andra alternativ';
$lang['reset'] = '&Aring;terst&auml;ll';
$lang['error_minimumrepository'] = 'Versionen f&ouml;r lagringsplatsen (repository) &auml;r inte kompatibel med den h&auml;r versionen av Modulehanteraren';
$lang['prompt_reseturl'] = '&Aring;terst&auml;ll URL till standardinst&auml;llningen';
$lang['prompt_resetcache'] = '&Aring;terst&auml;ll den lokala cachen f&ouml;r data fr&aring;n lagringsplatsen';
$lang['prompt_dl_chunksize'] = 'Storlek p&aring; nedladdningsstycke (Kb)';
$lang['text_dl_chunksize'] = 'Maximal storlek p&aring; data att ladda ner fr&aring;n servern i ett stycke (n&auml;r en modul installeras)';
$lang['error_nofilesize'] = 'Inga filstorleksparametrar angivna';
$lang['error_nofilename'] = 'Inga filnamnsparametrar angivna';
$lang['error_checksum'] = 'Checksum-fel. Detta inneb&auml;r troligen att det &auml;r fel p&aring; filen, antingen n&auml;r den laddades upp till lagringsplatsen eller ett problem vid &ouml;verf&ouml;ringen till din dator.';
$lang['cantdownload'] = 'Kan inte ladda ner';
$lang['download'] = 'Ladda ner &amp; installera';
$lang['error_moduleinstallfailed'] = 'Installation av modul misslyckades';
$lang['error_connectnomodules'] = '&Auml;ven om en anslutning till den angivna lagringsplatsen lyckades verkar det som att den h&auml;r lagringsplatsen inte &auml;nnu delar n&aring;gra moduler';
$lang['submit'] = 'Skicka';
$lang['text_repository_url'] = 'URL-adressen ska vara i formen http://www.mincmssida.com/s&ouml;kv&auml;g/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL-adress f&ouml;r modul-lagringsplats';
$lang['availmodules'] = 'Tillg&auml;ngliga moduler';
$lang['preferences'] = 'Inst&auml;llningar';
$lang['repositorycount'] = 'Moduler som hittades p&aring; lagringsplatsen';
$lang['instcount'] = 'Moduler som &auml;r installerade';
$lang['availablemodules'] = 'Nuvarande status f&ouml;r moduler som &auml;r tillg&auml;ngliga fr&aring;n den nuvarande lagringsplatsen';
$lang['helptxt'] = 'Hj&auml;lp';
$lang['abouttxt'] = 'Om';
$lang['xmltext'] = 'XML-fil';
$lang['nametext'] = 'Modulnamn';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'Storlek (kilobyte)';
$lang['statustext'] = 'Status/&Aring;tg&auml;rd';
$lang['uptodate'] = 'Installerad';
$lang['install'] = 'installera';
$lang['newerversion'] = 'Nyare version installerad';
$lang['upgrade'] = 'Uppgradera';
$lang['error_nosoapconnect'] = 'Kunde inte ansluta till SOAP-servern';
$lang['error_soaperror'] = 'SOAP-problem';
$lang['error_norepositoryurl'] = 'URL-adressen f&ouml;r modul-lagringsplatsen har inte angetts';
$lang['friendlyname'] = 'Modulhanterare';
$lang['postinstall'] = 'Post Install Message, (e.g., Be sure to set &quot;&quot; permissions to use this module!)';
$lang['postuninstall'] = 'Modulhanteraren har avinstallerats. Anv&auml;ndare kommer inte l&auml;ngre kunna installera moduler fr&aring;n externa lagringsplatser. Lokala installationer &auml;r fortfarande m&ouml;jliga.';
$lang['really_uninstall'] = '&Auml;r du s&auml;ker p&aring; att du vill avinstallera? Du kommer att g&aring; miste om en hel del bra funktioner.';
$lang['uninstalled'] = 'Modul avinstallerad.';
$lang['installed'] = 'Modul med versionsnummer %s &auml;r installerad.';
$lang['upgraded'] = 'Modul uppgraderad till version %s.';
$lang['moddescription'] = 'Den h&auml;r modulen &auml;r en klient till modulen ModuleRepository (modul-lagringsplats). Du kan med denna modul f&ouml;rhandsgranska och installera moduler fr&aring;n externa sajter utan att beh&ouml;va anv&auml;nda FTP eller packa upp arkivfiler. XML-filer laddas ner med hj&auml;lp av SOAP, integritetsverifierade, och packas sedan upp automatiskt.';
$lang['error'] = 'Fel!';
$lang['admindescription'] = 'Ett verktyg f&ouml;r att ladda ner och installera moduler fr&aring;n externa servrar.';
$lang['accessdenied'] = '&Aring;tkomst nekad. Var god kontrollera dina r&auml;ttigheter.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
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
</ul>';
$lang['help'] = '<h3>Vad g&ouml;r den h&auml;r modulen?</h3>
<p>Den h&auml;r modulen &auml;r en klient till modulen ModuleRepository (modul-lagringsplats). Du kan med denna modul f&ouml;rhandsgranska och installera moduler fr&aring;n externa sajter utan att beh&ouml;va anv&auml;nda FTP eller packa upp arkivfiler. XML-filer laddas ner med hj&auml;lp av SOAP, integritetsverifierade, och packas sedan upp automatiskt.</p>
<h3>Hur anv&auml;nder jag modulen?</h3>
<p>F&ouml;r att anv&auml;nda den h&auml;r modulen beh&ouml;ver du r&auml;ttigheten &#039;Modify Modules&#039;. Du beh&ouml;ver ocks&aring; den fullst&auml;ndiga URL-adressen till en installation av modulen &#039;Module Repository&#039;. Du kan ange denna URL i &#039;Webbplatsadmin&#039; --&amp;gt; sidan &#039;Globala inst&auml;llningar&#039;.</p>
<p>Du hittar gr&auml;nssnittet f&ouml;r den h&auml;r modulen under menyn &#039;Till&auml;gg&#039;. N&auml;r du v&auml;ljer den h&auml;r modulen kommer installationen av &#039;Module Repository&#039; automatiskt att fr&aring;gas efter en lista av dess tillg&auml;ngliga xml-moduler. Denna listan j&auml;mf&ouml;rs med listan av redan installerade moduler, och en sammanfattningssida visas. H&auml;rifr&aring;n kan du se beskrivning, hj&auml;lp och om-informationen f&ouml;r en modul utan att fysiskt installera den. Du kan ocks&aring; v&auml;lja att uppgradera eller installera moduler.</p>

<h3>Support</h3>
<p>Enligt GPL erbjuds den h&auml;r mjukvaran som den &auml;r. V&auml;nligen l&auml;s licenstexten f&ouml;r att se vad som g&auml;ller.</p>
<h3>Copyright och licens</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alla R&auml;ttigheter Reserverade.</p>
<p>Den h&auml;r modulen har sl&auml;ppts under <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>den allm&auml;nna GNU-licensen</a>. Du m&aring;ste godk&auml;nna den licensen innan du anv&auml;nder modulen.</p>';
$lang['utma'] = '156861353.760159704.1157183171.1158423114.1158427457.7';
$lang['utmz'] = '156861353.1158423114.6.3.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
?>
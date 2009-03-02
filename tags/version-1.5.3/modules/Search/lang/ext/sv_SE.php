<?php
$lang['word'] = 'Ord';
$lang['count'] = 'Antal';
$lang['confirm_clearstats'] = '&Auml;r du s&auml;ker p&aring; att du vill rensa all statistik permanent?';
$lang['clear'] = 'Rensa';
$lang['statistics'] = 'Statistik';
$lang['param_action'] = 'Ange vilket s&auml;tt som modulen ska anv&auml;ndas p&aring;. Accepterade v&auml;rden &auml;r &#039;default&#039; (standard) och &#039;keywords&#039; (nyckelord). Nyckelord kan anv&auml;ndas f&ouml;r att generera en kommaseparerad lista med ord som &auml;r anv&auml;ndbara som nyckelord i metataggar.';
$lang['param_count'] = 'Denna parameter anv&auml;nds tillsammans med nyckelord (keywords) f&ouml;r att begr&auml;nsa resultatet till det angivna antalet ord.';
$lang['param_pageid'] = 'Denna parameter anv&auml;nds endast tillsammans med nyckelord (keywords) f&ouml;r att ange ett annat sid-ID att returnera resultaten f&ouml;r.';
$lang['param_inline'] = 'Om sant kommer utdatat fr&aring;n s&ouml;kformul&auml;ret ers&auml;tta det ursprungliga inneh&aring;llet fr&aring;n &#039;search&#039;-taggen i det ursprungliga inneh&aring;llsblocket. Anv&auml;nd den h&auml;r parametern om din mall har flera inneh&aring;llsblock, och om du inte vill att utdatat fr&aring;n s&ouml;kningen ska ers&auml;tta det f&ouml;rvalda inneh&aring;llsblocket';
$lang['param_passthru'] = 'Skicka namnsatta parametrar till specifika moduler. Formatat p&aring; respektive parameter &auml;r : &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot;. Exempel: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Begr&auml;nsa s&ouml;kresultatet till v&auml;rden som indexerats i den specificerade modullistan (kommaseparerad).';
$lang['searchsubmit'] = 'Skicka';
$lang['search'] = 'S&ouml;k';
$lang['param_submit'] = 'Text f&ouml;r skicka-knappen';
$lang['param_searchtext'] = 'Text inne i s&ouml;kf&auml;ltet';
$lang['prompt_searchtext'] = 'Standards&ouml;ktext';
$lang['param_resultpage'] = 'Sida att visa s&ouml;kresultaten p&aring;. Detta kan antingen vara ett sidalias eller ett id. Anv&auml;nds f&ouml;r att s&ouml;kresultaten ska visas med en annan mall &auml;n den d&auml;r s&ouml;kformul&auml;ret finns.';
$lang['description'] = 'Modul f&ouml;r att s&ouml;ka en webbplats och andra modulers inneh&aring;ll';
$lang['reindexallcontent'] = 'Omindexera allt inneh&aring;ll';
$lang['reindexcomplete'] = 'Omindexering utf&ouml;rd!';
$lang['stopwords'] = 'Stoppord (som inte kommer med i s&ouml;kningen)';
$lang['searchresultsfor'] = 'S&ouml;k resultat efter';
$lang['noresultsfound'] = 'Inga resultat funna!';
$lang['timetaken'] = 'Tid f&ouml;r s&ouml;kning';
$lang['usestemming'] = 'Ta bort ord&auml;ndelser (enbart engelska)';
$lang['searchtemplate'] = 'S&ouml;kmall';
$lang['resulttemplate'] = 'Resultatmall';
$lang['submit'] = 'Skicka';
$lang['sysdefaults'] = '&Aring;terst&auml;ll standardinst&auml;llningar';
$lang['searchtemplateupdated'] = 'S&ouml;kmall uppdaterad';
$lang['resulttemplateupdated'] = 'Resultatmall uppdaterad';
$lang['restoretodefaultsmsg'] = 'Denna &aring;tg&auml;rd kommer att &aring;terst&auml;lla mallinneh&aring;llet till standardinst&auml;llningarna. &Auml;r du s&auml;ker p&aring; att du vill forts&auml;tta?';
$lang['options'] = 'Inst&auml;llningar';
$lang['eventdesc-SearchInitiated'] = 'Skickas n&auml;r en s&ouml;kning p&aring;b&ouml;rjas.';
$lang['eventdesc-SearchCompleted'] = 'Skickas n&auml;r en s&ouml;kning &auml;r avslutad.';
$lang['eventdesc-SearchItemAdded'] = 'Skickas n&auml;r en ny post indexeras.';
$lang['eventdesc-SearchItemDeleted'] = 'Skickas n&auml;r en ny post tas bort fr&aring;n indexet.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Skickas n&auml;r alla poster tas bort fr&aring;n indexet.';
$lang['eventhelp-SearchInitiated'] = '<p>Skickas n&auml;r en s&ouml;kning p&aring;b&ouml;rjas.</p>
<h4>Parametrar</h4>
<ol>
<li>Text som s&ouml;ktes efter.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Skickas n&auml;r en s&ouml;kning &auml;r avslutad.</p>
<h4>Parametrar</h4>
<ol>
<li>Text som s&ouml;ktes efter.</li>
<li>Array med de f&auml;rdiga resultaten av s&ouml;kningen.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Skickas n&auml;r en ny post indexeras.</p>
<h4>Parametrar</h4>
<ol>
<li>Modulnamn.</li>
<li>Pstens ID.</li>
<li>&Ouml;vriga attribut.</li>
<li>Inneh&aring;ll att indexera och l&auml;gga till.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Skickas n&auml;r en ny post tas bort fr&aring;n indexet.</p>
<h4>Parametrar</h4>
<ol>
<li>Modulnamn.</li>
<li>Postens ID.</li>
<li>&Ouml;vriga attribut.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Skickas n&auml;r en s&ouml;kning p&aring;b&ouml;rjas.</p>
<h4>Parametrar</h4>
<ul>
<li>Inga</li>
</ul>
';
$lang['help'] = '<h3>Vad g&ouml;r den h&auml;r modulen?</h3>
<p>S&ouml;k &auml;r en modul f&ouml;r att s&ouml;ka inneh&aring;ll p&aring; sidor, samt vissa registrerade moduler. Du skriver in ett ord eller tv&aring; och du f&aring;r upp matchande, relevanta resultat.</p>
<h3>Hur anv&auml;nder jag den?</h3>
<p>Det enklaste s&auml;ttet att anv&auml;nda modulen &auml;r med &quot;omslagstaggen&quot; {search} (omger modulen i en tagg, f&ouml;r att g&ouml;ra syntaxet enklare). Denna tagg l&auml;gger till din modul i mallen eller p&aring; sidan, d&auml;r du vill, och visar s&ouml;kformul&auml;ret. Koden kan t.ex. se ut s&aring; h&auml;r: <code>{search}</code></p>
<h4>Hur f&ouml;rhindrar jag visst inneh&aring;ll fr&aring;n att indexeras?</h4>
<p>S&ouml;kmodulen s&ouml;ker inte n&aring;gra &quot;inaktiva&quot; sidor. Men ibland, om du anv&auml;nder modulen CustomContent, eller annan smarty-logik f&ouml;r att visa olika inneh&aring;ll f&ouml;r olika grupper av anv&auml;ndare, rekommenderas att f&ouml;rhindra hela sidan fr&aring;n att indexeras &auml;ven n&auml;r den &auml;r aktiv. F&ouml;r att g&ouml;ra detta, l&auml;gg till f&ouml;ljande tagg var som helst p&aring; sidan: <em><!-- pageAttribute: NotSearchable --></em>. N&auml;r s&ouml;kmodulen ser den taggen p&aring; sidan kommer den inte att indexera n&aring;got inneh&aring;ll f&ouml;r den sidan.</p>
<p>Taggen <em><!-- pageAttribute: NotSearchable --></em> kan &auml;ven anv&auml;ndas i mallen. I s&aring; fall kommer inga sidor som anv&auml;nder den mallen att indexeras. De sidorna omindexeras om taggen tas bort.</p>
';
$lang['changelog'] = '<ul>
<li>1.1 - Ursprunglig utg&aring;va</li>
<li>1.2 - April 2007 (calguy1000)
  <p>la till m&ouml;jligheten att begr&auml;nsa resultat till vissa moduler, och skicka parametrar till moduler f&ouml;r att till&aring;ta olika formattering p&aring; utdatat.</p>
  <p>&Auml;ndrade s&aring; att s&ouml;kmodulen kan anv&auml;ndas i icke f&ouml;rvalda inneh&aring;llsblock.</p>
</li>
<li>1.3 - Maj 2007 (calguy1000)
  <p>Lade till anrop till SetParameterType</p>
</li>
<li>1.4 - Nov 2007 (calguy1000)
  <p>Adds the keywords action.</p>
  <p>Fixes a problem with using the resultpage parameter to a page that&#039;s template was dramatically different.</p>
</li>
<li>1.4.1 - Nov 2007 (calguy1000)
  <p>Minor fixes so that php tags, and punctuation characters are not indexed.</p>
  <p>Fix the VisibleToAdminUser method</p>
</li>
<li>1.5 - Mar 2008 (calguy1000)
  <p>Now gather statistics about the top most 50 frequently searched words.</p>
  <p>Addd the ability to display the statistics and clear them from the admin panel.</p>
  <p>Make it easier to style the search button, and its label.</p>
  <p>Now only index active pages</p>
</li>
<li>1.5.1 - July 2008 (calguy1000)
  <p>Minor changes to the template to restore behaviour that was there before 1.5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Minor optimizations and tweaks</p>
</li>
</ul>';
$lang['utmz'] = '156861353.1227392612.16.2.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/files/172';
$lang['utma'] = '156861353.1653674030.1227580662.1227730624.1227733581.3';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1227733581';
?>
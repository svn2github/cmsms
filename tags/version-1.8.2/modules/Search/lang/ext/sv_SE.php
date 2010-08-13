<?php
$lang['param_detailpage'] = 'Anv&auml;nds endast f&ouml;r matchande resultat fr&aring;n moduler, den h&auml;r parametern l&aring;ter specificera en annan detaljsida f&ouml;r resultaten. Det h&auml;r &auml;r anv&auml;ndbart om, exempelvis, du alltid har dina detaljvisningar p&aring; en sida med en avvikande mall. <em>(<strong>Notera:</strong> moduler har m&ouml;jligheten att &aring;sidos&auml;tta den h&auml;r parametern.)</em>';
$lang['prompt_resultpage'] = 'Sida f&ouml;r individuella modulresultat <em>(Notera att moduler frivilligt kan &aring;sidos&auml;tta detta)</em>';
$lang['search_method'] = 'Pretty Urls kompabilitet via POST metoden, grundinst&auml;llningen &auml;r alltid GET, f&ouml;r att f&aring; detta att fungera anv&auml;nd bara {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Exportera till CSV';
$lang['prompt_savephrases'] = 'Sp&aring;ra S&ouml;k fraser, inte individuella ord';
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
$lang['prompt_alpharesults'] = 'Sortera resultatet alfabetiskt ist&auml;llet f&ouml;r storlek';
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
$lang['qca'] = 'P0-245748072-1251504180990';
$lang['utmz'] = '156861353.1269352899.20.14.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
$lang['utma'] = '156861353.2917280715391859000.1251504181.1269540149.1269891113.22';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
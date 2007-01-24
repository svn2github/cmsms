<?php
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
$lang['utmz'] = '156861353.1157183171.1.1.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utma'] = '156861353.760159704.1157183171.1157235643.1157811247.4';
$lang['utmc'] = '156861353';
?>
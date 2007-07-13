<?php
$lang['uploadscategory'] = 'Uppladdningskategori';
$lang['title_available_templates'] = 'Tillg&auml;ngliga mallar';
$lang['resettodefault'] = '&Aring;terst&auml;ll till fabriksinst&auml;llningar';
$lang['title_detail_template'] = 'Redigerare f&ouml;r detaljmall';
$lang['title_summary_template'] = 'Redigerare f&ouml;r sammanfattningsmall';
$lang['prompt_templatename'] = 'Mallnamn';
$lang['prompt_template'] = 'Mallkod';
$lang['title_summary_sysdefault'] = 'Standardsammanfattningsmall';
$lang['title_detail_sysdefault'] = 'Standarddetaljmall';
$lang['info_sysdefault'] = '<em>(mall som anv&auml;nds som standard n&auml;r en ny mall v&auml;ljs)</em>';
$lang['template'] = 'Mall';
$lang['prompt_name'] = 'Namn';
$lang['prompt_default'] = 'Standard';
$lang['prompt_newtemplate'] = 'Skapa en ny mall';
$lang['help_pagelimit'] = 'Maximalt antal artiklar att visa (per sida). Om denna parametern inte anges kommer alla matchande artiklar att visas. Om parametern anges, och det finns fler artiklar &auml;n vad som anges i parametern, kommer text och l&auml;nkar l&auml;ggas till s&aring; att man kan navigera genom resultaten.';
$lang['prompt_page'] = 'Sida';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'av';
$lang['prompt_pagelimit'] = 'Sidmax';
$lang['prompt_sorting'] = 'Sortera efter';
$lang['title_filter'] = 'Filter';
$lang['published'] = 'Publicerad';
$lang['draft'] = 'Utkast';
$lang['expired'] = 'Utg&aring;ngen';
$lang['author'] = 'F&ouml;rfattare';
$lang['sysdefaults'] = '&Aring;terst&auml;ll standardinst&auml;llningar';
$lang['restoretodefaultsmsg'] = 'Detta &aring;terst&auml;ller mallarna till standardinst&auml;llningarna. &Auml;r du s&auml;ker p&aring; att du vill forts&auml;tta?';
$lang['addarticle'] = 'Skapa artikel';
$lang['articleadded'] = 'Artikeln har lagts till.';
$lang['articleupdated'] = 'Artikeln har uppdaterats.';
$lang['articledeleted'] = 'Artikeln har tagits bort.';
$lang['addcategory'] = 'Skapa kategori';
$lang['categoryadded'] = 'Kategorin har lagts till.';
$lang['categoryupdated'] = 'Kategorin har uppdaterats.';
$lang['categorydeleted'] = 'Kategorin har tagits bort.';
$lang['addnewsitem'] = 'Skapa nyhetsartikel';
$lang['allcategories'] = 'Alla kategorier';
$lang['allentries'] = 'Alla artiklar';
$lang['areyousure'] = '&Auml;r du s&auml;ker p&aring; att du vill ta bort?';
$lang['articles'] = 'Artiklar';
$lang['cancel'] = 'Avbryt';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategorier';
$lang['default_category'] = 'Standard-kategori';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
</li> 
<li>
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
<li>
<p>Version 2.2</p>
<p>- Added browsecat parameter
</li>
</ul> 
';
$lang['content'] = 'Inneh&aring;ll';
$lang['dateformat'] = '%s &auml;r inget giltigt yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Ta bort';
$lang['description'] = 'L&auml;gg till, redigera och ta bort nyhetsartiklar';
$lang['detailtemplate'] = 'Inneh&aring;llsmall';
$lang['detailtemplateupdated'] = 'Den uppdaterade inneh&aring;llsmallen har sparats till databasen.';
$lang['displaytemplate'] = 'Visa mall';
$lang['edit'] = 'Redigera';
$lang['enddate'] = 'Slutdatum';
$lang['endrequiresstart'] = 'Ett stoppdatum kr&auml;ver ocks&aring; att man anger ett startdatum';
$lang['entries'] = '%s artiklar';
$lang['status'] = 'Status';
$lang['expiry'] = 'Upph&ouml;rande';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mera';
$lang['category_label'] = 'Kategori:';
$lang['author_label'] = 'Skrivet av:';
$lang['moretext'] = 'Mera text';
$lang['name'] = 'Namn';
$lang['news'] = 'Nyheter';
$lang['news_return'] = 'Tillbaka';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du beh&ouml;ver r&auml;ttigheten &#039;%s&#039; f&ouml;r att g&ouml;ra detta.';
$lang['nocategorygiven'] = 'Ingen kategori angiven';
$lang['nocontentgiven'] = 'Inget inneh&aring;ll valt';
$lang['noitemsfound'] = 'Hittade <strong>inga</strong> artiklar i kategori: %s';
$lang['nopostdategiven'] = 'Inget publiceringsdatum angivet';
$lang['note'] = '<em>OBS:</em> Datum m&aring;ste vara p&aring; formatet &#039;yyyy-mm-dd hh:mm:ss&#039;.';
$lang['notitlegiven'] = 'Ingen titel angiven';
$lang['nonamegiven'] = 'Inget namn angett';
$lang['numbertodisplay'] = 'Max antal nyheter som ska visas (om tomt visas alla)';
$lang['print'] = 'Skriv ut';
$lang['postdate'] = 'Publiceringsdatum';
$lang['postinstall'] = 'Kom ih&aring;g att s&auml;tta r&auml;ttigheten &quot;Modify News&quot; f&ouml;r de anv&auml;ndare som ska administrera nyhetsartiklar.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS-str&ouml;m';
$lang['rsstemplate'] = 'RSS-mall';
$lang['selectcategory'] = 'V&auml;lj kategori';
$lang['showchildcategories'] = 'Visa underkategorier';
$lang['sortascending'] = 'Sortera stigande';
$lang['startdate'] = 'Startdatum';
$lang['startoffset'] = 'B&ouml;rja visa fr&aring;n nyhet nummer X';
$lang['startrequiresend'] = 'Ett startdatum kr&auml;ver ocks&aring; att man anger ett stoppdatum';
$lang['submit'] = 'L&auml;gg till';
$lang['summary'] = 'Sammandrag';
$lang['summarytemplate'] = 'Mall f&ouml;r sammandrag';
$lang['summarytemplateupdated'] = 'Nyhetsmallen f&ouml;r sammandrag har uppdaterats.';
$lang['title'] = 'Titel';
$lang['options'] = 'Inst&auml;llningar';
$lang['optionsupdated'] = 'Inst&auml;llningarna har uppdaterats.';
$lang['useexpiration'] = 'Anv&auml;nd stoppdatum';
$lang['showautodiscovery'] = 'Visa Auto Discovery-l&auml;nk f&ouml;r RSS-str&ouml;m';
$lang['autodiscoverylink'] = 'URL f&ouml;r Auto Discovery-str&ouml;m (l&auml;mna tom f&ouml;r standard)';
$lang['eventdesc-NewsArticleAdded'] = 'Skickas n&auml;r en artikel l&auml;ggs till.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Skickas n&auml;r en artikel l&auml;ggs till.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;news_id\&quot; - ID p&aring; nyhetsartikeln</li>
<li>\&quot;category_id\&quot; - ID p&aring; kategorin f&ouml;r den h&auml;r artikeln</li>
<li>\&quot;title\&quot; - Titel p&aring; artikeln</li>
<li>\&quot;content\&quot; - Inneh&aring;llet i artikeln</li>
<li>\&quot;summary\&quot; - Summering av artikeln</li>
<li>\&quot;status\&quot; - Statusen p&aring; artikeln (&quot;skriven&quot; eller &quot;publicerad&quot;)</li>
<li>\&quot;start_time\&quot; - Datumet d&aring; artikeln ska b&ouml;rja visas</li>
<li>\&quot;end_time\&quot; - Om slutdatumet ska ignoreras eller inte</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Skickas n&auml;r en artikel redigeras.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Skickas n&auml;r en artikel &auml;r &auml;ndrad.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;news_id\&quot; - ID p&aring; nyhetsartikeln</li>
<li>\&quot;category_id\&quot; - ID p&aring; kategorin f&ouml;r den h&auml;r artikeln.</li>
<li>\&quot;title\&quot; - Titel p&aring; artikeln</li>
<li>\&quot;content\&quot; - Inneh&aring;llet i artikeln</li>
<li>\&quot;summary\&quot; - Summering av artikeln</li>
<li>\&quot;status\&quot; - Statusen p&aring; artikeln (&quot;skriven&quot; eller &quot;publicerad&quot;)</li>
<li>\&quot;start_time\&quot; - Datumet d&aring; artikeln ska b&ouml;rja visas</li>
<li>\&quot;end_time\&quot; - Datumet d&aring; artikeln ska sluta visas</li>
<li>\&quot;useexp\&quot; - Om slutdatumet ska ignoreras eller inte</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Skickas n&auml;r en artikel tas bort.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Skickas n&auml;r en artikel &auml;r borttagen.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;news_id\&quot; - ID p&aring; nyhetsartikeln.</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Skickas n&auml;r en kategori l&auml;ggs till.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Skickas n&auml;r en kategori &auml;r tillagd.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;category_id\&quot; - ID p&aring; nyhetskategorin</li>
<li>\&quot;name\&quot; - Namnet p&aring; nyhetskategorin</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Skickas n&auml;r en kategori redigeras.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Skickas n&auml;r en kategori &auml;r &auml;ndrad.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;category_id\&quot; - ID p&aring; nyhetskategorin</li>
<li>\&quot;name\&quot; - Namnet p&aring; nyhetakategorin.</li>
<li>\&quot;origname\&quot; - Ursprungsnamnet p&aring; nyhetakategorin.</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Skickas n&auml;r en kategori tas bort.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Skickas n&auml;r en kategori tas bort.</p>
<h4>Parametrar</h4>
<ul>
<li>\&quot;category_id\&quot; - ID p&aring; kategorin som togs bort</li>
<li>\&quot;name\&quot; - Namnet p&aring; kategorin som togs bort</li>
</ul>
';
$lang['helpnumber'] = 'Max antal artiklar att visa (om tomt visas alla artiklar).';
$lang['helpstart'] = 'B&ouml;rja fr&aring;n nyhet nummer X -- om l&auml;mnas tom visas fr&aring;n f&ouml;rsta nyheten.';
$lang['helpmakerssbutton'] = 'Skapar en klickbar knapp som l&auml;nkar till en RSS-str&ouml;m f&ouml;r nyheterna.';
$lang['helpcategory'] = 'Visar endast nyheter i vald kategori. <strong>Anv&auml;nd * efter namnet f&ouml;r att visa underkategorier.</strong> Flera kategorier kan visas, anv&auml;nd kommatecken mellan varje. Om ingen specifik kategori anges s&aring; visas alla nyheter.';
$lang['helpmoretext'] = 'Text som visas efter en artikels sammanfattning. Ett klick p&aring; den visar hela nyhetsartikeln. Om inget anges s&aring; visas &quot;more...&quot;.';
$lang['helpsummarytemplate'] = 'Anv&auml;nd en specifik mall f&ouml;r att styra nyhetssammanfattningen. Mallen m&aring;ste finnas i mappen modules/News/templates.';
$lang['helpdetailtemplate'] = 'Anv&auml;nd en specifik mall f&ouml;r att styra huvudinneh&aring;llet i artikeln. Mallen m&aring;ste finnas i mappen modules/News/templates.';
$lang['helpsortby'] = 'Anger efter vilket f&auml;lt som sortering ska ske. Alternativen &auml;r: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  &quot;news_date&quot; anv&auml;nds om inget annat anges.';
$lang['helpsortasc'] = 'Sortera artiklar i stigande datumordning i st&auml;llet f&ouml;r fallande.';
$lang['helpdetailpage'] = 'Sida att visa detaljerna f&ouml;r nyhetsartikeln p&aring;. Detta kan antingen vara ett sidalias eller ett id. Anv&auml;nds f&ouml;r att detaljer ska kunna visas med en annan mall &auml;n sammanfattningen.';
$lang['helpdateformat'] = 'Format f&ouml;r datumet n&auml;r artikeln publicerades. Detta baseras p&aring; <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a>-funktionen och kan anv&auml;ndas i din mall, enligt <code>$entry->formatpostdate</code>.';
$lang['helpshowarchive'] = 'Visa endast utg&aring;gna nyhetsartiklar.';
$lang['helpbrowsecat'] = 'Visa en s&ouml;kbar kategorilista.';
$lang['help'] = '	<h3>Vad g&ouml;r den h&auml;r modulen?</h3>
	<p>News &auml;r en modul med vars hj&auml;lp man kan hantera och visa nyhetsartiklar p&aring; sin webbplats. Man kan j&auml;mf&ouml;ra modulen med weblog (blogg), fast nyhetsmodulen har fler funktioner. N&auml;r modulen installeras s&aring; ut&ouml;kas ocks&aring; administrationsgr&auml;nssnittet med verktyg f&ouml;r att hantera nyhetsartiklar. Man ges m&ouml;jlighet att skapa egna nyhetskategorier s&aring; att olika typer av nyheter kan placeras p&aring; olika st&auml;llen p&aring; webbplatsen.</p>
	<h3>Variabler f&ouml;r mallar</h3>
	<ul>
		<li><b>itemcount</b> - Antalet nyhetsartiklar som ska visas.</li>
		<li><b>entry->authorname</b> - F&ouml;rfattarens f&ouml;r- och efternamn.</li>
	</ul>
	<h3>S&auml;kerhet</h3>
	<p>En anv&auml;ndare m&aring;ste tillh&ouml;ra gruppen &#039;Modify News&#039; f&ouml;r att kunna l&auml;gga till, redigera eller ta bort nyhetsartiklar.</p>
	<p>F&ouml;r att redigera layoutmallarna m&aring;ste anv&auml;ndaren tillh&ouml;ra en grupp med r&auml;ttigheten &#039;Modify Templates&#039;.</p>
	<p>F&ouml;r att redigera globala nyhetsinst&auml;llningar m&aring;ste anv&auml;ndaren tillh&ouml;ra en grupp med r&auml;ttigheten &#039;Modify Site Preferences&#039;.</p>
	<h3>Hur anv&auml;nder man modulen?</h3>
	<p>Enklast &auml;r att anv&auml;nda taggen {news} (som &auml;r ett h&ouml;lje runt modultaggen, f&ouml;r att f&ouml;renkla syntaxet). Med denna tagg kan man l&auml;gga till och visa nyheter p&aring; valfri plats i en mall eller en sida. Koden f&ouml;r detta kan till exempel se ut s&aring; h&auml;r: <code>{news number=&quot;5&quot; category=&quot;pilsner&quot;}</code></p>';
$lang['utma'] = '156861353.159864870.1178364978.1179668912.1179690646.6';
$lang['utmz'] = '156861353.1178364978.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>
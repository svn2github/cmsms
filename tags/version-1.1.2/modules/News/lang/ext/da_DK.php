<?php
$lang['uploadscategory'] = 'Uploads kategori';
$lang['title_available_templates'] = 'Tilg&aelig;ngelige skabeloner';
$lang['resettodefault'] = 'Gendan fabriks indstillinger';
$lang['title_detail_template'] = 'Detaljeret skabelon redigering';
$lang['title_summary_template'] = 'Resum&eacute; skabelon redigering';
$lang['prompt_templatename'] = 'Skabelon navn';
$lang['prompt_template'] = 'Skabelon kode';
$lang['title_summary_sysdefault'] = 'Standard resum&eacute; skabelon';
$lang['title_detail_sysdefault'] = 'Standard detaljeret skabelon';
$lang['info_sysdefault'] = '<em>(skabelonen der benyttes som standard n&aring;r en ny skabelon v&aelig;lges)</em>';
$lang['template'] = 'Skabelon';
$lang['prompt_name'] = 'Navn';
$lang['prompt_default'] = 'Standard';
$lang['prompt_newtemplate'] = 'Opret en ny  skabelon';
$lang['help_pagelimit'] = 'Maksimalt antal indl&aelig;g der skal vises (pr. side). Hvis dette parameter ikke angives vil alle indl&aelig;g blive vist. Hvis det er angivet, og der er flere indl&aelig;g end der angives, vil der vises tekst og links til at bladre mellem indl&aelig;ggene.';
$lang['prompt_page'] = 'Side';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'af';
$lang['prompt_pagelimit'] = 'Side gr&aelig;nse';
$lang['prompt_sorting'] = 'Sort&eacute;r p&aring;';
$lang['title_filter'] = 'Filtre';
$lang['published'] = 'Udgivet';
$lang['draft'] = 'Kladde';
$lang['expired'] = 'Udl&oslash;bet';
$lang['author'] = 'Forfatter';
$lang['sysdefaults'] = 'Nulstil til standardv&aelig;rdier';
$lang['restoretodefaultsmsg'] = 'Denne handling vil genoprette skabeloner til deres standardform. Er du sikker p&aring; de vil forts&aelig;tte?';
$lang['addarticle'] = 'Tilf&oslash;j artikel';
$lang['articleadded'] = 'Artiklen blev tilf&oslash;jet.';
$lang['articleupdated'] = 'Artiklen blev &aelig;ndret.';
$lang['articledeleted'] = 'Artiklen blev slettet';
$lang['addcategory'] = 'Tilf&oslash;j kategori';
$lang['categoryadded'] = 'Kategorien blev tilf&oslash;jet.';
$lang['categoryupdated'] = 'Kategorien blev opdateret.';
$lang['categorydeleted'] = 'Kategorien blev slettet.';
$lang['addnewsitem'] = 'Tilf&oslash;j nyhed';
$lang['allcategories'] = 'Alle katagorier';
$lang['allentries'] = 'Alle indl&aelig;g';
$lang['areyousure'] = 'Er du sikker p&aring; dette skal slettes?';
$lang['articles'] = 'Artikler';
$lang['cancel'] = 'Fortryd';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategorier';
$lang['default_category'] = 'Standard kategori';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\&#039;s Ted\&#039;s code.</p>
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
<p>- Add a \&quot;start\&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a \&quot;reset to default\&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The \&quot;Modify News\&quot; permission is only for articles and categories. \&quot;Modify Templates\&quot; permission is required to edit the templates, and \&quot;Modify Site Preferences\&quot; is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<li>
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
<li>
<p>Version 2.2</p>
<p>- Added browsecat parameter
</li>
<li>
<p>Version 2.3</p>
<p>- Changed to use multiple database templates <em>Old file templates will not work.</p>
<p>- Now allow for admin approval to change news state from draft to published.</p>
<p>- Pagination is now available in the default summary templates</p>
<p>- More.</p>
</li>
<li>
<p>Version 2.3.0.2</p>
<p>- Minor fixes to the help, changelog, to the number parameter, and to add a missing CreatePermission call.</p>
</li>
</ul>';
$lang['content'] = 'Indhold';
$lang['dateformat'] = '%s er ikke gyldigt if&oslash;lge ����-mm-dd tt:mm:ss formatet';
$lang['delete'] = 'Slet';
$lang['description'] = 'Tilf&oslash;j, redig&eacute;r og slet nyheder';
$lang['detailtemplate'] = 'Detaljeret skabelon';
$lang['detailtemplateupdated'] = 'Den opdaterede skabelon til detaljeret visning blev gemt i databasen.';
$lang['displaytemplate'] = 'Vis skabelon';
$lang['edit'] = 'Redig&eacute;r';
$lang['enddate'] = 'Slut dato';
$lang['endrequiresstart'] = 'Angivelse af en slutdato kr&aelig;ver en startdato';
$lang['entries'] = '%s Indl&aelig;g';
$lang['status'] = 'Status';
$lang['expiry'] = 'Udl&oslash;b';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mere';
$lang['category_label'] = 'Kategori:';
$lang['author_label'] = 'Skrevet af:';
$lang['moretext'] = 'Mere tekst';
$lang['name'] = 'Navn';
$lang['news'] = 'Nyheder';
$lang['news_return'] = 'Tilbage';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du skal have tilladelsen \&#039;%s\&#039; for at kunne udf&oslash;re den funktion.';
$lang['nocategorygiven'] = 'Ingen kategori angivet';
$lang['nocontentgiven'] = 'Intet indhold angivet';
$lang['noitemsfound'] = '<strong>Ingen</strong> nyheder fundet for kategorien: %s';
$lang['nopostdategiven'] = 'Ingen oprettelsesdato angivet';
$lang['note'] = '<em>Bem&aelig;rk:</em> Datoer skal angives i formatet: \&#039;����-mm-dd tt:mm:ss\&#039; format.';
$lang['notitlegiven'] = 'Ingen title angivet';
$lang['nonamegiven'] = 'Intet navn angivet';
$lang['numbertodisplay'] = 'Antal der skal vises (blank viser alle nyheder)';
$lang['print'] = 'Udskriv';
$lang['postdate'] = 'Oprettelsesdato';
$lang['postinstall'] = 'Kontroll&eacute;r at tilladelsen \&quot;Modify News\&quot; er sl&aring;et til for brugere der skal kunne administrere Nyheder.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Skabelon';
$lang['selectcategory'] = 'V&aelig;lg kategori';
$lang['showchildcategories'] = 'Vis under kategorier';
$lang['sortascending'] = 'Sort&eacute;r stigende';
$lang['startdate'] = 'Start dato';
$lang['startoffset'] = 'Begynd visning ved det n\&#039;te element';
$lang['startrequiresend'] = 'Angivelse af en start dato kr&aelig;ver en slutdato';
$lang['submit'] = 'Send';
$lang['summary'] = 'Resum&eacute;';
$lang['summarytemplate'] = 'Resum&eacute; skabelon';
$lang['summarytemplateupdated'] = 'Skabelonen til resum&eacute; af nyheder blev opdateret.';
$lang['title'] = 'Titel';
$lang['options'] = 'Indstillinger';
$lang['optionsupdated'] = 'Indstillingerne blev gemt.';
$lang['useexpiration'] = 'Benyt udl&oslash;bsdato';
$lang['showautodiscovery'] = 'Vis Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (efterlad tom for standardv&aelig;rdi)';
$lang['eventdesc-NewsArticleAdded'] = 'Sendes n&aring;r en artikel tilf&oslash;jes.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (\&quot;draft\&quot; or \&quot;publish\&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Sendes n&aring;r en artikel redigeres.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (\&quot;draft\&quot; or \&quot;publish\&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Sendes n&aring;r en artikel slettes.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Sendes n&aring;r en kategori tilf&oslash;jes.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sendes n&aring;r en kategori redigeres.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sendes n&aring;r en kategori slettes.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'Det maksimale antal nyheder der skal vises -- alle nyheder vises hvis feltet er blankt.';
$lang['helpstart'] = 'Start ved det n\&#039;te element - hvis intet er angivet startes ved det f&oslash;rste element.';
$lang['helpmakerssbutton'] = 'Vis en knap der er et link til en RSS-kilde for nyhederne.';
$lang['helpcategory'] = 'Vis kun nyheder for denne kategori og den underkategorier. Hvis feltet er blankt vises alle kategorier.';
$lang['helpmoretext'] = 'Tekst der skal vises efter en nyhed hvis l&aelig;ngden af denne overskrider resum� l&aelig;ngden. Standard er \&quot;more...\&quot;';
$lang['helpsummarytemplate'] = 'Benyt en seperat skabelon til at vise en nyhedsartikel som resum&eacute;. Den skal befinde i modules/News/templates.';
$lang['helpdetailtemplate'] = 'Benyt en seperat skabelon til at vi en nyhedsartikel i detaljer. Den skal befinde sig i modules/News/templates.';
$lang['helpsortby'] = 'Hvilket felt der skal sorteres efter. Muligheder er: \&quot;news_date\&quot;, \&quot;summary\&quot;, \&quot;news_data\&quot;, \&quot;news_category\&quot;, \&quot;news_title\&quot;. Standard er \&quot;news_date\&quot;.';
$lang['helpsortasc'] = 'Sort&eacute;r nyheder i stigende r&aelig;kkef&oslash;lge i stedet for faldende.';
$lang['helpdetailpage'] = 'Side som nyhedsdetaljer skal vises i. Det kan v&aelig;re et side-alias eller et side-id. Bruges til at tillade detaljer at blive vist i en anden skabelon end resum&eacute;\&#039;et.';
$lang['helpdateformat'] = 'Formatet som nyhedens post-dato skal vises med. Denne er baseret p� <a href=\&quot;http://php.net/strftime\&quot; target=\&quot;_blank\&quot;>strftime</a> funktionene og kan bruges i din skabelon med $entry->formatpostdate.';
$lang['helpshowarchive'] = 'Vis kun nyligt udl&oslash;bede artikler';
$lang['helpbrowsecat'] = 'Vis en kategori liste.';
$lang['help'] = '	<h3>Hvad g&oslash;r dette modul?</h3>
	<p>News er et modul til at vise nyheder p&aring; din side, p&aring; sammen m&aring;de som blogs, men med flere funktioner! N&aring;r modulet er installeret er der tilf&oslash;jet et News admin menupunkt til administrations menuen som giver dig mulighed for at v&aelig;lge eller tilf&oslash;je en nyheds kategori. S&aring; snart en kategori er tilf&oslash;jet eller valgt vises en liste over nyheder for denne katagori. Herfra kan du tilf&oslash;jet, redigere eller slette nyheder for kategorien.</p>
	<h3>Sikkerhed</h3>
	<p>Brugeren skal tilh&oslash;re en gruppe med \&#039;Modify News\&#039; tilladelsen for at kunne tilf&oslash;je, redigere og slette nyheder.</p>
	<h3>Hvordan bruger jeg modulet?</h3>
	<p>Den nemmeste m&aring;de er at bruge modulet ved hj&aelig;lp af cms_module tag\&#039;en. Dette vil inds&aelig;tte modulet i din skabelon eller side lige hvor du vil ha det, og vise nyheder her. Koden ser ud som noget i denne stil: <code>{cms_module module=\&quot;news\&quot; number=\&quot;5\&quot; category=\&quot;�l\&quot;}</code></p>	
	</p>';
?>
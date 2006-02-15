<?php
$lang['author'] = 'Forfatter';
$lang['sysdefaults'] = 'Nullstill';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['addarticle'] = 'Legg til nyhetsartikkel';
$lang['addcategory'] = 'Ny kategori';
$lang['addnewsitem'] = 'Legg til nyhetsartikkel';
$lang['allcategories'] = 'Alle kategorier';
$lang['allentries'] = 'Alle oppf&oslash;ringer';
$lang['areyousure'] = '&Oslash;nsker du virkelig &aring; slette?';
$lang['articles'] = 'Nyhetsartikler';
$lang['cancel'] = 'Avbryt';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategorier';
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
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Innhold';
$lang['dateformat'] = '%s er ikke et gyldig yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Slett';
$lang['description'] = 'Legg til, rediger og slett nyhetsartikler.';
$lang['detailtemplate'] = 'Detaljmal';
$lang['displaytemplate'] = 'Visningsmal';
$lang['edit'] = 'Rediger';
$lang['enddate'] = 'Slutt dato';
$lang['endrequiresstart'] = 'Dersom du har en sluttdato for nyhetsartikkelen s&aring; m&aring; du ogs&aring; ha en start dato.';
$lang['entries'] = '%s oppf&oslash;ringer';
$lang['status'] = 'Status';
$lang['expiry'] = 'Vis i';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mer';
$lang['moretext'] = 'Mer tekst';
$lang['name'] = 'Navn';
$lang['news'] = 'Nyheter';
$lang['news_return'] = 'Return';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du trenger &#039;%s&#039; rettigheter for &aring; utf&oslash;re denne handlingen.';
$lang['nocategorygiven'] = 'Ingen kategori satt';
$lang['nocontentgiven'] = 'Innhold mangler';
$lang['noitemsfound'] = '<strong>Ingen</strong> artikler funnet i denne kategorien: %s';
$lang['nopostdategiven'] = 'Publiseringsdato mangler';
$lang['note'] = '<em>Merk:</em> Dato m&aring; v&aelig;re i et &#039;yyyy-mm-dd hh:mm:ss&#039; format.';
$lang['notitlegiven'] = 'Tittel mangler';
$lang['numbertodisplay'] = 'Antall som skal vises (ingen verdi valgt viser alle)';
$lang['print'] = 'Skriv ut';
$lang['postdate'] = 'Publiseringsdato';
$lang['postinstall'] = 'Husk &aring; tildele rettigheter for &quot;Modify News&quot; for brukere som skal administrere nyhetsartikler.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Mal';
$lang['selectcategory'] = 'Velg kategori';
$lang['showchildcategories'] = 'Vis underkategorier';
$lang['sortascending'] = 'Sorter med eldste &oslash;verst';
$lang['startdate'] = 'Start-dato';
$lang['startoffset'] = 'Start displaying at the nth item';
$lang['startrequiresend'] = 'Dersom du har en start-dato for artikkelen s&aring; m&aring; du ogs&aring; ha en slutt-dato.';
$lang['submit'] = 'Oppdater';
$lang['summary'] = 'Sammendrag';
$lang['summarytemplate'] = 'Sammendragsmal';
$lang['title'] = 'Tittel';
$lang['options'] = 'Alternativer';
$lang['useexpiration'] = 'Bruk utl&oslash;psdato';
$lang['showautodiscovery'] = 'Vis automatisk mottakslink';
$lang['autodiscoverylink'] = 'URL adresse for automatisk mottakslink (blank for standard)';
$lang['helpnumber'] = 'Maksimalt antall elementer som skal vises (ingen verdi vil gj&oslash;re at alle elementer vises).';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Lag en knapp for RSS overf&oslash;ring av nyhetssaker.';
$lang['helpcategory'] = 'Vis kun elementer i denne kategorien. Bruk * etter navnet for &aring; vise underelementer. Flere kategorier kan bli brukt dersom disse er separert med komma. Ingen verdi vil resultere i at alle kategorier vises.';
$lang['helpmoretext'] = 'Tekst som skal vises p&aring; slutten av nyhetssaken dersom saken er lengere enn sammendragslengden. Standard verdi er &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Bruk en separat mal for &aring; vise artikkelsammendrag. Den m&aring; ligge i mappen /modules/News/templates.';
$lang['helpdetailtemplate'] = 'Bruk en separat mal for &aring; vise artikkeldetlajer. Den m&aring; ligge i mappen /modules/News/templates.';
$lang['helpsortby'] = 'Feltet som skal brukes som s&oslash;kekriterie. Alternativene er &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sorter nyhetselementer i stigende rekkef&oslash;lge. (Standard verdi er &aring; sortere i synkende rekkef&oslash;lge).';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Formatet som artikkeldatoen skal vises med. Denne innstillingen baserer seg p&aring; PHP sin <a href=&amp;quot;http://php.net/strftime&amp;quot; target=&amp;quot;_blank&amp;quot;>strftime</a> funksjon og kan brukes i din mal slik: $entry->formatpostdate.';
$lang['help'] = '	<h3>Hva gj&oslash;r denne modulen?</h3>
	<p>Nyhetsmodulen viser nyheter p&aring; din side p&aring; en m&aring;te som ligner p&aring; en blog, men med mer funksjonalitet. N&aring;r modulen er installert, s&aring; vil en side for &aring; administrere nyhtene vises i administrasjonsgrensesnittet. Her vil du kunne legge til og velge nyhetskategorier. N&aring;r en nyhetskategori er laget eller valgt, s&aring; vil en liste over artikler i denne kategorien vises. Du kan n&aring; legge til, redigere eller slette artikler fra denne kategorien.</p>
	<h3>Sikkerhet</h3>
	<p>Brukere som skal administrere nyhetsartiklene m&aring; tilh&oslash;re en gruppe som har &#039;Modify News&#039; rettigheter.</p>
	<h3>Hvordan bruker jeg modulen?</h3>
	<p>Den letteste m&aring;ten &aring; bruke modulen er med cms_module taggen. Taggen brukes enten i et innholdselement eller i en mal. Et eksempel p&aring; en bruk av modulen er <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>
	<h3>Hvilke parametere finnes?</h3>
	<p>
	<ul>
	<li><em>(optional)</em> number=&quot;5&quot; - Maksimalt antall viste artikler =- Dersom parameteren er tom s&aring; vises alle artikler.</li>
	<li><em>(optional)</em> makerssbutton=&quot;true&quot; - Lager en knapp for &aring; linke en RSS tilf&oslash;rsel av nyhetsartikler.</li>
	<li><em>(optional)</em> category=&quot;category&quot; - Viser bare elementer i den spesifiserte kategorien. Dersom denne parameteren er tom s&aring; vises artikler fra alle kategorier.</li>
	<li><em>(optional)</em> moretext=&quot;more...&quot; - Tekst som vises p&aring; slutten av en nyhetsartikkel som har blitt kortet som f&oslash;lge av sammendragsmodus. Standard tekst er &quot;more...&quot;.</li>
	<li><em>(optional)</em> summarytemplate=&quot;sometemplate.tpl&quot; - Bruk en separat mal for visning av sammendrag. Malen m&aring; befinne seg i modules/News/templates.</li>
	<li><em>(optional)</em> detailtemplate=&quot;sometemplate.tpl&quot;  - Bruk en separat mal for visning av nyhetsartikkelen. Malen m&aring; befinne seg i modules/News/templates.</li>
	<li><em>(optional)</em> sortasc=&quot;true&quot; - Sorter nyhetsartikler med eldtste artikler &oslash;verst.</li>
	</ul>
	</p>';
?>
<?php
$lang['author'] = 'Forfatter';
$lang['sysdefaults'] = 'Nullstill';
$lang['restoretodefaultsmsg'] = 'Denne kommandoen vil endre alle maler tilbake til startverdiene. &Oslash;nsker du virkelig &aring; fortsette?';
$lang['addarticle'] = 'Legg til nyhetsartikkel';
$lang['articleadded'] = 'Artikkelen ble lagt til';
$lang['addcategory'] = 'Ny kategori';
$lang['categoryadded'] = 'Kategorien ble lagt til';
$lang['categoryupdated'] = 'Kategorien ble oppdatert.';
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
$lang['detailtemplateupdated'] = 'Den oppdaterte Detalj malen ble lagret til databasen.';
$lang['displaytemplate'] = 'Visningsmal';
$lang['edit'] = 'Rediger';
$lang['enddate'] = 'Slutt dato';
$lang['endrequiresstart'] = 'Dersom du har en sluttdato for nyhetsartikkelen s&aring; m&aring; du ogs&aring; ha en start dato.';
$lang['entries'] = '%s oppf&oslash;ringer';
$lang['status'] = 'Status ';
$lang['expiry'] = 'Vis i';
$lang['filter'] = 'Filtrer';
$lang['more'] = 'Mer';
$lang['moretext'] = 'Mer tekst';
$lang['name'] = 'Navn';
$lang['news'] = 'Nyheter';
$lang['news_return'] = 'Tilbake';
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
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed ';
$lang['rsstemplate'] = 'RSS Mal';
$lang['selectcategory'] = 'Velg kategori';
$lang['showchildcategories'] = 'Vis underkategorier';
$lang['sortascending'] = 'Sorter med eldste &oslash;verst';
$lang['startdate'] = 'Start-dato';
$lang['startoffset'] = 'Start visning av det artikkel n';
$lang['startrequiresend'] = 'Dersom du har en start-dato for artikkelen s&aring; m&aring; du ogs&aring; ha en slutt-dato.';
$lang['submit'] = 'Oppdater';
$lang['summary'] = 'Sammendrag';
$lang['summarytemplate'] = 'Sammendragsmal';
$lang['summarytemplateupdated'] = 'Nyhets sammendral malen ble oppdatert.';
$lang['title'] = 'Tittel';
$lang['options'] = 'Alternativer';
$lang['optionsupdated'] = 'Valgene ble oppdaterte';
$lang['useexpiration'] = 'Bruk utl&oslash;psdato';
$lang['showautodiscovery'] = 'Vis automatisk mottakslink';
$lang['autodiscoverylink'] = 'URL adresse for automatisk mottakslink (blank for standard)';
$lang['eventdesc-NewsArticleAdded'] = 'Sendt n&aring; en artikkel er lagt til.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sendt n&aring;r en artikkel er lagt til.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;news_id\&quot; - Id for nyhets artikkelen</li>
<li>\&quot;category_id\&quot; - Id for kategorien for denne artiklen</li>
<li>\&quot;title\&quot; - Artikkel tittel</li>
<li>\&quot;content\&quot; - Artikkelens innhold</li>
<li>\&quot;summary\&quot; - Artikkel sammendrag</li>
<li>\&quot;status\&quot; - Status for artikkelen (&quot;draft&quot; eller &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Dato for n&aring;r artikkelen skal begynne &aring; vises</li>
<li>\&quot;end_time\&quot; - Dato for n&aring;r artikkelen skal slutte &aring; vises</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Sendt n&aring;r en artikkel er redigert.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sendt n&aring;r en artikkel er redigert.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;news_id\&quot; - Id for nyhetsartikkelen</li>
<li>\&quot;category_id\&quot; - Id for kategorien for denne artikkelen</li>
<li>\&quot;title\&quot; - Artikkeltittel</li>
<li>\&quot;content\&quot; - Artikkel innhold</li>
<li>\&quot;summary\&quot; - Artikkel sammedrag</li>
<li>\&quot;status\&quot; - Artikkel status (&quot;draft&quot; eller &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Dato artikkelen skal begynne &aring; vises</li>
<li>\&quot;end_time\&quot; - Dato artikkelen skal slutte &aring; vises</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Sendt n&aring;r en artikkel er slettet.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sendt n&aring;r en artikkel er slettet.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;news_id\&quot; - Id for nyhetsartikkelen</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Sendt n&aring;r en kategori er lagt til.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sendt n&aring;r en kategori er lagt til.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;category_id\&quot; - Id for nyhets kategorien</li>
<li>\&quot;name\&quot; - Navn p&aring; nyhets kategorien</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sendt n&aring;r en kategori er redigert.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sendt n&aring;r en kategori er redigert.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;category_id\&quot; - Id for nyhets kategorien</li>
<li>\&quot;name\&quot; - Navn p&aring; nyhets kategorien</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sendt n&aring;r en kategori er slettet.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sendt n&aring;r en kategori er slettet.</p>
<h4>Parametere</h4>
<ul>
<li>\&quot;category_id\&quot; - Id for nyhets kategorien</li>
</ul>
';
$lang['helpnumber'] = 'Maksimalt antall elementer som skal vises (ingen verdi vil gj&oslash;re at alle elementer vises).';
$lang['helpstart'] = 'Start med artikkel n-- dersom ingen parameter er gitt vil visningen starte fra f&oslash;rste artikkel.';
$lang['helpmakerssbutton'] = 'Lag en knapp for RSS overf&oslash;ring av nyhetssaker.';
$lang['helpcategory'] = 'Vis kun elementer i denne kategorien. Bruk * etter navnet for &aring; vise underelementer. Flere kategorier kan bli brukt dersom disse er separert med komma. Ingen verdi vil resultere i at alle kategorier vises.';
$lang['helpmoretext'] = 'Tekst som skal vises p&aring; slutten av nyhetssaken dersom saken er lengere enn sammendragslengden. Standard verdi er &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Bruk en separat mal for &aring; vise artikkelsammendrag. Den m&aring; ligge i mappen /modules/News/templates.';
$lang['helpdetailtemplate'] = 'Bruk en separat mal for &aring; vise artikkeldetlajer. Den m&aring; ligge i mappen /modules/News/templates.';
$lang['helpsortby'] = 'Feltet som skal brukes som s&oslash;kekriterie. Alternativene er &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Standardsetting er &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sorter nyhetselementer i stigende rekkef&oslash;lge. (Standard verdi er &aring; sortere i synkende rekkef&oslash;lge).';
$lang['helpdetailpage'] = 'Side som nyhetsdetaljer skal vises i.  Dette kan enten v&aelig;re et sidealias eller en side-id. Benyttes for &aring; tillate visning av detaljer i en annen mal enn sammendragsmalen.';
$lang['helpdateformat'] = 'Formatet som artikkeldatoen skal vises med. Denne innstillingen baserer seg p&aring; PHP sin <a href=&amp;quot;http://php.net/strftime&amp;quot; target=&amp;quot;_blank&amp;quot;>strftime</a> funksjon og kan brukes i din mal slik: $entry->formatpostdate. Standard setting er %x som er standard datoformat for serveren.';
$lang['help'] = '	<h3>Hva gj&oslash;r denne modulen?</h3>
	<p>Nyhetsmodulen viser nyheter p&aring; din side p&aring; en m&aring;te som ligner p&aring; en blog, men med mer funksjonalitet. N&aring;r modulen er installert, vil en side for &aring; administrere nyhtene vises i administrasjonsmenyen. Her vil du kunne legge til og velge nyhetskategorier. N&aring;r en nyhetskategori er laget eller valgt, s&aring; vil en liste over artikler i denne kategorien vises. Du kan n&aring; legge til, redigere eller slette artikler fra denne kategorien.</p>
	<h3>Sikkerhet</h3>
	<p>Brukere som skal administrere nyhetsartiklene m&aring; tilh&oslash;re en gruppe som har &#039;Modify News&#039; rettigheter.</p>
	<p>For &aring; kunne endre malene m&aring; brukeren tilh&oslash;re en gruppe som har &#039;Modify Templates&#039; rettigneter.</p>
	<p>For &aring; kunne endre instillinger m&aring; brukeren tilh&oslash;re en gruppe som har &#039;Modify Site Preferences&#039; rettigheter.</p>
	<h3>Hvordan bruker jeg modulen?</h3>
	<p>Den letteste m&aring;ten &aring; bruke modulen er med cms_module taggen. Taggen brukes enten p&aring; en innholdsside eller i en mal. Et eksempel p&aring; en bruk av modulen er <code>{cms_module module=&quot;news&quot; number=&quot;5&quot;}</code></p>';
$lang['utma'] = '156861353.1946822495.1154336060.1154336060.1154337928.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1154337928.2.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,5867.15.html|utmcmd=referral';
?>
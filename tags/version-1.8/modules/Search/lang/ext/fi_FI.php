<?php
$lang['param_detailpage'] = 'K&auml;ytet&auml;&auml;n ainoastaan tulosten etsimiseen moduuleista, t&auml;m&auml; parametri sallii sallii erillisen tulossivun m&auml;&auml;rittelemisen. T&auml;m&auml; on k&auml;yt&auml;nn&ouml;llist&auml;, jos esimerkiksi n&auml;yt&auml;t aina tulokset erillisell&auml; sivupohjalla.  <em>(<strong>Huom:</strong> moduulit voivat ohittaa t&auml;m&auml;n parametrin.)</em>';
$lang['prompt_resultpage'] = 'Sivu erillisille moduulien tuloksille <em>(Huomaa, ett&auml; moduulit voivat halutessaan ohittaa t&auml;m&auml;n)</em>';
$lang['search_method'] = 'Siev&auml;t url-osoitteet, jotka ovat yhteensopivia POST-metodin kanssa, oletusarvo on aina GET. T&auml;m&auml;n toimintaan saamiseksi lis&auml;&auml; {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Vie CSV:hen';
$lang['prompt_savephrases'] = 'Seuraa hakulausekkeita, ei yksitt&auml;isi&auml; sanoja';
$lang['word'] = 'Sana';
$lang['count'] = 'Sanam&auml;&auml;r&auml;';
$lang['confirm_clearstats'] = 'Haluatko pysyv&auml;sti tyhjent&auml;&auml; kaikki tilastot?';
$lang['clear'] = 'Tyhjenn&auml;';
$lang['statistics'] = 'Tilastot';
$lang['param_action'] = 'M&auml;&auml;rittele t&auml;m&auml;n moduulin toimintatila. Hyv&auml;ksytyt arvot ovat &#039;default&#039; ja &#039;keywords&#039;.  Avainsana-toimintoa voidaan k&auml;ytt&auml;&auml; luomaan pilkuilla eroteltu lista sanoista, jotka ovat sopivia avainsanoja keywords-metatiedolle.';
$lang['param_count'] = 'Avainsana-toiminnan kanssa k&auml;ytettyn&auml;, t&auml;m&auml; parametri rajoittaa tuloksen m&auml;&auml;riteltyyn sanam&auml;&auml;r&auml;&auml;n';
$lang['param_pageid'] = 'P&auml;tee ainoastaan avainsana-toimintoon, t&auml;m&auml;n parametrin avulla voidaan m&auml;&auml;ritell&auml; eri pageid, joka palautetaan tuloksille';
$lang['param_inline'] = 'Jos tosi (true), hakulomakkeen tuloste korvaa \&quot;search\&quot;-tagin sis&auml;ll&ouml;n alkuper&auml;isess&auml; sis&auml;lt&ouml;lohkossa. K&auml;yt&auml; t&auml;t&auml; parametria, jos sivupohjassa on useita sis&auml;lt&ouml;lohkoja etk&auml; halua haun tulosteen korvaavan oletussis&auml;lt&ouml;lohkoa.';
$lang['param_passthru'] = 'V&auml;lit&auml; nimetyt parametrit m&auml;&auml;ritetyille moduuleille. Jokaisen t&auml;llaisen parametrin muoto on: &quot; passtru_MODULENAME_PARAMNAME=&#039;value&#039; &quot; esim.: passthru_News_detailpage=&#039;newsdetails&#039;';
$lang['param_modules'] = 'Rajoita haun tulokset luetelluista (pilkulla erotettu luettelo) moduuleista indeksoituihin arvoihin';
$lang['searchsubmit'] = 'L&auml;het&auml;';
$lang['search'] = 'Haku';
$lang['param_submit'] = 'L&auml;het&auml;-painikeeseen asetettava teksti';
$lang['param_searchtext'] = 'Hakukentt&auml;&auml;n asetettava teksti';
$lang['prompt_searchtext'] = 'Oletushakuteksti';
$lang['param_resultpage'] = 'Sivu, jolla hakutulokset n&auml;ytet&auml;&auml;n. T&auml;m&auml; voi olla joko sivun alias tai id. K&auml;ytet&auml;&auml;n, jotta hakutuloksia voidaan n&auml;ytt&auml;&auml; eri sivupohjassa kuin hakulomakkeen sivupohja.';
$lang['prompt_alpharesults'] = 'Jaottele tulokset aakkosj&auml;rjestyksess&auml; painoarvon sijasta';
$lang['description'] = 'Moduuli, joka hakee sivujen ja muiden moduulien sis&auml;lt&ouml;&auml;.';
$lang['reindexallcontent'] = 'Indeksoi kaikki sis&auml;lt&ouml; uudelleen';
$lang['reindexcomplete'] = 'Uudelleenindeksointi valmis!';
$lang['stopwords'] = 'Sanat, joita ei haeta';
$lang['searchresultsfor'] = 'Haun tulokset';
$lang['noresultsfound'] = 'Hakusi ei tuottanut yht&auml;&auml;n tulosta!';
$lang['timetaken'] = 'Haku kesti';
$lang['usestemming'] = 'Taivutusmuotojen haku (vain englanninkielisille sanoille)';
$lang['searchtemplate'] = 'Hakupohja';
$lang['resulttemplate'] = 'Tulospohja';
$lang['submit'] = 'L&auml;het&auml;';
$lang['sysdefaults'] = 'Palauta oletukset';
$lang['searchtemplateupdated'] = 'Hakupohja p&auml;ivitetty';
$lang['resulttemplateupdated'] = 'Tulospohja p&auml;ivitetty';
$lang['restoretodefaultsmsg'] = 'T&auml;m&auml; toiminto palauttaa pohjan sis&auml;ll&ouml;n j&auml;rjestelm&auml;n oletussis&auml;lt&ouml;&ouml;n. Haluatko jatkaa?';
$lang['options'] = 'Valinnat';
$lang['eventdesc-SearchInitiated'] = 'L&auml;hetet&auml;&auml;n, kun haku on aloitettu.';
$lang['eventdesc-SearchCompleted'] = 'L&auml;hetet&auml;&auml;n haun loputtua.';
$lang['eventdesc-SearchItemAdded'] = 'L&auml;hetet&auml;&auml;n, kun uusi asia indeksoidaan.';
$lang['eventdesc-SearchItemDeleted'] = 'L&auml;hetet&auml;&auml;n, kun jotain poistetaan indeksist&auml;.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'L&auml;hetet&auml;&auml;n, kun kaikki poistetaan indeksist&auml;.';
$lang['eventhelp-SearchInitiated'] = '<p>L&auml;hetet&auml;&auml;n, kun haku on aloitettu.</p>
<h4>Parametrit</h4>
<ol>
<li>Haettu teksti.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>L&auml;hetet&auml;&auml;n haun loputtua.</p>
<h4>Parametrit</h4>
<ol>
<li>Haettu teksti.</li>
<li>Taulukko tuloksista.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>L&auml;hetet&auml;&auml;n, kun uusi asia indeksoidaan.</p>
<h4>Parametrit</h4>
<ol>
<li>Moduulin nimi.</li>
<li>Asian Id.</li>
<li>Lis&auml;attribuutti.</li>
<li>Sis&auml;lt&ouml;, joka indeksoidaan ja lis&auml;t&auml;&auml;n.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>L&auml;hetet&auml;&auml;n, kun jotain poistetaan indeksist&auml;.</p>
<h4>Parametrit</h4>
<ol>
<li>Moduulin nimi.</li>
<li>Asian Id.</li>
<li>Lis&auml;attribuutti.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>L&auml;hetet&auml;&auml;n, kun kaikki poistetaan indeksist&auml;.</p>
<h4>Parametrit</h4>
<ul>
<li>Ei mit&auml;&auml;n</li>
</ul>
';
$lang['help'] = '	<h3>Mit&auml; t&auml;m&auml; moduuli tekee?</h3>
	<p>Hakumoduuli on ytimen ja tiettyjen rekister&ouml;ityjen moduulien sis&auml;ll&ouml;n hakemiseen. Moduuli ottaa sy&ouml;tteen&auml;&auml;n yksi tai kaksi sanaa ja palauttaa niihin sopivia tuloksia.</p>
	<h3>Miten sit&auml; k&auml;ytet&auml;&auml;n?</h3>
	<p>Helpoin tapa on {search} -k&auml;&auml;retagi (k&auml;&auml;rii moduulin tagiin, syntaksin yksinkertaistamiseksi). Se lis&auml;&auml; moduulin sivupohjaan tai sivulle minne halutaan ja n&auml;ytt&auml;&auml; hakulomakkeen. Koodi n&auml;ytt&auml;&auml; suunnilleen t&auml;lt&auml;: <code>{search}</code></p>
<h4>Kuinka tietyn sis&auml;ll&ouml;n indeksointi estet&auml;&auml;n?</h4>
<p>Search-moduuli ei hae &quot;ep&auml;aktiivisilta&quot; sivuilta. Esimerkiksi CustomContent-moduulia tai muuta smarty-logiikkaa k&auml;ytett&auml;ess&auml; siihen, ett&auml; eri sis&auml;lt&ouml;&auml; n&auml;ytet&auml;&auml;n eri k&auml;ytt&auml;jille, voi olla hyv&auml; est&auml;&auml; koko sivun indeksointi, vaikka sivu olisikin aktiivinen. T&auml;m&auml; tehd&auml;&auml;n lis&auml;&auml;m&auml;ll&auml; mihin tahansa sivulle seuraava tagi: <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> Kun hakumoduuli n&auml;kee t&auml;m&auml;n tagin sivulla, se ei indeksoi mit&auml;&auml;n sivun sis&auml;lt&ouml;&auml;.</p>
<p><em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> -tagin voi laittaa my&ouml;s sivupohjaan. Jos n&auml;in tehd&auml;&auml;n, mit&auml;&auml;n tuohon pohjaan liitetty&auml; sivua ei indeksoida. Jos tagi poistetaan, sivut on ideksoitava uudelleen.</p>';
$lang['utmz'] = '156861353.1269853138.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['qca'] = 'P0-418055388-1269853137911';
$lang['utma'] = '156861353.2121864343.1269853138.1274266042.1274341684.17';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1274341684';
?>
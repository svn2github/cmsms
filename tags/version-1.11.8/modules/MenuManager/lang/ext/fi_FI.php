<?php
$lang['help_action'] = 'Specify the behavior of the module.  There are two possiblities for this parameter:
<ul>
  <li>default <em>(default)</em> - Used for building a navigation menu.</li>
  <li>breadcrumbs - Used to build a breadcrumb trail to the currently displayed page.  <strong>Note: {cms_breadcrumbs}</strong> is a short way of calling this action.</li>
</ul>';
$lang['help_root'] = 'Applicable only to the breadcrumbs action, allows specifying a start level that is not the default page.';
$lang['youarehere'] = 'Olet t&auml;ss&auml;';
$lang['set_cachable'] = 'Aseta t&auml;m&auml; sivupohja v&auml;limuistiin lis&auml;tt&auml;v&auml;ksi';
$lang['help_nocache'] = 'Aseta pois p&auml;&auml;lt&auml; kaikki t&auml;m&auml;n valikon kutsun v&auml;limuistin k&auml;ytt&ouml;. Jos t&auml;m&auml; parametri on asetettu mihin tahansa positiiviseen arvoon, ohittaa se kaikki asetukset sis&auml;lt&ouml;objektista ja valikkomallista.';
$lang['cachable'] = 'V&auml;limuistissa';
$lang['help_childrenof'] = 'T&auml;m&auml; asetus n&auml;ytt&auml;&auml; valikossa ainoastaan kohteet, jotka ovat alasivuja valitulle sivulle tai aliakselle, esimerkiksi  <code>{menu childrenof=$page_alias}</code> n&auml;ytt&auml;&auml; ainoastaan nykyisen sivun alasivut.';
$lang['usage'] = 'K&auml;ytt&ouml;';
$lang['import'] = 'Tuo';
$lang['edit'] = 'Muokkaa';
$lang['delete'] = 'Poista';
$lang['help_loadprops'] = 'K&auml;yt&auml; parametria, kun k&auml;yt&auml;t monipuolisempia asetuksia valikonhallintamalleissa. T&auml;m&auml; parametri pakottaa kaikkien sis&auml;lt&ouml;asetusten lataamisen jokaiselle tietosolmulle (kuten extra1, image, thumbnail jne.) ja lis&auml;&auml; dramaattisesti kyselyjen m&auml;&auml;r&auml;&auml; jokaisen valikon luomiseksi ja lis&auml;&auml; my&ouml;s muistivaatimuksia, mutta sallii monimutkaisempien valikoiden luomisen.';
$lang['readonly'] = 'vain luku';
$lang['error_templatename'] = 'Et voi m&auml;&auml;ritell&auml; nime&auml; mallille .tpl p&auml;&auml;tteell&auml;';
$lang['this_is_default'] = 'Oletusvalikkomalli';
$lang['set_as_default'] = 'Aseta oletusvalikkomalliksi';
$lang['default'] = 'Oletus';
$lang['templates'] = 'Mallit';
$lang['addtemplate'] = 'Lis&auml;&auml; malli';
$lang['areyousure'] = 'Haluatko varmasti poistaa t&auml;m&auml;n?';
$lang['dbtemplates'] = 'Tietokantamallit';
$lang['description'] = 'Hallitse valikkomalleja.';
$lang['deletetemplate'] = 'Poista malli';
$lang['edittemplate'] = 'Muokkaa mallia';
$lang['filename'] = 'Tiedostonimi';
$lang['filetemplates'] = 'Tiedostomallit';
$lang['help_includeprefix'] = 'Ota mukaan vain ne kohdat, joiden sivualias sis&auml;lt&auml;&auml; yhden m&auml;&auml;ritetyist&auml; etuliitteist&auml; (pilkulla erotettu lista). T&auml;t&auml; parametria ei voi k&auml;ytt&auml;&auml; yhdess&auml; excludeprefix-parametrin kanssa.';
$lang['help_excludeprefix'] = 'J&auml;t&auml; pois kaikki ne kohdat (ja niiden lapset) joiden sivualias sis&auml;lt&auml;&auml; yhden m&auml;&auml;ritetyist&auml; etuliitteist&auml; (pilkulla erotettu lista). T&auml;t&auml; parametria ei pid&auml; k&auml;ytt&auml;&auml; yhdess&auml; includeprefix-parametrin kanssa.';
$lang['help_collapse'] = 'Arvolla 1 valikko piilottaa kohdat, jotka eiv&auml;t liity valittuun sivuun.';
$lang['help_items'] = 'K&auml;yt&auml; t&auml;t&auml; valitaksesi sivut, jotka n&auml;kyv&auml;t t&auml;ss&auml; valikossa. Listan tulee olla sivualiaksia pilkulla erotettuna.';
$lang['help_number_of_levels'] = 'T&auml;ll&auml; asetuksella voit rajoittaa, kuinka syv&auml;lle hierarkiassa t&auml;m&auml; valikko n&auml;ytt&auml;&auml;.';
$lang['help_show_all'] = 'Jos t&auml;m&auml; asetus on kytkettyn&auml;, valikko n&auml;ytt&auml;&auml; kaikki sivut, vaikka ne olisi asetettu olemaan n&auml;kym&auml;tt&auml;. T&auml;m&auml; asetus ei silti n&auml;yt&auml; ep&auml;aktiivisia sivuja.';
$lang['help_show_root_siblings'] = 'Hy&ouml;dyllinen vain jos start_element tai start_page on k&auml;yt&ouml;ss&auml;. N&auml;ytt&auml;&auml; sisarukset valitun start_pagen/elementin vierell&auml;.';
$lang['help_start_level'] = 'N&auml;ytt&auml;&auml; vain m&auml;&auml;r&auml;tyn tason alapuolella olevat linkit. Sivulla voi olla esimerkiksi yksi menu, jolla on number_of_levels=&#039;1&#039; ja toinen menu, jolla on start_level=&#039;2&#039;. Nyt toinen menu n&auml;ytt&auml;&auml; linkkej&auml; sen mukaan, mit&auml; on valittu ensimm&auml;isest&auml; menusta.';
$lang['help_start_element'] = 'Aloittaa valikon m&auml;&auml;r&auml;tyst&auml; kohtaa (sivun id esim. 5.1.2) ja n&auml;ytt&auml;&auml; t&auml;m&auml;n kohdan ja kaikki siit&auml; alasp&auml;in';
$lang['help_start_page'] = 'Aloittaa valikon m&auml;&auml;r&auml;tyst&auml; kohtaa (sivun alias esim. alisivu) ja n&auml;ytt&auml;&auml; t&auml;m&auml;n kohdan ja kaikki siit&auml; alasp&auml;in';
$lang['help_template'] = 'Mit&auml; mallia k&auml;ytet&auml;&auml;n valikon n&auml;ytt&auml;miseen. Mallit tulevat tietokantamalleista, jollei mallin nimi lopu .tpl-p&auml;&auml;tteeseen, jolloin k&auml;ytet&auml;&auml;n tiedostopohjia MenuManagerin templates-hakemistosta.';
$lang['help'] = '	<h3>Mit&auml; t&auml;m&auml; tekee?</h3>
	<p>Valikkohallinta on moduuli, jolla saadaan erotettua valikkojen sis&auml;lt&ouml; ja ulkon&auml;k&ouml;. Mallit ovat smarty-malleja, joita voidaan helposti muokata k&auml;ytt&auml;j&auml;n tarpeisiin. Valikkohallinta siis vain sy&ouml;tt&auml;&auml; dataa malliin. Malleja muokkaamalla tai omia malleja tekem&auml;ll&auml; voi luoda l&auml;hes millaisen valikon tahansa.</p>
	<h3>Miten t&auml;t&auml; k&auml;ytet&auml;&auml;n?</h3>
	<p>Lis&auml;&auml; tagi malliin/sivuun: <code>{menu}</code>. Kutsulle annettavat parametrit on luetteloitu alla.</p>
	<h3>Miksi v&auml;litt&auml;&auml; malleista?</h3>
	<p>Valikkohallinta k&auml;ytt&auml;&auml; malleja n&auml;ytt&ouml;logiikkaan. Mukana tulee kolme mallia: cssmenu.tpl, minimal_menu.tpl ja simple_navigation.tpl. Ne kaikki luovat j&auml;rjest&auml;m&auml;tt&ouml;m&auml;n listan (ul) sivuista, k&auml;ytt&auml;en eri luokkia ja ID:eit&auml; CSS-tyylien kanssa.</p>
	<p>Huomaa: Kaikki valikon muotoilut hoidetaan CSS:ll&auml;. Tyylitiedostoja ei ole sis&auml;llytetty valikkohallintaan, vaan ne t&auml;ytyy lis&auml;t&auml; sivupohjaan erikseen. Jotta cssmenu.tpl-pohja toimisi IE:ss&auml;, sivun head-osaan t&auml;ytyy lis&auml;t&auml; linkki JavaScriptiin, joka tarvitaan hover-efektin toimimiseen IE:ss&auml;.</p>
	<p>Jos haluat luoda oman version pohjasta, kopioi pohja tietokantaan ja muokkaa t&auml;t&auml; pohjaa suoraan CMSMS-hallinnasta:
<ol>
	<li>Mene valikkohallintaan.</li>
	<li>Paina Tiedostomallit-v&auml;lilehte&auml; ja paina &quot;Tuo malli tietokantaan&quot;-nappia (esim.) simple_navigation.tpl:n vieress&auml;.</li>
	<li>Anna tuodulle mallille nimi. T&auml;ss&auml; esimerkiss&auml; k&auml;ytet&auml;&auml;n &quot;Testimalli&quot;.</li>
	<li>Nyt tulisi Tietokantamallit-v&auml;lilehdell&auml; n&auml;ky&auml; &quot;Testimalli&quot;-niminen malli.</li>
</ol>
	</p>
	<p>Nyt voit helposti muokata mallia tarpeisiisi. Lis&auml;&auml; luokkia, id:eit&auml; ja muita tageja siten, ett&auml; muotoilu on sellaista kuin haluat. Sitten voit lis&auml;t&auml; mallin sivuillesi seuraavalla koodilla {menu template=&#039;Testimalli&#039;}. Huomaa ett&auml; .tpl-p&auml;&auml;tett&auml; tulee k&auml;ytt&auml;&auml;, jos halutaan k&auml;ytt&auml;&auml; tiedostomalleja.</p>
	<p>Parametrit pohjassa k&auml;ytett&auml;v&auml;lle $node-oliolle ovat:
		<ul>
			<li>$node->id -- Sis&auml;ll&ouml;n ID</li>
			<li>$node->url -- Sivun URL</li>
			<li>$node->accesskey -- Pikan&auml;pp&auml;in, jos m&auml;&auml;ritelty</li>
			<li>$node->tabindex -- Sarkainj&auml;rjestys, jos m&auml;&auml;ritelty</li>
			<li>$node->titleattribute -- Kuvaus tai otsikko (title), jos m&auml;&auml;ritelty</li>
			<li>$node->hierarchy -- Hierarkianumero, (esim. 1.3.3)</li>
			<li>$node->depth -- Syvyys (taso) t&auml;lle linkille t&auml;ss&auml; valikossa</li>
			<li>$node->prevdepth -- Syvyys (taso), edellisen kohdan syvyys</li>
			<li>$node->haschildren -- Palauttaa true, jos t&auml;ll&auml; nodella on alinodeja n&auml;ytett&auml;v&auml;ksi</li>
			<li>$node->children_exist -- Palauttaa true jos, jos t&auml;ll&auml; nodella on sellaisia alinodeja saatavilla tietokannassa, jotka voidaan my&ouml;s n&auml;ytt&auml;&auml; valikossa</li>
			<li>$node->menutext -- Valikon teksti</li>
			<li>$node->raw_menutext -- Valikon teksti ilman html-erikoismerkkien k&auml;&auml;nn&ouml;st&auml;.</li>
                        <li>$node->alias -- Sivun alias</li>
			<li>$node->extra1 -- T&auml;m&auml; sis&auml;lt&auml;&auml; sivun extra1-ominaisuuden, ellei loadprops-parametriin ole asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->extra2 -- T&auml;m&auml; sis&auml;lt&auml;&auml; sivun extra2-ominaisuuden, ellei loadprops-parametriin ole asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->extra3 -- T&auml;m&auml; sis&auml;lt&auml;&auml; sivun extra3-ominaisuuden, ellei loadprops-parametriin ole asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->image -- T&auml;m&auml; sis&auml;lt&auml;&auml; sivun kuva-ominaisuuden (jos ei tyhj&auml;), ellei loadprops-parametriin ole asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->thumbnail -- T&auml;m&auml; sis&auml;lt&auml;&auml; sivun esikatselukuva-ominaisuuden (jos ei tyhj&auml;), ellei loadprops-parametriin ole asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->target -- Linkin kohde (target). Tyhj&auml;, jos sis&auml;lt&ouml; ei aseta t&auml;t&auml; tai jos loadprops-parametriin on asetettu tieto ett&auml; ominaisuuksia EI ladata.</li>
			<li>$node->created -- Osion luontip&auml;iv&auml;m&auml;&auml;r&auml;</li>
			<li>$node->modified -- Osion muokkausp&auml;iv&auml;m&auml;&auml;r&auml;</li>
                        <li>$node->index -- J&auml;rjestysnumero t&auml;ss&auml; valikossa</li>
			<li>$node->parent -- Tosi (true), jos t&auml;m&auml; node on ylinode valitulle sivulle</li>
		</ul>
	</p>
        <h3>V&auml;limuisti</h3>
        <p>T&auml;ll&auml; moduulilla on kyky luoda omasta tulosteestaan v&auml;limuistina toimiva tiedosto ja n&auml;in sek&auml; v&auml;hent&auml;&auml; osaltaan muistivaatimuksia ja sql-pyynt&ouml;j&auml; ett&auml; parantaa sivujen nopeutta.</p>
        <p>Jokaisen valikon voi merkit&auml; &amp;quot;V&auml;limuistissa&amp;quot;-tilaan. Kun v&auml;limuistia k&auml;ytt&auml;v&auml; valikkomalli on k&auml;ytetty sis&auml;lt&ouml;sivulla joka k&auml;ytt&auml;&auml; v&auml;limuisti, k&auml;ytet&auml;&auml;n kaikkea v&auml;limuistiin laitettua tulostetta t&auml;lle sivulle. Valikko-tagin parametria &quot;nocache&quot; voi k&auml;ytt&auml;&auml; kun halutaan t&auml;ysin est&auml;&auml; v&auml;limuistin k&auml;ytt&ouml;.</p>
        <p>Kaikki v&auml;limuistiin lis&auml;tyt tiedostot poistetaan, kun sis&auml;ll&ouml;n osanen lis&auml;t&auml;&auml;n tai olemassa oleva poistetaan / sit&auml; muokataan... ja my&ouml;s silloin kun valikkomalli poistetaan/sit&auml; muokataan tai se poistetaan.</p>';
$lang['importtemplate'] = 'Tuo malli tietokantaan';
$lang['menumanager'] = 'Valikoiden hallinta';
$lang['newtemplate'] = 'Uuden mallin nimi';
$lang['nocontent'] = 'Sis&auml;lt&ouml;&auml; ei annettu';
$lang['notemplatefiles'] = 'Ei tiedostomalleja kohteessa %s';
$lang['notemplatename'] = 'Mallin nime&auml; ei annettu';
$lang['templatecontent'] = 'Mallin sis&auml;lt&ouml;';
$lang['templatenameexists'] = 'Samalla nimell&auml; on jo malli';
$lang['utma'] = '156861353.568653037.1343560238.1343560238.1343560444.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1343560444.2.2.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
$lang['utmb'] = '156861353.2.10.1343560444';
?>
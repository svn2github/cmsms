<?php
$lang['addtemplate'] = 'Lis&auml;&auml; malli';
$lang['areyousure'] = 'Haluatko varmasti poistaa?';
$lang['changelog'] = '	<ul>
	<li>
	<p>Versio: 1.0</p>
	<p>Ensimm&auml;inen julkaisu.</p>
	</li> 
	</ul> ';
$lang['dbtemplates'] = 'Tietokantamallit';
$lang['description'] = 'Hallitse valikkomalleja.';
$lang['deletetemplate'] = 'Poista malli';
$lang['edittemplate'] = 'Muokkaa mallia';
$lang['filename'] = 'Tiedostonimi';
$lang['filetemplates'] = 'Tiedostomallit';
$lang['help_collapse'] = 'Arvolla 1 valikko piilottaa kohdat jotka eiv&auml;t liity valittuun sivuun.';
$lang['help_items'] = 'K&auml;yt&auml; t&auml;t&auml; valitaksesi sivut jotka n&auml;kyv&auml;t t&auml;ss&auml; valikossa. Listan tulee olla sivualiaksia pilkulla erotettuna.';
$lang['help_number_of_levels'] = 'T&auml;ll&auml; asetuksella voit rajoittaa kuinka syv&auml;lle hierarkiassa t&auml;m&auml; sivu n&auml;ytt&auml;&auml;.';
$lang['help_show_root_siblings'] = 'Hy&ouml;dyllinen vain jos start_element tai start_page on k&auml;yt&ouml;ss&auml;. N&auml;ytt&auml;&auml; viereiset valikot valitusta sivusta.';
$lang['help_start_level'] = 'N&auml;ytt&auml;&auml; vain m&auml;&auml;r&auml;tyn tason alapuolella olevat linkit. esim. ykk&ouml;s tason navigoinnille number_of_levels=&#039;1&#039; ja kakkostason ja siit&auml; alasp&auml;in start_level=&#039;2&#039;.';
$lang['help_start_element'] = 'Aloittaa menun m&auml;&auml;r&auml;tyst&auml; kohtaa (sivun id esim. 5.1.2) ja n&auml;ytt&auml;&auml; t&auml;m&auml;n kohdan ja kaikki siit&auml; alasp&auml;in';
$lang['help_start_page'] = 'Aloittaa menun m&auml;&auml;r&auml;tyst&auml; kohtaa (sivun alias esim. alisivu) ja n&auml;ytt&auml;&auml; t&auml;m&auml;n kohdan ja kaikki siit&auml; alasp&auml;in';
$lang['help_template'] = 'Mit&auml; mallia k&auml;ytet&auml;&auml;n valikon n&auml;ytt&auml;miseen. Mallit tulevat tietokantamalleista jollei mallin nimi lopu .tpl-p&auml;&auml;tteeseen jolloin k&auml;ytet&auml;&auml;n tiedostopohjia';
$lang['help'] = '	<h3>Mit&auml; t&auml;m&auml; tekee?</h3>
	<p>Valikkohallinta on moduuli, jolla saadaan erotettua valikkojen sis&auml;lt&ouml; ja ulkon&auml;k&ouml;. Mallit ovat smarty-malleja, joita voidaan helposti muokata k&auml;ytt&auml;j&auml;n tarpeisiin</p>
	<h3>Miten k&auml;yt&auml;n?</h3>
	<p>Lis&auml;&auml;t vain kutsun malliin / sivuun: <code>{cms_module module=&#039;menumanager&#039;}</code>.</p>
	<h3>Miksi v&auml;lit&auml;&auml; malleista?</h3>
	<p>Valikkohallinta k&auml;ytt&auml;&auml; malleja logiikan n&auml;ytt&auml;miseen. Mukana tulee kolme mallia: bulletmenu.tpl, cssmenu.tpl ja ellnav.tpl jotka n&auml;ytt&auml;v&auml;t yksinkertaisen j&auml;rjest&auml;m&auml;tt&ouml;m&auml;n listan sivuista. (n&auml;m&auml; mallit ovat muotoiltu vanhojen versioiden mukaisesti)</p>
	<p>Huomaa: Kaikki valikon muotoilut hoidetaan css:ll&auml;. css-koodia ei ole sis&auml;llytetty valikkohallintaan vaan se t&auml;ytyy lis&auml;t&auml; sivupohjaan. cssmenu.tpl pohjalle t&auml;ytyy my&ouml;s lis&auml;t&auml; javascript IE:t&auml; varten.</p>
	<p>Jos haluat luoda oman version pohjasta, kopioi pohja tietokantaan ja muokkaa t&auml;t&auml; pohjaa suoraan CMSMS-hallinnasta:<ol>
	<li>Mene valikkohallintaan.</li>
			<li>paina tiedostopohjat v&auml;lilehte&auml; ja paina tuo pohja tietokantaan nappia bulletmenu.tpl:n vieress&auml;.</li>
			<li>Anna tuodulle pohjalle nimi. T&auml;ss&auml; esimerkiss&auml; k&auml;ytet&auml;&auml;n &quot;Testi pohja&quot;.</li>
			<li>Nyt tulisi tietokantapohjat-v&auml;lilehdell&auml; n&auml;ky&auml; &quot;Testi pohja&quot; niminen pohja.</li>
		</ol>
	</p>
	<p>Nyt voit helposti muokata pohjaa tarpeisiisi ja lis&auml;t&auml; sen sivuillesi seuraavalla koodilla {cms_module module=&#039;menumanager&#039; template=&#039;Test Template&#039;}. Huomaa ett&auml; .tpl p&auml;&auml;tett&auml; tulee k&auml;ytt&auml;&auml; jos halutaan k&auml;ytt&auml;&auml; tiedostopohjia.</p>
	<p>k&auml;ytett&auml;vi&auml; parametreja $node pohjalle:
		<ul>
			<li>$node->id -- Sis&auml;ll&ouml;n ID</li>
			<li>$node->url -- Sivun URL</li>
			<li>$node->accesskey -- pikan&auml;pp&auml;in, jos m&auml;&auml;ritelty</li>
			<li>$node->tabindex -- Sarkain j&auml;rjestys</li>
			<li>$node->titleattribute -- Otsikko (title), jos m&auml;&auml;ritelty</li>
			<li>$node->hierarchy -- Hierarkia numero, (esim. 1.3.3)</li>
			<li>$node->depth -- Syvyys (taso) T&auml;lle linkille t&auml;ss&auml; valikossa</li>
			<li>$node->prevdepth -- Syvyys (taso) Edellisen kohdan syvyys</li>
			<li>$node->haschildren -- Palauttaa kyll&auml; (true) jos t&auml;ll&auml; nodella on lapsi nodeja n&auml;ytett&auml;v&auml;ksi</li>
			<li>$node->menutext -- Valikon teksti</li>
			<li>$node->index -- J&auml;rjestysnumero t&auml;ss&auml; valikossa</li>
			<li>$node->parent -- Palauttaa kyll&auml; (true) jos t&auml;m&auml; node on ylinode valitulle sivulle</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Tuo malli tietokantaan';
$lang['menumanager'] = 'Valikoiden hallinta';
$lang['newtemplate'] = 'Uuden mallin nimi';
$lang['nocontent'] = 'Sis&auml;lt&ouml;&auml; ei annettu';
$lang['notemplatefiles'] = 'Ei tiedostomalleja %s';
$lang['notemplatename'] = 'Mallin nime&auml; ei annettu';
$lang['templatecontent'] = 'Mallin sis&auml;lt&ouml;';
$lang['templatenameexists'] = 'Samalla nimell&auml; on jo malli';
$lang['utma'] = '156861353.2106463552.1148024391.1153762713.1154112793.5';
$lang['utmz'] = '156861353.1148024391.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>
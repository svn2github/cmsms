<?php
$lang['help_root'] = 'Použiteln&eacute; pouze pro akci breadcrumbs. Umožňuje nastavit poč&aacute;tečn&iacute; &uacute;roveň i na jinou než hlavn&iacute; str&aacute;nku.';
$lang['youarehere'] = 'Jste zde';
$lang['set_cachable'] = 'Povolit ke&scaron;ov&aacute;n&iacute; &scaron;ablony';
$lang['help_nocache'] = 'Zak&aacute;že ve&scaron;ker&eacute; ke&scaron;ov&aacute;n&iacute; menu. Pokud je tento parametr nastaven na libovolnou kladnou hodnotu, bude m&iacute;t přednost před ostatn&iacute;mi volbami obsahu nebo nastaven&iacute;m menu.';
$lang['cachable'] = 'Ke&scaron;ov&aacute;n&iacute;';
$lang['help_childrenof'] = 'Tato volba způsob&iacute;, že se v menu zobraz&iacute; pouze položky, kter&eacute; jsou potomky str&aacute;nky se zadan&yacute;m id nebo alias, např.: <code>{menu childrenof=$page_alias}</code> zobraz&iacute; pouze potomky aktu&aacute;ln&iacute; str&aacute;nky.';
$lang['usage'] = 'Použit&iacute;';
$lang['import'] = 'Import';
$lang['edit'] = 'Upravit';
$lang['delete'] = 'Smazat';
$lang['help_loadprops'] = 'Tento parametr použijte pouze pokud NEPOUŽ&Iacute;V&Aacute;TE pokročil&eacute; vlastnosti ve va&scaron;ich &scaron;ablon&aacute;ch spr&aacute;vce menu. Tento parametr zak&aacute;že nač&iacute;t&aacute;n&iacute; v&scaron;ech vlastnost&iacute; obsahu pro každou položku menu (jako jsou extra1, obr&aacute;zek, n&aacute;hled atd.). V&yacute;razně se sn&iacute;ž&iacute; počet dotazů do datab&aacute;ze a paměťov&eacute; n&aacute;roky potřebn&eacute; pro sestaven&iacute; menu, ale znemožn&iacute; vytv&aacute;řen&iacute; složitěj&scaron;&iacute;ch menu.';
$lang['readonly'] = 'pouze pro čten&iacute;';
$lang['error_templatename'] = 'Nemůžete zadat jm&eacute;no &scaron;ablony konč&iacute;c&iacute; na .tpl';
$lang['this_is_default'] = 'V&yacute;choz&iacute; &scaron;ablona menu';
$lang['set_as_default'] = 'Nastavit jako v&yacute;choz&iacute; &scaron;ablonu menu';
$lang['default'] = 'V&yacute;choz&iacute;';
$lang['templates'] = '&Scaron;ablony';
$lang['addtemplate'] = 'Přidat &scaron;ablonu';
$lang['areyousure'] = 'Jsi si jist&yacute; smaz&aacute;n&iacute;m?';
$lang['changelog'] = '	<ul>
<li>1.7 - Adds the possibility to cache menumanager output to a cache file, this will remove a bunch of queries from mostly static sites. Fixes to childrenof parameter.</li>
<li>1.6.3 - Adds usage column.</li>
<li>1.6.2 - Can no longer delete default template, fix problem with default database templates.</li>
<li>1.6.1 - Add created and modified entries on each node.</li>
<li>1.6 - Re-design admin interface, allow setting the default menu manager template.</li>
        <li>1.5.4 - Minor bugfix, now require CMS 1.5.3.</li>
        <li>1.5.3 - Support for syntax hilighter.</li>
        <li>1.5.2 - Added more fields available in each node in the template.</li>
        <li>1.5 - Bump version to be compatible with 1.1 only, and add the SetParameterTypes calls</li>
	<li>1.4.1 -- Fix a problem where menus would not show if includeprefix was not specified.
	<li>1.4 -- Accept a comma separated list of includeprefixes or excludeprefixes</li>
	<li>1.3 -- Added includeprefix and excludeprefix params</li>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Datab&aacute;zov&eacute; &scaron;ablony';
$lang['description'] = 'Spravovat &scaron;ablony menu pro zobrazen&iacute; menu v jak&eacute;koliv představiteln&eacute; podobě.';
$lang['deletetemplate'] = 'Smazat &scaron;ablonu';
$lang['edittemplate'] = 'Upravit &scaron;ablonu';
$lang['filename'] = 'Jm&eacute;no souboru';
$lang['filetemplates'] = '&Scaron;ablony souboru';
$lang['help_includeprefix'] = 'Přiřadit pouze ty položky, u kter&yacute;ch page alias obsahuje zadan&yacute; prefix.  Tento parametr nemůže b&yacute;t kombinov&aacute;n s parametrem excludeprefix.';
$lang['help_excludeprefix'] = 'Vyloučit v&scaron;echny položky (a jejich potomky), u kter&yacute;ch page alias obsahuje uveden&yacute; prefix. Tento parametr nesm&iacute; b&yacute;t použ&iacute;v&aacute;n v kombinaci s parametrem includeprefix.';
$lang['help_collapse'] = 'Zapněte (nastavte na 1) pro ukryt&iacute; položek menu, kter&eacute; se nevztahuj&iacute; k pr&aacute;vě vybran&eacute; str&aacute;nce.';
$lang['help_items'] = 'Použijte tuto položku pro vybr&aacute;n&iacute; seznamu str&aacute;nek, kter&eacute; m&aacute; toto menu zobrazit.  Hodnotou by měl b&yacute;t seznam alias str&aacute;nek oddělen&yacute;ch č&aacute;rkami.';
$lang['help_number_of_levels'] = 'Toto nastaven&iacute; povol&iacute; zobrazen&iacute; menu pouze po určitou hloubku &uacute;rovn&iacute;.';
$lang['help_show_all'] = 'Tato volba způsob&iacute; zobrazen&iacute; v&scaron;ech položek menu i přes nastaven&iacute; nezobrazov&aacute;n&iacute; v menu. Toto i nad&aacute;le nezobraz&iacute; neaktivn&iacute; str&aacute;nky.';
$lang['help_show_root_siblings'] = 'Tato volba je užitečn&aacute; pouze pokud jsou použity elementy start_element nebo start_page.  Zobraz&iacute; sourozence po straně vybran&eacute;ho start_page/elementu.';
$lang['help_start_level'] = 'Tato volba způsob&iacute;, že menu zobraz&iacute; pouze položky zač&iacute;naj&iacute;c&iacute; na určit&eacute; &uacute;rovni. Snadn&yacute;m př&iacute;kladem může b&yacute;t situace, kdy m&aacute;te prvn&iacute; menu na str&aacute;nce s number_of_levels=&#039;1&#039;.  Pak jako druh&eacute; menu m&aacute;te start_level=&#039;2&#039;.  Teď va&scaron;e druh&eacute; menu uk&aacute;že položky v z&aacute;vislosti na tom, co je vybr&aacute;no v prvn&iacute;m menu.';
$lang['help_start_element'] = 'Menu začne zobrazovat určen&yacute; start_element given start_element a ukazuje pouze tento element a jeho potomky.  Přeb&iacute;r&aacute; hierarchickou pozici (např. 5.1.2).';
$lang['help_start_page'] = 'Menu začne zobrazovat určenou start_page a ukazuje pouze tento element a jeho potomky. Přeb&iacute;r&aacute; alias str&aacute;nky.';
$lang['help_template'] = '&Scaron;ablona pro zobrazen&iacute; menu.  &Scaron;ablony budou vytvořeny podle datab&aacute;zov&yacute;ch &scaron;ablon. Pouze pokud jm&eacute;no &scaron;ablony konč&iacute; na .tpl, signalizuje to um&iacute;stěn&iacute; &scaron;ablony v adres&aacute;ři &scaron;ablon MenuManageru. ';
$lang['help'] = '	<h3>Co to děl&aacute;?</h3>
	<p>Spr&aacute;vce menu je modul pro oddělen&iacute; menu do snadno použiteln&eacute;ho a upraviteln&eacute;ho syst&eacute;mu. Přev&aacute;d&iacute; menu do &scaron;ablon smarty a ty mohou b&yacute;t jednodu&scaron;e přizpůsobeny potřeb&aacute;m uživatele. Je to tak, že spr&aacute;vce menu je pouze n&aacute;stroj, kter&yacute;m jsou přin&aacute;&scaron;ena data do &scaron;ablony. &Uacute;pravou existuj&iacute;c&iacute;ch &scaron;ablon, nebo vytvořen&iacute;m nov&yacute;ch, si můžete vytvořit jak&eacute;koli menu, kter&eacute; si dok&aacute;žete představi.</p>
	<h3>Jak se použ&iacute;v&aacute;?</h3>
	<p>Stač&iacute; vložit do &scaron;ablony nebo str&aacute;nky: <code>{menu}</code>. Seznam použiteln&yacute;ch parametrů je uveden n&iacute;že.</p>
	<h3>Proč se zaj&iacute;mat o &scaron;ablony?</h3>
	<p>Spr&aacute;vce menu využ&iacute;v&aacute; &scaron;ablony pro logiku zobraen&iacute;. Je dod&aacute;v&aacute;n se třemi z&aacute;kjladn&iacute;mi &scaron;ablonami: cssmenu.tpl, minimal_menu.tpl a simple_navigation.tpl. V&scaron;echny vytv&aacute;ř&iacute; z&aacute;kladn&iacute; neč&iacute;slovan&yacute; seznam str&aacute;nek a použ&iacute;vaj&iacute; různ&eacute; tř&iacute;dy a ID pro stylov&aacute;n&iacute; v CSS.</p>
	<p>Vzhled menu můžete upravit v CSS. Styly nejsou souč&aacute;st&iacute; Spr&aacute;vce menu, mus&iacute;te je připojit k &scaron;abloně str&aacute;nky samostatně. Pro &scaron;ablonu cssmenu.tpl může b&yacute;t potřeba připojit JavaScript, aby efekt při najet&iacute; my&scaron;i fungoval i pro star&scaron;&iacute; verze IE.</p>
	<p>Pokud chcete vytvořit upravenou verzi &scaron;ablony, můžete ji jednodu&scaron;e naimportovat do datab&aacute;ze a př&iacute;mo upravovat v administraci CMSMS. Postup je n&aacute;sleduj&iacute;c&iacute;:
		<ol>
			<li>Klikněte na Vzhled - Spr&aacute;vce menu.</li>
			<li>Klikněte na tlač&iacute;tko Importovat &scaron;ablonu do datab&aacute;ze, kter&eacute; je např&iacute;klad vedle simple_navigation.tpl.</li>
			<li>Kopii &scaron;ablony pojmenujte. Můžeme j&iacute; ř&iacute;kat třeba &quot;Testovac&iacute; &scaron;ablona&quot;.</li>
			<li>Va&scaron;e nov&aacute; &scaron;ablona by se nyn&iacute; měla objevit na seznamu.</li>
		</ol>
	</p>
	<p>Nyn&iacute; můžete snadno upravit &scaron;ablonu tak, jak pro sv&eacute; str&aacute;nky potřebujete. Přidejte tř&iacute;dy, id a ostatn&iacute; tagy tak, aby bylo form&aacute;tov&aacute;n&iacute; přesně podle Va&scaron;ich představ. Nyn&iacute; vložte do &scaron;ablony str&aacute;nky nebo do obsahu {menu template=&#039;Testovac&iacute; &scaron;ablona&#039;}. Pokud vkl&aacute;d&aacute;te souborovou &scaron;ablonu, a ne datab&aacute;zovou, mus&iacute;te tak&eacute; uv&eacute;st př&iacute;ponu souboru .tpl v n&aacute;zvu.</p>
	<p>Parametry pro objekty $node použit&eacute; v &scaron;ablon&aacute;ch jsou:
		<ul>
			<li>$node->id -- ID str&aacute;nky</li>
			<li>$node->url -- URL str&aacute;nky</li>
			<li>$node->accesskey -- Kl&aacute;vesov&aacute; zkratka, pokud je definov&aacute;na</li>
			<li>$node->tabindex -- Z&aacute;ložkov&eacute; menu, pokud je definov&aacute;no</li>
			<li>$node->titleattribute -- Popisek (atribut titulku), pokud je definov&aacute;n</li>
			<li>$node->hierarchy -- Um&iacute;stěn&iacute; v hierarchii (např. 1.3.3)</li>
			<li>$node->depth -- Hloubka (&uacute;roveň) t&eacute;to položky v menu</li>
			<li>$node->prevdepth -- Hloubka (&uacute;roveň) předch&aacute;zej&iacute;c&iacute; položky v menu</li>
			<li>$node->haschildren -- Vrac&iacute; true, pokud m&aacute; položka vnořen&eacute; položky (potomky), kter&eacute; mohou b&yacute;t v tomto menu zobrazeny</li>
			<li>$node->children_exist -- Vrac&iacute; true, pokud m&aacute; tato položka v datab&aacute;zi dostupn&eacute; vnořen&eacute; položky (potomky), kter&eacute; mohou b&yacute;t v tomto menu zobrazeny</li>
			<li>$node->menutext -- Text menu</li>
			<li>$node->raw_menutext -- Text menu bez převodu html entit</li>
			<li>$node->alias -- Alias str&aacute;nky</li>
			<li>$node->extra1 -- Toto pole obsahuje hodnotu zadanou do Extra atribut str&aacute;nky 1, pokud NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->extra2 -- Toto pole obsahuje hodnotu zadanou do Extra atribut str&aacute;nky 2, pokud NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->extra3 -- Toto pole obsahuje hodnotu zadanou do Extra atribut str&aacute;nky 3, pokud NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->image -- Toto pole obsahuje obr&aacute;zek str&aacute;nky (pokud je definov&aacute;n), pokud NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->thumbnail -- Toto pole obsahuje n&aacute;hled str&aacute;nky, pokud je definov&aacute;n a NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->target -- Toto pole obsahuje c&iacute;l odkazu (atribut target), pokud je definov&aacute;n a NEN&Iacute; nastaven parametr loadprops.</li>
			<li>$node->created -- Datum vytvořen&iacute; položky</li>
			<li>$node->modified -- Datum &uacute;pravy položky</li>
			<li>$node->index -- Pořad&iacute; t&eacute;to položky v r&aacute;mci cel&eacute;ho menu</li>
			<li>$node->parent -- True, pokud je tato položka nadřazenou položkou (rodičem) pr&aacute;vě zobrazen&eacute; str&aacute;nky</li>
			<li>$node->current -- True, pokud je tato položka pr&aacute;vě zobrazen&aacute; str&aacute;nka</li>
                        <li>$node->first -- existuje a m&aacute; hodnotu 1 pokud je položka prvn&iacute; položkou v dan&eacute; &uacute;rovni menu.</li>
                        <li>$node->last -- existuje a m&aacute; hodnotu 1 pokud je položka prvn&iacute; položkou v dan&eacute; &uacute;rovni menu.</li>
		</ul>
	</p>
        <h3>Ke&scaron;ov&aacute;n&iacute;</h3>
        <p>Tento modul dok&aacute;že ke&scaron;ovat v&yacute;stup do statick&eacute;ho souboru, aby sn&iacute;žil n&aacute;roky na paměť a množstv&iacute; SQL dotazů, což zlep&scaron;uje v&yacute;kon a rychlost nač&iacute;t&aacute;n&iacute; str&aacute;nek. Tento postup m&aacute; v&scaron;echny v&yacute;hody statick&yacute;ch menu a zbavuje se nev&yacute;hod obt&iacute;žn&eacute; &uacute;držby menu při vytv&aacute;řen&iacute; nebo &uacute;prav&aacute;ch str&aacute;nek.</p>
        <p>Každ&aacute; sablona menu může m&iacute;t povoleno &quot;Ke&scaron;ov&aacute;n&iacute;&quot;. Pokud je na ke&scaron;ovateln str&aacute;nce použita &scaron;ablona menu s povolen&yacute;m ke&scaron;ov&aacute;n&iacute;m, str&aacute;nka použije ve&scaron;ker&yacute; dostupn&yacute; statick&yacute; v&yacute;stup menu. Pro &uacute;pln&eacute; zak&aacute;z&aacute;n&iacute; ke&scaron;ov&aacute;n&iacute; menu může b&yacute;t použit parametr nocache.</p>
        <p>V&scaron;echny ke&scaron;ovan&eacute; soubory menu jsou vymaz&aacute;ny při vytvořen&iacute;, &uacute;pravě nebo smaz&aacute;n&iacute; str&aacute;nky, a tak&eacute; pokud je vytvořena, změn&scaron;na nebo smaz&aacute;na &scaron;ablona menu.</p>';
$lang['importtemplate'] = 'Importovat &scaron;ablonu nebo datab&aacute;zi';
$lang['menumanager'] = 'Spr&aacute;vce menu';
$lang['newtemplate'] = 'Jm&eacute;no nov&eacute; &scaron;ablony';
$lang['nocontent'] = 'Nespecifikov&aacute;n ž&aacute;dn&yacute; obsah';
$lang['notemplatefiles'] = 'Ž&aacute;dn&eacute; soubory &scaron;ablon v %s';
$lang['notemplatename'] = '&Scaron;ablona nebyla pojmenov&aacute;na.';
$lang['templatecontent'] = 'Obsah &scaron;ablony';
$lang['templatenameexists'] = '&Scaron;ablona s t&iacute;mto jm&eacute;nem již existuje';
$lang['utma'] = '156861353.947599811.1321089285.1321089285.1321103008.2';
$lang['utmz'] = '156861353.1321089285.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['qca'] = 'P0-2065764558-1319293569112';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
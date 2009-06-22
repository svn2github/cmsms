<?php
$lang['help_loadprops'] = 'Gebruik deze parameter wanneer u geavanceerde eigenschappen in uw menu manager gebruikt. Deze parameter zal het laden van alle inhoudstypen forceren voor elke node (zoals extra1, image, thumbnail, enz.) en zal het aantal queries om het menu te maken drastisch verlagen, waardoor het geheugengebruik veel lager wordt.';
$lang['readonly'] = 'Alleen lezen';
$lang['error_templatename'] = 'U kunt geen sjabloon maken met een .tpl extentie!';
$lang['this_is_default'] = 'Standaard Menu Sjabloon';
$lang['set_as_default'] = 'Instellen als Standaard Menu Sjabloon';
$lang['default'] = 'Standaard';
$lang['templates'] = 'Sjablonen';
$lang['addtemplate'] = 'Sjabloon toevoegen';
$lang['areyousure'] = 'Weet u zeker dat u dit wilt verwijderen?';
$lang['changelog'] = '	<ul>
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
$lang['dbtemplates'] = 'Database-sjablonen';
$lang['description'] = 'Beheer menusjablonen om menus in alle denkbare vormen te tonen.';
$lang['deletetemplate'] = 'Verwijder sjabloon';
$lang['edittemplate'] = 'Bewerk sjabloon';
$lang['filename'] = 'Bestandsnaam';
$lang['filetemplates'] = 'Bestandssjablonen';
$lang['help_includeprefix'] = 'Bevat die items waarvan de paginaalias overeen komt met een van de opgegeven (kommagescheiden) prefixen. Deze parameter mag niet gecombineerd worden met de excludeprefix parameter.';
$lang['help_excludeprefix'] = 'Sluit alle items uit (en hun subitems) waarvan de paginaalias overeen komt met een van de opgegeven (kommagescheiden) prefixen. Deze parameter mag niet gecombineerd worden met de includeprefix parameter.';
$lang['help_collapse'] = 'Zet aan (zet op 1) om de menuitems die niet gerelateerd zijn aan de huidige pagina, onzichtbaar te laten maken .';
$lang['help_items'] = 'Gebruik dit item om een lijst met pagina&#039;s te selecteren die dit menu moeten tonen.  De waarde moet een lijst van pagina-aliassen zijn gescheiden door komma&rsquo;s.';
$lang['help_number_of_levels'] = 'Deze instelling zorgt er voor dat het menu tot een bepaald aantal niveaus gaat.';
$lang['help_show_all'] = 'Deze optie laat alle knoppen in het menu zien, zelfs als deze op &#039;onzichtbaar&#039; staan. Het laat echter niet de inactieve pagina&#039;s zien.';
$lang['help_show_root_siblings'] = 'Deze optie is alleen handig als start_element of start_page is gebruikt. Het laat siblings naast de geselecteerde start_page/element zien.';
$lang['help_start_level'] = 'Deze optie zorgt er voor dat het menu alleen items laat zien vanaf een opgegeven startniveau.  Een gemakkelijk voorbeeld is dat u op een pagina een menu heeft met number_of_levels=&#039;1&#039; en een tweede menu waar start_level=&#039;2&#039;. Het tweede menu zal items tonen die gebaseerd zijn op wat er is geselecteerd in het eerste menu.';
$lang['help_start_element'] = 'Start een menu weergave op elk gegeven start_element en laat alleen dat element zien en de onderliggende elementen.  Gebruikt een hi&euml;rarchiepositie (b.v. 5.1.2).';
$lang['help_start_page'] = 'Start een menu weergave op elk gegeven start_page element. En laat alleen dat element en de onderliggende elementen zien. Gebruikt een pagina-alias.';
$lang['help_template'] = 'Het te gebruiken sjabloon voor de weergave van het menu. Sjablonen komen uit de database tenzij de sjabloonnaam eindigt op .tpl. In dat geval komt het sjabloon uit een bestand uit de Menu Manager-sjablonenmap.';
$lang['help'] = '	<h3>Wat doet het?</h3>
	<p>Menu Manager is een module om een menuraamwerk te maken dat eenvoudig bruikbaar en aanpasbaar is. Het raamwerk bestaat uit deelmenu&#039;s in de vorm van smarty-sjablonen die eenvoudig afgestemd kunnen worden op de gebruikerswensen. De Menu manager zelf is slechts het mechanisme dat het sjabloon vult. Door de sjablonen aan te passen of door uw eigen sjablonen te maken, kunt uw feitelijk ieder mogelijk menu cre&euml;ren.</p>
	<h3>Hoe gebruikt u het</h3>
	<p>Plaats de tag in uw sjabloon/pagina op de volgende manier: <code>{menu}</code>.  Er kunnen ook parameters meegegeven worden. De beschikbare parameters zijn hieronder opgenomen.</p>
	<h3>Waarom heeft u sjablonen nodig?</h3>
	<p>Menu Manager gebruikt sjablonen voor de weergavestructuur.  De module heeft standaard drie sjablonen, genaamd: cssmenu.tpl, minimal_menu.tpl en simple_navigation.tpl. Alle drie maken ze een eenvoudige, ongeordende lijst van pagina&#039;s, gebruikmakend van verschillende classes en ID&#039;s om via CSS de stijl te bepalen.</p>
	<p>Merk op dat het uiterlijk van het menu met CSS wordt bepaald. Stylesheets worden niet met Menu Manager meegeleverd, maar moeten apart gekoppeld worden aan de paginasjabloon. Om het cssmenu.tpl-sjabloon met IE te laten samenwerken, moet u in de kop van het paginasjabloon een link naar JavaScript plaatsen, nodig voor het hover (mouse over) effect.</p>
	<p>Als u een speciale versie van een sjabloon wilt maken, kunt u deze in de database importeren en vervolgens aanpassen via het beheerpaneel in CMSMS. Dit gaat als volgt in zijn werk:
		<ol>
			<li>Klik op Opmaak -> Menu Manager in het beheerpaneel.</li>
			<li>Klik vervolgens in het Bestandssjabloon-tabblad op de Importeerknop achter een bestaande bestandsnaam, bijvoorbeeld die achter simple_navigation.tpl.</li>
			<li>Geef de sjabloonkopie een naam, bijvoorbeeld &quot;Testsjabloon&quot;.</li>
			<li>U moet nu de Testsjabloon in het lijstje met Database-sjablonen zien.</li>
		</ol>
	</p>
	<p>Nu kunt u eenvoudig het sjabloon bewerken. Plaats er classes , id&#039;s en andere tags in om de gewenste stijl te krijgen. Hierna kunt u het invoegen in uw website met {menu template=&#039;Testsjabloon&#039;}. Merk op dat de .tpl extensie toegevoegd moet worden als een bestandssjabloon wordt gebruikt.</p>
	<p>De parameters voor het $node object die in het sjabloon gebruikt worden zijn:
		<ul>
			<li>$node->id -- Inhoud ID</li>
			<li>$node->url -- URL van de inhoud</li>
			<li>$node->accesskey -- Toegangssleutel (indien opgegeven)</li>
			<li>$node->tabindex -- Tabindex (indien opgegeven)</li>
			<li>$node->titleattribute -- Beschrijving of Titelattribuut (titel) (indien opgegeven)</li>
			<li>$node->hierarchy -- Hi&euml;rarchiepositie, (b.v. 1.3.3)</li>
			<li>$node->depth -- Diepte (niveau) van deze knoop in het huidige menu</li>
			<li>$node->prevdepth -- Diepte (niveau) van de knoop direct voor deze</li>
			<li>$node->haschildren -- Geeft de waarde &#039;true&#039; terug als de knoop onderliggende knoppen heeft die getoond moeten worden</li>
			<li>$node->menutext -- Menutekst</li>
			<li>$node->alias -- Pagealias</li>
			<li>$node->target -- Doel van de link. Zal leeg zijn als de inhoud het niet opgeeft.</li>
			<li>$node->index -- Nummer van deze knoop in het gehele menu</li>
			<li>$node->parent -- &#039;True&#039; als deze knoop een parent van de huidige, geselecteerd pagina is</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importeer sjabloon naar de database';
$lang['menumanager'] = 'Menubeheer';
$lang['newtemplate'] = 'Sjabloonnaam';
$lang['nocontent'] = 'Er is geen inhoud ingevoerd';
$lang['notemplatefiles'] = 'Er zijn geen bestandssjablonen in %s';
$lang['notemplatename'] = 'Er is geen sjabloonnaam opgegeven.';
$lang['templatecontent'] = 'Sjablooninhoud';
$lang['templatenameexists'] = 'Er bestaat al een sjabloon met deze naam';
$lang['utma'] = '156861353.799969050.1225024056.1244555916.1244572805.339';
$lang['utmz'] = '156861353.1244550087.337.59.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,34493.new.html';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
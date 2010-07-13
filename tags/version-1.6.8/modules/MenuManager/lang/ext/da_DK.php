<?php
$lang['help_loadprops'] = 'Anvend dette parameter under avancerede egenskaber i din menuh&aring;ndteringsskabelon.  Dette parameeter gennemtvinger indl&aelig;sning af alle egenskaber for hvert menupunkt (s&aring;som extra1, image, thumbnail, etc). Det medf&oslash;rer en dramatisk for&oslash;gelse af antallet af foresp&oslash;rgsler, som er n&oslash;dvendige for at opbygge menuen, hvilket stiller st&oslash;rre krav til hukommelse. Til geng&aelig;ld giver parametret adgang til langt mere avancerede menuer';
$lang['readonly'] = 'kun l&aelig;sning';
$lang['error_templatename'] = 'Du m&aring; ikke give et skabelonnavn endelsen .tpl';
$lang['this_is_default'] = 'Standardskabelon for menu';
$lang['set_as_default'] = 'Anvend som standardskabelon for menu';
$lang['default'] = 'Standard';
$lang['templates'] = 'Skabeloner';
$lang['addtemplate'] = 'Tilf&oslash;j skabelon';
$lang['areyousure'] = 'Er du sikker p&aring; dette skal slettes?';
$lang['changelog'] = '	<ul>
<li>1.5 - Bump version to be compatible with 1.1 only, and add the SetParameterTypes calls</li>
	<li>1.4.1 -- Fix a problem where menus would not show if includeprefix was not specified.
	<li>1.4 -- Accept a comma separated list of includeprefixes or excludeprefixes</li>
	<li>1.3 -- Added includeprefix and excludeprefix params</li>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Database skabeloner';
$lang['description'] = 'H&aring;ndt&eacute;r menuskabeloner s&aring; menuer kan vises p&aring; enhver t&aelig;nkeligt m&aring;de.';
$lang['deletetemplate'] = 'Slet skabelon';
$lang['edittemplate'] = 'Redig&eacute;r skabelon';
$lang['filename'] = 'Filnavn';
$lang['filetemplates'] = 'Filskabelon';
$lang['help_includeprefix'] = 'Medtag kun de menupunkter hvis side-alias passer med et af de angivne (komma-separerede) pr&aelig;fikser. Dette parameter kan ikke kombineres med exclude-pr&aelig;fix parametret.';
$lang['help_excludeprefix'] = 'Spring alle de menupunkter (og underpunkter) over, hvis side-alias passer med et af de angivne (komma-separerede) pr&aelig;fikser. Dette parameter kan ikke kombineres med include-pr&aelig;fiks parametret.';
$lang['help_collapse'] = 'Sl&aring; til (s&aelig;t til 1) for at lade menuen skjule punkter der ikke er relaterede til den valgte side.';
$lang['help_items'] = 'Brug dette punkt til at v&aelig;lge en liste af sider som denne menu skal vise. V&aelig;rdien skal v&aelig;re en list af side-alias&#039;er adskilt af kommaer.';
$lang['help_number_of_levels'] = 'Denne indstilling vil g&oslash;re at menuen kun viser et bestemt antal niveauer.';
$lang['help_show_all'] = 'Dette parameter vil tvinge menuen til at vise alle menupunkter selvom de er sat til ikke at blive vist. Inaktive menupunkter vil dog stadig ikke blive vist.';
$lang['help_show_root_siblings'] = 'Denne indstilling er nyttig hvis start_element eller start_page benyttes. Der kan angives at &quot;s&oslash;skende&quot;, dvs. menupunkter p&aring; samme niveau, skal vises ved siden af det valgte start_element/start_page.';
$lang['help_start_level'] = 'Denne indstilling g&oslash;r at menuen kun viser punkter startende fra det angivne niveau. Et hurtigt eksempel kunne v&aelig;re hvis du havde en menu p&aring; siden med number_of_levels=&#039;1&#039;. Og som en anden menu havde du start_level=&#039;2&#039;. S&aring; ville din anden menu vise menupunkter baseret p&aring; hvad du havde valgt i f&oslash;rste menu.';
$lang['help_start_element'] = 'Lad menuen starte ved menu-punktet start_element, og vis kun dette og dets underpunkter. skal v&aelig;re en gyldig hierarkisk position (f.eks. 5.1.2).';
$lang['help_start_page'] = 'Lad menuen starte ved den angivne menupunkt start_page og vis kun dette og dets underpunkter. Skal v&aelig;re et gyldigt side-alias.';
$lang['help_template'] = 'Den skabelon der skal bruge til visning af menuen. Skabeloner hentes fra database-skabeloner med mindre skabelonnavnet ender p&aring; &quot;.tpl&quot;, hvor de i stedet hentes fra en fil i underfolderen &quot;templates&quot; der ligger i Menuh&aring;ndteringens folder.';
$lang['help'] = '<h3>Hvad kan det?</h3>
	<p>Menuh&aring;ndtering er et modul, der skaber et let anvendeligt menusystem, som g&oslash;r det nemt at  tilpasse menuer efter eget &oslash;nske.  Modulet isolerer menuernes designdel som smarty skabeloner, som let kan modificeres helt efter brugerens behov. Det betyder, at menuh&aring;ndteringen i sig selv blot er en maskine, som fodrer skabelonen. Ved at tilpasse skabeloner - eller ved at lave dine egne skabeloner - kan du praktisk talt skabe en hvilken som helst menu, du kan komme i tanker om.</p>
	<h3>Hvordan anvendes det?</h3>
	<p>I din skabelon/side skal du blot inds&aelig;tte en kode som eksempelvis: <code>{menu}</code>.  De forskellige parametre, som kan inds&aelig;ttes, st&aring;r oplistet nedenfor.</p>
	<h3>Hvorfor skulle jeg ikke v&aelig;re ligeglad med skabeloner?</h3>
	<p>Menuh&aring;ndtering benytter sig af skabeloner for at skabe logik i den m&aring;de, hvorp&aring; menuer vises.  Der medf&oslash;lger tre standardskabeloner, som hedder cssmenu.tpl, minimal_menu.tpl og simple_navigation.tpl. Grundl&aelig;ggende danner de allesammen en simpel usorteret liste af sider ved hj&aelig;lp af forskellige CSS styling klasser og ID&#039;er.</p>
	<p>Bem&aelig;rk at du bestemmer menuernes udseende ved hj&aelig;lp af CSS. Menuh&aring;ndteringsmodulet indeholder ikke nogen typografiark. De skal tilknyttes sidens skabelon s&aelig;rskilt. For at f&aring; cssmenu.tpl-skabelonen til at virke i IE, skal du endvidere inds&aelig;tte et link til  JavaScript i head-delen i sidens skabelon. Dette er n&oslash;dvendigt for at f&aring; hover-effekten til at virke i IE.</p>
	<p>Hvis du vil lave en specialversion af en skabelon, kan du nemt importere den til databasen og derp&aring; redigere den direkte inde i CMSMS admin.  Dette g&oslash;res p&aring; f&oslash;lgende m&aring;de:
		<ol>
			<li>Klik p&aring; administration af Menuh&aring;ndtering.</li>
			<li>Klik p&aring; fanen Filskabeloner. Klik derp&aring; p&aring; knappen &quot;Import&eacute;r skabelon til databasen&quot; ved siden af f.eks. simple_navigation.tpl.</li>
			<li>Giv kopien af skabelonen et navn.  Vi kan jo kalde det &quot;Testskabelon&quot;.</li>
			<li>Nu skulle du kunne se &quot;Testskabelon&quot; i listen over databaseskabeloner.</li>
		</ol>
	</p>
	<p>Herefter er det let at redigere i skabelonen, s&aring; den kommer til at passe til dine behov for hjemmesiden.  Inds&aelig;t classes, id&#039;er og andre koder, s&aring; formateringen svarer pr&aelig;cist til dine &oslash;nsker. Nu kan du s&aring; s&aelig;tte skabelonen ind p&aring; din hjemmeside med {menu template=&#039;Testskabelon&#039;}. Bem&aelig;rk, at .tpl-endelsen SKAL med, hvis der anvendes en filskabelon.</p>
	<p>Der kan benyttes f&oslash;lgende parametre for $node objektet i skabelonen:
                        <li>$node->id -- Indholdets ID</li>
			<li>$node->url -- URL til indholdet</li>
			<li>$node->accesskey -- Genvejstast, hvis angivet</li>
			<li>$node->tabindex -- Tab-index, hvis angivet</li>
			<li>$node->titleattribute -- Titelattribut (title), hvis angivet</li>
			<li>$node->hierarchy -- Position i menuhierarkiet, (f.eks. 1.3.3)</li>
			<li>$node->depth -- Dybde (niveau) for dette punkt i den aktuelle menu</li>
			<li>$node->prevdepth -- Dybde (niveau) for det menupunkt, som ligger umiddelbart f&oslash;r dette punkt</li>
			<li>$node->haschildren -- Returnerer sand, hvis dette menupunkt har undermenuer eller underpunkter, som skal vises</li>
			<li>$node->menutext -- Menutekst</li>
			<li>$node->raw_menutext -- Menutekst uden konvertering af html entities</li>
			<li>$node->alias -- Sidealias</li>
			<li>$node->extra1 -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder v&aelig;rdien af &quot;extra1 page&quot;-egenskaben.</li>
			<li>$node->extra2 -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder v&aelig;rdien af &quot;extra2 page&quot;-egenskaben.</li>
			<li>$node->extra3 -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder v&aelig;rdien af &quot;extra3 page&quot;-egenskaben.</li>
			<li>$node->image -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder v&aelig;rdien af egenskaben for sidebilledet (hvis v&aelig;rdien ikke er tom)</li>
			<li>$node->thumbnail -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder v&aelig;rdien af egenskaben for thumbnail-side (hvis v&aelig;rdien ikke er tom)</li>
			<li>$node->target -- Anvendes kun hvis parametret &quot;loadprops&quot; er angivet i menu- tag&#039;et. Dette felt indeholder m&aring;let for linket. Vil v&aelig;re tom, s&aring;fremt m&aring;let ikke er bestemt af indholdet.</li>
			<li>$node->created -- Menupunktets oprettelsesdato</li>
			<li>$node->modified -- Menupunktets &aelig;ndringsdato</li>
			<li>$node->index -- Dette menupunkts nummer i den samlede menu</li>
			<li>$node->parent -- Sand, hvis dette menupunkt er &quot;for&aelig;ldre&quot; til den side, som p.t. er valgt</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Import&eacute;r skabelon til databasen';
$lang['menumanager'] = 'Menuh&aring;ndtering';
$lang['newtemplate'] = 'Nyt skabelonnavn';
$lang['nocontent'] = 'Intet indhold angivet';
$lang['notemplatefiles'] = 'Ingen filskabeloner i %s';
$lang['notemplatename'] = 'Intet skabelonnavn angivet.';
$lang['templatecontent'] = 'Skabelonindhold';
$lang['templatenameexists'] = 'En skabelon med dette navn eksisterer allerede';
$lang['utma'] = '156861353.1304443095.1256149436.1256747831.1257946219.9';
$lang['utmz'] = '156861353.1257946219.9.8.utmcsr=angstintern.dk|utmccn=(referral)|utmcmd=referral|utmcct=/angstforeningen.dk/admin/moduleinterface.php';
$lang['qca'] = 'P0-185996493-1256149435964';
$lang['utmc'] = '156861353';
?>
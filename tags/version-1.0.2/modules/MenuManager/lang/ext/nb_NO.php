<?php
$lang['addtemplate'] = 'Legg til mal';
$lang['areyousure'] = 'Er du sikker p&aring; at du vil slette dette?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Lagt til behandling av target(m&aring;l) parameteren, hovedsklig for Link innholds typen</li>
	<li>1.0 -- F&oslash;rste utgave</li>
	</ul> ';
$lang['dbtemplates'] = 'Database maler';
$lang['description'] = 'Behandle meny maler for &aring; vise menyer p&aring; alle tenkelige m&aring;ter';
$lang['deletetemplate'] = 'Slett mal';
$lang['edittemplate'] = 'Rediger mal';
$lang['filename'] = 'Filnavn';
$lang['filetemplates'] = 'Fil maler';
$lang['help_collapse'] = 'Sl&aring; p&aring; (sett til 1) for &aring; f&aring; menyen til &aring; skjule artikler som ikke er relatert til den valgte siden.';
$lang['help_items'] = 'Bruk denne verdien for &aring; velge en liste av sider som denne menyen skal vise.  Verdien skal v&aelig;re en liste over side-aliaser separert med komma.';
$lang['help_number_of_levels'] = 'Denne innstillingen vil bare tillate menyen &aring; vise et visst antall av niv&aring;er ned.';
$lang['help_show_root_siblings'] = 'Dette valget er kun nyttig om start_element eller start_page er i bruk.  I basis vil menyen vise s&oslash;sken langs siden p&aring; den valgte start_page/element.';
$lang['help_start_level'] = 'Dette valget vil f&aring; menyen til kun &aring; vise poster startende p&aring; et gitt niv&aring;.  Et enkelt eksempel vil v&aelig;re om du hadde en meny p&aring; siden med number_of_levels=&#039;1&#039;.  S&aring; som en andre meny, du kan ha start_level=&#039;2&#039;.  N&aring; vil din andre meny vise poster basert p&aring; hva som er valgt i den f&oslash;rste menyen.';
$lang['help_start_element'] = 'Starter menyen visende p&aring; den gitte start_element og viser kun det elementet og dets barn.  Tar en hierarki plassering (f.eks. 5.1.2).';
$lang['help_start_page'] = 'Starter menyen visende p&aring; en gitt start_page og viser kun det elementet og dets barn.  Tar en side alias.';
$lang['help_template'] = 'Mal &aring; bruke for &aring; vise menyen. Maler vil komme fra database maler om ikke malen navn ender p&aring; .tpl - i s&aring; fall vill den komme fra en fil i MenuManager mal mappen.';
$lang['help'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Menu Manager er en modul for &aring; sette menyer inn i et system som er lett &aring; bruke og lett &aring; tilpasse.  Den setter visnings delen av menyer inn i smarty maler som lett kan modifiseres for &aring; passe brukerens behov. Det vil si, menu manager er kun motoren som mater malen. Ved &aring; tilpasse malene, eller lage dine egne, kan du lage omtrent enhver meny du kan tenke deg.</p>
	<h3>Hvordan bruker jeg den?</h3>
	<p>Bare sett inn taggen i din mal/side som: <code>{menu}</code>.  Parameterne den godtar listes nedenfor.</p>
	<h3>Hvorfor bry seg om maler?</h3>
	<p>Menu Manager bruker maler for visningslogikk.  Den kommer med tre standard maler navnet bulletmenu.tpl, cssmenu.tpl og ellnav.tpl. I basis s&aring; lager de alle en enkel usortert liste med sider, ved &aring; bruke forskjellige classes og ID&#039;er for styling med CSS.</p>
	<p>V&aelig;r oppmerksom p&aring; at du styler utssendet p&aring; menyene med CSS. Stilsett er ikke inkludert med Menu Manager, men m&aring; hektes p&aring; sidemalen separat. For &aring; f&aring; cssmenu.tpl malen til &aring; virke med IE m&aring; du ogs&aring; sette inn en link til JavaScript&#039;et i hode-seksjonen p&aring; sidens mal, noe som er n&oslash;dvendig for &aring; f&aring; hover effekten til &aring; virke i IE.</p>
	<p>Om du vil lage en spesialisert versjon av en mal, kan du lett importere inn i databasen og deretter redigere den direkte i CMSMS admin.  For &aring; gj&oslash;re dette:
		<ol>
			<li>Klikk p&aring; Meny Behandler admin.</li>
			<li>Clikk p&aring; Fil Mal fliken, og klikk s&aring; p&aring; Importer Mal til databasen knappen ved siden av bulletmenu.tpl.</li>
			<li>Gi mal kopien et navn.  Vi kan kalle den &#039;Test Mal&#039;.</li>
			<li>Du skal n&aring; se &#039;Test Mal&#039; i din liste over databasemaler.</li>
		</ol>
	</p>
	<p>N&aring; kan du enkelt endre malen for dine behov for dette nettstedet.  Sett inn classes, id&#039;er og andre tagger s&aring; formateringen blir akkurat slik du vil. N&aring; kan du sette den inn p&aring; ditt nettsted med {menu&#039; template=&#039;Test Mal&#039;}. Husk at .tpl filendelsen m&aring; inkluderes om en mal brukes.</p>
	<p>Parametere for $node objektet brukt i malen er som f&oslash;lger:
		<ul>
			<li>$node->id -- Innholds ID</li>
			<li>$node->url -- Link til innholdet</li>
			<li>$node->accesskey -- Tilgangsn&oslash;kkel, om definert</li>
			<li>$node->tabindex -- Tab Indeks, om definert</li>
			<li>$node->titleattribute -- Beskrivelse av Tittel kjennetegn (title), om definert</li>
			<li>$node->hierarchy -- Hierarki posisjon, (f.eks. 1.3.3)</li>
			<li>$node->depth -- Dybde (niv&aring;) p&aring; denne klyngen i denne menyen</li>
			<li>$node->prevdepth -- Dybde (niv&aring;) p&aring; klyngen som var rett f&oslash;r denne</li>
			<li>$node->haschildren -- Returnerer sann om denne klyngen har barneklynger &aring; vise</li>
			<li>$node->menutext -- Meny Tekst</li>
			<li>$node->target -- Target/M&aring;l for linken.  Vil v&aelig;re tom om innholdet ikke setter det.</li>
			<li>$node->index -- Nummer for denne klyngen i hele menyen</li>
			<li>$node->parent -- Sann om denne klyngen ar foreldre til den n&aring; valgte side</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importer mal til databasen';
$lang['menumanager'] = 'Meny behandler';
$lang['newtemplate'] = 'Nytt malnavn';
$lang['nocontent'] = 'Ingen innhold gitt';
$lang['notemplatefiles'] = 'Ingen fil maler i %s';
$lang['notemplatename'] = 'Ingen malnavn oppgitt.';
$lang['templatecontent'] = 'Mal innhold';
$lang['templatenameexists'] = 'En mal med dette navnet eksisterer allerede';
$lang['utma'] = '156861353.469342802.1148076752.1154456932.1154546060.23';
$lang['utmz'] = '156861353.1152221446.18.10.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/|utmcmd=referral';
?>
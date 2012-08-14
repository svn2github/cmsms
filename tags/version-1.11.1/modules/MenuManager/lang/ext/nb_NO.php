<?php
$lang['help_action'] = 'Spesifiser handlingen for denne modulen. Det er to muligheter for denne parameteren:
<ul>
  <li>default <em>(standard)</em> - Brukes til &aring; bygge en navigeringsmeny.</li>
  <li>breadcrumbs - Brukes til &aring; bygge en br&oslash;dsmulesti til siden som vises til enhver tid. <strong>Merk: {cms_breadcrumbs}</strong> er en forkortet m&aring;te &aring; kalle denne handlingen.</li>
</ul>';
$lang['help_root'] = 'Kun gyldig for br&oslash;dsmule-handlingen, og tillater &aring; spesifisere et startniv&aring; som ikke er standardsiden.';
$lang['youarehere'] = 'Du er her';
$lang['set_cachable'] = 'Tillat denne malen &aring; mellomlagres';
$lang['help_nocache'] = 'Sl&aring; av all mellomlagring for dette kallet til menyen. Denne parameteren, om den er satt til en positiv verdi, vil overstyre alle innstillinger i innholdobjektet og i malen for menyen.';
$lang['cachable'] = 'Kan mellomlagres';
$lang['help_childrenof'] = 'Dette valget vil gj&oslash;re at menyen kun viser enheter som er etterkommere av den valgte sideID eller alias. F.eks. s&aring; vil: <code>{menu childrenof=$page_alias}</code> kun vise barn av den gjeldende siden.';
$lang['usage'] = 'Benyttes slik';
$lang['import'] = 'Importer';
$lang['edit'] = 'Rediger';
$lang['delete'] = 'Slett';
$lang['help_loadprops'] = 'Benytt denne parameter om du IKKE benytter avanserte egenskaper i din menybehandlermal. Denne parameter vil SL&Aring; AV lasting av alle innholdsegenskaper for hver node (som extra1, image, thumbnail, osv.). Dette vil dramatisk minske antall sp&oslash;rringer krevd for &aring; bygge en meny og minsker ogs&aring; minnekravet, men dette vil fjerne muligheten for bygging av mye mer avanserte menyer';
$lang['readonly'] = 'skrivebeskyttet';
$lang['error_templatename'] = 'Du kan ikke oppgi ett malnavn som ender p&aring; .tpl';
$lang['this_is_default'] = 'Standard menymal';
$lang['set_as_default'] = 'Sett som standard meymal';
$lang['default'] = 'Standard';
$lang['templates'] = 'Maler';
$lang['addtemplate'] = 'Legg til mal';
$lang['areyousure'] = 'Er du sikker p&aring; at du vil slette dette?';
$lang['dbtemplates'] = 'Database maler';
$lang['description'] = 'Behandle meny maler for &aring; vise menyer p&aring; alle tenkelige m&aring;ter';
$lang['deletetemplate'] = 'Slett mal';
$lang['edittemplate'] = 'Rediger mal';
$lang['filename'] = 'Filnavn';
$lang['filetemplates'] = 'Fil maler';
$lang['help_includeprefix'] = 'Inkluder kun de punktene hvor sidealias starter med den spesifiserte forstavelsen. Denne parameteren kan ikke kombineres med excludeprefix (utelat-prefiks) parameteren.';
$lang['help_excludeprefix'] = 'Utelat alle punkter (og deres underpunkter) hvor side alias inneholder den spesifiserte forstavelsen. Denne parameter m&aring; ikke benyttes sammen med includeprefix (inkluder-prefiks) parameteren.';
$lang['help_collapse'] = 'Sl&aring; p&aring; (sett til 1) for &aring; f&aring; menyen til &aring; skjule artikler som ikke er relatert til den valgte siden.';
$lang['help_items'] = 'Bruk denne verdien for &aring; velge en liste av sider som denne menyen skal vise.  Verdien skal v&aelig;re en liste over side-alias separert med komma.';
$lang['help_number_of_levels'] = 'Denne innstillingen vil bare tillate menyen &aring; vise et visst antall av niv&aring;er ned.
Som standard er verdien for denne parameteren underforst&aring;tt &aring; v&aelig;re ubegrenset for &aring; vise alle niv&aring;er av barn. Unntatt n&aring;r du bruker  items  parameteren, i s&aring; fall number_of_levels er underforst&aring;tt &aring; v&aelig;re 1 med mindre det overstyres.';
$lang['help_show_all'] = 'Dette valget vil gj&oslash;re at menyen vil vise alle noder selv om de eventuelt er satt til ikke &aring; vises i menyen. Men inaktive sider vil fortsatt ikke vises.';
$lang['help_show_root_siblings'] = 'Dette valget er kun nyttig om start_element eller start_page er i bruk.  I basis vil menyen vise s&oslash;sken for det valgte start_page/element.';
$lang['help_start_level'] = 'Dette valget vil f&aring; menyen til kun &aring; vise poster startende p&aring; et gitt niv&aring;.  Et enkelt eksempel vil v&aelig;re om du hadde en meny p&aring; siden med number_of_levels=&#039;1&#039;.  S&aring; som en andre meny, du kan ha start_level=&#039;2&#039;.  N&aring; vil din andre meny vise poster basert p&aring; hva som er valgt i den f&oslash;rste menyen.';
$lang['help_start_element'] = 'Starter menyen med visning p&aring; den gitte start_element og viser kun det elementet og dets barn.  Tar en hierarki plassering (f.eks. 5.1.2).';
$lang['help_start_page'] = 'Starter menyen med visning p&aring; en gitt start_page og viser kun det elementet og dets barn.  Tar en side alias.';
$lang['help_template'] = 'Mal &aring; bruke for &aring; vise menyen. Maler vil komme fra databasemaler om ikke malens navn ender p&aring; .tpl - i s&aring; fall vill den komme fra en fil i MenuManager templates-mappen (standard er simple_navigation.tpl)';
$lang['help'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>Menu Manager er en modul for &aring; sette menyer inn i et system som er lett &aring; bruke og lett &aring; tilpasse.  Den setter visnings delen av menyer inn i smarty maler som lett kan modifiseres for &aring; passe brukerens behov. Det vil si, menu manager er kun motoren som mater malen. Ved &aring; tilpasse malene, eller lage dine egne, kan du lage omtrent enhver meny du kan tenke deg.</p>
	<h3>Hvordan bruker jeg den?</h3>
	<p>Bare sett inn taggen i din mal/side som: <code>{menu}</code>.  Parameterne den godtar listes nedenfor.</p>
	<h3>Hvorfor bry seg om maler?</h3>
	<p>Menu Manager bruker maler for visningslogikk.  Den kommer med tre standard maler med navn cssmenu.tpl, minimal_menu.tpl og simple_navigation.tpl. I basis s&aring; lager de alle en enkel usortert liste med sider, ved &aring; bruke forskjellige classes og ID&#039;er for styling med CSS.</p>
	<p>V&aelig;r oppmerksom p&aring; at du styler utseendet p&aring; menyene med CSS. Stilsett er ikke inkludert med Menu Manager, men m&aring; hektes p&aring; sidemalen separat. For &aring; f&aring; cssmenu.tpl malen til &aring; virke med IE m&aring; du ogs&aring; sette inn en link til JavaScript&#039;et i hode-seksjonen p&aring; sidens mal, noe som er n&oslash;dvendig for &aring; f&aring; hover effekten til &aring; virke i IE.</p>
	<p>Om du vil lage en spesialisert versjon av en mal, kan du lett importere inn i databasen og deretter redigere den direkte i CMSMS admin.  For &aring; gj&oslash;re dette:
		<ol>
			<li>Klikk p&aring; Meny Behandler admin.</li>
			<li>Clikk p&aring; Fil Mal fliken, og klikk s&aring; p&aring; Importer Mal til databasen knappen ved siden av bulletmenu.tpl.</li>
			<li>Gi mal kopien et navn.  Vi kan kalle den &#039;Test Mal&#039;.</li>
			<li>Du skal n&aring; se &#039;Test Mal&#039; i din liste over databasemaler.</li>
		</ol>
	</p>
	<p>N&aring; kan du enkelt endre malen for dine behov for dette nettstedet.  Sett inn classes, id&#039;er og andre tagger s&aring; formateringen blir akkurat slik du vil. N&aring; kan du sette den inn p&aring; ditt nettsted med {menu&#039; template=&#039;Test Mal}. Husk at .tpl filendelsen m&aring; inkluderes om en filmal brukes.</p>
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
			<li>$node->children_exist -- Returnerer sann on denne noden har barneklynger tilgjengelig i databasen som kan vises i menyen</li>
			<li>$node->menutext -- Meny Tekst</li>
			<li>$node->raw_menutext -- Menytekst uten konverterte html-entiteter</li>
			<li>$node->alias -- Side alias</li>
			<li>$node->extra1 -- Dette feltet inneholder verdien av extra1 side-egenskapen, om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
			<li>$node->extra2 -- Dette feltet inneholder verdien av extra2 side-egenskapen, om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
			<li>$node->extra3 -- Dette feltet inneholder verdien av extra3 side-egenskapen, om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
			<li>$node->image -- Dette feltet inneholder verdien av image side-egenskapen (om den ikke er tom), om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
			<li>$node->thumbnail -- Dette feltet inneholder verdien av thumbnail side-egenskapen (om den ikke er tom), om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
			<li>$node->target -- Dette feltet inneholder Target for lenken (om den ikke er tom), om ikke loadprops-parameteren er satt til &aring; IKKE laste disse egenskapene.</li>
<li>$node->created -- Artikkelliste opprettelsesdato </li>
<li>$node->modified -- Artikkelliste endret dato </li>
<li>$node->index -- nummer for denne noden i hele menyen </li>
<li>$node->parent -- True hvis denne noden er en forelder av den valgte side</li>
<li>$node->current -- True hvis denne noden er valgt side </li>
		</ul>
	</p>
        <h3>Mellomlagring</h3>
        <p>Denne modulen har funksjoner for &aring; mellomlagre sine utdata inn i statiske filer for &aring; redusere krav til minne og sql sp&oslash;rringer, og for &aring; forbedre frontend-ytelsen. Dette gir alle fordelene med statiske menyer uten det tunge involvert n&aring;r du oppretter eller redigerer sider. </p>
        <p> Hver menymal kan v&aelig;re merket som &quot;Kan mellomlagres&quot;. N&aring;r en mellomlagret menymal brukes p&aring; en innholdside som kan mellomlagres, vil mellomlagrede menyvisinger som er tilgjengelig for denne siden vil bli brukt. Den ikke mellomlagres parameteren p&aring; menytaggen kan brukes til helt &aring; deaktivere hurtigbufring. </p>
        <p>Alle mellomlagrede menyfiler slettes n&aring;r et innholdselement er lagt til, redigert eller slettet ... og ogs&aring; n&aring;r en menymal blir lagt til/ redigert eller slettet. </p>
        <h3>Alternative tagger:</h3>
        <p><strong>{cms_breadcrumbs}</strong> taggen (forkortelse for {menu action=&#039;breadcrumbs}) kan benyttes for &aring; lage en br&oslash;dsmulesti til siden som til enhver tid vises.</p>';
$lang['importtemplate'] = 'Importer mal til databasen';
$lang['menumanager'] = 'Meny behandler';
$lang['newtemplate'] = 'Nytt malnavn';
$lang['nocontent'] = 'Ingen innhold gitt';
$lang['notemplatefiles'] = 'Ingen fil maler i %s';
$lang['notemplatename'] = 'Ingen malnavn oppgitt.';
$lang['templatecontent'] = 'Mal innhold';
$lang['templatenameexists'] = 'En mal med dette navnet eksisterer allerede';
$lang['qca'] = 'P0-536849115-1307983495210';
$lang['utma'] = '156861353.522559348.1337094363.1337438797.1337453769.8';
$lang['utmz'] = '156861353.1337094363.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353.2.10.1337453769';
$lang['utmc'] = '156861353';
?>
<?php
$lang['admindescription'] = 'En strippet ned, men likevel kraftig implementering av TinyMCE WYSIWYG editoren.';
$lang['force_blackonwhite'] = 'Tving sort text p&aring; hvit bakgrunn';
$lang['help_force_blackonwhite'] = 'Tving MicroTiny redigereren til &aring; vise sort text p&aring; hvit bakgrunn. Dette kan hjelpe med &aring; vise tekst i wysiwyg-redigereren i omgivelser med m&oslash;rke bakgrunner og lyse forgrunner.';
$lang['strip_background'] = 'Stripp av CSS effekter';
$lang['help_strip_background'] = 'Stripp bakgrunnseffekter fra de ber&oslash;rte stilarkene. Dette kan hjelpe med &aring; vise tekst i wysiwyg-redigereren i omgivelser med m&oslash;rke bakgrunner og lyse forgrunner.';
$lang['show_statusbar'] = 'Vis statuslinje';
$lang['help_show_statusbar'] = 'Aktiver en statuslinje p&aring; bunnen av wysiwyg omr&aring;det. Dette gjelder kun i en admin visning.';
$lang['allow_resize'] = 'Tillat &aring; endre st&oslash;rrelse';
$lang['help_allow_resize'] = 'Tillat endring av st&oslash;rrelse p&aring; wysiwyg omr&aring;det. Krever at statuslinjen er aktivert';
$lang['view_html'] = 'Vis HTML kode';
$lang['friendlyname'] = 'MicroTiny WYSIWYG redigerer';
$lang['help'] = '<h3> Hva gj&oslash;r dette? </h3>
<p> MicroTiny er en liten, begrenset versjon av TinyMCE-editoren, tidligere WYSIWYG-default av CMS Made Simple. Dette gir noe mer enn grunnleggende redigering, men er fortsatt et kraftig verkt&oslash;y som tillater enkle endringer til innhold.</p>
<p> Denne modulen gir sv&aelig;rt f&aring; alternativer og er utformet for &aring; tillate begrenset funksjonalitet til innhold redakt&oslash;rene uten kunnskap om HTML. Hensikten er at de vil ha sv&aelig;rt f&aring; muligheter til &aring; v&aelig;re i stand til &aring; rote med oppsettet av en side, eller utseendet og f&oslash;lelsen av et nettsted.</p>
<h3> Hvordan bruker jeg den?</h3>
<p> MicroTiny testomr&aring;det skal vises automatisk (for brukere med tilstrekkelige tillatelser) under &quot;Utvidelser >> MicroTiny WYSIWYG Editor&quot; alternativet i CMSMS adminkonsollet.</p>
</p> For MicroTiny &aring; bli brukt som WYSIWYG editor n&aring;r du redigerer sider, m&aring; MicroTiny Wysiwyg Editor velges i brukerens preferanser. Vennligst velg &quot;MicroTiny&quot; i &quot;Select WYSIWYG &aring; Bruke&quot; under &quot;Mine innstillinger >> User Preferences&quot; i CMSMS Adminpanelet. Ekstra valg i forskjellige moduler eller i innhold sidemaler, og innholdssider selv kan selv kontrollere om et tekstomr&aring;de eller et wysiwyg-felt skal vises i ulike redigeringskjemaer. </p>
<h3>Om stiler og farger</h3>
<p>MicroTiny vil lese stilark knyttet til den aktuelle malen <em>(hvis ingen mal kan fastsl&aring;s vil standardmalen og dens stilark brukes)</em>. og fjerne bakgrunnsbilder for &aring; visualisere teksten i et milj&oslash; s&aring; n&aelig;rt som mulig til hva som vil vises p&aring; nettsiden. Hvis ditt tema bruker en m&oslash;rk bakgrunn, sammen med bakgrunnsbilder i dine stiler kan du oppleve problemer. Vi foresl&aring;r at du alltid inkluderer en farge i dine bakgrunns spesifikasjoner. i.e:
<pre><code>body {
  color: #eee;
  background: <span style=&quot;color: blue;&quot;>#ddd</span> url (sti/til/ett/bilde.jpg);
}
</pre></code>
<h3> Hva med frontend Wysiwygs</h3>
<p> Fra tid til annen kan det v&aelig;re n&oslash;dvendig &aring; gi et wysiwyg tekstomr&aring;de med begrenset funksjonalitet til frontend redakt&oslash;rer. For &aring; gj&oslash;re dette, m&aring; du f&oslash;lge to trinn <em>(kan endres i fremtidige versjoner av CMSMS)</em>.
<ul>
  <li> Sett MicroTiny som Frontend Wysiwyg i &quot;Site Admin >> Gobal Settings&quot; side p&aring; &quot;General Settings&quot;-fanen.</li>
  <li> Legg til taggen {MicroTiny action = enablewysiwg} kallet til sider der wysiwhg editor &oslash;nskes brukt. Dette kan enten gj&oslash;res i head-delen av sidemalen i globale metadata, eller i sidespesifikke metadata seksjoner. Denne taggen tar ingen ekstra parametre. </li>
</ul>
</p>';
$lang['example'] = 'MicroTiny eksempel';
$lang['settings'] = 'Innstillinger';
$lang['youareintext'] = 'Du er i';
$lang['dimensions'] = 'BxH';
$lang['size'] = 'St&oslash;rrelse';
$lang['filepickertitle'] = 'Filvelger';
$lang['cmsmslinker'] = 'CMSMS Lenker';
$lang['tmpnotwritable'] = 'Konfigurasjonen kunne ikke bli skrevet til tmp-mappa! Vennligst fiks dette!';
$lang['css_styles_text'] = 'CSS stiler';
$lang['css_styles_help'] = 'CSS-stilnavn spesifisert her blir lagt til en nedtrekksmeny i redigereren. &Aring; la dette feltet st&aring; tomt vil medf&oslash;re at nedtrekkmenyen blir gjemt (standard oppf&oslash;rsel).';
$lang['css_styles_help2'] = 'Stilene kan enten v&aelig;re bare klassenavnet, eller et klassenavn med et nytt navn som skal vises. 
Stilene m&aring; separeres med enten komma eller ny linje.
<br/>Eksempel: mystyle1, My style name=mystyle
<br/>Resultat: en nedtrekksmeny som inneholder to valg, &#039;mystyle1&#039; og &#039;My stylename&#039; som respektivt resulterer i innsetting av mystyl1, og mystyle2.
<br/>Merk: Det gj&oslash;res ingen sjekk for at stilnavnene faktisk eksisterer. De benyttes blindt.';
$lang['usestaticconfig_text'] = 'Benytt statisk konfigurasjon';
$lang['usestaticconfig_help'] = 'Dette genererer en statisk konfigurasjonsfil i stedet for en dynamisk. Dette fungerer bedre p&aring; enkelte servere (for eksempel n&aring;r PHP kj&oslash;res som CGI)';
$lang['allowimages_text'] = 'Tillat bilder';
$lang['allowimages_help'] = 'Dette setter inn en bildeknapp p&aring; knapperaden som tillater innsetting av et bilde i innholdet';
$lang['settingssaved'] = 'Innstillinger lagret';
$lang['savesettings'] = 'Lagre innstillinger';
$lang['qca'] = 'P0-536849115-1307983495210';
$lang['utma'] = '156861353.1351821825.1341524626.1341524626.1341652075.2';
$lang['utmz'] = '156861353.1341524626.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353.1.10.1341652075';
$lang['utmc'] = '156861353';
?>
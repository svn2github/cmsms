<?php
$lang['help_idlist'] = 'Gjelder bare for standardhandlingen (sammendragsvisning). Denne parameteren godtar en kommaseparert liste med numeriske artikkel-ID og tillater å filtrere ytterligere de artikler hvor artikkel-ID er spesifisert. Listen over artikler som vises er fortsatt påvirket av artiklenes status, utløpsdato og andre parametere.';
$lang['error_nooptions'] = 'Ingen alternativer er spesifisert for feltdefinisjon';
$lang['dropdown'] = 'Nedtrekk';
$lang['info_public'] = 'Kun offentlige felter er tilgjengelige for frontendredigering, eller for visning i sammendrags- eller detaljvisninger.';
$lang['info_expired_viewable'] = 'Hvis aktivert, kan utgåtte artikler vises i detalj modus (dette er tilsvarende det fungerte før). Showall parameteren kan brukes på URLen (når du ikke bruker vakre urler) til også å indikere at utgåtte artikler kan sees';
$lang['expired_viewable'] = 'Utgåtte artikler kan vises i detaljmodus';
$lang['error_insufficientparams'] = 'Utilstrekkelige (eller tomme) parametere';
$lang['error_duplicatename'] = 'En artikkel med det navnet eksisterer allerede';
$lang['detail_page'] = 'Detaljside';
$lang['detail_template'] = 'Detaljmal';
$lang['warning_preview'] = 'Advarsel: Denne forhåndsvisningen panel oppfører seg omtrent som et nettleservindu der du kan navigere bort fra den opprinnelig forhåndsvises siden. Men hvis du gjør det, kan det hende du opplever uventet oppførsel. Navigere bort fra den første siden og tilbake vil ikke gi de forventede resultatene<br/><strong>. Merknad:</strong> Forhåndsvisningen vil ikke laste opp filer du kanskje har valgt for opplasting.';
$lang['article'] = 'Artikkel';
$lang['preview'] = 'Forhåndsvisning';
$lang['info_detail_returnid'] = 'Denne innstillingen brukes til å fastslå en side (og derfor en mal) å bruke til å vise detaljsider. Individuelle Nyhetsdetalj nettadresser vil ikke fungere hvis denne parameteren ikke er satt til en gyldig side. I tillegg, hvis denne innstillingen er satt, og ingen detaljside-parameter er gitt på nyhetstaggen, så vil denne verdien bli brukt for detaljlenker';
$lang['title_detail_returnid'] = 'Standardside å benytte for detaljvisninger';
$lang['title_submission_settings'] = 'Nyhetsinnleverings innstillinger';
$lang['title_fesubmit_settings'] = 'Frontend-innsendings innstillinger';
$lang['title_notification_settings'] = 'Varslingsinnstillinger';
$lang['title_detail_settings'] = 'Detaljevisnings innstillinger';
$lang['error_invalidurl'] = 'Ugyldig URL <em>(mulig den allerede er benyttet, eller at det er ugyldige bokstaver)</em>';
$lang['url'] = 'URL';
$lang['expired_searchable'] = 'Utløpte artikler får vises i søkeresultat';
$lang['helpshowall'] = 'Vis alle artikler, uten å ta hensyn til utløpsdato';
$lang['error_invaliddates'] = 'En eller flere av datoene som er oppgitt er ugyldige';
$lang['notify_n_draft_items_sub'] = '%d nyhetsartikler';
$lang['notify_n_draft_items'] = 'Du har %s som ikke er publiserte';
$lang['unlimited'] = 'Ubegrenset';
$lang['none'] = 'Ingen';
$lang['anonymous'] = 'Anonym';
$lang['unknown'] = 'Ukjent';
$lang['fesubmit_redirect'] = 'PageID eller alias som man omdirigeres til etter at en nyhetsartikkel har blitt opprettet via fesubmit handlingen';
$lang['allow_summary_wysiwyg'] = 'Tillat bruk av WYSIWYG redigerer i sammendragsfeltet';
$lang['title_browsecat_template'] = 'Søk-Kategorimal redigerer';
$lang['title_browsecat_sysdefault'] = 'Standard Søk-Kategorimal';
$lang['browsecattemplate'] = 'Søk-Kategorimaler';
$lang['error_filesize'] = 'En opplastet fil oversteg maksimalt tillatt størrelse';
$lang['post_date_desc'] = 'Publiseringsdato synkende';
$lang['post_date_asc'] = 'Publiseringsdato stigende';
$lang['expiry_date_desc'] = 'Utløper dato synkende';
$lang['expiry_date_asc'] = 'Utløper dato stigende';
$lang['title_desc'] = 'Tittel synkende';
$lang['title_asc'] = 'Tittel stigende';
$lang['status_desc'] = 'Status synkende';
$lang['status_asc'] = 'Status stigende';
$lang['fesubmit_status'] = 'Status for nyhetensartiklene som er innsendt via frontenden';
$lang['error_invalidfiletype'] = 'Kan ikke laste opp denne filtypen';
$lang['error_upload'] = 'Et problem oppstod under opplasting av fil';
$lang['error_movefile'] = 'Kunne ikke opprette fil: %s';
$lang['error_mkdir'] = 'Kunne ikke opprette katalog: %s';
$lang['expiry_interval'] = 'Antall dager (standard) før en artikkel skal utløpe (om utløp er valgt)';
$lang['removed'] = 'Fjernet';
$lang['msg_contenttype_removed'] = 'Nyhet-innholdtypen har blitt fjernet. Vennligst plasser {news} tagger med passende parametere i din mal eller inne i sideinnholdet for å gjenskape denne funksjonaliteten.';
$lang['delete_selected'] = 'Slett de valgte artiklene';
$lang['areyousure_deletemultiple'] = 'Er du sikker på du vil slette alle de valgte nyhetsartiklene?\nDette kan ikke angres!';
$lang['error_templatenamexists'] = 'En mal med det navnet eksisterer allerede';
$lang['error_noarticlesselected'] = 'Ingen artikler ble valgt';
$lang['reassign_category'] = 'Endre Kategori til';
$lang['select'] = 'Velg';
$lang['approve'] = 'Set status til \'Publisert\'';
$lang['revert'] = 'Sett status til \'kladd\'';
$lang['hide_summary_field'] = 'Skjul sammendragsfeltet under opprettelse eller redigering av artikler';
$lang['textbox'] = 'Tekst innskriving';
$lang['checkbox'] = 'Avkryssningsboks';
$lang['textarea'] = 'Tekstområde';
$lang['file'] = 'Fil';
$lang['auto_create_thumbnails'] = 'Opprett automatisk miniatyrbilder for filer med disse filendelser';
$lang['allowed_upload_types'] = 'Tillat kun filer med disse filendelsene å bli lastet opp';
$lang['fielddefupdated'] = 'Feltdefinisjon oppdatert';
$lang['editfielddef'] = 'Rediger feltdefinisjon';
$lang['up'] = 'Opp';
$lang['down'] = 'Ned';
$lang['fielddefdeleted'] = 'Feltdefinisjon slettet';
$lang['nameexists'] = 'Et felt med det navnet eksisterer allerede';
$lang['notanumber'] = 'Maksimum lengde er ikke et tall';
$lang['fielddef'] = 'Feltdefinisjon';
$lang['fielddefadded'] = 'Feltdefinisjon lagt til';
$lang['public'] = 'Offentlig';
$lang['type'] = 'Type';
$lang['info_maxlength'] = 'Maksimum lengde påvirker kun tekst innskrivingsfelter.';
$lang['maxlength'] = 'Maksimal lengde';
$lang['addfielddef'] = 'Legg til feltdefinisjon';
$lang['customfields'] = 'Felt definisjoner';
$lang['deprecated'] = 'ikke supportert';
$lang['subject_newnews'] = 'En nyhetsartikkel har blitt postet';
$lang['email_subject'] = 'Emne for den utgående eposten';
$lang['email_template'] = 'Formatet på eposten';
$lang['formsubmit_emailaddress'] = 'Epostadresse å motta meldinger om nyhetposteringer';
$lang['extra'] = 'Ekstra';
$lang['uploadscategory'] = 'Opplastings Kategori';
$lang['title_available_templates'] = 'Tilgjengelige maler';
$lang['resettodefault'] = 'Sett tilbake til Standard fabrikkinnstilling';
$lang['title_form_template'] = 'Skjema Mal Redigerer';
$lang['title_detail_template'] = 'Detaljmal redigerer';
$lang['title_summary_template'] = 'Sammendragmal redigerer';
$lang['prompt_templatename'] = 'Malnavn';
$lang['prompt_template'] = 'Mal kildekode';
$lang['title_form_sysdefault'] = 'Standard Skjemamal';
$lang['title_summary_sysdefault'] = 'Standard Sammendragsmal';
$lang['title_detail_sysdefault'] = 'Standard Detaljmal';
$lang['info_sysdefault2'] = '<strong>Merk:</strong> Denne fanen inneholder tekstområder som tillater deg å redigere de malene som vises når du oppretter et \'nytt\' sammendrag, detalj, eller skjema mal. Å endre innhold i denne fanen og klikke \'utfør\' vil <strong>ikke ha effekt på nåværende visninger</strong>.';
$lang['info_sysdefault'] = '<em>(malen som er benyttet som standard når en ny mal velges)</em>';
$lang['template'] = 'Mal';
$lang['prompt_name'] = 'Navn';
$lang['prompt_default'] = 'Standard';
$lang['prompt_newtemplate'] = 'Opprett ny mal';
$lang['help_pagelimit'] = 'Maksimalt antall artikler å vise (pr side). Om denne parameter ikke settes vil alle passende artikler vises. Om satt, og det er fler artikler tilgjengelig enn spesifisert i parameteren, vil tekst og lenker vises for å tillate å rulle gjennom resultatene';
$lang['prompt_page'] = 'Side';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'av';
$lang['prompt_pagelimit'] = 'Sidegrense';
$lang['prompt_sorting'] = 'Sorter etter';
$lang['title_filter'] = 'Filtre';
$lang['published'] = 'Publisert';
$lang['draft'] = 'Kladd';
$lang['expired'] = 'Utløpt';
$lang['author'] = 'Forfatter';
$lang['sysdefaults'] = 'Tilbakestill til standard';
$lang['restoretodefaultsmsg'] = 'Denne kommandoen vil tilbakestille mal-innholdet til deres system standard. Ønsker du virkelig å fortsette?';
$lang['addarticle'] = 'Legg til nyhetsartikkel';
$lang['articleadded'] = 'Artikkelen ble lagt til';
$lang['articleupdated'] = 'Artikkelen ble oppdatert.';
$lang['articledeleted'] = 'Artikkelen ble slettet.';
$lang['articlesubmitted'] = 'Artikkelen ble sendt inn';
$lang['addcategory'] = 'Ny kategori';
$lang['categoryadded'] = 'Kategorien ble lagt til';
$lang['categoryupdated'] = 'Kategorien ble oppdatert.';
$lang['categorydeleted'] = 'Kategorien ble slettet.';
$lang['addnewsitem'] = 'Legg til nyhetsartikkel';
$lang['allcategories'] = 'Alle kategorier';
$lang['allentries'] = 'Alle oppføringer';
$lang['areyousure'] = 'Ønsker du virkelig å slette?';
$lang['articles'] = 'Nyhetsartikler';
$lang['cancel'] = 'Avbryt';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategorier';
$lang['default_category'] = 'Standard Kategori';
$lang['content'] = 'Innhold';
$lang['dateformat'] = '%s er ikke et gyldig yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Slett';
$lang['description'] = 'Legg til, rediger og slett nyhetsartikler.';
$lang['formtemplate'] = 'Skjemamaler';
$lang['detailtemplate'] = 'Detaljmal';
$lang['default_templates'] = 'Standard maler';
$lang['detailtemplateupdated'] = 'Den oppdaterte Detaljmalen ble lagret til databasen.';
$lang['displaytemplate'] = 'Visningsmal';
$lang['edit'] = 'Rediger';
$lang['enddate'] = 'Sluttdato';
$lang['endrequiresstart'] = 'Om sluttdato er satt så kreves også en startdato.';
$lang['entries'] = '%s oppføringer';
$lang['status'] = 'Status';
$lang['expiry'] = 'Utløper';
$lang['filter'] = 'Filtrer';
$lang['more'] = 'Mer';
$lang['category_label'] = 'Kategori:';
$lang['author_label'] = 'Postet av:';
$lang['extra_label'] = 'Ekstra:';
$lang['moretext'] = 'Mer Tekst';
$lang['name'] = 'Navn';
$lang['news'] = 'Nyheter';
$lang['news_return'] = 'Tilbake';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du trenger \'%s\' rettighet for å utføre denne handlingen.';
$lang['nocategorygiven'] = 'Ingen kategori satt';
$lang['startdatetoolate'] = 'Startdato er for sen (etter sluttdato?)';
$lang['nocontentgiven'] = 'Innhold mangler';
$lang['noitemsfound'] = '<strong>Ingen</strong> artikler funnet i denne kategorien: %s';
$lang['nopostdategiven'] = 'Publiseringsdato mangler';
$lang['note'] = '<em>Merk:</em> Dato må være i et \'yyyy-mm-dd hh:mm:ss\' format.';
$lang['notitlegiven'] = 'Tittel mangler';
$lang['nonamegiven'] = 'Ingen navn oppgitt';
$lang['numbertodisplay'] = 'Antall som skal vises (ingen verdi - viser alle)';
$lang['print'] = 'Skriv ut';
$lang['postdate'] = 'Publiseringsdato';
$lang['postinstall'] = 'Husk å tildele rettigheter for "Modify News" for brukere som skal administrere nyhetsartikler.';
$lang['selectcategory'] = 'Velg kategori';
$lang['showchildcategories'] = 'Vis underkategorier';
$lang['sortascending'] = 'Sorter stigende';
$lang['startdate'] = 'Startdato';
$lang['startoffset'] = 'Start visning på nde artikkel';
$lang['startrequiresend'] = 'Dersom du har en startdato må du også ha en sluttdato';
$lang['apply'] = 'Bruk';
$lang['submit'] = 'Oppdater';
$lang['summary'] = 'Sammendrag';
$lang['summarytemplate'] = 'Sammendragsmal';
$lang['summarytemplateupdated'] = 'Nyhet sammendragsmalen ble oppdatert.';
$lang['title'] = 'Tittel';
$lang['options'] = 'Alternativer';
$lang['optionsupdated'] = 'Valgene ble oppdaterte';
$lang['useexpiration'] = 'Bruk utløpsdato';
$lang['eventdesc-NewsArticleAdded'] = 'Sendt når en artikkel er lagt til.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sendt når en artikkel er lagt til.</p>
<h4>Parametere</h4>
<ul>
<li>"news_id" - Id for nyhets artikkelen</li>
<li>"category_id" - Id for kategorien for denne artiklen</li>
<li>"title" - Artikkel tittel</li>
<li>"content" - Artikkelens innhold</li>
<li>"summary" - Artikkel sammendrag</li>
<li>"status" - Status for artikkelen ("draft" eller "publish")</li>
<li>"start_time" - Dato for når artikkelen skal begynne å vises</li>
<li>"end_time" - Dato for når artikkelen ikke skal vises lengre</li>
<li>"useexp" - Om utløpsdatoen skal ignoreres eller ikke</li>
</ul>';
$lang['eventdesc-NewsArticleEdited'] = 'Sendt når en artikkel er redigert.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sendt når en artikkel er redigert.</p>
<h4>Parametere</h4>
<ul>
<li>"news_id" - Id for nyhetsartikkelen</li>
<li>"category_id" - Id for kategorien for denne artikkelen</li>
<li>"title" - Artikkeltittel</li>
<li>"content" - Artikkel innhold</li>
<li>"summary" - Artikkel sammendrag</li>
<li>"status" - Artikkel status ("draft" eller "publish")</li>
<li>"start_time" - Dato artikkelen skal begynne å vises</li>
<li>"end_time" - Dato artikkelen ikke skal vises lengre</li>
<li>"useexp" - Om utløpsdatoen skal ignoreres eller ikke</li>
</ul>
<p><strong>Merk:</strong> Ikke alle parametere vill være tilgjengelige når denne handlingen blir sendt.</p>';
$lang['eventdesc-NewsArticleDeleted'] = 'Sendt når en artikkel er slettet.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sendt når en artikkel er slettet.</p>
<h4>Parametere</h4>
<ul>
<li>"news_id" - Id for nyhetsartikkelen</li>
</ul>';
$lang['eventdesc-NewsCategoryAdded'] = 'Sendt når en kategori er lagt til.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sendt når en kategori er lagt til.</p>
<h4>Parametere</h4>
<ul>
<li>"category_id" - Id for nyhetskategorien</li>
<li>"name" - Navn på nyhetskategorien</li>
</ul>';
$lang['eventdesc-NewsCategoryEdited'] = 'Sendt når en kategori er redigert.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sendt når en kategori er redigert.</p>
<h4>Parametere</h4>
<ul>
<li>"category_id" - Id for nyhetskategorien</li>
<li>"name" - Navn på nyhetskategorien</li>
<li>"origname" - Det originale navnet på nyhetskategorien</li>
</ul>';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sendt når en kategori er slettet.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sendt når en kategori er slettet.</p>
<h4>Parametere</h4>
<ul>
<li>"category_id" - Id for den slettede nyhetskategorien</li>
<li>"name" - Navnet på den slettede kategorien</li>
</ul>';
$lang['help_articleid'] = 'Denne parameter er kun gyldig i detaljvisning. Den tillater å spesifisere hvilken nyhetsartikkel som skal vises i detaljmodus. Om den spesielle verdien -1 er benyttet vil systemet vise den nyeste, publiserte, ikke utløpte artikkelen.';
$lang['helpnumber'] = 'Maksimalt antall elementer som skal vises (per side) (ingen verdi vil medføre at alle elementer vises). Denne er synonym for pagelimit parameteren.';
$lang['helpstart'] = 'Start med artikkel n-- dersom ingen parameter er gitt vil visningen starte fra første artikkel.';
$lang['helpcategory'] = 'Benyttet i sammendragsvisning for kun å vise elementer fra den spesifiserte kategorien. <b>Bruk * etter navnet for å vise underelementer.</b>  Flere kategorier kan bli brukt dersom disse er separert med komma. Om ingen verdi oppgis vil det resultere i at alle kategorier vises. Denne parameter virker også på frontend submit handlingen, men støtter kun et kategori navn.';
$lang['helpmoretext'] = 'Tekst som skal vises på slutten av nyhetssaken dersom innlegget er lengre enn sammendrags lengden. Standard verdi er "Mer"';
$lang['helpsummarytemplate'] = 'Bruk en separat mal for å vise artikkelsammendrag. Denne malen må eksistere og må være synlig i Sammendrag malfanen i Nyheter administrasjonen, men den trenger ikke å være standard. Om denne parameter ikke er satt, vil gjeldende standardmal benyttes.';
$lang['helpformtemplate'] = 'Bruk en database mal for å vise artikkel innsending skjemaet. Denne malen må eksistere og må være synlig i Skjema malfanen i Nyheter administrasjonen, men den trenger ikke å være standard. Om denne parameter ikke er satt, vil gjeldende standardmal benyttes.';
$lang['helpbrowsecattemplate'] = 'Benytt en database-mal for å vise kategorisøket. Denne malen må eksistere og må være synlig i Søk-Kategori malfanen i Nyhetsadministrasjonen, men den trenger ikke å være satt som standard. Om denne parameter ikke er satt, vil gjeldende standardmal benyttes.';
$lang['helpdetailtemplate'] = 'Bruk en separat database mal for visning av artikkel detaljene. Denne malen må eksistere og må være synlig i Detalj malfanen i Nyheter administrasjonen, men den trenger ikke å være standard. Om denne parameter ikke er satt, vil gjeldende standardmal benyttes.';
$lang['helpsortby'] = 'Felt å sortere etter.  Alternativene er \'news_date\', \'summary\', \'news_data\', \'news_category\', \'news_title\', \'news_extra\', \'end_time\', \'start_time\', \'random\'.  Standardsetting er \'news_date\'. Om tilfeldig(random) er valgt vil sortasc parameteren bli ignorert.';
$lang['helpsortasc'] = 'Sorter nyhetselementer i stigende rekkefølge i stedet for synkende.';
$lang['helpdetailpage'] = 'Side hvor nyhetsdetaljer skal vises. Dette kan enten være et sidealias eller en id. Benyttes for å tillate visning av detaljer i en annen mal enn sammendragsmalen.';
$lang['helpshowarchive'] = 'Vis bare utdaterte nyhetsartikler.';
$lang['helpbrowsecat'] = 'Viser en søkbar kategoriliste';
$lang['helpaction'] = 'Overstyrer standard handlingen. Mulige verdier er:
<ul>
<li>"detail" - for å vise en spesifisert articleid i detaljvisningsmodus.</li>
<li>"default" - for å vise sammendragsvisningen</li>
<li>"fesubmit" - for å vise et forside skjema for å tillate brukere å bidra med nyhetsartikler fra nettsiden. Legg til <code>{cms_init_editor}</code> taggen i metadataseksjonen for å initialisere den valgte wysiwyg-redigereren. (Nettstedsadmin  > > Globale innstillinger)</li>
<li>"browsecat" - for å vise en søkbar kategoriliste.</li>
</ul>';
$lang['help'] = '<h3>Viktige merknader</h3>
<p>Versjon 2.9 av News og høyere har fjernet formatpostdate medlemmet fra malene og har også fjernet dateformat parameteren. Du bør benytte  cms_date_format  (slik det er vist i standard malene) for å formatere datoer. Og du bør benytte entry->postdate i stedet for entry->formatpostdate i dine maler. <br />Tips: For å få korrekt norsk æ og ø på ukedag så kan det hende du også må tilføye  |htmlentities  bak  cms_date_format  som dette: {$entry->postdate|cms_date_format:"%A %e. %B %Y"|htmlentities}</p>

<h3>Hva gjør denne modulen?</h3>
<p>News er en modul for visning av nyhetsartikler på din side. Den ligner en blogg, men har flere muligheter!.  
Når modulen er installert, blir det lagt til en administrasjonsside for Nyheter i administrasjonsmenyen, som vil tillate deg å velge og  legge til nyhetskategori. Når en nyhetskategori er opprettet eller valgt, vil det vises en liste med nyhetsartikler for den kategorien.  
Herfra kan du legge til, redigere eller slette nyheter for kategorien.</p>
        <h4>Mange visningsmåter</h4>
	<p>Parameterne som er støttet av nyhets modulen, og støtte for mange maler på en gang vil si at dine muligheter for å vise nyhetsartikler er ubegrenset.</p>
        <h4>Egendefinerte felter</h4>
	<p>Nyhetsmodulen tillater definering av mange egendefinerte felter (inkludert filer og bilder) som vil tillate deg å koble pdf filer eller flere bilder til dine artikler.</p>
        <h4>Kategorier</h4>
	<p>Nyheter støtter en hierarkisk kategori mekanisme for å organisere dine artikler. En nyhetsartikkel kan kun tilhøre en posisjon i hierarkiet.</p>
	<h4>Utløpsdato og Status</h4>
	<p>Hver nyhetsartikkel kan ha en utløpsdato(valgfritt) og når denne utløper vil artikkelen ikke vises på din nettside. I tillegg kan artikler også merkes som <em>kladd</em> for å sette dem til å ikke vises på din nettside.</p>
	<h3>Sikkerhet</h3>
	<p>Brukeren må tilhøre en gruppe med \'Modify News\' tillatelse for å kunne legge til, redigere eller slette nyhetsartikler.</p>
        <p>Og for å slette nyhetsartikler må brukeren tilhøre en gruppe men \'Delete News Articles\' tillatelse.</p>
<p>For å endre layout malene, må brukeren tilhøre en gruppe med \'Modify Templates\' tillatelse.</p>
<p>For å redigere globale nyhets preferanser, må brukeren tilhøre en gruppe med \'Modify Site Preferences\' tillatelse.</p>
<p>Og for å godkjenne nyheter for forsidevisning må brukeren i tillegg tilhøre en gruppe med \'Approve News\' tillatelse.</p>

<h3>Hvordan bruker jeg modulen?</h3>
<p>Den enkleste måten å bruke den er med en {news} omslagstagg (lukker inn modulen i en tagg, for å forenkle syntaksen). Dette vil sette inn modulen i din mal eller side hvor du måtte ønske, og vise nyhetsartikler.  Koden vil se ut noe slikt som: <code>{news number=\'5\'}</code></p>

<h3>Maler</h3>
<p>Fra og med versjon 2.3 støtter News flere database maler, og støtter ikke lenger filmaler. Brukere som brukte det gamle filmal systemet kan følge disse trinnene (for hver filmal):
<ul>
<li>Kopier filmalen til utklippstavla</li>
<li>Opprett en ny databasemal <em>(enten sammendrag eller detalj)</em>.  Gi den nye malen samme navn (inkludert .tpl endelse) som den gamle filmalen, og lim inn innholdet.</li>
<li>Trykk Oppdater</li>
</ul>

<p>Dersom du følger disse trinnene skulle det løse problemet med at dine nyhetsmaler ikke blir funnet og tilsvarende smarty feil, når du oppgraderer til en versjon av CMS som har News 2.3 eller høyere.</p>';
?>
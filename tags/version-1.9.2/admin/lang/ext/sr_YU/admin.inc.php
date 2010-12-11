<?php
$lang['admin']['help_function_browser_lang'] = '<h3>Kako ovo radi?</h3>
  <p>Ovaj dodatak detektuje i prikazuje jezik koji korisnikov pregledač prihvata, i povezuje ga sa spiskom dozvoljenih jezika kako bi utvrdio vrednost jezika za ovu sesiju.</p>
<h3>Kako da ga koristim?</h3>
<p>Unesite tag &scaron;to bliže vrhu va&scaron;eg predlo&scaron;ka <em>(možete ga postaviti iznad sekcije <head> ako želite)</em> i unesite naziv osnovnog jezika i jezika koji su prihvaćeni,  (dozvoljeni su samo dvoslovni nazivi jezika), zatim učinite ne&scaron;to sa rezultatom. Na primer:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} je dodatak koji dolazi sa modulom CGSimpleSmarty)</em></p>
<h3>Koje parametre mogu da koristim?</h3>
<ul>
<li><strong>accepted <em>(obavezno)</em></strong><br/> - spisak dvoslovnih naziva jezika koji su prihvaćeni, odvojenih zapetama.</li>
<li>default<br/>- <em>(opciono)</em> Podrazumevani jezik koji se prikazuje u slučaju da ni jedan prihvaćeni jezik nije podržan od strane pregledača.  en se koristi ukoliko ni jedna vrednost nije definisana.</li>
<li>assign<br/>- <em>(opcionol)</em> Naziv the smarty promenljive kojoj će se dodeliti rezultat. Ukoliko ovo nije definisano, vraća se rezultat ove funkcije. .</li>
</ul>';
$lang['admin']['info_target'] = 'Ovu opciju može da koristi Meni menadžer da Vas obave&scaron;tava kada bi i kako novi okviri ili prozori  trebalo da se otvore. Neki predlo&scaron;ci Meni menadžera mogu ignorisati ovu opciju.';
$lang['admin']['close'] = 'Zatvori';
$lang['admin']['revert'] = 'Vrati sve promene';
$lang['admin']['autoclearcache2'] = 'Ukloni datoteke ke&scaron; memorije koji su stariji od određenog broja dana';
$lang['admin']['root'] = 'Koren';
$lang['admin']['info_content_autocreate_flaturls'] = 'Ako je aktivirano, svi URL-ovi će biti kreirani kao kopija alijasa stranice (ali ne sinhronizovani sa pseudonimom stranice)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatski kreirani URL-ovi su prosti';
$lang['admin']['content_autocreate_urls'] = 'Automatski kreiraj URL-ove stranica';
$lang['admin']['content_mandatory_urls'] = 'URL-ovi stranice su obavezni';
$lang['admin']['content_imagefield_path'] = 'Putanja za polje slike';
$lang['admin']['info_content_imagefield_path'] = 'Relativno u odnosu na otpremnu putanju slika, navedite ime direktorijuma koji sadrži putanje do datoteka za polja slika';
$lang['admin']['content_thumbnailfield_path'] = 'Putanja do polja umanjenih slika';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relativno u odnosu na otpremnu putanju slika, navedite ime direktorijuma koji sadrži putanje do datoteka za polja slika.  Ovo je najče&scaron;će isto kao gore navedena putanja. ';
$lang['admin']['contentimage_path'] = 'Putanja za oznaku {content_image}';
$lang['admin']['info_contentimage_path'] = 'Relativno u odnosu na otpremnu putanju, navedite ime direktorijuma koji sadrži putanje do datoteka za oznaku {content_image}.  Ova vrednost se koristi kao podrazumevani dir parametar';
$lang['admin']['editcontent_settings'] = 'Pode&scaron;avanja uređivanja sadržaja';
$lang['admin']['help_page_url'] = 'Navedite alternativni URL (u odnosu na koren va&scaron;eg sajta) koji se može koristiti da jedinstveno identifikuje ovu stranicu. Na primer: path/to/mypage. URL stranice koristan je samo kada je omogućena opcija pretty urls.';
$lang['admin']['help_page_alias'] = 'Pseudonim se koristi kao alternativa za ID broj stranice koji jedinstveno identifikuje stranicu. Alijas se takođe koristi kao pomoć u izgradnji URL adrese za pojedinačnu stranicu';
$lang['admin']['help_page_searchable'] = 'Ova postavka defini&scaron;e da li modul za pretraživanje treba da indeksira sadržaj ove stranice';
$lang['admin']['help_page_cachable'] = 'Brzina učitavanja sajta može se povećati ke&scaron;iranjem &scaron;to većeg broja stranica. To, međutim, nije preporučljivo za stranice čiji se sadržaj menja po zahtevu. ';
$lang['admin']['sitedownexcludeadmins'] = 'Zanemari korisnike prijavljene na administratorsku konzolu';
$lang['admin']['your_ipaddress'] = 'Va&scaron;a IP adresa je';
$lang['admin']['use_wysiwyg'] = 'Koristi WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Preusmeravajuči link';
$lang['admin']['yes'] = 'Da';
$lang['admin']['no'] = 'Ne';
$lang['admin']['listcontent_showalias'] = 'Prikaži  kolonu &quot;Alijas&quot;';
$lang['admin']['listcontent_showurl'] = 'Prikaži  kolonu &quot;URL&quot;';
$lang['admin']['listcontent_showtitle'] = 'Prikaži Naslov stranice ili Tekst menija';
$lang['admin']['listcontent_settings'] = 'Postavke Liste sadržaja';
$lang['admin']['lctitle_page'] = 'Naslov postojećih stavki sadržaja';
$lang['admin']['lctitle_alias'] = 'Alijas postojećih stavki sadržaja. Neke stavke sadržaja nemaju alijase';
$lang['admin']['lctitle_url'] = 'URL sufiks za stavku sadržaja. Ako je postavljen';
$lang['admin']['lctitle_template'] = 'Izabrani predložak za stavku sadržaja. Neke stavke sadržaja nemaju predložak';
$lang['admin']['lctitle_owner'] = 'Vlasnik stavke sadržaja';
$lang['admin']['lctitle_active'] = 'Pokazuje da li je stavka sadržaja aktivna. Neaktivne stavke ne mogu biti prikazane.';
$lang['admin']['lctitle_default'] = 'Odredite stavku sadržaja kojoj se pristupa kada je upućen zahtev za korenskom URL adresom sajta.  Samo jedna stavka može biti podrazumevana';
$lang['admin']['lctitle_move'] = 'Omogućava organizovanje hierarhije sadržaja';
$lang['admin']['lctitle_multiselect'] = 'Odaberi sve/ni&scaron;ta';
$lang['admin']['invalid_url'] = 'Navedena URL adresa stranice nije ispravna. Ona treba da sadrži samo alfanumeričke znakove, znak -  ili znak /. Takođe je moguće da je navedena URL adresa  već u upotrebi.';
$lang['admin']['page_url'] = 'URL adresa stranice';
$lang['admin']['runuserplugin'] = 'Pokreni korisnički dodatak';
$lang['admin']['output'] = 'Izlaz';
$lang['admin']['run'] = 'Pokreni';
$lang['admin']['run_udt'] = 'Pokreni ovu Korisnički definisanu oznaku (User Defined Tag)';
$lang['admin']['stylesheetcopied'] = 'Stil je kopiran';
$lang['admin']['templatecopied'] = 'Predložak je kopiran';
$lang['admin']['ecommerce_desc'] = 'Moduli za omogućavanje funkcija  E-trgovine';
$lang['admin']['ecommerce'] = 'E-trgovina';
$lang['admin']['help_function_content_module'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tip sadržajnog bloka omogućava povezivanje sa različitim modulima za kreiranje različitih tipova sadržajnih blokova.</p>
<p>Neki moduli mogu da defini&scaron;u tipove sadržajnih blokova za upotrebu u predlo&scaron;cima modula. Npr: modul FrontEndUsers može definisati tip sadržajnog bloka za  listu grupa. On će pokazati kako se može koristiti oznaka content_module u korist tog tipa bloka u okviru va&scaron;eg predlo&scaron;ka.</p>
<p><strong>Napomena:</strong> Ovaj tip bloka mora da se koristi samo sa kompatibilnim modulima. Ne bi trebalo da ga koristite na bilo koji način osim kao vođen od strane dodatnih modula.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Do&scaron;lo je do gre&scaron;ke parsiranja sadržaja blokova (verovatno zbog dupliranih naziva blokova)';
$lang['admin']['error_no_default_content_block'] = 'Nije otkriven podrazumevani sadržajni blok u ovom predlo&scaron;ku. Molimo proverite da li imate oznaku {content} predlo&scaron;ku stranice.';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>&Scaron;ta ovo radi?</h3>
  <p>Kao zamena za oznaku {stylesheet}, ova oznaka ke&scaron;iranje CSS datoteka, generi&scaron;ući statične datoteke u direkotrijumu  tmp/cache, kao i  obradu individualnih stilova Smartyjem.</p>
  <p>Ovaj priključak preuzima informacije stilova iz sistema. Podrazumevano, on preuzima sve stilove koji su povezani sa aktivnim predlo&scaron;kom, po redosledu koji je odredio dizajner, a zatim generi&scaron;e oznake stilova. </p>
  <p>Generirani stilovi se jedinstveno imenuju prema poslednjem datumu izmene u bazi podataka, i generi&scaron;u se samo ako su se stilovi promenili.</p>
  <p>Ova oznaka je zamena za oznaku  {stylesheet}.</p>
  <h3>Kako da ga koristim?</h3>
  <p>Jednostavno ubacite oznaku u sekciju head u va&scaron;em predlo&scaron;ku ili stranicina sledeći način: <code>{cms_stylesheet}</code></p>
  <h3>Koji parametri su dostupni?</h3>
  <ul>
  <li><em>(opciono)</em>name - Umesto da preuzimate sve stilove za jednu stranu, ona će dobiti samo jedan stil koji ste imenovali i nije bitno ako je vezan za trenutni &scaron;ablon ili ne.</li>
  <li><em>(opcionalno)</em>templateid - Ako je templateid definiran, to će se učitati stilove koji su povezani sa tim &scaron;ablonom umesto sada&scaron;njeg.</li>
  <li><em>(opcionalno)</em>media - Kada se koristi u vezi sa name parametrom, ovaj parametra će vam omogućiti da zamenite tip medija za taj stil. Kada se koristi u kombinaciji sa templateid parametrom, taj parametar će samo izdati stil oznake za one stilove koji su označeni kao kompatibilni sa određenim tipom medija.</li>
  </ul>
  <h3>Smarty Procesiranje</h3>
  <p>Prilikom generisanja CSS fajlova ovaj sistem predaje stilove id datoteke preko Smartya. Smarty razgraničavanja su promenjena od standardnog CMSMSa { and } u [[ and ]] da nam olak&scaron;jua tranziciju u stilovima. Ovo omogućava kreiranje Smarty varijabli n.pr.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] na vrhu stilova, a zatim pomoću ove varijable kasnije u stilovima, odnosno, n.pr.:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Po&scaron;to se fajlovi generi&scaron;u u tmp/cache direktoriju CMSMS instalacije, CSS-relativni radni direktorij nije korijen sajta.  Zbog toga slike ili drugi tagovi koji koriste url upotrebljavaju [[root_url]] tag s kojim se generira absolutni URL. n.pr.:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Napomena:</strong> Zbog cache prirode plugina, Smarty varijable trebaju biti postavljenene na vrhu svakog stila koji je priložen &scaron;ablonu.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron granularnost';
$lang['admin']['info_pseudocron_granularity'] = 'Ova postavka ukazuje koliko često će sistem poku&scaron;ati da izvr&scaron;i redovno planirane zadatke';
$lang['admin']['cron_request'] = 'Svaki zahtev';
$lang['admin']['cron_15m'] = '15 Minuta';
$lang['admin']['cron_30m'] = '30 Minuta';
$lang['admin']['cron_60m'] = '1 Sat';
$lang['admin']['cron_120m'] = '2 Sata';
$lang['admin']['cron_3h'] = '3 Sati';
$lang['admin']['cron_6h'] = '6 Sati';
$lang['admin']['cron_12h'] = '12 Sati';
$lang['admin']['cron_24h'] = '24 Sati';
$lang['admin']['clearcache_taskdescription'] = 'Izvr&scaron;eno dnevno, ovaj zadatak će isprazniti cache fajlove koji su stariji od pred definiranog vremena u Globalnom pode&scaron;avanju';
$lang['admin']['clearcache_taskname'] = 'Isprazni cache fajlove';
$lang['admin']['info_autoclearcache'] = 'Navedite integer vrednost. Unesite 0 da isključite automatsko brisanje cacha';
$lang['admin']['autoclearcache'] = 'Automatski isprazni cache svakih N dana';
$lang['admin']['listtemplates_pagelimit'] = 'Broj redova po stranici u toku pregleda &scaron;ablona';
$lang['admin']['liststylesheets_pagelimit'] = 'Broj redova po stranici u toku pregleda stilova';
$lang['admin']['listgcbs_pagelimit'] = 'Broj redova po stranici u toku pregleda Globalnih sadržaj blokova';
$lang['admin']['insecure'] = 'Nesiguran (HTTP)';
$lang['admin']['secure'] = 'Siguran (HTTPS)';
$lang['admin']['secure_page'] = 'Koristi HTTPS za ovu stranicu';
$lang['admin']['thumbnail_width'] = '&Scaron;irina pregledne slike';
$lang['admin']['thumbnail_height'] = 'Visina pregledne slike';
$lang['admin']['E_STRICT'] = 'Da li je E_STRICT deaktiviran u error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT je aktiviran u error_reporting';
$lang['admin']['info_estrict_failed'] = 'Neke biblioteke koje koristi CMSMS ne rade dobro sa E_STRICT. Molimo vas da onemogućite ovo pre nego &scaron;to nastavite';
$lang['admin']['E_DEPRECATED'] = 'Da li je E_DEPRECATED deaktiviran u error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED je aktiviran';
$lang['admin']['info_edeprecated_failed'] = 'Ako je E_DEPRECATED omogućen u va&scaron;em error_reportingu korisnici će videti veliki broj poruka o gre&scaron;kama,  upozorenje to može uticati na vizualnost i funkcionalitet';
$lang['admin']['session_use_cookies'] = 'Sessions je dozvoljeno koristiti Cookies';
$lang['admin']['errorgettingcontent'] = 'Učitavanje informacije za navedeni sadržajni objekat nije bilo moguće';
$lang['admin']['errordeletingcontent'] = 'Gre&scaron;ka pri brisanju sadržaja (ova stranica ima decu ili je podrazumevani sadržaj)';
$lang['admin']['invalidemail'] = 'Unesena email adresa je nevažeća';
$lang['admin']['info_deletepages'] = 'Napomena: Zbog dozvole ograničenja, neke od stranica koje ste izabrali za brisanje ne mogu biti navedene u nastavku';
$lang['admin']['info_pagealias'] = 'Odredite jedinstveni pseudonim za ovu stranicu.';
$lang['admin']['info_autoalias'] = 'Ako je ovo polje prazno, pseudonim će biti automatski kreiran.';
$lang['admin']['invalidparent'] = 'Morate da izaberete glavnu stranicu (obratite se administratoru ako ne vidite ovu opciju).';
$lang['admin']['forgotpwprompt'] = 'Unesite svoje admin korisničko ime. Email će biti poslat na email adresu povezanu sa tim korisničkim imenom sa novim podacima za prijavljivanje';
$lang['admin']['info_basic_attributes'] = 'Ovo polje vam omogućava da odredite koje osobine sadržaja, koji korisnici bez &quot;Upravljaj sav sadržaj&quot; dozvole, su dozvoljeni promijeniti.';
$lang['admin']['basic_attributes'] = 'Osnovna svojstva';
$lang['admin']['no_permission'] = 'Nemate dozvolu za izvr&scaron;avanje te funkcije.';
$lang['admin']['bulk_success'] = 'Bulk operacija je uspje&scaron;no aktualizirana.';
$lang['admin']['no_bulk_performed'] = 'Bulk operacija nije izvedena.';
$lang['admin']['info_preview_notice'] = 'Upozorenje: Ovaj pregledni panel se pona&scaron;a slično kao prozor Browsera, koji vam omogućava da se krećete preko prvobitno otvorene stranice. Međutim, ako to uradite, može doći do neočekivanog pona&scaron;anja. Ako navigirate dalje od početnog ekrana i nazad, možda nećete videti neposvećen sadržaj sve dok ne napravite promenu sadržaja u glavnoj karti, a zatim ponovo učitate ovu karticu. Kada dodajete sadržaj, ako navigirate dalje od ove stranice, nećete se moći vratiti, i morate da osvežite ovaj panel.';
$lang['admin']['sitedownexcludes'] = 'Isključi ove adrese iz Sitedown poruka';
$lang['admin']['info_sitedownexcludes'] = 'Ovaj parametar omogućava unos, sa zarezom odvojenu listu, IP adresa ili mreže koje su isključene od Sitedown mehanisma.  Ovo omogućava administratorima da rade stranici, dok anonimni posetioci dobivaju Sitedown poruku.<br/><br/>Adrese mogu biti navedene u sledećim formatima:<br/>
1. xxx.xxx.xxx.xxx -- (tačna IP addresa)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (opseg IP adresa)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = broj bitova, cisco stil.  n.pr.:  192.168.0.100/24 = čitava 192.168.0 klasa C podmreže)';
$lang['admin']['setup'] = 'Op&scaron;irno pode&scaron;avanje';
$lang['admin']['handle_404'] = 'Prilagođeno 404 rukovanje';
$lang['admin']['sitedown_settings'] = 'Sitedown pode&scaron;avanje';
$lang['admin']['general_settings'] = 'Op&scaron;te postavke';
$lang['admin']['help_function_page_attr'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tag može da se koristi da vrati vrednost atributa određene stranice.</p>
<h3>Kako se koristi?</h3>
<p>Ubacite oznaku u &scaron;ablon kao: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Koji parametri su mogući?</h3>
<ul>
  <li><strong>key [required]</strong> Ključ za vraćanje atributa od.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'Isključi WYSIWYG urednik na ovoj stranici (bez obzira na postavi korisnika ili &scaron;ablona)';
$lang['admin']['help_function_page_image'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tag može da se koristi da vrati vrednost polja za slike ili sličice na određenoj stranici.</p>
<h3>Kako se koristi?</h3>
<p>Ubacite oznaku u &scaron;ablon kao: <code>{page_image}</code>.</p>
<h3>Koji parametri su mogući?</h3>
<ul>
  <li>thumbnail - Opcionalno prikazuje vrednost osobine sličice umesto osobine slike.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Link stranice ne može da navede link druge stranice kao svoju destinaciju';
$lang['admin']['destinationnotfound'] = 'Izabrana strana se ne može pronaći ili je nevažeća';
$lang['admin']['help_function_dump'] = '<h3>&Scaron;ta ovo radi?</h3>
  <p>Ovaj tag se može koristiti za deponiranje sadržaja bilo koje Smarty varijable u vi&scaron;e čitljivom formatu. Ovo Je korisno za otklanjanje gre&scaron;aka i uređivanje &scaron;abloni, tako da znate format i tipove podataka koji su mogući.</p>
<h3>Kako se koristi?</h3>
<p>Upi&scaron;ite tag u &scaron;ablonu kao <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>Koji parametri su mogući?</h3>
<ul>
<li><strong>item (required)</strong> - Smarty variable za deponiranje sadržaja od.</li>
<li>maxlevel - Maksimalni broj stepena za recurse (primenjuje se samo ako je recurse i pružen). Podrazumevana vrednost za ovaj parametar Je 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL gre&scaron;ka u %s';
$lang['admin']['image'] = 'Slika';
$lang['admin']['thumbnail'] = 'Sličica';
$lang['admin']['searchable'] = 'Ova stranica Je pretraživa';
$lang['admin']['help_function_content_image'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj plugin omogućava dizajnerima &scaron;ablona da zatraži od korisnika da izabere sliku prilikom menjanja sadržaja stranice. On se pona&scaron;a slično kao i plugin za sadržaj, za dodatne blokove sadržaja.</p>
<h3>Kako se koristi?</h3>
<p>Jednostavno upi&scaron;ite ovaj tag u &scaron;ablonu: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Koji parametri su mogući?</h3>
<ul>
  <li><strong>(required)</strong> block - Ime za dodatni blok sadržaja.
  <p>Primer:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - Oznaka za taj blok sadržaja u uredu sadržaja stranice. Ako nije navedeno, blok ime će se koristiti.</li>
 
  <li><em>(optional)</em> dir - Ime direktorija (u odnosu na upload direktorij, iz kojeg da izaberete slike, ako nije navedeo, upload direktorij će se koristiti.
  <p>Primer: upotrebi slike iz uploads/images direktorija.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - Ime css klase koja će se upotrebljavati za img tag.</li>

  <li><em>(optional)</em> id - Id ime koje će se zpotrebljavati za img ta.</li> 

  <li><em>(optional)</em> name - Name tag koji će se upotrebljavati za img tag.</li> 

  <li><em>(optional)</em> width - Željena &scaron;irina slike.</li>

  <li><em>(optional)</em> height - Željena visina slike.</li>

  <li><em>(optional)</em> alt - Alternativni tekst ako slika nije pronađena.</li>
  <li><em>(optional)</em> urlonly - Izdaje samo url do slike, ignori&scaron;ući sve ostale parametre.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Važeće UDT ime počinje sa slovom ili crtom, zatim bilo koji broj slova, brojeva, ili crte.';
$lang['admin']['errorupdatetemplateallpages'] = '&Scaron;ablon nije aktivan';
$lang['admin']['hidefrommenu'] = 'Sakrij iz menija';
$lang['admin']['settemplate'] = 'Postavi &scaron;ablonu';
$lang['admin']['text_settemplate'] = 'Postavi izabrane stranice na drugi &scaron;ablon';
$lang['admin']['cachable'] = 'Cachable';
$lang['admin']['noncachable'] = 'Nije Cachable';
$lang['admin']['copy_from'] = 'Kopiraj od';
$lang['admin']['copy_to'] = 'Kopiraj u';
$lang['admin']['copycontent'] = 'Kopiranj stavku sadržaja';
$lang['admin']['md5_function'] = 'md5 funkcija';
$lang['admin']['tempnam_function'] = 'tempnam funkcija';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions u PHP-u';
$lang['admin']['xml_function'] = 'Basic XML (expat) support';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes za Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote i backslash su automatski escaped. Može doći do problema u toku sačuvanja &scaron;ablona';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes u runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Većina funkcija će vratiti quotes escaped sa backslashom. Može doći do problema';
$lang['admin']['file_get_contents'] = 'Testiraj file_get_contents';
$lang['admin']['check_ini_set'] = 'Testiraj ini_set';
$lang['admin']['check_ini_set_off'] = 'Možda ćete imati problema sa nekim funkcijama bez ove mogućnosti. Ovaj test ne može uspeti ako je omogućen safe_mode';
$lang['admin']['file_uploads'] = 'Učitavanje fajlova';
$lang['admin']['test_remote_url'] = 'Testiraj remote URL';
$lang['admin']['test_remote_url_failed'] = 'Verovatno nećete imati mogućnosti da otvorite fajl na remote web serveru.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Ako allow url fopen je onemogućen nećete imati mogućnosti da pristupite URL adresu obejkta kao fajl pomoću FTP ili HTTP protokola.';
$lang['admin']['connection_error'] = 'Outgoing http connections ne rade! Imate firewall ili neke ACL za spoljne veze?. To će rezultirati u defektnoj funkciji Modul menadžera i potencijalno drugih funkcija.';
$lang['admin']['remote_connection_timeout'] = 'Veza je Timed Out!';
$lang['admin']['search_string_find'] = 'Veza je ok!';
$lang['admin']['connection_failed'] = 'Veza nije uspela!';
$lang['admin']['remote_response_ok'] = 'Remote odgovor: ok!';
$lang['admin']['remote_response_404'] = 'Remote odgovor: not found!';
$lang['admin']['remote_response_error'] = 'Remote odgovor: error!';
$lang['admin']['notifications_to_handle'] = 'Imate <b>%d</b> neobradjenih obave&scaron;tenja';
$lang['admin']['notification_to_handle'] = 'Imate <b>%d</b> neobradjeno obave&scaron;tenje';
$lang['admin']['notifications'] = 'Obave&scaron;tenja';
$lang['admin']['dashboard'] = 'Pogledaj kontrolnu tablu';
$lang['admin']['ignorenotificationsfrommodules'] = 'Zanemari obave&scaron;tenja ovih modula';
$lang['admin']['admin_enablenotifications'] = 'Dozvoli korisnicima gledanje obave&scaron;tenja<br/><em>(obave&scaron;tenja će biti prikazana na svim admin stranicama)</em>';
$lang['admin']['enablenotifications'] = 'Omogućite obave&scaron;tenja korisnika u sekciji administratora';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrikcije su na snazi. Možda ćete imati problema sa nekim addon funkcijama sa ovim ograničenjem';
$lang['admin']['config_writable'] = 'config.php je writable. Sigurnije je ako promenite dozvolu u read-only';
$lang['admin']['caution'] = 'Oprez';
$lang['admin']['create_dir_and_file'] = 'Provera da li httpd proces može da kreira fajl u direktoriju koji je kreiran';
$lang['admin']['os_session_save_path'] = 'Nije provereno zbog OS putanje';
$lang['admin']['unlimited'] = 'Neograničen';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'Nije provereno zbog aktivnog open basedir';
$lang['admin']['invalid'] = 'Nevažeći';
$lang['admin']['checksum_passed'] = 'Svi checksumi odgovaraju onima u otpremljenom fajlu';
$lang['admin']['error_retrieving_file_list'] = 'Gre&scaron;ka prilikom preuzimanja fajl liste';
$lang['admin']['files_checksum_failed'] = 'Fajlovi nisu mogli biti checksummed';
$lang['admin']['failure'] = 'Neuspeh';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the &quot;pagedata&quot; block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Specifični Meta podaci stranice';
$lang['admin']['pagedata_codeblock'] = 'Smarty podatci ili logika koja Je specifična za ovu stranu';
$lang['admin']['error_uploadproblem'] = 'Do&scaron;lo je do gre&scaron;ke u otpremanju';
$lang['admin']['error_nofileuploaded'] = 'Fajl nije otpremljen';
$lang['admin']['files_failed'] = 'Fajl nije uspeo md5sum proveru';
$lang['admin']['files_not_found'] = 'Fajl nije pronađen';
$lang['admin']['info_generate_cksum_file'] = 'Ova funkcija će vam omogućiti da generi&scaron;e Checksum fajl i sačuvate ga na lokalnom računaru za kasniju proveru valjanosti. Ovo bi trebalo da se uradi samo pred startom sajta, i/ili posle nadogradnje ili velike promene.';
$lang['admin']['info_validation'] = 'Ova funkcija će se uporediti kontrolne sume koje se nalaze u otpremljenom fajlu sa fajlovima trenutne instalacije. Ona može da pomogne u pronalaženju problema sa otpremljenim fajlovima, ili koji fajlovi su modifikovani ako je va&scaron; sistem bio hakovan.';
$lang['admin']['download_cksum_file'] = 'Preuzmite checksum fajl';
$lang['admin']['perform_validation'] = 'Izvr&scaron;ite proveru valjanosti';
$lang['admin']['upload_cksum_file'] = 'Otpremi checksum fajl';
$lang['admin']['checksumdescription'] = 'Potvrdite integritet CMS faJlova poređenjem checksum fajlova';
$lang['admin']['system_verification'] = 'Verifikacija sistema';
$lang['admin']['extra1'] = 'Ekstra atribut strane 1';
$lang['admin']['extra2'] = 'Ekstra atribut strane 2';
$lang['admin']['extra3'] = 'Ekstra atribut strane 3';
$lang['admin']['start_upgrade_process'] = 'Počni proces nadogradnje';
$lang['admin']['warning_upgrade'] = '<em><strong>Upozorenje:</strong></em> CMSMS-u je potrebna nadogradnja.';
$lang['admin']['warning_upgrade_info1'] = 'Sada imate &scaron;emu verzije %s. potrebna vam ja nadogradnja u %s';
$lang['admin']['warning_upgrade_info2'] = 'Molimo kliknite na sledeći link: %s.';
$lang['admin']['warning_mail_settings'] = 'Va&scaron;e mail pode&scaron;avanje nije konfigurisano. To može da ometa sposobnost va&scaron;eg sajta za slanje e-poruke. Trebalo bi da idete u <a href="%s">Ekstenzije>> CMSMailer</a> i podesite postavke emaila sa informacijama koje ste dobili od hostera.';
$lang['admin']['view_page'] = 'Pogledajte ovu stranu u novom prozoru';
$lang['admin']['off'] = 'Isključen';
$lang['admin']['on'] = 'Uključen';
$lang['admin']['invalid_test'] = 'Neispravna testa param vrednost!';
$lang['admin']['copy_paste_forum'] = 'Vidi tekst izve&scaron;taj <em>(pogodan za kopiranje na forumu)</em>';
$lang['admin']['permission_information'] = 'Informacije dozvola';
$lang['admin']['server_os'] = 'Serverski operativni sistem';
$lang['admin']['server_api'] = 'Serverski API';
$lang['admin']['server_software'] = 'Serverski Software';
$lang['admin']['server_information'] = 'Informacija servera';
$lang['admin']['session_save_path'] = 'Putanja do session save';
$lang['admin']['max_execution_time'] = 'Maksimalno vreme izvr&scaron;enja';
$lang['admin']['gd_version'] = 'GD verzija';
$lang['admin']['upload_max_filesize'] = 'Maksimalna otpremna veličina';
$lang['admin']['post_max_size'] = 'Maksimalna Post veličina';
$lang['admin']['memory_limit'] = 'PHP efektivan Memory Limit';
$lang['admin']['server_db_type'] = 'Server baza podataka';
$lang['admin']['server_db_version'] = 'Server verzija baze podataka';
$lang['admin']['phpversion'] = 'Trenutna PHP verzija';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'PHP Informacija';
$lang['admin']['cms_install_information'] = 'CMS Informacija';
$lang['admin']['cms_version'] = 'CMS verzija';
$lang['admin']['installed_modules'] = 'Instalirani moduli';
$lang['admin']['config_information'] = 'Config Iformacija';
$lang['admin']['systeminfo_copy_paste'] = 'Molimo kopirajte i nalepite ovaj izabrani tekst u svoj post foruma';
$lang['admin']['help_systeminformation'] = 'Informacije prikazane dole prikupljaju se iz različitih lokacija, a sažete ovde, tako da ćete možda biti u mogućnosti da lako pronađete neke od informacija potrebnih prilikom poku&scaron;aja da diagnostikujete problem ili zahtev za pomoć u vezi sa CMS-Made Simple instalacijom.';
$lang['admin']['systeminfo'] = 'Informacije sistema';
$lang['admin']['systeminfodescription'] = 'Prikaz raznih informacija o va&scaron;em sistemu koje mogu biti korisne u dijagnostikovanju problema';
$lang['admin']['welcome_user'] = 'Dobrodo&scaron;li';
$lang['admin']['itsbeensincelogin'] = 'Pro&scaron;lo je %s od va&scaron;e poslednje prijave';
$lang['admin']['days'] = 'dana';
$lang['admin']['day'] = 'dan';
$lang['admin']['hours'] = 'sati';
$lang['admin']['hour'] = 'sat';
$lang['admin']['minutes'] = 'minuta';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Ovaj parametar treba da bude pode&scaron;en visoko na relativno statičnim sajtovima, i treba da bude pode&scaron;en na 0 za razvojne sajatove';
$lang['admin']['css_max_age'] = 'Maksimalno vreme (u sekundama) u kojem se stil može da ke&scaron;iraju u browseru';
$lang['admin']['error'] = 'Gre&scaron;ka';
$lang['admin']['clear_version_check_cache'] = 'Izprazni sve verzije cachea i proveri informacije na dostavi';
$lang['admin']['new_version_available'] = '<em>Obave&scaron;tenje:</em> Nova verzija CMS Made Simple-a je na raspolaganju.  Molimo Vas da obavestite administratora.';
$lang['admin']['info_urlcheckversion'] = 'Ako upi&scaron;ite ovde reč &quot;none&quot; neće se proveravati. <br/> Prazan string će rezultirati u podrazumevanom URL-u adrese koji se koristi.';
$lang['admin']['urlcheckversion'] = 'Proverite da li postoje nove verzije CMSMS-a pomoću ovog URL-a';
$lang['admin']['master_admintheme'] = 'Podrazumevana administracijska tema (za stranicu za priJavu i novih korisničkih naloga)';
$lang['admin']['contenttype_separator'] = 'Rastavljač';
$lang['admin']['contenttype_sectionheader'] = 'Odeljak Headera';
$lang['admin']['contenttype_content'] = 'Sadržaj';
$lang['admin']['contenttype_pagelink'] = 'Interni link Stranice';
$lang['admin']['nogcbwysiwyg'] = 'Zabrani WYSIWYG urednig na globalnim sadržajnim blokovima';
$lang['admin']['destination_page'] = 'Destinacija stranice';
$lang['admin']['additional_params'] = 'Dodatni parametri';
$lang['admin']['help_function_current_date'] = '        <h3 style=&quot;color: red;&quot;>Deprecated</h3>
	 <p>use <code>{$smarty.now|cms_date_format}</code></p>
	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
        <p><strong>Deprecated:</strong> This function is deprecated and will be removed in later versions of CMSMS.</p>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
    <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
	</ul>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Uses Javascript to enable content in an area to be expandable and collapsable on a mouse click.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:</p>
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a:gt;<span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"> - Here is all the info you will ever need...</a></span>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites. This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad. Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:</p>
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_slot - slots are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the Search module help.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: {recently_updated number=&#039;15&#039;}</p></li>
 	 <li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: {recently_updated leadin=&#039;Last Changed&#039;}</p></li>
 	 <li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: {recently_updated showtitle=&#039;true&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: {recently_updated css_class=&#039;some_name&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: {recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the Printing module help.</p>';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br /></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.</li>
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>
        </ul>
                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
';
$lang['admin']['login_info_title'] = 'Informacije';
$lang['admin']['login_info'] = 'Za ispravnu funkciju u administratorskoj konzoli';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies must be enabled in your browser</li> 
  <li>Javascript must be enabled in your browser</li> 
  <li>Popup windows must be allowed for the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the News module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the News module help.</p>';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br />
	<br />
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
  	  <li>name - The name of the global content block to display.</li>
          <li><em>(optional)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url=&quot;http://www.google.com&quot;}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included</li> 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p></li>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br /></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed. It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<p><strong>The default block <code>{content}</code> is required for proper working. (so without the block-parameter)</strong> To give the block a specific label, use the label-parameter. Additional blocks can be added by using the block-parameter.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional) </em>block - Allows you to have more than one content block per page. When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;second_content_block&quot; label=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</p></li>
		<li><em>(optional) </em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block. If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional) </em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block. If false, then it acts as normal.  Only works when block parameter is used.</li>
<li><em>(optional) </em>size - Applicable only when the oneline option is used this optional parameter allows you to specify the size of the edit field.  The default value is 50.</li>
		<li><em>(optional) </em>default - Allows you to specify default content for this content blocks (additional content blocks only).</li>
		<li><em>(optional) </em>label - Allows specifying a label for display in the edit content page.</li>
		<li><em>(optional) </em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p></li>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>
  <p>You can use the module FormBuilder instead.</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</strong></li>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		</ul>
		<strong>Note!</strong> Only one of the above may be used in the same cms_selflink statement!!
		<ul>
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link).</li>
        <li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages. If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.</p>
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;http://www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'od';
$lang['admin']['first'] = 'Prvi';
$lang['admin']['last'] = 'Zadnji';
$lang['admin']['adminspecialgroup'] = 'Upozorenje: Članovi ove grupe automatski imaJu sve dozvole';
$lang['admin']['disablesafemodewarning'] = 'Onemogući admin safe mode upozorenje';
$lang['admin']['allowparamcheckwarnings'] = 'Dozvolite provere parametara za kreiranje poruke upozorenja';
$lang['admin']['date_format_string'] = 'Format datuma';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatiran format datuma.  Poku&scaron;ajte googlanje &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Poslednji put promenjeno';
$lang['admin']['last_modified_by'] = 'Poslednji put promenjeno od';
$lang['admin']['read'] = 'Čitati';
$lang['admin']['write'] = 'Pisati';
$lang['admin']['execute'] = 'Izvr&scaron;iti';
$lang['admin']['group'] = 'Grupa';
$lang['admin']['other'] = 'Ostalo';
$lang['admin']['event_desc_moduleupgraded'] = 'Poslato nakon &scaron;to je unapređen modul';
$lang['admin']['event_help_moduleupgraded'] = '<p>Poslato nakon &scaron;to je unapređen modul.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Poslato nakon je modul instaliran';
$lang['admin']['event_help_moduleinstalled'] = '<p>Poslato nakon &scaron;to je modul instaliran.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Poslato nakon &scaron;to se deinstalira modul';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Poslato nakon &scaron;to se deinstalira modul.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Poslato nakon &scaron;to se UDT ažurira';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Poslato nakon &scaron;to se UDT ažurira.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Poslato pre UDT ažuriranja';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Poslato pre UDT ažuriranja.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Poslato pre brisanja UDT-a';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Poslato pre brisanja UDT-a.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Poslato nakon &scaron;to se UDT izbri&scaron;e';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Poslato nakon &scaron;to se UDT izbri&scaron;e.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Poslato nakon &scaron;to se UDT ubacio';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Poslato nakon &scaron;to se UDT ubacio.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Poslato pre nego &scaron;to se UDT umetnuo';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Poslato pre nego &scaron;to se UDT umetnuo.</p>';
$lang['admin']['global_umask'] = 'Maska za stvaranje fajlova (umask)';
$lang['admin']['errorcantcreatefile'] = 'Fajl se nije mogao napraviti (permissions problem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul nije kompatibilan sa ovom verzijom CMS-a';
$lang['admin']['errormodulenotloaded'] = 'Interna gre&scaron;ka, modul nije instancirati';
$lang['admin']['errormodulenotfound'] = 'Interna gre&scaron;ka, nije mogla da se pronađe instanca modula';
$lang['admin']['errorinstallfailed'] = 'Modul Instalacija nije uspela';
$lang['admin']['errormodulewontload'] = 'Problem instantiating dostupni modul';
$lang['admin']['frontendlang'] = 'Podrazumevani jezik za frontend';
$lang['admin']['info_edituser_password'] = 'Promenite ovo polje da promenite lozinku korisnika';
$lang['admin']['info_edituser_passwordagain'] = 'Promenite ovo polje da promenite lozinku korisnika';
$lang['admin']['originator'] = 'Tvorac';
$lang['admin']['module_name'] = 'Ime modula';
$lang['admin']['event_name'] = 'Ime događaja';
$lang['admin']['event_description'] = 'Opis događaja';
$lang['admin']['error_delete_default_parent'] = 'Vi ne možete izbrisati glavnu stranicu podrazumevane stranice.';
$lang['admin']['jsdisabled'] = 'Žao nam je, ova funkcija zahteva omogućen JavaScript.';
$lang['admin']['order'] = 'Red';
$lang['admin']['reorderpages'] = 'Promena redosleda stranica';
$lang['admin']['reorder'] = 'Promeni redosled';
$lang['admin']['page_reordered'] = 'Stranica je uspe&scaron;no preuređena.';
$lang['admin']['pages_reordered'] = 'Stranice su uspe&scaron;no preraspoređene';
$lang['admin']['sibling_duplicate_order'] = 'Dve stranice ne mogu da imaju isti redosled. Stranice nisu preuređeni.';
$lang['admin']['no_orders_changed'] = 'Izabrali ste da biste promenili redosled stranica, ali niste promenili redosled bilo koje od njih. Stranice nisu preuređene.';
$lang['admin']['order_too_small'] = 'Redosled stranica ne može biti nula. Stranice nisu preuređene.';
$lang['admin']['order_too_large'] = 'Redosled stranica ne može biti veći od broja stranica na tom nivou. Stranice nisu preuređene.';
$lang['admin']['user_tag'] = 'Korisnički Tag';
$lang['admin']['add'] = 'Dodaj';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'O';
$lang['admin']['action'] = 'Akcija';
$lang['admin']['actionstatus'] = 'Akcija/Status';
$lang['admin']['active'] = 'Aktivno';
$lang['admin']['addcontent'] = 'Dodaj novi sadržaj';
$lang['admin']['cantremove'] = 'Ne može se ukloniti';
$lang['admin']['changepermissions'] = 'Promena dozvola';
$lang['admin']['changepermissionsconfirm'] = 'BUDITE OPREZNI\n\nTOva akcija će poku&scaron;ati da osigura da sve datoteke koje čine modul su writable od strane web servera.\nDa li ste sigurni da želite da nastavite?';
$lang['admin']['contentadded'] = 'Sadržaj je bio uspe&scaron;no dodat u bazu podataka.';
$lang['admin']['contentupdated'] = 'Sadržaj je uspe&scaron;no ažuriran.';
$lang['admin']['contentdeleted'] = 'Sadržaj je bio uspe&scaron;no uklonjen iz baze podataka.';
$lang['admin']['success'] = 'Uspeh';
$lang['admin']['addcss'] = 'Dodaj stil';
$lang['admin']['addgroup'] = 'Dodaj novu grupu';
$lang['admin']['additionaleditors'] = 'Dodatni urednici';
$lang['admin']['addtemplate'] = 'DodaJ novi &scaron;ablon';
$lang['admin']['adduser'] = 'Dodaj novog korisnika';
$lang['admin']['addusertag'] = 'Dodaj UDT/User Defined Tag';
$lang['admin']['adminaccess'] = 'Pristup da se prijavite u administraciju';
$lang['admin']['adminlog'] = 'Administratorski dnevnik';
$lang['admin']['adminlogcleared'] = 'Administratorski dnevnik je uspe&scaron;no obrisan';
$lang['admin']['adminlogempty'] = 'Administratorski dnevnik je prazan';
$lang['admin']['adminsystemtitle'] = 'CMS Administracijski sistem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple administratorska konzola';
$lang['admin']['advanced'] = 'Napredna';
$lang['admin']['aliasalreadyused'] = 'Dodan &quot;Pseudonim strane&quot; je već u upotrebi na drugoj strani. Promenite &quot;Pseudonim strane&quot; u ne&scaron;to drugo.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Pseudonim mora biti slova i brojevi';
$lang['admin']['aliasnotaninteger'] = 'Pseudonim ne može biti ceo broj';
$lang['admin']['allpagesmodified'] = 'Sve stranice modifikovane!';
$lang['admin']['assignments'] = 'Dodeli Korisnike';
$lang['admin']['associationexists'] = 'Ovo udruženje već postoji';
$lang['admin']['autoinstallupgrade'] = 'Automatsko instaliraj ili nadogradi';
$lang['admin']['back'] = 'Nazad na meni';
$lang['admin']['backtoplugins'] = 'Nazad na listu Plugina';
$lang['admin']['cancel'] = 'Otkaži';
$lang['admin']['cantchmodfiles'] = 'Nije moguće promeniti dozvole na nekim fajlovima';
$lang['admin']['cantremovefiles'] = 'Problem u uklanjanju fajlova (dozvole?)';
$lang['admin']['confirmcancel'] = 'Jeste li sigurni da želite da odbacite promene? Kliknite OK da biste odbacili sve izmene. Kliknite na dugme Otkaži da biste nastavili uređivanje.';
$lang['admin']['canceldescription'] = 'Odbaci promene';
$lang['admin']['clearadminlog'] = 'Izprazni Admin log';
$lang['admin']['code'] = 'Kod';
$lang['admin']['confirmdefault'] = 'Da li ste sigurni da želite da podesite - %s - kao podrazumevanu stranicu?';
$lang['admin']['confirmdeletedir'] = 'Da li ste sigurni da želite da izbri&scaron;ete ovaj direktorij i ceo sadržaj?';
$lang['admin']['content'] = 'Sadržaj';
$lang['admin']['contentmanagement'] = 'Upravljanje sadržajem';
$lang['admin']['contenttype'] = 'Tip sadržaja';
$lang['admin']['copy'] = 'Kopiraj';
$lang['admin']['copytemplate'] = 'Kopiraj &scaron;ablon';
$lang['admin']['create'] = 'Stvori';
$lang['admin']['createnewfolder'] = 'Stvori nov direktorij';
$lang['admin']['cssalreadyused'] = 'CSS ime je u upotrebi';
$lang['admin']['cssmanagement'] = 'Upravljanje CSS-a';
$lang['admin']['currentassociations'] = 'Trenutna udruženja';
$lang['admin']['currentdirectory'] = 'Ternutni driektorij';
$lang['admin']['currentgroups'] = 'Trenutne grupe';
$lang['admin']['currentpages'] = 'Trenutna stranica';
$lang['admin']['currenttemplates'] = 'Trenutne &scaron;ablone';
$lang['admin']['currentusers'] = 'Trenutni korisnici';
$lang['admin']['custom404'] = 'Prilagođena 404 poruka o gre&scaron;ci';
$lang['admin']['database'] = 'Baza podataka';
$lang['admin']['databaseprefix'] = 'Prefiks baze podataka';
$lang['admin']['databasetype'] = 'Tip baze podataka';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Podrazumevano';
$lang['admin']['delete'] = 'Izbri&scaron;i';
$lang['admin']['deleteconfirm'] = 'Da li ste sigurni da želite da izbri&scaron;ete - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Da li ste sigurni da želite da izbri&scaron;ete udruženje - %s - ?';
$lang['admin']['deletecss'] = 'Izbri&scaron;i CSS';
$lang['admin']['dependencies'] = 'Zavisnost';
$lang['admin']['description'] = 'Opis';
$lang['admin']['directoryexists'] = 'OvaJ direktorij već postoji.';
$lang['admin']['down'] = 'Dole';
$lang['admin']['edit'] = 'Uredi';
$lang['admin']['editconfiguration'] = 'Ureda konfiguracije';
$lang['admin']['editcontent'] = 'Uredi sadržaj';
$lang['admin']['editcss'] = 'Uredi stil';
$lang['admin']['editcsssuccess'] = 'Stil ažuriran';
$lang['admin']['editgroup'] = 'Uredi grupu';
$lang['admin']['editpage'] = 'Uredi stranicu';
$lang['admin']['edittemplate'] = 'Uredi &scaron;ablon';
$lang['admin']['edittemplatesuccess'] = '&Scaron;ablon ažuriran';
$lang['admin']['edituser'] = 'Uredi korisnika';
$lang['admin']['editusertag'] = 'Uredi UDT';
$lang['admin']['usertagadded'] = 'UDT je uspe&scaron;no dodat.';
$lang['admin']['usertagupdated'] = 'UDT je uspe&scaron;no ažuriran.';
$lang['admin']['usertagdeleted'] = 'UDT je uspe&scaron;no uklonjen.';
$lang['admin']['email'] = 'Email adresa';
$lang['admin']['errorattempteddowngrade'] = 'Instaliranje ovog modula će dovesti do smanjenja rejtinga. Operacija Je prekinuta';
$lang['admin']['errorchildcontent'] = 'Sadržaj jo&scaron; uvek sadrži decu sadržaja. Molimo Vas da jih prvo uklonite.';
$lang['admin']['errorcopyingtemplate'] = 'Gre&scaron;ka u kopiranju &scaron;ablona';
$lang['admin']['errorcouldnotparsexml'] = 'Gre&scaron;ka u analizi XML datoteke. Molimo proverite da li ste učitali XML fajl i. ne tar.gz ili zip fajl.';
$lang['admin']['errorcreatingassociation'] = 'Gre&scaron;ka pri pravljenju asocijacije';
$lang['admin']['errorcssinuse'] = 'Ovaj stil se jo&scaron; uvek koristi u &scaron;ablonu ili stranama. Molimo vas da prvo uklonite te asocijacije.';
$lang['admin']['errordefaultpage'] = 'Ne može se izbrisati trenutna podrazumevana strana. Molimo Vas da podesite drugu starnu kao podrazumevanu.';
$lang['admin']['errordeletingassociation'] = 'Gre&scaron;ka pri brisanju aocijacije';
$lang['admin']['errordeletingcss'] = 'Gre&scaron;ka pri brisanju CSS-a';
$lang['admin']['errordeletingdirectory'] = 'NiJe moguće izbrisati direktorijum. Dozvole problema?';
$lang['admin']['errordeletingfile'] = 'Nije moguće izbrisati datoteku. Problem u dozvoli?';
$lang['admin']['errordirectorynotwritable'] = 'Nema dozvole da se pi&scaron;e u direktorijum. Ovo bi moglo biti izazvano zbog dozvole ili vlasni&scaron;tva datoteke. Safe mode može biti na snazi.';
$lang['admin']['errordtdmismatch'] = 'DTD Verzija nedostaje ili je nekompatibilna u XML datoteci';
$lang['admin']['errorgettingcssname'] = 'Gre&scaron;ka u dobivanju stajl imena';
$lang['admin']['errorgettingtemplatename'] = 'Gre&scaron;ka u dobivanju &scaron;ablon imena';
$lang['admin']['errorincompletexml'] = 'XML datoteka je nepotpuna ili nevažeća';
$lang['admin']['uploadxmlfile'] = 'Instalirajte modul preko XML datoteke';
$lang['admin']['cachenotwritable'] = 'U cache direktorijum se ne može pisati. Brisanje cacha neće raditi. Molimo vas da popravite dozvolu i vlasni&scaron;tvo u tmp/cache direktoriju (chmod 777). Takođe možda je onemogućen safe mode.';
$lang['admin']['modulesnotwritable'] = 'Modul direktorijum <em>(i/ili upload direktorijum)</em> nije writable, ukoliko želite da instalirate module otpremanjem XML datoteka morate osigurati da ovi direktoriji imaju potpuna read/write/execute prava(chmod 777).  Takođe možda je onemogućen safe mode.';
$lang['admin']['noxmlfileuploaded'] = 'Datoteka nije otpremljena. Da biste instalirali modul preko XML-a morate da izaberete i otpremite XML datoteku modula sa va&scaron;eg računara.';
$lang['admin']['errorinsertingcss'] = 'Gre&scaron;ka u ubacivanju Stylesheet-a';
$lang['admin']['errorinsertinggroup'] = 'Gre&scaron;ka u ubacivanju grupe';
$lang['admin']['errorinsertingtag'] = 'Gre&scaron;ka u ubacivanju UDT-a';
$lang['admin']['errorinsertingtemplate'] = 'Gre&scaron;ka u ubacivanju &scaron;ablona';
$lang['admin']['errorinsertinguser'] = 'Gre&scaron;ka u ubacivanju korisnika';
$lang['admin']['errornofilesexported'] = 'Gre&scaron;ka u izvozu XML datoteka';
$lang['admin']['errorretrievingcss'] = 'Gre&scaron;ka u preuzimanju Stylesheet-a';
$lang['admin']['errorretrievingtemplate'] = 'Gre&scaron;ka u preuzimanju &scaron;ablona';
$lang['admin']['errortemplateinuse'] = 'Ova &scaron;ablon je jo&scaron; uvek u upotrebi na jednoj stranici. Molimo Vas da ga uklonite prvo.';
$lang['admin']['errorupdatingcss'] = 'Gre&scaron;ka prilikom ažuriranja Stylesheet-a';
$lang['admin']['errorupdatinggroup'] = 'Gre&scaron;ka prilikom ažuriranja grupe';
$lang['admin']['errorupdatingpages'] = 'Gre&scaron;ka prilikom ažuriranja stranica';
$lang['admin']['errorupdatingtemplate'] = 'Gre&scaron;ka prilikom ažuriranja &scaron;ablona';
$lang['admin']['errorupdatinguser'] = 'Gre&scaron;ka prilikom ažuriranja korisnika';
$lang['admin']['errorupdatingusertag'] = 'Gre&scaron;ka prilikom ažuriranja UDT-a';
$lang['admin']['erroruserinuse'] = 'Ovaj korisnik jo&scaron; uvek poseduje stranice sa sadržajem. Molimo Vas da promeni svojine na drugog korisnika prije brisanja.';
$lang['admin']['eventhandlers'] = 'Menadžer događaja';
$lang['admin']['editeventhandler'] = 'Uredi Handler događaja';
$lang['admin']['eventhandlerdescription'] = 'Asociraj korisničke tag-ove sa događajima';
$lang['admin']['export'] = 'Izvezi';
$lang['admin']['event'] = 'Događaj';
$lang['admin']['false'] = 'Lažan';
$lang['admin']['settrue'] = 'Potvrđen';
$lang['admin']['filecreatedirnodoubledot'] = 'Direktorijum ne može da sadrži  &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nije moguće napraviti direktorijum bez imena.';
$lang['admin']['filecreatedirnoslash'] = 'Direktorijum ne može da sadrži &#039;/&#039; ili &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Upravljanje datotekama';
$lang['admin']['filename'] = 'Ime datoteke';
$lang['admin']['filenotuploaded'] = 'Datoteka ne može da se otpremi. Ovo bi moglo biti  zbog dozvole ili Safe mode problema?';
$lang['admin']['filesize'] = 'Veličina datoteke';
$lang['admin']['firstname'] = 'Ime';
$lang['admin']['groupmanagement'] = 'Upravljanje grupe';
$lang['admin']['grouppermissions'] = 'Dozvole grupe';
$lang['admin']['handler'] = 'Handler (user defined tag)';
$lang['admin']['headtags'] = 'Head Tag-ovi';
$lang['admin']['help'] = 'Pomoć';
$lang['admin']['new_window'] = 'novi prozor';
$lang['admin']['helpwithsection'] = '%s Pomoć';
$lang['admin']['helpaddtemplate'] = '<p>A template is what controls the look and feel of your site&#039;s content.</p><p>Create the layout here and also add your CSS in the Stylesheet section to control the look of your various elements.</p>';
$lang['admin']['helplisttemplate'] = '<p>This page allows you to edit, delete, and create templates.</p><p>To create a new template, click on the <u>Add New Template</u> button.</p><p>If you wish to set all content pages to use the same template, click on the <u>Set All Content</u> link.</p><p>If you wish to duplicate a template, click on the <u>Copy</u> icon and you will be prompted to name the new duplicate template.</p>';
$lang['admin']['home'] = 'Početak';
$lang['admin']['homepage'] = 'Sajt';
$lang['admin']['hostname'] = 'Hostname';
$lang['admin']['idnotvalid'] = 'Dati ID nije ispravan';
$lang['admin']['imagemanagement'] = 'Menadžer slika';
$lang['admin']['informationmissing'] = 'Informacije nedostaju';
$lang['admin']['install'] = 'Postavi';
$lang['admin']['invalidcode'] = 'Unesen je nevažeći kod.';
$lang['admin']['illegalcharacters'] = 'Nevažeći znakovi u polju %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Neravnomerna količina zagrada';
$lang['admin']['invalidtemplate'] = 'Nevažeći &Scaron;ablon ';
$lang['admin']['itemid'] = 'ID stavke';
$lang['admin']['itemname'] = 'Ime stavke';
$lang['admin']['language'] = 'Jezik';
$lang['admin']['lastname'] = 'Prezime';
$lang['admin']['logout'] = 'Odjavi se';
$lang['admin']['loginprompt'] = 'Unesite važeću akreditivu korisnika da dobijete pristup u Administratorsku konzolu.';
$lang['admin']['logintitle'] = 'Prijavi se u CMS Made Simple';
$lang['admin']['menutext'] = 'Tekst menia';
$lang['admin']['missingparams'] = 'Neki parametri su nedostajali ili su nevažeći';
$lang['admin']['modifygroupassignments'] = 'Izmeni zadatke grupe';
$lang['admin']['moduleabout'] = 'O %s modulu';
$lang['admin']['modulehelp'] = 'Pomoć za %s modul';
$lang['admin']['msg_defaultcontent'] = 'Dodajte kod ovde da se pojavi kao podrazumevani sadržaj svih novih stranica';
$lang['admin']['msg_defaultmetadata'] = 'Dodajte kod ovde da se pojavljuju u metapodacima svih novih stranica';
$lang['admin']['wikihelp'] = 'Pomoć Zajednice';
$lang['admin']['moduleinstalled'] = 'Modul je već instaliran';
$lang['admin']['moduleinterface'] = '%s Interfejs';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Pokreni';
$lang['admin']['name'] = 'Ime';
$lang['admin']['needpermissionto'] = 'Potrebna vam je &#039;%s&#039; dozvola za tu funkciju.';
$lang['admin']['needupgrade'] = 'Potrebna je nadogradnja';
$lang['admin']['newtemplatename'] = 'Novo Ime &scaron;ablona';
$lang['admin']['next'] = 'Sledeći';
$lang['admin']['noaccessto'] = 'Nemate pristup do %s';
$lang['admin']['nocss'] = 'Nema stila';
$lang['admin']['noentries'] = 'Nema unosa';
$lang['admin']['nofieldgiven'] = 'Nije %s određen!';
$lang['admin']['nofiles'] = 'Nema datoteka';
$lang['admin']['nopasswordmatch'] = 'Lozinke se ne poklapaju';
$lang['admin']['norealdirectory'] = 'Nema obzirnog direktorijuma';
$lang['admin']['norealfile'] = 'Nema obzirne datoteke';
$lang['admin']['notinstalled'] = 'Nije unesen';
$lang['admin']['overwritemodule'] = 'Zameni postojeće module';
$lang['admin']['owner'] = 'Vlasnik';
$lang['admin']['pagealias'] = 'Pseudonim stranice';
$lang['admin']['pagedefaults'] = 'Podrazumevane vrednosti stranice';
$lang['admin']['pagedefaultsdescription'] = 'Postavi podrazumevane vrednosti za nove stranice';
$lang['admin']['parent'] = 'Roditelj';
$lang['admin']['password'] = 'Lozinka';
$lang['admin']['passwordagain'] = 'Lozinka (ponovo)';
$lang['admin']['permission'] = 'Dozvola';
$lang['admin']['permissions'] = 'Dozvole';
$lang['admin']['permissionschanged'] = 'Dozvole su ažurirane.';
$lang['admin']['pluginabout'] = 'O %s tag-u';
$lang['admin']['pluginhelp'] = 'Pomoć za %s tag';
$lang['admin']['pluginmanagement'] = 'Uprava Plugin-a';
$lang['admin']['prefsupdated'] = 'Prioriteti su ažurirani.';
$lang['admin']['preview'] = 'Pregled';
$lang['admin']['previewdescription'] = 'Pregledaj promene';
$lang['admin']['previous'] = 'Prethodni';
$lang['admin']['remove'] = 'Ukloni';
$lang['admin']['removeconfirm'] = 'This action will permanently remove the files making up this module from this installation.\nAre you sure you want to proceed?';
$lang['admin']['removecssassociation'] = 'Remove Stylesheet Assocation';
$lang['admin']['saveconfig'] = 'Sačuvaj konfiguraciju';
$lang['admin']['send'] = 'Po&scaron;alji';
$lang['admin']['setallcontent'] = 'Postavi sve Strane';
$lang['admin']['setallcontentconfirm'] = 'Da li ste sigurni da želite da podesite sve strane da koriste ovaj &scaron;ablon?';
$lang['admin']['showinmenu'] = 'Prikaži u Meniu';
$lang['admin']['showsite'] = 'Pokaži sajt';
$lang['admin']['sitedownmessage'] = 'Poruka za isključen sajt';
$lang['admin']['siteprefs'] = 'Globalna pode&scaron;avanja';
$lang['admin']['status'] = 'Status';
$lang['admin']['stylesheet'] = 'Stylesheet';
$lang['admin']['submit'] = 'Po&scaron;alji';
$lang['admin']['submitdescription'] = 'Sačuvaj promene';
$lang['admin']['tags'] = 'Tag-ovi';
$lang['admin']['template'] = '&Scaron;ablon';
$lang['admin']['templateexists'] = '&Scaron;ablon ime već postoji';
$lang['admin']['templatemanagement'] = 'Upravljanje &scaron;ablona';
$lang['admin']['title'] = 'Naslov';
$lang['admin']['tools'] = 'Alati';
$lang['admin']['true'] = 'Postavljeno';
$lang['admin']['setfalse'] = 'Set False';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip ne važi';
$lang['admin']['uninstall'] = 'Deinstalira';
$lang['admin']['uninstallconfirm'] = 'Da li ste sigurni da želite da deinstalirate ovaj modul? Ime:';
$lang['admin']['up'] = 'Gore';
$lang['admin']['upgrade'] = 'Nadogradi';
$lang['admin']['upgradeconfirm'] = 'Da li ste sigurni da želite da nadogradite ovo?';
$lang['admin']['uploadfile'] = 'Otpremi datoteku';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Koristite napredni Stilesheet menadžment';
$lang['admin']['user'] = 'Korisnik';
$lang['admin']['userdefinedtags'] = 'User Defined Tags';
$lang['admin']['usermanagement'] = 'Menadžment korisnika';
$lang['admin']['username'] = 'Korisničko ime';
$lang['admin']['usernameincorrect'] = 'Korisničko ime ili lozinka netačna';
$lang['admin']['userprefs'] = 'Pode&scaron;avanja korisnika';
$lang['admin']['usersassignedtogroup'] = 'Korisnici dodeljeni %s grupi';
$lang['admin']['usertagexists'] = 'Tag sa ovim imenom već postoji. Molimo Vas da izaberete drugu.';
$lang['admin']['usewysiwyg'] = 'Koristi WYSIWYG editor za sadržaj';
$lang['admin']['version'] = 'Verzija';
$lang['admin']['view'] = 'Pogledaj';
$lang['admin']['welcomemsg'] = 'Dobrodo&scaron;ao %s';
$lang['admin']['directoryabove'] = 'direktorijum iznad trenutnog nivoa';
$lang['admin']['nodefault'] = 'No Default Selected';
$lang['admin']['blobexists'] = 'Global Content Blok ime postoji';
$lang['admin']['blobmanagement'] = 'Global Content Blok menadžment';
$lang['admin']['errorinsertingblob'] = 'Do&scaron;lo je do gre&scaron;ke prilikom ubacivanja Gloabl Content Bloka';
$lang['admin']['addhtmlblob'] = 'Dodaj Global Content Blok';
$lang['admin']['edithtmlblob'] = 'Uredi Global Content Blok';
$lang['admin']['edithtmlblobsuccess'] = 'Global content blok ažuriran';
$lang['admin']['tagtousegcb'] = 'Oznaka za kori&scaron;ćenje vog bloka';
$lang['admin']['gcb_wysiwyg'] = 'Omogući GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Omogući WYSIWYG editor prilikom uređivanja Global Content Blokovas';
$lang['admin']['filemanager'] = 'Menadžer fajlova';
$lang['admin']['imagemanager'] = 'Menadžer slika';
$lang['admin']['encoding'] = 'Encoding';
$lang['admin']['clearcache'] = 'Izprazni Cache';
$lang['admin']['clear'] = 'Izprazni';
$lang['admin']['cachecleared'] = 'Cache izpraznjen';
$lang['admin']['apply'] = 'Potvrdi';
$lang['admin']['applydescription'] = 'Sačuvaj promene i nastavi uredu';
$lang['admin']['none'] = 'nijedan';
$lang['admin']['wysiwygtouse'] = 'Izaberi WYSIWYG za upotrebu';
$lang['admin']['syntaxhighlightertouse'] = 'Izaberi syntax highlighter za upotrebu';
$lang['admin']['hasdependents'] = 'Ima zavise';
$lang['admin']['missingdependency'] = 'Nedostaju zavisnosti';
$lang['admin']['minimumversion'] = 'Minimalna verzija';
$lang['admin']['minimumversionrequired'] = 'Minimalna CMSMS verzija potrebna';
$lang['admin']['maximumversion'] = 'Maksimalna verzija';
$lang['admin']['maximumversionsupported'] = 'Maksimalna podržana CMSMS verzija';
$lang['admin']['depsformodule'] = 'Zavisnosti za %s Modul';
$lang['admin']['installed'] = 'Instaliran';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Istorija promene';
$lang['admin']['moduleerrormessage'] = 'Poruka o gre&scaron;ci za %s Modul';
$lang['admin']['moduleupgradeerror'] = 'Do&scaron;lo je do gre&scaron;ke prilikom nadogradnje modula';
$lang['admin']['moduleinstallmessage'] = 'Install Message for %s Module';
$lang['admin']['moduleuninstallmessage'] = 'Uninstall Message for %s Module';
$lang['admin']['admintheme'] = 'Administration Theme';
$lang['admin']['addstylesheet'] = 'Add a Stylesheet';
$lang['admin']['editstylesheet'] = 'Edit Stylesheet';
$lang['admin']['addcssassociation'] = 'Add Stylesheet Association';
$lang['admin']['attachstylesheet'] = 'Attach This Stylesheet';
$lang['admin']['attachtemplate'] = 'Attach to this Template';
$lang['admin']['main'] = 'Main';
$lang['admin']['pages'] = 'Pages';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'Files';
$lang['admin']['layout'] = 'Layout';
$lang['admin']['usersgroups'] = 'Users &amp; Groups';
$lang['admin']['extensions'] = 'Extensions';
$lang['admin']['preferences'] = 'Preferences';
$lang['admin']['admin'] = 'Site Admin';
$lang['admin']['viewsite'] = 'View Site';
$lang['admin']['templatecss'] = 'Assign Templates to Stylesheet';
$lang['admin']['plugins'] = 'Plugins';
$lang['admin']['movecontent'] = 'Move Pages';
$lang['admin']['module'] = 'Module';
$lang['admin']['usertags'] = 'User Defined Tags';
$lang['admin']['htmlblobs'] = 'Global Content Blocks';
$lang['admin']['adminhome'] = 'Administration Home';
$lang['admin']['liststylesheets'] = 'Style Sheets';
$lang['admin']['preferencesdescription'] = 'This is where you set various site-wide preferences.';
$lang['admin']['adminlogdescription'] = 'Shows a log of who did what in the admin.';
$lang['admin']['mainmenu'] = 'Main Menu';
$lang['admin']['users'] = 'Users';
$lang['admin']['usersdescription'] = 'This is where you manage users.';
$lang['admin']['groups'] = 'Groups';
$lang['admin']['groupsdescription'] = 'This is where you manage groups.';
$lang['admin']['groupassignments'] = 'Group Assignments';
$lang['admin']['groupassignmentdescription'] = 'Here you can assign users to groups.';
$lang['admin']['groupperms'] = 'Group Permissions';
$lang['admin']['grouppermsdescription'] = 'Set permissions and access levels for groups';
$lang['admin']['pagesdescription'] = 'This is where we add and edit pages and other content.';
$lang['admin']['htmlblobdescription'] = 'Global Content Blocks are chunks of content you can place in your pages or templates.';
$lang['admin']['templates'] = 'Templates';
$lang['admin']['templatesdescription'] = 'This is where we add and edit templates. Templates define the look and feel of your site.';
$lang['admin']['stylesheets'] = 'Stylesheets';
$lang['admin']['stylesheetsdescription'] = 'Stylesheet management is an advanced way to handle cascading Stylesheets (CSS) separately from templates.';
$lang['admin']['filemanagerdescription'] = 'Upload and manage files.';
$lang['admin']['imagemanagerdescription'] = 'Upload/edit and remove images.';
$lang['admin']['moduledescription'] = 'Modules extend CMS Made Simple to provide all kinds of custom functionality.';
$lang['admin']['tagdescription'] = 'Tags are little bits of functionality that can be added to your content and/or templates.';
$lang['admin']['usertagdescription'] = 'Tags that you can create and modify yourself to perform specific tasks, right from your browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Warning:</strong></em> install directory still exists. Please remove it completely.';
$lang['admin']['subitems'] = 'Subitems';
$lang['admin']['extensionsdescription'] = 'Modules, tags, and other assorted fun.';
$lang['admin']['usersgroupsdescription'] = 'User and Group related items.';
$lang['admin']['layoutdescription'] = 'Site layout options.';
$lang['admin']['admindescription'] = 'Site Administration functions.';
$lang['admin']['contentdescription'] = 'This is where we add and edit content.';
$lang['admin']['enablecustom404'] = 'Enable Custom 404 Message';
$lang['admin']['enablesitedown'] = 'Enable Site Down Message';
$lang['admin']['bookmarks'] = 'Shortcuts';
$lang['admin']['user_created'] = 'Custom Shortcuts';
$lang['admin']['forums'] = 'Forums';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Module Help';
$lang['admin']['managebookmarks'] = 'Manage Shortcuts';
$lang['admin']['editbookmark'] = 'Edit Shortcut';
$lang['admin']['addbookmark'] = 'Add Shortcut';
$lang['admin']['recentpages'] = 'Recent Pages';
$lang['admin']['groupname'] = 'Group Name';
$lang['admin']['selectgroup'] = 'Select Group';
$lang['admin']['updateperm'] = 'Update Permissions';
$lang['admin']['admincallout'] = 'Administration Shortcuts';
$lang['admin']['showbookmarks'] = 'Show Admin Shortcuts';
$lang['admin']['hide_help_links'] = 'Hide module help link';
$lang['admin']['hide_help_links_help'] = 'Check this box to disable the module help link in page headers.';
$lang['admin']['showrecent'] = 'Show Recently Used Pages';
$lang['admin']['attachtotemplate'] = 'Attach Stylesheet to Template';
$lang['admin']['attachstylesheets'] = 'Attach Stylesheets';
$lang['admin']['indent'] = 'Indent Pagelist to Emphasize Hierarchy';
$lang['admin']['adminindent'] = 'Content Display';
$lang['admin']['contract'] = 'Collapse Section';
$lang['admin']['expand'] = 'Expand Section';
$lang['admin']['expandall'] = 'Expand All Sections';
$lang['admin']['contractall'] = 'Collapse All Sections';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Global Settings';
$lang['admin']['adminpaging'] = 'Number of Content Items to show per/page in Page List';
$lang['admin']['nopaging'] = 'Show All Items';
$lang['admin']['myprefs'] = 'My Preferences';
$lang['admin']['myprefsdescription'] = 'This is where you can customize the site admin area to work the way you want.';
$lang['admin']['myaccount'] = 'My Account';
$lang['admin']['myaccountdescription'] = 'This is where you can update your personal account details.';
$lang['admin']['adminprefs'] = 'User Preferences';
$lang['admin']['adminprefsdescription'] = 'This is where you set your specific preferences for site administration.';
$lang['admin']['managebookmarksdescription'] = 'This is where you can manage your administration shortcuts.';
$lang['admin']['options'] = 'Options';
$lang['admin']['langparam'] = 'Parameter is used to specify what language to use for display on the frontend. Not all modules support or need this.';
$lang['admin']['parameters'] = 'Parameters';
$lang['admin']['mediatype'] = 'Media Type';
$lang['admin']['mediatype_'] = 'None set : will affect everywhere ';
$lang['admin']['mediatype_all'] = 'all : Suitable for all devices.';
$lang['admin']['mediatype_aural'] = 'aural : Intended for speech synthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : Intended for braille tactile feedback devices.';
$lang['admin']['mediatype_embossed'] = 'embossed : Intended for paged braille printers.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intended for handheld devices';
$lang['admin']['mediatype_print'] = 'print : Intended for paged, opaque material and for documents viewed on screen in print preview mode.';
$lang['admin']['mediatype_projection'] = 'projection : Intended for projected presentations, for example projectors or print to transparencies.';
$lang['admin']['mediatype_screen'] = 'screen : Intended primarily for color computer screens.';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Intended for television-type devices.';
$lang['admin']['assignmentchanged'] = 'Group Assignments have been updated.';
$lang['admin']['stylesheetexists'] = 'Stylesheet Exists';
$lang['admin']['errorcopyingstylesheet'] = 'Error Copying Stylesheet';
$lang['admin']['copystylesheet'] = 'Copy Stylesheet';
$lang['admin']['newstylesheetname'] = 'New Stylesheet Name';
$lang['admin']['target'] = 'Cilj';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL of ModuleRepository soap server';
$lang['admin']['metadata'] = 'Meta podaci';
$lang['admin']['globalmetadata'] = 'Globalni meta podaci';
$lang['admin']['titleattribute'] = 'Opis (atribut naslova)';
$lang['admin']['tabindex'] = 'Indeks kartice';
$lang['admin']['accesskey'] = 'Pristupni taster';
$lang['admin']['sitedownwarning'] = '<strong>Warning:</strong> Your site is currently showing a &quot;Site Down for Maintenence&quot; message. Remove the %s file to resolve this.';
$lang['admin']['deletecontent'] = 'Obri&scaron;i sadržaj';
$lang['admin']['deletepages'] = 'Da obri&scaron;em ove stranice?';
$lang['admin']['selectall'] = 'Označi sve';
$lang['admin']['selecteditems'] = 'Sa označenim';
$lang['admin']['inactive'] = 'Neaktivno';
$lang['admin']['deletetemplates'] = 'Obri&scaron;i predlo&scaron;ke';
$lang['admin']['templatestodelete'] = 'Ovi predlo&scaron;ci biče obrisani';
$lang['admin']['wontdeletetemplateinuse'] = 'These templates are in use and will not be deleted';
$lang['admin']['deletetemplate'] = 'Obri&scaron;i predlo&scaron;ke';
$lang['admin']['stylesheetstodelete'] = 'Ovi stilovi biče obrisani';
$lang['admin']['sitename'] = 'Naziv sajta';
$lang['admin']['siteadmin'] = 'Administrator sajta';
$lang['admin']['images'] = 'Upravljanje slikama';
$lang['admin']['blobs'] = 'Globalni blokovi sadržaja';
$lang['admin']['groupmembers'] = 'Dodeljivanje grupama';
$lang['admin']['troubleshooting'] = '(Re&scaron;avanje problema)';
$lang['admin']['event_desc_loginpost'] = 'Sent after a user logs into the admin panel';
$lang['admin']['event_desc_logoutpost'] = 'Sent after a user logs out of the admin panel';
$lang['admin']['event_desc_adduserpre'] = 'Sent before a new user is created';
$lang['admin']['event_desc_adduserpost'] = 'Sent after a new user is created';
$lang['admin']['event_desc_edituserpre'] = 'Sent before edits to a user are saved';
$lang['admin']['event_desc_edituserpost'] = 'Sent after edits to a user are saved';
$lang['admin']['event_desc_deleteuserpre'] = 'Sent before a user is deleted from the system';
$lang['admin']['event_desc_deleteuserpost'] = 'Sent after a user is deleted from the system';
$lang['admin']['event_desc_addgrouppre'] = 'Sent before a new group is created';
$lang['admin']['event_desc_addgrouppost'] = 'Sent after a new group is created';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'Sent before edits to a group are saved';
$lang['admin']['event_desc_editgrouppost'] = 'Sent after edits to a group are saved';
$lang['admin']['event_desc_deletegrouppre'] = 'Sent before a group is deleted from the system';
$lang['admin']['event_desc_deletegrouppost'] = 'Sent after a group is deleted from the system';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sent before a new stylesheet is created';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sent after a new stylesheet is created';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sent before edits to a stylesheet are saved';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sent after edits to a stylesheet are saved';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Sent before a stylesheet is deleted from the system';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Sent after a stylesheet is deleted from the system';
$lang['admin']['event_desc_addtemplatepre'] = 'Sent before a new template is created';
$lang['admin']['event_desc_addtemplatepost'] = 'Sent after a new template is created';
$lang['admin']['event_desc_edittemplatepre'] = 'Sent before edits to a template are saved';
$lang['admin']['event_desc_edittemplatepost'] = 'Sent after edits to a template are saved';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sent before a template is deleted from the system';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sent after a template is deleted from the system';
$lang['admin']['event_desc_templateprecompile'] = 'Sent before a template is sent to smarty for processing';
$lang['admin']['event_desc_templatepostcompile'] = 'Sent after a template has been processed by smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Sent before a new global content block is created';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Sent after a new global content block is created';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sent before edits to a global content block are saved';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sent after edits to a global content block are saved';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Sent before a global content block is deleted from the system';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Sent after a global content block is deleted from the system';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sent before a global content block is sent to smarty for processing';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sent after a global content block has been processed by smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sent before edits to content are saved';
$lang['admin']['event_desc_contenteditpost'] = 'Sent after edits to content are saved';
$lang['admin']['event_desc_contentdeletepre'] = 'Sent before content is deleted from the system';
$lang['admin']['event_desc_contentdeletepost'] = 'Sent after content is deleted from the system';
$lang['admin']['event_desc_contentstylesheet'] = 'Sent before the stylesheet is sent to the browser';
$lang['admin']['event_desc_contentprecompile'] = 'Sent before content is sent to smarty for processing';
$lang['admin']['event_desc_contentpostcompile'] = 'Sent after content has been processed by smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Sent before the combined html is sent to the browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Sent before any content destined for smarty is sent to for processing';
$lang['admin']['event_desc_smartypostcompile'] = 'Sent after any content destined for smarty has been processed';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the group object.</li>
<li>&#039;users&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
<li>&#039;users&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtriraj po modulima';
$lang['admin']['showall'] = 'Prikaži sve';
$lang['admin']['core'] = 'Jezgro';
$lang['admin']['defaultpagecontent'] = 'Podrazumevani sadržaj stranice';
$lang['admin']['file_url'] = 'Veza ka datoteci (umesto URL-a)';
$lang['admin']['no_file_url'] = 'Ni jedan (Koristi gornu URL adresu)';
$lang['admin']['defaultparentpage'] = 'Podrazumevana nadređena stranica';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Proba';
$lang['admin']['results'] = 'Rezultati';
$lang['admin']['untested'] = 'Nije testirano';
$lang['admin']['unknown'] = 'Nepoznato';
$lang['admin']['download'] = 'Preuzimanje';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'Sve grupe';
$lang['admin']['error_type'] = 'Tip gre&scaron;ke';
$lang['admin']['contenttype_errorpage'] = 'Stranica za gre&scaron;ku';
$lang['admin']['errorpagealreadyinuse'] = 'Kod gre&scaron;ke je već u upotrebi';
$lang['admin']['404description'] = 'Stranica nije pronađena';
$lang['admin']['usernotfound'] = 'Korisnik nije pronađen.';
$lang['admin']['passwordchange'] = 'Unesite novu lozinku';
$lang['admin']['recoveryemailsent'] = 'Email sent to recorded address.  Please check your inbox for further instructions.';
$lang['admin']['errorsendingemail'] = 'There was an error sending the email.  Contact your administrator.';
$lang['admin']['passwordchangedlogin'] = 'Password changed.  Please log in using the new credentials.';
$lang['admin']['nopasswordforrecovery'] = 'No email address set for this user.  Password recovery is not possible.  Please contact your administrator.';
$lang['admin']['lostpw'] = 'Zaboravili ste lozinku?';
$lang['admin']['lostpwemailsubject'] = '[%s] povraćaj lozinke';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utmz'] = '156861353.1290975942.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['admin']['qca'] = 'P0-1310326381-1290975943232';
$lang['admin']['utma'] = '156861353.1641871425.1292099470.1292099470.1292099470.1';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353.1.10.1292099470';
?>
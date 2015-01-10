<?php
$lang['admin']['msg_notimedifference'] = 'Nije pronađena razlika u vremenu u fajl sistemu';
$lang['admin']['error_timedifference'] = 'Vreme upisano u fajl sistema razlikuje se od vremena na serveru.';
$lang['admin']['server_time_diff'] = 'Proveri da li ima vremenske razlike u fajl sistemu';
$lang['admin']['tz_offset'] = 'Odstupanje vremenske zone';
$lang['admin']['gcb_name_help'] = '(može sadržati isključivo slova i cifre)';
$lang['admin']['pagedefaultsupdated'] = 'Podrazumevana pode&scaron;avanja stranice promenjena';
$lang['admin']['help_function_module_available'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Proverava da li je dati modul (po nazivu) instaliran i dostupan za upotrebu.</p>
<h3>Koje parametre prihvata?</h3>
<ul>
<li><strong>(obavezan)module</strong> - (string) Naziv modula.</li>
<li><em>(opcion)assign</em> - Dodeli rezultat imenovanoj Smarty promenljivoj.</li>
</ul>
<h3>Primer:</h3>
{module_available module=&#039;News&#039; assign=&#039;havenews&#039;}{if $havenews}{cms_module module=News}{/if}
<h3>Napmena:</h3>
<p>Ne možete koristiti skraćeni način pozivanja modula, nor: <em>{News}</em> u ovom tipu komande.</p>';
$lang['admin']['prettyurls_noeffect'] = '<em>Pretty URLS</em>  nisu pode&scaron;eni... Ovaj URL neće imati efekta.';
$lang['admin']['help_function_cms_lang_info'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj dodatak pruža sve informacije koje CMSMS ima o izabranom jeziku.  Ovo može uključivati informacije o <em>Locale</em>,  kodnim rasporedima, alijasima jezika i dr.</p>
<h3>Koje parametre prima?</h3>
<ul>
<li><em>(opcionalno)lang</em> - Jezik o kom Vas informacije interesuju.  Ukoliko lang parametar nije specificiran, biće vraćene informacije o jeziku koji CMSMS trenutno koristi.</li>
<li><em>(opcionalno)assign</em> - Dodijeli izlaznu vrijednost dodatka specificiranoj smarty promenljivoj.</li>
</ul>
<h3>Primer:</h3>
<pre>{cms_lang_info assign=&#039;nls&#039;}{$nls->locale()}</pre>
<h3>Vidite i:</h3>
<p>dokumentaciju za CmsNls klasu.</p>';
$lang['admin']['help_function_cms_set_language'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj dodatak poku&scaron;ava da podesi trenutni jezik, kako bi se koristio za prikazivanje odgovarajućeg prevoda i formatiranje datuma.  Jezik mora biti dostupan instaliranom CMSMS sistemu (mora imati svoju nls datoteku).  Prilikom pozivanja ove funkcije, (ako nije drukčije pode&scaron;eno u config.php datoteci) sistem će poku&scaron;ati da <em>Locale</em>  podesi na <em>Locale</em>  koji odgovara izabranom jeziku.  <em>Locale</em>  izabranog jezika mora biti instaliran na serveru.</p>
<h3>Koje parametre prima?</h3>
<ul>
<li><strong>(obavezan)lang</em> - Željeni jezik.  Jezik mora biti dostupan instaliranom CMSMS sistemu (mora imati svoju nls datoteku).</li>
</ul>';
$lang['admin']['help_function_cms_get_language'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj dodatak vraća naziv trenutnog CMSMS jezika. Jezik se koristi za prikazivanje odgovarajućeg prevoda, kao i za formatiranje datuma.</p>
<h3>Koje parametre prima?</h3>
<ul>
<li><em>(opcionalno)assign</em>  - Dodijeli izlaznu vrijednost dodatka specificiranoj smarty promenljivoj.</li>
</ul>';
$lang['admin']['help_modifier_cms_escape'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Služi za &quot;či&scaron;ćenje&quot; stringa na jedan od mnogih načina.  Može se koristiti za konvertovanje stringa u vi&scaron;e različitih formata za prikazivanje, ili za prilagođavanje podataka koje korisnici unesu, a koji sadrže specijalne karaktere, za prikaz na standardnoj Veb stranici.</p>
<h3>Kako se koristi?</h3>
<pre><code>{$some_var_with_text|cms_escape[:<escape type>|[<character set>]]}</code></pre>
<h4>Validni tipovi či&scaron;ćenja:</h4>
<ul>
<li>html <em>(podrazumevana vrednost)</em> - koristi htmlspecialchars.</li>
<li>htmlall - koristi htmlentities.</li>
<li>url - raw url encode all entities.</li>
<li>urlpathinfo - Similar to the url escape type, but also encode /.</li>
<li>quotes - Escape unescaped single quotes.</li>
<li>hex - Escape every character into hex.</li>
<li>hexentity - Hex encode every character.</li>
<li>decentity - Decimal encode every character.</li>
<li>javascript - Escape quotes, backslashes, newlines etc.</li>
<li>mail - Encode an email address into something that is safe to display.</li>
<li>nonstd - Escape non standard characters, such as document quotes.</li>
</ul>
<h4>Kodni raspored:</h4>
<p>Ukoliko nije specificiran, podrazumeva se da je utf-8. Kodni raspored se odnosi samo na  &quot;html&quot; i &quot;htmlall&quot; tipove či&scaron;ćenja.</p>';
$lang['admin']['help_modifier_cms_date_format'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Formatira datume u odgovarajući format. Koristi standardne strftime parametre. Ukoliko string koji određuje format nije naveden, sistem će iskoristiti izabrani format datuma (za prijavljene korisnike) ili sistemsko pode&scaron;avanje formata datuma.</p>
<p>Ovaj modifajer je u stanju da razume datume različitih formata.  Npr: date-time stringove dobijene iz baze podataka ili  integer timestamps koje generi&scaron;e time() funkcija.</p>
<h3>Upotreba:</h3>
<pre><code>{$some_date_var|cms_date_format[:<format string>]}</code></pre>
<h3>Primer:</h3>
<pre><code>{&#039;2012-03-24 22:44:22&#039;|cms_date_format}</code></pre>';
$lang['admin']['help_modifier_summarize'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Koristi se za skrati dugački tekst na određeni broj &quot;reči&quot;.</p>
<h3>Upotreba:</h3>
<pre><code>{$some_var_with_long_text|summarize:<number>}</code></pre>
<h3>Primer:</h3>
<p>Sledeći primer će ukloniti sve HTML tagove iz promenljive <code>content</code> i iseći sve &scaron;to prelazi 50 reči.</p>
<pre><code>{content|strip_tags|summarize:50}</code></pre>';
$lang['admin']['module_param_lang'] = '<strong>Prevaziđeno</strong> - Premoćava tenutno izabrani jezik za prikaz prevoda i formatiranje datuma.';
$lang['admin']['server_db_grants'] = 'Provera pristupnog nivoa bazi podataka';
$lang['admin']['error_nograntall_found'] = 'Pronalaženje odgovarajuće &quot;GRANT ALL&quot; dozvole nije uspelo.  Ovo može značiti da ćete imati problema prilikom instalacije i deinstalacije modula.  Ili čak i prilikom dodavanja i brisanja sadržaja, uključujući stranice';
$lang['admin']['msg_grantall_found'] = 'Pronađen &quot;GRANT ALL&quot; nivo, koji izgleda prikladno';
$lang['admin']['curlversion'] = 'Provera verzije  <em>Curl</em>-a';
$lang['admin']['curl'] = 'Provera <em>Curl</em>  biblioteke';
$lang['admin']['test_curl'] = 'Provera dostupnosti <em>Curl</em>-a';
$lang['admin']['test_curlversion'] = 'Provera verzije  <em>Curl</em>-a';
$lang['admin']['curl_versionstr'] = 'verzije %s, minimalna preporučena verzija je %s';
$lang['admin']['lines_in_error'] = '%d linija sa gre&scaron;kom';
$lang['admin']['no_files_scanned'] = 'Nijedna datoteka nije skenirana tokom procesa verifikacije (možda datoteka nije validna)';
$lang['admin']['stylesheetnotfound'] = '<em>Stylesheet</em>  %d nije pronađen';
$lang['admin']['sysmain_updateurls'] = 'Osveži putanje';
$lang['admin']['sysmain_confirmupdateurls'] = 'Da li ste sigurni da želite osvežiti bazu putanja?';
$lang['admin']['routesrebuilt'] = 'Putanje baze podataka su osvežene';
$lang['admin']['text_changeowner'] = 'Dodeli selektovane stranice drugom korisniku';
$lang['admin']['changeowner'] = 'Promeni vlasnika';
$lang['admin']['xmlreader_class'] = 'Provera postojanja XMLParser klase';
$lang['admin']['info_smarty_cacheudt'] = 'Ukoliko je ova opcija omogućena, svi pozivi Korisnički Definisanih Tagova će biti ke&scaron;irani.  Ovo je korisno za tagove koji prikazuju rezultate upita nad bazom podataka.  Možete onemogućiti ke&scaron;iranje za pojedinačne KD tagove koristeći <em>nocache</em>   parametar prilikom pozivanja KDT-a.  Npr: <code>{mojkdt nocache}</code>';
$lang['admin']['prompt_smarty_cacheudt'] = 'Ke&scaron;iraj pozive KDT';
$lang['admin']['always'] = 'Uvek';
$lang['admin']['never'] = 'Nikada';
$lang['admin']['moduledecides'] = 'Dozvoli modulu da odluči';
$lang['admin']['info_smarty_cachemodules'] = 'Izaberite kako će biti ke&scaron;irani tagovi u različitim &Scaron;ablonima koji pozivaju module.  Ukoliko je opcija omogućena, svi pozivi modula će biti ke&scaron;irani.  To može imati negativan uticaj na neke module, ili module koji imaju veze sa formama.  <em>(napomena: ovu opciju možete prenebregnuti kori&scaron;ćenjem <en>nocache</em>  parametra, kao &scaron;to je i opisano u uputstvu za upotebu Smarty-ja)</em>.  Ukoliko isključite ovu opciju pozivi modula neće biti ke&scaron;irani, &scaron;to može uticati na performanse.   Ukoliko pustite modul da odlučuje, podrazumevano pona&scaron;anje je da se ke&scaron;iranje ne radi.  Svaki modul pojedinačno može prenebregnuti ovo pode&scaron;avanje, a i Vi možete isključiti ke&scaron;iranje pojedinačnih modula koristeći <em>nocache</em>  parametar prilikom njihovog pozivanja.';
$lang['admin']['prompt_smarty_cachemodules'] = 'Ke&scaron;iraj pozive modula';
$lang['admin']['info_smarty_compilecheck'] = 'Ukoliko je ova opcija isključena, <em>Smarty</em>  neće proveravati datume poslednje izmene &Scaron;ablona, da bi utvrdio da li su nad njima vr&scaron;ene izmene.  Ovo može znatno pobolj&scaron;ati performanse.  Međutim, svaka izmena &Scaron;ablona, Stila (ili čak neke izmene sadržaja) mogle bi zahtevati ručno brisanje ke&scaron; memorije.';
$lang['admin']['prompt_smarty_compilecheck'] = 'Izvr&scaron;avaj kompilacionu proveru';
$lang['admin']['info_smarty_options'] = 'Sledeće opcije će imati efekta samo ako su omogućene gornje opcije ke&scaron;iranja';
$lang['admin']['info_smarty_caching2'] = 'Ukoliko je ova opcija uključena, rezultat rada određenih dodataka (<em>plugins</em>) će biti ke&scaron;iran u cilju pobolj&scaron;anja preformanse.  Ovo se odnosi samo na stranice za koje je dozvoljeno ke&scaron;iranje i samo za korisnike koji nisu administratori.  Vodite računa da ova opcija može lo&scaron;e uticati na rad nekih modula ili dodataka, ili na dodatke koji koriste non-inline forme.  Ova opcija nema uticaja na korisnike koji imaju PHP 5.2.x';
$lang['admin']['prompt_use_smartycaching'] = 'Omogući ke&scaron;iranje za <em>Smarty</em>';
$lang['admin']['smarty_settings'] = 'Pode&scaron;avanja <em>Smarty</em>-ja';
$lang['admin']['help_function_cms_init_editor'] = '<h3>&Scaron;ta ovo radi?</h3>
  <p>Ovaj dodatak inicijalizuje izabrani WYSIWYG editor da bi bio prikazan onda kada su WYSIWYG funkcionalnosti potrebne za uno&scaron;enje podataka iz korisničkog dela sajta.  Ovaj dodatak će pronaći izabrani WYSIWYG editor, utvrditi da li je njegovo kori&scaron;ćenje zatraženo, i ako jeste, generisaće odgovarajući HTML kod <em>(obično su to javascript linkovi)</em> tako da osigura pravilno pokretanje WYSIWYG editora tokom učitavanja stranice. Ukoliko za korisnički deo sajta nije izabran nijedan WYSIWYG editor, ovaj dodatak neće vratiti nikakav kod.</p>
  <p><strong>Napomena:</strong> Ovaj dodatak će raditi ispravno sa podrazumevanim pode&scaron;avanjima CMSMS sistema. Ukoliko ste menjali vrednost kofiguracione promenljive &quot;process_whole_template&quot; morate podesiti vrednosti parametara koji se prosleđuju ovom dodatku (videti dole).</p>
<h3>Kako se koristi?</h3>
<p>Najpre morate izabrati WYSIWYG editor koji će se koristiti u korisničkom delu sajta. Ovo možete uraditi preko stranice za globalna pode&scaron;avanja u administratorskom delu (Administracija sajta -> Globalna pode&scaron;avanja).  Potom, ukoliko koristite WYSIWYG editore na velikom broju stranica, možda je najbolje da ubacite {cms_init_editor} direktno u &Scaron;ablon Va&scaron;e stranice. Ukoliko Vam je WYSIWYG editor neophodan samo na ograničenom broju stranica, možete ga prosto ubaciti u polje &quot;Metapodaci specifični za stranicu&quot; svake pojedinačne stranice.</p>
<h3>Koje parametre prima?</h3>
<ul>
<li><em>(opcioni)wysiwyg</em> - Specificirajte naziv WYSIWYG dodatka koji treba inicijalizovati.  Koristite ovaj parametar sa oprezom.  Ukoliko je u globalnim pode&scaron;avanjima izabran neki drugi WYSIWYG editor, to pode&scaron;avanje biće ignorisano i biće prikazan editor specificiran ovim parametrom.</li>
<li><em>(opcioni)force=0</em> - Ovaj dodatak obično neće inicijalizovati izabrani (ili detektovani) editor ukoliko ovaj nije označen kao &quot;aktivan&quot;.  Ovaj parametar će promeniti ovo pona&scaron;anje.  Ukoliko je izmenjena podrazumevana vrednost promenljive &quot;process_whole_template&quot;, ovaj parametar može postati obavezan.</li>
<li><em>(opcioni)assign</em> - Pridruži izlaznu vrednost koju dodatak vrati specificiranoj <em>Smarty</em> promenljivoj.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'Ova forma omogućava specificiranje različitih opcija koje se tiču inicijalnih pode&scaron;avanja prilikom kreiranja novih stranica sa sadržajem. Ova pode&scaron;avanja nemaju uticaja na već postojeće stranice sa sadržajem';
$lang['admin']['default_contenttype'] = 'Podrazumevani tip sadržaja';
$lang['admin']['info_default_contenttype'] = 'Ovom opcijom određuje se koji će tip sadržaja biti automatski izabran prilikom dodavanja novog sadržaja. Postarajte se da izabrani tip ne spada u jedan od &quot;nedozvoljenih tipova&quot; izlistanih dole';
$lang['admin']['error_contenttype'] = 'Tip sadržaja koji je povezan sa ovom stranicom nije validan ili nije dozvoljen';
$lang['admin']['info_disallowed_contenttypes'] = 'Selektujte tipove sadržaja koje neće biti moguće izabrati prilikom kreiranja novog ili menjanja postojećeg sadržaja.  Koristite CTRL+Klik da selektujete ili deselektujete tip.  Ukoliko nije izabran nijedan, biće dozvoljeni svi tipovi sadržaja';
$lang['admin']['disallowed_contenttypes'] = 'Tipovi sadržaja čija upotreba nije dozvoljena';
$lang['admin']['search_module'] = 'Modul za pretragu';
$lang['admin']['info_search_module'] = 'Izaberite modul koji će biti kori&scaron;ćen za indeksiranje pretraživih reči i koji će obezbediti mogućnost pretraživanja sajta';
$lang['admin']['filecreatedirbadchars'] = 'U nazivu direktorijuma koji ste ukucali detektovani su nedozoljeni karakteri';
$lang['admin']['modulehelp_yourlang'] = 'Pogledajte pomoć na Va&scaron;em jeziku';
$lang['admin']['info_umask'] = '&quot;umask&quot; je oktalna vrednost koja se koristi za specificiranje korisničkih dozvola nad novokreiranim datotekama (koristi se za datoteke u Ke&scaron; direktorijumu i otpremljene datoteke).  Za vi&scaron;e informacija pogledajte odgovarajući <a href="http://en.wikipedia.org/wiki/Umask">Wikipedia članak</a>.';
$lang['admin']['general_operation_settings'] = 'Pode&scaron;avanje op&scaron;teg funkcionisanja';
$lang['admin']['info_checkversion'] = 'Ukoliko je ova opcija uključena, jednom dnevno će biti proveravano da li je iza&scaron;la nova verzija CMSMS-a';
$lang['admin']['checkversion'] = 'Dozvoli periodične provere da li je iza&scaron;la nova verzija';
$lang['admin']['actioncontains'] = 'Akcija sadrži';
$lang['admin']['filterapplied'] = 'Trenutni filter';
$lang['admin']['automatedtask_success'] = 'Automatizovani zadatak izvr&scaron;en';
$lang['admin']['siteprefsupdated'] = 'Pode&scaron;avanja sajta promenjena';
$lang['admin']['ip_addr'] = 'IP adresa';
$lang['admin']['warn_admin_ipandcookies'] = 'Upozorenje: tokom vr&scaron;enja administratorskih aktivnosti koriste se <em>cookies</em> i beleži se Va&scaron;a IP adresa';
$lang['admin']['event_desc_loginfailed'] = 'Prijavljivanje nije uspelo';
$lang['admin']['event_help_loginfailed'] = '<p>&Scaron;alje se nako neuspje&scaron;nog poku&scaron;aja prijavljivanja u Administratorski deo sajta.</p>';
$lang['admin']['modulehelp_english'] = 'Pogledajte pomoć na engleskom';
$lang['admin']['nopluginabout'] = 'Nema informacija o ovom dodatku';
$lang['admin']['nopluginhelp'] = 'Za ovaj dodatak nije dostupna pomoć';
$lang['admin']['moduleupgraded'] = 'Nadogradnja uspe&scaron;no zavr&scaron;ena';
$lang['admin']['added_css'] = 'Dodat Stil';
$lang['admin']['toggle'] = 'Uključi/Isključi';
$lang['admin']['added_group'] = 'Grupa dodata';
$lang['admin']['expanded_xml'] = 'Otpakovana XML datoteka sastoji se od %s %s';
$lang['admin']['installed_mod'] = 'Instalirana je verzija %s';
$lang['admin']['uninstalled_mod'] = 'Modul %s je deinstaliran';
$lang['admin']['upgraded_mod'] = '%s je nadograđen sa verzije %s na %s';
$lang['admin']['edited_gcb'] = 'Blok Globalnog Sadržaja je izmenjen';
$lang['admin']['edited_content'] = 'Sadržaj izmenjen';
$lang['admin']['added_content'] = 'Sadržaj dodat';
$lang['admin']['added_css_association'] = 'Veza sa Stilom dodata';
$lang['admin']['deleted_group'] = 'Grupa obrisana';
$lang['admin']['deleted_content'] = 'Sadržaj obrisan';
$lang['admin']['edited_user'] = 'Podaci o korisniku izmenjeni';
$lang['admin']['edited_udt'] = 'Korisnički Definisan Tag izmenjen';
$lang['admin']['content_copied'] = 'Stavka sadržaja kopirana u %s';
$lang['admin']['deleted_template'] = '&Scaron;ablon obrisan';
$lang['admin']['added_udt'] = 'Korisnički Definisan Tag dodat';
$lang['admin']['deleted_udt'] = 'Korisnički Definisan Tag obrisan';
$lang['admin']['added_gcb'] = 'Blok Globalnog Sadržaja dodat';
$lang['admin']['edited_group'] = 'Podaci o grupi izmenjeni';
$lang['admin']['deleted_css_association'] = 'Veza sa Stilom obrisana';
$lang['admin']['user_logout'] = 'Odjava korisnika';
$lang['admin']['user_login'] = 'Prijava korisnika';
$lang['admin']['login_failed'] = 'Prijava korisnika nije uspela';
$lang['admin']['deleted_css'] = 'Stil obrisan';
$lang['admin']['uploaded_file'] = 'Datoteka otpremljena';
$lang['admin']['created_directory'] = 'Direktorijum napravljen';
$lang['admin']['deleted_file'] = 'Datotetka obrisana';
$lang['admin']['deleted_directory'] = 'Direktorijum obrisan';
$lang['admin']['edited_template'] = '&Scaron;ablon izmenjen';
$lang['admin']['deleted_user'] = 'Korisnik obrisan';
$lang['admin']['deleted_module'] = '%s je trajno obrisana';
$lang['admin']['deleted_gcb'] = 'Blok Globalnog Sadržaja obrisan';
$lang['admin']['added_user'] = 'Korisnik dodat';
$lang['admin']['edited_user_preferences'] = 'Korisničke preferencije izmenjene';
$lang['admin']['added_template'] = '&Scaron;ablon dodat';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Poslato nakon kompiliranja stylesheet-a preko Smarty-a';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Poslato pre kompiliranja stylesheet-a preko Smarty-a';
$lang['admin']['confirm_uploadmodule'] = 'Da li ste sigurni da želite da otpremite izabranu XML datoteku? Otpremanje neispravne instalacione XML datoteke modula može učiniti da sajt prestane da funkcioni&scaron;e.';
$lang['admin']['error_module_mincmsversion'] = 'Ovaj modul zahteva noviju verziju CMS Made Simple';
$lang['admin']['info_browser_cache_expiry'] = 'Odredite koliko vremena (u minutama) će Veb pretraživač ke&scaron;irati stranice.  Pode&scaron;avanje ove vrednosti na 0 (nulu) onemogućava ke&scaron;iranje.';
$lang['admin']['browser_cache_expiry'] = 'Period nakon kog ke&scaron;irane verzije stranica ističu <em>(u minutama)</em>';
$lang['admin']['info_browser_cache'] = 'Ovo pode&scaron;avanje se odnosi samo na stranice za koje ste odredili da mogu biti ke&scaron;irane. Pokazuje da bi Veb pretraživaču trebalo biti omogućeno da ke&scaron;ira stranice određeni vremenski period. Ukoliko omogućite ovu opciju, korisnici koji se često vraćaju na Va&scaron; Veb sajt možda neće odmah vidjeti izmjene koje napravite.';
$lang['admin']['allow_browser_cache'] = 'Dozvoli Veb pretraživaču da ke&scaron;ira stranice';
$lang['admin']['server_cache_settings'] = 'Pode&scaron;avanje ke&scaron;iranja od strane Veb servera';
$lang['admin']['browser_cache_settings'] = 'Pode&scaron;avanje ke&scaron;iranja od strane Veb pretraživača';
$lang['admin']['help_function_browser_lang'] = '<h3>Kako ovo radi?</h3>
  <p>Ovaj dodatak detektuje i prikazuje jezik koji korisnikov Veb petraživač prihvata, i povezuje ga sa spiskom dozvoljenih jezika kako bi utvrdio koji jezik će se koristiti u tekućoj sesiji.</p>
<h3>Kako da ga koristim?</h3>
<p>Unesite tag &scaron;to bliže vrhu va&scaron;eg &Scaron;ablona <em>(možete ga postaviti iznad sekcije <head> ako želite)</em> i unesite naziv osnovnog jezika i jezika koji su prihvaćeni,  (dozvoljeni su samo dvoslovni nazivi jezika), zatim učinite ne&scaron;to sa rezultatom. Na primer:</p>
<pre><code>{browser_lang accept=de,fr,en,sr default=sr assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} je dodatak koji dolazi sa modulom CGSimpleSmarty)</em></p>
<h3>Koje parametre mogu da koristim?</h3>
<ul>
<li><strong>accepted <em>(obavezno)</em></strong><br/> - spisak dvoslovnih naziva jezika koji su prihvaćeni, odvojenih zapetama.</li>
<li>default<br/>- <em>(opciono)</em> Podrazumevani jezik koji se prikazuje u slučaju da ni jedan prihvaćeni jezik nije podržan od strane pregledača.  en se koristi ukoliko ni jedna vrednost nije definisana.</li>
<li>assign<br/>- <em>(opcionol)</em> Naziv the smarty promenljive kojoj će se dodeliti rezultat. Ukoliko ovo nije definisano, vraća se rezultat ove funkcije. .</li>
</ul>';
$lang['admin']['info_target'] = 'Ovu opciju može da koristi Meni menadžer da Vas obave&scaron;tava kada bi i kako novi okviri ili prozori  trebalo da se otvore. Neki &Scaron;abloni u Meni menadžeru mogu ignorisati ovu opciju.';
$lang['admin']['close'] = 'Zatvori';
$lang['admin']['open'] = 'Otvori';
$lang['admin']['revert'] = 'Poni&scaron;ti sve promene';
$lang['admin']['autoclearcache2'] = 'Obri&scaron;i datoteke ke&scaron; memorije koje su starije od specificiranog broja dana';
$lang['admin']['root'] = 'Koren';
$lang['admin']['info_content_autocreate_flaturls'] = 'Ako je aktivirano, svi URL-ovi će biti kreirani kao kopija alijasa stranice (ali ne i sinhronizovani sa alijasom stranice)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatski kreirani URL-ovi su prosti';
$lang['admin']['content_autocreate_urls'] = 'Automatski kreiraj URL-ove stranica';
$lang['admin']['content_mandatory_urls'] = 'URL-ovi stranice su obavezni';
$lang['admin']['content_imagefield_path'] = 'Putanja za polje slike';
$lang['admin']['info_content_imagefield_path'] = 'Relativno u odnosu na otpremnu putanju slika, navedite ime direktorijuma koji sadrži putanje do datoteka za polja slika';
$lang['admin']['content_thumbnailfield_path'] = 'Putanja za polje umanjenih prikaza slika';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relativno u odnosu na otpremnu putanju slika, navedite ime direktorijuma koji sadrži putanje do datoteka za polja slika.  Ovo je najče&scaron;će isto kao gore navedena putanja.';
$lang['admin']['contentimage_path'] = 'Putanja za tag {content_image}';
$lang['admin']['info_contentimage_path'] = 'Relativno u odnosu na otpremnu putanju, navedite ime direktorijuma koji sadrži putanje do datoteka za tag {content_image}.  Ova vrednost se koristi kao podrazumevani dir parametar';
$lang['admin']['editcontent_settings'] = 'Pode&scaron;avanja uređivanja sadržaja';
$lang['admin']['help_page_url'] = 'Navedite alternativni URL (u odnosu na koren Va&scaron;eg sajta) koji se može koristiti da jedinstveno identifikuje ovu stranicu. Na primer: path/to/mypage. URL stranice koristan je samo kada je omogućena opcija pretty urls.';
$lang['admin']['help_page_alias'] = 'Alijas se koristi kao alternativa za ID stranice, koji jedinstveno identifikuje stranicu. Alijas se takođe koristi kao pomoć u izgradnji URL adrese za pojedinačnu stranicu';
$lang['admin']['help_page_searchable'] = 'Ova postavka defini&scaron;e da li modul za pretraživanje treba da indeksira sadržaj ove stranice';
$lang['admin']['help_page_cachable'] = 'Brzina učitavanja sajta može se povećati ke&scaron;iranjem &scaron;to većeg broja stranica. To, međutim, nije preporučljivo za stranice čiji se sadržaj menja prilikom svakog učitavanja.';
$lang['admin']['sitedownexcludeadmins'] = 'Zanemari korisnike prijavljene na administratorsku konzolu';
$lang['admin']['your_ipaddress'] = 'Va&scaron;a IP adresa je';
$lang['admin']['use_wysiwyg'] = 'Koristi WYSIWYG editor';
$lang['admin']['contenttype_redirlink'] = 'Preusmeravajuči link';
$lang['admin']['yes'] = 'Da';
$lang['admin']['no'] = 'Ne';
$lang['admin']['listcontent_showalias'] = 'Prikaži  kolonu &quot;Alijas&quot;';
$lang['admin']['listcontent_showurl'] = 'Prikaži  kolonu &quot;URL&quot;';
$lang['admin']['listcontent_showtitle'] = 'Prikaži Naslov stranice ili Tekst menija';
$lang['admin']['listcontent_settings'] = 'Pode&scaron;avanje Liste sadržaja';
$lang['admin']['lctitle_page'] = 'Naslov postojećih stavki sadržaja';
$lang['admin']['lctitle_alias'] = 'Alijas postojećih stavki sadržaja. Neke stavke sadržaja nemaju alijase';
$lang['admin']['lctitle_url'] = 'URL sufiks za stavku sadržaja. Ako je postavljen';
$lang['admin']['lctitle_template'] = 'Izabrani &Scaron;ablon za stavku sadržaja. Neke stavke sadržaja nemaju &scaron;ablone';
$lang['admin']['lctitle_owner'] = 'Vlasnik stavke sadržaja';
$lang['admin']['lctitle_active'] = 'Pokazuje da li je stavka sadržaja aktivna. Neaktivne stavke ne mogu biti prikazane na sajtu.';
$lang['admin']['lctitle_default'] = 'Odredite stavku sadržaja kojoj se pristupa kada je upućen zahtev za korenskom URL adresom sajta.  Samo jedna stavka može biti podrazumevana';
$lang['admin']['lctitle_move'] = 'Omogućava organizovanje hierarhije sadržaja';
$lang['admin']['lctitle_multiselect'] = 'Čekiraj sve/ni&scaron;ta';
$lang['admin']['invalid_url2'] = 'Navedena URL adresa nije validna.  Morala bi se sastojati samo od alfanumeričkih karaktera, ili - ili /.  Ekstenzije se moraju sastojati samo od alfanumeričkih karaktera i ne smeju biti duže od 5 karaktera.  Takođe je moguće i da je navedena URL adresa već u upotrebi.';
$lang['admin']['page_url'] = 'URL adresa stranice';
$lang['admin']['runuserplugin'] = 'Pokreni korisnički dodatak';
$lang['admin']['output'] = 'Izlaz';
$lang['admin']['run'] = 'Pokreni';
$lang['admin']['run_udt'] = 'Pokreni ovaj Korisnički Definisan Tag';
$lang['admin']['stylesheetcopied'] = 'Stil je kopiran';
$lang['admin']['templatecopied'] = '&Scaron;ablon je kopiran';
$lang['admin']['ecommerce_desc'] = 'Moduli za omogućavanje funkcionalnosti  E-trgovine';
$lang['admin']['ecommerce'] = 'E-trgovina';
$lang['admin']['help_function_content_module'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tip sadržajnog bloka omogućava povezivanje sa različitim modulima za kreiranje različitih tipova sadržajnih blokova.</p>
<p>Neki moduli mogu da defini&scaron;u tipove sadržajnih blokova za upotrebu u predlo&scaron;cima modula. Npr: modul FrontEndUsers može definisati tip sadržajnog bloka za  listu grupa. On će pokazati kako se može koristiti oznaka content_module u korist tog tipa bloka u okviru va&scaron;eg predlo&scaron;ka.</p>
<p><strong>Napomena:</strong> Ovaj tip bloka mora da se koristi samo sa kompatibilnim modulima. Ne bi trebalo da ga koristite na bilo koji način osim kao vođen od strane dodatnih modula.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Do&scaron;lo je do gre&scaron;ke prilikom parsiranja sadržaja blokova (verovatno zbog dupliranih naziva blokova)';
$lang['admin']['error_no_default_content_block'] = 'Nije otkriven podrazumevani blok sadržaja u ovom &Scaron;ablonu. Molimo proverite da li imate oznaku {content} u &Scaron;ablonu stranice.';
$lang['admin']['help_function_cms_stylesheet'] = '<h3>&Scaron;ta ovo radi?</h3>
  <p>Kao zamena za oznaku {stylesheet}, ova oznaka omogućava ke&scaron;iranje CSS datoteka, generi&scaron;ući statične datoteke u direkotrijumu  tmp/cache, kao i  obradu individualnih stilova Smartyjem.</p>
  <p>Ovaj priključak preuzima informacije stilova iz sistema. Podrazumevano, on preuzima sve stilove koji su povezani sa aktivnim predlo&scaron;kom, po redosledu koji je odredio dizajner, a zatim generi&scaron;e oznake stilova. </p>
  <p>Generisani stilovi se jedinstveno imenuju prema poslednjem datumu izmene u bazi podataka, i generi&scaron;u se samo ako su se stilovi promenili.</p>
  <p>Ova oznaka je zamena za oznaku  {stylesheet}.</p>
  <h3>Kako da ga koristim?</h3>
  <p>Jednostavno ubacite oznaku u sekciju head u va&scaron;em predlo&scaron;ku ili stranici na sledeći način: <code>{cms_stylesheet}</code></p>
  <h3>Koji parametri su dostupni?</h3>
  <ul>
  <li><em>(opciono)</em>name - Umesto da učitavate sve stilove na datoj strani, učitavaće se samo jedan stil koji ste imenovali, bez obzira na to da li je on vezan za dati predložak ili ne.</li>
  <li><em>(opcionalno)</em>templateid - Ako je identifikacioni broj predlo&scaron;ka definisan, učitavače se stilovi koji su vezani za definisani predložak, umesto stilova vezanih za aktuelni predložak.</li>
  <li><em>(opcionalno)</em>media - Kada se koristi u kombinaciji sa parametrom &quot;name&quot; , ovaj parametar dozvoljava promenu tipa medija za tu listu stilova. Kada se koristi u kombinaciji sa parametrom templateid, taj parametar će učitati samo stilove koji su označeni kao kompatibilni sa određenim tipom medija.</li>
  </ul>
  <h3>Obrada Smartyjem</h3>
  <p>Prilikom generisanja CSS datoteka ovaj sistem prosleđuje stilove preuzete iz baze podataka kroz Smarty.  Standardni graničnici Smartyja, { i }, kori&scaron;ćeni u CMSMS-u,  promenjeni su  u [[ i ]] da bi promene unutar stilova bile lak&scaron;e. Ovo omogućava kreiranje Smarty varijabli, na primer definisanjem promenljive [[assign var=&#039;red&#039; value=&#039;#900&#039;]] na početku liste stilova, a zatim kori&scaron;ćenjem te promenljive unutar liste:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Po&scaron;to se ke&scaron;irane datoteke generi&scaron;u u tmp/cache direktorijumu CMSMS instalacije, radni direktorijum koji je u relaciji sa CSS-om nije koren sajta.  Zbog toga slike idruge oznake koje  zahtevaju url adresu treba da koriste oznaku  [[root_url]] kako bi forsirale upotrebu apsolutne url adrese, na primer:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Napomena:</strong> S obzirom na to da ovaj dodatak ke&scaron;ira sadržaj, promenljive Smartyja treba da budu postavljene na početak SVAKE liste stilova koja je povezana sa predlo&scaron;kom.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron granularnost';
$lang['admin']['info_pseudocron_granularity'] = 'Ova postavka ukazuje koliko često će sistem poku&scaron;ati da izvr&scaron;i redovno planirane zadatke';
$lang['admin']['cron_request'] = 'Prilikom svakog učitavanja stranice';
$lang['admin']['cron_15m'] = '15 minuta';
$lang['admin']['cron_30m'] = '30 minuta';
$lang['admin']['cron_60m'] = '1 sat';
$lang['admin']['cron_120m'] = '2 sata';
$lang['admin']['cron_3h'] = '3 sata';
$lang['admin']['cron_6h'] = '6 sati';
$lang['admin']['cron_12h'] = '12 sati';
$lang['admin']['cron_24h'] = '24 sata';
$lang['admin']['adminlog_1day'] = '1 dan';
$lang['admin']['adminlog_1week'] = '1 nedelja';
$lang['admin']['adminlog_2weeks'] = '2 nedelje';
$lang['admin']['adminlog_1month'] = '1 mesec';
$lang['admin']['adminlog_3months'] = '3 meseca';
$lang['admin']['adminlog_6months'] = '6 meseci';
$lang['admin']['adminlog_manual'] = 'Ručno brisanje';
$lang['admin']['adminlog_lifetime'] = 'Dužina čuvanja zapisa u administratorskom dnevniku';
$lang['admin']['info_adminlog_lifetime'] = 'Ovo pode&scaron;avanje specificira vremenski period nakon kog će sistem automatski brisati najstarije zapise u administratorskom dnevniku';
$lang['admin']['filteruser'] = 'Korisničko ime je:';
$lang['admin']['filtername'] = 'Ime događaja sadrži';
$lang['admin']['filteraction'] = 'Akcija sadrži';
$lang['admin']['filterapply'] = 'Primenite filtere';
$lang['admin']['filterreset'] = 'Resetuj filtere';
$lang['admin']['filters'] = 'Filteri';
$lang['admin']['showfilters'] = 'Prikaži filtere';
$lang['admin']['clearcache_taskdescription'] = 'Izvr&scaron;avajući se na dnevnom nivou, ovaj zadatak će isprazniti ke&scaron;irane datoteke koje su starije od roka definisanog globalnim postavkama';
$lang['admin']['clearcache_taskname'] = 'Obri&scaron;i ke&scaron;irane datoteke';
$lang['admin']['info_autoclearcache'] = 'Navedite celobrojnu vrednost. Unesite 0 da isključite automatsko pražnjenje ke&scaron;a';
$lang['admin']['autoclearcache'] = 'Automatski isprazni ke&scaron; svakih N dana';
$lang['admin']['listtemplates_pagelimit'] = 'Broj prikazanih redova po stranici u toku pregleda &Scaron;ablona';
$lang['admin']['liststylesheets_pagelimit'] = 'Broj prikazanih redova po stranici u toku pregleda Stilova';
$lang['admin']['listgcbs_pagelimit'] = 'Broj prikazanih redova po stranici u toku pregleda Blokova Globalnog Sadržaja';
$lang['admin']['insecure'] = 'Nebezbedan (HTTP)';
$lang['admin']['secure'] = 'Bezbedan (HTTPS)';
$lang['admin']['secure_page'] = 'Koristi HTTPS za ovu stranicu';
$lang['admin']['thumbnail_width'] = '&Scaron;irina umanjenog prikaza slike';
$lang['admin']['thumbnail_height'] = 'Visina umanjenog prikaza slike';
$lang['admin']['E_STRICT'] = 'Da li je funkcija E_STRICT isključena u error_reportingu';
$lang['admin']['test_estrict_failed'] = 'E_STRICT je uključen u error_reporting';
$lang['admin']['info_estrict_failed'] = 'Neke biblioteke koje koristi CMSMS ne rade dobro sa funkcijom E_STRICT. Molimo Vas da onemogućite ovo pre nego &scaron;to nastavite';
$lang['admin']['E_DEPRECATED'] = 'Da li je E_DEPRECATED isključen u error_reportingu';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED je uključen';
$lang['admin']['info_edeprecated_failed'] = 'Ako je E_DEPRECATED omogućen u va&scaron;em error_reportingu korisnici će videti veliki broj poruka o gre&scaron;kama, &scaron;to može uticati na prikaz i funkcionalnost';
$lang['admin']['session_use_cookies'] = 'Sesijama je dozvoljeno da koriste kolačiće (Cookies)';
$lang['admin']['errorgettingcontent'] = 'Učitavanje informacije za navedeni sadržajni objekat nije bilo moguće';
$lang['admin']['errordeletingcontent'] = 'Gre&scaron;ka pri brisanju sadržaja (ova stranica ima podređene stranice ili je početna stranica sajta)';
$lang['admin']['invalidemail'] = 'Unesena  adresa e-po&scaron;te nije ispravna';
$lang['admin']['info_deletepages'] = 'Napomena: Zbog ograničenja u ovla&scaron;ćenjima, neke od stranica koje ste izabrali za brisanje možda neće biti prikazane';
$lang['admin']['info_pagealias'] = 'Odredite jedinstveni alijas za ovu stranicu.';
$lang['admin']['info_autoalias'] = 'Ako je ovo polje prazno, alijas će biti automatski kreiran.';
$lang['admin']['invalidparent'] = 'Morate da izaberete nadređenu stranicu (obratite se administratoru ako ne vidite ovu opciju).';
$lang['admin']['forgotpwprompt'] = 'Unesite svoje administratorsko korisničko ime. Poruka sa novim podacima za prijavljivanje biće poslata na adresu e-po&scaron;te povezanu sa tim korisničkim imenom';
$lang['admin']['info_basic_attributes'] = 'Ovo polje vam omogućava da odredite koja svojstva sadržaja korisnici bez ovla&scaron;ćenja &quot;Upravljanje celokupnim sadržajem&quot; imaju pravo da menjanju.';
$lang['admin']['basic_attributes'] = 'Osnovna svojstva';
$lang['admin']['no_permission'] = 'Nemate dozvolu za izvr&scaron;avanje te funkcije.';
$lang['admin']['bulk_success'] = 'Zbirna operacija je uspe&scaron;no izvr&scaron;ena.';
$lang['admin']['no_bulk_performed'] = 'Zbirna operacija nije izvr&scaron;ena.';
$lang['admin']['info_preview_notice'] = 'Upozorenje: Ovaj pregledni panel se pona&scaron;a slično kao prozor Veb pretraživača, omogućavajući Vam da se udaljite od stranice koju ste prvobitno pregledali. Međutim, ukoliko to uradite, može doći do neočekivanog pona&scaron;anja. Ako se udaljite od izvornog prikaza i vratite se nazad, možda nećete videti najnovije izmene sve dok ne promenite sadržaj u glavnom panelu (&quot;Glavni&quot;) i ponovo učitate ovaj panel. Prilikom dodavanja novog sadržaja (stranice), nećete biti u mogućnosti da se vratite nazad i moraćete da ponovno učitate (osvežite) ovaj panel.';
$lang['admin']['sitedownexcludes'] = 'Ne prikazuj poruku o deaktiviranom sajtu kada se pristupa sa ovih IP adresa';
$lang['admin']['info_sitedownexcludes'] = 'Ovaj parametar omogućava prikaz spiska IP adresa odvojenih zapetom ili mreža koje ne bi trebale da budu pogođene mehanizmom privremene deaktivacije sajta. Ovo omogućava administratorima da rade na sajtu, dok anonimni posetioci dobijaju poruku o privremenoj neaktivnosti sajta.<br/><br/>Adrese mogu biti navedene u sledećim formatima:<br/>
1. xxx.xxx.xxx.xxx -- (tačna IP addresa)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (opseg IP adresa)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = broj bitova, cisco stil.  na primer:  192.168.0.100/24 = cela podmreža 192.168.0 klase C)';
$lang['admin']['setup'] = 'Napredna pode&scaron;avanja';
$lang['admin']['handle_404'] = 'Rad sa prilagođenom 404 porukom';
$lang['admin']['sitedown_settings'] = 'Pode&scaron;avanje privremene deaktivacije sajta';
$lang['admin']['general_settings'] = 'Op&scaron;te postavke';
$lang['admin']['help_function_page_attr'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tag može da se koristi da prikaže vrednost atributa date stranice.</p>
<h3>Kako se koristi?</h3>
<p>Ubacite oznaku u &Scaron;ablon, na primer: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Koji parametri su dostupni?</h3>
<ul>
  <li><strong>key [obavezan]</strong> Ključ atributa koji želite prikazati.</li>
</ul>';
$lang['admin']['forge'] = 'Radionica (Forge)';
$lang['admin']['disable_wysiwyg'] = 'Isključi WYSIWYG editor na ovoj stranici (bez obzira na &Scaron;ablon ili korisničke postavke)';
$lang['admin']['help_function_page_image'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj tag može da se koristi za prikaz vrednosti polja za slike ili umanjenog prikaza slike određene strane.</p>
<h3>Kako se koristi?</h3>
<p>Ubacite oznaku u &scaron;ablon, na primer: <code>{page_image}</code>.</p>
<h3>Koji parametri su dostupni?</h3>
<ul>
  <li>thumbnail - Opciono prikazuje umanjeni prikaz slike umesto originalnu sliku.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Link stranice ne može da navede link druge stranice kao svoju destinaciju';
$lang['admin']['destinationnotfound'] = 'Izabrana strana ne može biti pronađena ili je nevažeća';
$lang['admin']['help_function_dump'] = '<h3>&Scaron;ta ovo radi?</h3>
  <p>Ovaj tag se može koristiti za deponiranje sadržaja bilo koje Smarty varijable u  formatu lak&scaron;em za čitanje. Ovo je korisno za otklanjanje gre&scaron;aka i uređivanje &scaron;ablona, tako da znate format i tipove podataka koji su dostupni.</p>
<h3>Kako se koristi?</h3>
<p>Upi&scaron;ite tag u &scaron;ablonu kao <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>Koje parametre prima?</h3>
<ul>
<li><strong>item (required)</strong> - Smarty promenljiva čiji sadržaj želite prikazati.</li>
<li>maxlevel - Maksimalan broj nivoa rekurzije (primenljivo jedino ako se prosledi i rekurzivna veza) Podrazumevana vrednost za ovaj parametar je 3</li>
<li>nomethods - Preskoči rezultate koje vraćaju metode iz objekata.</li>
<li>novars - Preskoči rezultate koje vraćaju članovi objekata.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL gre&scaron;ka u %s';
$lang['admin']['image'] = 'Slika';
$lang['admin']['thumbnail'] = 'Umanjeni prikaz slike';
$lang['admin']['searchable'] = 'Ova stranica je pretraživa';
$lang['admin']['help_function_content_image'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj dodatak omogućava dizajnerima &scaron;ablona da zahtevaju od korisnika da izabere sliku prilikom menjanja sadržaja stranice. Pona&scaron;a se slično dodatku content za dodatne blokove sadržaja.</p>
<h3>Kako se koristi?</h3>
<p>Jednostavno ubacite ovaj tag u &scaron;ablon: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Koji parametri su mogući?</h3>
<ul>
  <li><strong>(required)</strong> block - Naziv dodatnog bloka sadržaja.
  <p>Primer:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - Labela ove kontrole, koja će se prikazivati na stranici za menjanje sadržaja. Ako nije navedena, koristiće se naziv bloka sadržaja.</li>
 
  <li><em>(optional)</em> dir - Naziv direktorijuma (u odnosu na upload direktorij) iz kog će korisnik moći da bira slike. Ukoliko nije navedeo, koristiće se upload direktorijum.
  <p>Primer: upotrebi slike iz uploads/images direktorijuma.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - Ime CSS klase koja će se upotrebljavati za img tag.</li>

  <li><em>(optional)</em> id - Id ime koje će se zpotrebljavati za img ta.</li> 

  <li><em>(optional)</em> name - Name tag koji će se upotrebljavati za img tag.</li> 

  <li><em>(optional)</em> width - Željena &scaron;irina slike.</li>

  <li><em>(optional)</em> height - Željena visina slike.</li>

  <li><em>(optional)</em> alt - Alternativni tekst ako slika nije pronađena.</li>
  <li><em>(optional)</em> urlonly - Prikazuje samo URL do slike, ignori&scaron;ući sve ostale parametre.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Validni naziv KDT-a ime počinje slovom ili donjom crtom, koje prati proizvoljan broj slova, brojeva, ili donjih crta.';
$lang['admin']['errorupdatetemplateallpages'] = '&Scaron;ablon nije aktivan';
$lang['admin']['hidefrommenu'] = 'Sakrij iz menija';
$lang['admin']['settemplate'] = 'Postavi &Scaron;ablon';
$lang['admin']['text_settemplate'] = 'Postavi drugi &Scaron;ablon za izabrane stranice';
$lang['admin']['cachable'] = 'Ke&scaron;iranje dozvoljeno';
$lang['admin']['noncachable'] = 'Ke&scaron;iranje nije dozvoljeno';
$lang['admin']['copy_from'] = 'Kopiraj iz';
$lang['admin']['copy_to'] = 'Kopiraj u';
$lang['admin']['copycontent'] = 'Kopiraj stavku sadržaja';
$lang['admin']['md5_function'] = 'md5 funkcija';
$lang['admin']['tempnam_function'] = 'tempnam funkcija';
$lang['admin']['register_globals'] = 'PHP register_globals opcija';
$lang['admin']['output_buffering'] = 'PHP output_buffering opcija';
$lang['admin']['disable_functions'] = 'disable_functions u PHP-u';
$lang['admin']['xml_function'] = 'Osnovna podr&scaron;ka za XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes za Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Jednostruki navodnici (&#039;), dvostruki navodnici (&quot;) i obrnute kose crte (\) automatski bivaju prenebregnuti. Može doći do problema prilikom snimanja &Scaron;ablona.';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes u runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Većina funkcija koje vraćaju rezultat će ispred navodnika ubaciti obrnutu kosu crtu. Možete iskusiti neke te&scaron;koće.';
$lang['admin']['file_get_contents'] = 'Testiraj file_get_contents';
$lang['admin']['check_ini_set'] = 'Testiraj ini_set';
$lang['admin']['check_ini_set_off'] = 'Možda ćete imati problema sa nekim funkcijama bez ove mogućnosti. Ovaj test ne može uspeti ako je omogućen safe_mode';
$lang['admin']['file_uploads'] = 'Otpremanje fajlova';
$lang['admin']['test_remote_url'] = 'Testiranje dostupnosti udaljenog URL-a';
$lang['admin']['test_remote_url_failed'] = 'Verovatno nećete imati mogućnosti da otvorite datoteku na udaljenom Veb serveru.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Kada je <em>allow url fopen</em> PHP opcija isključena, nećete biti u mogućnosti da pristupite URL objektima poput fajlova kori&scaron;ćenjem FTP ili HTTP protokola.';
$lang['admin']['connection_error'] = 'Izgleda da izlazne HTTP konekcije ne funkcioni&scaron;u. Imate li fajrvol ili neki ACL za izlazne konekcije? Zbog ovoga neće raditi Modul menadžer i moguće jo&scaron; neke funkcionalnosti.';
$lang['admin']['remote_connection_timeout'] = 'Veza je istekla.';
$lang['admin']['search_string_find'] = 'Veza je u redu.';
$lang['admin']['connection_failed'] = 'Veza nije uspela.';
$lang['admin']['remote_response_ok'] = 'Odgovor udaljenog kompjutera: OK.';
$lang['admin']['remote_response_404'] = 'Odgovor udaljenog kompjutera: not found.';
$lang['admin']['remote_response_error'] = 'Odgovor udaljenog kompjutera: error.';
$lang['admin']['notifications_to_handle'] = 'Broj neobrađenih obave&scaron;tenja: <b>%d</b>';
$lang['admin']['notification_to_handle'] = 'Imate <b>%d</b> neobrađeno obave&scaron;tenje';
$lang['admin']['notifications'] = 'Obave&scaron;tenja';
$lang['admin']['dashboard'] = 'Pogledaj kontrolnu tablu';
$lang['admin']['ignorenotificationsfrommodules'] = 'Zanemari obave&scaron;tenja ovih modula';
$lang['admin']['admin_enablenotifications'] = 'Dozvoli korisnicima gledanje obave&scaron;tenja<br/><em>(obave&scaron;tenja će biti prikazana na svim administratorskim stranicama)</em>';
$lang['admin']['enablenotifications'] = 'Prikazuj obave&scaron;tenja korisnicima u administatorskom delu';
$lang['admin']['test_check_open_basedir_failed'] = '<em>Open basedir</em> restrikcije su na snazi. Možda ćete imati problema sa nekim addon funkcijama sa ovim ograničenjem';
$lang['admin']['config_writable'] = 'Omogućeno je menjanje datoteke <em>config.php</em>. Sigurnije je ako promenite dozvole tako da se može samo čitati.';
$lang['admin']['caution'] = 'Oprez';
$lang['admin']['create_dir_and_file'] = 'Provera da li httpd proces može da kreira datoteku u direktorijumu koji je kreirao';
$lang['admin']['os_session_save_path'] = 'Nije provereno zbog OS putanje';
$lang['admin']['unlimited'] = 'Neograničen';
$lang['admin']['open_basedir'] = 'PHP Open Basedir opcija';
$lang['admin']['open_basedir_active'] = 'Nije provereno zbog aktivnog <em>open basedir</em>';
$lang['admin']['invalid'] = 'Nevažeći';
$lang['admin']['checksum_passed'] = 'Sve kontrolne datoteke odgovaraju onima u otpremljenom fajlu';
$lang['admin']['error_retrieving_file_list'] = 'Gre&scaron;ka prilikom preuzimanja liste fajlova';
$lang['admin']['files_checksum_failed'] = 'Nije mogla biti napravljenja checksum datoteka';
$lang['admin']['failure'] = 'Neuspeh';
$lang['admin']['help_function_process_pagedata'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Ovaj dodatak će kroz <em>Smarty</em> obraditi &quot;pagedata&quot; blok stranica sa sadržajem.  Dozvoljava Vam da <em>Smarty</em>/ju prosledite podatke specifične za stranicu bez menjanja &Scaron;ablona.</p>
<h3>Kako se koristi?</h3>
<ol>
  <li>Unesite <em>Smarty</em> varijable i drugu <em>Smarty</em> logiku u <em>pagedata</em> polje nekih stranica sa sadržajem.</li>
  <li>Umetnite <code>{process_pagedata}</code> tag na sami vrh &Scaron;ablona stranice.</li>
</ol>
<br/>
<h3>Koje parametre prima?</h3>
<p>Nijedan u ovom trenutku.</p>';
$lang['admin']['page_metadata'] = 'Metapodaci specifični za stranicu';
$lang['admin']['pagedata_codeblock'] = '<em>Smarty</em> podaci ili logika koja je specifična za ovu stranu';
$lang['admin']['error_uploadproblem'] = 'Do&scaron;lo je do gre&scaron;ke u otpremanju';
$lang['admin']['error_nofileuploaded'] = 'Nije otpremljena nijedna datoteka';
$lang['admin']['files_failed'] = 'Datoteka nije pro&scaron;la md5sum proveru';
$lang['admin']['files_not_found'] = 'Datoteke nisu pronađene';
$lang['admin']['info_generate_cksum_file'] = 'Ova funkcija će vam omogućiti da generi&scaron;ete kontrolnu (<em>Checksum</em>) datoteku i sačuvate je na lokalnom računaru za kasniju proveru valjanosti. Ovo bi trebalo da se uradi samo prilikom pu&scaron;tanja sajta u rad, i/ili posle nadogradnje ili velike promene.';
$lang['admin']['info_validation'] = 'Ova funkcija će se uporediti kontrolne sume koje se nalaze u otpremljenom fajlu sa fajlovima trenutne instalacije. Ona može da pomogne u pronalaženju problema sa otpremljenim fajlovima, ili koji fajlovi su modifikovani ako je va&scaron; sistem bio hakovan.';
$lang['admin']['download_cksum_file'] = 'Preuzmite kontrolnu datoteku';
$lang['admin']['perform_validation'] = 'Izvr&scaron;ite proveru valjanosti';
$lang['admin']['upload_cksum_file'] = 'Otpremite kontrolnu datoteku';
$lang['admin']['checksumdescription'] = 'Potvrdite integritet CMS MS datoteka poređenjem sa kontrolnom datotekom';
$lang['admin']['system_verification'] = 'Verifikacija sistema';
$lang['admin']['extra1'] = 'Ekstra atribut strane 1';
$lang['admin']['extra2'] = 'Ekstra atribut strane 2';
$lang['admin']['extra3'] = 'Ekstra atribut strane 3';
$lang['admin']['start_upgrade_process'] = 'Počni proces nadogradnje';
$lang['admin']['warning_upgrade'] = '<em><strong>Upozorenje:</strong></em> CMSMS-u je potrebna nadogradnja.';
$lang['admin']['warning_upgrade_info1'] = 'Trenutno koristite &scaron;emu verzije %s. Potrebna Vam ja nadogradnja na verziju %s';
$lang['admin']['warning_upgrade_info2'] = 'Molimo kliknite na sledeći link: %s.';
$lang['admin']['warning_mail_settings'] = 'Jo&scaron; uvek niste podesili e-mail sistem sajta. To može ometati sposobnost sajta da &scaron;alje e-poruke. Trebali biste da odete u <a href="%s">Pro&scaron;irenja >> CMSMailer</a> i konfiguri&scaron;ete e-mail postavke koristeći informacije koje ste dobili od hosting provajdera.';
$lang['admin']['view_page'] = 'Pogledajte ovu stranu u novom prozoru';
$lang['admin']['off'] = 'Isključen';
$lang['admin']['on'] = 'Uključen';
$lang['admin']['invalid_test'] = 'Neispravna <em>test param</em> vrednost!';
$lang['admin']['copy_paste_forum'] = 'Vidi tekstualni izve&scaron;taj <em>(pogodan za kopiranje u postove na forumima)</em>';
$lang['admin']['permission_information'] = 'Informacije o dozvolama';
$lang['admin']['server_os'] = 'Serverski operativni sistem';
$lang['admin']['server_api'] = 'Serverski API';
$lang['admin']['server_software'] = 'Serverski softver';
$lang['admin']['server_information'] = 'Informacija o serveru';
$lang['admin']['session_save_path'] = 'Putanja za čuvanje sesija';
$lang['admin']['max_execution_time'] = 'Maksimalno vreme izvr&scaron;enja';
$lang['admin']['gd_version'] = 'GD verzija';
$lang['admin']['upload_max_filesize'] = 'Maksimalna otpremna veličina';
$lang['admin']['post_max_size'] = 'Maksimalna veličina posta';
$lang['admin']['memory_limit'] = 'Efektivni PHP Memorijski limit';
$lang['admin']['server_db_type'] = 'Server baza podataka';
$lang['admin']['server_db_version'] = 'Verzija servera baze podataka';
$lang['admin']['phpversion'] = 'Trenutna PHP verzija';
$lang['admin']['safe_mode'] = 'PHP Safe Mode opcija';
$lang['admin']['php_information'] = 'Informacije o PHP-u';
$lang['admin']['cms_install_information'] = 'Informacije o instalaciji CMS-a';
$lang['admin']['cms_version'] = 'CMS verzija';
$lang['admin']['installed_modules'] = 'Instalirani moduli';
$lang['admin']['config_information'] = 'Informacije o konfiguraciji';
$lang['admin']['systeminfo_copy_paste'] = 'Molimo kopirajte i nalepite ovaj selektovani tekst u svoju poruku na forumu';
$lang['admin']['help_systeminformation'] = 'Informacije prikazane dole su prikupljene iz različitih lokacija, a sažete ovde tako da biste imali mogućnost da lako pronađete neke od informacija potrebnih prilikom poku&scaron;aja da defini&scaron;ete problem ili potražite pomoć u vezi sa CMS Made Simple  instalacijom.';
$lang['admin']['systeminfo'] = 'Informacije o sistemu';
$lang['admin']['systeminfodescription'] = 'Prikaz raznih informacija o Va&scaron;em sistemu koje mogu biti korisne u određivanju problema';
$lang['admin']['systemmaintenance'] = 'Održavanje sistema';
$lang['admin']['systemmaintenancedescription'] = 'Razne funkcije za održavanja Va&scaron;eg sistema u dobrom stanju. Takođe možete pretraživati dnevnik promena  <em>CMS Made Simple</em>  sistema';
$lang['admin']['sysmaintab_database'] = 'Baza podataka';
$lang['admin']['sysmaintab_changelog'] = 'Istorijat promena';
$lang['admin']['sysmaintab_content'] = 'Ke&scaron;iranje i sadržaj';
$lang['admin']['sysmain_content_status'] = 'Status sadržaja';
$lang['admin']['sysmain_cache_status'] = 'Status ke&scaron;a';
$lang['admin']['sysmain_database_status'] = 'Status baze podataka';
$lang['admin']['sysmain_updatehierarchy'] = 'Izmeni hijerarhijske pozicije stranice';
$lang['admin']['sysmain_confirmupdatehierarchy'] = 'Da li ste sigurni da želite promeniti hijerarhiju stranica?';
$lang['admin']['sysmain_update'] = 'Izmeni';
$lang['admin']['sysmain_pagesfound'] = 'pronađenih stranica';
$lang['admin']['sysmain_hierarchyupdated'] = 'Hijerarhijske pozicije stranica izmenjene';
$lang['admin']['sysmain_nostr_errors'] = 'U bazi podataka nisu pronađene strukturalne gre&scaron;ke';
$lang['admin']['sysmain_str_error'] = 'Pronađena strukturalna gre&scaron;ka u tabeli';
$lang['admin']['sysmain_str_errors'] = 'Pronađene strukturalne gre&scaron;ke u tabelama';
$lang['admin']['sysmain_tablesfound'] = 'tabela pronađeno (od kojih %d nisu seq-tabele)';
$lang['admin']['sysmain_repair'] = 'Popravi';
$lang['admin']['sysmain_repairtables'] = 'Popravi tabele';
$lang['admin']['sysmain_tablesrepaired'] = 'Tabele popavljenje';
$lang['admin']['sysmain_optimizetables'] = 'Optimizuj tabele';
$lang['admin']['sysmain_tablesoptimized'] = 'Tabele optimizovane';
$lang['admin']['sysmain_optimize'] = 'Optimizuj';
$lang['admin']['sysmain_confirmclearcache'] = 'Da li ste sigurni da želite obrisati sadržaj ke&scaron; memorije?';
$lang['admin']['sysmain_nocontenterrors'] = 'Nisu pronađene gre&scaron;ke u sadržaju';
$lang['admin']['sysmain_pagesmissinalias'] = 'stranica nema(ju) alijas';
$lang['admin']['sysmain_confirmfixaliases'] = 'Da li ste sigurni da želite dodeliti alijase stranicama koje ga trenutno nemaju?';
$lang['admin']['sysmain_fixaliases'] = 'Alijasi dodati tamo gde su falili';
$lang['admin']['sysmain_aliasesfixed'] = 'alijasa popravljeno';
$lang['admin']['sysmain_pagesinvalidtypes'] = 'stranica sa nevalidnim tipom sadržaja';
$lang['admin']['sysmain_confirmfixtypes'] = 'Da li ste sigurni da želite konvertovati sve stranice sa nevalidnim sadržajem u standardne stranice sa sadržajem?';
$lang['admin']['sysmain_fixtypes'] = 'Konvertuj u standardne stranice sa sadržajem';
$lang['admin']['sysmain_typesfixed'] = 'popravljenih tipova sadržaja stranice';
$lang['admin']['welcome_user'] = 'Dobro do&scaron;li';
$lang['admin']['itsbeensincelogin'] = 'Pro&scaron;lo je %s od Va&scaron;e poslednje prijave';
$lang['admin']['days'] = 'dana';
$lang['admin']['day'] = 'dan';
$lang['admin']['hours'] = 'sati';
$lang['admin']['hour'] = 'sat';
$lang['admin']['minutes'] = 'minuta';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Ovaj parametar treba da bude pode&scaron;en visoko na relativno statičnim sajtovima, i treba da bude pode&scaron;en na 0 tokom razvoja sajta';
$lang['admin']['css_max_age'] = 'Maksimalno vreme (u sekundama) u kojem Stil može biti ke&scaron;iran u Veb pretraživaču';
$lang['admin']['error'] = 'Gre&scaron;ka';
$lang['admin']['new_version_available'] = '<em>Obave&scaron;tenje:</em> Nova verzija CMS Made Simple&trade; je na raspolaganju.  Molimo Vas da obavestite administratora.';
$lang['admin']['master_admintheme'] = 'Podrazumevana administracijska tema (za stranicu za prijavu i nove korisničke naloge)';
$lang['admin']['contenttype_separator'] = 'Separator';
$lang['admin']['contenttype_sectionheader'] = 'Heder sekcije';
$lang['admin']['contenttype_content'] = 'Sadržaj';
$lang['admin']['contenttype_pagelink'] = 'Link ka internoj stranici';
$lang['admin']['nogcbwysiwyg'] = 'Zabrani WYSIWYG editor za BGS';
$lang['admin']['destination_page'] = 'Odredi&scaron;na stranica (ka kojoj će link voditi)';
$lang['admin']['additional_params'] = 'Dodatni parametri';
$lang['admin']['help_function_current_date'] = '<h3 style=&quot;color: red;&quot;>Prevaziđeno</h3>
	 <p>koristite <code>{$smarty.now|cms_date_format}</code></p>
	<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje tekući datum i vreme.  Ukoliko nije određen format, upotrebiće se podrazumevani prikaz, poput &#039;Jan 01, 2004&#039;.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo ubacite tag u svoj &Scaron;ablon/stranicu, ovako: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Koje parametre prima?</h3>
	<ul>
		<li><em>(opcioni)</em>format - Datumski/Vremenski format koji koristi parametre PHP strftime funkcije.  Listu mogućih parametara i druge informacije možete videti <a href="http://php.net/strftime" target="_blank">ovde</a>.</li>
		<li><em>(optional)</em>ucword - Ako je postavljen na true, početno slovo svake reči u rezultatu će biti veliko.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Vraća link sa W3C HTML Validatorom.</p>
<h3>Kako se koristi?</h3>
<p>Samo ubacite oznaku u svoj &scaron;ablon/stranicu kao naprimer: <code>{valid_xhtml}</code></p>
<h3>Koje parametre prima?</h3>
    <ul>
	<li><em>(opcioni)</em> url         (string)     - URL adresa koja se koristi za validaciju , ako nije dat http://validator.w3.org/check/referer će biti kori&scaron;ćen.</li>
	<li><em>(opcioni)</em> class       (string)     - Ako se postavi , to će se koristiti kao atribut klase za link (a) elemente</li>
	<li><em>(opcioni)</em> target      (string)     - Ako je postavljeno, ovo će biti kori&scaron;ćen kao target atribut za link (a) elemente</li>
	<li><em>(opcioni)</em> image       (true/false) - Ako se postavi na false , tekst link će biti koristit umesto slike/ikone.</li>
	<li><em>(opcioni)</em> text        (string)     - Ako se postavi , to će se koristiti za link tekst ili alternativni tekst za slike . Podrazumevan je &#039;valid XHTML 1.0 Transitional&#039; <br /> Kada se koristi slika, tekst će biti kori&scaron;ćen za atribut slike alt ( po podrazumevanoj vrednosti , to može biti poni&scaron;teno pomoću parametra &#039;alt) .</li>
	<li><em>(opcioni)</em> image_class (string)     - Samo ako parametar &#039;image&#039; nije pode&scaron;en na &#039;false&#039;. Ako se unese, biće kori&scaron;ćen kao &#039;class&#039; atribut slike (img elementa)</li>
	<li><em>(opcioni)</em> src         (string)     - Samo ako parametar &#039;image&#039; nije pode&scaron;en na &#039;false&#039;. Ikonica koja će biti prikazana. Podrazumevana vrednost je http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Samo ako parametar &#039;image&#039; nije pode&scaron;en na &#039;false&#039;. &Scaron;irina slike. Podrazumevana vrednost je 88 (&scaron;irina http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Samo ako parametar &#039;image&#039; nije pode&scaron;en na &#039;false&#039;. Visina slike. Podrazumevana vrednost je 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Samo ako parametar &#039;image&#039; nije pode&scaron;en na &#039;false&#039;. Alternativni tekst (&#039;alt&#039; atribut) za sliku (img element). Ako ne unesete vrednost, biće upotrebljen tekst linka.</li>
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
$lang['admin']['help_function_title'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje naslov stranice.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite tag u svoj &Scaron;ablon/stranicu, kao npr: <code>{title}</code></p>
	<h3>Koje parametre prima?</h3>
	<p><em>(opcioni)</em> assign (string) - Pridružuje izlazni rezultat navedenoj <em>Smarty</em> promenljivoj.</p>';
$lang['admin']['help_function_stylesheet'] = '<h3>&Scaron;ta ovo radi?</h3>
        <p><strong>Zastarelo:</strong> Ova funkcija je zastarela i biće izbačena iz budućih vercija CMSMS-a.</p>
	<p>Sakuplja informacije o stilovima iz sistema.  Obično pokupi sve Stilove koji su pridruženi trenutnom &Scaron;ablonu..</p>
	<h3>How do I use it?</h3>
	<p>Samo umetnite tag u <em>HEAD</em> sekciju Va&scaron;eg &Scaron;ablona/stranice, kao npr: <code>{stylesheet}</code></p>
	<h3>Koje parametre prima?</h3>
	<ul>
		<li><em>(opcioni)</em>name - Umesto da &quot;pokupi&quot; sve stilove koji su pridruženi trenutnom &Scaron;ablonu, učitaće samo stil čiji je naziv određen ovim parametrom, bio on pridružen &Scaron;ablonu ili ne.</li>
		<li><em>(opcioni)</em>media - Ukoliko je naveden naziv, omogućava Vam da specificirate različiti tip medijuma za taj Stil.</li>
    <li><em>(opcioni)</em>templateid - Ukoliko je ovaj parametar naveden, tag će vratiti sve Stilove pridružene &Scaron;ablonu koji je njime specificiran, umjesto Stilova tekućeg &Scaron;ablona.</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '<h3>&Scaron;ta ovo radi?</h3>
        <p>Prikazuje naziv sajta.  Naziv se odeđuje prilikom instalacije sistema, a može biti promenjen u administratorskom delu sajta, ako kliknete na Administracija sajta -> Globalna pode&scaron;avanja.</p>
        <h3>Kako se koristi?</h3>
        <p>Samo umetnite tag u &Scaron;ablon/stranice, kao npr: <code>{sitename}</code></p>
        <h3>Koje parametre prima?</h3>
	<p><em>(opcioni)</em> assign (string) - Pridružuje izlazni rezultat navedenoj <em>Smarty</em> promenljivoj.</p>';
$lang['admin']['help_function_search'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Ovo je u stvari samo omotač oko modula Pretraga, kako bi se olak&scaron;ala sintaksa. 
	Umesto da morate kucati <code>{cms_module module=&#039;Search&#039;}</code> možete prosto upotrebiti kod <code>{search}</code> da biste umetnuli modul u &Scaron;ablon.
	</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite <code>{search}</code> na ono mesto u &Scaron;ablonu gde želite da se prikaže tekstualno polje za pretragu. Za pomoć sa modulom Pretraga, molimo da se informi&scaron;ete u Pomoći tog modula.</p>';
$lang['admin']['help_function_root_url'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje URL lokaciju sajta.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite tag u &Scaron;ablon/stranicu, kao npr: <code>{root_url}</code></p>
	<h3>Koje parametre prima?</h3>
	<p>Ni jedan u ovom trenutku.</p>';
$lang['admin']['help_function_repeat'] = '<h3>&Scaron;ta ovo radi?</h3>
  <p>Prikazuje specificiranu sekvencu karaktera određeni broj puta</p>
  <h3>Kako se koristi?</h3>
  <p>Umetnite tag sličan ovde prikazanom u Va&scaron; &Scaron;ablon/stranicu: <code>{repeat string=&#039;ponavljaj ovo &#039; times=&#039;3&#039;}</code></p>
  <h3>Koje parametre prima?</h3>
  <ul>
  <li>string=&#039;tekst&#039; - Tekst koji treba prikazati</li>
  <li>times=&#039;broj&#039; - Broj, koji određuje koliko će se puta prikazivanje ponoviti.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje listu nedavno izmenjenih stranica.</p>
	<h3>How do I use it?</h3>
	<p>Samo u Va&scaron; &Scaron;ablon/stranicu umetnite tag poput ovoga: <code>{recently_updated}</code></p>
	<h3>Koje parametre prima?</h3>
	<ul>
	 <li><p><em>(opcionalno)</em> number=&#039;10&#039; - Broj stranica koje će biti prikazane.</p><p>Primer: {recently_updated number=&#039;15&#039;}</p></li>
 	 <li><p><em>(opcionalno)</em> leadin=&#039;Poslednja izmena&#039; - Tekst koji će biti prikazan levo od datuma poslednje izmene.</p><p>Primer: {recently_updated leadin=&#039;Poslednja izmena&#039;}</p></li>
 	 <li><p><em>(opcionalno)</em> showtitle=&#039;true&#039; - Prikazuje naslov stranice, ako postoji (true|false).</p><p>Primer: {recently_updated showtitle=&#039;true&#039;}</p></li>											 	
	 <li><p><em>(opcionalno)</em> css_class=&#039;some_name&#039; - Listu okružuje DIV tagom, kom pridružuje klasu čiji naziv navodite u ovom parametru..</p><p>Primer: {recently_updated css_class=&#039;some_name&#039;}</p></li>											 	
	 <li><p><em>(opcionalno)</em> dateformat=&#039;d.m.y h:m&#039; - podrazumevana vrednost je d.m.y h:m, Vi možete uneti format koji želite (php -date- format)</p><p>Primer: {recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</p></li>											 	
	</ul>
	<p>ili kombinacija:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Poslednji put izmenjena: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Ovo je ustvari samo &quot;omotač&quot; oko CMSPrinting modula, da bi se olak&scaron;ala sintaksa taga. 
	Umesto da morate koristiti <code>{cms_module module=&#039;CMSPrinting&#039;}</code> sada možete prosto upotrebiti kod <code>{print}</code> da biste umetnuli modul u &Scaron;ablon ili na stranicu.
	</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite <code>{print}</code> na stranicu ili u &Scaron;ablon. Ukoliko Vam je potrebna pomoć sa CMSPrinting modulom (koje parametre prima i sl), molimo pogledajte pomoć tog modula.</p>';
$lang['admin']['login_info_title'] = 'Informacije';
$lang['admin']['login_info'] = 'Da bi administratorka konzola radila kako treba';
$lang['admin']['login_info_params'] = '<ol> 
  <li><em>Cookies</em> moraju biti omogućeni u Va&scaron;em pretraživaču</li> 
  <li><em>Javascript</em> mora biti omogućen u Va&scaron;em pretraživaču</li> 
  <li><em>Popup</em> prozori moraju biti dozvoljeni za sledeću Veb adresu:</li> 
</ol>';
$lang['admin']['help_function_news'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Ovo je u stvari samo &#039;omotač&#039; oko modula &#039;Novosti&#039;, koji treba da uprosti sintaksu taga. 
	Umesto da morate da koristite <code>{cms_module module=&#039;News&#039;}</code> sada možete u &Scaron;ablon ili stranicu ubaciti samo <code>{news}</code>.
	</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite <code>{news}</code> na stranicu ili u &Scaron;ablon. Ukoliko Vam je potrebna pomoć sa modulom &#039;Novosti&#039; (koje parametre prima i sl), molimo pogledajte pomoć tog modula.</p>';
$lang['admin']['help_function_modified_date'] = '<h3>&Scaron;ta ovo radi?</h3>
        <p>Prikazuje datum i vreme poslednje izmene stranice.  Ukoliko nije specificiran format, koristiće se podrazumevani, koji izgleda slično ovome: &#039;Jan 01, 2004&#039;.</p>
        <h3>Kako se koristi?</h3>
        <p>Samo u Va&scaron; &Scaron;ablon/stranicu umetnite tag sličan ovome: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>Koje parametre prima?</h3>
        <ul>
                <li><em>(opcionalni)</em>format - Format datuma/vremena, određen parametrima <em>strftime</em> PHP funkcije.  Posetite <a href="http://php.net/strftime" target="_blank">ovaj link</a> za listu prihvatljivih parametara i druge informacije o <em>strftime</em> funkciji.</li>
<li><em>(opcioni)</em> assign (string) - Pridružuje izlazni rezultat navedenoj <em>Smarty</em> promenljivoj.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje metapodatke tekuće stranice. Biće prikazani i globalni metapodaci (definisani u pode&scaron;avanjima), kao i metapodaci specifični za tekuću stranicu.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo u Va&scaron; &Scaron;ablon umetnite tag: <code>{metadata}</code></p>
	<h3>Koje parametre prima?</h3>
	<ul>
		<li><em>(opcionalni)</em>showbase (true/false) - Ako je pode&scaron;en na &#039;false&#039;, bazni tag neće biti prosleđen Veb pretraživaču.  Ukoliko je u konfiguracionoj datoteci (config.php) <em>use_hierarchy</em> pode&scaron;eno na &#039;true&#039;, podrazumevana vrednost ovog parametra je &#039;true&#039;.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje tekst menija tekuće stranice.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite u &Scaron;ablon/stranicu tag: <code>{menu_text}</code></p>
	<h3>Koje parametre prima?</h3>
	<p>Trenutno ni jedan.</p>';
$lang['admin']['help_function_menu'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Ovo je u stvari samo omotač oko Menu Manager modula, koji pojednostavljuje sintaksu taga. 
	Umesto da morate koristiti <code>{cms_module module=&#039;MenuManager&#039;}</code>, sada prosto možete ukucati <code>{menu}</code> da biste ubacili modul u &Scaron;ablon ili na stranicu.
	</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite <code>{menu}</code> u stranicu ili u &Scaron;ablon. Ukoliko Vam je potrebna pomoć sa Menu Manager modulom (koje parametre prima itd.) molimo pogledajte pomoć tog modula.</p>';
$lang['admin']['help_function_last_modified_by'] = '<h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '<h3>What does this do?</h3>
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
$lang['admin']['help_function_html_blob'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Pogledajte pomoć za <em>global_content</um> za opis.</p>';
$lang['admin']['help_function_google_search'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Pretražuje Va&scaron; sajt posredtvom Google servisa</p>
	<h3>Kako se koristi?</h3>
	<p>Samo u Va&scaron;u stranicu/&Scaron;ablon umetnite tag poput ovog: <code>{google_search}</code><br />
	<br />
	Napomena: Da bi ovo radilo, Va&scaron; sajt mora biti indeksiran od strane Google-a. Možete poslati svoj sajt Guglu na razmatranje <a href="http://www.google.com/addurl.html">preko ove adrese</a>.</p>
	<h3>&Scaron;ta ako želim da promijenim izgled polja za unos kriterijuma i dugmeta?</h3>
	<p>Ovo možete uraditi putem CSS-a. Polju za unos kriterijuma je dodijeljena ID oznaka <em>textSearch</em>  a dugmetu <em>buttonSearch</em>.</p>

	<h3>Koje parametre prima?</h3>
	<ul>
		<li><em>(opcionalno)</em> domain - Govori Guglu koji domen želite da pretražujete. Ovo se uglavnom utvrđuje automatski.</li>
		<li><em>(opcionalno)</em> buttonText - Tekst koji želite da prikažete na dugmetu koje pokreće pretragu. Podrazumevani tekst je &quot;Search Site&quot;.</li>
	</ul>';
$lang['admin']['help_function_global_content'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Umeće Blok Globalnog Sadržaja u Va&scaron; &Scaron;ablon ili na stranicu.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo umetnite tag u Va&scaron; &Scaron;ablon/stranicu, kao npr: <code>{global_content name=&#039;mojbgs&#039;}</code>, gde parametar &#039;name&#039; predstavlja naziv koji ste dali BGS-u kada ste ga kreirali.</p>
	<h3>Koje parametre prima?</h3>
	<ul>
  	  <li>name - Naziv Bloka Globalnog Sadržaja koji želite da prikažete.</li>
          <li><em>(opciono)</em> assign - Naziy <em>Smarty</em> varijable kojoj bi trebalo dodeliti BGS.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>&Scaron;tampa sve dostupne Smarty promenljive na Va&scaron;u stranicu</p>
	<h3>Kako se koristi?</h3>
	<p>Samo na Va&scaron;u Stranicu/&Scaron;ablon umetnite tag poput ovog: <code>{get_template_vars}</code></p>
	<h3>Koje parametre prima?</h3>
											  <p>U ovom trenutku nijedan.</p>';
$lang['admin']['help_function_uploads_url'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje URL lokacije za otpremanje (upload) sajta.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo ubacite tag u Va&scaron; &Scaron;ablon/stranicu, poput ovoga: <code>{uploads_url}</code></p>
	<h3>Koje parametre orihvata?</h3>
	<p><em>(opcionalno)</em> assign (string) - Dodjeljuje rezultat smarty varijabli sa prosleđenim imenom.</p>';
$lang['admin']['help_function_embed'] = '<h3>What does this do?</h3>
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
$lang['admin']['help_function_description'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje opis (title atribut) stranice.</p>
	<h3>Kako se koristi?</h3>
	<p>Samo ubacite tag u Va&scaron; &Scaron;ablon/stranicu, poput ovoga: <code>{description}</code></p>
	<h3>Koje parametre prima?</h3>
	<p>U ovom trenutku nijedan.</p>';
$lang['admin']['help_function_created_date'] = '<h3>&Scaron;ta ovo radi?</h3>
        <p>Prikazuje datum kreiranja stranice.  Ukoliko ne specificirate format, biće kori&scaron;ćen format sličan ovome: &#039;Jan 01, 2004&#039;.</p>
        <h3>Kako se koristi?</h3>
        <p>Samo ubacite tag u Va&scaron; &Scaron;ablon/stranicu, poput ovoga: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>koje parametre prihvata?</h3>
        <ul>
                <li><em>(opcionalno)</em>format - Format datuma/vremena, u skladu sa PHP <em>strftime</em>  funkcijom.  Pogledajte<a href="http://php.net/strftime" target="_blank">ovdje</a> za listu parametara i vi&scaron;e informacija.</li>
        </ul>';
$lang['admin']['help_function_content'] = '<h3>&Scaron;ta ovo radi?</h3>
	<p>Prikazuje stvarni sadržaj Va&scaron;e stranice. Umeće se u &Scaron;ablon i mijenja se u zavisnosti od trenutno prikazane stranice.</p>
	<h3>Kako se koristni?</h3>
	<p>Samo ubacite tag u Va&scaron; &Scaron;ablon/stranicu, poput ovoga: <code>{content}</code>.</p>
	<p><strong>Podrazumijevani <code>{content}</code> blok je neophodan za ispravno funkcionisanje sistema. Dakle, ako Va&scaron; &scaron;ablon ne sadrži makar jedan <code>{content}</code> blok, nećete biti u mogućnosti da ga koristite.</strong> Da biste bloku dali određeni naziv, koristite <code>label</code> parametar. Dodatni blokovi mogu biti umetnuti u &Scaron;ablon kori&scaron;ćenjem parametra <code>block</code>.</p>
	<h3>Koje parametre prima?</h3>
	<ul>
		<li><em>(opcionalno) </em>block - Omogućava Vam da imate vi&scaron;e od jednog content bloka na stranici. Kada u &Scaron;ablon umetnete vi&scaron;e od jednog <code>{content}</code> taga, toliki broj polja za unos sadržaja će biti prikazano prilikom uređivanja/menjanja stranice.
<p>Primer:</p>
<pre>{content block=&quot;brugi_content_blok&quot; label=&quot;Drugi content blok&quot;}</pre>
<p>Prilikom editovanja stranice biće Vam prikazano polje za unos teksta iznad kog će pisati: &quot;Drugi content blok&quot;.</p></li>
		<li><em>(opcionalno) </em>wysiwyg (true/false) - Ukoliko se podesi na false, wysiwyg editor nikada neće biti kori&scaron;ćen za editovanje ovog bloka sadržaja. Ako je true, onda će se pona&scaron;ati uobičajeno.  Funkcioni&scaron;e samo kada se koristi block parametar.</li>
		<li><em>(opcionalno) </em>oneline (true/false) - Ako se podesi na true, prilikom editovanja stranice biće omogućen unos samo jedne linije teksta u ovaj blok sadržaja. Ako je true, onda će se pona&scaron;ati uobičajeno.  Funkcioni&scaron;e samo kada se koristi block parametar.</li>
<li><em>(opcionalno) </em>size - Primenljiv je samo kada uz <code>oneline</code> parametar, i omogućava Vam da odredite maksimalnu dužinu te jedne linije teksta.  Podrazumevana vrednost je 50.</li>
		<li><em>(opcionalno) </em>default - Omogućava Vam da specificirate podrazumevani sadržaj za dati blok sadržaja (samo za dodatne <code>content</code> blokove).</li>
		<li><em>(opcionalno) </em>label - Labela/naziv polja koji će biti prikazan prilikom uređuvanja stranice.</li>
		<li><em>(opcionalno) </em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p></li>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '<h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>
  <p>You can use the module FormBuilder instead.</p>';
$lang['admin']['help_function_cms_versionname'] = '<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
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
$lang['admin']['help_function_cms_selflink'] = '<h3>What does this do?</h3>
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
$lang['admin']['about_function_cms_module'] = '<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '<h3>What does this do?</h3>
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
$lang['admin']['about_function_anchor'] = '<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '<h3>What does this do?</h3>
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
$lang['admin']['help_function_cms_jquery'] = '<h3>&Scaron;ta ovo radi?</h3>
 <p>Ovaj dodatak omogućava Vam da ubacite javascript biblioteke koje koristite iz administratorskog dela sajta.</p>
<h3>Kako se koristi?</h3>
<p>Prosto ubacite ovaj tag u Va&scaron; &Scaron;ablon ili stranicu: <code>{cms_jquery}</code></p>

<h3>Primer</h3>
<pre><code>{cms_jquery cdn=true exclude=&#039;jquery.ui.nestedSortable-1.3.4.js&#039; append=&#039;uploads/NCleanBlue/js/ie6fix.js&#039;}</code></pre>
<h4><em>Rezultat gornjeg koda</em></h4>
<pre><code><script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;uploads/NCleanBlue/js/ie6fix.js&quot;></script>
</code></pre>

<h3><em>Podrazumevane opcije</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.7.1)</em> - jquery-1.7.1.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.16)</em> - jquery-ui-1.8.16.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>Koje parametre prihvata?</h3>
<ul>
	<li><em>(opcionalno) </em><tt>exclude</tt> - koristi listu putanja do skriptova, razdvojenih zarezima (CSV) koje želite da isključite. <code>&#039;jquery.ui.nestedSortable.js,jquery.json-2.2.js&#039;</code></li>
	<li><em>(opcionalno) </em><tt>append</tt> - koristi listu putanja do skriptova, razdvojenih zarezima (CSV) koje želite da dodate. <code>&#039;/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.6.2.min.js&#039;</code></li>
	<li><em>(opcionalno) </em><tt>cdn</tt> - use to save the output in a smarty assignment.</li>
	<li><em>(opcionalno) </em><tt>ssl</tt> - određuje ssl_url za baznu putanju.</li>
	<li><em>(opcionalno) </em><tt>custom_root</tt> - use to set any base path wished.<code>custom_root=&#039;http://test.domain.com/&#039;</code> <br/>NOTE: over writes ssl option and works with the cdn option</li>
	<li><em>(opcionalno)</em> <tt>assign</tt> - Koristi se za učitavanje rezultata u navedenu Smarty promenljivu.</li>
	</ul>';
$lang['admin']['of'] = 'od';
$lang['admin']['first'] = 'Prva';
$lang['admin']['last'] = 'Poslednja';
$lang['admin']['adminspecialgroup'] = 'Upozorenje: Članovi ove grupe automatski imaju sve dozvole';
$lang['admin']['disablesafemodewarning'] = 'Onemogući admin safe mode upozorenje';
$lang['admin']['date_format_string'] = 'Format datuma';
$lang['admin']['date_format_string_help'] = 'Datum u <em>strftime</em> formatu.  Poku&scaron;ajte na Guglu pronaći &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Poslednji put promenjeno';
$lang['admin']['last_modified_by'] = 'Poslednji put promenio/la';
$lang['admin']['read'] = 'Čitati';
$lang['admin']['write'] = 'Pisati';
$lang['admin']['execute'] = 'Izvr&scaron;iti';
$lang['admin']['group'] = 'Grupa';
$lang['admin']['other'] = 'Ostalo';
$lang['admin']['event_desc_moduleupgraded'] = 'Poslato nakon &scaron;to je unapređen modul';
$lang['admin']['event_help_moduleupgraded'] = '<p>Poslato nakon &scaron;to je unapređen modul.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Poslato nakon instalacije modula';
$lang['admin']['event_help_moduleinstalled'] = '<p>Poslato nakon instalacije modula.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Poslato nakon &scaron;to se deinstalira modul';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Poslato nakon &scaron;to se deinstalira modul.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Poslato nakon &scaron;to se KDT ažurira';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Poslato nakon &scaron;to se KDT ažurira.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Poslato pre KDT ažuriranja';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Poslato pre KDT ažuriranja.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Poslato pre brisanja KDT-a';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Poslato pre brisanja KDT-a.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Poslato nakon &scaron;to se KDT izbri&scaron;e';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Poslato nakon &scaron;to se KDT izbri&scaron;e.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Poslato nakon &scaron;to se KDT ubacio';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Poslato nakon &scaron;to se KDT ubacio.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Poslato pre nego &scaron;to se KDT umetnuo';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Poslato pre nego &scaron;to se KDT umetnuo.</p>';
$lang['admin']['global_umask'] = 'Maska za kreiranje fajlova (umask)';
$lang['admin']['errorcantcreatefile'] = 'Gre&scaron;ka pri kreiranju fajla (problem sa dozvolama?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul nije kompatibilan sa ovom verzijom CMS-a';
$lang['admin']['errormodulenotloaded'] = 'Interna gre&scaron;ka, modul nije pokrenut';
$lang['admin']['errormodulenotfound'] = 'Interna gre&scaron;ka, nije mogla da se pronađe instanca modula';
$lang['admin']['errorinstallfailed'] = 'Instalacija modula nije uspela';
$lang['admin']['errormodulewontload'] = 'Do&scaron;lo je do problema prilikom pokretanja jednog od dostupnih modula';
$lang['admin']['frontendlang'] = 'Podrazumevani jezik za frontend';
$lang['admin']['info_edituser_password'] = 'Promenite ovo polje da biste promenili korisničku lozinku';
$lang['admin']['info_edituser_passwordagain'] = 'Promenite ovo polje da biste promenili korisničku lozinku';
$lang['admin']['originator'] = 'Pokretač';
$lang['admin']['module_name'] = 'Naziv modula';
$lang['admin']['event_name'] = 'Naziv događaja';
$lang['admin']['event_description'] = 'Opis događaja';
$lang['admin']['error_delete_default_parent'] = 'Glavna stranica ne može biti obrisana, jer onda ne bi ostalo ni&scaron;ta da se prikaže posetiocima sajta.';
$lang['admin']['jsdisabled'] = 'Žao nam je, ova funkcija zahteva omogućen JavaScript.';
$lang['admin']['order'] = 'Redosled';
$lang['admin']['reorderpages'] = 'Promena redosleda stranica';
$lang['admin']['reorder'] = 'Promeni redosled';
$lang['admin']['page_reordered'] = 'Stranica je uspe&scaron;no preuređena.';
$lang['admin']['pages_reordered'] = 'Stranice su uspe&scaron;no preraspoređene';
$lang['admin']['sibling_duplicate_order'] = 'Dve stranice ne mogu da imaju isti redosled. Stranice nisu preuređeni.';
$lang['admin']['no_orders_changed'] = 'Naumili ste da promenite redosled stranica, ali niste pomerili ni jednu od njih. Redosled stranica je ostao isti.';
$lang['admin']['order_too_small'] = 'Redni broj stranice ne može biti nula. Stranice nisu preuređene.';
$lang['admin']['order_too_large'] = 'Redosled stranica ne može biti veći od broja stranica na tom nivou. Stranice nisu preuređene.';
$lang['admin']['user_tag'] = 'Korisnički Tag';
$lang['admin']['add'] = 'Dodaj';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'Opis';
$lang['admin']['action'] = 'Akcija';
$lang['admin']['actionstatus'] = 'Akcija/Status';
$lang['admin']['active'] = 'Aktivna';
$lang['admin']['addcontent'] = 'Dodaj novi sadržaj';
$lang['admin']['cantremove'] = 'Ne može se ukloniti';
$lang['admin']['changepermissions'] = 'Promena dozvola';
$lang['admin']['changepermissionsconfirm'] = 'BUDITE OPREZNI\n\nOva akcija će poku&scaron;ati da osigura da Veb server može menjati sve datoteke koje sačinjavaju dati modul.\nDa li ste sigurni da želite da nastavite?';
$lang['admin']['contentadded'] = 'Sadržaj je uspe&scaron;no dodat u bazu podataka.';
$lang['admin']['contentupdated'] = 'Sadržaj je uspe&scaron;no ažuriran.';
$lang['admin']['contentdeleted'] = 'Sadržaj je uspe&scaron;no uklonjen iz baze podataka.';
$lang['admin']['success'] = 'Uspeh';
$lang['admin']['addcss'] = 'Dodaj Stil';
$lang['admin']['addgroup'] = 'Dodaj novu grupu';
$lang['admin']['additionaleditors'] = 'Dodatni urednici';
$lang['admin']['addtemplate'] = 'Dodaj novi &scaron;ablon';
$lang['admin']['adduser'] = 'Dodaj novog korisnika';
$lang['admin']['addusertag'] = 'Dodaj Korisnički Definisan Tag';
$lang['admin']['adminaccess'] = 'Pristup da se prijavite u administraciju';
$lang['admin']['adminlog'] = 'Administratorski dnevnik';
$lang['admin']['adminlogcleared'] = 'Administratorski dnevnik je uspe&scaron;no ispražnjen';
$lang['admin']['adminlogempty'] = 'Administratorski dnevnik je prazan';
$lang['admin']['adminsystemtitle'] = 'CMS Administracijski sistem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple administratorska konzola';
$lang['admin']['advanced'] = 'Napredna';
$lang['admin']['aliasalreadyused'] = '&quot;Pseudonim&quot; koji ste predložili je već u upotrebi na drugoj strani. Promenite &quot;Pseudonim strane&quot; u ne&scaron;to drugo.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Pseudonim se mora sastojati od slova i cifara';
$lang['admin']['aliasnotaninteger'] = 'Pseudonim ne može biti ceo broj';
$lang['admin']['allpagesmodified'] = 'Sve stranice modifikovane!';
$lang['admin']['assignments'] = 'Dodeli Korisnike';
$lang['admin']['associationexists'] = 'Ova veza već postoji';
$lang['admin']['autoinstallupgrade'] = 'Automatski instaliraj ili nadogradi';
$lang['admin']['back'] = 'Nazad na meni';
$lang['admin']['backtoplugins'] = 'Nazad na listu Plaginova';
$lang['admin']['cancel'] = 'Otkaži';
$lang['admin']['cantchmodfiles'] = 'Nije moguće promeniti dozvole na nekim fajlovima';
$lang['admin']['cantremovefiles'] = 'Problem u uklanjanju fajlova (dozvole?)';
$lang['admin']['confirmcancel'] = 'Jeste li sigurni da želite da odbacite promene? Kliknite OK da biste odbacili sve izmene. Kliknite na dugme Otkaži da biste nastavili uređivanje.';
$lang['admin']['canceldescription'] = 'Odbaci promene';
$lang['admin']['clearadminlog'] = 'Isprazni Administratorski dnevnik';
$lang['admin']['code'] = 'Kod';
$lang['admin']['confirmdefault'] = 'Da li ste sigurni da želite da podesite - %s - kao podrazumevanu stranicu?';
$lang['admin']['confirmdeletedir'] = 'Da li ste sigurni da želite da izbri&scaron;ete ovaj direktorijum i ceo njegov sadržaj?';
$lang['admin']['content'] = 'Sadržaj';
$lang['admin']['contentmanagement'] = 'Upravljanje sadržajem';
$lang['admin']['contenttype'] = 'Tip sadržaja';
$lang['admin']['copy'] = 'Kopiraj';
$lang['admin']['copytemplate'] = 'Kopiraj &scaron;ablon';
$lang['admin']['create'] = 'Kreiraj';
$lang['admin']['createnewfolder'] = 'Kreiraj novi direktorijum';
$lang['admin']['cssalreadyused'] = 'CSS ime je u upotrebi';
$lang['admin']['cssmanagement'] = 'Upravljanje CSS-om';
$lang['admin']['currentassociations'] = 'Postojeće veze';
$lang['admin']['currentdirectory'] = 'Trenutni driektorijum';
$lang['admin']['currentgroups'] = 'Postojeće grupe';
$lang['admin']['currentpages'] = 'Postojeće stranice';
$lang['admin']['currenttemplates'] = 'Postojeći &scaron;abloni';
$lang['admin']['currentusers'] = 'Postojeći korisnici';
$lang['admin']['custom404'] = 'Prilagođena 404 poruka o gre&scaron;ci';
$lang['admin']['database'] = 'Baza podataka';
$lang['admin']['databaseprefix'] = 'Prefiks baze podataka';
$lang['admin']['databasetype'] = 'Tip baze podataka';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Glavna';
$lang['admin']['delete'] = 'Izbri&scaron;i';
$lang['admin']['deleteconfirm'] = 'Da li ste sigurni da želite da izbri&scaron;ete - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Da li ste sigurni da želite da izbri&scaron;ete vezu sa - %s - ?';
$lang['admin']['deletecss'] = 'Izbri&scaron;i CSS';
$lang['admin']['dependencies'] = 'Zavisnosti';
$lang['admin']['description'] = 'Opis';
$lang['admin']['directoryexists'] = 'Ovaj direktorijum već postoji.';
$lang['admin']['down'] = 'Dole';
$lang['admin']['edit'] = 'Izmeni';
$lang['admin']['editconfiguration'] = 'Izmeni postavke';
$lang['admin']['editcontent'] = 'Izmeni sadržaj';
$lang['admin']['editcss'] = 'Izmeni stil';
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
$lang['admin']['email'] = 'E-mail adresa';
$lang['admin']['errorattempteddowngrade'] = 'Instaliranje ovog modula će dovesti do smanjenja rejtinga. Operacija je prekinuta';
$lang['admin']['errorchildcontent'] = 'Sadržaj jo&scaron; uvek sadrži decu sadržaja. Molimo Vas da jih prvo uklonite.';
$lang['admin']['errorcopyingtemplate'] = 'Gre&scaron;ka u kopiranju &scaron;ablona';
$lang['admin']['errorcouldnotparsexml'] = 'Gre&scaron;ka u analizi XML datoteke. Molimo proverite da li ste učitali XML fajl i. ne tar.gz ili zip fajl.';
$lang['admin']['errorcreatingassociation'] = 'Gre&scaron;ka pri pravljenju asocijacije';
$lang['admin']['errorcssinuse'] = 'Ovaj stil se jo&scaron; uvek koristi u &scaron;ablonu ili stranama. Molimo vas da prvo uklonite te asocijacije.';
$lang['admin']['errordefaultpage'] = 'Ne može se izbrisati trenutna podrazumevana strana. Molimo Vas da podesite drugu starnu kao podrazumevanu.';
$lang['admin']['errordeletingassociation'] = 'Gre&scaron;ka pri brisanju aocijacije';
$lang['admin']['errordeletingcss'] = 'Gre&scaron;ka pri brisanju CSS-a';
$lang['admin']['errordeletingdirectory'] = 'Nije moguće izbrisati direktorijum. Dozvole problema?';
$lang['admin']['errordeletingfile'] = 'Nije moguće izbrisati datoteku. Problem u dozvoli?';
$lang['admin']['errordirectorynotwritable'] = 'Nema dozvole da se pi&scaron;e u direktorijum. Ovo bi moglo biti izazvano zbog dozvole ili vlasni&scaron;tva datoteke. Safe mode može biti na snazi.';
$lang['admin']['errordtdmismatch'] = 'DTD Verzija nedostaje ili je nekompatibilna u XML datoteci';
$lang['admin']['errorgettingcssname'] = 'Gre&scaron;ka u dobivanju stajl imena';
$lang['admin']['errorgettingtemplatename'] = 'Gre&scaron;ka u dobivanju &scaron;ablon imena';
$lang['admin']['errorincompletexml'] = 'XML datoteka je nepotpuna ili nevažeća';
$lang['admin']['uploadxmlfile'] = 'Instalirajte modul preko XML datoteke';
$lang['admin']['cachenotwritable'] = 'U cache direktorijum se ne može pisati. Brisanje cacha neće raditi. Molimo vas da popravite dozvolu i vlasni&scaron;tvo u tmp/cache direktoriju (chmod 777). Takođe možda je onemogućen safe mode.';
$lang['admin']['error_nomodules'] = 'Nema instaliranih modula! Proverite Pro&scaron;irenja > Moduli';
$lang['admin']['modulesnotwritable'] = 'Modul direktorijum <em>(i/ili upload direktorijum)</em> nije writable, ukoliko želite da instalirate module otpremanjem XML datoteka morate osigurati da ovi direktoriji imaju potpuna read/write/execute prava(chmod 777).  Takođe možda je onemogućen safe mode.';
$lang['admin']['noxmlfileuploaded'] = 'Datoteka nije otpremljena. Da biste instalirali modul preko XML-a morate da izaberete i otpremite XML datoteku modula sa va&scaron;eg računara.';
$lang['admin']['errorinsertingcss'] = 'Gre&scaron;ka u ubacivanju Stylesheet-a';
$lang['admin']['errorinsertinggroup'] = 'Gre&scaron;ka u ubacivanju grupe';
$lang['admin']['errorinsertingtag'] = 'Gre&scaron;ka u ubacivanju KDT-a';
$lang['admin']['errorinsertingtemplate'] = 'Gre&scaron;ka u ubacivanju &scaron;ablona';
$lang['admin']['errorinsertinguser'] = 'Gre&scaron;ka u ubacivanju korisnika';
$lang['admin']['errornofilesexported'] = 'Gre&scaron;ka u izvozu XML datoteka';
$lang['admin']['errorretrievingcss'] = 'Gre&scaron;ka u preuzimanju Stylesheet-a';
$lang['admin']['errorretrievingtemplate'] = 'Gre&scaron;ka u preuzimanju &scaron;ablona';
$lang['admin']['errortemplateinuse'] = 'Ova &scaron;ablon je jo&scaron; uvek u upotrebi na jednoj stranici. Molimo Vas da ga uklonite prvo.';
$lang['admin']['errorupdatingcss'] = 'Gre&scaron;ka prilikom ažuriranja Stila';
$lang['admin']['errorupdatinggroup'] = 'Gre&scaron;ka prilikom ažuriranja grupe';
$lang['admin']['errorupdatingpages'] = 'Gre&scaron;ka prilikom ažuriranja stranica';
$lang['admin']['errorupdatingtemplate'] = 'Gre&scaron;ka prilikom ažuriranja &scaron;ablona';
$lang['admin']['errorupdatinguser'] = 'Gre&scaron;ka prilikom ažuriranja korisnika';
$lang['admin']['errorupdatingusertag'] = 'Gre&scaron;ka prilikom ažuriranja UDT-a';
$lang['admin']['erroruserinuse'] = 'Ovaj korisnik jo&scaron; uvek poseduje stranice sa sadržajem. Molimo Vas da promeni svojine na drugog korisnika prije brisanja.';
$lang['admin']['eventhandlers'] = 'Upravljanje događajima';
$lang['admin']['eventhandler'] = 'Rukovaoci događajima';
$lang['admin']['editeventhandler'] = 'Izmeni rukovalac događajima';
$lang['admin']['eventhandlerdescription'] = 'Ovde možete podesiti koji korisnički tag će se izvr&scaron;iti nakon određenog događaja.';
$lang['admin']['export'] = 'Izvezi';
$lang['admin']['event'] = 'Događaj';
$lang['admin']['false'] = 'Ne';
$lang['admin']['settrue'] = 'Postavi na &quot;Da&quot;';
$lang['admin']['filecreatedirnodoubledot'] = 'Direktorijum ne može da sadrži  &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nije moguće napraviti direktorijum bez imena.';
$lang['admin']['filecreatedirnoslash'] = 'Direktorijum ne može da sadrži &#039;/&#039; ili &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Upravljanje datotekama';
$lang['admin']['filename'] = 'Naziv datoteke';
$lang['admin']['filenotuploaded'] = 'Datoteka ne može da se otpremi. Ovo bi moglo biti  zbog dozvole ili Safe mode problema?';
$lang['admin']['filesize'] = 'Veličina datoteke';
$lang['admin']['firstname'] = 'Ime';
$lang['admin']['groupmanagement'] = 'Upravljanje grupama';
$lang['admin']['grouppermissions'] = 'Dozvole grupe';
$lang['admin']['handler'] = 'Rukovalac (korisnički definisan tag)';
$lang['admin']['headtags'] = 'Head Tag-ovi';
$lang['admin']['help'] = 'Pomoć';
$lang['admin']['new_window'] = 'novi prozor';
$lang['admin']['helpwithsection'] = 'Pomoć za %s';
$lang['admin']['helpaddtemplate'] = '<p>&Scaron;ablon određuje kako će Va&scaron; sajt izgledati.</p><p>Kreirajte &scaron;ablon ovde i dodajte CSS u sekciji Stilovi kako biste kontrolisali izgled različitih komponenti definisanih &scaron;ablonom.</p>';
$lang['admin']['helplisttemplate'] = '<p>Ova stranica omogućava Vam da menjate, bri&scaron;ete i kreirate &scaron;ablone.</p><p>Da biste kreirali novi &scaron;ablon, kliknite na dugme <u>Dodaj novi &scaron;ablon</u>.</p><p>Ukoliko želite da sve stranice koriste isti &scaron;ablon, kliknite na <u>Postavi za sve stranice</u> link.</p><p>Ako želite da kopirate neki &scaron;ablon, kliknite na ikonicu <u>Kopiraj</u> i od Vas će biti zatraženo da ukucate naziv za dupikat.</p>';
$lang['admin']['home'] = 'Početak';
$lang['admin']['homepage'] = 'Početna strana';
$lang['admin']['hostname'] = 'Naziv host servera';
$lang['admin']['idnotvalid'] = 'Dati ID nije ispravan';
$lang['admin']['imagemanagement'] = 'Upravljanje slikama';
$lang['admin']['informationmissing'] = 'Informacije nedostaju';
$lang['admin']['install'] = 'Instaliraj';
$lang['admin']['invalidcode'] = 'Unesen je nevažeći kod.';
$lang['admin']['illegalcharacters'] = 'Nevažeći znakovi u polju %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Neravnomerna količina zagrada';
$lang['admin']['invalidtemplate'] = 'Nevažeći &Scaron;ablon';
$lang['admin']['itemid'] = 'ID stavke';
$lang['admin']['itemname'] = 'Naziv stavke';
$lang['admin']['language'] = 'Jezik';
$lang['admin']['lastname'] = 'Prezime';
$lang['admin']['logout'] = 'Odjavi se';
$lang['admin']['loginprompt'] = 'Unesite važeću akreditivu korisnika da dobijete pristup u Administratorsku konzolu.';
$lang['admin']['logintitle'] = 'Prijavljivanje u CMS Made Simple';
$lang['admin']['menutext'] = 'Tekst u meniju';
$lang['admin']['missingparams'] = 'Neki parametri su nedostajali ili su nevažeći';
$lang['admin']['modifygroupassignments'] = 'Izmeni dozvole grupe';
$lang['admin']['moduleabout'] = 'O %s modulu';
$lang['admin']['modulehelp'] = 'Pomoć za %s modul';
$lang['admin']['msg_defaultcontent'] = 'Dodajte kod ovde da se pojavi kao podrazumevani sadržaj svih novih stranica';
$lang['admin']['msg_defaultmetadata'] = 'Dodajte kod ovde da se pojavljuju u metapodacima svih novih stranica';
$lang['admin']['wikihelp'] = 'Pomoć Zajednice';
$lang['admin']['moduleinstalled'] = 'Modul je već instaliran';
$lang['admin']['moduleinterface'] = '%s Interfejs';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Pomeri';
$lang['admin']['name'] = 'Naziv';
$lang['admin']['needpermissionto'] = 'Potrebna vam je &#039;%s&#039; dozvola za tu funkciju.';
$lang['admin']['needupgrade'] = 'Zahteva nadogradnju';
$lang['admin']['newtemplatename'] = 'Naziv novog &Scaron;ablona';
$lang['admin']['next'] = 'Sledeća';
$lang['admin']['noaccessto'] = 'Nemate pristup do %s';
$lang['admin']['nocss'] = 'Nema stila';
$lang['admin']['noentries'] = 'Nema unosa';
$lang['admin']['nofieldgiven'] = 'Nije %s određen!';
$lang['admin']['nofiles'] = 'Nema datoteka';
$lang['admin']['nopasswordmatch'] = 'Lozinke se ne poklapaju';
$lang['admin']['norealdirectory'] = 'Nema obzirnog direktorijuma';
$lang['admin']['norealfile'] = 'Nema obzirne datoteke';
$lang['admin']['notinstalled'] = 'Nije instaliran';
$lang['admin']['overwritemodule'] = 'Zameni postojeće module';
$lang['admin']['owner'] = 'Vlasnik';
$lang['admin']['pagealias'] = 'Alijas stranice';
$lang['admin']['content_id'] = 'ID oznaka sadržaja';
$lang['admin']['pagedefaults'] = 'Podrazumevane vrednosti stranice';
$lang['admin']['pagedefaultsdescription'] = 'Postavite podrazumevane vrednosti za nove stranice';
$lang['admin']['parent'] = 'Roditelj';
$lang['admin']['password'] = 'Lozinka';
$lang['admin']['passwordagain'] = 'Lozinka (ponovo)';
$lang['admin']['permission'] = 'Dozvola';
$lang['admin']['permissions'] = 'Dozvole';
$lang['admin']['permissionschanged'] = 'Dozvole su ažurirane.';
$lang['admin']['pluginabout'] = 'O %s tag-u';
$lang['admin']['pluginhelp'] = 'Pomoć za %s tag';
$lang['admin']['pluginmanagement'] = 'Uprava Plugin-a';
$lang['admin']['prefsupdated'] = 'Pode&scaron;avanja su ažurirana.';
$lang['admin']['accountupdated'] = 'Korisnički nalog je osvežen.';
$lang['admin']['preview'] = 'Pregled';
$lang['admin']['previewdescription'] = 'Pregledaj promene';
$lang['admin']['previous'] = 'Prethodna';
$lang['admin']['remove'] = 'Obri&scaron;i';
$lang['admin']['removeconfirm'] = 'Ovom akcijom ćete trajno obrisati datoteke od kojih se ovaj modul sastoji.\Da li ste sigurni da želite da nastavite?';
$lang['admin']['removecssassociation'] = 'Ukloni vezu sa Stilom';
$lang['admin']['saveconfig'] = 'Sačuvaj konfiguraciju';
$lang['admin']['send'] = 'Po&scaron;alji';
$lang['admin']['setallcontent'] = 'Postavi za sve stranice';
$lang['admin']['setallcontentconfirm'] = 'Da li ste sigurni da želite da podesite sve strane da koriste ovaj &scaron;ablon?';
$lang['admin']['showinmenu'] = 'Prikaži u Meniju';
$lang['admin']['use_name'] = 'Koristi naziv stranice kada je prikazije&scaron; u listi ispod stranice-roditelja, u drugim slučajevima koristi tekst iz menija';
$lang['admin']['showsite'] = 'Prikaži sajt';
$lang['admin']['sitedownmessage'] = 'Poruka kada je sajt zatvoren';
$lang['admin']['siteprefs'] = 'Globalna pode&scaron;avanja';
$lang['admin']['status'] = 'Status';
$lang['admin']['stylesheet'] = 'Stil';
$lang['admin']['submit'] = 'Po&scaron;alji';
$lang['admin']['submitdescription'] = 'Sačuvaj promene';
$lang['admin']['tags'] = 'Tagovi';
$lang['admin']['template'] = '&Scaron;ablon';
$lang['admin']['templateexists'] = 'Naziv &Scaron;ablona već postoji';
$lang['admin']['templatemanagement'] = 'Upravljanje &scaron;ablonima';
$lang['admin']['title'] = 'Naslov';
$lang['admin']['tools'] = 'Alati';
$lang['admin']['true'] = 'Da';
$lang['admin']['setfalse'] = 'Postavi na &quot;Ne&quot;';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip ne važi';
$lang['admin']['uninstall'] = 'Deinstaliraj';
$lang['admin']['uninstallconfirm'] = 'Da li ste sigurni da želite da deinstalirate ovaj modul? Ime:';
$lang['admin']['up'] = 'Gore';
$lang['admin']['upgrade'] = 'Nadogradi';
$lang['admin']['upgradeconfirm'] = 'Da li ste sigurni da želite da nadogradite ovo?';
$lang['admin']['uploadfile'] = 'Otpremi datoteku';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Koristite napredni Stilesheet menadžment';
$lang['admin']['user'] = 'Korisnik';
$lang['admin']['userdefinedtags'] = 'Korisnički definisani tagovi';
$lang['admin']['usermanagement'] = 'Upravljanje korisnicima';
$lang['admin']['username'] = 'Korisničko ime';
$lang['admin']['usernameincorrect'] = 'Korisničko ime i/ili lozinka netačna';
$lang['admin']['userprefs'] = 'Korisnička pode&scaron;avanja';
$lang['admin']['useraccount'] = 'Korisnički nalog';
$lang['admin']['lang_settings_legend'] = 'Pode&scaron;avanja vezana za jezik';
$lang['admin']['content_editor_legend'] = 'Pode&scaron;avanje editora sadržaja';
$lang['admin']['admin_layout_legend'] = 'Pode&scaron;avanja izgleda administratorske konzole';
$lang['admin']['usersassignedtogroup'] = 'Korisnici dodeljeni %s grupi';
$lang['admin']['usertagexists'] = 'Tag sa ovim nazivom već postoji. Molimo Vas da izaberete drugi naziv.';
$lang['admin']['usewysiwyg'] = 'Koristi WYSIWYG editor za sadržaj';
$lang['admin']['version'] = 'Verzija';
$lang['admin']['view'] = 'Pogledaj';
$lang['admin']['welcomemsg'] = 'Dobro do&scaron;li, %s';
$lang['admin']['directoryabove'] = 'direktorijum iznad trenutnog nivoa';
$lang['admin']['nodefault'] = 'Niste izabrali prodrazumevano';
$lang['admin']['blobexists'] = 'Naziv Bloka Globalnog Sadržaja već postoji';
$lang['admin']['blobmanagement'] = 'Upravljanje Blokovima Globalnog Sadržaja';
$lang['admin']['errorinsertingblob'] = 'Do&scaron;lo je do gre&scaron;ke prilikom ubacivanja BGS-a';
$lang['admin']['addhtmlblob'] = 'Dodaj Blok Globalnog Sadržaja';
$lang['admin']['edithtmlblob'] = 'Uredi Blok Globalnog Sadržaja';
$lang['admin']['edithtmlblobsuccess'] = 'Blok Globalnog Sadržaja ažuriran';
$lang['admin']['tagtousegcb'] = 'Tag za kori&scaron;ćenje ovog BGS-a';
$lang['admin']['gcb_wysiwyg'] = 'Omogući WYSIWYG za Blokove Globalnog Sadržaja';
$lang['admin']['gcb_wysiwyg_help'] = 'Omogući WYSIWYG editor prilikom uređivanja BGS';
$lang['admin']['filemanager'] = 'Upravljanje datotekama';
$lang['admin']['imagemanager'] = 'Upravljanje slikama';
$lang['admin']['encoding'] = 'Kodni raspored';
$lang['admin']['clearcache'] = 'Isprazni Ke&scaron; memoriju';
$lang['admin']['clear'] = 'Isprazni';
$lang['admin']['cachecleared'] = 'Ke&scaron; memorija ispražnjena';
$lang['admin']['apply'] = 'Potvrdi';
$lang['admin']['applydescription'] = 'Sačuvaj promene i nastavi sa izmenama';
$lang['admin']['none'] = 'N/A';
$lang['admin']['wysiwygtouse'] = 'Izaberite WYSIWYG editor za upotrebu';
$lang['admin']['syntaxhighlightertouse'] = 'Izaberite <em>syntax highlighter</em> za upotrebu';
$lang['admin']['hasdependents'] = 'Od njega zavise neki moduli';
$lang['admin']['missingdependency'] = 'Nedostaju zavisnosti';
$lang['admin']['minimumversion'] = 'Minimalna verzija';
$lang['admin']['minimumversionrequired'] = 'Minimalna CMSMS verzija potrebna';
$lang['admin']['maximumversion'] = 'Maksimalna verzija';
$lang['admin']['maximumversionsupported'] = 'Maksimalna podržana CMSMS verzija';
$lang['admin']['depsformodule'] = 'Zavisnosti za modul %s';
$lang['admin']['installed'] = 'Instaliran';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Istorija izmena';
$lang['admin']['moduleerrormessage'] = 'Poruka o gre&scaron;ci za modul %s';
$lang['admin']['moduleupgradeerror'] = 'Do&scaron;lo je do gre&scaron;ke prilikom nadogradnje modula';
$lang['admin']['moduleinstallmessage'] = 'Instalaciona poruka modula %s';
$lang['admin']['moduleuninstallmessage'] = 'Deinstalaciona poruka modula %s';
$lang['admin']['admintheme'] = 'Administratorska Tema';
$lang['admin']['addstylesheet'] = 'Dodaj Stil';
$lang['admin']['editstylesheet'] = 'Izmeni Stil';
$lang['admin']['addcssassociation'] = 'Dodaj vezu sa Stilom';
$lang['admin']['attachstylesheet'] = 'Poveži ovaj stil';
$lang['admin']['attachtemplate'] = 'Dodeli ovom &scaron;ablonu';
$lang['admin']['main'] = 'Glavni';
$lang['admin']['pages'] = 'Stranice';
$lang['admin']['page'] = 'Stranica';
$lang['admin']['files'] = 'Datoteke';
$lang['admin']['layout'] = 'Izgled sajta';
$lang['admin']['usersgroups'] = 'Korisnici i Korisničke grupe';
$lang['admin']['extensions'] = 'Pro&scaron;irenja';
$lang['admin']['preferences'] = 'Pode&scaron;avanja';
$lang['admin']['admin'] = 'Administracija sajta';
$lang['admin']['viewsite'] = 'Pogledaj sajt';
$lang['admin']['templatecss'] = 'Poveži &Scaron;ablone i Stilove';
$lang['admin']['plugins'] = 'Plaginovi';
$lang['admin']['movecontent'] = 'Premesti Stranice';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Korisnički Definisani Tagovi';
$lang['admin']['htmlblobs'] = 'Blokovi Globalnog Sadržaja';
$lang['admin']['adminhome'] = 'Početna administratorsta stranica';
$lang['admin']['liststylesheets'] = 'Stilovi';
$lang['admin']['preferencesdescription'] = 'Ovde se nalaze različita pode&scaron;avanja koja se odnose na čitav sajt';
$lang['admin']['adminlogdescription'] = 'Bele&scaron;ke o tome ko je &scaron;ta radio u administratorkom delu sajta.';
$lang['admin']['mainmenu'] = 'Glavni meni';
$lang['admin']['users'] = 'Korisnici';
$lang['admin']['usersdescription'] = 'Ovo je mesto gde možete upravljati korisnicima.';
$lang['admin']['groups'] = 'Korisničke grupe';
$lang['admin']['groupsdescription'] = 'Ovo je mesto gde možete upravljati korisničkim grupama.';
$lang['admin']['groupassignments'] = 'Pripadnost korisničkim grupama';
$lang['admin']['groupassignmentdescription'] = 'Ovo je mesto gde možete dodeliti korisnike grupama.';
$lang['admin']['groupperms'] = 'Dozvole grupa';
$lang['admin']['grouppermsdescription'] = 'Podesite dozvole i nivoe pristupa za grupe.';
$lang['admin']['pagesdescription'] = 'Ovo je mesto gde se dodaju i menjaju stranice i drugi sadržaji.';
$lang['admin']['htmlblobdescription'] = 'Blokovi Globalnog Sadržaja (BGS) su delovi sadržaja koje možete ubaciti u Va&scaron;e stranice ili &Scaron;ablone. Sve izmene nad BGS biće vidljive na svim mestima gdje je dati BGS upotrebljen.';
$lang['admin']['templates'] = '&Scaron;abloni';
$lang['admin']['templatesdescription'] = 'Ovo je mesto gde se dodaju i menjaju &Scaron;abloni. &Scaron;abloni defini&scaron;u izgled i stil Va&scaron;eg sajta.';
$lang['admin']['stylesheets'] = 'Stilovi';
$lang['admin']['stylesheetsdescription'] = 'Upravljanje stilovima je napredan način za rukovanje CSS-om <em>(Cascading Stylesheets)</em> nezavisno od &Scaron;ablona.';
$lang['admin']['filemanagerdescription'] = 'Otpremanje i upravljanje datotekama.';
$lang['admin']['imagemanagerdescription'] = 'Otpremite/izmenite i obri&scaron;ite slike.';
$lang['admin']['moduledescription'] = 'Moduli pro&scaron;iruju CMS Made Simple kako bi omogućili različite nestandardne funkcionalnosti.';
$lang['admin']['tagdescription'] = 'Tagovi su malene oznake koje mogu biti ubačene u sadržaj i/ili &scaron;ablone kako bi im se dodala neka funkcionalnost.';
$lang['admin']['usertagdescription'] = 'Tagovi koje sami možete kreirati i menjati tako da obavljaju određene funkcije, direktno iz Va&scaron;eg Veb pretraživača.';
$lang['admin']['installdirwarning'] = '<em><strong>Upozorenje:</strong></em> direktorijum &quot;install&quot; i dalje postoji. Molimo obri&scaron;ite ga u potpunosti.';
$lang['admin']['subitems'] = 'Podstavke';
$lang['admin']['extensionsdescription'] = 'Moduli, tagovi, i slične zabavne stvari.';
$lang['admin']['usersgroupsdescription'] = 'Stavke koje se odnose na korisnike i korisničke grupe.';
$lang['admin']['layoutdescription'] = 'Opcije izgleda sajta.';
$lang['admin']['admindescription'] = 'Administratorske funkcionalnosti sajta.';
$lang['admin']['contentdescription'] = 'Ovde dodajemo i menjamo sadržaj.';
$lang['admin']['enablecustom404'] = 'Omogući prilagođenu 404 poruku';
$lang['admin']['enablesitedown'] = 'Uključi poruku da je sajt zatvoren';
$lang['admin']['enablewysiwyg'] = 'Omogući WYSIWYG editor za poruku o zatvorenom sajtu';
$lang['admin']['bookmarks'] = 'Prečice';
$lang['admin']['user_created'] = 'Lične prečice';
$lang['admin']['forums'] = 'Forumi';
$lang['admin']['wiki'] = 'Viki';
$lang['admin']['irc'] = 'IRC kanal';
$lang['admin']['team'] = 'CMSMS tim';
$lang['admin']['documentation'] = 'Dokumentacija';
$lang['admin']['module_help'] = 'Pomoć za modul';
$lang['admin']['managebookmarks'] = 'Upravljanje prečicama';
$lang['admin']['editbookmark'] = 'Izmeni prečicu';
$lang['admin']['addbookmark'] = 'Dodaj prečicu';
$lang['admin']['recentpages'] = 'Skorije stranice';
$lang['admin']['groupname'] = 'Naziv grupe';
$lang['admin']['selectgroup'] = 'Izaberite grupu';
$lang['admin']['updateperm'] = 'Izmenite dozvole';
$lang['admin']['admincallout'] = 'Administratorske prečice';
$lang['admin']['showbookmarks'] = 'Prikaži administratorske prečice';
$lang['admin']['hide_help_links'] = 'Sakrij link ka pomoći za module';
$lang['admin']['hide_help_links_help'] = 'Čekirajte ovo da biste onemogućili prikazivanje linka ka pomoći za module u hederu stranica.';
$lang['admin']['showrecent'] = 'Prikaži stranice koje su skoro kori&scaron;ćene';
$lang['admin']['attachtotemplate'] = 'Poveži Stil sa &Scaron;ablonom';
$lang['admin']['attachstylesheets'] = 'Poveži Stilove';
$lang['admin']['indent'] = 'Naglasi hijerarhiju prilikom prikazivanja liste stranica';
$lang['admin']['adminindent'] = 'Prikaz sadržaja';
$lang['admin']['contract'] = 'Skupi sekciju';
$lang['admin']['expand'] = 'Pro&scaron;iri sekciju';
$lang['admin']['expandall'] = 'Pro&scaron;iri sve sekcije';
$lang['admin']['contractall'] = 'Skupi sve sekcije';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Globalna pode&scaron;avanja';
$lang['admin']['adminpaging'] = 'Broj stavki koje će se prikazivati po jednoj stranici prilikom prikazivanja liste stranica';
$lang['admin']['nopaging'] = 'Prikaži sve stavke';
$lang['admin']['myprefs'] = 'Moje preferencije';
$lang['admin']['myprefsdescription'] = 'Ovde možete podesiti administratorski deo sajta da radi onako kako Vi želite.';
$lang['admin']['myaccount'] = 'Moj nalog';
$lang['admin']['myaccountdescription'] = 'Ovde možete promeniti detalje Va&scaron;eg korisničkog naloga.';
$lang['admin']['adminprefs'] = 'Korisničke preferencije';
$lang['admin']['adminprefsdescription'] = 'Ovde pode&scaron;avate lične preferencije za administriranje sajtom.';
$lang['admin']['managebookmarksdescription'] = 'Ovde možete upravljati administratorskim prečicama.';
$lang['admin']['options'] = 'Opcije';
$lang['admin']['langparam'] = 'Parametar služi da bi se odredio jezik sajta (koji vide korisnici). Ovo pode&scaron;avanje nekim modulima nije potrebno, niti ga podržavaju.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Tip medijuma';
$lang['admin']['media_query'] = 'Medijski upit';
$lang['admin']['media_query_description'] = '<strong>Napomena:</strong> Kada se koristi Medijski Upit, izabrani Tip medija će biti zanemaren.<br /> Koristite bilo koji validni izraze preporučen od strane <a href="http://www.w3.org/TR/css3-mediaqueries/" rel="_blank" title="W3C">W3C</a>.';
$lang['admin']['mediatype_'] = 'None set : imaće efekta svuda';
$lang['admin']['mediatype_all'] = 'all : Pogodno za sve uređaje.';
$lang['admin']['mediatype_aural'] = 'aural : Namijenjeno za';
$lang['admin']['mediatype_braille'] = 'braille : Namenjeno brajevim taktilnim uređajima (pružaju povratne informacije putem dodira)';
$lang['admin']['mediatype_embossed'] = 'embossed : Namenjeno Brajevim emboserima (&scaron;tampačima za slepe) koji &scaron;tampaju na pojedinačne stranice';
$lang['admin']['mediatype_handheld'] = 'handheld : Namijenjeno <i>handheld</i> uređajima';
$lang['admin']['mediatype_print'] = 'print : Namenjeno za stranično segmentirane neprozirnie materijalima i za dokumente koji se pregledaju za &scaron;tampu na ekranu';
$lang['admin']['mediatype_projection'] = 'projection : Namenjeno za prezentaciju putem projektovanja - na primer projektorom ili &scaron;tampom na transparentne folije.';
$lang['admin']['mediatype_screen'] = 'screen : Namenjeno prvenstveno kolor kompjuterskim ekranima.';
$lang['admin']['mediatype_tty'] = 'tty : Namenjeno uređajima koji koriste fiksnu &scaron;irini karaktera, kao &scaron;to su teletajperi i terminali.';
$lang['admin']['mediatype_speech'] = 'speech : Namenjeno sintesajzerima govora.';
$lang['admin']['mediatype_tv'] = 'tv : Namenjeno uređajima TV tipa.';
$lang['admin']['assignmentchanged'] = 'Grupne dozvole su izmenjene.';
$lang['admin']['stylesheetexists'] = 'Stil postoji';
$lang['admin']['errorcopyingstylesheet'] = 'Gre&scaron;ka prilikom kopiranja Stila';
$lang['admin']['copystylesheet'] = 'Kopiraj Stil';
$lang['admin']['newstylesheetname'] = 'Novi naziv Stila';
$lang['admin']['target'] = 'Cilj';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL do ModuleRepository soap servera';
$lang['admin']['metadata'] = 'Meta podaci';
$lang['admin']['globalmetadata'] = 'Globalni meta podaci';
$lang['admin']['titleattribute'] = 'Opis (naziv)';
$lang['admin']['tabindex'] = 'Indeks kartice';
$lang['admin']['accesskey'] = 'Pristupni taster';
$lang['admin']['sitedownwarning'] = '<strong>Upozorenje:</strong> Va&scaron; sajt trenutno prikazuje posetiocima poruku da je zatvoren zbog održavanja. Uklonite %s datoteku da biste razre&scaron;ili ovu situaciju.';
$lang['admin']['deletecontent'] = 'Obri&scaron;i sadržaj';
$lang['admin']['deletepages'] = 'Da obri&scaron;em ove stranice?';
$lang['admin']['selectall'] = 'Označi sve';
$lang['admin']['selecteditems'] = 'Sa označenim';
$lang['admin']['inactive'] = 'Neaktivno';
$lang['admin']['deletetemplates'] = 'Obri&scaron;i &scaron;ablone';
$lang['admin']['templatestodelete'] = 'Ovi &scaron;abloni biće obrisani';
$lang['admin']['wontdeletetemplateinuse'] = 'Ovi &scaron;abloni su u upotrebi i neće biti izbrisani';
$lang['admin']['deletetemplate'] = 'Obri&scaron;i &scaron;ablone';
$lang['admin']['stylesheetstodelete'] = 'Ovi stilovi biće obrisani';
$lang['admin']['sitename'] = 'Naziv sajta';
$lang['admin']['goto'] = 'Nazad na:';
$lang['admin']['siteadmin'] = 'Administrator sajta';
$lang['admin']['images'] = 'Upravljanje slikama';
$lang['admin']['blobs'] = 'Blokovi globalnog sadržaja (BGS)';
$lang['admin']['groupmembers'] = 'Dodeljivanje grupama';
$lang['admin']['troubleshooting'] = '(Re&scaron;avanje problema)';
$lang['admin']['event_desc_loginpost'] = '&Scaron;alje se nakon &scaron;to se korisnik prijavi u administratorski deo.';
$lang['admin']['event_desc_logoutpost'] = '&Scaron;alje se nakon &scaron;to se korisnik odjavi iz administratorskog dela.';
$lang['admin']['event_desc_adduserpre'] = '&Scaron;alje se pre kreiranja novog korisnika';
$lang['admin']['event_desc_adduserpost'] = '&Scaron;alje se nakon kreiranja novog korisnika';
$lang['admin']['event_desc_edituserpre'] = '&Scaron;alje se pre nego &scaron;to se sačuvaju izmene na korisničkom nalogu';
$lang['admin']['event_desc_edituserpost'] = '&Scaron;alje se nakon &scaron;to se sačuvaju izmene na korisničkom nalogu';
$lang['admin']['event_desc_deleteuserpre'] = '&Scaron;alje se pre brisanja korisnika iz sistema';
$lang['admin']['event_desc_deleteuserpost'] = '&Scaron;alje se pre brisanja korisnika iz sistema';
$lang['admin']['event_desc_addgrouppre'] = '&Scaron;alje se pre kreiranja nove korisničke grupe';
$lang['admin']['event_desc_addgrouppost'] = '&Scaron;alje se nakon kreiranja nove korisničke grupe';
$lang['admin']['event_desc_changegroupassignpre'] = '&Scaron;alje se pre nego &scaron;to se sačuvaju grupne dozvole';
$lang['admin']['event_desc_changegroupassignpost'] = '&Scaron;alje se nakon snimanja grupnih dozvola';
$lang['admin']['event_desc_editgrouppre'] = '&Scaron;alje se pre nego &scaron;to se sačuvaju izmene na grupi';
$lang['admin']['event_desc_editgrouppost'] = '&Scaron;alje se nakon &scaron;to se sačuvaju izmene na grupi';
$lang['admin']['event_desc_deletegrouppre'] = '&Scaron;alje se pre brisanja korisničke grupe iz sistema';
$lang['admin']['event_desc_deletegrouppost'] = '&Scaron;alje se nakon brisanja korisničke grupe iz sistema';
$lang['admin']['event_desc_addstylesheetpre'] = '&Scaron;alje se pre kreiranja novog Stila';
$lang['admin']['event_desc_addstylesheetpost'] = '&Scaron;alje se nakon kreiranja novog Stila';
$lang['admin']['event_desc_editstylesheetpre'] = '&Scaron;alje se pre nego &scaron;to se sačuvaju izmene na Stilu';
$lang['admin']['event_desc_editstylesheetpost'] = '&Scaron;alje se nakon &scaron;to se sačuvaju izmene na Stilu';
$lang['admin']['event_desc_deletestylesheetpre'] = '&Scaron;alje se pre brisanja Stila iz sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = '&Scaron;alje se nakon brisanja Stila iz sistema';
$lang['admin']['event_desc_addtemplatepre'] = '&Scaron;alje se pre kreiranja novog &Scaron;ablona';
$lang['admin']['event_desc_addtemplatepost'] = '&Scaron;alje se nakon kreiranja novog &Scaron;ablona';
$lang['admin']['event_desc_edittemplatepre'] = '&Scaron;alje se pre nego &scaron;to se sačuvaju izmene na &Scaron;ablonu';
$lang['admin']['event_desc_edittemplatepost'] = '&Scaron;alje se nakon &scaron;to se sačuvaju izmene na &Scaron;ablonu';
$lang['admin']['event_desc_deletetemplatepre'] = '&Scaron;alje se pre brisanja &Scaron;ablona iz sistema';
$lang['admin']['event_desc_deletetemplatepost'] = '&Scaron;alje se nakon brisanja &Scaron;ablona iz sistema';
$lang['admin']['event_desc_templateprecompile'] = '&Scaron;alje se pre nego &scaron;to se &Scaron;ablon prosledi Smarty sistemu na obradu';
$lang['admin']['event_desc_templateprefetch'] = '&Scaron;alje se pre učitavanja &scaron;ablona iz smarty-ja';
$lang['admin']['event_desc_templatepostcompile'] = '&Scaron;alje se nakon &scaron;to je &Scaron;ablon prosleđen Smarty sistemu na obradu';
$lang['admin']['event_desc_addglobalcontentpre'] = '&Scaron;alje se pre kreiranja novog Globalnog Bloka Sadržaja';
$lang['admin']['event_desc_addglobalcontentpost'] = '&Scaron;alje se nakon kreiranja novog Globalnog Bloka Sadržaja';
$lang['admin']['event_desc_editglobalcontentpre'] = '&Scaron;alje se pre nego &scaron;to se snime izmene na GBS';
$lang['admin']['event_desc_editglobalcontentpost'] = '&Scaron;alje se nakon &scaron;to se snime izmene na GBS';
$lang['admin']['event_desc_deleteglobalcontentpre'] = '&Scaron;alje se pre brisanja BGS iz sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = '&Scaron;alje se nakon brisanja BGS iz sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = '&Scaron;alje se pre nego &scaron;to se BGS prosledi Smarty sistemu na obradu';
$lang['admin']['event_desc_globalcontentpostcompile'] = '&Scaron;alje se nakon &scaron;to Smarty sistem obradi BGS';
$lang['admin']['event_desc_contenteditpre'] = '&Scaron;alje se pre nego &scaron;to se izmene na sadržaju sačuvaju';
$lang['admin']['event_desc_contenteditpost'] = '&Scaron;alje se nakon &scaron;to se izmene na sadržaju sačuvaju';
$lang['admin']['event_desc_contentdeletepre'] = '&Scaron;alje se pre brisanja sadržaja iz sistema';
$lang['admin']['event_desc_contentdeletepost'] = '&Scaron;alje se nakon brisanja sadržaja iz sistema';
$lang['admin']['event_desc_contentstylesheet'] = '&Scaron;alje se pre nego &scaron;to se Stil prosledi Veb pretraživaču';
$lang['admin']['event_desc_contentprecompile'] = '&Scaron;alje se pre nego &scaron;to se sadržaj prosledi Smarty sistemu na obradu';
$lang['admin']['event_desc_contentpostcompile'] = '&Scaron;alje se nakon &scaron;to Smarty sistem obradi sadržaj';
$lang['admin']['event_desc_contentpostrender'] = '&Scaron;alje se pre nego &scaron;to se formirani HTML kod prosledi Veb pretraživaču';
$lang['admin']['event_desc_smartyprecompile'] = 'Poslato pre nego &scaron;to bilo koji sadržaj namenjen za Smarty je poslata za obradu';
$lang['admin']['event_desc_smartypostcompile'] = 'Poslato posle bilo kog sadržaja namenjen za Smarty obradu';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the group object.</li>
<li>&#039;users&#039; - Array of references to user objects belonging to the group.</li>';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
<li>&#039;users&#039; - Array of references to user objects now belonging to the affected group.</li>';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>';
$lang['admin']['event_help_templateprefetch'] = '<p>&Scaron;alje se pre učitavanja &scaron;ablona iz Smarty-ja.
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; (string reference) - Naziv &scaron;ablona.</li>
<li>&#039;cache_id&#039; (string reference) - ID ke&scaron;a &scaron;ablona (ako je primenljivo).</li>
<li>&#039;compile_id&#039; (string reference) - ID ke&scaron;a &scaron;ablona (ako je primenljivo).</li>
<li>&#039;display&#039; (integer reference) - Označava da li rezultat treba prikazati ili pridružiti nekoj promenljivoj.</li>
<li>&#039;no_output_filter&#039; (integer reference) - Indicates whether output filters should be applied.</li>
</ul>';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected content object.</li>
</ul>';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected stylesheet text.</li>
</ul>';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the html text.</li>
</ul>';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>';
$lang['admin']['filterbymodule'] = 'Filtriraj po modulima';
$lang['admin']['showall'] = 'Prikaži sve';
$lang['admin']['core'] = 'Jezgro';
$lang['admin']['defaultpagecontent'] = 'Podrazumevani sadržaj stranice';
$lang['admin']['file_url'] = 'Veza ka datoteci (umesto URL-a)';
$lang['admin']['no_file_url'] = 'Ni jedan (Koristi gornju URL adresu)';
$lang['admin']['defaultparentpage'] = 'Podrazumevana nadređena stranica';
$lang['admin']['error_udt_name_whitespace'] = 'Gre&scaron;ka: User Defined Tag-ovi ne mogu imati razmake u imenu.';
$lang['admin']['warning_safe_mode'] = '<strong><em>UPOZORENJE:</em></strong> <em>PHP Safe mode</em> je uključen.  Ovo će prouzrokovati probleme sa datotekama koje su otpremljene preko interfejsa Veb pretraživača, uključujući slike i XML pakete sa temama i modulima. Savetujemo Vam da kontaktirate svog administratora sajta i da skupa razmotrite isključivanje <em>PHP Safe mode</em> opcije.';
$lang['admin']['test'] = 'Proba';
$lang['admin']['results'] = 'Rezultati';
$lang['admin']['untested'] = 'Nije testirano';
$lang['admin']['unknown'] = 'Nepoznato';
$lang['admin']['download'] = 'Preuzimanje';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG editor korisničkog dela';
$lang['admin']['backendwysiwygtouse'] = 'Podrazumevani WYSIWYG editor za administratorski deo (za novokreirane korisnike)';
$lang['admin']['all_groups'] = 'Sve grupe';
$lang['admin']['error_type'] = 'Tip gre&scaron;ke';
$lang['admin']['contenttype_errorpage'] = 'Stranica za gre&scaron;ku';
$lang['admin']['errorpagealreadyinuse'] = 'Kod gre&scaron;ke je već u upotrebi';
$lang['admin']['404description'] = 'Stranica nije pronađena';
$lang['admin']['usernotfound'] = 'Korisnik nije pronađen.';
$lang['admin']['passwordchange'] = 'Unesite novu lozinku';
$lang['admin']['recoveryemailsent'] = 'E-mail poslat na odgovarajuću adresu. Molimo proverite po&scaron;tansko sanduče za dalja uputstva.';
$lang['admin']['errorsendingemail'] = 'Do&scaron;lo je do gre&scaron;ke prilikom slanja e-po&scaron;te. Obratite se administratoru.';
$lang['admin']['passwordchangedlogin'] = 'Lozinka promenjena. Molimo Vas prijavite se koristeći nove akreditive.';
$lang['admin']['nopasswordforrecovery'] = 'E-mail adresa nije navedena za ovog korisnika.  Povraćaj lozinke nije moguć. Molimo kontaktirajte svog administratora.';
$lang['admin']['lostpw'] = 'Zaboravili ste lozinku?';
$lang['admin']['lostpwemailsubject'] = 'Povraćaj lozinke za sajt [%s]';
$lang['admin']['lostpwemail'] = 'Primili ste ovu poruku zato &scaron;to je na sajtu &#039;&#039;%s&#039;&#039; podnet zahtev za promenu lozinke povezane sa korisničkim imenom &#039;&#039;%s&#039;&#039;. Ukoliko želite da resetujete lozinku za ovaj korisnički nalog, jednostavno kliknite na donji link ili ga kopirajte i prebacite u svoj omiljeni Veb pretraživač:

%s

Ukoliko smatrate da je ovo neka zabuna ili da je do&scaron;lo do gre&scaron;ke, prosto ignori&scaron;ite ovu poruku i ni&scaron;ta se neće promeniti.';
$lang['admin']['utma'] = '156861353.114482514.1383506026.1383506026.1383510479.2';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1383506026.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['admin']['utmb'] = '156861353';
?>
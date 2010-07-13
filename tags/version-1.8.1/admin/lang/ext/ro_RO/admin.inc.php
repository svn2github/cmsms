<?php
$lang['admin']['listtemplates_pagelimit'] = 'Numar de randuri per pagina la vizualizare template-uri';
$lang['admin']['liststylesheets_pagelimit'] = 'Numar de randuri per pagina la vizualizare stylesheet-uri';
$lang['admin']['listgcbs_pagelimit'] = 'Numar de randuri per pagina la vizualizare Blocuri Continut Global';
$lang['admin']['insecure'] = 'Insecurizat (HTTP)';
$lang['admin']['secure'] = 'Securizat (HTTPS)';
$lang['admin']['secure_page'] = 'Folosire HTTPS pentru aceasta pagina';
$lang['admin']['thumbnail_width'] = 'Latime Miniatura';
$lang['admin']['thumbnail_height'] = 'Inaltime Miniatura';
$lang['admin']['E_STRICT'] = 'Este E_STRICT dezactivat in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT este activat inUnel error_reporting';
$lang['admin']['info_estrict_failed'] = 'e din librariile folosite de CMSMS nu functioneaza bine cu E_STRICT. Dezactivati aceasta optiune inainte de a continu';
$lang['admin']['E_DEPRECATED'] = 'Este E_DEPRECATED dezactivat in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED este activat';
$lang['admin']['info_edeprecated_failed'] = 'Daca E_DEPRECATED este activat in error reporting utilizatorii vor vedea o multime de mesaje de avertizare care pot afecta aspectul si functionalitatea sitului';
$lang['admin']['session_use_cookies'] = 'Sesiunile folosesc cookie-uri';
$lang['admin']['errorgettingcontent'] = 'Nu s-au putut obtine informatii pentru obiectul de continut specificat';
$lang['admin']['errordeletingcontent'] = 'Eroare la stergere continut (fie aceasta pagina are copii fie este continutul implicit)';
$lang['admin']['invalidemail'] = 'Adresa de e-mail introdusa este invalida';
$lang['admin']['info_deletepages'] = 'Nota: din cauza restrictiilor legate de permisiuni, o parte din paginile selectate pentru stergere e posibil sa nu fie listate mai jos';
$lang['admin']['info_pagealias'] = 'Specificati un alias unic pentru aceasta pagina.';
$lang['admin']['info_autoalias'] = 'Daca acest camp este gol, un alias va fi creat in mod automat.';
$lang['admin']['invalidparent'] = 'Trebuie sa selectati o pagina parinte (contactati administratorul daca nu vedeti aceasta optiune).';
$lang['admin']['forgotpwprompt'] = 'Introduceti nume utilizator administrator.  Un e-mail va fi trimis catre adresa asociata continand noile informatii de autentificare';
$lang['admin']['info_basic_attributes'] = 'Acest camp va permite sa specificati care proprietati de continut pe care utilizatorii fara pemisiunea &quot;Management tot Continutul&quot; au voie sa le editeze.';
$lang['admin']['basic_attributes'] = 'Proprietati de baza';
$lang['admin']['no_permission'] = 'Nu aveti permisiuni pentru efectuarea acestei functii.';
$lang['admin']['bulk_success'] = 'Operatiunea in grup a fost actualizata cu succes.';
$lang['admin']['no_bulk_performed'] = 'Nu a fost efectuata nici o operatiune in grup.';
$lang['admin']['info_preview_notice'] = 'Atentie: Acest panou de previzualizare se comporta cam ca o fereastra de browser permitandu-va sa navigati in afara paginii previzualizate initial. Totusi, daca faceti asta, puteti intalni comportamente neasteptate. Daca navigati in afara paginii si va intoarceti, este posibil sa nu vedeti continutul care nu a fost publicat inca pana nu faceti modificari la continut in tabul principal, si apoi reincarcati acest tab. Cand adaugati continut, daca navigati in afara acestei pagini, nu veti putea sa va intoarceti la ea si va trebui sa reimprospatati acest panou.';
$lang['admin']['sitedownexcludes'] = 'Excludeti aceste adrese de la afisare Mesaj de Mentenanta';
$lang['admin']['info_sitedownexcludes'] = 'Acest parametru permite listarea unei liste de adrese IP sau adrese de retea separate prin virgula care nu ar trebui sa fie afectate de mecanismul Mesaj de Mentenanta. Permite administratorilor sa lucreze la site cat timp vizitatorii normali primesc mesajul de mentenanta.<br/><br/>Adresele pot fi specificate in urmatoarele formate:<br/>
1. xxx.xxx.xxx.xxx -- (adresa IP exacta)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (interval de adrese IP)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = numar de bits, cisco style.  ex.:  192.168.0.100/24 = intreaga subretea 192.168.0 clasa C)';
$lang['admin']['setup'] = 'Setari avansate';
$lang['admin']['handle_404'] = 'Mesaj 404 custom';
$lang['admin']['sitedown_settings'] = 'Setari mentenanta';
$lang['admin']['general_settings'] = 'Setari generale';
$lang['admin']['help_function_page_attr'] = '<h3>Ce face aceasta?</h3>
<p>Acest tag poate fi folosit pentru a returna valoarea atributelor pentru o pagina anume.</p>
<h3>Cum se foloseste?</h3>
<p>Inserati tagul in template astfel: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Ce parametri primeste?</h3>
<ul>
  <li><strong>key [required]</strong> Cheia careia i se returneaza atributul.</li>
</ul>';
$lang['admin']['forge'] = 'CMSMS Forge';
$lang['admin']['disable_wysiwyg'] = 'Dezactivare editor WYSIWYG in aceasta pagina (indiferent de template sau setari utilizator)';
$lang['admin']['help_function_page_image'] = '<h3>Ce face aceasta?</h3>
<p>Acest tag poate fi folosit pentru returnarea imaginii sau a unui camp de miniaturi pentru o pagina anume.</p>
<h3>Cum se foloseste?</h3>
<p>Inserati tagul in template astfel: <code>{page_image}</code>.</p>
<h3>Ce parametri primeste?</h3>
<ul>
  <li>thumbnail - Optional afiseaza miniatura in loc de imagine mare.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Un link catre o pagina nu poate avea ca destinatie un alt link';
$lang['admin']['destinationnotfound'] = 'Pagina selectata nu a putut fi gasita sau este invalida';
$lang['admin']['help_function_dump'] = '<h3>Ce face aceasta?</h3>
  <p>Acest tag poate fi folosit pentru a afisa continutul oricarei variabile smarty formatat intr-o forma mai usor de citit. Este util pentru debugging si editare de template-uri, pentru a sti formatul si tipul de date disponibile.</p>
<h3>Cum se foloseste?</h3>
<p>Inserati tagul in template astfel: <code>{dump item=&#039;variabila_smarty&#039;}</code>.</p>
<h3>Ce parametri primeste?</h3>
<ul>
<li><strong>item (required)</strong> - Variabila smarty a carei continut se afiseaza.</li>
<li>maxlevel - Numarul maxim de nivele de recursiune (se aplica numai daca se furnizeaza recurse. Valoarea implicita este 3</li>
<li>nomethods - Nu se afiseaza metodele obiectelor.</li>
<li>novars - Nu se afiseaza membrii obiectelor.</li>
<li>recurse - Se face recursiune un numar maxim de nivele traversand obiectele si oferind output complet pentru fiecare obiect pana cand se atinge numarul maxim de nivele.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Eroare SQL in %s';
$lang['admin']['image'] = 'Imagine';
$lang['admin']['thumbnail'] = 'Miniatura';
$lang['admin']['searchable'] = 'Se permite cautare in aceasta pagina';
$lang['admin']['help_function_content_image'] = '<h3>Ce face aceasta?</h3>
<p>Acest plugin permite designerilor de template-uri sa ceara utilizatorilor sa selecteze un fisier imagine cand se editeaza continutul unei pagini. Se comporta la fel ca plugin-ul de continut, pentru blocuri aditionale de continut.</p>
<h3>Cum se foloseste?</h3>
<p>Inserati tagul in template pagina astfel: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Ce parametri primeste?</h3>
<ul>
  <li><strong>(required)</strong> block - Numele acestui bloc aditional de continut.
  <p>Exemplu:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - O eticheta sau dialog pentru acest bloc de continut in pagina de editare continut. Daca nu este specifict, se va folosi numele blocului.</li>
 
  <li><em>(optional)</em> dir - Numele unui folder (relativ la folderul uploads, din care se selecteaza imaginile. Daca nu se specifica, se va folosi folderul uploads.
  <p>Exemplu: folosire imagini din uploads/imagini .</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;imagini&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - Clasa css care se va folosi pentru tagul img pentru afisare in frontend site.</li>

  <li><em>(optional)</em> id - Nume id care se va folosi pentru tagul img pentru afisare in frontend site.</li> 

  <li><em>(optional)</em> name - Numele tagului care se va folosi pentru tagul img pentru afisare in frontend site.</li> 

  <li><em>(optional)</em> width - Latimea dorita a imaginii.</li>

  <li><em>(optional)</em> height - Inaltimea dorita a imaginii.</li>

  <li><em>(optional)</em> alt - Text alternativ daca nu se gaseste imaginea.</li>
  <li><em>(optional)</em> urlonly - Afisare numai url imagine, ignorand toti parametrii id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Un nume UDT valid incepe cu o litera sau underscore, urmata de orice numar de litere, numere sau underscore.';
$lang['admin']['errorupdatetemplateallpages'] = 'Template-ul nu este activ';
$lang['admin']['hidefrommenu'] = 'Ascundere din meniu';
$lang['admin']['settemplate'] = 'Setare Template';
$lang['admin']['text_settemplate'] = 'Setare pagini selectate catre un alt Template';
$lang['admin']['cachable'] = 'Poate fi pastrat in cache';
$lang['admin']['noncachable'] = 'Nu se pastreaza in cache';
$lang['admin']['copy_from'] = 'Copiere de la';
$lang['admin']['copy_to'] = 'Copiere la';
$lang['admin']['copycontent'] = 'Copiere continut obiect';
$lang['admin']['md5_function'] = 'functie md5';
$lang['admin']['tempnam_function'] = 'functie tempnam';
$lang['admin']['register_globals'] = 'register_globals PHP';
$lang['admin']['output_buffering'] = 'output_buffering PHP';
$lang['admin']['disable_functions'] = 'disable_functions PHP';
$lang['admin']['xml_function'] = 'Suport de baza XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes pentru Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote si backslash sunt mascate automat. Puteti avea probleme cand salvati template-uri';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes la runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Cele mai multe functii care returneaza date vor avea ghilimelele mascate cu un backslash. Pot aparea probleme';
$lang['admin']['file_get_contents'] = 'Testare file_get_contents';
$lang['admin']['check_ini_set'] = 'Testare ini_set';
$lang['admin']['check_ini_set_off'] = 'Puteti avea dificultati cu unele functionalitati fara aceasta capabilitate. Acest test poate pica daca safe_mode este activat';
$lang['admin']['file_uploads'] = 'Upload fisiere';
$lang['admin']['test_remote_url'] = 'Testare pentru URL remote';
$lang['admin']['test_remote_url_failed'] = 'Probabil nu veti putea deschide fisiere de pe web servere la distanta.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Cand allow url fopen este dezactivat nu veti putea accesa obiecte URL cum ar fi fisiere utilizand protocoalele ftp sau http.';
$lang['admin']['connection_error'] = 'Conexiunile http spre extern nu par sa functioneze! Aveti un firewall sau ACL-uri pentru conexiuni externe? Acest lucru va face ca managerul de module si poate si alte functionalitati sa nu functioneze.';
$lang['admin']['remote_connection_timeout'] = 'Conexiune Timed Out!';
$lang['admin']['search_string_find'] = 'Conexiune ok!';
$lang['admin']['connection_failed'] = 'Conexiune esuata!';
$lang['admin']['remote_response_ok'] = 'Raspuns Remote: ok!';
$lang['admin']['remote_response_404'] = 'Raspuns Remote: nu a fost gasit!';
$lang['admin']['remote_response_error'] = 'Raspuns Remote: eroare!';
$lang['admin']['notifications_to_handle'] = 'Aveti <b>%d</b> notificari nerezolvate';
$lang['admin']['notification_to_handle'] = 'Aveti <b>%d</b> notificare nerezolvata';
$lang['admin']['notifications'] = 'Notificari';
$lang['admin']['dashboard'] = 'Vedeti Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorare notificari de la aceste module';
$lang['admin']['admin_enablenotifications'] = 'Se permite utilizatorilor sa vada notificari<br/><em>(notificarile vor fi afisate in toate paginile de administrare)</em>';
$lang['admin']['enablenotifications'] = 'Activare notificaari utilizatori in aria de administrare';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions sunt in efect. Puteti avea dificultati cu unele functinalitati care tin de addon-uri cu aceasta restrictie';
$lang['admin']['config_writable'] = 'Se poate scrie in config.php. Este mai sigur daca schimbati permisiunile in read-only';
$lang['admin']['caution'] = 'Atentie';
$lang['admin']['create_dir_and_file'] = 'Verificaare daca procesul httpd poate crea un fisier intr-un folder pe care l-a creat';
$lang['admin']['os_session_save_path'] = 'Fara verificare din cauza ca OS path';
$lang['admin']['unlimited'] = 'Nelimitat';
$lang['admin']['open_basedir'] = 'Open Basedir PHP';
$lang['admin']['open_basedir_active'] = 'Fara verificare pentru ca open basedir este activ';
$lang['admin']['invalid'] = 'Invalid(a)';
$lang['admin']['checksum_passed'] = 'Toate checksum-urile corespund cu cele din fisierele uploadate';
$lang['admin']['error_retrieving_file_list'] = 'Eroare la alcatuire lista de fisiere';
$lang['admin']['files_checksum_failed'] = 'Fisierele nu au putut fi verificate pentru checksum';
$lang['admin']['failure'] = 'Esec';
$lang['admin']['help_function_process_pagedata'] = '<h3>Ce face aceasta?</h3>
<p>Acest plugin va procesa datele din blocul &quot;pagedata&quot; al continutului paginilor prin smarty. Permite sa specificati date specifice unei pagini catre smarty fara a schimba template-ul pentru fiecare pagina.</p>
<h3>Cum se foloseste?</h3>
<ol>
  <li>Inserati smarty assign variables si logica smarty in campul pagedata in paginile unde doriti acest lucru.</li>
  <li>Inserati tagul <code>{process_pagedata}</code> chiar la inceputul template-ului de pagina.</li>
</ol>
<br/>
<h3>Ce parametri primeste?</h3>
<p>Nici unul in acest moment</p>';
$lang['admin']['page_metadata'] = 'Metadate specifice pagina';
$lang['admin']['pagedata_codeblock'] = 'Date sau logica smarty care sunt specifice pentru aceasta pagina';
$lang['admin']['error_uploadproblem'] = 'O eroare a aparut in timpul upload-ului';
$lang['admin']['error_nofileuploaded'] = 'Nici un fisier nu a fost uploadat';
$lang['admin']['files_failed'] = 'Unele fisiere au picat verificarea md5sum';
$lang['admin']['files_not_found'] = 'Nu s-au gasit fisiere';
$lang['admin']['info_generate_cksum_file'] = 'Aceasta functie va permite sa generati un fisier checksum si sa il salvati pe computerul dumneavoastra local pentru validare ulterioara. Acest lucru ar trebui facut chiar inainte de urcare site pe serverul live, si/sau dupa orice fel de upgrade-uri sau modificari majore.';
$lang['admin']['info_validation'] = 'Aceasta functie va compara checksum-urile gasite in fisierele uploadate cu cele din fisierele din instalarea curenta. Va poate ajuta sa gasiti probleme cu uploadurile , sau exact care fisiere au fost modificate daca site-ul a fost modificat (hack-uit). Un fisier checksum este generat pentru fiecare release al CMS Made Simple incepand cu versiunea 1.4.';
$lang['admin']['download_cksum_file'] = 'Download fisier checksum';
$lang['admin']['perform_validation'] = 'Efectuare Validare';
$lang['admin']['upload_cksum_file'] = 'Upload fisier checksum';
$lang['admin']['checksumdescription'] = 'Validati integritatea fisierelor CMS-ului comparandu-le cu checksum-uri cunoscute';
$lang['admin']['system_verification'] = 'Verificare sistem';
$lang['admin']['extra1'] = 'Atribut Pagina Extra 1';
$lang['admin']['extra2'] = 'Atribut Pagina Extra 2';
$lang['admin']['extra3'] = 'Atribut Pagina Extra 3';
$lang['admin']['start_upgrade_process'] = 'Start proces Upgrade';
$lang['admin']['warning_upgrade'] = '<em><strong>Atentie:</strong></em> CMSMS are nevoie de upgrade.';
$lang['admin']['warning_upgrade_info1'] = 'In acest moment folositi versiune schema %s. si trebuie sa fiti upgradat la versiunea %s';
$lang['admin']['warning_upgrade_info2'] = 'Dati clic pe urmatorul link: %s.';
$lang['admin']['warning_mail_settings'] = 'Setarile dumneavoastra de e-mail nu au fost configurate. Acest lucru ar putea sa impiedice site-ul sa trimita mesaje e-mail. Puteti merge la <a href="%s">Extensii >> CMSMailer</a> si sa configurati setarile de e-mail cu informatiile oferite de hostul dumneavoastra.';
$lang['admin']['view_page'] = 'Vedeti aceasta pagina in fereastra noua';
$lang['admin']['off'] = 'Oprit';
$lang['admin']['on'] = 'Pornit';
$lang['admin']['invalid_test'] = 'Valoare parametru de test invalida!';
$lang['admin']['copy_paste_forum'] = 'Vedeti raport text <em>(potrivit pentru copiere in postari pe forum)</em>';
$lang['admin']['permission_information'] = 'Informatii permisiuni';
$lang['admin']['server_os'] = 'Sistem Operare Server';
$lang['admin']['server_api'] = 'API Server';
$lang['admin']['server_software'] = 'Software Server';
$lang['admin']['server_information'] = 'Informatii Server';
$lang['admin']['session_save_path'] = 'Cale salvare sesiuni';
$lang['admin']['max_execution_time'] = 'Timp maxim de executie';
$lang['admin']['gd_version'] = 'Versiune GD';
$lang['admin']['upload_max_filesize'] = 'Dimensiune maxima upload';
$lang['admin']['post_max_size'] = 'Dimensiune maxima Post';
$lang['admin']['memory_limit'] = 'Limita efectiva memorie PHP';
$lang['admin']['server_db_type'] = 'Server Baza de date';
$lang['admin']['server_db_version'] = 'Versiune Server Baza de date';
$lang['admin']['phpversion'] = 'Versiune curenta PHP';
$lang['admin']['safe_mode'] = 'Mod Safe Mode PHP';
$lang['admin']['php_information'] = 'Informatii PHP';
$lang['admin']['cms_install_information'] = 'Informatii instalare CMS';
$lang['admin']['cms_version'] = 'Versiune CMS';
$lang['admin']['installed_modules'] = 'Module instalate';
$lang['admin']['config_information'] = 'Informatii configurare';
$lang['admin']['systeminfo_copy_paste'] = 'Dati copy si paste acest text selectat in postarea dumneavoastra de pe forum';
$lang['admin']['help_systeminformation'] = 'Informatiile afisate mai jos sunt adunate dintr-o varietate de locatii si sumarizate aici pentru ca dumneavoastra sa gasiti rapid o parte din informatiile necesare atunci cand incercati sa diagnosticati o problema sau sa cereti ajutor cu instalarea dumneavoastra de CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Informatii sistem';
$lang['admin']['systeminfodescription'] = 'Afiseaza variate informatii despre sistemul dumneavoastra care ar putea fi utile in diagnosticarea problemelor';
$lang['admin']['welcome_user'] = 'Bine ati venit';
$lang['admin']['itsbeensincelogin'] = '%s de la ultima autentificare';
$lang['admin']['days'] = 'zile';
$lang['admin']['day'] = 'zi';
$lang['admin']['hours'] = 'ore';
$lang['admin']['hour'] = 'ora';
$lang['admin']['minutes'] = 'minute';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Acest parametru ar trebui setat la un nivel relativ inalt pentru situri statice, si ar tebui sa fie 0 pentru dezvoltare site.';
$lang['admin']['css_max_age'] = 'Durata maxima de timp (secunde) pentru care stylesheet-urile pot fi pastrate in cache de catre browser.';
$lang['admin']['error'] = 'Eroare';
$lang['admin']['clear_version_check_cache'] = 'Golire orice informatie verificare versiune din cache la trimitere';
$lang['admin']['new_version_available'] = '<em>Notificare:</em> O verisune noua de CMS Made Simple este disponibila.  Va rugam sa notificati administratorul site-ului.';
$lang['admin']['info_urlcheckversion'] = 'Daca acest url este cuvantul &amp;quot;none&amp;quot; nu se va efectua nici o verificare.<br/>Un sir gol va rezulta in folosirea unui URL implicit.';
$lang['admin']['urlcheckversion'] = 'Verificare versiuni noi CMS Made Simple folosind acest URL';
$lang['admin']['master_admintheme'] = 'Tema implicita administrare (pentru pagina de autentificare si conturi noi utilizatori)';
$lang['admin']['contenttype_separator'] = 'Separator ';
$lang['admin']['contenttype_sectionheader'] = 'Header sectiune';
$lang['admin']['contenttype_link'] = 'Link extern';
$lang['admin']['contenttype_content'] = 'Continut';
$lang['admin']['contenttype_pagelink'] = 'Link pagina interna';
$lang['admin']['nogcbwysiwyg'] = 'Nu se permite folosirea de editoare WYSIWYG in blocuri continut global';
$lang['admin']['destination_page'] = 'Pagina destinatie';
$lang['admin']['additional_params'] = 'Parametri aditionali';
$lang['admin']['help_function_current_date'] = '	<h3>Ce face acesta?</h3>
	<p>Imprima data si ora curenta.  Daca nu este dat un format, se va folosi un format similar cu &#039;Jan 01, 2004&#039;.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in sablon /pagina astfel: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Ce parametri primeste?</h3>
	<ul>
		<li><em>(optional)</em>format - Data/Ora format folosind parametri de la functia php&#039;s strftime.  Vedeti <a href="http://php.net/strftime" target="_blank">aici</a>pentru o lista parametri si informatii</li>
		<li><em>(optional)</em>ucword - Daca e setat adevarat, intoarce prima litera a fiecarui cuvant se transforma in majuscula</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Ce face aceasta?</h3>
<p>Afiseaza un link la w3c HTML validator.</p>
<h3>Cum o folosesc?</h3>
<p>Introduceti eticheta in sablon /pagina astfel: <code>{valid_xhtml}</code></p>
<h3>Ce parametri primeste?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url (string) - URL-ul folosit pentru validare, daca nu este nici unul dat, se foloseste http://validator.w3.org/check/referer .</li>
	<li><em>(optional)</em> class (string) - Daca este setat, se va folosi ca si atribut de clasa CSS pentru link (a)</li>
	<li><em>(optional)</em> target (string) - Daca e setat, acesta va fi folosit ca atribut target  pentru elementul linkului (a) </li>
	<li><em>(optional)</em> image (true/false) - Daca e setat fals, se va afisa un link text in loc de cel implicit de tip imagine.</li>
	<li><em>(optional)</em> text (string) - Daca e setat, acesta va fi folosit pentru textul linkului sau ca text alternativ pentru imagine. Implicit este Valid XHTML 1.0 Transitional.<br /> Cand o imagine este folosita, stringul dat  va fi cel folosit ca alt (implicit, acest parametru poate fi suprascris folosind parametrul &#039;alt&#039;).</li>
	<li><em>(optional)</em> image_class (string) - Numai daca &#039;image&#039; nu este setat ca fals. Se foloseste pentru atribuirea unei clase CSS elementului (img)</li>
	<li><em>(optional)</em> src (string) - Numai daca &#039;image&#039; nu este setat ca fals. Iconita care va fi afisata. Implicit este http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width (string) - Numai daca &#039;image&#039; nu este setat ca fals. Latimea imaginii. Implicit este 88 (latimea imaginii http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height (string) - Numai daca &#039;image&#039; nu este setat ca fals. Inaltimea imaginii. Implicit este 31 (inaltimea imaginii http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt (string) - Numai daca &#039;image&#039; nu este setat ca fals. Text alternativ (atributul &#039;alt&#039;) pentru imagine (elementul). Daca nu se specifica se foloseste textul link-ului.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>Ce face aceasta?</h3>
<p>Afiseaza un link catre w3c CSS validator.</p>
<h3>Cum se foloseste?</h3>
<p>Introduceti eticheta in sablon /pagina astfel: <code>{valid_css}</code></p>
<h3>Ce parametri primeste?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url (string) - URL-ul folosit pentru validare, daca nu este nici unul dat, se foloseste http://jigsaw.w3.org/css-validator/check/referer .</li>
	<li><em>(optional)</em> class (string) - Daca este setat, se va folosi ca si atribut de clasa CSS pentru link (a)</li>
	<li><em>(optional)</em> target (string) - Daca e setat, acesta va fi folosit ca atribut target  pentru elementul linkului (a)</li>
	<li><em>(optional)</em> image (true/false) - Daca e setat fals, se va afisa un link text in loc de cel implicit de tip imagine.</li>
	<li><em>(optional)</em> text (string) - Daca e setat, acesta va fi folosit pentru textul link-ului sau ca text alternativ pentru imagine. Implicit este &#039;Valid CSS 2.1&#039;.<br />  Cand o imagine este folosita, stringul dat  va fi cel folosit ca alt (implicit, acest parametru poate fi suprascris folosind parametrul &#039;alt&#039;).</li>
	<li><em>(optional)</em> image_class (string) - Numai daca &#039;image&#039; nu este setat ca fals. Se foloseste pentru atribuirea unei clase CSS elementului (img)</li>
        <li><em>(optional)</em> src (string) - Numai daca &#039;image&#039; nu este setat ca fals. Iconita care va fi afisata. Implicit este http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width (string) - Numai daca &#039;image&#039; nu este setat ca fals. Latimea imaginii. Implicit este 88 (latimea imaginii http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height (string) - Numai daca &#039;image&#039; nu este setat ca fals. Inaltimea imaginii. Implicit este 31 (inaltimea imaginii http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt (string) - Numai daca &#039;image&#039; nu este setat ca fals. Text alternativ (atributul &#039;alt&#039;) pentru imagine (elementul). Daca nu se specifica se foloseste textul link-ului.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>Ce face aceasta?</h3>
	<p>Afiseaza titlul paginii.</p>
	<h3>Cum se foloseste?</h3>
	<p>introduceti eticheta in template/pagina astfel: <code>{title}</code></p>
	<h3>Ce paramteri primeste?</h3>
	<p><em>(optional)</em> assign (string) - Aloca rezultatul unei variabile smarty cu acel nume.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Ce face aceasta?</h3>
	<p>Obtine informatiile despre stylesheet-uri de la sistem. Implicit, ia toate stylesheet-urile atasate template-ului curent.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in template/pagina in sectiunea head astfel: <code>{stylesheet}</code></p>
	<h3>Ce parametri primeste?</h3>
	<ul>
		<li><em>(optional)</em>name - In loc sa aduca toate stylesheet-urile pentru pagina data, se va duce numai unul anume, fie ca este atasat template-ului curent sau nu.</li>
		<li><em>(optional)</em>media - Daca numele este definit, permite sa setati un tip de media diferit pentru acel stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '        <h3>Ce face aceasta?</h3>
	<p>Foloseste Javascript pentru a permite continutului dintr-o zona sa fie expandaabil si colapsabil la clic de mouse.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in template/pagina astfel:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Clic aici&quot;}<br />
	Acesta este continutul pe care utilizatorul il va vedea cand da clic pe titlul &quot;Clic aici&quot; de mai sus. Se va afisa tot continutul care este intre {startExpandCollapse} si {stopExpandCollapse} la clic.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Nota: Daca intentionati sa folositi acest cod de mai multe ori in o singura pagina, fiecare eticheta startExpandCollapse trebuie sa aiba un id unic.</p>
	<h3>Pai si daca vreau sa schimb aspectul titlului?</h3>
	<p>Aspectul poate fi schimbat via css. Titlul este plasat intr-un div cu id-ul specificat de dumneavoastra.</p>

	<h3>Ce parametri primeste?</h3>
	<p>
	<i>startExpandCollapse primeste urmatorii parametri:</i><br />
	&nbsp; &nbsp;id - Un id unic pentru sectiunea de expandare/colapsare.<br />
	&nbsp; &nbsp;title - Textul care va fi afisat pentru a expanda/colapsa continutul.<br />
	<i>stopExpandCollapse nu primeste parametri.</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '        <h3>Ce face aceasta?</h3>
	<p>Foloseste Javascript pentru a permite continutului dintr-o zona sa fie expandaabil si colapsabil la clic de mouse.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in template/pagina astfel:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Clic aici&quot;}<br />
	Acesta este continutul pe care utilizatorul il va vedea cand da clic pe titlul &quot;Clic aici&quot; de mai sus. Se va afisa tot continutul care este intre {startExpandCollapse} si {stopExpandCollapse} la clic.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Nota: Daca intentionati sa folositi acest cod de mai multe ori in o singura pagina, fiecare eticheta startExpandCollapse trebuie sa aiba un id unic.</p>
	<h3>Pai si daca vreau sa schimb aspectul titlului?</h3>
	<p>Aspectul poate fi schimbat via css. Titlul este plasat intr-un div cu id-ul specificat de dumneavoastra.</p>

	<h3>Ce parametri primeste?</h3>
	<p>
	<i>startExpandCollapse primeste urmatorii parametri:</i><br />
	&nbsp; &nbsp;id - Un id unic pentru sectiunea de expandare/colapsare.<br />
	&nbsp; &nbsp;title - Textul care va fi afisat pentru a expanda/colapsa continutul.<br />
	<i>stopExpandCollapse nu primeste parametri.</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notificare</h3>
    <p>Acest plugin este depreciat. Utilizatorii ar trebui sa foloseasca <code>{site_mapper}</code>.</p>
    <h3>Ce face aceasta?</h3>
    <p>Afiseaza un sitemap.</p>
    <h3>Cum se foloseste?</h3>
    <p>Introduceti eticheta in template/pagina astfel: <code>{sitemap}</code></p>
    <h3>Ce parametri primeste?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - O clasa css pentru tagul ul care cuprinde intregul sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - Ierarhia elementului de start (ex : 1.2 sau 3.5.1). Acest parametru seteaza radacina meniului. Se poate folosi aliasul paginii in loc de ierarhie.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - Un numar intreg, numarul de nivele pe care doriti sa le afisati in meniu. Ar trebui setat la 2 folosind un delimitator.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text pentru a separa intrari in alt nivel decat 1 al sitemap-ului (ex. 1.1, 1.2). Este util pentru a afisa intrari in nivel 2 una in continuarea celeilalte (folosind css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - Daca e setat 1, se incep de asemenea primele intrari in alt nivel decat 1 cu un delimitator (ex. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - Nu vom afisa pagina curenta (cu sitemap-ul) - vom afisa doar descendentii paginii.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - Vom afisa toate paginile daca showall este activat, altfel se vor afisa numai paginile cu intrari active de meniu.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - O lista separata prin virgula de aliasuri care vor fi adaugate paginilor afisate cu intrari active de meniu (daca showall nu este activat).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>Ce face aceasta?</h3>
	<p>Google adsense este un program de publicitate popular pentru situri. Aceasta eticheta va primi parametrii de baza care se dau in programul adsense si ii pune intr-o eticheta usor de folosit pentru a face template-urile mult mai curate.  Vedeti <a href="http://www.google.com/adsense" target="_blank">aici</a> mai multe detalii despre adsense.</p>
	<h3>Cum se foloseste?</h3>
	<p>Mai intai, inscrieti-va pentru un cont google adsense si luati parametrii pentru anunturi. Apoi folositi tagul in template/pagina astfel: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>Ce parametri primeste?</h3>
	<p>Toti parametrii sunt optionali, desi daca sariti din ei e posibil ca anunturile sa nu functioneze corect.  Optiunile sunt:
	<ul>
		<li>ad_client - Acesta este ID-ul pub_random# care reprezinta numarul dumneavoastra de cont adsense</li>
		<li>ad_width - latimea anuntului</li>
		<li>ad_height - inaltimea anuntului</li>
		<li>ad_format - &quot;formatul&quot; anuntului <em>ex. 120x600_as</em></li>
		<li>ad_channel - canalele sunt o caracteristica avansata a adsense. Se pune daca o folositi.</li>
		<li>ad_type - variante posibile sunt text, image sau text_image.</li>
		<li>color_border - culoare border. Folositi culoare HEX sau scrieti numele culorii (Ex. Red)</li>
		<li>color_link - culoare text link. Folositi culoare HEX sau scrieti numele culorii (Ex. Red)</li>
		<li>color_url - culoare URL. Folositi culoare HEX sau scrieti numele culorii (Ex. Red)</li>
		<li>color_text - culoare text. Folositi culoare HEX sau scrieti numele culorii (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Ce face aceasta?</h3>
        <p>Afiseaza numele sitului. Acesta este definit in timpul instalarii si poate fi modificat in sectiunea de Setari globale a panoului de administrare.</p>
        <h3>Cum se foloseste?</h3>
        <p>Introduceti eticheta in template/pagina astfel: <code>{sitename}</code></p>
        <h3>Ce parametri primeste?</h3>
	<p><em>(optional)</em> assign (string) - Aloca rezultatul unei variabile smarty cu acel nume.</p>';
$lang['admin']['help_function_search'] = '	<h3>Ce face aceasta?</h3>
	<p>Aceasta eticheta este un wrapper pentru <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Modul cautare</a> pentru a simplifica sintaxa. 
	In loc sa folositi <code>{cms_module module=&#039;Search&#039;}</code> puteti sa folositi <code>{search}</code> pentru a insera modulul in template.
	</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti <code>{search}</code> in template unde doriti sa apara casuta de cautare. Pentru ajutor in privinta modulului de cautare, mergeti la <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Ajutor modul cautare</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Ce face aceasta?</h3>
	<p>Printeaza locatia radacina a URL-ului sitului.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in template/pagina astfel: <code>{root_url}</code></p>
	<h3>Ce parametri primeste?</h3>
	<p>Nici unul in acest moment.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Ce face aceasta?</h3>
  <p>Repeta o secventa specificata de caractere, de un numar de ori specificat</p>
  <h3>Cum se foloseste?</h3>
  <p>Inserati o eticheta ca cea care urmeaza in template/pagina, astfel: <code>{repeat string=&#039;repeta acesta &#039; times=&#039;3&#039;}</code>
  <h3>Ce parametri primeste?</h3>
  <ul>
  <li>string=&#039;text&#039; - Stringul de repetat</li>
  <li>times=&#039;num&#039; - Numarul de ori de repetat.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '<h3>Ce face aceasta?</h3>
	<p>Afiseaza o lista de pagini actualizate recent.</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti eticheta in template/pagina astfel: <code>{recently_updated}</code></p>
	<h3>Ce parametri primeste?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=&#039;10&#039; - Numarul de pagini actualizate care se afiseaza.</p><p>Exemplu: {recently_updated number=&#039;15&#039;}</p></li>
 	 <li><p><em>(optional)</em> leadin=&#039;Ultima modificare&#039; - Text care se afiseaza in stanga datei modificarii.</p><p>Exemplu: {recently_updated leadin=&#039;Ultima modificare&#039;}</p></li>
 	 <li><p><em>(optional)</em> showtitle=&#039;true&#039; - Afiseaza atributul titlu daca exista (true|false).</p><p>Exemplu: {recently_updated showtitle=&#039;true&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> css_class=&#039;un_nume&#039; - Se pune un div cu aceasta clasa in jurul listei.</p><p>Exemplu: {recently_updated css_class=&#039;un_name&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - implicit este d.m.y h:m , folositi formatu pe care il doriti (php -date- format)</p><p>Exemplu: {recently_updated dateformat=&#039;D M j G:i:s T Y&#039;} </p></li>											 	
	</ul>
	<p>sau combinat:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Ultima modificare: &#039; css_class=&#039;schimbari&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>Ce face aceasta?</h3>
	<p>Este o eticheta care impacheteaza <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Modul printare</a> pentru simplificarea sintaxei. 
	In loc sa trebuiasca sa folositi codul <code>{cms_module module=&#039;Printing&#039;}</code> se poate folosi <code>{print}</code> pentru a insera modulul in pagini si template-uri.
	</p>
	<h3>Cum se foloseste?</h3>
	<p>Introduceti <code>{print}</code> in pagina sau template. Pentru ajutor despre Modulul de printare, ce parametri primeste etc., mergeti la <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Ajutor modul printare</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informatii';
$lang['admin']['login_info'] = 'Pentru ca aria de administrare sa functioneze corect';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookie-urile trebuie sa fie activate in browser</li> 
  <li>Javascript trebuie sa fie activat in browser</li> 
  <li>Ferestrele de tip popup trebuie sa fie permise pentru urmatoarea adresa:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
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
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
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
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
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
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
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
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTA: Acest plugin este depreciat</h2>
  <h3>Acest plugin a fost inlaturat incepand cu CMS made simple versiunea 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
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
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
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
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
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
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
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
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'din';
$lang['admin']['first'] = 'Primul';
$lang['admin']['last'] = 'Ultimul';
$lang['admin']['adminspecialgroup'] = 'Avertizare: Membrii acestui grup au implicit toate permisiunile';
$lang['admin']['disablesafemodewarning'] = 'Dezactiveaza avertizare administrator safe mode';
$lang['admin']['allowparamcheckwarnings'] = 'Permite generarea de avertizari la verificarea parameterilor';
$lang['admin']['date_format_string'] = 'Sir formatare data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> sir formatat data. Incercati sa cautati &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Ultima modificare in';
$lang['admin']['last_modified_by'] = 'Ultima modificare de';
$lang['admin']['read'] = 'Citire';
$lang['admin']['write'] = 'Scriere';
$lang['admin']['execute'] = 'Executare';
$lang['admin']['group'] = 'Grup';
$lang['admin']['other'] = 'Altul';
$lang['admin']['event_desc_moduleupgraded'] = 'Trimis dupa ce un modul este actualizat';
$lang['admin']['event_desc_moduleinstalled'] = 'Trimis dupa ce un modul este instalat';
$lang['admin']['event_desc_moduleuninstalled'] = 'Trimis dupa ce un modul este dezinstalat';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Trimis dupa ce o eticheta definita utilizator este actualizata';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Trimis anterior actualizarii unei etichete definite utilizator';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Trimis anterior stergeri unei etichete definite utilizator';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Trimis dupa ce o eticheta definita utilizator este stearsa';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Trimis dupa ce o eticheta definita utilizator este inserata';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Trimis anterior inserarii unei etichete definite utilizator';
$lang['admin']['global_umask'] = 'Masca Creare Fisier (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nu s-a putut crea fisierul (probleme permisiuni?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulul este incompatabil cu aceasta versiune CMS';
$lang['admin']['errormodulenotloaded'] = 'Eroare interna, modulul nu a fost instantiat';
$lang['admin']['errormodulenotfound'] = 'Eroare interna, nu a fost gasita instanta unui modul';
$lang['admin']['errorinstallfailed'] = 'Instalarea modulului nu fost reusita';
$lang['admin']['errormodulewontload'] = 'Problema  la instantiere un modul disponibil';
$lang['admin']['frontendlang'] = 'Limba principala pentru frontend';
$lang['admin']['info_edituser_password'] = 'Modificati acest camp pentru a schimba parola utilizatorului';
$lang['admin']['info_edituser_passwordagain'] = 'Modificati acest camp pentru a schimba parola utilizatorului';
$lang['admin']['originator'] = 'Creator';
$lang['admin']['module_name'] = 'Nume Modul';
$lang['admin']['event_name'] = 'Nume Eveniment';
$lang['admin']['event_description'] = 'Descriere Eveniment';
$lang['admin']['error_delete_default_parent'] = 'Nu se poate sterge parintele paginii implicite';
$lang['admin']['jsdisabled'] = 'Scuze, aceasta functie cere ca Javascript sa fie activat';
$lang['admin']['order'] = 'Ordonare';
$lang['admin']['reorderpages'] = 'Reordonare Pagini';
$lang['admin']['reorder'] = 'Reordonare';
$lang['admin']['page_reordered'] = 'Pagina a fost reordonata cu succes ';
$lang['admin']['pages_reordered'] = 'Paginile au fost reordonate cu succes';
$lang['admin']['sibling_duplicate_order'] = 'Doua pagini copii nu pot avea aceasi ordine. Paginile nu au fost reordonate';
$lang['admin']['no_orders_changed'] = 'Ati ales sa reordonati paginile, dar nu ati schimbat ordinea vreuneia dintre ele. Paginile nu au fost reordonate';
$lang['admin']['order_too_small'] = 'Ordinea unei pagini nu poate fi zero. Paginile nu au fost reordonate';
$lang['admin']['order_too_large'] = 'Ordinea unei pagini nu poate sa fie mai mare decat numarul de pagini din acel nivel.Paginile nu au fost reordonate';
$lang['admin']['user_tag'] = 'Eticheta utilizator';
$lang['admin']['add'] = 'Adaugare';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Despre';
$lang['admin']['action'] = 'Actiune';
$lang['admin']['actionstatus'] = 'Actiune/Status';
$lang['admin']['active'] = 'Activ';
$lang['admin']['addcontent'] = 'Adaugare continut nou';
$lang['admin']['cantremove'] = 'Nu poate fi eliminat';
$lang['admin']['changepermissions'] = 'Modificare permisiuni';
$lang['admin']['changepermissionsconfirm'] = 'UTILIZATI CU ATENTIE\n\nAceasta actiune va incerca sa asigure ca toate fisierele facand parte din modul pot fi scrise de catre web server.\nSunteti sigur ca vreti sa continuati?';
$lang['admin']['contentadded'] = 'Continutul a fost adaugat cu succes in data de baze';
$lang['admin']['contentupdated'] = 'Continutul a fost actualizat cu succes';
$lang['admin']['contentdeleted'] = 'Continutul a fost eliminat cu succes din data de baze';
$lang['admin']['success'] = 'Succes';
$lang['admin']['addcss'] = 'Adaugare stylesheet';
$lang['admin']['addgroup'] = 'Adaugare grup nou';
$lang['admin']['additionaleditors'] = 'Editori aditionali';
$lang['admin']['addtemplate'] = 'Adaugare template nou';
$lang['admin']['adduser'] = 'Adaugare utilizator nou';
$lang['admin']['addusertag'] = 'Adaugare eticheta definita utilizator';
$lang['admin']['adminaccess'] = 'Acces autentificare la aria administrare';
$lang['admin']['adminlog'] = 'Jurnal arie administrativa';
$lang['admin']['adminlogcleared'] = 'Jurnalul ariei administrative a fost curatat';
$lang['admin']['adminlogempty'] = 'Jurnal arie administrativa gol';
$lang['admin']['adminsystemtitle'] = 'Sistemul de administrare CMS';
$lang['admin']['adminpaneltitle'] = 'Panoul de administrare CMS Made Simple';
$lang['admin']['advanced'] = 'Avansat';
$lang['admin']['aliasalreadyused'] = 'Alias pagina furnizat este deja folosit in alta pagina. Schimbati alias-ul in altceva.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias-ul trebuie sa contina doar litere si cifre';
$lang['admin']['aliasnotaninteger'] = 'Alias-ul nu poate fi un numar intreg';
$lang['admin']['allpagesmodified'] = 'Toate paginile au fost modificate!';
$lang['admin']['assignments'] = 'Asignare utilizatori';
$lang['admin']['associationexists'] = 'Asocierea exista deja';
$lang['admin']['autoinstallupgrade'] = 'Instalare sau upgrade automate';
$lang['admin']['back'] = 'Inapoi la Meniu';
$lang['admin']['backtoplugins'] = 'Inapoi la Lista de Plug-inuri';
$lang['admin']['cancel'] = 'Anulare';
$lang['admin']['cantchmodfiles'] = 'Nu s-au putut schimba permisiunile unor fisiere';
$lang['admin']['cantremovefiles'] = 'Problema la stergere fisiere (permisiuni?)';
$lang['admin']['confirmcancel'] = 'Sigur doriti sa renuntati la modificari? Apasati OK pentru renuntarea la modificari. Apasati Anuleaza pentru continuarea editarii.';
$lang['admin']['canceldescription'] = 'Renuntare la modificari';
$lang['admin']['clearadminlog'] = 'Stergere jurnal arie administrativa';
$lang['admin']['code'] = 'Cod';
$lang['admin']['confirmdefault'] = 'Sigur doriti sa setati - %s - ca pagina implicita a site-ului?';
$lang['admin']['confirmdeletedir'] = 'Sigur doriti sa stergeti directorul impreuna cu continutul acestuia?';
$lang['admin']['content'] = 'Continut';
$lang['admin']['contentmanagement'] = 'Gestionare continut';
$lang['admin']['contenttype'] = 'Tip continut';
$lang['admin']['copy'] = 'Copiere';
$lang['admin']['copytemplate'] = 'Copiere template';
$lang['admin']['create'] = 'Creere';
$lang['admin']['createnewfolder'] = 'Creere director nou';
$lang['admin']['cssalreadyused'] = 'Numele CSS este deja folosit';
$lang['admin']['cssmanagement'] = 'Gestionare CSS';
$lang['admin']['currentassociations'] = 'Asocieri curente';
$lang['admin']['currentdirectory'] = 'Directorul curent';
$lang['admin']['currentgroups'] = 'Grupurile curente';
$lang['admin']['currentpages'] = 'Paginile curente';
$lang['admin']['currenttemplates'] = 'Sabloanele curente';
$lang['admin']['currentusers'] = 'Utilizatorii curenti';
$lang['admin']['custom404'] = 'Mesaj eroare 404 customizat';
$lang['admin']['database'] = 'Baza de date';
$lang['admin']['databaseprefix'] = 'Prefix-ul bazei de date';
$lang['admin']['databasetype'] = 'Tipul bazei de date';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Implicit';
$lang['admin']['delete'] = 'Stergere';
$lang['admin']['deleteconfirm'] = 'Sigur doriti sa stergeti - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Sigur doriti sa stergeti asocierile la  - %s - ?';
$lang['admin']['deletecss'] = 'Stergere CSS';
$lang['admin']['dependencies'] = 'Dependinte';
$lang['admin']['description'] = 'Descriere';
$lang['admin']['directoryexists'] = 'Directorul exista deja.';
$lang['admin']['down'] = 'Jos';
$lang['admin']['edit'] = 'Editare';
$lang['admin']['editconfiguration'] = 'Editare configurare';
$lang['admin']['editcontent'] = 'Editare continut';
$lang['admin']['editcss'] = 'Editare stylesheet';
$lang['admin']['editcsssuccess'] = 'Stylesheet actualizat';
$lang['admin']['editgroup'] = 'Editare Grup';
$lang['admin']['editpage'] = 'Editare Pagina';
$lang['admin']['edittemplate'] = 'Editare Template';
$lang['admin']['edittemplatesuccess'] = 'Template actualizat';
$lang['admin']['edituser'] = 'Editare Utilizator';
$lang['admin']['editusertag'] = 'Editare Eticheta definita de utilizator';
$lang['admin']['usertagadded'] = 'Eticheta definita de utilizator a fost adaugata cu succes.';
$lang['admin']['usertagupdated'] = 'Eticheta definita de utilizator a fost actualizata cu succes.';
$lang['admin']['usertagdeleted'] = 'Eticheta definita de utilizator a fost stearsa cu succes.';
$lang['admin']['email'] = 'Adresa e-mail';
$lang['admin']['errorattempteddowngrade'] = 'Instaland acest modul va rezulta o de-actualizare.  Operatie abandonata';
$lang['admin']['errorchildcontent'] = 'Continutul inca contine continuturi copil. Va rugam sa le eliminati in prealabil.';
$lang['admin']['errorcopyingtemplate'] = 'Eroare la copiere template';
$lang['admin']['errorcouldnotparsexml'] = 'Eroare in timpul parsarii fisierului XML. Asigurati-va ca uploadati un fisier .xml si nu unul .tar.gz sau zip.';
$lang['admin']['errorcreatingassociation'] = 'Eroare la crearea asocierii';
$lang['admin']['errorcssinuse'] = 'Acest stylesheet este inca folosit in template-uri sau pagini. Va rugam sa eliminati aceste asocieri in prealabil.';
$lang['admin']['errordefaultpage'] = 'Nu se poate sterge pagina implicita curenta. Va rugam sa selectati o alta pagina implicita inainte.';
$lang['admin']['errordeletingassociation'] = 'Eroare la stergerea asocierii';
$lang['admin']['errordeletingcss'] = 'Eroare la stergerea css-ului';
$lang['admin']['errordeletingdirectory'] = 'Nu se poate sterge directorul. Problema de permisiuni?';
$lang['admin']['errordeletingfile'] = 'Nu se poate sterge fisierul. Problema de permisiuni?';
$lang['admin']['errordirectorynotwritable'] = 'Nu exista permisiunea de scriere in director. Aceasta poate fi cauzata de permisiunile fisierelor si a dreptului de detinere. Modul de siguranta poate de asemenea sa fie cauza.';
$lang['admin']['errordtdmismatch'] = 'Versiunea DTD-ului lipseste sau este incompatibila in fisierul XML';
$lang['admin']['errorgettingcssname'] = 'Eroare la obtinere nume stylesheet';
$lang['admin']['errorgettingtemplatename'] = 'Eroare la obtinere nume stylesheet';
$lang['admin']['errorincompletexml'] = 'Fisierul XML este incomplet sau invalid';
$lang['admin']['uploadxmlfile'] = 'Instaleaza modulul via fisier XML';
$lang['admin']['cachenotwritable'] = 'Folderul cache nu are permisiuni de scriere. Golirea chche-ului nu va functiona. Verificati ca folderul tmp/cache are permisiuni complete de citire/scriere/executare (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Folderul de module nu are permisiuni de scriere, daca doriti sa instalati module prin uploadul unui fisier XML trebui sa dati acestui folder permisiuni complete de citire/scriere/executare (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Niciun fisier nu a fost uploadat. Pentru a instala un modul dintr-un fisier XML trebuie sa alegeti si sa uploadati un fisier XML al unui modul din calculatorul dumneavoastra.';
$lang['admin']['errorinsertingcss'] = 'Eroare la inserare stylesheet';
$lang['admin']['errorinsertinggroup'] = 'Eroare la inserare grup';
$lang['admin']['errorinsertingtag'] = 'Eroare la introducere eticheta utilizator';
$lang['admin']['errorinsertingtemplate'] = 'Eroare la introducere template';
$lang['admin']['errorinsertinguser'] = 'Eroare la introducere utilizator';
$lang['admin']['errornofilesexported'] = 'Eroare la exportul fisierelor in xml';
$lang['admin']['errorretrievingcss'] = 'Eroare initializare stylesheet';
$lang['admin']['errorretrievingtemplate'] = 'Eroare initializare template';
$lang['admin']['errortemplateinuse'] = 'Acest template este inca folosit de o pagina. Stergeti legatura mai intai';
$lang['admin']['errorupdatingcss'] = 'Eroare la actualizare stylesheet';
$lang['admin']['errorupdatinggroup'] = 'Eroare la actualizare grup';
$lang['admin']['errorupdatingpages'] = 'Eroare la actualizare pagini';
$lang['admin']['errorupdatingtemplate'] = 'Eroare la actualizare template';
$lang['admin']['errorupdatinguser'] = 'Eroare la actualizare utilizator';
$lang['admin']['errorupdatingusertag'] = 'Eroare la actualizare eticheta definita de utilizator';
$lang['admin']['erroruserinuse'] = 'Acest utilizator este proprietarul continutului paginii. Acordati dreptul de proprietate unui alt utilizator inaintea stergerii acestei pagini.';
$lang['admin']['eventhandlers'] = 'Management evenimente';
$lang['admin']['editeventhandler'] = 'Editare controler evenimente';
$lang['admin']['eventhandlerdescription'] = 'Asociere etichete utilizator cu evenimente';
$lang['admin']['export'] = 'Export ';
$lang['admin']['event'] = 'Eveniment';
$lang['admin']['false'] = 'Fals';
$lang['admin']['settrue'] = 'Setat ca adevarat';
$lang['admin']['filecreatedirnodoubledot'] = 'Folderul nu poate contine &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nu se poate crea un folder fara nume.';
$lang['admin']['filecreatedirnoslash'] = 'Folderul nu poate contine &#039;/&#039; sau &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Management fisiere';
$lang['admin']['filename'] = 'Nume fisier';
$lang['admin']['filenotuploaded'] = 'Fisierul nu a putut fi uploadat. Aceasta poate fi o problema de permisiuni sau de safe mode.';
$lang['admin']['filesize'] = 'Dimensiunea fisierului';
$lang['admin']['firstname'] = 'Prenume';
$lang['admin']['groupmanagement'] = 'Management grup';
$lang['admin']['grouppermissions'] = 'Permisiuni grup';
$lang['admin']['handler'] = 'Controler (eticheta definita de utilizator)';
$lang['admin']['headtags'] = 'Etichete antet';
$lang['admin']['help'] = 'Ajutor';
$lang['admin']['new_window'] = 'fereastra noua';
$lang['admin']['helpwithsection'] = '%s Ajutor';
$lang['admin']['helpaddtemplate'] = '<p>Un template este acel lucru care controleaza aspectul continutului.</p><p>Creati layoutul aici si adaugati de asemenea CSSul vostru in sectiunea Stylesheet pentru a controla aspectul diferitelor elemente.</p>';
$lang['admin']['helplisttemplate'] = '<p>Aceasta pagina permite editarea, stergerea si crearea templateurilor.</p><p>Pentru crearea unui nou template dati click pe butonul <u>Adauga un nou template</u>. </p><p>Daca doriti setarea aceluiasi template pentru toate paginile dati click pe linkul <u>Seteaza pentru intreg continutul</u>. </p><p>Daca doriti duplicarea unui template dati click pe icoana <u>Copiere</u> si vi se va solicita introducerea unui nume pentru noul template.</p>';
$lang['admin']['home'] = 'Acasa';
$lang['admin']['homepage'] = 'Prima pagina';
$lang['admin']['hostname'] = 'Nume host';
$lang['admin']['idnotvalid'] = 'ID-ul furnizat nu este valid';
$lang['admin']['imagemanagement'] = 'Manager de imagini';
$lang['admin']['informationmissing'] = 'Informatie lipsa';
$lang['admin']['install'] = 'Instalare';
$lang['admin']['invalidcode'] = 'Codul introdus este invalid';
$lang['admin']['illegalcharacters'] = 'Caractere invalide in %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Numar impar de acolade';
$lang['admin']['invalidtemplate'] = 'Template-ul nu este valid';
$lang['admin']['itemid'] = 'ID obiect';
$lang['admin']['itemname'] = 'Nume obiect';
$lang['admin']['language'] = 'Limba';
$lang['admin']['lastname'] = 'Nume familie';
$lang['admin']['logout'] = 'Iesire';
$lang['admin']['loginprompt'] = 'Introduceti datele de identificare corecte pentru a accesa Panoul Administratorului.';
$lang['admin']['logintitle'] = 'CMS Made Simple - Autentificare administrator';
$lang['admin']['menutext'] = 'Meniu text';
$lang['admin']['missingparams'] = 'Unii parametrii lipsesc sau sunt incorecti';
$lang['admin']['modifygroupassignments'] = 'Modificare asignari pe grupuri';
$lang['admin']['moduleabout'] = 'Despre modulul %s';
$lang['admin']['modulehelp'] = 'Ajutor pentru modulul %s';
$lang['admin']['msg_defaultcontent'] = 'Adaugati aici codul care trebuie sa apara in continutul implicit pentru toate paginile nou create';
$lang['admin']['msg_defaultmetadata'] = 'Adaugati aici codul care trebuie sa apara in sectiunea metadata pentru toate paginile nou create';
$lang['admin']['wikihelp'] = 'Ajutor comunitate';
$lang['admin']['moduleinstalled'] = 'Modulul este deja instalat';
$lang['admin']['moduleinterface'] = 'Interfata %s';
$lang['admin']['modules'] = 'Module';
$lang['admin']['move'] = 'Mutare';
$lang['admin']['name'] = 'Nume';
$lang['admin']['needpermissionto'] = 'Aveti nevoie de permisiunea &#039;%s&#039; pentru a efectua aceasta operatiune.';
$lang['admin']['needupgrade'] = 'Upgrade necesar';
$lang['admin']['newtemplatename'] = 'Nume pentru noul template';
$lang['admin']['next'] = 'Urmatorul';
$lang['admin']['noaccessto'] = 'Nu aveti acces la %s';
$lang['admin']['nocss'] = 'Nu exista styleshhet';
$lang['admin']['noentries'] = 'Nu exista intrari';
$lang['admin']['nofieldgiven'] = 'Niciun %s furnizat!';
$lang['admin']['nofiles'] = 'Nu exista fisiere';
$lang['admin']['nopasswordmatch'] = 'Parolele nu se potrivesc';
$lang['admin']['norealdirectory'] = 'Nu a fost specificat un director real';
$lang['admin']['norealfile'] = 'Nu a fost specificat un fisier real';
$lang['admin']['notinstalled'] = 'Neinstalat';
$lang['admin']['overwritemodule'] = 'Suprascriere module existente';
$lang['admin']['owner'] = 'Proprietar';
$lang['admin']['pagealias'] = 'Alias pagina';
$lang['admin']['pagedefaults'] = 'Setari implicite pagina';
$lang['admin']['pagedefaultsdescription'] = 'Setare parametri impliciti pentru pagina noua';
$lang['admin']['parent'] = 'Parinte';
$lang['admin']['password'] = 'Parola';
$lang['admin']['passwordagain'] = 'Parola (repetare)';
$lang['admin']['permission'] = 'Permisiune';
$lang['admin']['permissions'] = 'Permisiuni';
$lang['admin']['permissionschanged'] = 'Permisiuile au fost actualizate.';
$lang['admin']['pluginabout'] = 'Despre eticheta %s';
$lang['admin']['pluginhelp'] = 'Ajutor pentru eticheta %s';
$lang['admin']['pluginmanagement'] = 'Management pluginuri';
$lang['admin']['prefsupdated'] = 'Preferintele au fost actualizate.';
$lang['admin']['preview'] = 'Previzualizare';
$lang['admin']['previewdescription'] = 'Previzualizare modificari';
$lang['admin']['previous'] = 'Inapoi';
$lang['admin']['remove'] = 'Stergere';
$lang['admin']['removeconfirm'] = 'Aceasta actiune va sterge definitiv fisierele care alcatuiesc modulul.\nSunteti sigur ca vreti sa continuati?';
$lang['admin']['removecssassociation'] = 'Stergere asociere stylesheet';
$lang['admin']['saveconfig'] = 'Salvare configurari';
$lang['admin']['send'] = 'Trimitere';
$lang['admin']['setallcontent'] = 'Setare pentru toate paginile';
$lang['admin']['setallcontentconfirm'] = 'Sunteti sigur ca doriti setarea acestui template tuturor paginilor?';
$lang['admin']['showinmenu'] = 'Arata in Meniu';
$lang['admin']['showsite'] = 'Vizualizare site';
$lang['admin']['sitedownmessage'] = 'Mesajul Mentenanta site';
$lang['admin']['siteprefs'] = 'Setari globale';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stylesheet ';
$lang['admin']['submit'] = 'Trimitere';
$lang['admin']['submitdescription'] = 'Salvare modificari';
$lang['admin']['tags'] = 'Etichete';
$lang['admin']['template'] = 'Template ';
$lang['admin']['templateexists'] = 'Acest nume de template exista deja';
$lang['admin']['templatemanagement'] = 'Management template-uri';
$lang['admin']['title'] = 'Titlu';
$lang['admin']['tools'] = 'Instrumente';
$lang['admin']['true'] = 'Adevarat';
$lang['admin']['setfalse'] = 'Setare ca fals';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip invalid';
$lang['admin']['uninstall'] = 'Dezinstalare';
$lang['admin']['uninstallconfirm'] = 'Sunteti sigur ca doriti dezintalarea acestui modul? Nume:';
$lang['admin']['up'] = 'Sus';
$lang['admin']['upgrade'] = 'Upgrade ';
$lang['admin']['upgradeconfirm'] = 'Sunteti sigur ca doriti upgradeul?';
$lang['admin']['uploadfile'] = 'Upload fisier';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Folosire management avansat al stylesheeturilor';
$lang['admin']['user'] = 'Utilizator';
$lang['admin']['userdefinedtags'] = 'Etichete definite de utilizator';
$lang['admin']['usermanagement'] = 'Management utilizatori';
$lang['admin']['username'] = 'Nume utilizator';
$lang['admin']['usernameincorrect'] = 'Nume utilizator incorect sau parola gresita';
$lang['admin']['userprefs'] = 'Preferinte utilizator';
$lang['admin']['usersassignedtogroup'] = 'Utilizator asociat grupului %s';
$lang['admin']['usertagexists'] = 'O eticheta cu acest nume exista deja. Va rugam alegeti alt nume.';
$lang['admin']['usewysiwyg'] = 'Folosire editor WYSIWYG pentru continut';
$lang['admin']['version'] = 'Versiune';
$lang['admin']['view'] = 'Vizualizare';
$lang['admin']['welcomemsg'] = 'Bine ati venit %s';
$lang['admin']['directoryabove'] = 'director peste nivelul curent';
$lang['admin']['nodefault'] = 'Valoare implicita neselectata';
$lang['admin']['blobexists'] = 'Nume continut global existent';
$lang['admin']['blobmanagement'] = 'Management continut global';
$lang['admin']['errorinsertingblob'] = 'A aparut o eroare la inserarea continutului global';
$lang['admin']['addhtmlblob'] = 'Adaugare bloc continut global';
$lang['admin']['edithtmlblob'] = 'Editare bloc continut global';
$lang['admin']['edithtmlblobsuccess'] = 'Bloc continut global actualizat';
$lang['admin']['tagtousegcb'] = 'Etichete care folosesc continutul global';
$lang['admin']['gcb_wysiwyg'] = 'Activare WYSIWYG pentru bloc continut global';
$lang['admin']['gcb_wysiwyg_help'] = 'Activare editor WYSIWYG in timpul editarii continutului global';
$lang['admin']['filemanager'] = 'Manager fisiere';
$lang['admin']['imagemanager'] = 'Manager imagini';
$lang['admin']['encoding'] = 'Encodare';
$lang['admin']['clearcache'] = 'Curatare cache';
$lang['admin']['clear'] = 'Curatare';
$lang['admin']['cachecleared'] = 'Cache curatat';
$lang['admin']['apply'] = 'Aplicare';
$lang['admin']['applydescription'] = 'Salvare modificari si continuare editare';
$lang['admin']['none'] = 'niciunul';
$lang['admin']['wysiwygtouse'] = 'Selectare WYSIWYG';
$lang['admin']['syntaxhighlightertouse'] = 'Selectare evidentiatorul de sintaxa';
$lang['admin']['hasdependents'] = 'Are dependente';
$lang['admin']['missingdependency'] = 'Dependente lipsa';
$lang['admin']['minimumversion'] = 'Versiune minima';
$lang['admin']['minimumversionrequired'] = 'Versiune CMSMS minima necesara';
$lang['admin']['maximumversion'] = 'Versiune maxima';
$lang['admin']['maximumversionsupported'] = 'Versiunea CMSMS maxim suportata';
$lang['admin']['depsformodule'] = 'Dependinte pentru modulul %s';
$lang['admin']['installed'] = 'Instalat';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Schimbare Istoric';
$lang['admin']['moduleerrormessage'] = 'Mesaj de eroare pentru modulul %s';
$lang['admin']['moduleupgradeerror'] = 'A aparut o eroare la upgrade-ul modulului.';
$lang['admin']['moduleinstallmessage'] = 'Instaleaza mesajul pentru modulul %s';
$lang['admin']['moduleuninstallmessage'] = 'Dezinstaleaza mesajul pentru modulul %s';
$lang['admin']['admintheme'] = 'Tema administrare';
$lang['admin']['addstylesheet'] = 'Adaugare stylesheet';
$lang['admin']['editstylesheet'] = 'Editare stylesheet';
$lang['admin']['addcssassociation'] = 'Adaugare asociere stylesheet';
$lang['admin']['attachstylesheet'] = 'Atasare acest stylesheet';
$lang['admin']['attachtemplate'] = 'Atasare la acest template';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'Pagini';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'Fisiere';
$lang['admin']['layout'] = 'Layout ';
$lang['admin']['usersgroups'] = 'Utilizatori si grupuri';
$lang['admin']['extensions'] = 'Extensii';
$lang['admin']['preferences'] = 'Preferinte';
$lang['admin']['admin'] = 'Administrare site';
$lang['admin']['viewsite'] = 'Vizualizare site';
$lang['admin']['templatecss'] = 'Asignare template-uri la stylesheet';
$lang['admin']['plugins'] = 'Plugin-uri';
$lang['admin']['movecontent'] = 'Mutare pagini';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Etichete definite de utilizator';
$lang['admin']['htmlblobs'] = 'Blocuri de continut global';
$lang['admin']['adminhome'] = 'Prima pagina - Administrare';
$lang['admin']['liststylesheets'] = 'Stylesheet-uri';
$lang['admin']['preferencesdescription'] = 'Aici setati diferite preferinte referitoare la intregul site.';
$lang['admin']['adminlogdescription'] = 'Afisare logul operatiunilor administratorului.';
$lang['admin']['mainmenu'] = 'Meniu principal';
$lang['admin']['users'] = 'Utilizatori';
$lang['admin']['usersdescription'] = 'Aici gestionati utilizatorii.';
$lang['admin']['groups'] = 'Grupuri';
$lang['admin']['groupsdescription'] = 'Aici gestionati grupurile.';
$lang['admin']['groupassignments'] = 'Asignari grup';
$lang['admin']['groupassignmentdescription'] = 'Aici adaugati utilizatorii la grupuri.';
$lang['admin']['groupperms'] = 'Permisiuni grup';
$lang['admin']['grouppermsdescription'] = 'Setare permisiuni si nivel de acces pentru grupuri';
$lang['admin']['pagesdescription'] = 'Aici adaugati si editati paginile si continutul.';
$lang['admin']['htmlblobdescription'] = 'Blocurile de continut global sunt bucati de continut pe care le puteti plasa in pagini sau templateuri.';
$lang['admin']['templates'] = 'Template-uri';
$lang['admin']['templatesdescription'] = 'Aici adaugati si editati template-uri. Ele definesc aspectul siteului.';
$lang['admin']['stylesheets'] = 'Stylesheeturi';
$lang['admin']['stylesheetsdescription'] = 'Managementul stylesheeturilor este un mod avansat de gestionare CSS in mod separat fata de templateuri.';
$lang['admin']['filemanagerdescription'] = 'Upload si management fisiere.';
$lang['admin']['imagemanagerdescription'] = 'Upload, editare si stergere imagini.';
$lang['admin']['moduledescription'] = 'Modulele extind CMSMS in vederea furnizarii mai multor functionalitati.';
$lang['admin']['tagdescription'] = 'Etichetele sunt mici bucati de functionalitati ce pot fi adugate continutului si/sau templateurilor.';
$lang['admin']['usertagdescription'] = 'Etichetele pe care le puteti crea sau modifica pentru a realiza diferite sarcini, direct din browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Atentie:</strong></em> directorul de instalare exista inca. Sterge-l!';
$lang['admin']['subitems'] = 'Sub-obiecte';
$lang['admin']['extensionsdescription'] = 'Module, etichete si altele.';
$lang['admin']['usersgroupsdescription'] = 'Obiecte legate de utilizatori si grupuri.';
$lang['admin']['layoutdescription'] = 'Optiuni layout site.';
$lang['admin']['admindescription'] = 'Functii de administrare site.';
$lang['admin']['contentdescription'] = 'Aici se adauga si se editeaza continutul.';
$lang['admin']['enablecustom404'] = 'Activare mesaj personalizat de eroare 404';
$lang['admin']['enablesitedown'] = 'Activare mesaj pentru mod mentenanta';
$lang['admin']['bookmarks'] = 'Scurtaturi';
$lang['admin']['user_created'] = 'Scurtaturi custom';
$lang['admin']['forums'] = 'Forum-uri';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Ajutor modul';
$lang['admin']['managebookmarks'] = 'Management scurtaturi';
$lang['admin']['editbookmark'] = 'Editare scurtaturi';
$lang['admin']['addbookmark'] = 'Adaugare scurtatura';
$lang['admin']['recentpages'] = 'Pagini recente';
$lang['admin']['groupname'] = 'Nume grup';
$lang['admin']['selectgroup'] = 'Selectare grup';
$lang['admin']['updateperm'] = 'Actualizare permisiuni';
$lang['admin']['admincallout'] = 'Administrare scurtaturi';
$lang['admin']['showbookmarks'] = 'Afisare scurtaturi admin';
$lang['admin']['hide_help_links'] = 'Ascundere linkuri de ajutor';
$lang['admin']['hide_help_links_help'] = 'Selectati aceasta casuta pentru a dezactiva wiki si modulul ajutor linkuri in headerul paginilor.';
$lang['admin']['showrecent'] = 'Afisare paginile vizitate recent';
$lang['admin']['attachtotemplate'] = 'Atasare stylesheet la template';
$lang['admin']['attachstylesheets'] = 'Atasare stylesheet-uri';
$lang['admin']['indent'] = 'Indentare lista de pagini pentru a evidentia ierarhia';
$lang['admin']['adminindent'] = 'Afisare continut';
$lang['admin']['contract'] = 'Colapsare sectiune';
$lang['admin']['expand'] = 'Extindere sectiune';
$lang['admin']['expandall'] = 'Extindere toate sectiunile';
$lang['admin']['contractall'] = 'Colapsare toate sectiunile';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Setari globale';
$lang['admin']['adminpaging'] = 'Numarul de obiecte afisate per pagina in Lista pagini';
$lang['admin']['nopaging'] = 'Afisare toate obiectele';
$lang['admin']['myprefs'] = 'Preferintele mele';
$lang['admin']['myprefsdescription'] = 'Aici personalizati zona de administrator pentru a functiona asa cum va doriti.';
$lang['admin']['myaccount'] = 'Contul meu';
$lang['admin']['myaccountdescription'] = 'Aici actualizati informatiile despre contul dumneavoastra.';
$lang['admin']['adminprefs'] = 'Preferinte utilizator';
$lang['admin']['adminprefsdescription'] = 'Aici setati preferintele pentru administrarea siteului.';
$lang['admin']['managebookmarksdescription'] = 'Aici gestionati scurtaturile dumneavoastra de administrare.';
$lang['admin']['options'] = 'Optiuni';
$lang['admin']['langparam'] = 'Parametrul este utilizat pentru a specifica ce limba va fi utilizata pentru afisarea interfetei frontend. Nu toate modulele suporta sau au nevoie de acest parametru.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Tip media';
$lang['admin']['mediatype_'] = 'Nimic setat : va afecta tot';
$lang['admin']['mediatype_all'] = 'tot : potrivit pentru toate deviceurile.';
$lang['admin']['mediatype_aural'] = 'aural : pentru sintetizator de voce.';
$lang['admin']['mediatype_braille'] = 'braille : pentru deviceuri tactile (braille).';
$lang['admin']['mediatype_embossed'] = 'embossed : pentru imprimanta braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : pentru deviceuri handheld';
$lang['admin']['mediatype_print'] = 'print : pentru pagini si documente vizualizate in ecranul print preview.';
$lang['admin']['mediatype_projection'] = 'proiectie : pentru prezentari proiectate.';
$lang['admin']['mediatype_screen'] = 'ecran : pentru monitoare color.';
$lang['admin']['mediatype_tty'] = 'tty : pentru terminale de tip tty.';
$lang['admin']['mediatype_tv'] = 'tv : pentru terminale de tip tv.';
$lang['admin']['assignmentchanged'] = 'Asignarile de grup au fost actualizate';
$lang['admin']['stylesheetexists'] = 'Stylesheet-ul exista';
$lang['admin']['errorcopyingstylesheet'] = 'Eroare la copiere stylesheet';
$lang['admin']['copystylesheet'] = 'Copiere stylesheet';
$lang['admin']['newstylesheetname'] = 'Numele noului stylesheet';
$lang['admin']['target'] = 'Destinatie';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL Server SOAP ModuleRepository';
$lang['admin']['metadata'] = 'Metadate';
$lang['admin']['globalmetadata'] = 'Metadate globale';
$lang['admin']['titleattribute'] = 'Descriere (atribut titlu)';
$lang['admin']['tabindex'] = 'Index tab-uri';
$lang['admin']['accesskey'] = 'Cheie de acces';
$lang['admin']['sitedownwarning'] = '<strong>ATENTIE:</strong> Siteul afiseaza un mesaj de tipul &quot;Site inactiv in vederea lucrarilor de mentenanta&quot;.  Stergeti fisierul %s pentru rezolvarea problemei.';
$lang['admin']['deletecontent'] = 'Stergere continut';
$lang['admin']['deletepages'] = 'Stergeti aceste pagini?';
$lang['admin']['selectall'] = 'Selectare tot';
$lang['admin']['selecteditems'] = 'Cu cele selectate';
$lang['admin']['inactive'] = 'Inactiv';
$lang['admin']['deletetemplates'] = 'Stergere template-uri';
$lang['admin']['templatestodelete'] = 'Aceste template-uri vor fi sterse';
$lang['admin']['wontdeletetemplateinuse'] = 'Aceste templateuri sunt utilizate si nu vor fi sterse';
$lang['admin']['deletetemplate'] = 'Stergere stylesheet-uri';
$lang['admin']['stylesheetstodelete'] = 'Aceste stylesheet-uri vor fi sterse';
$lang['admin']['sitename'] = 'Nume site';
$lang['admin']['siteadmin'] = 'Admin site';
$lang['admin']['images'] = 'Manager imagini';
$lang['admin']['blobs'] = 'Blocuri de continut global';
$lang['admin']['groupmembers'] = 'Asignari grup';
$lang['admin']['troubleshooting'] = '(Rezolvare probleme)';
$lang['admin']['event_desc_loginpost'] = 'Trimis dupa logarea unui utilizator in panoul administratorului';
$lang['admin']['event_desc_logoutpost'] = 'Trimis dupa iesirea utilizatorului din panoul administratorului';
$lang['admin']['event_desc_adduserpre'] = 'Trimis inainte de crearea unui nou utilizator';
$lang['admin']['event_desc_adduserpost'] = 'Trimis dupa crearea noului utilizator';
$lang['admin']['event_desc_edituserpre'] = 'Trimis inaintea salvarii modificarilor unui utilizator';
$lang['admin']['event_desc_edituserpost'] = 'Trimis dupa salvarea modificarilor unui utilizator';
$lang['admin']['event_desc_deleteuserpre'] = 'Trimis inaintea stergerii unui utilizator';
$lang['admin']['event_desc_deleteuserpost'] = 'Trimis dupa stergerea unui utilizator';
$lang['admin']['event_desc_addgrouppre'] = 'Trimis inaintea crearii unui grup';
$lang['admin']['event_desc_addgrouppost'] = 'Trimis dupa crearea unui grup';
$lang['admin']['event_desc_changegroupassignpre'] = 'Trimis inaintea salvarii asignarilor grupului';
$lang['admin']['event_desc_changegroupassignpost'] = 'Trimis dupa salvarea asignarilor grupului';
$lang['admin']['event_desc_editgrouppre'] = 'Trimis inaintea salvarii asignarilor grupului';
$lang['admin']['event_desc_editgrouppost'] = 'Trimis dupa salvarea modificarilor unui grup';
$lang['admin']['event_desc_deletegrouppre'] = 'Trimis inainte de salvarea modificarilor unui grup';
$lang['admin']['event_desc_deletegrouppost'] = 'Trimis dupa stergerea unui grup';
$lang['admin']['event_desc_addstylesheetpre'] = 'Trimis inaintea stergerii unui grup';
$lang['admin']['event_desc_addstylesheetpost'] = 'Trimis dupa crearea noului stylesheet';
$lang['admin']['event_desc_editstylesheetpre'] = 'Trimis inainte de crearea noului stylesheet';
$lang['admin']['event_desc_editstylesheetpost'] = 'Trimis dupa salvarea modificarilor unui stylesheet';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Trimis inainte de stergerea unui stylesheet';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Trimis dupa stergerea unui stylesheet';
$lang['admin']['event_desc_addtemplatepre'] = 'Trimis inainte de crearea unui template';
$lang['admin']['event_desc_addtemplatepost'] = 'Trimis dupa crearea unui template';
$lang['admin']['event_desc_edittemplatepre'] = 'Trimis inainte ca modificarile unui template sa fie salvate';
$lang['admin']['event_desc_edittemplatepost'] = 'Trimis dupa ce modificarile unui template sunt salvate';
$lang['admin']['event_desc_deletetemplatepre'] = 'Trimis inainte ca un template sa fie sters din sistem';
$lang['admin']['event_desc_deletetemplatepost'] = 'Trimis dupa ce un template este sters din sistem';
$lang['admin']['event_desc_templateprecompile'] = 'Trimis inainte ca un template sa fie trimis catre smarty pentru procesare';
$lang['admin']['event_desc_templatepostcompile'] = 'Trimis dupa ce un template a fost procesat de smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Trimis inainte ca un bloc continut global nou sa fie creat';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Trimis dupa ce un bloc continut global nou a fost creat';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Trimis inainte ca modificarile unui bloc continut global sa fie salvate';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Trimis dupa ce modificarile unu bloc continut global au fost salvate';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Trimis inainte ca un bloc continut global sa fie sters din sistem';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Trimis dupa ce un bloc global continut a fost sters din sistem';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Trimis inainte ca un bloc continnut global sa fie trimis catre smarty pentru procesare';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Trimis dupa ce un bloc continut global a fost procesat de smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Trimis inainte ca modificarile la continut sa fie salvate';
$lang['admin']['event_desc_contenteditpost'] = 'Trimis dupa ce modificarile la continut sunt salvate';
$lang['admin']['event_desc_contentdeletepre'] = 'Trimis inainte de stergere continut din sistem';
$lang['admin']['event_desc_contentdeletepost'] = 'Trimis dupa ce se sterge continut din sistem';
$lang['admin']['event_desc_contentstylesheet'] = 'Trimis inainte ca stylesheet-ul sa fie trimis catre browser';
$lang['admin']['event_desc_contentprecompile'] = 'Trimis inainte de a fi trimis continut la smarty pentru procesare';
$lang['admin']['event_desc_contentpostcompile'] = 'Trimis dupa ce smarty a procesat continut';
$lang['admin']['event_desc_contentpostrender'] = 'Trimis inainte ca codul HTM combinat sa fie trimis catre browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Trimis inainte ca orice continut destinat pentru smarty sa fie trimis la procesare';
$lang['admin']['event_desc_smartypostcompile'] = 'Trimis dupa ce orice continut destinat pentru smarty a fost procesat';
$lang['admin']['event_help_loginpost'] = '<p>Trimis dupa ce un utilizator se autentifica in panoul de administrare.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Trimis dupa ce un utilizator iese din panoul de administrare.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Trimis inainte de crearea unui nou utilizator.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Trimis dupa ce un utilizator nou este creat.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Trimis inainte ca modificarile aduse unui utilizator sa fie salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Trimis dupa ce modificarile aduse unui utilizator sunt salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Trimis inainte ca un utilizator sa fie sters din sistem.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Trimis dupa ce un utilizator este sters din sistem.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Trimis inainte ca un grup nou sa fie creat.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Trimis dupa ce un grup nou este creat.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Referinta catre obiectul utilizator afectat.</li>
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
$lang['admin']['filterbymodule'] = 'Filtrare dupa modul';
$lang['admin']['showall'] = 'Afisare toate';
$lang['admin']['core'] = 'Core ';
$lang['admin']['defaultpagecontent'] = 'Continut pagina implicit';
$lang['admin']['file_url'] = 'Link catre fisier (in loc de URL)';
$lang['admin']['no_file_url'] = 'Nimic (folosire URL de mai sus)';
$lang['admin']['defaultparentpage'] = 'Pagina parinte implicita';
$lang['admin']['error_udt_name_whitespace'] = 'Eroare: Etichetele definite de utilizatori nu pot avea spatii un nume.';
$lang['admin']['warning_safe_mode'] = '<strong><em>ATENTIE:</em></strong> PHP Safe mode este activat. Acest lucru va cauza dificultati cu fisierele uploadate via browserul web, incluzand imagini, teme si pachete XML module. Vasfatuim sa contactati administratorul pentru a vedea cum se poate dezactiva safe mode.';
$lang['admin']['test'] = 'Testare';
$lang['admin']['results'] = 'Rezulate';
$lang['admin']['untested'] = 'Nu este testat';
$lang['admin']['unknown'] = 'Necunoscut';
$lang['admin']['download'] = 'Descarcare';
$lang['admin']['frontendwysiwygtouse'] = 'Wysiwyg frontend';
$lang['admin']['all_groups'] = 'Toate grupurile';
$lang['admin']['error_type'] = 'Tip eroare';
$lang['admin']['contenttype_errorpage'] = 'Pagina eroare';
$lang['admin']['errorpagealreadyinuse'] = 'Cod eroare folosit deja';
$lang['admin']['404description'] = 'Pagina nu a fost gasita';
$lang['admin']['usernotfound'] = 'Utilizatorul nu a fost gasit.';
$lang['admin']['passwordchange'] = 'Va rugam sa introduceti parola noua';
$lang['admin']['recoveryemailsent'] = 'A fost trimis un mesaj e-mail la adresa din cont. Va rugam sa verificati casuta dumneavoastra de e-mail pentru mai multe instructiuni.';
$lang['admin']['errorsendingemail'] = 'A aparut o eroare la trimiterea e-mailului. Luati legatura cu administratorul.';
$lang['admin']['passwordchangedlogin'] = 'Parola schimbata. Va rugam sa va autentificati folosind credentialele noi.';
$lang['admin']['nopasswordforrecovery'] = 'Acest utilizator nu are setata nici o adresa de e-mail. Nu este posibila recuperarea parolei. Luati legatura cu administratorul.';
$lang['admin']['lostpw'] = 'Ati uitat parola?';
$lang['admin']['lostpwemailsubject'] = '[%s] Recuperare parola';
$lang['admin']['lostpwemail'] = 'Ati primit acest e-mail deoarece o cerere a fost facuta pentru schimbarea parolei (%s) asociata cu acest cont utilizator  (%s). Daca doriti sa resetati parola pentru acest cont dati clic pe linkul de mai jos sau copiati-l in campul de adresa al browserului preferat:
%s

Daca credeti ca este o greseala, pur si simplu ignorati acest mesaj si nimic nu va fi modificat..';
$lang['admin']['utma'] = '156861353.1477009656.1272913798.1272913798.1274603745.2';
$lang['admin']['utmz'] = '156861353.1274603746.2.3.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cms ms';
$lang['admin']['qca'] = 'P0-1739349973-1272913798681';
$lang['admin']['utmb'] = '156861353.2.10.1274603745';
$lang['admin']['utmc'] = '156861353';
?>
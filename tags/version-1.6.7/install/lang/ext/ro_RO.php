<?php
$lang['invalidemail'] = 'Adresa de e-mail introdusa este goala';
$lang['empty_query'] = 'Interogare goala?? %s';
$lang['no_db_driver'] = 'Nu s-au gasit driveri de baze de date compatibili';
$lang['test_check_output_buffering'] = 'Se verifica buffer output';
$lang['test_check_output_buffering_failed'] = 'Output buffering este dezactivat. Probabil nu veti putea folosi nici una din functionalitatile care il folosesc';
$lang['phpinfo'] = 'Afisare Informatii PHP';
$lang['mod_security'] = 'Mod Security Apache';
$lang['test_check_tempnam'] = 'Verificare pentru functia tempnam';
$lang['test_check_db_drivers'] = 'driveri Baze de Date';
$lang['test_check_db_drivers_failed'] = 'Nu s-au gasit driveri de Baze de Date';
$lang['test_check_register_globals'] = 'Verificare PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals este activa. Din motive de securitate, ar trebui sa fie dezacctivata.';
$lang['test_check_disable_functions'] = 'Verificare functii PHP dezactivate';
$lang['test_check_disable_functions_failed'] = 'Atentie: aceasta este o lista a functiilor dezactivate pe server.';
$lang['install_admin_db_port'] = 'Port baza de date';
$lang['install_admin_db_port_info'] = 'Daca nu il stiti, lasati campul gol pentru a folosi setarile implicite.';
$lang['install_admin_db_socket'] = 'Socket baza de date';
$lang['install_admin_db_socket_info'] = 'NESUPORTAT.';
$lang['install_admin_frontendlang'] = 'Limba implicita pentru frontend. Aceasta ajusteaza setarile de localizare folosite pentru variate functii de manipulare de data, etc.';
$lang['install_default_encoding'] = 'In aproape toate cazurile, default_encoding ar trebui sa fie utf-8.';
$lang['installer_done'] = '[gata]';
$lang['installer_failed'] = '[esuat]';
$lang['create_permission'] = 'Creare permisiuni ...';
$lang['add_column_sql'] = 'Adaugare coloana in tabelul %s ...';
$lang['update_table_sql'] = 'Actualizare tabel %s ...';
$lang['installing_module'] = 'Instalare modul %s ...';
$lang['updating_schema_version'] = 'Actualizare versiune %s schema ...';
$lang['upgrade_config'] = 'Actualizare config.php';
$lang['upgrade_config_info'] = 'config actualizat';
$lang['upgrade_failed_again'] = 'Una sau mai multe actualizari au esuat. Corectati problema si dati clic pe butonul de mai jos pentru a reverifica.';
$lang['upgrade_cache_dirs'] = 'Curatare foldere cache';
$lang['cannot_clean_cache_dirs'] = 'Nu se pot curata folderele cache!';
$lang['upgrade_schema'] = 'Actualizare schema';
$lang['need_upgrade_schema'] = 'CMS-ul trebuie sa fie actualizat.<br />In acest moment folositi versiunea schema %s si ar trebui sa actualizati la versiunea %s';
$lang['schema_ok'] = 'Baza de date a CMS-ului este la zi.  Se foloseste versiune schema %s';
$lang['noneed_upgrade_schema'] = 'Baza de date a CMS-ului este la zi.  Se foloseste versiune schema %s';
$lang['upgrade_modules'] = 'Actualizare module';
$lang['noneed_upgrade_modules'] = 'Modulele core sunt la zi';
$lang['upgrade_sql_module_from_to'] = 'Se actualizeaza SQL pentru modulului &quot;%s&quot; de la %s la %s ...';
$lang['upgrade_event_module_from_to'] = 'Se actualizeaza Evenimente pentru modulul &quot;%s&quot; de la %s la %s ...';
$lang['sitedown_not_removed'] = 'Nu s-a putut inlatura fisierul tmp/cache/SITEDOWN . Inlaturati manual fisierul sau situl va continua sa afiseze mesajul  &quot;Site in Maintainence&quot;';
$lang['upgrade_ok'] = 'Verificati config.php, modificati setarile dupa necesitati si resetatii permisiunile inapoi la o stare blocata. Ar trebui sa verificati ca toate modulele sunt la zi, mergand la pagina Extensii -> Module si cautand acolo care din ele sunt listate ca &quot;Necesita Actualizare&quot;';
$lang['upgrade_complete'] = 'Proces actualizare finalizat';
$lang['upgrade_end'] = 'CMS-ul este la zi. Dati clic %s pentru a merge la site sau puteti sa %s.';
$lang['here'] = 'aici';
$lang['go_to_admin'] = 'mergeti la Panoul de Administrare';
$lang['errorfilenot'] = 'Fisierul nu a fost gasit!';
$lang['errorfilenotwritable'] = 'Fisierul nu are permisiuni de scriere!';
$lang['nofiles'] = 'Aceasta resursa nu exista!';
$lang['is_directory'] = 'Aceasta resursa este un folder!';
$lang['is_readable_false'] = 'Aceasta resursa nu poate fi citita!';
$lang['checksum_match'] = 'Checksum-ul corespunde!';
$lang['checksum_not_match'] = 'Checksum-ul NU corespunde!';
$lang['not_checksum'] = 'Nu s-a putut obtine un checksum!';
$lang['format_datetime'] = '%c ';
$lang['upload_err_ini_size'] = 'Fisierul uploadat depaseste directiva upload_max_filesize din php.ini!';
$lang['upload_err_form_size'] = 'Fisierul uploadat depaseste directiva MAX_FILE_SIZE care a fost specificata in formular.';
$lang['upload_err_partial'] = 'Fisierul a fost uploadat doar partial.';
$lang['upload_err_no_file'] = 'Nu s-a uploadat nici un fisier.';
$lang['upload_err_no_tmp_dir'] = 'Lipseste un folder temporar.';
$lang['upload_err_cant_write'] = 'Eroare la scriere fisier pe disk.';
$lang['upload_err_extension'] = 'Upload fisier stopat din cauza extensiei.';
$lang['upload_err_empty'] = 'Fisierul are dimensiune zero';
$lang['upload_err_unknown'] = 'Problema necunoscuta la upload fisier.';
$lang['function_file_uploads_off'] = 'directiva file_uploads este dezactivata in configuratia php!';
$lang['upload_file_no_readable'] = 'Fisierul uploadat nu poate fi citit!';
$lang['upload_file_multiple'] = 'Nu sunt permise uploaduri multiple!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes pentru operatiuni Get/Post/Cookie';
$lang['test_check_magic_quotes_gpc_failed'] = 'Cand magic_quotes sunt activate, toate ghilimelele simple, duble si backslash sunt mascate cu backslash automat. Acest lucru poate produse probleme in CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes la runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'Cand magic_quotes sunt activate, cele mai multe functii care returneaza date din orice fel de sursa externa incluzand baze de date si fisiere text vor avea ghilimelele mascate cu backslash. Acest lucru va cauza probleme.';
$lang['install_admin_checksum'] = 'Verificati instalarea';
$lang['upgrade_admin_checksum'] = 'Verificati actualizarea sistemului';
$lang['checksum'] = 'Test checksum';
$lang['checksum_file'] = 'Fisier checksum';
$lang['install_test_checksum'] = 'Puteti valida integritatea fisierelor CMS-ului facand comparatia cu checksum-ul original al CMS-ului. Este util pentru gasirea problemelor de upload.';
$lang['checksum_passed'] = 'Toate checksum-urile se potrivesc!';
$lang['checksum_failed'] = 'Potrivire checksum cu erori. La Ajutor vadeti mai multe informatii';
$lang['test_check_open_basedir'] = 'Verificare pentru PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Restrictii Open basedir in efect. S-ar putea sa aveti dificultati cu unele functionalitati ale addon-urilor cu aceasta restrictie.';
$lang['unlimited'] = 'Nelimitat';
$lang['test_open_basedir_session_save_path'] = 'Restrictii Open basedir par a fi in efect. Daca aveti erori SESSION si ini_set functioneaza, puteti incerca sa activati sesiunile cu cookies adaugand: ini_set(&#039;session.use_only_cookies&#039;, 1); la inceputul config.php';
$lang['install_warn_db_createtables'] = 'In mod normal acest camp ar trebui sa fie bifat. Fiti precauti cand dezactivati aceasta caracteristica';
$lang['install_admin_tablesnotcreated'] = 'Proces finalizat. Procesul de instalare a fost finalizat, la cererea dumneavoastra nu au fost create tabele in baza de date. Totusi, fisierul de configurare a fost resetat si toate testele de pre-instalare au fost trecute. Va multumim, aici este ';
$lang['info_create_dir_and_file'] = 'Proprietarul procesului HTTP nu poate crea un fisier intr-un folder pe care il detine. Acest lucru inseamna ca probabil  safe mode este activat in vreun fel. Multe functii ale CMS Made Simple nu vor functiona corect fara aceasta abilitate. Continuarea NU este posibila.';
$lang['test_create_dir_and_file'] = 'Se verifica daca procesul httpd poate crea un fisier intr-un folder pe care l-a creat.';
$lang['cms_site'] = 'Site-ul';
$lang['or_greater'] = 'Sau mai mare';
$lang['sitename'] = 'Nume site';
$lang['warning_safe_mode'] = '<strong><em>ATENTIE:</em></strong> PHP Safe mode este activat. Acest lucru va cauza probleme cu fisierele uploadate via interfata browserului web, incluzand imagini, teme si pachete XML module. Va sfatuim sa luati legatura cu administratorul pentru dezactivarea safe-mode.';
$lang['test'] = 'Testare';
$lang['results'] = 'Resultate';
$lang['untested'] = 'Netestat';
$lang['owner'] = 'Proprietar';
$lang['permissions'] = 'Permisiuni';
$lang['off'] = 'Dezactivat';
$lang['on'] = 'Activat';
$lang['permission_information'] = 'Informatii permisiuni';
$lang['server_os'] = 'Sistem Operare Server';
$lang['server_api'] = 'API Server';
$lang['server_software'] = 'Software Server';
$lang['server_information'] = 'Informatii Server';
$lang['session_save_path'] = 'Cale salvare sesiune';
$lang['max_execution_time'] = 'Timp maxim executie';
$lang['gd_version'] = 'versiune GD';
$lang['upload_max_filesize'] = 'Dimensiune maxima upload';
$lang['post_max_size'] = 'Dinmesiune maxima Post';
$lang['memory_limit'] = 'Limita memorie PHP';
$lang['server_db_type'] = 'Server Baza de date';
$lang['server_db_version'] = 'Versiune Server Baza de date';
$lang['phpversion'] = 'Versiune curenta PHP';
$lang['safe_mode'] = 'Safe Mode PHP';
$lang['php_information'] = 'Informatii PHP';
$lang['cms_install_information'] = 'Informatii instalare CMS';
$lang['cms_version'] = 'Versiune CMS';
$lang['systeminfo_copy_paste'] = 'Va rugam sa copiati si sa lipiti textul selectat in postarea dumneavoastra de pe forum';
$lang['help_systeminformation'] = 'Informatiile afisate mai jos sunt colectate dintr-o varietate de surse, si adunate astfel incat sa gasiti rapid informatiile necesare cand incercati sa diagnosticati o problema sau sa cereti ajutor in privinta instalarii dumneavoastra de CMS Made Simple.';
$lang['systeminfo'] = 'Informatii sistem';
$lang['systeminfodescription'] = 'Afiseaza variate informatii despre sistemul dumneavoastra care ar putea fi utile in diagnosticarea problemelor';
$lang['error'] = 'Eroare';
$lang['new_version_available'] = '<em>Notita:</em> O versiune noua de CMS Made Simple este disponibila. Notificati administratorul.';
$lang['info_urlcheckversion'] = 'Daca acest URL este cuvantul &quot;nimic&quot; nicio verificare nu va fi facuta.<br/>Un sir gol va rezulta in folosirea unui URL implicit.';
$lang['urlcheckversion'] = 'Verificati pentru versiuni noi de CMS folosind acest URL';
$lang['read'] = 'Citire';
$lang['write'] = 'Scriere';
$lang['execute'] = 'Executare';
$lang['group'] = 'Grup';
$lang['other'] = 'Altele';
$lang['global_umask'] = 'Masca creare fisier (umask)';
$lang['errorcantcreatefile'] = 'Nu s-a putut crea un fisier (probleme de permisiuni?)';
$lang['add'] = 'Adaugare';
$lang['about'] = 'Despre';
$lang['action'] = 'Actiune';
$lang['actionstatus'] = 'Actiune/Status';
$lang['active'] = 'Activ';
$lang['cantremove'] = 'Nu se poate inlatura';
$lang['changepermissions'] = 'Schimbare permisiuni';
$lang['changepermissionsconfirm'] = 'FITI PRECAUT\n\nAceasta actiune va incerca sa se asigure ca toate fisierele care compun modulul sunt editabile de catre serverul web.\nSigur doriti sa continuati?';
$lang['success'] = 'Succes';
$lang['advanced'] = 'Avansat';
$lang['back'] = 'Inapoi la Meniu';
$lang['cancel'] = 'Anulare';
$lang['cantchmodfiles'] = 'Nu s-au putut modifica permisiunile pentru unele fisiere';
$lang['cantremovefiles'] = 'Probleme la inlaturare fisiere (permisiuni?)';
$lang['create'] = 'Creare';
$lang['database'] = 'Baza de Date';
$lang['databaseprefix'] = 'Prefix Baza de Date';
$lang['databasetype'] = 'Tip Baza de Date';
$lang['date'] = 'Data';
$lang['default'] = 'Implicit';
$lang['delete'] = 'Stergere';
$lang['deleteconfirm'] = 'Sigur doriti sa stergeti - %s - ?';
$lang['description'] = 'Descriere';
$lang['directoryexists'] = 'Acest folder exista deja.';
$lang['down'] = 'Jos';
$lang['edit'] = 'Editare';
$lang['email'] = 'Adresa E-mail';
$lang['errordeletingfile'] = 'Nu s-a putut sterge fisierul. Problema de permisiuni?';
$lang['errordirectorynotwritable'] = 'Nu sunt permisiuni de scriere in folder. Acest lucru poate fi cauzat de permisiunile fisierelor.  Safe mode e posibil sa fie, de asemenea, in efect.';
$lang['cachenotwritable'] = 'Folderul cache nu are permisiuni de scriere. Golirea cache-ului nu va functiona. Verificati ca folderul tmp/cache are permisiuni complete de scriere/citire (chmod 777). E posibil sa trebuiasca sa dezactivati safe mode.';
$lang['modulesnotwritable'] = 'Folderul module nu are permisiuni de scriere, daca doriti sa instalati module prin uploadul unui fisier XML trebuie sa ii dati acestuii folder permisiuni complete de scriere/citire (chmod 777).  Safe mode e posibil sa fie activ.';
$lang['false'] = 'Fals';
$lang['settrue'] = 'Setare Adevarat';
$lang['filename'] = 'Nume fisier';
$lang['filesize'] = 'Dimensiune fisier';
$lang['help'] = 'Ajutor';
$lang['language'] = 'Limba';
$lang['lastname'] = 'Nume familie';
$lang['name'] = 'Prenume';
$lang['password'] = 'Parola';
$lang['passwordagain'] = 'Parola (din nou)';
$lang['remove'] = 'Inlaturare';
$lang['saveconfig'] = 'Salvare Configuratie';
$lang['true'] = 'Adevarat';
$lang['setfalse'] = 'Setare Fals';
$lang['type'] = 'Tip';
$lang['typenotvalid'] = 'Tip invalid';
$lang['unknown'] = 'Necunoscut';
$lang['user'] = 'Utilizator';
$lang['userdefinedtags'] = 'Etichete definite utilizator';
$lang['usermanagement'] = 'Management utilizatori';
$lang['username'] = 'Nume utilizator';
$lang['usernameincorrect'] = 'Nume utilizator sau parola incorecte';
$lang['version'] = 'Versiunea';
$lang['install_title'] = 'Instalare CMS Made Simple (pas %s)';
$lang['install_system'] = 'Instalare sistem';
$lang['install_thanks'] = 'Va multumim ca instalati CMS Made Simple';
$lang['upgrade_title'] = 'Actualizare CMS Made Simple (pas %s)';
$lang['upgrade_system'] = 'Actualizare sistem';
$lang['upgrade_thanks'] = 'Va multumim ca actualizati CMS Made Simple la';
$lang['install_please_read'] = 'Cititi pagina <a rel="external" href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Troubleshooting instalare</a> din CMS Made Simple Documentation Wiki.';
$lang['install_checking'] = 'Verificare permisiuni si setari PHP';
$lang['install_test'] = 'Test ';
$lang['install_result'] = 'Rezultat';
$lang['install_required_settings'] = 'Setari obligatorii';
$lang['install_recommended_settings'] = 'Setari recomandate';
$lang['install_you_have'] = 'Aveti';
$lang['install_legend'] = 'Legenda';
$lang['install_symbol'] = 'Simbol';
$lang['install_definition'] = 'Definitie';
$lang['install_value_passed'] = 'Un test obligatoriu a fost trecut';
$lang['install_value_failed'] = 'Un test obligatoriu a fost picat';
$lang['install_error_fragment'] = 'Informatii Troubleshooting Instalare';
$lang['install_value_required'] = 'O setare este sub valoarea minima ceruta';
$lang['install_value_recommended'] = 'O setare este peste valoarea minima ceruta, dar sub valoarea recomandata<br />sau...O capabilitate care <em>ar putea</em> fi ceruta pentru unele functionalitati optionale este indisponibila';
$lang['install_value_exceed'] = 'O setare este la minimul recomandat sau peste<br />sau...O capabilitate care <em>ar putea</em> fi ceruta pentru unele functionalitati optionale este disponibila';
$lang['install_test_failed'] = 'Unul sau mai multe teste au picat sau au atentionari. Puteti sa continuati instalarea dar unele functionalitati e posibil sa nu functioneze corect.<br />Va rugam sa incercati sa corectati situatia si sa dati clic pe &quot;Incercati din nou&quot;, sau dati clic pe butonul &quot;Continuati&quot; daca rezultatele se refera numai la cerinte recomandate.';
$lang['install_test_passed'] = 'Toate testele au fost trecute (cel putin la nivelul minim cerut). Dati clic pe butonul &quot;Continuati&quot;.';
$lang['install_failed_again'] = 'Unul sau mai multe teste au picat. Corectati problema si dati clic pe butonul de mai jos pentru reverificare.';
$lang['install_try_again'] = 'Incercati din nou';
$lang['install_continue'] = 'Continuati';
$lang['failure'] = 'Picat';
$lang['caution'] = 'Atentie';
$lang['install_admin_umask'] = 'Testare masca creare fisier (umask)';
$lang['install_test_umask'] = 'Dati clic pe butonul Test pentru verificare umask introdus ...';
$lang['test_umask_text'] = 'umask (prescurtare de la user file creation mode mask) este o functie in medii POSIX care afecteaza modul implicit al sistemului de fisiere pentru fisierele si folderele nou create ale procesului curent. Controleaza care din permisiuni nu vor fi setate pentru orice fisier nou creat.';
$lang['test_check_umask'] = 'Rezultate test pentru fisier creat in';
$lang['test_umask_not_given'] = 'Umask neintrodus';
$lang['test_check_umask_failed'] = 'Test umask picat';
$lang['test_username_not_given'] = 'Trebuie sa introduceti un Nume utilizator.';
$lang['test_username_illegal'] = 'Numele de utilizator contine caractere ilegale!';
$lang['test_not_both_passwd'] = 'Completati ambele campuri de parola.';
$lang['test_passwd_not_match'] = 'Campurile de parola nu se potrivesc!';
$lang['test_email_accountinfo'] = 'Informatii cont e-mail introduse, dar nu s-a introdus adresa de e-mail!';
$lang['test_database_prefix'] = 'Prefix baza de date contine caractere invalide';
$lang['test_no_dbms'] = 'Nici un dbms selectat!';
$lang['test_could_not_connect_db'] = 'Conectare la baza de date esuata. Verificati ca numele de utilizator si parola sunt corecte, si ca utilizatorul are acces la baza de date introdusa.';
$lang['test_could_not_drop_table'] = 'Nu s-a putut sterge un tabel. Verificati ca utilizatorul are privilegii drop tables in baza de date introdusa.';
$lang['test_could_not_create_table'] = 'Nu s-a putut crea un tabel. Verificati ca utilizatorul introdus are privilegii de vreare tabele in baza de date introdusa.';
$lang['test_check_php'] = 'Verificare versiune PHP %s+';
$lang['test_min_recommend'] = '(minim %s, recomandat %s sau mai noua)';
$lang['test_min_recommend_plus'] = '(min %s, recomandat %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple cere o versiune php 4.3 sau mai noua (aveti %s), dar PHP %s sau mai noua se recomanda pentru a asigura maxima compatibilitate cu addon-urile third-party';
$lang['test_check_md5_func'] = 'Verificare pentru functie md5';
$lang['test_check_safe_mode'] = 'Verificare pentru safe mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode ar putea sa creeze probleme cu uploadul de fisiere  si alte functii. Depinde de cat de stricte sunt setarile safe mode de pe server.';
$lang['test_check_tokenizer'] = 'Verificare pentru functii tokenizer';
$lang['test_check_tokenizer_failed'] = 'Daca nu aveti tokenizer-ul este posibil ca paginile sa fie randate albe pur si simplu. Este obligatoriu sa fie instalat.';
$lang['test_check_gd'] = 'Verificare librarie GD';
$lang['test_check_gd_failed'] = 'Libraria GD este obligatorie pentru unele module si functionalitati.';
$lang['test_check_write'] = 'Verificare permisiuni scriere pentru';
$lang['test_may_not_exist'] = 'Acest fisier e posibil sa nu existe inca. Daca e asa, ar trebui sa creati un fisier gol cu acest nume. Verificati de asemenea ca fisierul are permisiuni de scriere pentru procesul serverului web.';
$lang['could_not_retrieve_a_value'] = 'Nu am putut obtine o valoare.... trece totusi.';
$lang['displaying_the_value_originally'] = '<br />Afisare valoare setata initial in fiserul config (ar putea sa nu fie corecta).';
$lang['test_check_xml_func'] = 'Verificare suport de baza XML (expat)';
$lang['test_check_xml_failed'] = 'Suportul pentru XML nu este compilat in php. Puteti totusi sa folositi sitemul, dar nu va fi capabil sa utilizeze nici una din functiile modulului de instalare remote.';
$lang['test_allow_url_fopen_failed'] = 'Cand allow url fopen este dezactivat nu veti putea sa accesati obiecte URL cum ar fi fisiere folosind protocoalele ftp sau http.';
$lang['test_remote_url'] = 'Test pentru remote URL';
$lang['test_remote_url_failed'] = 'Probabil nu veti putea deschide un fisier de pe un server web remote.';
$lang['connection_error'] = 'Conexiunile http spre exterior nu functioneaza! Aveti un firewall sau ACL pentru conexiunile externe? Acest lucru va rezulta in managerul de module si potential si alte functionalitati nefunctionale.';
$lang['remote_connection_timeout'] = 'Conectare Timed Out!';
$lang['search_string_find'] = 'Conectare ok!';
$lang['connection_failed'] = 'Conectare esuata!';
$lang['remote_response_ok'] = 'Raspuns remote: ok!';
$lang['remote_response_404'] = 'Raspuns remote: nu a fost gasit!';
$lang['remote_response_error'] = 'Raspuns remote: eroare!';
$lang['test_check_file_upload'] = 'Verificare upload fisiere';
$lang['test_check_file_failed'] = 'Cand uploadurile de fisiere sunt dezactivate nu veti putea sa folositi nici una din functionalitatile de upload incluse in CMS Made Simple. Daca e posibil, aceasta restrictie ar trebui sa fie ridicata de administratorul serverului pentru a putea folosi corect toate functionalitatile de management de fisiere ale sistemului. Continuati cu precautie.';
$lang['test_check_memory'] = 'Verificare limita memorie PHP';
$lang['test_check_memory_failed'] = 'E posibil sa nu aveti suficienta memorie pentru a rula corect CMSMS, sau cu toate addon-urile dorite instalate. Daca e posibil, incercati sa convingeti administratorul serverului sa creasca aceasta valoare. Continuati cu precautie.';
$lang['test_check_time_limit'] = 'Verificare limita de timp PHP in secunde';
$lang['test_check_time_limit_failed'] = 'Numar de secunde cat un script poate sa ruleze. Daca ea este atinsa, scriptul returneaza o eroare fatala.';
$lang['test_check_post_max'] = 'Verificare marime maxima post';
$lang['test_check_post_max_failed'] = 'Probabil nu veti putea trimite prin POST (formulare...) date (mai multe). Luati in considerare aceasta restrictie.';
$lang['test_check_upload_max'] = 'Verificare marime maxima fisier pentru upload';
$lang['test_check_upload_max_failed'] = 'Probabil nu veti putea uploada fisiere (mai mari) folosind functiile de management de fisiere. Luati in considerare aceasta restrictie.';
$lang['test_check_writable'] = 'Verificare daca %s are permisiuni de scriere';
$lang['test_check_upload_failed'] = 'Folderul de upload-uri nu are permisiuni de scriere. Puteti sa instalati sistemul, dar nu veti putea uploada fisiere via panoul de administrare.';
$lang['test_check_images_failed'] = 'Folderul de imagini nu are permisiuni de scriere. Puteti sa instalati sistemul, dar nu veti putea uploada si folosi imagini via panoul de administrare.';
$lang['test_check_modules_failed'] = 'Folderul de module nu are permisiuni de scriere. Puteti sa instalati sistemul, dar nu veti putea uploada module via panoul de administrare.';
$lang['test_check_file_get_contents'] = 'Verificare pentru file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'Probabil nu veti putea folosi nici una din functionalitatile care folosesc aceasta functie';
$lang['test_check_session_save_path'] = 'Verificare daca if session.save_path are permisiuni de scriere';
$lang['test_empty_session_save_path'] = 'Calea session.save_path este goala. PHP va folosi folderul temporar al sistemului de operare. Daca aveti probleme legate de SESSION si ini_set functioneaza puteti incerca sa activati cookie-urile pentru sesiuni adaugand: ini_set(&#039;session.use_only_cookies&#039;, 1);  la inceputul include.php';
$lang['test_check_session_save_path_failed'] = 'Calea session.save_path este &quot;%s&quot;. Daca nu are permisiuni de scriere este posibil sa nu mearga autentificarea in panoul de administrare. Verificati ca aceasta cale sa aiba permisiuni de scriere daca aveti probleme cu autentificarea in Panoul de Administrare. Acest test ar putea esua daca safe_mode este activat (vedeti mai jos).';
$lang['test_check_ini_set'] = 'Verificare daca ini_set functioneaza';
$lang['test_check_ini_set_failed'] = 'Desi abilitatea de a suprascrie setari php ini nu este obligatorie, unele functionalitati (optionale) ale addon-urilor folosesc ini_set pentru a extinde timeout-urile, pentru a putea uploada fisiere mai mari, etc. S-ar putea sa aveti dificultati cu unele functionalitati legate de addon-uri fara aceasta capabilitate. Acest test ar putea esua daca safe_mode este activat (vedeti mai jos).';
$lang['install_admin_header'] = 'Informatii cont Administrator';
$lang['install_admin_info'] = 'Selectati nume utilizator, parola si adresa e-mail pentru contul de Administrator. Sa aveti grija sa nu uitati / pierdeti parola.';
$lang['install_admin_email'] = 'Adresa e-mail';
$lang['install_admin_email_info'] = 'Informatii cont e-mail';
$lang['install_admin_email_note'] = '<strong>Nota:</strong> Acest task foloseste functia mail a php. Daca nu primiti acest e-mail, ar putea fi o indicatie ca serverul nu este configurat corect si ca ar trebui sa contactati un administrator de la hosting.';
$lang['install_admin_sitename'] = 'Acesta este numele sitului. El vafi folosit in variate locuri din template-urile implicite si poate fi folosit oriunde in site cu ajutorul etichetei {sitename}.';
$lang['install_admin_db'] = 'Informatii baza de date';
$lang['install_admin_db_info'] = '<p>Verificati ca ati creat baza de date si ca ati acordat privilegii depline unui utilizator pentru a folosi aceea baza de date.</p>
<p>Pentru MySQL, puteti face astfel:</p>
<p>Autentificati-va in mysql de la consola si rulati urmatoarele comenzi:</p>
<ol>
<li>create database cms; (folositi orice nume doriti aici, numai sa il tineti minte, va trebui sa il introduceti in aceasta pagina)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Completati urmatoarele campuri';
$lang['install_admin_db_type'] = 'Tip Baza de Date';
$lang['install_admin_no_db'] = 'Nici un driver valid de baza de date nu pare a fi compilat in instalarea de PHP. Verificati ca aveti suport pentru mysql, mysqli, si/sau postgres7 instalat, si incercati din nou.';
$lang['install_admin_db_host'] = 'Adresa host Baza de Date';
$lang['install_admin_db_name'] = 'Nume Baza de Date';
$lang['install_admin_db_create'] = 'Creare Tabele (Atentie: Se sterg datele existente)';
$lang['install_admin_db_prefix'] = 'Prefix tabele';
$lang['install_admin_db_sample'] = 'Instalare continut si template-uri demo';
$lang['retry'] = 'Reincercare';
$lang['install_admin_db_create_seq'] = 'Creare secventa tabel %s ...';
$lang['install_admin_importing'] = 'Import date demo...';
$lang['invalid_query'] = 'Interogare invalida: %s';
$lang['install_creating_table'] = '<p>Creare tabel %s ... [%s]</p>';
$lang['install_creating_index'] = '<p>Creare index in tabel %s ... [%s]</p>';
$lang['done'] = 'gata';
$lang['failed'] = 'esuat';
$lang['install_admin_error_schema'] = 'Eroare la obtinere schema SQL';
$lang['install_admin_set_account'] = 'Setare informatii cont administrare...';
$lang['install_admin_set_sitename'] = 'Setare nume site...';
$lang['install_admin_setup'] = 'Acum sa continuam cu setarea fisierului de configuratie, avem deja mare parte din informatiile necesare. Sansele sunt ca puteti lasa valorile asa cum sunt, asa ca atunci cand sunteti gata, clic Continuare.';
$lang['install_admin_docroot'] = 'Radacina CMS Document (asa cum se vede de pe webserver)';
$lang['install_admin_docroot_path'] = 'Calea catre radacina Document';
$lang['install_admin_querystring'] = 'String interogare (lasati asa cum este daca nu aveti probleme, atunci editati config.php manual)';
$lang['invalid_querys'] = '<b>ATENTIE<b/>: Interogari invalide in Baza de Date!';
$lang['install_admin_sitedown'] = 'Eroare: Nu s-a putut inlatura fisierul tmp/cache/SITEDOWN. Inlaturati fisierul manual.';
$lang['install_admin_update_hierarchy'] = 'Actualizare pozitii ierarhie...';
$lang['install_admin_set_core_event'] = 'Setare evenimente core...';
$lang['install_admin_install_modules'] = 'Instalare module...';
$lang['install_admin_index_search'] = 'Index Cautare...';
$lang['install_admin_clear_cache'] = 'Golire cache site (daca e)...';
$lang['install_admin_emailing'] = 'Trimitere e-mail informatii cont administrator...';
$lang['install_admin_congratulations'] = 'Felicitari, instalarea este finalizata -  Aici gasiti';
$lang['could_not_connect_db'] = 'Eroare la conectarea la baza de date. Verificati ca numele de utilizator si parola sunt corecte, si ca utilizatorul are acces la baza de date introdusa.';
$lang['cannot_write_config'] = 'Eroare: Nu se poate scrie in %s.';
$lang['email_accountinfo_subject'] = 'Informatii cont Administrator CMS Made Simple';
$lang['email_accountinfo_message'] = 'Va multumim pentru ca ati instalat CMS Made Simple.

Aici aveti informatiile noului dumneavoastra cont:
Nume utilizator: %s
Parola: %s

Autentificati-va in Panoul de Administrare aici: %s';
$lang['utmc'] = '156861353';
$lang['utma'] = '156861353.3573843717708992500.1250056267.1250058559.1250061299.3';
$lang['qcb'] = '1912438266';
$lang['qca'] = '1249980835-92593492-79567608';
$lang['utmz'] = '156861353.1250056267.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
?>
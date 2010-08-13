<?php
$lang['admin']['session_use_cookies'] = 'Les Sessions poden utilitzar Galetes (Cookies)';
$lang['admin']['errorgettingcontent'] = 'No s&#039;ha pogut recuperar informaci&oacute; per l&#039;objecte de contingut especificat';
$lang['admin']['errordeletingcontent'] = 'Error eliminant contingut (O b&eacute; la p&agrave;gina t&eacute; fills o b&eacute; es tracta del contingut per defecte)';
$lang['admin']['invalidemail'] = 'L&#039;adre&ccedil;a que has entrat no &eacute;s v&agrave;lida';
$lang['admin']['info_deletepages'] = 'Nota: degut a restriccions de permisos, algunes de les p&agrave;gines triades per eliminar poden no apar&egrave;ixer en la llista seg&uuml;ent';
$lang['admin']['info_pagealias'] = 'Cal indicar un &agrave;lies &uacute;nic per aquesta p&agrave;gina';
$lang['admin']['info_autoalias'] = 'Si aquest camp &eacute;s buit, es crear&agrave; un &agrave;lies autom&agrave;ticament.';
$lang['admin']['invalidparent'] = 'Cal triar una p&agrave;gina pare (contacta l&#039;administrador si no pots veure aquesta opci&oacute;).';
$lang['admin']['forgotpwprompt'] = 'Entra l&#039;usuari administrador. Un email ser&agrave; enviat a l&#039;adre&ccedil;a de correu associada amb aquest nom d&#039;usuari amb nova informaci&oacute; d&#039;entrada.';
$lang['admin']['info_basic_attributes'] = 'Aquest camp permet especificar quines propietats de contingut poden modificar els usuaris sense el perm&iacute;s &#039;Gestiona tot el Contingut&#039;.';
$lang['admin']['basic_attributes'] = 'Propietats b&agrave;siques';
$lang['admin']['no_permission'] = 'No tens perm&iacute;s per realitzar aquesta funci&oacute;';
$lang['admin']['bulk_success'] = 'Operaci&oacute; en bloc actualitzada correctament.';
$lang['admin']['no_bulk_performed'] = 'No s&#039;ha realitzat cap operaci&oacute; en bloc.';
$lang['admin']['info_preview_notice'] = 'Atenci&oacute;: aquest quadre de previsualitzaci&oacute; es comporta de manera molt semblant a la finestra del navegador, cosa que permet navegar fora de la pgina visualitzada inicialment. No obstant aix&ograve;, si ho fas et pots trobar amb un comportament inesperat. Si navegues fora del context i tornes, pots no veure el contingut no desat fins que facis un nou canvi a la pestanya principal i llavors tornis a carregar el previsualitzador. Quan afegeixes nou contingut, si navegues fora la p&agrave;gina no podr&agrave;s tornar, i caldr&agrave; refrescar-la.';
$lang['admin']['sitedownexcludes'] = 'Exclou aquestes adreces dels Missatges de Lloc Caigut';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Configuraci&oacute; avan&ccedil;ada';
$lang['admin']['handle_404'] = 'Gesti&oacute; personalitzada del 404';
$lang['admin']['sitedown_settings'] = 'Configuraci&oacute; de lloc fora de l&iacute;nia';
$lang['admin']['general_settings'] = 'Configuraci&oacute; general';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forja';
$lang['admin']['disable_wysiwyg'] = 'Deshabilita l&#039;editor WYSIWYG en aquesta p&agrave;gina (a desgrat de la configuraci&oacute; de la plantilla)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Un enlla&ccedil; a p&agrave;gina no pot mostrar una altre enlla&ccedil; com a destinaci&oacute;';
$lang['admin']['destinationnotfound'] = 'La p&agrave;gina triada no s&#039;ha pogut trobar o &eacute;s inv&agrave;lida';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Error SQL a %s';
$lang['admin']['image'] = 'Imatge';
$lang['admin']['thumbnail'] = 'Contacte';
$lang['admin']['searchable'] = 'Aquesta p&agrave;gina &eacute;s cercable';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong></em> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Un nom UDT v&agrave;lid comen&ccedil;a amb una lletra o gui&oacute; baix, seguit per qualsevol nombre de lletres, xifres o quions baixos.';
$lang['admin']['errorupdatetemplateallpages'] = 'Plantilla no activa';
$lang['admin']['hidefrommenu'] = 'Amaga del me&uacute;';
$lang['admin']['settemplate'] = 'Fixa la plantilla';
$lang['admin']['text_settemplate'] = 'Canvia la plantilla de les p&agrave;gines triades';
$lang['admin']['cachable'] = 'Memoritzable';
$lang['admin']['noncachable'] = 'No memoritzable';
$lang['admin']['copy_from'] = 'Copia de';
$lang['admin']['copy_to'] = 'Copia a';
$lang['admin']['copycontent'] = 'Copia element de contingut';
$lang['admin']['md5_function'] = 'funci&oacute; md5';
$lang['admin']['tempnam_function'] = 'Funci&oacute; tempnam';
$lang['admin']['register_globals'] = 'register_globals de PHP';
$lang['admin']['output_buffering'] = 'output_buffering de PHP';
$lang['admin']['disable_functions'] = 'disable_functions a PHP';
$lang['admin']['xml_function'] = 'Suport B&agrave;sic XML (expat) ';
$lang['admin']['magic_quotes_gpc'] = 'Cometes m&agrave;giques per Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Cometes simples, cometes dobles i contrabarra s&oacute;n marcades autom&agrave;ticament amb &#039;escape&#039;. ';
$lang['admin']['magic_quotes_runtime'] = 'Cometes m&agrave;giques en temps d&#039;execuci&oacute;';
$lang['admin']['magic_quotes_runtime_on'] = 'La majoria de funcions que tornen un valor tindran les cometes marcades amb una contra-barra. Pots tenir problemes.';
$lang['admin']['file_get_contents'] = 'Verifica file_get_contents';
$lang['admin']['check_ini_set'] = 'Verifica ini_set';
$lang['admin']['check_ini_set_off'] = 'Pot ser que tinguis dificultats amb alguna funcionalitat sense aquesta capacitat. Aquesta verificaci&oacute; pot fallar si el fail_safe_mode est&agrave; habilitat';
$lang['admin']['file_uploads'] = 'Pujada d&#039;arxius';
$lang['admin']['test_remote_url'] = 'Prova la URL remota';
$lang['admin']['test_remote_url_failed'] = 'Probablement no podr&agrave;s obrir l&#039;arxiu en un servidor remot';
$lang['admin']['test_allow_url_fopen_failed'] = 'Quan l&#039;opci&oacute; de permetre &#039;url fopen&#039; es deshabilita, no podr&agrave;s accedir a un objecte URL com un arxiu utilitzant els protocols ftp ni http.';
$lang['admin']['connection_error'] = 'Les connexions exteriors de tipus http sembla que no funcionen! &Eacute;s possible que hi hagi un tallafocs o alguns ACL per les connexions externes?. Aix&ograve; provocar&agrave; que el m&ograve;dul &#039;Module Manager&#039;, i potencialment altra funcionalitat, falli.';
$lang['admin']['remote_connection_timeout'] = 'La connexi&oacute; ha caducat!';
$lang['admin']['search_string_find'] = 'Connexi&oacute; correcta!';
$lang['admin']['connection_failed'] = 'La connexi&oacute; ha fallat!';
$lang['admin']['remote_response_ok'] = 'Resposta remota: ok!';
$lang['admin']['remote_response_404'] = 'Resposta remota: no s&#039;ha trobat!';
$lang['admin']['remote_response_error'] = 'Resposta remota: error!';
$lang['admin']['notifications_to_handle'] = 'Tens <b>%d</b> notificacions no revisades';
$lang['admin']['notification_to_handle'] = 'Tens <b>%d</b> notificacions no revisades';
$lang['admin']['notifications'] = 'Notificacions';
$lang['admin']['dashboard'] = 'Veure Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorar notificacions des d&#039;aquests m&ograve;duls';
$lang['admin']['admin_enablenotifications'] = 'Permetre els usuaris de veure les notificacions<br/><em>(les notificacions es mostraran en totes les p&agrave;gines d&#039;administraci&oacute;)</em>';
$lang['admin']['enablenotifications'] = 'Habilitar notificacions d&#039;usuari a la secci&oacute; d&#039;administraci&oacute;';
$lang['admin']['test_check_open_basedir_failed'] = 'Restricci&oacute; Open Basedir activa. Pots tenir algunes dificultats amb funcionalitat d&#039;afegitons amb aquesta restricci&oacute;.';
$lang['admin']['config_writable'] = 'config.php modificable. &Eacute;s m&eacute;s segur si canvies els permisos a &#039;nom&eacute;s lectura&#039;';
$lang['admin']['caution'] = 'Precauci&oacute;';
$lang['admin']['create_dir_and_file'] = 'Verificant si el proc&eacute;s httpd pot crear un arxiu dins el directori que ha creat';
$lang['admin']['os_session_save_path'] = 'No es verifica degut al cam&iacute; del SO';
$lang['admin']['unlimited'] = 'Il.limitat';
$lang['admin']['open_basedir'] = 'Open Basedir de PHP';
$lang['admin']['open_basedir_active'] = 'Sense verificaci&oacute; donat que open basedir &eacute;s actiu';
$lang['admin']['invalid'] = 'Inv&agrave;lid';
$lang['admin']['checksum_passed'] = 'Tots els checksums coincideixen amb els de l&#039;arxiu pujat';
$lang['admin']['error_retrieving_file_list'] = 'Error recuperant llista d&#039;arxius';
$lang['admin']['files_checksum_failed'] = 'No s&#039;ha pogut generar un checksum pels arxius';
$lang['admin']['failure'] = 'Error';
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
$lang['admin']['page_metadata'] = 'Metadades espec&iacute;fiques de p&agrave;gina';
$lang['admin']['pagedata_codeblock'] = 'Dades o l&ograve;gica smarty que &eacute;s espec&iacute;fica d&#039;aquesta p&agrave;gina';
$lang['admin']['error_uploadproblem'] = 'Error pujant un arxiu';
$lang['admin']['error_nofileuploaded'] = 'No s&#039;ha pujat cap arxiu';
$lang['admin']['files_failed'] = 'Arxius que no han superat la verificaci&oacute; MD5';
$lang['admin']['files_not_found'] = 'Arxius que no s&#039;han trobat';
$lang['admin']['info_generate_cksum_file'] = 'Aquesta funci&oacute; et permetr&agrave; generar un arxiu de checksum i desar-lo al teu ordinador local per validar-lo posteriorment. Aix&ograve; s&#039;hauria de fer just abans de desplegar el teu lloc web i/o despr&eacute;s de qualsevol canvi de versi&oacute; o modificaci&oacute; major.';
$lang['admin']['info_validation'] = 'Aquesta funci&oacute; comparar&agrave; els checksums trobats en el fitxer pujat amb els arxius de la instal.laci&oacute; actual. Pot ajudar a trobar problemes amb pujades, o exactament quins arxius han estat modificats en cas que el teu sistema hagi estat atacat (hacked).  Un arxiu de checksum es genera per cada versi&oacute; de CMS Made simple des de la versi&oacute; 1.4 en amunt.';
$lang['admin']['download_cksum_file'] = 'Descarregar l&#039;arxiu de checksum';
$lang['admin']['perform_validation'] = 'Realitza validaci&oacute;';
$lang['admin']['upload_cksum_file'] = 'Puja arxiu de checksum';
$lang['admin']['checksumdescription'] = 'Valida la integritat dels arxius CMS tot comparant-los amb checksums coneguts';
$lang['admin']['system_verification'] = 'Verificaci&oacute; del sistema';
$lang['admin']['extra1'] = 'Atribut 1 de p&agrave;gina addicional';
$lang['admin']['extra2'] = 'Atribut 2 de p&agrave;gina addicional';
$lang['admin']['extra3'] = 'Atribut 32 de p&agrave;gina addicional';
$lang['admin']['start_upgrade_process'] = 'Comen&ccedil;a el proc&eacute;s de canvi de versi&oacute;';
$lang['admin']['warning_upgrade'] = '<em><strong>Av&iacute;s:</strong></em> CMSMS &eacute;s necessari per fer un canvi de versi&oacute;';
$lang['admin']['warning_upgrade_info1'] = 'Tens en funcionament l&#039;esquema de la versi&oacute; %s. i cal pujar-la a la versi&oacute; %s';
$lang['admin']['warning_upgrade_info2'] = 'Si et plau, clica l&#039;enla&ccedil; seg&uuml;ent: %s.';
$lang['admin']['warning_mail_settings'] = 'La configuraci&oacute; de mail no s&#039;ha realitzat. Aix&ograve; podria interferir amb la capacitat del teu lloc web per enviar missatges. Hauries d&#039;anar a <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a> i configurar els par&agrave;metres de mail amb informaci&oacute; proporcionada pel teu prove&iuml;dor';
$lang['admin']['view_page'] = 'Veure aquesta p&agrave;gina en una nova finestra';
$lang['admin']['off'] = 'Apagat';
$lang['admin']['on'] = 'Connectat';
$lang['admin']['invalid_test'] = 'Valor inv&agrave;lid de par&agrave;metre de prova';
$lang['admin']['copy_paste_forum'] = 'Veure Informe  <em>(adecuat per penjar a f&ograve;rums)</em>';
$lang['admin']['permission_information'] = 'Informaci&oacute; de permisos';
$lang['admin']['server_os'] = 'Sistema operatiu de servidor';
$lang['admin']['server_api'] = 'API de servidor';
$lang['admin']['server_software'] = 'Programari de servidor';
$lang['admin']['server_information'] = 'Informaci&oacute; de servidor';
$lang['admin']['session_save_path'] = 'Cam&iacute; per desar sessi&oacute;';
$lang['admin']['max_execution_time'] = 'Temps m&agrave;xim d&#039;execuci&oacute;';
$lang['admin']['gd_version'] = 'Versi&oacute; de GD';
$lang['admin']['upload_max_filesize'] = 'Mida m&agrave;xima de pujada';
$lang['admin']['post_max_size'] = 'Mida m&agrave;xima de Post';
$lang['admin']['memory_limit'] = 'L&iacute;mit de mem&ograve;ria efectiu de PHP';
$lang['admin']['server_db_type'] = 'Base de dades del servidor';
$lang['admin']['server_db_version'] = 'Versi&oacute; de la base de dades del servidor';
$lang['admin']['phpversion'] = 'Versi&oacute; actual del PHP';
$lang['admin']['safe_mode'] = 'Mode segur de PHP';
$lang['admin']['php_information'] = 'Informaci&oacute; de PHP';
$lang['admin']['cms_install_information'] = 'Informaci&oacute; d&#039;instal.laci&oacute; de CMS';
$lang['admin']['cms_version'] = 'Versi&oacute; de CMS';
$lang['admin']['installed_modules'] = 'M&ograve;duls instal.lats';
$lang['admin']['config_information'] = 'Informaci&oacute; de Configuraci&oacute;';
$lang['admin']['systeminfo_copy_paste'] = 'Si et plau, copia i enganxa aquest text triat en el teu missatge al f&ograve;rum';
$lang['admin']['help_systeminformation'] = 'La informaci&oacute; mostrada a continuaci&oacute; s&#039;ha recollit des d&#039;una varietat de llocs, i resumida aqu&iacute; per tal que puguis convenientment trobar part de la informaci&oacute; neces&agrave;ria quan es prova de diagnosticar un problema o petici&oacute; d&#039;ajuda amb la instal.laci&oacute; del teu CMS Made Simple';
$lang['admin']['systeminfo'] = 'Informaci&oacute; del Sistema';
$lang['admin']['systeminfodescription'] = 'Mostra diversos fragments d&#039;informaci&oacute; sobre el teu sistema que poden ser &uacute;tils per diagnosticar problemes.';
$lang['admin']['welcome_user'] = 'Benvingut';
$lang['admin']['itsbeensincelogin'] = 'Han passat %s de de la teva darrera visita';
$lang['admin']['days'] = 'dies';
$lang['admin']['day'] = 'dia';
$lang['admin']['hours'] = 'hores';
$lang['admin']['hour'] = 'hora';
$lang['admin']['minutes'] = 'minuts';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Aquest par&agrave;metre s&#039;hauria de fixar relativament alt per llocs est&agrave;tics, i s&#039;hauria de fixar a 0 per llocs en desenvolupament.';
$lang['admin']['css_max_age'] = 'M&agrave;xim temps (en segons) durant el qual les fulles d&#039;estil es guarden al navegador';
$lang['admin']['error'] = 'Error';
$lang['admin']['clear_version_check_cache'] = 'Esborra qualsevol verificaci&oacute; de versi&oacute; desada en enviar';
$lang['admin']['new_version_available'] = '<em>Nota:</em> Una nova versi&oacute; de CMS Made Simple &eacute;s disponible.  Si et plau, avisa l&#039;administrador';
$lang['admin']['info_urlcheckversion'] = 'Si aquesta URL cont&eacute; la paraula &quot;none&quot;, no es faran verificacions. <br/>Un text en blanc implica que es faran verificacions amb la URL per defecte.';
$lang['admin']['urlcheckversion'] = 'Cerca noves versions de CMS utilitzant aquesta URL';
$lang['admin']['master_admintheme'] = 'Aspecte d&#039;Administraci&oacute; per defecte (per la p&agrave;gina d&#039;entrada i nous usuaris)';
$lang['admin']['contenttype_separator'] = 'Separador';
$lang['admin']['contenttype_sectionheader'] = 'Cap&ccedil;alera';
$lang['admin']['contenttype_link'] = 'Ella&ccedil; extern';
$lang['admin']['contenttype_content'] = 'Contingut';
$lang['admin']['contenttype_pagelink'] = 'Enlla&ccedil; intern';
$lang['admin']['nogcbwysiwyg'] = 'Deshabilita editors WYSIWYG en blocs globals de contingut';
$lang['admin']['destination_page'] = 'P&agrave;gina de destinaci&oacute;';
$lang['admin']['additional_params'] = 'Par&agrave;metres addicionals';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
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
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
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
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

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
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

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
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
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
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
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
$lang['admin']['login_info_title'] = 'Informaci&oacute;';
$lang['admin']['login_info'] = 'Des d&#039;aquest punt, caldria considerar els par&agrave;metres seg&uuml;ents';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Galetes habilitades al teu navegador</li> 
  <li>Javascript habilitat al teu navegador </li> 
  <li>Windows popup actiu per la seg&uuml;ent adre&ccedil;a:</li> 
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
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
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
$lang['admin']['of'] = 'de';
$lang['admin']['first'] = 'Primer';
$lang['admin']['last'] = 'Darrer';
$lang['admin']['adminspecialgroup'] = 'Av&iacute;s: Membres d&#039;aquest grup tindr&agrave;n autom&agrave;ticament tots els permisos';
$lang['admin']['disablesafemodewarning'] = 'Deshabilitar l&#039;av&iacute;s de modalitat segura d&#039;administraci&oacute;';
$lang['admin']['allowparamcheckwarnings'] = 'Permetre verificacions de par&agrave;metres per crear missatges d&#039;av&iacute;s';
$lang['admin']['date_format_string'] = 'Cadena de Format de Data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> cadena de format de data';
$lang['admin']['last_modified_at'] = 'Darrera modificaci&oacute; de';
$lang['admin']['last_modified_by'] = 'Darrera modificacio feta per';
$lang['admin']['read'] = 'Llegir';
$lang['admin']['write'] = 'Escriure';
$lang['admin']['execute'] = 'Executar';
$lang['admin']['group'] = 'Grup';
$lang['admin']['other'] = 'Altres';
$lang['admin']['event_desc_moduleupgraded'] = 'Enviat en actualitzar un m&ograve;dul';
$lang['admin']['event_desc_moduleinstalled'] = 'Enviat en instal.lar un m&ograve;dul';
$lang['admin']['event_desc_moduleuninstalled'] = 'Enviat en desinstal.lar un m&ograve;dul';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Enviat en actualitzar un tag d&#039;usuari';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Enviat abans d&#039;actualitzar un tag d&#039;usuari';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Enviat abans d&#039;esborrar un tag d&#039;usuari';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Enviat en esborrar un tag d&#039;usuari';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Enviat en afegir un tag d&#039;usuari';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Enviat abans d&#039;afegir un tag d&#039;usuari';
$lang['admin']['global_umask'] = 'M&agrave;scara en crear arxius (umask)';
$lang['admin']['errorcantcreatefile'] = 'No s&#039;ha pogu crear un arxiu (problema de permisos?)';
$lang['admin']['errormoduleversionincompatible'] = 'El m&ograve;dul &eacute;s incompatible amb aquesta versi&oacute; de CMS';
$lang['admin']['errormodulenotloaded'] = 'Error intern, el m&ograve;dul no s&#039;ha instanciat';
$lang['admin']['errormodulenotfound'] = 'Error intern, no s&#039;ha pogut trobar la inst&agrave;ncia del m&ograve;dul';
$lang['admin']['errorinstallfailed'] = 'La instal.laci&oacute; del m&ograve;dul ha fallat';
$lang['admin']['errormodulewontload'] = 'Problema instanciant un m&ograve;dul disponible';
$lang['admin']['frontendlang'] = 'Idioma per defecte pel frontend';
$lang['admin']['info_edituser_password'] = 'Canvia aquest camp per modiifcar el password d&#039;usuari ';
$lang['admin']['info_edituser_passwordagain'] = 'Canvia aquest camp per modiifcar el password d&#039;usuari ';
$lang['admin']['originator'] = 'Originador';
$lang['admin']['module_name'] = 'Nom del m&ograve;dul';
$lang['admin']['event_name'] = 'Nom d&#039;event';
$lang['admin']['event_description'] = 'Descricpi&oacute; de l&#039;event';
$lang['admin']['error_delete_default_parent'] = 'No pots esborrar el pare de la p&agrave;gina per defecte.';
$lang['admin']['jsdisabled'] = 'Per aquesta funci&oacute;, cal tenir el javascript habilitat.';
$lang['admin']['order'] = 'Ordre';
$lang['admin']['reorderpages'] = 'Reordenar pags.';
$lang['admin']['reorder'] = 'Reordenar';
$lang['admin']['page_reordered'] = 'P&agrave;gina reordenada amb &egrave;xit.';
$lang['admin']['pages_reordered'] = 'P&agrave;gines reordenades amb &egrave;xit.';
$lang['admin']['sibling_duplicate_order'] = 'Dues p&agrave;gines del mateix nivell no poden tenir el mateix ordre. No s&#039;han reordenat.';
$lang['admin']['no_orders_changed'] = 'Has triat reordenar p&agrave;gines, per&ograve; no has canviat l&#039;ordre de cap d&#039;elles. No s&#039;han reordenat.';
$lang['admin']['order_too_small'] = 'L&#039;ordre no pot ser zero. No s&#039;han reordenat';
$lang['admin']['order_too_large'] = 'L&#039;ordre no pot ser superior al del nombre de p&agrave;gines del nivell. No s&#039;han reordenat.';
$lang['admin']['user_tag'] = 'Tag d&#039;usuari';
$lang['admin']['add'] = 'Afegir';
$lang['admin']['CSS'] = 'Fulles d&#039;estil';
$lang['admin']['about'] = 'Sobre';
$lang['admin']['action'] = 'Acci&oacute;';
$lang['admin']['actionstatus'] = 'Acci&oacute;/Estat';
$lang['admin']['active'] = 'Actiu';
$lang['admin']['addcontent'] = 'Afegir nou contingut';
$lang['admin']['cantremove'] = 'No es pot esborrar';
$lang['admin']['changepermissions'] = 'Canviar permisos';
$lang['admin']['changepermissionsconfirm'] = 'PRECAUCI&Oacute;\n\nAquesta acci&oacute; intentar&agrave; assegurar que tots els arxius que comprenen el m&ograve;dul s&oacute;n modificables pel servidor Web.\nEst&agrave;s segur que vols continuar?';
$lang['admin']['contentadded'] = 'Contingut afegit correctament a la base de dades.';
$lang['admin']['contentupdated'] = 'Contingut actualitzat correctament.';
$lang['admin']['contentdeleted'] = 'Contingut eliminat correctament de la base de dades.';
$lang['admin']['success'] = '&Egrave;xit';
$lang['admin']['addcss'] = 'Afegir una fulla d&#039;estils';
$lang['admin']['addgroup'] = 'Afegir nou grup';
$lang['admin']['additionaleditors'] = 'Editors addicionals';
$lang['admin']['addtemplate'] = 'Afegir nova plantilla';
$lang['admin']['adduser'] = 'Afefir nou usuari';
$lang['admin']['addusertag'] = 'Afegir Tag d&#039;usuari';
$lang['admin']['adminaccess'] = 'Acc&eacute;s a entrar a admin';
$lang['admin']['adminlog'] = 'Registre d&#039;administraci&oacute;';
$lang['admin']['adminlogcleared'] = 'El registre d&#039;administraci&oacute; s&#039;ha esborrat correctament';
$lang['admin']['adminlogempty'] = 'El registre d&#039;administraci&oacute; est&agrave; buit';
$lang['admin']['adminsystemtitle'] = 'Administraci&oacute; CMS';
$lang['admin']['adminpaneltitle'] = 'Penell administraci&oacute; CMS Made Simple';
$lang['admin']['advanced'] = 'Avan&ccedil;at';
$lang['admin']['aliasalreadyused'] = 'L&#039;&agrave;lies ja est&agrave; essent utilitzat per una altra p&agrave;gina.  Canvia &quot;&Agrave;lies de p&agrave;gina&quot; a la pestanya &quot;Opcions&quot; per alguna latra cosa.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'L&#039;&agrave;lies ha de constar nom&eacute;s de lletres i d&iacute;gits';
$lang['admin']['aliasnotaninteger'] = 'L&#039;&agrave;lies no pot ser un enter';
$lang['admin']['allpagesmodified'] = 'Totes les p&agrave;gines modificades!';
$lang['admin']['assignments'] = 'Assignar usuaris';
$lang['admin']['associationexists'] = 'Aquesta associaci&oacute; ja existeix';
$lang['admin']['autoinstallupgrade'] = 'Instal.la o actualitza autom&agrave;ticament';
$lang['admin']['back'] = 'Enrere cap al men&uacute;';
$lang['admin']['backtoplugins'] = 'Enrere cap a la llista de plugins';
$lang['admin']['cancel'] = 'Cancel.lar';
$lang['admin']['cantchmodfiles'] = 'No s&#039;han pogut canviar permisos en alguns arxius';
$lang['admin']['cantremovefiles'] = 'Problema esborrant arxius (permisos?)';
$lang['admin']['confirmcancel'] = 'Segur que vols descartar els canvis? Prem OK per descartar tots els canvis. Prem Cancel.lar per continuar editant. ';
$lang['admin']['canceldescription'] = 'Descartar canvis';
$lang['admin']['clearadminlog'] = 'Neteja registre administraci&oacute;';
$lang['admin']['code'] = 'Codi';
$lang['admin']['confirmdefault'] = 'Est&agrave;s segur de fixar la p&agrave;gina per defecte del lloc?';
$lang['admin']['confirmdeletedir'] = 'Segur que vols eliminar el directori i tot el seu contingut?';
$lang['admin']['content'] = 'Contingut';
$lang['admin']['contentmanagement'] = 'Gesti&oacute; de contingut';
$lang['admin']['contenttype'] = 'Tipus de contingut';
$lang['admin']['copy'] = 'Copiar';
$lang['admin']['copytemplate'] = 'Copiar plantilla';
$lang['admin']['create'] = 'Crear';
$lang['admin']['createnewfolder'] = 'Crear nova carpeta';
$lang['admin']['cssalreadyused'] = 'Nom de CSS ja utilitzat';
$lang['admin']['cssmanagement'] = 'Gesti&oacute; de CSS';
$lang['admin']['currentassociations'] = 'Associacions actuals';
$lang['admin']['currentdirectory'] = 'Directory actual';
$lang['admin']['currentgroups'] = 'Grups actuals';
$lang['admin']['currentpages'] = 'P&agrave;gines actuals';
$lang['admin']['currenttemplates'] = 'Plantilles actuals';
$lang['admin']['currentusers'] = 'Usuaris actuals';
$lang['admin']['custom404'] = 'Missatge d&#039;error 404 personalitzat';
$lang['admin']['database'] = 'Base de dades';
$lang['admin']['databaseprefix'] = 'Prefix de base de dades';
$lang['admin']['databasetype'] = 'Tipus de base de dades';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Per defecte';
$lang['admin']['delete'] = 'Esborrar';
$lang['admin']['deleteconfirm'] = 'Segur que vols esborrar?';
$lang['admin']['deleteassociationconfirm'] = 'N&#039;est&agrave;s segur que vols esborrar l&#039;associaci&oacute; a - %s - ?';
$lang['admin']['deletecss'] = 'Esborrar CSS';
$lang['admin']['dependencies'] = 'Depend&egrave;ncies';
$lang['admin']['description'] = 'Descripci&oacute;';
$lang['admin']['directoryexists'] = 'Aquest directori ja existeix.';
$lang['admin']['down'] = 'Avall';
$lang['admin']['edit'] = 'Edita';
$lang['admin']['editconfiguration'] = 'Edita Configuraci&oacute;';
$lang['admin']['editcontent'] = 'Edita Contingut';
$lang['admin']['editcss'] = 'Edita Fulla d&#039;estils';
$lang['admin']['editcsssuccess'] = 'Fulla d&#039;estils modificada';
$lang['admin']['editgroup'] = 'Edita Grup';
$lang['admin']['editpage'] = 'Edita P&agrave;gina';
$lang['admin']['edittemplate'] = 'Edita Plantilla';
$lang['admin']['edittemplatesuccess'] = 'Plantilla modificada';
$lang['admin']['edituser'] = 'Edita Usuari';
$lang['admin']['editusertag'] = 'Edita Tag d&#039;usuari';
$lang['admin']['usertagadded'] = 'El tag d&#039;usuari s&#039;ha afegit correctament.';
$lang['admin']['usertagupdated'] = 'El tag d&#039;usuari s&#039;ha modificat correctament.';
$lang['admin']['usertagdeleted'] = 'El tag d&#039;usuari s&#039;ha esborrat correctament.';
$lang['admin']['email'] = 'Adre&ccedil;a correu-e';
$lang['admin']['errorattempteddowngrade'] = 'Instal.lar aquest m&ograve;dul resultaria en una baixada de versi&oacute;. Operaci&oacute; avortada.';
$lang['admin']['errorchildcontent'] = 'Contingut que encara inclou contingut dependent. Elimina&#039;l primer. ';
$lang['admin']['errorcopyingtemplate'] = 'Error copiant plantilla';
$lang['admin']['errorcouldnotparsexml'] = 'Error processant arxiu XML. Assegura&#039;t d&#039;estar carregant un arxiu .xml i no pas un .tar, .gz o .zip. ';
$lang['admin']['errorcreatingassociation'] = 'Error creant associaci&oacute;';
$lang['admin']['errorcssinuse'] = 'Aquesta fulla d&#039;estil &eacute;s encara utilitzada per una plantilla o per p&agrave;gines. Cal eliminar primer aquestes associacions.';
$lang['admin']['errordefaultpage'] = 'No es pot eliminar la p&agrave;gina per defecte actual. Posa&#039;n una altra per defecte primer.';
$lang['admin']['errordeletingassociation'] = 'Error esborrant associaci&oacute;';
$lang['admin']['errordeletingcss'] = 'Error esborrant CSS';
$lang['admin']['errordeletingdirectory'] = 'No s&#039;ha pogut eliminar el directory. Problema de permisos?';
$lang['admin']['errordeletingfile'] = 'No s&#039;ha pogut esborrar arxiu. Problema de permisos?';
$lang['admin']['errordirectorynotwritable'] = 'Sense perm&iacute;s d&#039;escriptura en el directory';
$lang['admin']['errordtdmismatch'] = 'Versi&oacute; DTD absent o incompatible a l&#039;arxiu XML ';
$lang['admin']['errorgettingcssname'] = 'Error obtenint nom de fulla d&#039;estil';
$lang['admin']['errorgettingtemplatename'] = 'Error obtenint nom de plantilla';
$lang['admin']['errorincompletexml'] = 'Arxiu XML incomplet o inv&agrave;lid';
$lang['admin']['uploadxmlfile'] = 'Instal.lar m&ograve;dul via arxiu XML';
$lang['admin']['cachenotwritable'] = 'No es pot escriure a la carpeta de mem&ograve;ria cau.';
$lang['admin']['modulesnotwritable'] = 'No es pot escriure a la carpeta dels m&ograve;dula, si vols instal.lar m&ograve;duls descarregant el fitxer XML, necessites fer accessible a lectura/escriptura/execuci&oacute; (chmod 777) la carpeta dels m&ograve;duls';
$lang['admin']['noxmlfileuploaded'] = 'No s&#039;ha pujat cap arxiu. Per instal.lar el m&ograve;dul via XML cal escollir i pujar al servidor un arxiu .xml del m&ograve;dul des del teu ordinador.';
$lang['admin']['errorinsertingcss'] = 'Error insertant fulla d&#039;estils.';
$lang['admin']['errorinsertinggroup'] = 'Error insertant grup';
$lang['admin']['errorinsertingtag'] = 'Error insertant tag d&#039;usuari';
$lang['admin']['errorinsertingtemplate'] = 'Error insertant plantilla';
$lang['admin']['errorinsertinguser'] = 'Error insertant usuari';
$lang['admin']['errornofilesexported'] = 'Error exportant arxius a xml';
$lang['admin']['errorretrievingcss'] = 'Error recuperant fulla d&#039;estils';
$lang['admin']['errorretrievingtemplate'] = 'Error recuperant plantilla';
$lang['admin']['errortemplateinuse'] = 'Aquesta plantilla &eacute;sencara utilitzada en alguna p&agrave;gina. Esborra-la primer.';
$lang['admin']['errorupdatingcss'] = 'Error actualitzant fulla d&#039;estils';
$lang['admin']['errorupdatinggroup'] = 'Error actualitzant grup';
$lang['admin']['errorupdatingpages'] = 'Error actualitzant p&agrave;gines';
$lang['admin']['errorupdatingtemplate'] = 'Error actualitzant plantilla';
$lang['admin']['errorupdatinguser'] = 'Error actualitzant usuari';
$lang['admin']['errorupdatingusertag'] = 'Error actualitzant tag d&#039;usuari';
$lang['admin']['erroruserinuse'] = 'Aquest usuari encara t&eacute; p&agrave;gines de contingut. Canvia la propietat a un altre usuari abans d&#039;esborra-lo.';
$lang['admin']['eventhandlers'] = 'Accions';
$lang['admin']['editeventhandler'] = 'Edita Gestor d&#039;Event ';
$lang['admin']['eventhandlerdescription'] = 'Associar tags d&#039;usuari amb events';
$lang['admin']['export'] = 'Exportar';
$lang['admin']['event'] = 'Acci&oacute;';
$lang['admin']['false'] = 'Fals';
$lang['admin']['settrue'] = 'Cert';
$lang['admin']['filecreatedirnodoubledot'] = 'El directori no pot incloure &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'No es pot crear un directori sense nom.';
$lang['admin']['filecreatedirnoslash'] = 'El directori no pot incloure &#039;/&#039; o &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gesti&oacute; d&#039;arxius';
$lang['admin']['filename'] = 'Nom d&#039;arxiu';
$lang['admin']['filenotuploaded'] = 'L&#039;arxiu no s&#039;ha pogut carregar. Problema de permisos?';
$lang['admin']['filesize'] = 'Mida d&#039;arxiu';
$lang['admin']['firstname'] = 'Nom';
$lang['admin']['groupmanagement'] = 'Gesti&oacute; de grup';
$lang['admin']['grouppermissions'] = 'Permisos de grup';
$lang['admin']['handler'] = 'Handler (tag d&#039;usuari)';
$lang['admin']['headtags'] = 'Tags cap&ccedil;alera';
$lang['admin']['help'] = 'Ajuda';
$lang['admin']['new_window'] = 'nova finestra';
$lang['admin']['helpwithsection'] = '%s Ajuda';
$lang['admin']['helpaddtemplate'] = '<p>Una plantilla &eacute;s el que controla l&#039;aspecte del contingut del teu lloc web</p><p>Crea el layout aqu&iacute; i afegeix les teves CSS a la secci&oacute; de les fulles d&#039;estil per controlar l&#039;aparen&ccedil;a de diversos elements.</p>';
$lang['admin']['helplisttemplate'] = '<p>Aquesta p&agrave;gina permet editar, esborrar i crear plantilles.</p><p>Per crear una nova plantilla, prem el bot&oacute; <u>Afegir nova plantilla</u>.</p><p>Si vols configurar que totes les p&agrave;gines utilitzin la mateixa plantilla, pitja l&#039;enlla&ccedil; <u>Per tot el contingut</u>.</p><p>Si vols duplicar la plantilla, pitja la icona<u>Copiar</u> i se&#039;t demanar&agrave; el nom per la nova plantilla.</p>';
$lang['admin']['home'] = 'Inici';
$lang['admin']['homepage'] = 'P&agrave;gina d&#039;inici';
$lang['admin']['hostname'] = 'Servidor';
$lang['admin']['idnotvalid'] = 'Has donat un ID inv&agrave;lid';
$lang['admin']['imagemanagement'] = 'Gestor d&#039;imatges';
$lang['admin']['informationmissing'] = 'Manca informaci&oacute;';
$lang['admin']['install'] = 'Instal.lar';
$lang['admin']['invalidcode'] = 'Codi inv&agrave;lid';
$lang['admin']['illegalcharacters'] = 'Car&agrave;cters inv&agrave;lids al camp %s';
$lang['admin']['invalidcode_brace_missing'] = 'Claus desaparellades';
$lang['admin']['invalidtemplate'] = 'La plantilla no &eacute;s v&agrave;lida';
$lang['admin']['itemid'] = 'ID element';
$lang['admin']['itemname'] = 'Nom d&#039;element';
$lang['admin']['language'] = 'Idioma';
$lang['admin']['lastname'] = 'Cognom';
$lang['admin']['logout'] = 'Sortir';
$lang['admin']['loginprompt'] = 'Entra unes credencials v&agrave;lides per accedir al penell d&#039;administraci&oacute;';
$lang['admin']['logintitle'] = 'Entrada a l&#039;administraci&oacute; de CMS Made Simple';
$lang['admin']['menutext'] = 'Text de men&uacute;';
$lang['admin']['missingparams'] = 'Manquen par&agrave;metres o s&oacute;n inv&agrave;lids';
$lang['admin']['modifygroupassignments'] = 'Modifica assignacions de grup';
$lang['admin']['moduleabout'] = 'Sobre el m&ograve;dul %s ';
$lang['admin']['modulehelp'] = 'ajuda pel m&ograve;dul %s';
$lang['admin']['msg_defaultcontent'] = 'Afegeix aqu&iacute; el codi que hauria d&#039;apar&egrave;ixer com el contingut per defecte a totes les p&agrave;gines noves';
$lang['admin']['msg_defaultmetadata'] = 'Afegeix aqu&iacute; el codi que hauria d&#039;apar&egrave;ixer en la secci&oacute; de metadades de totes les p&agrave;gines noves';
$lang['admin']['wikihelp'] = 'Ajuda de la Comunitat';
$lang['admin']['moduleinstalled'] = 'M&ograve;dul ja instal.lat';
$lang['admin']['moduleinterface'] = '%s Interfase';
$lang['admin']['modules'] = 'M&ograve;duls';
$lang['admin']['move'] = 'Moure';
$lang['admin']['name'] = 'Nom';
$lang['admin']['needpermissionto'] = 'Cal el &#039;%s&#039; perm&iacute;s per efectuar aquesta funci&oacute;.';
$lang['admin']['needupgrade'] = 'Cal actualitzaci&oacute;';
$lang['admin']['newtemplatename'] = 'Nou nom de plantilla';
$lang['admin']['next'] = 'Seg&uuml;ent';
$lang['admin']['noaccessto'] = 'Sense acc&eacute;s a %s';
$lang['admin']['nocss'] = 'No hi ha fulles d&#039;estil';
$lang['admin']['noentries'] = 'No hi ha entrades';
$lang['admin']['nofieldgiven'] = 'No hia ha %s!';
$lang['admin']['nofiles'] = 'No hi ha arxius';
$lang['admin']['nopasswordmatch'] = 'Els passwords no coincideixen';
$lang['admin']['norealdirectory'] = 'El directori donat no existeix';
$lang['admin']['norealfile'] = 'L&#039;arxiu donat no existeix';
$lang['admin']['notinstalled'] = 'No instal.lat';
$lang['admin']['overwritemodule'] = 'Sobreescriu els m&ograve;duls existents';
$lang['admin']['owner'] = 'Propietari';
$lang['admin']['pagealias'] = '&Agrave;lies de p&agrave;gina';
$lang['admin']['pagedefaults'] = 'Valors per defecte de la p&agrave;gina';
$lang['admin']['pagedefaultsdescription'] = 'Fixa els valor per defecte de les noves p&agrave;gines';
$lang['admin']['parent'] = 'Pare';
$lang['admin']['password'] = 'Contrasenya';
$lang['admin']['passwordagain'] = 'Password (altre cop)';
$lang['admin']['permission'] = 'Perm&iacute;s';
$lang['admin']['permissions'] = 'Permisos';
$lang['admin']['permissionschanged'] = 'Permisos actualitzats';
$lang['admin']['pluginabout'] = 'Sobre el tag %s';
$lang['admin']['pluginhelp'] = 'Ajuda pel tag %s';
$lang['admin']['pluginmanagement'] = 'Gesti&oacute; de connectors';
$lang['admin']['prefsupdated'] = 'Preferencies actualitzades.';
$lang['admin']['preview'] = 'Previsualitzaci&oacute;';
$lang['admin']['previewdescription'] = 'Previsualitzar canvis';
$lang['admin']['previous'] = 'Previa';
$lang['admin']['remove'] = 'Esborrar';
$lang['admin']['removeconfirm'] = 'Aquesta acci&oacute; eliminar&agrave; permanentment els arxius que componen aquest m&ograve;dul de la instal.laci&oacute;.\nSegur que vols procedir?';
$lang['admin']['removecssassociation'] = 'Eliminar associaci&oacute; de fulles d&#039;estil';
$lang['admin']['saveconfig'] = 'Desa configuraci&oacute;';
$lang['admin']['send'] = 'Enviar';
$lang['admin']['setallcontent'] = 'Fixa totes les p&agrave;gines';
$lang['admin']['setallcontentconfirm'] = 'Segur que vols fer que totes les p&agrave;gines utilitzin aquesta plantilla?';
$lang['admin']['showinmenu'] = 'Mostra al men&uacute;';
$lang['admin']['showsite'] = 'Mostra el lloc';
$lang['admin']['sitedownmessage'] = 'Missatge de Lloc caigut';
$lang['admin']['siteprefs'] = 'Valors globals';
$lang['admin']['status'] = 'Estat';
$lang['admin']['stylesheet'] = 'Fulla d&#039;estil';
$lang['admin']['submit'] = 'Enviar';
$lang['admin']['submitdescription'] = 'Desa canvis';
$lang['admin']['tags'] = 'Etiquetes';
$lang['admin']['template'] = 'Plantilla';
$lang['admin']['templateexists'] = 'Nom de plantilla existent';
$lang['admin']['templatemanagement'] = 'Gesti&oacute; de plantilla';
$lang['admin']['title'] = 'T&iacute;tol';
$lang['admin']['tools'] = 'Eines';
$lang['admin']['true'] = 'Cert';
$lang['admin']['setfalse'] = 'Fals';
$lang['admin']['type'] = 'Tipus';
$lang['admin']['typenotvalid'] = 'Tipus inv&agrave;lid';
$lang['admin']['uninstall'] = 'Desinstal.lar';
$lang['admin']['uninstallconfirm'] = 'Segur que vols desinstal.lar aquest m&ograve;dul? Nom:';
$lang['admin']['up'] = 'Amunt';
$lang['admin']['upgrade'] = 'Actualitzar';
$lang['admin']['upgradeconfirm'] = 'Segur que vols actualitzar aix&ograve;?';
$lang['admin']['uploadfile'] = 'Carregar arxiu';
$lang['admin']['url'] = 'Adre&ccedil;a web';
$lang['admin']['useadvancedcss'] = 'Utilitza gesti&oacute; avan&ccedil;ada de fulles d&#039;estil';
$lang['admin']['user'] = 'Usuari';
$lang['admin']['userdefinedtags'] = 'Tags d&#039;usuari';
$lang['admin']['usermanagement'] = 'Gesti&oacute; d&#039;usuaris';
$lang['admin']['username'] = 'Nom d&#039;usuari';
$lang['admin']['usernameincorrect'] = 'Usuari o password incorrecte';
$lang['admin']['userprefs'] = 'Prefer&egrave;ncies d&#039;usuari';
$lang['admin']['usersassignedtogroup'] = 'Usuaris assignats a grup %s';
$lang['admin']['usertagexists'] = 'Ja existeix un tag amb aquest nom. Tria&#039;n un altre.';
$lang['admin']['usewysiwyg'] = 'Utilitza un editor WYSIWYG pel contingut';
$lang['admin']['version'] = 'Versi&oacute;';
$lang['admin']['view'] = 'Veure';
$lang['admin']['welcomemsg'] = 'Benvingut %s';
$lang['admin']['directoryabove'] = 'directori per sobre el nivell actual';
$lang['admin']['nodefault'] = 'No s&#039;ha escollit un valor per defecte';
$lang['admin']['blobexists'] = 'Ja existeix aquest nom per un bloc global de contingut';
$lang['admin']['blobmanagement'] = 'Gesti&oacute; de blocs globals de contingut';
$lang['admin']['errorinsertingblob'] = 'Error insertant un bloc global de contingut';
$lang['admin']['addhtmlblob'] = 'Afegir bloc global de contingut';
$lang['admin']['edithtmlblob'] = 'Editar bloc global de contingut';
$lang['admin']['edithtmlblobsuccess'] = 'Bloc global de contingut modificat';
$lang['admin']['tagtousegcb'] = 'Tag per utilitzar aquest bloc';
$lang['admin']['gcb_wysiwyg'] = 'Habilitar BGC WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Habilitar l&#039;editor WYSIWYG en l&#039;edici&oacute; d&#039;un bloc global de contingut';
$lang['admin']['filemanager'] = 'Gestor d&#039;arxius';
$lang['admin']['imagemanager'] = 'Gestor d&#039;imatges';
$lang['admin']['encoding'] = 'Codificaci&oacute;';
$lang['admin']['clearcache'] = 'Esborra mem&ograve;ria cau';
$lang['admin']['clear'] = 'Netejar';
$lang['admin']['cachecleared'] = 'Mem&ograve;ria cau esborrada';
$lang['admin']['apply'] = 'Aplicar';
$lang['admin']['applydescription'] = 'Desar els canvis i continuar editant';
$lang['admin']['none'] = 'Cap';
$lang['admin']['wysiwygtouse'] = 'Tria un WYSIWYG per utilitzar';
$lang['admin']['syntaxhighlightertouse'] = 'Triar el marcador de sintaxi a utilitzar';
$lang['admin']['hasdependents'] = 'T&eacute; depend&egrave;ncies';
$lang['admin']['missingdependency'] = 'Depend&egrave;ncia absent';
$lang['admin']['minimumversion'] = 'Versi&oacute; m&iacute;nima';
$lang['admin']['minimumversionrequired'] = 'M&iacute;nima versi&oacute; necess&agrave;ria de CMSMS';
$lang['admin']['maximumversion'] = 'Versi&oacute; m&agrave;xima';
$lang['admin']['maximumversionsupported'] = 'M&agrave;xima versi&oacute; suportada de CMSMS';
$lang['admin']['depsformodule'] = 'Depend&egrave;ncies pel m&ograve;dul %s';
$lang['admin']['installed'] = 'Instal.lat';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Historial de canvis';
$lang['admin']['moduleerrormessage'] = 'Missatge d&#039;error pel m&ograve;dul %s';
$lang['admin']['moduleupgradeerror'] = 'Error actualitzant el m&ograve;dul.';
$lang['admin']['moduleinstallmessage'] = 'Missatge d&#039;instal.laci&oacute; pel m&ograve;dul %s';
$lang['admin']['moduleuninstallmessage'] = 'Missatge de desinstal.laci&oacute; pel m&ograve;dul %s';
$lang['admin']['admintheme'] = 'Tema d&#039;administraci&oacute;';
$lang['admin']['addstylesheet'] = 'Afegir una fulla d&#039;estil';
$lang['admin']['editstylesheet'] = 'Editar Fulla d&#039;estil';
$lang['admin']['addcssassociation'] = 'Afegir Associaci&oacute; de fulla d&#039;estil';
$lang['admin']['attachstylesheet'] = 'Enlla&ccedil;ar aquesta fulla d&#039;estil';
$lang['admin']['attachtemplate'] = 'Enlla&ccedil;ar a aquesta plantilla';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'P&agrave;gines';
$lang['admin']['page'] = 'P&agrave;gina';
$lang['admin']['files'] = 'Arxius';
$lang['admin']['layout'] = 'Esquema';
$lang['admin']['usersgroups'] = 'Usuaris i Grups';
$lang['admin']['extensions'] = 'Extensions';
$lang['admin']['preferences'] = 'Prefer&egrave;ncies';
$lang['admin']['admin'] = 'Administraci&oacute; del lloc';
$lang['admin']['viewsite'] = 'Veure Lloc';
$lang['admin']['templatecss'] = 'Assignar plantilles a fulles d&#039;estil';
$lang['admin']['plugins'] = 'Connectors';
$lang['admin']['movecontent'] = 'Moure p&agrave;gines';
$lang['admin']['module'] = 'M&ograve;dul';
$lang['admin']['usertags'] = 'Tags d&#039;usuari';
$lang['admin']['htmlblobs'] = 'Blocs globals de contingut';
$lang['admin']['adminhome'] = 'Centre d&#039;administraci&oacute;';
$lang['admin']['liststylesheets'] = 'Fulles d&#039;estil';
$lang['admin']['preferencesdescription'] = 'Aqu&iacute; defineixes diverses prefer&egrave;ncies d&#039;abast global.';
$lang['admin']['adminlogdescription'] = 'Mostra el registre de qui ha fet qu&egrave; a l&#039;administraci&oacute;.';
$lang['admin']['mainmenu'] = 'Men&uacute; principal';
$lang['admin']['users'] = 'Usuaris';
$lang['admin']['usersdescription'] = 'Aqu&iacute; es gestionen els usuaris';
$lang['admin']['groups'] = 'Grups';
$lang['admin']['groupsdescription'] = 'Aqu&iacute; es gestionen els grups';
$lang['admin']['groupassignments'] = 'Assignacions de grup';
$lang['admin']['groupassignmentdescription'] = 'Aqu&iacute; pots assignar usuaris a grups';
$lang['admin']['groupperms'] = 'Permisos de grup';
$lang['admin']['grouppermsdescription'] = 'Fixa permisos i nivells d&#039;acc&eacute;s per grups';
$lang['admin']['pagesdescription'] = 'Aqu&iacute; podem afegir i editar p&agrave;gines i altre contingut';
$lang['admin']['htmlblobdescription'] = 'Blocs globals de contingut s&oacute;n fragments de contingut que pots posar a p&agrave;gines o plantilla';
$lang['admin']['templates'] = 'Plantilla';
$lang['admin']['templatesdescription'] = 'Aqu&iacute; pots afegir i editar plantilla. La plantilla defineix l&#039;aspecte del teu lloc.';
$lang['admin']['stylesheets'] = 'Fulles d&#039;estil';
$lang['admin']['stylesheetsdescription'] = 'La gesti&oacute; de fulles d&#039;estil &eacute;s una manera avan&ccedil;ada de controlar les CSS de manera independent a la plantilla.';
$lang['admin']['filemanagerdescription'] = 'Carregar i gestionar arxius. ';
$lang['admin']['imagemanagerdescription'] = 'Carregar/editar i eliminar imatges.';
$lang['admin']['moduledescription'] = 'Els m&ograve;duls extenen el CMS Made Simple per prove&iuml;r-lo de tot tipus de funcionalitat a mida.';
$lang['admin']['tagdescription'] = 'Els tags s&oacute;n petites peces de funcionalitat que poden ser afegides al teu contingut i/o la plantilla';
$lang['admin']['usertagdescription'] = 'Tags que pots crear i modificar tu mateix per dur a terme tasques espec&iacute;fiques, directament des del teu navegador.';
$lang['admin']['installdirwarning'] = '<em><strong>Atenci&oacute;:</strong></em> el directori d&#039;instal.laci&oacute; encara existeix. Elimina&#039;l completament.';
$lang['admin']['subitems'] = 'Subelements';
$lang['admin']['extensionsdescription'] = 'M&ograve;duls, tags, i un assortit de divertiment.';
$lang['admin']['usersgroupsdescription'] = 'Elements relacionats amb usuaris i Grups.';
$lang['admin']['layoutdescription'] = 'Opcions de layout del Lloc.';
$lang['admin']['admindescription'] = 'Funcions d&#039;administraci&oacute; de Lloc.';
$lang['admin']['contentdescription'] = 'Aqu&iacute; &eacute;s on afegim i editem contingut.';
$lang['admin']['enablecustom404'] = 'Habilitar el missatge 404 personalitzat';
$lang['admin']['enablesitedown'] = 'Habilitar missatge de Lloc caigut ';
$lang['admin']['bookmarks'] = 'Draceres';
$lang['admin']['user_created'] = 'Draceres personals';
$lang['admin']['forums'] = 'F&ograve;rums';
$lang['admin']['wiki'] = 'Viki';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Ajuda del m&ograve;dul';
$lang['admin']['managebookmarks'] = 'Gesti&oacute; de draceres';
$lang['admin']['editbookmark'] = 'Editar dracera';
$lang['admin']['addbookmark'] = 'Afegir dracera';
$lang['admin']['recentpages'] = 'P&agrave;gines recents';
$lang['admin']['groupname'] = 'Nom de grup';
$lang['admin']['selectgroup'] = 'Tria grup';
$lang['admin']['updateperm'] = 'Actualitza permisos';
$lang['admin']['admincallout'] = 'Administraci&oacute; de draceres';
$lang['admin']['showbookmarks'] = 'Mostra administraci&oacute; de draceres';
$lang['admin']['hide_help_links'] = 'Amaga enlla&ccedil;os d&#039;ajuda';
$lang['admin']['hide_help_links_help'] = 'Marca per tal de deshabilitar els enlla&ccedil;os del wiki i l&#039;ajuda del m&ograve;dul a les cap&ccedil;aleres de p&agrave;gina.';
$lang['admin']['showrecent'] = 'Mostra p&agrave;gines utilitzades recentment';
$lang['admin']['attachtotemplate'] = 'Enlla&ccedil;a fulla d&#039;estil a la plantilla';
$lang['admin']['attachstylesheets'] = 'Enlla&ccedil;a fulles d&#039;estil';
$lang['admin']['indent'] = 'Indenta la llista de p&agrave;gines per emfatitzar la jerarquia';
$lang['admin']['adminindent'] = 'Pantalla de contingut';
$lang['admin']['contract'] = 'Contrau secci&oacute;';
$lang['admin']['expand'] = 'Amplia secci&oacute;';
$lang['admin']['expandall'] = 'Amplia totes les seccions';
$lang['admin']['contractall'] = 'Contrau totes les seccions';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Configuraci&oacute; global';
$lang['admin']['adminpaging'] = 'Nombre d&#039;elements de contingut a mostrar per p&agrave;gina a la llista de p&agrave;gines';
$lang['admin']['nopaging'] = 'Mostra tots els elements';
$lang['admin']['myprefs'] = 'Preferencies personals';
$lang['admin']['myprefsdescription'] = 'Aqu&iacute; pots configurar l&#039;&agrave;rea d&#039;administraci&oacute; del Lloc per funcionar com vulguis.';
$lang['admin']['myaccount'] = 'El meu compte';
$lang['admin']['myaccountdescription'] = 'Aqu&iacute; pots actualitzar els detalls del compte personal';
$lang['admin']['adminprefs'] = 'Prefer&egrave;ncies d&#039;usuari';
$lang['admin']['adminprefsdescription'] = 'Aqu&iacute; pots fixra prefer&egrave;ncies espec&iacute;fiques per l&#039;administraci&oacute; del Lloc';
$lang['admin']['managebookmarksdescription'] = 'Aqu&iacute; pots gestionar les draceres d&#039;administraci&oacute;';
$lang['admin']['options'] = 'Opcions';
$lang['admin']['langparam'] = 'Par&agrave;metre utilitzat per indicar l&#039;idioma a utilitzar de cara a l&#039;usuari. No tots els m&ograve;duls suporten o necessiten aix&ograve;.';
$lang['admin']['parameters'] = 'Par&agrave;meters';
$lang['admin']['mediatype'] = 'Tipus de suport';
$lang['admin']['mediatype_'] = 'Cap fixat: afetar&agrave; tot el sistema.';
$lang['admin']['mediatype_all'] = 'tot : adecuat per tots els dispositius.';
$lang['admin']['mediatype_aural'] = 'aural : pensat pels sintetitzadors de veu.';
$lang['admin']['mediatype_braille'] = 'braille : pensat pels dispositius t&agrave;ctils de braille interactius.';
$lang['admin']['mediatype_embossed'] = 'embossed : pensat per impressores braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : pensat per dispositius port&agrave;tils';
$lang['admin']['mediatype_print'] = 'impressi&oacute; : pensat per material opac i paginat, i documents visualitzats a la pantalla en mode previsualitzaci&oacute;.';
$lang['admin']['mediatype_projection'] = 'projecci&oacute;: pensat per presentacions projectades, tant per projectos com per transpar&egrave;ncies impreses.';
$lang['admin']['mediatype_screen'] = 'pantalla : pensat b&agrave;sicament per monitors de color.';
$lang['admin']['mediatype_tty'] = 'tty : pensat per mitjans amb car&agrave;cters de matriu de punts, com ara teletips i terminals.';
$lang['admin']['mediatype_tv'] = 'tv : pensat per dispositius tipus televisi&oacute;.';
$lang['admin']['assignmentchanged'] = 'Assignacions de grup actualitzades.';
$lang['admin']['stylesheetexists'] = 'La fulla d&#039;estils existeix';
$lang['admin']['errorcopyingstylesheet'] = 'Error copiant fulla d&#039;estils';
$lang['admin']['copystylesheet'] = 'Copiar fulla d&#039;estils';
$lang['admin']['newstylesheetname'] = 'Nou nom de fulla d&#039;estils';
$lang['admin']['target'] = 'Objectiu';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL del servidor soap del m&ograve;dul repositori';
$lang['admin']['metadata'] = 'Metadades';
$lang['admin']['globalmetadata'] = 'Metadades global';
$lang['admin']['titleattribute'] = 'Descripci&oacute; (atribut t&iacute;tol)';
$lang['admin']['tabindex'] = 'Pestanya &iacute;ndex';
$lang['admin']['accesskey'] = 'Clau d&#039;acc&eacute;s';
$lang['admin']['sitedownwarning'] = '<strong>Av&iacute;s:</strong> El teu Lloc est&agrave; mostrant ara mateix el missatge &quot;Lloc caigut per manteniment&quot; .  Elimina l&#039;arxiu %s per resoldre-ho.';
$lang['admin']['deletecontent'] = 'Esborrar contingut';
$lang['admin']['deletepages'] = 'Esborrar aquestes p&agrave;gines?';
$lang['admin']['selectall'] = 'Triat tot';
$lang['admin']['selecteditems'] = 'Sobre els triats';
$lang['admin']['inactive'] = 'Inactiu';
$lang['admin']['deletetemplates'] = 'Esborra plantilles';
$lang['admin']['templatestodelete'] = 'Aquestes plantilles s&#039;esborraran';
$lang['admin']['wontdeletetemplateinuse'] = 'Aquestes plantilles s&#039;estan utilitzant i no es poden esborrar';
$lang['admin']['deletetemplate'] = 'Esborra fulles d&#039;estil';
$lang['admin']['stylesheetstodelete'] = 'Aquestes fulles d&#039;estil s&#039;esborraran';
$lang['admin']['sitename'] = 'Nom de Lloc';
$lang['admin']['siteadmin'] = 'Administraci&oacute; de Lloc';
$lang['admin']['images'] = 'Gestor d&#039;imatges';
$lang['admin']['blobs'] = 'Blocs globals de contingut';
$lang['admin']['groupmembers'] = 'Assignacions de grup';
$lang['admin']['troubleshooting'] = '(resoldre problemes)';
$lang['admin']['event_desc_loginpost'] = 'Enviat despr&eacute;s que un usuari entri al panell d&#039;aministraci&oacute;';
$lang['admin']['event_desc_logoutpost'] = 'Enviat despr&eacute;s que un usuari deixi el panell d&#039;administraci&oacute;';
$lang['admin']['event_desc_adduserpre'] = 'Enviat en crear un nou usuari';
$lang['admin']['event_desc_adduserpost'] = 'Enviat despr&eacute;s de crear un usuari';
$lang['admin']['event_desc_edituserpre'] = 'Enviat en desar canvis en un usuari';
$lang['admin']['event_desc_edituserpost'] = 'Enviat despr&eacute;s de desar canvis en un usuari';
$lang['admin']['event_desc_deleteuserpre'] = 'Enviat en esborrar un usuari del sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Enviat despr&eacute;s d&#039;esborrar un usuari del sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Enviat abans de crear un nou grup';
$lang['admin']['event_desc_addgrouppost'] = 'Enviat despr&eacute;s de crear un nou grup';
$lang['admin']['event_desc_changegroupassignpre'] = 'Enviat abans de desar les assignacions de grup';
$lang['admin']['event_desc_changegroupassignpost'] = 'Enviat despr&eacute;s de desar les assignacions de grup ';
$lang['admin']['event_desc_editgrouppre'] = 'Enviat abans de desar canvis en un grup';
$lang['admin']['event_desc_editgrouppost'] = 'Enviat despr&eacute;s de desar canvis en un grup';
$lang['admin']['event_desc_deletegrouppre'] = 'Enviat abans d&#039;esborrar un grup del sistema';
$lang['admin']['event_desc_deletegrouppost'] = 'Enviat despr&eacute;s d&#039;esborrar un grup del sistema';
$lang['admin']['event_desc_addstylesheetpre'] = 'Enviat abans de crear una fulla d&#039;estil';
$lang['admin']['event_desc_addstylesheetpost'] = 'Enviat despr&eacute;s de crear una fulla d&#039;estil';
$lang['admin']['event_desc_editstylesheetpre'] = 'Enviat abans de desar canvis en una fulla d&#039;estil';
$lang['admin']['event_desc_editstylesheetpost'] = 'Enviat despr&eacute;s de desar canvis en una fulla d&#039;estil';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Enviat abans d&#039;esborrar una fulla d&#039;estil del sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Enviat despr&eacute;s d&#039;esborrar una fulla d&#039;estil del sistema';
$lang['admin']['event_desc_addtemplatepre'] = 'Enviat abans de crear una nova plantilla';
$lang['admin']['event_desc_addtemplatepost'] = 'Enviat despr&eacute;s de crear una nova plantilla';
$lang['admin']['event_desc_edittemplatepre'] = 'Enviat abans de desar canvis a una plantilla';
$lang['admin']['event_desc_edittemplatepost'] = 'Enviat despr&eacute;s de desar canvis a una plantilla';
$lang['admin']['event_desc_deletetemplatepre'] = 'Enviat abans d&#039;esborrar una plantilla del sistema ';
$lang['admin']['event_desc_deletetemplatepost'] = 'Enviat despr&eacute;s d&#039;esborrar una plantilla del sistema';
$lang['admin']['event_desc_templateprecompile'] = 'Enviat abans d&#039;enviar una plantilla a l&#039;smarty per processar';
$lang['admin']['event_desc_templatepostcompile'] = 'Enviat abans que una plantilla sigui processada per l&#039;smarty ';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Enviat abans de crear un bloc global de contingut';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Enviat despr&eacute;s de crear un bloc global de contingut';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Enviat abans de desar canvis en un bloc global de contingut';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Enviat despr&eacute;s de desar canvis en un bloc global de contingut';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Enviat abans d&#039;esborrar del sistema un bloc global de contingut ';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Enviat despr&eacute;s d&#039;esborrar del sistema un bloc global de contingut';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Enviat abans d&#039;enviar un bloc global de contingut a l&#039;smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Enviat despr&eacute;s que un bloc global de contingut sigui processat per l&#039;smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Enviat abans de desar canvis a contingut';
$lang['admin']['event_desc_contenteditpost'] = 'Enviat despr&eacute;s de desar canvis a contingut';
$lang['admin']['event_desc_contentdeletepre'] = 'Enviat abans d&#039;esborrar contingut del sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Enviat despr&eacute;s d&#039;esborrar contingut del sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Enviat abans d&#039;enviar una fulla d&#039;estil al navegador';
$lang['admin']['event_desc_contentprecompile'] = 'Enviat abans d&#039;enviar contingut a l&#039;smarty per precessar';
$lang['admin']['event_desc_contentpostcompile'] = 'Enviat despr&eacute;s que l&#039;smarty processi contingut';
$lang['admin']['event_desc_contentpostrender'] = 'Enviat abans que l&#039;html combinat sigui enviat al navegador';
$lang['admin']['event_desc_smartyprecompile'] = 'Enviat abans que cap contingut destinat a l&#039;smarty sigui enviat per processar';
$lang['admin']['event_desc_smartypostcompile'] = 'Enviat despr&eacute;s que cap contingut destinat a l&#039;smarty sigui processat';
$lang['admin']['event_help_loginpost'] = '<p>Enviat despr&eacute;s que un usuari entri al panell d&#039;administraci&oacute;</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Enviat despr&eacute;s que un usuari entri al panell d&#039;administraci&oacute;</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Enviat abans de crear un nou usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Enviat despr&eacute;s de crear un usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Enviat abans de desar canvis a un usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Enviat despr&eacute;s de desar canvis a un usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Enviat abans d&#039;esborrar del sistema un usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;bjecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Enviat despr&eacute;s d&#039;esborrar del sistema un usuari.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;usuari&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Enviat abans de crear un ou grup.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;objecte d&#039;usuari afectat.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Enviat despr&eacute;s de crear un nou grup.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;object de grup afectat.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Enviat abans de desar les assignacions de grup.</p>
<h4>Par&agrave;metres></h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;objecte de grup.</li>
<li>&#039;usuaris&#039; - llista de refer&egrave;ncies a objectess d&#039;usuari pertanyents al grup.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Enviat abans de desar les assignacions de grup.</p>
<h4>Par&agrave;metres></h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;objecte de grup afectat.</li>
<li>&#039;usuaris&#039; -Llista de refer&egrave;ncies als objectes d&#039;usuari ara pertanyents al grup afectat.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Enviat abans de desar canvis a un grup.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;bjecte de grup afectat.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Enviat despr&eacute;s de desar canvis a un grup.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;nce a l&#039;objecte de grup afectat.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Enviat abans d&#039;esborrar del sistema un grup.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;objecte de grup afectat.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Enviat despr&eacute;s d&#039;esborrar del sistema un grup</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;grup&#039; - Refer&egrave;ncia a l&#039;objecte de grup afectat.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Enviat abans de crear una nova fulla d&#039;estils.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;objecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Enviat despr&eacute;s de crear una nova fulla d&#039;estil.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;objecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Enviat abans de desar canvis a una fulla d&#039;estils.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;bjecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Enviat despr&eacute;s de desar canvis a una fulla d&#039;estils.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;objecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Enviat abans d&#039;esborrar del sistema una fulla d&#039;estils.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;objecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Enviat despr&eacute;s d&#039;esborrar del sistema una fulla d&#039;estils.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;fulla d&#039;estil&#039; - Refer&egrave;ncia a l&#039;objecte fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Enviat abans de crear una nova plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;objecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Enviat despr&eacute;s de crear una nova plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;objecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Enviat abans de desar canvis a una plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;bjecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Enviat despr&eacute;s de desar canvis a una plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;objecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Enviat abans d&#039;esborrar del sistema una plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;objecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Enviat despr&eacute;s d&#039;esborrar del sistema una plantilla.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia a l&#039;objecte plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Enviat abans d&#039;enviar una plantilla a l&#039;smarty per processar.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia al text de plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Enviat despr&eacute;s de processar una plantilla per part de l&#039;smarty.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;plantilla&#039; - Refer&egrave;ncia al etxt de la plantilla afectat.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Enviat abans de crear un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Enviat despr&eacute;s de crear un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Enviat abans de desar canvis a un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Enviat despr&eacute;s de desar canvis a un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Enviat abans d&#039;esborrar del sistema un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Enviat despr&eacute;s d&#039;esborrar del sistema un bloc global de contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Enviat abans d&#039;enviar a l&#039;smarty un bloc global de contingut global per processar.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Enviat despr&eacute;s de processar un bloc global de contingut per part de l&#039;smarty</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte bloc global de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Enviat abans de desar canvis a contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;global_content&#039; - Refer&egrave;ncia a l&#039;objecte contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Enviat despr&eacute;s de desar canvis a contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia a l&#039;objecte contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Enviat abans d&#039;esborrar del sistema contingut.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut - Refer&egrave;ncia a l&#039;objecte contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Enviat despr&eacute;s d&#039;esborrar contingut del sistema.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia a l&#039;objecte contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Enviat abans d&#039;enviar la fulla d&#039;estil al navegador.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia al text de fulla d&#039;estil afectat.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Enviat abans d&#039;enviar contingut a l&#039;smarty per processar.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut - Refer&egrave;ncia al text de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Enviat despr&eacute;s de preocessar contingut per part de l&#039;smarty.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia al text de contingut afectat.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Enviat abans que l&#039;html combinat s&#039;envi&iuml; al navegador.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia al text html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Enviat abans que cap contingut s&#039;hagi enviat a l&#039;smarty per processar.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia al text afectat.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Enviat despr&eacute;s que alg&uacute;n contingut destinat a l&#039;smarty hagi estat procesat.</p>
<h4>Par&agrave;metres</h4>
<ul>
<li>&#039;contingut&#039; - Refer&egrave;ncia al text afectat.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtrar per m&ograve;dul';
$lang['admin']['showall'] = 'Mostra tot';
$lang['admin']['core'] = 'Nucli';
$lang['admin']['defaultpagecontent'] = 'Contingut de p&agrave;gina per defecte';
$lang['admin']['file_url'] = 'Enlla&ccedil; a l&#039;arxiu (enlloc de URL)';
$lang['admin']['no_file_url'] = 'Cap (Usa la URL superior)';
$lang['admin']['defaultparentpage'] = 'P&agrave;gina pare per defecte';
$lang['admin']['error_udt_name_whitespace'] = 'Error: els Tags d&#039;usuari no poden tenir espais en el seu nom.';
$lang['admin']['warning_safe_mode'] = '<strong><em>AV&Iacute;S:</em></strong> el modePHP Segur est&agrave; habilitat.  Aix&ograve; causar&agrave; dificultats amb els arxius pujats via l&#039;interfase web, incloent imatges, temes i paquets de m&ograve;duls XML.  S&#039;et recomana contactar amb l&#039;administrador del lloc per veure si es pot deshabilitar el mode segur.';
$lang['admin']['test'] = 'Provar';
$lang['admin']['results'] = 'Resultats';
$lang['admin']['untested'] = 'No provat';
$lang['admin']['unknown'] = 'Desconegut';
$lang['admin']['download'] = 'Desc&agrave;rrega';
$lang['admin']['frontendwysiwygtouse'] = 'Presentador wysiwyg';
$lang['admin']['all_groups'] = 'Tots els grups';
$lang['admin']['error_type'] = 'Tipus d&#039;error';
$lang['admin']['contenttype_errorpage'] = 'P&agrave;gina d&#039;error';
$lang['admin']['errorpagealreadyinuse'] = 'Codi d&#039;error ja utilitzat';
$lang['admin']['404description'] = 'P&agrave;gina no trobada';
$lang['admin']['usernotfound'] = 'Usuario no trobat';
$lang['admin']['passwordchange'] = 'Sisplau, d&oacute;na un el passowrd';
$lang['admin']['recoveryemailsent'] = 'Email enviat a l&#039;adre&ccedil;a desada. Verifica la teva b&uacute;stia per m&eacute;s instruccions.';
$lang['admin']['errorsendingemail'] = 'Hi ha hagut un error enviant l&#039;email. Contacta l&#039;administrador.';
$lang['admin']['passwordchangedlogin'] = 'Password canviat. Torna a entrar utilitzant les noves credencials.';
$lang['admin']['nopasswordforrecovery'] = 'No s&#039;ha definit email per aquest usuari. La recuperaci&oacute; del password no &eacute;s possible. Contacta el teu administrador';
$lang['admin']['lostpw'] = 'Has oblidat el teu password';
$lang['admin']['lostpwemailsubject'] = '[%s] Recuperaci&oacute; del password';
$lang['admin']['lostpwemail'] = 'Est&agrave;s rebent aquest email perqu&egrave; s&#039;ha fet una petici&oacute; per canviar el password de (%) associat a aquest compte (%). Si realment vols reinicialitzar al password per aquest compte, simplement clica a l&#039;enlla&ccedil; o enganxa&#039;l al teu navegador preferit:
%s

Si et sembla que aix&ograve; &eacute;s incorrecte o generat per error, ignora aquest email i res no s&#039;haur&agrave; canviat.';
$lang['admin']['utma'] = '156861353.3109145977533247500.1225311312.1256902475.1256908322.42';
$lang['admin']['utmz'] = '156861353.1254088757.35.2.utmccn=(referral)|utmcsr=66.147.244.155|utmcct=/~clubcocc/cmsmadesimple/install/index.php|utmcmd=referral';
$lang['admin']['qca'] = 'P0-894451108-1250455823820';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>
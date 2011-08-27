<?php
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Erro de SQL em %s';
$lang['admin']['image'] = 'Imagem';
$lang['admin']['thumbnail'] = 'Miniatura';
$lang['admin']['searchable'] = 'Esta p&aacute;gina &eacute; pesquis&aacute;vel';
$lang['admin']['help_function_content_image'] = '<h3>O que este m&oacute;dulo faz?</h3>
<p>Este plugin permite que os designers de templates alertem os usu&aacute;rios a selecionar um arquivo de imagem quando editam o conte&uacute;do de uma p&aacute;gina. O comportamento &eacute; similar ao do plugin content para blocos adicionais de conte&uacute;do</p>
<h3>Como eu uso?</h3>
<p>Apenas insira a tag em sua p&aacute;gina template da seguinte forma: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Quais par&acirc;metros s&atilde;o aceitos?</h3>
<ul>
  <li><strong>(requerido)</strong></em> block - O nome para este bloco adicional de conte&uacute;do.
  <p>Exemplo:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(opcional)</em> label - Uma etiqueta ou alerta para este bloco de conte&uacute;do na p&aacute;gina de edi&ccedil;&atilde;o de conte&uacute;do. Caso n&atilde;o haja especifica&ccedil;&atilde;o  o nome do bloco ser&aacute; usado.</li>
 
  <li><em>(opcional)</em> dir - O nome de um diret&oacute;rio (relativo ao diret&oacute;rio uploads), o qual ser&aacute; usado para escolher os arquivos de imagem. Caso n&atilde;o haja especifica&ccedil;&atilde;o o diret&oacute;rio uploads ser&aacute; usado.
  <p>Exemplo: para usar imagens do diret&oacute;rio uploads/images</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(opcional)</em> class - O nome de uma classe CSS para usar na tag img no frontend.</li>

  <li><em>(opcional).</em> id - O c&oacute;digo id a ser usado na img tag no frontend.</li> 

  <li><em>(opcional)</em> name - O nome da tag a ser usada na img tag no frontend.</li> 

  <li><em>(opcional)</em> width - A largura desejada na imagem.</li>

  <li><em>(opcional)</em> height - A altura desejada na imagem.</li>

  <li><em>(opcional)</em> alt - Texto alterativo caso a imagem n&atilde;o possa ser localizada.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Um nome UDT v&aacute;lido come&ccedil;a com uma letra ou &quot;sublinhado (underline)&quot;, e &eacute; seguida por qualquer n&uacute;mero de letras, n&uacute;meros ou &quot;sublinhados&quot;.';
$lang['admin']['errorupdatetemplateallpages'] = ' O template n&atilde;o est&aacute; ativo';
$lang['admin']['hidefrommenu'] = 'Ocultar do Menu';
$lang['admin']['settemplate'] = 'Definir Template';
$lang['admin']['text_settemplate'] = 'Associa as p&aacute;ginas selecionadas a um template difgerente';
$lang['admin']['cachable'] = 'Cache&aacute;vel';
$lang['admin']['noncachable'] = 'N&atilde;o Cache&aacute;vel';
$lang['admin']['copy_from'] = 'Copiar De';
$lang['admin']['copy_to'] = 'Copiar Para';
$lang['admin']['copycontent'] = 'Copiar Conte&uacute;do';
$lang['admin']['md5_function'] = 'fun&ccedil;&atilde;o md5';
$lang['admin']['tempnam_function'] = 'fun&ccedil;&atilde;o tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions em PHP';
$lang['admin']['xml_function'] = 'Basic XML (expat) suporte';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes para Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash s&atilde;o escapadas automaticamente. Voc&ecirc; pode ter problemas ao salvar templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes em runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'A maioria das fun&ccedil;&otilde;es que retornam dados ter&atilde;o &quot;quotes&quot; escapadas com uma barra contr&aacute;ria. Voc&ecirc; pode ter problemas';
$lang['admin']['file_get_contents'] = 'Teste file_get_contents';
$lang['admin']['check_ini_set'] = 'Teste ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Upload de arquivos';
$lang['admin']['test_remote_url'] = 'Test for remote URL';
$lang['admin']['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Conex&atilde;o expirou!';
$lang['admin']['search_string_find'] = 'Conex&atilde;o ok!';
$lang['admin']['connection_failed'] = 'Conex&atilde;o falhou!';
$lang['admin']['remote_response_ok'] = 'Remote response: ok!';
$lang['admin']['remote_response_404'] = 'Remote response: not found!';
$lang['admin']['remote_response_error'] = 'Remote response: error!';
$lang['admin']['notifications_to_handle'] = 'You have <b>%d</b> unhandled notifications';
$lang['admin']['notification_to_handle'] = 'You have <b>%d</b> unhandled notification';
$lang['admin']['notifications'] = 'Notifica&ccedil;&otilde;es';
$lang['admin']['dashboard'] = 'Ir ao Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorar notifica&ccedil;&otilde;es desses m&oacute;dulos';
$lang['admin']['admin_enablenotifications'] = 'Permitir aos usu&aacute;rios visualizarem notifica&ccedil;&otilde;es<br/><em>(as notifica&ccedil;&otilde;es ser&atilde;o expostas em tiodas as p&aacute;ginas de administra&ccedil;&atilde;o)</em>';
$lang['admin']['enablenotifications'] = 'Habilitar notifica&ccedil;&otilde;es de usu&aacute;rios na &aacute;rea de administra&ccedil;&atilde;o';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php edit&aacute;vel. &Eacute; mais seguro se voc&ecirc; alterar essa permiss&atilde;o para apenas leitura.';
$lang['admin']['caution'] = 'Cuidado';
$lang['admin']['create_dir_and_file'] = 'Verificando se o processo httpd pode criar um arquivo dentro de um diret&oacute;rio que ele criou';
$lang['admin']['os_session_save_path'] = 'Sem confer&ecirc;ncia devido ao caminho do SO.';
$lang['admin']['unlimited'] = 'Ilimitado';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Inv&aacute;lido';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Erro ao tentar receber a lista de arquivos';
$lang['admin']['files_checksum_failed'] = 'Os arquivos n&atilde;o puderam ser verificados com checksum';
$lang['admin']['failure'] = 'Falha';
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
$lang['admin']['page_metadata'] = 'Metadata especifica da p&aacute;gina';
$lang['admin']['pagedata_codeblock'] = 'Smarty data or logic that is specific to this page';
$lang['admin']['error_uploadproblem'] = 'Um erro ocorreu durante o upload';
$lang['admin']['error_nofileuploaded'] = 'Nenhum arquivo foi enviado';
$lang['admin']['files_failed'] = 'Os arquivos falharam o teste md5sum';
$lang['admin']['files_not_found'] = 'Arquivos n&atilde;o encontrados';
$lang['admin']['info_generate_cksum_file'] = 'This function will allow you to generate a checksum file and save it on your local computer for later validation.  This should be done just prior to rolling out the website, and/or after any upgrades, or major modifications.';
$lang['admin']['info_validation'] = 'This function will compare the checksums found in the uploaded file with the files on the current installation.  It can assist in finding problems with uploads, or exactly what files were modified if your system has been hacked.  A checksum file is generated for each release of CMS Made simple from version 1.4 on.';
$lang['admin']['download_cksum_file'] = 'Baixar arquivo Checksum';
$lang['admin']['perform_validation'] = 'Validar';
$lang['admin']['upload_cksum_file'] = 'Enviar arquivo Checksum';
$lang['admin']['checksumdescription'] = 'Validar a integridade dos arquivos do CMS comparando com checksums conhecidos';
$lang['admin']['system_verification'] = 'Verifica&ccedil;&atilde;o do Sistema';
$lang['admin']['extra1'] = 'Extra Page Attribute 1';
$lang['admin']['extra2'] = 'Extra Page Attribute 2';
$lang['admin']['extra3'] = 'Extra Page Attribute 3';
$lang['admin']['start_upgrade_process'] = 'Iniciar Processo de Upgrade';
$lang['admin']['warning_upgrade'] = '<em><strong>Aten&ccedil;&atilde;o:</strong></em> O CMSMS precisa de um upgrade.';
$lang['admin']['warning_upgrade_info1'] = 'You are now running schema version %s. and you need to be upgraded to version %s';
$lang['admin']['warning_upgrade_info2'] = 'Por favor clique no link: %s.';
$lang['admin']['warning_mail_settings'] = 'Os seus par&acirc;metros de email n&atilde;o foram configurados. Isto pode interferir com a habilidade de seu website de enviar mensagens. Voc&ecirc; deve ir em <a href="moduleinterface.php?module=CMSMailer">Extensions &amp;gt;&amp;gt; CMSMailer</a> e configurar os par&acirc;metros de email com os dados fornecidos pelo seu provedor.';
$lang['admin']['view_page'] = 'Veja essa p&aacute;gina em uma nova janela';
$lang['admin']['off'] = 'Desligado';
$lang['admin']['on'] = 'Ligado';
$lang['admin']['invalid_test'] = 'Invalid test param value!';
$lang['admin']['copy_paste_forum'] = 'View Text Report <em>(suitable for copying into forum posts)</em>';
$lang['admin']['permission_information'] = 'Informa&ccedil;&otilde;es de Permiss&atilde;o';
$lang['admin']['server_os'] = 'Sistema Operacional do Servidor';
$lang['admin']['server_api'] = 'API do Servidor';
$lang['admin']['server_software'] = 'Software do Servidor';
$lang['admin']['server_information'] = 'Informa&ccedil;&atilde;o do Servidor';
$lang['admin']['session_save_path'] = 'Diret&oacute;rio de Sess&otilde;es';
$lang['admin']['max_execution_time'] = 'Tempo M&aacute;ximo de Execu&ccedil;&atilde;o';
$lang['admin']['gd_version'] = 'Vers&atilde;o do GD';
$lang['admin']['upload_max_filesize'] = 'Tamanho M&aacute;ximo de Upload';
$lang['admin']['post_max_size'] = 'Tamanho M&aacute;ximo de Postagem';
$lang['admin']['memory_limit'] = 'Limite de Mem&oacute;ria do PHP';
$lang['admin']['server_db_type'] = 'Banco de Dados do Servidor';
$lang['admin']['server_db_version'] = 'Vers&atilde;o do Banco de Dados do Servidor';
$lang['admin']['phpversion'] = 'Vers&atilde;o do PHP';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'Informa&ccedil;&atilde;o do PHP';
$lang['admin']['cms_install_information'] = 'Informa&ccedil;&atilde;o de Instala&ccedil;&atilde;o do CMS';
$lang['admin']['cms_version'] = 'Vers&atilde;o do CMS';
$lang['admin']['installed_modules'] = 'M&oacute;dulos Instalados';
$lang['admin']['config_information'] = 'Informa&ccedil;&otilde;es de Configura&ccedil;&atilde;o';
$lang['admin']['systeminfo_copy_paste'] = 'Por favor copie e cole o texto selecionado na sua postagem do f&oacute;rum';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'Informa&ccedil;&atilde;o do sistema';
$lang['admin']['systeminfodescription'] = 'Mostrar v&aacute;rias informa&ccedil;&otilde;es sobre seu sistema que podem ser &uacute;teis para diagnosticar problemas.';
$lang['admin']['welcome_user'] = 'Bem Vindo';
$lang['admin']['itsbeensincelogin'] = 'J&aacute; passaram %s desde seu &uacute;ltimo login';
$lang['admin']['days'] = 'dias';
$lang['admin']['day'] = 'dia';
$lang['admin']['hours'] = 'horas';
$lang['admin']['hour'] = 'hora';
$lang['admin']['minutes'] = 'minutos';
$lang['admin']['minute'] = 'minuto';
$lang['admin']['help_css_max_age'] = 'Esse par&acirc;metro deve ter um valor relativamente alto para sites est&aacute;ticos, e deve ser 0 para sites em desenvolvimento.';
$lang['admin']['css_max_age'] = 'Tempo M&aacute;ximo (seconds) que as folhas de estilo podem estar no cache do browser';
$lang['admin']['error'] = 'Erro';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Aviso:</em>Uma nova vers&atilde;o do CMS est&aacute; dispon&iacute;vel. Por favor contate o administrador.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word &quot;none&quot; no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'Checar por novas vers&otilde;es do CMS utilizando esse URL';
$lang['admin']['master_admintheme'] = 'Tema de Administra&ccedil;&atilde;o Padr&atilde;o (para p&aacute;gina de login e novas contas de usu&aacute;rio)';
$lang['admin']['contenttype_separator'] = 'Separador';
$lang['admin']['contenttype_sectionheader'] = 'Cabe&ccedil;alho da Se&ccedil;&atilde;o';
$lang['admin']['contenttype_link'] = 'Link Externo';
$lang['admin']['contenttype_content'] = 'Conte&uacute;do';
$lang['admin']['contenttype_pagelink'] = 'Link para P&aacute;gina Interna';
$lang['admin']['nogcbwysiwyg'] = 'Desabilitar editores WYSIWYG em Blocos de Conte&uacute;do Global';
$lang['admin']['destination_page'] = 'P&aacute;gina de Destino';
$lang['admin']['additional_params'] = 'Par&acirc;metros Adicionais';
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
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
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
$lang['admin']['login_info_title'] = 'Informa&ccedil;&atilde;o';
$lang['admin']['login_info'] = 'Desse ponto em diante leve em considera&ccedil;&atilde;o os seguintes par&acirc;metros';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Se Cookies est&atilde;o habilitados em seu navegador</li> 
  <li>Se o Javascript est&aacute; habilitado em seu navegador</li> 
  <li>Se popups est&atilde;o habilitados para os seguintes endere&ccedil;os:</li> 
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
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
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
$lang['admin']['first'] = 'Primeiro';
$lang['admin']['last'] = '&Uacute;ltimo';
$lang['admin']['adminspecialgroup'] = 'Aviso: Membros desse grupo tem todas as permiss&otilde;es automaticamente';
$lang['admin']['disablesafemodewarning'] = 'Desabilitar Alerta sobre o PHP Safe Mode';
$lang['admin']['allowparamcheckwarnings'] = 'Allow parameter checks to create warning messages';
$lang['admin']['date_format_string'] = 'String de Formato da Data';
$lang['admin']['date_format_string_help'] = 'Formato da data conforme <em>strftime</em>.  Procure &#039;php strftime data manual&#039; no google';
$lang['admin']['last_modified_at'] = 'Ultima modifica&ccedil;&atilde;o em';
$lang['admin']['last_modified_by'] = 'Ultima Modifica&ccedil;&atilde;o por';
$lang['admin']['read'] = 'Ler';
$lang['admin']['write'] = 'Escrever';
$lang['admin']['execute'] = 'Executar';
$lang['admin']['group'] = 'Grupo';
$lang['admin']['other'] = 'Outro';
$lang['admin']['event_desc_moduleupgraded'] = 'Enviado depois que um modulo &eacute; atualizado';
$lang['admin']['event_desc_moduleinstalled'] = 'Enviado depois que um modulo &eacute; instalado';
$lang['admin']['event_desc_moduleuninstalled'] = 'Enviado depois que um modulo &eacute; desinstalado';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Enviado depois que uma tag definida pelo usu&aacute;rio &eacute; atualizada';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Enviado antes que uma tag definida pelo usu&aacute;rio &eacute; atualizada';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Enviado antes que uma tag definida pelo usu&aacute;rio &eacute; deletada';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Enviado depois que uma tag definida pelo usu&aacute;rio &eacute; deletada';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Enviado depois que uma tag definida pelo usu&aacute;rio &eacute; inserida';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Enviado antes que uma tag definida pelo usu&aacute;rio &eacute; atualizada';
$lang['admin']['global_umask'] = 'Masc&aacute;ra de Cria&ccedil;&atilde;o de Arquivo (desmascarar)';
$lang['admin']['errorcantcreatefile'] = 'N&atilde;o foi possivel criar o arquivo (problema de permiss&atilde;o?)';
$lang['admin']['errormoduleversionincompatible'] = 'O m&oacute;dulo &eacute; incompat&iacute;vel com esta vers&atilde;o do CMS';
$lang['admin']['errormodulenotloaded'] = 'Erro interno, o m&oacute;dulo n&atilde;o instanciado';
$lang['admin']['errormodulenotfound'] = 'Erro interno, n&atilde;o foi poss&iacute;vel encontrar a inst&acirc;ncia do m&oacute;dulo';
$lang['admin']['errorinstallfailed'] = 'A instala&ccedil;&atilde;o do m&oacute;dulo falhou';
$lang['admin']['errormodulewontload'] = 'Problema ao instanciar um m&oacute;dulo dispon&iacute;vel';
$lang['admin']['frontendlang'] = 'Idioma padr&atilde;o para a interface do usu&aacute;rio';
$lang['admin']['info_edituser_password'] = 'Modifique este campo para alterar a senha do usu&aacute;rio';
$lang['admin']['info_edituser_passwordagain'] = 'Modifique este campo para alterar a senha do usu&aacute;rio';
$lang['admin']['originator'] = 'Criador';
$lang['admin']['module_name'] = 'Nome do M&oacute;dulo';
$lang['admin']['event_name'] = 'Nome do Evento';
$lang['admin']['event_description'] = 'Descri&ccedil;&atilde;o do Evento';
$lang['admin']['error_delete_default_parent'] = 'Voc&ecirc; n&atilde;o pode excluir a pai de uma p&aacute;gina padr&atilde;o.';
$lang['admin']['jsdisabled'] = 'Desculpe, esta fun&ccedil;&atilde;o exige que voc&ecirc; tenha o JavaScript habilitado.';
$lang['admin']['order'] = 'Ordem';
$lang['admin']['reorderpages'] = 'Reordenar P&aacute;ginas';
$lang['admin']['reorder'] = 'Reordenar';
$lang['admin']['page_reordered'] = 'A p&aacute;gina foi reordenada com sucesso.';
$lang['admin']['pages_reordered'] = 'As p&aacute;ginas foram reordenadas com sucesso.';
$lang['admin']['sibling_duplicate_order'] = 'Duas p&aacute;ginas relacionadas nao pode ter a mesma ordem. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['no_orders_changed'] = 'Voc&ecirc; decidiu reordenar as p&aacute;ginas, mas nao mudou a ordem de nenhuma delas. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_small'] = 'Um ordenamento de p&aacute;gina n&atilde;o pode ser zero. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_large'] = 'Uma ordem p&aacute;gina n&atilde;o pode ser maior do que o n&uacute;mero de p&aacute;ginas naquele nivel. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['user_tag'] = 'Tag do Usu&aacute;rio';
$lang['admin']['add'] = 'Adicionar';
$lang['admin']['CSS'] = 'Folha de Estilos (CSS)';
$lang['admin']['about'] = 'Sobre';
$lang['admin']['action'] = 'A&ccedil;&atilde;o';
$lang['admin']['actionstatus'] = 'A&ccedil;&atilde;o/Status';
$lang['admin']['active'] = 'Ativado';
$lang['admin']['addcontent'] = 'Adicionar Novo Conte&uacute;do';
$lang['admin']['cantremove'] = 'N&atilde;o foi poss&iacute;vel remover';
$lang['admin']['changepermissions'] = 'Mudar Permiss&otilde;es';
$lang['admin']['changepermissionsconfirm'] = 'CUIDADO\n\nEsta a&ccedil;&atilde;o ir&aacute; tentar certificar-se que todos os arquivos do m&oacute;dulo s&atilde;o grav&aacute;veis pelo servidor.\nTem certeza que deseja continuar ?';
$lang['admin']['contentadded'] = 'O conte&uacute;do foi adicionado ao banco de dados com sucesso.';
$lang['admin']['contentupdated'] = 'O conte&uacute;do foi atualizado com sucesso.';
$lang['admin']['contentdeleted'] = 'O conte&uacute;do foi removido do banco de dados com sucesso.';
$lang['admin']['success'] = 'Sucesso';
$lang['admin']['addcss'] = 'Adicionar Novo Folha de Estilos';
$lang['admin']['addgroup'] = 'Adicionar Novo Grupo';
$lang['admin']['additionaleditors'] = 'Editores Adicionais';
$lang['admin']['addtemplate'] = 'Adicionar Novo Modelo Visual';
$lang['admin']['adduser'] = 'Adicionar Novo Usu&aacute;rio';
$lang['admin']['addusertag'] = 'Adicionar Tag Definida pelo Usu&aacute;rio';
$lang['admin']['adminaccess'] = 'Entre como administrador para ter acesso';
$lang['admin']['adminlog'] = 'Registro de Administra&ccedil;&atilde;o';
$lang['admin']['adminlogcleared'] = 'O Log de Administra&ccedil;&atilde;o foi esvaziado com sucesso';
$lang['admin']['adminlogempty'] = 'O Log de Adminsitra&ccedil;&atilde;o est&aacute; vazio';
$lang['admin']['adminsystemtitle'] = 'Sistema de Administra&ccedil;&atilde;o do CMS';
$lang['admin']['adminpaneltitle'] = 'Painel de Administra&ccedil;&atilde;o do CMS Made Simple';
$lang['admin']['advanced'] = 'Avan&ccedil;ado';
$lang['admin']['aliasalreadyused'] = 'Atalho j&aacute; utilizado em outra p&aacute;gina';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Nome do Atalho deve ser de letras e n&uacute;meros';
$lang['admin']['aliasnotaninteger'] = 'Nome do Atalho n&atilde;o pode ser um n&uacute;mero inteiro';
$lang['admin']['allpagesmodified'] = 'Todas as p&aacute;ginas foram modificadas!';
$lang['admin']['assignments'] = 'Associa&ccedil;&otilde;es';
$lang['admin']['associationexists'] = 'Esta associa&ccedil;&atilde;o j&aacute; existe';
$lang['admin']['autoinstallupgrade'] = 'Instalar ou atualizar automaticamente';
$lang['admin']['back'] = 'Voltar ao menu';
$lang['admin']['backtoplugins'] = 'Voltar para a lista de Plugins';
$lang['admin']['cancel'] = 'Cancelar';
$lang['admin']['cantchmodfiles'] = 'N&atilde;o foi poss&iacute;vel mudar as permiss&otilde;es de alguns arquivos.';
$lang['admin']['cantremovefiles'] = 'Problema ao remover arquivos (permiss&otilde;es?)';
$lang['admin']['confirmcancel'] = 'Tem certeza que deseja descartar suas modifica&ccedil;&otilde;es? Clique OK para descartar todas as mudan&ccedil;as. Clique Cancelar para continuar editando.';
$lang['admin']['canceldescription'] = 'Descartar modifica&ccedil;&otilde;es';
$lang['admin']['clearadminlog'] = 'Limpar Registros da Administra&ccedil;&atilde;o';
$lang['admin']['code'] = 'C&oacute;digo';
$lang['admin']['confirmdefault'] = 'Tem certeza de que deseja definir a p&aacute;gina principal do site?';
$lang['admin']['confirmdeletedir'] = 'Tem certeza de que deseja apagar esta pasta e todo o seu conte&uacute;do?';
$lang['admin']['content'] = 'Conte&uacute;do';
$lang['admin']['contentmanagement'] = 'Gerenciamento de Conte&uacute;do';
$lang['admin']['contenttype'] = 'Tipo de Conte&uacute;do';
$lang['admin']['copy'] = 'Copiar';
$lang['admin']['copytemplate'] = 'Copiar Modelo Visual';
$lang['admin']['create'] = 'Criar';
$lang['admin']['createnewfolder'] = 'Criar Nova Pasta';
$lang['admin']['cssalreadyused'] = 'Nome de Folha de Estilos j&aacute; est&aacute; em uso';
$lang['admin']['cssmanagement'] = 'Gerenciamento da Folha de Estilos (CSS)';
$lang['admin']['currentassociations'] = 'Associa&ccedil;&otilde;es Atuais';
$lang['admin']['currentdirectory'] = 'Pasta Atual';
$lang['admin']['currentgroups'] = 'Grupos Atuais';
$lang['admin']['currentpages'] = 'P&aacute;ginas Atuais';
$lang['admin']['currenttemplates'] = 'Modelos Visuais Atuais';
$lang['admin']['currentusers'] = 'Usu&aacute;rios Atuais';
$lang['admin']['custom404'] = 'Mensagem de Erro 404 (p&aacute;gina n&atilde;o encontrada) Customizada';
$lang['admin']['database'] = 'Banco de Dados';
$lang['admin']['databaseprefix'] = 'Prefixo das Tabelas';
$lang['admin']['databasetype'] = 'Tipo de Banco de Dados';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Padr&atilde;o';
$lang['admin']['delete'] = 'Apagar';
$lang['admin']['deleteconfirm'] = 'Tem certeza de que deseja apagar?';
$lang['admin']['deleteassociationconfirm'] = 'Voc&ecirc; tem certeza que quer excluir a associa&ccedil;&atilde;o com - %s - ?';
$lang['admin']['deletecss'] = 'Apagar Folha de Estilos';
$lang['admin']['dependencies'] = 'Depend&ecirc;ncias';
$lang['admin']['description'] = 'Descri&ccedil;&atilde;o';
$lang['admin']['directoryexists'] = 'Esta pasta j&aacute; existe.';
$lang['admin']['down'] = 'Para Baixo';
$lang['admin']['edit'] = 'Editar';
$lang['admin']['editconfiguration'] = 'Editar Configura&ccedil;&atilde;o';
$lang['admin']['editcontent'] = 'Editar Conte&uacute;do';
$lang['admin']['editcss'] = 'Editar Folha de Estilos';
$lang['admin']['editcsssuccess'] = 'Folha de Estlos atualizada';
$lang['admin']['editgroup'] = 'Editar Grupo';
$lang['admin']['editpage'] = 'Editar P&aacute;gina';
$lang['admin']['edittemplate'] = 'Editar Modelo Visual';
$lang['admin']['edittemplatesuccess'] = 'Template atualizada';
$lang['admin']['edituser'] = 'Editar Usu&aacute;rio';
$lang['admin']['editusertag'] = 'Editar Tag Definida pelo Usu&aacute;rio';
$lang['admin']['usertagadded'] = 'A Tag Definida pelo Usu&aacute;rio foi adicionada com sucesso.';
$lang['admin']['usertagupdated'] = 'A Tag Definida pelo Usu&aacute;rio foi atualizada com sucesso.';
$lang['admin']['usertagdeleted'] = 'A Tag Definida pelo Usu&aacute;rio foi removida com sucesso.';
$lang['admin']['email'] = 'Endere&ccedil;o de Email';
$lang['admin']['errorattempteddowngrade'] = 'A instala&ccedil;&atilde;o deste m&oacute;dulo resultar&aacute; em voltar &agrave; uma vers&atilde;o anterior. A opera&ccedil;&atilde;o foi abortada';
$lang['admin']['errorchildcontent'] = 'Conte&uacute;do ainda cont&eacute;m conte&uacute;dos filhos. Por favor remova-os antes.';
$lang['admin']['errorcopyingtemplate'] = 'Erro ao copiar Modelo Visual';
$lang['admin']['errorcouldnotparsexml'] = 'Erro ao ler o arquivo XML';
$lang['admin']['errorcreatingassociation'] = 'Erro ao criar associa&ccedil;&atilde;o';
$lang['admin']['errorcssinuse'] = 'Esta Folha de Estilos est&aacute; sendo usada por Modelos Visuais ou P&aacute;ginas. Por favor remova estas associa&ccedil;&otilde;es antes.';
$lang['admin']['errordefaultpage'] = 'Imposs&iacute;vel apagar a atual p&aacute;gina principal. Por favor defina uma nova antes.';
$lang['admin']['errordeletingassociation'] = 'Erro ao remover associa&ccedil;&atilde;o';
$lang['admin']['errordeletingcss'] = 'Erro ao remover folha de estilos';
$lang['admin']['errordeletingdirectory'] = 'Imposs&iacute;vel apagar pasta. Problemas de Permiss&atilde;o?';
$lang['admin']['errordeletingfile'] = 'Imposs&iacute;vel apagar arquivo. Problemas de Permiss&atilde;o?';
$lang['admin']['errordirectorynotwritable'] = 'Sem permiss&atilde;o para escrever na pasta';
$lang['admin']['errordtdmismatch'] = 'Vers&atilde;o do DTD faltando ou incompat&iacute;vel no arquivo XML';
$lang['admin']['errorgettingcssname'] = 'Erro ao obter nome da Folha de Estilos';
$lang['admin']['errorgettingtemplatename'] = 'Erro ao obter nome do Modelo Visual';
$lang['admin']['errorincompletexml'] = 'Arquivo XML est&aacute; incompleto ou inv&aacute;lido';
$lang['admin']['uploadxmlfile'] = 'Instalar m&oacute;dulo via arquivo XML';
$lang['admin']['cachenotwritable'] = 'A pasta Cache n&atilde;o &eacute; gravavel. A limpeza de cache n&atilde;o ir&aacute; funcionar. Por favor modifique as permiss&otilde;es da pasta tmp/cache para que tenham total permiss&otilde;es de ler/gravar/executar (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'A pasta dos m&oacute;dulos n&atilde;o &eacute; grav&aacute;vel, se voc&ecirc; quiser instalar m&oacute;dulos enviando arquivos XML ao servidor voc&ecirc; precisa modificar as permiss&otilde;es da pasta modules para que tenham total permiss&otilde;es de ler/gravar/executar (chmod 777)';
$lang['admin']['noxmlfileuploaded'] = 'Nenhum arquivo nao foi enviado. Para instalar um modulo via XML voc&ecirc; deve escolher e enviar um arquivo .xml do m&oacute;dulo do seu computador.';
$lang['admin']['errorinsertingcss'] = 'Erro ao adicionar Folha de Estilos';
$lang['admin']['errorinsertinggroup'] = 'Erro ao adicionar grupo';
$lang['admin']['errorinsertingtag'] = 'Erro ao adicionar tag do usu&aacute;rio';
$lang['admin']['errorinsertingtemplate'] = 'Erro ao adicionar modelo visual';
$lang['admin']['errorinsertinguser'] = 'Erro ao adicionar usu&aacute;rio';
$lang['admin']['errornofilesexported'] = 'Erro ao exportar arquivos para XML';
$lang['admin']['errorretrievingcss'] = 'Erro ao carregar Folha de Estilos';
$lang['admin']['errorretrievingtemplate'] = 'Erro ao carregar modelo visual';
$lang['admin']['errortemplateinuse'] = 'Este Modelo Visual est&aacute; sendo usada por uma p&aacute;gina. Por favor remova-a antes.';
$lang['admin']['errorupdatingcss'] = 'Erro ao atualizar Folha de Estilos';
$lang['admin']['errorupdatinggroup'] = 'Erro ao atualizar grupo';
$lang['admin']['errorupdatingpages'] = 'Erro ao atualizar p&aacute;ginas';
$lang['admin']['errorupdatingtemplate'] = 'Erro ao atualizar modelo visual';
$lang['admin']['errorupdatinguser'] = 'Erro ao atualizar usu&aacute;rio';
$lang['admin']['errorupdatingusertag'] = 'Erro ao atualizar tag do usu&aacute;rio';
$lang['admin']['erroruserinuse'] = 'Este usu&aacute;rio ainda possue p&aacute;ginas de conte&uacute;do. Por favor mude o dono destas p&aacute;ginas antes de exclu&iacute;-lo';
$lang['admin']['eventhandlers'] = 'Gerenciador de Eventos';
$lang['admin']['editeventhandler'] = 'Editar o Gerenciador de Eventos';
$lang['admin']['eventhandlerdescription'] = 'Associar tags de us&aacute;rio com eventos';
$lang['admin']['export'] = 'Exportar';
$lang['admin']['event'] = 'Evento';
$lang['admin']['false'] = 'Falso';
$lang['admin']['settrue'] = 'Definir como Verdadeiro';
$lang['admin']['filecreatedirnodoubledot'] = 'Nome da Pasta n&atilde;o pode conter &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Imposs&iacute;vel criar pasta sem nome.';
$lang['admin']['filecreatedirnoslash'] = 'Nome da Pasta n&atilde;o pode conter &#039;/&#039; ou &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gerenciamento de Arquivos';
$lang['admin']['filename'] = 'Nome do Arquivo';
$lang['admin']['filenotuploaded'] = 'Arquivo n&atilde;o pode ser enviado. Problemas de Permiss&atilde;o?';
$lang['admin']['filesize'] = 'Tamanho do arquivo';
$lang['admin']['firstname'] = 'Primeiro Nome';
$lang['admin']['groupmanagement'] = 'Gerenciamento de Grupos';
$lang['admin']['grouppermissions'] = 'Permiss&otilde;es do Grupo';
$lang['admin']['handler'] = 'Tag definida pelo usu&aacute;rio';
$lang['admin']['headtags'] = 'Tags de Cabe&ccedil;alho';
$lang['admin']['help'] = 'Ajuda';
$lang['admin']['new_window'] = 'nova janela';
$lang['admin']['helpwithsection'] = '%s Ajuda';
$lang['admin']['helpaddtemplate'] = '<p>O modelo visual &eacute; o que controla o visual do conte&uacute;do do seu site.</p><p>Crie o layout aqui e adicione suas Folhas de Estilos para controlar o visual de todos seus elementos.</p>';
$lang['admin']['helplisttemplate'] = '<p>Esta p&aacute;gina permite criar, alterar e editar modelos visuais.</p><p>Para criar um novo modelo visual, clique no bot&atilde;o <u>Adicionar Novo Modelo Visual</u>.</p><p>Se voc&ecirc; deseja que todas as p&aacute;ginas utilizem o mesmo modelo visual, clique no link <u>Definir Todas as P&aacute;ginas</u>.</p><p>Se voc&ecirc; deseja duplicar um modelo, clique no &iacute;cone <u>Copiar</u> e voc&ecirc; ser&aacute; perguntado qual nome ter&aacute; a duplica&ccedil;&atilde;o.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Nome do servidor';
$lang['admin']['idnotvalid'] = 'O id digitado n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['imagemanagement'] = 'Gerenciador de Imagens';
$lang['admin']['informationmissing'] = 'Informa&ccedil;&atilde;o faltando';
$lang['admin']['install'] = 'Instalar';
$lang['admin']['invalidcode'] = 'C&oacute;digo digitado &eacute; inv&aacute;lido.';
$lang['admin']['illegalcharacters'] = 'Invalid characters in field %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Uneven amount of braces';
$lang['admin']['invalidtemplate'] = 'O Modelo Visual n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['itemid'] = 'N&uacute;mero do &Iacute;tem';
$lang['admin']['itemname'] = 'Nome do &Iacute;tem';
$lang['admin']['language'] = 'Linguagem';
$lang['admin']['lastname'] = '&Uacute;ltimo Nome';
$lang['admin']['logout'] = 'Sair';
$lang['admin']['loginprompt'] = 'Entre com uma credencial v&aacute;lida para ter acesso ao Painel de Administra&ccedil;&atilde;o.';
$lang['admin']['logintitle'] = 'Login de Administra&ccedil;&atilde;o do CMS Made Simple';
$lang['admin']['menutext'] = 'Texto do Menu';
$lang['admin']['missingparams'] = 'Alguns par&acirc;metros est&atilde;o faltando ou n&atilde;o s&atilde;o v&aacute;lidos';
$lang['admin']['modifygroupassignments'] = 'Modificar Atribui&ccedil;&otilde;es de Grupo';
$lang['admin']['moduleabout'] = 'Sobre o m&oacute;dulo %s';
$lang['admin']['modulehelp'] = 'Ajuda do m&oacute;dulo %s';
$lang['admin']['msg_defaultcontent'] = 'Add code here that should appear as the default content of all new pages';
$lang['admin']['msg_defaultmetadata'] = 'Add code here that should appear in the metadata section of all new pages';
$lang['admin']['wikihelp'] = 'Ajuda da Comunidade';
$lang['admin']['moduleinstalled'] = 'O M&oacute;dulo j&aacute; est&aacute; instalado';
$lang['admin']['moduleinterface'] = 'Interface do %s';
$lang['admin']['modules'] = 'M&oacute;dulos';
$lang['admin']['move'] = 'Mover';
$lang['admin']['name'] = 'Nome';
$lang['admin']['needpermissionto'] = 'Voc&ecirc; precisa de permiss&atilde;o &#039;%s&#039; para realizar esta fun&ccedil;&atilde;o.';
$lang['admin']['needupgrade'] = 'Precisa de Atualiza&ccedil;&atilde;o';
$lang['admin']['newtemplatename'] = 'Nome do Novo Modelo Visual';
$lang['admin']['next'] = 'Pr&oacute;ximo';
$lang['admin']['noaccessto'] = 'Acesso negado para %s';
$lang['admin']['nocss'] = 'Sem Folha de Estilos';
$lang['admin']['noentries'] = 'Nenhuma entrada';
$lang['admin']['nofieldgiven'] = 'Nenhum %s informado!';
$lang['admin']['nofiles'] = 'Sem Arquivos';
$lang['admin']['nopasswordmatch'] = 'Senhas n&atilde;o conferem';
$lang['admin']['norealdirectory'] = 'Nenhuma pasta real foi informada';
$lang['admin']['norealfile'] = 'Nenhum arquivo real foi informado';
$lang['admin']['notinstalled'] = 'N&atilde;o Instalado';
$lang['admin']['overwritemodule'] = 'Sobrescrevendo m&oacute;dulos existentes';
$lang['admin']['owner'] = 'Dono';
$lang['admin']['pagealias'] = 'Atalho da P&aacute;gina';
$lang['admin']['pagedefaults'] = 'Page Defaults';
$lang['admin']['pagedefaultsdescription'] = 'Set default values for new pages';
$lang['admin']['parent'] = 'Pai';
$lang['admin']['password'] = 'Senha';
$lang['admin']['passwordagain'] = 'Senha (novamente)';
$lang['admin']['permission'] = 'Permiss&atilde;o';
$lang['admin']['permissions'] = 'Permiss&otilde;es';
$lang['admin']['permissionschanged'] = 'As Permiss&otilde;es foram atualizadas.';
$lang['admin']['pluginabout'] = 'Sobre a tag %s';
$lang['admin']['pluginhelp'] = 'Ajuda sobre a tag %s';
$lang['admin']['pluginmanagement'] = 'Gerenciamento de Plugins';
$lang['admin']['prefsupdated'] = 'As Prefer&ecirc;ncias foram atualizadas.';
$lang['admin']['preview'] = 'Visualizar';
$lang['admin']['previewdescription'] = 'Prever as mudan&ccedil;as';
$lang['admin']['previous'] = 'Anterior';
$lang['admin']['remove'] = 'Remover';
$lang['admin']['removeconfirm'] = 'Esta a&ccedil;&atilde;o ira remover permanentemente os arquivos dessa instala&ccedil;&atilde;o do m&oacute;dulo\nVoc&ecirc; tem certeza que quer proceder?';
$lang['admin']['removecssassociation'] = 'Remover Associa&ccedil;&atilde;o da Folha de Estilos';
$lang['admin']['saveconfig'] = 'Salvar Configura&ccedil;&atilde;o';
$lang['admin']['send'] = 'Enviar';
$lang['admin']['setallcontent'] = 'Definir Todas as P&aacute;ginas';
$lang['admin']['setallcontentconfirm'] = 'Tem certeza que deseja definir que todas as p&aacute;ginas usem este modelo visual?';
$lang['admin']['showinmenu'] = 'Exibir no Menu';
$lang['admin']['showsite'] = 'Exibir Site';
$lang['admin']['sitedownmessage'] = 'Mensagem de Rodap&eacute; de P&aacute;gina';
$lang['admin']['siteprefs'] = 'Prefer&ecirc;ncias do Site';
$lang['admin']['status'] = 'Status';
$lang['admin']['stylesheet'] = 'Folha de Estilo';
$lang['admin']['submit'] = 'Enviar';
$lang['admin']['submitdescription'] = 'Salvar Mudan&ccedil;as';
$lang['admin']['tags'] = 'Tags';
$lang['admin']['template'] = 'Modelo Visual';
$lang['admin']['templateexists'] = 'Nome de Modelo Visual j&aacute; existe';
$lang['admin']['templatemanagement'] = 'Modelos Visuais';
$lang['admin']['title'] = 'T&iacute;tulo';
$lang['admin']['tools'] = 'Ferramentas';
$lang['admin']['true'] = 'Verdadeiro';
$lang['admin']['setfalse'] = 'Definir como Falso';
$lang['admin']['type'] = 'Tipo';
$lang['admin']['typenotvalid'] = 'Tipo inv&aacute;lido';
$lang['admin']['uninstall'] = 'Desinstalar';
$lang['admin']['uninstallconfirm'] = 'Tem certeza de que deseja desinstalar este?';
$lang['admin']['up'] = 'Cima';
$lang['admin']['upgrade'] = 'Atualizar';
$lang['admin']['upgradeconfirm'] = 'Tem certeza de que deseja atualizar este?';
$lang['admin']['uploadfile'] = 'Enviar Arquivo';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Usar Gerenciamento Avan&ccedil;ado de Folha de Estilos';
$lang['admin']['user'] = 'Usu&aacute;rio';
$lang['admin']['userdefinedtags'] = 'Tags definida pelo usu&aacute;rio';
$lang['admin']['usermanagement'] = 'Usu&aacute;rios';
$lang['admin']['username'] = 'Usu&aacute;rio';
$lang['admin']['usernameincorrect'] = 'Usu&aacute;rio ou senha incorretos';
$lang['admin']['userprefs'] = 'Prefer&ecirc;ncias do Usu&aacute;rio';
$lang['admin']['usersassignedtogroup'] = 'Usu&aacute;rio Transferido para o Grupo %s';
$lang['admin']['usertagexists'] = 'Uma tag com este nome j&aacute; existe. Por favor escolha outro.';
$lang['admin']['usewysiwyg'] = 'Usar Editor Visual (WYSIWYG) para o conte&uacute;do';
$lang['admin']['version'] = 'Vers&atilde;o';
$lang['admin']['view'] = 'Ver';
$lang['admin']['welcomemsg'] = 'Bem-vindo %s';
$lang['admin']['directoryabove'] = 'pasta sobre n&iacute;vel atual';
$lang['admin']['nodefault'] = 'Nenhum Padr&atilde;o Selecionado';
$lang['admin']['blobexists'] = 'Nome de Bloco de Conte&uacute;do Global j&aacute; existe';
$lang['admin']['blobmanagement'] = 'Gerenciamento do Bloco de Conte&uacute;do Global';
$lang['admin']['errorinsertingblob'] = 'Houve um erro ao adicionar o Bloco de Conte&uacute;do Global';
$lang['admin']['addhtmlblob'] = 'Adicionar Bloco de Conte&uacute;do Global';
$lang['admin']['edithtmlblob'] = 'Editar Bloco de Conte&uacute;do Global';
$lang['admin']['edithtmlblobsuccess'] = 'Global content block updated';
$lang['admin']['tagtousegcb'] = 'Tag to Use this Block';
$lang['admin']['gcb_wysiwyg'] = 'Habilitar Editor Visual (WYSIWYG) para Bloco de Conte&uacute;do Global';
$lang['admin']['gcb_wysiwyg_help'] = 'Habilitar Editor Visual (WYSIWYG) enquanto edita Blocos de Conte&uacute;do Global';
$lang['admin']['filemanager'] = 'Gerenciador de Arquivos';
$lang['admin']['imagemanager'] = 'Gerenciador de Imagens';
$lang['admin']['encoding'] = 'Codificando';
$lang['admin']['clearcache'] = 'Esvaziar Cache';
$lang['admin']['clear'] = 'Limpar';
$lang['admin']['cachecleared'] = 'Cache esvaziado';
$lang['admin']['apply'] = 'Aplicar Altera&ccedil;&otilde;es';
$lang['admin']['applydescription'] = 'Salvar modifica&ccedil;&otilde;es e continuar editando';
$lang['admin']['none'] = 'Nenhum';
$lang['admin']['wysiwygtouse'] = 'Selecione o WYSIWYG a usar';
$lang['admin']['syntaxhighlightertouse'] = 'Select syntax highlighter to use';
$lang['admin']['hasdependents'] = 'Tem Dep&ecirc;ndencias';
$lang['admin']['missingdependency'] = 'Depend&ecirc;ncia Faltando';
$lang['admin']['minimumversion'] = 'Vers&atilde;o M&iacute;nima';
$lang['admin']['minimumversionrequired'] = 'Vers&atilde;o m&iacute;nima do CMSMS necess&aacute;ria';
$lang['admin']['maximumversion'] = 'Vers&atilde;o M&aacute;xima';
$lang['admin']['maximumversionsupported'] = 'Vers&atilde;o m&aacute;xima do CMSMS suportada';
$lang['admin']['depsformodule'] = 'Depend&ecirc;ncia para o M&oacute;dulo %s';
$lang['admin']['installed'] = 'Instalado';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Hist&oacute;rico de Mudan&ccedil;as';
$lang['admin']['moduleerrormessage'] = 'Mensagem de erro do m&oacute;dulo %s ';
$lang['admin']['moduleupgradeerror'] = 'Houve um erro ao atualizar o m&oacute;dulo.';
$lang['admin']['moduleinstallmessage'] = 'Mensagem de Instala&ccedil;&atilde;o para o M&oacute;dulo %s';
$lang['admin']['moduleuninstallmessage'] = 'Mensagem de remo&ccedil;&atilde;o do M&oacute;dulo %s';
$lang['admin']['admintheme'] = 'Tema da Administra&ccedil;&atilde;o';
$lang['admin']['addstylesheet'] = 'Adicionar Folha de Estilos';
$lang['admin']['editstylesheet'] = 'Editar Folha de Estilos';
$lang['admin']['addcssassociation'] = 'Adicionar Associa&ccedil;&atilde;o de Folha de Estilos';
$lang['admin']['attachstylesheet'] = 'Anexar esta Folha de Estilos';
$lang['admin']['attachtemplate'] = 'Anexar ao modelo visual';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'P&aacute;ginas';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'Arquivos';
$lang['admin']['layout'] = 'Layout';
$lang['admin']['usersgroups'] = 'Usu&aacute;rios/Grupos';
$lang['admin']['extensions'] = 'Extens&otilde;es';
$lang['admin']['preferences'] = 'Prefer&ecirc;ncias';
$lang['admin']['admin'] = 'Administra&ccedil;&atilde;o do Site';
$lang['admin']['viewsite'] = 'Ver site';
$lang['admin']['templatecss'] = 'Associar modelo visual &agrave; Folha de Estilos';
$lang['admin']['plugins'] = 'Plugins';
$lang['admin']['movecontent'] = 'Mover P&aacute;ginas';
$lang['admin']['module'] = 'M&oacute;dulo';
$lang['admin']['usertags'] = 'Tags definidas pelo usu&aacute;rio';
$lang['admin']['htmlblobs'] = 'Blocos de Conte&uacute;do Global';
$lang['admin']['adminhome'] = '&Aacute;rea do Administrador';
$lang['admin']['liststylesheets'] = 'Folhas de Estilo (CSS)';
$lang['admin']['preferencesdescription'] = 'Aqui &eacute; onde voc&ecirc; determina v&aacute;rios prefer&ecirc;ncias para o site todo.';
$lang['admin']['adminlogdescription'] = 'Mostra um log de quem fez o que na &aacute;rea de administra&ccedil;&atilde;o.';
$lang['admin']['mainmenu'] = 'Menu Principal';
$lang['admin']['users'] = 'Usu&aacute;rios';
$lang['admin']['usersdescription'] = 'Aqui &eacute; onde voc&ecirc; gerencia usu&aacute;rios.';
$lang['admin']['groups'] = 'Grupos';
$lang['admin']['groupsdescription'] = 'Aqui &eacute; onde voc&ecirc; gerencia grupos.';
$lang['admin']['groupassignments'] = 'Atribui&ccedil;&otilde;es de Grupo';
$lang['admin']['groupassignmentdescription'] = 'Aqui voc&ecirc; pode atribuir usu&aacute;rios a grupos.';
$lang['admin']['groupperms'] = 'Permiss&otilde;es de grupo';
$lang['admin']['grouppermsdescription'] = 'Seleciona permiss&otilde;es e n&iacute;veis de acesso para grupos';
$lang['admin']['pagesdescription'] = 'Aqui &eacute; onde adicionamos e editamos p&aacute;ginas e outros conte&uacute;dos.';
$lang['admin']['htmlblobdescription'] = 'Blocos de Conte&uacute;do Global s&atilde;o peda&ccedil;os de conte&uacute;do que voc&ecirc; pode colocar em suas p&aacute;ginas ou modelos.';
$lang['admin']['templates'] = 'Modelos Visuais';
$lang['admin']['templatesdescription'] = 'Aqui &eacute; onde adiconamos ou editamos modelos. Modelos Visuais defnem a cara do seu site.';
$lang['admin']['stylesheets'] = 'Folhas de Estilo';
$lang['admin']['stylesheetsdescription'] = 'Gerenciamento de Folha de Estilos &eacute; um jeito avan&ccedil;ado de gerenciar CSS de forma separada do Modelo Visual.';
$lang['admin']['filemanagerdescription'] = 'Envio e gerenciamento de imagens.';
$lang['admin']['imagemanagerdescription'] = 'Envia/Edita e remove imagens.';
$lang['admin']['moduledescription'] = 'M&oacute;dulos extendem o CMS Made Simple para adicionar mais funcionalidades.';
$lang['admin']['tagdescription'] = 'Tags s&atilde;o pequenas ferramentas que podem ser adicionadas para o seu conte&uacute;do ou modelo.';
$lang['admin']['usertagdescription'] = 'Tags que voc&ecirc; pode criar e modificar para fazer tarefas, direto do browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Cuidado:</strong></em>diret&oacute;rio install ainda existe. Remova-o completamente.';
$lang['admin']['subitems'] = 'Sub&iacute;tems';
$lang['admin']['extensionsdescription'] = 'M&oacute;dulos, tags e outras coisas.';
$lang['admin']['usersgroupsdescription'] = '&Iacute;tens relacionados a usu&aacute;rios e grupos.';
$lang['admin']['layoutdescription'] = 'Op&ccedil;&otilde;es do layout do site.';
$lang['admin']['admindescription'] = 'Fun&ccedil;&otilde;es administrativas do site.';
$lang['admin']['contentdescription'] = 'Aqui &eacute; onde adicionamos e editamos conte&uacute;do.';
$lang['admin']['enablecustom404'] = 'Habilitar mensagem 404';
$lang['admin']['enablesitedown'] = 'Habilitar mensagem de site fora do ar';
$lang['admin']['bookmarks'] = 'Marcadores';
$lang['admin']['user_created'] = 'Criado pelo usu&aacute;rio';
$lang['admin']['forums'] = 'F&oacute;runs';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Ajuda do M&oacute;dulo';
$lang['admin']['managebookmarks'] = 'Gerenciar Marcadores ';
$lang['admin']['editbookmark'] = 'Editar Marcadores';
$lang['admin']['addbookmark'] = 'Adicionar Marcadores';
$lang['admin']['recentpages'] = 'P&aacute;ginas recentes';
$lang['admin']['groupname'] = 'Nome do Grupo';
$lang['admin']['selectgroup'] = 'Selecione um grupo';
$lang['admin']['updateperm'] = 'Atualizar Permiss&otilde;es';
$lang['admin']['admincallout'] = 'Atalhos de Administra&ccedil;&atilde;o';
$lang['admin']['showbookmarks'] = 'Mostrar Marcadores do Administrador';
$lang['admin']['hide_help_links'] = 'Ocultar links de ajuda';
$lang['admin']['hide_help_links_help'] = 'Marque esta caixa para desabilitar os links wiki e de ajuda do m&oacute;dulo dos cabecalhos das p&aacute;ginas.';
$lang['admin']['showrecent'] = 'Mostrar P&aacute;ginas recentemente usadas';
$lang['admin']['attachtotemplate'] = 'Anexar Folha de Estilo ao Modelo Visual';
$lang['admin']['attachstylesheets'] = 'Anexar Folhas de Estilo';
$lang['admin']['indent'] = 'Aumentar recuo da lista de p&aacute;ginas para enfatizar hierarquia';
$lang['admin']['adminindent'] = 'Exibi&ccedil;&atilde;o de Conte&uacute;do';
$lang['admin']['contract'] = 'Contrair Se&ccedil;&atilde;o';
$lang['admin']['expand'] = 'Expandir Se&ccedil;&atilde;o';
$lang['admin']['expandall'] = 'Expandir Todas as Se&ccedil;&otilde;es';
$lang['admin']['contractall'] = 'Contrair Todas as Se&ccedil;&otilde;es';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Configura&ccedil;&atilde;o Global';
$lang['admin']['adminpaging'] = 'N&uacute;mero de itens de conte&uacute;do a mostrar por p&aacute;gina na Lista de P&aacute;ginas';
$lang['admin']['nopaging'] = 'Exibir Todos os Itens';
$lang['admin']['myprefs'] = 'Minhas Prefer&ecirc;ncias';
$lang['admin']['myprefsdescription'] = 'Aqui voc&ecirc; pode customizar a &aacute;rea de administra&ccedil;&atilde;o do site para funcionar da maneira que voc&ecirc; quiser.';
$lang['admin']['myaccount'] = 'Minha Conta';
$lang['admin']['myaccountdescription'] = 'Aqui voc&ecirc; pode atualizar os dados pessoais da sua conta.';
$lang['admin']['adminprefs'] = 'Prefer&ecirc;ncias do Usu&aacute;rios';
$lang['admin']['adminprefsdescription'] = 'Aqui voc&ecirc; configura suas prefer&ecirc;ncias espec&iacute;ficas para a administra&ccedil;&atilde;o do site.';
$lang['admin']['managebookmarksdescription'] = 'Aqui &eacute; onde voc&ecirc; pode gerenciar seus marcadores de administra&ccedil;&atilde;o.';
$lang['admin']['options'] = 'Op&ccedil;&otilde;es';
$lang['admin']['langparam'] = 'Este par&acirc;metro &eacute; usado para especificar qual idioma usar para exibir nas p&aacute;ginas. Nem todos os m&oacute;dulos suportam ou necessitam disto.';
$lang['admin']['parameters'] = 'Par&acirc;metros';
$lang['admin']['mediatype'] = 'Tipo de M&iacute;dia';
$lang['admin']['mediatype_'] = 'N&atilde;o definido : ir&aacute; afetar em todo lugar';
$lang['admin']['mediatype_all'] = 'all : Ajust&aacute;vel para todos os dispositivos.';
$lang['admin']['mediatype_aural'] = 'aural : Intencionado para sitetizadores de voz.';
$lang['admin']['mediatype_braille'] = 'braille : Intencionado para dispositivos de toque.';
$lang['admin']['mediatype_embossed'] = 'embossed : Intencionado para impressoras de braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intencionado para dispositivos de m&atilde;o';
$lang['admin']['mediatype_print'] = 'print : Itencionado para p&aacute;ginas, materiais opacos e para documentos visualizados na tela em modo de visualizar impress&atilde;o.';
$lang['admin']['mediatype_projection'] = 'projection : Itencioado para apresenta&ccedil;&otilde;es projetadas, por exemplo projetores ou imprimir para transpar&ecirc;ncias.';
$lang['admin']['mediatype_screen'] = 'screen : Intencionado primariamente para telas coloriadas de computadores.';
$lang['admin']['mediatype_tty'] = 'tty : Intencionado para dispositivos como terminais e teletipos.';
$lang['admin']['mediatype_tv'] = 'tv : Intencionado para dispositivos do tipo tv.';
$lang['admin']['assignmentchanged'] = 'Permiss&otilde;es de Grupo sendo atualizadas.';
$lang['admin']['stylesheetexists'] = 'Folha de Estilo j&aacute; existe';
$lang['admin']['errorcopyingstylesheet'] = 'Erro ao copiar Folha de Estilo';
$lang['admin']['copystylesheet'] = 'Copiar Folha de Estilos';
$lang['admin']['newstylesheetname'] = 'Nome da Nova Folha de Estilos';
$lang['admin']['target'] = 'Destino';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL do servidor SOAP do Reposit&oacute;rio de M&oacute;dulos';
$lang['admin']['metadata'] = 'Metadata';
$lang['admin']['globalmetadata'] = 'Metadata Global';
$lang['admin']['titleattribute'] = 'Atributo T&iacute;tulo';
$lang['admin']['tabindex'] = 'Indice da Tabela';
$lang['admin']['accesskey'] = 'Tecla de Acesso';
$lang['admin']['sitedownwarning'] = '<strong>Aten&ccedil;&atilde;o:</strong> Seu site est&aacute; exibindo uma mensagem de &quot;Site fora do ar para manuten&ccedil;&atilde;o&quot; neste momento. Remova o arquivo %s para resolver isto.';
$lang['admin']['deletecontent'] = 'Deletar Conte&uacute;do';
$lang['admin']['deletepages'] = 'Deletar estas p&aacute;ginas?';
$lang['admin']['selectall'] = 'Selecionar Todos';
$lang['admin']['selecteditems'] = 'Items Selecionados';
$lang['admin']['inactive'] = 'Inativo';
$lang['admin']['deletetemplates'] = 'Deletar Modelos Visuais';
$lang['admin']['templatestodelete'] = 'Estes Modelos Visuais ser&atilde;o deletados ';
$lang['admin']['wontdeletetemplateinuse'] = 'Estes Modelos Visuais est&atilde;o em uso e n&atilde;o ser&atilde;o deletados';
$lang['admin']['deletetemplate'] = 'Deletar Folhas de Estilo';
$lang['admin']['stylesheetstodelete'] = 'Estas Folhas de Estilo ser&atilde;o deletadas';
$lang['admin']['sitename'] = 'Nome do Site';
$lang['admin']['siteadmin'] = 'Administra&ccedil;&atilde;o do site';
$lang['admin']['images'] = 'Gerenciador de Imagens';
$lang['admin']['blobs'] = 'Bloco de Conte&uacute;do Global';
$lang['admin']['groupmembers'] = 'Associa&ccedil;&atilde;o de Grupos';
$lang['admin']['troubleshooting'] = '(Resolu&ccedil;&atilde;o de Problemas)';
$lang['admin']['event_desc_loginpost'] = 'Enviado depois que um usu&aacute;rio faz login no painel de controle do administrador';
$lang['admin']['event_desc_logoutpost'] = 'Enviado depois que um usu&aacute;rio faz logout no painel de controle do administrador';
$lang['admin']['event_desc_adduserpre'] = 'Enviado antes de um novo usu&aacute;rio ser criado';
$lang['admin']['event_desc_adduserpost'] = 'Enviado ap&oacute;s um novo usu&aacute;rio ser criado';
$lang['admin']['event_desc_edituserpre'] = 'Enviado antes que modifica&ccedil;&otilde;es em um usu&aacute;rio s&atilde;o salvas';
$lang['admin']['event_desc_edituserpost'] = 'Enviado ap&oacute;s que modifica&ccedil;&otilde;es em um usu&aacute;rio s&atilde;o salvas';
$lang['admin']['event_desc_deleteuserpre'] = 'Enviado antes que um usu&aacute;rio &eacute; deletado do sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Enviado depois que um usu&aacute;rio &eacute; deletado do sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Enviado antes que um novo grupo &eacute; criado';
$lang['admin']['event_desc_addgrouppost'] = 'Enviado depois que um novo grupo &eacute; criado';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'Enviado antes que modifica&ccedil;&otilde;es em um grupo s&atilde;o salvas';
$lang['admin']['event_desc_editgrouppost'] = 'Enviado ap&oacute;s que modifica&ccedil;&otilde;es em um grupo s&atilde;o salvas';
$lang['admin']['event_desc_deletegrouppre'] = 'Enviado antes que um grupo &eacute; deletado do sistema';
$lang['admin']['event_desc_deletegrouppost'] = 'Enviado depois que um grupo &eacute; deletado do sistema';
$lang['admin']['event_desc_addstylesheetpre'] = 'Enviado antes que uma nova folha de estilos &eacute; criada';
$lang['admin']['event_desc_addstylesheetpost'] = 'Enviado depois que uma nova folha de estilos &eacute; criada';
$lang['admin']['event_desc_editstylesheetpre'] = 'Enviado antes que modifica&ccedil;&otilde;es em uma folha de estilo s&atilde;o salvas';
$lang['admin']['event_desc_editstylesheetpost'] = 'Enviado depois que modifica&ccedil;&otilde;es em uma folha de estilo s&atilde;o salvas';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Enviado antes que uma folha de estilos &eacute; deletada do sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Enviado depois que uma folha de estilos &eacute; deletada do sistema';
$lang['admin']['event_desc_addtemplatepre'] = 'Enviado antes que um novo modelo visual &eacute; criado';
$lang['admin']['event_desc_addtemplatepost'] = 'Enviado depois que um novo modelo visual &eacute; criado';
$lang['admin']['event_desc_edittemplatepre'] = 'Enviado antes que modifica&ccedil;&otilde;es em um modelo visual s&atilde;o salvas';
$lang['admin']['event_desc_edittemplatepost'] = 'Enviado depois que modifica&ccedil;&otilde;es em um modelo visual s&atilde;o salvas';
$lang['admin']['event_desc_deletetemplatepre'] = 'Enviado antes que um modelo visual &eacute; deletado do sistema';
$lang['admin']['event_desc_deletetemplatepost'] = 'Enviado depois que um modelo visual &eacute; deletado do sistema';
$lang['admin']['event_desc_templateprecompile'] = 'Enviado antes que um modelo visual &eacute; enviado ao smarty para processamento';
$lang['admin']['event_desc_templatepostcompile'] = 'Enviado depois que um modelo visual &eacute; enviado ao smarty para processamento';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Enviado antes que um novo bloco de conte&uacute;do global &eacute; criado';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Enviado depois que um novo bloco de conte&uacute;do global &eacute; criado';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Enviado antes que modifica&ccedil;&otilde;es em um bloco de conte&uacute;do global s&atilde;o salvas';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Enviado depois  que modifica&ccedil;&otilde;es em um bloco de conte&uacute;do global s&atilde;o salvas';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Enviado antes que um bloco de conte&uacute;do global &eacute; deletado do sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Enviado depois que um bloco de conte&uacute;do global &eacute; deletado do sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Enviado antes que um bloco de conte&uacute;do global &eacute; enviado ao smarty para processamento';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Enviado depois que um bloco de conte&uacute;do global &eacute; processado pelo smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Enviado antes que modifica&ccedil;&otilde;es ao conte&uacute;do s&atilde;o salvas';
$lang['admin']['event_desc_contenteditpost'] = 'Enviado depois que modifica&ccedil;&otilde;es ao conte&uacute;do s&atilde;o salvas';
$lang['admin']['event_desc_contentdeletepre'] = 'Enviado antes que um conte&uacute;do &eacute; deletado do sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Enviado depois que um conte&uacute;do &eacute; deletado do sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Enviado antes the sytlesheet is sent to the browser';
$lang['admin']['event_desc_contentprecompile'] = 'Enviado antes content is sent to smarty for processing';
$lang['admin']['event_desc_contentpostcompile'] = 'Enviado depois que o conte&uacute;do foi processado pelo smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Enviado antes the combined html is sent to the browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Enviado antes que qualquer conte&uacute;do destinado ao smarty &eacute; enviado para o processamento';
$lang['admin']['event_desc_smartypostcompile'] = 'Enviado depois que qualquer conteudo destinado ao smarty &eacute; processado';
$lang['admin']['event_help_loginpost'] = '<p>Enviado depois que um usu&aacute;rio faz login no painel de controle do administrador.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Refer&ecirc;ncia ao objeto do usu&aacute;rio afetado.</li>
</ol>
';
$lang['admin']['event_help_logoutpost'] = '<p>Enviado depois que um usu&aacute;rio faz logout no painel de controle do administrador.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Refer&ecirc;ncia ao objeto do usu&aacute;rio afetado.</li>
</ol>
';
$lang['admin']['event_help_adduserpre'] = '<p>Enviado antes de um novo usu&aacute;rio ser criado.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Refer&ecirc;ncia ao objeto do usu&aacute;rio afetado.</li>
</ol>
';
$lang['admin']['event_help_adduserpost'] = '<p>Enviado ap&oacute;s um novo usu&aacute;rio ser criado.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Refer&ecirc;ncia ao objeto do usu&aacute;rio afetado.</li>
</ol>
';
$lang['admin']['event_help_edituserpre'] = '<p>Enviado antes que modifica&ccedil;&otilde;es em um usu&aacute;rio s&atilde;o salvas.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Refer&ecirc;ncia ao objeto do usu&aacute;rio afetado.</li>
</ol>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
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
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template text.</li>
</ol>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template text.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block text.</li>
</ol>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block text.</li>
</ol>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet text.</li>
</ol>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content text.</li>
</ol>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content text.</li>
</ol>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the html text.</li>
</ol>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected text.</li>
</ol>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected text.</li>
</ol>
';
$lang['admin']['filterbymodule'] = 'Filtrar por M&oacute;dulo';
$lang['admin']['showall'] = 'Mostrar Tudo';
$lang['admin']['core'] = 'Core';
$lang['admin']['defaultpagecontent'] = 'Conte&uacute;do Padr&atilde;o da P&aacute;gina';
$lang['admin']['file_url'] = 'Linkar para um arquivo (em vez de um URL)';
$lang['admin']['no_file_url'] = 'Nenhum (Use o URL abaixo)';
$lang['admin']['defaultparentpage'] = 'P&aacute;gina Pai Padr&atilde;o';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Teste';
$lang['admin']['results'] = 'Resultados';
$lang['admin']['untested'] = 'N&atilde;o testado';
$lang['admin']['unknown'] = 'Desconhecido';
$lang['admin']['download'] = 'Download';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'Todos os Grupos';
$lang['admin']['utmz'] = '156861353.1228186412.3.3.utmccn=(referral)|utmcsr=localhost|utmcct=/alccm/admin/moduleinterface.php|utmcmd=referral';
$lang['admin']['utma'] = '156861353.1141998637.1228091253.1228186412.1229058939.4';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353.4.10.1229058939';
?>
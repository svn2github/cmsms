<?php
$lang['admin']['stylesheetcopied'] = 'Stylesheet Copiado';
$lang['admin']['templatecopied'] = 'Template Copiado';
$lang['admin']['ecommerce_desc'] = 'M&oacute;dulos para fornecer as capacidades de E-commerce';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Ocorreu um erro ao analisar blocos de conte&uacute;do (talvez os nomes duplicados no bloco?)';
$lang['admin']['error_no_default_content_block'] = 'Nenhum bloco de conte&uacute;do padr&atilde;o foi detectado neste template. Certifique-se de que tem  um conte&uacute;do (tag) na p&aacute;gina do template.';
$lang['admin']['help_function_cms_stylesheet'] = '<h3>What does this do?</h3>
  <p>A replacement for the {stylesheet} tag, this tag provides caching of css files by generating static files in the tmp/cache directory, and smarty processing of the individual stylesheets.</p>
  <p>This plugin retrieves stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template in the order specified by the designer, and generates stylesheet tags.</p>
  <p>Generated stylesheets are uniquely named according to the last modification date in the database, and are only generated if the stylesheet has changed.</p>
  <p>This tag is the replacement for the {stylesheet} tag.</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page&#039;s head section like: <code>{cms_stylesheet}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one specifically named one, whether it&#039;s attached to the current template or not.</li>
  <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
  <li><em>(optional)</em>media - When used in conjunction with the name parameter this parameter will allow you to override the media type for that stylesheet.  When used in conjunction with the templateid parameter, the media parameter will only output stylesheet tags for those stylesheets that arer marked as compatible with the specified media type.</li>
  </ul>
  <h3>Smarty Processing</h3>
  <p>When generating css files this system passes the stylesheets retrieved from the database through smarty.  The smarty delimiters have been changed from the CMSMS standard { and } to [[ and ]] respectively to ease transition in stylesheets.  This allows creating smarty variables i.e.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] at the top of the stylesheet, and then using these variables later in the stylesheet, i.e:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Because the cached files are generated in the tmp/cache directory of the CMSMS installation, the CSS relative working directory is not the root of the website.  Therefore any images, or other tags that require a url should use the [[root_url]] tag to force it to be an absolute url. i.e:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note:</strong> Due to the caching nature of the plugin, smarty variables should be placed at the top of EACH stylesheet that is attached to a template.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron Granularity ';
$lang['admin']['info_pseudocron_granularity'] = 'Essa configura&ccedil;&atilde;o indica quantas vezes o sistema ir&aacute; tentar lidar com tarefas regulares';
$lang['admin']['cron_request'] = 'Cada pedido';
$lang['admin']['cron_15m'] = '15 Minutos';
$lang['admin']['cron_30m'] = '30 Minutos';
$lang['admin']['cron_60m'] = '1 Hora';
$lang['admin']['cron_120m'] = '2 Horas';
$lang['admin']['cron_3h'] = '3 Horas';
$lang['admin']['cron_6h'] = '6 Horas';
$lang['admin']['cron_12h'] = '12 Horas';
$lang['admin']['cron_24h'] = '24 Horas';
$lang['admin']['clearcache_taskdescription'] = 'Executado diariamente, essa tarefa ir&aacute; limpar o cache que s&atilde;o mais antigos do que os que est&atilde;o presentes nas prefer&ecirc;ncias globais';
$lang['admin']['clearcache_taskname'] = 'Limpar os ficheiros que est&atilde;o em cache';
$lang['admin']['info_autoclearcache'] = 'Especifique um valor inteiro. Digite 0 para desactivar a limpeza do cache autom&aacute;tico';
$lang['admin']['autoclearcache'] = 'Autom&aacute;ticamente limpar o cache a cada N dias';
$lang['admin']['listtemplates_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizaram os templates';
$lang['admin']['liststylesheets_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizaram os stylesheets (css)';
$lang['admin']['listgcbs_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizaram os Blocos de conte&uacute;do global';
$lang['admin']['insecure'] = 'Inseguro (HTTP)';
$lang['admin']['secure'] = 'Seguro (HTTPS)';
$lang['admin']['secure_page'] = 'Usar HTTPS neste p&aacute;gina';
$lang['admin']['thumbnail_width'] = 'Comprimento das miniaturas';
$lang['admin']['thumbnail_height'] = 'Largura das miniaturas';
$lang['admin']['E_STRICT'] = 'E_STRICT n&atilde;o est&aacute; habilitado no &quot;error_reporting&quot;';
$lang['admin']['test_estrict_failed'] = 'E_STRICT est&aacute; habilitado no seu &quot;error reporting&quot;';
$lang['admin']['info_estrict_failed'] = 'Algumas bibliotecas que o CMSMS utiliza n&atilde;o funcionam bem com E_STRICT. Desactive antes de continuar';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED n&atilde;o est&aacute; habilitado no &quot;error_reporting&quot;';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED est&aacute; habilitado';
$lang['admin']['info_edeprecated_failed'] = 'Se E_DEPRECATED estiver habilitado no seu &quot;error reporting&quot; os utilizadores ir&atilde;o ver bastantes mensagens de alerta';
$lang['admin']['session_use_cookies'] = 'As sess&otilde;es s&atilde;o autorizados a utilizar Cookies';
$lang['admin']['errorgettingcontent'] = 'N&atilde;o foi poss&iacute;vel recuperar as informa&ccedil;&otilde;es para o objeto de conte&uacute;do especificado';
$lang['admin']['errordeletingcontent'] = 'Erro de exclus&atilde;o do conte&uacute;do (ou esta p&aacute;gina tem sub-paginas ou &eacute; o conte&uacute;do padr&atilde;o)';
$lang['admin']['invalidemail'] = 'Ender&ccedil;o de E-mail Inv&aacute;lido';
$lang['admin']['info_deletepages'] = 'Nota: Devido a restri&ccedil;&otilde;es de permiss&otilde;es, algumas das p&aacute;ginas que seleccionou para a suprimir n&atilde;o podem ser listadas abaixo';
$lang['admin']['info_pagealias'] = 'Especifique um &uacute;nico atalho para esta p&aacute;gina.';
$lang['admin']['info_autoalias'] = 'Se este campo estiver vazio, ser&aacute; criado um atalho automaticamente.';
$lang['admin']['invalidparent'] = 'Deve seleccionar uma p&aacute;gina Parente (contacte o seu administrador se n&atilde;o visualizar esta op&ccedil;&atilde;o).';
$lang['admin']['forgotpwprompt'] = 'Digite o seu nome de utilizador. Um E-mail ser&aacute; enviado para o seu endere&ccedil;o de E-mail com o nome de utilizador e com as novas informa&ccedil;&otilde;es de login';
$lang['admin']['info_basic_attributes'] = 'Este campo permite especificar qual as propriedades do conte&uacute;do que os utilizadores sem a permiss&atilde;o &quot;Gerir Todo o Conte&uacute;do&quot;  est&atilde;o autorizados a editar.';
$lang['admin']['basic_attributes'] = 'Propriedades B&aacute;sicas';
$lang['admin']['no_permission'] = 'N&atilde;o tem permiss&atilde;o para executar essa fun&ccedil;&atilde;o.';
$lang['admin']['bulk_success'] = 'A opera&ccedil;&atilde;o foi actualizada.';
$lang['admin']['no_bulk_performed'] = 'Nehuma opera&ccedil;&atilde;o foi seleccionada.';
$lang['admin']['info_preview_notice'] = 'Aten&ccedil;&atilde;o: Este painel de pr&eacute;-visualiza&ccedil;&atilde;o tem comportamentos como se de uma janela de navegador se tratasse, permite que  navegue pelo site. No entanto, se o fizer, poder&aacute; sentir comportamentos inesperados. Este painel de pr&eacute;-visualiza&ccedil;&atilde;o foi feito com o intuito de pr&eacute;-visualizar somente a p&aacute;gina que est&aacute; a editar ou a adicionar e n&atilde;o uma  navega&ccedil;&atilde;o pelo site.';
$lang['admin']['sitedownexcludes'] = 'Excluir esses endere&ccedil;os nas Mensagens do Site em Manuten&ccedil;&atilde;o';
$lang['admin']['info_sitedownexcludes'] = 'Este par&acirc;metro permite a listagem de uma lista separada por v&iacute;rgulas de endere&ccedil;os IP ou redes, que n&atilde;o devem ser sujeitos ao mecanismo &quot;Site em Manuten&ccedil;&atilde;o&quot;. Isto permite que os administradores possam trabalhar no site enquanto os visitantes an&oacute;nimo recebem uma mensagem &quot;Site em Manuten&ccedil;&atilde;o&quot;.<br/><br/>Endere&ccedil;os podem ser especificados nos seguintes formatos:<br/>
1. xxx.xxx.xxx.xxx -- (exacto IP)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Defini&ccedil;&otilde;es Avan&ccedil;adas';
$lang['admin']['handle_404'] = 'P&aacute;gina Erro Personalizada 404';
$lang['admin']['sitedown_settings'] = 'Defini&ccedil;&otilde;es Site Manuten&ccedil;&atilde;o ';
$lang['admin']['general_settings'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'Desactivar editor WYSIWYG nessa p&aacute;gina (independentemente do template ou configura&ccedil;&otilde;es do utilizador)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>
';
$lang['admin']['pagelink_circular'] = 'A p&aacute;gina link n&atilde;o pode linkar outra p&aacute;gina link';
$lang['admin']['destinationnotfound'] = 'A p&aacute;gina seleccionada n&atilde;o p&ocirc;de ser encontrado ou &eacute; inv&aacute;lida';
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
$lang['admin']['sqlerror'] = 'SQL erro em %s';
$lang['admin']['image'] = 'Imagem';
$lang['admin']['thumbnail'] = 'Miniatura';
$lang['admin']['searchable'] = 'Esta p&aacute;gina &eacute; pesquisavel';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
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
  <li><em>(optional)</em> urlonly - output only the url to the image, ignoring all parameters like id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Um  nome do UDT v&aacute;lido come&ccedil;a com uma letra ou sublinhado(_), seguido por qualquer n&uacute;mero de letras, n&uacute;meros ou sublinhados.';
$lang['admin']['errorupdatetemplateallpages'] = 'Template n&atilde;o est&aacute; activo';
$lang['admin']['hidefrommenu'] = 'Esconder do Menu';
$lang['admin']['settemplate'] = 'Definir Template';
$lang['admin']['text_settemplate'] = 'Definir as P&aacute;ginas Seleccionadas num Template diferente';
$lang['admin']['cachable'] = 'Em Cache';
$lang['admin']['noncachable'] = 'Sem Cache';
$lang['admin']['copy_from'] = 'Copiar De';
$lang['admin']['copy_to'] = 'Copiar para';
$lang['admin']['copycontent'] = 'Copiar item de Conte&uacute;do';
$lang['admin']['md5_function'] = 'func&atilde;o md5';
$lang['admin']['tempnam_function'] = 'fun&ccedil;&atilde;o tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions no PHP ';
$lang['admin']['xml_function'] = 'Basic XML (expat) suporte';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes para Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Aspas simples, aspas duplas e est&atilde;o barras invertidas escaparam automaticamente. Pode ter problemas em guardar templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes em runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'A maior parte das fun&ccedil;&otilde;es que retornam dados t&ecirc;m aspas na sa&iacute;da com uma barra invertida. Pode ter problemas';
$lang['admin']['file_get_contents'] = 'Teste file_get_contents';
$lang['admin']['check_ini_set'] = 'Teste ini_set';
$lang['admin']['check_ini_set_off'] = 'Pode ter dificuldade em algumas das funcionalidades sem esta capacidade. Este teste pode falhar se safe_mode estiver activo';
$lang['admin']['file_uploads'] = 'Carregamento de Ficheiros';
$lang['admin']['test_remote_url'] = 'Teste para URL remoto';
$lang['admin']['test_remote_url_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de abrir um arquivo remoto num servidor web.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Se o url fopen estiver desactivado n&atilde;o ser&aacute; capaz de aceder &agrave; URL objecto como ftp ou arquivo usando o protocolo http.';
$lang['admin']['connection_error'] = 'Conec&ccedil;&otilde;es de sa&iacute;da http n&atilde;o est&atilde;o a trabalhar! Existe uma firewall ou alguma ACL para conec&ccedil;&otilde;es externas?. Isso resultar&aacute; no m&oacute;dulo manager.';
$lang['admin']['remote_connection_timeout'] = 'Conec&ccedil;&atilde;o excedeu o tempo!';
$lang['admin']['search_string_find'] = 'Conec&ccedil;&atilde;o ok!';
$lang['admin']['connection_failed'] = 'Conec&ccedil;&atilde;o falhou!';
$lang['admin']['remote_response_ok'] = 'Resposta Remota: ok!';
$lang['admin']['remote_response_404'] = 'Resposta Remota: n&atilde;o encontrado!';
$lang['admin']['remote_response_error'] = 'Resposta Remota: erro!';
$lang['admin']['notifications_to_handle'] = 'Tem <b>%d</b> notifica&ccedil;&otilde;es no sistema';
$lang['admin']['notification_to_handle'] = 'Tem <b>%d</b> notifica&ccedil;&atilde;o no sistema';
$lang['admin']['notifications'] = 'Notifica&ccedil;&otilde;es';
$lang['admin']['dashboard'] = 'Visualizar Painel';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorar notifica&ccedil;&otilde;es para os seguintes m&oacute;dulos ';
$lang['admin']['admin_enablenotifications'] = 'Permitir utilizadores verem notifica&ccedil;&otilde;es<br /><em>(notifica&ccedil;&otilde;es mostradas em todas as p&aacute;ginas da administra&ccedil;&atilde;o)</em>';
$lang['admin']['enablenotifications'] = 'Activar notifica&ccedil;&otilde;es para o utilizador na se&ccedil;&atilde;o admin';
$lang['admin']['test_check_open_basedir_failed'] = 'As restri&ccedil;&otilde;es Open basedir est&atilde;o activas. Pode ter algumas dificuldades em alguns addons com esta restri&ccedil;&atilde;o';
$lang['admin']['config_writable'] = 'config.php tem permiss&otilde;es de escrita. &Eacute; mais seguro alterar para permiss&atilde;o de leitura';
$lang['admin']['caution'] = 'Precau&ccedil;&atilde;o';
$lang['admin']['create_dir_and_file'] = 'Verificar se o processo httpd pode criar um arquivo dentro de um diret&oacute;rio';
$lang['admin']['os_session_save_path'] = 'N&atilde;o est&aacute; marcado porque &eacute; OS path';
$lang['admin']['unlimited'] = 'Ilimitado';
$lang['admin']['open_basedir'] = 'PHP Open Basedir ';
$lang['admin']['open_basedir_active'] = 'N&atilde;o est&aacute; marcado uma vez aberta a basedir e activa';
$lang['admin']['invalid'] = 'Inv&aacute;lido';
$lang['admin']['checksum_passed'] = 'Todos os checksums s&atilde;o compat&iacute;veis com o arquivo enviado';
$lang['admin']['error_retrieving_file_list'] = 'Erro ao recuperar a lista de arquivos';
$lang['admin']['files_checksum_failed'] = 'Os arquivos n&atilde;o poderia ser comparados (checksummed)';
$lang['admin']['failure'] = 'Falha';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the &amp;quot;pagedata&amp;quot; block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Espec&iacute;ficar Metadados';
$lang['admin']['pagedata_codeblock'] = 'Smarty dados ou l&oacute;gica que &eacute; espec&iacute;fica para esta p&aacute;gina';
$lang['admin']['error_uploadproblem'] = 'Ocorreu um erro no carregamento';
$lang['admin']['error_nofileuploaded'] = 'Nenhum ficheiro foi carregado';
$lang['admin']['files_failed'] = 'Arquivos md5sum  falharam a verifica&ccedil;&atilde;o';
$lang['admin']['files_not_found'] = 'Arquivos n&atilde;o encotrados';
$lang['admin']['info_generate_cksum_file'] = 'Esta fun&ccedil;&atilde;o permitir&aacute; que gerar um arquivo checksum e guardar no seu computador para posterior valida&ccedil;&atilde;o. Isto deve ser feito pouco antes de lan&ccedil;ar o site, e/ou ap&oacute;s qualquer actualiza&ccedil;&atilde;o, ou de altera&ccedil;&otilde;es importantes.';
$lang['admin']['info_validation'] = 'Esta fun&ccedil;&atilde;o ir&aacute; comparar os checksums encontrados no arquivo enviado com os arquivos de da actual instala&ccedil;&atilde;o. Ele pode ajudar a encontrar problemas com os carregamentos, ou exactamente quais os arquivos que foram modificados caso o seu sistema tenha sido hacked. Um arquivo checksum &eacute; gerado para cada nova vers&atilde;o do CMS a partir de vers&atilde;o 1.4.';
$lang['admin']['download_cksum_file'] = 'Download Ficheiro Checksum';
$lang['admin']['perform_validation'] = 'Realizar Valida&ccedil;&atilde;o';
$lang['admin']['upload_cksum_file'] = 'Carregar Ficheiro Checksum';
$lang['admin']['checksumdescription'] = 'Validar a integridade dos arquivos CMS, compara&ccedil;&atilde;o contra conhecido checksums';
$lang['admin']['system_verification'] = 'Verifica&ccedil;&atilde;o Sistema';
$lang['admin']['extra1'] = 'Atributo Extra 1';
$lang['admin']['extra2'] = 'Atributo Extra 2';
$lang['admin']['extra3'] = 'Atributo Extra 3';
$lang['admin']['start_upgrade_process'] = 'Inicio do Processo de Actualiza&ccedil;&atilde;o';
$lang['admin']['warning_upgrade'] = '<em><strong>Aviso:</strong></em> CMSMS necessita de uma actualiza&ccedil;&atilde;o.';
$lang['admin']['warning_upgrade_info1'] = 'Esta a correr a vers&atilde;o schema  %s. e necessita de ser actualizado para a vers&atilde;o %s';
$lang['admin']['warning_upgrade_info2'] = 'Por Favor click no seguinte link: %s.';
$lang['admin']['warning_mail_settings'] = 'As configura&ccedil;&otilde;es de correio electr&oacute;nico n&atilde;o foram configuradas. Isto pode interferir com a capacidade do seu website de enviar mensagens de E-mail. Deve ir a <b> Extens&otilde;es>> CMSMail </b> e configurar as defini&ccedil;&otilde;es de correio electr&oacute;nico com a informa&ccedil;&atilde;o fornecida pelo seu alojamento.';
$lang['admin']['view_page'] = 'Visualizar esta p&aacute;gina em uma nova janela';
$lang['admin']['off'] = 'Off ';
$lang['admin']['on'] = 'On ';
$lang['admin']['invalid_test'] = 'Par&acirc;metro  valor de teste inv&aacute;lido';
$lang['admin']['copy_paste_forum'] = 'Seleccione este link  copy/paste para ajuda no forum';
$lang['admin']['permission_information'] = 'Informa&ccedil;&otilde;es de Permiss&otilde;es';
$lang['admin']['server_os'] = 'Sistema Operacional do Servidor';
$lang['admin']['server_api'] = 'API do Servidor';
$lang['admin']['server_software'] = 'Software do Servidor';
$lang['admin']['server_information'] = 'Informa&ccedil;&atilde;o do Servidor';
$lang['admin']['session_save_path'] = 'Caminho para Gravar Sess&otilde;es';
$lang['admin']['max_execution_time'] = 'Tempo M&aacute;ximo  de Execu&ccedil;&atilde;o';
$lang['admin']['gd_version'] = 'Vers&atilde;o GD ';
$lang['admin']['upload_max_filesize'] = 'Tamanho M&aacute;ximo Upload';
$lang['admin']['post_max_size'] = 'Tamanho M&aacute;ximo Post';
$lang['admin']['memory_limit'] = 'PHP Limite Memoria';
$lang['admin']['server_db_type'] = 'Base de Dados no Servidor';
$lang['admin']['server_db_version'] = 'Vers&atilde;o da Base de Dados no Servidor';
$lang['admin']['phpversion'] = 'Vers&atilde;o PHP';
$lang['admin']['safe_mode'] = 'PHP Safe Mode (Modo Seguro)';
$lang['admin']['php_information'] = 'Informa&ccedil;&atilde;o PHP';
$lang['admin']['cms_install_information'] = 'CMS Informa&ccedil;&atilde;o da Instala&ccedil;&atilde;o';
$lang['admin']['cms_version'] = 'Vers&atilde;o do CMS';
$lang['admin']['installed_modules'] = 'M&oacute;dulos Instalados';
$lang['admin']['config_information'] = 'Informa&ccedil;&atilde;o de Configura&ccedil;&atilde;o (config)';
$lang['admin']['systeminfo_copy_paste'] = 'Por favor, copie e cole o texto selecionado no f&oacute;rum';
$lang['admin']['help_systeminformation'] = 'As informa&ccedil;&otilde;es indicadas a seguir s&atilde;o recolhidas a partir de uma variedade de locais, est&atilde;o aqui resumidas, de modo a que possa ser capaz de encontrar convenientemente algumas das informa&ccedil;&otilde;es necess&aacute;rias para tentar diagnosticar um problema ou pedir ajuda com a sua instala&ccedil;&atilde;o do CMS Made Simple';
$lang['admin']['systeminfo'] = 'Informa&ccedil;&atilde;o do Sistema';
$lang['admin']['systeminfodescription'] = 'Mostrar v&aacute;rias informa&ccedil;&otilde;es sobre o seu sistema, o que pode ser &uacute;til no diagn&oacute;stico de problemas';
$lang['admin']['welcome_user'] = 'Bem-Vindo';
$lang['admin']['itsbeensincelogin'] = 'J&aacute; passou %s desde o seu &uacute;ltimo login';
$lang['admin']['days'] = 'dias';
$lang['admin']['day'] = 'dia';
$lang['admin']['hours'] = 'horas';
$lang['admin']['hour'] = 'hora';
$lang['admin']['minutes'] = 'minutos';
$lang['admin']['minute'] = 'minuto';
$lang['admin']['help_css_max_age'] = 'Este par&acirc;metro deve ser configurado relativamente elevados para sites est&aacute;ticos <br />, e deve ser ajustado para 0, para desenvolvimento local';
$lang['admin']['css_max_age'] = 'M&aacute;xima quantidade de tempo (segundos) que os estilos (stylesheets) devem ser armazenados no cache do navegador';
$lang['admin']['error'] = 'Erro';
$lang['admin']['clear_version_check_cache'] = 'Limpar cache da verifica&ccedil;&atilde;o de vers&atilde;o';
$lang['admin']['new_version_available'] = '<em>Alerta:</em> Uma nova vers&atilde;o do CMS Made Simple est&aacute; dispon&iacute;vel.  Por Favor contacte o administrador';
$lang['admin']['info_urlcheckversion'] = 'Se a url for a palavra &quot;none&quot; nenhuma verifica&ccedil;&atilde;o ocorrer&aacute;.<br/>Se o campo for vazio ser&aacute; utilizada a URL por defeito.';
$lang['admin']['urlcheckversion'] = 'Verificar novas vers&otilde;es do CMS usando o URL';
$lang['admin']['master_admintheme'] = 'Tema de Administra&ccedil;&atilde;o Padr&atilde;o (para o login e novas contas de utilizador criadas)';
$lang['admin']['contenttype_separator'] = 'Separador';
$lang['admin']['contenttype_sectionheader'] = 'Sec&ccedil;&atilde;o de Cabe&ccedil;alho';
$lang['admin']['contenttype_link'] = 'Link Extreno';
$lang['admin']['contenttype_content'] = 'Conte&uacute;do';
$lang['admin']['contenttype_pagelink'] = 'Link P&aacute;gina Interna';
$lang['admin']['nogcbwysiwyg'] = 'Disabilitar &quot;WYSIWYG Editor&quot; no Bloco de Conte&uacute;do Global';
$lang['admin']['destination_page'] = 'P&aacute;gina de Destino';
$lang['admin']['additional_params'] = 'Par&acirc;metros Adicionais';
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
	<p>Just insert the tag into your template/page like: <code>{print}</code><br></p>
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
                     <pre>{print text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informa&ccedil;&atilde;o';
$lang['admin']['login_info'] = 'A partir deste ponto dever&aacute; ter em considera&ccedil;&atilde;o os seguintes par&acirc;metros';
$lang['admin']['login_info_params'] = '<ol>
    <li>Cookies activados no seu navegador</li>
    <li>Javascript activado no seu navegador </li>
    <li>Janelas popup activas para o seguinte endere&ccedil;o</li>
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
$lang['admin']['help_function_content'] = '	<h3>Para que serve?</h3>
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
$lang['admin']['help_function_cms_versionname'] = '	<h3>Para que serve?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Para que serve?</h3>
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
$lang['admin']['help_function_cms_selflink'] = '		<h3>Para que serve?</h3>
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
$lang['admin']['help_function_cms_module'] = '	<h3>Para que serve?</h3>
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
$lang['admin']['help_function_breadcrumbs'] = '<h3>Para que serve?</h3>
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
$lang['admin']['help_function_anchor'] = '	<h3>Para que serve?</h3>
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
$lang['admin']['help_function_site_mapper'] = '<h3>Para que serve?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Para que serve?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Para que serve?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'de';
$lang['admin']['first'] = 'Primeiro';
$lang['admin']['last'] = '&Uacute;ltimo';
$lang['admin']['adminspecialgroup'] = 'Aviso: Os membros deste grupo t&ecirc;m por defeito todas as permiss&otilde;es';
$lang['admin']['disablesafemodewarning'] = 'Desactivar aviso admin em modo seguro';
$lang['admin']['allowparamcheckwarnings'] = 'Durante a verifica&ccedil;&atilde;o de par&acirc;metros, autorizar a cria&ccedil;&atilde;o de mensagens de aviso';
$lang['admin']['date_format_string'] = 'String Formato de Data ';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formato da data em string. Tente pesquisar por &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = '&Uacute;ltima actualiza&ccedil;&atilde;o';
$lang['admin']['last_modified_by'] = '&Uacute;ltima altera&ccedil;&atilde;o por';
$lang['admin']['read'] = 'Ler';
$lang['admin']['write'] = 'Escrever';
$lang['admin']['execute'] = 'Executar';
$lang['admin']['group'] = 'Grupo';
$lang['admin']['other'] = 'Outro';
$lang['admin']['event_desc_moduleupgraded'] = 'Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_desc_moduleinstalled'] = 'Enviado ap&oacute;s a instala&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_desc_moduleuninstalled'] = 'Enviado ap&oacute;s a remo&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Enviado antes de uma actualiza&ccedil;&atilde;o a um &quot;user defined tag&quot;';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Enviado antes de a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Enviado ap&oacute;s a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Enviado ap&oacute;s a inser&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Enviado antes da inser&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['global_umask'] = 'Mascara de Cria&ccedil;&atilde;o de Ficheiros (umask)';
$lang['admin']['errorcantcreatefile'] = 'N&atilde;o foi poss&iacute;vel criar um ficheiro (problema de permiss&otilde;es?)';
$lang['admin']['errormoduleversionincompatible'] = 'M&oacute;dulo incompat&iacute;vel com esta vers&atilde;o do CMS';
$lang['admin']['errormodulenotloaded'] = 'Erro interno, o m&oacute;dulo n&atilde;o foi instanciado';
$lang['admin']['errormodulenotfound'] = 'Erro interno, n&atilde;o foi poss&iacute;vel encontrar a inst&acirc;ncia do m&oacute;dulo';
$lang['admin']['errorinstallfailed'] = 'A instala&ccedil;&atilde;o do m&oacute;dulo falhou';
$lang['admin']['errormodulewontload'] = 'Problema instanciando um m&oacute;dulo dispon&iacute;vel';
$lang['admin']['frontendlang'] = 'L&iacute;ngua Padr&atilde;o no &quot;site&quot;';
$lang['admin']['info_edituser_password'] = 'Altere este campo para alterar a password do utilizador';
$lang['admin']['info_edituser_passwordagain'] = 'Altere este campo para alterar a password do utilizador';
$lang['admin']['originator'] = 'Originador';
$lang['admin']['module_name'] = 'Nome do M&oacute;dulo';
$lang['admin']['event_name'] = 'Nome do Evento';
$lang['admin']['event_description'] = 'Descri&ccedil;&atilde;o do Evento';
$lang['admin']['error_delete_default_parent'] = 'N&atilde;o pode apagar a p&aacute;gina PARENTE de uma p&aacute;gina padr&atilde;o.';
$lang['admin']['jsdisabled'] = 'Desculpe, esta fun&ccedil;&atilde;o requer que tenha o Javascript activado';
$lang['admin']['order'] = 'Ordem';
$lang['admin']['reorderpages'] = 'Reordenar p&aacute;ginas';
$lang['admin']['reorder'] = 'Reordenar';
$lang['admin']['page_reordered'] = 'P&aacute;gina reordenada com sucesso.';
$lang['admin']['pages_reordered'] = 'P&aacute;ginas reordenadas com sucesso';
$lang['admin']['sibling_duplicate_order'] = 'Duas p&aacute;ginas filhas do mesmo PARENTE n&atilde;o podem ter a mesma ordem. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['no_orders_changed'] = 'Escolheu reordenar as p&aacute;ginas, mas n&atilde;o escolheu a ordem delas. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_small'] = 'Uma p&aacute;gina n&atilde;o pode ser zero. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_large'] = 'Uma ordem de p&aacute;ginas n&atilde;o pode ser superior ao n&uacute;mero de p&aacute;gina nesse n&iacute;vel. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['user_tag'] = 'Tag do Utilizador';
$lang['admin']['add'] = 'Adicionar';
$lang['admin']['CSS'] = 'CSS - Folha de Estilos';
$lang['admin']['about'] = 'Acerca';
$lang['admin']['action'] = 'Ac&ccedil;&atilde;o';
$lang['admin']['actionstatus'] = 'Ac&ccedil;&atilde;o/Estado';
$lang['admin']['active'] = 'Activo';
$lang['admin']['addcontent'] = 'Adicionar Conte&uacute;do';
$lang['admin']['cantremove'] = 'N&atilde;o pode remover';
$lang['admin']['changepermissions'] = 'Alterar Permiss&otilde;es';
$lang['admin']['changepermissionsconfirm'] = 'ATEN&Ccedil;&Atilde;O\n\nEsta ac&ccedil;&atilde;o ir&aacute; tentar assegurar que todos os ficheiros que constituem o m&oacute;dulo tenham permiss&otilde;es de escrita pelo servidor web.\nTem a certeza que quer continuar?';
$lang['admin']['contentadded'] = 'O conte&uacute;do foi adicionado &agrave; base de dados.';
$lang['admin']['contentupdated'] = 'O conte&uacute;do foi actualizado.';
$lang['admin']['contentdeleted'] = 'O conte&uacute;do foi removido da base de dados.';
$lang['admin']['success'] = 'Sucesso';
$lang['admin']['addcss'] = 'Adicionar Folha de Estilo';
$lang['admin']['addgroup'] = 'Adicionar Novo Grupo';
$lang['admin']['additionaleditors'] = 'Editores Adicionais';
$lang['admin']['addtemplate'] = 'Adicionar Novo Template';
$lang['admin']['adduser'] = 'Adicionar Novo Utilizador';
$lang['admin']['addusertag'] = 'Adicionar &quot;User Defined Tag&quot;';
$lang['admin']['adminaccess'] = 'Acesso de &quot;login&quot; para admin';
$lang['admin']['adminlog'] = 'Log Admin';
$lang['admin']['adminlogcleared'] = 'O Log Admin foi limpo';
$lang['admin']['adminlogempty'] = 'O Log Admin est&aacute; vazio';
$lang['admin']['adminsystemtitle'] = 'Sistema CMS Admin';
$lang['admin']['adminpaneltitle'] = 'Painel Admin CMS';
$lang['admin']['advanced'] = 'Avan&ccedil;ado';
$lang['admin']['aliasalreadyused'] = 'Este Atalho de P&aacute;gina est&aacute; a ser utilizada por outra p&aacute;gina. Altere o &quot;Atalho de P&aacute;gina&quot; nas &quot;Op&ccedil;&otilde;es&quot; para algo diferente.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Atalho de p&aacute;gina deve ser apenas n&uacute;meros e/ou letras';
$lang['admin']['aliasnotaninteger'] = 'Atalho de p&aacute;gina n&atilde;o pode ser apenas um n&uacute;mero';
$lang['admin']['allpagesmodified'] = 'Todas as p&aacute;ginas foram alteradas!';
$lang['admin']['assignments'] = 'Designar Utilizadores';
$lang['admin']['associationexists'] = 'Esta associa&ccedil;&atilde;o j&aacute; existe';
$lang['admin']['autoinstallupgrade'] = 'Automaticamente instalar ou actualizar';
$lang['admin']['back'] = 'Voltar ao Menu';
$lang['admin']['backtoplugins'] = 'Voltar &agrave; Lista de &quot;Plugins&quot;';
$lang['admin']['cancel'] = 'Cancelar';
$lang['admin']['cantchmodfiles'] = 'N&atilde;o foi poss&iacute;vel alterar as permiss&otilde;es em alguns ficheiros';
$lang['admin']['cantremovefiles'] = 'Problema Removendo Ficheiros (permiss&otilde;es?)';
$lang['admin']['confirmcancel'] = 'Tem a certeza que deseja desistir de todas as suas altera&ccedil;&otilde;es? Clique em Ok para continuar ou Cancelar para voltar.';
$lang['admin']['canceldescription'] = 'Desistir das  Altera&ccedil;&otilde;es';
$lang['admin']['clearadminlog'] = 'Limpar Log Admin';
$lang['admin']['code'] = 'C&oacute;digo';
$lang['admin']['confirmdefault'] = 'Tem a certeza que quer alterar a p&aacute;gina padr&atilde;o do site?';
$lang['admin']['confirmdeletedir'] = 'Tem a certeza que quer remover esta direct&oacute;ria e todo o seu conte&uacute;do?';
$lang['admin']['content'] = 'Conte&uacute;do';
$lang['admin']['contentmanagement'] = 'Gestor de Conte&uacute;do';
$lang['admin']['contenttype'] = 'Tipo de Conte&uacute;do';
$lang['admin']['copy'] = 'Copiar';
$lang['admin']['copytemplate'] = 'Copiar Template';
$lang['admin']['create'] = 'Criar';
$lang['admin']['createnewfolder'] = 'Criar Nova Pasta';
$lang['admin']['cssalreadyused'] = 'Nome de CSS em utiliza&ccedil;&atilde;o';
$lang['admin']['cssmanagement'] = 'Gestor de CSS';
$lang['admin']['currentassociations'] = 'Associa&ccedil;&otilde;es Actuais ';
$lang['admin']['currentdirectory'] = 'Directoria Actual';
$lang['admin']['currentgroups'] = 'Grupos Actuais';
$lang['admin']['currentpages'] = 'P&aacute;ginas Actuais';
$lang['admin']['currenttemplates'] = 'Templates Actuais';
$lang['admin']['currentusers'] = 'Utilizadores Actuais';
$lang['admin']['custom404'] = 'Mensagem 404 de Erro Personalizada';
$lang['admin']['database'] = 'Base de Dados';
$lang['admin']['databaseprefix'] = 'Prefixo de Base de Dados';
$lang['admin']['databasetype'] = 'Tipo de Base de Dados';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Defeito';
$lang['admin']['delete'] = 'Remover';
$lang['admin']['deleteconfirm'] = 'Tem a certeza que quer remover?';
$lang['admin']['deleteassociationconfirm'] = 'Tem certeza de que deseja apagar a associa&ccedil;&atilde;o para - %s - ?';
$lang['admin']['deletecss'] = 'Remover CSS';
$lang['admin']['dependencies'] = 'Depend&ecirc;ncias';
$lang['admin']['description'] = 'Descri&ccedil;&atilde;o';
$lang['admin']['directoryexists'] = 'Esta directoria j&aacute; existe';
$lang['admin']['down'] = 'Off';
$lang['admin']['edit'] = 'Editar';
$lang['admin']['editconfiguration'] = 'Editar Configura&ccedil;&atilde;o';
$lang['admin']['editcontent'] = 'Editar Conte&uacute;do';
$lang['admin']['editcss'] = 'Editar Folha de Estilo';
$lang['admin']['editcsssuccess'] = 'A folha de estilo foi actualizada';
$lang['admin']['editgroup'] = 'Editar Grupo';
$lang['admin']['editpage'] = 'Editar P&aacute;gina';
$lang['admin']['edittemplate'] = 'Editar Template';
$lang['admin']['edittemplatesuccess'] = 'Template Actualizado';
$lang['admin']['edituser'] = 'Editar Utilizador';
$lang['admin']['editusertag'] = 'Editar &quot;User Defined Tag&quot;';
$lang['admin']['usertagadded'] = 'O &quot;User Defined Tag&quot; foi adicionado.';
$lang['admin']['usertagupdated'] = 'O &quot;User Defined Tag&quot; foi actualizado.';
$lang['admin']['usertagdeleted'] = 'O &quot;User Defined Tag&quot; foi removido.';
$lang['admin']['email'] = 'Endere&ccedil;o Email';
$lang['admin']['errorattempteddowngrade'] = 'A instala&ccedil;&atilde;o deste m&oacute;dulo resultaria num &quot;downgrade&quot;. Opera&ccedil;&atilde;o abortada';
$lang['admin']['errorchildcontent'] = 'O Conte&uacute;do ainda contem p&aacute;ginas filhas. Por favor remova-as primeiro.';
$lang['admin']['errorcopyingtemplate'] = 'Erro ao Copiar Template';
$lang['admin']['errorcouldnotparsexml'] = 'Erro no ficheiro XML. Por favor certifique-se que est&aacute; a &quot;carregar&quot; um ficheiro .xml e n&atilde;o um .tar.gz ou zip.';
$lang['admin']['errorcreatingassociation'] = 'Erro Criando Associa&ccedil;&atilde;o';
$lang['admin']['errorcssinuse'] = 'Esta Folha de Estilo ainda est&aacute; a ser utilizada por templates ou p&aacute;ginas. Por favor remova estas associa&ccedil;&otilde;es primeiro.';
$lang['admin']['errordefaultpage'] = 'N&atilde;o &eacute; poss&iacute;vel remover a actual p&aacute;gina defeito. Por favor seleccione uma diferente primeiro.';
$lang['admin']['errordeletingassociation'] = 'Erro removendo associa&ccedil;&atilde;o';
$lang['admin']['errordeletingcss'] = 'Erro removendo css';
$lang['admin']['errordeletingdirectory'] = 'N&atilde;o foi poss&iacute;vel remover a directoria. Problema de permiss&otilde;es?';
$lang['admin']['errordeletingfile'] = 'N&atilde;o foi poss&iacute;vel remover o ficheiros. Problema de permiss&otilde;es?';
$lang['admin']['errordirectorynotwritable'] = 'N&atilde;o tem permiss&otilde;es para escrever na directoria. Isto pode tamb&eacute;m ter sido causado devido as permiss&otilde;es do ficheiro. Tamb&eacute;m &eacute; poss&iacute;vel o modo seguro estar activado.';
$lang['admin']['errordtdmismatch'] = 'Vers&atilde;o DTD inexistente ou incompat&iacute;vel no ficheiro XML.';
$lang['admin']['errorgettingcssname'] = 'Erro lendo nome da Folha de Estilo';
$lang['admin']['errorgettingtemplatename'] = 'Erro lendo nome do template';
$lang['admin']['errorincompletexml'] = 'Ficheiro XML est&aacute; incompleto ou inv&aacute;lido';
$lang['admin']['uploadxmlfile'] = 'Instalar m&oacute;dulo via ficheiro XML';
$lang['admin']['cachenotwritable'] = 'N&atilde;o tem permiss&otilde;es de escrita na directoria Cache. Sendo que n&atilde;o conseguir&aacute; limpar a cache. Por favor d&ecirc; permiss&otilde;es read/write/execute &agrave; directoria tmp/cache (chmod 777). Poder&aacute; tamb&eacute;m ter de desactivar o modo seguro.';
$lang['admin']['modulesnotwritable'] = 'N&atilde;o tem permiss&otilde;es de escrita na directoria dos m&oacute;dulos. Se deseja instalar m&oacute;dulos ao &quot;carregar&quot; ficheiros XML ter&aacute; que dar permiss&otilde;es de read/write/execute &agrave; directoria (chmod 777). Poder&aacute; tamb&eacute;m ser poss&iacute;vel que o modo seguro esteja activado.';
$lang['admin']['noxmlfileuploaded'] = 'N&atilde;o foi enviado nenhum ficheiro. Para instalar um modulo via XML ter&aacute; que primeiro escolher o m&oacute;dulo (ficheiro .xml) no seu computador.';
$lang['admin']['errorinsertingcss'] = 'Erro a inserir Folha de Estilo';
$lang['admin']['errorinsertinggroup'] = 'Erro a inserir grupo';
$lang['admin']['errorinsertingtag'] = 'Erro  a inserir &quot;user tag&quot;';
$lang['admin']['errorinsertingtemplate'] = 'Erro a inserir template';
$lang['admin']['errorinsertinguser'] = 'Erro a inserir utilizador';
$lang['admin']['errornofilesexported'] = 'Erro a exportar para ficheiro xml';
$lang['admin']['errorretrievingcss'] = 'Erro na busca da Folha de Estilo';
$lang['admin']['errorretrievingtemplate'] = 'Erro na busca do template';
$lang['admin']['errortemplateinuse'] = 'Este template ainda est&aacute; a ser utilizado numa outra p&aacute;gina. Por favor remova-o primeiro.';
$lang['admin']['errorupdatingcss'] = 'Erro na actualiza&ccedil;&atilde;o da Folha de Estilo';
$lang['admin']['errorupdatinggroup'] = 'Erro na actualiza&ccedil;&atilde;o do grupo';
$lang['admin']['errorupdatingpages'] = 'Erro na actualiza&ccedil;&atilde;o das p&aacute;ginas';
$lang['admin']['errorupdatingtemplate'] = 'Erro na actualiza&ccedil;&atilde;o do template';
$lang['admin']['errorupdatinguser'] = 'Erro na actualiza&ccedil;&atilde;o do utilizador';
$lang['admin']['errorupdatingusertag'] = 'Erro na actualiza&ccedil;&atilde;o do &quot;user tag&quot;';
$lang['admin']['erroruserinuse'] = 'Ainda pertencem p&aacute;ginas de conte&uacute;do a este utilizador. Por favor altere o propriet&aacute;rio antes de as remover.';
$lang['admin']['eventhandlers'] = 'Eventos';
$lang['admin']['editeventhandler'] = 'Editar &quot;Event Handler&quot;';
$lang['admin']['eventhandlerdescription'] = 'Associacar &quot;user tags&quot; com eventos';
$lang['admin']['export'] = 'Exportar';
$lang['admin']['event'] = 'Evento';
$lang['admin']['false'] = 'Falso';
$lang['admin']['settrue'] = 'Definir como Verdadeiro';
$lang['admin']['filecreatedirnodoubledot'] = 'Directoria n&atilde;o pode conter &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'N&atilde;o &eacute; poss&iacute;vel criar uma directoria sem nome.';
$lang['admin']['filecreatedirnoslash'] = 'Directoria n&atilde;o pode conter &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gestor de Ficheiros';
$lang['admin']['filename'] = 'Nome de Ficheiro';
$lang['admin']['filenotuploaded'] = 'N&atilde;o foi poss&iacute;vel &quot;upload&quot; o ficheiro. Isto poder&aacute; ser um problema de permiss&otilde;es ou o modo seguro poder&aacute; estar activado.';
$lang['admin']['filesize'] = 'Tamanho de Ficheiro';
$lang['admin']['firstname'] = 'Primeiro Nome';
$lang['admin']['groupmanagement'] = 'Gestor de Grupos';
$lang['admin']['grouppermissions'] = 'Permiss&otilde;es de Grupos';
$lang['admin']['handler'] = 'Manipular (user defined tag)';
$lang['admin']['headtags'] = 'Tags de Cabe&ccedil;alho';
$lang['admin']['help'] = 'Ajuda';
$lang['admin']['new_window'] = 'nova janela';
$lang['admin']['helpwithsection'] = '%s Ajuda';
$lang['admin']['helpaddtemplate'] = '<p>Um template &eacute; o que controla o aspecto e layout do seu site.</p><p>Crie o layout aqui e adicione os seus CSSs na sec&ccedil;&atilde;o Stylesheet para controlar o aspecto dos v&aacute;rios elementos.</p>';
$lang['admin']['helplisttemplate'] = '<p>Esta p&aacute;gina permite-lhe editar, apagar e criar templates.</p><p>Para criar um novo template clique no bot&atilde;o <u>Adicionar Novo Template</u>.</p><p>Se deseja que este template seja utilizado em todas as p&aacute;ginas de conte&uacute;do clique no link<u>Fixar Todo o Conte&uacute;do</u>.</p><p>Se deseja duplicar um template clique no &iacute;cone <u>Copiar</u> de seguida introduza o nome do novo template.</p>';
$lang['admin']['home'] = 'In&iacute;cio';
$lang['admin']['homepage'] = 'P&aacute;gina principal';
$lang['admin']['hostname'] = 'Host-Name';
$lang['admin']['idnotvalid'] = 'O ID fornecido n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['imagemanagement'] = 'Gestor de Imagens';
$lang['admin']['informationmissing'] = 'Tem informa&ccedil;&atilde;o em falta';
$lang['admin']['install'] = 'Instalar';
$lang['admin']['invalidcode'] = 'C&oacute;digo fornecido inv&aacute;lido.';
$lang['admin']['illegalcharacters'] = 'Caracteres Inv&aacute;lidos nos Campos %s.';
$lang['admin']['invalidcode_brace_missing'] = 'N&uacute;mero impar de &quot;braces {}&quot;';
$lang['admin']['invalidtemplate'] = 'O template n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['itemid'] = 'ID Item';
$lang['admin']['itemname'] = 'Nome Item';
$lang['admin']['language'] = 'L&iacute;ngua';
$lang['admin']['lastname'] = 'Apelido';
$lang['admin']['logout'] = 'Sair';
$lang['admin']['loginprompt'] = 'Introduza credenciais de um utilizador v&aacute;lido para aceder ao painel administrativo.';
$lang['admin']['logintitle'] = 'Login Administrativo do CMS';
$lang['admin']['menutext'] = 'Menu Texto';
$lang['admin']['missingparams'] = 'Faltam alguns par&acirc;metro ou est&atilde;o inv&aacute;lidos';
$lang['admin']['modifygroupassignments'] = 'Alterar Atribui&ccedil;&otilde;es do Grupo';
$lang['admin']['moduleabout'] = 'Acerca do m&oacute;dulo %s';
$lang['admin']['modulehelp'] = 'Ajuda do m&oacute;dulo %s';
$lang['admin']['msg_defaultcontent'] = 'O c&oacute;digo aqui adicionado ir&aacute; aparecer como padr&atilde;o no conte&uacute;do de todas as novas p&aacute;ginas geradas';
$lang['admin']['msg_defaultmetadata'] = 'O c&oacute;digo aqui adicionado ir&aacute; aparecer na sec&ccedil;&atilde;o MetaData do conte&uacute;do de todas as novas p&aacute;ginas geradas';
$lang['admin']['wikihelp'] = 'Ajuda Comunit&aacute;ria';
$lang['admin']['moduleinstalled'] = 'M&oacute;dulo j&aacute; instalado';
$lang['admin']['moduleinterface'] = 'Interface %s';
$lang['admin']['modules'] = 'M&oacute;dulos';
$lang['admin']['move'] = 'Mover';
$lang['admin']['name'] = 'Nome';
$lang['admin']['needpermissionto'] = 'Necessita da permiss&atilde;o &#039;%s&#039; para executar essa fun&ccedil;&atilde;o';
$lang['admin']['needupgrade'] = 'Necessitar Actualiza&ccedil;&atilde;o';
$lang['admin']['newtemplatename'] = 'Nome de Template Novo';
$lang['admin']['next'] = 'Seguinte';
$lang['admin']['noaccessto'] = 'Sem Acesso a %s';
$lang['admin']['nocss'] = 'Sem Folha de Estilo';
$lang['admin']['noentries'] = 'Sem Entradas';
$lang['admin']['nofieldgiven'] = 'N&atilde;o foi dado %s !';
$lang['admin']['nofiles'] = 'Nenhuns Ficheiros';
$lang['admin']['nopasswordmatch'] = 'As Palavras Chave n&atilde;o condizem';
$lang['admin']['norealdirectory'] = 'Nenhuma directoria real foi dada';
$lang['admin']['norealfile'] = 'Nenhum ficheiro real foi fornecido';
$lang['admin']['notinstalled'] = 'N&atilde;o Instalado';
$lang['admin']['overwritemodule'] = 'Repor m&oacute;dulos existentes';
$lang['admin']['owner'] = 'Propriet&aacute;rio';
$lang['admin']['pagealias'] = 'Atalho da P&aacute;gina';
$lang['admin']['pagedefaults'] = 'P&aacute;gina Padr&atilde;o';
$lang['admin']['pagedefaultsdescription'] = 'Definir os valores padr&atilde;o para novas p&aacute;ginas';
$lang['admin']['parent'] = 'Parente';
$lang['admin']['password'] = 'Palavra Passe';
$lang['admin']['passwordagain'] = 'Palavra Passe (de novo)';
$lang['admin']['permission'] = 'Permiss&atilde;o';
$lang['admin']['permissions'] = 'Permiss&otilde;es';
$lang['admin']['permissionschanged'] = 'As Permiss&otilde;es foram actualizadas.';
$lang['admin']['pluginabout'] = 'Acerca do tag %s';
$lang['admin']['pluginhelp'] = 'Ajuda para o tag %s';
$lang['admin']['pluginmanagement'] = 'Gestor de &quot;plugins&quot;';
$lang['admin']['prefsupdated'] = 'Prefer&ecirc;ncias foram actualizadas.';
$lang['admin']['preview'] = 'Pre-visualizar';
$lang['admin']['previewdescription'] = 'Pre-visualizar altera&ccedil;&otilde;es';
$lang['admin']['previous'] = 'Anterior';
$lang['admin']['remove'] = 'Remover';
$lang['admin']['removeconfirm'] = 'Esta ac&ccedil;&otilde;es ir&aacute; permanentemente remover todos os ficheiro que constituem este m&oacute;dulo.\nTem a certeza que deseja continuar?';
$lang['admin']['removecssassociation'] = 'Remover Associa&ccedil;&atilde;o Folha de Estilo';
$lang['admin']['saveconfig'] = 'Guardar Configura&ccedil;&atilde;o';
$lang['admin']['send'] = 'Enviar';
$lang['admin']['setallcontent'] = 'Fixar Todas as P&aacute;ginas';
$lang['admin']['setallcontentconfirm'] = 'Tem a certeza que deseja fixar todas as p&aacute;ginas para utilizar este template?';
$lang['admin']['showinmenu'] = 'Exibir no Menu';
$lang['admin']['showsite'] = 'Visualizar Site';
$lang['admin']['sitedownmessage'] = 'Mensagem Site em Baixo';
$lang['admin']['siteprefs'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['status'] = 'Estado';
$lang['admin']['stylesheet'] = 'Folha de Estilo';
$lang['admin']['submit'] = 'Submeter';
$lang['admin']['submitdescription'] = 'Guardar Altera&ccedil;&otilde;es';
$lang['admin']['tags'] = 'Tag&#039;s';
$lang['admin']['template'] = 'Template ';
$lang['admin']['templateexists'] = 'Nome de Template j&aacute; existe';
$lang['admin']['templatemanagement'] = 'Gestor de Templates';
$lang['admin']['title'] = 'T&iacute;tulo';
$lang['admin']['tools'] = 'Ferramentas';
$lang['admin']['true'] = 'Verdadeiro';
$lang['admin']['setfalse'] = 'Definir como Falso';
$lang['admin']['type'] = 'Tipo';
$lang['admin']['typenotvalid'] = 'Tipo n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['uninstall'] = 'Desinstalar';
$lang['admin']['uninstallconfirm'] = 'Tem a certeza que deseja desinstalar este m&oacute;dulo? Nome:';
$lang['admin']['up'] = 'Subir';
$lang['admin']['upgrade'] = 'Actualizar';
$lang['admin']['upgradeconfirm'] = 'Tem a certeza que pretende actualizar?';
$lang['admin']['uploadfile'] = 'Upload Ficheiro';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Utilizar Gestor de Folhas de Estilo Avan&ccedil;ado';
$lang['admin']['user'] = 'Utilizador';
$lang['admin']['userdefinedtags'] = 'Tags Personalizadas';
$lang['admin']['usermanagement'] = 'Gestor de Utilizadores';
$lang['admin']['username'] = 'Nome de utilizador';
$lang['admin']['usernameincorrect'] = 'Nome de utilizador ou palavra passe incorrectas';
$lang['admin']['userprefs'] = 'Prefer&ecirc;ncias de Utilizador';
$lang['admin']['usersassignedtogroup'] = 'Utiliadores Atribuidos ao Grupo %s';
$lang['admin']['usertagexists'] = 'Um &quot;tag&quot; com este nome j&aacute; existe. Por favor escolha outro.';
$lang['admin']['usewysiwyg'] = 'Utilizar editor WYSIWYG para conte&uacute;do';
$lang['admin']['version'] = 'Vers&atilde;o';
$lang['admin']['view'] = 'Vista';
$lang['admin']['welcomemsg'] = 'Bem vindo %s';
$lang['admin']['directoryabove'] = 'directoria acima de n&iacute;vel actual';
$lang['admin']['nodefault'] = 'Nenhum Padr&atilde;o Selecionado';
$lang['admin']['blobexists'] = 'Nome de Bloco de Conte&uacute;do Global j&aacute; existe';
$lang['admin']['blobmanagement'] = 'Gestor de Bloco de Conte&uacute;do Global';
$lang['admin']['errorinsertingblob'] = 'Houve um erro introduzindo um Bolco de Conte&uacute;do Global';
$lang['admin']['addhtmlblob'] = 'Adicionar Bloco de Conte&uacute;do Global';
$lang['admin']['edithtmlblob'] = 'Editar Bolco de Conte&uacute;do Global';
$lang['admin']['edithtmlblobsuccess'] = 'Bolco de Conte&uacute;do Global foi Actualizado';
$lang['admin']['tagtousegcb'] = 'Tag para usar neste Bloco';
$lang['admin']['gcb_wysiwyg'] = 'Activar BCG WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Activar editor WYSIWYG para edi&ccedil;&atilde;o de Blocos de Conte&uacute;do Global';
$lang['admin']['filemanager'] = 'Gestor de Ficheiros';
$lang['admin']['imagemanager'] = 'Gestor de Imagens';
$lang['admin']['encoding'] = 'Codifica&ccedil;&atilde;o';
$lang['admin']['clearcache'] = 'Limpar Cache';
$lang['admin']['clear'] = 'Limpa';
$lang['admin']['cachecleared'] = 'Cache Limpa';
$lang['admin']['apply'] = 'Aplicar';
$lang['admin']['applydescription'] = 'Guardar altera&ccedil;&otilde;es e continuar a editar';
$lang['admin']['none'] = 'nenhum';
$lang['admin']['wysiwygtouse'] = 'Selecionar WYSIWYG a utilizar';
$lang['admin']['syntaxhighlightertouse'] = 'Seleccionar syntax highlighter para usar';
$lang['admin']['hasdependents'] = 'Tem Dependentes';
$lang['admin']['missingdependency'] = 'Faltam Depend&ecirc;ncias';
$lang['admin']['minimumversion'] = 'Vers&atilde;o M&iacute;nima';
$lang['admin']['minimumversionrequired'] = 'Vers&atilde;o M&iacute;nima do CMSMS Requerida';
$lang['admin']['maximumversion'] = 'Vers&atilde;o M&aacute;xima';
$lang['admin']['maximumversionsupported'] = 'Vers&atilde;o M&aacute;xima do CMSMS Suportada';
$lang['admin']['depsformodule'] = 'Depend&ecirc;ncia do m&oacute;dulo %s';
$lang['admin']['installed'] = 'Instalado';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Alterar Historia';
$lang['admin']['moduleerrormessage'] = 'Mensagem de Erro do M&oacute;dulo %s';
$lang['admin']['moduleupgradeerror'] = 'Houve um erro ao actualizar o m&oacute;dulo.';
$lang['admin']['moduleinstallmessage'] = 'Mensagem de instala&ccedil;&atilde;o do m&oacute;dulo %s';
$lang['admin']['moduleuninstallmessage'] = 'Mensagem de desinstala&ccedil;&atilde;o do m&oacute;dulo %s';
$lang['admin']['admintheme'] = 'Tema de Administra&ccedil;&atilde;o';
$lang['admin']['addstylesheet'] = 'Adicionar Folha de Estilo';
$lang['admin']['editstylesheet'] = 'Editar Folha de Estilo';
$lang['admin']['addcssassociation'] = 'Adicionar Associ&ccedil;&atilde;o Folha de Estilo';
$lang['admin']['attachstylesheet'] = 'Anexar Esta Folha de Estilo';
$lang['admin']['attachtemplate'] = 'Anexar a este Template';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'P&aacute;ginas';
$lang['admin']['page'] = 'P&aacute;gina';
$lang['admin']['files'] = 'Ficheiros';
$lang['admin']['layout'] = 'Disposi&ccedil;&atilde;o';
$lang['admin']['usersgroups'] = 'Utilizadores &amp; Grupos';
$lang['admin']['extensions'] = 'Extens&otilde;es';
$lang['admin']['preferences'] = 'Prefer&ecirc;ncia';
$lang['admin']['admin'] = 'Admin Site';
$lang['admin']['viewsite'] = 'Visualizar Site';
$lang['admin']['templatecss'] = 'Atribuir Templates ao Stylesheet';
$lang['admin']['plugins'] = 'Plugins - Adons';
$lang['admin']['movecontent'] = 'Mover P&aacute;ginas';
$lang['admin']['module'] = 'M&oacute;dulo';
$lang['admin']['usertags'] = 'Tags Personalizadas';
$lang['admin']['htmlblobs'] = 'Bloco de Conte&uacute;do Global';
$lang['admin']['adminhome'] = 'P&aacute;gina Principal Administra&ccedil;&atilde;o';
$lang['admin']['liststylesheets'] = 'Folhas de Estilo';
$lang['admin']['preferencesdescription'] = 'Aqui &eacute; onde configura v&aacute;rias prefer&ecirc;ncias globais.';
$lang['admin']['adminlogdescription'] = 'Mostra um log de quem fez o que na administra&ccedil;&atilde;o';
$lang['admin']['mainmenu'] = 'Menu Principal';
$lang['admin']['users'] = 'Utilizadores';
$lang['admin']['usersdescription'] = 'Aqui &eacute; onde pode gerir os utilizadores';
$lang['admin']['groups'] = 'Grupos';
$lang['admin']['groupsdescription'] = 'Aqui &eacute; onde pode gerir os grupos.';
$lang['admin']['groupassignments'] = 'Associa&ccedil;&otilde;es de Grupo';
$lang['admin']['groupassignmentdescription'] = 'Aqui &eacute; onde pode associar utilizadores aos grupos';
$lang['admin']['groupperms'] = 'Permiss&otilde;es de Grupo';
$lang['admin']['grouppermsdescription'] = 'Definir permiss&otilde;es e n&iacute;veis de acesso dos grupos';
$lang['admin']['pagesdescription'] = 'Nesta sec&ccedil;&atilde;o, as p&aacute;ginas e outros conte&uacute;dos s&atilde;o geridos.';
$lang['admin']['htmlblobdescription'] = 'Blocos de Conte&uacute;do Global s&atilde;o bocado de conte&uacute;dos que poder&aacute; adicionar na p&aacute;ginas ou templates.';
$lang['admin']['templates'] = 'Templates ';
$lang['admin']['templatesdescription'] = 'Isto &eacute; onde os templates s&atilde;o adicionados ou editados. Os Templates definem o aspecto do site.';
$lang['admin']['stylesheets'] = 'Folhas de Estilo';
$lang['admin']['stylesheetsdescription'] = 'O gestor de Folhas de Estilo &eacute; um modo avan&ccedil;ado de gest&atilde;o de cascading Stylesheets (CSS) separadamente dos templates.';
$lang['admin']['filemanagerdescription'] = 'Upload e gerir ficheiros.';
$lang['admin']['imagemanagerdescription'] = 'Upload/editar e remover imagens.';
$lang['admin']['moduledescription'] = 'Os m&oacute;dulos complementam o CMS Made Simple de forma a disponibilizar funcionalidades personalizadas.';
$lang['admin']['tagdescription'] = 'Tags s&atilde;o pequenas funcionalidades que podem ser adicionadas ao seu conte&uacute;do e/ou templates.';
$lang['admin']['usertagdescription'] = 'Tags que poder&aacute; criar ao alterar para executar tarefas especificas directamente do seu navegador.';
$lang['admin']['installdirwarning'] = '<strong>Aviso: </strong>   A directoria de instala&ccedil;&atilde;o ainda existe. Por favor remova-a por completo.';
$lang['admin']['subitems'] = 'Subitens';
$lang['admin']['extensionsdescription'] = 'M&oacute;dulos, tags e outros.';
$lang['admin']['usersgroupsdescription'] = 'Itens relacionados com Utilizadores e Grupos.';
$lang['admin']['layoutdescription'] = 'Op&ccedil;&otilde;es de layout do site.';
$lang['admin']['admindescription'] = 'Fun&ccedil;&otilde;es do Site Administrativo.';
$lang['admin']['contentdescription'] = 'Nesta sec&ccedil;&atilde;o adicionam-se e editam-se conte&uacute;do. ';
$lang['admin']['enablecustom404'] = 'Activar Mensagens 404 Personalizadas';
$lang['admin']['enablesitedown'] = 'Activar Mensagem Site Off';
$lang['admin']['bookmarks'] = 'Atalhos';
$lang['admin']['user_created'] = 'Atalhos Personalizados';
$lang['admin']['forums'] = 'F&oacute;runs';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Ajuda M&oacute;dulo';
$lang['admin']['managebookmarks'] = 'Gerir Atalhos';
$lang['admin']['editbookmark'] = 'Editar Atalhos';
$lang['admin']['addbookmark'] = 'Adicionar Atalho';
$lang['admin']['recentpages'] = 'P&aacute;ginas Recentes';
$lang['admin']['groupname'] = 'Nome do Grupo';
$lang['admin']['selectgroup'] = 'Selecionar Grupo';
$lang['admin']['updateperm'] = 'Actualizar Permiss&otilde;es';
$lang['admin']['admincallout'] = 'Atalhos Administra&ccedil;&atilde;o';
$lang['admin']['showbookmarks'] = 'Mostrar Atalhos Admin';
$lang['admin']['hide_help_links'] = 'Esconder link de ajuda';
$lang['admin']['hide_help_links_help'] = 'Selecione para desactivar o wiki e links de ajuda dos m&oacute;dulos.';
$lang['admin']['showrecent'] = 'Mostrar P&aacute;gina Recentemente Utilizadas';
$lang['admin']['attachtotemplate'] = 'Anexar Folha de Estilo ao Template';
$lang['admin']['attachstylesheets'] = 'Anexar Folha de Estilo';
$lang['admin']['indent'] = 'Indentar a listagem de p&aacute;ginas para dar relevo &agrave; hierarquia';
$lang['admin']['adminindent'] = 'Visualiza&ccedil;&atilde;o de Conte&uacute;do';
$lang['admin']['contract'] = 'Fechar Sec&ccedil;&atilde;o';
$lang['admin']['expand'] = 'Abrir Sec&ccedil;&atilde;o';
$lang['admin']['expandall'] = 'Abrir Todas as Sec&ccedil;&otilde;es';
$lang['admin']['contractall'] = 'Fechar Todas as Sec&ccedil;&otilde;es';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['adminpaging'] = 'N&uacute;mero de Itens de Conte&uacute;do a mostrar por p&aacute;gina na Listagem de P&aacute;ginas';
$lang['admin']['nopaging'] = 'Mostrar Todos os Itens';
$lang['admin']['myprefs'] = 'Minhas Prefer&ecirc;ncias';
$lang['admin']['myprefsdescription'] = 'Aqui &eacute; onde pode customizar a &aacute;rea administrativa para funcionar da forma que quer';
$lang['admin']['myaccount'] = 'Minha Conta';
$lang['admin']['myaccountdescription'] = 'Aqui &eacute; onde pode actualizar os detalhes da sua conta pessoal.';
$lang['admin']['adminprefs'] = 'Prefer&ecirc;ncias de Utilizador';
$lang['admin']['adminprefsdescription'] = 'Aqui &eacute; onde pode definir prefer&ecirc;ncias especificas para a administra&ccedil;&atilde;o do site.';
$lang['admin']['managebookmarksdescription'] = 'Aqui &eacute; onde pode gerir os atalhos da administra&ccedil;&atilde;o.';
$lang['admin']['options'] = 'Op&ccedil;&otilde;es';
$lang['admin']['langparam'] = 'Par&acirc;metro utilizado para especificar que l&iacute;ngua utilizar no site. Nem todos os m&oacute;dulos suportam ou necessitam.';
$lang['admin']['parameters'] = 'Par&acirc;metros';
$lang['admin']['mediatype'] = 'Tipo de Media';
$lang['admin']['mediatype_'] = 'Nenhum foi definido : ir&aacute; afectar tudo';
$lang['admin']['mediatype_all'] = 'todos : Ajust&aacute;vel para todos os dispositivos.';
$lang['admin']['mediatype_aural'] = 'oral : Intencionado para sintetizadores de fala.';
$lang['admin']['mediatype_braille'] = 'braille : Intencionado para dispositivos de toque.';
$lang['admin']['mediatype_embossed'] = 'embutido : Intencionado para impressoras de braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intencionado para dispositivos de m&atilde;o';
$lang['admin']['mediatype_print'] = 'impress&atilde;o: Intencionado para pagina&ccedil;&atilde;o, material opaco e documento visualizados em modo de pr&eacute;-visualiza&ccedil;&atilde;o.';
$lang['admin']['mediatype_projection'] = 'projec&ccedil;&atilde;o: Intencionado para apresenta&ccedil;&otilde;es projectadas, por exemplo a utiliza&ccedil;&atilde;o de projectos ou para impress&atilde;o em acetatos.';
$lang['admin']['mediatype_screen'] = '&eacute;cran: Intencionado primariamente para &eacute;crans de computadores com cores.';
$lang['admin']['mediatype_tty'] = 'tty: Intencionado para media utilizando uma grid &quot;fixed-pitch&quot; de caracteres, tais como teletypes e terminais.';
$lang['admin']['mediatype_tv'] = 'tv: Intencionado para dispositivos televisos.';
$lang['admin']['assignmentchanged'] = 'Atribui&ccedil;&otilde;es de Grupo foram Actualizadas.';
$lang['admin']['stylesheetexists'] = 'A Folha de Estilo Existe';
$lang['admin']['errorcopyingstylesheet'] = 'Error ao Copiar Folha de Estilo';
$lang['admin']['copystylesheet'] = 'Copiar Folha de Estilo';
$lang['admin']['newstylesheetname'] = 'Novo Nome de Folha de Estilo';
$lang['admin']['target'] = 'Alvo';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL de Repositor de M&oacute;dulos servidor soap';
$lang['admin']['metadata'] = 'MetaDados';
$lang['admin']['globalmetadata'] = 'MetaDados Global ';
$lang['admin']['titleattribute'] = 'Descri&ccedil;&atilde;o (atributo t&iacute;tulo)';
$lang['admin']['tabindex'] = 'Tab &Iacute;ndice';
$lang['admin']['accesskey'] = 'Chave de Acesso';
$lang['admin']['sitedownwarning'] = '<strong>Aviso:</strong> O seu site est&aacute; a mostrar a mensagem &quot;site em manuten&ccedil;&atilde;o&quot; . Retire o %s ficheiro para resolver.';
$lang['admin']['deletecontent'] = 'Apagar Conte&uacute;do';
$lang['admin']['deletepages'] = 'Apagar estas p&aacute;ginas?';
$lang['admin']['selectall'] = 'Selecionar Tudo';
$lang['admin']['selecteditems'] = 'Selecionados';
$lang['admin']['inactive'] = 'Inactivo';
$lang['admin']['deletetemplates'] = 'Apagar Templates';
$lang['admin']['templatestodelete'] = 'Este templates ser&atilde;o apagados';
$lang['admin']['wontdeletetemplateinuse'] = 'Este templates est&atilde;o em uso e n&atilde;o ser&atilde;o apagados';
$lang['admin']['deletetemplate'] = 'Apagar Stylesheets';
$lang['admin']['stylesheetstodelete'] = 'Estas folhas de estilos ser&atilde;o apagadas';
$lang['admin']['sitename'] = 'Nome Site';
$lang['admin']['siteadmin'] = 'Admin Site';
$lang['admin']['images'] = 'Gestor de Imagens';
$lang['admin']['blobs'] = 'Blocos de Conte&uacute;do Global';
$lang['admin']['groupmembers'] = 'Atribui&ccedil;&otilde;es de Grupo';
$lang['admin']['troubleshooting'] = '(Problemas)';
$lang['admin']['event_desc_loginpost'] = 'Enviado ap&oacute;s um login no painel administrativo';
$lang['admin']['event_desc_logoutpost'] = 'Enviado ap&oacute;s um logout do painel administrativo';
$lang['admin']['event_desc_adduserpre'] = 'Enviado antes de um novo utilizardor ser criado';
$lang['admin']['event_desc_adduserpost'] = 'Enviado ap&oacute;s a cria&ccedil;&atilde;o de um novo utilizador';
$lang['admin']['event_desc_edituserpre'] = 'Enviado antes de as edi&ccedil;&otilde;es ao utilizador terem sido guardadas';
$lang['admin']['event_desc_edituserpost'] = 'Enviado ap&oacute;s edi&ccedil;&otilde;es a um utilizador terem sido salvas';
$lang['admin']['event_desc_deleteuserpre'] = 'Enviado antes de um utilizador ser removido do sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Enviado ap&oacute;s a um utilizador ter sido removido do sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Enviado antes de um novo grupo ser criado';
$lang['admin']['event_desc_addgrouppost'] = 'Enviado ap&oacute;s um novo grupo ter sido criado';
$lang['admin']['event_desc_changegroupassignpre'] = 'Enviado antes das atribui&ccedil;&otilde;es de grupo terem sido salvas';
$lang['admin']['event_desc_changegroupassignpost'] = 'Enviado ap&oacute;s as atribui&ccedil;&otilde;es de grupo terem sido salvas';
$lang['admin']['event_desc_editgrouppre'] = 'Enviado antes das edi&ccedil;&otilde;es ao grupo terem sido salvas';
$lang['admin']['event_desc_editgrouppost'] = 'Enviaso ap&oacute;s as edi&ccedil;&otilde;es ao grupo terem sido salvas';
$lang['admin']['event_desc_deletegrouppre'] = 'Enviado antes de um grupo ser removido';
$lang['admin']['event_desc_deletegrouppost'] = 'Enviado ap&oacute;s um grupo ter sido removido';
$lang['admin']['event_desc_addstylesheetpre'] = 'Enviado antes de uma nova folha de estilo ter sido criada';
$lang['admin']['event_desc_addstylesheetpost'] = 'Enviado ap&oacute;s uma nova folha de estilo ter sido criada';
$lang['admin']['event_desc_editstylesheetpre'] = 'Enviado antes das edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas';
$lang['admin']['event_desc_editstylesheetpost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Enviado antes de um folha de estilo ter sido removido';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Enviado ap&oacute;s uma folha de estilo ter sido removido';
$lang['admin']['event_desc_addtemplatepre'] = 'Enviado antes de um novo template ser criado';
$lang['admin']['event_desc_addtemplatepost'] = 'Enviado ap&oacute;s um novo template ter sido criado';
$lang['admin']['event_desc_edittemplatepre'] = 'Enviado antes das edi&ccedil;&otilde;es ao template terem sido salvas';
$lang['admin']['event_desc_edittemplatepost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es ao template terem sido salvas';
$lang['admin']['event_desc_deletetemplatepre'] = 'Enviado antes de um template ser removido';
$lang['admin']['event_desc_deletetemplatepost'] = 'Enviado ap&oacute;s um template ter sido removido';
$lang['admin']['event_desc_templateprecompile'] = 'Enviado antes de um template ser enviado para &quot;smarty&quot; para processamento';
$lang['admin']['event_desc_templatepostcompile'] = 'Enviado ap&oacute;s um template ter sido processado por &quot;smarty&quot;';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Enviado antes de um novo bloco de conte&uacute;do global ser criado';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Enviado ap&oacute;s um novo bloco de conte&uacute;do global ter sido criado';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Enviado antes de as edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ter sido salvo';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ter sido salvo';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Enviado antes de um bloco de conte&uacute;do global ter sido removido do sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido removido do sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Enviado antes de um bloco de conte&uacute;do global ter sido enviado para processamento pelo smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido processado pelo smart';
$lang['admin']['event_desc_contenteditpre'] = 'Enviado antes de edi&ccedil;&atilde;o ao conte&uacute;do ter sido salvas';
$lang['admin']['event_desc_contenteditpost'] = 'Enviado ap&oacute;s edi&ccedil;&otilde;es ao conte&uacute;do ter sido salvas';
$lang['admin']['event_desc_contentdeletepre'] = 'Enviado antes de conte&uacute;do ser removido do sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Enviado ap&oacute;s o conte&uacute;do ser removido do sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Enviado antes de uma folha de estilo ser enviada para o &quot;Navegador&quot;';
$lang['admin']['event_desc_contentprecompile'] = 'Enviado antes de o conte&uacute;do ter sido enviado para processamento pelo smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Enviado ap&oacute;s o conte&uacute;do ter sido processado pelo smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Enviado antes do conjunto de html ser enviado para o &quot;browser&quot;';
$lang['admin']['event_desc_smartyprecompile'] = 'Enviado antes de qualquer conte&uacute;do destinado para o smarty ser enviado';
$lang['admin']['event_desc_smartypostcompile'] = 'Enviado ap&oacute;s qualquer conte&uacute;do destinado ao smarty ter sido processado';
$lang['admin']['event_help_loginpost'] = '<p>Enviado ap&oacute;s um utilizador fazer login no painel admin.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Enviado ap&oacute;s um utilizador fazer logout do painel admin.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Enviado antes de um novo utilizador ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Enviado ap&oacute;s um novo utilizador ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Enviado antes das edi&ccedil;&otilde;es ao utilizador serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es ao utilizador serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Enviado antes de um utilizador ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Enviado ap&oacute;s um utilizador ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Enviado antes de um novo grupo ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Enviado ap&oacute;s um novo grupo ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Enviado antes das atribui&ccedil;&otilde;es de grupo serem salvas.</p>
<h4>Par&acirc;metros></h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia to the group object.</li>
<li>&#039;users&#039; - Conjunto de refer&ecirc;ncias do objecto de utilizador pertencendo ao grupo.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Enviado ap&oacute;s as atribui&ccedil;&otilde;es de grupo terem sido salvas.</p>
<h4>Par&acirc;metros></h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
<li>&#039;users&#039; - Conjunto de refer&ecirc;ncias do objecto de utilizador pertencendo ao grupo.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Enviado antes das edi&ccedil;&otilde;es ao grupo serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es ao grupo serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Enviado antes de um grupo ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Enviado ap&oacute;s um grupo ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Enviado antes de uma folha de estilo ser criada.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Enviado ap&oacute;s uma folha de estilo ter sido criada.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Enviado antes das edi&ccedil;&otilde;es a uma folha de estilo serem salvas</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Enviado antes de uma folha de estilo ser removida do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Enviado ap&oacute;s uma folha de estilo ser removida do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Enviado antes de um novo template ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Enviado ap&oacute;s um novo template ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Enviado antes das edi&ccedil;&otilde;es a um template serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es a um template terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Enviado antes de um template ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Enviado ap&oacute;s um template ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Enviado antes de um template ser enviado para processamento pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Enviado ap&oacute;s um template ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Enviado antes de um novo bloco de conte&uacute;do global ser cirado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Enviado ap&oacute;s um novo bloco de conte&uacute;do global ter sido criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Enviado antes de edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ser saldo.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Enviado ap&oacute;s edi&ccedil;&otilde;es a um bloco de conte&uacute;do global terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Enviado antes de um bloco de conte&uacute;do global ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Enviado antes de um bloco de conte&uacute;do global ser enviado para o smarty para processamento.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Enviado antes de edi&ccedil;&otilde;es ao conte&uacute;do terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Enviado ap&oacute;s edi&ccedil;&otilde;es ao conte&uacute;dos serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Enviado antes de conte&uacute;do ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Enviado ap&oacute;s conte&uacute;do ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Enviado ap&oacute;s a folha de estilo ter sido enviada para o browser.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Enviado antes do conte&uacute;do ser enviado para o smarty para processamento.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto do conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Enviado ap&oacute;s o conte&uacute;do ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto do conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Enviado antes do conjunto de html ser enviado para o browser.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Enviado antes de qualquer conte&uacute;do destinado ao smarty ter sido processado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto afectado.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Enviado ap&oacute;s de qualquer conte&uacute;do destinado ao smarty ter sido processado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto afectado.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtrar por M&oacute;dulo';
$lang['admin']['showall'] = 'Mostrar Todos';
$lang['admin']['core'] = 'N&uacute;cleo';
$lang['admin']['defaultpagecontent'] = 'Conte&uacute;do de P&aacute;gina Defeito';
$lang['admin']['file_url'] = 'Link para ficheiro (em vez do URL)';
$lang['admin']['no_file_url'] = 'Nenhum (Utilize URL Acima)';
$lang['admin']['defaultparentpage'] = 'P&aacute;gina Parente por Defeito';
$lang['admin']['error_udt_name_whitespace'] = 'Erro: As Tags Personalizadas n&atilde;o podem ter espa&ccedil;os no seu nome.';
$lang['admin']['warning_safe_mode'] = '<strong><em>AVISO:</em></strong> O modo seguro do PHP est&aacute; activado.  Isto ir&aacute; causar dificuldades com ficheiros enviados atrav&eacute;s do navegador, incluindo imagens, temas e m&oacute;dulos. &Eacute; aconselhado a contactar o administrador do site de forma a desactivar o modo seguro. ';
$lang['admin']['test'] = 'Teste';
$lang['admin']['results'] = 'Resultados';
$lang['admin']['untested'] = 'N&atilde;o Testado';
$lang['admin']['unknown'] = 'Desconhecido';
$lang['admin']['download'] = 'Download ';
$lang['admin']['frontendwysiwygtouse'] = 'Editor no site (Frontend)';
$lang['admin']['all_groups'] = 'Todos os Grupos';
$lang['admin']['error_type'] = 'Erro Typo';
$lang['admin']['contenttype_errorpage'] = 'Erro P&aacute;gina';
$lang['admin']['errorpagealreadyinuse'] = 'Erro C&oacute;digo Re-&uacute;tilizado';
$lang['admin']['404description'] = 'P&aacute;gina N&atilde;o Encontrada';
$lang['admin']['usernotfound'] = 'Utilizador N&atilde;o Encontradado';
$lang['admin']['passwordchange'] = 'Por favor, forne&ccedil;a a nova password.';
$lang['admin']['recoveryemailsent'] = 'E-mail enviado para o seu Correio Electr&oacute;nico. Por favor, verifique a sua caixa de correio para mais instru&ccedil;&otilde;es.';
$lang['admin']['errorsendingemail'] = 'Ocorreu um erro ao enviar o e-mail. Contacte o seu administrador.';
$lang['admin']['passwordchangedlogin'] = 'Palavra Passe foi alterda.  Por favor, fa&ccedil;a o login usando as novas credenciais.';
$lang['admin']['nopasswordforrecovery'] = 'N&atilde;o foi definido nenhum endere&ccedil;o de E-mail para este utilizador. A recupera&ccedil;&atilde;o da Palavra Passe n&atilde;o foi poss&iacute;vel. Por Favor entre em contacto com o administrador.';
$lang['admin']['lostpw'] = 'Esqueceu-se da Palavra Passe?';
$lang['admin']['lostpwemailsubject'] = '[%s] Recuperar Palavra Passe';
$lang['admin']['lostpwemail'] = 'Est&aacute; a receber este E-mail porque um pedido foi foi solicitado relativamente ao site  (%s) com a senha associada a esta conta de utilizador (%s). Se quiser redefinir a senha para esta conta bastar&aacute; clicar no link abaixo ou cole-o no campo URL no seu navegador preferido:
%s

Se achar que est&aacute; incorrecto ou solicitado por engano, simplesmente ignore este E-mail e nada mudar&aacute;.';
$lang['admin']['qca'] = 'P0-1236842016-1276975567163';
$lang['admin']['utma'] = '156861353.1127963369.1277311597.1278072220.1278188876.23';
$lang['admin']['utmz'] = '156861353.1277858169.17.5.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['admin']['utmb'] = '156861353.1.10.1278188876';
$lang['admin']['utmc'] = '156861353';
?>
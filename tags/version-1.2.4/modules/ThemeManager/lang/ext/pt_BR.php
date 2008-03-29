<?php
$lang['error_nomenumanager'] = 'M&oacute;dulo MenuManager n&atilde;o encontrado';
$lang['active'] = 'Ativo';
$lang['default'] = 'Padr&atilde;o';
$lang['prompt_themename'] = 'Exportar Tema Como';
$lang['info_themename'] = 'Este campo determina o nome de exibi&ccedil;&atilde;o do modelo visual, independente do nome de entrada do modelo visual.';
$lang['error_editingproblem'] = 'Problema ao limpar e mudar os arquivos de refer&ecirc;ncia neste tema.';
$lang['error_problemsavingincludes'] = 'Problema ao salvar os arquivos codificados neste tema.';
$lang['error_nofilesuploaded'] = 'Nenhum arquivo foi enviado. Tenha certeza que a tag de seu formul&aacute;rio est&aacute; configurada como multipart/form-data e que o campo certo est&aacute; sendo checado para o envio do arquivo.';
$lang['error_templateexists'] = 'Um Modelo Visual com o nome &quot;%s&quot; j&aacute; existe.';
$lang['error_stylesheetexists'] = 'Uma folha de estilo com o nome &quot;%s&quot; j&aacute; existe.';
$lang['error_nostylesheets'] = 'Nenhuma folha de estilo foi encontrada neste tema';
$lang['error_couldnotcreatetemplate'] = 'N&atilde;o foi poss&iacute;vel criar a defini&ccedil;&atilde;o do Modelo Visual';
$lang['error_couldnotassoccss'] = 'Problema ao associar folhas de estilos com este Modelo Visual ';
$lang['error_nooutput'] = 'Nada para exibir';
$lang['error_notemplate'] = 'N&atilde;o foi poss&iacute;vel encontrar Modelo Visual';
$lang['error_dtdmismatch'] = 'Vers&atilde;o DTD n&atilde;o confere, n&atilde;o &eacute; poss&iacute;vel importar';
$lang['import'] = 'Importar';
$lang['upload'] = 'Enviar Tema';
$lang['id'] = 'Id';
$lang['name'] = 'Nome';
$lang['export'] = 'Exportar';
$lang['submit'] = 'Enviar';
$lang['friendlyname'] = 'Gerenciador de Tema';
$lang['postinstall'] = 'Tenha certeza de setar a permiss&atilde;o &quot;Gerenciar Temas&quot; para usar este m&oacute;dulo!';
$lang['postuninstall'] = '&quot;Curses! Foiled Again!&quot;';
$lang['uninstalled'] = 'M&oacute;dulo Desinstalado';
$lang['installed'] = 'Vers&atilde;o %d do m&oacute;dulo instalada.';
$lang['prefsupdated'] = 'Prefer&ecirc;ncias do m&oacute;dulo atualizadas.';
$lang['accessdenied'] = 'Acesso Negado. Por favor, cheque suas permiss&otilde;es.';
$lang['error'] = 'Erro!';
$lang['upgraded'] = 'M&oacute;dulo atualizado para a vers&atilde;o %s.';
$lang['moddescription'] = 'Um m&oacute;dulo que possibilita importar e exportar temas (modelos visuais e folhas de estilos)';
$lang['changelog'] = '<ul>
<li>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module allows you to import and export templates and their attached stylesheets as &quot;themes&quot;.  This allows you to share your look and feel with other cms users.</p
<h3>How Do I Use It</h3>
<p>This module has no front end interface, only an admin interface.  It allows you to select an existing (active) template, and click &quot;Export&quot;.  An XML file containing the template and its attached stylesheets will be created and sent you you via download.</p>
<h3>Permissions</h3>
<p>The permissions model is strict for the Theme Manager to ensure database integrity.  The permission &quot;Manage Themes&quot; is required to export themes, and these three permissions (&quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot;) are required to be able to import a theme.</p>
<p>As well, the opposite functionality exists, you may upload a theme file (xml format) and have the enclosed templates and stylesheets automatically imported into your cmsms installation.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.26842421.1156151266.1156831856.1157890298.3';
$lang['utmz'] = '156861353.1157890298.3.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,5874.msg36269.html|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
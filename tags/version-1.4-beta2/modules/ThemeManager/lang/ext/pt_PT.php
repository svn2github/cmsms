<?php
$lang['error_uploadpermissions'] = '<strong>Aviso:</strong> Sem Permiss&otilde;es.';
$lang['error_nomenumanager'] = 'Gestor de Menus n&atilde;o foi encontrado';
$lang['active'] = 'Activo';
$lang['default'] = 'Padr&atilde;o';
$lang['prompt_themename'] = 'Exportar Tema Como:';
$lang['info_themename'] = 'Este campo determina a sa&iacute;da do tema nome , independentemente do campo nome';
$lang['error_editingproblem'] = 'Problema de limpeza e altera&ccedil;&atilde;o dos arquivos referenciados neste tema.';
$lang['error_problemsavingincludes'] = 'Problema ao salvar os arquivos codificados no tema.';
$lang['error_nofilesuploaded'] = 'Nenhum ficheiro foi carregado. Verifique se o seu formul&aacute;rio enctype foi fixado para multipart/form e se  o campo est&aacute; foi verificado para o arquivo enviado.';
$lang['error_templateexists'] = 'Um Template com o nome &quot;%s&quot; j&aacute; existe';
$lang['error_stylesheetexists'] = 'Uma CSS com o nome &quot;%s&quot; j&aacute; existe';
$lang['error_nostylesheets'] = 'N&atilde;o foram detectados CSS no &acirc;mbito deste tema';
$lang['error_couldnotcreatetemplate'] = 'N&atilde;o foi poss&iacute;vel criar a defini&ccedil;&atilde;o do tema';
$lang['error_couldnotassoccss'] = 'Problema com a associa&ccedil;&atilde;o do CSS ao tema';
$lang['error_nooutput'] = 'Nada &agrave; sa&iacute;da';
$lang['error_notemplate'] = 'N&atilde;o foi poss&iacute;vel encontrar o tema';
$lang['error_dtdmismatch'] = 'N&atilde;o consegue importar';
$lang['import'] = 'Importar';
$lang['upload'] = 'Carregar Tema';
$lang['id'] = 'Id ';
$lang['name'] = 'Nome';
$lang['export'] = 'Exportar';
$lang['submit'] = 'Submeter';
$lang['friendlyname'] = 'Gestor de Temas';
$lang['postinstall'] = 'Certifique-se de definir as permiss&otilde;es &quot;Administrar Temas&quot;  para usar este m&oacute;dulo!';
$lang['uninstalled'] = 'M&oacute;dulo Desinstalado.';
$lang['installed'] = 'Vers&atilde;o do M&oacute;dulo %s instalado.';
$lang['prefsupdated'] = 'Prefer&ecirc;ncias do M&oacute;dulo Actualizadas.';
$lang['accessdenied'] = 'Acesso Negado.';
$lang['error'] = 'Erro!';
$lang['upgraded'] = 'Vers&atilde;o do M&oacute;dulo %s Actualizado.';
$lang['moddescription'] = 'M&oacute;dulo para permitir a importa&ccedil;&atilde;o e exporta&ccedil;&atilde;o de conte&uacute;dos em Temas (templates e stylesheets)';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
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
<h3>Tradu&ccedil;&atilde;o Portuguesa</h3>
<p>Copyright &copy; 2008, Nuno Costa <nuno.mfcosta@sapo.pt>.</p>
';
$lang['utmz'] = '156861353.1213664485.2.2.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,22873.0/topicseen.html';
$lang['utma'] = '156861353.2596461061702879000.1213652711.1213723630.1213726749.6';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1213726749';
?>
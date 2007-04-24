<?php
$lang['error_uploadpermissions'] = '<strong>AVISO:</strong> No tienes permisos suficientes para instalar o subir temas.  Puede ser debido a los permisos en los subdirectorios de uploads o m&oacute;dulos, o bien Safe mode puede estar activado en tu servidor.';
$lang['error_nomenumanager'] = 'M&oacute;dulo MenuManager no encontrado';
$lang['active'] = 'Activo';
$lang['default'] = 'Defecto';
$lang['prompt_themename'] = 'Exportar tema como:';
$lang['info_themename'] = 'Este campo determina el nombre del tema saliente, aparte del nombre del tema entrante';
$lang['error_editingproblem'] = 'Problema al modificar los archivos de referencia para este tema.';
$lang['error_problemsavingincludes'] = 'Problema al guardar los archivos del tema.';
$lang['error_nofilesuploaded'] = 'No se subieron archivos. Comprueba que el tag encrypte del formulario es multipart/form-data y que esta activo el check correcto para el archivo subido.';
$lang['error_templateexists'] = 'A template with the name &quot;%s&quot; already exists';
$lang['error_stylesheetexists'] = 'A stylesheet with the name &quot;%s&quot; already exists';
$lang['error_nostylesheets'] = 'No se han detectado hojas de estilos en este tema';
$lang['error_couldnotcreatetemplate'] = 'No se pudo crear la definici&oacute;n de la Plantilla';
$lang['error_couldnotassoccss'] = 'Problema al asociar la hoja de estilo con la plantilla';
$lang['error_nooutput'] = 'Nada que mostrar';
$lang['error_notemplate'] = 'No se encuantra plantilla';
$lang['error_dtdmismatch'] = 'Error DTD Version, no se puede importar';
$lang['import'] = 'Importar';
$lang['upload'] = 'Subir tema';
$lang['id'] = 'Id ';
$lang['name'] = 'Nombre';
$lang['export'] = 'Exportar';
$lang['submit'] = 'Enviar';
$lang['friendlyname'] = 'Gestor de Temas';
$lang['postinstall'] = '&iexcl;Debes activar los permisos de &quot;Gestionar Temas&quot; para usar este m&oacute;dulo!';
$lang['uninstalled'] = 'Modulo Desinstalado.';
$lang['installed'] = 'M&oacute;dulo versi&oacute;n %s instalado.';
$lang['prefsupdated'] = 'Preferencias del m&oacute;dulo actualizadas.';
$lang['accessdenied'] = 'Acceso Denegado. Revise sus permisos.';
$lang['error'] = '&iexcl;Error!';
$lang['upgraded'] = 'M&oacute;dulo actualizado a la versi&oacute;n %s.';
$lang['moddescription'] = 'M&oacute;dulo para importar y exportar temas para el contenido (plantillas y hejas de estilo)';
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
$lang['utma'] = '156861353.619180346.1171815579.1171815579.1172697500.2';
$lang['utmb'] = '156861353';
$lang['utmz'] = '156861353.1171815579.1.1.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/shownotes.php|utmcmd=referral';
?>
<?php
$lang['error_uploadpermissions'] = '<strong>AVISO:</strong> No tienes permisos suficientes para instalar o subir temas.  Puede ser debido a los permisos en los subdirectorios de uploads o m&oacute;dulos, o bien Safe mode puede estar activado en tu servidor.';
$lang['error_nomenumanager'] = 'M&oacute;dulo MenuManager no encontrado';
$lang['active'] = 'Activo';
$lang['default'] = 'Por Defecto';
$lang['prompt_themename'] = 'Exportar Tema Como:';
$lang['info_themename'] = 'Este campo determina el nombre del tema saliente, sin importar el nombre del tema entrante';
$lang['error_editingproblem'] = 'Problema al modificar los archivos de referencia para este tema.';
$lang['error_problemsavingincludes'] = 'Problema al guardar los archivos del tema.';
$lang['error_nofilesuploaded'] = 'No se subieron archivos. Compruebe que el tag encrypte de su formulario se puso a multipart/form-data y que el campo correspondiente est&aacute; tildado para el archivo a subir.';
$lang['error_templateexists'] = 'Ya existe una plantilla con el nombre &quot;%s&quot;';
$lang['error_stylesheetexists'] = 'Ya existe una hoja de estilo con el nombre &quot;%s&quot;';
$lang['error_nostylesheets'] = 'No se han detectado hojas de estilos en este tema';
$lang['error_couldnotcreatetemplate'] = 'No se pudo crear la definici&oacute;n de la plantilla';
$lang['error_couldnotassoccss'] = 'Problema al asociar la hoja de estilo con la plantilla';
$lang['error_nooutput'] = 'Nada que mostrar';
$lang['error_notemplate'] = 'No se pudo encontrar la plantilla';
$lang['error_dtdmismatch'] = 'Error en la Versi&oacute;n DTD, no se puede importar';
$lang['import'] = 'Importar';
$lang['upload'] = 'Subir Tema';
$lang['id'] = 'Id ';
$lang['name'] = 'Nombre';
$lang['export'] = 'Exportar';
$lang['submit'] = 'Enviar';
$lang['friendlyname'] = 'Gestor de Temas';
$lang['postinstall'] = '&iexcl;Debe activar los permisos de &quot;Gestionar Temas&quot; para usar este m&oacute;dulo!';
$lang['uninstalled'] = 'M&oacute;dulo Desinstalado.';
$lang['installed'] = 'Se instal&oacute; la versi&oacute;n %s del m&oacute;dulo.';
$lang['prefsupdated'] = 'Preferencias del m&oacute;dulo actualizadas.';
$lang['accessdenied'] = 'Acceso Denegado. Revise sus permisos.';
$lang['error'] = '&iexcl;Error!';
$lang['upgraded'] = 'M&oacute;dulo actualizado a la versi&oacute;n %s.';
$lang['moddescription'] = 'M&oacute;dulo para importar y exportar temas de contenido (plantillas y hojas de estilo)';
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
$lang['help'] = '<h3>&iquest;Qu&eacute; hace esto?</h3>
<p>Este m&oacute;dulo le permite importar y exportar plantillas y sus hojas de estilo adjuntas como &quot;temas&quot;.  De esta forma tendr&aacute; la posibilidad de compartir el estilo y el sentido de su sitio con otros usuarios de CMS MS.</p
<h3>&iquest;C&oacute;mo lo puedo usar?</h3>
<p>Este m&oacute;dulo no tiene interfase en el portal, s&oacute;lo tiene una interfase para administrar.  Le permite elegir una plantilla existente (activa), y hacer click en &quot;Exportar&quot;.  Un archivo XML conteniendo la plantilla y su hoja de estilo adjunta ser&aacute; creada y enviada a usted v&iacute;a descarga del archivo.</p>
<h3>Permisos</h3>
<p>El modelo de permisos es particularmente estricto para el Gestor de Temas con el fin de asegurar la integridad de la base de datos.  El permiso &quot;Gestionar Temas&quot; se requiere para exportar temas, y los tres siguientes permisos (&quot;Agregar Hoja de Estilo&quot;, &quot;Agregar Asociaci&oacute;n de Hoja de Estilo&quot;, y &quot;Agregar Plantillas&quot;) se requieren para poder importar un tema.</p>
<p>De la misma forma, existe la funcionalidad inversa, usted puede subir un archivo de tema (formato xml) y lograr que la plantilla y su hoja de estilo adjunta sean autom&aacute;ticamente importadas a su instalaci&oacute;n de CMS MS.</p>
<h3>Soporte</h3>
<p>Este m&oacute;dulo no incluye soporte comercial. Sin embargo, tiene disponibles un sin n&uacute;mero de recursos disponibles para ayudarlo con &eacute;l:</p>
<ul>
<li>Por la versi&oacute;n &uacute;ltima de este m&oacute;dulo, FAQs, para presentar un archivo de Informe de Bug o comprar soporte comercial, por favor visite el sitio web del m&oacute;dulo en <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Adem&aacute;s el intercambio de ideas respecto a este m&oacute;dulo se puede realizar yendo al <a href=&quot;http://forum.cmsmadesimple.org&quot;>Foro de CMS Made Simple</a>.</li>
<li>El autor, calguy1000, con frecuencia puede encontrarlo en el <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a>.</li>
<li>Finalmente, puede tener alg&uacute;n &eacute;xito enviando un email al autor en forma directa.</li>  
</ul>
<p>De acuerdo con la GPL, este software se provee como es. Por favor lea el texto de la licencia por completo para conocer sus afirmaciones.</p>

<h3>Copyright y Licencia</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Todos los Derechos Reservados.</p>
<p>Este m&oacute;dulo se ha realizado bajo la <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>Licencia P&uacute;blica GNU</a>. Usted debe estar de acuerdo con la licencia antes de usar el m&oacute;dulo.</p>
';
$lang['utma'] = '156861353.805641954.1192475049.1195041082.1195059890.53';
$lang['utmz'] = '156861353.1194455435.42.12.utmccn=(organic)|utmcsr=google|utmctr=cms made simple nightly snapshot|utmcmd=organic';
$lang['utmc'] = '156861353';
?>
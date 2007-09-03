<?php
$lang['prompt_settings'] = 'Opciones';
$lang['prompt_otheroptions'] = 'Otras Opciones';
$lang['reset'] = 'Resetear';
$lang['error_permissions'] = '<strong><em>AVISO></strong> Permisos insuficientes para instalar m&oacute;dulos.  Puede que tambi&eacute;n tengas problemas con PHP Safe mode.  Aseg&uacute;rate de que safe mode est&aacute; desactivado, y que tus permisos son los adecuados.';
$lang['error_minimumrepository'] = 'La versi&oacute;n del reposirorio no es compatible con el gestor de m&oacute;dulos';
$lang['prompt_reseturl'] = 'Poner la URL por defecto';
$lang['prompt_resetcache'] = 'Resetear la cach&eacute; local del repositorio';
$lang['prompt_dl_chunksize'] = 'Tama&ntilde;o de la Descarga (Kb)';
$lang['text_dl_chunksize'] = 'Tama&ntilde;o maximo permitido para descargar desde el servidor (al instalar un modulo)';
$lang['error_nofilesize'] = 'No se ha especificado el tama&ntilde;o del archivo';
$lang['error_nofilename'] = 'No se ha especificado el tama&ntilde;o del archivo';
$lang['error_checksum'] = 'Error Checksum.  Esto indica un archivo corrupto, bien al subirlo al repositorio, o bien un problema en la descarga a tu ordenador.';
$lang['cantdownload'] = 'No puedo Descargar';
$lang['download'] = 'Descarga';
$lang['error_moduleinstallfailed'] = 'Instalaci&oacute;n del M&oacute;dulo fallida';
$lang['error_connectnomodules'] = 'Aunque se conect&oacute; correctamente al repositorio especificado, parece que este repositorio ya no comparte ningun m&oacute;dulo';
$lang['submit'] = 'Enviar';
$lang['text_repository_url'] = 'La URL debe tener formato http://www.misitio.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL del Repositorio:';
$lang['availmodules'] = 'M&oacute;dulos Disponibles';
$lang['preferences'] = 'Preferencias';
$lang['repositorycount'] = 'M&oacute;dulos encontrados en el repositorio';
$lang['instcount'] = 'M&oacute;dulos ya instalados';
$lang['availablemodules'] = 'El estado actual de m&oacute;dulos disponibles en el repositorio actual';
$lang['helptxt'] = 'Ayuda';
$lang['abouttxt'] = 'Acerca de';
$lang['xmltext'] = 'Archivo XML';
$lang['nametext'] = 'Nombre del M&oacute;dulo';
$lang['vertext'] = 'Versi&oacute;n';
$lang['sizetext'] = 'Tama&ntilde;o (Kilobytes)';
$lang['statustext'] = 'Estado/Acci&oacute;n';
$lang['uptodate'] = 'Instalado';
$lang['install'] = 'instalar';
$lang['newerversion'] = 'Versi&oacute;n nueva instalada';
$lang['upgrade'] = 'Actualizar';
$lang['error_nosoapconnect'] = 'No puedo conectar con el servidor SOAP';
$lang['error_soaperror'] = 'Problema SOAP';
$lang['error_norepositoryurl'] = 'No se ha especificado una URL para el Repositorio';
$lang['friendlyname'] = 'Gestor de M&oacute;odulos';
$lang['postinstall'] = 'Post Install Message, (e.g., Be sure to set &quot;&quot; permissions to use this module!)';
$lang['postuninstall'] = 'Gestor de M&oacute;dulos desinstalado.  Los usuarios han perdido la opci&oacute;n de instalar m&oacute;dulos desde repositorios remotos.  De todas formas, la instalaci&oacute;n local es todavia posible.';
$lang['really_uninstall'] = 'Really? You&#039;re sure you want to uninstall this fine module?';
$lang['uninstalled'] = 'M&oacute;dulo desinstalado.';
$lang['installed'] = 'M&oacute;dulo versi&oacute;n %s instalado.';
$lang['upgraded'] = 'M&oacute;dulo actualizado a versi&oacute;n %s.';
$lang['moddescription'] = 'Cliente para el M&oacute;dulo Repositorio, este m&oacute;dulo prmite previsualizar e instalar m&oacute;dulos desde sitios remotos sin usar ftp o descomprimir archivos. Los archivos XML se descargan usando SOAP, se vrifica su integridad y luego se descomprimen automaticamente.';
$lang['error'] = '&iexcl;Error!';
$lang['admindescription'] = 'Una herramienta para instalar m&oacute;dulos desde servidores remotos.';
$lang['accessdenied'] = 'Acceso Denegado. revisa tus permisos.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.619180346.1171815579.1171815579.1172697500.2';
$lang['utmb'] = '156861353';
$lang['utmz'] = '156861353.1171815579.1.1.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/shownotes.php|utmcmd=referral';
?>
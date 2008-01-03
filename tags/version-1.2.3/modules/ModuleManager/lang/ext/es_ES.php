<?php
$lang['prompt_settings'] = 'Opciones';
$lang['prompt_otheroptions'] = 'Otras Opciones';
$lang['reset'] = 'Resetear';
$lang['error_permissions'] = '<strong><em>AVISO></strong> Permisos insuficientes para instalar m&oacute;dulos.  Puede que tambi&eacute;n tenga problemas con PHP Safe mode.  Aseg&uacute;rese de que safe mode est&aacute; desactivado, y que sus permisos son los adecuados.';
$lang['error_minimumrepository'] = 'La versi&oacute;n del repositorio no es compatible con el gestor de m&oacute;dulos';
$lang['prompt_reseturl'] = 'Poner la URL por defecto';
$lang['prompt_resetcache'] = 'Resetear la cach&eacute; local del repositorio';
$lang['prompt_dl_chunksize'] = 'Tama&ntilde;o de la Descarga (Kb)';
$lang['text_dl_chunksize'] = 'Tama&ntilde;o m&aacute;ximo permitido para descargar desde el servidor (al instalar un m&oacute;dulo)';
$lang['error_nofilesize'] = 'No se ha especificado el tama&ntilde;o del archivo';
$lang['error_nofilename'] = 'No se ha especificado el tama&ntilde;o del archivo';
$lang['error_checksum'] = 'Error de Checksum.  Esto indica un archivo corrupto, bien al subirlo al repositorio, o bien un problema en la descarga a su ordenador.';
$lang['cantdownload'] = 'No se puede Descargar';
$lang['download'] = 'Descargar &amp; Instalar';
$lang['error_moduleinstallfailed'] = 'Fall&oacute; la instalaci&oacute;n del m&oacute;dulo';
$lang['error_connectnomodules'] = 'Aunque se conect&oacute; correctamente al repositorio especificado, parece que este repositorio ya no comparte ning&uacute;n m&oacute;dulo';
$lang['submit'] = 'Enviar';
$lang['text_repository_url'] = 'La URL debe tener formato http://www.misitio.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL del Repositorio:';
$lang['availmodules'] = 'M&oacute;dulos Disponibles';
$lang['preferences'] = 'Preferencias';
$lang['preferencessaved'] = 'Preferencias guardadas';
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
$lang['onlynewesttext'] = 'Mostrar s&oacute;lo la versi&oacute;n m&aacute;s nueva';
$lang['upgrade'] = 'Actualizar';
$lang['error_nosoapconnect'] = 'No se puede conectar con el servidor SOAP';
$lang['error_soaperror'] = 'Problema SOAP';
$lang['error_norepositoryurl'] = 'No se ha especificado la URL del Repositorio del M&oacute;dulo';
$lang['friendlyname'] = 'Gestor de M&oacute;dulos';
$lang['postinstall'] = 'El m&oacute;dulo Gestor de M&oacute;dulos se instal&oacute; con &eacute;xito.';
$lang['postuninstall'] = 'El m&oacute;dulo Gestor de M&oacute;dulos fue desinstalado.  Los usuarios han perdido la opci&oacute;n de instalar m&oacute;dulos desde repositorios remotos.  De todas formas, la instalaci&oacute;n local todav&iacute;a es posible.';
$lang['really_uninstall'] = '&iquest;Est&aacute; seguro que quiere desinstalar el m&oacute;dulo? Usted est&aacute; perdiendo una gran cantidad de buena funcionalidad.';
$lang['uninstalled'] = 'M&oacute;dulo Desinstalado.';
$lang['installed'] = 'M&oacute;dulo versi&oacute;n %s instalado.';
$lang['upgraded'] = 'M&oacute;dulo actualizado a versi&oacute;n %s.';
$lang['moddescription'] = 'Un cliente para el M&oacute;dulo Repositorio, este m&oacute;dulo permite pre-visualizar e instalar m&oacute;dulos desde sitios remotos sin usar ftp o descomprimir archivos. Los archivos XML de los M&oacute;dulos se descargan usando SOAP, se verifica su integridad y luego se descomprimen autom&aacute;ticamente.';
$lang['error'] = '&iexcl;Error!';
$lang['admindescription'] = 'Una herramienta para instalar m&oacute;dulos desde servidores remotos.';
$lang['accessdenied'] = 'Acceso Denegado. revisa tus permisos.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>&iquest;Que Hace Esto?</h3>
<p>Es un cliente para el Repositorio de M&oacute;dulos, este m&oacute;dulo permite efectuar una vista previa y la instalaci&oacute;n desde sitios remotos sin la necesidad de hacer ftp, o descomprimir archivos.  Los archivos XML de los m&oacute;dulos son descargados usando SOAP, se verifica su integridad, y luego se expanden autom&aacute;ticamente.</p>
<h3>Como lo Puedo Usar</h3>
<p>Con la finalidad de usar este m&oacute;dulo, usted necesitar&aacute; poseer el permiso &#039;Modificar M&oacute;dulos&#039;, y adem&aacute;s va a necesitar el URL completo y preciso de un &#039;Repositorio de M&oacute;dulos&#039; y de esa forma efectuar las instalaciones.  Usted puede especificar este url en la p&aacute;gina &#039;Admin del Sitio&#039; --> &#039;Configuraci&oacute;n Global&#039;.</p><br/>
<p>Usted puede encontrar la interfase de este m&oacute;dulo bajo el men&uacute; &#039;Extensiones&#039;.  Cuando usted selecciona este m&oacute;dulo, la instalaci&oacute;n del &#039;M&oacute;dulo Repositorio&#039; ser&aacute; requerida autom&aacute;ticamente desde una lista de m&oacute;dulos xml disponibles.  Esta lista ser&aacute; cruzada con referencia a la lista de m&oacute;dulos que actualmente est&aacute;n instalados, y se mostrar&aacute; una p&aacute;gina resumiendo la situaci&oacute;n.  Desde aqu&iacute;, usted podr&aacute; ver la informaci&oacute;n descriptiva, la ayuda, y la informaci&oacute;n con respecto al m&oacute;dulo sin instalarlo f&iacute;sicamente.  Usted va a poder incluso decidir si actualiza o instala al m&oacute;dulo.</p>
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
<p>Copyright &copy; 2006, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Todos los Derechos Reservados.</p>
<p>Este m&oacute;dulo se ha realizado bajo la <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>Licencia P&uacute;blica GNU</a>. Usted debe estar de acuerdo con la licencia antes de usar el m&oacute;dulo.</p>';
$lang['utmz'] = '156861353.1196364957.32.12.utmccn=(organic)|utmcsr=google|utmctr=templates for cms made simple|utmcmd=organic';
$lang['utma'] = '156861353.696884433.1192631014.1196364957.1196368567.33';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
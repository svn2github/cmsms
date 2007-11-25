<?php
$lang['friendlyname'] = 'P&aacute;ginas para Imprimir';
$lang['description'] = 'Este m&oacute;dulo sirve como una forma muy sencilla de proveer p&aacute;ginas listas para imprimir en el entorno de CMSms. Alternativamente archivos-PDF que incluyan el contenido principal, se pueden crear al toque.';
$lang['postinstall'] = 'El m&oacute;dulo se instal&oacute; con &eacute;xito';
$lang['confirmuninstall'] = '&iquest;Est&aacute; seguro que el m&oacute;dulo debe desinstalarse?';
$lang['postuninstall'] = 'El m&oacute;dulo se desinstal&oacute; con &eacute;xito';
$lang['linktemplate'] = 'Enlazar plantilla';
$lang['printtemplate'] = 'Plantilla de Imprimir';
$lang['pdftemplate'] = 'Plantilla PDF';
$lang['templatesaved'] = 'La plantilla se ha guardado';
$lang['templatereset'] = 'La plantilla se ha vuelto a su valor por defecto';
$lang['confirmresettemplate'] = '&iquest;Est&aacute; seguro que desea retornar la plantilla a su valor por defecto?';
$lang['reset'] = 'Resetear a por defecto';
$lang['save'] = 'Guardar';
$lang['savetemplate'] = 'Guardar plantilla';
$lang['savesettings'] = 'Guardar configuraciones';
$lang['settings'] = 'Configuraciones';
$lang['settingssaved'] = 'Las configuraciones se guardaron';
$lang['pdfheader'] = 'Encabezado PDF';
$lang['headerfontsize'] = 'Tama&ntilde;o de fuente de encabezado';
$lang['contentfontsize'] = 'Tama&ntilde;o de fuente de contenido';
$lang['orientation'] = 'Orientaci&oacute;n';
$lang['landscape'] = 'Apaisado';
$lang['portrait'] = 'Retrato';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Plantilla';
$lang['notemplatecontent'] = 'No hay nuevo contenido de plantilla...';
$lang['defaultlinktext'] = 'Imprima esta p&aacute;gina';
$lang['defaultpdflinktext'] = 'Generar PDF';
$lang['backbuttontext'] = 'Volver';
$lang['overridestylereset'] = 'La hoja de estilo de reemplazo se ha reseteado';
$lang['overridestylesaved'] = 'La hoja de estilo de reemplazo se ha guardado';
$lang['overridestyle'] = 'Reemplazar hoja de estilo de impresi&oacute;n';
$lang['confirmresetstyle'] = '&iquest;Est&aacute; seguro que la hoja de estilo se debe resetear?';
$lang['stylesheet'] = 'Hoja de Estilo';
$lang['help_text'] = 'Reemplazar el texto por defecto para el enlace imprimir/PDF';
$lang['help_pdf'] = 'Poner esto a &#039;true&#039; para mostrar un enlace de generaci&oacute;n de archivo-PDF de la p&aacute;g. principal en vez de imprimir';
$lang['help_popup'] = 'Poner a &#039;true&#039; y la p&aacute;gina a imprimir se habrir&aacute; en nueva ventana.';
$lang['help_script'] = 'Poner a &#039;true&#039; y al imprimir una p&aacute;gina se usar&aacute; javascript para mostrar autom&aacute;ticamente el di&aacute;logo de imprimir';
$lang['help_showbutton'] = 'Poner a &#039;true&#039; para mostrar una gr&aacute;fico como bot&oacute;n';
$lang['help_class'] = 'La clase para el enlace, se pone por defecto a &#039;noprint&#039;';
$lang['help_src_img'] = 'Mostrar &eacute;ste archivo de imagen en vez del por defecto';
$lang['help_class_img'] = 'Clase de tag <img> si se establece mostrar bot&oacute;n';
$lang['help_more'] = 'Ubicar opciones adicionales dentro del enlace <a>';
$lang['help_onlyurl'] = 'Indicar s&oacute;lo la url, no un enlace completo';
$lang['changelog'] = '<ul>
<li>
<p>versi&oacute;n 0.2.0</p>
<p>Se agreg&oacute; soporte para generar archivos PDF</p>
</li>
<li>
<p>versi&oacute;n 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
';
$lang['help'] = '<b>&iquest;Qu&eacute; hace este m&oacute;dulo?</b>
<br/>
Este m&oacute;dulo permite insertar un enlace en las p&aacute;ginas/plantillas que dirige a las visitas a una versi&oacute;n de la p&aacute;gina m&aacute;s amigable para ser impresa. Hay varios par&aacute;metros que se pueden establecer de forma de hacer el enlace y la p&aacute;gina amigable para imprimir, se ajusten a sus necesidades. A partir de la versi&oacute;n 0.2.0, se puede poner un par&aacute;metro para generar al toque un archivo PDF.
<br/>
Por el momento el m&oacute;dulo solo soporta p&aacute;ginas con contenido &quot;plano&quot;, no hay re-direcci&oacute;n de m&oacute;dulos, etc. Claro que tampoco lo hace la funcionalidad de impresi&oacute;n incluida en CMSms.
<br/>
Por favor observe que por el momento el m&oacute;dulo solo entrega como resultado el contenido principal, no se incluye contenidos alternativos que puedan estar definidos en la plantilla.

<br/><br/>
<b>&iquest;C&oacute;mo puedo usar este m&oacute;dulo?</b>
<br/>
B&aacute;sicamente debe instalar el m&oacute;dulo, acceder a la interfase de administraci&oacute;n y revisar/cambiar la plantilla para el enlace y la p&aacute;gina amigable de impresi&oacute;n.
<br/>
En su p&aacute;gina de contenido o bien en la plantilla del sitio usted deber&aacute; insertar algo as&iacute; como lo siguiente:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
y un enlace va a aparecer en sus p&aacute;ginas. 
<br/><br/>
<b>Notas:</b>
<br/>
<ul>
<li>La generaci&oacute;n de PDF por el momento es experimental.</li>
<li>La Generaci&oacute;n de PDF puede que no funcione en servidores con php 4.x, se recomienda que induzca a su administrador de alojamiento a actualizar al php5 si desea tener soporte de PDF.</li>
</ul>
';
$lang['utma'] = '156861353.805641954.1192475049.1194804818.1194812528.48';
$lang['utmz'] = '156861353.1194455435.42.12.utmccn=(organic)|utmcsr=google|utmctr=cms made simple nightly snapshot|utmcmd=organic';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
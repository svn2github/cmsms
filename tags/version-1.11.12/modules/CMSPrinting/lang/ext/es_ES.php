<?php
$lang['friendlyname'] = 'CMSPrinting';
$lang['description'] = 'Este módulo sirve como una forma muy sencilla de proveer páginas listas para imprimir en el entorno de CMSms. Alternativamente archivos-PDF que incluyan el contenido principal, se pueden crear al toque.';
$lang['postinstall'] = 'El módulo se instaló correctamente';
$lang['confirmuninstall'] = '¿Está seguro de que el módulo debe desinstalarse?';
$lang['postuninstall'] = 'El módulo se desinstaló con éxito';
$lang['linktemplate'] = 'Enlazar plantilla';
$lang['printtemplate'] = 'Plantilla de Imprimir';
$lang['templatesaved'] = 'La plantilla se ha guardado';
$lang['templatereset'] = 'La plantilla se ha vuelto a su valor por defecto';
$lang['confirmresettemplate'] = '¿Está seguro que desea retornar la plantilla a su valor por defecto?';
$lang['reset'] = 'Resetear a por defecto';
$lang['save'] = 'Guardar';
$lang['upgraded'] = 'se ha actualizado a versión';
$lang['savetemplate'] = 'Guardar plantilla';
$lang['savesettings'] = 'Guardar configuraciones';
$lang['template'] = 'Plantilla';
$lang['notemplatecontent'] = 'No hay nuevo contenido de plantilla...';
$lang['defaultlinktext'] = 'Imprima esta página';
$lang['backbuttontext'] = 'Volver';
$lang['overridestylereset'] = 'La hoja de estilo de reemplazo se ha reseteado';
$lang['overridestylesaved'] = 'La hoja de estilo de reemplazo se ha guardado';
$lang['overridestyle'] = 'Reemplazar hoja de estilo de impresión';
$lang['confirmresetstyle'] = '¿Está seguro de que la hoja de estilo se debe resetear?';
$lang['stylesheet'] = 'Hoja de Estilo';
$lang['help_text'] = 'Reemplazar el texto por defecto para el enlace imprimir/PDF';
$lang['help_popup'] = 'Poner a \'true\' y la página a imprimir se habrirá en nueva ventana.';
$lang['help_script'] = 'Poner a \'true\' y al imprimir una página se usará javascript para mostrar automáticamente el diálogo de imprimir';
$lang['help_showbutton'] = 'Poner a \'true\' para mostrar una gráfico como botón';
$lang['help_class'] = 'La clase para el enlace, se pone por defecto a \'noprint\'';
$lang['help_src_img'] = 'Mostrar éste archivo de imagen en vez del por defecto';
$lang['help_class_img'] = 'Clase de tag <img> si se establece mostrar botón';
$lang['help_more'] = 'Ubicar opciones adicionales dentro del enlace <a>';
$lang['help_onlyurl'] = 'Indicar sólo la url, no un enlace completo';
$lang['help_includetemplate'] = 'Si se activa esta opción, hace que se procese toda la plantilla para la impresion y PDF, no solamente el contenido principal. Probablemente requiera un poco de trabajo en estilos especificos para impresora cuando se habilita el tipo de medio \'print\'.';
$lang['help'] = '<b>¿Qué hace este módulo?</b>
<br/>
Este módulo permite insertar un enlace en las páginas/plantillas que dirige a las visitas a una versión de la página más amigable para ser impresa. Hay varios parámetros que se pueden establecer de forma de hacer el enlace y la página amigable para imprimir, se ajusten a sus necesidades. A partir de la versión 0.2.0, se puede poner un parámetro para generar al toque un archivo PDF.
<br/>
Por el momento el módulo solo soporta páginas con contenido "plano", no hay re-dirección de módulos, etc. Claro que tampoco lo hace la funcionalidad de impresión incluida en CMSms.
<br/>
Por favor observe que por el momento el módulo solo entrega como resultado el contenido principal, no se incluye contenidos alternativos que puedan estar definidos en la plantilla.

<br/><br/>
<b>¿Cómo puedo usar este módulo?</b>
<br/>
Básicamente debe instalar el módulo, acceder a la interfase de administración y revisar/cambiar la plantilla para el enlace y la página amigable de impresión.
<br/>
En su página de contenido o bien en la plantilla del sitio usted deberá insertar algo así como lo siguiente:
<pre>
{cms_module module=\'printing\' <i>params</i>}
</pre>
y un enlace va a aparecer en sus páginas. 
<br/><br/>
<b>Notas:</b>
<br/>
<ul>
<li>La generación de PDF por el momento es experimental.</li>
<li>La Generación de PDF puede que no funcione en servidores con php 4.x, se recomienda que induzca a su administrador de alojamiento a actualizar al php5 si desea tener soporte de PDF.</li>
</ul>';
?>
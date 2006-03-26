<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Restaurar por defecto';
$lang['restoretodefaultsmsg'] = 'Esta operación restaurará el contenido de la plantilla al original por defecto. ¿Estas seguro de continuar?';
$lang['addarticle'] = 'Añadir Artículo';
$lang['addcategory'] = 'Añadir Categoría';
$lang['addnewsitem'] = 'Añadir Noticia';
$lang['allcategories'] = 'Todas las Categories';
$lang['allentries'] = 'Todas las Entradas';
$lang['areyousure'] = '¿Seguro que quieres borrar?';
$lang['articles'] = 'Artículos';
$lang['cancel'] = 'Cancelar';
$lang['category'] = 'Categoría';
$lang['categories'] = 'Categorías';
$lang['changelog'] = '<ul>
<li>
<p>Versión: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Contenido';
$lang['dateformat'] = '%s no esta en formata yyyy-mm-dd hh:mm:ss válido';
$lang['delete'] = 'Borrar';
$lang['description'] = 'Añadir, editar y borrar Noticias';
$lang['detailtemplate'] = 'Detalles de Plantilla';
$lang['displaytemplate'] = 'Mostrar plantilla';
$lang['edit'] = 'Editar';
$lang['enddate'] = 'Fecha de Fin';
$lang['endrequiresstart'] = 'Una fecha de fin requiere también una fecha de inicio';
$lang['entries'] = '%s Entradas';
$lang['status'] = 'Estado';
$lang['expiry'] = 'Caducidad';
$lang['filter'] = 'Filtro';
$lang['more'] = 'Más';
$lang['moretext'] = 'Texto Más';
$lang['name'] = 'Nombre';
$lang['news'] = 'Noticia';
$lang['news_return'] = 'Volver';
$lang['newcategory'] = 'Nueva Categoría';
$lang['needpermission'] = 'Necesitas permisos de \'%s\' para realizar esta función.';
$lang['nocategorygiven'] = 'No hay Categoría';
$lang['nocontentgiven'] = 'No hay Contenido';
$lang['noitemsfound'] = '<strong>Ningún</strong> elemento encontrado en categoría: %s';
$lang['nopostdategiven'] = 'No hay Fecha de Envio';
$lang['note'] = '<em>Nota:</em> Las Fechas deben estar en formato \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'No hay Título';
$lang['numbertodisplay'] = 'Número a Mostrar (en blanco, muestra todos)';
$lang['print'] = 'Imprimir';
$lang['postdate'] = 'Fecha de Envio';
$lang['postinstall'] = 'Asegúrate de activar permisos para "Modicar Noticia" en los usuarios que administren noticias.';
$lang['rssfeedtitle'] = 'RSS de CMS Made Simple';
$lang['rsstemplate'] = 'Plantilla RSS';
$lang['selectcategory'] = 'Seleccionar Categoría';
$lang['showchildcategories'] = 'Mostrar Subcategorías';
$lang['sortascending'] = 'Orden Ascendente';
$lang['startdate'] = 'Fecha de Inicio';
$lang['startoffset'] = 'Comit displaying at the nth item';
$lang['startrequiresend'] = 'Una fecha de inicio requiere también una de fin';
$lang['submit'] = 'Ok';
$lang['summary'] = 'Sumario';
$lang['summarytemplate'] = 'Plantilla de Sumario';
$lang['title'] = 'Título';
$lang['options'] = 'Opciones';
$lang['useexpiration'] = 'Usar Fecha de Caducidad';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['helpnumber'] = 'Maximum number of items to display =- leaving empty will show all items.';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. Use * after the name to show children.  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to "more..."';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'Campo por el que ordenar.  Opciones: "news_date", "summary", "news_data", "news_category", "news_title".  Por  defecto: "news_date".';
$lang['helpsortasc'] = 'Ordenar noticias por fechas en orden ascendente en lugar de descendente.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article\'s post date with.  This is based on the <a href="http://php.net/strftime" target="_blank">strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the sever\'s locale.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>
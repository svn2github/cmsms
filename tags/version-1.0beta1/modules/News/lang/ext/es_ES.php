<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Restaurar por defecto';
$lang['restoretodefaultsmsg'] = 'Esta operaci&oacute;n restaurar&aacute; el contenido de la plantilla al original por defecto. &iquest;Estas seguro de continuar?';
$lang['addarticle'] = 'A&ntilde;adir Art&iacute;culo';
$lang['addcategory'] = 'A&ntilde;adir Categor&iacute;a';
$lang['addnewsitem'] = 'A&ntilde;adir Noticia';
$lang['allcategories'] = 'Todas las Categories';
$lang['allentries'] = 'Todas las Entradas';
$lang['areyousure'] = '&iquest;Seguro que quieres borrar?';
$lang['articles'] = 'Art&iacute;culos';
$lang['cancel'] = 'Cancelar';
$lang['category'] = 'Categor&iacute;a';
$lang['categories'] = 'Categor&iacute;as';
$lang['changelog'] = '<ul>
<li>
<p>Versi&oacute;n: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
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
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Contenido';
$lang['dateformat'] = '%s no esta en formata yyyy-mm-dd hh:mm:ss v&aacute;lido';
$lang['delete'] = 'Borrar';
$lang['description'] = 'A&ntilde;adir, editar y borrar Noticias';
$lang['detailtemplate'] = 'Detalles de Plantilla';
$lang['displaytemplate'] = 'Mostrar plantilla';
$lang['edit'] = 'Editar';
$lang['enddate'] = 'Fecha de Fin';
$lang['endrequiresstart'] = 'Una fecha de fin requiere tambi&eacute;n una fecha de inicio';
$lang['entries'] = '%s Entradas';
$lang['status'] = 'Estado';
$lang['expiry'] = 'Caducidad';
$lang['filter'] = 'Filtro';
$lang['more'] = 'M&aacute;s';
$lang['moretext'] = 'Texto M&aacute;s';
$lang['name'] = 'Nombre';
$lang['news'] = 'Noticia';
$lang['news_return'] = 'Volver';
$lang['newcategory'] = 'Nueva Categor&iacute;a';
$lang['needpermission'] = 'Necesitas permisos de &#039;%s&#039; para realizar esta funci&oacute;n.';
$lang['nocategorygiven'] = 'No hay Categor&iacute;a';
$lang['nocontentgiven'] = 'No hay Contenido';
$lang['noitemsfound'] = '<strong>Ning&uacute;n</strong> elemento encontrado en categor&iacute;a: %s';
$lang['nopostdategiven'] = 'No hay Fecha de Envio';
$lang['note'] = '<em>Nota:</em> Las Fechas deben estar en formato &#039;yyyy-mm-dd hh:mm:ss&#039;.';
$lang['notitlegiven'] = 'No hay T&iacute;tulo';
$lang['numbertodisplay'] = 'N&uacute;mero a Mostrar (en blanco, muestra todos)';
$lang['print'] = 'Imprimir';
$lang['postdate'] = 'Fecha de Envio';
$lang['postinstall'] = 'Aseg&uacute;rate de activar permisos para &quot;Modicar Noticia&quot; en los usuarios que administren noticias.';
$lang['rssfeedtitle'] = 'RSS de CMS Made Simple';
$lang['rsstemplate'] = 'Plantilla RSS';
$lang['selectcategory'] = 'Seleccionar Categor&iacute;a';
$lang['showchildcategories'] = 'Mostrar Subcategor&iacute;as';
$lang['sortascending'] = 'Orden Ascendente';
$lang['startdate'] = 'Fecha de Inicio';
$lang['startoffset'] = 'Comit displaying at the nth item';
$lang['startrequiresend'] = 'Una fecha de inicio requiere tambi&eacute;n una de fin';
$lang['submit'] = 'Ok';
$lang['summary'] = 'Sumario';
$lang['summarytemplate'] = 'Plantilla de Sumario';
$lang['title'] = 'T&iacute;tulo';
$lang['options'] = 'Opciones';
$lang['useexpiration'] = 'Usar Fecha de Caducidad';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['helpnumber'] = 'N&uacute;mero m&aacute;ximo de elementos a mostrar =- en blanco muestra todos.';
$lang['helpstart'] = 'Comenzar por elemento -- en blanco comenzar&aacute; por el primero.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'S&oacute;lo mostrar elementos de esa categor&iacute;a. Usar * despu&eacute;s del nombre para mostrar subcategor&iacute;as.  Se puede usar m&uacute;ltiples categor&iacute;as, separadas por una coma. En blanco muestra todas las categor&iacute;as.';
$lang['helpmoretext'] = 'Texto a mostrar al final de una noticia si esta supera la logitud del sumario.  Por defecto es &quot;m&aacute;s...&quot;';
$lang['helpsummarytemplate'] = 'Usar una plantilla distinta para mostrar el sumario.  Debe residir en modules/News/templates.';
$lang['helpdetailtemplate'] = 'Usar una plantilla distinta para mostrar el art&iacute;culo.  Debe residir en modules/News/templates.';
$lang['helpsortby'] = 'Campo por el que ordenar.  Opciones: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Por  defecto: &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Ordenar noticias por fechas en orden ascendente en lugar de descendente.';
$lang['helpdetailpage'] = 'P&aacute;gina para las Noticias.  Puede ser un alias o un id de p&aacute;gina. Se usa para mostrar las noticias con una plantilla distinta a la del sumario.';
$lang['helpdateformat'] = 'Format to display the article&#039;s post date with.  This is based on the <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the sever&#039;s locale.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>';
?>
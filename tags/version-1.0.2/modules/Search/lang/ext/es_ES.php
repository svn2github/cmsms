<?php
$lang['searchsubmit'] = 'Enviar';
$lang['search'] = 'Buscar';
$lang['param_submit'] = 'Texto a poner en el bot&oacute;n enviar';
$lang['param_searchtext'] = 'Texto a poner en la b&uacute;squeda';
$lang['prompt_searchtext'] = 'Texto a Buscar por Defecto';
$lang['param_resultpage'] = 'P&aacute;gina para mostrar resultados.  Puede ser un alias de p&aacute;gina o un id.  Se usa para poder visualizar resultados con una plantilla diferente de la de b&uacute;squeda';
$lang['description'] = 'M&oacute;dulo para buscar en el sitio y contenidos.';
$lang['reindexallcontent'] = 'Reindexar Todo el Contenido';
$lang['reindexcomplete'] = '&iexcl;Reindexado Completo!';
$lang['stopwords'] = 'Palabras Stop';
$lang['searchresultsfor'] = 'Resultados para ';
$lang['noresultsfound'] = '&iexcl;No se encuantran Resultados!';
$lang['timetaken'] = 'Tiempo';
$lang['usestemming'] = 'Word Stemming (Solo Ingles)';
$lang['searchtemplate'] = 'Plantilla de B&uacute;squeda';
$lang['resulttemplate'] = 'Plantilla de Resultado';
$lang['submit'] = 'Enviar';
$lang['sysdefaults'] = 'Restaurar Defecto';
$lang['searchtemplateupdated'] = 'Plantilla de B&uacute;squeda Actualizada';
$lang['resulttemplateupdated'] = 'Plantilla de Resultados Actualizada';
$lang['restoretodefaultsmsg'] = 'Esta opci&oacute;n restaura la plantilla a la original del sistema. &iquest;Seguro que quieres continuar?';
$lang['options'] = 'Opciones';
$lang['eventdesc-SearchInitiated'] = 'Se envia al iniciar una b&uacute;squeda.';
$lang['eventdesc-SearchCompleted'] = 'Se envia al finalizar una b&uacute;squeda.';
$lang['eventdesc-SearchItemAdded'] = 'Se envia al indexar un nuevo elemento.';
$lang['eventdesc-SearchItemDeleted'] = 'Se envia al eleiminar un elemento del indice.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Se envia al eliminar todos los elementos del indice.';
$lang['eventhelp-SearchInitiated'] = '<p>Se envia al iniciar una b&uacute;squeda.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Texto que se busc&oacute;.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Se envia al finalizar una b&uacute;squeda.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Texto que se busc&oacute;.</li>
<li>Array del resultado completo.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Se envia al indexar un nuevo elemento.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Nombre del M&oacute;dulo</li>
<li>Id del elemento.</li>
<li>Atributo Adicional.</li>
<li>Contenido a a&ntilde;adir e indexar.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Se envia al eleiminar un elemento del indice.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Nombre del M&oacute;dulo</li>
<li>Id del elemento.</li>
<li>Atributo Adicional.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Se envia al eliminar todos los elementos del indice.</p>
<h4>Par&aacute;metros</h4>
<ul>
<li>Ninguno</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utmc'] = '156861353';
$lang['utma'] = '156861353.1948897461.1149099150.1154967493.1154971235.28';
$lang['utmz'] = '156861353.1154971235.28.3.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/|utmcmd=referral';
?>
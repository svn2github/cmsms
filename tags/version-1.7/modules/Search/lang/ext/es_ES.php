<?php
$lang['search_method'] = 'Pretty URLs son compatibles mediante metodo POST, el valor por defecto es GET, para hacer funcionar esto simplemente poner: {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Exportar a formato CSV';
$lang['prompt_savephrases'] = ' Buscar frases, no palabras individuales';
$lang['word'] = 'Palabra';
$lang['count'] = 'Conteo';
$lang['confirm_clearstats'] = '&iquest;Esta seguro de querer eliminar todas las estad&iacute;sticas?';
$lang['clear'] = 'Eliminar';
$lang['statistics'] = 'Estad&iacute;sticas';
$lang['param_action'] = 'Especificar el modo de operaci&oacute;n del m&oacute;dulo.  Los valores aceptables son &#039;default&#039;, y &#039;keywords&#039;.  La acci&oacute;n keywords(palabras clave) se puede utilizar para generar un listado de palabras separadas por comas apta para ser usada en una meta tag de keywords(palabras clave).';
$lang['param_count'] = 'Usado con la acci&oacute;n keywords (palabras clave), este par&aacute;metro limitar&aacute; el resultado de la b&uacute;squeda al n&uacute;mero especificado de palabras';
$lang['param_pageid'] = 'Aplicable solo con la acci&oacute;n keywords (palabras clave), este par&aacute;metro se puede especificar para que los resultados sean de una p&aacute;gina con diferente id';
$lang['param_inline'] = 'Si verdadero, el formulario de b&uacute;squeda remplazar&aacute; el contenido original de l tag &#039;search&#039; en el bloque originario. Use este par&aacute;metro si su plantilla tiene m&uacute;ltiples bloques, y no quiere que el resultado de la b&uacute;squeda remplace el contenido que el bloque tiene por defecto';
$lang['param_passthru'] = 'Pasar los par&aacute;metros nombrados al m&oacute;dulo especificado. El formato de cada uno de esos par&aacute;metros es: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limitar resultados de b&uacute;squeda a los valores indexados del listado de m&oacute;dulos (separados por coma) especificado';
$lang['searchsubmit'] = 'Enviar';
$lang['search'] = 'B&uacute;squeda';
$lang['param_submit'] = 'Texto a poner en el bot&oacute;n enviar';
$lang['param_searchtext'] = 'Texto a poner en la b&uacute;squeda';
$lang['prompt_searchtext'] = 'Texto Buscar por Defecto';
$lang['param_resultpage'] = 'P&aacute;gina para mostrar resultados.  Puede ser un alias de p&aacute;gina o un id.  Se usa para poder visualizar resultados con una plantilla diferente de la de b&uacute;squeda';
$lang['prompt_alpharesults'] = 'Ordenar resultados alfabeticamente, no por peso';
$lang['description'] = 'M&oacute;dulo para buscar en el sitio y contenido de otros m&oacute;dulos.';
$lang['reindexallcontent'] = 'Reindexar Todo el Contenido';
$lang['reindexcomplete'] = '&iexcl;Reindexado Completo!';
$lang['stopwords'] = 'Parar Palabras';
$lang['searchresultsfor'] = 'Resultados obtenidos para: ';
$lang['noresultsfound'] = '&iexcl;No se ha encontrado resultados!';
$lang['timetaken'] = 'Tiempo de la b&uacute;squeda';
$lang['usestemming'] = 'Usar Word Stemming (S&oacute;lo Ingl&eacute;s)';
$lang['searchtemplate'] = 'Plantilla de B&uacute;squeda';
$lang['resulttemplate'] = 'Plantilla de Resultado';
$lang['submit'] = 'Enviar';
$lang['sysdefaults'] = 'Restaurar a por Defecto';
$lang['searchtemplateupdated'] = 'Plantilla de B&uacute;squeda Actualizada';
$lang['resulttemplateupdated'] = 'Plantilla de Resultados Actualizada';
$lang['restoretodefaultsmsg'] = 'Esta operaci&oacute;n restaura el contenido de la plantilla al por defecto del sistema. &iquest;Seguro que quiere continuar?';
$lang['options'] = 'Opciones';
$lang['eventdesc-SearchInitiated'] = 'Se env&iacute;a al iniciar una b&uacute;squeda.';
$lang['eventdesc-SearchCompleted'] = 'Se env&iacute;a al finalizar una b&uacute;squeda.';
$lang['eventdesc-SearchItemAdded'] = 'Se env&iacute;a al indexar un nuevo elemento.';
$lang['eventdesc-SearchItemDeleted'] = 'Se env&iacute;a al eliminar un elemento del &iacute;ndice.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Se env&iacute;a al eliminar todos los elementos del &iacute;ndice.';
$lang['eventhelp-SearchInitiated'] = '<p>Se env&iacute;a al iniciar una b&uacute;squeda.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Texto que se busc&oacute;.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Se env&iacute;a al finalizar una b&uacute;squeda.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Texto que se busc&oacute;.</li>
<li>Array del resultado completo.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Se env&iacute;a al indexar un nuevo elemento.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Nombre del M&oacute;dulo</li>
<li>Id del elemento.</li>
<li>Atributo Adicional.</li>
<li>Contenido a a&ntilde;adir e indexar.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Se env&iacute;a al eliminar un elemento del &iacute;ndice.</p>
<h4>Par&aacute;metros</h4>
<ol>
<li>Nombre del M&oacute;dulo</li>
<li>Id del elemento.</li>
<li>Atributo Adicional.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Se env&iacute;a al eliminar todos los elementos del &iacute;ndice.</p>
<h4>Par&aacute;metros</h4>
<ul>
<li>Ninguno</li>
</ul>
';
$lang['help'] = '<h3>&iquest;Qu&eacute; hace esto?</h3>
<p>El m&oacute;dulo de b&uacute;squeda es para realizar b&uacute;squedas en el &quot;core&quot; del contenido al mismo tiempo que en ciertos m&oacute;dulos registrados.  Usted pone una o dos palabras y &eacute;l le dar&aacute; como resultado coincidencias del contenido con las palabras dadas.</p>
<h3>&iquest;C&oacute;mo lo puedo usar?</h3>
<p>La forma m&aacute;s sencilla de utilizarlo es con el contenedor de tag {search} (envuelve al m&oacute;dulo en un tag, con el fin de simplificar la sintaxis). Esto permitir&aacute; incluir al m&oacute;dulo en sus plantillas o p&aacute;ginas, cualquiera sea el lugar que quiera, y as&iacute; mostrar el formulario de b&uacute;squedas.  El c&oacute;digo se ver&aacute; algo as&iacute; como esto: <code>{search}</code></p>
<h4>&iquest;C&oacute;mo puedo hacer para evitar que alg&uacute;n contenido sea indexado?</h4>
<p>El m&oacute;dulo de b&uacute;squeda no indexar&aacute; aquellas p&aacute;ginas que est&eacute;n &quot;inactivas&quot;. Sin embargo hay ocasiones, cuando usted utiliza el m&oacute;dulo CustomContent, o alg&uacute;n otro con l&oacute;gica smarty para mostrar diferentes contenidos a diferentes grupos de usuarios, puede ser aconsejable prevenir que la p&aacute;gina completa sea indexada a&uacute;n cuando se haya publicado.  Para lograr &eacute;ste objetivo incluya la siguiente tag en cualquier lugar de la p&aacute;gina <em><!-- pageAttribute: NotSearchable --></em> Cuando el m&oacute;dulo de b&uacute;squeda vea &eacute;sta tag en la p&aacute;gina no la indexar&aacute; de ninguna forma.</p>
<p>La tag <em><!-- pageAttribute: NotSearchable --></em> puede ubicarse tambi&eacute;n en la plantilla.  Si este fuera el caso, ninguna de las p&aacute;ginas unidas a esta plantilla ser&aacute; indexada.  Estas p&aacute;ginas ser&aacute;n re-indexadas si quitamos el tag</p>
';
$lang['qca'] = 'P0-2096054370-1259803615939';
$lang['utma'] = '156861353.238606854.1259804368.1267940197.1267946953.72';
$lang['utmz'] = '156861353.1267925726.70.33.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
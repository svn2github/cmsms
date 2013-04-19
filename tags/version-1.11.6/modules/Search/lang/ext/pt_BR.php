<?php
$lang['word'] = 'Palavra';
$lang['count'] = 'Contador';
$lang['confirm_clearstats'] = 'Are you sure you want to permanently clear all statistics?';
$lang['clear'] = 'Limpar';
$lang['statistics'] = 'Estat&iacute;sticas';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Used with the keywords action, this parameter will limit the output to the specified number of words';
$lang['param_pageid'] = 'Applicable only with the keywords action, this parameter can be used to specify a different pageid to return results for';
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limit search results to values indexed from the specified (comma separated) list of modules';
$lang['searchsubmit'] = 'Enviar';
$lang['search'] = 'Pesquisa';
$lang['param_submit'] = 'Texto para exibir no bot&atilde;o enviar';
$lang['param_searchtext'] = 'Texto para exibir na caixa de pesquisa';
$lang['prompt_searchtext'] = 'Texto padr&atilde;o para a busca';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'M&oacute;dulo para pesquisar no site e no conte&uacute;do dos outros m&oacute;dulos.';
$lang['reindexallcontent'] = 'Reindexar todo o conte&uacute;do';
$lang['reindexcomplete'] = 'Reindexa&ccedil;&atilde;o conclu&iacute;da!';
$lang['stopwords'] = 'Palavras Chave';
$lang['searchresultsfor'] = 'Buscar resultados para';
$lang['noresultsfound'] = 'Nenhum resultado encontrado!';
$lang['timetaken'] = 'Tempo gasto';
$lang['usestemming'] = 'Fazer busca por radical (Somente Ingl&ecirc;s)';
$lang['searchtemplate'] = 'Modelo Visual de Pesquisa';
$lang['resulttemplate'] = 'Modelo Visual dos Resultados';
$lang['submit'] = 'Enviar';
$lang['sysdefaults'] = 'Restaurar para os padr&otilde;es';
$lang['searchtemplateupdated'] = 'Modelo Visual de pesquisa atualiazado';
$lang['resulttemplateupdated'] = 'Modelo Visual de Resultados Atualizados';
$lang['restoretodefaultsmsg'] = 'Esta opera&ccedil;&atilde;o ir&aacute; restaurar o modelo visual para o padr&atilde;o do sistema. Voc&ecirc; tem certeza que quer continuar?';
$lang['options'] = 'Op&ccedil;&otilde;es';
$lang['eventdesc-SearchInitiated'] = 'Enviado quando uma busca se inicia.';
$lang['eventdesc-SearchCompleted'] = 'Enviado quando uma busca termina.';
$lang['eventdesc-SearchItemAdded'] = 'Enviado quando um novo item &eacute; indexado.';
$lang['eventdesc-SearchItemDeleted'] = 'Enviado quando um item &eacute; deletado do &iacute;ndice.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Enviado quando todos os itens s&atilde;o deletados do &iacute;ndice.';
$lang['eventhelp-SearchInitiated'] = '<p>Enviado quando uma busca se inicia.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Texto o qual foi pesquisado.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Enviado quando uma busca termina..</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Texto o qual foi pesquisado.</li>
<li>Conjunto dos resultados encontrados.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Enviado quando um novo item &eacute; indexado.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Nome do m&oacute;dulo.</li>
<li>Id do item.</li>
<li>Atributo Adicional.</li>
<li>Conte&uacute;do a indexar e adicionar.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Enviado quando um item &eacute; deletado do &iacute;ndice..</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Nome do m&oacute;dulo.</li>
<li>Id do item.</li>
<li>Atributo Adicional.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Enviado quando todos os itens s&atilde;o deletados do &iacute;ndice.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>Nenhum</li>
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
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
<li>1.3 - May 2007 (calguy1000)
  <p>Adds calls to SetParameterType</p>
</li>
<li>1.4 - Nov 2007 (calguy1000)
  <p>Adds the keywords action.</p>
  <p>Fixes a problem with using the resultpage parameter to a page that&#039;s template was dramatically different.</p>
</li>
<li>1.4.1 - Nov 2007 (calguy1000)
  <p>Minor fixes so that php tags, and punctuation characters are not indexed.</p>
  <p>Fix the VisibleToAdminUser method</p>
</li>
<li>1.5 - Mar 2008 (calguy1000)
  <p>Now gather statistics about the top most 50 frequently searched words.</p>
  <p>Addd the ability to display the statistics and clear them from the admin panel.</p>
  <p>Make it easier to style the search button, and its label.</p>
  <p>Now only index active pages</p>
</li>
<li>1.5.1 - July 2008 (calguy1000)
  <p>Minor changes to the template to restore behaviour that was there before 1.5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Minor optimizations and tweaks</p>
</li>
</ul>';
$lang['utmz'] = '156861353.1228186412.3.3.utmccn=(referral)|utmcsr=localhost|utmcct=/alccm/admin/moduleinterface.php|utmcmd=referral';
$lang['utma'] = '156861353.1141998637.1228091253.1228186412.1229058939.4';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.4.10.1229058939';
?>
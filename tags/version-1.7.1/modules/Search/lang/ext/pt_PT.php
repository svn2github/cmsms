<?php
$lang['param_detailpage'] = 'Usado apenas para combinar resultados de m&oacute;dulos, este par&acirc;metro permite especificar uma p&aacute;gina de diferentes detalhes  para os resultados. Isso &eacute; &uacute;til se, por exemplo, sempre que mostrar a op&ccedil;&atilde;o para a p&aacute;gina detalhe com um modelo diferente. <em>(<strong>Nota os m&oacute;dulos podem, opcionalmente, substituir isto</strong>)</em>';
$lang['prompt_resultpage'] = 'P&aacute;gina de resultados para cada m&oacute;dulo <em>(Nota os m&oacute;dulos podem, opcionalmente, substituir isto)</em>';
$lang['search_method'] = 'Compatibilidade com &quot;Pretty Urls&quot; via m&eacute;todo POST, o valor padr&atilde;o &eacute; sempre GET, para fazer com que trabalhe desta forma, basta colocar {search search_method=&quot;post&quot;}';
$lang['export_to_csv'] = 'Exportar CSV';
$lang['prompt_savephrases'] = 'Ratro de frases, e n&atilde;o palavras individuais';
$lang['word'] = 'Palavra';
$lang['count'] = 'Contagem';
$lang['confirm_clearstats'] = 'Tem a certeza de que deseja limpar permanentemente todas as estat&iacute;sticas?';
$lang['clear'] = 'Apagar';
$lang['statistics'] = 'Estat&iacute;sticas';
$lang['param_action'] = 'Especificar o modo de opera&ccedil;&atilde;o para o m&oacute;dulo. Valores aceit&aacute;veis s&atilde;o &#039;default&#039;, e &#039;palavra-chave&#039;. As palavras-chave ac&ccedil;&atilde;o podem ser usadas para gerar uma lista separada por v&iacute;rgulas de palavras adequadas para usar em uma palavra-chave metatag.';
$lang['param_count'] = 'Utilizado com ac&ccedil;&atilde;o das palavras-chave , esse par&acirc;metro ir&aacute; limitar a sa&iacute;da de um n&uacute;mero espec&iacute;fico de palavras';
$lang['param_pageid'] = 'Aplic&aacute;vel apenas com ac&ccedil;&atilde;o das palavras-chave , este par&acirc;metro pode ser usado para especificar uma outra pageid para retornar resultados para';
$lang['param_inline'] = 'Se true, a sa&iacute;da do formul&aacute;rio de pesquisa ir&aacute; substituir o conte&uacute;do original tag da &quot;pesquisa&quot;  no conte&uacute;do bloco original . Use este par&acirc;metro se o seu template tem v&aacute;rios blocos de conte&uacute;do, e n&atilde;o quiser que o resultado da pesquisa substitua o conte&uacute;do padr&atilde;o do bloco';
$lang['param_passthru'] = 'Passe par&acirc;metros nomeados em baixo para especificar os m&oacute;dulos. O formato de cada um destes par&acirc;metros &eacute; o seguinte: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; ex.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limitar os resultados de pesquisa para valores indexados a partir dos especificados (separados por v&iacute;rgula) listados nos m&oacute;dulos';
$lang['searchsubmit'] = 'Submeter';
$lang['search'] = 'Pesquisar';
$lang['param_submit'] = 'Texto para colocar no bot&atilde;o enviar';
$lang['param_searchtext'] = 'Texto para colocar na caixa de Pesquisa';
$lang['prompt_searchtext'] = 'Texto Padr&atilde;o da procura';
$lang['param_resultpage'] = 'P&aacute;gina para exibir os resultados da pesquisa em. Pode ser uma p&aacute;gina ou um alias id. Utilizado para permitir que os resultados de pesquisa sejam exibidos em um template diferente do formul&aacute;rio de pesquisa';
$lang['prompt_alpharesults'] = 'Classificar resultados por ordem alfab&eacute;tica em vez de ser por peso';
$lang['description'] = 'M&oacute;dulo de pesquisa local e outros conte&uacute;dos dos m&oacute;dulos.';
$lang['reindexallcontent'] = 'Reindexar todos os conte&uacute;dos';
$lang['reindexcomplete'] = 'Reindexa&ccedil;&atilde;o Completa!';
$lang['stopwords'] = 'Ignorar as seguintes palavras';
$lang['searchresultsfor'] = 'Resultados de pesquisa por';
$lang['noresultsfound'] = 'N&atilde;o foram encontradas p&aacute;ginas com os termos da sua pesquisa.';
$lang['timetaken'] = 'Tempo Gasto';
$lang['usestemming'] = 'Usar Palavras Stemming (Somente Ingl&ecirc;s)';
$lang['searchtemplate'] = 'Template de Pesquisa';
$lang['resulttemplate'] = 'Template de Resultados';
$lang['submit'] = 'Submeter';
$lang['sysdefaults'] = 'Redefinir Padr&atilde;o';
$lang['searchtemplateupdated'] = 'Template de Pesquisa  Actualizado';
$lang['resulttemplateupdated'] = 'Template de Resultados Actualizado';
$lang['restoretodefaultsmsg'] = 'Esta opera&ccedil;&atilde;o ir&aacute; restaurar o conte&uacute;do para o seu template do sistema padr&atilde;o. Tem certeza de que deseja prosseguir?';
$lang['options'] = 'Op&ccedil;&otilde;es';
$lang['eventdesc-SearchInitiated'] = 'Enviado quando uma pesquisa &eacute; iniciada.';
$lang['eventdesc-SearchCompleted'] = 'Enviado quando uma pesquisa est&aacute; conclu&iacute;da.';
$lang['eventdesc-SearchItemAdded'] = 'Enviado quando um novo item &eacute; indexado.';
$lang['eventdesc-SearchItemDeleted'] = 'Enviado quando um item &eacute; exclu&iacute;do do &iacute;ndice.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Enviado quando todos os itens s&atilde;o exclu&iacute;dos do &iacute;ndice.';
$lang['eventhelp-SearchInitiated'] = '<p>Enviado quando uma pesquisa &eacute; iniciada.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Texto que foi procurado.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Enviado quando uma pesquisa for completa.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>Texto que foi procurado.</li>
<li>Array da conclus&atilde;o dos resultados.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Enviado quando um novo item &eacute; indexado.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>M&oacute;dulo nome.</li>
<li>Id do item.</li>
<li>Atributo adicional. </li>
<li>Conte&uacute;do para indexar e incluir.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Enviado quando um item &eacute; exclu&iacute;do do &iacute;ndice.</p>
<h4>Par&acirc;metros</h4>
<ol>
<li>M&oacute;dulo nome.</li>
<li>Id do item.</li>
<li>Atributo adicional. </li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Enviado quando todos os itens s&atilde;o exclu&iacute;dos do &iacute;ndice.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>N&atilde;o</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utma'] = '156861353.1237943808.1260371543.1269303018.1269308063.80';
$lang['utmz'] = '156861353.1269224531.76.37.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['qca'] = 'P0-938093432-1260371543221';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
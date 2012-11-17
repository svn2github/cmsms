<?php
$lang['friendlyname'] = 'CMSPrinting (Impress&atilde;o)';
$lang['description'] = 'Este m&oacute;dulo &eacute; uma forma facilmente personaliz&aacute;vel de fornecer p&aacute;ginas amig&aacute;veis &agrave; impress&atilde;o para o CMSMS';
$lang['postinstall'] = 'O m&oacute;dulo foi instalado com &ecirc;xito';
$lang['confirmuninstall'] = 'Tem certeza de que o m&oacute;dulo deve ser desinstalado?';
$lang['postuninstall'] = 'O m&oacute;dulo foi desinstalado com sucesso';
$lang['linktemplate'] = 'Template do Link';
$lang['printtemplate'] = 'Template de Impress&atilde;o';
$lang['templatesaved'] = 'O template foi salvo';
$lang['templatereset'] = 'O template foi redefinido para o valor por defeito';
$lang['confirmresettemplate'] = 'Tem certeza de que o template deve ser redefinido para o valor por defeito?';
$lang['reset'] = 'Redefinir';
$lang['save'] = 'Salvar';
$lang['upgraded'] = 'foi actualizado para a seguinte vers&atilde;o';
$lang['savetemplate'] = 'Salvar template';
$lang['savesettings'] = 'Salvar configura&ccedil;&otilde;es';
$lang['template'] = 'Template ';
$lang['notemplatecontent'] = 'N&atilde;o foi fornecido nenhum novo template de conte&uacute;do...';
$lang['defaultlinktext'] = 'Imprimir esta p&aacute;gina';
$lang['backbuttontext'] = 'Voltar';
$lang['overridestylereset'] = 'A sobreposi&ccedil;&atilde;o do estilo foi redefinida';
$lang['overridestylesaved'] = 'A sobreposi&ccedil;&atilde;o do estilo foi salva';
$lang['overridestyle'] = 'Substituir estilo impr&iacute;mivel ';
$lang['confirmresetstyle'] = 'Tem certeza de que o estilo deve ser redefinido?';
$lang['stylesheet'] = 'Folha de Estilo (Stylesheet)';
$lang['help_text'] = 'Substituir o texto padr&atilde;o para o link de impress&atilde;o';
$lang['help_popup'] = 'Definir como &#039;verdadeiro&#039; para a p&aacute;gina de impress&atilde;o ser aberta numa nova janela.';
$lang['help_script'] = 'Definir como &#039;verdadeiro&#039; para que o javascript da p&aacute;gina de impress&atilde;o ser usado e mostrar automaticamente a janela de di&aacute;logo de impress&atilde;o';
$lang['help_showbutton'] = 'Definir como &#039;verdadeiro&#039; para mostrar um bot&atilde;o gr&aacute;fico';
$lang['help_class'] = 'Class para o link, &quot;noprint&quot; por defeito';
$lang['help_src_img'] = 'Mostrar esta imagem em vez da defenida por defeito';
$lang['help_class_img'] = 'Class de <img> tag se Showbutton est&aacute; definido';
$lang['help_more'] = 'Colocar op&ccedil;&otilde;es adicionais no interior do <a> link';
$lang['help_onlyurl'] = 'Mostra apenas o URL, e n&atilde;o um link completo ';
$lang['help_includetemplate'] = 'Se estiver definido como &#039;verdadeiro&#039;, esta op&ccedil;&atilde;o faz com que a impress&atilde;o/pdf processe o template todo, e n&atilde;o apenas o conte&uacute;do principal. Este, provavelmente necessita de alguns ajustes nos estilos espec&iacute;ficos de impress&atilde;o que tenham o mediatype &#039;print&#039; activado.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an basic on-the-fly-generated pdf version of the page.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. And note
that the pdf-file outputted may not have much resemblance with you page, but should provide the content.
<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it&#039;s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
or simply
<pre>
{print <i>params</i>}
</pre>
using the print-plugin
<br/>
<h3>Tradu&ccedil;&atilde;o Portuguesa</h3>
<p>Copyright &copy; 2008, Nuno Costa nuno.mfcosta(et)sapo.pt.</p>
<p>Copyright &copy; 2012, Jo Morg.</p>';
$lang['utma'] = '156861353.1022833454.1348936436.1348936436.1348936436.1';
$lang['utmz'] = '156861353.1348936436.1.1.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.3.10.1348936436';
?>
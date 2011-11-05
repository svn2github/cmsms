<?php
$lang['friendlyname'] = 'Vers&atilde;o de p&aacute;gina impr&iacute;miveis';
$lang['description'] = 'Este m&oacute;dulo &eacute; uma forma de fornecer facilmente a adapta&ccedil;&atilde;o amig&aacute;vel da impressora para p&aacute;ginas com CMSms. Alternativamente PDF-files com os principais conte&uacute;dos podem ser criados no mesmo instante..';
$lang['postinstall'] = 'O m&oacute;dulo foi instalado com &ecirc;xito';
$lang['confirmuninstall'] = 'Tem certeza de que o m&oacute;dulo deve ser desinstalado?';
$lang['postuninstall'] = 'O m&oacute;dulo foi desinstalado com sucesso';
$lang['linktemplate'] = 'Link Template';
$lang['printtemplate'] = 'Impress&atilde;o Template';
$lang['pdftemplate'] = 'PDF Template';
$lang['templatesaved'] = 'O template foi salvo';
$lang['templatereset'] = 'O template foi redefinido para o valor padr&atilde;o';
$lang['confirmresettemplate'] = 'Tem certeza de que o template deve ser redefinido para o valor padr&atilde;o?';
$lang['reset'] = 'Redefinir';
$lang['save'] = 'Salvar';
$lang['upgraded'] = 'foi actualizado para a seguinte vers&atilde;o';
$lang['savetemplate'] = 'Salvar template';
$lang['savesettings'] = 'Salvar configura&ccedil;&otilde;es';
$lang['pdfsettings'] = 'Configura&ccedil;&otilde;es PDF';
$lang['pdfsettingssaved'] = 'As configura&ccedil;&otilde;es PDF foram guardadas';
$lang['pdfheader'] = 'PDF Cabe&ccedil;alho';
$lang['pdfenable'] = 'Permitir Gerar PDF';
$lang['pdfenablehelp'] = 'Deve saber que a gera&ccedil;&atilde;o de PDF &eacute; muito rudimentar somente para conte&uacute;dos b&aacute;sicos.
Use &agrave; sua vontade, mas por favor n&atilde;o se queixam da qualidade do resultado.';
$lang['headerfontsize'] = 'Cabe&ccedil;alho tamanho fonte';
$lang['contentfontsize'] = 'Conte&uacute;do tamanho fonte';
$lang['fonttypetext'] = 'Tipo de Fonte';
$lang['fontserif'] = 'Serif ';
$lang['fontsansserif'] = 'Sans Serif ';
$lang['orientation'] = 'Orienta&ccedil;&atilde;o';
$lang['landscape'] = 'Paisagem';
$lang['portrait'] = 'Retrato';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'Template ';
$lang['notemplatecontent'] = 'Nenhum novo conte&uacute;do no template foi dado ...';
$lang['defaultlinktext'] = 'Imprimir esta p&aacute;gina';
$lang['defaultpdflinktext'] = 'Gerar PDF';
$lang['backbuttontext'] = 'Voltar';
$lang['overridestylereset'] = 'A sobreposi&ccedil;&atilde;o do estilo foi redefinida';
$lang['overridestylesaved'] = 'A sobreposi&ccedil;&atilde;o do estilo foi salva';
$lang['overridestyle'] = 'Substituir estilo impr&iacute;mivel ';
$lang['confirmresetstyle'] = 'Tem certeza de que o estilo deve ser redefinido?';
$lang['stylesheet'] = 'Estilos';
$lang['help_text'] = 'Substituir o texto padr&atilde;o para a impress&atilde;o / PDF link';
$lang['help_pdf'] = 'Defina esta op&ccedil;&atilde;o para &#039;verdade&#039; para mostrar um link que gera um arquivo PDF no conte&uacute;do da p&aacute;gina principal, em vez de impress&atilde;o';
$lang['help_popup'] = 'Definir a &#039;verdade&#039; e a p&aacute;gina de impress&atilde;o ser&aacute; aberta em uma nova janela.';
$lang['help_script'] = 'Definir a &#039;verdadeira&#039; e, em imprimir a p&aacute;gina o javascript ser&aacute; usado automaticamente para mostrar a janela de impress&atilde;o';
$lang['help_showbutton'] = 'Definir a &#039;verdade&#039; para mostrar um bot&atilde;o gr&aacute;fico';
$lang['help_class'] = 'Class para o link, o padr&atilde;o &eacute; &quot;noprint&quot;';
$lang['help_src_img'] = 'Mostrar esta imagem em vez do padr&atilde;o';
$lang['help_class_img'] = 'Class de <img> tag se Showbutton est&aacute; definido';
$lang['help_more'] = 'Colocar op&ccedil;&otilde;es adicionais no interior do <a> link';
$lang['help_onlyurl'] = 'Sa&iacute;das apenas o URL, n&atilde;o &eacute; um link completo ';
$lang['help_includetemplate'] = 'Se estiver definido para &quot;true&quot; esta op&ccedil;&atilde;o faz com que a impress&atilde;o / pdf processe todo o template, n&atilde;o apenas o conte&uacute;do principal. Este, provavelmente necessita de alguns ajustes sobre impress&atilde;o espec&iacute;ficos nos estilos com o mediatype &#039;print&#039; activado.';
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
<p>Copyright &copy; 2008, Nuno Costa nuno.mfcosta(et)sapo.pt.</p>';
$lang['utma'] = '156861353.757256758.1245932498.1248267518.1248276518.50';
$lang['utmz'] = '156861353.1248267518.49.19.utmccn=(referral)|utmcsr=noupe.com|utmcct=/php/cms-theming-tutorials.html|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
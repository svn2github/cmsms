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
$lang['settings'] = 'Configura&ccedil;&otilde;es';
$lang['settingssaved'] = 'Configura&ccedil;&otilde;es Salvas';
$lang['pdfheader'] = 'PDF Cabe&ccedil;alho';
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
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.4</p>
<p>Updated to latest TCPDF 3.1, which includes updates in html-rendering</p>
</li>
<li>
<p>version 0.2.3 (silmarillion)</p>
<p>Switched to freesans and freeserif for fonts as they have more foreign chars</p>
<p>Implemented a switch between serif/sansserif fonts</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.2 (silmarillion)</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Tweaks to the default list template.  Adds more smarty variables to the
list template, and cleans up a warning.</p>
<p>Fixed a wierd little typo causing the module to break</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an on-the-fly-generated pdf version of the page
<br/>
Please note that the module currently only outputs the main content, not alternate content 
blocks defined in the templates, nor output from modules. This will be implemented in a later version.

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
and a link should emerge on your pages. 
<br/>
<h3>Tradu&ccedil;&atilde;o Portuguesa</h3>
<p>Copyright &copy; 2008, Nuno Costa nuno.mfcosta(et)sapo.pt.</p>';
$lang['utma'] = '156861353.1033465494970091800.1213181757.1213312493.1213341466.14';
$lang['utmz'] = '156861353.1213312493.13.8.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,17638.msg110857.html';
$lang['utmb'] = '156861353.6.10.1213341466';
$lang['utmc'] = '156861353';
?>
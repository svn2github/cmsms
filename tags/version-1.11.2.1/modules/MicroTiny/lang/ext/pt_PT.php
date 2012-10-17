<?php
$lang['force_blackonwhite'] = 'For&ccedil;ar texto preto em fundo branco';
$lang['help_force_blackonwhite'] = 'For&ccedil;ar o editor MicroTiny a ter texto em preto sobre um fundo branco. Isso pode ajudar na exibi&ccedil;&atilde;o de texto no editor wysiwyg em ambientes com fundos escuros e o primeiro plano claro.';
$lang['strip_background'] = 'Remover efeitos CSS do fundo';
$lang['help_strip_background'] = 'Remove efeitos de fundo a partir de folhas de estilo com efeitos. Isto poder&aacute; ajudar na exibi&ccedil;&atilde;o de texto no editor wysiwyg em ambientes com fundos escuros e primeiros planos claros';
$lang['show_statusbar'] = 'Mostrar Statusbar';
$lang['help_show_statusbar'] = 'Habilitar uma barra de estado no fundo da &aacute;rea wysiwyg. S&oacute; se aplica no lado admin.';
$lang['allow_resize'] = 'Permitir alterar tamanho';
$lang['help_allow_resize'] = 'Permitir alterar o tamanho da &aacute;rea wysiwyg.  Requer que a barra de estado esteja habilitada';
$lang['view_html'] = 'Ver HTML';
$lang['friendlyname'] = 'Editor MicroTiny WYSIWYG';
$lang['help'] = '<h3>O Que Faz Este M&oacute;dulo?</h3>
<p>MicroTiny &eacute; uma vers&atilde;o mais pequena e restrita do TinyMCE-editor, o anterior editor wysiwyg por defeito do CMS Made Simple. O MicroTiny n&atilde;o provid&ecirc;ncia mais do que o b&aacute;sico de edi&ccedil;&atilde;o, sendo contudo uma ferramenta poderosa permitindo mudar facilmente o conte&uacute;do de p&aacute;ginas</p>
<p>Este m&oacute;dulo tem muito poucas op&ccedil;&otilde;es e foi desenhado para permitir uma funcionalidade limitada a editores de conte&uacute;dos que n&atilde;o tenham conhecimentos de HTML. O objectivo &eacute; n&atilde;o haver muitas op&ccedil;&otilde;es que permitam estragar o layout, o look ou desenho de uma p&aacute;gina.</p>
<h3>Como Usar</h3>
<p>A &aacute;rea de teste do MicroTiny dever&aacute; aparecer automaticamente (aos utilizadores com com permiss&otilde;es suficientes) em &quot;Extens&otilde;es >> MicroTiny WYSIWYG Editor&quot; no menu da consola de admin do CMSMS.</p>
<p>para o MicroTiny se usado como o editor wysiwyg quando se editam p&aacute;ginas, o MicroTiny tem de estar seleccionado nas prefer&ecirc;ncias de utilizador. Por favor seleccione &quot;MicroTiny&quot; na op&ccedil;&atilde;o &quot;Seleccionar WYSIWYG a Usar&quot; em &quot;Minhas Prefer&ecirc;ncias >> Prefer&ecirc;ncias de Utilizador&quot; no painel de Admin do CMSMS. Op&ccedil;&otilde;es adicionais nos outros diversos m&oacute;dulos ou nos templates das p&aacute;ginas de conte&uacute;do ou mesmo nas pr&oacute;prias p&aacute;ginas de conte&uacute;do podem ser usadas para controlar se e quando &eacute; providenciada um campo TextArea com um editor WYSIWYG nos v&aacute;rios formul&aacute;rios.</p>
<h3>Acerca de Styles e Cores</h3>
<p>MicroTiny usar&aacute; os stylesheets adicionados aos respectivos templates <em>(se nenhum template puder ser f&aacute;cilmente determinado o template por defeito e os seus stylesheets ser&atilde;o usados)</em>. and strip out background images in order to allow visualizing your text in an environment as close as possible to what will appear on the web page.  If your theme uses a dark background, along with background images on your styles you may experience problems.   We suggest that you always include a color on your background specifications.  i.e:
<pre><code>body {
 color: #eee;
 background: <span style=&quot;color: blue;&quot;>#ddd</span> url(path/to/an/image.jpg);
}
</pre></code>
<h3>E ent&atilde;o Frontend Wysiwygs</h3>
<p>From time to time it may be necessary to provide a wysiwyg text area with limited functionality to frontend editors.   To do this, you will need to follow two steps <em>(subject to change in future versions of CMSMS).</em>:
<ul>
  <li>Set MicroTiny as the Frontend Wysiwyg in the &quot;Site Admin >> Gobal Settings&quot; page on the &quot;General Settings&quot; tab.</li>
  <li>Add the tag {MicroTiny action=enablewysiwg} call to the pages where the wysiwhg editor will be used.  This can either be done in the head section of the page template, in the global metadata, or in the page specific metadata sections.  This tag takes no additional parameters.</li>
</ul>
</p>';
$lang['example'] = 'Exemplo MicroTiny';
$lang['settings'] = 'Configura&ccedil;&otilde;es';
$lang['youareintext'] = 'Est&aacute; em';
$lang['dimensions'] = 'LxA';
$lang['size'] = 'Tamanho';
$lang['filepickertitle'] = 'Selector de ficheiros';
$lang['cmsmslinker'] = 'CMSMS Linker';
$lang['tmpnotwritable'] = 'A configura&ccedil;&atilde;o n&atilde;o pode ser escrita no direct&oacute;rio tmp! Por favor corrija!';
$lang['css_styles_text'] = 'CSS Styles';
$lang['css_styles_help'] = 'Os elementos CSS que forem especificados aqui ser&atilde;o adicionados a uma dropdownbox no editor. Se deixar o campo vazio, a dropdownbox ser&aacute; mantida invis&iacute;vel (comportamento por defeito).';
$lang['css_styles_help2'] = 'Os estilos tanto podem ser apenas o nome de classe, como o nome de classe junto com o nome a mostrar.
Ter&atilde;o de ser separados tanto por virgulas como por newlines (novalinha).
<br/>Exemplo: mystyle1, My style name=mystyle2
<br/>Resultado: uma dropdownbox com duas op&ccedil;&otilde;es, &#039;mystyle1&#039; e &#039;My style name&#039; resultando na inser&ccedil;&atilde;o de mystyle1, e mystyle2 respectivamente.';
$lang['usestaticconfig_text'] = 'Usar config est&aacute;tica';
$lang['usestaticconfig_help'] = 'Esta op&ccedil;&atilde;o gera um ficheiro de configura&ccedil;&atilde;o est&aacute;tico em vez de um din&acirc;mico. Funciona melhor nalguns servidores (por exemplo ao executar PHP como CGI).';
$lang['allowimages_text'] = 'Permitir imagens';
$lang['allowimages_help'] = 'Esta op&ccedil;&atilde;o habilita um bot&atilde;o na barra de ferramentas, permitindo inserir imagens na &aacute;rea de conte&uacute;do.';
$lang['settingssaved'] = 'Configura&ccedil;&otilde;es guardada';
$lang['savesettings'] = 'Guardar configura&ccedil;&otilde;es';
$lang['utma'] = '156861353.1883263935.1338828144.1338828144.1338828144.1';
$lang['utmz'] = '156861353.1338828144.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG B&aacute;sico';
$lang['permission'] = 'Modificar configuraci&oacute;n de TinyMCE B&aacute;sico';
$lang['stripbackgroundtags'] = 'Quitar etiquetas del fondo del CSS';
$lang['source_formatting_text'] = 'Aplicar formato de la fuente para salida HTML';
$lang['onlyxhtmlelements_text'] = 'Permitir s&oacute;lo elementos compatibles con XHTML';
$lang['dropdownblockformats_text'] = 'Bloquear formatos en el men&uacute; desplegable';
$lang['allowtables'] = 'Permitir tablas';
$lang['newlinestyle_text'] = 'Estilo de nueva l&iacute;nea';
$lang['pstyle'] = 'estilo de p';
$lang['brstyle'] = 'estilo de br';
$lang['entityencoding_text'] = 'Codificado de entidades';
$lang['rawencoding'] = 'Codificado en bruto (m&aacute;s r&aacute;pido, sirve en la mayor&iacute;a de los casos)';
$lang['namedencoding'] = 'Codificado por nombre (del tipo &nbsp;)';
$lang['numericencoding'] = 'Codificado num&eacute;rico (del tipo &amp;#160;)';
$lang['enable_thumbs_text'] = 'Habilite vista previa de miniaturas en el explorador de im&aacute;genes.<br />(Nota: Usted puede tener que poner la m&aacute;scara de creaci&oacute;n de archivos a 002 (en vez de la por defecto 022)<br /> para obtener que las miniaturas trabajen (haga esto en Admin del Sitio -> Configuraci&oacute;n Global).';
$lang['show_path_text'] = 'Mostrar el paso del elemento en el fondo del editor.';
$lang['toolbar_tab'] = 'Barra de Herramientas';
$lang['toolbar_help'] = 'Estas opciones deben contener una lista separada por comas de los botones/nombres de control para insertarlos en la barra de herramientas.';
$lang['toolbar_text'] = 'Barra de Tareas';
$lang['language_text'] = 'Elegir idioma:';
$lang['editor_width_text'] = 'Ancho del campo de edici&oacute;n';
$lang['editor_height_text'] = 'Altura del campo de edici&oacute;n';
$lang['auto'] = 'Auto';
$lang['or'] = 'o';
$lang['bodycss_text'] = 'Tag CSS del Body';
$lang['bodycss_help'] = 'deje BLANK o establezca DEFAULT para usar PAGE CSS. Nota: Para que el fondo del editor sea de color blanco ponga lo siguiente en el blank: background-color:white;';
$lang['showtogglebutton_text'] = 'Mostrar caja de tildar para abrir/cerrar wysiwyg';
$lang['togglewysiwyg'] = 'Abrir/Cerrar WYSIWYG';
$lang['styles_tab'] = 'Estilos CSS';
$lang['styles_help'] = 'Si usted deja el campo vac&iacute;o, TinyMCE va a parsear su archivo CSS y listar los estilos contenidos en &eacute;l, al usuario. Si usted lo que desea es s&oacute;lo presentar al usuario algunos estilos, especifique a ellos de la forma &quot;Style 1=style1; Style 2=style2&quot; en el primer campo de abajo. En los campos restantes, usted puede especificar los estilos CSS para Tablas, Filas, y Celdas que son utilizados en los correspondientes di&aacute;logos. Para un campo vac&iacute;o, se usar&aacute; el estilo del estilo general.';
$lang['css_styles_text'] = 'General';
$lang['accessdenied'] = 'Acceso Negado. Por favor controle sus permisos.';
$lang['error'] = '&iexcl;Error!';
$lang['submit'] = 'Enviar';
$lang['update'] = 'Actualizar';
$lang['settings'] = 'Configuraciones';
$lang['settingssaved'] = 'Las configuraciones fueron guardadas';
$lang['toolbarsaved'] = 'La Barra de Tareas fue guardada';
$lang['stylessaved'] = 'Los Estilos fueron guardados';
$lang['testareatext'] = '&Aacute;rea de pruebas, no se har&aacute; da&ntilde;o a ning&uacute;n contenido jugando con esto...';
$lang['help'] = '	<h3>&iquest;Que hace esto?</h3>
	<p>Permite usar a TinyMCE como editor WYSIWYG de sus p&aacute;ginas.</p>
	<h3>&iquest;Como lo uso?</h3>
	<p>Instalar el m&oacute;dulo, luego ir a preferencias de usuario y elegir a TinyMCE como el editor wysiwyg de su elecci&oacute;n.</p>';
$lang['changelog'] = '		<ul>
		<li>
		<p>Version: 2.2.5</p>
		<p>Made the entityencoding a preference</p>
		<p>Made Tiny work as frontend wysiwyg module</p>		
		<p>Fixed missing blockformat default upon new installation (thanks Utter for noticing)</p>
		</li>
		<li>
		<p>Version: 2.2.4</p>
		<p>Fixed the IE toggle bug</p>
		<p>Speeded up turning editor on/off quite a bit (using mceToggleEditor in stead of loading/unloading whole system)</p>
		</li>
		<li>
		<p>Version: 2.2.3</p>
		<p>Updated to TinyMCE version 2.1.2, fixes turning wysiwyg on/off on pages containing multiple textareas</p>
		<p>Fixed a bug making you end up in wrong tab when saving toolbar</p>		
		<p></p>
		</li>
    <li>
		<p>Version: 2.2.2</p>
		<p>Numereous smaller tweeks.</p>
    <p>Fixed problem with changing between pages with Tiny and EditArea.</p>
    <p>Sessionized the live language.</p>
    <p>Added charmap to default toolbar.</p>
		</li>
		<li>
		<p>Version: 2.2.1</p>
		<p>Fixed blockformat dropdown now actually reflecting the values in the edit box</p>
		<p>Rewrote textarea management to using sessions. Should fix the double-tinys appearing randomly.</p>
		</li>
    <li>
		<p>Version: 2.2.0</p>
		<p>Split TinyMCE into 2 modules, one for inclusion in distribution and one for more advanced use. This is the Basic version.</p>
		<p>Made table operations an option</p>
		<p>Removed the nonworking &#039;replace cms-links while writing&#039;</p>
		<p>Generally trimmed down the module to a size acceptable for the main distribution</p>
		</li>
    <li>
		<p>Version: 2.0.6</p>
		<p>Made it possible to add something extra to the configuration</p>
		<p>Added paste as plain text plugin</p>
		<p>Added an option to show a button turning the wysiwyg-functionality on/off</p>
		<p>General speed improvements</p>
		<p>Updated to Tiny 2.1.1, TinyCompressed 1.1.0 and SpellChecker 1.0.4</p>
		</li>
		<li>
		<p>Version: 2.0.5</p>
		<p>Added a xhtml-elements only option</p>
		<p>Moved javascript config into an external file</p>
		<p>Added selecting p or br/ style newlines</p>
		<p>Updated to new compression engine. Should fix some bugs related to this</p>
		<p>Added plugin descriptions from docs</p>
		<p>Fixed showing of correct testarea even if another wysiwyg is chosen</p>
		<p>Updated to Tiny 2.1.0</p>
		<p>Added thumbnail previews in image browser.</p>
		</li>
		<li>
		<p>Version: 2.0.4</p>
		<p>Fixed customized textarea width</p>
		<p>Updated to Tiny 2.0.7</p>
		<p>Reversed changelog content (from now on at least) ;-)</p>
		<p></p>
		</li>

		<li>
		<p>Version: 1.0</p>
		<p>Original module code for TinyMCE WYSIWYG textarea replacement tool.</p>
		</li>
		<li>
		<p>Author: Simon Brown <simon@uptoeleven.ws></p>
		<p>Version: 1.1</p>
		<p>Converted for use with new CMS Module architecture.</p>
		<p>Upgraded TinyMCE to version 1.42.</p>
		</li>
		<li>
		<p>Version: 1.2</p>
		<p>Fixed bug with paths being created wrong on image insert.</p>
		</li>
		<li>
		<p>Version: 2.0.0</p>
		<p>Author: Stefan R&ouml;llin</p>
		<p>UPDATED to version 2.0.5.1 of TinyMCE editor.</p>
		<p>ADD plugins simplebrowser, cmsmslink </p>
		<p>ADD some configuration options.</p>
		<p>ADD permission to modify settings.</p>
		</li>
		<li>
		<p>Version: 2.0.1</p>
		<p>UPDATED to version 2.0.6.1 of TinyMCE editor.</p>
		<p>ADD configuration options: language and source_formatting.</p>
		<p>Improved plugin configuration.</p>
		<p>ADD more languages.</p>
		</li>
		<li>
		<p>Version: 2.0.2</p>
		<p>FIX filebrowser</p>
		<p>FIX security flaw in filebrowser</p>
		</li>
		<li>
		<p>Version: 2.0.3</p>
		<p>Converted to new fetch-method of content_array</p>
		<p>FIX security flaw in filebrowser</p>
		<p>Added localization of testarea-text</p>
		</li>
		</ul>
';
$lang['utma'] = '156861353.805641954.1192475049.1195377367.1195392296.62';
$lang['utmz'] = '156861353.1195118736.55.13.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
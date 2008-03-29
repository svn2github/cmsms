<?php
$lang['friendlyname'] = 'Printer Friendly Pages';
$lang['description'] = 'Questo modulo &egrave; un facile e personalizzabile modo di provvedere la stampa di pagine per CMSms. Possono essere creati al volo, alternativamente, file PDF con il contenuto principale.';
$lang['postinstall'] = 'Il modulo &egrave; stato installato con successo';
$lang['confirmuninstall'] = 'Site sicuri che il modulo deve essere disinstallato?';
$lang['postuninstall'] = 'Il modulo &egrave; stato disinstallato con successo';
$lang['linktemplate'] = 'Modello Link';
$lang['printtemplate'] = 'Modello di stampa';
$lang['pdftemplate'] = 'Modello PDF';
$lang['templatesaved'] = 'Il Modello &egrave; stato salvato';
$lang['templatereset'] = 'Il Modello &egrave; stato resettato al valore predefinito';
$lang['confirmresettemplate'] = 'Siete sicuri che il Modello dovr&agrave; essere resettato al valore predefinito?';
$lang['reset'] = 'Reset al valore predefinito';
$lang['save'] = 'Salva';
$lang['savetemplate'] = 'Salva Modello';
$lang['savesettings'] = 'Salva configurazioni';
$lang['settings'] = 'Configurazioni';
$lang['settingssaved'] = 'Le configurazioni sono state salvate';
$lang['pdfheader'] = 'Intestazione PDF';
$lang['headerfontsize'] = 'Dimensione font della Intestazione';
$lang['contentfontsize'] = 'Dimensione font del Content';
$lang['orientation'] = 'Orientazione';
$lang['landscape'] = 'Orrizontale';
$lang['portrait'] = 'Verticale';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Modello';
$lang['notemplatecontent'] = 'Nessun contenuto dato per il nuovo Modello...';
$lang['defaultlinktext'] = 'Stampa questa pagina';
$lang['defaultpdflinktext'] = 'Genera PDF';
$lang['backbuttontext'] = 'Indietro';
$lang['overridestylereset'] = 'Lo Stile sovrascritto &egrave; stato ripristinato';
$lang['overridestylesaved'] = 'Lo Stile sovrascritto &egrave; stato salvato';
$lang['overridestyle'] = 'Stile sovrascritto';
$lang['confirmresetstyle'] = 'Siete sicuri che lo Stile deve essere resettato?';
$lang['stylesheet'] = 'Stile CSS';
$lang['help_text'] = 'Sovrascrive il testo predefinito per il link di stampa/PDF';
$lang['help_pdf'] = 'Mostra un link per generare un file PDF del contenuto principale della pagina invece di stampare';
$lang['help_popup'] = 'Configurato a &#039;true&#039;  la pagina di stampa sar&agrave; aperta in una nuova finestra';
$lang['help_script'] = 'Set to &#039;true&#039; and in print page javascript will be used for automatically show the print-dialog';
$lang['help_showbutton'] = 'Configurato a &#039;true&#039; mostra un bottone grafico';
$lang['help_class'] = 'Classe dello Stile CSS per il link, predefinito sar&agrave; &#039;noprint&#039;';
$lang['help_src_img'] = 'Mostra questa immagine invece della predefinita';
$lang['help_class_img'] = 'Classe dello Stile CSS per tag <img> se showbutton &egrave; configurato';
$lang['help_more'] = 'Posiziona opzioni addizionali per il tag link <a>';
$lang['help_onlyurl'] = 'Stampa solo l&#039;url e non il completo link';
$lang['changelog'] = '<ul>
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
visitor to a version of the page better suited for printing. Several parameters can be set so make the link and
printer friendly page look just as you&#039;d like. As of version 0.2.0, a parameter can be set to onthefly-generation of a PDF-file instead.
<br/>
For now the module only supports &quot;plain&quot; content pages, no module-redirections etc. But neither does the builtin printing-functionality in CMSms.
<br/>
Please note that the module currently only outputs the main content, not alternate content blocks defined in the templates.

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
<br/><br/>
<b>Notes:</b>
<br/>
<ul>
<li>PDF Generation is experimental at this time.</li>
<li>PDF Generation may not work on servers with php 4.x, it is recommended you encourage your host to upgrade to php5 if you want PDF support.</li>
</ul>';
$lang['utma'] = '156861353.916584110.1152549583.1195479716.1195546324.174';
$lang['utmz'] = '156861353.1192519372.88.13.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
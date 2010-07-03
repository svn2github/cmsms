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
$lang['upgraded'] = '&egrave; stato aggiornato alla versione %s';
$lang['savetemplate'] = 'Salva Modello';
$lang['savesettings'] = 'Salva configurazioni';
$lang['pdfsettings'] = 'Configurazioni PDF';
$lang['pdfsettingssaved'] = 'Le configurazioni PDF sono state salvate';
$lang['pdfheader'] = 'Intestazione PDF';
$lang['pdfenable'] = 'Abilita la generazione-PDF';
$lang['pdfenablehelp'] = 'Voi dovreste conoscere che la generazione-PDF &egrave; molto rudimentale e buona solo per visualizzare contenuti molto semplici.
Usatela ma non lamentatevi della qualit&agrave; finale.';
$lang['headerfontsize'] = 'Dimensione font della Intestazione';
$lang['contentfontsize'] = 'Dimensione font del Content';
$lang['fonttypetext'] = 'Tipo di font';
$lang['fontserif'] = 'Serif font';
$lang['fontsansserif'] = 'Sans Serif font';
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
$lang['help_script'] = 'Configurato a &#039;true&#039; sar&agrave; usato un javascript per automaticamente mostrare la finestra di dialogo della stampa';
$lang['help_showbutton'] = 'Configurato a &#039;true&#039; mostra un bottone grafico';
$lang['help_class'] = 'Classe dello Stile CSS per il link, predefinito sar&agrave; &#039;noprint&#039;';
$lang['help_src_img'] = 'Mostra questa immagine invece della predefinita';
$lang['help_class_img'] = 'Classe dello Stile CSS per tag <img> se showbutton &egrave; configurato';
$lang['help_more'] = 'Aggiunge ulteriori opzioni al tag link <a>';
$lang['help_onlyurl'] = 'Stampa solo l&#039;url e non il link completo';
$lang['help_includetemplate'] = 'Se configurato a &#039;true&#039; queste opzioni effettuano la stampa/pdf dell&#039;intero Modello e non solo del contenuto. Questo probabilmente richiede del lavoro sugli Stili CSS con il media &#039;print&#039; abilitato.';
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
';
$lang['qca'] = 'P0-1187230324-1271659236866';
$lang['utma'] = '156861353.976402040.1271759292.1276850904.1277118686.4';
$lang['utmz'] = '156861353.1277118686.4.4.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
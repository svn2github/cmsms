<?php
$lang['friendlyname'] = 'Prilagojeno za tiskalnike';
$lang['description'] = 'Modul ponuja preprost način za ponujanje vsebin spletnih strani, ki so prilagojene za tiskalnike. Modul omogoča tudi preprosto ustvarjanje PDF dokumentov z vsebinami spletnih strani.';
$lang['postinstall'] = 'Modul je bil uspe&scaron;no name&scaron;čen';
$lang['confirmuninstall'] = 'Ste prepričani, da želite odstraniti modul?';
$lang['postuninstall'] = 'Modul je bil uspe&scaron;no odstranjen';
$lang['linktemplate'] = 'Predloge povezav';
$lang['printtemplate'] = 'Predloge za tisk';
$lang['pdftemplate'] = 'PDF predloge';
$lang['templatesaved'] = 'Predloga je bila shranjena';
$lang['templatereset'] = 'Predloga je bila ponastavljena na privzeto vrednost';
$lang['confirmresettemplate'] = 'Ste prepričani, da želite ponastaviti predlogo na njeno privzeto vrednost?';
$lang['reset'] = 'Ponastavi na privzeto';
$lang['save'] = 'Shrani';
$lang['upgraded'] = '- nadgrajeno na različico  %s';
$lang['savetemplate'] = 'Shrani predlogo';
$lang['savesettings'] = 'Shrani nastavitve';
$lang['settings'] = 'Nastavitve';
$lang['settingssaved'] = 'Nastavitve shranjene';
$lang['pdfheader'] = 'PDF glava';
$lang['headerfontsize'] = 'Velikost pisave v glavi';
$lang['contentfontsize'] = 'Velikost pisave v vsebini';
$lang['fonttypetext'] = 'Tip pisave';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
$lang['orientation'] = 'Orientacija';
$lang['landscape'] = 'Vodoravno (landscape)';
$lang['portrait'] = 'Navpično (portrait)';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Predloga';
$lang['notemplatecontent'] = 'Ni bila podana nova predloga...';
$lang['defaultlinktext'] = 'Natisni to stran';
$lang['defaultpdflinktext'] = 'Ustvari PDF';
$lang['backbuttontext'] = 'Nazaj';
$lang['overridestylereset'] = 'Dodatna stilska predloga je bila ponastavljena';
$lang['overridestylesaved'] = 'Dodatna stilska predloga je bila shranjena';
$lang['overridestyle'] = 'Dodatna stilska predloga za tisk';
$lang['confirmresetstyle'] = 'Ste prepričani, da želite ponastaviti stilsko predlogo?';
$lang['stylesheet'] = 'Stilska predloga';
$lang['help_text'] = 'Povozi privzeto besedilo za natisni/PDF povezavo';
$lang['help_pdf'] = 'Postavite na &#039;true&#039;, če želite prikazati povezavo za ustvarjanje PDF datotek na vsebini glavne strani, namesto tiska';
$lang['help_popup'] = 'Postavite na &#039;true&#039; in stran za tiskanje bo odprta v novem oknu';
$lang['help_script'] = 'Postavite na &#039;true&#039; in javascript bo uporabljen za avtomatično tiskanje';
$lang['help_showbutton'] = 'Nastavite na &#039;true&#039;, če želite prikazati grafični gumb';
$lang['help_class'] = 'Razred (class) povezave, privzeto &#039;noprint&#039;';
$lang['help_src_img'] = 'Prikaži to sliko namesto privzete';
$lang['help_class_img'] = 'Razred (class) <img> oznake, če je nastavljen showbutton';
$lang['help_more'] = 'Vstavi dodatne možnosti znotraj <a> povezave';
$lang['help_onlyurl'] = 'Izpi&scaron;e samo URL in ne celotne povezave';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.5</p>
<p>Updated to latest TCPDF 4.0, which completely rewrites html-rendering</p>
</li>
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
</ul>
';
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
';
$lang['utma'] = '156861353.587959277.1217433595.1218884702.1218893504.11';
$lang['utmz'] = '156861353.1218827009.7.4.utmccn=(organic)|utmcsr=google|utmctr=cms made simple email obfuscate|utmcmd=organic';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
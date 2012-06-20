<?php
$lang['friendlyname'] = 'Printare';
$lang['description'] = 'Acest modul este o cale usor customizabila de a furniza afisare de pagini pregatite de printare pentru CMSms.
Alternativ un fisier PDF foarte simplu cu continutul principal poate fi creat on-the-fly.';
$lang['postinstall'] = 'Modulul a fost instalat cu succes';
$lang['confirmuninstall'] = 'Sunteti sigur ca modulul ar trebui dezinstalat?';
$lang['postuninstall'] = 'Modulul a fost dezinstalat cu succes';
$lang['linktemplate'] = 'Template link';
$lang['printtemplate'] = 'Template print';
$lang['pdftemplate'] = 'Template PDF';
$lang['templatesaved'] = 'Template-ul a fost salvat';
$lang['templatereset'] = 'Template-ul a fost resetat la valorile impicite';
$lang['confirmresettemplate'] = 'Sunteti sigur ca template-ul ar trebui resetat la valorile implicite?';
$lang['reset'] = 'Resetare';
$lang['save'] = 'Salvare';
$lang['upgraded'] = 'a fost upgradat la versiunea %s';
$lang['savetemplate'] = 'Salvare template';
$lang['savesettings'] = 'Salvare setari';
$lang['pdfsettings'] = 'Setari PDF';
$lang['pdfsettingssaved'] = 'Setarile pentru PDF au fost salvate';
$lang['pdfheader'] = 'Header PDF';
$lang['pdfenable'] = 'Activare generare PDF';
$lang['pdfenablehelp'] = 'Ar trebui sa stiti ca generarea de PDF este foarte rudimentara, scotand numai continutul de baza.
Folositi-l, dar nu va plangeti de calitatea rezultatelor.';
$lang['headerfontsize'] = 'Dimensiune font header';
$lang['contentfontsize'] = 'Dimensiune font continut';
$lang['fonttypetext'] = 'Tip font';
$lang['fontserif'] = 'Serif ';
$lang['fontsansserif'] = 'Sans Serif ';
$lang['orientation'] = 'Orientare';
$lang['landscape'] = 'Landscape ';
$lang['portrait'] = 'Portrait ';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'Template ';
$lang['notemplatecontent'] = 'Nu a fost dat nici un continut nou template-ului...';
$lang['defaultlinktext'] = 'Printati aceasta pagina';
$lang['defaultpdflinktext'] = 'Generare PDF';
$lang['backbuttontext'] = 'Inapoi';
$lang['overridestylereset'] = 'Stylesheet pentru override a fost resetat';
$lang['overridestylesaved'] = 'Stylesheet pentru override a fost salvat';
$lang['overridestyle'] = 'Se face override la stylesheet pentru printare';
$lang['confirmresetstyle'] = 'Sunteti sigur ca stylesheet-ul ar trebui resetat?';
$lang['stylesheet'] = 'Stylesheet ';
$lang['help_text'] = 'Se face override la textul implicit pentru link printare/PDF';
$lang['help_pdf'] = 'Setati &#039;adevarat&#039; pentru a afisa un link pentru generare PDF cu continutul in loc de printare';
$lang['help_popup'] = 'Setati &#039;adevarat&#039; si pagina pentru printare va fi deschisa in fereastra noua.';
$lang['help_script'] = 'Setati &#039;adevarat&#039; si in pagina de printare se va folosi javascript pentru afisare automata a dialogului de printare';
$lang['help_showbutton'] = 'Setati &#039;adevarat&#039; pentru afisare buton grafic';
$lang['help_class'] = 'Clasa pentru link, implicit este &#039;noprint&#039;';
$lang['help_src_img'] = 'Afisare aceasta imagine in loc de cea implicita';
$lang['help_class_img'] = 'Clasa elementului <img> daca showbutton este setat';
$lang['help_more'] = 'Plasare optiuni suplimentare in interiorul linkului <a>';
$lang['help_onlyurl'] = 'Afiseaza numai url-ul, nu un link complet';
$lang['help_includetemplate'] = 'Daca este setata &#039;adevarat&#039; aceasta optiune face ca printarea/pdf-ul sa proceseze intregul template, nu numai continutul principal. Acest lucru probabil presupune un pic de lucru la stiluri specifice pentru printare cu mediatype &#039;print&#039; activat.';
$lang['help'] = '<b>Ce face acest modul?</b>
<br/>
Va permite sai inserati un link in pagini/template-uri care directioneaza vizitatorul catre o varianta a paginii mai potrivita pentru printare. Poate trimite de asemenea catre o versiune PDF a paginii generata on-the-fly.
<br/>
Luati nota ca daca parametrul <i>includetemplate=true</i> nu este folosit, numai partea de continut principal al paginii va fi afisat. De asemenea versiunea PDF ar putea sa nu aiba mari asemanari cu pagina dumneavoastra, dar ar trebui sa contina continutul.
<br/><br/>
<b>Cum se foloseste?</b>
<br/>
La modul simplu instalati modulul, accesati interfata lui de administrare si vedeti/editati template-ul pentru link si pagina printabila.
<br/>
In contiutul paginii sau in template inserati codul pentru modul astfel:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
sau
<pre>
{print <i>params</i>}
</pre>
<br/>
';
$lang['utmc'] = '156861353';
$lang['utma'] = '156861353.3573843717708992500.1250056267.1250512405.1250517093.12';
$lang['qcb'] = '1912438266';
$lang['qca'] = '1249980835-92593492-79567608';
$lang['utmz'] = '156861353.1250492360.8.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
?>
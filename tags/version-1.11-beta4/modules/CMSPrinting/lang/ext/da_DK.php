<?php
$lang['friendlyname'] = 'CMS Udskrivning';
$lang['description'] = 'Dette modul tilbyder konfigur&eacute;rbare printervenlige udgaver af CMSms-sider. Alternativt kan PDF-filer med indholdet genereres.';
$lang['postinstall'] = 'Modulet blev installeret';
$lang['confirmuninstall'] = 'Er du sikker p&aring; modulet skal afinstalleres?';
$lang['postuninstall'] = 'Modulet blev afinstalleret';
$lang['linktemplate'] = 'Link skabelonen';
$lang['printtemplate'] = 'Print skabelonen';
$lang['templatesaved'] = 'Skabelonen blev gemt';
$lang['templatereset'] = 'Skabelonen fik genskabt sit standardindhold';
$lang['confirmresettemplate'] = 'Er du sikker p&aring; skabelonen skal have genskabt sit standardindhold?';
$lang['reset'] = 'Genskab standardindhold';
$lang['save'] = 'Gem';
$lang['upgraded'] = 'blev opgraderet til version %s';
$lang['savetemplate'] = 'Gem skabelon';
$lang['savesettings'] = 'Gem indstillinger';
$lang['template'] = 'Skabelon';
$lang['notemplatecontent'] = 'Intet skabelon indhold givet';
$lang['defaultlinktext'] = 'Udskriv denne side';
$lang['backbuttontext'] = 'Tilbage';
$lang['overridestylereset'] = 'Override stylesheet&#039;et fik genskabt sit standardindhold';
$lang['overridestylesaved'] = 'Override stylesheet&#039;et blev gemt';
$lang['overridestyle'] = 'Override stylesheet';
$lang['confirmresetstyle'] = 'Er du sikker p&aring; stylesheet&#039;et skal have genskabt sit standardindhold?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Angiv anden tekst for print/PDF-linket';
$lang['help_popup'] = 'S&aelig;t til &#039;true&#039; for at f&aring; print-siden vist i et nyt vindue';
$lang['help_script'] = 'S&aelig;t til &#039;true&#039; for at lade print-siden automatisk vise print-dialogboksen ved hj&aelig;lp af javascript';
$lang['help_showbutton'] = 'S&aelig;t til &#039;true&#039; for at vise en grafisk knap';
$lang['help_class'] = 'CSS-klasse for link&#039;et, standard er &#039;noprint&#039;';
$lang['help_src_img'] = 'Vis dette ikon i stedet for standardikonet';
$lang['help_class_img'] = 'CSS-klassen <img>-tagged skal have hvis showbutton er sl&aring;et til';
$lang['help_more'] = 'Inds&aelig;tter flere ting i <a> linket';
$lang['help_onlyurl'] = 'Returnerer kun adressen, ikke det komplette link';
$lang['help_includetemplate'] = 'Hvis denne s&aelig;ttes til &#039;true&#039; vil print/pdf medtage hele skabelonen, ikke bare det prim&aelig;re indhold. Dette vil sandsynligvis kr&aelig;ve nogle print-specifikke styles som har medietypen &#039;print&#039; sl&aring;et til.';
$lang['help'] = '<b>Hvad g&oslash;r dette modul?</b>
Dette modul giver dig mulighed for at inds&aelig;tte et link i dine sider/skabeloner som leder til en version af siden bedre egnet til udskrivning. 
<br/>
Bem&aelig;rk at med mindre parametret <i>includetemplate=true</i> benyttes vil kun hoved-indholdet af siden vises.

<br/>
<b>Hvordan bruges dette modul?</b>
<br/>
Du kan ops&aelig;tte moduler gennem administrationen og definere skabeloner til de udskriftsvenlige sider.
<br/>
I din side/skabelon inds&aelig;ttes s&aring; nogen i stil med:
<pre>
{cms_module module=&#039;CMSPrinting&#039; <i>params</i>}
</pre>
eller simpelthen
<pre>
{print <i>params</i>}
</pre>
using the print plugin.


';
$lang['qca'] = '1229601790-85243197-43260713';
$lang['utma'] = '156861353.389684394.1301142140.1305552128.1305563476.6';
$lang['utmz'] = '156861353.1302959389.4.2.utmcsr=cmsms.eu|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>
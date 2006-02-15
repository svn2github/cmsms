<?php
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Tema:';
$lang['error_nofilesuploaded'] = 'Inga filer laddades upp. Kontrollera att din formulärtaggs enctype (avkodningstype) är satt till multipart/form-data och att det högra fältet är ikryssat för den uppladdade filen.';
$lang['error_templateexists'] = 'En mall med namnet "%s" finns redan';
$lang['error_stylesheetexists'] = 'En stilmall med namnet "%s" finns redan';
$lang['error_nostylesheets'] = 'Inga stilmallar hittades i det här temat';
$lang['error_couldnotcreatetemplate'] = 'Kunde inte skapa malldefinitionen';
$lang['error_couldnotassoccss'] = 'Problem att koppla stilmallar med mallen';
$lang['error_nooutput'] = 'Inga data att skicka';
$lang['error_notemplate'] = 'Kunde inte hitta mall';
$lang['error_dtdmismatch'] = 'DTD-versionen stämmer inte, kan inte importera';
$lang['import'] = 'Importera';
$lang['upload'] = 'Ladda upp tema';
$lang['id'] = 'Id';
$lang['name'] = 'Namn';
$lang['export'] = 'Exportera';
$lang['submit'] = 'Skicka';
$lang['friendlyname'] = 'Temahanterare';
$lang['postinstall'] = 'Glöm inte att ställa in rättigheten "Manage Themes" för att använda den här modulen!';
$lang['postuninstall'] = '"Oh no, besegrad igen!"';
$lang['uninstalled'] = 'Modulen har avinstallerats.';
$lang['installed'] = 'Modul med versionsnummer %s är installerad.';
$lang['prefsupdated'] = 'Modulinställningar uppdaterade.';
$lang['accessdenied'] = 'Tillstånd nekat. Vänligen kontrollera dina rättigheter.';
$lang['error'] = 'Fel!';
$lang['upgraded'] = 'Modulen upgraderad till version %s.';
$lang['moddescription'] = 'En modul som gör det möjligt att importera och exportera innehållsteman (mallar och sidmallar)';
$lang['changelog'] = '<ul>
<li><p>Version 1.0.4. Januari, 2006</p>
<p>Ser till att samma mall, stilmall eller fil bara kommer med en gång (eller försöker så gott det går) och la till en DTD-versionstagg till utmatningen. Också en mycket striktare modell för rättigheternacalg.</p>
</li>
<li><p>Version 1.0.3. Januari, 2006</p>
<p>Stödjer nu flera mallar i ett tema, rekursivt skapande av katalog (dvs. sökväg med underkataloger), och base64-kodning för alla stilmallar och mallar.</p>
</li>
<li><p>Version 1.0.2. December, 2005 - Hanterar nu inkluderade bilder och javascript i både stilmallarna och mallarna. När de återställs återställs filerna till en katalog som skapas under uploads/temanamn.</p></li>
<li>Version 1.0.1. December, 2005 - Fixade beroenden, hjälpen, och allmän upprensning.</li>
<li>Version 1.0.0. 31 November, 2005 - Första utgåvan.</li>
</ul>';
$lang['help'] = '<h3>Vad gör den här modulen?</h3>
<p>Den här modulen låter dig importera och exportera mallar och deras kopplade stilmallar som "teman". Den låter dig dela din layou och design med andra CMSMS-användare.</p>
<h3>Hur använder jag den?</h3>
<p>Den här modulen har inget frontendgränssnitt, bara ett administrationsgränssnitt. Där kan du välja en existerande (aktiv) mall och klicka på "Exportera". En XML-fil som innehåller mallen och de stilmallar som är kopplade till den skapas och skickas till dig via nedladdning.</p>
<p>Dessutom finns den motsatta funktionen, du kan ladda upp en temafil (i XML-format) och få mallarna och stilmallarna importerade automatiskt till din CMSMS-installation.</p>
<h3>Support</h3>
<p>För den här modulen ingår inte kommersiell support. Men det finns flera sätt att få hjälp:</p>
<ul>
<li>För senaste versionen av den här modulen, Vanliga Frågor, eller lämna buggrapport eller köpa kommersiell support, besök SjG\\\'s
modulhemsida på <a href="<p>För den här modulen ingår inte kommersiell support. Men det finns flera sätt att få hjälp:</p>
<ul>
<li>För senaste versionen av den här modulen, Vanliga Frågor, eller lämna buggrapport eller köpa kommersiell support, besök modulens hemsida på <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Mer diskussion om den här modulen kan hittas på <a href="http://forum.cmsmadesimple.org">CMS Made Simple\\\'s forum</a>.</li>
<li>Författaren, calguy1000, hittas ofta på <a href="irc://irc.freenode.net/#cms">IRC-kanalen CMS</a>.</li>
<li>Slutligen, du kan ha viss framgång genom att skicka e-post direkt till författaren.</li>  
</ul>
<p>Enligt GPL erbjuds den här mjukvaran som den är. Vänligen läs licenstexten nedan.</p>.

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com">&lt;calguy1000@hotmail.com&gt;</a>. Alla rättigheter reserverade.</p>
<p>Den här modulen är utgiven under <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Du måste godkänna denna licens innan du använder modulen.</p>
';
?>
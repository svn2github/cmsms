<?php
$lang['error_uploadpermissions'] = '<strong>VAROITUS:</strong> Sinulla ei ole oikeuksia ladata tai asentaa teemoja. T&auml;m&auml; voi johtua uploads- tai modules-alihakemistojen oikeuksista tai palvelimellasi voi olla Safe mode p&auml;&auml;ll&auml;.';
$lang['error_nomenumanager'] = 'MenuManager-moduulia ei l&ouml;ydy';
$lang['active'] = 'Aktiivinen';
$lang['default'] = 'Oletus';
$lang['prompt_themename'] = 'Vie teema nimell&auml;:';
$lang['info_themename'] = 'T&auml;m&auml; kentt&auml; m&auml;&auml;r&auml;&auml; tulostettavan teeman nimen, riippumatta sy&ouml;tetyn teeman nimest&auml;';
$lang['error_editingproblem'] = 'Ongelma t&auml;h&auml;n teemaan liittyvien tiedostojen siivouksessa ja muuttamisessa.';
$lang['error_problemsavingincludes'] = 'Ongelma t&auml;h&auml;n teemaan koodattujen tiedostojen tallentamisessa.';
$lang['error_nofilesuploaded'] = 'Tiedostoja ei ladattu. Varmista, ett&auml; form-tagin enctype on multipart/form-data ja ett&auml; ladattavaa tiedostoa etsit&auml;&auml;n oikeasta kent&auml;st&auml;. ';
$lang['error_templateexists'] = 'Pohja nimell&auml; &quot;%s&quot; on jo olemassa';
$lang['error_stylesheetexists'] = 'Tyylitiedosto nimell&auml;&quot;%s&quot; on jo olemassa';
$lang['error_nostylesheets'] = 'Tyylitiedostoja ei havaittu t&auml;ss&auml; teemassa';
$lang['error_couldnotcreatetemplate'] = 'Ei voitu luoda pohjam&auml;&auml;rityst&auml;';
$lang['error_couldnotassoccss'] = 'Ongelma tyylitiedostojen liitt&auml;misess&auml; t&auml;h&auml;n pohjaan';
$lang['error_nooutput'] = 'Ei tulostettavaa';
$lang['error_notemplate'] = 'Pohjaa ei l&ouml;ydetty';
$lang['error_dtdmismatch'] = 'DTD-versiot ovat yhteensopimattomat, tuonti ei onnistu';
$lang['import'] = 'Tuo';
$lang['upload'] = 'Lataa teema';
$lang['id'] = 'Id';
$lang['name'] = 'Nimi';
$lang['export'] = 'Vie';
$lang['submit'] = 'L&auml;het&auml;';
$lang['friendlyname'] = 'Teeman hallinta';
$lang['postinstall'] = 'Varmista, ett&auml; sinulla on &quot;Hallitse teemoja&quot; -oikeudet k&auml;ytt&auml;&auml;ksesi t&auml;t&auml; moduulia!';
$lang['uninstalled'] = 'Moduuli poistettu.';
$lang['installed'] = 'Moduulin versio %s asennettu.';
$lang['prefsupdated'] = 'Moduulin asetukset p&auml;ivitetty.';
$lang['accessdenied'] = 'K&auml;ytt&ouml; kielletty. Tarkista oikeutesi.';
$lang['error'] = 'Virhe!';
$lang['upgraded'] = 'Moduuli p&auml;ivitetty versioon %s.';
$lang['moddescription'] = 'Moduuli sis&auml;lt&ouml;teemojen (pohjien ja tyylisivujen) tuontiin ja vientiin.';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>Mit&auml; moduuli tekee?</h3>
<p>Moduuli mahdollistaa sivupohjien ja niihin liitettyjen tyylitiedostojen k&auml;yt&ouml;n &quot;teemoina&quot;, joita voi tuoda ja vied&auml;. Teemojen avulla voit jakaa sivustosi ulkon&auml;&ouml;n muiden cms-k&auml;ytt&auml;jien k&auml;ytt&ouml;&ouml;n.</p>
<h3>Kuinka moduulia k&auml;ytet&auml;&auml;n</h3>
<p>Moduulilla ei ole julkista k&auml;ytt&ouml;liittym&auml;&auml;, vain hallinnan k&auml;ytt&ouml;liittym&auml;. Siit&auml; voit valita aktiivisen sivupohjan ja painaa &quot;Vie&quot;. Sinulle l&auml;hetet&auml;&auml;n selaimen lataustoiminnolla XML-tiedosto, joka sis&auml;lt&auml;&auml; sivupohjan ja siihen liitetyt tyylitiedostot.</p>
<h3>K&auml;ytt&ouml;oikeudet</h3>
<p>Teemanhallinnan k&auml;ytt&ouml;oikeudet ovat tiukat tietokannan eheyden varmistamiseksi. &quot;Hallitse teemoja&quot; -oikeus vaaditaan teemojen viemiseksi ja seuraavat kolme oikeutta vaaditaan teemojen tuomiseksi: &quot;Lis&auml;&auml; tyylitiedostoja&quot;, &quot;Lis&auml;&auml; tyylitiedostojen liitoksia&quot; sek&auml; &quot;Lis&auml;&auml; pohjia&quot;.</p>
<p>Voit ladata (upload) teematiedoston xml-muodossa, jolloin tiedostossa olevat pohjat ja tyylitiedostot tuodaan automaattisesti cmsms-asennukseesi.</p>
<h3>Tuki</h3>
<p>T&auml;h&auml;n moduuliin ei kuulu kaupallista tukea. Muutamista paikoista voit kuitenkin saada apua:</p>
<ul>
<li>Uusin versio, FAQ ja bugiraportin j&auml;tt&auml;minen sek&auml; kaupallisen tuen ostomahdollisuus ovat moduulin kotisivulla osoitteessa <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Keskustelua moduulista on <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple -foorumilla</a>.</li>
<li>Moduulin tekij&auml;, calguy1000 on usein tavoitettavissa<a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC-kanavalla</a>.</li>
<li>Voit my&ouml;s saada jonkin verran apua moduulin tekij&auml;lt&auml; s&auml;hk&ouml;postitse.</li>  
</ul>
<p>GPL:n mukaisesti, t&auml;m&auml; ohjelma toimitetaan sellaisena kuin se on (as-is). T&auml;ydellinen vastuuvapauslauseke on lisenssiss&auml;.</p>

<h3>Copyright ja lisenssi</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a> All Rights Are Reserved.</p>
<p>T&auml;m&auml; moduuli on julkaistu<a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> -lisenssill&auml;. Lisenssin ehdot on hyv&auml;ksytt&auml;v&auml; ennen moduulin k&auml;ytt&ouml;&auml;.</p>
';
?>
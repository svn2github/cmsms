<?php
$lang['prompt_settings'] = 'Asetukset';
$lang['prompt_otheroptions'] = 'Muut valinnat';
$lang['reset'] = 'Palauta oletukset';
$lang['error_minimumrepository'] = 'Varaston versio ei ole yhteensopiva t&auml;m&auml;n moduulien hallinnan kanssa';
$lang['prompt_reseturl'] = 'Palauta URL oletusarvoonsa';
$lang['prompt_resetcache'] = 'Tyhjenn&auml; varastodatan paikallinen v&auml;limuisti';
$lang['prompt_dl_chunksize'] = 'Ladattavan palan koko (Kb)';
$lang['text_dl_chunksize'] = 'Palvelimelta yhdess&auml; palassa ladattavan datan maksimim&auml;&auml;r&auml; (moduulia asennettaessa)';
$lang['error_nofilesize'] = 'Tiedostokoko-parametria ei annettu';
$lang['error_nofilename'] = 'Tiedostonimi-parametria ei annettu';
$lang['error_checksum'] = 'Virhe tarkistussummassa. Tiedosto on luultavasti vioittunut, joko asennusl&auml;hteeseen ladattaessa tai matkalla koneeseesi.';
$lang['cantdownload'] = 'Ei voi ladata';
$lang['download'] = 'Lataa';
$lang['error_moduleinstallfailed'] = 'Moduulin asennus ep&auml;onnistui';
$lang['error_connectnomodules'] = 'Vaikka yhteys m&auml;&auml;ritettyyn asennusl&auml;hteeseen luotiin onnistuneesti, n&auml;ytt&auml;&auml; silt&auml; ettei t&auml;m&auml; l&auml;hde jaa viel&auml; ollenkaan moduuleja.';
$lang['submit'] = 'L&auml;het&auml;';
$lang['text_repository_url'] = 'URL pit&auml;isi olla muotoa
http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Moduulivaraston URL:';
$lang['availmodules'] = 'Saatavilla olevat moduulit';
$lang['preferences'] = 'Asetukset';
$lang['repositorycount'] = 'Asennusl&auml;hteess&auml; saatavilla olevat moduulit';
$lang['instcount'] = 'Asennetut moduulit';
$lang['availablemodules'] = 'Asennusl&auml;hteest&auml; saatavilla olevien moduulien tila';
$lang['helptxt'] = 'Ohje';
$lang['abouttxt'] = 'Tietoja';
$lang['xmltext'] = 'XML-tiedosto';
$lang['nametext'] = 'Moduulin nimi';
$lang['vertext'] = 'Versio';
$lang['sizetext'] = 'Koko (kilotavuja)';
$lang['statustext'] = 'Tila/Toiminta';
$lang['uptodate'] = 'Asennettu';
$lang['install'] = 'Asenna';
$lang['newerversion'] = 'Uudempi versio asennettu';
$lang['upgrade'] = 'P&auml;ivit&auml;';
$lang['error_nosoapconnect'] = 'Ei voitu yhdist&auml;&auml; SOAP-palvelimelle';
$lang['error_soaperror'] = 'SOAP-ongelma';
$lang['error_norepositoryurl'] = 'Moduulien asennusl&auml;hteen osoitetta ei ole annettu';
$lang['friendlyname'] = 'Moduulien hallinta';
$lang['postinstall'] = 'Asennuksen j&auml;lkeinen viesti, (esim., Varmista, ett&auml; sinulla on  &quot;&quot;  -oikeudet k&auml;ytt&auml;&auml;ksesi t&auml;t&auml; moduulia!)';
$lang['postuninstall'] = 'Poiston j&auml;lkeinen viesti, esim. &quot;Moduuli poistettu.&quot;';
$lang['really_uninstall'] = 'Haluatko varmasti poistaa t&auml;m&auml;n moduulin?';
$lang['uninstalled'] = 'Moduuli poistettu.';
$lang['installed'] = 'Moduulin versio %s asennettu.';
$lang['upgraded'] = 'Moduuli p&auml;ivitetty versioon %s.';
$lang['moddescription'] = 'T&auml;m&auml; moduuli on asiakasohjelma ModuleRepositorylle ja t&auml;m&auml;n avulla on mahdollista esikatsella ja asentaa moduuleja et&auml;palvelimilta ilman ftp:t&auml; tai pakkausten purkamista. Moduulien XML-tiedostot ladataan k&auml;ytt&auml;en SOAPia, niiden eheys tarkistetaan ja ne puretaan automaattisesti.';
$lang['error'] = 'Virhe!';
$lang['admindescription'] = 'Ty&ouml;kalu moduulien noutamiseksi ja asentamiseksi et&auml;palvelimilta.';
$lang['accessdenied'] = 'P&auml;&auml;sy estetty. Tarkasta oikeudet.';
$lang['changelog'] = '<ul><li>Versio 1.0. 10. Tammikuuta 2006. Ensimm&auml;inen julkaisu.</li></ul>';
$lang['help'] = '<h3>Mit&auml; t&auml;m&auml; moduuli tekee?</h3>
<p>T&auml;m&auml; moduuli on asiakasohjelma ModuleRepository:lle ja t&auml;m&auml;n avulla on mahdollista esikatsella ja asentaa moduuleja et&auml;palvelimilta ilman ftp:t&auml; tai pakkausten purkamista. Moduulien XML-tiedostot ladataan k&auml;ytt&auml;en SOAP:ia, niiden eheys tarkistetaan ja ne puretaan automaattisesti.</p>
<h3>Miten t&auml;t&auml; k&auml;ytet&auml;&auml;n</h3>
<p>K&auml;ytt&auml;&auml;ksesi t&auml;t&auml; moduulia, sinulla t&auml;ytyy olla &#039;Muokkaa moduuleja&#039; -oikeus sek&auml; t&auml;ydellinen osoite johonkin moduulien asennusl&auml;hteeseen (Module Repository). Voit m&auml;&auml;ritt&auml;&auml; osoitteen &#039;Sivuston hallinta&#039; --> &#039;Yleiset asetukset&#039; -sivulla.</p><br/>
<p>T&auml;m&auml;n moduulin k&auml;ytt&ouml;liittym&auml; l&ouml;ytyy &#039;Laajennokset&#039;-valikon kautta. Kun valitset t&auml;m&auml;n moduulin, asennusl&auml;hteelt&auml; pyydet&auml;&auml;n automaattisesti lista siell&auml; saatavilla olevista moduuleista. Saatua listaa verrataan asennettujen moduulien listaan ja n&auml;ytet&auml;&auml;n koostesivu. Siit&auml; voi katsoa kuvauksia, ohjeita ja tietoja moduuleista ilman niiden asentamist sek&auml; asentaa tai p&auml;ivitt&auml;&auml; moduuleita.</p>
<h3>Tuki</h3>
<p>GPL:n mukaisesti, t&auml;m&auml; ohjelma toimitetaan sellaisena kuin se on (as-is). T&auml;ydellinen vastuuvapauslauseke on lisenssiss&auml;.</p>
<h3>Copyright ja lisenssi</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>T&auml;m&auml; moduuli on julkaistu <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> -lisenssill&auml;. Lisenssin ehdot on hyv&auml;ksytt&auml;v&auml; ennen moduulin k&auml;ytt&ouml;&auml;.</p>';
$lang['utma'] = '156861353.272248860.1163715051.1165856006.1166695479.8';
$lang['utmz'] = '156861353.1164899042.4.2.utmccn=(referral)|utmcsr=en.wikipedia.org|utmcct=/wiki/CMS_Made_Simple|utmcmd=referral';
$lang['utmc'] = '156861353';
?>
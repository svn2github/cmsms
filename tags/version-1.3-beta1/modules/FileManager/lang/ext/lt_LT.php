<?php
$lang['friendlyname'] = 'Bylų valdymas/siuntimas';
$lang['permission'] = 'Naudojimasis Bylų valdymo moduliu';
$lang['permissionadvanced'] = 'Sudėtingesnis naudojimasis Bylų valdymo moduliu';
$lang['moddescription'] = 'Bylų ir direktorijų tvarkymas, bylu atsiuntimas';
$lang['installed'] = 'FileManager versija %s įdiegta';
$lang['postinstall'] = 'FileManager modulis įdiegtas';
$lang['uninstalled'] = 'FileManager modulis pa&scaron;alintas';
$lang['really_uninstall'] = 'Ar jūs tikrai norite pa&scaron;alinti FileManager modulį ?';
$lang['upgraded'] = 'Atnaujinta į versija %s.';
$lang['fileview'] = 'Bylų peržiūra';
$lang['imageview'] = 'Paveikslėlių peržiūra';
$lang['switchtoimageview'] = 'Perjungti į paveikslėlių peržiūrą';
$lang['switchtofileview'] = 'Perjungti į bylų peržiūra';
$lang['settings'] = 'Nustatymai';
$lang['filename'] = 'Pavadinimas';
$lang['fileinfo'] = 'informacija';
$lang['filesize'] = 'Dydis';
$lang['filedate'] = 'Data';
$lang['actions'] = 'Veiksmai';
$lang['delete'] = '&Scaron;alinti';
$lang['bytes'] = 'baitai';
$lang['kb'] = ' kb';
$lang['mb'] = ' mb';
$lang['files'] = 'bylos';
$lang['bytesin'] = 'baitai';
$lang['file'] = 'bylos';
$lang['fileno'] = 'Bylos nr.';
$lang['subdirs'] = 'subdirektorijos';
$lang['subdir'] = 'subdirektorija';
$lang['and'] = 'ir';
$lang['confirmsingledelete'] = 'Ar jūs tikras tuo?';
$lang['confirmsingledirdelete'] = 'Ar jūs tikrai norite i&scaron;trinti direktoriją?';
$lang['dirtreedeletesuccess'] = 'Direktorija su visu turiniu i&scaron;trinta.';
$lang['dirtreedeletefail'] = 'Klaida trinant direktoriją. Bet turinys gali būt trinamas.
';
$lang['singlefiledeletesuccess'] = 'Byla sėkmingai i&scaron;trinta';
$lang['filedeletesuccess'] = 'sėkmingai i&scaron;trinta';
$lang['singlefiledeletefail'] = 'Klaida trinant bylą';
$lang['filedeletefail'] = 'nei&scaron;trinta dėl klaidos';
$lang['singledirdeletesuccess'] = 'Direktorija sėkmingai i&scaron;trinta';
$lang['singledirdeletefail'] = 'Klaida trinant direktorija (ar ji tusčia?)';
$lang['deleteselected'] = 'I&scaron;trinti pasirinktas bylas';
$lang['confirmselected'] = 'Ar jūs tikras tuo?';
$lang['go'] = 'Pirmyn...';
$lang['dirnotemptyconfirm'] = '&Scaron;i direktorija nėra tusčia. Ar jūs tikrai norite i&scaron;trinti ją su visu turiniu?
This dir is not empty. Do you really want to delete it and all content, including subdirs?';
$lang['dirtreedeletecancelled'] = 'Direktorijos trinymas at&scaron;auktas';
$lang['imsure'] = 'A&scaron; tikras';
$lang['cancel'] = 'At&scaron;aukti';
$lang['uploadnewfile'] = 'Siųsti naują (as) bylą (as):';
$lang['unpackafterupload'] = 'Bandyti i&scaron;pakuoti bylą po atsiuntimo (tik tgz ir dauguma zip archyvų)?';
$lang['uploadsuccess'] = 'sėkmingai atsiųsta';
$lang['uploadfail'] = 'nesėkmingai atsiųsta';
$lang['unpacksuccess'] = 'sėkmingai i&scaron;pakuota';
$lang['unpackfail'] = 'nepavyko dėl klaidų: ';
$lang['packfileopenfail'] = 'Neįmanoma atidaryti archyvo i&scaron;pakavimui (netinkamas formatas)';
$lang['packfilewritefail'] = 'Neįmanoma atidaryti bylų &amp;s ra&scaron;ymui';
$lang['newdirname'] = 'Sukurti direktoriją:';
$lang['newdirsuccess'] = 'Direktorija sukurta sėkmingai';
$lang['newdirfail'] = 'Klaida kuriant direktoriją';
$lang['filedateformat'] = 'm/d/Y H:m:s';
$lang['iconsize'] = 'Ikonų dydis';
$lang['smallicons'] = 'Mažos ikonos';
$lang['largeicons'] = 'Didelės ikonos';
$lang['uploadfilesto'] = 'Siunčiamos bylos į:';
$lang['uploadview'] = 'Siųsti bylas';
$lang['uploadboxes'] = 'Siunčiamų bylų skaičius';
$lang['nothinguploaded'] = 'Nenusiųsta';
$lang['unsupportedarchive'] = 'Netinkamas archyvo formatas';
$lang['uploadmethod'] = 'Siuntimo metodas';
$lang['uploaderstandard'] = 'Standartinis html input-method (leidžia i&scaron;pakavimą)';
$lang['uploaderdom'] = 'Fancy DOM-controlled form';
$lang['uploaderpostlet'] = 'Postlet, Java-based, allows multiple file-selection';
$lang['enableadvanced'] = 'Įjungti sudėtingesnį variantą? (jei leidžiama)';
$lang['advancedhelp'] = 'Lets you gain access to whole cmsms filesystem, not just /upload/ (if allowed)';
$lang['showhiddenfiles'] = 'Rodyti paslėptas bylas';
$lang['settingsconfirmsingledelete'] = 'Patvirtinti trynimą vienos bylos?';
$lang['settingssaved'] = 'Nustatymai i&scaron;saugoti';
$lang['help'] = '		<h3>What does this do?</h3>
		<p>This module provides file management functions, eventually and hopefully replacing the rather aged builtin file management</p>
		<h3>How do I use it?</h3>
		<p>Select it from the content-menu from in the admin. While the old filemanager is still in there you should select the one furthest down in the menu.</p>';
$lang['changelog'] = '		<ul>
		  <li><b>Version 0.1.4</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>

		  <li><b>Version 0.1.3</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Added Java-applet multifile upload method</li>
		  <li>Implemented deletion of multiple files</li>
		  <li>Fixed select all checkbox</li>

		  <li><b>Version 0.1.2</b></li>
		  <li>Added recursive deletion of dirs</li>

		  <li><b>Version 0.1.1</b></li>
		  <li>Added support for multiple uploads, and support for unpacking tar.gz-files</li>
		  <li>Rewrote to use more of the module-api-functions</li>
		  <li><b>Version 0.1.0</b></li>
		  <li>First version which work properly and equals the builtin filemanager which is intends to render obsolete</li>
		</ul>';
$lang['utma'] = '156861353.1609076997.1157010974.1159276517.1159886357.3';
$lang['utmz'] = '156861353.1159886357.3.3.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,7119.0.html|utmcmd=referral';
?>
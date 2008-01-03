<?php
$lang['friendlyname'] = 'File Manager';
$lang['permission'] = 'Uso del modulo File Manager';
$lang['permissionadvanced'] = 'Uso avanzato del modulo File Manager';
$lang['moddescription'] = 'Associazione di files e directory nella sezione upload di cmsms';
$lang['installed'] = 'Versione del FileManager %s installata';
$lang['postinstall'] = 'Il modulo FileManager era installato';
$lang['uninstalled'] = 'Modulo FileManager disinstallato';
$lang['really_uninstall'] = 'Siete sicuri di volere disinstallare il modulo FileManager?';
$lang['upgraded'] = 'Il modulo FileManager &egrave; stato aggiornato alla versione %s';
$lang['fileview'] = 'Visualizza file';
$lang['switchtofileview'] = 'Passa alla visualizzazione file';
$lang['settings'] = 'Impostazioni';
$lang['savesettings'] = 'Salva Impostazioni';
$lang['filename'] = 'Nome file';
$lang['fileinfo'] = 'Info file';
$lang['fileowner'] = 'Possessore del file';
$lang['fileperms'] = 'Permessi';
$lang['filesize'] = 'Dimensione';
$lang['filedate'] = 'Data';
$lang['actions'] = 'Azioni';
$lang['delete'] = 'Elimina';
$lang['notwritable'] = 'Non scrivibile';
$lang['filetoobig'] = 'troppo grande. Upload cancellato.';
$lang['bytes'] = 'bytes';
$lang['kb'] = 'KB';
$lang['mb'] = 'MB';
$lang['files'] = 'files';
$lang['bytesin'] = 'bytes in';
$lang['file'] = 'file';
$lang['fileno'] = 'File numero';
$lang['subdirs'] = 'sottodirectory';
$lang['subdir'] = 'sottodirectory';
$lang['and'] = 'e';
$lang['confirmsingledelete'] = 'Siete sicuri?';
$lang['confirmsingledirdelete'] = 'Siete sicuri di volere cancellare questa directory?';
$lang['dirtreedeletesuccess'] = 'La directory e tutto il suo contenuto &egrave; stata cancellata con successo.';
$lang['dirtreedeletefail'] = 'C&#039;&egrave; stato un errore durante l&#039;eliminazione di questa directory. Tuttavia una parte del contenuto potrebbe essere stata cancellata.';
$lang['singlefiledeletesuccess'] = 'Il file &egrave; stato eliminato con successo';
$lang['filedeletesuccess'] = '&egrave; stato eliminato con successo';
$lang['singlefiledeletefail'] = 'Si &egrave; verificato un errore durante l&#039;eliminazione del file';
$lang['filedeletefail'] = 'non &egrave; stato eliminato a causa di un errore';
$lang['singledirdeletesuccess'] = 'La directory &egrave; stata eliminata con successo';
$lang['singledirdeletefail'] = 'Si &egrave; verificato un errore cercando di eliminare la directory (&egrave; vuota?)';
$lang['deleteselected'] = 'Elimina i file selezionati';
$lang['confirmselected'] = 'Siete sicuri?';
$lang['dirnotemptyconfirm'] = 'La directory non &egrave; vuota. Volete veramente eliminarla cancellando il suo contenuto, comprese le sottodirectory?';
$lang['dirtreedeletecancelled'] = 'Eliminazione della directory annnullata';
$lang['imsure'] = 'Sono sicuro';
$lang['cancel'] = 'Annulla';
$lang['ok'] = 'OK';
$lang['uploadnewfile'] = 'Carica nuovo/i file:';
$lang['unpackafterupload'] = 'Cerca di decomprimere dopo il caricamento (solo file di tipo tgz e zip)?';
$lang['uploadsuccess'] = 'Il file &egrave; stato caricato con successo';
$lang['uploadfail'] = 'Si &egrave; verificato un errore durante il caricamento del file';
$lang['unpacksuccess'] = 'Il file &egrave; stato decompresso con successo';
$lang['unpackfail'] = 'Si &egrave; verificato un errore durante la decompressione del file:';
$lang['packfileopenfail'] = 'Non posso aprire il file compresso per la decompressione (formato non supportato?)';
$lang['packfilewritefail'] = 'Non posso aprire il file %s per la scrittura';
$lang['currentpath'] = 'Path corrente:';
$lang['newdirname'] = 'Crea nuova directory:';
$lang['newdirsuccess'] = 'La directory &egrave; stata creata con successo';
$lang['newdirfail'] = 'Si &egrave; verificato un errore durante la creazione della directory';
$lang['filedateformat'] = 'm/g/Y H:m:s';
$lang['iconsize'] = 'Dimensione Icona';
$lang['smallicons'] = 'Icone Piccole';
$lang['largeicons'] = 'Icone Grandi';
$lang['uploadfilesto'] = 'Carica i files in:';
$lang['uploadview'] = 'Carica files';
$lang['uploadboxes'] = 'Numero di blocchi di caricamento';
$lang['nothinguploaded'] = 'Non &egrave; stato caricato nulla';
$lang['unsupportedarchive'] = 'Formato di archivio non supportato';
$lang['uploadmethod'] = 'Metodo di caricamento';
$lang['uploaderstandard'] = 'Metodo di input html standard (permette la decompressione)';
$lang['uploaderpostlet'] = 'Postlet, Java-based, permette selezione multipla dei file';
$lang['uploaderswf'] = 'Flash-uploader';
$lang['enableadvanced'] = 'Abilita moddalit&agrave; avanzata? (se consentito)';
$lang['advancedhelp'] = 'Permette di ottenere accesso a tutto il filesystem di CMSMS, non solo della cartella /upload/ (se consentito)';
$lang['showhiddenfileshelp'] = 'Effettivo solo abilitando il modo avanzato';
$lang['showhiddenfiles'] = 'Mostra file nascosti';
$lang['settingsconfirmsingledelete'] = 'Conferma l&#039;eliminazione di un file singolo?';
$lang['settingssaved'] = 'Impostazioni salvate';
$lang['help'] = '		<h3>Cosa fa?</h3>
		<p>Fornisce funzionalit&agrave; di gestione dei file, eventualmente e presumibilmente in sostituzione all&#039;obsoleta gestione file nativa</p>
		<h3>Come si usa?</h3>
		<p>Selezionalo dal menu Contenuto nella sezione di amministrazione. Se il precedente File Manager si trova ancora l&igrave;, seleziona quello pi&ugrave; in basso nel menu.</p>';
$lang['changelog'] = '		<ul>
		  <li><b>Version 0.2.2</b></li>
      <li>Changes hardcoded paths to admin and uploads to honor settings in config.php</li>
                        <li>A few cosmetic fixes</li>
		  
			<li><b>Version 0.2.1</b></li>
                        <li>Changed to use cms_move_uploaded_file.</p>
                        <li>Now Require CMS 1.2.1</p>

			<li><b>Version 0.2.0</b></li>
			<li>Everything touched and rewritten for inclusion in version 1.2 of CMSms</li>
			<li>Checked for noticed</li>
			<li>Postlet upload fixed and communication from it switched to session-vars</li>

		  <li><b>Version 0.1.4</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Fixed some usage of short tags</li>

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
$lang['utma'] = '156861353.1807151640.1182960456.1198104571.1198245854.423';
$lang['utmz'] = '156861353.1198089657.421.7.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,14615.0/topicseen.html|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>
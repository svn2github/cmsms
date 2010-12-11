<?php
$lang['admin']['listtemplates_pagelimit'] = 'Number of rows per page when viewing templates';
$lang['admin']['liststylesheets_pagelimit'] = 'Number of rows per page when viewing stylesheets';
$lang['admin']['listgcbs_pagelimit'] = 'Number of rows per page when viewing Global Content Blocks';
$lang['admin']['insecure'] = 'Insecure (HTTP)';
$lang['admin']['secure'] = 'Secure (HTTPS)';
$lang['admin']['secure_page'] = 'Χρήση HTTPS για αυτή την σελίδα';
$lang['admin']['thumbnail_width'] = 'Thumbnail Width';
$lang['admin']['thumbnail_height'] = 'Thumbnail Height';
$lang['admin']['E_STRICT'] = 'Is E_STRICT disabled in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is enabled in the error_reporting';
$lang['admin']['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED disabled in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED is enabled';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'Error deleting content (either this page has children or is the default content)';
$lang['admin']['invalidemail'] = 'Η διεύθυνση email δεν είναι σωστή';
$lang['admin']['info_deletepages'] = 'Note: due to permission restrictions, some of the pages you selected for deletion may not be listed below';
$lang['admin']['info_pagealias'] = 'Specify a unique alias for this page.';
$lang['admin']['info_autoalias'] = 'If this field is empty, an alias will be created automatically.';
$lang['admin']['invalidparent'] = 'You must select a parent page (contact your administrator if you do not see this option).';
$lang['admin']['forgotpwprompt'] = 'Enter your admin username.  An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the "Manage All Content" permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Basic Properties';
$lang['admin']['no_permission'] = 'You have not permission to perform that function.';
$lang['admin']['bulk_success'] = 'Bulk operation was successfully updated.';
$lang['admin']['no_bulk_performed'] = 'No bulk operation performed.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Exclude these Addresses from Sitedown Messages';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Advanced Setup';
$lang['admin']['handle_404'] = 'Custom 404 Handling';
$lang['admin']['sitedown_settings'] = 'Sitedown Settings';
$lang['admin']['general_settings'] = 'General Settings';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key="extra1"}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'Disable WYSIWYG editor on this page (regardless of template or user settings)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'A page link cannot list another page link as its destination';
$lang['admin']['destinationnotfound'] = 'The selected page could not be found or is invalid';
$lang['admin']['help_function_dump'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Αυτό το tag μπορεί να χρησιμοποιηθεί για τη μεταφορά των περιεχομένων οποιασδήποτε μεταβλητής smarty σε ένα πιο αναγνώσιμο μορφότυπο. Αυτό είναι χρήσιμο για την αντιμετώπιση σφαλμάτων και την επεξεργασία προτύπων προκειμένου να γνωρίζετε το μορφότυπο και τον τύπο των διαθέσιμων δεδομένων.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε το tag στο πρότυπο ως εξής <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>Ποιες παράμετροι απαιτούνται</h3>
<ul>
<li><strong>item (απαιτείται)</strong> - Η μεταβλητή smarty για τη μεταφορά των δεδομένων.</li>
<li>maxlevel - Ο μέγιστος αριθμός επιπέδων αναδρομής (εφαρμόζεται εφόσον παρέχεται αναδρομή.  Η προεπιλεγμένη τιμή για την παράμετρο αυτή είναι 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL error in %s';
$lang['admin']['image'] = 'Image';
$lang['admin']['thumbnail'] = 'Μικροφωτογραφία';
$lang['admin']['searchable'] = 'Μπορούν να πραγματοποιηθούν αναζητήσεις εντός του περιεχομένου αυτής της σελίδας';
$lang['admin']['help_function_content_image'] = '<h3>Tί κάνει αυτό;</h3>
<p>Αυτό το πρόσθετο (plugin) επιτρέπει στους σχεδιαστές προτύπων να ειδοποιούν τους χρήστες ώστε να επιλέγουν ένα αρχείο εικόνας όταν επεξεργάζονται το περιεχόμενο μιας σελίδας. Έχει την ίδια συμπεριφορά με ένα πρόσθετο περιεχομένου, για επιπλέον μπλοκ περιεχομένου.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε απλώς το tag στη σελίδα ροτύπου σας ως εξής: <code>{content_image block=\'image1\'}</code>.</p>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<ul>
  <li><strong>(απαιτείται)</strong></em> block - Το όνομα για αυτό το πρόσθετο μπλοκ περιεχομένου.
  <p>Παράδειγμα:</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>

  <li><em>(προαιρετικά)</em> label - Μια ετικέτα ή μια ειδοποίηση για αυτό το μπλοκ περιεχομένου στη σελίδα επεξεργασία περιεχομένου.  Αν δεν οριστεί τότε θα χρησιμοποιηθεί το όνομα του μπλοκ.</li>
 
  <li><em>(προαιρετικά)</em> dir - Το όνομα καταλόγου (αντίστοιχο με τον κατάλογο αποστολών από τον οποίο γίνεται η επιλογή αρχείων εικόνας. Αν δεν οριστεί τότε θα χρησιμοποιηθεί ο κατάλογος αποστολών.
  <p>Παράδειγμα: χρησιμοποιήστε εικόνες από τον κατάλογο αποστολών/εικόνων.</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre><br/>
  </li>

  <li><em>(προαιρετικά)</em> class - Το όνομα κατηγορίας css που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li>

  <li><em>(προαιρετικά)</em> id - Το όνομα id που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li> 

  <li><em>(προαιρετικά)</em> name - Το όνομα του tag που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li> 

  <li><em>(προαιρετικά)</em> πλάτος - Το επιθυμητό πλάτος της εικόνας.</li>

  <li><em>(optional)</em> ύψος - Το επιθυμητό ύψος της εικόνας.</li>

  <li><em>(optional)</em> ενναλ. - Ενναλακτικό κείμενο αν η εικόνα δεν μπορεί να εντοπιστεί.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Ένα έγκυρο όνομα UDT που αρχίζει με γράμμα ή κάτω παύλα και ακολουθούν γράμματα, αριθμοί ή κάτω παύλες ανεξαρτήτως αριθμού.';
$lang['admin']['errorupdatetemplateallpages'] = 'Πρότυπο όχι ενεργό';
$lang['admin']['hidefrommenu'] = 'Απόκρυψη από μενού';
$lang['admin']['settemplate'] = 'Ορισμός προτύπου';
$lang['admin']['text_settemplate'] = 'Θέση επιλεγμένων σελίδων σε άλλο πρότυπο';
$lang['admin']['cachable'] = 'Αποθηκεύσιμο στην μνήμη';
$lang['admin']['noncachable'] = 'Μη Αποθηκεύσιμο στην μνήμη';
$lang['admin']['copy_from'] = 'Αντιγραφή από';
$lang['admin']['copy_to'] = 'Αντιγραφή σε';
$lang['admin']['copycontent'] = 'Αντιγραφή στοιχείου Περιεχομένου';
$lang['admin']['md5_function'] = 'λειτουργία md5';
$lang['admin']['tempnam_function'] = 'λειτουργία tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
$lang['admin']['xml_function'] = 'Basic XML (expat) support';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can to have problems in save templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can to have problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Αποστολή αρχείων στο διακομιστή';
$lang['admin']['test_remote_url'] = 'Έλεγχος για απομακρυσμένο URL';
$lang['admin']['test_remote_url_failed'] = 'Ενδέχεται να μην είστε σε θέση να ανοίξετε ένα αρχείο σε έναν απομακρυσμένο διακομιστή web.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['admin']['search_string_find'] = 'Σύνδεση ok!';
$lang['admin']['connection_failed'] = 'Αποτυχία σύνδεσης!';
$lang['admin']['remote_response_ok'] = 'Απομακρυσμένη απάντηση: ok!';
$lang['admin']['remote_response_404'] = 'Απομακρυσμένη απάντηση: δεν εντοπίστηκε!';
$lang['admin']['remote_response_error'] = 'Απομακρυσμένη απάντηση: σφάλμα!';
$lang['admin']['notifications_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητες ειδοποιήσεις';
$lang['admin']['notification_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητη ειδοποίηση';
$lang['admin']['notifications'] = 'Ειδοποιήσεις';
$lang['admin']['dashboard'] = 'Προβολή πίνακα ελέγχου';
$lang['admin']['ignorenotificationsfrommodules'] = 'Να αγνοούνται οι ειδοποιήσεις από αυτά τα δομοστοιχεία';
$lang['admin']['admin_enablenotifications'] = 'Επιτρέπεται στους χρήστες να δουν τις ειδοποιήσεις<br/><em>(οι ειδοποιήσεις θα εμφανιστούν σε όλες τις σελίδες διαχείρισης)</em>';
$lang['admin']['enablenotifications'] = 'Ενεργοποίηση ειδοποιήσεων χρήστη στην ενότητα διαχείριση';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. Είναι πιο ασφαλές αν αλλάξετε την άδεια για ανάγνωση μόνο';
$lang['admin']['caution'] = 'Προσοχή';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'Κανένας έλεγχος λόγω διαδρομής OS';
$lang['admin']['unlimited'] = 'Απεριόριστα';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Λανθασμένο';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Δεν ήταν δυνατό το άθροισμα ελέγχου των αρχείων';
$lang['admin']['failure'] = 'Αποτυχία';
$lang['admin']['help_function_process_pagedata'] = '<h3>Τί κάνει αυτό;</h3>
<p>Αυτό το πρόσθετο (plugin) θα επεξεργαστεί τα δεδομένα στο μπλοκ "δεδομένα σελίδας" των σελίδων περιεχομένου μέσω smarty.  Σας δίνει τη δυνατότητα να ορίσετε συγκεκριμένα δεδομένα σελίδας σε smarty χωρίς αλλαγή του προτύπου για κάθε σελίδα.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<ol>
  <li>Εισάγετε ορισμένες τιμές smarty και άλλη λογική smarty στο πεδίο δεδομένα σελίδας ορισμένων σελίδων περιεχομένου σας.</li>
  <li>Εισάγετε την καρτέλα <code>{process_pagedata}</code> στο πάνω μέρος της σελίδας προτύπου σας.</li>
</ol>
<br/>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<p>Καμία αυτή τη φορά</p>';
$lang['admin']['page_metadata'] = 'Μεταδεδομένα Συγκεκριμένης Σελίδας';
$lang['admin']['pagedata_codeblock'] = 'Δεδομένα smarty ή λογική για τη συγκεκριμένη σελίδα';
$lang['admin']['error_uploadproblem'] = 'Παρουσιάστηκε σφάλμα κατά την αποστολή';
$lang['admin']['error_nofileuploaded'] = 'Δεν στάλθηκε κανένα αρχείο';
$lang['admin']['files_failed'] = 'Τα αρχεία δεν έκαναν έλεγχο md5sum';
$lang['admin']['files_not_found'] = 'Δεν βρέθηκαν αρχεία';
$lang['admin']['info_generate_cksum_file'] = 'H λειτουργία αυτή σας επιτρέπει να δημιουργήσετε ένα αρχείο αθροίσματος ελέγχου και να το αποθηκεύσετε στον τοπικό υπολογιστή σας για να γίνει αργότερα η επιβεβαίωση. Αυτό πρέπει να γίνει πριν την κύλιση της ιστοσελίδας ή/και μετά από τυχόν αναβαθμίσεις ή μεγάλες μετατροπές.';
$lang['admin']['info_validation'] = 'Η λειτουργία αυτή θα συγκρίνει τα αθροίσματα ελέγχου που εντοπίστηκαν στο αρχείο που στάλθηκε με τα αρχεία στην τρέχουσα εγκατάσταση. Μπορεί να βοηθήσει στον εντοπισμό προβλημάτων με τις αποστολές αρχείων ή ποσα αρχεία μετατράπηκαν σε περίπτωση που υπήρξε παράνομη πρόσβαση στο σύστημά σας. Ένα αρχείο αθροίσματος ελέγχου δημιουργείται για κάθε κυκλοφορία του CMS Made simple από την έκδοση 1.4.';
$lang['admin']['download_cksum_file'] = 'Λήψη αρχείου Αθροίσματος Ελέγχου';
$lang['admin']['perform_validation'] = 'Πραγματοποίηση Επιβεβαίωσης';
$lang['admin']['upload_cksum_file'] = 'Αποστολή αρχείου Αθροίσματος Ελέγχου';
$lang['admin']['checksumdescription'] = 'Επιβεβαίωση της ακεραιότητας των αρχείων CMS κάνοντας σύγκριση με γνωστά αθροίσματα ελέγχου';
$lang['admin']['system_verification'] = 'Επαλήθευση Συστήματος';
$lang['admin']['extra1'] = 'Επιπλέον Ιδιότητα Σελίδας 1';
$lang['admin']['extra2'] = 'Επιπλέον Ιδιότητα Σελίδας 2';
$lang['admin']['extra3'] = 'Επιπλέον Ιδιότητα Σελίδας 3';
$lang['admin']['start_upgrade_process'] = 'Έναρξη Διαδικασίας Αναβάθμισης';
$lang['admin']['warning_upgrade'] = '<em><strong>Ειδοποίηση:</strong></em> Το CMSMS απαιτεί αναβάθμιση.';
$lang['admin']['warning_upgrade_info1'] = 'Τώρα εκετελείτε έκδοση schema %s. και πρέπει να αναβαθμιστείτε στην έκδοση %s';
$lang['admin']['warning_upgrade_info2'] = 'Παρακαλούμε κάντε κλικ στον ακόλουθο σύνδεσμο: %s.';
$lang['admin']['warning_mail_settings'] = 'Δεν έχουν οριστεί οι παράμετροι των ρυθμίσεων mail σας.  Αυτό μπορεί να εμποδίσει την ικανότητα αποστολής μηνυμάτων email μέσω της ιστοσελίδας σας.  Πρέπει να πάτε στο <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a> και να ορίσετε τις παραμέτρους των ρυθμίσεων με την βοήθεια πληροφοριών που σας παρέχει ο εξυπηρετητής σας.';
$lang['admin']['view_page'] = 'Προβολή αυτής της σελίδας σε νέο παράθυρο';
$lang['admin']['off'] = 'Off';
$lang['admin']['on'] = 'On';
$lang['admin']['invalid_test'] = 'Μη έγκυρη δοκιμαστική τιμή παραμέτρου!';
$lang['admin']['copy_paste_forum'] = 'Προβολή Κειμένου Αναφοράς <em>(κατάλληλο για αντιγραφή σε μηνύματα που εμφανίζονται σε forum)</em>';
$lang['admin']['permission_information'] = 'Στοιχεία άδειας';
$lang['admin']['server_os'] = 'Λειτουργικό σύστημα εξυπηρετητή';
$lang['admin']['server_api'] = 'Εξυπηρετητής API';
$lang['admin']['server_software'] = 'Εξυπηρετητής Λογισμικού Software';
$lang['admin']['server_information'] = 'Στοιχεία διακομιστή';
$lang['admin']['session_save_path'] = 'Διαδρομή αποθήκευσης συνόδου';
$lang['admin']['max_execution_time'] = 'Μέγιστος χρόνος εκτέλεσης';
$lang['admin']['gd_version'] = 'Έκδοση GD';
$lang['admin']['upload_max_filesize'] = 'Μέγιστο μέγεθος αποστολής';
$lang['admin']['post_max_size'] = 'Μέγιστο μέγεθος μηνύματος';
$lang['admin']['memory_limit'] = 'Πραγματικός περιορισμός μνήμης PHP';
$lang['admin']['server_db_type'] = 'Βάση δεδομένωνων διακομιστή';
$lang['admin']['server_db_version'] = 'Έκδοση βάσης δεδομένων διακομιστή';
$lang['admin']['phpversion'] = 'Τρέχουσα έκδοση PHP';
$lang['admin']['safe_mode'] = 'Λειτουργία ασφαλείας PHP';
$lang['admin']['php_information'] = 'Στοιχεία PHP';
$lang['admin']['cms_install_information'] = 'Πληροφορίες εγκατάστασης CMS';
$lang['admin']['cms_version'] = 'Έκδοση CMS';
$lang['admin']['installed_modules'] = 'Εγκατεστημένα δομοστοιχεία';
$lang['admin']['config_information'] = 'Πληροφορίες ρύθμισης παραμέτρων';
$lang['admin']['systeminfo_copy_paste'] = 'Παρακαλούμε κάντε αντιγραφή και επικόλληση του επιλεγμένου κειμένου στο μήνυμά σας που εμφανίζεται σε forum';
$lang['admin']['help_systeminformation'] = 'Οι πληροφορίες που εμφανίζονται παρακάτω έχουν συλλεχθεί από διάφορες τοποθεσίες και έχουν συνοψιστεί εδώ ώστε να μπορείτε να εντοπίσετε εύκολα ορισμένα στοιχεία που απαιτούνται όταν προσπαθείτε να διαγνώσετε ένα πρόβλημα ή όταν ζητάτε βοήθεια για την εγκατάσταση του CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Πληροφορίες για το σύστημα';
$lang['admin']['systeminfodescription'] = 'Εμφανίζει διάφορες πληροφορίες για το σύστημά σας οι οποίες μπορεί να είναι χρήσιμες για τη διάγνωση προβλημάτων';
$lang['admin']['welcome_user'] = 'Καλωσήλθατε';
$lang['admin']['itsbeensincelogin'] = 'Ήταν %s από την τελευταία σας είσοδο';
$lang['admin']['days'] = 'ημέρες';
$lang['admin']['day'] = 'ημέρα';
$lang['admin']['hours'] = 'ώρες';
$lang['admin']['hour'] = 'ώρα';
$lang['admin']['minutes'] = 'λεπτά';
$lang['admin']['minute'] = 'λεπτό';
$lang['admin']['help_css_max_age'] = 'Η παράμετρος αυτή πρέπει να οριστεί σε σχετικά υψηλή τιμή για ιστοσελίδες στατιστικής και πρέπει να οριστεί σε 0 για ανάπτυξη ιστοσελίδων';
$lang['admin']['css_max_age'] = 'Μέγιστος χρόνος (δευτερόλεπτα) κατά τον οποίο τα stylesheets μπορούν να αποθηκευτούν προσωρινά στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
$lang['admin']['error'] = 'Σφάλμα';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> Είναι διαθέσιμη μια νέα έκδοση του CMS Made Simple. Παρακαλούμε ειδοποιήστε τον διαχειριστή σας.';
$lang['admin']['info_urlcheckversion'] = 'Αν αυτό το url είναι η λέξη "κανένα" τότε δεν θα γίνει κανένας έλεγχος.<br/>Το αποτέλεσμα θα είναι μια κενή στοιχειοσειρά σε μια προεπιλεγμένη URL που χρησιμοποιείται.';
$lang['admin']['urlcheckversion'] = 'Κάντε έλεγχο για νέες εκδόσεις CMS που χρησιμοποιούν αυτό το URL';
$lang['admin']['master_admintheme'] = 'Default Administration Theme (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = 'Διαχωριστής';
$lang['admin']['contenttype_sectionheader'] = 'Επικεφαλίδα ενότητας';
$lang['admin']['contenttype_link'] = 'Εξωτερικός σύνδεσμος';
$lang['admin']['contenttype_content'] = 'Περιεχόμενο';
$lang['admin']['contenttype_pagelink'] = 'Εσωτερικός σύνδεσμος σελίδας';
$lang['admin']['nogcbwysiwyg'] = 'Disallow WYSIWYG editors on global content blocks';
$lang['admin']['destination_page'] = 'Σελίδα προορισμού';
$lang['admin']['additional_params'] = 'Επιπλέον παράμετροι';
$lang['admin']['help_function_current_date'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει την τρέχουσα ημερομηνία και ώρα. Αν δεν δοθεί κανένα μορφότυπο τότε θα γίνει προεπιλογή ενός μορφότυπου παρόμοιου με το \'Ιαν 01, 2004\'.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα ως εξής: <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(optional)</em>μορφότυπο - Μορφότυπο Ημερομηνίας/Ώρας χρησιμοποιώντας παραμέτρους της συνάρτησης strftime του php.  Δείτε <a href="http://php.net/strftime" target="_blank">here</a> για μια λίστα παραμέτρων και για πληροφορίες.</li>
		<li><em>(optional)</em>ucword - Αν αληθεύει μετατρέψτε ξανά σε κεφαλαίο τον πρώτο χαρακτήρα κάθε λέξης.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Τί κάνει αυτό;</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα σας ως εξής: <code>{valid_xhtml}</code></p>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - Χρησιμοποιείται το URL για επιβεβαίωση, αν δεν δίνεται κανένα τότε χρησιμοποιείται το http://validator.w3.org/check/referer.</li>
	<li><em>(optional)</em> class       (στοιχειοσειρά)     - Αν οριστεί, τότε θα χρησιμοποιηθεί ως ιδιότητα κατηγορίας για το στοιχείο του συνδέσμου (a) </li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'valid XHTML 1.0 Transitional\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'Valid CSS 2.1\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει τον τίτλο της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα σας ως εξής: <code>{title}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p><em>(προαιρετικό)</em> ορισμός (στοιχειοσειρά) - Ορίστε τα αποτελέσματα σε μια smarty τιμή με αυτό το όνομα.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Λαμβάνει πληροφορίες για τα stylesheets από το σύστημα.  Κατά προεπιλογή, εντοπίζει όλα τα stylesheets που έχουν προσαρτηθεί στο τρέχον πρότυπο.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στην επικεφαλίδα της ενότητας του προτύπου/σελίδας σας ως εξής: <code>{stylesheet}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετικό)</em>name - Αντί να λάβει υπόψη όλα τα stylesheets για τη συγκεκριμένη σελίδα, λαμβάνεται υπόψη μόνο ένα προκαθορισμένο είτε έχει προσαρτηθεί στο τρέχον πρότυπο είτε όχι.</li>
		<li><em>(προαιρετικό)</em>media - Αν οριστεί ένα όνομα, τότε σας δίνεται η δυνατότητα να ορίσετε ένα μέσο διαφορετικού τύπου για το συγκεκριμένο stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Καθιστά το περιεχόμενο επεκτάσιμο και πτυσσόμενο. Ώς εξής:<br />
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Κάντε κλικ εδώ για περισσότερες πληροφορίες</a><span id="expand1" class="expand"><a name="help"></a> - Εδώ βρίσκονται όλες οι πληροφορίες που μπορεί να χρειαστείτε...</a></span></p>

	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς την ετικέτα στο πρότυπο/σελίδα σας ως εξής:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	Πρόκειται για όλα τα περιεχόμενα που θα δει ο χρήστης όταν κάνει κλικ στον παραπάνω τίτλο "Κάντε κλικ εδώ". Όταν ο χρήστης κάνει κλικ θα εμφανιστούν όλα τα περιεχόμενα που βρίσκονται μεταξύ του {startExpandCollapse} και του {stopExpandCollapse}.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Σημείωση: Αν σκοπεύετε να το χρησιμοποιήσετε πολλές φορές σε μια μονή σελίδα τότε κάθε tag startExpandCollapse πρέπει να έχει ένα μοναδικό id.</p>
	<h3>Τί γίνεται αν θέλω να αλλάξω την εμφάνιση του τίτλου;</h3>
	<p>Η εμφάνιση τίτλου μπορεί να αλλάξει μέσω css. Ο τίτλος περιβάλλεται από ένα div με  id που ορίζετε εσείς.</p>

	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>
	<i>To tag startExpandCollapse απαιτεί τις παρακάτω παραμέτρους</i><br />
	&nbsp; &nbsp;id - Ένα μοναδικό id για την ενότητα επέκταση/σύμπτυξη.<br />
	&nbsp; &nbsp;title - Το κείμενο που θα εμφανιστεί για την επέκταση/σύμπτυξη του περιεχομένου.<br />
	<i>Δεν απαιτούνται παράμετροι για το stopExpandCollapse</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Καθιστά το περιεχόμενο επεκτάσιμο και πτυσσόμενο. Ως εξής:<br />
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Κάντε κλικ εδώ γιαμ περισσότερες πληροφορίες</a><span id="expand1" class="expand"><a name="help"></a> - Εδώ βρίσκονται όλες οι πληροφορίες που μπορεί να χρειαστείτε...</a></span></p>

	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα σας ως εξής: <code>{startExpandCollapse id="name" title="Click Here"}</code>. Επίσης, πρέπει να χρησιμοποιήσετε το {stopExpandCollapse} στο τέλος του πτυσσόμενου περιεχομένου. Για παράδειγμα:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	Αυτά είναι όλα τα περιεχόμενα που θα δει ο χρήστης όταν κάνει κλικ στον παραπάνω τίτλο "Κάντε κλικ εδώ". Όταν ο χρήστης κάνει κλικ θα εμφανιστούν όλα τα περιεχόμενα που βρίσκονται μεταξύ του {startExpandCollapse} και του {stopExpandCollapse}.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Σημείωση: Αν σκοπεύετε να το χρησιμοποιήσετε πολλές φορές σε μια μονή σελίδα τότε κάθε tag startExpandCollapse πρέπει να έχει ένα μοναδικό id.</p>
	<h3>Τί γίνεται αν θέλω να αλλάξω την εμφάνιση του τίτλου;</h3>
	<p>Η εμφάνιση του τίτλου μπορεί να αλλάξει μέσω css. Ο τίτλος περιβάλλεται με ένα div με id που εσείς ορίζετε.</p>

	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>
	<i>Απαιτούνται οι παρακάτω παράμετροι για το startExpandCollapse</i><br />
	&nbsp; &nbsp;id - Ένα μοναδικό id για την ενότητα επέκταση/σύμπτυξη.<br />
	&nbsp; &nbsp;title - Το κείμενο που θα εμφανιστεί για την επέκταση/σύμπτυξη του περιεχομένου.<br />
	<i>Δεν απαιτούνται παράμετροι για το stopExpandCollapse</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we\'ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we\'ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client="pub-random#" ad_width="120" ad_height="600" ad_format="120x600_as"}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - "format" of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εμφανίζει το όνομα της ιστοσελίδας. Ορίζεται κατά την εγκατάσταση και μπορεί να μετατραπεί στην ενότητα Γενικές Ρυθμίσεις του ελέγχου διαχειριστή.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα ως εξής: <code>{sitename}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p><em>(προαιρετικά)</em> ορισμός (στοιχειοσειρά) - Ορισμός των αποτελεσμάτων σε μια τιμή smarty με το όνομα αυτό.</p>';
$lang['admin']['help_function_search'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=Search">Search module</a> ώστε να γίνει ευκολότερη η σύνταξη ενός tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'Search\'}</code> τώρα μπορείτε απλώς να χρησιμοποιήσετε <code>{search}</code> για να εισαγάγετε το δομοστοιχείο σε ένα πρότυπο.
                </p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς <code>{search}</code> σε ένα πρότυπο όπου θέλετε να εμφανιστεί η αναζήτηση πλαισίου εισαγωγής δεδομένων. Για βοήθεια σχετικά με το δομοστοιχείο Αναζήτηση παρακαλούμε ανατρέξτε στο <a href="listmodules.php?action=showmodulehelp&module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Τί  κάνει αυτό;</h3>
	<p>Εκτυπώνει την κεντρική τοποθεσία url για την ιστοσελίδα.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{root_url}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία προς το παρόν.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Tί κάνει αυτό;</h3>
  <p>Επαναλαμβάνει μια συγκεκριμένη σειρά χαρακτήρων συγκεκριμένες φορές</p>
  <h3>Πώς χρησιμοποιείται;</h3>
  <p>Εισάγετε ένα tag όμοιο με το παρακάτω στο πρότυπο/σελίδα σας ως εξής: <code>{repeat string=\'repeat this \' times=\'3\'}</code>
  <h3>Ποιες παράμετροι απαιτούνται;</h3>
  <ul>
  <li>string=\'text\' - Η στοιχειοσειρά που θα επαναληφθεί</li>
  <li>times=\'num\' - Ο αριθμός επαναλήψεων.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=\'10\' - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=\'15\'}</pre></p></li>
 	 <li><p><em>(optional)</em> leadin=\'Last changed\' - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=\'Last Changed\'}</pre></p></li>
 	 <li><p><em>(optional)</em> showtitle=\'true\' - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=\'true\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> css_class=\'some_name\' - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=\'some_name\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> dateformat=\'d.m.y h:m\' - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=\'D M j G:i:s T Y\'}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=\'15\' showtitle=\'false\' leadin=\'Last Change: \' css_class=\'my_changes\' dateformat=\'D M j G:i:s T Y\'}</pre>';
$lang['admin']['help_function_print'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα πρόκειται για ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=Printing">δομοστοιχείο εκτύπωσης</a> ώστε να γίνει ευκολότερη η σύνταξη του tag. 
	Αντί να χρησιμοποιήσετε το <code>{cms_module module=\'Printing\'}</code> μπορείτε απλώς να χρησιμοποιήσετε το <code>{print}</code> για να εισάγετε το δομοστοιχείο σε σελίδες και σε πρότυπα.
	</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{print}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο εκτύπωσης, τις παραμέτρους που απαιτούνται κλπ παρακαλούμε ανατρέξτε στη βοήθεια <a href="listmodules.php?action=showmodulehelp&module=Printing">δομοστοιχείο εκτύπωσης</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Δημιουργεί έναν σύνδεσμο μόνο για το περιεχόμενο της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{oldprint}</code><br></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικά)</em> goback - Ορίστε "true" για να εμφανιστεί ένας σύνδεσμος "Go Back" στη σελίδα που πρόκειται να εκτυπωθεί.</li>
                <li><em>(προαιρετικά)</em> popup - Ορίστε "true" και η σελίδα που θα εκτυπωθεί θα ανοίξει σε νέο παράθυρο.</li>
                <li><em>(προαιρετικά)</em> script - Ορίστε "true" και στη σελίδα εκτύπωσης θα χρησιμοποιηθεί java script για την πραγματοποίηση της εκτύπωσης της σελίδας.</li>
                <li><em>(προαιρετικά)</em> showbutton - Ορίστε "true" και θα εμφανιστεί ένας εκτυπωτής γραφικών αντί ένας σύνδεσμος κειμένου.</li>
                <li><em>(προαιρετικά)</em> κατηγορία - κατηγορία για τον σύνδεσμο, προεπιλεγμένες ρυθμίσεις σε "noprint".</li>
                <li><em>(προαιρετικά)</em> text - Κείμενο που θα χρησιμοποιηθεί αντί του "Print This Page" για τον σύνδεσμο εκτύπωσης.
                <li><em>(προαιρετικά)</em> title - Κείμενο που θα εμφανιστεί για την ιδιότητα κειμένου. Αν η σελίδα είναι κενή τότε πρέπει να εμφανιστεί η παράμετρος κειμένου.</li>
                <li><em>(προαιρετικά)</em> περισσότερα - Τοποθετήστε επιπλέον επιλογές εντός του <a> συνδέσμου.</li>
                <li><em>(προαιρετικά)</em> src_img - Εμφάνιση αυτού του αρχείου εικόνας. Προεπιλεγμένες εικόνες/cms/πλήκτροεκτύπωσης.gif.</li>
                <li><em>(προαιρετικά)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Παράδειγμα:</p>
                     <pre>{oldprint text="Printable Page"}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Πληροφορίες';
$lang['admin']['login_info'] = 'Για τη σωστή λειτουργία του πίνακα ελέγχου Διαχ';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Πρέπει να ενεργοποιηθούν τα cookies στο πρόγραμμα πλοήγησής σας στο Διαδίκτυο</li> 
  <li>Πρέπει να ενεργοποιηθεί το javascript στο πρόγραμμα πλοήγησής σας στο Διαδίκτυο</li> 
  <li>Τα αναδυόμενα παράθυρα πρέπει να επιτρέπονται για τις ακόλουθες διευθύνσεις:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>Tί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=News">δομοστοιχεία Νέα</a> ώστε να γίνει ευκολότερη η σύνταξη tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'News\'}</code> τώρα μπορείτε απλώς να χρησιμοποιήσετε <code>{news}</code> για να εισαγάγετε το δομοστοιχείο σε σελίδες και πρότυπα.
	</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{news}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο Νέα, τις παραμέτρους που απαιτούνται κ.λ.π παρακαλούμε ανατρέξτε στη <a href="listmodules.php?action=showmodulehelp&module=News">βοήθεια για το δομοστοιχείο Νέα.</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει την ημερομηνία και την ώρα της τελευταίας τροποποίησης της σελίδας.  Αν δεν έχει δοθεί κανένα μορφότυπο τότε θα προεπιλεγεί σε ένα μορφότυπο όμοιο με \'Ιαν 01, 2004\'.</p>
        <h3>Πώς  χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(optional)</em>μορφότυπο - Μορφότυπο Ημερομηνία/Ώρα χρησιμοποιώντας παραμέτρους από τη λειτουργία strftime του php.  Δείτε <a href="http://php.net/strftime" target="_blank">εδώ</a> για μια λίστα παραμέτρων και πληροφορίες.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εμφανίζει τα μεταδεδομένα γι\' αυτήν τη σελίδα. Θα εμφανιστούν τόσο τα γενικά δεδομένα από τη σελίδα γενικών ρυθμίσεων όσο και τα μεταδεδομένα για κάθε σελίδα.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο  πρότυπο σας ως εξής: <code>{metadata}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετικά)</em>προβολήβάσης (true/false) - Εφόσον οριστεί σε ψευδή, τότε το tag βάσης δεν θα σταλεί στο πρόγραμμα πλοήγησης στο Διαδίκτυο.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει το κείμενο του μενού της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{menu_text}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία αυτή τη φορά.</p>';
$lang['admin']['help_function_menu'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι απλώς ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=MenuManager">δομοστοιχείο Διαχειριστής Μενού</a> ώστε να γίνει ευκολότερη η σύνταξη του tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'MenuManager\'}</code> μπορείτε απλώς να χρησιμοποιήσετε <code>{menu}</code> για να εισαγάγετε το δομοστοιχείο σε σελίδες και πρότυπα.
	</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{menu}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο Δαιχειριστής Μενού, τις παραμέτρους που απαιτούνται κ.λ.π παρακαλούμε ανατρέξτε στη <a href="listmodules.php?action=showmodulehelp&module=MenuManager">βοήθεια για το δομοστοιχείο Διαχειριστής Μενού.</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει το τελευταίο άτομο που επεξεργάστηκε αυτήν τη σελίδα.  Αν έχει δοθεί κανένα μορφότυπο τότε θα προεπιλεγεί ένας αριθμός ID του χρήστη.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{last_modified_by format="fullname"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικάl)</em>format - id, όνομαχρήστη, πλήρεςόνομα</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>Τί κάνει αυτό;</h3>
  <p>Δημιουργεί ένα tag εικόνας σαν μια εικόνα που αποθηκεύεται στον κατάλογο εικόνων σας</p>
  <h3>Πώς χρησιμοποιείται;</h3>
  <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{image src="something.jpg"}</code></p>
  <h3>Ποιες παράμετροι απαιτούνται;</h3>
  <ul>
     <li><em>(απαιτείται)</em>  <tt>src</tt> - Όνομα αρχείου εικόνας που περιλαμβάνεται στον κατάλογο εικόνων σας.</li>
     <li><em>(προαιρετικά)</em>  <tt>width</tt> - Πλάτος της εικόνας εντός της σελίδας. Προεπιλέγει το πραγματικό μέγεθος.</li>
     <li><em>(προαιρετικά)</em>  <tt>height</tt> - Ύψος της εικόνας εντός της σελίδας. Προεπιλέγει το πραγματικό μέγεθος.</li>
     <li><em>(προαιρετικά)</em>  <tt>alt</tt> - Εναλ κείμενο για την εικόνα -- χρειάζεται για συμφωνία με xhtml. Προεπιλέγει το όνομααρχείου.</li>
     <li><em>(προαιρετικό)</em>  <tt>class</tt> - κατηγορία CSS για την εικόνα.</li>
     <li><em>(προαιρετικά)</em>  <tt>title</tt> - Το ποντίκι πάνω στο κείμενο για την εικόνα. Προεπιλέγει Εναλλ κείμενο.</li>
     <li><em>(προαιρετικά)</em>  <tt>addtext</tt> - Πρόσθετο κείμενο που θα τοποθετηθεί στο tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding \'div\'. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder="uploads/images/yourfolder/"}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder="uploads/images/yourfolder/"</strong><br/>
		Is the path to the gallery (yourfolder) ending in\'/\'. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type="click" or type="popup"</strong><br/>
		For the "popup" function to work you need to include the popup javascript into
		the head of your template e.g. "<head></head>". The javascript is at
		the bottom of this page! <em>The default is \'click\'.</em></li>

		<li><strong>divID e.g. divID ="imagegallery"</strong><br/>
		Sets the wrapping \'div id\' around your gallery so that you can have 
		different CSS for each gallery. <em>The default is \'imagegallery\'.</em></li>

		<li><strong>sortBy e.g. sortBy = "name" or sortBy = "date"</strong><br/>
		Sort images by \'name\' OR \'date\'. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = "asc" or sortByOrder = "desc"</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name". </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = "name"</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = "file"</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name".</em></li>

		<li>Sets the \'alt\' tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = "number" </strong>(a number sequence)<br/>
		<em>The Default is "name".</em></li>

		<li> Sets the \'title\' tag for the big image. <br/>
		<strong>bigPicTitleTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = "none" </strong>(No title)<br/>
		<em>The Default is "name".</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have \'... click for a bigger image\' 
		or if you do not set this option then you get the default of 
		\'Click for a bigger image...\'</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>\'div id\' is \'cdcovers\', no Caption on big images, thumbs have default caption. 
        \'alt\' tags for the big image are set to the name of the image file without the extension 
        and the big image \'title\' tag is set to the same but with an extension. 
        The thumbs have the default \'alt\' and \'title\' tags. The default being the name 
        of the image file without the extension for \'alt\' and \'Click for a bigger image...\' for the \'title\',
		would be:</p>
		<code>{ImageGallery picFolder="uploads/images/cdcovers/" divID="cdcovers" bigPicCaption="none"  bigPicAltTag="name" bigPicTitleTag="file"}</code>
        <br/>
		<p>It\'s got lots of options but I wanted to keep it very flexible and you don\'t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: \'Image 1 of 4\' and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>Τί ακριβώς κάνει;</h3>
	<p>Δείτε τη βοήθεια σχετικά με το global_content για περιγραφή.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εμφανίζει έναν αριθμό που αντιπροσωπεύει τον αλγόριθμό σας pagerank της google.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Απλώς εισάγετε το tag στο πρότυπο/σελίδα σας ως εξής: <code>{googlepr}</code><br>
	<br>

	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετικά)</em> τομέας - Είναι η ιστοσελίδα για την οποία εμφανίζεται ο αλγόριθμος pagerank.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αναζητά την ιστοσελίδα σας χρησιμοποιώντας τη μηχανή αναζήτησης της Google.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{google_search}</code><br>
	<br>
	Σημείωση: Για να λειτουργήσει η ιστοσελίδα σας πρέπει να είναι καταχωρισμένη στο ευρετήριο της Google. Μπορείτε να υποβάλλετε την ιστοσελίδα σας στην google <a href="http://www.google.com/addurl.html">εδώ</a>.</p>
	<h3>Τί γίνεται αν θέλω να αλλάξω την εμφάνιση του πλαισίουκειμένου ή του πλήκτρου;</h3>
	<p>Η εμφάνιση του πλαισίουκειμένου και του πλήκτρου μπορεί να αλλάξει μέσω css. Tο πλαίσιοκειμένου αποκτά id αναζήτησηκειμένου και το πλήκτρο αποκτά id αναζήτησηπλήκτρου.</p>

	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετική)</em> τομέας - Αυτό αναφέρει στην google το όνομα της ιστοσελίδας που πρέπει να αναζητήσει. Αυτή η περιγραφή προσπαθεί να το καθορίσει αυτόματα.</li>
		<li><em>(προαιρετικά)</em> πλήκτροΚείμενο - Το κείμενο που θέλετε να εμφανιστεί στο πλήκτρο αναζήτησης. Η προεπιλεγμένη ρύθμιση είναι "Search Site".</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εισάγει ένα γενικό μπλοκ περιεχομένου στο πρότυπο ή στη σελίδα σας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{global_content name=\'myblob\'}</code>, όπου το όνομα είναι το όνομα που δόθηκε στο μπλοκ όταν δημιουργήθηκε.</p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
  	  <li>όνομα - Θα εμφανιστεί το όνομα του γενικού μπλοκ περιεχομένου. </li>
          <li><em>(προαιρετικά)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Μεταφέρει όλες τις γνωστές μεταβλητές smarty στη σελίδα σας</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{get_template_vars}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
											  <p>Καμία αυτή τη φορά</p>';
$lang['admin']['help_function_embed'] = '	<h3>Tί κάνει αυτό;</h3>
	<p>Δίνει τη δυνατότητα σε οποιαδήποτε άλλη εφαρμογή να συμπεριληφθεί (ως ένθετη) στο CMS. Η πιο συνηθισμένη χρήση θα μπορούσε να είναι ένα φόρουμ. 
	Η εφαρμογή αυτή χρησιμοποιεί IFRAMES ώστε τα προηγούμενα προγράμματα πλοήγησης στο Διαδίκτυο να παρουσιάζουν προβλήματα. Λυπούμαστε αλλά αυτός είναι ο μόνος γνωστός τρόπος να λειτουργήσει χωρίς να τροποποιηθεί η ένθετη εφαρμογή.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
        <ul>
        <li>α) Προσθέστε <code>{embed header=true}</code> στην κυρίως ενότητα της σελίδας προτύπου σας ή στην ενότητα μεταδεδομένων στην καρτέλα επιλογών της σελίδας περιεχομένου.  Με τον τρόπο αυτό θα διασφαλιστεί ότι θα συμπεριληφθεί ηη απαιτούμενη javascript.   Αν εισάγετε αυτό το tag στην ενότητα μεταδεδομένων στην καρτέλα επιλογών της σελίδας περιεχομένων τότε πρέπει να διασφαλίσετε ότι το <code>{metadata}</code> είναι στη σελίδα προτύπου σας.</li>
        <li>β) Προσθέστε <code>{embed url="http://www.google.com"}</code> στη σελίδα περιεχομένου σας ή στο σώμα της σελίδας προτύπου σας.</li>
        </ul>
        <br/>
        <h4>Παράδειγμα για να μεγενθύνετε το iframe</h4>
	<p>Προσθέστε τα παρακάτω στο φύλλο στυλ σας:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
            <li><em>(απαιτείται)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Δημιουργεί έναν σύνδεσμο για την επεξεργασία της σελίδας</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{edit}</code><br></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικό)</em>πλήκτροπροβολή - Ορίστε "true" και θα εμφανιστεί ένα γραφικό επεξεργασίας αντί για έναν σύνδεσμο κειμένου.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει την περιγραφή (ιδιότητα τίτλου) της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{description}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία αυτή τη φορά.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει την ημερομηνία και την ώρα κατά την οποία δημιουργήθηκε η σελίδα. Αν δεν έχει δοθεί μρφότυπο, τότε θα προεπιλεγεί ένα μορφότυπο όμοιο με \'Ιαν 01, 2004\'.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικά)</em>μορφότυπο - Το μορφότυπο Ημερομηνία/Ώρα χρησιμοποιεί παραμέτρους από τη λειτουργία strftime του php. Δείτε <a href="http://php.net/strftime" target="_blank">εδώ</a> για τη λίστα παραμέτρων και πληροφορίες.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>This is where the content for your page will be displayed.  It\'s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block="Second Content Block"}</pre>
<p>Now, when you edit a page there will a textarea called "Second Content Block".</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent="$pagecontent"}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αυτό το tag χρησιμοποιείται για την εισαγωγή του τρέχοντος ονόματος της έκδοσης του CMS στο πρότυπο ή στη σελίδα σας.  Δεν εμφανίζονται επιπλέον στοιχεία παρά μόνο το όνομα της έκδοσης.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Αυτό είναι μόνο ένα βασικό πρόσθετο (plugin) tag. Μπορείτε να το εισάγετε στο πρότυπο ή στη σελίδα σας ως εξής: <code>{cms_versionname}</code>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Δεν απαιτούνται παράμετροι.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αυτό το tag χρησιμοποιείται για να εισάγετε τον αριθμό της τρέχουσας έκδοσηs του CMS στο πρότυπο ή στηη σελίδα σας.  Δεν εμφανίζονται επιπλέον στοιχεία παρά μόνο ο αριθμός της έκδοσης.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Αυτό είναι μόνο ένα βασικό πρόσθετο (plugin) tag. Θα το καταχωρίσετε στο πρότυπο ή στη σελίδα σας ως εξής: <code>{cms_version}</code>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Δεν απαιτούνται παράμετροι.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for "dir", "up", for links to the parent page e.g. dir="up" (Hans Mogren).<br />
		1.44 - Added new parameters "ext" and "ext_info" to allow external links with class="external" and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters "image" and "imageonly" to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter "anchorlink" and a new option for "dir" namely, "anchor", for internal page links. e.g. dir="anchor" anchorlink="internal_link". (Russ)<br />
		1.41 - added new parameter "href" (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option "more"<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page="1"}</code> or  <code>{cms_selflink page="alias"}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir ="anchor"</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex ="a value"</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  ("Next Page"/"Previous Page") in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to "left").</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=""></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir="next" image="next.png" text="Next"}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt="" will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir="next" image="next.png" text="Next" imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class="external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with "ext" defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Συγγραφέας: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Έκδοση: 1.0</p>
	<p>
	Αλλαγή Ιστορικού:<br/>
	Καμία
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it\'s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It\'s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module="somemodulename"}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be "not shown in menu" except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>Τί κάνει αυτό;</h3>
<p>Εκτυπώνει ίχνη πλοήγησης τύπου breadcrumb .</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στην σελίδα ή το πρότυπό σας: π.χ.: <code>{breadcrumbs}</code></p>
<h3>Ποιες παραμέτρους δέχεται;</h3>
<p>
<ul>
<li><em>(προαιρετικά)</em> <tt>delimiter</tt> - Κείμενο για διαχωρισμό των καταχωρίσεων στη λίστα (προεπιλογή ">>").</li>
<li><em>(προαιρετικά)</em> <tt>initial</tt> - 1/0 Αν τεθεί σε 1 ξεκινούν τα ίχνη πλοήγησης τύπου breadcrumb με ένα διαχωριστικό (προεπιλογή 0).</li>
<li><em>(προαιρετικά)</em> <tt>root</tt> - Εναλλακτικό όνομα για μια σελίδα η οποία θέλετε να εμφανίζεται πάντοτε ως η πρώτη 
    στη λίστα. Μπορεί να χρησιμοποιηθεί για να κάνετε μία σελίδα (π.χ. την πρώτη) να εμφανίζεται ως η αφετηρία των πάντων ακόμη κι αν δεν είναι.</li>
<li><em>(προαιρετικά)</em> <tt>root_url</tt> - Παρακάμπτει το URL της αφεηριακής σελίδας. Χρησιμότητα: αλλάζει το σύνδεσμο σε \'/\' αντί του \'/home/\'. Απαιτείται να έχει οριστεί η προεπιλεγμένη σελίδα ως αφετηριακή σελίδα.</li>
<li><em>(προαιρετικά)</em> <tt>classid</tt> - Η τάξη CSS των μη τρεχόντων ονομάτων σελίδων, πχ οι πρώτες n-1 σελίδες της λίστας. Αν το όνομα είναι σύνδεσμος. προστίθεται στα tags <a href>, αλλιώς προστίθεται στα tags <span>.</li>
<li><em>(προαιρετικά)</em> <tt>currentclassid</tt> - Η τάξη CSS για τα tag <span> που αφορούν το τρέχον όνομα σελίδας.</li>
<li><em>(προαιρετικά)</em> <tt>starttext</tt> - Κείμενο που θα προστεθεί μπροστά από τη λίστα πλοήγησης τύπου breadcrumbs, ενδεχομένως κάτι σαν το: "Βρίσκεστε εδώ".</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include \'anchorlink\'.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Δημιουργεί έναν σύνδεσμο αγκύρωσης.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Απλά  εισάγετε αυτό το tag στην σελίδα ή το πρότυπό σας: π.χ.: <code>{anchor anchor=\'here\' text=\'Κύλιση κάτω\'}</code></p>
	<h3>Ποιες παραμέτρους δέχεται;</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Με τί συνδεόμαστε;.  Με το μέρος μετά το #.</li>
	<li><tt>text</tt> - Το κείμενο που θα εμφανίζεται στο σύνδεσμο, αν φυσικά υπάρχει τέτοιο.</li>
	<li><tt>class</tt> - Η class του συνδέσμου, αν υφίσταταιli>
	<li><tt>title</tt> - Ο εμφανιζόμενος για το σύνδεσμο τίτλος, αν φυσικά υπάρχει.</li>
	<li><tt>tabindex</tt> - Τον αριθμό ευρετηρίου tab (tabindex) για το σύνδεσμο, αν φυσικά υπάρχει.</li>
	<li><tt>accesskey</tt> - Το πλήκτρο πρόσβασης accesskey για το σύνδεσμο, αν φυσικά υπάρχει.</li>
	<li><em>(προαιρετικά)</em> <tt>onlyhref</tt> - Να εμφανίζεται μόνο το href και όχι το σύνολο του συνδέσμου. Δεν θα λειτουργούν οι υπόλοιπες επιλογές</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Πρόκειται ουσιαστικά για ένα wrapper tag για το δομοστοιχείο <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager (Διαχείριση μενού)</a> για να απλοποιηθεί η συντακτική δομή του tag αλλά και η διαδικασία δημιουργίας ενός χάρτη του ιστοτόπου.</p>
<h3>Πώς χρησιμοποιείται;</h3>
  <p>Απλά τοποθετήστε το <code>{site_mapper}</code> σε μία σελίδα ή πρότυπο. Αν χρειαστείτε βοήθεια για το υποπρόγραμμα Menu Manager, το τί παράμετρους δέχεται κλπ, παρακαλούμε συμβουλευτείτε τη βοήεια που αφορά το υποπρόγραμμα <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Αυτό το plugin καθιστά δυνατή την εύκολη ανακατεύθυνση προς ένα προκαθορισμένο url.  Είναι ιδιαίτερα βολικό στα πλαίσια μιας υποθετικής ροής προγράμματος που αφορά τα smarty (για παράδειγμα, ανακατεύθυνση προς μία αρχική σελίδα που εμφανίζεται εάν ο ιστότοπος δεν έχει τεθεί σε λειτουργία για το ευρύτερο κοινό ακόμη).</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_url urle=\'www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Τί κάνει αυτό;</h3>
 <p>Αυτό το plugin καθιστά δυνατή την εύκολη ανακατεύθυνση σε μία άλλη σελίδα. Είναι ιδιαίτερα βολικό στα πλαίσια μιας υποθετικής ροής προγράμματος που αφορά τα smarty (για παράδειγμα, ανακατεύθυνση προς μία σελίδα σύνδεσης αν διαπιστωθεί ότι ο χρήστης δεν είναι συνδεδεμένος.)</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['of'] = 'από';
$lang['admin']['first'] = 'Αρχή ';
$lang['admin']['last'] = 'Τέλος';
$lang['admin']['adminspecialgroup'] = 'Προειδοποίηση: Τα μέλη αυτής της ομάδας έχουν αυτόματα όλες τις άδειες';
$lang['admin']['disablesafemodewarning'] = 'Απενεργοποίηση της ειδοποίησης της λειτουργίας ασφαλούς διαχείρισης';
$lang['admin']['allowparamcheckwarnings'] = 'Επιτρέπεται στους ελέγχους παραμέτρων να δημιουργήσουν προειδοποιητικά μηνύματα';
$lang['admin']['date_format_string'] = 'Στοιχειοσειρά μορφότυπου ημερομηνίας';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> διαμορφωμένη στοιχειοσειρά μορφότυπου ημερομηνίας.  Try googling \'strftime\'';
$lang['admin']['last_modified_at'] = 'Τελευταία τροποποίηση στις';
$lang['admin']['last_modified_by'] = 'Τελευταία τροποποίηση από';
$lang['admin']['read'] = 'Ανάγνωση';
$lang['admin']['write'] = 'Εγγραφή';
$lang['admin']['execute'] = 'Execute';
$lang['admin']['group'] = 'Group';
$lang['admin']['other'] = 'Άλλο ';
$lang['admin']['event_desc_moduleupgraded'] = 'Αποστάλθηκε μετά την αναβάθμιση του δομοστοιχείου';
$lang['admin']['event_desc_moduleinstalled'] = 'Αποστάλθηκε μετα την εγκατάσταση του δομοστοιχείου';
$lang['admin']['event_desc_moduleuninstalled'] = 'Αποστάλθηκε μετα την απεγκατάσταση του δομοστοιχείου';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Αποστάλθηκε μετα την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Αποστάλθηκε μετά την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Αποστάλθηκε μετά την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Αποστάλθηκε πρίν την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['global_umask'] = 'Μάσκα δημιουργίας αρχείου (umask)';
$lang['admin']['errorcantcreatefile'] = 'Δεν ήταν δυνατή η δημιουργία αρχείου (πρόβλημα δικαιωμάτων πρόσβασης;)';
$lang['admin']['errormoduleversionincompatible'] = 'Το δομοστοιχείο ειναι ασύμβατο με αυτήν την έκδοση του CMS';
$lang['admin']['errormodulenotloaded'] = 'Εσωτερικό σφάλμα, το δομοστοιχείο δεν απέκτησε λειτουργική υπόσταση';
$lang['admin']['errormodulenotfound'] = 'Εσωτερικό σφάλμα, δεν ήταν δυνατή η εύρεση της λειτουργικής υπόστασης ενός δομοστοιχείου';
$lang['admin']['errorinstallfailed'] = 'Η εγκατάσταση του δομοστοιχείου απέτυχε';
$lang['admin']['errormodulewontload'] = 'Πρόβλημα στην δημιουργία λειτουργικής υπόστασης ενός διαθέσιμου δομοστοιχείου';
$lang['admin']['frontendlang'] = 'Προεπιλεγμένη γλώσσα για το προσκήνιο';
$lang['admin']['info_edituser_password'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['info_edituser_passwordagain'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['originator'] = 'Πιστοποιητής';
$lang['admin']['module_name'] = 'Όνομα δομοστοιχείου';
$lang['admin']['event_name'] = 'Όνομα συμβάντος';
$lang['admin']['event_description'] = 'Περιγραφή συμβάντος';
$lang['admin']['error_delete_default_parent'] = 'Δεν μπορείτε να διαγράψετε την γονική της προεπιλεγμένης σελίδας.';
$lang['admin']['jsdisabled'] = 'Αυτή η λειτουργία απαιτεί την ενεργοποίηση της εκτέλεσης Javascript.';
$lang['admin']['order'] = 'Κατάταξη';
$lang['admin']['reorderpages'] = 'Ανακατάταξη σελίδων';
$lang['admin']['reorder'] = 'Ανακατάταξη';
$lang['admin']['page_reordered'] = 'Η σελίδα ανακατατάχθηκε με επιτυχία.';
$lang['admin']['pages_reordered'] = 'Οι σελίδες ανακατατάχθηκαν με επιτυχία.';
$lang['admin']['sibling_duplicate_order'] = 'Δύο σελίδες ιδίου επιπέδου δεν μπορούν να εχουν την ίδια κατάταξη. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['no_orders_changed'] = 'Επιλέξατε την ανακατάταξη σελίδων, όμως δεν αλλάξατε την κατάταξη σε κάποια απο αυτές. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['order_too_small'] = 'Η κατάταξη μιας σελίδας δεν μπορεί να είναι 0. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['order_too_large'] = 'Η κατάταξη σελίδων δεν μπορεί να είναι σαν αριθμός μεγαλύτερη απο τον αριθμό των σελίδων στο επίπεδο αυτό. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['user_tag'] = 'Tag χρήστη';
$lang['admin']['add'] = 'Προσθήκη';
$lang['admin']['CSS'] = 'Πρότυπα (CSS)';
$lang['admin']['about'] = 'Σχετικά';
$lang['admin']['action'] = 'Ενέργεια';
$lang['admin']['actionstatus'] = 'Ενέργεια/Κατάσταση';
$lang['admin']['active'] = 'Ενεργό';
$lang['admin']['addcontent'] = 'Προσθήκη περιεχομένου';
$lang['admin']['cantremove'] = 'Αδύνατη μετακίνηση';
$lang['admin']['changepermissions'] = 'Αλλαγή δικαιωμάτων';
$lang['admin']['changepermissionsconfirm'] = 'USE CAUTION\\n\\nΑυτή ή εντολή θα αποπειραθεί να επιβεβαιώσει ότι όλα τα αρχεία που αποτελούν το δομοστοιχείο έχουν δικαίωμα εγγραφής από τον διακομιστή δικτύου.\\nΘέλετε να συνεχίσετε;';
$lang['admin']['contentadded'] = 'Το περιεχόμενο καταχωρήθηκε με επιτυχία στη Βάση δεδομένων.';
$lang['admin']['contentupdated'] = 'Το περιεχόμενο ανανεώθηκε με επιτυχία';
$lang['admin']['contentdeleted'] = 'Το περιεχόμενο διαγράφηκε με επιτυχία από τη Βάση δεδομένων.';
$lang['admin']['success'] = 'Επιτυχία';
$lang['admin']['addcss'] = 'Προσθήκη νέου φύλλου στυλ';
$lang['admin']['addgroup'] = 'Προσθήκη νέας ομάδας';
$lang['admin']['additionaleditors'] = 'Πρόσθετοι ';
$lang['admin']['addtemplate'] = 'Προσθήκη νέου προτύπου';
$lang['admin']['adduser'] = 'Προσθήκη νέου χρήστη';
$lang['admin']['addusertag'] = 'Προσθήκη προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['adminaccess'] = 'Πρόσβαση στην είσοδο του Διαχειριστή';
$lang['admin']['adminlog'] = 'Αρχείο καταγραφής Διαχειριστή';
$lang['admin']['adminlogcleared'] = 'The Admin Log was succesfully cleared';
$lang['admin']['adminlogempty'] = 'The Admin Log is empty';
$lang['admin']['adminsystemtitle'] = 'Σύστημα διαχείρισης CMS';
$lang['admin']['adminpaneltitle'] = 'Πίνακας ελέγχου διαχείρισης του CMS Made simple ';
$lang['admin']['advanced'] = 'Για προχωρημένους';
$lang['admin']['aliasalreadyused'] = 'Η ψευδεπιγραφή ήδη χρησιμοποιείται σε άλλη σελίδα';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Η ψευδεπιγραφή μπορεί να περιέχει μόνο γράμματα και αριθμούς';
$lang['admin']['aliasnotaninteger'] = 'Η ψευδεπιγραφή δεν μπορεί να είναι ακέραιος αριθμός';
$lang['admin']['allpagesmodified'] = 'Έγιναν αλλαγές σε όλες τις σελίδες!';
$lang['admin']['assignments'] = 'Καθορισμός χρηστών';
$lang['admin']['associationexists'] = 'Ο συσχετισμός αυτός ήδη υπάρχει';
$lang['admin']['autoinstallupgrade'] = 'Αυτοματοποιημένη εγκατάσταση ή αναβάθμιση';
$lang['admin']['back'] = 'Επιστροφή στο Menu';
$lang['admin']['backtoplugins'] = 'Επιστροφή στην λίστα αρθρωμάτων κώδικα';
$lang['admin']['cancel'] = 'Ακύρωση';
$lang['admin']['cantchmodfiles'] = 'Δεν ήταν δυνατή η αλλαγή δικαιωμάτων πρόσβασης σε κάποια αρχεία';
$lang['admin']['cantremovefiles'] = 'Πρόβλημα στην διαδικασία διαγραφής αρχείων (δικαιώματα πρόσβασης;)';
$lang['admin']['confirmcancel'] = 'Θέλετε να παραιτηθείτε απο τις αλλαγες; Κάντε κλικ για να παραιτηθείτε απο τις αλλαγές. Κάντε κλίκ για να συνεχίσετε με την επεξεργασία.';
$lang['admin']['canceldescription'] = 'Αναίρεση αλλαγών';
$lang['admin']['clearadminlog'] = 'Καθαρισμός αρχείου καταγραφής Διαχειριστή';
$lang['admin']['code'] = 'Κώδικας';
$lang['admin']['confirmdefault'] = 'Είστε σίγουροι ότι θέλετε να ορίσετε -%s - για τον ιστοτόπο  αυτην την αρχική σελίδα;';
$lang['admin']['confirmdeletedir'] = 'Είστε σίγουροι οτι θέλετε να διαγράψετε αυτόν τον κατάλογο και όλα τα περιεχόμενά του;';
$lang['admin']['content'] = 'Περιεχόμενο';
$lang['admin']['contentmanagement'] = 'Διαχείριση περιεχομένου';
$lang['admin']['contenttype'] = 'Τύπος περιεχομένου';
$lang['admin']['copy'] = 'Αντιγραφή';
$lang['admin']['copytemplate'] = 'Αντιγραφή Προτύπου';
$lang['admin']['create'] = 'Δημιουργία';
$lang['admin']['createnewfolder'] = 'Δημιουργία νέου φακέλλου';
$lang['admin']['cssalreadyused'] = 'Το όνομα του CSS ήδη χρησιμοποιείται';
$lang['admin']['cssmanagement'] = 'Διαχείριση CSS';
$lang['admin']['currentassociations'] = 'Συσχετίσεις';
$lang['admin']['currentdirectory'] = 'Κατάλογος';
$lang['admin']['currentgroups'] = 'Ομάδες';
$lang['admin']['currentpages'] = 'Σελίδες';
$lang['admin']['currenttemplates'] = 'Πρότυπα σελίδας';
$lang['admin']['currentusers'] = 'Χρήστες';
$lang['admin']['custom404'] = 'Τροποποίηση μηνύματος λάθους 404';
$lang['admin']['database'] = 'Βάση Δεδομένων';
$lang['admin']['databaseprefix'] = 'Εντολή προετοιμασίας Βάσης δεδομένων';
$lang['admin']['databasetype'] = 'Τύπος Βάσης δεδομένων';
$lang['admin']['date'] = 'Ημερομηνία';
$lang['admin']['default'] = 'Προεπιλογές';
$lang['admin']['delete'] = 'Διαγραφή';
$lang['admin']['deleteconfirm'] = 'Είστε σίγουροι για την διαγραφή?';
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ;';
$lang['admin']['deletecss'] = 'Διαγραφή CSS';
$lang['admin']['dependencies'] = 'Εξαρτήσεις';
$lang['admin']['description'] = 'Περιγραφή';
$lang['admin']['directoryexists'] = 'Ο κατάλογος ήδη υπάρχει.';
$lang['admin']['down'] = 'Κάτω';
$lang['admin']['edit'] = 'Επεξεργασία';
$lang['admin']['editconfiguration'] = 'Επεξεργασία ρυθμίσεων';
$lang['admin']['editcontent'] = 'Επεξεργασία περιεχομένου';
$lang['admin']['editcss'] = 'Επεξεργασία CSS';
$lang['admin']['editcsssuccess'] = 'Ενημέρωση φύλλου στυλ';
$lang['admin']['editgroup'] = 'Επεξεργασία ομάδων';
$lang['admin']['editpage'] = 'Επεξεργασία σελίδων';
$lang['admin']['edittemplate'] = 'Επεξεργασία Προτύπου';
$lang['admin']['edittemplatesuccess'] = 'Ενημέρωση προτύπου';
$lang['admin']['edituser'] = 'Επεξεργασία στοιχείων χρήστη';
$lang['admin']['editusertag'] = 'Επεξεργασία προκαθορισμένου tag χρήστη';
$lang['admin']['usertagadded'] = 'Το tag χρήστη προστέθηκε επιτυχώς.';
$lang['admin']['usertagupdated'] = 'To tag χρήστη ανανεώθηκε επιτυχώς.';
$lang['admin']['usertagdeleted'] = 'To tag χρήστη διαγράφηκε επιτυχώς.';
$lang['admin']['email'] = 'Διεύθυνση E-mail';
$lang['admin']['errorattempteddowngrade'] = 'Η εγκατάσταση αυτού του δομοστοιχείου θα είχε ως αποτέλεσμα την υποβάθμιση. Η διαδικασία απορρίπτεται';
$lang['admin']['errorchildcontent'] = 'Το περιεχόμενο ακόμη περιέχει διασυνδεδεμένο περιεχόμενο. Καταργήστε αυτό πρώτα.';
$lang['admin']['errorcopyingtemplate'] = 'Σφάλμα κατά την αντιγραφή Προτύπου';
$lang['admin']['errorcouldnotparsexml'] = 'Σφάλμα στη διαδικασία εκτέλεσης αρχείου XML. Βεβαιωθείτε ότι μεταφέρετε ένα αρχείο .xml και όχι ενα αρχείο.tar.gz ή zip.';
$lang['admin']['errorcreatingassociation'] = 'Σφάλμα κατα τη δημιουργία συσχέτισης';
$lang['admin']['errorcssinuse'] = 'Αυτό το CSS χρησιμοποιείται απο κάποιο πρότυπο ή καποιες σελίδες. Καταργήστε πρώτα αυτές τις συσχετίσεις.';
$lang['admin']['errordefaultpage'] = 'Δεν ήταν δυνατή η διαγραφή της τρέχουσας αρχικής σελίδας. Ορίστε πρώτα μία άλλη.';
$lang['admin']['errordeletingassociation'] = 'Σφάλμα κατά τη διαγραφή συσχέτισης';
$lang['admin']['errordeletingcss'] = 'Σφάλμα κατά τη διαγραφή css';
$lang['admin']['errordeletingdirectory'] = 'Δεν ήταν δυνατή η διαγραφή του καταλόγου. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['errordeletingfile'] = 'Δεν ήταν δυνατή η διαγραφή του αρχείου. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['errordirectorynotwritable'] = 'Δεν έχετε δικαίωμα εγγραφής στο συγκεκριμένο κατάλογο.';
$lang['admin']['errordtdmismatch'] = 'Λάθος της DTD είτε απουσιάζει είτε η έκδοση της δεν είναι η σωστή.';
$lang['admin']['errorgettingcssname'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του CSS';
$lang['admin']['errorgettingtemplatename'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του προτύπου';
$lang['admin']['errorincompletexml'] = 'Το αρχείο XML είναι ημιτελές ή ακατάλληλο';
$lang['admin']['uploadxmlfile'] = 'Εγκατάσταση αρθρώματος μέσω αρχείου XML';
$lang['admin']['cachenotwritable'] = 'Ο φάκελος Cache δεν είναι εγγράψιμος. Το άδειασμα της cache δεν θα έχει αποτέλεσμα. Δώστε δικαιώματα στον φάκελο tmp/cache read/write/execute (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Ο φάκελος των δομοστοιχείων δεν είναι εγγράψιμος, εαν επιθυμείτε να εγκαταστήσετε δομοστοιχεία μέσω αποστολής ενός αρχείου XML τότε πρέπει ο φάκελος των δομοστοιχείων να έχει πλήρεις άδειες ανάγνωσης/γραφής/εκτέλεσης (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Δεν απεστάλη κανένα αρχείο. Για να εγκαταστήσετε ένα δομοστοιχείο  με την χρήση XML πρέπει να επιλέξετε και να μετεφέρετε ένα αρχείο δομοστοιχείου .xml από τον υπολογιστή σας.';
$lang['admin']['errorinsertingcss'] = 'Σφάλμα κατά την εισαγωγή CSS';
$lang['admin']['errorinsertinggroup'] = 'Σφάλμα κατά την εισαγωγή ομάδας';
$lang['admin']['errorinsertingtag'] = 'Σφάλμα κατά την εισαγωγή προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['errorinsertingtemplate'] = 'Σφάλμα κατά την εισαγωγή προτύπου';
$lang['admin']['errorinsertinguser'] = 'Σφάλμα κατά την εισαγωγή χρήστη';
$lang['admin']['errornofilesexported'] = 'Σφάλμα στην εξαγωγή των αρχείων σε xml';
$lang['admin']['errorretrievingcss'] = 'Σφάλμα κατά την ανάκτηση CSS';
$lang['admin']['errorretrievingtemplate'] = 'Σφάλμα κατά την ανάκτηση προτύπου';
$lang['admin']['errortemplateinuse'] = 'Το πρότυπο αυτό χρησιμοποιείται ακόμη από κάποια σελίδα. Καταργήστε την πρώτα.';
$lang['admin']['errorupdatingcss'] = 'Σφάλμα κατά την ενημέρωση του CSS';
$lang['admin']['errorupdatinggroup'] = 'Σφάλμα κατά την ενημέρωση της ομάδας';
$lang['admin']['errorupdatingpages'] = 'Συνέβη λάθος κατά την ανανέωση τον σελίδων!';
$lang['admin']['errorupdatingtemplate'] = 'Σφάλμα κατά την ενημέρωση του προτύπου';
$lang['admin']['errorupdatinguser'] = 'Σφάλμα κατά την ενημέρωση των στοιχείων του χρήστη';
$lang['admin']['errorupdatingusertag'] = 'Σφάλμα κατά την ενημέρωση προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['erroruserinuse'] = 'Αυτός ο χρήστης είναι κάτοχος σελίδων περιεχομένου. Μεταφέρετε πρώτα την ιδιοκτησία τους σε άλλο χρήστη πρίν την διαγραφή.';
$lang['admin']['eventhandlers'] = 'Δράσεις';
$lang['admin']['editeventhandler'] = 'Επεξεργασία χειριστή δράσεων';
$lang['admin']['eventhandlerdescription'] = 'Συσχετισμός κεφαλίδων χρήστη με δράσεις';
$lang['admin']['export'] = 'Εξαγωγή';
$lang['admin']['event'] = 'Δράση';
$lang['admin']['false'] = 'Σφάλμα';
$lang['admin']['settrue'] = 'Ορισμός αληθούς';
$lang['admin']['filecreatedirnodoubledot'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Δεν είναι δυνατή η δημιουργία καταλόγου χωρίς ονομασία.';
$lang['admin']['filecreatedirnoslash'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'/\' or \'\'.';
$lang['admin']['filemanagement'] = 'Διαχείριση αρχείων';
$lang['admin']['filename'] = 'Όνομα αρχείου';
$lang['admin']['filenotuploaded'] = 'Το αρχείο δεν ήταν δυνατόν να μεταφερθεί. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['filesize'] = 'Μέγεθος αρχείου';
$lang['admin']['firstname'] = 'Όνομα';
$lang['admin']['groupmanagement'] = 'Διαχείριση Ομάδων';
$lang['admin']['grouppermissions'] = 'Διαχείριση δικαιωμάτων πρόσβασης ομάδων';
$lang['admin']['handler'] = 'Πρόγραμμα χειρισμού (καθορισμένα tag χρήστη)';
$lang['admin']['headtags'] = 'Κύρια tag';
$lang['admin']['help'] = 'Βοήθεια';
$lang['admin']['new_window'] = 'Νέο παράθυρο';
$lang['admin']['helpwithsection'] = '%s Βοήθεια';
$lang['admin']['helpaddtemplate'] = '<p>Το Πρότυπο ελέγχει την εμφάνιση και την αίσθηση του περιεχομένου της ιστοσελίδας σας.</p><p>Δημιουργήστε εδώ τη μορφή  και προσθέστε τα δικά σας CSS στον κατάλληλο χώρο για να ελέγξετε την εμφάνιση των διαφόρων στοιχείων.</p>';
$lang['admin']['helplisttemplate'] = '<p>Αυτή η σελίδα σας επιτρέπει την επεξεργασία , διαγραφή και δημιουργία προτύπων.</p><p>Για την δημιουργία ενός νέου προτύπου κάντε κλίκ στο κουμπί <u>Προσθήκη νέου προτύπου</u>.</p><p>Εάν επιθυμείτε την εφαρμογή του ίδιου προτύπου σε όλες τις σελίδες περιεχομένου, κάντε κλίκ στην υπερσύνδεση <u>Ορισμός σε όλο το περιεχόμενο</u>.</p><p>Εάν επιθυμείτε την αναπαραγωγή ενός προτύπου καντε κλίκ στο εικονίδιο <u>Αντιγραφή</u> και θα εμφανιστεί η προτροπή για την ονομασία του νέου προτύπου.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Όνομα υπολογιστή';
$lang['admin']['idnotvalid'] = 'Το id δεν είναι έγκυρο';
$lang['admin']['imagemanagement'] = 'Διαχείριση εικόνων';
$lang['admin']['informationmissing'] = 'Λείπει στοιχείο';
$lang['admin']['install'] = 'Εγκατάσταση';
$lang['admin']['invalidcode'] = 'Μη έγκυρος κώδικας.';
$lang['admin']['illegalcharacters'] = 'Μη έγκυροι χαρακτήρες στο πεδίο %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Μονός αριθμός εισαγωγικών';
$lang['admin']['invalidtemplate'] = 'Το πρότυπο δεν είναι έγκυρο';
$lang['admin']['itemid'] = 'ID αντικειμένου';
$lang['admin']['itemname'] = 'Όνομα αντικειμένου';
$lang['admin']['language'] = 'Γλώσσα';
$lang['admin']['lastname'] = 'Επώνυμο';
$lang['admin']['logout'] = 'Αποσύνδεση';
$lang['admin']['loginprompt'] = 'Εισάγετε ένα έγκυρο αναγνωριστικό χρήστη για να αποκτήστετε πρόσβαση στο πίνακα διαχείρισης.';
$lang['admin']['logintitle'] = 'Είσοδος Διαχειριστή στο CMS';
$lang['admin']['menutext'] = 'Κείμενο στο Menu';
$lang['admin']['missingparams'] = 'Κάποιες Παράμετροι είναι ελλειπείς ή μη έγκυρες';
$lang['admin']['modifygroupassignments'] = 'Τροποποίηση δικαιωμάτων Ομάδας';
$lang['admin']['moduleabout'] = 'Σχετικά με το δομοστοιχείο %s ';
$lang['admin']['modulehelp'] = 'Παροχή βοήθειας για το δομοστοιχείο %s ';
$lang['admin']['msg_defaultcontent'] = 'Προσθήκη κωδικού εδώ που θα εμφανίζεται ως προεπιλεγμένο περιεχόμενο για όλες τις νέες σελίδες';
$lang['admin']['msg_defaultmetadata'] = 'Προσθήκη κωδικού εδώ που θα εμφανίζεται στην ενότητα μεταδεδομένων για όλες τις νέες σελίδες';
$lang['admin']['wikihelp'] = 'Βοήθεια απο την Κοινότητα';
$lang['admin']['moduleinstalled'] = 'Το δομοστοιχείο είναι ήδη εγκατεστημένο';
$lang['admin']['moduleinterface'] = 'Περιβάλλον δομοστοιχείου %s';
$lang['admin']['modules'] = 'Δομοστοιχεία';
$lang['admin']['move'] = 'Μετακίνηση';
$lang['admin']['name'] = 'Όνομα';
$lang['admin']['needpermissionto'] = 'Χρειάζεστε τα δικαιώματα πρόσβασης του \'%s\' για να εκτελέσετε αυτήν την λειτουργία.';
$lang['admin']['needupgrade'] = 'Χρειάζεται αναβάθμιση';
$lang['admin']['newtemplatename'] = 'Ονομασία νέου Προτύπου';
$lang['admin']['next'] = 'Επόμενο';
$lang['admin']['noaccessto'] = 'Δεν υπάρχει πρόσβαση στο %s';
$lang['admin']['nocss'] = 'Δεν υπάρχει CSS';
$lang['admin']['noentries'] = 'Δεν υπάρχουν εγγραφές';
$lang['admin']['nofieldgiven'] = 'Δεν δόθηκε %s!';
$lang['admin']['nofiles'] = 'Δεν υπάρχουν αρχεία';
$lang['admin']['nopasswordmatch'] = 'Οι κωδικοί πρόσβασης δεν είναι σωστοί';
$lang['admin']['norealdirectory'] = 'Δεν ορίστηκε πραγματικό όνομα καταλόγου';
$lang['admin']['norealfile'] = 'Δεν ορίστηκε πραγματικό αρχείο';
$lang['admin']['notinstalled'] = 'Δεν είναι εγκατεστημένο';
$lang['admin']['overwritemodule'] = 'Αντικατάσταση δομοστοιχείων που ήδη υπάρχουν';
$lang['admin']['owner'] = 'Ιδιοκτήτης';
$lang['admin']['pagealias'] = 'Ψευδεπιγραφή σελίδας';
$lang['admin']['pagedefaults'] = 'Προεπιλεγμένες ρυθμίσεις σελίδας';
$lang['admin']['pagedefaultsdescription'] = 'Ορισμός προεπιλεγμένων τιμών για νέες σελίδες';
$lang['admin']['parent'] = 'Ανήκει στο';
$lang['admin']['password'] = 'Κωδικός Πρόσβασης';
$lang['admin']['passwordagain'] = 'Κωδικός Πρόσβασης (επανάληψη)';
$lang['admin']['permission'] = 'Δικαίωμα πρόσβασης';
$lang['admin']['permissions'] = 'Δικαιώματα πρόσβασης';
$lang['admin']['permissionschanged'] = 'Τα Δικαιώματα πρόσβασης ενημερώθηκαν.';
$lang['admin']['pluginabout'] = 'Σχετικά με την κεφαλίδα %s';
$lang['admin']['pluginhelp'] = 'Παροχή βοήθειας για την κεφαλίδα %s';
$lang['admin']['pluginmanagement'] = 'Διαχείριση αρθρωμάτων κώδικα';
$lang['admin']['prefsupdated'] = 'Οι προτιμήσεις ενημερώθηκαν.';
$lang['admin']['preview'] = 'Προεπισκόπηση';
$lang['admin']['previewdescription'] = 'Προεπισκόπηση αλλαγών';
$lang['admin']['previous'] = 'Προηγούμενο';
$lang['admin']['remove'] = 'Διαγραφή';
$lang['admin']['removeconfirm'] = 'Αυτή η εντολή θα διαγράψει μόνιμα τα αρχεία που αποτελούν το άρθρωμα απο αυτήν την εγκατάσταση.\\nΕίστε σίγουροι;';
$lang['admin']['removecssassociation'] = 'Κατάργηση συσχέτισης CSS';
$lang['admin']['saveconfig'] = 'Αποθήκευση αρχείου ρυθμίσεων';
$lang['admin']['send'] = 'Αποστολή';
$lang['admin']['setallcontent'] = 'Εφαρμογή σε όλες τις σελίδες';
$lang['admin']['setallcontentconfirm'] = 'Είστε σίγουροι για την  εφαρμογή αυτού του προτύπου σε όλες τις σελίδες;';
$lang['admin']['showinmenu'] = 'Προβολή στο Mενού';
$lang['admin']['showsite'] = 'Προβολή του ιστοτόπου';
$lang['admin']['sitedownmessage'] = 'Μήνυμα μη λειτουργίας του ιστοτόπου';
$lang['admin']['siteprefs'] = 'Γενικές ρυθμίσεις';
$lang['admin']['status'] = 'Κατάσταση';
$lang['admin']['stylesheet'] = 'Φύλλο στυλ';
$lang['admin']['submit'] = 'Υποβολή';
$lang['admin']['submitdescription'] = 'Αποθήκευση Αλλαγών';
$lang['admin']['tags'] = 'Tags';
$lang['admin']['template'] = 'Πρότυπο';
$lang['admin']['templateexists'] = 'Το όνομα προτύπου υπάρχει ήδη';
$lang['admin']['templatemanagement'] = 'Διαχείριση προτύπων';
$lang['admin']['title'] = 'Τίτλος';
$lang['admin']['tools'] = 'Εργαλεία';
$lang['admin']['true'] = 'Σωστό';
$lang['admin']['setfalse'] = 'Ορισμός ως Λάθος';
$lang['admin']['type'] = 'Τύπος';
$lang['admin']['typenotvalid'] = 'Ο τύπος δεν είναι έγκυρος';
$lang['admin']['uninstall'] = 'Απεγκατάσταση';
$lang['admin']['uninstallconfirm'] = 'Είστε σίγουροι για αυτήν την απεγκατάσταση;';
$lang['admin']['up'] = 'Επάνω';
$lang['admin']['upgrade'] = 'Αναβάθμιση';
$lang['admin']['upgradeconfirm'] = 'Είστε σίγουροι για αυτήν την αναβάθμιση;';
$lang['admin']['uploadfile'] = 'Αποστολή αρχείου';
$lang['admin']['url'] = 'Υπερσύνδεσμος (URL)';
$lang['admin']['useadvancedcss'] = 'Χρήση διαχείρισης CSS για προχωρημένους';
$lang['admin']['user'] = 'Χρήστης';
$lang['admin']['userdefinedtags'] = 'Προκαθορισμένα tag από τον χρήστη';
$lang['admin']['usermanagement'] = 'Διαχείριση χρηστών';
$lang['admin']['username'] = 'Όνομα χρήστη';
$lang['admin']['usernameincorrect'] = 'Εσφαλμένο όνομα χρήστη ή  κωδικός πρόσβασης';
$lang['admin']['userprefs'] = 'Προτιμήσεις χρήστη';
$lang['admin']['usersassignedtogroup'] = 'Χρήστες μέλη της ομάδας %s';
$lang['admin']['usertagexists'] = 'Υπάρχει ήδη ένα tag με το όνομα αυτό. Επιλέξτε άλλο.';
$lang['admin']['usewysiwyg'] = 'Χρήση προγράμματος επεξεργασίας WYSIWYG για το περιεχόμενο';
$lang['admin']['version'] = 'Έκδοση';
$lang['admin']['view'] = 'Προβολή';
$lang['admin']['welcomemsg'] = 'Καλωσήλθατε %s';
$lang['admin']['directoryabove'] = 'Κατάλογος πάνω από το τρέχον επίπεδο';
$lang['admin']['nodefault'] = 'Δεν επιλέχθηκε η προεπιλεγμένη ρύθμιση';
$lang['admin']['blobexists'] = 'Το όνομα του γενικού μπλοκ περιεχομένου υπάρχει ήδη';
$lang['admin']['blobmanagement'] = 'Διαχείριση γενικού μπλοκ περιεχομένου';
$lang['admin']['errorinsertingblob'] = 'Σφάλμα κατα την εισαγωγή του γενικού μπλοκ περιεχομένου';
$lang['admin']['addhtmlblob'] = 'Προσθήκη γενικού μπλοκ περιεχομένου';
$lang['admin']['edithtmlblob'] = 'Επεξεργασία γενικού μπλοκ περιεχομένου';
$lang['admin']['edithtmlblobsuccess'] = 'Ενημέρωση γενικού μπλοκ περιεχομένου';
$lang['admin']['tagtousegcb'] = 'Tag για να χρησιμοποιηθεί αυτό το μπλοκ';
$lang['admin']['gcb_wysiwyg'] = 'Ενεργοποίηση GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Ενεργοποίηση του επεξεργαστή WYSIWYG κατα την διάρκεια της επεξεργασίας πακέτων ολικού περιεχομένου';
$lang['admin']['filemanager'] = 'Διαχείριση αρχείων';
$lang['admin']['imagemanager'] = 'Διαχείριση εικόνων';
$lang['admin']['encoding'] = 'Κωδικοποίηση';
$lang['admin']['clearcache'] = 'Καθαρισμός Μνήμης';
$lang['admin']['clear'] = 'Καθαρισμός';
$lang['admin']['cachecleared'] = 'Η μνήμη καθαρίστηκε';
$lang['admin']['apply'] = 'Εφαρμογή';
$lang['admin']['applydescription'] = 'Αποθήκευση αλλαγών και συνέχιση της επεξεργασίας';
$lang['admin']['none'] = 'Κανένα';
$lang['admin']['wysiwygtouse'] = 'Επιλογή προγράμματος επεξεργασίας WYSIWYG';
$lang['admin']['syntaxhighlightertouse'] = 'Select syntax highlighter to use';
$lang['admin']['hasdependents'] = 'Περιέχει εξαρτήσεις';
$lang['admin']['missingdependency'] = 'Λείπει εξάρτηση';
$lang['admin']['minimumversion'] = 'Ελάχιστη έκδοση';
$lang['admin']['minimumversionrequired'] = 'Ελάχιστη απαιτούμενη έκδοση CMSMS';
$lang['admin']['maximumversion'] = 'Μέγιστη έκδοση';
$lang['admin']['maximumversionsupported'] = 'Μέγιστη υποστηριζόμενη έκδοση CMSMS';
$lang['admin']['depsformodule'] = 'Εξαρτήσεις για το δομοστοιχείο %s ';
$lang['admin']['installed'] = 'Εγκατεστημένο';
$lang['admin']['author'] = 'Συγγραφέας';
$lang['admin']['changehistory'] = 'Αλλαγή ιστορικού';
$lang['admin']['moduleerrormessage'] = 'Μήνυμα σφάλματος για το δομοστοιχείο %s';
$lang['admin']['moduleupgradeerror'] = 'Εμφανίστηκε ένα σφάλμα στην αναβάθμιση του δομοστοιχείου.';
$lang['admin']['moduleinstallmessage'] = 'Εγκατάσταση μηνύματος για το δομοστοιχείο %s';
$lang['admin']['moduleuninstallmessage'] = 'Απεγκατάσταση μηνύματος για το δομοστοιχείο %s';
$lang['admin']['admintheme'] = 'Θέμα για την εμφάνιση του πίνακα διαχείρισης';
$lang['admin']['addstylesheet'] = 'Προσθήκη φύλλου στυλ';
$lang['admin']['editstylesheet'] = 'Επεξεργασία φύλλου στυλ';
$lang['admin']['addcssassociation'] = 'Προσθήκη συσχέτισης φύλλου στυλ';
$lang['admin']['attachstylesheet'] = 'Επισύναψη αυτού του φύλλου στυλ';
$lang['admin']['attachtemplate'] = 'Επισύναψη σε αυτό το πρότυπο';
$lang['admin']['main'] = 'Κεντρική';
$lang['admin']['pages'] = 'Σελίδες';
$lang['admin']['page'] = 'Σελίδα';
$lang['admin']['files'] = 'Αρχεία';
$lang['admin']['layout'] = 'Μορφή ιστοτόπου';
$lang['admin']['usersgroups'] = 'Χρήστες & Ομάδες';
$lang['admin']['extensions'] = 'Επεκτάσεις';
$lang['admin']['preferences'] = 'Προτιμήσεις';
$lang['admin']['admin'] = 'Διαχείριση ιστοσελίδας';
$lang['admin']['viewsite'] = 'Προβολή Τοποθεσίας';
$lang['admin']['templatecss'] = 'Ορισμός προτύπων στο φύλλο στυλ';
$lang['admin']['plugins'] = 'Plugins';
$lang['admin']['movecontent'] = 'Μετακίνηση σελίδων';
$lang['admin']['module'] = 'Δομοστοιχείο';
$lang['admin']['usertags'] = 'Προκαθορισμένα από τον χρήστη tag';
$lang['admin']['htmlblobs'] = 'Γενικά μπλοκ περιεχομένου';
$lang['admin']['adminhome'] = 'Αρχική σελίδα διαχείρισης';
$lang['admin']['liststylesheets'] = 'Φύλλα στυλ';
$lang['admin']['preferencesdescription'] = 'Εδώ μπορείτε να ορίσετε τις διάφορες προτιμήσεις σας για το σύνολο του ιστοτόπου.';
$lang['admin']['adminlogdescription'] = 'Εμφάνιση του καταγραφέα κινήσεων για τον διαχειριστή.';
$lang['admin']['mainmenu'] = 'Κυρίως Mενού';
$lang['admin']['users'] = 'Χρήστες';
$lang['admin']['usersdescription'] = 'Εδώ διαχειρίζεστε τους χρήστες.';
$lang['admin']['groups'] = 'Ομάδες';
$lang['admin']['groupsdescription'] = 'Εδώ διαχειρίζεστε ομάδες.';
$lang['admin']['groupassignments'] = 'Μέλη ομάδας';
$lang['admin']['groupassignmentdescription'] = 'Εδώ μπορείτε να εντάξετε χρήστες σε ομάδες.';
$lang['admin']['groupperms'] = 'Δικαιώματα πρόσβασης ομάδας';
$lang['admin']['grouppermsdescription'] = 'Ορισμός δικαιωμάτων πρόσβασης και του επιπέδου της για τις ομάδες';
$lang['admin']['pagesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε σελίδες και άλλο περιεχόμενο.';
$lang['admin']['htmlblobdescription'] = 'Οι νησίδες HTML περιέχουν τμήματα κώδικα HTML ή και PHP που μπορείτε να τοποθετήσετε σε πολλές διαφορετικές σελίδες ή στα πρότυπά σας.';
$lang['admin']['templates'] = 'Πρότυπα ';
$lang['admin']['templatesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε πρότυπα. Τα πρότυπα καθορίζουν την εμφάνιση του ιστοτόπου.';
$lang['admin']['stylesheets'] = 'Φύλλα στυλ';
$lang['admin']['stylesheetsdescription'] = 'Η διαχείριση των φύλλων στυλ (CSS) μπορεί σε συνεργασία με τα πρότυπα να διαμορφώσει την εμφάνιση του ιστοτόπου (για προχωρημένους).';
$lang['admin']['filemanagerdescription'] = 'Αποστολή και διαχείριση αρχείων.';
$lang['admin']['imagemanagerdescription'] = 'Αποστολή/επεξεργασία και κατάργηση εικόνων.';
$lang['admin']['moduledescription'] = 'Τα δομοστοιχεία επεκτείνουν το CMS παρέχοντας κάθε είδους προσαρμοσμένη λειτουργικότητα.';
$lang['admin']['tagdescription'] = 'Ta tags ειναι λειτουργίες που μπορούν να προστεθούν στο περιεχόμενο ή/και στα πρότυπα.';
$lang['admin']['usertagdescription'] = 'Tags που μπορείτε να δημιουργήσετε και να τροποποιήσετε για να εκτελούνται συγκεκριμένες εργασίες κατευθείαν στo πρόγραμμα πλοήγησής σας στο Διαδίκτυο.';
$lang['admin']['installdirwarning'] = '<em><strong>Προειδοποίηση:</strong></em> Ο κατάλογος εγκατάστασης ακόμη υπάρχει. Καταργήστε τον τελείως.';
$lang['admin']['subitems'] = 'Υποστοιχεία';
$lang['admin']['extensionsdescription'] = 'Δομοστοιχεία, tags και άλλα ......';
$lang['admin']['usersgroupsdescription'] = 'Αντικείμενα σχετικά με χρήστες και ομάδες.';
$lang['admin']['layoutdescription'] = 'Επιλογές μορφής του ιστοτόπου.';
$lang['admin']['admindescription'] = 'Λειτουργίες διαχείρισης ιστοτόπου.';
$lang['admin']['contentdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε το περιεχόμενο.';
$lang['admin']['enablecustom404'] = 'Ενεργοποίηση τροποποιημένου μηνύματος 404';
$lang['admin']['enablesitedown'] = 'Ενεργοποίηση μηνύματος μη λειτουργίας του ιστοτόπου';
$lang['admin']['bookmarks'] = 'Συντομεύσεις';
$lang['admin']['user_created'] = 'Προσαρμοσμένες συντομεύσεις';
$lang['admin']['forums'] = 'Forums';
$lang['admin']['wiki'] = 'Wiki.';
$lang['admin']['irc'] = 'IRC.';
$lang['admin']['module_help'] = 'Βοήθεια για το δομοστοιχείο';
$lang['admin']['managebookmarks'] = 'Διαχείριση Συντομεύσεων';
$lang['admin']['editbookmark'] = 'Επεξεργασία συντόμευσης';
$lang['admin']['addbookmark'] = 'Προσθήκη συντόμευσης';
$lang['admin']['recentpages'] = 'Πρόσφατες σελίδες';
$lang['admin']['groupname'] = 'Ονομασία ομάδας';
$lang['admin']['selectgroup'] = 'Επιλογή ομάδας';
$lang['admin']['updateperm'] = 'Ενημέρωση δικαιωμάτων πρόσβασης';
$lang['admin']['admincallout'] = 'Συντομεύσεις διαχείρισης';
$lang['admin']['showbookmarks'] = 'Εμφάνιση συντομεύσεων διαχειριστή';
$lang['admin']['hide_help_links'] = 'Απόκρυψη συνδέσμων βοήθειας';
$lang['admin']['hide_help_links_help'] = 'Μαρκάρετε την επιλογή για να απενεργοποιήσετε το wiki και τους συνδέσμους βοήθειας δομοστοιχείου στις κεφαλίδες της σελίδας.';
$lang['admin']['showrecent'] = 'Εμφάνιση πρόσφατα χρησιμοποιημένων σελίδων';
$lang['admin']['attachtotemplate'] = 'Επισύναψη φύλλου στυλ στο πρότυπο';
$lang['admin']['attachstylesheets'] = 'Επισύναψη φύλλου στυλ';
$lang['admin']['indent'] = 'Δημιουργία εσοχής για την ανάδειξη της ιεράρχησης';
$lang['admin']['adminindent'] = 'Προβολή περιεχομένου';
$lang['admin']['contract'] = 'Σύμπτυξη ενότητας';
$lang['admin']['expand'] = 'Ανάπτυξη ενότητας';
$lang['admin']['expandall'] = 'Ανάπτυξη όλων των ενοτήτων';
$lang['admin']['contractall'] = 'Σύμπτυξη όλων των ενοτήτων';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Γενικές ρυθμίσεις';
$lang['admin']['adminpaging'] = 'Ορισμό του αριθμού των αντικειμένων περιεχομένου που θα εμφανίζονται ανα σελίδα στην λίστα σελίδων';
$lang['admin']['nopaging'] = 'Εμφάνιση όλων των αντικειμένων';
$lang['admin']['myprefs'] = 'Προτιμήσεις';
$lang['admin']['myprefsdescription'] = 'Εδώ μπορείτε να προσαρμόσετε την περιοχή εργασίας στην τοποθεσία διαχείρισης με βάση τις ανάγκες σας.';
$lang['admin']['myaccount'] = 'Ο λογαριασμός μου';
$lang['admin']['myaccountdescription'] = 'Εδώ μπορείτε να ενημερώσετε τις πληροφορίες των προσωπικών στοιχείων σας.';
$lang['admin']['adminprefs'] = 'Προτιμήσεις χρήστη';
$lang['admin']['adminprefsdescription'] = 'Εδώ μπορείτε να ορίσετε συγκεκριμένες προτιμήσεις διαχείρισης για τον ιστοτόπο.';
$lang['admin']['managebookmarksdescription'] = 'Εδώ μπορείτε να διαχειρίζεστε τα αγαπημένα του διαχειριστή.';
$lang['admin']['options'] = 'Επιλογές';
$lang['admin']['langparam'] = 'Η παράμετρος χρησιμοποιείται για τον καθορισμό της γλώσσας στην εμφάνιση στο προσκήνιο. Δεν αφορά όλα τα αρθρώματα κώδικα ούτε είναι απαραίτητο.';
$lang['admin']['parameters'] = 'Παράμετροι';
$lang['admin']['mediatype'] = 'Τύπος μέσου';
$lang['admin']['mediatype_'] = 'None set : Θα έχει επίπτωση παντού ';
$lang['admin']['mediatype_all'] = 'all : Συμβατό με όλες τις συσκευές.';
$lang['admin']['mediatype_aural'] = 'aural : Προορίζεται για speech synthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : Προορίζεται για συσκευές που εχουν ενσωματωμένη γραφή braille.';
$lang['admin']['mediatype_embossed'] = 'embossed : Intended for paged braille printers.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intended for handheld devices';
$lang['admin']['mediatype_print'] = 'print : Intended for paged, opaque material and for documents viewed on screen in print preview mode.';
$lang['admin']['mediatype_projection'] = 'projection : Intended for projected presentations, for example projectors or print to transparencies.';
$lang['admin']['mediatype_screen'] = 'screen : Intended primarily for color computer screens.';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Intended for television-type devices.';
$lang['admin']['assignmentchanged'] = 'Οι συσχετίσεις της ομάδας ενημερώθηκαν.';
$lang['admin']['stylesheetexists'] = 'Το φύλλο στυλ υπάρχει ήδη';
$lang['admin']['errorcopyingstylesheet'] = 'Σφάλμα κατα την αντιγραφή του φύλλου στυλ';
$lang['admin']['copystylesheet'] = 'Αντιγραφή φύλλου στυλ';
$lang['admin']['newstylesheetname'] = 'Νέα ονομασία του φύλλου στυλ';
$lang['admin']['target'] = 'Στόχος';
$lang['admin']['xml'] = 'Σελίδα XML';
$lang['admin']['xmlmodulerepository'] = 'Διεύθυνση  (URL) του διαχειριστή (ModuleRepository soap server)';
$lang['admin']['metadata'] = 'Μεταδεδομένα';
$lang['admin']['globalmetadata'] = 'Γενικά μεταδεδομένα';
$lang['admin']['titleattribute'] = 'Περιγραφή (ιδιότητα τίτλου)';
$lang['admin']['tabindex'] = 'Καρτέλα Ευρετήριο';
$lang['admin']['accesskey'] = 'Κλειδί πρόσβασης';
$lang['admin']['sitedownwarning'] = '<strong>Προειδοποίηση:</strong> Ο δικτυακός τόπος σας εμφανίζει το μήνυμα "Εκτός λειτουργίας για συντήρηση".  Καταργήσετε το αρχείο %s για την επίλυση του.';
$lang['admin']['deletecontent'] = 'Διαγραφή περιεχομένου';
$lang['admin']['deletepages'] = 'Θα διαγράψετε αυτές τις σελίδες;';
$lang['admin']['selectall'] = 'Επιλογή όλων';
$lang['admin']['selecteditems'] = 'Επιλεγμένα στοιχεία';
$lang['admin']['inactive'] = 'Ανενεργό';
$lang['admin']['deletetemplates'] = 'Διαγραφή προτύπων';
$lang['admin']['templatestodelete'] = 'Τα πρότυπα αυτά θα διαγραφούν';
$lang['admin']['wontdeletetemplateinuse'] = 'Tα πρότυπα αυτά χρησιμοποιούνται και δεν θα διαγραφούν';
$lang['admin']['deletetemplate'] = 'Διαγραφή φύλλου στυλ';
$lang['admin']['stylesheetstodelete'] = 'Αυτά τα φύλλα στυλ θα διαγραφούν';
$lang['admin']['sitename'] = 'Όνομα ιστοσελίδας';
$lang['admin']['siteadmin'] = 'Διαχειριστής ιστοσελίδας';
$lang['admin']['images'] = 'Διαχειριστής εικόνων';
$lang['admin']['blobs'] = 'Γενκά μπλοκ περιεχομένου';
$lang['admin']['groupmembers'] = 'Group Assignments';
$lang['admin']['troubleshooting'] = '(Επίλυση προβλημάτων)';
$lang['admin']['event_desc_loginpost'] = 'Sent after a user logs into the admin panel';
$lang['admin']['event_desc_logoutpost'] = 'Sent after a user logs out of the admin panel';
$lang['admin']['event_desc_adduserpre'] = 'Αποστολή πριν τη δημιουργία νέου χρήστη';
$lang['admin']['event_desc_adduserpost'] = 'Αποστολή μετά τη δημιουργία νέου χρήστη';
$lang['admin']['event_desc_edituserpre'] = 'Sent before edits to a user are saved';
$lang['admin']['event_desc_edituserpost'] = 'Sent after edits to a user are saved';
$lang['admin']['event_desc_deleteuserpre'] = 'Aποστολή πριν τη διαγραφή ενός χρήστη από το σύστημα';
$lang['admin']['event_desc_deleteuserpost'] = 'Αποστολή μετά τη διαγραφή ενός χρήστη από το σύστημα';
$lang['admin']['event_desc_addgrouppre'] = 'Αποστολή πριν τη δημιουργία μιας νέας ομάδας';
$lang['admin']['event_desc_addgrouppost'] = 'Αποστολή μετά τη δημιουργία μιας νέας ομάδας';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'Sent before edits to a group are saved';
$lang['admin']['event_desc_editgrouppost'] = 'Sent after edits to a group are saved';
$lang['admin']['event_desc_deletegrouppre'] = 'Αποστολή πριν τη διαγραφή μιας ομάδας από το σύστημα';
$lang['admin']['event_desc_deletegrouppost'] = 'Αποστολή μετά τη διαγραφή μιας ομάδας από το σύστημα';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sent before a new stylesheet is created';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sent after a new stylesheet is created';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sent before edits to a stylesheet are saved';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sent after edits to a stylesheet are saved';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Αποστολή πριν τη διαγραφή του φύλλου στυλ από το σύστημα';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Αποστολή μετά τη διαγραφή του φύλλου στυλ από το σύστημα';
$lang['admin']['event_desc_addtemplatepre'] = 'Αποστολή πριν τη δημιουργία ενός νέου προτύπου';
$lang['admin']['event_desc_addtemplatepost'] = 'Αποστολή μετά τη δημιουργία ενός νέου προτύπου';
$lang['admin']['event_desc_edittemplatepre'] = 'Sent before edits to a template are saved';
$lang['admin']['event_desc_edittemplatepost'] = 'Sent after edits to a template are saved';
$lang['admin']['event_desc_deletetemplatepre'] = 'Αποστολή πριν τη διαγραφή ενός προτύπου από το σύστημα';
$lang['admin']['event_desc_deletetemplatepost'] = 'Αποστολή μετά τη διαγραφή ενός προτύπου από το σύστημα';
$lang['admin']['event_desc_templateprecompile'] = 'Sent before a template is sent to smarty for processing';
$lang['admin']['event_desc_templatepostcompile'] = 'Sent after a template has been processed by smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Αποστολή πριν τη δημιουργία ενός νέου γενικού μπλοκ περιεχομένου';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Αποστολή μετά τη δημιουργία ενός νέου γενικού μπλοκ περιεχομένου';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sent before edits to a global content block are saved';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sent after edits to a global content block are saved';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Αποστολή πριν τη διαγραφή ενός γενικού μπλοκ περιεχομένου από το σύστημα';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Αποστολή μετά τη διαγραφή ενός γενικού μπλοκ περιεχομένου από το σύστημα';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sent before a global content block is sent to smarty for processing';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sent after a global content block has been processed by smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sent before edits to content are saved';
$lang['admin']['event_desc_contenteditpost'] = 'Sent after edits to content are saved';
$lang['admin']['event_desc_contentdeletepre'] = 'Αποστολή πριν τη διαγραφή του περιεχομένου από το σύστημα';
$lang['admin']['event_desc_contentdeletepost'] = 'Αποστολή μετά τη διαγραφή του περιεχομένου από το σύστημα';
$lang['admin']['event_desc_contentstylesheet'] = 'Αποστολή πριν την αποστολή του φύλλου στυλ στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
$lang['admin']['event_desc_contentprecompile'] = 'Αποστολή πριν την αποστολή του περιεχομένου στο smarty για επεξεργασία';
$lang['admin']['event_desc_contentpostcompile'] = 'Αποστολή μετά την επεξεργασία του περιεχομένου από το smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Αποστολή πριν την αποστολή του html στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
$lang['admin']['event_desc_smartyprecompile'] = 'Sent before any content destined for smarty is sent to for processing';
$lang['admin']['event_desc_smartypostcompile'] = 'Sent after any content destined for smarty has been processed';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Αποστολή πριν τη δημιουργία ενός νέου χρήστη.</p>
<h4>Παράμετροι</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the group object.</li>
<li>\'users\' - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
<li>\'users\' - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Φίλτρο με κριτήριο το δομοστοιχείο';
$lang['admin']['showall'] = 'Εμφάνιση όλων';
$lang['admin']['core'] = 'Πυρήνας';
$lang['admin']['defaultpagecontent'] = 'Προεπιλεγμένο περιεχόμενο σελίδας';
$lang['admin']['file_url'] = 'Σύνδεσμος για το αρχείο (αντί URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'Default Parent Page';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> Ενεργοποίηση της λειτουργίας Ασφάλεια PHP. This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Δοκιμή';
$lang['admin']['results'] = 'Αποτελέσματα ';
$lang['admin']['untested'] = 'Δεν έχει ελεγχθεί ';
$lang['admin']['unknown'] = 'Άγνωστο';
$lang['admin']['download'] = 'Λήψη αρχείου';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'Όλες οι ομάδες';
$lang['admin']['error_type'] = 'Error Type';
$lang['admin']['contenttype_errorpage'] = 'Error Page';
$lang['admin']['errorpagealreadyinuse'] = 'Error Code Already in Use';
$lang['admin']['404description'] = 'Page Not Found';
$lang['admin']['usernotfound'] = 'User Not Found.';
$lang['admin']['passwordchange'] = 'Please, provide the new password';
$lang['admin']['recoveryemailsent'] = 'Email sent to recorded address.  Please check your inbox for further instructions.';
$lang['admin']['errorsendingemail'] = 'There was an error sending the email.  Contact your administrator.';
$lang['admin']['passwordchangedlogin'] = 'Password changed.  Please log in using the new credentials.';
$lang['admin']['nopasswordforrecovery'] = 'No email address set for this user.  Password recovery is not possible.  Please contact your administrator.';
$lang['admin']['lostpw'] = 'Ξεχάσατε των κωδικό εισόδου;';
$lang['admin']['lostpwemailsubject'] = '[%s] Password Recovery';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.2092328696.1274783552.1274783552.1274786166.2';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1274786166.2.2.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cms made simple';
$lang['admin']['qca'] = 'P0-929027343-1274783553463';
$lang['admin']['utmb'] = '156861353.4.10.1274786166';
?>
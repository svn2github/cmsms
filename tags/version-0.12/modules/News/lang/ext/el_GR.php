<?php
$lang['author'] = 'Συντάκτης';
$lang['sysdefaults'] = 'Επαναφορά επιλογών';
$lang['restoretodefaultsmsg'] = 'Αυτή η λειτουργία 8α επαναφέρει τα περιεχόμενα των προτύπων στις προεπιλογές του συστήματος.  Είστε βέβαιοι για την συνέχιση της διαδικασίας?';
$lang['addarticle'] = 'Προσθήκη άρθρου';
$lang['addcategory'] = 'Προσθήκη Κατηγορίας';
$lang['addnewsitem'] = 'Προσθήκη νέας είδησης';
$lang['allcategories'] = 'Εμφάνιση όλων των κατηγοριών';
$lang['allentries'] = 'Εμφάνιση όλων των εγγραφών';
$lang['areyousure'] = 'Είστε σίγουροι για την διαγραφή?';
$lang['articles'] = 'Άρθρα';
$lang['cancel'] = 'Ακύρωση';
$lang['category'] = 'Κατηγορία';
$lang['categories'] = 'Κατηγορίες';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Περιεχόμενο';
$lang['dateformat'] = 'Η ημερομηνία %s δεν έχει την έγκυρη μορφή yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Διαγραφή';
$lang['description'] = 'Προσθήκη,Επεξεργασία και κατάργηση Ειδήσεων';
$lang['detailtemplate'] = 'Μορφή κυρίως προτύπου';
$lang['displaytemplate'] = 'Πρότυπο Εμφάνισης';
$lang['edit'] = 'Επεξεργασία';
$lang['enddate'] = 'Τελική ημερομηνία';
$lang['endrequiresstart'] = 'Η εισαγωγή μιας τελικής ημερομηνίας προυποθέτει την εισαγωγή μιας αρχικής';
$lang['entries'] = '%s Εγγραφές';
$lang['status'] = 'Κατάσταση';
$lang['expiry'] = 'Λήξη';
$lang['filter'] = 'Φίλτρο';
$lang['more'] = 'Περισσότερα';
$lang['moretext'] = 'Περισσότερα';
$lang['name'] = 'Ονομασία';
$lang['news'] = 'Ειδήσεις';
$lang['news_return'] = 'Επιστροφή';
$lang['newcategory'] = 'Νέα κατηγορία';
$lang['needpermission'] = 'Πρέπει να έχετε τα δικαιώματα πρόσβασης του \'%s\' για να εκτελέσετε αυτήν την εργασία.';
$lang['nocategorygiven'] = 'Δεν ορίσατε κατηγορία';
$lang['nocontentgiven'] = 'Δεν ορίσατε περιεχόμενο';
$lang['noitemsfound'] = '<strong>Δέν</strong> ευρέθηκαν στοιχεία για τήν κατηγορία: %s';
$lang['nopostdategiven'] = 'Δεν ορίστηκε ημερομηνία δημοσίευσης';
$lang['note'] = '<em>Σημείωση:</em> Οι ημερομηνίες πρέπει να έχουν την μορφή \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Δεν ορίστηκε τίτλος';
$lang['numbertodisplay'] = 'Αριθμός για εμφάνιση (το κενό εμφανίζει όλες τις εγγραφές)';
$lang['print'] = 'Εκτύπωση';
$lang['postdate'] = 'Ημερομηνία δημοσίευσης';
$lang['postinstall'] = 'Βεβαιωθείτε ότι ορίσατε το δικαίωμα "Τροποποίηση Ειδήσεων" στους χρήστες που θα διαχειρίζονται στοιχείων ειδήσεων.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'Πρότυπο RSS';
$lang['selectcategory'] = 'Επιλογή κατηγορίας';
$lang['showchildcategories'] = 'Εμφάνιση υποκατηγοριών';
$lang['sortascending'] = 'Αύξουσα ταξινόμηση';
$lang['startdate'] = 'Αρχική ημερομηνία';
$lang['startoffset'] = 'Έναρξη εμφάνισης από το στοιχείο με αριθμό';
$lang['startrequiresend'] = 'Η εισαγωγή μιας αρχικής ημερομηνίας απαιτεί την εισαγωγή μιας τελικής στην συνέχεια';
$lang['submit'] = 'Υποβολή';
$lang['summary'] = 'Σύνοψη';
$lang['summarytemplate'] = 'Μορφή προτύπου σύνοψης';
$lang['title'] = 'Τίτλος';
$lang['options'] = 'Επιλογές';
$lang['useexpiration'] = 'Χρήση ημερομηνίας λήξης';
$lang['showautodiscovery'] = 'Ενεργοποίηση της εμφάνισης της υπερσύνδεσης του χαρακτηριστικού "Feed Auto-Discovery"';
$lang['autodiscoverylink'] = 'URL για το χαρακτηριστικό "Feed Auto-Discovery"  (κενό για το προεπιλεγμένο)';
$lang['helpnumber'] = 'Μέγιστος αριθμός εμφανιζόμενων στοιχείων =- Το κενό θα εμφανίσειόλα τα στοιχεία.';
$lang['helpstart'] = 'Έναρξη απο το στοιχείο με αριθμό -- αστο κενό για να ξεκινήσει απο το πρώτο.';
$lang['helpmakerssbutton'] = 'Δημιουργείστε ένα κουμπί για την σύνδεση των ειδήσεων με ένα RSS.';
$lang['helpcategory'] = 'Εμφάνιση των στοιχείων μόνον αυτής της κατηγορίας. Χρησιμοποιείστε * μετα το όνομα για να εμφανιστούν και τα υπόλοιπα.  Μπορείτε να χρησιμοποιείσετε πολλαπλές κατηγορίες με χρήση του κόμματος. Το κενό θα εμφανίσει όλες τις κατηγορίες.';
$lang['helpmoretext'] = 'Κείμενο πυ θα εμφανίζεται στο τέλος μιας είδησης όταν το μέγεθος της ξεπερνά το μέγεθος της σύνοψης. Η πρεπιλοη είναι "περισσότερα..."';
$lang['helpsummarytemplate'] = 'Χρήση ενός διαφορετικού προτύπου για την εμφάνιση της σύνοψης ενός άρθρου.  Το πρότυπο 8α πρέπει να είναι στον κατάλογο modules/News/templates.';
$lang['helpdetailtemplate'] = 'Χρήση ενός διαφορετικού προτύπου για την εμφάνιση του κυρίως άρθρου.  Το πρότυπο 8α πρέπει να είναι στον κατάλογο modules/News/templates.';
$lang['helpsortby'] = 'Ταξινόμηση με βάσει ένα πεδίο.  Οι επιλογές είναι: "Ημερομηνία είδησης", "Σύνοψη", "Δεδομένα ειδήσεων", "Κατηγορία ειδήσεων", "Τίτλος ειδήσεων".  Η προεπιλογή είναι "Ημερομηνία είδησης".';
$lang['helpsortasc'] = 'Ταξινόμηση των στοιχείων των ειδήσεων σε αύξουσα σειρά με βάση την ημερομηνία και όχι φθίνουσα.';
$lang['helpdetailpage'] = 'Επιλογή σελίδας για την εμφάνιση των λεπτομερειών των ειδήσεων.  Μπορεί να είναι το όνομα μιας σελίδας ή ένα αναγνωριστικό. Στο παρελθόν επιτρεπόταν ή εμφάνιση των λεπτομερειών σε διαφορετικό πρότυπο από αυτό της σύνοψης.';
$lang['helpdateformat'] = 'Μορφή εμφάνισης της ημερομηνίας δημοσίευσης άρθρου\'s.  Βασίζεται στην λειτουργία <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> και μπορεί να χρησιμοποιειθεί στο πρότυπο σας με $entry->formatpostdate.  Δημιουργεί την προεπιλογή %x, που είναι η προεπιλογμένη μορφή ημερομηνίας με βάση τις τοπικές ρυθμίσεις του server\'s.';
$lang['help'] = '	<h3>Τι κάνει αυτό?</h3>
	<p>Οι ειδήσεις είναι ένα άρθρωμα για την εμφάνιση συμβάντων ειδήσεων στην σελίδα σας, παρόμοι με νησίδα HTML, αλλά με περισσότερες δυνατότητες!.  Μετά την εγκατάσταση του αρθρώματος προστίθεται μια σελίδα διαχείρισης ειδήσεων στο μενού διαχείρισης που σας επιτρέπει να προσθέσεται μια κατηγορία ειδήσεων.  Μόλις προστεθεί ή επιλεχθεί μια κατηγορία ειδήσεων, μία λίστα απο στοιχεία ειδήσεων που αφορούν την κατηγορία θα εμφανιστεί.  Μετά μπορείτε να προσθέσετε ,επεξεργαστείτε, ή να διαγράψετε στοιχεία αυτής της κατηγορίας ειδήσεων.</p>
	<h3>Ασφάλεια</h3>
	<p>Ο χρήστης πρέπει να ανήκει στην ομάδα με δικαίωμα \'Τροποποίηση Ειδήσεων\' για να επιτραπεί προσθήκη, επεξεργασία ή διαγραφή εγγραφών ειδήσεων.</p>
	<h3>Πώς το χρησιμοποιώ?</h3>
	<p>Ο ποιό εύκολος τρόπος είναι σε συνάρτηση με την κεφαλίδα cms_module.  Ετσι εισάγεται το άρθρωμα στο πρότυπο ή σε σελίδα οπουδήποτε θέλετε να και εμφανίζει τα σοιχεία ειδήσεων.  Δείγμα κώδικα : <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>
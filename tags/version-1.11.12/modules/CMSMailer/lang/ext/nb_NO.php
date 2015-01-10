<?php
$lang['warning_cron_updated'] = 'Denne testen genereres sjeldent, så det kan ta litt tid før varselet forsvinner';
$lang['none'] = 'Ingen';
$lang['ssl'] = 'SSL';
$lang['tls'] = 'TLS';
$lang['secure'] = 'Tilkoblingssikkerhet';
$lang['info_secure'] = 'Kun gyldig for SMTP mailer metoden, hvor denne parameteren tillater å spesifisere en annen sikkerhetsmekanisme for tilkoblingen';
$lang['info_cmsmailer'] = 'Denne modulen benyttes av utallige andre moduler for å muliggjøre sending av epost. Denne må være korrekt satt opp i forhold til din nettstedsvert sine krav. Vennligst bruk informasjonen oppgitt av din vert for å tilpasse disse innstillingene. Om du likevel ikke får test eposten til å sende korrekt - bør du kanskje kontakte din server vert for å få hjelp til dette.';
$lang['charset'] = 'Tegnkoding';
$lang['sendtestmailconfirm'] = 'Dette vil sende en test epost til adressen oppgitt. Om sendeprosessen er vellykket, sendes du tilbake til denne siden. (Om du mottar den eposten så er oppsettet i orden.) Vil du fortsette?';
$lang['settingsconfirm'] = 'Lagre disse verdier til CMSMaileroppsettet?';
$lang['testsubject'] = 'Test av CMSMailer';
$lang['testbody'] = 'Denne e-posten er sendt bare for å verifisere verdiene i oppsettet av CMSMailer-modulen.
Om du mottok denne, fungerer alt fint.';
$lang['error_notestaddress'] = 'Feil: e-postadresse for testing er ikke spesifisert';
$lang['prompt_testaddress'] = 'Test e-postadresse';
$lang['sendtest'] = 'Send testmail';
$lang['password'] = 'Passord';
$lang['username'] = 'Brukernavn';
$lang['smtpauth'] = 'SMTP-autentisering';
$lang['mailer'] = 'Mailermetode';
$lang['host'] = 'SMTP-vertsnavn<br/><i>(eller IP-adresse)</i>';
$lang['port'] = 'SMTP-serverens port';
$lang['from'] = '"Fra"-adresse';
$lang['fromuser'] = '"Fra"-brukernavn';
$lang['sendmail'] = 'Plassering for Sendmail';
$lang['timeout'] = 'SMTP-tidsavbrudd';
$lang['submit'] = 'Lagre';
$lang['cancel'] = 'Avbryt';
$lang['info_mailer'] = 'Mail metode å benytte (sendmail, smtp, mail).  Smtp er vanligvis mest å stole på.';
$lang['info_host'] = 'SMTP-vertsnavn (kun gyldig for smtp mailermetoden)';
$lang['info_port'] = 'SMTP-portnummer (vanligvis 25) (kun gyldig for smtp mailermetoden)';
$lang['info_from'] = 'Adresse brukt som avsender på alle e-poster.
<br/><strong>Merk</strong>, denne e-postadressen må settes korrekt i forhold til din vert, ellers vil du får problemer med å sende e-post.<br/>Om du ikke vet hva som skal stå her, bør du kontakte din leverandør.';
$lang['info_fromuser'] = 'Friendly-navn brukt for å sende alle e-poster';
$lang['info_sendmail'] = 'Full sti til sendmails programfil (kun gyldig for sendmail mailermetoden)';
$lang['info_timeout'] = 'Antall sekunder i en SMTP-samtale før feil meldes (gyldig for smtp mailer metoden)';
$lang['info_smtpauth'] = 'Krever din SMTP-vert autentisering (kun gyldig for smtp mailer metoden)?';
$lang['info_username'] = 'Brukernavn for SMTP-autentisering (kun gyldig for smtp mailermetoden, når smtp aut. er valgt)';
$lang['info_password'] = 'Passord for SMTP-autentisering (kun gyldig for smtp mailermetoden, når smtp autentisering er valgt)';
$lang['friendlyname'] = 'CMS Mailer';
$lang['postinstall'] = 'CMSMailer-modulen har blitt installert';
$lang['postuninstall'] = 'CMSMailer-modulen er avinstallert';
$lang['uninstalled'] = 'Modulen ble avinstallert';
$lang['installed'] = 'Modul med versjon %s installert.';
$lang['accessdenied'] = 'Ingen tilgang. Vennligst sjekk dine rettigheter.';
$lang['error'] = 'Feil!';
$lang['upgraded'] = 'Modulen ble oppgradert til versjon %s.';
$lang['settings_title'] = 'Innstillinger';
$lang['test_title'] = 'Teste';
$lang['title_mod_prefs'] = 'Modulinnstillinger';
$lang['title_mod_admin'] = 'Administrasjonspanel for modul';
$lang['title_admin_panel'] = 'CMSMailer';
$lang['moddescription'] = 'Dette er en enkel wrapper omkring PHPMailer, den har en tilsvarende API (funksjon for funksjon) og enkelt grensesnitt for noen standarder.';
$lang['changelog'] = '<ul>
<li>Version 1.73.1. October, 2005. Initial Release.</li>
<li>Version 1.73.2. October, 2005. Minor bug fix with the admin panel.  The dropdown was not representing the current value from the preferences database</li>
<li>Version 1.73.3. October, 2005. Minor bug fix with sending html email</li>
<li>Version 1.73.4. November, 2005. Form fields in preferences are larger, fixed a problem with the fromuser, and called reset within the constructor</li>
<li>Version 1.73.5. November, 2005. Added the form fields and functionality for SMTP authentication.</li>
<li>Version 1.73.6. December, 2005. Default mailer method is SMTP on install, and improved documentation, and now I clear all the attachments, and addresses, etc. on reset.</li>
<li>Version 1.73.7. January, 2006. Increased field lengths in most fields</li>
<li>Version 1.73.8. January, 2006. Changed the preferences panel to be a bit more descriptive.</li>
<li>Version 1.73.9. January, 2006. Added test email capability, and confirmation on each button (except cancel)</li>
<li>Version 1.73.10. August, 2006. Modified to use lazy loading to minimize memory footprint when CMSMailer is not being used.</li>
<li>Version 1.73.13. January, 2008.  Added more permissions checks.</li>
<li>Version 2.0.1 - January, 2011 - Remove cancel button.</li>
<li>Version 2.0.2 - September, 2011 - Set default charset to utf-8.</li>
<li>Version 5.2.1 - June, 2012 - Update of library files.</li>
</ul>';
?>
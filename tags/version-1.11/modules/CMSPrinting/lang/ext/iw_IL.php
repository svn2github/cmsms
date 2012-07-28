<?php
$lang['friendlyname'] = 'הדפסה';
$lang['description'] = 'מודול זה הוא בדרך להתאמה בקלות לספק המדפסת דפי ידידותית עבור CMSms.
לחלופין בסיסית מאוד PDF קובץ עם התוכן הראשי ניתן ליצור on-the-fly.';
$lang['postinstall'] = 'המודול הותקן בהצלחה';
$lang['confirmuninstall'] = 'האם אתה בטוח המודול צריך להסיר?';
$lang['postuninstall'] = 'המודול היה הוסר בהצלחה';
$lang['linktemplate'] = 'קישור תבנית';
$lang['printtemplate'] = 'הדפס תבנית';
$lang['pdftemplate'] = 'תבנית PDF';
$lang['templatesaved'] = 'התבנית ניצל';
$lang['templatereset'] = 'התבנית היה לאפס את ערך ברירת המחדל שלה';
$lang['confirmresettemplate'] = 'האם אתה בטוח התבנית צריך לאפס את ערך ברירת המחדל שלו?';
$lang['reset'] = 'איפוס ברירת מחדל';
$lang['save'] = 'שמור';
$lang['upgraded'] = 'שודרג לגרסה %s';
$lang['savetemplate'] = 'שמור תבנית';
$lang['savesettings'] = 'שמור הגדרות';
$lang['pdfsettings'] = 'הגדרות PDF';
$lang['pdfsettingssaved'] = 'הגדרות PDF נשמרו';
$lang['pdfheader'] = 'PDF האדר';
$lang['pdfenable'] = 'הפעל יצירת PDF';
$lang['pdfenablehelp'] = 'אתה צריך לדעת כי PDF הדור הוא בסיסי מאוד רק פלט הבסיסית ביותר של התוכן.
השתמש ב יהיה, אבל בבקשה לא להתלונן על איכות התוצאה.';
$lang['headerfontsize'] = 'כותרת גודל גופן';
$lang['contentfontsize'] = 'תוכן גודל גופן';
$lang['fonttypetext'] = 'גופן מסוג';
$lang['fontserif'] = 'Serif ';
$lang['fontsansserif'] = 'Sans Serif ';
$lang['orientation'] = 'התמצאות';
$lang['landscape'] = 'רוחב';
$lang['portrait'] = 'גובה';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'תבנית';
$lang['notemplatecontent'] = 'אין תבנית חדשה התוכן נתון ...';
$lang['defaultlinktext'] = 'הדפס דף זה';
$lang['defaultpdflinktext'] = 'צור PDF';
$lang['backbuttontext'] = 'לחזור';
$lang['overridestylereset'] = 'stylesheet לעקוף אופסה';
$lang['overridestylesaved'] = 'Stylesheet לעקוף נשמר';
$lang['overridestyle'] = 'דריסת stylesheet הדפסה';
$lang['confirmresetstyle'] = 'האם אתה בטוח stylesheet צריך לאפס?';
$lang['stylesheet'] = 'Stylesheet ';
$lang['help_text'] = 'דריסת טקסט ברירת המחדל עבור להדפיס את / PDF הקישור';
$lang['help_pdf'] = 'קבע את זה "true" להראות קישור ליצירת קובץ PDF, קובץ של תוכן הדף הראשי במקום הדפסה';
$lang['help_popup'] = 'הגדר ל \'true\' ו הדף להדפסה יהיה לפתוח בחלון חדש.';
$lang['help_script'] = 'הגדר ל \'אמת\' ו ב javascript דף הדפסה ישמשו באופן אוטומטי להראות להדפסה שיח';
$lang['help_showbutton'] = 'הגדרת "אמת" כדי להראות על כפתור גרפי';
$lang['help_class'] = 'Class עבור הקישור, ברירת המחדל היא noprint \'';
$lang['help_src_img'] = 'הצג תמונת קובץ זה במקום ברירת המחדל';
$lang['help_class_img'] = 'מחלקה של תג <img> אם showbutton מוגדר';
$lang['help_more'] = 'מקום אפשרויות נוספות בתוך הקישור <a>';
$lang['help_onlyurl'] = 'פלטי רק את כתובת האתר, לא הקישור המלא';
$lang['help_includetemplate'] = 'אם להגדיר את "נכון" זה עושה את אפשרויות ההדפסה / תהליך PDF התבנית כולה, ולא רק את התוכן העיקרי. זה כנראה דורש קצת עבודה על סגנונות ספציפיים להדפסה עם mediatype "הדפסה" מופעלת.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an basic on-the-fly-generated pdf version of the page.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. And note
that the pdf-file outputted may not have much resemblance with you page, but should provide the content.
<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it\'s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=\'printing\' <i>params</i>}
</pre>
or simply
<pre>
{print <i>params</i>}
</pre>
using the print-plugin
<br/>
';
$lang['qca'] = 'P0-1045698296-1254984215802';
$lang['utmz'] = '156861353.1272806149.13.6.utmcsr=4x6hp.net|utmccn=(referral)|utmcmd=referral|utmcct=/main/admin/listmodules.php';
$lang['utma'] = '156861353.1828747128.1254984216.1273156255.1273476142.22';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1273476142';
?>
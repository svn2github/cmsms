/* Import theme specific language pack */
tinyMCE.importPluginLanguagePack('plaintext', 'en,de,pl,pt_br');

function TinyMCE_plaintext_getControlHTML(control_name) {
    switch (control_name) {
        case "plaintext":
            return '<img id="{$editor_id}plaintext" src="{$pluginurl}/images/plaintext.gif" title="{$lang_insert_plaintext_desc}" width="20" height="20" class="mceButtonNormal" onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');" onmouseout="tinyMCE.restoreClass(this);" onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');" onclick="tinyMCE.execInstanceCommand(\'{$editor_id}\',\'mcePlainText\');" />';
    }
    return "";
}

function TinyMCE_plaintext_execCommand(editor_id, element, command, user_interface, value) {
    // Handle commands
    switch (command) {
        case "mcePlainText":
            var template = new Array();
            template['file']   = '../../plugins/plaintext/plaintext.htm'; // Relative to theme
            template['width']  =450;
            template['height'] = 400;
            var plain_text = "";
            tinyMCE.openWindow(template, {editor_id : editor_id, plain_text: plain_text, mceDo : 'insert'});
       return true;
   }
   // Pass to next handler in chain
   return false;
}



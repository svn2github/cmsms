/**
 * $RCSfile: editor_plugin_src.js,v $
 * $Revision: 0.1 $
 * $Date: 2006/04/15 20:06:23 $
 *
 * @author Stefan Roellin
 * @copyright Copyright © 2004-2006, All rights reserved.
 */

/* Import plugin specific language pack */
tinyMCE.importPluginLanguagePack('cmsmslink', 'en,tr,he,nb,ru,ru_KOI8-R,ru_UTF-8,nn,fi,cy,es,is,pl'); // <- Add a comma separated list of all supported languages


// Singleton class
var TinyMCE_CMSMSLinkPlugin = {
	/**
	 * Returns information about the plugin as a name/value array.
	 * The current keys are longname, author, authorurl, infourl and version.
	 *
	 * @returns Name/value array containing information about the plugin.
	 * @type Array 
	 */
	getInfo : function() {
		return {
			longname : 'CMSMSLink plugin',
			author : 'Stefan Roellin',
			authorurl : '-',
			infourl : '-',
			version : "1.0"
		};
	},

	/**
	 * Gets executed when a TinyMCE editor instance is initialized.
	 *
	 * @param {TinyMCE_Control} Initialized TinyMCE editor control instance. 
	 */
	initInstance : function(inst) {

		// Register custom keyboard shortcut
//		inst.addShortcut('ctrl', 't', 'lang_cmsmslink_desc', 'mceCMSMSLink');
	},

	/**
	 * Returns the HTML code for a specific control or empty string if this plugin doesn't have that control.
	 * A control can be a button, select list or any other HTML item to present in the TinyMCE user interface.
	 * The variable {$editor_id} will be replaced with the current editor instance id and {$pluginurl} will be replaced
	 * with the URL of the plugin. Language variables such as {$lang_somekey} will also be replaced with contents from
	 * the language packs.
	 *
	 * @param {string} cn Editor control/button name to get HTML for.
	 * @return HTML code for a specific control or empty string.
	 * @type string
	 */
	getControlHTML : function(cn) {
		switch (cn) {
			case "cmsmslink":
				return tinyMCE.getButtonHTML(cn, 'lang_cmsmslink_description', '{$pluginurl}/images/cmsmslink.gif', 'mceCMSMSLink', true);
		}

		return "";
	},

	/**
	 * Executes a specific command, this function handles plugin commands.
	 *
	 * @param {string} editor_id TinyMCE editor instance id that issued the command.
	 * @param {HTMLElement} element Body or root element for the editor instance.
	 * @param {string} command Command name to be executed.
	 * @param {string} user_interface True/false if a user interface should be presented.
	 * @param {mixed} value Custom value argument, can be anything.
	 * @return true/false if the command was executed by this plugin or not.
	 * @type
	 */
	execCommand : function(editor_id, element, command, user_interface, value) {
		// Handle commands
		switch (command) {
			// Remember to have the "mce" prefix for commands so they don't intersect with built in ones in the browser.
			case "mceCMSMSLink":
                                var anySelection = false;
                                var inst = tinyMCE.getInstanceById(editor_id);
                                var focusElm = inst.getFocusElement();
                                var selectedText = inst.selection.getSelectedText();

                                if (tinyMCE.selectedElement)
                                        anySelection = (tinyMCE.selectedElement.nodeName.toLowerCase() == "img") || (selectedText && selectedText.length > 0);

				var cmsmslink = new Array();

				cmsmslink['file'] = '../../plugins/cmsmslink/popup.php'; // Relative to theme
				cmsmslink['width'] = 500;
				cmsmslink['height'] = 300;

				tinyMCE.openWindow(cmsmslink, {editor_id : editor_id});

                                return true;
		}

		// Pass to next handler in chain
		return false;
	},

	/**
	 * Gets called ones the cursor/selection in a TinyMCE instance changes. This is useful to enable/disable
	 * button controls depending on where the user are and what they have selected. This method gets executed
	 * alot and should be as performance tuned as possible.
	 *
	 * @param {string} editor_id TinyMCE editor instance id that was changed.
	 * @param {HTMLNode} node Current node location, where the cursor is in the DOM tree.
	 * @param {int} undo_index The current undo index, if this is -1 custom undo/redo is disabled.
	 * @param {int} undo_levels The current undo levels, if this is -1 custom undo/redo is disabled.
	 * @param {boolean} visual_aid Is visual aids enabled/disabled ex: dotted lines on tables.
	 * @param {boolean} any_selection Is there any selection at all or is there only a cursor.
	 */
	handleNodeChange : function(editor_id, node, undo_index, undo_levels, visual_aid, any_selection) {
		// Select cmsmslink button if parent node is a strong or b
		if (node.parentNode.nodeName == "STRONG" || node.parentNode.nodeName == "B") {
			tinyMCE.switchClass(editor_id + '_cmsmslink', 'mceButtonSelected');
			return true;
		}

		// Deselect cmsmslink button
		tinyMCE.switchClass(editor_id + '_cmsmslink', 'mceButtonNormal');
	},

	/**
	 * Gets called when TinyMCE handles events such as keydown, mousedown etc. TinyMCE
	 * doesn't listen on all types of events so custom event handling may be required for
	 * some purposes.
	 *
	 * @param {Event} e HTML editor event reference.
	 * @return true - pass to next handler in chain, false - stop chain execution
	 * @type boolean
	 */
	handleEvent : function(e) {
		// Display event type in statusbar
		top.status = "cmsmslink plugin event: " + e.type;

		return true; // Pass to next handler
	},

        handleNodeChange : function(editor_id, node, undo_index, undo_levels, visual_aid, any_selection) {
                if (node == null)
                        return;

                do {
                        if (node.nodeName == "A" && tinyMCE.getAttrib(node, 'href') != "") {
                                tinyMCE.switchClass(editor_id + '_cmsmslink', 'mceButtonSelected');
                                return true;
                        }
                } while ((node = node.parentNode));

                tinyMCE.switchClass(editor_id + '_cmsmslink', 'mceButtonNormal');

                return true;
        }
};

// Adds the plugin class to the list of available TinyMCE plugins
tinyMCE.addPlugin("cmsmslink", TinyMCE_CMSMSLinkPlugin);

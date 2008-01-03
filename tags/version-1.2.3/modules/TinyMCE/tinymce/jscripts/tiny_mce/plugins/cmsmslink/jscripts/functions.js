/* Functions for the advlink plugin popup */

var templates = {
	"window.open" : "window.open('${url}','${target}','${options}')"
};

function init() {
		var inst = tinyMCE.selectedInstance;
		var elm = inst.getFocusElement();
		var action = "insert";

                elm = tinyMCE.getParentElement(elm, "a");
                if (elm != null && elm.nodeName == "A")
                       action = "update";
       
//                formObj.insert.value = tinyMCE.getLang('lang_' + action, 'Insert', true); 
       
//                setPopupControlsDisabled(true);
       
                if (action == "update") {
                    var href = tinyMCE.getAttrib(elm, 'href');
       	  	    document.forms[0].cmbPages.value = href.replace(/.*index.php\?page\=/,'');
		    var	mypage = "Page" + document.forms[0].cmbPages.value;
		    if( elm.firstChild.nodeValue == document.forms[0].elements[mypage].value ) {
			document.forms[0].elements["isdefaulttext"].value = 1;
                    }
		}
}

function setAllAttribs(elm) {
	var formObj = document.forms[0];
	var href = formObj.cmbPages.value;

       	setAttrib(elm, 'href', 'index.php?page='+href );
       	setAttrib(elm, 'class', 'tinyreplace' );

	// Refresh in old MSIE
	if (tinyMCE.isMSIE5)
		elm.outerHTML = elm.outerHTML;
}

function insertTaglink(inst, pageid) {
	var selectedHTML = inst.selection.getSelectedHTML();
	var insertText = '{cms_selflink page=\'' + pageid + '\'';
	if( selectedHTML.length == 0 ) {
		insertText = insertText + '}';
        } else {
		insertText = insertText + ' text=\''+selectedHTML+'\'}';
	}
	tinyMCEPopup.execCommand("mceInsertContent", false, insertText );
}

function insertStandardLink(inst, pageId) {

	var elm = inst.getFocusElement();

	elm = tinyMCE.getParentElement(elm, "a");

	if (elm != null) 
	{
		if( document.forms[0].elements["isdefaulttext"].value == 1 ) {
			var mypage = "Page" + pageId;
			tinyMCE.setInnerHTML( elm, document.forms[0].elements[mypage].value );
		}
		setAllAttribs(elm);
		return;
	}

	// Create new anchor elements
        var selectedText = inst.selection.getSelectedText();
	var selectedHTML = inst.selection.getSelectedHTML();
	if( selectedText.length == 0 && selectedHTML.length == 0) {
		var mypage = "Page" + pageId;
		tinyMCEPopup.execCommand("mceInsertContent", false, '<a href="#mce_temp_url#">' + document.forms[0].elements[mypage].value + '</a>');
	} else {

		if (tinyMCE.isSafari)
			tinyMCEPopup.execCommand("mceInsertContent", false, '<a href="#mce_temp_url#">' + inst.selection.getSelectedHTML() + '</a>');
		else
			tinyMCEPopup.execCommand("createlink", false, "#mce_temp_url#");
	}

	var elementArray = tinyMCE.getElementsByAttributeValue(inst.getBody(), "a", "href", "#mce_temp_url#");
	for (var i=0; i<elementArray.length; i++) {
		var elm = elementArray[i];

		// Move cursor behind the new anchor
		if (tinyMCE.isGecko) {
			var sp = inst.getDoc().createTextNode(" ");

			if (elm.nextSibling)
				elm.parentNode.insertBefore(sp, elm.nextSibling);
			else
				elm.parentNode.appendChild(sp);

			// Set range after link
			var rng = inst.getDoc().createRange();
			rng.setStartAfter(elm);
			rng.setEndAfter(elm);

			// Update selection
			var sel = inst.getSel();
			sel.removeAllRanges();
			sel.addRange(rng);
		}

		setAllAttribs(elm);
	}
}

function insertAction() {

	var oPageList = document.forms[0].cmbPages;

        if( oPageList.selectedIndex == -1 ) {
              alert('Please select a page in order to create a link');
              return false;
        }

	tinyMCEPopup.execCommand("mceBeginUndoLevel");

	var pageId = oPageList.value;
	var inst = tinyMCE.getInstanceById(tinyMCE.getWindowArg('editor_id'));

	if( document.forms[0].elements["replacecmsselflink"].value == 0 && 
	    document.forms[0].elements["taglink"].checked == true ) 
	{	
		insertTaglink(inst,pageId);
	} else {
		insertStandardLink(inst,pageId);
	}

	tinyMCE._setEventsEnabled(inst.getBody(), false);
	tinyMCEPopup.execCommand("mceEndUndoLevel");
	tinyMCEPopup.close();
}

function setAttrib(elm, attrib, value) {
        var formObj = document.forms[0];
        var valueElm = formObj.elements[attrib.toLowerCase()];

        if (typeof(value) == "undefined" || value == null) {
                value = "";

                if (valueElm)
                        value = valueElm.value;
        }

        if (value != "") {
                elm.setAttribute(attrib.toLowerCase(), value);

                if (attrib == "style")
                        attrib = "style.cssText";

                if (attrib.substring(0, 2) == 'on')
                        value = 'return true;' + value;

                if (attrib == "class")
                        attrib = "className";

                eval('elm.' + attrib + "=value;");
        } else
                elm.removeAttribute(attrib);
}




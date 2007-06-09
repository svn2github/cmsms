This is a plugin for TinyMCE that allows to make an internal link on a CMSMS site.

Code based on 
 - plugin advlink from TinyMCE
 - CMSContent plugin from FCKeditorX module 

Icon from CMSContent plugin from FCKeditorX module

Configuration:

tinyMCE.init({
	theme : "advanced",
	plugins : "cmsmslink",
	theme_advanced_buttons3_add : "cmsmslink"
});
Simple Browser Plugin Version 2.1
Andrew Tetlaw - 2006/02 - TinyMCE 2.0.3 and above
A port of the FCKEditor file browser as a TinyMCE plugin.
http://tetlaw.id.au/view/blog/fckeditor-file-browser-plugin-for-tinymce-editor/

Configuration (PHP connector shown):

tinyMCE.init({
      theme : "advanced",
      plugins : "simplebrowser",
      plugin_simplebrowser_width : '800'; //default
      plugin_simplebrowser_height : '600'; //default
      plugin_simplebrowser_browselinkurl : 'tinymce/jscripts/tiny_mce/plugins/simplebrowser/browser.html?Connector=connectors/php/connector.php',
      plugin_simplebrowser_browseimageurl : 'tinymce/jscripts/tiny_mce/plugins/simplebrowser/browser.html?Type=Image&Connector=connectors/php/connector.php',
      plugin_simplebrowser_browseflashurl : 'tinymce/jscripts/tiny_mce/plugins/simplebrowser/browser.html?Type=Flash&Connector=connectors/php/connector.php'
  });

Change Log:

	Version 2.1

    * Updated connectors from FCKEditor 2.2
    * Fixed connectors/test.html initial blank page not found error in iframe
    * updated documentation

	Version 2.0

    * Changed for new TinyMCE 2.0.3 plugin format and tidy up
    * Proper packaging - editor_plugin_src.js
    * Plugin automatically sets 'file_browser_callback' option
    * Added height and width options

{if $avoidlinkconversion=='1'}
{literal}
function CMSMSURLConverter(url, node, on_save) {
	// Return "new" URL
  //if (url.match(/\.jpg/i)!=null || url.match(/\.png/i)!=null || url.match(/\.gif/i)!=null || url.match(/\.jpeg/i)!=null) {
  //  return tinyMCE.activeEditor.convertURL(url, node, on_save); //doesn't work... bug in Tiny I think...
  //}
	return url;
}
{/literal}
{/if}


{literal} tinyMCE.init({ {/literal}
  {* Setup *}
  mode : "{$startupmode}",
  elements : "{$textareas}",
  body_class : "CMSMSBody",
  content_css : "{$css}",
{if $avoidlinkconversion=='1'}
  urlconverter_callback : "CMSMSURLConverter",
{/if}

  {* //Performance *}
  entity_encoding : "{$encoding}", 
  button_tile_map : true, //performance update

	{* //Visual *}	
  theme : "advanced",
  skin : "{$skin}",
  skin_variant : "{$skinvariation}",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  visual : true,
	      
  accessibility_warnings : false,
      			
  fix_list_elements : true,
  verify_html : true,
  verify_css_classes : false,
  
  plugins : "-cmslinker,-customdropdown,{$plugins}{$module_plugins}",
  
  paste_auto_cleanup_on_paste : true,
  paste_remove_spans : true,
  paste_remove_styles : true,

  {if $allowresizing!="none"}
  theme_advanced_resizing : true,
    {if $allowresizing=="height"}
  theme_advanced_resize_horizontal : false,
    {/if}
  {/if}


  theme_advanced_buttons1 : "{if isset($toolbar1)}{$toolbar1}{/if}",
  theme_advanced_buttons2 : "{if isset($toolbar2)}{$toolbar2}{/if}",
  theme_advanced_buttons3 : "{if isset($toolbar3)}{$toolbar3}{/if}",
  theme_advanced_buttons4 : "{if isset($toolbar4)}{$toolbar4}{/if}",


  theme_advanced_blockformats : "{$blockformats}",
  document_base_url : "{$rooturl}/",

{if $relativeurls=="true"}
  relative_urls : true,
  remove_script_host : true,
{else}
  relative_urls : false,
  remove_script_host : false,
{/if}
  	
  language: "{$language}",
  dialog_type: "modal",
  apply_source_formatting : {$sourceformatting},

{if $showpath!=''}
  theme_advanced_statusbar_location : 'bottom',
  theme_advanced_path : true,
{/if}
			
{if $editorwidth!=''}
  width : {$editorwidth},
{/if}
{if $editorheight!=''}
  height : {$editorheight},
{/if}
		
	force_br_newlines : {$force_br_newlines},
  force_p_newlines : {$force_p_newlines},		
			 
  forced_root_block : {$forcedrootblock},		
		
  plugin_insertdate_dateFormat : "{$dateformat}",
  plugin_insertdate_timeFormat : "{$timeformat}"

{* From here statements should start with , as it's not certaain anymore is coming *}

{if $css_styles!=''}
  ,theme_advanced_styles : '{$css_styles}'
{/if}
{if $extraconfig!=''}
  {$extraconfig}
{/if}

  {if $isfrontend=='false'}
  ,file_browser_callback : 'CMSMSFilePicker'
  {/if}
  {literal}
});
  {/literal}
	
  {literal}
function toggleEditor(id) {
  if (!tinyMCE.getInstanceById(id))
    tinyMCE.execCommand('mceAddControl', false, id);
  else
    tinyMCE.execCommand('mceRemoveControl', false, id);
}
  {/literal}

  {if $isfrontend=='false'}
  {literal}
function CMSMSFilePicker (field_name, url, type, win) {
  {/literal}   
  var cmsURL = "{$filepickerurl}&type="+type+"&showtemplate=false";
  //"{$rooturl}/modules/TinyMCE/filepicker.php{$urlext}&type="+type;
  {literal}
  tinyMCE.activeEditor.windowManager.open({
  {/literal}
    file : cmsURL,
    title : '{$filepickertitle}',
    width : '{$fpwidth}',
    height : '{$fpheight}',
    resizable : "yes",
    scrollbars : "yes",
    inline : "yes",  {* This parameter only has an effect if you use the inlinepopups plugin! *}
    close_previous : "no"
  {literal}
  }, {
    window : win,
    input : field_name
  });
  return false;
}
{/literal}
{/if}

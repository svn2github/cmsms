
{literal} tinyMCE.init({ {/literal}
  {* Setup *}		
  mode : "exact",
  elements : "{$textareas}",
  content_css : "{$css}",

  {* //Performance *}	
  entity_encoding : "{$encoding}", 
  button_tile_map : true, //performance update

	{* //Visual *}	
  theme : "advanced",
  skin : "{$skin}",
  skin_variant : "{$skinvariation}",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
	      
  accessibility_warnings : false,
      			
  fix_list_elements : true,
  verify_html : true,
  verify_css_classes : false,

  plugins : "-cmslinker,-customdropdown,{$plugins}",

  theme_advanced_buttons1 : "{$toolbar1}",
  theme_advanced_buttons2 : "{$toolbar2}",  
  theme_advanced_buttons3 : "{if isset($toolbar3)}{$toolbar3}{/if}",

  theme_advanced_blockformats : "{$blockformats}",
  document_base_url : "{$rooturl}/",

  relative_urls : {$relativeurls},
  remove_script_host : false,
  	
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
  plugin_insertdate_timeFormat : "{$timeformat}",			

{if $css_styles!=''}
  theme_advanced_styles : '{$css_styles}',
{/if}
			
{$extraconfig}
	
  file_browser_callback : 'CMSMSFilePicker'
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
	
  {literal}
function CMSMSFilePicker (field_name, url, type, win) {
  {/literal}   
  var cmsURL = "{$rooturl}/modules/TinyMCE/filepicker.php?type="+type;
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

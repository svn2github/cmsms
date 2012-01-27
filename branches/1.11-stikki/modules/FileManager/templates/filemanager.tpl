{if !isset($noform)}
<h2>{$currentpath} {$path}</h2>

<div>
  {$dirformstart}
  {$hiddenpath}
  {$newdirnametext} {$newdirnameinput}
  {$dirsubmit}<input id="refresh" type="button" value="{$mod->Lang('refresh')}"/>
  {$dirformend}
</div>
<br/>
<fieldset>
<div>
  {$formstart}
  {$hiddenpath}
  {literal}
  <script type="text/javascript">
  var refresh_url = '{/literal}{$refresh_url}{literal}'+'&showtemplate=false';
  refresh_url = refresh_url.replace(/amp;/g,'');
  // <![CDATA[
  function selectall() {
  	checkboxes = document.getElementsByTagName("input");
	  for (i=0; i<checkboxes.length ; i++) {
	    if (checkboxes[i].type == "checkbox") checkboxes[i].checked=!checkboxes[i].checked;
	  }
  }
  $(document).ready(function(){
    $('#refresh').unbind('click');
    $('#refresh').live('click',function(){
      alert('foo');
      $('#filesarea').load(refresh_url);
      return false;
    });
  });
  // ]]>
  </script>{/literal}
  <div id="filesarea">  
{/if}

  <table width="100%" class="pagetable" cellspacing="0">
  <thead>
  <tr>
    <th class="pageicon">&nbsp;</th>
    <th>{$filenametext}</th>
    <th class="pageicon">{$fileinfotext}</th>
    <th class="pageicon">{$fileownertext}</th>
    <th class="pageicon">{$filepermstext}</th>
    <th class="pageicon" style="text-align:right;">{$filesizetext}</th>
    <th class="pageicon">&nbsp;</th>
    <th class="pageicon">{$filedatetext}</th>
    <th class="pageicon">{$actionstext}</th>
    <th class="pageicon">{$tagallinput}</th>
  </tr>
  </thead>
  <tbody>
  {foreach from=$files item=file}
	{cycle values="row1,row2" assign=rowclass}
  <tr class="{$rowclass}">
    
    <td valign="middle">{if isset($file->thumbnail) && $file->thumbnail!=''}{$file->thumbnail}{else}{$file->iconlink}{/if}</td>
    <td valign="middle">{$file->txtlink}</td>
    <td style="padding-right:8px;" valign="middle">{$file->fileinfo}</td>
    <td style="padding-right:8px;" valign="middle">{if isset($file->fileowner)}{$file->fileowner}{else}&nbsp;{/if}</td>
    <td style="padding-right:8px;" valign="middle">{$file->filepermissions}</td>
    <td style="padding-right:2px;text-align:right;" valign="middle">{$file->filesize}</td>
    <td style="padding-right:8px;" valign="middle">{if isset($file->filesizeunit)}{$file->filesizeunit}{else}&nbsp;{/if}</td>
    <td style="padding-right:8px;" valign="middle">{$file->filedate|cms_date_format}</td>
    <td valign="middle">
    
    <table cellspacing="0" border="0">
    <tr>    
    <td valign="middle">{$file->renameaction}</td>
    <td valign="middle">{$file->chmodaction}</td>
    <td valign="middle">{$file->deleteaction}</td>
    <td valign="middle">{$file->writeprotected}</td>
    </tr>
    </table>
    
    </td>
    <td>
    {$file->checkbox}
    </td>
  
  </tr>
  {/foreach}
  <tr>
    <td>&nbsp;</td>
    <td colspan="7">{$countstext}</td>
  </tr>
  </tbody>
  </table>

{if !isset($noform)}
  </div>
  {$actiondropdown}{$targetdir}{$okinput}
  {$formend}
</div>
</fieldset>
{/if}  

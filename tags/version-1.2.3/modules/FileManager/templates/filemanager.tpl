<h2>{$currentpath} {$path}</h2>

<div style='float:right;width:220px;'>
  {$dirformstart}
  {$hiddenpath}
  {$newdirnametext} {$newdirnameinput}
  {$dirsubmit}
  {$dirformend}
</div>

<div style='margin-right:200px'>
  {$formstart}
  {$hiddenpath}
  {literal}
  <script type="text/javascript">
  // <![CDATA[
  function selectall() {
  	checkboxes = document.getElementsByTagName("input");
	  for (i=0; i<checkboxes.length ; i++) {
	    if (checkboxes[i].type == "checkbox") checkboxes[i].checked=!checkboxes[i].checked;
	  }
  }
  // ]]>
  </script>
  {/literal}
  {$actiondropdown}{$okinput}
  <table width="100%" class="pagetable" cellspacing="0">
  <thead>
  <tr>
    <th class="pageicon">{$tagallinput}</th>
    <th>{$filenametext}</th>
    <th class="pageicon">{$fileinfotext}</th>
    <th class="pageicon">{$fileownertext}</th>
    <th class="pageicon">{$filepermstext}</th>
    <th class="pageicon">{$filesizetext}</th>
    <th class="pageicon">{$filedatetext}</th>
    <th class="pageicon">{$actionstext}</th>
  </tr>
  </thead>
  <tbody>
  {foreach from=$files item=file}
	{cycle values="row1,row2" assign=rowclass}
  <tr class="{$rowclass}" onmouseover="this.className='{$rowclass}hover';" onmouseout="this.className='{$rowclass}';">
    <td>{$file->checkbox}</td>
    <td>{$file->iconlink} {$file->txtlink}</td>
    <td style="padding-right:8px;">{$file->fileinfo}</td>
    <td style="padding-right:8px;">{$file->fileowner}</td>
    <td style="padding-right:8px;">{$file->filepermissions}</td>
    <td style="padding-right:8px;">{$file->filesize}</td>
    <td style="padding-right:8px;">{$file->filedate}</td>
    <td>{$file->fileaction}</td>
  
  </tr>
  {/foreach}
  <tr>
    <td>&nbsp;</td>
    <td colspan="6">{$countstext}</td>
  </tr>
  </tbody>
  </table>
  {$actiondropdown}{$okinput}
  {$formend}
</div>
  

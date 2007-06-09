{if isset($formstart) }
<fieldset>
  <legend>{$filtertext}</legend>
  {$formstart}
  <div class="pageoverflow">
    <p class="pagetext">{$prompt_category}:</p>
    <p class="pageinput">{$input_category} {$prompt_showchildcategories}: {$input_allcategories}</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$prompt_sorting}:</p>
    <p class="pageinput">{$input_sorting}</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">{$prompt_pagelimit}:</p>
    <p class="pageinput">{$input_pagelimit}</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">&nbsp;</p>
    <p class="pageinput">{$submitfilter}{$hidden}</p>
  </div>
  {$formend}
</fieldset>
{/if}

{if $itemcount > 0}
<div class="pageoptions">
	<p class="pageoptions">{$addlink}</p>
</div>

{if $pagecount > 1}
  <p>
{if $pagenumber > 1}
{$firstpage}&nbsp;{$prevpage}&nbsp;
{/if}
{$pagenumber}&nbsp;{$oftext}&nbsp;{$pagecount}
{if $pagenumber < $pagecount}
&nbsp;{$nextpage}&nbsp;{$lastpage}
{/if}
</p>
{/if}

<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th>{$titletext}</th>
			<th>{$postdatetext}</th>
                        <th>{$expiredtext}</th>
                        <th>{$statustext}</th>
			<th>{$categorytext}</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$items item=entry}
		<tr class="{$entry->rowclass}" onmouseover="this.className='{$entry->rowclass}hover';" onmouseout="this.className='{$entry->rowclass}';">
			<td>{$entry->title}</td>
			<td>{$entry->u_postdate|date_format:$date_format_string}</td>
                        <td>{if $entry->expired == 1}
                              <div class="important">
                              {$entry->u_enddate|date_format:$date_format_string}
	                      </div>
                            {else}
                              {$entry->u_enddate|date_format:$date_format_string}
                            {/if}
                        </td>
			<td>{$entry->status}</td>
			<td>{$entry->category}</td>
			<td>{$entry->editlink}</td>
			<td>{$entry->deletelink}</td>
		</tr>
	{/foreach}
	</tbody>
</table>
{/if}

<div class="pageoptions">
	<p class="pageoptions">{$addlink}</p>
</div>

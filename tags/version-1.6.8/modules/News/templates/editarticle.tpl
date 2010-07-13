{$startform}
{if $inputauthor}
	<div class="pageoverflow">
		<p class="pagetext">*{$authortext}:</p>
		<p class="pageinput">{$inputauthor}</p>
	</div>
{/if}
	<div class="pageoverflow">
		<p class="pagetext">*{$titletext}:</p>
		<p class="pageinput">{$inputtitle}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">*{$categorytext}:</p>
		<p class="pageinput">{$inputcategory}</p>
	</div>
{if !isset($hide_summary_field) or $hide_summary_field == '0'}
	<div class="pageoverflow">
		<p class="pagetext">{$summarytext}:</p>
		<p class="pageinput">{$inputsummary}</p>
	</div>
{/if}
	<div class="pageoverflow">
		<p class="pagetext">*{$contenttext}:</p>
		<p class="pageinput">{$inputcontent}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$extratext}:</p>
		<p class="pageinput">{$inputextra}</p>
		
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$postdatetext}:</p>
		<p class="pageinput">{html_select_date prefix=$postdateprefix time=$postdate start_year="-10" end_year="+15"} {html_select_time prefix=$postdateprefix time=$postdate}</p>
	</div>
{if isset($statustext)}
	<div class="pageoverflow">
		<p class="pagetext">*{$statustext}:</p>
		<p class="pageinput">{$status}</p>
	</div>
{else}
	{$status}
{/if}
	<div class="pageoverflow">
		<p class="pagetext">{$useexpirationtext}:</p>
		<p class="pageinput"><input type="checkbox" name="{$actionid}useexp" {if $useexp == 1}checked="checked"{/if} onclick="togglecollapse('expiryinfo');" class="pagecheckbox"/></p>
	</div>
	<div id="expiryinfo" {if $useexp != 1}style="display: none;"{/if}>
	<div class="pageoverflow">
		<p class="pagetext">{$startdatetext}:</p>
		<p class="pageinput">{html_select_date prefix=$startdateprefix time=$startdate start_year="-10" end_year="+15"} {html_select_time prefix=$startdateprefix time=$startdate}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$enddatetext}:</p>
		<p class="pageinput">{html_select_date prefix=$enddateprefix time=$enddate start_year="-10" end_year="+15"} {html_select_time prefix=$enddateprefix time=$enddate}</p>
	</div>
	</div>
{if isset($custom_fields)}
{foreach from=$custom_fields item='field'}
        <div class="pageoverflow">
           <p class="pagetext">{$field->prompt}</p>
           <p class="pageinput">{$field->field}</p>
        </div>
{/foreach}
{/if}
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$hidden}{$submit}{$cancel}{if isset($apply)}{$apply}{/if}</p>
	</div>
{$endform}

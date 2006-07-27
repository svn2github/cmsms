{if $message!=''}<p>{$message}</p>{/if}
{$formstart}
	<div class="pageoverflow">
		<p class="pagetext">{$prompt_url}:</p>
		<p class="pageinput">{$input_url}<br/>{$extratext_url}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$hidden}{$submit}{$cancel}</p>
	</div>
{$formend}

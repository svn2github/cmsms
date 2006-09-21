{if $message!=''}<p>{$message}</p>{/if}
{$formstart}
        <fieldset>
        <legend>{$prompt_settings}</legend>
	<div class="pageoverflow">
		<p class="pagetext">{$prompt_url}:</p>
		<p class="pageinput">{$input_url}<br/>{$extratext_url}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$prompt_chunksize}:</p>
		<p class="pageinput">{$input_chunksize}<br/>{$extratext_chunksize}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$hidden}{$submit}{$cancel}</p>
	</div>
        </fieldset>
        <fieldset>
        <legend>{$prompt_otheroptions}</legend>
	<div class="pageoverflow">
		<p class="pagetext">{$prompt_reseturl}:</p>
		<p class="pageinput">{$input_reseturl}<br/>{$extratext_reseturl}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$prompt_resetcache}:</p>
		<p class="pageinput">{$input_resetcache}<br/>{$extratext_resetcache}</p>
	</div>
        </fieldset>
{$formend}

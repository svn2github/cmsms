<p class="important">
	{lang_install a=install_please_read}
</p>

<h3>{lang_install a=install_checking}</h3>



<table class="settings" border="0">
	<thead class="tbcaption">
		<tr>
			<td colspan="2">
				{lang_install a=systeminfo}
			</td>
		</tr>
	</thead>
	<tbody>
{foreach from=$settings.info key='key' item='test'}
		<tr class="{cycle values='row1,row2'}">
			<td>
				{lang_install a=$key}
			</td>
			<td>
				{$test}
			</td>
		</tr>
{/foreach}
	</tbody>
</table>



<table class="settings" border="0">
	<thead class="tbcaption">
		<tr>
			<td colspan="2">
				{lang_install a=install_required_settings}
			</td>
		</tr>
	</thead>
	<tbody>
		<tr class="tbhead">
			<th>
				{lang_install a=install_test}
			</th>
			<th>
				{lang_install a=install_result}
			</th>
		</tr>
	
{foreach from=$settings.required item='test'}
		<tr class="{cycle values='row1,row2'}">
			<td>
	{if isset($test->value) && $test->value != ''}
				<span class="have">{lang_install a=install_you_have} {$test->value}</span>
	{/if}
				{$test->title}
	{if isset($test->error)}
				<p class="error">{$test->error}</p>
	{/if}
	{if isset($test->message)}
				<p><em>{$test->message}</em></p>
	{/if}
			</td>
			<td class="col2">
				<img src="images/{$test->res}.gif" alt="{$test->res_text}" title="{$test->res_text}" />
			</td>
		</tr>
{/foreach}
	</tbody>
</table>



<table class="settings" border="0">
	<thead class="tbcaption">
		<tr>
			<td colspan="2">
				{lang_install a=install_recommended_settings}
			</td>
		</tr>
	</thead>
<tbody>

<tr class="tbhead">
			<th>
				{lang_install a=install_test}
			</th>
			<th>
				{lang_install a=install_result}
			</th>
		</tr>

{foreach from=$settings.recommended item='test'}
		<tr class="{cycle values='row1,row2'}">
			<td>
	{if isset($test->value) && $test->value != ''}
				<span class="have">{lang_install a=install_you_have} {$test->value}</span>
	{/if}
				{$test->title}
	{if isset($test->error)}
				<p class="error">{$test->error}</p>
	{/if}
	{if isset($test->message)}
				<p><em>{$test->message}</em></p>
	{/if}
			</td>
			<td class="col2">
				<img src="images/{$test->res}.gif" alt="{$test->res_text}" title="{$test->res_text}" />
			</td>
		</tr>
{/foreach}
	</tbody>
</table>



<table class="legend" border="0">
	<thead class="tbcaption">
		<tr>
			<td colspan="2">
				{lang_install a=install_legend}
			</td>
		</tr>
	</thead>
	<tbody>
		<tr class="tbhead">
			<th>
				{lang_install a=install_symbol}
			</th>
			<th>
				{lang_install a=install_definition}
			</th>
		</tr>
		<tr>
			<td class="col2">
				<img src="images/true.gif" alt="{$success}" title="{$success}" />
			</td>
			<td>
				{lang_install a=install_value_passed}
			</td>
		</tr>
		<tr>
			<td class="col2">
				<img src="images/false.gif" alt="{$failure}" title="{$failure}" />
			</td>
			<td>
				{lang_install a=install_value_failed}
			</td>
		</tr>
		<tr>
			<td class="col2">
				<img src="images/red.gif" alt="{$failure}" title="{$failure}" />
			</td>
			<td>
				{lang_install a=install_value_required}
			</td>
		</tr>
		<tr>
			<td class="col2">
				<img src="images/yellow.gif" alt="{$caution}" title="{$caution}" />
			</td>
			<td>
				{lang_install a=install_value_recommended}
			</td>
		</tr>
		<tr>
			<td class="col2">
				<img src="images/green.gif" alt="{$success}" title="{$success}" />
			</td>
			<td>
				{lang_install a=install_value_exceed}
			</td>
		</tr>
	</tbody>
</table>


<form method="post" action="index.php?sessiontest=1">
	<div class="continue">
		<input type="hidden" name="default_cms_lang" value="{$default_cms_lang}" />
		{if isset($smarty.session.debug)}<input type="hidden" name="debug" value="{$smarty.session.debug}" />{/if}
	</div>
{if $continueon}
	{if $special_failed}
	<div class="failure">
		{lang_install a=install_test_failed}
	</div>
	<div class="continue">
		<input type="submit" name="recheck" value="{lang_install a=install_try_again}" />
	</div>
	{else}
	<div class="continue">
		<span><b>{lang_install a=install_test_passed}</b></span>
	</div>
	{/if}
	<div class="continue">
		<input type="submit" value="{lang_install a=install_continue}" />
		<input type="hidden" name="page" value="2" />
	</div>
{else}
	<div class="failure">
		{lang_install a=install_failed_again}
	</div>
	<div class="continue">
		<input type="submit" value="{lang_install a=install_try_again}" />
	</div>
{/if}
</form>

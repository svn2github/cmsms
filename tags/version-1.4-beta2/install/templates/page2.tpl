{foreach from=$errors item=error}
<p class="error">{$error}</p>
{/foreach}

<h3>{lang_install a=install_admin_umask}</h3>

<form action="index.php" method="post" name="page2form" id="page2form">

<table class="settings" border="0">
	<caption class="tbcaption">{lang_install a=global_umask}</caption>
	<tbody>
		<tr class="row1">
			<td colspan="2">{lang_install a=test_umask_text}</td>
		</tr>
		<tr class="row2">
			<td>{lang_install a=global_umask}</td>
			<td><input class="umask" type="text" name="umask" value="{$values.umask}" size="4" maxlength="4" /></td>
		</tr>

{foreach from=$settings.recommended item='test'}
		<tr class="{cycle values='row1,row2'}">
			<td>
				<span class="have">{$test->value}</span>
				<strong>{$test->title}:</strong>
	{if isset($test->error)}
				<p class="error">{$test->error}</p>
	{/if}
	{if isset($test->opt)}
				<p>{lang_install a=owner}: {$test->opt.username}</p>
				<p>{lang_install a=group}: {$test->opt.usergroup}</p>
				<p>{lang_install a=permissions}: {$test->opt.permsstr} ({$test->opt.permsdec})</p>
	{/if}
	{if isset($test->message)}
				<p>
					<em>{$test->message}</em>
				</p>
	{/if}
			</td>
			<td class="col2"><img src="images/{$test->res}.gif" alt="{$test->res_text}" title="{$test->res_text}" height="16" width="16" border="0" /></td>
		</tr>
{/foreach}

	</tbody>
</table>


<p class="failure" align="center">
	{lang_install a=install_test_umask}<br />
	<input type="submit" name="recheck" value="{lang_install a=test}" />
</p>
<p class="continue" align="center">
	<input type="hidden" name="page" value="3" />
	<input type="hidden" name="default_cms_lang" value="{$default_cms_lang}" />
	{if isset($debug)}<input type="hidden" name="debug" value="{$debug}" />{/if}
	<input type="submit" value="{lang_install a=install_continue}" />
</p>

</form>

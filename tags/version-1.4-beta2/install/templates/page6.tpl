{foreach from=$errors item=error}
<p class="error">{$error}</p>
{/foreach}

{if empty($errors)}
<h4>{lang_install a=install_admin_congratulations} {$site_link}</h4>
{/if}

{if $modman_installed}
<form action="{$base_url}/admin/login.php" method="post">
	<input type="submit" value="{lang_install a=install_additional_modules}" />
	<input type="hidden" name="username" value="{$values.admininfo.username}" />
	<input type="hidden" name="password" value="{$values.admininfo.password}" />
	<input type="hidden" name="loginsubmit" value="1" />
	<input type="hidden" name="redirect_url" value="{$base_url}/admin/moduleinterface.php?module=ModuleManager" />
</form>
{/if}

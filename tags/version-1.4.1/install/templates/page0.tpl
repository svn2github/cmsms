<h2>Thanks for choosing CMS Made Simple</h2>

<form action="index.php?sessiontest=1" method="post" name="page0form" id="page0form">
<table class="settings" border="0">
	<thead class="tbcaption">
    
    <tr>
    <td style="font-size: 0.8em; text-align:center;">Choose the language you would prefer to use for the installer<br/> <em>(This does not effect the default settings of CMS Made Simple)</em></td>
    </tr>
    </thead>
	<tbody>
	<tr>
		<td align="center">
			<select name="default_cms_lang">
{foreach from=$languages item=lang}
				<option value="{$lang}">{$lang}</option>
{/foreach}
			</select>
		</td>
	</tr>
	</tbody>
</table>

<div class="continue">
	{if isset($smarty.get.debug)}<input type="hidden" name="debug" value="{$smarty.get.debug}" />{/if}
	<input type="submit" name="submit" value="Submit" />
</div>

</form>

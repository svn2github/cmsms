{$startform}
<div class="adminform">
<table style="border: 1px solid #546D9E; font-size: 1em; width: 570px;">
    <tbody>

		{if count($module_plugins_list) > 0}
		<tr>
			<td colspan="3" style="background: #999; padding: 5px 10px; font-weight: bold; font-size: 14px;">{$module_plugins_text}</td>
		
		</tr>
	
		<tr class="row1hover">
			<td style="padding: 5px 10px;"><strong>{$module_text}</strong></td>
			<td style="padding: 5px 10px;"><strong>{$plugin_text}</strong></td>
			<td style="padding: 5px 10px;"><strong>{$description_text}</strong></td>
		</tr>
	
	
		{foreach from=$module_plugins_list item=oneplugin}

			{cycle values="ffffff,f1f1f1" assign="rowstyle"}
			<tr style="background: #{$rowstyle}">
				<td style="padding: 5px 10px;">{$oneplugin->module}</td>
				<td style="padding: 5px 10px;">{$oneplugin->id}<div style="float: right;">{$oneplugin->value}</div></td>
				<td style="padding: 5px 10px;">{$oneplugin->desc}</td>
			<tr>

		{/foreach}
		{/if}
	
		<tr>
			<td colspan="3" style="background: #999; padding: 5px 10px; font-weight: bold; font-size: 14px;">{$common_plugins_text}</td>
		
		</tr>	
	
        <tr>
            <td colspan="3" style="padding: 5px 10px;"><i>{$plugins_help}</i></td>
        </tr>

        <tr>

            <td colspan="3" style="padding: 5px 10px;">
                {section name=mysec loop=$plugins_list}
                    {if $smarty.section.mysec.first}
                        <table style="border: 0px; width: 100%;">
                        <tbody>
                    {/if}
                    {cycle name="startrow" values="<tr>,,"}
                    <td>{$plugins_list[mysec]->url}</td>
                    <td>:</td>
                    <td>{$plugins_list[mysec]->value}</td>
                    <td style="width:20px">{if isset($cols)}{$cols}&nbsp;{else}&nbsp;{/if}</td>
                    {cycle name="endrow" values=",,</tr>"}
                    {if $smarty.section.mysec.last}
                        {math equation="x - y % x" x=3 y=$smarty.section.mysec.iteration assign=cols}
                        {if 3 != $cols}
                            <td colspan="{$cols*4}"> &nbsp; </td>
                            </tr>
                        {/if}
                        </tbody>
                        </table>
                    {/if}
                {sectionelse}
                  &nbsp;
                {/section}
            </td>	
        </tr>

        <tr>
            <td colspan="3" style="padding: 5px 10px;">{$submit}{$reset}</td>
        </tr>
    </tbody>
</table>
</div>
{$endform}

{$startform}
<div class="adminform">
<table style="border: 1px solid #546D9E; font-size: 1em;">
    <tbody>

        <tr>
            <td colspan="3"><i>{$plugins_help}</i></td>
        </tr>
        <!--<tr>
        </tr>-->
        <tr>
            <td valign="top">{$plugins_text}</td>
            <td valign="top">:<br />
            </td>
            <td>
                {section name=mysec loop=$plugins_list}
                    {if $smarty.section.mysec.first}
                        <table style="border: 0px;">
                        <tbody>
                    {/if}
                    {cycle name="startrow" values="<tr>,,"}
                    <td>{$plugins_list[mysec].name}</td>
                    <td>:</td>
                    <td>{$plugins_list[mysec].value}</td>
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
            <td></td>
            <td></td>
            <td align="right">  {$submit}{$reset}</td>
        </tr>
    </tbody>
</table>
</div>
{$endform}

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
			<td><table style="border: 0px;">
				<tbody><tr>
  				{section name=mysec loop=$plugins_list}
					<td>{$plugins_list[mysec].name}</td>
					<td>:</td>
					<td>{$plugins_list[mysec].value}</td>
					<td style="width:20px">&nbsp;</td>
					{cycle values=",,</tr><tr>"}
 				{/section}
	                        </tr></tbody>
			    </table>
			</td>
		</tr>
		
		<tr>
			<td></td>   
			<td></td>   
			<td align="right">  {$submit}{$reset}{$resetall}  </td> 
		</tr>
	</tbody>
</table>
</div>
{$endform}
{$startform}
<div class="adminform">
<table style="border: 1px solid #546D9E;font-size:1em;">
	<tbody>
		<tr>
			<th style="background-color: #546D9E" colspan="3" align="center">   {$logoimg}   </th>
		</tr>
		<tr>
			<td>{$allowtables_text}</td>
			<td>:</td>
			<td>{$allowtables_input}   </td>
		</tr>
		
		<tr>
			<td>{$striptags_text}</td>
			<td>:</td>
			<td>{$striptags_input}   </td>
		</tr>

		<tr>
			<td>{$editor_width_text}</td>
			<td>:</td>
			<td>{$auto_text} {$editor_width_auto} {$or_text} {$editor_width} {$editor_width_unit}   </td>
		</tr>


		<tr>
			<td>{$editor_height_text}</td>
			<td>:</td>
			<td>{$auto_text} {$editor_height_auto} {$or_text} {$editor_height}{ $editor_height_unit}   </td>
		</tr>


		<tr>
			<td>{$source_formatting_text}</td>
			<td>:</td>
			<td>{$source_formatting_input}   </td>
		</tr>
		
		<tr>
			<td>{$showtogglebutton_text}</td>
			<td>:</td>
			<td>{$showtogglebutton_input}   </td>
		</tr>

		<tr>
			<td>{$onlyxhtmlelements_text}</td>
			<td>:</td>
			<td>{$onlyxhtmlelements_input}   </td>
		</tr>

		<tr>
			<td>{$newlinestyle_text}</td>
			<td>:</td>
			<td>{$newlinestyle_input}   </td>
		</tr>

		<tr>
			<td>{$show_path_text}</td>
			<td>:</td>
			<td>{$show_path_input}</td>
		</tr>

		<tr>
			<td>{$enable_thumbs_text}</td>
			<td>:</td>
			<td align="left">   {$enable_thumbs_input}   </td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #546D9E" colspan="3"><i>{$bodycss_help}</i></td>
		</tr>
		<tr>
			<td>{$bodycss_text}</td>
			<td>:</td>
			<td align="left">   {$bodycss_input}   </td>
		</tr>
		<tr>
			<td>{$dropdownblockformats_text}</td>
			<td>:</td>
			<td align="left">   {$dropdownblockformats_input}   </td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td align="right">   {$submit}   </td>
		</tr>
	</tbody>
</table>
</div>
{$endform}

<tr id="here_{{ $word->id }}" class="line_{{ $word->id }}">
	<td>{{ $word->field1 }}</td>
	<td class="text-right edit">
		<i class="glyphicon glyphicon-cog change" id="change_{{ $word->id }}"></i>
		<i class="glyphicon glyphicon-trash delete" id="delete_{{ $word->id }}"></i>
	</td>
	<td class="text-right">{{ $word->field2 }}</td>
</tr>
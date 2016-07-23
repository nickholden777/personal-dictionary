<tr id="here_{{ $word->id }}" class="line_{{ $word->id }}">
	<td>{{ $word->field1 }}</td>
	<td class="edit text-xs-right">
		<i class="fa fa-pencil change" id="change_{{ $word->id }}"></i>
		<i class="fa fa-trash-o delete" id="delete_{{ $word->id }}"></i>
	</td>
	<td class="text-xs-right">{{ $word->field2 }}</td>
</tr>

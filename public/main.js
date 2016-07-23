window.onload = function() {

	/*=================ADD NEW PART=====================*/

	$('#newPart').click(function() {
		$('.subMenu').toggleClass('switch');

		$('a').click(function() {
			var part = $(this).attr('class');
			$('#' + part).removeClass('displayHide');
			$('#' + part).addClass('displayShow');
		});
	});

	/*=================WORDS OPERATIONS=====================*/

	$('.more').click(function() {
		var aid = this.id;
		var id = aid.split('_')[1];
		var btn = $('#add');

		$('#edit_' + id).css('display', 'none');
		$('#cancel_' + id).css('display', 'none');
		$('#plus_' + id).toggleClass('show');

		$('#field1_' + id).val('');
		$('#field2_' + id).val('');
		$('#add_' + id).css('display', 'block');

		$('#add_' + id).click(function() {

			var field1 = $('#field1_' + id).val();
			var field2 = $('#field2_' + id).val();

			if(field1 == '' || field2 == '') {
				return false;
			}

			var tr = document.createElement('tr');
			tr.innerHTML = '<td>' + field1 + '</td>' +
							'<td></td>' +
							'<td class="text-xs-right">' + field2 + '</td>';

			$('#here_' + id).append(tr);

			$('#field1_' + id).val('');
			$('#field2_' + id).val('');

			var url = window.location.pathname;
			var lang = url.split('/')[1];

			$.ajax({
				headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
				type: 'POST',
				url: url,
				data: {field1: field1, field2: field2, part: id, lang: lang},
				success: function() {
					console.log('ok');
				},
				error: function(data) {
					var errors = data.responseJSON;
        			console.log(errors);
				}
			});
		});
	});

	$('.delete').click(function() {
		var el = $(this).parent().parent();
		el.hide('slow');
		var id = this.id.split('_')[1];
		var url = window.location.pathname;

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
			type: 'POST',
			url: url + '/delete',
			data: {id: id},
			success: function() {
				console.log('ok');
			},
			error: function(data) {
				var errors = data.responseJSON;
        		console.log(errors);
			}
		});
	});

	$('.change').click(function() {
		var id = this.id.split('_')[1];
		var line = $(this).parent().parent();
		var idAll = line.parent().attr('id').split('_')[1];
		var cancel = $('#cancel_' + idAll);
		var btnEdit = $('#edit_' + idAll);
		btnEdit.attr('id', 'edit_' + id);
		btnEdit.css('display', 'block');

		cancel.css('display', 'block');
		cancel.click(function() {
			$('#plus_' + idAll).removeClass('show');
			$('#field1_' + id).val('');
			$('#field2_' + id).val('');
			$('#add_' + id).css('display', 'block');
			btnEdit.attr('id', 'edit_' + idAll);
		});

		$('#plus_' + idAll).toggleClass('show');

		$('#add_' + idAll).css('display', 'none');
		$('#edit_' + idAll).css('display', 'block');

		var field_one = $(this).find('here_' + idAll);
		var field = line.children('td');

		var field1HTML = field[0];
		var field2HTML = field[2];
		var field1 = field1HTML.innerHTML;
		var field2 = field2HTML.innerHTML;

		var inputOne = $('#field1_' + idAll);
		var inputTwo = $('#field2_' + idAll);

		inputOne.val(field1);
		inputTwo.val(field2);

		$('#edit_' + id).click(function() {
			var newField1 = $('#field1_' + idAll).val();
			var newField2 = $('#field2_' + idAll).val();
			var idNew = $(this).attr('id').split('_')[1];

			var line = $('.line_' + idNew).children('td');
			var line1 = line[0];
			var lineBtn = line[1];
			var line2 = line[2];
			line1.innerHTML = newField1;
			line2.innerHTML = newField2;

			$('#plus_' + idAll).removeClass('show');

			var url = window.location.pathname;

			$.ajax({
				headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
				type: 'POST',
				url: url + '/edit',
				data: {id: id, field1: newField1, field2: newField2},
				success: function() {
					console.log('ok');
				},
				error: function(data) {
					var errors = data.responseJSON;
	        		console.log(errors);
				}
			});
		});
	});
};

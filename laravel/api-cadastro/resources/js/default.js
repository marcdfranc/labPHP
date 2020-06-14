$(function (e) {

	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": CSRF_TOKEN
		}
	});

	$.getJSON('/api/categories', function (data) {
		if (data) {
			$('#category_id').empty().append(data.map(function (opt) {
				return '<option value="' + opt.id + '">' + opt.name + '</option>';
			}));
		}
	});

	$.getJSON('/api/products', function (data) {
		if (data) {
			$('#product-table').show().find('tbody').empty().append(data.map(function (product) {
				return addTableRow(product);
			}));
		}
	});

	$('#btn-show-dlg-products').click(function (e) {
		$('#product-form').trigger("reset").find('#id').val('');
		$('#dlg-products').modal('show');
	});


	$('#product-form').submit(function (e) {
		e.preventDefault();

		var id = $('#id').val();
		var data = $(this).serialize();

		$('#dlg-products').modal('hide').find('#product-form').trigger('reset').find('#id').val('');

		if (id == '') {
			$.post('/api/products', data, function (data) {
				data = $.parseJSON(data);
				if (data) {
					if (!$('#product-table').is(':visible')) {
						$('#product-table').show().find('tbody').append(addTableRow(data));
					} else {
						$('#product-table tbody').append(addTableRow(data));
					}
				}
			});
		} else {
			$.ajax({
				type: 'PATCH',
				url: '/api/products/' + id,
				context: this,
				data: data,
				success: function (data) {
					data = $.parseJSON(data);
					$('#product-table tbody').empty().append(data.map(function (product) {
						return addTableRow(product);
					}));
				},
				error: function (data) {
					alert("Sorry, an error occurs.");
					var result = $.parseJSON(data.responseText);
					$('#product-table tbody').empty().append(result.map(function (product) {
						return addTableRow(product);
					}));
				}
			});
		}
	});

	$('#product-table').on('click', '.btn-product-delete', function (e) {
		e.preventDefault();

		var url = $(this).data('href');

		$.ajax({
			type: 'DELETE',
			url: url,
			context: this,
			success: function (data) {
				data = $.parseJSON(data);
				$('#product-table tbody').empty().append(data.map(function (product) {
					return addTableRow(product);
				}));
				alert("Item deleted");
			},
			error: function (data) {
				alert("Sorry, an error occurs.");
				var result = $.parseJSON(data.responseText);

				$('#product-table tbody').empty().append(result.map(function (product) {
					return addTableRow(product);
				}));
			}
		});
	});


	$('#product-table').on('click', '.btn-product-edit', function (e) {
		e.preventDefault();

		var url = $(this).data('href');
		console.log(url);

		$.getJSON(url, {}, function (data) {
			if (data) {
				Object.keys(data).map(function (key) {
					$('#' + key).val(data[key]);
				});
				$('#dlg-products').modal('show');
			} else {
				alert("Sorry, an error occurs.");
			}
		}).fail(function (data) {
			alert("Sorry, an error occurs.");
			$('#product-table tbody').empty().append(data.responseJSON.map(function (product) {
				return addTableRow(product);
			}));
		});

	});

	function addTableRow(product) {
		return '<tr>' +
			'<td>' + product.id + '</td>' +
			'<td>' + product.name + '</td>' +
			'<td>' + product.category_id + '</td>' +
			'<td>' + product.price + '</td>' +
			'<td>' + product.stock + '</td>' +
			'<td>' +
			'<button data-href="/api/products/' + product.id + '" class="btn btn-primary btn-sm btn-product-edit">Edit</button>' +
			'<button data-href="/api/products/' + product.id + '" class="btn btn-danger btn-sm btn-product-delete">Remove</button>' +
			'</td>' +
			'</tr>';
	}

});
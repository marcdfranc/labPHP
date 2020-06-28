$(function (e) {
	function loadCustomers(page) {
		$.get('/indexjson', {
			page: page
		}, function (response) {
			$('#paginator .pager-data').remove();

			$('#table-bread').html(`Shomwing ${response.per_page} of ${response.total} customers (${response.from} to ${response.to})`);

			var isLast = response.last_page == response.current_page;

			$('#paginator .pagination').empty().append(function () {
				var index = response.current_page;

				var result = '<li class="page-item pager-data active"><a class="page-link" data-page="' + index + '" href="#">' + index + '</a></li>';

				while (--index % 10 != 0) {
					result = '<li class="page-item pager-data"><a class="page-link" data-page="' + index + '" href="#">' + index + '</a></li>' + result;
				}

				index = response.current_page;

				if (index == 1) {
					result = '<li class="page-item disabled first"><a class="page-link pager-link" href="#" data-page="1" aria-disabled="true">Previous</a></li>' + result;
				} else {
					result = '<li class="page-item first"><a class="page-link pager-link" href="#" data-page="' +
						(index - 1) + '">Previous</a></li>' + result;
				}


				while (index++ % 10 != 0 && index <= response.last_page) {
					result += '<li class="page-item pager-data"><a class="page-link" data-page="' + index + '" href="#">' + index + '</a></li>';
				}
				if (isLast) {
					result += '<li class="page-item disabled first"><a class="page-link" aria-disabled="true" href="#">Next</a></li>';
				} else {
					result += '<li class="page-item last"><a class="page-link pager-link" href="#" data-page="' +
						(response.current_page + 1) + '">Next</a></li>';
				}
				return result;
			}).addClass(
				isLast ? 'disabled' : ''
			).removeClass(
				isLast ? '' : 'disabled'
			);

			$('#customersTable tbody').empty().append(response.data.map((customer, i) => {

				return '<tr><td>' + customer.id + '</td>' +
					'<td>' + customer.name + ' :: ' + i + '</td>' +
					'<td>' + customer.surname + '</td>' +
					'<td>' + customer.email + '</td></tr>';
			}));
		});
	}

	$('#paginator').on('click', '.page-link', function (e) {
		e.preventDefault();
		console.log($(this).data('page'));
		loadCustomers($(this).data('page'));
	});


	loadCustomers(1);

});
function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
 
  if ( results )
    return ( unescape ( results[2] ) );
  else
    return null;
}

function roadMaker(id) 
{
	document.cookie = "field_input=" + id + "; path=/;"

	$('input#' + id).blur();
	
	// Отображаем модальное окно
	$('#roadMakerModal').modal('show');

	// Действие при клике на результат
	$('#results #result').on('click', function () {
		let point = $(this).attr('data-value');
		let pointType = $(this).attr('data-type');

		console.log($('#' + id).val());
		$('input#' + get_cookie('field_input')).val(point);

		$('#roadMakerModal').modal('hide');
	});
}
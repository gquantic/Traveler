function checkboxChange(element) {
	if (element.is(":checked") === true) {
		$('#awesome_checkbox div[data-value="no"]').removeClass("active");
		$('#awesome_checkbox div[data-value="yes"]').addClass("active");

		// Двигаем иконку
		$('.slideThree_label').css({
			"margin-left": "21px"
		});

		$('.slideThree_label').addClass('isYes');
	} else {
		$('#awesome_checkbox div[data-value="yes"]').removeClass("active");
		$('#awesome_checkbox div[data-value="no"]').addClass("active");

		// Двигаем иконку
		$('.slideThree_label').css({
			"margin-left": "0px"
		});

		$('.slideThree_label').removeClass('isYes');
	}
}

$(document).ready(function () {
	checkboxChange($('#awesome_checkbox input[type="checkbox"]'));
});

$('#awesome_checkbox input[type="checkbox"]').on('change', function () {
	checkboxChange($(this));
});
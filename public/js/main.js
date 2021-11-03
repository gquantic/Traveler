$(document).ready(function () {
    setTimeout(function () {
        $('#question1').removeClass('hide');
        typeText('#question1 .msg');
    }, 1000);

    // После ввода первого поля
    $('#question1 input').focusout(function () {
        if ($('#question1 input').val().length >= 2) {
            $('#question2').removeClass('hide');
            typeText('#question2 .msg');
        }
    });

    // После выбора точности (2 элемент)
    $('input[name="fast_delivery"]').on('input', function () {
        if ($(this).val() === "yes") {
            $('#question3').removeClass('hide');
            typeText('#question3 #msg');

            $('#question4').addClass('hide');
        } else {
            $('#question3').addClass('hide');

            // Показываем 4й элемент
            $('#question4').removeClass('hide');
            typeText('#question4 #msg');
        }
    });

    $('#question4 input').focusout(function () {
        if ($('#question4 input').val().length >= 2) {
            $('#question5').removeClass('hide');
            typeText('#question5 .msg');
        }
    });

    $('#question5 input').on('change', function () {
        $('#question6').removeClass('hide');
        typeText('#question6 .msg');
    });



    // Заполнение поля введите точный адрес местонахождения (3й элемент с выбранным "да" во втором)
    $('#question3 input').focusout(function() {
        if ($(this).val().length >= 4) {
            $('#question3 #msg2').removeClass('hide');
            typeText('#question3 #msg2', 500);

            // Показываем 4й элемент
            setTimeout(function () {
                $('#question4').removeClass('hide');
                typeText('#question4 .msg');
            }, 1000);
        }
    });
});

function typeText(element, speed = 1000, text = null) {
    var text = $(element).html();
    var text = text.replace(/ +/g, ' ').trim();
    $(element).html('');

    var properties = {
        element: element,
        newText: text,
        speed: speed
    };

    bubbleText(properties);
}
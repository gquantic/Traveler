$(document).ready(function () {
    setTimeout(function () {
        $('#question1').removeClass('hide');
        typeText('#question1 .msg');
        // typeText('#question2 .msg');
    }, 1000);

    // После ввода первого поля
    $('#question1 button').on('click', function () {
        if ($('#question1 input').val().length >= 2) {
            // $('#question2').removeClass('hide');
            $('#question3').removeClass('hide');

            typeText('#question3 #msg1');

            if ($('#awesome_checkbox input[type="checkbox"]').is(":checked") === true) {
                $('#question3').removeClass('hide');
                typeText('#question3 #msg');

                $('#question4').addClass('hide');
            } else {
                $('#question3').addClass('hide');

                // Показываем 4й элемент
                $('#question4').removeClass('hide');
                typeText('#question4 #msg');
            }
        } else {
            alert("Пожалуйста, заполните поле!");
        }
    });

    // После выбора точности (2 элемент)
    $('#awesome_checkbox input[type="checkbox"]').on('change', function () {
        // Тут был код, перенес его в действие с первым инпатом
    });

    $('#question4 button').on('click', function () {
        if ($('#question4 input').val().length >= 2) {
            $('#question5').removeClass('hide');
            typeText('#question5 .msg');
        } else {
            alert("Пожалуйста, заполните поле!");
        }
    });

    $('#question5 input').on('change', function () {
        $('#question6').removeClass('hide');
        typeText('#question6 .msg');
    });

    $('#question6 input').on('change', function () {
        // Показываем кнопку
        $('#orderPay').removeClass('hide');
    });



    // Заполнение поля введите точный адрес местонахождения (3й элемент с выбранным "да" во втором)
    $('#question3 button').on('click', function() {
        if ($('#question3 input').val().length >= 4) {
            $('#question3 #msg2').removeClass('hide');
            typeText('#question3 #msg2');

            // Показываем 4й элемент
            setTimeout(function () {
                $('#question4').removeClass('hide');
                // typeText('#question4 .msg');
            }, 1000);
        } else {
            alert("Пожалуйста, заполните поле!");
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

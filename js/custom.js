//Мои кастомные js-функции

$(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault();

        if($('.not_error').length == 3)
        {
            var data = $('form').serializeArray();

            $.ajax({
                type: "POST",
                url: "db_connect/push_data.php",
                data: "Name="+data[0].value+"&Email="+data[1].value+"&Message="+data[2].value,
                success: function(msg){
                    //alert( "Прибыли данные: " + msg );
                    $('.blocks').append(msg);
                },
                error: function(msg){
                    console.log('Ошибка: ');
                    console.log(msg);
                }
            });
        }
        else{
            alert('Поля заполнены неверно!');
        }

    });



    // Устанавливаем обработчик потери фокуса для всех полей ввода текста
    $('input#inputName, input#inputEmail, textarea#textarea').unbind().blur( function(){

        // Для удобства записываем обращения к атрибуту и значению каждого поля в переменные
        var id = $(this).attr('id');
        var val = $(this).val();

        // После того, как поле потеряло фокус, перебираем значения id, совпадающие с id данного поля
        switch(id)
        {
            // Проверка поля "Имя"
            case 'inputName':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно

                if(val.length > 2 && val != '' && rv_name.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').text('Принято')
                        .css('color','green')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }

                // Иначе, мы удаляем класс not-error и заменяем его на класс error, говоря о том что поле содержит ошибку валидации,
                // и ниже в наш контейнер выводим сообщение об ошибке и параметры для верной валидации

                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('поле "Имя" обязательно для заполнения<br>, длина имени должна составлять не менее 2 символов<br>, поле должно содержать только русские или латинские буквы')
                        .css('color','red')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }
                break;



            // Проверка email
            case 'inputEmail':
                var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                if(val != '' && rv_email.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').text('Принято')
                        .css('color','green')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }
                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('поле "Email" обязательно для заполнения<br>, поле должно содержать правильный email-адрес<br>')
                        .css('color','red')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }
                break;

            // Проверка поля "Сообщение"
            case 'textarea':
                if(val != '' && val.length < 5000)
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').text('Принято')
                        .css('color','green')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }
                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('поле "Текст письма" обязательно для заполнения')
                        .css('color','red')
                        .animate({'paddingLeft':'10px'},400)
                        .animate({'paddingLeft':'5px'},400);
                }
                break;

        } // end switch(...)
        });// end blur()
    });



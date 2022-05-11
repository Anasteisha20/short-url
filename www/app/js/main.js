$(function() {
    // $('.open_form').on('click', function() {
    //     $( ".form_short_link" ).toggle();
    // });

    $('.url').on('click', function() {
        sendAjaxForm();
        return false;
    });

    function sendAjaxForm() {
        $.ajax({
            url:     'ajax/formShortUrl.php', //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#ajax_form").serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                 result = $.parseJSON(response);
                if (result.error) {
                    var tt = result.error[1];
                    $('#result-form').html(result.error[1].message);
                } else if (!result.short){
                    $('#result-form').html('error');
                } else {
                    $('#result-form').html('Сокращенная ссылка:' +
                        '<a href="http://gulp-url/' + result.short + ' "> ' + ' http://gulp-url/' + result.short + '</a>');
                }

            },
            error: function(response) { // Данные не отправлены
                $('#result-form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
})
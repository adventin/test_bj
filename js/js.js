function reloading() {
    document.location.reload();
}

function validateForm($form) {
    var a = false;
    if (validateInputs($form) === true) {
        a = true;
    }
    return a;
}

function validateInputs(form) {
    var a = true;
    $(form.find('.validateInputJs')).each(function (k, v) {

        if ($(v).hasClass('mailJs')) {
            if (isValidEmailAddress($(v).val()) === false) {
                errorMessage(v, 'Некорректный E-mail');
                a = false;
            }
        } else {
            if (empty($(v).val())) {
                errorMessage(v);
                a = false;
            }
        }
    });
    return a;
}

function errorMessage(input, message = 'Поле не заполнено') {
    $(input).attr('placeholder', message);
    $(input).addClass('error');
    setInterval(function () {
        $(input).attr('placeholder', '');
        $(input).removeClass('error');
    }, 3000)
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}

function empty(mixedVar) {
    var undef;
    var key;
    var i;
    var len;
    var emptyValues = [undef, null, false, 0, '', '0'];
    for (i = 0, len = emptyValues.length; i < len; i++) {
        if (mixedVar === emptyValues[i]) {
            return true
        }
    }
    if (typeof mixedVar === 'object') {
        for (key in mixedVar) {
            if (mixedVar.hasOwnProperty(key)) {
                return false
            }
        }
        return true
    }
    return false
}

function getCookieValue(param) {
    var regExp = new RegExp("(?:(?:^|.*;\\s*)" + param + "\\s*\=\\s*([^;]*).*$)|^.*$");//taskPost
    return document.cookie.replace(regExp, "$1")
}

function responceTaskPost() {
    var taskPost = getCookieValue("taskPost");
    if (taskPost === '1') {
        $('.formResponseJs').append('Задача добавлена. Вы будете перенаправлены на главную страницу через 5 секунд.');
        setTimeout(function () {
            document.location.href = '/'
        }, 5000)
    }
}

$body = $('body');

/*$body.on('click', '.sortJs', function () {
    var order = $(this).data('order');
    var sort = $(this).data('sort');
    var page = 0;
    var pageUrl = document.location.href.match(/page\/(\d)+/);

    if (pageUrl && pageUrl[1]) {
        page = pageUrl[1];
    }

    $.get(`/api/task/sort/${order}/${sort}/${page}`, function (response) {
        if (response) {
            var obj = JSON.parse(response);
            var html = '';
            obj.forEach(function (val) {
                html += `<tr data-id="${val.id}">
                    <td>${val.name}</td>
                    <td>${val.mail}</td>
                    <td>${val.task}</td>
                    <td>${(val.status == 1) ? 'Выполнено' : 'В работе'}</td>
                </tr>`;
            });
            $('.tasksJs').empty().append(html);
        }
    });
});*/

$('.submitFormJs').on('click', function () {
    var $form = $(this).parents('.formJs').first();
    if (validateForm($form) === true) {
        $form.trigger("submit");
    }
});


$body.on('click', '.saveTaskJs', function () {
    var task = $(this).parents('.taskJs').first();
    $.ajax({
        url: "/api/task/put/",
        data: {
            taskId: task.data('id'),
            taskStatus: +task.find('.taskStatusJs').prop('checked'),
            taskText: task.find('.taskTextJs').val()
        },
        dataType: 'json',
        type: 'POST',
        success: function (response) {
            if (response === 1) {
                document.location.reload();
            } else {
                document.location.href = '/login'
            }

        }
    });
});


responceTaskPost();
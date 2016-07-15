/**
 * Created by Эрлан on 15.07.2016.
 */
var content = $('#contactform');
var btn = $('.btn-primary');
var resp_message = $('#responseMessage');
var cust_message = $('#custom_message');
content.on('submit', function(e) {
    e.preventDefault();
    btn.button('loading');
    $.ajax({
        url: content.attr('action'),
        dataType: 'JSON',
        data: content.serialize(),
        success: function (data) {
            if(data.result == 'ok') {
                $('#custom_message').fadeIn('slow', function() {
                    $(resp_message).fadeIn('slow');
                    $(resp_message).html(data.response);
                    if($(cust_message).hasClass('alert-danger')) { $(cust_message).removeClass('alert-danger'); }
                    $(cust_message).addClass('alert-success');
                    btn.button('reset');
                });
            } else {
                $('#custom_message').fadeIn('slow', function() {
                    $(resp_message).fadeIn('slow');
                    $(resp_message).html(data.response);
                    if($(cust_message).hasClass('alert-success')) { $('#custom_message').removeClass('alert-success'); }
                    $(cust_message).addClass('alert-danger');
                    btn.button('reset');
                });
            }
        },
        error: function (data) {
            $('#custom_message').fadeIn('slow', function() {
                $(resp_message).fadeIn('slow');
                $(resp_message).html('Неизвестная ошибка, попробуйте позже!');
                if($(cust_message).hasClass('alert-success')) { $(cust_message).removeClass('alert-success'); }
                $(cust_message).addClass('alert-danger');
                btn.button('reset');
            });
        }
    });
});

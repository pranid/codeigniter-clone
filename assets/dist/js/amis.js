$(function () {
    var form_validation;
    /**
     * Login Form validation
     */
    $('#loginForm').submit(function (event) {
        event.preventDefault();
        if ($('#email').val() == "" && $('#password').val() == "") {
            $('#email, #password').parent().addClass('has-error').removeClass('has-success');
            $('#email, #password').parent().addClass('has-error').removeClass('has-success');
        } else if ($('#email').val() == "") {
            $('#email').parent().addClass('has-error').removeClass('has-success');
        } else if ($('#password').val() == "") {
            $('#password').parent().addClass('has-error').removeClass('has-success');
        } else {
            var data = {
                email: $.trim($('#email').val()),
                password: $.trim($('#password').val())
            };

            $('button[type=submit]').attr('disabled', true).html('<i class="fa fa-refresh fa-spin"></i> Wait...');
            doNRedirect(data, base_url + 'index.php/Common/login', base_url + "index.php/Welcome/home");
        }
    });

    /**
     * Registration Form validation
     */
    $('#registrationForm').submit(function (event) {
        event.preventDefault();
        if ($(this).children('input').val() == "") {
            $(this).children('input').parent().addClass('has-error');
            $(this).children('input').parent().removeClass('has-success');
        } else {
            var data = {
                full_name: $.trim($('#full_name').val()),
                email: $.trim($('#email').val()),
                password: $.trim($('#password').val())
            };

            $('button[type=submit]').attr('disabled', true).html('<i class="fa fa-refresh fa-spin"></i> Wait...');
            doNRedirect(data, base_url + 'index.php/Common/register', base_url + "index.php/Welcome/home");
        }
    });

    $('#full_name, #email,#password,#re_password, #agree').keyup(function (event) {
        if ($(this).val() == "") {
            $(this).parent().addClass('has-error');
            $(this).parent().removeClass('has-success');
        } else {
            $(this).parent().removeClass('has-error');
            $(this).parent().addClass('has-success');
        }

        if ($(this).get(0).id == "re_password") {
            if ($('#password').val() == $(this).val()) {
                $(this).parent().removeClass('has-error');
                $(this).parent().addClass('has-success');
            } else {
                $(this).parent().removeClass('has-success');
                $(this).parent().addClass('has-error');
            }
        }
    });

    $('#full_name, #email,#password,#re_password').focusout(function (event) {
        $(this).parent().removeClass('has-success');
        $(this).parent().removeClass('has-error');
    });


    /** checkbox*/
    $('input[type=checkbox]').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    /*Project Table*/
    $("#projectTable").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });

    var date = new Date();
    date.setDate(date.getDate() - 1);
    $('#startDate,#dueDate').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        startDate: date
    });

    $('#startDate').change(function (event) {
        date = $(this).val();
        console.log(date);
        $('#dueDate').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            startDate: date
        });
    });
    // $.fn.datepicker.defaults.autoclose = true;
    $('#startDate,#dueDate').attr('readOnly', 'readOnly');

    $(".select2").select2();

    $('#taskForm').submit(function (event) {
        event.preventDefault();

    });
});

/**
 * Only for form submit and redirect
 */
var doNRedirect = function (data, submit_url, error_pos) {
    $.ajax({
        url: submit_url,
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function (response) {
            /** If Success */
            if (response.success) {
                $('button[type=submit]').removeClass('btn-primary');
                $('button[type=submit]').addClass('btn-success');
                $('button[type=submit]').html('<i class="fa fa-refresh fa-spin"></i> Wait...');

                setTimeout(function () {
                    $('button[type=submit]').html('Done');
                }, 1000);

                setTimeout(function () {
                    window.location.replace(response.redirect_url);
                }, 1200);
            } else {
                $('button[type=submit]').removeClass('btn-primary').addClass('btn-danger').html('Oops!');
                $('.login-box-msg').addClass('text-danger');
                $('.login-box-msg').text(response.message);
                setTimeout(function () {
                    $('button[type=submit]').removeClass('btn-danger').addClass('btn-default').attr('disabled', false).html('Try again');
                }, 1200);
            }
        },
        error: function (response) {
            $('button[type=submit]').removeClass('btn-primary').addClass('btn-danger').html('Oops!');

            setTimeout(function () {
                $('button[type=submit]').removeClass('btn-danger').addClass('btn-default').attr('disabled', false).html('Try again');
            }, 1200);
        }
    });
}


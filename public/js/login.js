$(document).ready(function () {

    var emailRegxPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    $('.loginForm').on('submit', function (e) {
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        var hasErrors = false;
        var loginStatus = null;

        if (username.length === 0) {
            displayError('Please enter your username', 'username')
            hasErrors = true;
        }

        if (password.length === 0) {
            displayError('Please enter your password', 'password')
            hasErrors = true;
        }

        if (!hasErrors) {
            doLogin(username, password);
        }
        else {
            e.preventDefault();
        }
    });

    $('#username').focusout(function () {
        var username = $('#username').val().trim();
        if (username.length !== 0) {
            $('.error-username').css('display', 'none');
            $('#username').removeClass('error-input-text');
            $('#username').prev().removeClass('error-input-icon')
        }
    });


    $('.show-password').on('mousedown', function () {
        $('#password').attr('type', 'text');
        $('.show-password').css('background-color', '#eee');
    });

    $('.show-password').on('mouseup', function () {
        $('#password').attr('type', 'password');
        $('.show-password').css('background-color', '#fff');
    });

    var displayError = function (error, target) {
        $('.error-' + target).css('display', 'block');
        $('.' + target + '-error').text(error);
        $('#' + target).addClass('error-input-text').prev().addClass('error-input-icon');
    };

    var doLogin = function (username, password) {

        $.post('/login',function(response){

        },function(error){
            console.log(error)
        });

    };

});
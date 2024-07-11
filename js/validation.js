$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        var isValid = true;

        // Validate username
        var username = $('#username').val().trim();
        if (username === '') {
            $('#username-error').text('Username is required.');
            isValid = false;
        } else {
            $('#username-error').text('');
        }

        // Validate email
        var email = $('#email').val().trim();
        if (email === '') {
            $('#email-error').text('Email is required.');
            isValid = false;
        } else {
            $('#email-error').text('');
        }

        // Validate password
        var password = $('#password').val();
        if (password === '') {
            $('#password-error').text('Password is required.');
            isValid = false;
        } else {
            $('#password-error').text('');
        }

        // Validate confirm password
        var confirm_password = $('#confirm_password').val();
        if (confirm_password === '') {
            $('#confirm-password-error').text('Confirm Password is required.');
            isValid = false;
        } else {
            $('#confirm-password-error').text('');
        }

        // Check if passwords match
        if (password !== confirm_password) {
            $('#confirm-password-error').text('Passwords do not match.');
            isValid = false;
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });
});
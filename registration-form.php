<!DOCTYPE html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="js/validation.js"></script>
</head>
<body>
    <div class="container">
        <form id="registration-form" action="include/form-registration.php" method="post">
            <h2>Register</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <span id="username-error" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <span id="email-error" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span id="password-error" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <span id="confirm-password-error" class="error-message"></span>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

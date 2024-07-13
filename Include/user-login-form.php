<?php

if ($_POST) {
    include_once 'class-db.php';
    include_once 'class-user-login.php';
    $database = new Database();
    $db = $database->getConnection();
    $user_login = new user_login_form($db);
    // Set properties from form data
    $user_login->username = $_POST['username'];
    $user_login->password = $_POST['password'];

    // Attempt login
    if ($user_login->login()) {
    echo "Login successful!";
    // Redirect to a protected page or dashboard
    // header("Location: dashboard.php");
    // exit;
    } else {
    echo "Login failed!";
    }
}
<?php

if ($_POST) {
    include_once 'class-db.php';
    include_once 'class-user.php';
    $database = new Database();
    $db = $database->getConnection();
    $user = new user($db);
    // Assign form data to the user properties
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->cnpassword = $_POST['confirm_password'];

    if ($user->register()) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'] . '/';
        $base_url= $protocol . $domainName;
        header("Location: " . $base_url."sigme-square-module-1/login-form.php");
    } else {
        echo "Failed to register user.";
    }

}
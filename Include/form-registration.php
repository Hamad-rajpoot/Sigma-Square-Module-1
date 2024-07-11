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
        echo "User registered successfully.";
    } else {
        echo "Failed to register user.";
    }

}
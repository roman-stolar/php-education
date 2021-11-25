<?php

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect classes for login functionality
    include "./../db/db.php";
    include "./../classes/LoginClass.php";
    include "./../controllers/LoginController.php";
    $login = new LoginController($email, $password);

    $login->loginUser();

    // Redirect to the index page if login went OK
    header("Location: ./../index.php");
}

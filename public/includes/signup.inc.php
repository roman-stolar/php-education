<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    // Connect classes for signup functionality
    include "./../db/db.php";
    include "./../classes/SignupClass.php";
    include "./../controllers/SignupController.php";
    $signup = new SignupController($firstName, $lastName, $email, $password, $passwordConfirm);

    $signup->signupUser();

    // Go back to the front page
    header("Location: ../index.php?error=none");
}

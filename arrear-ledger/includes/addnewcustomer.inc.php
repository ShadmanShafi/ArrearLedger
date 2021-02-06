<?php

session_start();

if (isset($_POST["submit"])) {

    $custName = $_POST["name"];
    $custContactNumber = $_POST["contactNumber"];
    $custAddress = $_POST["address"];
    $currentUserId = $_SESSION["userid"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputAddNewCust($custName, $custContactNumber, $custAddress) !== false) {
        header("location: ../addnewcustomer.php?error=emptyinput");
        exit();
    }

    createCustomer($conn, $currentUserId, $custName, $custContactNumber, $custAddress);
}

else {
    header("location: ../addnewcustomer.php");
    exit();
}
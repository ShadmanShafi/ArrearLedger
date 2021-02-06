<?php

if (isset($_POST["submit"])) {

    $transCustId = $_POST["transCId"];
    $transProductQuantity = $_POST["transProductQuantity"];
    $transPrice = $_POST["transPrice"];
    $transDateofPurchase = $_POST["transDateofPurchase"];
    $transIndue = $_POST["transIndue"];
    $transPayout = $_POST["transPayout"];    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputAddNewTrans($transCustId, $transProductQuantity, $transPrice, $transDateofPurchase, $transIndue, $transPayout) !== false) {
        header("location: ../addtransaction.php?error=emptyinput");
        exit();
    }

    createTransaction($conn, $transCustId, $transProductQuantity, $transPrice, $transDateofPurchase, $transIndue, $transPayout);
}

else {
    header("location: ../addnewcustomer.php");
    exit();
}
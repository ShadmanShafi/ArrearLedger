<?php

function emptyInputSignup($name, $email, $username, $pwd, $contactNumber, $shopAddress, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) ||empty($contactNumber) || empty($shopAddress) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd, $contactNumber, $shopAddress) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersContactNumber, usersShopAddress) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $username, $hashedPwd, $contactNumber, $shopAddress);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongloginusername");
        exit();
    }

    // $pwdHashed = $uidExists["usersPwd"];
    // $checkPwd = password_verify($pwd, $pwdHashed);

    // if ($checkPwd === false) {
    //     header("location: ../login.php?error=wrongloginpass");
    //     exit();
    // }
    // else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
}

function emptyInputAddNewCust($custName, $custContactNumber, $custAddress) {
    $result;
    if (empty($custName) || empty($custContactNumber) || empty($custAddress)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createCustomer($conn, $currentUserId, $custName, $custContactNumber, $custAddress) {
    $sql = "INSERT INTO customers (uId, name, contactNumber, address) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addnewcustomer.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $currentUserId, $custName, $custContactNumber, $custAddress);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addnewcustomer.php?error=none");
    exit();
}

function emptyInputAddNewTrans($transCustId, $transProductQuantity, $transPrice, $transDateofPurchase, $transIndue, $transPayout) {
    $result;
    if (empty($transCustId) || empty($transProductQuantity) || empty($transPrice) || empty($transDateofPurchase) || empty($transPayout)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createTransaction($conn, $transCustId, $transProductQuantity, $transPrice, $transDateofPurchase, $transIndue, $transPayout) {
    $sql = "INSERT INTO transactions (cId, productQuantity, price, dateofPurchase, indue, payout) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addtransaction.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $transCustId, $transProductQuantity, $transPrice, $transDateofPurchase, $transIndue, $transPayout);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addtransaction.php?error=none");
    exit();
}
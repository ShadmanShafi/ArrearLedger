<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arrear Ledger</title>
        <link rel="stylesheet" href="css/w3.css">  
    </head>

<body>
    <nav>
    <br>
    <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>

    <?php
        if (isset($_SESSION["useruid"])) {
            
            echo "<a href='dashboard.php' class='w3-bar-item w3-button w3-padding-large' >Dashboard</a>";
            echo "<a href='transactionhistory.php' class='w3-bar-item w3-button w3-padding-large' >Transaction History</a>";
            echo "<a href='includes/logout.inc.php' class='w3-bar-item w3-button w3-padding-large' >Log Out</a>";
            
        }
        else {
            echo "<a href='signup.php' class='w3-bar-item w3-button w3-padding-large'>SIGN UP</a>";
            echo "<a href='login.php' class='w3-bar-item w3-button w3-padding-large'>LOG IN</a>";
        }
    ?>

    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

    </nav>

    <div class="wrapper">
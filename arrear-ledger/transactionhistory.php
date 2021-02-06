<?php
    include_once 'header.php';      
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php

        $currentUserId = $_SESSION["userid"];
        $sql2 = "SELECT * FROM view_cust_pro WHERE uId =".$currentUserId.";";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);

        if ($resultCheck2 > 0) {
            echo "<h1><br><u><b>TALLY</b></u></h1>";
            while ($row = mysqli_fetch_assoc($result2)) {
                echo "<h5><p>Customer ID: <b> " .$row['cId']. " </b> <u>Due Amount: <b> " .$row['indue']. "</u> </b> Name: <b> " .$row['name']. " </b> Contact Number: <b> " .$row['contactNumber']. " </b> Address: <b> " .$row['address']. "</p></b></h5>";
            }
        }
    ?>

</body>
</html>
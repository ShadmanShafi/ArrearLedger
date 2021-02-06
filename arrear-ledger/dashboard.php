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
        $sql3 = "SELECT * FROM view_cust_with_indue;";
        $sql1 = "SELECT COUNT(cID) as noofcust, SUM(indue) as totalindue FROM view_cust_with_indue WHERE uId = " .$currentUserId.";";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);

        if ($resultCheck1 > 0) {
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<h1><br><u><b>TALLY</b></u></h1>";
                echo "<h2><p>Total Number of Customers with Due Balance :<b> " .$row['noofcust']. "</b><br>Total Due Amount: $<b>" .$row['totalindue']. "</p></b></h2>";
            }
        }

        $currentUserId = $_SESSION["userid"];
        $sql2 = "SELECT * FROM view_transhist WHERE uId =".$currentUserId.";";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);

        if ($resultCheck2 > 0) {
            echo "<h1><u><b>Detailed List</b></u></h1>";
            while ($row = mysqli_fetch_assoc($result2)) {
                echo "<h5><p>Customer ID: <b>" .$row['cId']. "</b> <u>Due Amount: <b>$" .$row['indue']. "</u></b>    Name: <b>" .$row['name']. "</b>    Contact Number: <b>" .$row['contactNumber']. "</b>    Address: <b>" .$row['address']. "</p></b></h5>";
            }
        }
    ?>

</body>
</html>
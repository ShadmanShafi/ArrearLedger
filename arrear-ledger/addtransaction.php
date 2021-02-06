<?php
    include_once 'header.php';      
    include_once 'includes/dbh.inc.php';
?>

<section class="signup-form">
    <h2><br>Add New Transaction</h2>
    <form action="includes/addnewtransaction.inc.php" method="post">
        <input type="number" name="transCId" placeholder="Customer ID...">
        <input type="number" name="transProductQuantity" placeholder="Total Quantity of products...">
        <input type="number" name="transPrice" placeholder="Total Price of Products...">
        <input type="text" name="transDateofPurchase" placeholder="Date of Purchase...">
        <input type="number" name="transIndue" placeholder="Due Amount...">
        <input type="number" name="transPayout" placeholder="Paid Amout..."><br>
        <br><button type="submit" name="submit">Create New Transaction</button>
    </form>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all the fields.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again.</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>Transaction Created.</p>";
            }
        }
    ?>

</section>
     
<?php
    include_once 'footer.php';
?>
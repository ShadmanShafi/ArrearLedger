<?php
    include_once 'header.php';      
    include_once 'includes/dbh.inc.php';
?>

<section class="signup-form">
    <h2><br>Add New Customer</h2>
    <form action="includes/addnewcustomer.inc.php" method="post">
        <input type="text" name="name" placeholder="Name...">
        <input type="text" name="contactNumber" placeholder="Contact Number...">
        <input type="text" name="address" placeholder="Address..."><br>
        <br><button type="submit" name="submit">Create New Customer</button>
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
                echo "<p>Customer Created.</p>";
            }
        }
    ?>

</section>
     
<?php
    include_once 'footer.php';
?>
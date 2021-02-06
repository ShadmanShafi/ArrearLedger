<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h1><br>Sign Up</h1>
    <form action="includes/signup.inc.php" method="post">
        <br><input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="text" name="contactNumber" placeholder="Contact number...">
        <input type="text" name="shopAddress" placeholder="Shop address...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br>
        <br><button type="submit" name="submit">Sign Up</button>
    </form>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all the fields.</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Use a valid email address.</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Input passwords doesn't match.</p>";
            }
            else if ($_GET["error"] == "usernameoremailalreadytaken") {
                echo "<p>An existing account already uses the same username or email address.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again.</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up.</p>";
            }
        }
    ?>

</section>
     
<?php
    include_once 'footer.php';
?>
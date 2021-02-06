<?php
    include_once 'header.php';
?>

        <section class="login-form">
            <h1><br>Log In</h1>
            <form action="includes/login.inc.php" method="post">
                <br><input type="text" name="uid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password..."><br>
                <br><button type="submit" name="submit">Log In</button>
            </form>

            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Please fill in all the fields.</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Incorrect login credentials.</p>";
                    }
                }
            ?>

        </section>
     
<?php
    include_once 'footer.php';
?>
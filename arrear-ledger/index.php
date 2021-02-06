<?php
    include_once 'header.php';
?>

<section class="index-intro">

<?php
    if (isset($_SESSION["useruid"])) {
        echo "<br><h1>Welcome <b>" . $_SESSION["useruid"] . "</b> to</h1>";
    }
?>

    <h1><br><b><u>ARREAR LEDGER</u></b></h1>
    <h4><br>Bookkeeping made simple.</h4>
</section>

<section class="index-categories">
    
<?php
    if (isset($_SESSION["useruid"])) {
        echo "<h2><br>To Get Started</h2>

        <div class='btn-group'>
                <button>    
                    <h4><a href='addnewcustomer.php'class='w3-bar-item w3-button w3-padding-large'>Add New Customer</a></h4>            
                </button>       
              <button>
                    <h4><a href='addtransaction.php'class='w3-bar-item w3-button w3-padding-large'>Add New Transaction</a></h4>
              </button>
        </div>";
    }
    else {
        echo "<br><h4>Login to keep track of all your transactions.</h4>";
    }
?>
    
</section>
     
<?php
    include_once 'footer.php';
?>
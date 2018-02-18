<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>Purchase Receipt</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total Price: " . $_SESSION["total"] . ".</br>"; 
        echo "Name: " . $_SESSION["fullname"] . ".</br>";
        echo "Email: " . $_SESSION["email"] . ".</br>";
        ?>
    </body>
</html> 
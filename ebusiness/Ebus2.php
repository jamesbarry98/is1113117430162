<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" placeholder="fullname">
                    
                    </br>
                    
                    <label for="email">Email Address:</label>
                    <input type="text" id="email" placeholder="Email Address">
                    
                    </br>
                    
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
  
        <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["fullname"] = $_POST["fullname"];
            $_SESSION["email"] = $_POST["email"];
            ?>
    </body>
</html>
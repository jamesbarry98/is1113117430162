<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
     <style>
       body {
	background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment:fixed;
	 background-position: center center;
       }
    
    ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                }

            li {
                float: left;
                }

            li a {
                display: block;
                color: #666;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                }

            li a:hover:not(.active) {
                  background-color: #ddd;
                }

                .active {
                color: white;
                background-color: #000000;
                }
    
    </style>
    
    <body background="https://i.ytimg.com/vi/6C6FrVkLmPA/maxresdefault.jpg">
        
         <ul>
          <li style><a class="active" href="../homepage.html">Home</a></li>
          
        </ul>
        
        <div style= "text-align: center;">
        
        <h2 class="mainheading">Please enter your payment details</h2>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" placeholder="fullname">
                    
                    </br>
                    
                    <label for="email">Email Address:</label>
                    <input type="text" name="email" id="email" placeholder="Email Address">
                    
                    </br>
                    
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button class="button" onClick="validateDetails()">Validate</button>
  
        <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>
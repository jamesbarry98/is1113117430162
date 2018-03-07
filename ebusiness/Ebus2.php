<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <style>
      body{
                background: url("https://i.ytimg.com/vi/6C6FrVkLmPA/maxresdefault.jpg") /*the image address for my background image*/
                no-repeat center center fixed; /*insures no tiling so improves graphics*/
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
                color: #666; /* dark grey */
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                }

            li a:hover:not(.active) {
                  background-color: #ddd; /* light grey */
                }

                .active {
                color: white;
                background-color: #000000; /* black */
                }
    
        </style>
        
        
        <title>Enter Details</title>
        <!-- linking to my style sheet -->
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="ebus2_validator.js"></script>
    </head>
    
    <body>
        
         <ul>
          <li style><a class="active" href="cloudhomepage.html">Home</a></li>
          
        </ul>
        
        <div style= "text-align: center;">
        
        <h2 class="mainheading">Please enter your payment details</h2>
        
        
            <form action="Ebus3.php" method="POST"> <!-- post is the secure method i will use to get info from one page to another -->

                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                    
                    <br/>
                    <br/>
                    
                    <label for="homeaddress">Home Address:</label>
                    <input type="text" name="homeaddress" id="homeaddress" placeholder="Home Address">
                    
                    <br/>
                    <br/>
                    
                    <label for="email">Email Address:</label>
                    <input type="text" name="email" id="email" placeholder="Email Address">
                    
                    <br/>
                    <br/>
                    
                    <label for="cardnumber">Card Number:</label>
                    <input type="text" name="cardnumber" id="cardnumber" placeholder="Card Number" maxlength="16">
                    
                    <br/>
                    <br/>
                    
                    <label for="user_pin">Card Security Code</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br/>
                    <br/>

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
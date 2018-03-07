<?php
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
        
        <title>RECEIPT</title>
        <!-- linking to my style sheet -->
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
    </head>
 
    <body>
        
         <ul>
          <li style><a class="active" href="cloudhomepage.html">Home</a></li>
          
        </ul>
        
        <div style= "text-align: center;"> <!-- div to allign text and improve presintation -->
        <h2>Purchase Receipt</h2>
                
        <?php
        // Echo session variables that were set on previous page and display them on this page
        $fullname = $_POST['fullname'];
        $homeaddress = $_POST['homeaddress'];
        $cardnumber = $_POST['cardnumber'];
        $user_pin = $_POST['user_pin'];
        $email = $_POST['email'];
        
        echo "Total Price: $" . $_SESSION["total"] . ".<br/><br/><br/>"; 
        echo "Name: $fullname <br/><br/><br/> Home Address: $homeaddress <br/><br/><br/> Email: $email"
        ?>
   
        </div> 
    </body>
</html>
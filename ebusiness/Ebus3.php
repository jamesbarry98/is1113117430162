<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
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
        <h2>Purchase Receipt</h2>
                
        <?php
        // Echo session variables that were set on previous page
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        echo "Total Price: $" . $_SESSION["total"] . ".</br>"; 
        echo "Name: $fullname </br> Email: $email"
        ?>
   
        </div> 
    </body>
</html>
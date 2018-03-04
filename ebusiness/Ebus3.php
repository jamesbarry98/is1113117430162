<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <!-- linking to my style sheet -->
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
    </head>
    
     <style>
       body {
	background-repeat: no-repeat; /*The following will stop tiling and make the background image fill the page*/
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
    
    <body background="https://i.ytimg.com/vi/6C6FrVkLmPA/maxresdefault.jpg"> <!-- the image address for my background image -->
        
         <ul>
          <li style><a class="active" href="cloudhomepage.html">Home</a></li>
          
        </ul>
        
        <div style= "text-align: center;"> <!-- div to allign text and improve presintation -->
        <h2>Purchase Receipt</h2>
                
        <?php
        // Echo session variables that were set on previous page and display them on this page
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        echo "Total Price: $" . $_SESSION["total"] . ".</br></br></br>"; 
        echo "Name: $fullname </br></br></br> Email: $email"
        ?>
   
        </div> 
    </body>
</html>
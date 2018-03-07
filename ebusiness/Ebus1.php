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
                color: #666;  /* dark grey */
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
        
        <title>Select Product</title>
        <!-- linking to my style sheet -->
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
        <!--jquery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
    </head>
       
            
      <body>
      
        <ul>
          <li style><a class="active" href="cloudhomepage.html">Home</a></li>
          
        </ul>
      
        <div style= "text-align: center;">
        <h1 class="mainheading">Select a Product</h1>
        
        
        <br/>
        
        <form method="POST" action="Ebus2.php"> <!-- post is the secure method i will use to get info from one page to another -->
        
        <label for ="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            SalesForce @$100
        </label>
 
        <br/>
 
        <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Services @$300
        </label>
        
        <br/>
        
         <label for ="cloud9">
            <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
            Cloud 9 @$200
        </label>
        
         <br/>
        
         <label for ="gmail">
            <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
            Gmail @$400
        </label>
        
        <br/>
        <br/>
        
        
        <label for ="subtotal">
        Sub Total
            <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for ="discount">
        Discount @ 5%
            <input type="text" id="discount" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for ="vat">
        Vat @ 10%
            <input type="text" id="vat" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for ="total">
        Total
            <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <button type="submit" class="button1" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button class="button" onClick="calcSub()">Calculate Cost</button>
        
        <button class="button2" onclick="location.href='Ebus1.php'">Clear Choice</button>
        
        </div>
        </body>
        
</html>
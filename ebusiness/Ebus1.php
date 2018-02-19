<!DOCTYPE html>
<html>   
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="ebus_pages.css" type="text/css" />
        
        <!--jquery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
       
    <style>
       body {
	background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment:fixed;
	 background-position: center center;
       }
    
    </style>     
            
            
      <body background="https://i.ytimg.com/vi/6C6FrVkLmPA/maxresdefault.jpg">
      
        <div style= "text-align: center;">
        <h1 class="mainheading">Select a Product</h1>
        
        
        </br>
        
        <form method="POST" action="Ebus2.php">
        
        <label for ="Sales Force">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            SalesForce @$100
        </label>
 
        </br>
 
        <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Services @$300
        </label>
        
        </br>
        
         <label for ="Cloud 9">
            <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
            Cloud 9 @$200
        </label>
        
         </br>
        
         <label for ="Gmail">
            <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
            Gmail @$400
        </label>
        
        </br>
        </br>
        
        
        <label for ="subtotal">
        Sub Total
            <input type="text" id="subtotal" value="0.00" read only/>
        </label>
        
        </br>
        
        <label for ="discount">
        Discount @ 5%
            <input type="text" id="discount" value="0.00" read only/>
        </label>
        
        </br>
        
        <label for ="Vat">
        Vat @ 10%
            <input type="text" id="vat" value="0.00" read only/>
        </label>
        
        </br>
        
        <label for ="total">
        Total
            <input type="text" id="total" name="total" value="0.00" read only/>
        </label>
        
        </br>
        
        <button class="button1" type "submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        </br>
        <button class="button" onClick="calcSub()">Calculate Cost</button>
        <a href="Ebus1.php"><button class="button2">Clear Choice</button></a>
        </body>
        </div>
</html>
<!DOCTYPE html>
<html>   
    <head>
        <title>Select Product</title>
        
        <!--jquery-->
       <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
            
      <body>
      
      
        <h1>Select a Product</h1>
        
        
        </br>
        
        <form method="POST" action="Ebus2.php">
        
        <label for ="Sales Force">
            <input type="radio" id="sales force" name="product" checked onClick="disablebtnProceed()"/>
            SalesForce @$100
        </label>
 
        </br>
 
        <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            aws @$300
        </label>
        
        </br>
        </br>
        
        
        <label for ="subtotal">
        Sub Total
            <input type="text" id="subtotal" value="0.00" read only/>
        </label>
        
        </br>
        
        <label for ="total">
        Total
            <input type="text" id="total" value="0.00" read only/>
        </label>
        
        </br>
        
        <button type "submit"id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        </br>
        <button onClick "calSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        </body>
</html>
        
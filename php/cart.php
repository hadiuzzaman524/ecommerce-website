<?php 
//session_start();
 require_once("cart_item.php");
require_once("returndata.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cart</title>
    <link rel="stylesheet" href="../css/cart.css">
</head>

<?php include("header.php");
    ?>
<body>
       <div style="height: 200px; width: 100%; background:#3385F0; text-align: center; color: white; box-sizing: border-box;padding-top: 50px;  box-shadow: 1px 2px 10px 5px black;">

	<h1>Your Cart</h1>
	<h3>You can add, and remove item in a cart..!</h3>


</div>
   
    <div class="main_container">

       
        <div class="leftitem">
            <?php 

            
            if(isset($_SESSION['cart']))
            {
                $productId=array_column($_SESSION['cart'],'product_id');
                
                $result=getData();
              
    
            while($row=mysqli_fetch_assoc($result)){
                
                foreach($productId as $pid){
                    
                    if($row['product_id']==$pid){
                        getCart($row['product_image'],$row['product_name'],$row['product_exp'],$row['product_price'],$row['product_id']); 
                    }
                }
            }
               
                
            
            }
            ?>
          
            
        </div>
        
        <!-- Price Details area -->
        
        <div class="rightitem">
            
            <h3>PRICE DETAILS</h3>
            <hr style="margin-top:10px; margin-bottom:10px;">
            
            
            <!-- Left Element-->
            <div class="rightfirst">
                
                 <p>Price (4 items)  </p>
            
            <p>Delivary Charges</p>
            <hr style="margin-right:20px; margin-top:6px;">
            
            <h4>Account Payable</h4>
            </div>
            
            
            <!--Right elemnt-->
            <div class="rightsecond">
                
                <h4>$555  </h4>
            
            <h4 style="color:green">FREE</h4>
              <hr style="margin-right:20px; margin-top:6px;">
              
               <h4>$555</h4>
            </div>
            
           
            
           
        </div>
        
    </div>
</body>
<?php 

include("../php/footer.php");
?>
</html>
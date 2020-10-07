<?php 
//session_start();
 require_once("cart_item.php");
 require_once("returndata.php");

     if(isset($_POST['continue_shoping'])){
       header("location:product.php");

     }
     elseif (isset($_POST['checkoutbutton'])) {
          $c=count($_SESSION['cart']); 
        
        if($c>0){
         header("location:checkout.php");
        }
        else{
        header("location:product.php");
        }
     }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cart</title>
    <link rel="stylesheet" href="../css/carttest.css">
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
                
               <?php 

               $total=0; 
               $del=50;
               $hadi=0;
                    foreach ($_SESSION['cart'] as $key => $value){

                       print($value['name']."  --- (".$value['price']."*".$value['quantity'].")<br>");
                        $total+=$value['price']*$value['quantity']; 
                        
                       
                                     $item_array=array( 
                                    
                                        'product_id'=> $value['product_id'],
                                        'name'=>$value['name'],
                                        'quantity'=> $value['quantity'],
                                        'price'=>$value['price']
                                         
                                    );
                                    
                                $_SESSION['customer_order'][$hadi++]=$item_array;


                     }
               ?>
            
            <p>Delivery Charges </p>
            <hr style="margin-right:20px; margin-top:6px;">
            
            <h4>Account Payable  </h4>
            </div>

            <div class="rightsecond">
                <?php 
                foreach ($_SESSION['cart'] as $key => $value){
                print($value['price']*$value['quantity']."৳<br>"); 
                }

                ?>
                <p>50৳</p>
                <hr style="margin-right:20px; margin-top:6px;">
                <h4> <?php echo $total+$del."৳"; ?></h4>
            </div>
            
            
        
        <div class="finalarea">

            <form action="" method="post">

                <button name="continue_shoping" value="continue">Continue to shoping</button>
                <button name="checkoutbutton" value="letscheck">Checkout</button>
                
            </form>

        </div>
              
           

           
        </div>
          
        
    </div>
</body>
<?php 

include("../php/footer.php");
?>
</html>
<?php 


session_start();
require_once("returnquantity.php"); 

if(isset($_POST['remove']) || isset($_POST['plusbutton']) || isset($_POST['minusbutton'])){

    foreach ($_SESSION['cart'] as $key => $value) {

    if($value['product_id']==$_POST['getproduct_id']){

//remove item from cart.......
      if(isset($_POST['remove'])){

    //  $_SESSION['itemremove']='success'; // not working this line
      unset($_SESSION['cart'][$key]);
     }
     elseif (isset($_POST['plusbutton'])) {
       
        //$value['quantity']+=1; 
          $_SESSION['cart'][$key]['quantity']++;

        
     }
     elseif (isset($_POST['minusbutton'])) {

      
        if($value['quantity']>1){
          $_SESSION['cart'][$key]['quantity']--;
          

        }       
     }
    }

   }

}

unset($_SESSION['getproduct_id']);

//...............................................................



function getCart($img,$name,$description,$price,$product_id){

  echo ''?>


<html>
<head>
   <link rel="stylesheet" href="../css/item.css">
   
</head>
<body>
   
             <!--Cart item -->
          
           <div class="cart_element">
              
              <div class="cartelement_first">
                  
              
              <?php 
            echo "<img src=$img alt='Image is not available'>"; 
            ?>
             
            
              </div>
              
              <div class="cartelement_second">
                 
                    <h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
                    <p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>

                   <h3><?php echo $price; ?>TK Per Pices</h3>
                   
                   <form action="<?php $_PHP_SELF ?>" method="post">
                      
                       <button
                       class="hadi" type="submit" name="minusbutton"> - </button>
                       

                       <input type="text" value="<?php 

                           foreach ($_SESSION['cart'] as $key => $value) {

                              if($value['product_id']==$product_id){

                                print(getQ($product_id));
                              }

                            }
                       ?>" name="total_item" class="count">
                       

                        <button class="hadi" type="submit" name="plusbutton"> + </button>
                         <input type="hidden" name="getproduct_id"
                         value=" <?php echo $product_id; ?>" >
                         <input type="hidden" name="quantity" value="<?php print(getQ($product_id)); ?>">


                   <button class="removebutton" name="remove" value="removeclick">Remove</button>
                         
                       
                   </form>
                  
              </div>
              
              
               
           </div>
            <!-- Cart item area end-->
    
</body>
</html>

  <?php    
}
?>

<?php 
include("script.php");

?>






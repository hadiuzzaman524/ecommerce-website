<?php 


session_start();

      $_SESSION['count']=1;

      if(isset($_POST['plusbutton'])){
        
        $_SESSION['count']=$_POST['total_item']+1;
      }
      if (isset($_POST['minusbutton'])) {
      
        if($_POST['total_item']>1){

        $_SESSION['count']=$_POST['total_item']-1;

        }
      }


function getCart($img,$name,$description,$price,$product_id){
  echo ''?>


<html>
<head>
   <link rel="stylesheet" href="../css/cart.css">
   
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
                       

                       <input type="text" value="<?php echo $_SESSION['count']; ?>"
                       name="total_item"
                       class="count">
                       

                        <button class="hadi" type="submit" name="plusbutton"> + </button>
                       
                       	<input type="hidden" name="product_id"
      	                 value=" <?php echo $product_id; ?>" >
                       
                   </form>
                   
                   <form action="">
                   <button class="removebutton">Remove</button>
                   </form>
              </div>
              
              
               
           </div>
            <!-- Cart item area end-->
    
</body>
</html>

  <?php    
}

?>


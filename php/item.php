<?php

function test_home($img,$name,$description,$manufactured,$price,$product_id){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="../css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
  
  <form action="home.php" method="post">
      

  <div class="carditem">
      <div class="firstcard">
      	<?php 
	          echo "<img src=$img alt='Image is not available'>"; 
      	?>
      
      </div>

      <div class="secondcard">
      	
      	<h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
      	<p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>
      	<p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
      	<h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      
      		<button type="submit" name="addcard" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"> </i></button>
      	
      	
      	<input type="hidden" name="product_id"
      	 value=" <?php echo $product_id; ?>" >
      	 
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}

/* for medicine category */


function test_medicine($img,$name,$description,$manufactured,$price,$product_id){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="../css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
  
  <form action="medicine.php" method="post">
      

  <div class="carditem">
      <div class="firstcard">
        <?php 
            echo "<img src=$img alt='Image is not available'>"; 
        ?>
      
      </div>

      <div class="secondcard">
        
        <h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
        <p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>
        <p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
        <h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      
          <button type="submit" name="addcard" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"> </i></button>
        
        
        <input type="hidden" name="product_id"
         value=" <?php echo $product_id; ?>" >
         
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}


/*surgical instument catagory */


function test_surgical($img,$name,$description,$manufactured,$price,$product_id){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="../css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
  
  <form action="surgicalinstuments.php" method="post">
      

  <div class="carditem">
      <div class="firstcard">
        <?php 
            echo "<img src=$img alt='Image is not available'>"; 
        ?>
      
      </div>

      <div class="secondcard">
        
        <h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
        <p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>
        <p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
        <h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      
          <button type="submit" name="addcard" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"> </i></button>
        
        
        <input type="hidden" name="product_id"
         value=" <?php echo $product_id; ?>" >
         
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}


/* harbal category */
function test_harbal($img,$name,$description,$manufactured,$price,$product_id){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="../css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
  
  <form action="harbalproduct.php" method="post">
      

  <div class="carditem">
      <div class="firstcard">
        <?php 
            echo "<img src=$img alt='Image is not available'>"; 
        ?>
      
      </div>

      <div class="secondcard">
        
        <h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
        <p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>
        <p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
        <h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      
          <button type="submit" name="addcard" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"> </i></button>
        
        
        <input type="hidden" name="product_id"
         value=" <?php echo $product_id; ?>" >
         
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}


/*all product */


function test_product($img,$name,$description,$manufactured,$price,$product_id){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="../css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
  
  <form action="product.php" method="post">
      

  <div class="carditem">
      <div class="firstcard">
        <?php 
            echo "<img src=$img alt='Image is not available'>"; 
        ?>
      
      </div>

      <div class="secondcard">
        
        <h2 style="text-transform: capitalize;"><?php echo $name; ?></h2>
        <p><i style="text-transform: capitalize;"><?php echo $description; ?></i></p>
        <p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
        <h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      
          <button type="submit" name="addcard" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"> </i></button>
        
        
        <input type="hidden" name="product_id"
         value=" <?php echo $product_id; ?>" >
         
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}

?>

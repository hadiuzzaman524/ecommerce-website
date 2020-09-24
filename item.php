<?php
function test($img,$name,$description,$manufactured,$price){
echo ''?>

<div> 
<html>
<head>
    <link rel="stylesheet" href="item.css">
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
      	
      	<h2><?php echo $name; ?></h2>
      	<p><i><?php echo $description; ?></i></p>
      	<p style="margin-top: 5px">Manufactured by: <span style="text-transform: uppercase;font-weight: 700;"><?php echo $manufactured; ?></span></p>
      	<h3 style="margin-top: 10px;"><?php echo $price; ?> TK Per Pice</h3>
      	<button type="submit" class="button_style"> Add to Card <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
      </div>
    
  </div>
   
     </form>
    
</body>
</html>
</div>
<?php 
}
?>

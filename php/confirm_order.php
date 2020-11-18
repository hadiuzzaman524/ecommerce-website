<?php 



?>

<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body>
 <?php 
    include("header.php");
    ?>

    <div style="height: 300px; display: block; text-align: center; margin-top: 40px; ">
    	<h3>Thank You For Stay With Us</h3>
    	<h4>Your order has been successfully recieved</h4>
    	<p style="margin-top: 20px; "><i>Order Number: <?php 

    	if(isset($_COOKIE['orderNumber'])){
                        
                print($_COOKIE['orderNumber']) ;          
         }
    	?></i></p>


    </div>

</body>
</html>

 <?php 
    include("footer.php");
    ?>
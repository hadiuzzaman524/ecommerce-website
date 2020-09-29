<script src="sweetalert.min.js"></script>

<?php 


/* show added to the cart dialog*/

/*if(isset($_SESSION['added_cart_dialog'])){
?>
    
  <script>
swal("Added to the cart..!", "", "success");

</script>  
<?php 
unset($_SESSION['added_cart_dialog']);
}
*/

/*show already added in the cart dialog*/

if(isset($_SESSION['already_added_cart_dialog'])){
?>
    
  <script>

swal("OOPS....!", "Already added in the cart..!");

</script>  
<?php 
unset($_SESSION['already_added_cart_dialog']);
}

/* Show create an account */

if(isset($_SESSION['Please_Create_Account'])){
?>
    
<script>

swal("OOPS....!", "Please Create an account");

</script>  
<?php 
unset($_SESSION['Please_Create_Account']);
}

/*item remove dialog */
/* Show create an account */

if(isset($_SESSION['itemremove'])){
?>
    
<script>

swal("Item is remove successfully.!");

</script>  
<?php 
unset($_SESSION['itemremove']);
}


//..................................
// check cart is empty or not
if(isset($_SESSION['emptycart'])){
?> 
<script>

swal("The Cart is empty !");

</script>  
<?php 
unset($_SESSION['emptycart']);
}


?>

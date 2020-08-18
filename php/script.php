<script src="sweetalert.min.js"></script>

<?php 


/* show added to the cart dialog*/
if(isset($_SESSION['added_cart_dialog'])){
?>
    
  <script>
swal("Added to the cart..!", "", "success");

</script>  
<?php 
unset($_SESSION['added_cart_dialog']);
}

/*show already added in the cart dialog*/

if(isset($_SESSION['already_added_cart_dialog'])){
?>
    
  <script>

swal("OOPS....!", "Already added in the cart..!");

</script>  
<?php 
unset($_SESSION['already_added_cart_dialog']);
}




?>

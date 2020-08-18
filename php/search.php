 <?php 

//start session 
session_start();

 require_once("item.php");  
 require_once("returndata.php");


// check add card button is clicked or not
if(isset($_POST['addcard']))
{
  
    
    //check the product is add cart or not...
    if(isset($_SESSION['cart'])){
     
       
        //set product which is already added in session variable
        $item_array_id = array_column($_SESSION['cart'],'product_id');
        //print_r($item_array_id);
        
        
        //check if product id is already added or not....
        if(in_array($_POST['product_id'],$item_array_id)){
           print(" already added");
            
        }
        
        // if product id is not added then execute this statement and add the product id in session variable
        else{
           
            $count=count($_SESSION['cart']);// this may help me to set index of array
            
              $item_array=array(
        
            'product_id'=> $_POST['product_id']
        );
        
            $_SESSION['cart'][$count]=$item_array;      
            
        }
        
    }
    
    // first time there is no item execute this block and add 0 index value is first added item
    else{
        
        $item_array=array(
        
            'product_id'=> $_POST['product_id']
        );
        
        $_SESSION['cart'][0]=$item_array;
        
        //print_r($_SESSION['cart']);
    }
     


    
}
     
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="../css/product.css">
</head>

<?php 
include("header.php");
?>
<body>

	<div style="height: 400px; width: 100%; background-image: url('../image/medi.jpg'); text-align: center; color: black; box-sizing: border-box;padding-top: 150px;  box-shadow: 1px 2px 10px 5px black; margin-bottom: 30px;">



	<h1>Choose your product</h1>
	<h3>You can add product in your shoping cart and let's enjoy with us..! </h3>


</div>
<!--end header area -->
          <div class="showing_product">
              
             <?php 
              
      //showing all product
              
              $result=getSearch();
              
              while($row=mysqli_fetch_assoc($result)){
                 
                  test_product($row['product_image'],$row['product_name'],$row['product_exp'],$row['product_companey'],$row['product_price'],$row['product_id']);
              }
              ?>
              
              
          </div>


</body>
<?php 
include("footer.php");
?>

</html>
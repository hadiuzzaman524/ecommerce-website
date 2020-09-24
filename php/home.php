 <?php 

//start session 
session_start();

 require_once("item.php");  
 require_once("returndata.php");


// check add card button is clicked or not
if(isset($_POST['addcard']))
{
   
    //setcookie("userinformation","",time()-60);
    
    if(isset($_COOKIE['userinformation'])){
        
            //check the product is add cart or not...
    if(isset($_SESSION['cart'])){
     
       
        //set product which is already added in session variable
        $item_array_id = array_column($_SESSION['cart'],'product_id');
        //print_r($item_array_id);
        
        
        //check if product id is already added or not....
        if(in_array($_POST['product_id'],$item_array_id)){
          // print(" already added");
          
         $_SESSION['already_added_cart_dialog']='added'; 
        
            
        }
        
        // if product id is not added then execute this statement and add the product id in session variable
        else{
           
            $count=count($_SESSION['cart']);// this may help me to set index of array
            
              $item_array=array(
        
            'product_id'=> $_POST['product_id'],
            'quantity'=> 1,
            'price'=>$_POST['product_price'],
            'name'=>$_POST['product_name']
        );
        
            $_SESSION['cart'][$count]=$item_array;   

              //check this session variable from script.php
          $_SESSION['added_cart_dialog']='added';    
            
        }
        
    }
    
    // first time there is no item execute this block and add 0 index value is first added item
    else{
        
        $item_array=array( 
        
            'product_id'=> $_POST['product_id'],
            'quantity'=>1,
            'price'=>$_POST['product_price'],
             'name'=>$_POST['product_name']
        );
        
        $_SESSION['cart'][0]=$item_array;
        
        //print_r($_SESSION['cart']);
    }
        
    }else{
        
        $_SESSION['Please_Create_Account']='create'; 
    }   
}
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homee.css">
   

</head>
<body>
   <?php 
    include("header.php");
    ?>
    
   
   <!-- start sliderdiv -->
 <div class="sliderdiv">
    
   
       
       <div class="mainslider">
           
       </div> 
       
     
 </div>
 <!-- end sliderdiv --> 

 <div class="clear"></div>

  <div class="products">


<!-- start choose us area-->
  <h1>WHY CHOOSE US</h1> 
          <h4>Fastest home delivery with best price!</h4>
          <hr>


    <div class="choose_us">
          <!-- first element -->
          <div class="choose_area">
              <img src="../image/square.jpg" alt="No image">
              <h3>Fastest home dalivery</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
               <img src="../image/square.jpg" alt="No image">
              <h3>Every kind of product available</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
             <img src="../image/square.jpg" alt="No image">
              <h3>Chip rate</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
               <img src="../image/square.jpg" alt="No image">
              <h3>Square Pharmaceuticals Ltd.</h3>
          </div>
        <!-- end first element div-->
    </div>

<!-- end choose us area-->


<!-- start companies area-->
     <h1>POPULAR MEDICINE COMPANIES IN BANGLADESH</h1> 
          <h4>You can choose your products using the popular companies name in bangladesh.</h4>
          <hr>

          <div class="companies">

        <!-- first element -->
          <div class="companies_name">
               <img src="../image/square.jpg" alt="No image">
              <a href="../php/square.php"> <h3>Square Pharmaceuticals Ltd.</h3></a>

          </div>
        <!-- end first element div-->

  <!-- first element -->
          <div class="companies_name">
              <img src="../image/ACI-Limited.jpg" alt="No image">
              <a href="#"> <h3>ACI Limited.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/incepta.jpg" alt="No image">
              <a href="../php/incepta.php"> <h3>Incepta Pharmaceuticals Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/opsonin.png" alt="No image">
              <a href="../php/opsonin.php"> <h3>Opsonin pharma Limited.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/renta.jpg" alt="No image">
              <a href="#"> <h3>Renata Limited. </h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/baximco.png" alt="No image">
              <a href="../php/baximco.php"> <h3>Beximco pharmaceutical Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/sk+f.jpg" alt="No image">
              <a href="#"> <h3>Eskayef Pharmaceuticals Ltd.
</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/acme.jpg" alt="No image">
              <a href="#"> <h3>ACME Laboratories Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/general.jpg" alt="No image">
              <a href="../php/general.php"> <h3>General Pharmaceutical Ltd.
</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="../image/helthcare.png" alt="No image">
              <a href="#"> <h3>Healthcare Pharmaceuticals Ltd.</h3></a>

          </div>
        <!-- end first element div-->
          </div>



<!-- start our product area-->
          <h1>OUR PRODUCTS</h1> 
          <h4>We have lot of madicine ,surgical instuments, harbal and natural products.</h4>
          <hr>

          <div class="table_area">
              
             <?php 
              
      //showing all product
              
              $result=getData();
              
              $c=0;
              while($row=mysqli_fetch_assoc($result)){
                $c++;
                if($c<17){


                   test_home($row['product_image'],$row['product_name'],$row['product_exp'],$row['product_companey'],$row['product_price'],$row['product_id']);
                   }
              }
              ?>
              
              
          </div>

<!-- end our product area-->
  </div>

  <h3 style="float: right; margin:30px; margin-right: 100px;"><a href="../php/product.php" style=""> See more </a>>></h3>
<div class="clear"></div>



  
   <?php include("footer.php")?>
</body>
</html>

<?php 
include("script.php");

?>
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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/homee.css">
</head>
<?php 
include("header.php");
?>

<body>

<!-- start our product area-->
          <h1 style="text-align: center; padding: 50px;">Search Result</h1> 
         
          <hr>

          <div class="table_area">
     <?php 
              
      //showing all product
              $name= $_SESSION['searchitemname']; 
              $result=getSearch_Result($name);


if($result!=null){


             $total=mysqli_num_rows($result); 

         if($total>0){


		    echo "Search item found:".$total;
           while($row=mysqli_fetch_assoc($result)){
               

                   search_item($row['product_image'],$row['product_name'],$row['product_exp'],$row['product_companey'],$row['product_price'],$row['product_id']);
                 
              }

                }
                else{

                	echo "No result found..!";
                }
                }
                else {
                	echo "No result found..!";
                }
              ?>
     
          </div>

</body>

<?php 
include("footer.php"); 
?>
</html>

<?php 
include("script.php");

?>
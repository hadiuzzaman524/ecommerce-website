<?php 

session_start(); 

if(isset($_POST['placeorder']))
{
  
    $firstname=$_POST['firstname']; 
    $lastname=$_POST['lastname']; 
    $company=$_POST['company']; 
    $country=$_POST['country'];
    $housenumber=$_POST['housenumber'];
    $apartment=$_POST['apartment'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $postcode=$_POST['postcode'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $additional=$_POST['additional'];

    $paymentoption= $_POST ['credit_card'];


    if(empty($firstname)){
       
        $errorMsg['firstname']="firstname required";
    }
    else if(empty($lastname)){
       
        $errorMsg['lastname']="lastname required";
    }
    elseif(empty($country)){
       
        $errorMsg['country']="country name required";
    }
    elseif(empty($housenumber)){
       
        $errorMsg['housenumber']="housenumber required";
    }
    elseif(empty($city)){
       
        $errorMsg['city']="city required";
    }
    elseif(empty($district)){
       
        $errorMsg['district']="district required";
    }
    elseif(empty($postcode)){
       
        $errorMsg['postcode']="postcode required";
    }
    elseif(empty($phone)){
       
        $errorMsg['phone']="phone required";
    }
    else {
        

            $connection=mysqli_connect('localhost','root');

            if($connection)
            {
                $db=mysqli_select_db($connection,'homepharmacy');

                if($db){


//.............................................................................................
                    $all_id=""; 
                    $all_quantity=""; 
                
                		 foreach ($_SESSION['customer_order'] as $key => $value){

					       $id=$value['product_id'];

                           $all_id.=$id;
                           $all_id.=", "; 

					
					       $quantity=$value['quantity'];
                           $all_quantity.=$quantity; 
                           $all_quantity.=" ,"; 



					     }
                

                        

                        // store customer order details 
                    
                         $firstQueary="insert into final_order(product_id,product_quantity) 
                         values 
                         ('$all_id','$all_quantity')"; 

                          mysqli_query($connection,$firstQueary);
                          $all_id=""; 
                          $all_quantity=""; 


//fetch final_order id for store order_ table 

                            $lastid=0;
                             $returnQ="SELECT id FROM final_order";
        
                                $return_result=mysqli_query($connection,$returnQ); 
                                
                                if(mysqli_num_rows($return_result)>0){
                                    
                                  $c=0;
                                  while($row=mysqli_fetch_assoc($return_result)){
                                    $c++;
                                   
                                    $lastid=$row['id']; 
                                   
                                
                                  }
                                }
                        
                      
					//store belling address 

                       $q="insert into order_(final_order_id,firstname,lastname,company,country,housenumber,apartment,city,district,postcode,phone,email,notes,paymentoption) values

                       ('$lastid','$firstname','$lastname','$company','$country','$housenumber','$apartment','$city','$district','$postcode','$phone','$email','$additional','$paymentoption')";


                         mysqli_query($connection,$q);



                         //fetch customer orderId
                           $lid=0;
                             $rQ="SELECT id FROM order_";
        
                                $rR=mysqli_query($connection,$rQ); 
                                
                                if(mysqli_num_rows($rR)>0){
                                    
                                  $c=0;
                                  while($row=mysqli_fetch_assoc($rR)){
                                    $c++;
                                   
                                    $lid=$row['id']; 
                                
                                  }
                                }
                       
                      unset($_SESSION['cart']);
                      setcookie('orderNumber',$lid,time()+60*60*500);
                      header("location:confirm_order.php");

                }
                else {
                    print("No database available");
                }     
            }
            else {
                print("Connection goes wrong");
            }


      }




}


?>
<?php 
include("header.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
	<link rel="stylesheet" type="text/css" href="../css/check.css">
</head>
<body>
<h1 style="margin-top: 20px; margin-left: 100px;">Billing details</h1>
<div class="formarea">
	

<form action="" method="post">
<label>First name*</label>
<input type="text" name="firstname">
     <?php 
         
         if(isset($errorMsg['firstname'])){
             $msg=$errorMsg['firstname'];
             
             echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

<label>Last name*</label>
<input type="text" name="lastname">
     <?php 
         
         if(isset($errorMsg['lastname'])){
             $msg=$errorMsg['lastname'];
               echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

<label>Company</label>
<input type="text" name="company">


<label>Country/Region*</label>
<input type="text" name="country">
   <?php 
         
         if(isset($errorMsg['country'])){
             $msg=$errorMsg['country'];
             
               echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>


<label>Street address*</label>
<input type="text" name="housenumber" placeholder="house number and street name">
   <?php 
         
         if(isset($errorMsg['housenumber'])){
             $msg=$errorMsg['housenumber'];
             
               echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

<input type="text" name="apartment" placeholder="apartment,suite,unit,etc.">


<label>Town/City*</label>
<input type="text" name="city">
   <?php 
         
         if(isset($errorMsg['city'])){
             $msg=$errorMsg['city'];
             
               echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>


<label>District*</label>
<input type="text" name="district">
   <?php 
         
         if(isset($errorMsg['district'])){
             $msg=$errorMsg['district'];
             
              echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

<label>Postcode/ZIP*</label>
<input type="text" name="postcode">
   <?php 
         
         if(isset($errorMsg['postcode'])){
             $msg=$errorMsg['postcode'];
             
              echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>


<label>Phone*</label>
<input type="number" name="phone">
   <?php 
         
         if(isset($errorMsg['phone'])){
             $msg=$errorMsg['phone'];
             
               echo " <p style='font-size:12px; margin-left:5px; color:gray; margin-top:-15px;margin-bottom:10px;'> $msg </p>";      
         }
         ?>

<label>Email</label>
<input type="Email" name="email">

<h2 style="margin-top: 20px;">Additional information</h2>

<p>Order notes(optional)</p>

<input type="text" name="additional" placeholder="Notes about your order,e.g. special notes for delivery.">


<h2 style="margin-top: 20px; margin-bottom: 10px;">Select your payment option*</h2>


<input type="radio" name="credit_card" value="cash" checked="checked">  Cash on Delivery<br>
<input type="radio" name="credit_card" value="bank">  Bank transfer<br>


<br>
<button type="submit" name="placeorder" value="submit">Place order</button>
</form>

</div>
<div class="clear"></div>



</body>
</html>

<?php 
include("footer.php"); 
?>

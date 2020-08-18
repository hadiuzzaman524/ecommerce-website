<?php 


if(isset($_POST['signupbuttonclick']))
{
  
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $password=$_POST['password']; 
    $mobile=$_POST['mobile'];
    
    if(empty($name)){
       
        $errorMsg['name']="Name required";
    }
   else if(empty($email)){
        $errorMsg['email']="Email address required"; 
    }
   else if(empty($password)){
        $errorMsg['password']="Password required"; 
    }
    else if(strlen($password)<6){
        $errorMsg['password']="Password must be 6 character long"; 
    }
    
    else if(empty($mobile)){
        $errorMsg['mobile']="Mobile number required"; 
    }
    else if(strlen($mobile)<11){
           $errorMsg['mobile']="Please enter valid mobile number";  
    }
    else {
        

            $connection=mysqli_connect('localhost','root');

            if($connection)
            {
                $db=mysqli_select_db($connection,'homepharmacy');

                if($db){

                    $queary="SELECT *FROM registration WHERE username='$name' && email='$email' && password='$password'"; 

                    $result=mysqli_query($connection,$queary); 

                    $flag=mysqli_num_rows($result);

                    if($flag){

                        $errorMsg['register']="Already registred. Please login or uses different information.";
                    }
                    else {

                        $q="insert into registration(username,email,password,mobile) values('$name','$email','$password','$mobile')";
                        mysqli_query($connection,$q);
                        header("location:login.php");
                    }    

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
  <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
 <?php 
    include("header.php");
    ?>
  <div class="header">
    
      <h2> Welcome to,</h2>
      <h1>HomePharmacy</h1>
      
     <h4>Already have an account! <a href="http://localhost/homepharmacy/login.php"> Sign in</a></h4>
  </div>  
<div class="clear"></div>
    
     <!--main container start --> 
 <div class="signuplogin">
     
      <!--button div start --> 
      <!--
     <div>
     <button class="loginbutton">Login</button>
     <button class="signupbutton">Signup</button>
     </div>
     
      <!--button div end --> 
   <div class="clear"></div>
   <!-- form div start -->
   
   <div class="formarea">
     
     <form action="" method="post">
         
    
      <label for="username">USERNAME</label>
      <input type="text" name="name">
      <?php 
         
         if(isset($errorMsg['name'])){
             $msg=$errorMsg['name'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
      
        <label for="email">EMAIL ADDRESS</label>
      <input type="email" name="email">
      
        <?php 
         
         if(isset($errorMsg['email'])){
             $msg=$errorMsg['email'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
      <label for="password">PASSWORD</label>
      <input type="password" name="password">
        <?php 
         
         if(isset($errorMsg['password'])){
             $msg=$errorMsg['password'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
      
       <label for="mobile">MOBILE NUMBER</label>
      <input type="number" name="mobile">
      
          <?php 
         
         if(isset($errorMsg['mobile'])){
             $msg=$errorMsg['mobile'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
    
      <input type="submit" value="Sign Up" name="signupbuttonclick">
         <?php 
         
         if(isset($errorMsg['register'])){
             $msg=$errorMsg['register'];
             
             echo " <p style='font-size:17px; margin-left:15px; color:red; margin-top:-5px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
    
       </form>  
        
    
   </div>
  <!-- form div end-->
  <div class="clear"></div>
 
 
  
 </div>
  <!--main container end --> 
  
<div class="clear"></div>

<?php 
    include("footer.php");
    ?>
</body>
</html>
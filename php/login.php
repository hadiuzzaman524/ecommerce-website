<?php 


if(isset($_POST['signinbuttonclick']))
{
  

    $email=$_POST['email']; 
    $password=$_POST['password']; 
  
    
    if(empty($email)){
        $errorMsg['email']="Email address required"; 
    }
   else if(empty($password)){
        $errorMsg['password']="Password required"; 
    }
    else if(strlen($password)<6){
        $errorMsg['password']="Password must be 6 character long"; 
    }
    else {
        

            $connection=mysqli_connect('localhost','root');

            if($connection)
            {
                $db=mysqli_select_db($connection,'homepharmacy');

                if($db){
                    
                    

                   $queary="SELECT *FROM registration WHERE email='$email' && password='$password'"; 

                    $result=mysqli_query($connection,$queary); 

                   $flag=mysqli_num_rows($result);
                    
                   if($flag){

                       setcookie('userinformation','hadi',time()+60*60*500);
                       header("location:home.php");
                    }
                    else {
                          
                            $errorMsg['register']="Wrong email or password.";
                       
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
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
 <?php 
    include("header.php");
    ?>
  <div class="header">
     
    
      <h2> Welcome back to,</h2>
      <h1>HomePharmacy</h1>
     <h4>Don't have an account! <a href="http://localhost/homepharmacy/signup.php"> Sign Up</a></h4>
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
      
      
        <p style="display:block;text-align:right; padding-right:20px; font-style:italic; font-size:17px; font-weight:1000; "><a href="#">Forgot your password?</a></p>
    
      
          <input type="submit" value="Log in" name="signinbuttonclick">
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
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
     
      
        <label for="email">EMAIL ADDRESS</label>
      <input type="email" name="email">
      
      <label for="password">PASSWORD</label>
      <input type="password" name="password">
      
      
        <p style="display:block;text-align:right; padding-right:20px; font-style:italic; font-size:17px; font-weight:1000; "><a href="#">Forgot your password?</a></p>
    
      
          <input type="submit" value="Log in">
          
        
        
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
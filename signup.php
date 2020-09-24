<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
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
      <label for="username">USERNAME</label>
      <input type="text" name="name">
      
        <label for="email">EMAIL ADDRESS</label>
      <input type="email" name="email">
      
      <label for="password">PASSWORD</label>
      <input type="password" name="password">
      
       <label for="mobile">MOBILE NUMBER</label>
      <input type="number" name="mobile">
      
      
          <input type="submit" value="Sign Up">
          
        
        
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
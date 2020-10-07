<?php 
session_start();


if(isset($_POST['submitbutton']))
{
  
    $fname=$_POST['firstname']; 
    $lname=$_POST['lastname']; 
    $email=$_POST['email']; 
    $description=$_POST['description'];
    
    if(empty($fname)){
       
        $errorMsg['firstname']="firstname required";
    }
   else if(empty($lname)){
        $errorMsg['lastname']="lastname required"; 
    }
   else if(empty($email)){
        $errorMsg['email']="email required"; 
    }
    else if(empty($description)){
        $errorMsg['problem']="Please describe your problem"; 
    }
    else { 
        
            $connection=mysqli_connect('localhost','root');

            if($connection)
            {
                $db=mysqli_select_db($connection,'homepharmacy');

                if($db){


                        $q="insert into contact_us(firstname,lastname,email,description) values('$fname','$lname','$email','$description')";
                        mysqli_query($connection,$q);
                        header("location:contactus.php");
                       


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
<html>
<head>
	<title>contact us</title>
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>

<!--start header area -->
<?php 
include("../php/header.php");
?>
<div style="height: 400px; width: 100%; background-image:url('../image/cnt.jpg'); text-align: center; color: white; box-sizing: border-box;padding-top: 150px;  box-shadow: 1px 2px 10px 5px black;">



	<h1>Let's Contact</h1>
	<h3>We'd love to help you for any kind of problem</h3>


</div>
<!--end header area -->

<div class="container">


  

<!-- start form area -->
  <div class="formarea">
  
<form action="" method="post">
  

	  <label for="username" style="display: block;">FIRST NAME*</label>
      <input type="text" name="firstname">
      <?php 
         
         if(isset($errorMsg['firstname'])){
             $msg=$errorMsg['firstname'];
             
             echo " <p style='font-size:15px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

      <label for="username" style="display: block;">LAST NAME*</label>
      <input type="text" name="lastname">
            <?php 
         
         if(isset($errorMsg['lastname'])){
             $msg=$errorMsg['lastname'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>

        <label for="email" style="display: block;">EMAIL ADDRESS*</label>
      <input type="email" name="email">
            <?php 
         
         if(isset($errorMsg['email'])){
             $msg=$errorMsg['email'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
      
   <label for="describe" style="display: block;">DESCRIBE YOUR PROBLEM*  
   </label>

   <textarea rows="6" cols="5" name="description" >
          <?php 
         
         if(isset($errorMsg['problem'])){
             $msg=$errorMsg['problem'];
             
             echo " <p style='font-size:12px; margin-left:15px; color:red; margin-top:-15px;margin-bottom:10px;'> $msg </p>";
             
         }
         ?>
     

   </textarea> 
      
          <input type="submit" value="Send Message" name="submitbutton">

  </form>

    </div>
<!-- end form area -->


<!-- start map area --> 

<div class="maparea" style="margin-top: 100px;">
  
  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.250464504635!2d88.91562315060771!3d25.762289414783453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e35189fdfbb01d%3A0x15261313ab3f22f4!2zQkFOR0xBREVTSCBBUk1ZIFVOSVZFUlNJVFkgT0YgU0NJRU5DRSBBTkQgVEVDSE5PTE9HWSAtIOCmrOCmvuCmguCmsuCmvuCmpuCnh-CmtiDgpobgprDgp43gpq7gpr8g4Kas4Ka_4Kac4KeN4Kae4Ka-4KaoIOCmkyDgpqrgp43gprDgpq_gp4HgppXgp43gpqTgpr8g4Kas4Ka_4Ka24KeN4Kas4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kav4Ka8!5e0!3m2!1sen!2sbd!4v1596794681349!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>

  <h3 style="margin-top: 15px;">BAUST</h3>
  <h4>Nilphamary,Saidpur cantonment</h4>
  <h4>Road No:04</h4>
  <h5><i>homepharmacy@gmail.com</i></h5>

</div>

<!-- end map area -->

</div>

<?php 
include("../php/footer.php");
?>
</body>
</html>

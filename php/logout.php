<?php 

session_start();

if(isset($_POST['backtohome'])){

 header("location:home.php");


}else if(isset($_POST['logoutbutton'])){
 	//print(count($_SESSION['cart']));
 unset($_SESSION['cart']);
 //print(count($_SESSION['cart']));
 setcookie("userinformation","",time()-60);
  header("location:home.php");
}



?>



<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
	<link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>
<?php include("header.php"); ?>
<body>
	<div class="middle">
		<h3>Are you sure you want to logout ? </h3>

		<form action="" method="post">
			<button name="backtohome" value="backhomeclick" type="submit">Back to home </button>

			<button name="logoutbutton" value="logoutclick" type="submit" class="two">Logout</button>
			
			

		</form>
	</div>

</body>

<?php include("footer.php"); ?>

</html>

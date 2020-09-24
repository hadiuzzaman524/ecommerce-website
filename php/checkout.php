<?php 

session_start(); 

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
	

<form>
<label>First name*</label>
<input type="text" name="firstname">

<label>Last name*</label>
<input type="text" name="lastname">

<label>Company</label>
<input type="text" name="company">

<label>Country/Region*</label>
<input type="text" name="country">

<label>Street address*</label>
<input type="text" name="housenumber" placeholder="house number and street name">

<input type="text" name="apartment" placeholder="apartment,suite,unit,etc.">

<label>Town/City*</label>
<input type="text" name="city">


<label>District*</label>
<input type="text" name="district">

<label>Postcode/ZIP*</label>
<input type="text" name="Postcode">


<label>Phone*</label>
<input type="number" name="Phone">

<label>Email</label>
<input type="Email" name="Email">

<h2 style="margin-top: 20px;">Additional information</h2>

<p>Order notes(optional)</p>

<input type="text" name="notes" placeholder="Notes about your order,e.g. special notes for delivery.">
<h2 style="margin-top: 20px; margin-bottom: 10px;">Select your payment option*</h2>

<input type="radio" name="paymentoption" value="math"> Bank transfer
<input style="margin-left: 10px;" type="radio" name="paymentoption" value="physics"> Cash on delivery
<br>
<button type="submit" name="placeorder">Place order</button>
</form>

</div>
<div class="clear"></div>



</body>
</html>
<?php 
include("footer.php"); 
?>
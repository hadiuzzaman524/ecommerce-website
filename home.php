 <?php 
require_once("item.php");              
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="homee.css">
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
              <img src="image/square.jpg" alt="No image">
              <h3>Fastest home dalivery</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
              <img src="image/square.jpg" alt="No image">
              <h3>Every kind of product available</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
              <img src="image/square.jpg" alt="No image">
              <h3>Chip rate</h3>
          </div>
        <!-- end first element div-->
          <!-- first element -->
          <div class="choose_area">
              <img src="image/square.jpg" alt="No image">
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
              <img src="image/square.jpg" alt="No image">
              <a href="#"> <h3>Square Pharmaceuticals Ltd.</h3></a>

          </div>
        <!-- end first element div-->

  <!-- first element -->
          <div class="companies_name">
              <img src="image/ACI-Limited.jpg" alt="No image">
              <a href="#"> <h3>ACI Limited.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/incepta.jpg" alt="No image">
              <a href="#"> <h3>Incepta Pharmaceuticals Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/opsonin.png" alt="No image">
              <a href="#"> <h3>Opsonin pharma Limited.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/renta.jpg" alt="No image">
              <a href="#"> <h3>Renata Limited. </h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/baximco.png" alt="No image">
              <a href="#"> <h3>Beximco pharmaceutical Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/sk+f.jpg" alt="No image">
              <a href="#"> <h3>Eskayef Pharmaceuticals Ltd.
</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/acme.jpg" alt="No image">
              <a href="#"> <h3>ACME Laboratories Ltd.</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/general.jpg" alt="No image">
              <a href="#"> <h3>General Pharmaceutical Ltd.
</h3></a>

          </div>
        <!-- end first element div-->

          <!-- first element -->
          <div class="companies_name">
              <img src="image/helthcare.png" alt="No image">
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
              
             test("p.jpg",'Napa Extra 500mg','paracitamol bp','baximco','5');
             test("p1.jpg",'Ace Plush ','paracitamol 600mg','square','10');
             test("p2.jpg",'Ace Plush ','paracitamol 600mg','square','10');
             test("bluecolorlogo.png",'Ace Plush ','paracitamol 600mg','square','10');
             test("p1.jpg",'Ace Plush ','paracitamol 600mg','square','10');
             test("p1.jpg",'Ace Plush ','paracitamol 600mg','square','10');
             test("p1.jpg",'Ace Plush ','paracitamol 600mg','square','10');
              ?>
          </div>

<!-- end our product area-->
  </div>
<div class="clear"></div>


<h1>my name is hadiuzzaman</h1>
   <?php include("footer.php")?>
</body>
</html>
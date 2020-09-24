<?php 

//session_start(); 

function getQ($product){

	 foreach ($_SESSION['cart'] as $key => $value) {

    if($value['product_id']==$product){

    	return $value['quantity']; 
    }
}


}
?>
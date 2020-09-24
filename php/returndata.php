<?php 

function getData(){
    
$connection =mysqli_connect('localhost','root'); 

if($connection){
    
    $db=mysqli_select_db($connection,'homepharmacy');
    
    if($db){
        
        $query="SELECT *FROM all_product";
        
        $result=mysqli_query($connection,$query); 
        
        if(mysqli_num_rows($result)>0){
            return $result;
        }
        
    }
}

}

/*call for search result */

function getSearch(){
    
$connection =mysqli_connect('localhost','root'); 

if($connection){
    
    $db=mysqli_select_db($connection,'homepharmacy');
    
    if($db){
        
        $query="SELECT *FROM all_product";
        
        $result=mysqli_query($connection,$query); 
        

        if(mysqli_num_rows($result)>0){
            return $result;
        }

        
    }
}

}

function getSearch_Result($name){
$connection =mysqli_connect('localhost','root'); 

if($connection){
    
    $db=mysqli_select_db($connection,'homepharmacy');
    
    if($db){
        
        $query="SELECT *FROM all_product WHERE product_name Like '$name%'";
        
        $result=mysqli_query($connection,$query); 
        
        if(mysqli_num_rows($result)>0){
            return $result;
        }
        
    }
}
}

?>
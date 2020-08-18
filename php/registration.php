<?php 

session_start();

$connection=mysqli_connect('localhost','root');

if($connection)
{
    $db=mysqli_select_db($connection,'homepharmacy');
    
    if($db){
        
        $username=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile']; 
        
        $queary="SELECT *FROM registration WHERE username='$username' && email='$email' && password='$password'"; 
    
        $result=mysqli_query($connection,$queary); 
        
        $flag=mysqli_num_rows($result);
        
        if($flag){
            
            print("already registred");
            header("location:signup.php");
        }
        else {
                
            $q="insert into registration(username,email,password,mobile) values('$username','$email','$password','$mobile')";
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

?>
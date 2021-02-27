<?php 


 if (isset($_POST['email']) && isset($_POST['password'])) {
     
     var_dump("success",$_POST['email']);
     die;
        $userName = $_POST['password'];
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
    else{
        var_dump("Failed");
     die;
    }

?>
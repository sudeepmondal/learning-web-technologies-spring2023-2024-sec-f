<?php
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if(($username == "Admin" || $username == "admin") && $password == "Admin123"){   
        setcookie('flag', 'ADMIN', time()+3000, '/');
        header('location: ../view/adash.php');
        }else{
       
        $status = login($username, $password);

        if($status){
            setcookie('flag', $username, time()+3000, '/');
            header('location: ../view/edash.php');
            
        }else{
            echo "invalid User!";
        }  
    }
?>
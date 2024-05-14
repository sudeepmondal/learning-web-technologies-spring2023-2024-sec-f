<?php
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $usertype = $_REQUEST['usertype'];

    // $info = isset($_POST['info']) ? $_POST['info'] : '';
    // $data = json_decode($info);

    // $username = isset($data->username) ? $data->username : '';
    // $password = isset($data->password) ? $data->password : '';
    // $usertype = isset($data->usertype) ? $data->usertype : '';

    if(($username == "Admin" || $username == "admin") && $password == "Admin#123"){   
        setcookie('flag', 'ADMIN', time()+3000, '/');
        //header('location: ../view/admindash.php');
        header('location: ../view/profile.php');
        }else{
       
        $status = login($username, $password, $usertype);

        if($status == true){
            if($usertype == "Host"){
                setcookie('flag', $username, time()+3000, '/');
                header('location: ../view/host_profile.php');
            }elseif($usertype == "Customer"){
                setcookie('flag', $username, time()+3000, '/');
                header('location: ../view/customer_profile.php');
            }elseif($usertype == "Admin"){
                setcookie('flag', $username, time()+3000, '/');
                header('location: ../view/profile.php');
            }
        }else{
            echo "invalid";
        }  
    }
?>




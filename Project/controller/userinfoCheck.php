<?php
    require_once('../model/userModel.php');

    // $username = $_REQUEST['username'];
    // $email = $_REQUEST['email'];

    $info = isset($_POST['info']) ? $_POST['info'] : '';
    $data = json_decode($info);

// Extract search parameters
$username = isset($data->username) ? $data->username : '';
$email = isset($data->email) ? $data->email : '';

    $output1 = getUsername($username);
    $output2 = getEmail($email);

    if ($output1 == true && $output2 == true) {
        echo "end";
    } else if ($output2) {
        echo "terminate";
    } else if ($output1) {
        echo "abort";
    } else { echo "go ahead";}
    
?>
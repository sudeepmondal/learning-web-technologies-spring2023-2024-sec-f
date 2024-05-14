<?php
session_start();
require_once('../model/userModel.php');
require_once('validations.php');

$newpass = $_REQUEST['new_password'];
$rnewpass = $_REQUEST['confirm_password'];
$email = $_SESSION['email'];
if($newpass != $rnewpass ){
    echo "Password not match!";
}elseif(strlen($newpass) < 8) {
    echo "Password must contains at least 8 characters";
}elseif(!hasDigit($newpass)) {
    echo "Password must contains at least one digit";
}elseif(!hasSpecialChar($newpass)) {
    echo "Password must contains at least one special character";
}else {
    $status = updateUserpass($newpass,$email);
    if($status){
        header('location: ../view/signin.php');
        session_destroy();
    }else{
        echo "Failed change password! Please try again.";
    }
}
?>

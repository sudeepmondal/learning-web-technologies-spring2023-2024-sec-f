<?php
    require_once('../model/userModel.php');
    require_once('validations.php');

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $conpass = $_REQUEST['confirm_password'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $usertype = $_REQUEST['usertype'];

    // $output = getUsername($username);
    // if ($output) {
    //     echo "abort";
    // } else { echo "go ahead";}

    if($username == "" || $password == "" || $email == ""){
        echo "Null username/password/email";
    }elseif(!ctype_alpha(substr($name, 0, 1))) {
        echo "First character must be a letter";
    }elseif(str_word_count($name) < 2){
        echo "Name must contains at least two words";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }elseif($password != $conpass){
        echo "Confirm password not matched!";
    }elseif(strlen($phone) < 11 || strlen($phone) > 14) {
        echo "Invalid phone number!";
    }elseif(strlen($password) < 8) {
        echo "Password must contains at least 8 characters";
    }elseif(strlen($password) > 24) {
        echo "Password must contains at most 24 characters";
    }elseif(!hasDigit($password)) {
        echo "Password must contains at least one digit";
    }elseif(!hasSpecialChar($password)) {
        echo "Password must contains at least one special character";
    }else {

        $user = ['name'=> $name, 'email'=>$email, 'phone'=> $phone, 'username'=> $username, 'password'=>$password, 'gender'=> $gender, 'dob'=> $dob, 'usertype'=> $usertype];
        $status = createUser($user);
        if($status){
            header('location: ../view/signin.php');
        }else{
            echo "DB error! Please try again";
        }
        
    }
?>
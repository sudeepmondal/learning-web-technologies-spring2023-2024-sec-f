<?php
    require_once('../model/userModel.php');
    require_once('validations.php');

    $username = $_REQUEST['username'];
    $usertype = $_REQUEST['usertype'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $name = $_REQUEST['name'];



    if ($name == "" || $email == "" || $phone == ""|| $username == ""|| $password == ""|| $gender == ""|| $dob == ""|| $usertype == "") {
        echo "null username/password/email";
    } elseif (!ctype_alpha(substr($name, 0, 1))) {
        echo "First character must be a letter";
    } elseif (str_word_count($name) < 2) {
        echo "Name must contain at least two words";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } elseif (strlen($password) < 8) {
        echo "Password must contain at least 8 characters";
    } elseif (!hasDigit($password)) {
        echo "Password must contain at least one digit";
    } elseif (!hasSpecialChar($password)) {
        echo "Password must contain at least one special character";
    } else {
        $user = ['name'=> $name, 'email'=>$email, 'phone'=> $phone, 'username'=> $username, 'password'=>$password, 'gender'=> $gender, 'dob'=> $dob, 'usertype'=> $usertype];
        $status = createUser($user);
        if ($status) {
            header('location: ../view/profile.php');
        } else {
            echo "DB error! Please try again";
        }
    }
?>

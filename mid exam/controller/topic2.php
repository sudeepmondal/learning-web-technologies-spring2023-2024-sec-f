<?php
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$dob = $_POST['dob_day'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$valid = true;

if (empty($fname)) 
{
    $valid = false;
    echo "First Name is required<br>";
}

if (empty($lname)) 
{
    $valid = false;
    echo "Last Name is required<br>";
}

if (empty($dob)) 
{
    $valid = false;
    echo "Date of Birth is required<br>";
}

if (empty($gender)) 
{
    $valid = false;
    echo "Gender is required<br>";
}

if (empty($phone)) 
{
    $valid = false;
    echo "Phone is required<br>";
}

if (empty($email)) 
{
    $valid = false;
    echo "Email is required<br>";
} 
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $valid = false;
    echo "Invalid email format<br>";
}

if (empty($password)) 
{
    $valid = false;
    echo "Password is required<br>";
}

if (empty($confirm_password)) 
{
    $valid = false;
    echo "Confirm Password is required<br>";
} 
elseif ($password !== $confirm_password) 
{
    $valid = false;
    echo "Passwords do not match<br>";
}

if ($valid) 
{
    echo "Successfully Submitted";
}
?>

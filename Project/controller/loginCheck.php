<?php
// require_once('../model/userModel.php');

// $username = $_REQUEST['username'];
// $password = $_REQUEST['password'];
// $usertype = $_REQUEST['usertype'];

// if ($username == "" || $password == "" || $usertype == "") {
//     echo json_encode(array("error" => "Incomplete credentials"));
// } else {
//     $status = login($username, $password, $usertype);
//     $user = getUserDetails($username);
//     if (!empty($user)) {
//         // User found, send JSON response with name
//         echo json_encode(array("success" => "Login successful", "name" => $user[0]['username']));
//     } elseif ($status) {
//         // Login successful, set cookie and redirect to profile.php
//         setcookie('flag', 'true', time() + 300, '/');
//     } else {
//         // Login failed, display error message
//         echo "Invalid credentials";
//     }
// }

require_once('../model/userModel.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$usertype = $_REQUEST['usertype'];

if($username == "" || $password == "" || $usertype == ""){
    echo "null usernamepassword";
} else {
    $status = login($username, $password, $usertype);

    if($status){
        setcookie('flag', 'true', time()+3000, '/');
        // Redirect based on user type
        if ($usertype == 'admin') {
            header('location: ../view/profile.php');
        } elseif ($usertype == 'customer') {
            header('location: ../view/customer_profile.php');
        } elseif ($usertype == 'host') {
            header('location: ../view/host_profile.php');
        }else {
            // Redirect to a default page if user type is not recognized
            header('location: ../view/home.php');
        }
    } else {
        echo "Invalid User!";
    }    
}

?>


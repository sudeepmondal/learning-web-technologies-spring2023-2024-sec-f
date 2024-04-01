<?php 
    require_once('db.php');

    function login($usertype, $username, $password ){
        $con = dbConnection();
        $sql = "select * from users where usertype='{$usertype}' and username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){

    }

    function createUser($user){
        $con = dbConnection();
        $sql = "insert into users values('{$user['usertype']}', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['username']}', '{$user['password']}', '{$user['gender']}' )";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){

    }

    function updateUserpass($pass,$email){
        $con = dbConnection();
        $sql = "update users set password = '$pass' where email = '$email'";
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getAnUser($username) {
        $con = dbConnection();
        $sql = "select name FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }
    
    function getUserdetails($username) {
        $con = dbConnection();
        $sql = "select * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $name = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($name, $row);
        }
        return $name;
    }

    function updateUser($user){

    }

    function getEventname($user){
        $con = dbConnection();
        $sql = "select event_name from events";       
        $result = mysqli_query($con, $sql);
        $events = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($events, $row);
        }

        return $events;
    }

?>
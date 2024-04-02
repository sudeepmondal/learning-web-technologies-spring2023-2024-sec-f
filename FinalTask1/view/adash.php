<?php
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <a href="reg.php">Employee Registration</a> <br> <br>
    <a href="ulist.php">Employee list</a> <br> <br>
    <a href="esearch.php">Search Employee</a> <br> <br><br><br>
    <a href="../controller/logout.php">Logout</a>
    
</body>
</html>
<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: task_C.php');
    }
?>

<html>
<head><title>View Profile</title>
</head>
<body>
    <table width="720px" border="1">
        <tr>
            <td colspan="2">
            &emsp;<b>X Company</b>
            Logged in as <a href="">
                <?php 
                    echo $_SESSION['flag']; 
                ?></a> | <a href="logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td style="width: 30%;">
                Account
                <hr>
                <ul>
                    <li><a href="task_E.php">Dashboard</a></li>
                    <li><a href="task_F.php">View Profile</a></li>
                    <li><a href="task_G.php">Edit Profile</a></li>
                    <li><a href="task_H.php">Change Profile Picture</a></li>
                    <li><a href="task_I.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>
            <td style="width: 70%;">
            <fieldset>
                <legend><b>VIEW PROFILE</b></legend>
                <form action="viewProfile.php" method="POST">
                    <img src="pro.png" alt="Pro Pic" width="100"><br>
                    <a href="task_I.php">Change</a><br><br>

                    Name: Bob<hr>
                    Email: abc@aiub.edu<hr>
                    Gender: Male<hr>
                    Date of Birth: 01/01/2001
                    <hr>
                    <a href="task_G.php">Edit Profile</a>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                Copyright &copy; 2024
            </td>
        </tr>
    </table>
</body>
</html>

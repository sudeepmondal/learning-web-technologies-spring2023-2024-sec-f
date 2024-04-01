<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: task_C.php');
    }

?>

<html>
<head>
    <title>Change Password</title>
</head>
<body>
<table width="720px" border="1">
        <tr>
            <td colspan="2">
            &emsp;<b>X Company</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
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
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form action="task_I.php" method="POST">
                        Current Password:<input type="password" name="currentp_assword" value=""><br>
                        New Password:<input type="password" name="new_password" value=""><br>
                        Retype New Password:<input type="password" name="confirm_password" value=""><br>

                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                    </form>
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

<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: task_C.php');
    }
?>

<html>
<head>
    <title>Edit Profile</title>
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
                    <legend><b>EDIT PROFILE</b></legend>
                        <form action="task_G.php" method="POST">
                            Name: <input type="text" name="name" value="Bob"><br>
                            Email:<input type="email" name="email" value="abc@aiub.edu"><br>
                            Gender:<input type="text" name="gender" value="Male"><br>
                            Date of Birth:<input type="text" name="dob" value="01/01/2001"><br>

                            <hr>
                            <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
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

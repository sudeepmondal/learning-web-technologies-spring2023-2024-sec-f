<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <td>
                <h1>X Company</h1>
            </td>
            <td align="right">
                <a href="index.html">Home</a> |
                <a href="login.html">Login</a> |
                <a href="registration.html">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Registration Page</h2>
                <form action="#" method="post">
                    <fieldset>
                        <legend>Register</legend>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required><br><br>
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required><br><br>
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select><br><br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required><br><br>
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
               Copyright &copy; 2017
            </td>
        </tr>
    </table>
</body>
</html>
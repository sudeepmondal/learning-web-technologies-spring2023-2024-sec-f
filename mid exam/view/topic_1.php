<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Registration Form</title>
</head>
<body>
    <h1>Email Registration Form</h1>
    <form action="../controller/topic2.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <select id="dob" name="dob_day" required>
            <option value="">Day</option>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="dob_month" required>
            <option value="">Month</option>
            <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="dob_year" required>
            <option value="">Year</option>
            <?php
                for ($i = 1900; $i <= 2016; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

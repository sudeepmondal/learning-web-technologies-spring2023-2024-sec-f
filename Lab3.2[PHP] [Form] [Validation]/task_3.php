<html>
<head>
    <title>Date Of Birth</title>
    <style>
        fieldset 
        {
            width: 250px; 
        }
        hr 
        {
            width: 250px;
            margin: 15px 0; 
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Date of Birth</legend>
            dd &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mm &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;yyyy <br>
            <input type="text" name="day" size="2" maxlength="2">/
            <input type="text" name="month" size="2" maxlength="2">/
            <input type="text" name="year" size="4" maxlength="4">
            //<hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $message = "";

        if (empty($day) || empty($month) || empty($year)) 
        {
            $message = "Date fields cannot be empty.";
        } 
        else 
        {
            if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) 
            {
                $message = "Invalid date format. Please enter valid numbers.";
            } 
            else 
            {
                $validDay = ($day >= 1 && $day <= 31);
                $validMonth = ($month >= 1 && $month <= 12);
                $validYear = ($year >= 1953 && $year <= 1998);

                if (!$validDay || !$validMonth || !$validYear) 
                {
                    $message = "Invalid date. Day: 1-31, Month: 1-12, Year: 1953-1998.";
                }
            }
        }

        if ($message) 
        {
            echo "<script>alert('$message');</script>";
        } 
        else 
        {
            echo "<script>alert('Form submitted successfully!');</script>";
        }
    }
    ?>
</body>
</html>

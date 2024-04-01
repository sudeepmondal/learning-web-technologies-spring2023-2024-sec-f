<?php
    $group = '';
    $error = '';
 
    if(isset($_POST['submit']))
    {
        $group = $_POST['group'];
        if(empty($group)) {
            $error = 'Please select a blood group.';
        }
    }
?>
 
<html>
<head>

    <title>Blood Group</title>
    <style>
        fieldset 
        {
            width: 300px;
        }
        hr {
            border: 1px solid black;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="group" id="" class="<?php echo isset($_POST['submit']) && empty($group) ? 'error-message' : ''; ?>">
                <option value="A+" <?php if($group=='A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if($group=='A-') echo 'selected'; ?>>A-</option>
                <option value="AB+" <?php if($group=='AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB+" <?php if($group=='AB-') echo 'selected'; ?>>AB-</option>
                <option value="B+" <?php if($group=='B+') echo 'selected'; ?>>B+</option>
                <option value="B-" <?php if($group=='B-') echo 'selected'; ?>>B-</option>
                <option value="B+" <?php if($group=='O+') echo 'selected'; ?>>O+</option>
                <option value="B-" <?php if($group=='O-') echo 'selected'; ?>>O-</option>
            </select>
            <hr>
            <input type="submit" value="Submit" name="submit">
        </fieldset>
        <?php if(isset($_POST['submit']) && $error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

<html>
<head>
 
    <title>Gender</title>
    <style>
        fieldset {
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
            <legend>Gender</legend>
            <input type="radio" name="gender" id="male" value="Male" 
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>> 
            <label for="male" class="<?php echo isset($_POST['gender']) && $_POST['gender'] == 'Male' ? 'selected' : 'unselected'; ?>">Male
            </label>

            <input type="radio" name="gender" id="female" value="Female" 
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>>
             <label for="female" class="<?php echo isset($_POST['gender']) && $_POST['gender'] == 'Female' ? 'selected' : 'unselected'; ?>">Female
            </label>
            <input type="radio" name="gender" id="other" value="Other" 
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'checked'; ?>>
             <label for="other" class="<?php echo isset($_POST['gender']) && $_POST['gender'] == 'Other' ? 'selected' : 'unselected'; ?>">Other
            </label>
            <hr>
            
            <input type="submit" name="submit" value="Submit">        
        </fieldset>
        <?php if(isset($_POST['submit']) && empty($_POST['gender'])): ?>
            <p class="error-message">Please select one option.</p>
        <?php endif; ?>
    </form>
</body>
</html>
 
<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        } else {
            $error = 'Please select one option.';
        }
    }
?>
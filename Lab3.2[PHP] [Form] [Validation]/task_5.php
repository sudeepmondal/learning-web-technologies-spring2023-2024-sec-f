<html>
<head>
<style>
        fieldset {
            width: 300px;
        }
        hr {
            border: 1px solid black;
            margin: 10px 0;
        }
    </style>
    <title>Degree</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Degree</legend>
            <?php
            $degrees = ['SSC', 'HSC', 'BSc', 'MSc'];
            $selectedDegrees = isset($_POST['degrees']) ? $_POST['degrees'] : [];
            $error = '';

            if(isset($_POST['submit']) && count($selectedDegrees) < 2) 
            {
                $error = 'Please select at least two options.';
            }

            foreach($degrees as $degree):
                $isChecked = in_array($degree, $selectedDegrees) ? 'checked' : '';
            ?>
                <input type="checkbox" name="degrees[]" value="<?php echo $degree; ?>" <?php echo $isChecked; ?>>
                <label for="<?php echo $degree; ?>" class="<?php echo in_array($degree, $selectedDegrees) ? 'selected' : ''; ?>"><?php echo $degree; ?></label>
            <?php endforeach; ?>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        <?php if(isset($_POST['submit']) && $error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
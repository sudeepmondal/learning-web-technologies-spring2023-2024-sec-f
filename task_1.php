<html>
<head>
<title>Name</title>
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
    <form method="post">
 
        <fieldset>
            <legend><b>Name</b></legend>
            <table> <tr> <td>
            <input type="text" name="name" value="<?php
                if (isset($_POST["submit"]))
                {
                    $name = $_POST["name"];
                    if (empty($name)) 
                    {
                        echo "Name cannot be empty";
                    } 
                    elseif (!preg_match('/^[a-zA-Z][a-zA-Z. -]+$/', $name)) 
                    {
                        echo "Invalid format";
                    } 
                    elseif (str_word_count($name) < 2) 
                    {
                        echo "Name must contain at least two words";
                    } 
                    else 
                    {
                        echo $name;
                    }
                } 
                else 
                {
                    echo "";
                }
            ?>" > </td> </tr> <tr> <td> <hr>
        <input type="submit" name="submit"> </td> </tr>
        </table>
    </fieldset>
</form> 
</body>
</html>
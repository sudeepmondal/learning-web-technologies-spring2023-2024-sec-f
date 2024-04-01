<html>
<head>
   <title>Email</title>
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
         <legend><b>Email</b></legend>
         <table>
            <tr>
               <td>
                  <input type="text" name="email" value="<?php
                     if (isset($_POST["submit"])) 
                     {
                        $email = $_POST["email"];
                        if (empty($email)) 
                        {
                           echo "Email cannot be empty";
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                        {
                           echo "Invalid email address format";
                        } else 
                        {
                           echo $email;
                        }
                     } 
                     else 
                     {
                        echo "";
                     }
                  ?>">
                  <button title="exp: anything@example.com">i</button>
               </td>
            </tr>
            <tr>
               <td>
                  <hr>
               </td>
            </tr>
            <tr>
               <td>
                  <input type="submit" name="submit">
               </td>
            </tr>
         </table>
      </fieldset>

   </form>

</body>
</html>

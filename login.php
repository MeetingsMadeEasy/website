<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <h1>Create a login for yourself! :></h1>
  </head>
  <body>
    <form method = "post" action="login.php">
    Username : <input type = "text" name = "username"><br><br>
    Password : <input type = "password" name = "password"><br><br>
    Email : <input type = "email" name = "email"><br><br>
    <input type ="submit" value = "Submit">
    </form>
    </script>
    
  </body>
</html>
//$username = filter_input(INPUT_POST,'username');
        //$password = filter_input(INPUT_POST,'password');
        //$email = filter_input(INPUT_POST, 'email');
$sql = "INSERT INTO 'users' ('username','password','email') VALUES ('$username','$password','$email')";
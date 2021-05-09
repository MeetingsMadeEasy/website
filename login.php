<?php

include'connect.php';
$conn = OpenCon();

if(isset($_POST['submitButton'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];

	//$email = stripcslashes($email);  
    //$pass = stripcslashes($pass);  
    //$email = mysqli_real_escape_string($conn, $email);  
    //$pass = mysqli_real_escape_string($conn, $pass);
    echo ($email);
    $sql = "SELECT *from users where email = '$email' and password = '$pass'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if($count == 1){
    	$_SESSION['email'] = $email;
        echo("LOGIN SUCCESSFUL");
        //echo $row['first_name'];
    header("Location:homepage.html");
    }
    else
    {
    	echo "Login failed. Invalid username or password";
        echo "<script>setTimeout(\"location.href = 'login.php';\", 3000); </script>";
        exit();
    }
}

?>
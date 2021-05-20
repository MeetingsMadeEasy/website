<?php

session_start();

include'connect.php';
$conn = OpenCon();

if(isset($_POST['Login'])){
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');

    $sql = "SELECT *from users where username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if($count == 1){
    	$_SESSION['username'] = $username;
        header("Location:homepage.html");
    }
    else
    {
    	echo "Login failed. Invalid username or password. Try Again?";
        header("Location:login.html");
    }
}
?>
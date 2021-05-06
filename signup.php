<?php

include'connect.php';
$conn = OpenCon();

if (isset($_POST['submit']))
    {
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $email = filter_input(INPUT_POST, 'email');
    $INSERT = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email','$username','$password')";
    }
if ($conn->query($sql))
{
    echo "New record added!";
}
elseif($conn->connect_error)
{
    echo('Could not connect to database');
    die();
}
    


?>
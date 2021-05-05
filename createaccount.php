<?php
session_start();
include'connect.php';
$conn = OpenCon();

$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$email = filter_input(INPUT_POST, 'email');
$sql = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email','$username','$password')";
if ($conn->query($sql))
{
echo "New record added!"

}
?>
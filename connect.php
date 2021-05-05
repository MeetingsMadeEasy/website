<?php
function OpenCon()
 {
 $host = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "mme";
 //create connection to database
 $conn = new mysqli($host, $dbusername, $dbpassword,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>           
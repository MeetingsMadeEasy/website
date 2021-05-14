<?php
include'connect.php';
$conn = OpenCon();

$MeetingName = filter_input(INPUT_POST,'ZoomUser');
$MeetingID = filter_input(INPUT_POST,'meetingid');
$MeetingPswd = filter_input(INPUT_POST,'password');
$INSERT = "INSERT INTO 'meetings' ('name','id','password') VALUES ('$MeetingName','$MeetingID','$MeetingPswd')";

if ($conn->query($INSERT))
{
echo "New record added!";
}
elseif($conn->connect_error)
{
echo "Could not connect to database";
die();
}
else{
 echo "did not work";  
}
?>
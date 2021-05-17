<?php
include'connect.php';
$conn = OpenCon();

$MeetingName = filter_input(INPUT_POST,'ZoomUser');
$MeetingID = filter_input(INPUT_POST,'meetingid');
$MeetingPswd = filter_input(INPUT_POST,'password');
$INSERT = "INSERT INTO 'meetings' ('name','id','password') VALUES ('$MeetingName','$MeetingID','$MeetingPswd')";

?>
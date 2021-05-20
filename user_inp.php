<?php
include'connect.php';
$conn = OpenCon();

$MeetingName = filter_input(INPUT_POST,'ZoomUser');
$MeetingID = filter_input(INPUT_POST,'meetingid');
$MeetingPswd = filter_input(INPUT_POST,'password');
$MeetingType = filter_input(INPUT_POST, 'meetType');
$LastDay = filter_input(INPUT_POST,'last');
//$MeetingTime = filter_input(INPUT_POST,'time');
$sql = "INSERT INTO `meetings`(`name`, `id`, `password`,`meeting_type`,`last_day`) VALUES ('$MeetingName','$MeetingID','$MeetingPswd','$MeetingType','$LastDay')";
if ($conn->query($sql))
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
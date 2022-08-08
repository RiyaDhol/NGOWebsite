<?php
$a = $_REQUEST["eventName"];
$b = $_REQUEST["eventDesc"];
$c = $_FILES["eventPhoto"];
$img = $c["name"];
include("dbconnect.php");

move_uploaded_file($c["tmp_name"], ".\\collection\\$img");
mysqli_query($con ,"insert into our_events(event_name,event_details,event_path, reg_date) values ('$a', '$b', '$img', now())");

?>
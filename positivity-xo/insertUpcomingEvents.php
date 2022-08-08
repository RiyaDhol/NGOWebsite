<?php
$a = $_REQUEST["eventName"];
$b = $_REQUEST["eventDesc"];
$c = $_REQUEST["eventdate"];
include("dbconnect.php");
mysqli_query($con ,"insert into upcomingevent(eventname, edes, edate, ereg_date)  values ('$a', '$b', '$c', now())") or die("query Error");
?>
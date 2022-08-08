<?php
$con = mysqli_connect("127.0.0.1" , "root" , "") or die("connection Error");

mysqli_select_db($con , "positivity") or die("database Selection Error");
?>
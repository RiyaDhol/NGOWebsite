<?php
$a = $_REQUEST["txtName"];
$b = $_REQUEST["txtEmail"];
$c = $_REQUEST["txtPhone"];
$d = $_REQUEST["txtpass"];
include("dbconnect.php");

mysqli_query($con ,"insert into register(user_name, user_email, user_pass, user_phoneno, user_type, reg_date)values ('$a', '$b', '$d', '$c', 'user', now())") or die("error");

header("location:registerForm.php?status=1");

?>
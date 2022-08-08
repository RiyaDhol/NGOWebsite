<?php
$a = $_REQUEST["txtName"];
$b = $_REQUEST["txtEmail"];
$c = $_REQUEST["txtPhone"];
$d = $_REQUEST["txtCmt"];
$e = $_REQUEST["txtCity"];
$f = $_REQUEST["txtState"];


include("dbconnect.php");

mysqli_query($con ,"insert into volunteer(vname, vemail, vno, vdesc, vcity, vstate, vreg_date) values ('$a', '$b', '$c', '$d', '$e','$f', now())") or die("error");

header("location:volunteerForm.php?status=1");

?>
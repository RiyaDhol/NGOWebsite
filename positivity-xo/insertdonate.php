<?php
$a = $_REQUEST["txtName"];
$b = $_REQUEST["txtEmail"];
$c = $_REQUEST["txtPhone"];
$d = $_REQUEST["txtCmt"];
$e = $_REQUEST["intDonAmt"];
$f=  $_REQUEST["txtCity"];
$g= $_REQUEST["txtState"];
$h = $_FILES["recpt"];
$img = $h["name"];
include("dbconnect.php");
move_uploaded_file($h["tmp_name"], ".\\collection\\$img");
mysqli_query($con ,"insert into donation(donarname, donaremail, donarphoneno, donarmessage, donaramount, donarcity, donarstate, donarreceipt, donation_date)values ('$a', '$b', '$c', '$d','$e', '$f', '$g', '$img', now())") or die("error");

header("location:donationForm.php?status=1");

?>
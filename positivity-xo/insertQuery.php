<?php @session_start();
$rec = $_REQUEST["qtextrec"];
$a = $_SESSION["uname"];
$b = $_REQUEST["qhead"];
$c = $_REQUEST["txtCmt"];

include("dbconnect.php");
mysqli_query($con ,"insert into query(q_username, q_head ,q_desc,q_reciever, q_date)values ('$a', '$b','$c','$rec',now())")or die("error");

if($_SESSION["utype"]=="user")
header("location:contactForm.php?status=1");

else 
header("location:contactForm.php?status=1");
?>
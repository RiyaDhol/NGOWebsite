<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="admin"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav id='adminDheading'>
     <a href='adminMenu.php'> <img src='images/icon_hambur.jpg'> </a>
      <span> Admin Dashboard </span>
    </nav>
<div id='content'>
    
</div>
<?php
 include('footer.php');
}
else {
   header("location:loginForm.php");
}
?>
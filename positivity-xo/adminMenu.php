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
    <p> <?php if(isset($_SESSION["uname"])) {
                echo("<span style='color:red; font-size :22px; border: 1px solid white; background-color: yellow; font-weight:bold; margin-left: 80%; '>"." Welcome !  ". $_SESSION["uname"]."</span>");
            }
            ?>
  <a href="logout.php" style='color:red; font-size :22px; border: 1px solid white; background-color: yellow; font-weight:bold;' >Logout </a> </p>
   <div id='content'>
    <?php include('menu.php'); ?>
   </div>
<?php
}
else {
   header("location:loginForm.php");
}
//  include('footer.php');
?>
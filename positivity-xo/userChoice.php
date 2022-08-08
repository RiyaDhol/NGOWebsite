<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){
 include('userMenu.php');
?>
<div id='content'>
 
</div>
<?php
}
else {
  header("location:loginFormforusers.php");
}
 include('footer.php');
?>
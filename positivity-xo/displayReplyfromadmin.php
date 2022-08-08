<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){
 include('userMenu.php');
?>
 <div id='content'>
  <?php
   include("dbconnect.php");
   $usr = $_SESSION["uname"];
   $displayquery = mysqli_query($con , "select * from query where q_reciever ='$usr'") or die("query Error");
   $row=mysqli_fetch_array($displayquery);
   echo("<div id='messagereply'>");
   echo("<span> To </span> : ".$row["q_reciever"]);
   echo("<hr>");
   echo("<span> Sender </span>:" . $row["q_username"]);
   echo("<hr>");
   echo("<span> Heading  </span>: " . $row["q_head"]);
   echo("<hr>");
   echo("<span> Query Response </span> :" . $row["q_desc"]);
   echo("<hr>");
   echo("<span> Sent Date : </span>" . $row["q_date"]);
   echo("<hr>");
   echo("<span> Thankyou For Contacting Us !</span>");
  ?>
 </div>
<?php
}
else {
  header("location:loginFormforusers.php");
}
 include('footer.php');
?>
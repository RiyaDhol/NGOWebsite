<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
    <div id='rightside' style='font-size:24px;'>
      <?php
      $id = $_REQUEST["id"];
      include("dbconnect.php");
      $rsinfo = mysqli_query($con , "select * from query where qid='$id' ");
      $row=mysqli_fetch_array($rsinfo);
      $sname = $row["q_username"];
      echo("<div>");
      echo("<h2> Heading : " . $row["q_head"] . "</h2>");
      echo("<hr>");
      echo("Sender :" . $row["q_username"]);
      echo("<hr>");
      echo("Sent Date :" . $row["q_date"]);
      echo("<hr>");
      echo("Query :" . $row["q_desc"]);
      echo("<hr>");
     ?>
    </div>
    <div id="replybtn">
    <a href="replyQueryForm.php?sendername=<?=$sname?>" > <H1> Reply</H1> </a>
    </div>

</div>

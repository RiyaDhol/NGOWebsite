<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
    <div id='rightside' style='font-size:24px;'>
    <table border='1' align='center' id='tabledesign'>
       <tr> <th> S1. No.</th> <th> User Name </th> <th> Query Heading </th> <th> Date</th> </tr>
  <?php
    include("dbconnect.php");
    $displayquery = mysqli_query($con , "select * from query order by q_date desc");
    $count =0;
    while($row=mysqli_fetch_array($displayquery)){
      $count++;
      $id = $row["qid"];
      echo("<tr>");
      echo("<td>");
      echo($count);
      echo("</td>");
      echo("<td>");
      echo($row["q_username"]);
      echo("</td>");
      echo("<td>");
      echo("<a href='displayQueryDetail.php?id=$id' style='color:blue'>". $row["q_head"]. " </a>");
      echo("</td>");
      echo("<td>");
      echo($row["q_date"]);
      echo("</td>");
      echo("</tr>");
    }
  ?>
</table>
    </div>

</div>

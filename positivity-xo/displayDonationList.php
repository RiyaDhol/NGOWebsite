<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
    <div id='leftside' >
     
    </div>
    <div id='rightside'>
        <table border='1' align='center' id='tabledesign'>
       <tr> <th> S1. No.</th> <th> Full Name </th> <th> Email </th> <th> Mobile No. </th> 
       <th> Special Comments </th> <th> Donation Amount</th> <th> City </th> <th>State </th> <th>Receipt Image</th>
</tr>
  <?php
    include("dbconnect.php");
    $displaydonar = mysqli_query($con , "select * from donation");
    $count =0;
    while($row=mysqli_fetch_array($displaydonar)){
      $count++;
      echo("<tr>");
      echo("<td>");
      echo($count);
      echo("</td>");
      echo("<td>");
      echo($row["donarname"]);
      echo("</td>");
      echo("<td>");
      echo($row["donaremail"]);
      echo("</td>");
      echo("<td>");
      echo($row["donarphoneno"]);
      echo("</td>");
      echo("<td>");
      echo($row["donarmessage"]);
      echo("</td>");
      echo("<td>");
      echo($row["donaramount"]);
      echo("</td>");
      echo("<td>");
      echo($row["donarcity"]);
      echo("</td>");
      echo("<td>");
      echo($row["donarstate"]);
      echo("</td>");
      echo("<td>");
      $img = $row["donarreceipt"];
      echo("<img src='.\\collection\\$img' width='270' height='270' border='1'");
      echo("</td>");
      echo("</tr>");
    }
  ?>
</table>
    </div>

</div>

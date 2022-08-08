<?php
 include('header.php');
?>
 <div id='content'>
 <div id='eventcontent'>
  <?php
  include("dbconnect.php");
   
  $getEvents = mysqli_query($con ,"Select * from our_events" );

  while($row=mysqli_fetch_array($getEvents)){
    $id = $row["event_id"];
    echo("<div class='events'>");
    echo("<h1>". $row['event_name']  ."</h1>");
    $img = $row["event_path"];
    echo("<br> <img src='.\\collection\\$img' class='displayimg'>");
    echo("<br> <p>" .$row["event_details"] . "</p> ");
    echo("</div>");	
}
   ?>
 </div>
 </div>
<?php
 include('footer.php');
?>
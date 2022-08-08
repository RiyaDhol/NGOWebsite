<?php
 include('header.php');
?>
 <div id='content'>
 <div id='eventcontent'>
  <?php
  include("dbconnect.php");
   
  $getEvents = mysqli_query($con ,"Select * from upcomingevent" );

  while($row=mysqli_fetch_array($getEvents)){
    $id = $row["eid"];
    echo("<div class='events'>");
    echo("<h1>". $row['eventname']  ."</h1>");
    echo("<br> <img src='images/upcomingposter.jpg' class='displayimg'>");
    echo("<br> <p>" .$row["edes"] . "</p> ");
    echo("<br> <p> Event Date :" .$row["edate"] . "</p> ");
    echo("<div class='donatenow'>" . "<a href='donationForm.php' class='donatenowlink'>"." <H1>" ." Donate Now " . "</H1> </a>
    </div>");
    echo("</div>");	
}
   ?>
 </div>
 </div>
<?php
  include('footer.php');
 ?>
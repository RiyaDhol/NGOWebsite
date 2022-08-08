<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["utype"]=="user"){
 include('userMenu.php');
?>
<div id='content'>
<?php if (isset($_REQUEST["status"]))
           {
           echo("<div class='status'>");
             if($_REQUEST["status"]==1)
                {
                  echo("Your data has been recorded!");
                 }
              else {
                echo("Your data can't recorded !");
              }
                 echo("</div>");
            } ?>
  <div id='formdesign' style='margin: 20px 30% ;'>
    <div id="myForm">
    <h1 style='font-size : 50px ; letter-spacing: 5px; line-height : 1; ' > Be <br> A <br> Volunteer!  </h1>
    <form method="get" action="insertVolunteer.php">
    <br>
    <br>
    <label> Enter Your Full Name</label>
    <input type="text" name ="txtName"/> <br>
    <label> Enter Your Email</label>
    <input type="text" name ="txtEmail"/> <br>
    <label> Mobile No.(Preferably Whatsapp)</label>
    <input type="text" name ="txtPhone"/> <br>
    
     <label> Why you want to become a Volunteer (describe in 30words)</label>
    <textarea name="txtCmt"> </textarea> <br>

    <label> Your  City </label>
    <input type="text" name ="txtCity"/> <br>
    <label> Your  State </label>
    <input type="text" name ="txtState"/> <br>

    <input type="Submit" value="Submit"/>
    <input type="reset" value="Cancel"/>
  
  </div><!--end of myform-->
  </div>
  <?php
}
else {
  header("location:loginFormforusers.php");
}
 include('footer.php');
?>
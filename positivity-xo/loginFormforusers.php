<?php
 include('header.php');
?>
<div id='content'>
<?php
if(isset($_REQUEST["status"]))
   {
       echo("<div class='status'>");
        if($_REQUEST["status"]==1)
        {
           echo("Wrong User Name");
        }
        else if($_REQUEST["status"]==2)
        {
          echo("Wrong Password");
        }
       echo("</div>");
   }
?>
  <div id='formdesign' style='margin: 20px 30% ;'>
    <div id="myForm">
    <h1 style='font-size : 50px ; letter-spacing: 5px; ' >Login </h1>
    <form method="post" action="checkLogin.php">
    <h3 style='color:red; font-size:20px;'> You have be a registered user first to use this option!</h3>
    <br>
    <label> Enter Your Email</label>
    <input type="text" name ="txtEmail"/> <br>
    <label> Enter Your Password</label>
    <input type="text" name ="txtpass"/> <br>
    
    <input type="Submit" value="login"/>
    <input type="reset" value="Cancel"/>
  </div><!--end of myform-->
  </div>
  &nbsp;
  <br> <br> <br> <br> <br> <br>

<?php
 include('footer.php');
?>
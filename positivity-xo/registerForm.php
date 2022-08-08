<?php
 include('header.php');
?>

<script src='validation.js'> </script>
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
    <h1 style='font-size : 50px ; letter-spacing: 5px; ' > Register </h1>
    <form method="post" action="insertRegistration.php" name="f1">
    <br>
    <br>
    <label> Enter Your Full Name</label>
    <input type="text" name ="txtName"/> <br>
    <label> Enter Your Email</label>
    <input type="text" name ="txtEmail"/> <br>
    <label> Enter Your Phone No</label>
    <input type="text" name ="txtPhone"/> <br>
    <label> Enter Your Password</label>
    <input type="text" name ="txtpass"/> <br>
    <p>Sometimes it takes only one act of kindness and caring to change a person’s life.</p>
    <input type="button" value="Register" onClick="checkvalidation();" name="btn1">
    <input type="reset" value="Cancel"/>
  </div><!--end of myform-->
  </div>

  &nbsp;
<?php
 include('footer.php');
?>
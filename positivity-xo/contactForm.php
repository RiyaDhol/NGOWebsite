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
                  echo("Your query has been recorded!");
                 }
              else {
                echo("Your data can't recorded !");
              }
                 echo("</div>");
            } ?>
  <div id='formdesign' style='margin: 30px 30% ;'>
    <div id="myForm">
    <h1 style='font-size : 50px ; letter-spacing: 5px; ' > Contact Us </h1>
    <form method="Post" action="insertQuery.php">
    <br>
    <br>
    <?php $rec="admin";?>
    <label> Query To</label>
    <input type='text' name="qtextrec" readonly value='<?php echo($rec) ?>'> <br>
    <label> Query Heading</label>
    <input type='text' name="qhead">
     <label> Describe Your Query</label>
    <textarea name="txtCmt" style="height:200px;"> </textarea> <br>
    <p> After Filling this form we will revert back through mail !</p>
    <input type="Submit" value="Submit"/>
    <input type="reset" value="Cancel"/>
  </div><!--end of myform-->
  </div>
  &nbsp;
<?php
}
else {
  header("location:loginFormforusers.php");
}
 include('footer.php');
?>
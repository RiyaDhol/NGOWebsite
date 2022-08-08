<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
    <div id='rightside' >
      <div id='formdesign' style='margin: 30px 30% ;'>
      <div id="myForm">
      <h1 style='font-size : 50px ; letter-spacing: 5px; ' > Contact Us </h1>
    <form method="get" action="insertQuery.php">
    <?php $rec=$_REQUEST["sendername"];?>
    <label> Query To</label>
    <input type='text' name="qtextrec" readonly value='<?php echo($rec)?>'> <br>
    <label> Query Heading</label>
    <input type='text' name="qhead"> <br>

    <label> Describe Your Query</label>
    <textarea name="txtCmt" style="height:200px;"> </textarea> <br>
    <p> After Filling this form we will revert back through mail !</p>
    <input type="Submit" value="Submit"/>
    <input type="reset" value="Cancel"/>
  </div><!--end of myform-->
  </div>

</div>


<!-- chiragrupa@gmail.com
we would like to inform you that there is no such payment need to be done for the volunteer.
please wait for further response . -->
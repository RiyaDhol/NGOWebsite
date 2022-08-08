<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
    <div id='rightside' >
    <div id="myForm">
      <form method="post" action="insertEvents.php" enctype="multipart/form-data" >
         <label > Enter Event Name : </label>
         <input type="text" name="eventName">  <br>
         <label> Enter Event Description: </label>
         <textarea name="eventDesc">  </textarea> <br>
         <label> Upload Event Image : </label>
         <input type="file" name="eventPhoto">
         <input type='submit' value='ok'>   
      </form>
    </div>

</div>

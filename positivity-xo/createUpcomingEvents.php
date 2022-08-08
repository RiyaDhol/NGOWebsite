<?php
include('adminMenu.php');
?>   
<div id='admincontent'>
    <div id='rightside' >
    <div id="myForm">
      <form method="post" action="insertUpcomingEvents.php" enctype="multipart/form-data" >
         <label > Enter Event Name : </label>
         <input type="text" name="eventName">  <br>
         <label> Enter Event Description: </label>
         <textarea name="eventDesc">  </textarea> <br>
         <label> Event Date : </label>
         <input type="date" name="eventdate"> <br>

         <input type='submit' value='ok'>   
      </form>
    </div>
</div>

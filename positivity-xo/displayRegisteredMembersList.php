<?php
require_once('adminMenu.php');
?> 
    
<div id='content'>
 
    <div id='rightside' >
        <?php
        require_once("library.php");
        displayTable("select * from register");
        ?>
    </div>

</div>

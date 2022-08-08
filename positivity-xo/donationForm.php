<?php
 include('header.php');
?>
<div id='content'>
  <div id='formdesign'>
    <div id="myForm">

    <h1 align='center'> Donate Now!  </h1>
    <form method="post" action="insertdonate.php" enctype="multipart/form-data" >
  
    <label> Enter Your Full Name</label>
    <input type="text" name ="txtName"/> <br>
    <label> Enter Your Email</label>
    <input type="text" name ="txtEmail"/> <br>
    <label> Mobile No.(Preferably Whatsapp)</label>
    <input type="text" name ="txtPhone"/> <br>
    
     <label> Any Special Message </label>
    <textarea name="txtCmt"> </textarea> <br>

    <label>  Donation Amount </label>
    <input type="int" name ="intDonAmt"/> <br>

    <label> Your  City </label>
    <input type="text" name ="txtCity"/> <br>
    <label> Your  State </label>
    <input type="text" name ="txtState"/> <br>

    <label> Attach Receipet </label>
    <input type="file" name ="recpt"/> <br>
  
    <input type="Submit" value="Donate"/>
    <input type="reset" value="Cancel"/>
  
  </div><!--end of myform-->
  </div>
  <div id='donationdetails'>
    <h1> Donation Details !</h1>
    <h3> Scan QR</h3> 
    <img src='images/payhere.jpeg'> <br>
    <span> Payment Link: <a href='https://paytm.me/t-RVnXd'> Paytm </a>  </span>
  </div>
<?php
 include('footer.php');
?>
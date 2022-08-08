<?php session_start();
 $a = $_REQUEST['txtEmail'];
 $b = $_REQUEST['txtpass'];

 include("dbconnect.php");
 $sql="select * from register where user_email='$a'";
 $rowUser=mysqli_query($con,"$sql");

 if(mysqli_num_rows($rowUser)>0)
    {
        $row=mysqli_fetch_array($rowUser);
        if($row["user_pass"]==$b)
        {
            if($row["user_type"]=="user")
            {
                $_SESSION["uname"] = $a;
                $_SESSION["utype"] = "user";
                header("location:userChoice.php");
            }
            else 
            {
                $_SESSION["uname"] = $a;
                $_SESSION["utype"] = "admin";
                header("location:adminDashboard.php");
            }
        }
        else 
        {
            header("location:loginForm.php?status=2");    
        }
    }
    else
    {
        header("location:loginForm.php?status=1");
    }

?>
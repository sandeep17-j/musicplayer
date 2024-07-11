<?php
session_start();
include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["mail"];
    $newpwd=$_POST["newpwd"];
    if(!empty($newpwd) && !empty($email)){
        $query="update details set pwd='$newpwd' where email='$email' ";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>alert('password change successful')</script>";
        }
        else{
            echo "<script>alert('password chancge not successful')</script>";    }
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
   <link href='logstyle.css' rel='stylesheet'>
    </head>
    
    <body>
        <div id="forms">
        <form method="POST">
           <br><input type="text" name="mail" placeholder="email"><br>
           <br><input type="password" name="newpwd" placeholder="Enter new password"><br>
           <a href='login.php'>Back</a>
           
           <input type="submit" value="ok" class="submi"><br>


        </form>
</div>
    </body>
</html>
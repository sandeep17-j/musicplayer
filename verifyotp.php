<?php
session_start();
include('connect.php');
include('forgotpassword.php');
$verifyotp=$_POST['OTP'];
if($otp==$verifyotp){
    header('location:forgotpass.php');
}
else{
    echo 'incorrect otp';
    header('location:forgotpassword.php');
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
           <br><input type="text" name="OTP" placeholder="enter otp"><br>
           <input type="submit" value="ok" class="submi"><br>


        </form>
</div>
    </body>
</html>
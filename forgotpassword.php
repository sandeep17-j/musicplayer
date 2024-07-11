<?php
session_start();
include('connect.php');
$otp=rand(1000,9999);
$message=strval($otp);
$from='abdsandeep45y@gmail.com';
$subject='otp for password change';
$to=$_POST['forgotemail'];
$headers="from:".$from;
if(mail($to,$subject,$message,$headers)){
    echo 'mail sent';
    header('location:forgotpass.php');
}
else{
    echo 'message sending failed';
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
           <br><input type="text" name="forgotemail" placeholder="email"><br>
           <a href='login.php'>Back</a>
           
           <input type="submit" value="ok" class="submi"><br>


        </form>
</div>
    </body>
    </html>
<?php
session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $mail=$_POST["mail"];
    $pwd=$_POST["pwd"];
    if(!empty($mail) && !empty($pwd) && !is_numeric($mail)){
        $query="select * from details where email='$mail' limit 1";
    $result=mysqli_query($con,$query);
    if($result){
        if($result && mysqli_num_rows($result) > 0){
            $user=mysqli_fetch_assoc($result);
            if($user['pwd']==$pwd){
                header("location: player.html");
                die;
            }
        }
    }
    echo "<script>alert('invalid email or password')</script>";
    }
    else{
        echo "login not successful";
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
           <br><input type="password" name="pwd" placeholder="password"><br>
           <a href="register.php" target="_self">Register?</a>&nbsp;&nbsp;
           <a href="forgotpassword.php" target="_self">forgot password</a>
           <input type="submit" value="Login" class="submi"><br>


        </form>
</div>
    </body>
</html>

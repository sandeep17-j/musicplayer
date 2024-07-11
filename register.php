<?php
session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstn=$_POST["fname"];
    $lastn=$_POST["lname"];
    $mail=$_POST["email"];
    $pwd=$_POST["pwd"];
    if(!empty($mail) && !empty($pwd) && !is_numeric($mail)){
    $query="insert into details(fname,lname,email,pwd) values('$firstn','$lastn','$mail','$pwd')";
    mysqli_query($con,$query);
    echo 'successfully Registered';}
    else{
        echo "Rgistration Failed";
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
        <form action='register.php' method="POST">
           <br><input type="text" name="fname" placeholder="First Name"><br>
           <br><input type="text" name="lname" placeholder="Last Name"><br>
           <br><input type="text" name="email" placeholder="Email"><br>
           <br><input type="text" name="pwd" placeholder="password"><br>
            <input type="submit" value="Sign Up" class="submi">
            <br><a href="login.php" target="_self">Login</a>
        </form>
</div>
    </body>
</html>
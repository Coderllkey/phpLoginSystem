<?php
error_reporting(1);
session_start();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
   
    
</head>
<embed>
<div class="container">
    <form method="post" action="login.php" class="form">

        <h3>Login </h3>


        <div class="input">
            <input type="text" placeholder="Username" value="<?php echo @$_COOKIE['user'] ?>" name="user">

        </div>
        <div class="input">
            <input type="password" placeholder="Password" value="<?php echo @$_COOKIE['pass'] ?>" name="pass">

        </div>
        <div class="check-box">
            Remember me:<input type="checkbox"  name="cb">

        </div>
        <div class="btn">
            <input type="submit" value="Login" name="btn">

        </div>
    </form>
</div>

<embed  src="audio/track.mp3" autostart='true' loop='true' width='0' height='0'></embed>


</body>

</html>

<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$btn = $_POST['btn'];


if(isset($btn)){
    if($user == 'amuan' && $pass == "1234"){
        $_SESSION['user'] = $user;
        $_SESSION["pass"] = $pass;
        if ($_POST['cb']==true) {
            setcookie('user',$user,time()+60*60);
            setcookie('pass',$pass,time()+60*60);
        header('location:welcome.php');
         }
        header('location:welcome.php');
    }
    else{
        echo "<center><font color='red'><b>Wrong Username or Password!</b></font></center>";
    }
}

?>
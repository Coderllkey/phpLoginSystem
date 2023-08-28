<?php
error_reporting(1);
session_start();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="style/style.css">
      
</head>
<body>
    

<?php 
if( !isset($_SESSION['user']) ){
    echo "<center style='margin-top:150px;'><h2><font color='red'>sorry man..You need to Register or Login First!</font></h2></center>";
}

else{
?>

<div class="box">
    <h2> Welcome to my site <?php echo $_SESSION['user']; ?>  </h2>
    <p>More updates comming soon</p>
</div>
<div class='box'>
    <a href="logout.php">Logout</a>
</div>
<embed  src="audio/track.mp3" autostart='true' loop='true' width='0' height='0'></embed>
<?php }?>
</body>

</html>
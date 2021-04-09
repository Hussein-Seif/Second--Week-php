<?php
session_start();
if ( isset($_SESSION['username'])) {
    header('location:home.php');
}


?>

<form action="handel-login.php" method="post">
<input type="text" name="username"  placeholder="Enter Your Name">
<br>
<input type="password" name="password"  placeholder="Enter Your password">
<br>
<input type="submit" value="Login" name="submit">




</form>
<?php

session_start();

if ( !isset($_SESSION['username'])) {
    header('location:login.php');
}
$userName=$_SESSION['username'];
$passowrd=$_SESSION['password'];

echo "hello $userName";

?>
<a href="profile.php"> Go to profile</a>
<a href="logout.php"> Go to logout</a>

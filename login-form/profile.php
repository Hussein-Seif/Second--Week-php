<?php
session_start();

echo "hello ".$_SESSION['username']; 
?>

<a href="logout.php"> Log Out</a>
<br>
<a href="home.php">Home</a> 

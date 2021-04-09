
<?php

session_start();


if ( !isset($_SESSION['username'])) {
    header('location:login.php');
}


$userName =$_POST['username'];
$password =$_POST["password"];
$_SESSION['username']=$userName;
$_SESSION['password']=$password;
echo "Hello $userName";





header("Location:home.php");
?>

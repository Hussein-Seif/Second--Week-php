<?php 
// check if the form is submited
if (isset($_POST['submit'])) {  
    $userName=$_POST['username'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
}

// validate the inputs
    $errors=[];
//1-Validation user name
if (empty($userName)) {
    $errors[] = "User name is requided";
}else if ( !is_string($userName)){
    $errors[]="User name must be string";
}else if (strlen($userName)>255){
    $errors[]="User name must be less than 255 characters";
}
//1-Validation Email
if (empty($email)) {
    $errors[] = "email is requided";
}else if ( !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[]="email must be valid";
}
//3-validation of age
if (empty($age)){
    $errors[]="age must be Enterd";
}elseif (! is_numeric($age)){
    $errors[]="age must be Number value";
}
//4-validation of gender
if (empty($gender)){
    $errors[]="gender must be entered";
}




foreach($errors as $error){
    echo $error ." ";
}


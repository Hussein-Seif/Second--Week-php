<?php
// cleaning code
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    
    return $input;
}
// caught the variables from POST Form 
$email=$_POST["email"];
$url=$_POST["url"];
$age=$_POST["age"];
// pathing inputs to clean function
$email=cleanData($email);
$url=cleanData($url);
$age=cleanData($age);


//validation 
// filteration for email
$is_right_data=true;
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Please Enter Valide Email Address <br/>";
    $is_right_data=false;
}
// filteration for url
if(!filter_var($url,FILTER_VALIDATE_URL)){
    echo "Please Enter Valide URL Address <br/>";
    $is_right_data=false;
}
// filteration for emaiagel

if(!filter_var($age,FILTER_VALIDATE_INT)){
    echo "Please Enter Valide age <br/>";
    $is_right_data=false;

}

// redirection if all is right
if ($is_right_data==true) {
?>

<a href="<?php header('Location:home.php')
?>" target="_blank"></a>  
<?php 
} ?>

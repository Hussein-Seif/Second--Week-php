<?php

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $img=$_FILES['img'];



    // print_r($img);

    $imgName=$img['name'];
    $imgSize=$img['size'];
    $imgTmpName=$img['tmp_name'];
    $imgType=$img['type'];
    $imgError=$img['error'];
    $ext=pathinfo($imgName, PATHINFO_EXTENSION);


    
    $is_valid=true;
// validate the uploaded file                                                                                        
    if(!empty($imgError)){
        echo "there is an error";
        $is_valid=false;
    }
    else if ( !in_array($ext,array('jpg1', 'png'))){
        echo "ff";
    }


    $randomStr=uniqid();
    $imgNewName="$randomStr.$ext";

    move_uploaded_file($imgTmpName,"uploaded/$imgNewName");




}
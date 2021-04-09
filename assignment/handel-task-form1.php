<?php
//caught the two inputs from form
$first = $_POST["first"];
$second = $_POST['second'];

//body of The First-fun
function first ($first){
    echo "This is first function <br/>";
    $sumOfOdd=0;
    $sumOfEven=0;
for ($i=0; $i <=$first ; $i++) { 
    echo $i." " ;
    if ($i%2==0) {
        $sumOfEven+=$i;

    }elseif($i%2==1) {
        $sumOfOdd+=$i;
    }
    
}
echo "<br>" ;
    echo "the sum of odd =   $sumOfOdd <br/>";
    echo "the sum of Even =   $sumOfEven <br/>";
        
}
//calling of first-Fun
first($first);
echo "<hr>" ;
//================================//
//body of the second function

function second($second)
{
    $sumOfOdd=0;
    $sumOfEven=0;
    echo " This is the second function <br/>";
    for ($i=$second; $i >1 ; $i--) { 
        echo $i. " ";
    if ($i%2==0) {
        $sumOfEven=$sumOfEven+$i;
    }elseif($i%2==1) {
        $sumOfOdd=$sumOfOdd+$i;
    }


    }
    echo "<br>" ;
    echo "the sum of odd =   $sumOfOdd <br/>";
    echo "the sum of Even =   $sumOfEven <br/>";
    
}
//calling of second function
second($second);

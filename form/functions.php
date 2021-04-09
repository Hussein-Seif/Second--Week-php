<?php
// function
function sayHello($name,$counter )
{
    for ($i=0; $i <$counter ; $i++) { 
        echo "Hell $name <br>";
    }
}

//calling
sayHello("Hussein",10);
sayHello("Mahmoud",20);
//===========================//
// function take array and sum the number in it 
echo "<hr>" ;
function sumArray($theArray)
{
    $sum=0;
    foreach ($theArray as $number) {
        $sum+=$number;
        
    }
    return $sum;
}

// calling of Function 
//echo  sumArray(array(1,2,3,4));

//==================================//
/*
Example of function takes array of numbers and print them reverse
*/
// the function body 
function reversArray($arrayOfNumbers){
    for ($i=count($arrayOfNumbers)-1; $i>=0 ; $i--) { 
        echo $arrayOfNumbers[$i]." ";
    }
}
reversArray(array(2,4,6))





?>
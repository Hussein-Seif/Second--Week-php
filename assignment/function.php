<?php   
 // Problem 1//

/* write a function getNumMatches that searches for a word in an array of words and returns 
the number of matches (repetitions).*/
// An array of strings

$arr=array("hussen","hussen","mohamed","ahmed");

 // The Body of function getPriceWithDiscount
function getNumMatches($arr,$searched){
    $counter=0;
    for($i=0; $i<count($arr) ;$i++){
        if ($searched==$arr[$i]) {
            $counter++;
        }
    }
    echo $counter;

}
//calling of function
getNumMatches($arr,"hussen");
echo "<br>" ;
echo "<hr>" ;
/////================================//
 // Problem 2//
 /*write a function getPriceWithDiscount that takes the price and returns the price after discount.
 discount is 10% for prices less than 1000
 and 5% for prices greater than or equal 1000
 */

 // The Body of function getPriceWithDiscount
function getPriceWithDiscount($price)
{
    if ($price<1000) {
        $price=$price-($price*(10/100));
        echo "$price <br/>";
    }elseif ($price>=1000) {
        $price=$price-($price*(5/100));
        echo "$price <br/>";
        
    }
}
//calling of function
getPriceWithDiscount(1000);
//================================//

<?php
function adjacentElementsProduct($inputArray) {
    $largestProduct = $inputArray[0] * $inputArray[1];
    $len = count($inputArray);
    
    for($i=0;$i<$len-1;$i++){
        $prod = $inputArray[$i] * $inputArray[$i+1];
        
        if($largestProduct < $prod) $largestProduct = $prod;
    }
    
    return $largestProduct;
}

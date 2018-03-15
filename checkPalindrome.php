<?php

function checkPalindrome($inputString) {
    $leftIndex = 0;
    $rightIndex = strlen($inputString) - 1;
    
    $str = str_split($inputString);
    
    while($leftIndex<$rightIndex){
        if($str[$leftIndex++] != $str[$rightIndex--]) return false;
    }
    
    return true;
}

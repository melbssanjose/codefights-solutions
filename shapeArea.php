<?php

function shapeArea($n) {
    if($n==1) return 1;
    return shapeArea($n - 1) + 4 * ($n - 1);
}

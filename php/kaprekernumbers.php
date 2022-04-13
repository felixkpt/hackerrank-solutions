<?php
function kaprekarNumbers($p, $q) {
    // Write your code here
    $ans = '1 ';
    for ($i=9; $i<= $q; $i++) {
        $k = substr(pow($i, 2), 0, strlen(pow($i, 2)) / 2);
        $g  = substr(pow($i, 2), strlen(pow($i, 2)) / 2, strlen(pow($i, 2)));
        if ($k + $g == $i) {
            $ans .= $i." ";
        }
    }
    return strlen($ans) > 0 ? rtrim($ans) : 'INVALID RANGE';
}
var_dump(kaprekarNumbers(4, 4));
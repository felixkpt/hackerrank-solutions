<?php 
function miniMaxSum($arr) {
    // Write your code here
    if (count($arr) == 5 && 1 <= min($arr) && max($arr) <= pow(10, 9)) {
        sort($arr);
        $min = array_reduce(array_slice($arr, 0, 4), function($total, $current) {
            return $total + $current;
        }, 0);
        rsort($arr);
        $max = array_reduce(array_slice($arr, 0 ,-1), function($total, $current) {
            return $total + $current;
        }, 0);

        echo $min . "\n";
        echo $max . "\n";
    }
}

$arr = [1, 3, 5, 7, 9];
var_dump(miniMaxSum($arr));
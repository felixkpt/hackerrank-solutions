<?php 
$arr = [3, 2, 1, 3];
function birthdayCakeCandles($candles) {
    // Write your code here
    $val = array_count_values($candles);
    return $val[max($candles)];
}
var_dump(birthdayCakeCandles($arr));
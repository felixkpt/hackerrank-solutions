<?php 
function hurdleRace($k, $height) {
    // Write your code here

    $max = max($height);
    $ans = 0;
    if ($max > $k) {
        $ans = $max - $k;
    }

    return $ans;
}

$k = 1;
$height = [1,2,3,3,2];

var_dump(hurdleRace($k, $height));
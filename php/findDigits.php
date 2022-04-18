<?php 
function findDigits($n) {
    // Write your code here
    $sp = str_split($n);
    $sim = 0;
    foreach ($sp as $s) {
      if ($s > 0) {
        if ($n % $s == 0) {
            $sim ++;
        }
      }
    }
    return $sim;
}

$n = 10;

var_dump(findDigits($n));
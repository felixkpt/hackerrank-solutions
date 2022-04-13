<?php

$n = 21;
$divisors = [];
$added = 0;
if ($n > 1) {
    for ($i=1; $i<$n; $i++) {
        if ($n % $i == 0) {
            $divisors[] = $i;
        } 
        if ($i <= count(str_split($n))) {
            $added += str_split($n)[$i - 1];
        }
    }
}else{
    $divisors[] = 1;
}
if (max($divisors) ==  $added) {
    print(max($divisors));
}else{
    print($added > max($divisors) ? $n : max($divisors));
}
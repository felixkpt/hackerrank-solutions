<?php

function repeatedString2($s, $n) {
    // Write your code here
    $repeat =  floor(($n - strlen($s)) / strlen($s));
    $counts = substr_count($s, 'a');
    $totals = $counts + ($counts * $repeat);
    $strlen = strlen($s) + (strlen($s) * $repeat);
    if ($strlen < $n) {
        $diff = $n - $strlen;
        $s = substr($s, 0, $diff);
        $counts = substr_count($s, 'a');
        $totals += $counts;
    }
    return $totals;
}


// function repeatedString($s, $n) {
//     $rem = $n % strlen($s);
//     $splitted = str_split($s);
//     $appearance = substr_count($s, 'a') * floor($n / strlen($s));
//     if ($appearance > 0) {
//         $allowed = strlen($s) * floor($n / strlen($s));
//         $appearance += substr_count($s, 'a', 0, $n - $allowed);
//     }
//     return $appearance;
// }


$s = 'aba';
var_dump(repeatedString2($s, 2));
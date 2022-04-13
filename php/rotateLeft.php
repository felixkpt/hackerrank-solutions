<?php 





function rotateLeft($d, $arr) {
    // Write your code here
    $d = $d % count($arr) ;
    
    $final_key = count($arr) - $d;
    
    $before = array_slice($arr, $d, $final_key);
    $after = array_slice($arr, 0, $d);
    $new = array_merge($before, $after);    
    return $new;
}


$r = 3;
$arr = ['a', 'b', 'c', 'd', 'e'];

var_dump(rotateLeft($r, $arr));
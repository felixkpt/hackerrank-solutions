<?php 

// function kangaroo($x1, $v1, $x2, $v2) {
//     // Write your code here

//     $jump = 0;
//     $diff = $x2 - $x1;
//     if ($diff > 0 && (($x1 + $v1) - $diff < $x2 + $v2) ) {

//         while ($x1 != $x2) {

//             $jump ++;
//             if ($jump > 10000) {
//                 break;
//             }
//             $x1 += $v1;
//             $x2 += $v2;
//         }
//     }

//     var_dump($jump);die;
// }

// function kangaroo($x1, $v1, $x2, $v2) {
//     // Write your code here
//     if (0 <= $x1 && $x1 < $x2 && $x2 <= 10000 && 1 <= min($v1, $v2) && max($v1, $v1) <= 10000) {
//         $relativedistance = $x2 - $x1;
//         $relativespeed = $v1 - $v2;
//         return $relativespeed > 0 && $x1 + $v1 <= $x2 + $v2 ? 'YES' : 'NO';
//     }
// }


// function kangaroo($x1, $v1, $x2, $v2) {
//     // Write your code here
//     if (0 <= $x1 && $x1 < $x2 && $x2 <= 10000 && 1 <= min($v1, $v2) && max($v1, $v1) <= 10000) {
//         $relativespeed = $v1 - $v2;
//         $a = $x1 + $v1;
//         $b = $x2 + $v2;
        
//         if ($v1 >= $x2) {
//             return "NO";
//         }
        
//         $f = true ?? $a < $b;

//         return $relativespeed > 0 && $f ? 'YES' : 'NO';
//     }
// }


function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    if (0 <= $x1 && $x1 < $x2 && $x2 <= 10000 && 1 <= min($v1, $v2) && max($v1, $v2) <= 10000) {
        $relative_speed = $v1 - $v2;
        $relative_distance = $x2 - $x1;
        $v_factor = $relative_speed == 0 && $x1 != $x2 ? true : false;
        $v_x_factor = $x1 < $x2 && $v1 < $v2 ? true : false;
        return $v_factor ? 'NO' : ($v_x_factor ? 'NO' : ($relative_distance % $relative_speed == 0 ? 'YES' : 'NO'));
    }else {
        return "Input error";
    }
}
$x1 = 43;
$v1 = 2;
$x2 = 70;
$v2 = 2;

// $x1 = 2564;
// $v1 = 5393;
// $x2 = 5121;
// $v2 = 2836;
// $x1 = 55;
// $v1 = 8223;
// $x2 = 5803;
// $v2 = 6509;
var_dump(kangaroo($x1, $v1, $x2, $v2));
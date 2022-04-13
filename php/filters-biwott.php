<?php 

function solution($A) {
rsort($A);
$reference = array_reduce($A, function($p, $c) {
    return $p + $c;
});
// $filters = 0;
// if ($a[0] !== 0) {
//     if (count($A) == 1) {
//         $filters = 1;
//     }else {
//     for ($i=0; $i<count($A); $i++) {
//         while ($A[$i] >= @$A[$i + 1] && array_reduce($A, function($p, $c) {return $p + $c; }) > $reference / 2 ){
//             $divided = $A[$i]/2;
//             $A[$i] = $divided;
//             $filters ++;
//         }
//     }
//     }
// }else {
//     $filters =0;
// }


$arr = [];
$filters = 0;
while (array_reduce($arr, function($p, $c) {return $p + $c; }) < $reference / 2) {
    $divided = $A[0] / 2;
    $arr[] = $divided;
    $A[0] = $divided;
    rsort($A);
    $filters ++;
}

return $filters;
}

$arr = [0];

var_dump(solution($arr));
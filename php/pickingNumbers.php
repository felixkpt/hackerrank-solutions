<?php
// function pickingNumbers($a) {
//     // Write your code here

//     sort($a);
 
//     $prev = 1;
//     $arr1 = [];
//     for($i=0; $i<count($a); $i++) {
//         $val = $a[$i];
//         $d = ${'arr'.$prev};
//         $first = $d[0] ?? 0;
//         $last = $d[count($d) - 1] ?? 0;

//         if ($val - $last <= 1 && $val - $first <= 1) {
//             ${'arr'.$prev}[] = $val;
//         } else{
//             $prev++;
//             ${'arr'.$prev}[] = $val;
//         }
//     }

//     $max = 0;
    
//     for ($i=1; $i<=$prev; $i++) {
//         $curent = count(${'arr'.$i});
//         if ($max == 0 || $curent > $max) {
//             $max = $curent;
//         }
//     }

//     return $max;

// }


$arr = [4, 6, 5, 3, 3, 1];

function pickingNumbers($a) {
    // Write your code here
    sort($a);
$arr = [$a[0]];
$max = 1;
    for ($i=1; $i<count($a); $i++) {
        $val =  $a[$i];
       
        if ($val - $arr[0] <= 1) {
            $arr[] = $val;
            // $max++;
        }else{
            $arr = [];
            $arr[] = $val;
        }
        $max = count($arr) > $max ? count($arr) : $max;
      
    }
    return $max;
}
var_dump(pickingNumbers($arr));

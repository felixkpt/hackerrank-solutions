<?php 

// function circularArrayRotation($a, $k, $queries) {
//     // Write your code here
//     $digits = [];
    
//      $counted = count($a);
//     $k = $k % $counted;
//      $first = array_slice($a, $counted - $k, $k);
//     $last = array_slice($a, 0, $counted - $k);
//     $a = array_merge($first, $last);
//     foreach ($queries as $q) {
//         $digits[] = $a[$q];
//     }
//     return $digits;
// }


function circularArrayRotation($a, $k, $queries) {
    // Write your code here
    $n = $a;
    if (1 <= min($n) && max($n) <= pow(10, 5) && 1 <= $k && $k <= pow(10, 5) && 1 <= count($queries) && count($queries) <= 500 && 0 <= min($queries) && max($queries) < count($n)) {

        $rotator = $k % count($a);
      
        $ans = [];
            
            for($i=0; $i<count($queries); $i++) {
                $index = $queries[$i];
                $diff = $index - $rotator;
                if (key_exists($diff, $a)) {
                    $add = $a[$diff];
                }else {
                    $diff = count($a) + $diff;
                    $add = $a[$diff];
                }
                $ans[] = $add;
            }
    
        return $ans;
    }

}

$a = [1, 2, 3];
$k = 2;
$queries = [0, 1, 2];
var_dump(circularArrayRotation($a, $k, $queries));
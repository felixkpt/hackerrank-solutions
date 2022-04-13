<?php 
function gridChallenge($grid) {
    // Write your code here
    $is_valid = true;
        $arr = array_reduce($grid, function($prev, $current) use (&$is_valid) {

            $str_arr = str_split($current);
            natsort($str_arr);
            $str_arr = array_values($str_arr);

            $is_valid = 1 <= count($str_arr) && count($str_arr) <= 100 ? true : false;
            
            return array_merge($prev, [$str_arr]);

        }, []);

    if (1 <= count($grid) && count($grid) <= 100 && $is_valid) {

        $tracker = "YES";
        for ($i=0; $i<count($arr); $i++) {
            $current = ord($arr[$i][0]);
            for ($j=0; $j<count($arr[$i]); $j++) {
                if (key_exists($i + 1, $arr)) {
                    $next = ord($arr[$i + 1][$j]);
                    if ($current > $next) {
                        $tracker = "NO";
                        break;
                        break;
                    }
                    $current = ord($arr[$i][$j]);
                    
                }else {
                    $current = ord($arr[$i - 1][$j]);
                    $next = ord($arr[$i][$j]);
                    if ($current > $next) {
                        $tracker = "NO";
                        break;
                        break;
                    }

                }
            }


        }
        return $tracker;
    }

}

$arr = ['abc', 'def'];


// function gridChallenge2($grid) {
//     // Write your code here
//     $arranged = [];
//     $arr = str_split($grid[1]);
//     if (1 > 0 ) {
//       for ($i=0; $i<count($arr); $i++){
//         for ($j=0; $j<count($arr); $j++) {
//             $ct = 1;
//             // while (ord($arr[$i][$j]) < ord($arr[$i][$j + $ct])) {
//             //         if ($ct > count($arr)) {
//             //             break;
//             //         }
//             //         $ct ++;
//             // }
//             // if ($ct < 3) {
//             //     break; 
//             //     return 'NO';
//             // }

//         }
//       }


        

//     }
    
// }
var_dump(gridChallenge($arr));
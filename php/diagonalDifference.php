<?php 

function diagonalDifference($arr) {
    // Write your code here
    
    $valid1 = false;
    for ($i=0; $i<count($arr[0]); $i++) {
        $val = $arr[0][$i];
        if (-100 <= $val || $val <= 100) {
            $valid1 = true;
        }
    }
    $valid2 = false;
    for ($i=0; $i<count($arr[1]); $i++) {
        $val = $arr[1][$i];
        if (-100 <= $val || $val <= 100) {
            $valid2 = true;
        }
    }
    $valid3 = false;
    for ($i=0; $i<count($arr[2]); $i++) {
        $val = $arr[2][$i];
        if (-100 <= $val || $val <= 100) {
            $valid3 = true;
        }
    }
    if ($valid1 && $valid2 && $valid3) {
        

        $diagonal1 = $diagonal2 = [];
        $x = count($arr[0]);
        $y = count($arr);
        $pointer = 0;
        while ( $pointer < $y) {
            for ($i=0; $i<$x; $i++) {
                if ($i == $pointer) {
                    $diagonal1[] = $arr[$pointer][$i];
                    break;
                }
            }
            $pointer ++;   
        }

        $pointer = 0;
        $arr = array_reverse($arr);
        while ( $pointer < $y) {
            for ($i=0; $i<$x; $i++) {
                if ($i == $pointer) {
                    $diagonal2[] = $arr[$pointer][$i];
                    break;
                }
            }
            $pointer ++;   
        }
    
        $diagonal1 = array_reduce($diagonal1, function($a, $b) {
            return $a + $b;
        }, 0);
        $diagonal2 = array_reduce($diagonal2, function($a, $b) {
            return $a + $b;
        }, 0);

        return abs($diagonal1 - $diagonal2);


    }

}


$arr = [
    [11, 2, 4], 
    [4, 5, 6], 
    [10, 8, -12], 
];

var_dump(diagonalDifference($arr));



// function diagonalDifference($arr) {
//     $diagonal1 = $diagonal2 = 0;
//     $count = count($arr[1]) - 1;
//     for ($i=0; $i<count($arr[0]); $i++) {
//         $diagonal1 += $arr[$i][$count - $i];
//         $diagonal2 += array_reverse($arr)[$i][$count - $i];
//     }
//        return abs($diagonal2 - $diagonal1);
//     }
// var_dump(diagonalDifference($arr));

// die;



// $diagonal1 = $diagonal2 = [];
//         $x = count($arr[0]);
//         $y = count($arr);
//         $pointer = 0;
//         while ( $pointer < $y) {
//             for ($i=0; $i<$x; $i++) {
//                 if ($i == $pointer) {
//                     $diagonal1[] = $arr[$pointer][$i];
//                     break;
//                 }
//             }
//             $pointer ++;   
//         }

//         $pointer = 0;
//         $arr = array_reverse($arr);
// while ( $pointer < $y) {
//             for ($i=0; $i<$x; $i++) {
//                 if ($i == $pointer) {
//                     $diagonal2[] = $arr[$pointer][$i];
//                     break;
//                 }
//             }
//             $pointer ++;   
//         }

// var_dump($diagonal2);
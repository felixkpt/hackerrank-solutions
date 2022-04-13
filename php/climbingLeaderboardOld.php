<?php 
/**
 * @param array $ranked
 * @param array $player
 * @return array $array
 */
function climbingLeaderboard($ranked, $player) {
    // Write your code here
    if (1 <= count($ranked) && count($ranked) <= 2 * pow(10, 5) && 1 <= count($player) && count($player) <= 2 * pow(10, 5)) {
        $new_arr = array_unique($ranked);
        $is_valid = array_reduce($new_arr, function ($prev, $current) {
            if ($current > pow(10, 9)) {
                return false;
            }else {
                return $prev;
            }
        }, true);
        $is_valid2 = array_reduce($player, function ($prev, $current) {
            if ($current > pow(10, 9)) {
                return false;
            }else {
                return $prev;
            }
        }, true);
        if ($is_valid && $is_valid2) {
            $ans = [];
            for ($i=0; $i<count($player); $i++) {
                $val = $player[$i];
                $new_arr[] = $val;
                rsort($new_arr);
                $ans[] = array_search($val, $new_arr) + 1;
                if (end($ans) == 1) {
                    break;
                }
            }
            return $ans;
        }
    }
}


// /**
//  * @param array $ranked
//  * @param array $player
//  * @return array $array
//  */
// function climbingLeaderboard($ranked, $player) {
//     define('TIMER', date('Y-m-d H:i:s'));
//     // Write your code here
//     if (1 <= count($ranked) && count($ranked) <= 2 * pow(10, 5) && 1 <= count($player) && count($player) <= 2 * pow(10, 5)) {
//         $ranked = array_values(array_unique($ranked));
//         $is_valid = array_reduce($ranked, function ($prev, $current) {
//             if ($current > pow(10, 9)) {
//                 return false;
//             }else {
//                 return $prev;
//             }
//         }, true);
//         $is_valid2 = array_reduce($player, function ($prev, $current) {
//             if ($current > pow(10, 9)) {
//                 return false;
//             }else {
//                 return $prev;
//             }
//         }, true);
//         if ($is_valid && $is_valid2) {

//             // return array_reduce($player, function($prev, $current) use ($ranked) {
//             //     if (!in_array(1, $prev)) {
//             //         $res = array_filter($ranked, function($c) use ($current) {
//             //             return $c > $current ? true : false;
//             //         });
//             //         if ($res) {
//             //             $res = array_keys($res);
//             //             $res = array_slice($res, -1)[0] + 1;
//             //             if (!in_array($res, $prev)) {
//             //                 $prev[] = $res;
//             //             }
//             //         }elseif (!in_array(1, $prev)){
//             //             $prev[] = 1;
//             //         }
//             //     }
//             //         return $prev;
//             //     }, [count($ranked) + 1]);

//             $new_arr = $ranked;
//             $ans = [];
//             for ($i=0; $i<count($player); $i++) {
//                 $val = $player[$i];
//                 $new_arr[] = $val;
//                 rsort($new_arr);
//                 $ans[] = array_search($val, $new_arr) + 1;
//             }
//             return $ans;

//         }
//     }
// }

include 'ranked.php';
include 'player.php';
$ranked = [295, 294, 291, 287, 287, 285, 285, 284, 283, 279, 277, 274, 274, 271, 270, 268, 268, 268, 264, 260, 259, 258, 257, 255, 252, 250, 244, 241, 240, 237, 236, 236, 231, 227, 227, 227, 226, 225, 224, 223, 216, 212, 200, 197, 196, 194, 193, 189, 188, 187, 183, 182, 178, 177, 173, 171, 169, 165, 143, 140, 137, 135, 133, 130, 130, 130, 128, 127, 122, 120, 116, 114, 113, 109, 106, 103, 99, 92, 85, 81, 69, 68, 63, 63, 63, 61, 57, 51, 47, 46, 38, 30, 28, 25, 22, 15, 14, 12, 6, 4];

$player = [5, 5, 6, 14, 19, 20, 23, 25, 29, 29, 30, 30, 32, 37, 38, 38, 38, 41, 41, 44, 45, 45, 47, 59, 59, 62, 63, 65, 67, 69, 70, 72, 72, 76, 79, 82, 83, 90, 91, 92, 93, 98, 98, 100, 100, 102, 103, 105, 106, 107, 109, 112, 115, 118, 118, 121, 122, 122, 123, 125, 125, 125, 127, 128, 131, 131, 133, 134, 139, 140, 141, 143, 144, 144, 144, 144, 147, 150, 152, 155, 156, 160, 164, 164, 165, 165, 166, 168, 169, 170, 171, 172, 173, 174, 174, 180, 184, 187, 187, 188, 194, 197, 197, 197, 198, 201, 202, 202, 207, 208, 211, 212, 212, 214, 217, 219, 219, 220, 220, 223, 225, 227, 228, 229, 229, 233, 235, 235, 236, 242, 242, 245, 246, 252, 253, 253, 257, 257, 260, 261, 266, 266, 268, 269, 271, 271, 275, 276, 281, 282, 283, 284, 285, 287, 289, 289, 295, 296, 298, 300, 300, 301, 304, 306, 308, 309, 310, 316, 318, 318, 324, 326, 329, 329, 329, 330, 330, 332, 337, 337, 341, 341, 349, 351, 351, 354, 356, 357, 366, 369, 377, 379, 380, 382, 391, 391, 394, 396, 396, 400];

$ranked = [100,  50 ,40, 20, 10, 5];
$player = [5, 25, 50, 20];
$ranked = array_values(array_unique($ranked));

$rankings = [];
$i = 0;
for ($i=0; $i<count($player); $i++) {
    $val = $player[$i];
    
    if (!in_array($val, $ranked)) {
        $combined = array_merge($ranked, [$val]);
        rsort($combined);
        $rankings[] = array_search($val, $combined);
    }elseif ($val > array_slice($rankings, -1)[0]) {
        $rankings[] = array_search($val, $combined);
    }
    
    // var_dump($rankings);die;
}

rsort($rankings);
var_dump(array_map(function($a) {
    return $a + 1;
}, $rankings));

// $i = 0;
// while ($i < count($player)) {

//     $i ++;
// }



// $ranked = array_values(array_unique($ranked));

// for ($i=0; $i<count($ranked); $i++) {

//     $input = $ranked[$i];

//     $j = 0;
//     $combined = array_reduce($player, function($prev, $current) use ($input, &$j) {
//         if (!in_array($input, $prev)) {
//             if ($input > $current) {
//                 if($j == 0 ) {
//                     $prev = array_merge([$input, $current], $prev);
//                 }else {
//                     $prev = array_merge($prev, [$input, $current]);
//                 }
//             }else {
//                 $prev = array_merge($prev, [$current, $input]);
//             }
//         }elseif (!in_array($current, $prev)) {
//             $prev[] = $current;
//         }
//         $j ++;
//         return $prev;

//     }, []);
    
// }

// rsort($combined);
            
// $player = array_values(array_unique($ranked));
// $rankings = [];
// for ($i=0; $i<count($player); $i++) {
//     if ($k = array_search($player[$i], $combined)) {
//     $rankings[] = $k;
//     }
// }
// rsort($rankings);
// var_dump($rankings);
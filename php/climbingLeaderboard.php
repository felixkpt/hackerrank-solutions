<?php 
/**
 * @param array $ranked
 * @param array $player
 * @return array $ranked
 */
function climbingLeaderboard($ranked, $player) {
    // Write your code here
    if (1 <= count($ranked) && count($ranked) <= 2 * pow(10, 5) && 1 <= count($player) && count($player) <= 2 * pow(10, 5)) {
        $is_valid = min($ranked);
        $is_valid2 = max($ranked);
        $ranked = array_values(array_unique($ranked));
        rsort($ranked);

        if ($is_valid && $is_valid2) {
            $ans = [];
            // rsort($ranked);
// var_dump($ranked);die;
            for ($i=0; $i<count($player); $i++) {
                
                $value = $player[$i];

                $res = null;
                // Set the left pointer to 0.
                $top = 0;
                // Set the right pointer to the length of the array -1.
                $last = count($ranked) - 1;
                
                while ($top <= $last) {
                // Set the initial midpoint to the rounded down value of half the length of the array.
                $midpoint = (int) floor(($top + $last) / 2);
                $mid_value = $ranked[$midpoint];

                if ($mid_value > $value) {
                    // The midpoint value is less than the value.
                    $top = $midpoint + 1;
                } 

                //   Non performers
                elseif ($mid_value < $value) {
                    // The midpoint value is greater than the value.
                    $last = $midpoint - 1;
                } else {
                    // This is the key we are looking for.
                    $res = $midpoint + 1;
                    break;
                }

                }
                $res = $res ?? $top + 1;

                $ans[] = $res;

            }

            return $ans;
        }
    }
}



include 'ranked.php';
include 'player.php';
// $ranked = [295, 294, 291, 287, 287, 285, 285, 284, 283, 279, 277, 274, 274, 271, 270, 268, 268, 268, 264, 260, 259, 258, 257, 255, 252, 250, 244, 241, 240, 237, 236, 236, 231, 227, 227, 227, 226, 225, 224, 223, 216, 212, 200, 197, 196, 194, 193, 189, 188, 187, 183, 182, 178, 177, 173, 171, 169, 165, 143, 140, 137, 135, 133, 130, 130, 130, 128, 127, 122, 120, 116, 114, 113, 109, 106, 103, 99, 92, 85, 81, 69, 68, 63, 63, 63, 61, 57, 51, 47, 46, 38, 30, 28, 25, 22, 15, 14, 12, 6, 4];

// $player = [299, 5, 6, 14, 19, 20, 23, 25, 29, 29, 30, 30, 32, 37, 38, 38, 38, 41, 41, 44, 45, 45, 47, 59, 59, 62, 63, 65, 67, 69, 70, 72, 72, 76, 79, 82, 83, 90, 91, 92, 93, 98, 98, 100, 100, 102, 103, 105, 106, 107, 109, 112, 115, 118, 118, 121, 122, 122, 123, 125, 125, 125, 127, 128, 131, 131, 133, 134, 139, 140, 141, 143, 144, 144, 144, 144, 147, 150, 152, 155, 156, 160, 164, 164, 165, 165, 166, 168, 169, 170, 171, 172, 173, 174, 174, 180, 184, 187, 187, 188, 194, 197, 197, 197, 198, 201, 202, 202, 207, 208, 211, 212, 212, 214, 217, 219, 219, 220, 220, 223, 225, 227, 228, 229, 229, 233, 235, 235, 236, 242, 242, 245, 246, 252, 253, 253, 257, 257, 260, 261, 266, 266, 268, 269, 271, 271, 275, 276, 281, 282, 283, 284, 285, 287, 289, 289, 295, 296, 298, 300, 300, 301, 304, 306, 308, 309, 310, 316, 318, 318, 324, 326, 329, 329, 329, 330, 330, 332, 337, 337, 341, 341, 349, 351, 351, 354, 356, 357, 366, 369, 377, 379, 380, 382, 391, 391, 394, 396, 396, 400];

// $ranked = [100, 100, 50, 40, 40, 20, 10];
// $player = [5, 25, 50, 120];
// var_dump(count($ranked));die;
var_dump(climbingLeaderboard($ranked, $player));

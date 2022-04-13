<?php 
class Solution {

    function calPoints($ops) {
        $points = [];
        for ($i=0; $i<count($ops); $i++) {
            $val = $ops[$i];
            if ( is_numeric($val)) {
                array_push($points, $val);
            }else{
                $ct = count($points);
                if ($val == "+") {
                    $score = $points[$ct - 2] + $points[$ct - 1];
                    array_push($points,  $score);
                }else if ($val == "D") {
                    $score = $points[$ct - 1] * 2;
                    array_push($points,  $score);
                }else if ($val == "C") {
                    array_pop($points);
                }

            }
        }

        return array_reduce($points, function($prev, $current) {
            return $prev+$current;
        });

    }
}

$ops = ["5", "-2", "4", "C", "D", "9", "+", "+"];

$solution = new Solution();
$output = $solution->calPoints($ops);

var_dump($output);
<?php 

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    if (1 <= count($A) && count($A) <= 30000) {
        
        rsort($A);

        $total = array_reduce($A, function($prev, $current) {
            return $prev + $current;

        });

        $filters = 0;
        $new = [];
        $total_new = 0;
        while ($total / 2 > $total_new) {
            rsort($A);

            $val = $A[0] / 2;
            $new[] = $val;
            $A[0] = $val;
            $total_new = array_reduce($new, function($prev, $current) {
                return $prev + $current;
            });
            $filters ++;
            
        }
        return $filters;
    }
}

$arr = [3,0,5];
var_dump(solution($arr));
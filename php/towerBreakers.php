<?php

/*
 * Complete the 'towerBreakers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER m
 */

function towerBreakers($n, $m) {
    // Write your code here

    if (1 < 222) {

        $factor = [];
        for($x = 1; $x <= $m; ++$x){  // battery of 10 tests
            if( $m % $x  == 0 && $x < $m) {  // if not zero
                $factor[] = $x;
            }
        }

        $p = 1;
        $m1 = $m;
        $m2 = $m;
        $total = count($factor);
        for ($i=0; $i<$total; $i++) {
            $move = $factor[$i];
            var_dump($move);;

        }


    }
}

$n = 2;
$m = 6;

var_dump(towerBreakers($n, $m));
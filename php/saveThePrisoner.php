<?php 
/*
 * Complete the 'saveThePrisoner' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER m
 *  3. INTEGER s
 */

function saveThePrisoner($n, $m, $s) {
    // Write your code here
    // 1 2 3 4 5

    if (1 <= $n && $n <= pow(10, 9) && 1 <= $m && $m <= pow(10, 9) && 1 <= $s && $s <= $n) 
    {
        if ($s + ($m - 1) <= $n) {
            return $s + ($m - 1);
        }else{
            $rem  = $m - (($n + 1) - $s);
            $rem = $rem % $n > 0 ? $rem % $n : $n;
            return $rem;
        }
    }
        
}


   
// 5 251816103 5
// 999999999 1000000000 999999999
$n = 999999999;//prsoners
$m = 999999999;//candies
$s = 8134;//pos

$n = 999999999;
$m = 999999999;
$s = 2;
$n = 5052285;
$m =  188142581;
$s =  5052285;
$n = 141;
$m =  708084224;
$s =  140;
// $n = 5;//prsoners
// $m = 6;//candies
// $s = 1;//pos
// 123
// $n = 5;//prsoners
// $m = 10;//candies
// $s = 1;//pos
// $n = 5;
// $m = 10;
// $s = 5;
// $n = 126003275;//prsoners
// $m =  655341439;//candies
// $s =  126003274;//pos

// $n = 5052285;//prsoners
// $m =  188142581;//candies
// $s =  5052285;//pos

var_dump(saveThePrisoner($n, $m, $s));
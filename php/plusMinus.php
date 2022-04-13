<?php
function plusMinus($arr) {
    // Write your code here
    if (0 < count($arr) && count($arr) <= 100 && -100 <= min($arr) && max($arr) <= 100) {
        
        $pos = $neg = $zeros = 0;
        for($i=0; $i<count($arr); $i++) {
            $val = $arr[$i];
            if ($val > 0) {
                $pos ++;
            }elseif ($val < 0) {
                $neg ++;
            }else{
                $zeros ++;
            }
        }

        $total = count($arr);
        echo number_format(($pos / $total), 6) . "\n";
        echo number_format(($neg / $total), 6) . "\n";
        echo number_format(($zeros / $total), 6) . "\n";
    }

}

$arr = [-4, 3, -9, 0, 4, 1];
var_dump(plusMinus($arr));
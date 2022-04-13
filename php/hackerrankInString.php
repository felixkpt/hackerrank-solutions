<?php 
function hackerrankInString($s) {
    // Write your code here
    $str = str_split($s);
    if (10 <= count($str) && count($str) <= pow(10, 4)) {
        $target = ['h', 'a', 'c', 'k', 'e', 'r', 'r', 'a', 'n', 'k'];
        $out = 0;
        for ($i=0; $i<count($str); $i++) {
            $val = $str[$i];
            if ($val == $target[0]) {
                $out ++;
                array_shift($target);
            }
        }
        if ($out == 10) {
            return "YES";
        }else {
            return "NO";
        }
    }
    
}
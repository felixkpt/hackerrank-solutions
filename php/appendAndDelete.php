<?php 
function appendAndDelete($s, $t, $k) {
    // Write your code here
    if (1 <= min([strlen($s), strlen($t), $k]) && max([strlen($s), strlen($t), $k]) <= 100) {
        
        $arr = [];
        if (abs(strlen($s) - strlen($t)) > $k) {
            return 'No';
        }
        return "Yes";
    }

}

$s = 'a';
$t = 'b';
$k = 1;
var_dump(appendAndDelete($s, $t, $k));die;
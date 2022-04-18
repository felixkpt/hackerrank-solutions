<?php
function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    if (0 <= $x1 && $x1 < $x2 && $x2 <= 10000 && 1 <= min($v1, $v2) && max($v1, $v2) <= 10000) {
        $relative_speed = $v1 - $v2;
        $relative_distance = $x2 - $x1;
        $v_factor = $relative_speed == 0 && $x1 != $x2 ? true : false;
        $v_x_factor = $x1 < $x2 && $v1 < $v2 ? true : false;
        return $v_factor ? 'NO' : ($v_x_factor ? 'NO' : ($relative_distance % $relative_speed == 0 ? 'YES' : 'NO'));
    }else {
        return "Input error";
    }
}

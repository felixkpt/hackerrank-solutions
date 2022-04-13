<?php 
function timeConversion($s) {
    // Write your code here
    echo preg_match("#AM|PM#u", $s) ? date("H:i:s", strtotime($s)) : date("h:i:s", strtotime($s));
}
var_dump(timeConversion('22:00:00'));
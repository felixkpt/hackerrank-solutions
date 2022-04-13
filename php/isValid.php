<?php 

function isValid($s) {
    // Write your code here
    if (0 <= count(str_split($s)) && count(str_split($s)) <= pow(10, 5) && preg_match("#[a-z]#", $s)) {
        $arr = str_split($s);
        $unique = array_values(array_unique(str_split($s)));
        $list = [];
        $assited = false;
        for($i=0; $i<count($unique); $i++) {
            $val = $unique[$i];
            $ar = array_filter($arr, 
            function($v) use ($val) {
                return $v == $val;
            });
                $ct = count($ar);
                if ($ct == 3 && !$assited) {
                    $ct = 2;
                    $assited = true;
                }
                $list[] = $ct;
        }
        $msg = "YES";
        sort($list);
        $distinct = array_unique($list);

        if (count($distinct) > 1) {
        $msg = "NO";
        if (!$assited) {
            $l = $list;
            if (array_slice($list, -1)[0] < 3) {
                array_pop($list);
                if (count(array_unique($list)) == 1) {
                    $msg = "YES";
                }
            }

            $list = $l;
            if ($list[0] < 3) {
                array_shift($list);            
                if ($msg != "YES" && count(array_unique($list)) == 1) {
                    $msg = "YES";
                }     
            }
        }

        }
    
        return $msg;
    }
}

$filename = 'input.txt';
$stream = fopen($filename, 'r');
$length = filesize($filename);
$s = fread($stream, $length);
var_dump(isValid($s));

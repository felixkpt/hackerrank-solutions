<?php
function possibleBrackets($n) {
      
    function _gen_bracket($n, $open = 0, $close = 0, $str = '', &$out = []) {
        
        if ($open == $n && $close == $n) {
            // gen_bracket();
            array_push($out, $str);
        }
    
        // lets check if count of open is less than total number (n)
        if ($open < $n) {
            _gen_bracket($n, $open + 1, $close, $str.'(', $out);
        }
    
        // at any index i in the generation of the string str, we can put a closed paranthesis only if it's is less than open until that time is less than the count of open paranthesis
        if ($close < $open) {
            _gen_bracket($n, $open, $close + 1, $str. ')', $out);
        }
    }
    
        $arr = [];
        _gen_bracket($n, 0, 0, '', $arr);
        return $arr;

}


$res = [];
$n = 8;
var_dump(possibleBrackets($n));

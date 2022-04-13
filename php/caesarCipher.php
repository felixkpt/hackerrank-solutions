<?php 
function caesarCipher($s, $k) {
    // Write your code here
    if (0 <= min(count(str_split($s)), $k) && max(count(str_split($s)), $k) <= 100) {
        $arr = str_split($s);
        $str = '';
        
        for($i=0; $i<count($arr); $i++) {
            $val = $arr[$i];
            if ( preg_match("#[a-z]#i", $val) ) {
                $ascii = ord($val);
                $num = $ascii + $k;
                if ($ascii <= 90) {
                    $c = $ascii;
                    for ($j=1;$j <= $k; $j++) {
                        $c ++;
                        if ($c > 90) {
                            $c = 65;
                        }
                    }
                    $num = $c;
                
                }else {
                    $c = $ascii;
                    for ($j=1; $j<=$k; $j++) {
                        $c ++;
                        if ($c > 122) {
                            $c = 97;
                        }
                    }
                    $num = $c;
                
                }
                $str .= chr($num);
                
            }else {
                $str .= $val;
            }
        }
    }
    return $str;
}

$s = 'middle-Outz';
// var_dump(caesarCipher($s, 2));
function caesarCipher2($s, $k) {
    // Write your code here
    if (0 <= min(count(str_split($s)), $k) && max(count(str_split($s)), $k) <= 100) {
            $arr = str_split($s);
            $str= '';
            for ($i=0; $i<count($arr); $i++) {
                if (ord($arr[$i]) >= 65 && ord($arr[$i]) <= 90) {
                    $str .= ord($arr[$i]) + $k <= 90 ?  chr(ord($arr[$i]) + $k) : chr(ord(65) + $k % 26);
                }  else if (ord($arr[$i]) >= 97 && ord($arr[$i]) <= 122) {
                    if ($str .= ord($arr[$i]) + $k <= 90) {
                        chr(ord($arr[$i]) + $k);
                    }else {
                        $str .= $k > 26 ? chr(ord(65) + $k % 26) : chr(ord(65) + $k);
                    }
                }else {
                    $str .= $arr[$i];
                }
            }
            return $str;
    }
}
var_dump(caesarCipher2('middle-Outz', 2));

<?php 
function staircase($n) {
    // Write your code here
    if ($n > 0 && $n <= 100) {
            
            
            $str = '';
            for($i=1; $i<=$n; $i++) {

                $spaces = $n - $i;
                $j = 0;
                $s = "";
                while ($j <= $spaces) {
                    $s .= " ";
                    $j ++;
                }

                $j = 1;
                $hashes = "";
                while ($j <= $i) {
                    $hashes .= "# ";
                    $j ++;
                }
                $hashes = rtrim($hashes, " ");
                $str .= $s.$hashes."<br>";
        }
        return $str;
    }

}

$input = 3;
var_dump(staircase($input));
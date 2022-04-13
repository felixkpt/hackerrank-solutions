<?php 

function solution($A) {
    // write your code in PHP7.0

    if (count($A) == count(array_unique($A))) {
        $loop = [];
        for ($i=1; $i<=30; $i++) {
            if (is_numeric(array_search($i, $A))) {
                $loop[] = true;
            }else {
                $loop[] = false;
            }
        }

        $tickets2 = 0;
        $tickets7 = 0;
        $tickets30 = 0;
        $gap7 = 0;
        $gap30 = 0;
        for ($i=0; $i<count($loop); $i++) {
            $val = $loop[$i];

            if ($val == true) {
                // echo "Travelled<br>";
                $tickets2 ++;
                if (($tickets2 * 2) > 6 && $gap7 < 7) {
                    $tickets2 = 0;
                    $tickets7 ++;
                }else {
                    $gap30 ++;
                }

                if (($tickets7 * 7) > 24 && $gap30 > 0) {
                    $tickets7 = 0;
                }

            }else {
                // echo "Not Travelled<br>";
                $gap7 ++;
            }

            if ($gap7 > 24) {
                $tickets30 ++;
                break;
            }
        }

        $t = $tickets2 > 0 ? $tickets2 - 1 : 0;

        return ($t * 2) + ($tickets7 * 7) + ($tickets30 * 25);
    }

}


$a = [1,2,2,4,5,7,29,30];

var_dump(solution($a));
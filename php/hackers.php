<?php
$arr = [[3,2], [4,8],[15,30], [25,50], [3,2]];  // returns 3
//explanation 
#4/15 = 30/8 Hence similar 4/25 = 50/8 and 15/25 = 30/50

// var_dump(4 / 25,  8 / 50);

var_dump(countPairs($arr));

function countPairs($sides) {

    $arr = [];
    $similarities = 0;
    $kissed = [];
    for ($i=0; $i<count($sides); $i++) {
        $val = $sides[$i];
        $q = $sides;
        unset($q[$i]);
        $q = array_values($q);
        $sides_unset = $q;
        // var_dump($val, $sides_unset);die;

        for ($j=0; $j<count($sides_unset); $j++) {
            $val2 = $sides_unset[$j];

            $a = $val[0];
            $b = $val[1];
            $c = $val2[0];
            $d = $val2[1];
            $t1 = $a / $c;
            $t2 = $b / $d;
            if ( $t1 == $t2) {
                $similarities ++;
                $kissed[] = [$i, $j];                
            }
        
        }

    }

    return $similarities / 2;

}
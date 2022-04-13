                <?php

                /*
                * Complete the 'powerSum' function below.
                *
                * The function is expected to return an INTEGER.
                * The function accepts following parameters:
                *  1. INTEGER X
                *  2. INTEGER N
                */

                function powerSum($X, $N) {
                    // Write your code here
                    if (1 <= $X && $X <= 1000 && 2 <= $N && $N <= 10) {
                        
                        $num = 1;
                        $list = [];
                        while ( true ) {
                            $pow = pow($num, $N);
                            if ($pow > $X) {break;}
                            $list[] = $pow;
                            $num ++;
                        }
                        
                        //The total number of possible combinations 
                        $combinations = pow($N, $num);
                        $out = array();
                        // loop through each possible combination  
                        for ($i = 0; $i < $combinations; $i++) {  
                            $comb = array();
                            // for each combination check if each bit is set 
                            for ($j = 0; $j < count($list); $j++) { 
                            // is bit $j set in $i? 
                                if (pow($N, $j) & $i){
                                    $comb[] = $list[$j];
                                }      
                            } 

                            if (array_sum($comb) == $X) {
                                $out[] = $comb;
                            }
                        }

                        array_multisort(array_map('count', $out), SORT_ASC, $out);

                        $out = array_unique($out, SORT_REGULAR);
                        
                        return count($out);

                    
                    }
                }

$X = 400;
$N = 2;

var_dump(powerSum($X, $N));

// $use = array_slice($res, $i + 1);
//                     $use_temp = $use;
//                     $pointer = 0;
//                     $subject = 0;
//                     while($pointer < count($use)) {
//                         if ($pointer == 0) {
//                             $subject = $res[$i];
//                         }else {
//                             $subject += $res[$pointer];
//                         }

//                         for($j=0; $j<count($use_temp); $j++) {
//                             $val = $use_temp[$j];
//                             $res = $subject + $val;
//                             if ($res == $X) {
//                                 $cases[] = $res;
//                             }
//                         }
//                         $pointer ++;
//                         array_pop($use_temp);
//                     }
function powerSum2($X, $N) {
    // Write your code here
    if (1 <= $X && $X <= 1000 && 2 <= $N && $N <= 10) {
        
        $num = 1;
        $list = [];
        while ( true ) {
            $pow = pow($num, $N);
            if ($pow > $X) {break;}
            $list[] = $pow;
            
            $num ++;
        }
        $output = [];
        $list2 = [$list[0]];
        for ($i=1; $i<=count($list); $i++) {
            if(@in_array($X - $list2[$i - 1], $list)){
                $output[] = [$list2[$i - 1], $X - $list2[$i - 1]];
                array_push($list2, $list[$i] + $list2[$i - 1]);
            }else {
                @array_push($list2, $list[$i] + $list2[$i - 1]);
            }
        }
            return $output;
       
    
    }
}
// var_dump(powerSum2($X, $N));
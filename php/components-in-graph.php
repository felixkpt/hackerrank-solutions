<?php 
function componentsInGraph($gb) {
    // Write your code here
    if (1 <= count($gb) && count($gb) <= 15000) {
        $arr = [0 => count($gb)];
        for ($i=0; $i<count($gb); $i++) {
            $val = $gb[$i];
            if ( !array_key_exists($val[0], $arr) ) {
                $arr[$val[0]][] = $val[1];
            }else {
                $arr[$val[0]][] = $val[1];
            }
        }
        uasort($arr, function($a, $b) {
            if (!is_array($a)) {
                return 0;
            }else {
                return count($a) > count($b) ? -1 : 1;
            }
        });
        unset($arr[0]);
        $max_holder = [];
        $max = 0;
        foreach ($arr as $k => $v)
        {
            if (!$max_holder) {
                $max_holder = array_merge([1], $v);
                $max = count($max_holder);
            }else if (in_array($v[0], $max_holder)) {
                unset($arr[$k]);        
                    $max ++;
            }
        }
        $min = 1 + count(array_slice($arr, -1, 1, true));;
        return [$min, $max];
    }
}


$bn = [[1, 5], [1, 6], [2, 4]];

// $bn = [[1, 6], [2, 7], [3, 8], [4, 9], [2, 6]];


// var_dump(componentsInGraph($bn));
// die;
function final3($bg) {
        $conns = [];
        for ($i=0; $i<count($bg); $i++) {
            for ($j=0; $j<count($bg[$i]); $j++) {
                $val = $bg[$i][$j];
                if (!in_array($val, $bg)) {
                    $conns[]  = [$val];
                    echo 'exists';
                }                
              
            }
        }
        return $conns;

}
$bg = [[1,5], [1,6], [2,4]];
print_r(final3($bg));


// <?php function response( $input ) {
//     //Insert your code here 
//     $response = [];
//    for ($i=1; $i<=$input; $i++) {
//      if ($i%3==0 && $i%5==0) {
//          array_push($response, 'FizzBuzz');
//      }else if($i%3==0){
//          array_push($response, 'Fizz');
//      }else if($i%5==0){
//          array_push($response, 'Buzz');
//      }else{
//          array_push($response, $i);
//      }
//    }
//    return $response;
// }
// ?>

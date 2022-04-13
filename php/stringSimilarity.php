<?php 


// function stringSimilarity($s) {
//     // Write your code here
//     $arr = str_split($s);
//     if (1 <= count($arr) && count($arr) <= pow(10, 6)) {
//         $output = [];
//         for($i=0; $i<count($arr); $i++) {
//             $output[] = substr($s, $i, 111111);
//         }
//         var_dump(count($output));

//         die;
        
//         $found = 0;
//         for($i=0; $i<count($output); $i++) {
//             $val = str_split($output[$i]);
//             $str = "";
//             for ($j=0; $j<count($val); $j++) {
//                 $val2 = $val[$j];
//                 $str .= $val2;
//                 if (preg_match("#^".$str.".?#", $s)) {
//                     $found ++;
//                 }else{
//                     break;
//                 }
//             }
//         }
//         return $found;
//     }
// }
function stringSimilarity($s) {
    // Write your code here
    $strs = str_split($s);
    $strcmp = '';
    $similarity = 0;
    foreach($strs as $letter) {
        $strcmp .= $letter;
        $rep = str_replace($strcmp, '|', $s);
        $similarity += count(explode("|",$rep)) - 1;
        var_dump($rep);
    }
    return $similarity;
}

$s = 'ababaa';

// $file = 'input.txt';
// $stream = fopen($file, 'r');

// $s = fread($stream, filesize($file));

var_dump(stringSimilarity($s));


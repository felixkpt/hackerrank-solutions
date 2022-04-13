<?php 
// $path = 'UDDDUDUU';
// $test = 'W';
// $arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
// $res = preg_match('#(w)+#', $test);

// function sightBirds ($arr) {

//     if (0 < count($arr) && count($arr) < (2 * pow(10, 5)) ) {

//         $sorted = [];
    
//         for ($j=0; $j<count($arr); $j++) {
//             $val = $arr[$j];
//         if (@!$sorted[$val]) {
//             $sorted[$val] = 1;
//         }else {
//         $sorted[$val]++;
//         }
//         }
        
//         arsort($sorted, SORT_NUMERIC);
        
//         return array_keys($sorted)[0];
//     }else{
//         return "out of constraints";
//     }

// }

// var_dump(sightBirds($arr));




function countValleys ($path) {
    $valid = str_replace($path, 'testing'.$path, $path);
$validated = str_split(str_replace('DU', 'W', $valid));
$valleys = $down = $up = 0;
$sorted = [];
$trg = 'W';
$followed = false;
for ($j = 0; $j < count($validated); $j++) {
    $current = $validated[$j];
    $next = @$validated[$j + 1];
    if ($current == $trg) {
        if (!$followed) {
            $sorted[] = $current;
            $followed = true;
        }
        if ($next !== $trg) {
            $followed = false;
        }  
    }
    else{
        $sorted[] = $current;
    }
}
for ($i=0; $i< count($sorted); $i++) {
if ($sorted[$i] == 'U'){
$up++;
}elseif ( $sorted[$i] == 'D') {
    $down++;
}
$up - $down <= 0 && @$sorted[$i+1] == 'W' ? $valleys++ : '';
}
return $valleys;
}
$path = 'UUDDUUDDUUDD';
var_dump(countValleys($path));

?>
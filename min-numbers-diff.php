<?php 
$arr = [3,2,1,2,3];

$sorted = [];

for ($i=0; $i<count($arr); $i++) {

    $val = $arr[$i];
    
    if(count(array_keys($arr, $val)) == 2 ) {
        $key = 'ourkey_'.$val;
        if (@!key_exists($key, $sorted)){
        
            $sorted[$key] = $i;
        }else {
            $sorted[$key] = [$sorted[$key], $i]; 
        }

    }

}

asort($sorted);

function diff($carry, $item)
{
    $carry -= $item;
    return $carry;
}

$sorted = array_reverse($sorted);
$super_sorted = [];
foreach ($sorted as $key => $value) {

    $val = $value[1] - $value[0];    
    $super_sorted[] = [$key => $val];
}

$res = array_values($super_sorted[0])[0] ?? -1;

// var_dump($super_sorted);

die;

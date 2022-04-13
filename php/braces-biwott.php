<?php 

$arr = [1, 2, 3, 2];

$arr_n = [];
for ($i=0; $i< count($arr); $i++)
{
    $val = $arr[$i];

    if (!in_array($val, $arr_n)) {
        $arr_n[] = $val;
    }else{
        $repeated = $val;
        break;
    }

}


function generateParenthesis($n) {

    $factorial = 1;  
    for ($x=$n; $x>=1; $x--)   
    {  
        $temp = $factorial * $x;
        var_dump($temp);
      $factorial = $temp;  
    }  
    var_dump($factorial);
}

var_dump(generateParenthesis(3));
?>
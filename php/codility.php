<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$exam = new class {
    public function solution($n) {

        if (0 < $n && $n <= 2147483647) {
            $binary = decbin($n);

            $binary = preg_replace('!1+!', '1', $binary);

            preg_match('!1(.*)1!', $binary, $matches);
    
            // var_dump($binary, $matches);die;
            if ($matches) {
                $binary = $matches[0];
            
            $arr = explode('1', $binary);

            $arr = array_map(function ($a) {
                return strlen($a);
            }, $arr);

            return max($arr);

            }

        }

        return 0;
    }
};



// var_dump($exam->solution(15));
// function solution($X, $Y, $D) {

//     $max_limit = 1000000000;
//     if ($X <= $Y) {
//         if ((1<= $X && $X < $max_limit) && (1<= $Y && $Y < $max_limit) && (1<= $D && $D < $max_limit)) {
//             $curret_pos = $X;
//             $steps = 0;
//             while ($curret_pos < $Y) {
    
//                 $curret_pos += $D;
//                 $steps ++;
//             }
    
//             return $steps;
//         }
//     }
    
// }

function solution($X, $Y, $D) {

    $max_limit = 1000000000;
    if ($X <= $Y) {
        if ((1<= $X && $X <= $max_limit) && (1<= $Y && $Y <= $max_limit) && (1<= $D && $D <= $max_limit)) {
            
                return (int) ceil(($Y - $X) / $D);

        }
    }
    
}

var_dump(solution(1000000000, 1000000000, 10));

?>
</body>
</html>
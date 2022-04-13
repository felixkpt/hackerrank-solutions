<?php 

function designerPdfViewer($h, $word) {
    // Write your code here
    if (!array_filter($h, function($a) {return $a < 1 ?? $a;}) && !array_filter($h, function($a) {return $a > 7 ?? $a;})) {
        if (1 <= strlen($word) && strlen($word) <= 7) {
            $alpha = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            $alpha = array_reduce($alpha, function($prev, $current) use ($alpha, $h) {
                return array_merge($prev , [$current => $h[array_search($current, $alpha)]]); 
            }, []);
            $letters = str_split($word);
            $mapped = array_map(function($current) use ($alpha) {
                return $alpha[$current];
            }, $letters);
            rsort($mapped);
            $max = $mapped[0];
            $area = count($letters) * $max;
            return $area;
        }
    }
}

$h = [1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7];


var_dump(designerPdfViewer($h, 'zaba'));die;
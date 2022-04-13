<?php 

function strangeCounter($t) {
    // Write your code here
    if (1 <= $t && $t <= pow(10, 12)) {
        $second = 1;
        $pos = $pos_init = 3;
        $cycles = 1;
        while ($second <= $t) {
            while ($pos >= 1) {
                ${'cycle'.$cycles}[] = [$second => $pos];
                $second ++;
                $pos --;
            }
            // Reset pos
            if ($cycles == 1) {
                $pos = $pos_init * 2;
            }else {
            $pos = array_values(${'cycle'.($cycles)}[0])[0] * 2;
            }
            $cycles ++;
        }
            $cycle = 1;
            $res = false;
            while ($cycle <= pow(10, 12)) {
                $res = array_reduce(${'cycle'.$cycle}, 
                function($a, $b) use ($t) {
                    if (key_exists($t, $b)) {
                        return $b[$t];
                    }else {
                        return $a;
                    }
                }, 0);
                if ($res > 0) {
                    break;
                }
                $cycle ++;
            }
            return $res;
        }
}

// echo strangeCounter(pow(10, 7));

function strangeCounter2($t) {
    if (1 <= $t && $t <= pow(10, 12)) {
        $modifiers = [1];
        $const = [3];
        for ($i=1; $i<$t; $i++) {
            $modifiers[] = $const[$i - 1] + $modifiers[$i - 1];
            $const[] = $const[$i - 1] * 2;
            if ($modifiers[count($modifiers) - 1] > $t){
                break;
            }
        }
        for ($key=0; $key<count($modifiers); $key++) {
            if ($modifiers[$key] > $t){
                break;
            }
        }
        $ans = $modifiers[$key - 1] + 2 - ($t - $modifiers[$key - 1]); 
        return $ans;
    }
}
var_dump(strangeCounter2(4));


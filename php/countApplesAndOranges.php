<?php 

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here

    if (1 <= min($s, $t, $a, $b, count($apples), count($oranges)) && max($s, $t, $a, $b , count($apples), count($oranges)) < 10**6) {
        $apples = array_filter($apples, function($c) {if ($c > 0) {return 1;}});
        $oranges = array_filter($oranges, function($c) {if ($c < 0) {return 1;}});
        $apples_mapped = array_map(function($apple) use ($a) { return $a+$apple;}, $apples);
        $oranges_mapped = array_map(function($orange) use ($b) { return $b+$orange;}, $oranges);
        $landed_apples = array_reduce($apples_mapped,function($prev, $c) use ($s, $t){ if ($c >= $s && $c <= $t) { $prev[] = $c;} return $prev; }, []);
        $landed_oranges = array_reduce($oranges_mapped,function($prev, $c) use ($s, $t){ if ($c >= $s && $c <= $t) { $prev[] = $c;} return $prev; }, []);
        echo count($landed_apples)."\n";
        echo count($landed_oranges);
    }

}





function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here

    if (1 <= min($s, $t, $a, $b, count($apples), count($oranges)) && max($s, $t, $a, $b , count($apples), count($oranges)) < 10**6) {
        $appleCount = 0;
        $orangeCount = 0;
        $apples = array_filter($apples, function($c) {if ($c > 0) {return 1;}});
        $oranges = array_filter($oranges, function($c) {if ($c < 0) {return 1;}});

        foreach ($apples as $A) {
            if ($a +  $A >= $s && $a +  $A <= $t) {
                $appleCount++;
            }
        }
        foreach ($oranges as $o) {
            if ($b +  $o >= $s && $b +  $o <= $t) {
                $orangeCount++;
            }
        }

        echo $appleCount."\n";
        echo $orangeCount;
    
    }

}


















function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here

    if (1 <= min($s, $t, $a, $b, count($apples), count($oranges)) && max($s, $t, $a, $b , count($apples), count($oranges)) < 10**6) {
        $appleCount = 0;
        $orangeCount = 0;
        $apples = array_filter($apples, function($c) {if ($c > 0) {return 1;}});
        $oranges = array_filter($oranges, function($c) {if ($c < 0) {return 1;}});

        foreach ($apples as $A) {
            if ($a +  $A >= $s && $a +  $A <= $t) {
                $appleCount++;
            }
        }
        foreach ($oranges as $o) {
            if ($b +  $o >= $s && $b +  $o <= $t) {
                $orangeCount++;
            }
        }

        echo $appleCount."\n";
        echo $orangeCount;
    
    }

}

$s = 7;
$t = 11;
$a = 5;
$b = 15;
$apples = [-2, 2, 1];
$oranges = [5, -6];
var_dump(countApplesAndOranges($s, $t, $a, $b, $apples, $oranges));
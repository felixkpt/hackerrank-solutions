<?php 

function solution($P, $S) {
    // write your code in PHP7.0

    // Constraints check
    if ((1 <= count($P) && count($P) <= 100000) && (1 <= count($S) && count($S) <= 100000)) {

        // Sort from highest seater vehicle
        $new_s = [];
        for ($i=0; $i<count($S); $i++) {
            $val = $S[$i];
            $new_s[] = ['key' => $i, 'val' => $val];
        }

        uasort($new_s, function($a, $b) {
            return ($a['val'] < $b['val']);
        });

        $vehicle_and_pass = [];
        foreach($new_s as $key => $val) {
            var_dump($key, $val);die;
        }
        var_dump($new_s);
        die;
        
        $available = [];
        for ($i=0; $i<count($P); $i++) {
            $passengers = $P[$i];
            $seats = $S[$i];
            if ($seats > $passengers) {
                $available[$i] = $seats - $passengers;
            }else{
                $unavailable[$i] = 'u';
            }
        }


        $added = [];
        foreach ($available as $key => $val) {
        
            for ($j=0; $j< count($P); $j++) {
                if ($P[$j] !== $key) {
                    if ($added[$key] < count($val)) {
                        $added[$key] ++;
                    }
                }
            }
            
        }

        var_dump($added);die;

    }
}


function countCars ($p, $s) {
        // Constraints check
        if ((1 <= count($p) && count($p) <= 100000) && (1 <= count($s) && count($s) <= 100000)) {
            rsort($s);
            $people = array_reduce($p, function($prev, $current) {
                return $prev + $current;
            }, 0);

            $cars = 0;
            for($i=0; $i<count($s); $i++) 
            {
                if ($people > 0) {
                    $val = $s[$i];
                    $ct = 0;
                    while ($ct < $val) {
                    $ct ++;
                    $people --;
                    }
                    $cars ++;
                }
            }
            return $cars;
        }
}

$p = [4,4,2,4];
$s = [5,5,2,5];

// var_dump(countCars($p, $s));

function countCars2 ($p,$s) {
    rsort($s);
    $people = array_reduce($p, function($prev, $current) {
        return $prev + $current;
    }, 0);

    $cars = 0;
    for ($i=0; $i<count($s); $i++) {
        if ($people > 0) {
            $capacity = $s[$i];
            $ct = 0;
            while ($ct < $capacity) {
                $ct ++;
                $people --;
            }
            $cars ++;
        }else {
            break;
        }
    }

    return $cars;

}
var_dump(countCars2($p, $s));
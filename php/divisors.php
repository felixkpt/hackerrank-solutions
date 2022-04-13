<?php

function divisors($n) {
    if (1 <= $n & $n <= pow(10, 9)) {
        
        $divs = [];
        for($i=1; $i<=$n; $i++) {

            if (!($n % $i)) {
                $divs[] = $i;
            }

        }

        $div = 0;
        for ($i=0; $i<count($divs); $i++) {

            if ($divs[$i] % 2 === 0) {
                $div++;
            }

        }

        return $div;
        
    }
}




function divisors2($n) {
    if (1 <= $n & $n <= pow(10, 9)) {
        if ($n % 2 == 0) {
          $divs = 0;
          for ($i=2; $i<=$n; $i++) {
              $cond = ceil($n % $i) < $n / 2;
              if ($n % $i == 0 && $i % 2 == 0) {
                  if ($cond) {
                      $divs++;
                  }else{
                      break;
                  }
              }
          }


          return $divs;
      }else{
          return 0;
      }
      
  }
      
        
}

$n  =99;
var_dump(divisors($n));
echo str_repeat("<br>", 10);

var_dump(divisors2($n));die;
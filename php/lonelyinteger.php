<?PHP 
function lonelyinteger($a) {
    // Write your code here
    if (1 <= count($a) && count($a) <= 100 && 0 <= min($a) && max($a) <= 100) {
        $unique = array_unique($a);
        
        $found = 0;
        for ($i=0; $i<count($unique); $i++) {
            $val = $unique[$i];
            
            if (count(array_filter($a, function($current) use ($val) {
                return $current == $val;
            })) == 1) {
                $found = $val;
                break;}
            
        }

        return $found;
    }
}

$arr = [1, 2, 3, 4, 3, 2, 1];

var_dump(lonelyinteger($arr));
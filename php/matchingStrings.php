<?php

function matchingStrings($strings, $queries) {
    // Write your code here
    $val = array_count_values($strings);
    $arr = [];
    foreach ($queries as $querie) {
        if (key_exists($querie, $val)) {
            $arr[] = $val[$querie]; 
        }
    }
    return $arr;
}
$strings = ['ab', 'ab', 'ab', 'ab', 'abc'];
$queries = ['ab', 'abc', 'bc'];
var_dump(matchingStrings($strings, $queries));

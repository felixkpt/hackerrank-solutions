<?php 

// $input = "[
//     dependencies: {
//         node: function() {
//             return {}
//         },
//         vue: function() {
//             return {}
//         },
//         react: function() {
//             return {}
//         },
//         angular: function() {
//             return {}
//         },
//         moment: function(arr) {
//             return {arr.map() => {

//             }}
//         }
//     }
// ]";


$input = "))((";














$res1 = explode('(', $input);
$res2 = explode(')', $input);
$valid1 = count($res1) == count($res2);

$res1 = explode('{', $input);
$res2 = explode('}', $input);
$valid2 = count($res1) == count($res2);

$res1 = explode('[', $input);
$res2 = explode(']', $input);
$valid3 = count($res1) == count($res2);


if ($valid1 && $valid2 && $valid3) {
    echo "valid";
}else {
    echo "invalid";
}

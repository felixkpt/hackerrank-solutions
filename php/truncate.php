<?php  
function solution($message, $K) {
    if (1 <= $K && $K <= 500) {
        // First truncate
        $arr = explode(" ", $message);
        $max_words = '';
        for ($i=0; $i<count($arr); $i++) {
            
            if (strlen($max_words) < $K) {
                $max_words .= " " . $arr[$i];
            }else {
                break;
            }
        }
        // Final truncate
        $arr = explode(" ", $max_words);
        $max_words = '';
        for ($i=0; $i<count($arr); $i++) {
            $word = $arr[$i];
            
            if ((strlen($max_words) + strlen($word)) < $K) {
                if (!$max_words) {
                    $max_words .= $word;
                }else {
                    $max_words .= " " . $word;
                }
            }else {
                break;
            }

        }
        $max_words = trim($max_words);

        return $max_words;
    }
}

var_dump(solution("The quick brown fox jumps over the lazy dog", 39));


function solution($message, $length) {
    $words = explode(' ', $message);
    $sentence = $words[0];
    for ($i=1; $i<count($words); $i++) {
     if (strlen($words[$i]) + strlen($sentence) + 1 <= $length){
         $sentence = str_replace($sentence, $sentence.' '.$words[$i], $sentence);
     }
    }
    return strlen($words[0]) <= $length ? $sentence : '';
    }
    
    $message = "allan biwott chris david";
    $length = 3;
    
    // var_dump(solution($message, $length));die;
    
    
    
    // $pointer = strlen($message);
    // var_dump($pointer);die;
    
    // $message = substr($message, 0, $length);
    // $message_pointed = substr($message, 0, $pointer);
    // $truncated = $message == $message_pointed ? false: true;
    // if ($truncated) {
    //     $message = $message_pointed;
    // }
    // var_dump($message);
    
    // die;
    // $truncated = rtrim($message) == rtrim(substr($message, 0, $pointer)) ? false : true;
    // if ($truncated == true) {
    //     $message = rtrim(substr($message, 0, $pointer));
    // }
    
    // var_dump($message);
    
    
    $num = 23233;
    
    $t = [0 => 'Even', 1 => 'Odd'];
    
    var_dump($t[substr($num, -1) % 2]);
    
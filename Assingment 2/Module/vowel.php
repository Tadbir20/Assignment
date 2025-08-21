<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $str = strtolower($str);
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    
    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

// other method
/* 

$content = file_get_contents(__FILE__);
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    preg_match_all('/[aeiouAEIOU]/', $str, $matches);
    $vowelCount = count($matches[0]);
    $reversed = strrev($str);
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}
*/
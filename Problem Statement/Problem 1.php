<?php
function countOccurrences($S, $T){
    $count = 0;
    $pos = 0;

    while (($pos = strpos($S, $T, $pos)) !== false) {
        $count++;
        $pos += strlen($T); 
    }

    return $count;
}

$S = "abababab";
$T = "ab";

echo countOccurrences($S, $T);
?>
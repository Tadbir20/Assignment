<?php
function jitu($a, $b) {
    if ($a == 10 || $b == 10 || ($a + $b) == 10) {
        return "True";
    } else {
        return "False";
    }
}
fscanf(STDIN, "%d %d", $a, $b);
$result = jitu($a, $b);
echo $result ;
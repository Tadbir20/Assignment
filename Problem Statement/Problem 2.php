<?php
function Rotation($S, $T) {

    if (strlen($S) !== strlen($T) || strlen($S) == 0) {
        return false;
    }

    $SS = $S . $S;
    return strpos($SS, $T) !== false;
}

$S = "waterbottle";
$T = "erbottlewata";

if (Rotation($S, $T)) {
    echo "True";
} else {
    echo "False";
}
?>
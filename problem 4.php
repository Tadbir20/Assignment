<?php

$str1 = fgets(STDIN);
$str2 = fgets(STDIN);

if (strlen($str1) !== strlen($str2)) {
    echo "NO";
} else {
    $arr1 = str_split(trim($str1));
    $arr2 = str_split(trim($str2));

    sort($arr1);
    sort($arr2);

    if ($arr1 === $arr2) {
        echo "YES";
    } else {
        echo "NO";
    }
}
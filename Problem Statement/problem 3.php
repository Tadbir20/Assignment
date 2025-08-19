<?php

$str = fgets(STDIN);

$array = str_split(trim($str));

$arr=[];

for($i=0; $i<count($array); $i++) {
    if (!in_array($array[$i], $arr)) {
        $arr[]=$array[$i];
    }
}

$final = implode("", $arr);
echo $final;
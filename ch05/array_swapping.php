<?php
    $arr = [10, 33, 12, 8, 1, 89];

    print_r($arr);
    print "<br>";

    $temp = $arr[0];    // swapping할 때는 임시 저장소가 필요
    $arr[0] = $arr[1];
    $arr[1] = $temp;

    print_r($arr);
    print "<br>";
?>
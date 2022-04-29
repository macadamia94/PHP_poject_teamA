<?php
    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [1, 2, 3, 6, 7];

    $arr3 = [1, 2, 3, 4, 5];

    $diff_arr = array_diff($arr1, $arr2); // $arr1과 $arr2를 비교해서 $arr1에 있는 것만 표시

    print_r($diff_arr); 
    print "<br>";

    print ($arr1 === $arr2) . "<br>"; // false (빈칸으로 표시)
    print ($arr1 === $arr3) . "<br>"; // true ('1'로 표시)
?>
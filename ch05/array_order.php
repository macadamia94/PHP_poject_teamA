<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24
    );

    //  값 정렬
    // sort(오름차순), rsort(내림차순)

    $copy_arr_1 = $arr_age;
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    print "origin : ";
    print_r($arr_age);
    print "<br>";

    rsort($copy_arr_1);
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    print "origin : ";
    print_r($arr_age);
    print "<br>";
    
    print "<br> ---------- <br>";

    // 키 정렬
    // ksort(오름차순), krsort(내림차순)

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    krsort($copy_arr_2);

    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

?>
<?php
    $matrix = array(
        array(1, 2, 3, 0),
        array(4, 5, 6, 0, 1),
        array(7, 8, 9, 0),
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[1][1] . "<br>";

    $child1 = $matrix[1]; // 깊은 복사

    array_push($child1, 10, 10);

    print $child1[1] . "<br>";

    print "matrix count : " . count($matrix) . "<br>";
    print "matrix[0] count : " . count($matrix[0]) . "<br>";
    print "matrix[1] count : " . count($matrix[1]) . "<br>";
    print "child1[1] count : " . count($child1) . "<br>";
    print "matrix[2] count : " . count($matrix[2]) . "<br>";

    print "<br><br>";
    print_r($child1);
    print "<br><br>";
    print_r($matrix[1]);
?>
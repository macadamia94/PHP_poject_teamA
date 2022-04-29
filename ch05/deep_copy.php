<?php
    $score = array(1, 2, 3, 4); // 깊은복사가 이루어지고 있음
    $score2 = $score;           // 같은 값을 복사해서 표시

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100;

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";
?>
<?php
/*
    1부터 val변수에 있는 숫자까지 모두 더해주세요
    그리고 결과값을 출력해 주세요
    while문으로 해결
*/

    $val = rand(50, 100);
    print "val : $val <br>";

    $sum = 0;
    $i = 1;
    while($i <= $val)
    {
        $i++;
        $sum = $sum + $i;
        // $sum += $i++;
    }
    print $sum;


?>
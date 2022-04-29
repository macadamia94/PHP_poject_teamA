<?php
    /*
        rand(1, 10) 실행을 시킬건데 10이 나올때까지 반복
        10이 아니면 숫자를 찍고
        10이 나오면 반복을 멈추고 "끝" 출력
    */

    print "-- 시작 -- <br>";
    $r_val = rand(1, 10);
   
    while ($r_val != 10)
    {
        print "r_val : $r_val <br>";
        $r_val = rand(1, 10);
    }
    print "-- 끝 -- <br>";
    
?>
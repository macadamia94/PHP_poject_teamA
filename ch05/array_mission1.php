<?php
    /*
        합계 : ?
        평균: ?
    */

    $score_arr = array(100, 90, 33, 87, 65, 99, 100); 

    print "합계 : " . array_sum($score_arr) . "<br>";
    print "평균 : " . array_sum($score_arr) / count($score_arr) . "<br>";
    
    print "------------------<br>";

    $sum = 0;
    $len = count($score_arr);
    for($i=0; $i<$len; $i++) 
    {
        $sum += $score_arr[$i];
    }
    $avg = $sum / $len;

    print "합계: $sum <br>";
    print "평균: $avg <br>";


?>
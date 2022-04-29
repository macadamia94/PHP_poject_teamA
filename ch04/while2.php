<?php
    print "-- 시작 -- <br>";
    while(true)
    {
        $r_val = rand(1, 10);
        if($r_val == 10) {break;}
        print "r_val :$r_val <br>";
    } 
    print "-- 끝 -- <br>";
    
?>
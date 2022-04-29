<?php
    function make_ten()
    {
        global $i;          // global 선언된 후에는 '전역변수'
        $i = $i + 10;       // global 선언되기 전은 '지역변수'
    }

    $i = 0;                 // 전역변수
    make_ten();
    print "i : $i <br>";
?>
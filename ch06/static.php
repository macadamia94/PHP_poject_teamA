<?php
    // static
    function inc()
    {
        static $i = 1;      // 최초의 딱 한번만 실행
        print $i++ . "<br>";
    }

    // 전역함수
    $z = 1;
    function inc2()
    {
        global $z;
        print $z . "<br>";
        $z += 1;
    }

    for($i=0; $i<10; $i++)
    {
        inc();
    }
    
?>
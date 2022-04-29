<?php
    function A()
    {
        global $n;
        print "$n<br>";
    }

    function B()
    {
        $n = "B";
        A();
    }

    $n = "M";
    A();    // M 출력
    B();    // M 출력

    /*
    함수 안에 global이 들어가면 전역변수로 변환
    global이 없으면 지역변수

    만약 A()에 global이 없다면 에러 터짐
    */
    
<?php
    function swap_val($n1, $n2)     // 메모리낭비가 심한편
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    function swap_ref(&$n1, &$n2)   // ref : 참조값(메모리 주소값) , 메모리 효율성이 좋다
    {
        $temp = $n1;                // global로 호출하지 않고 외부의 값에 영향을 줄 수 있는 유일한 방법
        $n1 = $n2;
        $n2 = $temp;
    }

    $a = 10;
    $b = 30;

    print "a: $a, b: $b <br>";
    swap_val($a, $b);
    print "a: $a, b: $b <br>";

    print "-----<br>";

    print "a: $a, b: $b <br>";
    swap_ref($a, $b);
    print "a: $a, b: $b <br>";
?>
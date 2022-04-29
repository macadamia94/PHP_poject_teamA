<?php

// single line comment
/*
    multi line comment
*/
    // $ 는 변수선언
    // 변수가 변하기 위해서는 반드시 $변수 = 값; 의 형태를 하고 있어야 함
    $age = 21; // = 는 대입연산자 (오른쪽에 있는 값을 복사하여 왼쪽에 준다)
    print "<div>" . $age . "</div>"; // . 은 문자열 합치기

    $name;                              // 첫 줄 $name 는 변수 쓰기
    print "<div>" . $name . "</div>";   // 두 번째 줄 $name 는 변수 읽기

    $name = "홍길동";
    print "<div>" . $name . "</div>";

    $name = "장보고";
    print "<div>" . $name . "</div>";   

    $name = 10;
    print "<div>" . $name . "</div>";   

    // 변수명 네이밍 규칙
    /* 
    1. 대소문자 영어, 숫자, 특수기호 _(언더바) 로 이루어져야함
    2. 숫자가 맨 앞에 오면 X
    3. 문자 사이에 빈칸 X (빈칸이 쓰고 싶을 경우 _ 를 사용)
    */

    $a1b = 12;
    print $a1b;

    $_124 = "ㅁㅁㅁ";
    print $_124;

?>
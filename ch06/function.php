<?php
    // 객체 안에 함수가 있으면 method(메소드)라고 부른다.

    // 객체 안이 아니라면 function(함수)라고 부른다.
    // 함수 function, 

    // 함수정의와 함수호출 적는 순서는 상관없음

    $result = sum(10,20);   // <--- 함수호출 (argument, 전달인자)

    print "썸 : $result <br>";
    print "sum : " . sum(30, 40) . "<br>";

    minus(35, 12);
    minus(10, 2);
   
    // function 함수명(parameter , 매개변수)   
                                // 변수는 외부에서 들어오는 값을 의미
    function sum($n1, $n2)  // <--- 함수정의
    {// return 은 빼고 적어도 자동으로 들어가긴 함
        return $n1 + $n2; // return이 있는 경우 (좀 더 유연함)
    }

    function minus($n1, $n2)
    {
        print "minus : " . ($n1 - $n2) . "<br>"; // return이 생략된 경우
    }


   
?>
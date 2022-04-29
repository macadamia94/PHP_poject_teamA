<?php
    $week = array("일", "월", "화", "수", "목", "금", "토");
      // 배열번호 ( 0  ,  1  ,  2  ,  3  ,  4 ,  5  ,   6 ) ---> 인덱스

    print $week[0] . "<br>";    // "0"번 값 표시
    print $week[3] . "<br>";    // "3"번 값 표시

    $week[3] = "wed";           // 인덱스 3번을 "수" 에서 "wed"로 변경
    print $week[3] . "<br>";

    $week[7] = "응?";           // 없던 7번을 생성
    print $week[7] . "<br>";

    $week[9] = "ㅁㅁ";          // 없던 9번을 "ㅁㅁ"으로 생성
    print $week[8] . "<br>";    // 8번은 값을 할당하지 않아서 빈칸으로 표시
    print $week[9] . "<br>"; 
    print $week[11] . "<br>";   // 11번은 값을 할당하지 않아서 빈칸으로 표시
    print "test <br>";
    print "count(week) : " . count($week) . "<br>";

    $test = array("A", "B");     // $test라는 이름의 배열 생성
      // 배열번호 ( 0 ,  1 )
    print count($test) . "<br>"; // $test배열에 값이 몇개 할당되어 있는지 표시

    //$test[10] = "C";             // 인덱스 번호를 직접 넣는 방식; 실수 할 수 있으니 약간 위험
    array_push($test, "C", "D");   // 배열 끝에 순차적으로 추가하는 방식 (배열에 값 추가할 시 사용)
   // 배열번호 (array값, 2,  3 )    // php는 에러가 터지지 않기 때문에 'array_push'를 쓰는게 안전!!!

    print "count(\$test) : " . count($test) . "<br>"; 

    print "test[2] : " . $test[2] . "<br>";
    print "test[2] : " . $test[3] . "<br>";

    print "------------------- <br>";
    
    $test2 = array(1, 3.44, "안녕"); 
    // 타입은 맞춰서 쓰기!!! 이런식으로 제각각 다른 타입을 한 곳에 몰아넣는건 위험!!
    
    print $test2[0] . "<br>";
    print $test2[1] . "<br>";
    print $test2[2] . "<br>";
?>
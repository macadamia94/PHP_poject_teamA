<?php
    /*
        90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
        => 93: A-, 95: A, 98: A+
        80점 이상 B (3점 이하, '-', 7점 이상 '+')
        70점 이상 C (3점 이하, '-', 7점 이상 '+')
        60점 이상 D (3점 이하, '-', 7점 이상 '+')
        60점 미만 F
        0~100 점수가 아니면 "잘못된 값" 출력
    */

    $score = rand(0, 120);
    print "점수 : $score <br>";
    
    if($score > 100 || $score < 0)    // 예외값 설정
    {
        print "잘못된 값";
    }
    else
    {
        $sign = "F";                  // 점수의 디폴트를 F로 설정 아래는 F가 아닌경우
        $symbol = "";                 // '+'와 '-'의 디폴트는 '빈칸'
        $val_1 = intval($score / 10); // $val_1 = $score를 10으로 나눈것을 정수로 변환(intval)한 값 (10의 자리 값)
        switch($val_1)
        {                             // '-'와'+'가 없는 점수 설정
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10;          // $val_2 = $score를 10으로 나눈 값의 나머지 값 (1의 자리 값)
        if($score >= 60)               // $score가 60이상인 경우
        {
            if($score === 100 || $val_2 >= 7)   // $score가 100이거나 $val_2이 7이상이면 '+'
            {
                $symbol = "+";
            }
            else if($val_2 <= 3)                // $val_2이 3이하면 '-'
            {
                $symbal = "-";
            }
        }
        print $sign . $symbal;
    }

?>


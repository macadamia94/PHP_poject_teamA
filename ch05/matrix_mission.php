<?php

    $scores = array(
          // ( 국,  영,  수)
        array(100, 100, 100),   // 0 : 영수
        array(90, 80, 70),      // 1 : 순자
        array(55, 65, 75),      // 2 : 영철
    );

    $names = array("영수", "순자", "영철");     // $scores 안의 각 배열들 이름 부여
    $each_sum = array(0, 0, 0);   // $each_sum = array("영수 점수 합", "순자 점수 합", "영철 점수 합")

    for($i=0; $i<count($scores); $i++)         // 줄
    {
        for($z=0; $z<count($scores[$i]); $z++)  // 칸
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }

    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_sum[$i] . "<br>";
    }
?>
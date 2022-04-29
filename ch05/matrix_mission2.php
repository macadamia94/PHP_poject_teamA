<?php
    /*
    국어
    합계 : ?, 평균:?

    영어
    합계 : ?, 평균:?

    수학
    합계 : ?, 평균:?

    */

    $scores = array(
          // ( 국,  영,  수)
        array(100, 100, 100),
        array(90, 80, 70),
        array(55, 65, 75),
        array(90, 88, 55),
    );

    $cls_names = array("국어", "영어", "수학");
    $cls_sums = array();
    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $cls_sums[$z] += $scores[$i][$z];
        }
    }

    for($i=0; $i<count($cls_sums); $i++)
    {
        $sum = $cls_sums[$i];
        $avg = $sum / count($scores); 
        print $cls_names[$i] . "<br>";
        print "합계 : $sum , 평균 : $avg <br>";
        print "<br>"; 
    }
    
?>
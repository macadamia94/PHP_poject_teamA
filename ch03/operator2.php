<?php
    $num = 10;
    $odd_even = "홀";   // 디폴트를 홀로 둠

    if($num % 2 === 0)
    {
        $odd_even = "짝";
    }

        print "${num}는(은) ${odd_even}수입니다.";
?>
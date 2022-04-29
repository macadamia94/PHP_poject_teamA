<?php
/*
    for문 노터치, continue를 활용하여 홀수만 출력
    1
    3
    5
    7
    ...
    99
*/

    for($i=1; $i<=100; $i++)
    {
        if($i % 2 == 0){continue;}
        print $i . "<br>";
    }
    
?>
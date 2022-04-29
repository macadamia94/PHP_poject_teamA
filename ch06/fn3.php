<?php
    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);    // = 이 있으면 return값이 반드시 있다는 의미
    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

    function sum_from_to($snum, $enum)
    {
        $result = 0;
        for ($i=$snum; $i<=$enum; $i++)
        {
            $result += $i;
        }
        return $result;
        
    }
?>
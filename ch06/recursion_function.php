<?php
    // 재귀(recursion)함수
    // 내가 함수라면 내가 나를 호출하는 것.

    function factorial($num)
    {
        $result = 1;
        for($i=2; $i<=$num; $i++)
        {
            $result *= $i;
        }
        return $result;
    }

    function factorial2($num)
    {
        $result = 1;
        for($i=$num; $i>0; $i--)
        {
            $result *= $i;
        }
        return $result;
    }

    function factorial_rec($num)
    {
        if($num === 1) {return 1;}
        return($num*factorial_rec($num-1)); 
    }

    //절대값 만들기
    function my_abs($val)
    {   
        /*
        if($val < 0) 
        {
            return -$val;
        }
        return $val;
        */
        return $val < 0 ? -$val : $val;
    }
    print "my_abs(-3) : " . my_abs(-3) . "<br>";
    print "my_abs(3) : " . my_abs(3) . "<br>";

    
    $num = 6;
    $result = factorial($num);         // factorial : 3! = 3 x 2 x 1
    $result_2 = factorial2($num);
    $result_rec = factorial_rec($num);
    print "${num}! = $result <br>";
    print "${num}! = $result_2 <br>";
    print "${num}! = $result_rec <br>";
    
?> 
<?php
    $n1 = 9;
    $n2 = 5;

    // 함수호출
    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1, $n2);
    print_div($n1, $n2);
    print_mod($n1, $n2);

    // 함수정의
    function print_result($num1, $symbol, $num2, $result)
    {
        print "$num1 $symbol $num2 = $result <br>";
    }

    function print_sum($num1, $num2)                // 선언부
    {
        $result = $num1 + $num2;                    // 구현부
        print_result($num1, "+", $num2, $result);
    }
    function print_minus($num1, $num2)
    {
        $result = $num1 - $num2;
        print_result($num1, "-", $num2, $result);
    }
    function print_multi($num1, $num2)
    {
        $result = $num1 * $num2;
        print_result($num1, "*", $num2, $result);
    }
    function print_div($num1, $num2)
    {
        $result = $num1 / $num2;
        print_result($num1, "/", $num2, $result);
    }
    function print_mod($num1, $num2)
    {
        $result = $num1 % $num2;
        print_result($num1, "%", $num2, $result);
    }

    print "<br><br>";

    /*
    // MY A

    function print_sum($num1, $num2)
    {
        print "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
    }
    
    function print_minus($num1, $num2)
    {
        print "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
    }
    
    function print_multi($num1, $num2)
    {
        print "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
    }
    
    function print_div($num1, $num2)
    {
        print "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
    }
    
    function print_mod($num1, $num2)
    {
        print "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
    }
    */
    

?>
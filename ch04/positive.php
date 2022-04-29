<?php
    $result = 1;
    if($result > 0)
    {
        // Q. $result 값을 반(1/2)으로 만드세요.
        // ME : $result = $result / 2; 
        // Teacher : $result = $result * 0.5;
        $result *= 0.5;

        print "$result <br>";
        print "Positive <br>";
    }
    else
    {
        print "$result <br>";
        print "Negative <br>";
    }
?>
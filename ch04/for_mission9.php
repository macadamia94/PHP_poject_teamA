<?php
   /* 
   만약에 star값이 3인 경우
    *
    **
    ***

   만약에 star값이 6인 경우
    *
    **
    ***
    ****
    *****
    ******
   */

    $star = rand(3, 10);
    print "star : $star <br>";
    
    for($i=1; $i<=$star; $i++)
    {   
        for($z=1; $z<=$i; $z++)
        {  
            print "* ";
        }
        print "<br>";
    }
    print "<br>";


    $star = rand(3, 10);
    print "star : $star <br>";

    $sum = "";
    for($z=1; $z<=$star; $z++)
        {  
            $sum = $sum . "@ ";
            print "{$sum} <br>";
        }

?>


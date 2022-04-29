<?php
   /* 
   만약에 star값이 2인 경우
    **
    **

   만약에 star값이 4인 경우
    ****
    ****
    ****
    ****
   */

    $star = rand(2, 10);
    print "star : $star <br>";
    for($z=0; $z<$star; $z++)
    {
        for($i=0; $i<$star; $i++)
        {
            print "* ";
        } 
        print "<br>"; 
    }
    
?>


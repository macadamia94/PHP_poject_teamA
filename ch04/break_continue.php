<?php
    print "---------- break ---------- <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {break;}
        print $i . "<br>";
    }

    print "---------- break ---------- <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) {continue;}
        print $i . "<br>";
    }

?>
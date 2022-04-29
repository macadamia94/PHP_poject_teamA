<?php
    $dan = rand(2,9);

    // print_gugudan($dan);
    
    function print_gugudan($dan)
    {
        for($i=1; $i<10; $i++)
        {
            $result = $dan*$i;
            print "$dan X $i = $result <br>";
        }
    }
    
    /*
    print_gugudan_from_to(2, 6);

    function print_gugudan_from_to($sdan, $edan )
    {
        for($dan=$sdan; $dan<=$edan; $dan++)
        {
            for($i=1; $i<10; $i++)
            {
                $result = $dan * $i;
                print "$dan x $i = $result <br>";
            }
            print "<br>";
        }
    }
    */
    print_gugudan_from_to(2, 6);

    function print_gugudan_from_to($sdan, $edan )
    {
        for($dan=$sdan; $dan<=$edan; $dan++)
        {
            print_gugudan($dan);
            print "<br>";
        }
    }

?>
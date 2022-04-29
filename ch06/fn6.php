<?php
    $star = rand(3, 10);

    print_star($star);

    function print_star($star)
    {   
        for($i=0; $i<$star; $i++)
        {
            print "* ";
        }
    }
    print "<br><br>";

    print_star_line($star);

    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print_star($star);
            print "<br>";
        }
    }

    print "<br>";

    print_star_triangle($star);

    function print_star_triangle($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print_star($i);
            print "<br>";
        }
    }
?>
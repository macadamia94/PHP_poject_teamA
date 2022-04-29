<style>
    table { border-collapse : collapse; }
    table, td { border: 1px solid #000; }
    td { padding: 10px; text-align: center;}
</style>

<?php
    $val = rand(2, 5);

    print_table($val);

    function print_table($val)
    {
        $num = 1;
        print "<table>";
        for($i=0; $i<$val; $i++)
        {   
            print "<tr>";
            for($z=1; $z<=$val; $z++)
            {
                print "<td>" . $num++ . "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse : collapse;}
        table, th, td { border : 1px solid #000; }
        th, td {padding : 5px;}
    </style>
</head>
<body>
    <table>
        <?php
            $array = array(
                "Hong" => 182.2,
                "Hwang" => 180.4,
                "Kim" => 176.3,
                "Park" => 174.1
            );

            print "<tr>";
            print "<th> 이름 </th>";
            print "<th> 키 </th>";
            print "</tr>";

            foreach($array as $name => $height)
            {
                print "<tr>";
                print "<td>" . $name . "</td>";
                print "<td>" . $height . "</td>";
                print "</tr>";
            }
        ?> 
    </table>       
</body>
</html>
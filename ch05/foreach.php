<?php
        // $key = ( 0 ,  1 ,  2 ,  3 ,  4 ) 
    $array = array(100, 200, 300, 400, 500);

    foreach($array as $val) // array에 있는 값을 순차적으로 val에 넣어준다
    {
        print $val . "<br>";
    }

    print "----------- <br>";

    foreach($array as $key => $val) // array에 있는 값을 순차적으로 인덱스($key)와 값($val) 순으로 표시
    {
        print $key . " : " . $val . "<br>";
    }

    print "----------- <br>";
?>
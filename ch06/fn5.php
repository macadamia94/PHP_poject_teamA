<?php
    $sunm = 2;
    $enum = 8;
    print_num_from_to($sunm, $enum);

    // [4, 5, 6, 7, 8, 9, 10] 이렇게 출력하게 해주세요.
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다."가 출력되게 해주세요.
    
    function print_num_from_to($sunm, $enum)
    {
        if($enum<$sunm)
        {
            print "<div>종료값이 더 작을 수 없습니다.</div>";
            return;
        }

        print "[";
        for($i=$sunm; $i<=$enum; $i++)
        {
            if($i>$sunm)
            {
                print " , ";
            }
            print  $i;
        }
        print "]";
    }
    
?>
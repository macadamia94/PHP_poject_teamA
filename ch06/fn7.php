<?php
    /*
    3~5 : 봄
    6~8 : 여름
    9~11 : 가을
    12, 1, 2 : 겨울
    나머지 값 : 빈칸
    */
    $mon = rand(0, 15);

    $season = get_season($mon);

    if($season) {print "${mon}월은 ${season}입니다.";}
    else {print "${mon}월은 잘못된 값";}  

    function get_season($mon)
    {   
        if($mon < 1 || $mon > 12)      {return "";} 
        if($mon < 3 || $mon === 12)    {return "겨울";} 
        if($mon < 6)                   {return "봄";} 
        if($mon < 9)                   {return "여름";} 
        else                           {return "가을";}      
    }

?>
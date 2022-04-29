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
        switch($mon)
        {
            case 1: 
            case 2:
            case 12:
                return "겨울";
            case 3: 
            case 4:
            case 5:
                return "봄";
            case 6: 
            case 7:
            case 8:
                return "여름";            
            case 9:
            case 10:
            case 11:
                return "가을";
            default:
                return "";
        }   
    }

?>
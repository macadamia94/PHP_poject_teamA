<?php
    $score = 100;

    switch($score)
    {
        case 100: 
        case 99:
            print $score;
            print "당신의 성적은 A입니다.";
            break;
        
        case 90:
            print "당신의 성적은 AB입니다.";
            break;

        case 80:
            print "당신의 성적은 B입니다.";
            break;

        case 60:
            print "당신의 성적은 C입니다.";
            break;

        case 0:
            print "당신의 성적은 F입니다.";
            break;
        
        default:
            print "디폴트!";
            break;
    }
?>
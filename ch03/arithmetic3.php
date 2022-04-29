<?php
    // 숫자인 경우 : 0 : false , 0 이외의 수 : true
    // 문자열인 경우 : '빈칸' : false , '값' : true
    // 변수인 겨우 : $name = 빈칸 : false , $name = 값 : true
    // && : true 만들기가 힘듬. false만들기가 쉬움. 앞쪽에 false가 날 가능성이 높은 것을 둠
    // || : false 만들기가 힘듬. true만들기가 쉬움. 앞쪽에 true가 날 가능성이 높은 것을 둠

    if(1 && 1 && 1 && 1 && 1 && 1)  // 전부 true 여야지만 true 
    {
        print "나는 진실이다1. <br>";
    }

    if(1 && 1 && 1 && 1 && 1 && 0)
    {
        print "나는 진실이다2. <br>";
    }

    if(0 || 0 || 0 || 0) // 하나라도 true 면 true
    {
        print "I'm true1 <br>";
    }

    if(1 || 0 || 0 || 0)
    {
        print "I'm true2 <br>";
    }
?>
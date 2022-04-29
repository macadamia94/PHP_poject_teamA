<?php
   function multi()
   {
       print "count : " . count(func_get_args()) . "<br>";
       print "[0] : " . func_get_args()[1] . "<br>";    // 값이 없으면 빈칸으로 표시
   }

   multi(2);
   multi(5, 10);
   
   print "----<br>";

   /*
    아규먼트, 인자
    func_num_args​()​ : 인자수 리턴 ( count(func_get_args()) 와 같은 의미 )
    func_get_arg() : 인자값 가져올 때 사용
    func_get_args() : 인자를 배열로 받음
    
    */

    function print_sum()
    {
       print "func_num_args() : " . func_num_args() . "<br>";
       print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
       print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
       print "----<br>";
    }

    print_sum(10, 20);
    print_sum(9, 11, 13);

    function sum()
    {
        print "count : " . count(func_get_args()) . "<br>";
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1, 2) . "<br>";
    print "썸 : " . sum(1, 2, 10) . "<br>";
?>
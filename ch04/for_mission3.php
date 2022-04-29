<?php
   // for 문을 활용하셔서 1~100을 더한 값을 구하시오.
   // 더한 값을 출력하시오.

   /*
   1~3까지 더한 값 (for문이 없는 경우)
   
   $sum = 0;
   $sum = $sum + 1; 
   $sum = $sum + 2; 
   $sum = $sum + 3; 
   print $sum;
   */

   $sum = 0;
   for ($i=1; $i<=100; $i++)
   {
      $sum += $i;    // $sum = $sum + $i
   }
   echo $sum;
?>


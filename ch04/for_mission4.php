<?php
   /*
      지금까지 배운 것 모두 활용하여 
      출력 : [1, 2, 3, 4, 5, 6, 7]
   */

   $end_val = 9; // 매직넘버 : 어떤값을 나타내는 숫자 ; 어떤값을 나타내는지 알 수 있는 변수명을 적는게 좋음
   echo "[";
   for ($i = 1; $i < $end_val; $i++)
   {
      print $i;
      
      if($i < $end_val-1)
      {
         print ",";
      }
   }
   echo "]";

   echo "<br>";

   echo "["; 
   for ($i = 1; $i < $end_val; $i++)
   {
      if($i > 1)
      {
         print ",";
      }
      print $i;
   }
   echo "]";

   echo "<br>";

   echo "[";
      for($i = 1; $i < 7; $i++)
      {
         print $i. ",";
      }
      print $i;
   echo "]";

// 따로따로 생각하는게 중요!
// "[]" 따로, "숫자" 따로, "," 따로
?>


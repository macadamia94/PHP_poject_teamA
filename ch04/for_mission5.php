<?php
   // 구구단 처음부터 끝까지 표시

   for($i=2; $i<10; $i++)
   {
      if($i > 2) {print "------------ <br>";}
      for($z=1; $z<10; $z++)
      {  
         print "$i X $z = ". ($i*$z) . "<br>";
         // $result = $i * $z;
         // print "$i X $z = $result <br>;
      }
   }
?>


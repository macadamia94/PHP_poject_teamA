<?php
   $star = rand(1, 10);
   print "star : $star <br>";
   for ($i=0; $i<$star; $i++)
   {  
      print "*";
   }
   print "<br>";

   $star = rand(1, 10);
   print "star : $star <br>";
   for ($i=$star; $i>0; $i--)
   {  
      print "*";
   }
   print "<br>";
?>


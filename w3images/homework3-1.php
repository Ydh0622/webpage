<?php
   $n = 30;
   $sum = 0;
   $prod = 0;
   $mul = 1;
   for ($prod = 1; $prod <= $n; $prod++) {
       echo ("\n$prod");
       $sum = $sum + $prod;
       $mul = $mul * $prod;
   }
   echo ("<br>\n$sum");
   echo ("<br>\n$mul");
?>


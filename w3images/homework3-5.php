<?php
 $year = 2001;
 $month = 2;
 list($tday, $dday) = preg_split('[ ]',
         date('t w',mktime(0,0,1,$month,1,$year)));
 ?>

 <table width="800" height = "300" border = "3" bordercolor = "blue" cellspacing=0 cellpadding=0>
<tr bgcolor = "skyblue" align = "center">   
    <p><td colspan = "7" ><?=$year?>년 <?=$month?>월 달력</tr></p>
 <tr bgcolor = "pink" align = "right">
    <td>일<td>월<td>화<td>수<td>목<td>금<td>토
</tr>

 <?php
 $col = 0;
 $vtd = "<td>&nbsp;\n";

 for($i = 0; $i < $dday; $i++){
      echo $vtd;
      $col++;
 }

 for($i = 1; $i <= $tday; $i++){
      echo "<td>${i}\n";
      $col++;

      if(($col == 7) && ($col !== $tday)){
           echo "<tr>\n";
           $col = 0;
      }
 }

 while($col > 0 && $col < 7){
    echo $vtd;
    $col++;
 }
 ?>
 </table>  
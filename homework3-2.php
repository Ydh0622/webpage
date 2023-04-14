<?php
  $n = 30;
  for($x = 0; $x < $n; $x++) {
    $data[$x]=rand(0, 100);
    echo "$data[$x] ";
  }
  echo "<br>";
  sort($data);
    for($x=0; $x<$n; $x++) {
    echo "$data[$x] ";
  }
  echo "<br>";


?>
<?php
  // wersja php 7.3.10
  echo PHP_VERSION,'<br>';
  // echo phpinfo();
  // interpolacja
  echo 'a', 'b', 'c','<br>'; // show a show b show c
  echo 'a'. 'b'. 'c'; // add a+b+c show:abc

  $pow=2**10; // 1024
  echo $pow;
// operatory bitowe
// and &, or |, not ~, xor ^, <<, >>

  $bin = 0b1010; // 10
  echo "<br>$bin<br>";
  $bin = $bin << 2; // 101000
  echo "$bin<br>"; // 40

  $bin = $bin >>3; // 101
  echo $bin; // 5
?>

<?php

      // porównanie
      $x=1;
      $y=1.0;

      if($x==$y){
        echo  '$x jest równa $y';
      }
      else{
        echo  '$x nie jest równa $y';
      }
      if($x===$y){
        echo  '<br>$x jest identyczna $y<br>';
      }
      else{
        echo  '<br>$x nie jest identyczna $y<br>';
      }
      echo gettype($x); // integer
      echo gettype($y),'<br>'; // double

      $x=10;
      $y=100;
      echo $x <=> $y;
      echo '<hr>';

      $x=1;
      $x=$x++;
      echo $x,'<br>'; // 1
      $x=++$x;
      echo $x,'<br>'; // 2
      $y=$x++;
      echo $x,'<br>'; // 3
      echo $y,'<br>'; // 2
      $y=++$x*2-1;
      echo $x,'<br>'; // 4
      echo $y,'<br>'; // 7

      // operatory rzutowania
      // bool, int, float, string, array, object, unset
      $test1 = '123abc45';
      $test2 = 0;
      $test3 = 20;

      echo '<br>Typ danych $test1: ',gettype($test1),'<br>';
      $test1=(int)$test1;
      echo $test1; // 123
      echo '<br>Typ danych $test1: ',gettype($test1),'<br>';

      echo '<br>Typ danych $test2: ',gettype($test2),'<br>';
      $test2=(bool)$test2;
      echo $test2; // 123
      echo '<br>Typ danych $test2: ',gettype($test2),'<br>';

      echo '<br>Typ danych $test3: ',gettype($test3),'<br>';
      $test3=(float)$test3;
      echo $test3; // 123
      echo '<br>Typ danych $test3: ',gettype($test3),'<br>';

      // Rozmiar typu integer

      echo '<hr>',PHP_INT_SIZE,'<br>';

      // kontrola typu zmiennych
      // is_int(), is_float(), is_string(), is_bool(), is_null()
      $x=1;
      $y=null;
      $z=20.5;
      echo is_null($y),'<br>';
      echo is_int($x),'<br>';
      echo is_float($z),'<br>';
      echo is_string($x),'<br>';
      echo is_bool($x),'<hr>';

      $w;
      // operator ignorowania błędów @
      echo @gettype($w);
?>

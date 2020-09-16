<?php
//typy danych
// boolean

$prawda=true;
$fałsz=false;

echo $prawda; // 1
echo "$fałsz<br>";

// integer

$bin = 0b1011; // 11
$oct = 011; // 9
$dec = 11; // 11
$hex = 0xA; // 10
echo "$bin<br>";
echo "$oct<br>";
echo "$dec<br>";
echo "$hex<br>";

// heredoc
$name="Janusz";
$surname="Kowalski";

$text=<<<LABEL
<hr>
Imię: $name<br>
Nazwisko: $surname<br>
<hr>
LABEL;

echo $text;

echo <<<L
  heredoc 2<br>
  Imię: $name<br>
L;

// nowdoc

echo <<<'L'
  nowdoc<br>
  Imię: $name<br>
L;

$city="Poznań";
echo "Nazwa zmiennej: \$city, wartość: $city";

?>

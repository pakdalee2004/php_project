<?php

$a = 10;
$b = 20;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";

// Assignmnt
$x = 5;
echo $x;
echo "<br>";

$x = $x + 5;
$x +=5;
echo $x;
echo "<br>";

$x = 5;
echo $x;
echo "<br>";

$x %= 5;
echo $x;
echo "<br>";

// $x ** = 5;
// echo $x;
// echo "<br>";

$x = 5;
echo $x;
echo "<br>";


// Comparison 
$d = 10;
$h = 20;


echo var_dump ($d == $h);
echo "<br>";
echo var_dump ($d === $h);
echo "<br>";
echo var_dump ($d != $h);
echo "<br>";
echo var_dump($d <> $h);
echo "<br>";
echo var_dump ($d < $h);
echo "<br>";
echo var_dump ($d > $h);
echo "<br>";
echo var_dump ($d <= $h);
echo "<br>";
echo var_dump($d >= $h);
echo "<br>";
echo var_dump($d <=> $h);
echo "<br>";

// Increment / Decrement

$p = 5;
$p++;
echo $p; //6
echo "<br>";
++$p;
echo $p++;
echo "<br>";
echo$p;

$m = 5;
$m--;
echo $m; //6
echo "<br>";
--$m;
echo $m--;
echo "<br>";
echo$m;

$r = 5;
$e = 10;
echo "<br>";
echo var_dump (($r <= $e) AND ($r == $e));
echo "<br>";
echo var_dump (($r <= $e) OR ($r == $e));
echo "<br>";
echo var_dump (($r <= $e) || ($r == $e));
echo "<br>";
echo var_dump (($r <= $e) && ($r == $e));
echo "<br>";

// string
$nn = "Sulkiflee";
$mm = "Cheto";

echo $nn.$mm;
echo "<br>";
$nn .= $mm;
echo $mm;
echo"<be>";
echo $nn;




?>
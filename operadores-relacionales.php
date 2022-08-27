<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igual

// var_dump($a == $b);
// var_dump($a == $b2);

// === identico

// var_dump($a === $b);
// var_dump($a === $b2);

// != diferente

// var_dump($a != $b);
// var_dump($a != $b2);

// !== diferente

// var_dump($a !== $b);
// var_dump($a !== $b2);

// < menor que

// var_dump($a < $b);
// var_dump($c < $b);
// var_dump($d < $b);

// > mayor que

// var_dump($a > $b);
// var_dump($c > $b);
// var_dump($d > $b);

// >= mayor o igual que

// var_dump($a >= $b);
// var_dump($c >= $b);
// var_dump($d >= $b);

// <= menor o igual que

// var_dump($a <= $b);
// var_dump($c <= $b);
// var_dump($d <= $b);

// <=> nave espacial

// var_dump(2 <=> 1);
// var_dump(1 <=> 1);
// var_dump(1 <=> 2);
// var_dump(-50 <=> 2);

// ?? funsion de null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito;
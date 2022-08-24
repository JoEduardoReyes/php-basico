<?php

$numerito = "5";

var_dump($numerito);

$numerito = (int) $numerito;

var_dump($numerito);

$dias = 5.89;
$dias = (int) $dias;

var_dump($dias);

$banderita = 1;

$banderita = (bool) $banderita;

var_dump($banderita);

// reto 

//Fácil

$nombre = "Carlos"; // string
$apellido = "Gómez"; // string
$edad = 18; // integer
$aprobado = true;  // boolean

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // integer
$nombre_completo = $nombre . " " . $apellido;  // string
$presento_examen = (bool) 1; // boolean

//Avanzado

$numero_preguntas = 5 + "5"; // number
$numero_respuestas = "5" + 5; // string
$promedio_maximo = $numero_respuestas / 1.0; // integer
$michis = 3 + "5 michis"; // string
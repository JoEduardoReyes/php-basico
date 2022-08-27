<?php

$horas = readline('Ingresa las horas: ');
$minutos = readline('ingresa los minutos: ');
$segundos = readline('ingresa los segundos: ');

$segundos += ($minutos * 60);
$segundos += ($horas * 3600);

echo "El total de segundos es $segundos.";
<?php 

print "Quantos anos você fuma: ";
$anosfumados = (int) fgets(STDIN);

print "Quantos cigarros você fuma por dia: ";
$cigarros_fumados = (int) fgets(STDIN);

$total_cigarros_fumados = $anosfumados*365*$cigarros_fumados;
$minutos_perdidos = $total_cigarros_fumados*10;
$dias_perdidos = round($minutos_perdidos/60/24);

print "Você perdeu $dias_perdidos dias de vida";
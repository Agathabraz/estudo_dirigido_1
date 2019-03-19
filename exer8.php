<?php 

print "Há quantos anos você fuma: ";
$anos_usando_fumo = (int) fgets(STDIN);

print "Quantos cigarros você fuma por dia: ";
$cigarros_usados_dia = (int) fgets(STDIN);

$total_cigarros_fumados = $anos_usando_fumo*365*$cigarros_usados_dia;
$minutos_perdidos = $total_cigarros_fumados*10;
$dias_perdidos = round($minutos_perdidos/60/24);

print "Você perdeu $dias_perdidos dias de vida";
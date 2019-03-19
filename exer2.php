<?php

print "Digite seus dias gastos: ";
$dias = (int) fgets(STDIN);

print "Digite suas horas gastas: ";
$horas = (int) fgets(STDIN);

print "Digite seus minutos gastos: ";
$minutos = (int) fgets(STDIN);

print "Digite seus segundos gastos: ";
$segundos = (int) fgets(STDIN);

$diaseg = $dias*86400;
$horaseg = $horas*3600;
$minseg = $minutos*60;
$segseg = $segundos;

$secperd = $diaseg+$horaseg+$minseg+$segseg;

print "O total de segundos perdidos é de $secperd \n";





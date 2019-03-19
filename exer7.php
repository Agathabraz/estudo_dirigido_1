<?php 

print "Quantos Km você percorreu com o carro alugado: \n\n";
$dis_per = (int) fgets(STDIN);

print "Digite por quantos dias você alugou o carro: \n\n";
$car_dia = (int) fgets(STDIN);

$precokm  = $dis_per / 0.15;
$precodia = $car_dia * 60;

$precototal = $precokm + $precodia;

print "O preço total a se pagar é de R$ $precototal \n\n";
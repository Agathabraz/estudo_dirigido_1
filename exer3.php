<?php

print "Digite o seu sálario: ";
$salario_base = (int) fgets(STDIN);

print "Digite o aumento do seu salário: ";
$aumento = (int) fgets(STDIN);

$porcentagem = $salario_base*$aumento/100;

$total_salario  =  $salario_base + $porcentagem;



print "Seu salário final é igual a: $total_salario ";

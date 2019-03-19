<?php

print "Digite a distância percorrida em Km: ";
$distanciaper = (int) fgets(STDIN);

print "Digite a velocidade média do seu veículo em Km/H: ";
$velocidade = (int) fgets(STDIN);

$tempo_de_viagem = $distanciaper / $velocidade; 

print "Seu tempo de viagem é de $tempo_de_viagem H \n\n";


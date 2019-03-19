<?php 


print "Digite o seu preço do produto: ";
$preco_produto= (int) fgets(STDIN);

print "Digite o desconto: ";
$desconto = (int) fgets(STDIN);

$porcentagem = $preco_produto*$desconto/100;

$total  =  $preco_produto - $porcentagem;

print "Total de desconto: $porcentagem \n\n";

print "O preço final do produto é igual a: $total ";
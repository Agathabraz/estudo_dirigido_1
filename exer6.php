<?php

print "Digite a temperatura em celsius: ";
$celsius = (int) fgets(STDIN);

$f = 9*$celsius/5 + 32;

print "A temperatura convertida para Fahrenheit dá $f \n\n";



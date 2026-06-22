<?php 

print "=================================\n";
print "FIBONACCI\n";
print "=================================\n";
print "Informe a quantidade de termos: ";
$quantidade = intval(trim(fgets(STDIN)));
$numero1 = 0;
$numero2 = 1;
for($i = 0; $i < $quantidade; $i++){
    print "$numero1 ";
    $numero3 = $numero1 + $numero2;
    $numero1 = $numero2;
    $numero2 = $numero3;
}

?>
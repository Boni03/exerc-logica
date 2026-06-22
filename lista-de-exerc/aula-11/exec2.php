<?php 
$nulo = 0;
$par = 0;
$soma = 0;
$media = 0;
$valor = 0;
$divisivel = 0;

for($i = 0; $i < 5; $i++){
    print "Informe o $i valor: ";
    $valor = intval(trim(fgets(STDIN)));
    $soma += $valor;
    $media = $soma / 5;
    if($valor % 5 == 0){
        $divisivel++;
    }
    if($valor == 0){
        $nulo++;
    }
    if($valor % 2 == 0){
        $par += $valor;
}
}

print "=================================\n";
print "A soma dos valores é: $soma\n";
print "=================================\n";
print "A média dos valores é: $media\n";
print "=================================\n";
print "A soma dos valores pares é: $par\n";
print "=================================\n";
print "O total de valores divisíveis por 5 é: $divisivel\n";
print "=================================\n";
print "O total de valores nulos é: $nulo\n";
print "=================================\n";
?>
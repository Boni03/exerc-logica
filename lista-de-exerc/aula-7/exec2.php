<?php 

print "=================================\n";
print "Informe o primeiro nota: ";
$nota1 = floatval(trim(fgets(STDIN)));
print "Informe a segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

$media = ($nota1 + $nota2) / 2;

if($media >= 7){
    print "Você foi aprovado: $media\n";
}else{
    print "Você foi reprovado: $media\n";
}

print "=================================\n";
?>
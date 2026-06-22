<?php 

print "=================================\n";
print "Informe a priemira Nota: ";
$nota = floatval(trim(fgets(STDIN)));

print "Informe a segunda Nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

$media = ($nota + $nota2) / 2;

if($media > 9 && $media <= 10){
    print "APROVEITAMENTO: Nota: A\n"; 
}elseif($media >= 8 && $media <= 8.9){
    print "APROVEITAMENTO: Nota: B\n";
}elseif($media >= 7 && $media <= 7.9){
    print "APROVEITAMENTO: Nota: C\n";
}elseif($media >= 6 && $media <= 6.9){
    print "APROVEITAMENTO: Nota: D\n";
}elseif($media >= 5 && $media <= 5.9){
    print "APROVEITAMENTO: Nota: E\n";
}elseif($media >= 0 && $media <= 4.9){
    print "APROVEITAMENTO: Nota: F\n";
}else{
    print "APROVEITAMENTO: Nota: Inválida\n";
}

print "=================================\n";
?>  
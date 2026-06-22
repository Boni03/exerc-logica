<?php 
print "=================================\n";
print "SELETOR DE PESSOAS\n";
print "=================================\n";

$homem = 0;
$mulher = 0;
do{
print "QUAL O SEXO DA PESSOA? (M/F): ";
$sexo = strtolower(trim(fgets(STDIN)));
PRINT "QUAL A IDADE DA PESSOA? ";
$idade = intval(trim(fgets(STDIN)));
print "QUAL A COR DO CABELO (PRETO/CASTANHO/LOIRO/RUIVO): ";
$cor_cabelo = strtolower(trim(fgets(STDIN)));
print "voce deseja continuar? (S/N): ";
$continuar = strtolower(trim(fgets(STDIN)));

if($sexo == "m" && $idade >= 18 && $cor_cabelo == "castanho"){
    $homem++;
}elseif($sexo == "f" && $idade >= 25 && $idade <= 30 && $cor_cabelo == "loiro"){
    $mulher++;
}
}while($continuar == "s");

print "=================================\n";
print "TOTAL DE MULHERES QUE ATENDEM OS CRITÉRIOS: $mulher\n";
print "TOTAL DE HOMENS QUE ATENDEM OS CRITÉRIOS: $homem\n";
print "=================================\n";

?>
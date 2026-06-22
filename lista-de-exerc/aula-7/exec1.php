<?php 

print "=================================\n";
print "Informe seu ano de nascimento: ";
$ano_nascimento = intval(trim(fgets(STDIN)));
print "Informe o ano atual: ";
$ano_atual = intval(trim(fgets(STDIN)));

$idade = $ano_atual - $ano_nascimento;

if($idade >= 18){
    print "Você pode tirar a CNH\n";
}else{
    print "Você não pode tirar a CNH\n";
}
print "Sua idade é: $idade anos\n";
print "=================================\n";
















?>
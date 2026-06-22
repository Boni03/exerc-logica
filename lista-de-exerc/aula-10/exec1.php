<?php 
print "=================================\n";
print "MENU\n";
print "1. DE 1 A 10\n";
print "2. DE 10 A 1\n";
print "3. Sair\n";
print "=================================\n";
print "Escolha uma opção: ";
$opcao = intval(trim(fgets(STDIN)));

switch($opcao){
    case 1:
        for($i = 1; $i <= 10; $i++){
            print "Número: $i\n";
        }
        break;
    case 2:
        for($i = 10; $i >= 1; $i--){
            print "Número: $i\n";
        }
        break;
    case 3:
        print "Sair\n";
        break;
        
    default:
        print "Opção inválida\n";
        break;
}
print "=================================\n";
?>
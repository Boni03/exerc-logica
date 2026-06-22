<?php

$matriz = [];


for ($linha = 0; $linha < 4; $linha++) {
    for ($coluna = 0; $coluna < 4; $coluna++) {
        print "Informe o valor da posição [$linha][$coluna]: ";
        $matriz[$linha][$coluna] = intval(trim(fgets(STDIN)));
    }
}

do {
    print "\nMENU DE OPCOES\n";
    print "=========================\n";
    print "[1] Mostrar a Matriz\n";
    print "[2] Diagonal Principal\n";
    print "[3] Triangulo Superior\n";
    print "[4] Triangulo Inferior\n";
    print "[5] Sair\n";
    print "======= OPCAO: ";

    $opcao = intval(trim(fgets(STDIN)));

    print "\n";

    switch ($opcao) {
        case 1:
            print "MATRIZ COMPLETA:\n";

            for ($linha = 0; $linha < 4; $linha++) {
                for ($coluna = 0; $coluna < 4; $coluna++) {
                    print $matriz[$linha][$coluna] . "\t";
                }
                print "\n";
            }
            break;

        case 2:
            print "DIAGONAL PRINCIPAL:\n";

            for ($linha = 0; $linha < 4; $linha++) {
                for ($coluna = 0; $coluna < 4; $coluna++) {
                    if ($linha == $coluna) {
                        print $matriz[$linha][$coluna] . "\t";
                    } else {
                        print "0\t";
                    }
                }
                print "\n";
            }
            break;

        case 3:
            print "TRIANGULO SUPERIOR:\n";

            for ($linha = 0; $linha < 4; $linha++) {
                for ($coluna = 0; $coluna < 4; $coluna++) {
                    if ($coluna > $linha) {
                        print $matriz[$linha][$coluna] . "\t";
                    } else {
                        print "0\t";
                    }
                }
                print "\n";
            }
            break;

        case 4:
            print "TRIANGULO INFERIOR:\n";

            for ($linha = 0; $linha < 4; $linha++) {
                for ($coluna = 0; $coluna < 4; $coluna++) {
                    if ($linha > $coluna) {
                        print $matriz[$linha][$coluna] . "\t";
                    } else {
                        print "0\t";
                    }
                }
                print "\n";
            }
            break;

        case 5:
            print "Saindo do programa...\n";
            break;

        default:
            print "Opção inválida!\n";
            break;
    }

} while ($opcao != 5);

?>
<?php

$tabuleiro = [
    "1", "2", "3",
    "4", "5", "6",
    "7", "8", "9"
];

$jogador = "X";
$jogadas = 0;
$vencedor = false;

function mostrarTabuleiro($tabuleiro) {
    print "\n";
    print " " . $tabuleiro[0] . " | " . $tabuleiro[1] . " | " . $tabuleiro[2] . "\n";
    print "---+---+---\n";
    print " " . $tabuleiro[3] . " | " . $tabuleiro[4] . " | " . $tabuleiro[5] . "\n";
    print "---+---+---\n";
    print " " . $tabuleiro[6] . " | " . $tabuleiro[7] . " | " . $tabuleiro[8] . "\n";
    print "\n";
}

function verificarVencedor($tabuleiro, $jogador) {
    $combinacoes = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    foreach ($combinacoes as $combinacao) {
        if (
            $tabuleiro[$combinacao[0]] == $jogador &&
            $tabuleiro[$combinacao[1]] == $jogador &&
            $tabuleiro[$combinacao[2]] == $jogador
        ) {
            return true;
        }
    }

    return false;
}

while ($vencedor == false && $jogadas < 9) {
    mostrarTabuleiro($tabuleiro);

    print "Jogador $jogador, escolha uma posição de 1 a 9: ";
    $posicao = intval(trim(fgets(STDIN)));

    if ($posicao < 1 || $posicao > 9) {
        print "Posição inválida! Escolha de 1 a 9.\n";
        continue;
    }

    $indice = $posicao - 1;

    if ($tabuleiro[$indice] == "X" || $tabuleiro[$indice] == "O") {
        print "Essa posição já foi escolhida! Tente outra.\n";
        continue;
    }

    $tabuleiro[$indice] = $jogador;
    $jogadas++;

    if (verificarVencedor($tabuleiro, $jogador)) {
        $vencedor = true;
        mostrarTabuleiro($tabuleiro);
        print "Jogador $jogador venceu!\n";
    } else {
        if ($jogador == "X") {
            $jogador = "O";
        } else {
            $jogador = "X";
        }
    }
}

if ($vencedor == false) {
    mostrarTabuleiro($tabuleiro);
    print "Deu velha! Ninguém venceu.\n";
}

?>
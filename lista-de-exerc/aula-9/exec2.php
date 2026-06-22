<?php 

print "=================================\n";
print "Informe quantos alunos a turma possui: ";
$alunos = intval(trim(fgets(STDIN)));

$nota_maior = 0;
$nome_maior = "";

for($i = 1; $i <= $alunos; $i++){
    print "Informe a nota do aluno $i: ";
    $nota = floatval(trim(fgets(STDIN)));
    print "Nome do aluno: ";
    $nome = trim(fgets(STDIN));

    if($nota > $nota_maior){
        $nota_maior = $nota;
        $nome_maior = $nome;
    }
    
}

print "A nota maior é do aluno $nome_maior com a nota $nota_maior\n";
print "=================================\n";
?>
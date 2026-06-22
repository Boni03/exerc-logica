<?php 

print "=================================\n";
print "Quantos gols do Real Madrid: ";
$time1 = intval(trim(fgets(STDIN)));
print "Quantos gols do Barcelona: ";
$time2 = intval(trim(fgets(STDIN)));

if($time1 > $time2){
    print "O Real Madrid ganhou\n";
    $resultado = $time1 - $time2;
    print " Gols de diferença: $resultado\n";
}elseif($time2 > $time1){
    print "O Barcelona ganhou\n";
    $resultado = $time2 - $time1;
    print " Gols de diferença: $resultado\n";
}elseif($time1 == $time2){
    print "Empate\n";
}
print "=================================\n";

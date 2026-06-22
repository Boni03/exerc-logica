<?php 

print "=================================\n";
print "Informe o primeiro número: ";
$numero1 = intval(trim(fgets(STDIN)));
print "Informe o segundo número: ";
$numero2 = intval(trim(fgets(STDIN)));

for($i = $numero1; $i <= $numero2; $i++){
    print "Número: $i\n";
}
print "=================================\n";

for($i = $numero1; $i >= $numero2; $i--){
    print "Número: $i\n";
}
print "=================================\n";


?>
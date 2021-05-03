<?php 
// $1data;
// $#data;
// $$data;

function setName($pametro1 = ' Escribe tu nombre aquí') {
    // código fuente
    print "Mi función<br/>" . $pametro1 . "<br/>" . PHP_EOL;

}

setName('Pedro Navarro Monter');
setName('Jaime Vázquez');
setName('Moisés Estrada');
setName('Salvador Noriega');
setName('Jorge Zarza');
setName('Pilar Chávez');
print("<br/>" . PHP_EOL);

function returnName($fullName) {
    return $fullName . PHP_EOL;
}

$fullName = returnName("Pedro Navarro Monter");
print("Tu nombre completo es: {$fullName}<br/>" . PHP_EOL);

print("2 + 2: " . (2 + 2) . "<br/>" . PHP_EOL);

function addition($param1, $param2) {
    $result = ($param1 + $param2);
    print($param1 . ' + ' . $param2 . ':' . $result . PHP_EOL);
    return $result;
}
addition(2, 2);
print("<br/>" . PHP_EOL);

function substraction($param1, $param2) {
    // if << ¿si?
    $result = ($param1 - $param2);
    print($param1 . ' - ' . $param2 . ': ' . $result . PHP_EOL);
    return $result;
}
substraction(2, 20);

function data1($p1, $p3){
    return substraction($p1, $p3);
}

print(PHP_EOL . 'data1() ' . data1(182, 48) . PHP_EOL);

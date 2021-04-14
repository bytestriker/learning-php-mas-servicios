<?php 
// $1data; << error
// $#data; << error
// $$data; << error

function setName($pametro1 = ' Escribe tu nombre aquí') {
    // código fuente
    print "Mi función<br/>" . $pametro1 . "<br/>";
}

setName('Pedro Navarro Monter');
setName('Jaime Vázquez');
setName('Moisés Estrada');
setName('Salvador Noriega');
setName('Jorge Zarza');
setName('Pilar Chávez');
print("<br/>");

function returnName($fullName) {
    return $fullName;
}

$fullName = returnName("Pedro Navarro Monter");
print("Tu nombre completo es: {$fullName}<br/>");


print("2 + 2: " . (2 + 2) . "<br/>");

function addition($param1, $param2) {
    $result = ($param1 + $param2);
    print($param1 . ' + ' . $param2 . ':' . $result);
}
addition(2, 2);
print("<br/>");

function substraction($param1, $param2) {
    // if << ¿si?
    $result = ($param1 - $param2);
    print($param1 . ' - ' . $param2 . ':' . $result);
}
substraction(2, 20);


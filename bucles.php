<?php
$arreglo = [];
$arreglo = array();
/// tipos de arreglos: 
// arreglos con índice numérico.
// arreglos con índice asociativo.
$arreglo = [0 => 'dato1', 1=>'dato2', 2 => 'dato3'];
$arreglo[] = 'dato4';
$arreglo[] = 'dato5';
$arreglo[] = 'dato6';
$arreglo[] = 'dato7';

print_r($arreglo);
print("Array" .PHP_EOL);
print("(" .PHP_EOL);
for ($i=0; $i < count($arreglo); $i++) { 
    print("\t[{$i}] => {$arreglo[$i]}" . PHP_EOL);
}
print(")" . PHP_EOL);
/// ======
// while
print('Trabajando con WHILE ' . PHP_EOL);
print("Array" .PHP_EOL);
print("(" .PHP_EOL);
// bool = verdadero / falso
$condicion = true;
$i=0; // contador
// while ($condicion) {
//     print("\t[{$i}] => $arreglo[$i]" . PHP_EOL);
//     // $i++; /// versión corta de acumulador
//     $i = $i + 1; // versión larga de acumulador
//     ///     7 <= 1
//     ///     7 <= 2
//     if (count($arreglo) <= $i) {
//         $condicion = false;
//         // break;
//     }
// }
// print(")" . PHP_EOL);
$i = 0; // contador
////////     7      <= 0
while (count($arreglo) > $i) {
    print($i);
    print("\t[{$i}] => $arreglo[$i]" . PHP_EOL);
    $i = $i + 1; // versión larga de acumulador
}
print(")" . PHP_EOL);


// while (condición = true| verdadero) { código }
// for (inicio; condicion; incremento)





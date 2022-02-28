<?php
/* 1) Una función que reciba cinco números enteros como parámetros y
muestre por pantalla el resultado de sumar los cinco números (tipo
procedimiento, no hay valor devuelto).*/

function numerosEnteros($n1,$n2,$n3,$n4,$n5){
    $total = $n1 + $n2 + $n3 + $n4 + $n5;
    echo "La suma es: " . $total;
}

numerosEnteros(2,2,3,5,9);
?>
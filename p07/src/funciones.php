<?php
global $num; // Declare global variable
$min = 1;
$max = 999;
$impar;
$par;

function divisible5(){
    if ($num % 5 == 0) {
        $num = $par;
        echo "El número $num es divisible entre 5.";
    } else {
        echo "El número $num  NO es divisible entre 5.";
    }
}

function randomNum($min, $max){
    $num = rand($min, $max);
    echo "El número aleaorio es: $num";
}


function esImparOPar(){
    if ($num % 2 == 0) {
        $num = $par;
        echo "El número $num es par.";
    } else {
        $num = $impar;
        echo "El número $num es impar.";
    }
}

randomNum();
imprimeVariable();
esImparOPar();
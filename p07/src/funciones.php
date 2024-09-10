<?php
$_GET = 'variableGlobal'; // Declare global variable
$_min = 1;
$_max = 999;
$_impar;
$_par;

function randomNum(){
    $_GET = rand($_min, $_max);
}

function imprimeVariable() {
    global $_GET; // Access global variable within function scope
    echo $_GET . ": es tu variable global";
}

function esImparOPar($_GET){

    if ($_GET % 2 == 0) {
        $_GET = $_par;
        echo "El número $_GET es par.";

    } else {
        $_GET = $_impar;
        echo "El número $_GET es impar.";
    }

}

randomNum();
imprimeVariable();
esImparOPar();
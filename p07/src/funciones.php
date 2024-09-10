<?php
$_GET = 'variableGlobal'; // Declare global variable
$_min = 1;
$_max = 999;
function imprimeVariable() {
    global $_GET; // Access global variable within function scope
    echo $_GET . " Es tu variable global";
}

imprimeVariable();
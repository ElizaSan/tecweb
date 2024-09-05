<?php
// Enter your code here, enjoy!
$edad = 30;

echo '<br>';
echo $edad;
echo '<p>'.$edad.'</p>'; 

$arra = array('Ale', 'San', 'Jim');
$arra2 = ['Miri', 'San']; 
$diccionario = array('mi_indice' => 'leer', 'segundo_indice' => 'otro valor');
#arreglos asociativos, vulgarmente se conocen como diccionarios
$diccionario2 = ['mi_indice' => 'leer', 'segundo_indice' => 'otro valor'];

print_r($arra);
echo '<br>';
var_dump($arra); #conocer que tipo de dato
echo '<br>';
print_r($arra2);
echo '<br>';
print_r($diccionario);

echo '<br>' ."CICLO foreach VERSION 1". '<b>';
echo '<br>';	
	foreach($diccionario as $valor){
	echo $valor. '<br>';
	}

echo '<br> CICLO foreach VERSION 2 <b>';
echo '<br>';	
	foreach($diccionario as $clave => $valor){
	echo $clave. '=>' .$valor. '<br>';
	}

function prueba(){
	echo '<br> Una oracion simple aqui <br>';
	
	$GLOBALS['oracion'] = 'nueva oracion';
}

prueba();
echo $oracion;

function prueba2($nuevo){
echo '<br> Estrella de rock ' . $nuevo.  '<br>';
}

prueba2('Kiss');
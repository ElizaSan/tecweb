


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    
</head>
<body>
<?php
header('Content-Type: text/html; charset=UTF-8');
?>


<h1>Ejercicios PHP</h1>

<?php


    echo "<br><h2> Ejercicio 1</h2>";
    echo "<b>".'$_myvar: Valida - '."</b>"."Las variables pueden empezar con guion bajo.";
    echo "<br><b>".'$_7var: Valida - '."</b>"."Las variables pueden empezar con guion bajo.";
    echo "<b>".'myvar: invalida - '."</b>"."Las variables en PHP deben comenzar con un signo de pesos.<br>";
    echo "<b>".'$myvar: Valida - '."</b>"."Las variables en PHP deben comenzar con un signo de pesos.<br>";
    echo "<b>".'$var7: Valida - '."</b>"."Las variable pueden comenzar con signo de pesos y está seguida de letras y un número.<br>";
    echo "<b>".'$_element1: Valida - '."</b>"."Las variables pueden empezar con guion bajo.<br>";
    echo "<b>".'$house*5: Invalida - '."</b>".'Aunque comienza correctamente con $, contiene un carácter especial (*), que no está permitido en los nombres de variables.'."<br>";
   
     echo "<br><h2> Ejercicio 2</h2>";
    $a = "ManejadorSQL";
    echo "$a<br>";
    $b = 'MySQL';
    echo "$b<br>";
    $c = &$a;
    echo "$c<br>";

    $a = "PHP server";
    echo "$a<br>";
    $b = &$a;
    echo "$b<br>";
    echo "<br> Lo que ocurrio es que reasignamos el valor en la variable a, y como b esta apuntando a la direccion de a entonces esto cambio tambien el contenido de b ya que ahora apunta a PHP server<br>";
    unset($a,$b,$c);

    echo "<br><h2> Ejercicio 3</h2>";
    $a = "PHP5";
    var_dump($a);
    echo "<br>";

    $z[] = &$a;
    var_dump($z); 
    echo "<br>";

    $b = "5a version de PHP";
    var_dump($b);
    echo "<br>";

    $c = $b * 10;
    var_dump($c);
    echo "<br>";

    $a .= $b;
    var_dump($a); 
    echo "<br>";

    $b *= $c;
    var_dump($b); 
    echo "<br>";

    $z[0] = "MySQL";
    var_dump($z); 
    echo "<br>";

    echo "<h2> Ejercicio 4</h2>";
    foreach ($GLOBALS as $key => $value) {
        echo "\$$key = ";
        var_dump($value);
        echo "<br>";
    }
    unset($a,$b,$c,$z);

    echo "<h2> Ejercicio 5</h2>";
    $a = "7 personas";
    $b = (integer) $a;
    $a = "9E3";
    $c = (double) $a;
    echo "$a";
    echo "<br>";
    echo "$b";
    echo "<br>";
    echo "$c";
    unset($a,$b,$c);

    
    echo "<h2> Ejercicio 6</h2>";

    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    echo "Valor de \$a: " . var_export($a, true) . "<br>";
    echo "Valor de \$b: " . var_export($b, true) . "<br>";
    echo "Valor de \$c: " . var_export($c, true) . "<br>";
    echo "Valor de \$d: " . var_export($d, true) . "<br>";
    echo "Valor de \$e: " . var_export($e, true) . "<br>";
    echo "Valor de \$f: " . var_export($f, true) . "<br>";

        
    echo "<h2> Ejercicio 7</h2>";

   
    echo "Versión de PHP: " . phpversion() . "<br>";
    if (isset($_SERVER['SERVER_SOFTWARE'])) {
        $apacheVersion = $_SERVER['SERVER_SOFTWARE'];
        preg_match('/Apache\/([^\s]+)/', $apacheVersion, $matches);
        $apacheVersion = $matches[1] ?? 'No disponible';
        echo "Versión de Apache: " . $apacheVersion . "<br>";
    } else {
        echo "Versión de Apache: No disponible<br>";
    }

    if (isset($_SERVER['SERVER_OS'])) {
        echo "Sistema operativo del servidor: " . $_SERVER['SERVER_OS'] . "<br>";
    } else {
        echo "Sistema operativo del servidor: No disponible<br>";
    }

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        echo "Idioma del navegador: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
    } else {
        echo "Idioma del navegador: No disponible<br>";
    }

    ?>

<p about=""
     resource="https://www.w3.org/TR/rdfa-syntax"
     rel="dc:conformsTo" xmlns:dc="http://purl.org/dc/terms/">
    <a href="https://validator.w3.org/markup/check?uri=referer"><img
      src="https://www.w3.org/Icons/valid-xhtml-rdfa" alt="Valid XHTML + RDFa" height="31" width="88" /></a>
  </p>

</body>
</html>
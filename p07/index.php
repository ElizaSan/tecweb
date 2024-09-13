<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
</head>
<body>

    <h2>Practica 7. Uso de funciones y variables GET y POST en PHP</h2>

    <h2>Ejercicio 1</h2>
    <p>Comprobar si un número es un múltiplo de 5 y 7</p>


    <br>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="post">
        Ingresa el numero: <input type="text" name="numero"><br>
        <input type="submit">
    </form>

    <?php
            if(isset($_POST['numero']))
            {
                $num = $_POST['numero'];
                if ($num%5==0 && $num%7==0)
                {
                    echo '<h3>Respuesta: El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
                }
                else
                {
                    echo '<h3>Respuesta: El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
                }
            }
        ?>

<h2>Ejercicio 2</h2>
    <p>Generación repetitiva de tres números aleatorios</p>

    <br>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="post">
        Generar tres num random
        <input name= "numero2" type="submit">
    </form>

    <?php
                if(isset($_POST["numero2"]))
                    {
                        $matriz = [[]];
                        $indice = 0;
                        $condicion = false;
                        while($condicion == false){
                            $arreglo = [];
                            for ($i=0; $i < 3; $i++) { 
                                $arreglo[$i]=rand(100,999);
                                if ($i!=2) {
                                    echo $arreglo[$i]. ", ";
                                }else{
                                    echo $arreglo[$i];
                                }
            
                            }   
                            $matriz[$indice++] = $arreglo;
                            
                            echo "</br>";
                            if($arreglo[0]%2!=0 && $arreglo[1]%2==0 && $arreglo[2]%2!=0){
                                $condicion=true;
                            }
                        }
                        $numeros = $indice*3;
                        echo "<p>". $numeros . " números obtenidos en " .$indice . " iteraciones"; 
                    } 
    ?>

<h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>

    <br>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="GET">
        Elige un numero: <input type="text" name="numero3"><br>
        <input type="submit">
    </form>

    <?php
            if(isset($_GET['numero3']))
            {
                
                    $num = $_GET['numero3'];
                    $numero3 = 0;
                    do {
                        $numero3 = rand();
                        
                    } while ($numero3%$num==0);
                    echo "<p> El primer aleatorio que es multiplo de tu numero elegido es:  ". $numero3 ."<p>"; 
                
            }
        ?>
    
    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice.</p>

    <form action="http://localhost/tecweb/practicas/p07/index.php" method="GET">
        Crear arreglo <input name="numero4" type="submit">
    </form>

    <br>
    <?php
    
    if(isset($_GET['numero4'])){
        $letras = [];
        for ($i=97; $i < 123 ; $i++) { 
          $letras["$i"] = chr($i);
        }
        echo "<table>  <tr> <th>Valor</th> <th>Letra</th> </tr>";
        foreach ($letras as $item => $value){
          echo "<tr>";
          echo "<td>".$item."</td>";
          echo "<td>".$value."</td>"; 
          echo "</tr>";
      }   
        echo "</table>";
      }

    ?>


<h2>Ejercicio 5</h2>
    <p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de
    sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de
    bienvenida apropiado.</p>

    <form action="http://localhost/tecweb/practicas/p07/index.php" method="POST">
        Ingresa edad: <input type="text" name="edad" >
        Ingresa sexo:<input type="text" name="sexo" >
        <input type="submit">
        
    </form>


    <?php
    
    if(isset($_POST['edad']) && isset($_POST['sexo'])){

        if ($edad>=18 && $edad<=35)
        {
            if($sexo == "femenino"){
                echo '<h3>Bienvenida, usted está en el rango de edad permitido.</h3>';
            }
        }
        else
        {
            echo '<h3>Lo siento, no cuenta con los requisitos.</h3>'; 
        }
    }


    ?>

<h2>Ejercicio 6</h2>
<p> </p>



</body>
</html>
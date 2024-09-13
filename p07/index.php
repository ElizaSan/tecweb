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

    


</body>
</html>
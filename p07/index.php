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
                    echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
                }
                else
                {
                    echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
                }
            }
        ?>

<h2>Ejercicio 2</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%2==0)
            {
                echo '<h3>R= El número '.$num.' es par</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' es impar</h3>';
            }
        }
    ?>

    


</body>
</html>
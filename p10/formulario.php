<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      ol, ul { 
      list-style-type: none;
      }
    </style>
    <title>Formulario</title>
</head>
<body>
    <h1>Registro de datos de productos</h1>

    <form id="miFormulario" onsubmit="" method="post">
        <fieldset>
            <legend>Actualiza los datos del producto:</legend>
            <ul>
                <li><label>Nombre:</label> <input type="text" name="name" value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>"></li>
                <li><label>Marca:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
                <li><label>Modelo:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
                <li><label>Precio:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
                <li><label>Detalles:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
                <li><label>Unidades:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
                <li><label>Imagen:</label> <input type="text" name="age" value="<?= !empty($_POST['edad'])?$_POST['edad']:$_GET['edad'] ?>"></li>
            </ul>
        </fieldset>
        <p>
            <input type="submit" value="ENVIAR">
        </p>
    </form>
</body>
</html>
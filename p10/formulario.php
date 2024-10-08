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
                <li><label>Nombre:</label> <input type="text" name="nombre" value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>"></li>
                <li><label>Marca:</label> <input type="text" name="marca" value="<?= !empty($_POST['marca'])?$_POST['marca']:$_GET['marca'] ?>"></li>
                <li><label>Modelo:</label> <input type="text" name="modelo" value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>"></li>
                <li><label>Precio:</label> <input type="text" name="precio" value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>"></li>
                <li><label>Detalles:</label> <input type="text" name="detalle" value="<?= !empty($_POST['detalle'])?$_POST['detalle']:$_GET['detalle'] ?>"></li>
                <li><label>Unidades:</label> <input type="text" name="unidad" value="<?= !empty($_POST['unidad'])?$_POST['unidad']:$_GET['unidad'] ?>"></li>
                <li><label>Imagen:</label> <input type="text" name="imagen" value="<?= !empty($_POST['imagen'])?$_POST['imagen']:$_GET['imagen'] ?>"></li>
            </ul>
        </fieldset>
        <p>
            <input type="submit" value="ENVIAR">
        </p>
    </form>
</body>
</html>
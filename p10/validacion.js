

function validarFormulario()() {

    //Variables
    var nombre = document.getElementById("form-name").value;
    var nombre = document.getElementById("form-name").value;
    var nombre = document.getElementById("form-modelo").value;
    var precio = document.getElementById("form-precio").value;
    var detalle = document.getElementById("form-detalle").value;
    var unidad = document.getElementById("form-unidad").value;
    var imagen = document.getElementById("form-imagen").value;

    //NOMBRE
    if (nombre.trim().length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;


    //MARCA
    if (marca.length === 0 ) {
        alert("Selecciona una marca.");
        return false;
    }
    return true;


    //MODELO
    if (modelo.length === 0 || modelo.length > 25) {
        alert("El modelo no debe ser un campo vacío y debe tener menos de 25 caracteres.");
        return false;
    }
    return true;

    //PRECIO
    if (precio.length === 0 || nombre.length > 99.99) {
        alert("El precio debe ser mayor a 99.99.");
        return false;
    }
    return true;

    //DETALLE
    if (detalle.length > 250) {
        alert("La descripción debe tener menos de 250 caracteres.");
        return false;
    }
    return true;

    //UNIDAD
    if (unidad.length === 0) {
        alert("Las unidades deben ser mayores o iguales a 0.");
        return false;
    }
    return true;

    //IMAGEN
    if (imagen.length === 0) {
        
    }
    return true;


}




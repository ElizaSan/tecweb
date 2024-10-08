

function validarNombre() {
    var nombre = document.getElementById("form-name").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarMarca() {
    var nombre = document.getElementById("form-marca").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarModelo() {
    var nombre = document.getElementById("form-modelo").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarPrecio() {
    var nombre = document.getElementById("form-precio").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarDetalle() {
    var nombre = document.getElementById("form-detalle").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarUnidad() {
    var nombre = document.getElementById("form-unidad").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}

function validarImagen() {
    var nombre = document.getElementById("form-imagen").value;
    if (nombre.length === 0 || nombre.length > 100) {
        alert("El nombre no debe ser un campo vacío y debe tener menos de 100 caracteres.");
        return false;
    }
    return true;
}


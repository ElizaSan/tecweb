
function getDatos(){
    var nombre = prompt("Nombre: ", "");
    var edad = prompt("Edad: ", 0);
    
    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3> Eddad: '+edad+'</h3>';
}

function holaMundo(){
    var div = document.getElementById('01');
    div.innerHTML = 'Hola mundo';
}

function muestraDatosDefault() {
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;
    var div = document.getElementById('02');
    div.innerHTML = 'Te llamas '+ nombre + ', tienes ' + edad +  ' años, mides ' + altura + ' m.  ¿Eres casado?: ' + casado + '.';
}

function rellenarDatos() {    
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');

    var div = document.getElementById('03');
    div.innerHTML = 'Hola '+ nombre + ', así que tienes ' + edad +  ' años.'
}
    
function suma() {
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);

    var div = document.getElementById('04');
    div.innerHTML = 'La suma es '+ suma + '. El producto es ' + producto + ' .'
}

function aprobadoONo() {
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');
    if (nota>=4) {
        var div = document.getElementById('05');
        div.innerHTML = nombre + ' esta aprobado con un ' + nota
    }
}

function mayorDosNum() {
    var div = document.getElementById('06');
    var num1,num2;
    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    if (num1>num2) {
        div.innerHTML = 'El número mayor es ' + num1
    }
    else {
        div.innerHTML = 'El número mayor es ' + num2
    }
}

function promedioTresNotas() {
    var nota1,nota2,nota3;
    var div = document.getElementById('07');

    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');

    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    var pro;
    pro = (nota1+nota2+nota3)/3;
    if (pro>=7) {
        div.innerHTML = 'Aprobado'
    }
    else {
        if(pro>=4){
            div.innerHTML = 'Regular'
        }
        else{
            div.innerHTML = 'Reprobado'
        }
    }
}

function numeroEntre1y5() {
    var valor;
    var div = document.getElementById('08');
    valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '' );
    //Convertimos a entero
    valor = parseInt(valor);
    switch (valor) {
        case 1:  div.innerHTML = 'uno';
            break;
        case 2: div.innerHTML = 'dos';
            break;
        case 3: div.innerHTML = 'tres';
            break;
        case 4:div.innerHTML = 'cuatro';
            break;
        case 5: div.innerHTML = 'cinco';
            break;
        default: div.innerHTML ='debe ingresar un valor comprendido entre 1 y 5.';
    }
}

function colorVentana() {
    var col;
    col = prompt('Ingresa el color con que quiera pintar el fondo de la ventana (rojo, verde, azul)', '' );
    switch (col) {
        case 'rojo': document.body.style.backgroundColor='#ff0000';
            break;
        case 'verde': document.body.style.backgroundColor='#00ff00';
            break;
        case 'azul': document.body.style.backgroundColor='#0000ff';
            break;
    }
}

function bucleNumeros() {
    var div = document.getElementById('10');
    var x;
    x = 1;
    texto =''
    while (x<=100) {
        texto += x + "<br>"; 
        x = x + 1;
    }
    div.innerHTML = texto 
}

function suma5numeros() {
    var div = document.getElementById('11');
    var x = 1;
    var suma = 0;
    var valor;
    while (x <= 5){
        valor = prompt('Ingresa el valor:', '');
        valor = parseInt(valor);
        suma = suma + valor;
        x = x + 1;
    }
    div.innerHTML ="La suma de los valores es "+suma+"<br>";
}
function conocerDigitos() {
    var div = document.getElementById('12');
    var valor;
       texto = ""
    
    valor = prompt('Ingresa un valor entre 0 y 999:', '');
    valor = parseInt(valor);
    texto = texto + 'El valor ' + valor + ' tiene ';
        if (valor < 10){
            texto = texto + '1 dígito. <br>'
        }
        else{
            if (valor < 100) {
                texto = texto + '2 dígitos.<br>'
            }
            else {
                texto = texto + '3 dígitos.<br>'
            }
        }
    
    div.innerHTML = texto
}

function muestraNumeros() {
    var div = document.getElementById('13');
    var f;
    var texto = ""
    for(f=1; f<=10; f++){
        texto += f + "<br> ";
    }
    div.innerHTML = texto
    
}

function cuidadoMensajeSinFuncion() {
    var div = document.getElementById('14');
    text ="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";
    text +="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";
    text +="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";
    div.innerHTML = text
}

function cuidadoMensajeConFuncion() {
    var div = document.getElementById('15');
    let text
    function mostrarMensaje() {
        text ="Cuidado<br>";
        text +="Ingresa tu documento correctamente<br>";
        return text
    }
    text = mostrarMensaje();
    text += mostrarMensaje();
    text += mostrarMensaje();
    div.innerHTML = text
}

function muestraRango() {
    var div = document.getElementById('16');
    function mostrarRango(x1,x2) {
        var inicio;
        var text = ""
        for(inicio=x1; inicio<=x2; inicio++) {
            text += inicio+' '; 
        }
        div.innerHTML = text
    }
    var valor1,valor2;
    valor1 = prompt('Ingresa el valor inferior:', '');
    valor1 = parseInt(valor1);
    valor2 = prompt('Ingresa el valor superior:', '');
    valor2 = parseInt(valor2);
    mostrarRango(valor1,valor2);
}

function convierte1a5LetraIF() {
    
    var div = document.getElementById('17');
    function convertirCastellano(x) {
        if(x==1)
        return "uno";
        else
        if(x==2)
        return "dos";
        else
        if(x==3)
        return "tres";
        else
        if(x==4)
        return "cuatro";
        else
        if(x==5)
        return "cinco";
        else
        return "valor incorrecto";
        }
        var valor = prompt("Ingresa un valor entre 1 y 5", "");
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        div.innerHTML = r;
}

function convierte1a5LetraCASE() {
    
    var div = document.getElementById('18');
    function convertirCastellano(x) {
        switch (x) {
        case 1: return "uno";
        case 2: return "dos";
        case 3: return "tres";
        case 4: return "cuatro";
        case 5: return "cinco";
        default: return "valor incorrecto";
        }
        }
        var valor = prompt("Ingresa un valor entre 1 y 5", "");
        valor = parseInt(valor);
        var r = convertirCastellano(valor);
        div.innerHTML =r;
}

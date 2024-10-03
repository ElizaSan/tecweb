function e1() {
    var e1 = document.getElementById('01')
    e1.innerHTML = "Hola mundo"
    
}
function e2() {
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;
    var e2 = document.getElementById('02');
    e2.innerHTML = 'Su nombre es '+ nombre + ', tiene' + edad +  ' años, mide: ' + altura + ' y es casado:' + casado;
}
function e3() {    
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');

    var elemento = document.getElementById('03');
    elemento.innerHTML = 'Hola '+ nombre + ', asi que tienes ' + edad +  ' años'
}
    
    function e4() {
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);

    var elemento = document.getElementById('04');
    elemento.innerHTML = 'La suma es '+ suma + ' El producto es ' + producto 
}
function e5() {
    
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');
    if (nota>=4) {
        var elemento = document.getElementById('05');
        elemento.innerHTML = nombre + ' esta aprobacon con un ' + nota
    }
}
function e6() {
    var elemento = document.getElementById('06');
        
    var num1,num2;
    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    if (num1>num2) {
    elemento.innerHTML = 'el mayor es' + num1
    }
    else {
        elemento.innerHTML = 'el mayor es' + num2
    }
}
function e7() {
    var nota1,nota2,nota3;
    var elemento = document.getElementById('07');

    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');

    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);

    var pro;
    pro = (nota1+nota2+nota3)/3;
    if (pro>=7) {
        elemento.innerHTML = 'Aprobado'
        }
        else {
            if (pro>=4) {
        elemento.innerHTML = 'Regular'
            }
            else {
        elemento.innerHTML = 'Reprobado'
            }
    }
}
function e8() {
    
    var elemento = document.getElementById('08');
    var valor;
valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '' );
//Convertimos a entero
valor = parseInt(valor);
switch (valor) {
case 1:  elemento.innerHTML = 'uno';

break;

case 2:  elemento.innerHTML = 'dos';

break;

case 3:elemento.innerHTML = 'tres';

break;

case 4:elemento.innerHTML = 'cuatro';

break;

case 5:elemento.innerHTML = 'cinco';

break;

default:elemento.innerHTML ='debe ingresar un valor comprendido entre 1 y 5.';
}
}

function e9() {
    var col;
col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)', '' );
switch (col) {
case 'rojo': document.body.style.backgroundColor='#ff0000';

break;

case 'verde': document.body.style.backgroundColor='#00ff00';

break;

case 'azul': document.body.style.backgroundColor='#0000ff';

break;

}
}
function e10() {
    var elemento = document.getElementById('10');
    var x;
    x=1;
    texto =''
    while (x<=10) {
        texto += x + "<br>";
        
        x=x+1;
     }
     elemento.innerHTML = texto 
}
function e11() {
    var elemento = document.getElementById('11');
    var x=1;
var suma=0;
var valor;
while (x<=5){
valor = prompt('Ingresa el valor:', '');
valor = parseInt(valor);
suma = suma+valor;
x = x+1;
}
elemento.innerHTML ="La suma de los valores es "+suma+"<br>";
}
function e12() {
    var elemento = document.getElementById('12');
    var valor;
       texto = ""
    do{
        valor = prompt('Ingresa un valor entre 0 y 999:', '');
        valor = parseInt(valor);
        texto = texto + 'El valor '+valor+' tiene ';
        if (valor<10){
            texto = texto + 'Tiene 1 dígitos <br>'
        }
        else{
            if (valor<100) {
                texto = texto + 'Tiene 2 dígitos<br>'
            }
            else {
                texto = texto + 'Tiene 3 dígitos<br>'
            }
        }
    }while(valor!=0);
    elemento.innerHTML = texto
}

function e13() {
    var elemento = document.getElementById('13');
    var f;
    var texto = ""
for(f=1; f<=10; f++)
{
  texto  +=f+" ";
}
elemento.innerHTML = texto
}
function e14() {
    var elemento = document.getElementById('14');
    text ="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";
    text +="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";
    text +="Cuidado<br>";
    text +="Ingresa tu documento correctamente<br>";

    elemento.innerHTML = text
}
function e15() {
    var elemento = document.getElementById('15');
    let text
    function mostrarMensaje() {
        text="Cuidado<br>";
        text +="Ingresa tu documento correctamente<br>";
        return text
        }
        text = mostrarMensaje();
        text +=mostrarMensaje();
        text +=mostrarMensaje();
        elemento.innerHTML = text
}
function e16() {
    var elemento = document.getElementById('16');
    function mostrarRango(x1,x2) {
        var inicio;
        var text = ""
        for(inicio=x1; inicio<=x2; inicio++) {
        text += inicio+' '; 
        
        }
        elemento.innerHTML = text
        }
        var valor1,valor2;
        valor1 = prompt('Ingresa el valor inferior:', '');
        valor1 = parseInt(valor1);
        valor2 = prompt('Ingresa el valor superior:', '');
        valor2 = parseInt(valor2);
        mostrarRango(valor1,valor2);
}
function e17() {
    
    var elemento = document.getElementById('17');
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
        elemento.innerHTML =r;
}
function e18() {
    
    var elemento = document.getElementById('18');
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
        elemento.innerHTML =r;
}
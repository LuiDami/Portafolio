/*Funciones utiles */


function compruebaIBAN(entrada) {
    var salida = false;
    const EXPREG = /^[A-Z]{2}[0-9]{22}$/;
    var iban = "" + entrada;
    var pais = iban.slice(0, 2);
    var digPais = iban.slice(2, 4) // 4 y 2 diguitos
    var entidad = iban.slice(4, 8); /* 4 digitos */
    var sucursal = iban.slice(8, 12); /* 4 digitos */
    var dc = iban.slice(12, 14); /* 2 digitos */
    var cuenta = iban.slice(14, 24); /* 10 digitos */
    var auxiliar;

    var nSumaD1 = [4, 8, 5, 10, 9, 7, 3, 6];
    var nSumaD2 = [1, 2, 4, 8, 5, 10, 9, 7, 3, 6];
    const PAIS = 142800;

    var dc1 = 0;
    var dc2 = 0;
    var dp = 0;
    var strdc = "";
    var strdp = "";

    auxiliar = entidad + sucursal;
    for (let i = 0; i < nSumaD1.length; i++) {
        dc1 = dc1 + (nSumaD1[i] * parseInt(auxiliar[i]));
    }
    for (let i = 0; i < nSumaD2.length; i++) {
        dc2 = dc2 + (nSumaD2[i] * parseInt(cuenta[i]));
    }
    dc1 = 11 - (dc1 % 11); //console.log();
    dc2 = 11 - (dc2 % 11); //console.log();
    if (dc1 == 10) {
        dc1 = 1;
    } else if (dc1 == 11) {
        dc1 = 0;
    }
    if (dc2 == 10) {
        dc2 = 1;
    } else if (dc2 == 11) {
        dc2 = 0;
    }
    auxiliar = entidad + sucursal + dc + cuenta + PAIS;
    dp = BigInt(98) - (BigInt(auxiliar) % BigInt(97));
    if (parseInt(dp).toFixed(0).length == 1) {
        strdp = "0" + parseInt(dp).toFixed(0);
    } else {
        strdp = parseInt(dp).toFixed(0);
    }

    strdc = dc1.toFixed(0) + dc2.toFixed(0);
    if (dc == strdc && digPais == strdp && EXPREG.test(iban)) {
        salida = true;
    }
    return salida;
} //retorna true si IBAN es correcto y false si es incorrecto

function compruebaDNI(palabra = "") {

    var validador = false; // si es false no cumple las condiciones

    var lent = false; // maximo 9 caracteres
    var esletra = false;
    var coinci = false;
    var esnum = false;
    var numpal = parseInt(palabra[0] + palabra[1] + palabra[2] + palabra[3] + palabra[4] + palabra[5] + palabra[6] + palabra[7]); //numero en int del dni
    var resto = numpal % 23;
    var letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    var numeros = "0123456789";
    var contador = 0;
    /*si tiene el tamaño del dni*/
    if (palabra.length == 9) {
        lent = true;
    }
    /*///////////////////////////////////////////////////////////*/
    /*si tiene la letra de letras*/
    for (let index = 0; index < (letras.length); index++) {
        if (palabra[8] == letras[index]) {
            esletra = true;
            index = letras.length;
        }
    }
    /*////////////////////////////////////////////////////////*/
    /*comprueva que los 8 primeros son digitos*/
    for (let i = 0; i < (palabra.length - 1); i++) {
        for (let x = 0; x < numeros.length; x++) {
            if (palabra[i] == numeros[x]) {
                contador++
            }
        }
    }
    if (contador == 8) {
        esnum = true;
    }
    /*///////////////////////////////////////////////////////*/


    /*verifica que la letra corresponde al numero*/
    if (palabra[8] == letras[resto]) {
        coinci = true;
    }
    /*/////////////////////////////////////////////////////////*/

    /*comprueva que todas los requisitos son validos*/
    if (lent && esletra && coinci && esnum) {
        validador = true;
    }
    return validador
} // retorna true si DNI cumple las condiciones

function numAleatSinRep(max, min, cantidad) {
    var salida = [];
    var text = "";
    var boleano;
    var numeros = [];
    var ayuda;
    numeros[0] = Math.floor(Math.random() * (max - min)) + min;

    for (i = 1; i < cantidad; i++) {
        boleano = false;
        ayuda = Math.floor(Math.random() * (max - min)) + min;
        for (let x = 0; x < numeros.length; x++) {
            if (ayuda == numeros[x]) {;
                boleano = true;
                x = numeros.length;
            }
        }
        numeros[i] = ayuda;
        if (boleano) {
            i--;
        }
    }
    for (let a = 0; a < numeros.length; a++) {
        if ((a + 1) % 12 == 0) { // maximo 12 numeros por fila
            text = text + numeros[a] + "<br>";
        } else {
            text = text + numeros[a] + "   ";
        }
    }
    salida[0] = numeros;
    salida[1] = text;
    return salida;
} // genera numeros una cantidad de numeros aleatorias entre min y max sin repetirse
// [0] retorna el array con los numeros
// [1] retorna uns string con los numeros

function nAleatorio(max, min) {
    return Math.floor(Math.random() * ((max + 1) - min) + min);
} //genera numero aleatorio entre max y min

function enviarCorreo(nombreCorreo, emailCorreo, asuntoCorreo, mensajeCorreo) {
    $.ajax({
        url: "controller/controllerCorreo.php",
        type: "POST",
        asynt: true,
        dataType: "",
        data: {
            /**
             * aqui va los $_POST
             */
            nombreCorreo,
            emailCorreo,
            asuntoCorreo,
            mensajeCorreo
        },

        beforeSend: function() {
            /**
             * mientras recibe la respuesta
             */
            $("#respuestaCorreo").html("Enviando mensaje")
        },
        success: function(response) {
            /**
             * si todo va bien
             */
            $("#respuestaCorreo").html(response)
        },
        error: function(error) {
            /**
             * si ha dado algun error
             */
            console.log("da un error");
            console.log(error);
            $("#respuestaCorreo").html(nombreCorreo)
        }
    });
}

function validarFormularioMail() {
    nombreCorreo = document.getElementById("nombreCorreo");
    email = document.getElementById("emailCorreo");
    asuntoCorreo = document.getElementById("asuntoCorreo");
    mensajeCorreo = document.getElementById("mensajeCorreo");

    respuestaCorreo = document.getElementById("respuestaCorreo");


    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(email.value)) {
        if (nombreCorreo.value.length > 0 && asuntoCorreo.value.length > 0) {
            if (mensajeCorreo.value.length > 9) {
                enviarCorreo(nombreCorreo.value, email.value, asuntoCorreo.value, mensajeCorreo.value);
            } else {
                respuestaCorreo.innerHTML = "El campo Mensaje tiene que tener un mínimo de 10 caracteres";
            }
        } else {
            respuestaCorreo.innerHTML = "El nombre y el asunto son campos obligatorios";
        }

    } else {
        respuestaCorreo.innerHTML = "Formato de correo invalido";
    }
}

function scrollLento(tiempo = 800) {
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, tiempo, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
}
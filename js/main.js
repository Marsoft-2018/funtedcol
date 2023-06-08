
// $("#simbolos").click(function(){
// 	$("#contenidoPrincipal").load("php/simbolos.php",function(){
// 		$("html, body").delay(20).animate({scrollTop: $('#contenidoPrincipal').offset().top }, 2000);
// 	});
// });

function acerca(){
	$("html, body").delay(20).animate({scrollTop: $('#acerca').offset().top }, 2000);
}

function mision(){
	$("html, body").delay(20).animate({scrollTop: $('#mision-div').offset().top }, 2000);
}

function vision(){
	$("html, body").delay(20).animate({scrollTop: $('#vision-div').offset().top }, 2000);
}

function simbolos(){
	$("html, body").delay(20).animate({scrollTop: $('#simbolos').offset().top }, 2000);
}

function resena(){
	$("html, body").delay(20).animate({scrollTop: $('#reseña').offset().top }, 2000);
}

function filosofia(){
	$("html, body").delay(20).animate({scrollTop: $('#filosofia').offset().top }, 2000);
}

function valores(){
	$("html, body").delay(20).animate({scrollTop: $('#valores').offset().top }, 2000);
}

function himno(){
	$("html, body").delay(20).animate({scrollTop: $('#himno').offset().top }, 2000);
}


function galeria(){	
	top.location.href = "http://www.funtedcol.com.co/galeria.html";

}

function preinscribir(){
    var mensaje = document.getElementById('respuesta');
    let accion = "Agregar";
    let primerNombre = document.getElementById("priNombre").value;
    let segundoNombre = document.getElementById("segNombre").value;
    let primerApellido = document.getElementById("priApellido").value;
    let segundoApellido = document.getElementById("segApellido").value;
    let tipoDocumento = document.getElementById("tipoDocumento").value;
    let documento = document.getElementById("numeroDocumento").value;
    let email = document.getElementById("email").value;
    let telefono = document.getElementById("telefono").value;
    let programa = document.getElementById("programa").value;
    axios.post('../php/Controladores/preinscripcionController.php', {
            accion:accion,
            primerNombre : primerNombre,
            segundoNombre : segundoNombre,
            primerApellido : primerApellido,
            segundoApellido : segundoApellido,
            tipoDocumento:tipoDocumento,
            documento: documento,
            email : email,
            telefono : telefono,
            programa : programa
        })
        .then(function(res) {
          if(res.status==200) {
            mensaje.innerHTML = res.data;
          }
        })
        .catch(function(err) {
          mensaje.innerText = 'Error de conexión ' + err;
        }
    );
}

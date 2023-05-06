
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
	top.location.href = "http://www.colegiosanrafael.com.co/galeria.html";

}

function contacto(){
    let accion = "Contacto";
    let nombre = $("#nombre").val();
    let email = $("#email").val();
    let telefono = $("#telefono").val();
    let mensaje = $("#mensaje").val();
    $.ajax({
        url: "php/enviar_email.php",
        type: "post",
        data:{accion:accion,nombre:nombre,email:email,telefono:telefono,mensaje:mensaje},
        success:function(data){
            $("#respuesta").html(data);
        },
        error:function(data){
            console.log("Error: "+data);
        }
    });
    return false;
}


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

function preinscribir(){
    alert("Preinscibiendo");
    var mensaje = document.getElementById('respuesta');
        let accion = "agregar";
    let primerNombre = document.getElementById("priNombre").value;
    let segundoNombre = document.getElementById("segNombre").value;
    let primerApellido = document.getElementById("priApellido").value;
    let segundoApellido = document.getElementById("segApellido").value;
    let email = document.getElementById("email").value;
    let celular = document.getElementById("celular").value;
    let programa = document.getElementById("programa").value;
    axios.post('../php/Controladores/preinscripcionController.php', {
                data:{
            accion:accion,
            primerNombre : primerNombre,
            segundoNombre : segundoNombre,
            primerApellido : primerApellido,
            segundoApellido : segundoApellido,
            email : email,
            celular : celular,
            programa : programa
        }
      })
        .then(function(res) {
          if(res.status==200) {
            mensaje.innerHTML = res.data;
          }
          console.log(res);
        })
        .catch(function(err) {
          mensaje.innerText = 'Error de conexión ' + err;
        });
//     fetch('../php/email/enviar.php')
//   .then(response => response.body)
//   .then(data => console.log(data));
    // fetch('../php/email/enviar.php', {
    //     method: 'POST',
    //     headers: {
    //         "Content-Type": "application/json",
    //     },
    //     body: JSON.stringify({accion:accion, primerNombre : primerNombre, segundoNombre : segundoNombre, primerApellido : primerApellido, segundoApellido : segundoApellido, email : email, celular : celular, programa : programa})
    // })
    // .then(res => res.json())
    // .then(res=> {
    //     console.log(res);        
    // });
    
    // return false;
    // let accion = "agregar";
    // let primerNombre = $("#priNombre").val();
    // let segundoNombre = $("#segNombre").val();
    // let primerApellido = $("#priApellido").val();
    // let segundoApellido = $("#segApellido").val();
    // let email = $("#email").val();
    // let celular = $("#celular").val();
    // let programa = $("#programa").val();
    // $.ajax({
    //     url: "../php/enviar.php",
    //     type: "post",
    //     data:{
    //         accion:accion,
    //         primerNombre : primerNombre,
    //         segundoNombre : segundoNombre,
    //         primerApellido : primerApellido,
    //         segundoApellido : segundoApellido,
    //         email : email,
    //         celular : celular,
    //         programa : programa
    //     },
    //     success:function(data){
    //         $("#respuesta").html(data);
    //     },
    //     error:function(data){
    //         console.log("Error: "+data);
    //     }
    // });
}

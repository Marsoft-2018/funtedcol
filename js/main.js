
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
            programa : programa,
            estado:1
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

function registrar(){
  var mensaje = document.getElementById('respuesta');
  let accion = "Agregar";
  let estado = 1;
  let primerNombre = document.getElementById("priNombre").value;
  let segundoNombre = document.getElementById("segNombre").value;
  let primerApellido = document.getElementById("priApellido").value;
  let segundoApellido = document.getElementById("segApellido").value;
  let tipoDocumento = document.getElementById("tipoDocumento").value;
  let documento = document.getElementById("numeroDocumento").value;
  let email = document.getElementById("email").value;
  let telefono = document.getElementById("telefono").value;
  let programa = document.getElementById("programa").value;
  let tipoRegistro = document.getElementById("tipoRegistro").value;
  switch (tipoRegistro) {
    case "matricula":
      estado = 2;
      break;
    case "certificacion":
      estado = 3;
      break;
  }

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
          programa : programa,
          estado:estado
      })
      .then(function(res) {
        if(res.status==200) {
          //mensaje.innerHTML = res.data;
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: res.data,
            showConfirmButton: false,
            timer: 5500
          });
          recargar(estado);
        }
      })
      .catch(function(err) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: err
        });
      }
  );
}

function eliminarRegistro(id,mod){
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Confime la eliminación',
    text: "esta seguro de elimiar este registro",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, continuar',
    cancelButtonText: 'No, cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      axios.post('../php/Controladores/preinscripcionController.php', {
        accion:"Eliminar",
        id:id
    })
    .then(function(res) {
      if(res.status==200) {
        //mensaje.innerHTML = res.data;
        swalWithBootstrapButtons.fire(
          'Eliminado',
          res.data,
          'success'
        );
        recargar(mod);
    
      }
    })
    .catch(function(err) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: err
      });
    }
);

    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      
    }
  });
}


function cambiarEstado(id,estado){
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Confimar cambio de estado',
    text: "Confirma a continuación el cambio de estado para el registro seleccionado",
    icon: 'info',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      axios.post('../php/Controladores/preinscripcionController.php', {
        accion:"cambiarEstado",
        estado:estado,
        id:id
    })
    .then(function(res) {
      if(res.status==200) {
        //mensaje.innerHTML = res.data;
        swalWithBootstrapButtons.fire(
          'Cambio de estado',
          res.data,
          'success'
        );
        recargar(estado);
    
      }
    })
    .catch(function(err) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: err
      });
    }
);

    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      
    }
  });
}

function recargar(mod){
  window.location.href = "index.php?mod="+mod;
}
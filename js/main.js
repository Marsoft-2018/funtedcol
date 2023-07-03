
function galeria(){	
	top.location.href = "http://www.funtedcol.com.co/galeria.html";

}

// function preinscribir(){
//     var mensaje = document.getElementById('respuesta');
//     let accion = "Agregar";
//     let primerNombre = document.getElementById("priNombre").value;
//     let segundoNombre = document.getElementById("segNombre").value;
//     let primerApellido = document.getElementById("priApellido").value;
//     let segundoApellido = document.getElementById("segApellido").value;
//     let tipoDocumento = document.getElementById("tipoDocumento").value;
//     let documento = document.getElementById("numeroDocumento").value;
//     let email = document.getElementById("email").value;
//     let telefono = document.getElementById("telefono").value;
//     let programa = document.getElementById("programa").value;
//     axios.post('../php/Controladores/preinscripcionController.php', {
//             accion:accion,
//             primerNombre : primerNombre,
//             segundoNombre : segundoNombre,
//             primerApellido : primerApellido,
//             segundoApellido : segundoApellido,
//             tipoDocumento:tipoDocumento,
//             documento: documento,
//             email : email,
//             telefono : telefono,
//             programa : programa,
//             estado:1
//         })
//         .then(function(res) {
//           if(res.status==200) {
//             mensaje.innerHTML = res.data;
//           }
//         })
//         .catch(function(err) {
//           mensaje.innerText = 'Error de conexión ' + err;
//         }
//     );
// }

const formPreinscripcion = document.querySelector('.formPreinscripcion');
formPreinscripcion.addEventListener('submit',function(e){
  e.preventDefault();
    var mensaje = formPreinscripcion.querySelector('#respuesta');
    const accion = "Agregar";
    const primerNombre = formPreinscripcion.querySelector("#priNombre").value;
    const segundoNombre = formPreinscripcion.querySelector("#segNombre").value;
    const primerApellido = formPreinscripcion.querySelector("#priApellido").value;
    const segundoApellido = formPreinscripcion.querySelector("#segApellido").value;
    const tipoDocumento = formPreinscripcion.querySelector("#tipoDocumento").value;
    const documento = formPreinscripcion.querySelector("#numeroDocumento").value;
    const email = formPreinscripcion.querySelector("#email").value;
    const telefono = formPreinscripcion.querySelector("#telefono").value;
    const programa = formPreinscripcion.querySelector("#programa").value;
    mensaje.innerHTML =   "preinscribir desde evenlistener";
    axios.post('php/Controladores/preinscripcionController.php', {
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
});

const formPreinscripcion2 = document.querySelector('.formPreinscripcion');

formPreinscripcion2.addEventListener('submit',function(e){
  e.preventDefault();
    var mensaje = formPreinscripcion2.querySelector('#respuesta');
    const accion = "Agregar";
    const primerNombre = formPreinscripcion2.querySelector("#priNombre").value;
    const segundoNombre = formPreinscripcion2.querySelector("#segNombre").value;
    const primerApellido = formPreinscripcion2.querySelector("#priApellido").value;
    const segundoApellido = formPreinscripcion2.querySelector("#segApellido").value;
    const tipoDocumento = formPreinscripcion2.querySelector("#tipoDocumento").value;
    const documento = formPreinscripcion2.querySelector("#numeroDocumento").value;
    const email = formPreinscripcion2.querySelector("#email").value;
    const telefono = formPreinscripcion2.querySelector("#telefono").value;
    const programa = formPreinscripcion2.querySelector("#programa").value;
    mensaje.innerHTML =   "preinscribir desde evenlistener";
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
});

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

var formPass = document.querySelector("#formPass");


formPass.addEventListener("submit",function (event) {
  event.preventDefault();
  const usuario = formPass.querySelector('#usuario').value;
  const contrasena1 = formPass.querySelector('#contrasena1').value;
  const contrasena2 = formPass.querySelector('#contrasena2').value;
  const accion = "cambiarPassword";
  formPass.querySelector('#error').innerHTML = "";
  if(contrasena1 != contrasena2){
    formPass.querySelector('#error').innerHTML = '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden</div>';
    return;
  }
  axios.post('../php/Controladores/login.php?accion='+accion+"&usuario="+usuario+"&contrasena="+contrasena1).then(function(res) {    
      if(res.status==200) {
        /*formPass.querySelector('#error').innerHTML = '<div class="alert alert-success" role="alert">'+res.data+'</div>';*/
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: res.data,
          showConfirmButton: false,
          timer: 5500
        });
      }
    }).catch(function(err) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: err
      });
    });
  }
);

document.querySelector("#scroll-arriba").addEventListener("click",function(){
  window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
});

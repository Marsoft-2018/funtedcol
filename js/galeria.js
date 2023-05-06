function previsualizar(fil){
    $("#progreso").css("width","0%");
    var imagen = fil.files[0];
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

        $(".imagen").val("");
        alert("Error al subir la imagen \n ¡La imagen debe estar en formato JPG o PNG!");
    }else if(imagen["size"] > 2000000){

        $(".imagen").val("");
        alert("Error al subir la imagen \n ¡La imagen no debe pesar más de 2Mb");
    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);

        })

    }
};

function listar_galeria(){
    $.ajax({
        type: "POST",
        url: "../controlador/ctrlGaleria.php",
        data: {accion:"listar"},
        success: function(response){
            $("#listad2").html(response);
        },
        error: function(er){
            console.error("Error: "+er);
        }
    });
}


function nuevaFoto(){
    $.ajax({
        type: "POST",
        url:"../controlador/ctrlGaleria.php",
        data:{accion:"Nuevo"},
        success:function(response){
            $("#formulario").html(response);
        },
        error: function(err){
            console.log("El error es: "+err);
        }
    });
}

function editarGaleria(id){
    $.ajax({
        type: "POST",
        url:"../controlador/ctrlGaleria.php",
        data:{accion:"Editar",id:id},
        success:function(response){
            $("#formulario").html(response);
        },
        error: function(err){
            console.log("El error es: "+err);
        }
    });
}


function agregarFoto(){
    guardarFoto("Agregar");
    listar_galeria();
}

function modificarFoto(){
    guardarFoto("Modificar");
    listar_galeria();
}

function eliminarFoto(id){
    $.ajax({
        type: 'POST',
        url: "../controlador/ctrlGaleria.php",
        data:  {accion:"Eliminar", id:id}, 
        success: function(data){                
            //$("#datosFotos").html(data);
            console.log("respose: "+data);
            listar_galeria();
        },
        error: function(data){
            console.log('Error: '+data);
        }
    }); 
}

function guardarFoto(accion){
    $("#progreso").css("width","0%");
    var imagen = $('#imagen').prop('files')[0];             
    var formulario = new FormData();    
    formulario.append('id', $('#id').val() );
    formulario.append('imagen',imagen);
    formulario.append('idCategoria',$("#idCategoria").val());
    formulario.append('descripcion',$("#descripcion").val());
    formulario.append('anho',$("#anho").val());

    $.ajax({
        xhr:function(){
          var xhr = new window.XMLHttpRequest();  
          xhr.upload.addEventListener("progress",function(e){
             if(e.lengthComputable){
                 var porcentaje = parseInt((e.loaded / e.total) * 100);
                 $("#progreso").css("width",porcentaje+"%");
                 $("#porcentaje").html(porcentaje+"%");
             } 
          }, false);
          return xhr;
        },
        type: 'POST',
        url: "../controlador/ctrlGaleria.php?accion="+accion,
        data:  formulario,                        
        processData:false,
        cache:false,
        contentType: false,
        success: function(data){                
            //$("#datosFotos").html(data);
            $("#porcentaje").html(data);
            //console.log("respose: "+data);
        },
        error: function(data){
            console.log('Error: '+data);
        }
    }); 
}


function listarProductos(busqueda){

    fetch("./listar.php ",{
        method:"POST",
        body: busqueda
    }).then(response => response.text()).then(response =>{
        //const tabla = document.getElementById('resultado');
        console.log(response);  
        if(response != ""){
            msj.innerHTML = '';
            resultado.innerHTML =response;

        }else{
            resultado.innerHTML = '';
            msj.innerHTML = `<div class="alert alert-danger" role="alert">
                            No se ha encontrado registros
                        </div>`;
        }
        

    })

}


registrar.addEventListener("click", () =>{

    fetch("./registrar.php",{
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if(response == "ok"){
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Registrado con exito',
                showConfirmButton: false,
                timer: 1500
              })    
              frm.reset();
              listarProductos();
        }else{
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Modificado con exito',
                showConfirmButton: false,
                timer: 1500
              })
              registrar.classList.remove('btn-success');
              registrar.classList.add('btn-primary');
              registrar.value = "Registrar";    
              idp.value = "";
              frm.reset();
              listarProductos();
        }
    }); 
}); 

listarProductos();
function eliminar(id){

    Swal.fire({
        title: 'Seguro de elimnar este elemento?',
        text: "Esta accion no se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            fetch("./eliminar.php",{

                method: "POST",
                body: id

            }).then(response => response.text()).then(response =>{
               
                console.log(response);
                if(response === "ok"){
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Eliminado con exito',
                        showConfirmButton: false,
                        timer: 1500
                      })    
                     listarProductos(); 
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Proceso de eliminacion fallido'
                       
                      })
                }
                
            });

        }
      })
}

function editar(id){
    fetch("./editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        console.log(response);
        idp.value = response.id;
        codigo.value =response.codigo;
        producto.value =response.producto;
        precio.value =response.precio;
        cantidad.value = response.cantidad;
        registrar.classList.remove('btn-primary');
        registrar.classList.add('btn-success');
        registrar.value = "Actualizar";
        

    });

}

buscar.addEventListener('keyup', ()=>{

    const valor = buscar.value;

    if(valor === ""){

        listarProductos();

    }else{
        listarProductos(valor);
    }

})
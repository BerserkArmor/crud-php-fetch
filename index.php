<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body >
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-4">
                <div class="card">
                <div class="card-header bg-dark text-light font-weight-bold ">
                <h5 class="card-title text-center ">Registrar</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="frm">
                        <div class="form-group">
                             <label for="">Codigo</label>
                             <input type="hidden" name="idp" id="idp" value="">
                             <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="">Producto</label>
                             <input type="text" name="producto" id="producto" placeholder="Producto" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="">Precio</label>
                             <input type="text" name="precio" id="precio" placeholder="Precio" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="">Cantidad</label>
                             <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" class="form-control">
                        </div>
                        <div class="form-group">
                             <input type="button" value="Registrar" id="registrar"  class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 ml-auto " id="msj">
                   
                </div>
                <div class="col-lg-6 ml-auto">
                    <form action="" method="post">
                   
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <div class="input-group-text "><i class="fas fa-search"></i></div>
                            </div>
                            <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar... ">
                         </div>
                    </form>
                </div>
            </div>
            <table class="table table-hover ">
                <thead class="bg-dark text-light font-weight-bolder">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>        
                <tbody id="resultado" >

                    </tbody>
                </table>
             
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./script.js"></script>
</body>
</html>
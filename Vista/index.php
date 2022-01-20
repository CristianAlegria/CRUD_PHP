<html lang="es">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Aplicación CRUD PHP</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
      </head>
      <body>

      <div class="container mt-3">
          <div class="row">
             <div class="col-md-12">               
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Crear Empleado
              </button>
               
             <hr>

             <form method="post" class="form-inline">
                <div class="form-group mr-3">
                  <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
            </form>
             </div>
          </div>
       </div>

      <div class="container">
          <div class="row">
             <div class="col-md-12">
                <h2 class="mt-3">Tabla Empleados</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>
                            <a href="">🗑️Borrar</a>
                            <a href="">✏️Editar</a>
                          </td>
                        </tr>                        
                      </tbody>
                    </table>
              </div>
           </div>
      </div> 
      

      <?php include('crear_empleado.php'); ?>
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
      <!-- Javascript Bootstrap -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
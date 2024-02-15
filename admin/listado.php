<?php
// Inicia la sesión
session_start();

// Verifica si la variable de sesión "user_id" está seteada, lo que indica que el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    // Si no está autenticado, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN NXTEP</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>


</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include 'aside.php'; ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include 'header.php'; ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="align-items-center justify-content-between mb-9">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">LISTADO MENTORES</h5>
                  </div>
                  <div>
                  <table id="miTabla" class="display">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Empresa</th>
                              <th>Acciones</th>
                              <!-- Agrega más encabezados según tu estructura de datos -->
                          </tr>
                      </thead>
                      <tbody>

                      </tbody>
                  </table>
                  </div>
                </div> 
                 
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 px-6 text-center">
          <p></p>
        </div>
      </div>
    </div>
  </div>

<!-- Modal de Edición -->
<div class="modal" id="modalEditar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de Edición -->
        <form id="formEditar">
          <div class="form-group">
            <label for="editNombres">Nombres:</label>
            <input type="text" class="form-control" id="editNombres" name="editNombres">
          </div>
          <div class="form-group">
            <label for="editApellidos">Apellidos:</label>
            <input type="text" class="form-control" id="editApellidos" name="editApellidos">
          </div>
          <div class="form-group">
            <label for="editEmpresa">Empresa:</label>
            <input type="text" class="form-control" id="editEmpresa" name="editEmpresa">
          </div>
          <!-- Puedes agregar más campos según tu estructura de datos -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarCambios()">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>


    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Incluye Bootstrap JS -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Incluye DataTables CSS y JS desde el CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
 
    <!-- Incluye tus otros scripts -->
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- Finalmente, inicializa DataTables -->
    <script>
        $(document).ready(function () {
            // Realiza la solicitud AJAX
            $.ajax({
                url: 'data.php', // Ruta de tu archivo PHP que devuelve los datos
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    // Inicializa DataTables
                    $('#miTabla').DataTable({
                        data: response,
                        columns: [
                            { data: 'id' },
                            { data: 'nombres' },
                            { data: 'apellidos' },
                            { data: 'empresa' },
                            {
                                data: null,
                                render: function (data, type, row) {
                                  // Agrega un enlace para editar con el ID como parámetro
                                  return '<a class="btn btn-primary btn-sm" href="editar.php?id=' + row.id + '">Editar</a>' +
                                      ' <button class="btn btn-danger btn-sm" onclick="eliminar(' + row.id + ')">Eliminar</button>';
                                }
                            }
                            // Agrega más columnas según tus datos
                        ]
                    });
                },
                error: function (error) {
                    console.error('Error en la petición AJAX:', error);
                }
            });
        });


        // Función para manejar la acción de eliminar
        function eliminar(id) {
            // Pregunta al usuario si realmente desea eliminar el registro
            if (confirm('¿Estás seguro de que deseas eliminar este registro?')) {
                // Realiza una petición AJAX para eliminar el registro en el servidor
                $.ajax({
                    url: 'eliminar_registro.php', // Ruta de tu archivo PHP que realiza la eliminación
                    type: 'POST',
                    data: { id: id }, // Envía el ID del registro que se va a eliminar
                    dataType: 'json',
                    success: function (response) {
                        
                       location.reload();
                    },
                    error: function (error) {
                        console.error('Error en la petición AJAX:', error);
                    }
                });
            }
        }
    </script>

</body>

</html>
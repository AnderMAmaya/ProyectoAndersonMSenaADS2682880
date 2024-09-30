<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controladores/usuarios/listado_usuarios.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #87CEEB">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class=" container-fluid">
            <div class="row mb-2 text-center">
                <div class="col-sm-12">
                    <h1 class="m-0" style="font-size: 50px; font-family: 'Arial', sans-serif;"><b> LISTADO DE PRODUCTOS</b></h1>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios Registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombres</th>
                                        <th>Correo Electrónico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // me sirve para desplegar toda la información que existe en la base de datos
                                    foreach ($datos_usuarios as $datos_usuario) {
                                        // echo "hola";
                                    ?>
                                        <!--escribimos en lenguaje html-->
                                        <tr>
                                            <td><?php echo $datos_usuario['id_usuario'] ?></td>
                                            <td><?php echo $datos_usuario['nombres'] ?></td>
                                            <td><?php echo $datos_usuario['email'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombres</th>
                                        <th>Correo Electrónico</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>

<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<?php

include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controladores/productos/listado_productos.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: #87CEEB;  justify-content: center; align-items: center">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <h1 class="m-0" style="font-size: 50px; font-family: 'Arial', sans-serif;"><b>LISTADO DE PRODUCTOS</b></h1> <!-- modifico el nombre para que aparezca el portal Listado de productos -->

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
                            <h3 class="card-title">productos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>
                        <div class="card-body" style="display: block;">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 2%;">id_producto </th>
                                        <th style=" width: 10%;">Fabricante</th>
                                        <th style=" width: 40%;">Descripción</th>
                                        <th style=" width: 10%;">Precio</th>
                                        <th style="width: 20%">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // me sirve para desplegar toda la información que existe en la base de datos
                                    foreach ($datos_productos as $datos_productos) {

                                    ?>
                                        <!--escribimos en lenguaje html-->
                                        <tr>
                                            <td class="text-center align-middle"><?php echo $datos_productos['id_producto'] ?></td>
                                            <td class="text-center align-middle"><?php echo $datos_productos['marca'] ?></td>
                                            <td class="text-center align-middle"><?php echo $datos_productos['descripcion'] ?></td>
                                            <td class="text-center align-middle"><?php echo '$' . $datos_productos['precio'] ?></td>
                                            <td class="text-center align-middle">
                                                <img src="<?php echo $datos_productos['imagen'] ?>" style="max-width: 100%; display: block; margin: 0 auto;" alt="">
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id_producto</th>
                                        <th>Fabricante</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
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
<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #87CEEB">
    <!-- Content Header (Page header) -->
    <div class=" content-header">
        <div class="container-fluid">

            <div class="row" style="display: flex; justify-content: center; align-items: center; ">
                <div class="col-md-10 " style="display: flex; flex-direction: column;">
                    <div class=" card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese los datos del nuevo producto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controladores/productos/creacion.php" method="post"> <!--falta controlado de creacion de producto-->
                                        <div class="form-group">
                                            <label for="">Fabricante</label>
                                            <input type="text" name="marca" class="form-control" placeholder="Ingrese la Marca del fabricante del producto...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">descripcion</label>
                                            <input type="text" name="descripcion" class="form-control" placeholder="Escriba aquí la descripcion del producto...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">precio</label>
                                            <input type="precio" name="precio" class="form-control" placeholder="Escriba aquí el precio del producto...">
                                        </div>
                                        <div class="form-group">
                                            <label for="imagen">URL de la imagen</label>
                                            <input type="text" name="imagen" class="form-control" placeholder="Escriba aquí la URL de la imagen del producto...">
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <a href="" class="btn btn-secondary">cancelar</a>
                                            <button class="btn btn-primary">Guardar</button>
                                        </div>


                                </div>
                            </div><!-- /.container-fluid -->
                        </div>
                        <!-- /.content-header -->

                        <!-- Main content -->
                        <div class="content">
                            <div class="container-fluid">

                            </div><!-- /.container-fluid -->
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->
                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                        <div class="p-3">
                            <h5>Title</h5>
                            <p>Sidebar content</p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/parte2.php');
?>
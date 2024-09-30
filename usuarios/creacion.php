<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #87CEEB">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2" style="display: flex; justify-content: center; align-items: center; ">
                <div class="col-md-10" style="display: flex; flex-direction: column;">
                    <div class=" card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese los datos del nuevo usuario</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controladores/usuarios/creacion.php" method="post"> <!--falta controlado de creacion de usuario-->
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" name="nombres" class="form-control" placeholder="Escriba aquí el nombre del usuario...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Escriba aquí el correo electronico...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="text" name="password" class="form-control" placeholder="Escriba aquí la contraseña...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirmar Contraseña</label>
                                            <input type="text" name="password-verificacion" class="form-control" placeholder="confirme la contraseña...">
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
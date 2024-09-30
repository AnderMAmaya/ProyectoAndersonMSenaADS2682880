<?php
include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('./app/controladores/usuarios/listado_usuarios.php');
include('./app/controladores/productos/listado_productos.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #87CEEB;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid text-center">
            <div class="row mb-2">
                <div class="col-sm-12"><!-- titulo e imagen del negocio cambio el mb-6 por mb-12 para que se centre en la pantalla -->

                    <h1 class="m-0" style="font-size: 50px">Bienvendos al portal de ventas </h1>
                    <h2 style="font-size: 80px"><b>SERVITECOM</b></h2>
                    <img src="<?php echo $url; ?>./public/imagenes/servitecom2.jpg" alt="Descripción de la imagen" class="img-fluid mx-auto d-block" style="max-width: 30%; margin-top: 20px; margin-bottom: 20px; border-radius:20px">
                </div>
                <div class="row text-center mx-auto col-10">
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mx-auto">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mx-auto">

                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mx-auto">

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div><!-- /.row -->
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
<!--<aside class="control-sidebar control-sidebar-dark" style="background-color: #87CEEB">
    Control sidebar content goes here
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>-->
<?php
include('layout/parte2.php');
?>
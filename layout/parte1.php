<!DOCTYPE html>

<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas online SERVITECOM | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $url; ?>../public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $url; ?>../public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!--Libreria sweetaler2-->
    <script src="http://cdn.jsdelivr.net/npm/sweetaler2@11"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/public/template/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body clas="hold-transition sidebar-mini">
    <script>
        Swal.fire("Bienvenidos al portal de ventas de Servitecom");
    </script>
    <!-- Wrapper que asegura que el contenido se alinee correctamente y el footer quede al fondo -->
    <div class="wrapper" style="min-height: 100vh; display: flex; flex-direction: column;">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo $url; ?>../productos/index.php" class="nav-link">Ventas Online</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!--Full Screen-->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $url; ?>/index.php" class="brand-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img src="<?php echo $url; ?>../public/imagenes/logo servitecom.jpg" alt="iamgen creada por IA" class="brand-image   elevation-3" style="width: 70px; height: 100px; margin-bottom: 5px; border-radius:20px">
                <span class="brand-text font-weight-light" style="display: block;">SERVITECOM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <div class="image" style="border-radius:20px">
                        <img src="<?php echo $url; ?>../public/imagenes/buho informatico.jpg" class=" elevation-2" alt="User Image" style="border-radius:20px">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $nombres; ?></a> <!--llamar variable con el nombre del-->
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>../usuarios/index.php" class="nav-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <i class="far fa fa-list nav-icon" aria-hidden="true"></i>
                                        <p>Listado de Usuarios</p>
                                    </a>
                                </li>
                                <li class=" nav-item">
                                    <a href="<?php echo $url; ?>../usuarios/creacion.php" class="nav-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <i class="far fa fa-user-plus nav-icon " aria-hidden="true"></i>
                                        <p>Creacion de usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--categorias -->
                        <!--<li class=" nav-item menu-close">
                                                <a href="#" class="nav-link active">
                                                    <i class="nav-icon fas fa-tags"></i>
                                                    <p>
                                                        Categorias
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="<?php echo $url; ?>../categorias/listado_categorias.php" class="nav-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Listado de Categorias</p>
                                                        </a>
                                                    </li>
                                                </ul>
                            </li>-->
                        <!--Productos-->
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa fa-laptop"></i>
                                <p>
                                    Almacen
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url; ?>../productos/index.php" class="nav-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <i class=" far fa fa-list nav-icon" aria-hidden="true"></i>
                                        <p>Listado de Productos</p>
                                    </a>
                                </li>
                                <li class=" nav-item">
                                    <a href="<?php echo $url; ?>../productos\creacion_producto.php" class="nav-link" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        <p>Creacion de Productos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--boton cerrar-->
                        <li class="nav-item">
                            <a href="<?php echo $url; ?>../app/controladores/login/cerrar_sesion.php" class="nav-link" style="background-color:brown">
                                <i class="nav-icon fas fa-door-closed"></i><!--cambio de icono-->
                                <p>Cerrar sesion</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
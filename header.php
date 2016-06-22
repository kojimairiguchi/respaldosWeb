<?php
include_once('./functions/mensajes.class.php');
include_once('./functions/usuarios.class.php');
include_once('./functions/main.class.php');
include_once('./functions/functions.php');
$msg = new Mensajes();
$user = new Usuarios();
$main = new Principal();
$date = new DateFunctions();
?>

<div class="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nabvar-collapse">
        <span class="sr-only">Cambiar Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Administracion de Respaldos V1.2</a>
    </div>
    <!-- fin del header -->
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-envelope fa-fw"></i><i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
          <?php include_once('./secciones/head_msg.php'); ?><!-- Fin mensaje Vigente -->
          <li class="divider"></li>
            <li>
              <a class="text-center" data-toggle="tab" href="<?php $_SERVER['PHP_SELF'];?>?msg_id=null#mensajes">
                <strong>Leer Todos los Mensajes</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- Mensajes vigentes, maximo 5 sin scroll -->
      </li>
      <!-- /.dropdown mensajes -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-tasks fa-fw"></i><i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Task 1</strong>
                  <span class="pull-right text-muted">40% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>See All Tasks</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- Dropdown tareas-->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-tasks">
              <li>
                <a href="#">
                  <div>
                    <p>
                      <strong>Usuario</strong>
                      <span class="pull-right text-muted"><?php echo $_SESSION['name']?></span>
                    </p>
                    <div class="">
                      <button type="button" class="btn btn-info btn-block" name="mod">Editar mis Datos</button>
                      <button type="button" class="btn btn-danger btn-block" name="logout" onclick="location.href='logout.php';">Salir</button>
                    </div>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
                <li>
                  <a class="text-center" data-toggle="tab" href="#profile">
                    <strong>Ver mi Perfil</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>

      </li>

    </ul>
  </nav>
</div>

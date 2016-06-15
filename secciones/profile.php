<?php
include_once('./functions/metrica.class.php');
include_once('./functions/functions.php');

$metric = new Metrica;
$personal = $metric->GetFullData($_SESSION['token']);

$date = new DateFunctions();
 ?>
<div class="container">
  <div class="row">
    <div class="pull-right">
      <?php if (empty($personal['img'])) {
        ?>
        <br>
        <img class="img-responsive" src="./img/profile-default.png" alt="Imagen Standard" />
        <?php
      }else{
        ?>
        <img src="<?php echo $personal['img'];?>" alt="<?php echo $personal['fullname'];?>" />
        <?php
      } ?>
    </div>
    <div class="pull-left">
      <header>
        <h1><?php echo $personal['fullname'];?></h1>
      </header>
      <br><br>
      <p>
        <div class="col-xs-2"><h4>Fecha de Creacion </h4></div><div class="col-xs-3"> <i class="fa fa-calendar"></i> <?php echo $personal['created_at'];?></div>
        <div class="col-xs-2"><h4>Fecha de Modificacion </h4></div><div class="col-xs-3"> <i class="fa fa-calendar-o"></i> <?php echo $personal['updated_at'];?></div>
      </p>
    </div>
  </div>


</div>

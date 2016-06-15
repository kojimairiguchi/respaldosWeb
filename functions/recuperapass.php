<?php
include_once('usuarios.class.php');

$mail = $_POST['mail'];


$input = new Usuarios();


if(isset($_POST['recuperar'])){
  if($input->validaMail($mail)){
    $input->recuperaPassword($mail);
    header('Location: ../index.php');
  }else{
    echo '<script language="javascript">
    alert("Correo No Valido, favor intentar denuevo");
    window.location.href = "../index.php";
    </script>';
    //header('Location: ../index.php');
  }
}
 ?>

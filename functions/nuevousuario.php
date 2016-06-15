<?php
include_once('usuarios.class.php');

$user = $_POST['user'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$name = $_POST['name'];

$input = new Usuarios();


if (isset($_POST['nuevo'])) {
  $input->nuevoUsuario($user, $pass, $mail, $name);

  header('Location: ../index.php');
}

 ?>

<?php
include_once('usuarios.class.php');
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
//$mail = $_POST['mail'];
//$name = $_POST['name'];

$input = new Usuarios();

if(isset($_POST['ingresar'])){
  if($input->getData($user, $pass) !== false){
    $datos = $input->getData($user, $pass);
    $_SESSION['token'] = $datos['token'];
    $_SESSION['name'] = $datos['fullname'];
    $_SESSION['user'] = $datos['name'];
    $_SESSION['userid'] = $datos['id'];
    //echo "esta bien";
    echo $_SESSION['token'];
  //  header('Location: ../index.php');
  }else{
    echo "usuario no existe";
    echo "redireccionado en 5 segundos";
    sleep(5);
  //  header('Location: ../index.php');
  }
}
header('Location: ../index.php');
?>

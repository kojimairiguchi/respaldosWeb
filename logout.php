<?php
session_start();
if(empty($_SESSION['token'])){
  echo '<script language="javascript">
    alert("Sesion no iniciada por ende no se puede cerrar");
    window.location.href = "./index.php";
    </script>';
}else{
  unset($_SESSION);
  session_destroy();
  session_write_close();
  header('Location: ./.');
  die;
}

 ?>

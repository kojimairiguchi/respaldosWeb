<?php
require_once('./functions/usuarios.class.php');

$user = new Usuarios();

$user->nuevoUsuario('testsnuevo2', 'passdetexto', 'test.a32@cn.cl', 'este es un usuario de pruebas');


 ?>

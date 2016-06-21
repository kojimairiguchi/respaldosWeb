<?php
session_start();
require_once('./functions/mensajes.class.php');
require_once('./functions/functions.php');

$test = new Mensajes();
$para = 6;
$cuerpo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$de = 1;

//echo getSubString($cuerpo);

echo $_SESSION['token'];
echo $_SESSION['name'];
echo $_SESSION['user'];
echo $_SESSION['userid'];

var_dump($test->getLastMesages($_SESSION['userid']));
//$date = new DateFunctions();
//$user = new Usuarios();
//$from = $key['user_id'];

 ?>

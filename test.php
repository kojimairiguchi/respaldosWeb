<?php
//session_start();
require_once('./functions/main.class.php');
//require_once('./functions/functions.php');
$main = new Principal();


$list = array(
  "Choapa",
  "Eridanus",
  "Pcon003",
  "Pcon224a",
  "Pcon118",
  "Scorpius",
);

foreach ($list as $key) {
  $main->nuevoServidor($key);
  echo $key;
}


 ?>

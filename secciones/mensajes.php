<?php
//include_once('../functions/mensajes.class.php');
$usuario = $_SESSION['userid'];
//$msg = new Mensajes();
//$id = decryptIt($_GET['msg_id']);
//$full = $msg->getFullmsg(decryptIt($_GET['msg_id']));
$msgid = $_GET['msg_id'];
echo $msgid;


 ?>



<div class="container">
  <?php
  if (!empty($msgid)) {
    echo $msgid;
    include('./secciones/table_allmsg.php');
  }else {
    echo $msgid;
    $full = $msg->getFullmsg($msgid);
      var_dump($full);
  }
   ?>
</div>

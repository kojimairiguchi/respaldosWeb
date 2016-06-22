<?php
$usuario = $_SESSION['userid'];
 ?>
<div class="container">
  <?php
  if (isset($_POST['param']) && !empty($_POST['param'])) {
    $full = $msg->getFullmsg($_GET['msg_id']);
    echo "mensaje especifico";
  }else{
    include('./secciones/table_allmsg.php');
  }

   ?>
</div>

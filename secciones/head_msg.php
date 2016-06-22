
<?php
$variable = $msg->getLastMesages($_SESSION['userid']);
foreach ($variable as $key) {
  $from = $key['user_id'];
  $dat = $user->shorData($from);
  //var_dump($dat['name']);


  echo '<li>
          <a data-toggle="tab" data-id="' . $key['id'] . '" href="#mensajes"> <!--LINK a mensaje-->
            <div>
              <strong>' . $dat['fullname'] . '</strong>
              <span class="pull-right text-muted">
                <em>' . returnDay($key['created_at']) . '</em>
              </span>
            </div>
            <div>
              ' . getSubString($key['cuerpo']) . '
            </div>
          </a>
        </li>';
      }
 ?>
 <script type="text/javascript">
 $(document).on('click','a#mensajes',function() {
     val = $(this).attr('data-id');
     $.post('./secciones/index.php', { param: val }, function(data) {
     });
 });

 </script>

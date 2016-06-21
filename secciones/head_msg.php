
<?php
$variable = $msg->getLastMesages($_SESSION['userid']);
foreach ($variable as $key) {
  $from = $key['user_id'];
  $dat = $user->shorData($from);
  //var_dump($dat['name']);
  echo '<li>
          <a data-toggle="tab" href="#mensajes?msg_id=' . $key['id'] . '"> <!--LINK a mensaje-->
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

<div class="container">
  <br>
  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-info ">
        <div class="panel-heading">
          <h3 class="panel-title">Estado de Exports</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-success ">
        <div class="panel-heading">
          <h3 class="panel-title">Estado de Respaldos</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <table class="table table-responsive">
      <thead>
        <th>Servidor</th>
        <th>Instancia</th>
        <th>Inicio</th>
        <th>Fin</th>
        <th>Estado</th>
      </thead>
      <tbody>

        <?php
        $date = date('Y-m-d');
        $variable = $main->getExportsVigentes($date);
        foreach ($variable as $key) {
          echo '
          <td><tr>' . $key['servidor'] . '</tr>
              <tr>' . $key['instancia'] . '</tr>
              <tr>' . $key['inicio'] . '</tr>
              <tr>' . $key['fin'] . '</tr>
          </td>';
        }
         ?>
      </tbody>

    </table>
  </div>
</div>

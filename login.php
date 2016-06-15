<div class="container text-center">
  <h1>Login</h1>
  <div class="col-lg-12">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
      <form class="form" action="./functions/flogin.php" method="post" data-toggle="validator">
        <div class="form-group">
          <label for="user">Usuario</label>
          <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese Nombre" required="" data-error="No puede quedar este campo vacio">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="pass" placeholder="" required="" data-error="No puede quedar este campo vacio">
          <div class="help-block with-errors"></div>
        </div>

        <input type="reset" class="btn btn-info" name="limpiar" value="Limpiar">
        <input type="button" data-toggle="modal" data-target="#recuperar" class="btn btn-primary" name="recupera" value="Recuperar Password" >
        <input type="button" data-toggle="modal" data-target="#nuevo" class="btn btn-success" name="nueva" value="Crear Cuenta">
        <button type="submit" class="btn btn-default" name="ingresar" value="Ingresar">Ingresar</button>

      </form>
    </div>
    <div class="col-sm-3">

    </div>
  </div>
</div>


<!-- formulario recupera pass -->
<form class="form" action="./functions/recuperapass.php" method="post" data-toggle="validator">
  <div class="modal fade" id="recuperar" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="">Recuperar Contraseña</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="correo">Ingrese Correo Electronico</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="" required="" data-error="es el email. te falto algo!">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="recuperar" >Recuperar Contraseña </button>
        </div>
      </div>
    </div>
  </div>

</form>
<!-- Formulario nuevo usuario -->
<form class="form" action="./functions/nuevousuario.php" method="post" data-toggle="validator">

  <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Ingrese Nueva Cuenta</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Usuario</label>
          <input type="text" class="form-control" id="user" name="user" placeholder="" required="" data-error="No puede quedar este campo vacio">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="">Contraseña</label>
          <input type="password" class="form-control" data-minlength="6" id="pass" name="pass"  placeholder="" required="" data-error="No puede quedar este campo vacio">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="">Repita Contraseña</label>
          <input type="password" class="form-control" data-match="#pass" name="pass2" data-match-error="No coinciden las contraseñas" data-error="No puede quedar este campo vacio" data-minlength="6" id="passwordn" placeholder="" required="">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="">Correo Electronico</label>
          <input type="email" class="form-control" id="mail" name="mail" placeholder="" required="" data-error="No puede quedar este campo vacio">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="">Nombre Completo</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="" required="" data-error="No puede quedar este campo vacio">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="nuevo" id="nuevo" >Nuevo Usuario</button>
      </div>
    </div>
  </div>
</div>
</form>

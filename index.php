<!DOCTYPE html>
<html lang="es_UTF-8">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario de Respaldos TSM</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/sb-admin-2.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/timeline.css">
    <link rel="stylesheet" href="./plugins/metisMenu.min.css">
    <link rel="stylesheet" href="./plugins/morris.css">



    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    session_start();
      if($_SESSION['token']){
        include_once('header.php');
        include_once('body.php');
        include_once('footer.php');
      }else{
        include_once('login.php');
      }
     ?>
<script type="text/javascript">
$(document).ready(function() {
  if(location.hash) {
      $('a[href=' + location.hash + ']').tab('show');
  }
  $(document.body).on("click", "a[data-toggle]", function(event) {
      location.hash = this.getAttribute("href");
  });
});
$(window).on('popstate', function() {
  var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
  $('a[href=' + anchor + ']').tab('show');
});
</script>
     <!--JS del theme-->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/sb-admin-2.js"></script>

    <!--Plugins - Graficos Morris -->
    <script src="./plugins/raphael.min.js"></script>
    <script src="./plugins/morris.min.js"></script>
    <script src="./plugins/morris-data.js"></script>

    <!--Plugins - Menu Metis -->
    <script src="./plugins/metisMenu.min.js"></script>

    <!--Plugin validador de formularios -->
    <script src="./plugins/validator.min.js"></script>
  </body>
</html>

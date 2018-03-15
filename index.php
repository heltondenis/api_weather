<!doctype html>
<html lang="en">
   <head>
      <title>Temperatura</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
      <!-- Material Kit CSS -->
      <link rel="stylesheet" href="assets/css/material-kit.css">
   </head>
   <body>
     <br><br>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">
            <i class="fa fa-search"></i>
            </span>
         </div>
         <input type="text" class="form-control" id="cidade" placeholder="Digite o nome da cidade">
         <button type="button" class="btn btn-primary btn-sm">Buscar</button>
      </div>
      <br><br><br><br><br>
      <div align="center">
         <div id="res">
            <h2><b><b></h2>
         </div>
      </div>
      <!--   Core JS Files   -->
      <script src="assets/js/core/jquery.min.js"></script>
      <script src="assets/js/core/popper.min.js"></script>
      <script src="assets/js/bootstrap-material-design.js"></script>
      <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
      <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
      <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="assets/js/plugins/nouislider.min.js"></script>
      <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
      <script src="assets/js/material-kit.js?v=2.0.0"></script>
      <script type="text/javascript" src="script.js"></script>
   </body>
</html>

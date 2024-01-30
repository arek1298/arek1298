<?php 
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>DISTANCIA</title>
  <!-- icono de la pagina -->
  <link rel="icon" href="images/icono.jpg">
  
  <!-- JQuery Validate library -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
  
  <!-- Libreria de sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

</head>
<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
       <div class="card">

        <h5 class="card-header bg-success info-color white-text text-center py-4">
          <strong>Respeta tu sana Distancia</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5">

          <!-- Form -->
          <form id="form"  method="post" style="color: #757575;">

            <div class="text-center">
              <p>Cuidate y cuida a los demas.</p>

              
            </div>

            <!-- codigo -->
            <label for="nombre" class="grey-text font-weight-light">nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <br>

            <!-- descrípcion -->
           <label for="distancia" class="grey-text font-weight-light">Distancia</label>
            <input type="text" name="distancia" id="distancia" class="form-control">
            <br>


            

            <button class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" name="enviar" id="enviar" type="submit">verificar</button>

          </form>
        </div>
      </div>
    </div>

    <div class="col-3">
      <!-- Columna sin mostrar informacion -->
    </div>
  </div>
</div>
</body>
</html>

<script type="text/javascript">

$(document).ready(function () {
   let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $("#enviar").click(function (){
     //   $(".error").remove();
        if( $("nombre").val() == "" ){
            swal ("¡Debe de Ingresar un codigo! " , "" , "warning");
            return false;
        } else if( $("#distancia").val() == "" || !emailreg.test($("#distancia").val()) ){
            swal ("¡SU DISTANCIA ES LA CORRECTA! " , "" , "warning");
            return false;
        } 
    });
});
</script>
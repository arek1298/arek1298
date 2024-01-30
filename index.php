<?php
ob_start() ;
?>


<?php
include("config.php")  

?>

<?php  
if (isset($_POST['registra']))
 {
  if (!empty($_POST['nombre']) && !empty($_POST['email'])&& !empty($_POST['contraseña'])) 
  {
    mysqli_query($cnx,"INSERT into d_usuarios values 
      ( '$_POST[nombre]',
      '$_POST[email]',
        '$_POST[contraseña]')");
    
header("location:index2.php");  

      

  }
  
  

}



?>

<!DOCTYPE html>
<html>
<head>
  <title>INICIO DE SESION USUARIO</title>
  <!-- icono de la pagina -->
  <link rel="icon" href="logo.jpg"> 

<!-- jQuery library -->
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

<br>
</font>
</h1>
<body style="background-color: #bbdefb ">
<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background-color: #212121 ">
   <a class="navbar-brand" href="index.php"><font color="#FFFFFF "><font face="Lobster, cursive"><h2>INICIO </h2></font></font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- Dropdown -->
      
      
      <li class="nav-item">
        <a class="nav-link" href="sesion.php"><font color="#FFFFFF "><font size="4"><b>iniciar sesion</b></font></font></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="/Musica/cerrar.php"><font color="#FFFFFF "><font size="4"><b>Vista/adm.</b></font></font></a>
      </li>
    </ul>
  </div>

  
</nav>
<br>
<br>
<br>

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

        <h5 class="card-header info-color white-text text-center py-4">
          <strong>Registrar usuario</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5">

          <!-- Form -->
          <form id="formajax" name="formajax" class="md-form" method="POST" style="color: #757575;">

            <div class="text-center">
              <p>Únete a nuestra lista de usuarios. Te solcitamos ingreses todos los campos para genarar tu perfil.</p>

              <p>
                <a href="">usuario</a>
              </p>
            </div>

            <!-- nombre -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-user input-prefix"></i>
              <input type="text" id="text" class="form-control" name="nombre" autofocus >
              <label for="nombre">Nombre</label>
            </div>

            <!-- Email -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-at input-prefix"></i>
              <input type="email" id="email" class="form-control" name="email" >
              <label for="email">Email</label>
            </div>


            <!-- Password -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-unlock input-prefix"></i>
              <input type="password" id="contraseña" class="form-control" name="contraseña" >
              <label for="password">Contraseña</label>
            </div>

           

           <!-- Sign in button -->
                        <a href="index2.php"></a>
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="registra" > Ingresar</button>
          </form>
        </div>
      </div>
    </div>

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
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#formajax').serialize();

      if ($('#nombre').val() == '') {
        swal ("¡Debe de Ingrese un Nombre! " , "" , "warning");
        return;
      }
      if ($('#email').val() == '') {
        swal ("¡Debe de Ingresar un email! " , "" , "warning");
        return;
      }
     
      if ($('#contraseña').val() == '') {
        swal ("¡Debe de Ingresar una password! " , "" , "warning");
        return;
      }
      $.ajax({
        type:"POST",
        url:"verificado.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("¡Registro enviado! " , "¡Los datos fueron registrados!" , "success");
            $('#nombre').val('');
            $('#email').val('');
            $('#contraseña').val('');
          }
          else 
          {
            alert("Error");
          }

        }

      });
      return false;

    });
  });
</script>

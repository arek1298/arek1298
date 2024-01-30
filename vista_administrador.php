<?php 

?>

<!DOCTYPE html>
<html>
<head>
  <title>Distanciador</title>
  <!-- icono de la pagina -->
  <link rel="icon" href="images/form.png">
<!DOCTYPE html>
<html>
<head>
 

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@1,500&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 



</head>
<br>
<br>
<br>
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
        <a class="nav-link" href="vista_administrador.php"><font color="#FFFFFF "><font size="4"><b>Vista/adm.</b></font></font></a>
      </li>
    </ul>
  </div>

  
</nav>
<br>
<br>
<br>


<div class="jumbotron">
  <div class="alert alert-danger" id="LISTAACTUAL">LISTA:  </div>    
  <div class="form-group  form-inline">
  <center><h2><b>CANCIONES</b></h2></center>
  </div>
  <hr/>     
  <div class="row LISTAS">
   <table class="table table-hover">
     <thead>
      <th> <b>NOMBRE CANCION</b></th>
      <th><center>TAMAÑO CANCION </center></th>
      <th><center> OPCIONES </center></th>
     </thead>
     <tbody class="tbody1">     
      
     </tbody>    
   </table>
  </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-red);
                width: 5rem;
                height: 3rem;
                border-radius: 3rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 3rem;
                height: 3rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button_checkbox:checked + .switch-button_label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button_checkbox:checked + .switch-button_label:before {
                transform: translateX(2rem);
            }
        </style>
    </head>
    <body>
        <div class="switch-button">
          <h1>ON/OFF</h1>
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
            <label for="switch-label" class="switch-button__label"></label>
        </div>
<br>
<br>
<br>
<br>
<br>



</style>


<body>
 <div class="modal fade" id="addLista" tabindex="31" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel"><center>Agregar nueva lista</center></h4>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label class="" for="#nombreLista">Escriba el nombre de la carpeta</label>
            <input type="text" id="nombreLista" name="nombreLista" class="form-control">
            <hr>
            <center><div class="btn btn-success" id="GuardarLista">GUARDAR</div></center>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
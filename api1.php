<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/navbar-fixed-top.css" rel="stylesheet">
   <script src="js/ie-emulation-modes-warning.js"></script>
   <title>API - AT</title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
   <script src="https://kit.fontawesome.com/15358da53b.js" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
$(document).ready( function() {

   $("#success-alert").hide();
   $("#success-alert2").hide();

   $('#formu').submit(function (ev) {

     var formData = new FormData($('#formu')[0]);

     $.ajax({
       type: $('#formu').attr('method'), 
       url: $('#formu').attr('action'),
       data: formData,
       contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
       processData: false, // NEEDED, DON'T OMIT THIS
       dataType : 'json',
       success: function (data) { 
         console.log(data.message);
         if(data.result)
         {
            $("#success-alert-msg").text(data.message);
            $("#success-alert").show();
            $("#success-alert2").hide();
            /*$("#success-alert").fadeTo(1000, 500).slideUp(3000, function() {
               $("#success-alert").slideUp(3000);
            });
            $("#success-alert-msg").focus();*/
            $('#formu')[0].reset();
            window.scrollTo(0, 0);
         }
         else
         {
            $("#success-alert2-msg").text(data.message);
            $("#success-alert2").show();
            $("#success-alert").hide();
            /*$("#success-alert2").fadeTo(1000, 500).slideUp(3000, function() {
               $("#success-alert2").slideUp(3000);
            });
            $("#success-alert2-msg").focus();*/
            window.scrollTo(0, 0);
         }
      } 
     });
     ev.preventDefault();
   });

} );
 </script>

<body>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
            <img alt="Brand" src="https://atconsultingecuador.com/gallery_gen/bd50ccd6b502a2c87b1aaf78957f1a4d_816x374.61818181818.png" width="50">
         </a>
            <!--<a class="navbar-brand" href="#">Firma Electronica</a>-->
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitud <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="api1.php">PERSONA NATURAL</a></li>
                  <li><a href="api2.php">REPRESENTANTE LEGAL</a></li>
                  <li><a href="api3.php">MIEMBRO DE EMPRESA</a></li>
                  <li><a href="api4.php">PERSONA JURÍDICA</a></li>
               </ul>
            </li>
            <li><a href="consulta.php">Solicitudes</a></li>
            </ul>
         </div><!--/.nav-collapse -->
      </div>
   </nav>
<div class="col-md-12">
<div class="panel panel-default" id="div-panel-gestion">
<div class="panel-body">
   <div id="app" class="container-fluid">
      <div class="row">
         <div>
            <h1 class="text-center">PERSONA NATURAL</h1>
            <hr>
            <div class="alert alert-success" id="success-alert">
               <button type="button" class="close" data-dismiss="alert">x</button>
               <strong>Exito! </strong> <span id="success-alert-msg">Actualizado Permiso con Exito.</span>
            </div>
            <div class="alert alert-danger" id="success-alert2">
               <button type="button" class="close" data-dismiss="alert">x</button>
               <strong>Error! </strong> <span id="success-alert2-msg">Actualizado Permiso con Exito.</span>
            </div>
            <!--TODO: Editar la atributo for=""
            //TODO: Agregar el atributo name en los input -->
            <div class="text-warning"><p>(<i class="fab fa-diaspora text-warning"></i>) <em>Campo Requerido</em></p></div>
            <form action="test.php" id="formu" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="tipo_solicitud" class="form-control" value="1">
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="contenedor">Tipo Contenedor <i class="fab fa-diaspora text-warning"></i></label>
                     <select class="form-control" name="contenedor" required>
                        <option value="">Seleccione Contenedor</option>
                        <option value="0">ARCHIVO .P12</option>
                        <option value="1">TOKEN</option>
                        <option value="2">NUBE</option>
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Nombres <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="nombres" class="form-control" placeholder="Calos Andres" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Primer Apellido <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="apellido1" class="form-control" placeholder="Cardenas" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Segundo Apellido <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="apellido2" class="form-control" placeholder="Pasquel" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento de Identidad <i class="fab fa-diaspora text-warning"></i></label>
                     <select class="form-control" name="tipodocumento" required>
                        <option value="">Seleccione Identidad</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento de Identidad <i class="fab fa-diaspora text-warning"></i></label>
                     <select class="form-control" name="tipodocumento" required>
                        <option value="">Seleccione Identidad</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Número de documento <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="numerodocumento" class="form-control" placeholder="0102698867" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">RUC Personal</label>
                     <input type="text" name="ruc_personal" class="form-control" placeholder="0102698867001">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Sexo <i class="fab fa-diaspora text-warning"></i></label>
                     <select class="form-control" name="sexo" required>
                        <option value="">Seleccione Sexo</option>
                        <option value="HOMBRE">HOMBRE</option>
                        <option value="MUJER">MUJER</option>
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Fecha de Nacimiento <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="date" name="fecha_nacimiento" class="form-control" placeholder="" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Nacionalidad <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="nacionalidad" class="form-control" placeholder="ECUATORIANA" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Teléfono Celular 1 <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="telfCelular" class="form-control" placeholder="0912345678" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Teléfono Celular 2 <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="telfCelular2" class="form-control" placeholder="0912345678" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Teléfono Fíjo</label>
                     <input type="text" name="telfFijo" class="form-control" placeholder="0912345678">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Correo 1 <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="email" name="eMail" class="form-control" placeholder="prueba@gmail.com" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Correo 2 <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="email" name="eMail2" class="form-control" placeholder="prueba@gmail.com" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <!--
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Empresa</label>
                     <input type="text" name="empresa" class="form-control" placeholder="0912345678">
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">RUC Empresa</label>
                     <input type="text" name="ruc_empresa" class="form-control" placeholder="0102698867001">
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Cargo</label>
                     <input type="text" name="cargo" class="form-control" placeholder="GERENTE GENERAL">
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Motivo</label>
                     <input type="text" name="motivo" class="form-control" placeholder="FIRMAR FACTURAS DIGITALES">
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Unidad</label>
                     <input type="text" name="unidad" class="form-control" placeholder="DEPARTAMENTO FINANCIERO">
                  </div>
               </div>
               -->
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Provincia <i class="fab fa-diaspora text-warning"></i></label>
                     <select name="provincia" class="form-control" required>
                        <option value="Azuay" selected="selected">Seleccione Provincia</option> 
                        <option value="Azuay">Azuay</option>  
                        <option value="Cañar">Cañar</option>  
                        <option value="Loja">Loja</option>  
                        <option value="Carchi">Carchi</option>  
                        <option value="Imbabura">Imbabura</option>  
                        <option value="Pichincha">Pichincha</option>  
                        <option value="Cotopaxi">Cotopaxi</option>  
                        <option value="Tungurahua">Tungurahua</option>  
                        <option value="Bolívar">Bolívar</option>  
                        <option value="Chimborazo">Chimborazo</option>  
                        <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>  
                        <option value="Esmeraldas">Esmeraldas</option>  
                        <option value="Manabí">Manabí</option>  
                        <option value="Guayas">Guayas</option>  
                        <option value="Los Ríos">Los Ríos</option>  
                        <option value="El Oro">El Oro</option>  
                        <option value="Santa Elena">Santa Elena</option>  
                        <option value="Sucumbíos">Sucumbíos</option>  
                        <option value="Napo">Napo</option>  
                        <option value="Pastaza">Pastaza</option>  
                        <option value="Orellana">Orellana</option>  
                        <option value="Morona Santiago">Morona Santiago</option>  
                        <option value="Zamora Chinchipe">Zamora Chinchipe</option>  
                        <option value="Galápagos">Galápagos</option>  
                        <option value="Antártida Ecuatoriana">Antártida Ecuatoriana</option>  
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Ciudad <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="ciudad" class="form-control" placeholder="QUITO" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Dirección <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="text" name="direccion" class="form-control" placeholder="Av. 10 DE AGOSTO N45-12 Y SELVA ALEGRE" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <!--
               <div class="col-md-4">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Nombre RL</label>
                     <input type="text" name="nombresRL" class="form-control" placeholder="FERNANDO">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Apellidos RL</label>
                     <input type="text" name="apellidosRL" class="form-control" placeholder="SAENZ MIÑO">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Documento de Identidad RL</label>
                     <select class="form-control" name="tipodocumentoRL">
                        <option value="">Seleccione Identidad RL</option>
                        <option value="CEDULA">CEDULA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Número de documento RL</label>
                     <input type="text" name="numerodocumentoRL" class="form-control" placeholder="0102698867">
                  </div>
               </div>
               -->
               <div class="col-md-3">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Vigencia de la Firma <i class="fab fa-diaspora text-warning"></i></label>
                     <select class="form-control" name="vigenciafirma" required>
                        <option value="">Seleccione Vigencia</option>
                        <option value="1 año">1 Año</option>
                        <option value="2 años">2 Años</option>
                        <option value="3 años">3 Años</option>
                        <option value="4 años">4 Años</option>
                        <option value="5 años">5 Años</option>
                        <option value="7 días">7 días</option>
                     </select>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Dirección de Entrega</label>
                     <input type="text" name="direccionEntrega" class="form-control" placeholder="Av. 10 DE AGOSTO N45-12 Y SELVA ALEGRE">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Adjuntar Video</label>
                     <input type="file" name="videoToken" class="form-control">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Foto Cédula Frontal <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="file" name="f_cedulaFront" class="form-control" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Foto Cédula Posterior <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="file" name="f_cedulaBack" class="form-control" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Foto Tipo Selfie <i class="fab fa-diaspora text-warning"></i></label>
                     <input type="file" name="f_selfie" class="form-control" required>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Copia RUC</label>
                     <input type="file" name="f_copiaruc" class="form-control">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <!--
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Acta de Nombramiento</label>
                     <input type="file" name="f_nombramiento" class="form-control">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Acta de Nombramiento 2</label>
                     <input type="file" name="f_nombramiento2" class="form-control">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Acta Constitución</label>
                     <input type="file" name="f_constitucion" class="form-control">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Documento RL</label>
                     <input type="file" name="f_documentoRL" class="form-control">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback" style="display:none">
                     <label class="control-label" for="nombre">Autorización RL</label>
                     <input type="file" name="f_autreprelegal" class="form-control">
                  </div>
               </div>
               -->
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento Adicional 1</label>
                     <input type="file" name="f_adicional1" class="form-control">
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                  </div>
               </div>
               <!--
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento Adicional 2</label>
                     <input type="file" name="f_adicional2" class="form-control">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento Adicional 3</label>
                     <input type="file" name="f_adicional3" class="form-control">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="form-group has-error has-feedback">
                     <label class="control-label" for="nombre">Documento Adicional 4</label>
                     <input type="file" name="f_adicional4" class="form-control">
                  </div>
               </div>
               -->
               <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary">Enviar <i class="fas fa-paper-plane"></i></button>
               </div>
            </form>
         </div>
       </div>
   </div>
</div>
</div>
</div>
</body>
<!--<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</html>
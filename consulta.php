<?php

$status = array(
    'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
    'uid'=>'797979',										
    'documento'=>'0102698867',								// CEDULA, PERSONA JURIDICA = RUC
    'tipo_solicitud'=>'PERSONA NATURAL'					// PERSONA NATURAL, REPRESENTANTE LEGAL, MIEMBRO DE EMPRESA, PERSONA JURIDICA
);

$url = 'https://api.uanataca.ec/v4/consultarEstado';
$ch = curl_init( $url );
# Setup request to send json via POST.
$payload = json_encode($status);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
//print_r($result);
$data = json_decode($result, true);
$datos = $data['data']['solicitudes'];

//print_r($datos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/navbar-fixed-top.css" rel="stylesheet">
   <link rel="stylesheet" href="css/datatables.min.css">
   <script src="js/ie-emulation-modes-warning.js"></script>
   <title>API - AT</title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<script type="text/javascript">
   let url = 'http://localhost/api-prueba/test2.php'
   fetch(url)
      .then(response => response.json())
      .then(data => console.log(data))
      .catch(error => console.log(error));
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
         <h1 class="text-center">Listado de Solicitudes</h1>
         <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
               <thead>
                     <tr>
                        <th>Tipo de Solicitud</th>
                        <th>Estado</th>
                        <th>Observación</th>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Nombre completo</th>
                        <th>Validez</th>
                        <th>ID</th>
                        <th>Creado por</th>
                        <th>Fecha Ingreso</th>
                     </tr>
               </thead>
               <tbody>
                  <?php
                        foreach($datos as $key => $item)
                        {
                           $tipo_solicitud = $item["tipo_solicitud"];
                           $estado = $item["estado"];
                           $observacion = $item["observacion"];
                           $documento_tipo = $item["documento_tipo"];
                           $documento = $item["documento"];
                           $nombre_completo = $item["nombre_completo"];
                           $validez = $item["validez"];
                           $uid = $item["uid"];
                           $creado_por = $item["creado_por"];
                           $fecha_registro = date('d/m/Y', strtotime($item["fecha_registro"])) ;
                           echo "
                           <tr>
                              <td>$tipo_solicitud</td>
                              <td>$estado</td>
                              <td>$observacion</td>
                              <td>$documento_tipo</td>
                              <td>$documento</td>
                              <td>$nombre_completo</td>
                              <td>$validez</td>
                              <td>$uid</td>
                              <td>$creado_por</td>
                              <td>$fecha_registro</td>
                           </tr>
                           ";
                        }
                  ?>
               </tbody>
               <tfoot>
                     <tr>
                        <th>Tipo de Solicitud</th>
                        <th>Estado</th>
                        <th>Observación</th>
                        <th>Tipo Documento</th>
                        <th>Documento</th>
                        <th>Nombre completo</th>
                        <th>Validez</th>
                        <th>ID</th>
                        <th>Creado por</th>
                        <th>Fecha Ingreso</th>
                     </tr>
               </tfoot>
            </table>
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
<script src="js/datatables.min.js"></script>
<script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>
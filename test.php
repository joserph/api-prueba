<?php
if(isset($_FILES['f_cedulaFront']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png');
    $file_name =$_FILES['f_cedulaFront']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_cedulaFront']['size'];
    $file_tmp= $_FILES['f_cedulaFront']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_cedulaFront'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_cedulaFront'] = "";
    }
}

if(isset($_FILES['f_cedulaBack']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png');
    $file_name =$_FILES['f_cedulaBack']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_cedulaBack']['size'];
    $file_tmp= $_FILES['f_cedulaBack']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_cedulaBack'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_cedulaBack'] = "";
    }
}

if(isset($_FILES['f_selfie']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png');
    $file_name =$_FILES['f_selfie']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_selfie']['size'];
    $file_tmp= $_FILES['f_selfie']['tmp_name'];
    if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_selfie'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_selfie'] = "";
    }
}

if(isset($_FILES['f_copiaruc']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_copiaruc']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_copiaruc']['size'];
    $file_tmp= $_FILES['f_copiaruc']['tmp_name'];
    if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_copiaruc'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_copiaruc'] = "";
    }
}

if(isset($_FILES['f_nombramiento']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_nombramiento']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_nombramiento']['size'];
    $file_tmp= $_FILES['f_nombramiento']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_nombramiento'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_nombramiento'] = "";
    }
}

if(isset($_FILES['f_nombramiento2']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_nombramiento2']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_nombramiento2']['size'];
    $file_tmp= $_FILES['f_nombramiento2']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_nombramiento2'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_nombramiento2'] = "";
    }
}

if(isset($_FILES['f_constitucion']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_constitucion']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_constitucion']['size'];
    $file_tmp= $_FILES['f_constitucion']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_constitucion'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_constitucion'] = "";
    }
}

if(isset($_FILES['f_documentoRL']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_documentoRL']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_documentoRL']['size'];
    $file_tmp= $_FILES['f_documentoRL']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_documentoRL'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_documentoRL'] = "";
    }
}

if(isset($_FILES['f_autreprelegal']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_autreprelegal']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_autreprelegal']['size'];
    $file_tmp= $_FILES['f_autreprelegal']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_autreprelegal'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_autreprelegal'] = "";
    }
}

if(isset($_FILES['f_adicional1']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf','mp4');
    $file_name =$_FILES['f_adicional1']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_adicional1']['size'];
    $file_tmp= $_FILES['f_adicional1']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_adicional1'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_adicional1'] = "";
    }
}

if(isset($_FILES['f_adicional2']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_adicional2']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_adicional2']['size'];
    $file_tmp= $_FILES['f_adicional2']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_adicional2'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_adicional2'] = "";
    }
}

if(isset($_FILES['f_adicional3']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_adicional3']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_adicional3']['size'];
    $file_tmp= $_FILES['f_adicional3']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_adicional3'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_adicional3'] = "";
    }
}

if(isset($_FILES['f_adicional4']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','pdf');
    $file_name =$_FILES['f_adicional4']['name'];
    @$file_ext = strtolower( end(explode('.',$file_name)));
    $file_size=$_FILES['f_adicional4']['size'];
    $file_tmp= $_FILES['f_adicional4']['tmp_name'];
   	if(!empty($file_tmp))
    {
	    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
	    $data = file_get_contents($file_tmp);
	    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	    if(in_array($file_ext,$allowed_ext) === false)
	    {
	        $errors[]='Extension not allowed';
	    }

	    if($file_size > 2097152)
	    {
	        $errors[]= 'File size must be under 2mb';

	    }
	    if(empty($errors))
	    {
	        $_POST['f_adicional4'] = $base64;
	    }
	    else
	    {
	    	$result = '{"message":"Formato de Archivo Invalido","result":false}';
	    	echo $result;
	    	exit();
	    }
    }
    else
    {
    	$_POST['f_adicional4'] = "";
    }
}

$_POST['fecha_nacimiento'] = date("Y/m/d", strtotime($_POST['fecha_nacimiento']));

$data1 = array(
'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
'uid'=>'797979',
'tipo_solicitud'=>$_POST['tipo_solicitud'],
'contenedor'=>$_POST['contenedor'],								// 0:archivo .p12, 1:token, 2:nube
'nombres'=>$_POST['nombres'],
'apellido1'=>$_POST['apellido1'],
'apellido2'=>$_POST['apellido2'],
'tipodocumento'=>$_POST['tipodocumento'],						// CEDULA, PASAPORTE
'numerodocumento'=>$_POST['numerodocumento'],
'ruc_personal'=>$_POST['ruc_personal'],							// opcional no obligatorio
'sexo'=>$_POST['sexo'],
'fecha_nacimiento'=>$_POST['fecha_nacimiento'],
'nacionalidad'=>$_POST['nacionalidad'],
'telfCelular'=>$_POST['telfCelular'],
'telfFijo'=>$_POST['telfFijo'],									// opcional no obligatorio 
'eMail'=>$_POST['eMail'],
'provincia'=>$_POST['provincia'],
'ciudad'=>$_POST['ciudad'],
'direccion'=>$_POST['direccion'],
'vigenciafirma'=>$_POST['vigenciafirma'],
'f_cedulaFront'=>$_POST['f_cedulaFront'], 						// JPG codificado en BASE64
'f_cedulaBack'=>$_POST['f_cedulaBack'], 						// JPG codificado en BASE64
'f_selfie'=>$_POST['f_selfie'], 								// JPG codificado en BASE64
'f_copiaruc'=>$_POST['f_copiaruc'], 							// PDF codificado en BASE64
'f_adicional1'=>$_POST['f_adicional1'], 						// PDF,JPG o MP4 codificado en BASE64
'f_adicional2'=>$_POST['f_adicional2'], 						// PDF o JPG codificado en BASE64
'f_adicional3'=>$_POST['f_adicional3'], 						// PDF o JPG codificado en BASE64
'f_adicional4'=>$_POST['f_adicional4'], 						// PDF o JPG codificado en BASE64
);

$data2 = array(
'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
'uid'=>'797979',
'tipo_solicitud'=>$_POST['tipo_solicitud'],
'contenedor'=>$_POST['contenedor'],								// 0:archivo .p12, 1:token, 2:nube
'nombres'=>$_POST['nombres'],
'apellido1'=>$_POST['apellido1'],
'apellido2'=>$_POST['apellido2'],
'tipodocumento'=>$_POST['tipodocumento'],						// CEDULA, PASAPORTE
'numerodocumento'=>$_POST['numerodocumento'],
'sexo'=>$_POST['sexo'],
'fecha_nacimiento'=>$_POST['fecha_nacimiento'],
'nacionalidad'=>$_POST['nacionalidad'],
'telfCelular'=>$_POST['telfCelular'],							// celular personal
'telfFijo'=>$_POST['telfFijo'],									// opcional no obligatorio 
'eMail'=>$_POST['eMail'],										// correo personal
'empresa'=>$_POST['empresa'],
'ruc_empresa'=>$_POST['ruc_empresa'],
'cargo'=>$_POST['cargo'],
'provincia'=>$_POST['provincia'], 								// provincia de empresa
'ciudad'=>$_POST['ciudad'], 									// ciudad de empresa
'direccion'=>$_POST['direccion'], 								// dirección de empresa
'vigenciafirma'=>$_POST['vigenciafirma'],
'f_cedulaFront'=>$_POST['f_cedulaFront'], 						// JPG codificado en BASE64
'f_cedulaBack'=>$_POST['f_cedulaBack'], 						// JPG codificado en BASE64
'f_selfie'=>$_POST['f_selfie'], 								// JPG codificado en BASE64
'f_copiaruc'=>$_POST['f_copiaruc'], 							// PDF codificado en BASE64
'f_nombramiento'=>$_POST['f_nombramiento'], 					// PDF codificado en BASE64
'f_nombramiento2'=>$_POST['f_nombramiento2'], 					// PDF codificado en BASE64
'f_constitucion'=>$_POST['f_constitucion'], 					// PDF codificado en BASE64
'f_adicional1'=>$_POST['f_adicional1'], 						// PDF,JPG o MP4 codificado en BASE64
'f_adicional2'=>$_POST['f_adicional2'], 						// PDF o JPG codificado en BASE64
'f_adicional3'=>$_POST['f_adicional3'], 						// PDF o JPG codificado en BASE64
'f_adicional4'=>$_POST['f_adicional4'], 						// PDF o JPG codificado en BASE64
);

$data3 = array(
'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
'uid'=>'797979',
'tipo_solicitud'=>$_POST['tipo_solicitud'],
'contenedor'=>$_POST['contenedor'],								// 0:archivo .p12, 1:token, 2:nube
'nombres'=>$_POST['nombres'],
'apellido1'=>$_POST['apellido1'],
'apellido2'=>$_POST['apellido2'],
'tipodocumento'=>$_POST['tipodocumento'],						// CEDULA, PASAPORTE
'numerodocumento'=>$_POST['numerodocumento'],
'sexo'=>$_POST['sexo'],
'fecha_nacimiento'=>$_POST['fecha_nacimiento'],
'nacionalidad'=>$_POST['nacionalidad'],
'telfCelular'=>$_POST['telfCelular'],							// celular personal
'telfFijo'=>$_POST['telfFijo'],									// opcional no obligatorio 
'eMail'=>$_POST['eMail'],										// correo personal
'empresa'=>$_POST['empresa'],
'ruc_empresa'=>$_POST['ruc_empresa'],
'cargo'=>$_POST['cargo'],
'motivo'=>$_POST['motivo'],										// opcional no obligatorio 
'unidad'=>$_POST['unidad'],										// opcional no obligatorio 
'provincia'=>$_POST['provincia'], 								// provincia de empresa
'ciudad'=>$_POST['ciudad'], 									// ciudad de empresa
'direccion'=>$_POST['direccion'], 								// dirección de empresa
'nombresRL'=>$_POST['nombresRL'],
'apellidosRL'=>$_POST['apellidosRL'],
'tipodocumentoRL'=>$_POST['tipodocumentoRL'],
'numerodocumentoRL'=>$_POST['numerodocumentoRL'],
'vigenciafirma'=>$_POST['vigenciafirma'],
'f_cedulaFront'=>$_POST['f_cedulaFront'], 						// JPG codificado en BASE64
'f_cedulaBack'=>$_POST['f_cedulaBack'], 						// JPG codificado en BASE64
'f_selfie'=>$_POST['f_selfie'], 								// JPG codificado en BASE64
'f_copiaruc'=>$_POST['f_copiaruc'], 							// PDF codificado en BASE64
'f_nombramiento'=>$_POST['f_nombramiento'], 					// PDF codificado en BASE64
'f_nombramiento2'=>$_POST['f_nombramiento2'], 					// PDF codificado en BASE64
'f_constitucion'=>$_POST['f_constitucion'], 					// PDF codificado en BASE64
'f_documentoRL'=>$_POST['f_documentoRL'], 						// PDF codificado en BASE64
'f_autreprelegal'=>$_POST['f_autreprelegal'], 					// PDF codificado en BASE64
'f_adicional1'=>$_POST['f_adicional1'], 						// PDF,JPG o MP4 codificado en BASE64
'f_adicional2'=>$_POST['f_adicional2'], 						// PDF o JPG codificado en BASE64
'f_adicional3'=>$_POST['f_adicional3'], 						// PDF o JPG codificado en BASE64
'f_adicional4'=>$_POST['f_adicional4'], 						// PDF o JPG codificado en BASE64
);

$data4 = array(
'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
'uid'=>'797979',
'tipo_solicitud'=>$_POST['tipo_solicitud'],
'contenedor'=>$_POST['contenedor'],								// 0:archivo .p12, 1:token, 2:nube
'nombres'=>$_POST['nombres'],
'apellido1'=>$_POST['apellido1'],
'apellido2'=>$_POST['apellido2'],
'tipodocumento'=>$_POST['tipodocumento'],						// CEDULA, PASAPORTE
'numerodocumento'=>$_POST['numerodocumento'],
'sexo'=>$_POST['sexo'],
'fecha_nacimiento'=>$_POST['fecha_nacimiento'],
'nacionalidad'=>$_POST['nacionalidad'],
'telfCelular'=>$_POST['telfCelular'],							// celular personal
'telfFijo'=>$_POST['telfFijo'],									// opcional no obligatorio 
'eMail'=>$_POST['eMail'],										// correo personal
'empresa'=>$_POST['empresa'],
'ruc_empresa'=>$_POST['ruc_empresa'],
'cargo'=>$_POST['cargo'],
'provincia'=>$_POST['provincia'], 								// provincia de empresa
'ciudad'=>$_POST['ciudad'], 									// ciudad de empresa
'direccion'=>$_POST['direccion'], 								// dirección de empresa
'vigenciafirma'=>'2 años',
'f_cedulaFront'=>$_POST['f_cedulaFront'], 						// JPG codificado en BASE64
'f_cedulaBack'=>$_POST['f_cedulaBack'], 						// JPG codificado en BASE64
'f_selfie'=>$_POST['f_selfie'], 								// JPG codificado en BASE64
'f_copiaruc'=>$_POST['f_copiaruc'], 							// PDF codificado en BASE64
'f_nombramiento'=>$_POST['f_nombramiento'], 					// PDF codificado en BASE64
'f_nombramiento2'=>$_POST['f_nombramiento2'], 					// PDF codificado en BASE64
'f_constitucion'=>$_POST['f_constitucion'], 					// PDF codificado en BASE64
'f_adicional1'=>$_POST['f_adicional1'], 						// PDF,JPG o MP4 codificado en BASE64
'f_adicional2'=>$_POST['f_adicional2'], 						// PDF o JPG codificado en BASE64
'f_adicional3'=>$_POST['f_adicional3'], 						// PDF o JPG codificado en BASE64
'f_adicional4'=>$_POST['f_adicional4'], 						// PDF o JPG codificado en BASE64
);

$status = array(
'apikey'=>'hSD73nV6jhk8dg2JHgcjl@fqxj8WjeOFCPAjhekL7sn3',
'uid'=>'797979',										
'documento'=>'0102698867',								// CEDULA, PERSONA JURIDICA = RUC
'tipo_solicitud'=>'PERSONA NATURAL',						// PERSONA NATURAL, REPRESENTANTE LEGAL, MIEMBRO DE EMPRESA, PERSONA JURIDICA
);

$url = 'https://api.uanataca.ec/v4/solicitud';
$ch = curl_init( $url );
# Setup request to send json via POST.
if($_POST['tipo_solicitud'] == 1)
{
	$payload = json_encode($data1);
}
if($_POST['tipo_solicitud'] == 2)
{
	$payload = json_encode($data2);
}
if($_POST['tipo_solicitud'] == 3)
{
	$payload = json_encode($data3);
}
if($_POST['tipo_solicitud'] == 4)
{
	$payload = json_encode($data4);
}
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
$valid = json_decode($result,true);

if($valid['result'] == true)
{
	//print_r("dsdsd");
}

echo $result;

/*
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
echo $result;
*/

?>
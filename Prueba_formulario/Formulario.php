<meta charset="UTF8">


<?php

	include "Conexion.php";
	
	
	$Conexion = CrearConexion();

	
	$Nombre = $Nacido = $Nif = $Altura = "";
	
	
	$Boton = "Insertar";

	
	
	if ($Conexion)
	{

	if(isset($_REQUEST["Accion"])){
		$Accion = $_REQUEST["Accion"];
		$ID = $_REQUEST["ID"];

		
		if (($Accion == "Editar") && ($ID != ""))
		{

			$SQL = "select * from Datos_Personales where ID = $ID ";
			$Resultado = mysqli_query($Conexion, $SQL);

			if(!$Resultado) echo "MAL";
			$Tupla = mysqli_fetch_array($Resultado ,MYSQLI_ASSOC);
			$Nombre = $Tupla["Nombre"];
			$Nif = $Tupla["NIF"];
			$Nacido = $Tupla["Nacido"];
			$Altura = $Tupla["Altura"];
			$Boton = "Modificar";
		}
	}
	}

?>






<html>

<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>


<body id="login" style="color:red">
	
<div class="col-md-12" style="text-align: center">
<h1 class="titulos"> Formulario </h1>



<form  name ="formularioContacto" action="insertar.php" method="post"     >
<label><br>Nombre: <br><input id="nombreFormContacto" type="text" name="Nombre" value = "<?php echo $Nombre; ?>"/><br></label>
<label><br>NIF:<br><input id="NIF" type="text" name="Nif" value = "<?php echo $Nif; ?>"/><br></label>
<label><br>Fecha nacimiento:<br><input id="Nacimiento" type="text" name="Nacido" value = "<?php echo $Nacido; ?>" /><br></label>
<label><br>Altura:<br><input id="alturaFormContacto" type="text" name="Altura" value = "<?php echo $Altura; ?>"/><br></label>
<input type="hidden" name="ID" value="<?php echo $ID; ?>">
<label><br><input id ="botonEnvio1" type="submit" name ="Accion" value = "<?php echo $Boton; ?>"></label>
</form>


</div>
</body>





</html>

<?php
	include "Conexion.php";
	
	session_start();
	
	$Conexion = CrearConexion();
	$Usuario = $_SESSION["USUARIO_ID"];
	$Nombre = $_SESSION["USUARIO_NOMBRE"];
	if ($Usuario == "") header("Location: index.php"); // Derecho al login, si no sé quien eres.
	
	echo "<h2 class='bienvenida'>Bienvenido/a $Nombre</h2>";
	
	$Boton = "Insertar";
	
	if ($Conexion)
	{
		$Accion = $_REQUEST["Accion"];
		$ID = $_REQUEST["ID"];
		if ($Accion == "Editar" && $ID != "")
		{
			$SQL = "select * from Mensajes where Id = $ID ";

			$Resultado = Ejecutar($Conexion, $SQL);

			$Tupla = mysqli_fetch_array($Resultado ,MYSQLI_ASSOC);
			$Fecha = $Tupla["Fecha"];
			$De = $Tupla["Usuario"];
			$Para = $Tupla["Para"];
			$Mensaje = $Tupla["Mensaje"];
			$Boton = "Modificar";
		}
	}
?>









<!DOCTYPE html>
<html>
<head>
	<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
</head>
<body class="body" style="color:black">


<form action="Lista.php" method="post">
	<?php
		

		$SQL = "select * from Usuarios where Id <> $Usuario order by Usuario asc";
		$Resultado = Ejecutar($Conexion, $SQL);

		echo "<fieldset class='Formulario'><legend><string>Mensaje</string></legend><div class='Etiqueta'>Para</div> <div class='Valor'><select name='Parap class='Para'>";

		while($RTemp = mysqli_fetch_array($Resultado)){
			echo ("<option value'". $RTemp["Id"]."'");
			if($RTemp["Id"] == $Para) echo (" selected='selected'");
			echo (">" . $RTemp["Usuario"] . "</option>");

		}
		echo ("</select></div>\n");
	?>

	<div class='Separador'>&nbsp; </div>
	<div class="Etiqueta"> Mensaje </div><div class="Valor"><textarea class="TA_Mensaje" name="Mensaje"> <?php echo $Mensaje; ?></textarea></div>
	<input type="hidden" name="Id" value="<?php echo $ID;?>">
	<div class="Separador">&nbsp; </div>
	<div><button class="btn  btn-block btn-large btn-primary" type="submit" name="Accion" value="<?php echo $Boton; ?>"> <?php echo $Boton; ?> </button> </div>
	</fieldset>
	</form>




</body>
</html>
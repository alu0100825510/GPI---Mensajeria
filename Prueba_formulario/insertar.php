<meta charset="UTF">


<?php

include "Conexion.php";

	
	$Conexion = CrearConexion();

	if($Conexion){

		if(isset($_REQUEST["Nombre"])){
		$Nombre = $_REQUEST["Nombre"];
		$Nif = $_REQUEST["Nif"];
		$Nacido = $_REQUEST["Nacido"];
		$Altura = $_REQUEST["Altura"];


		}


		$Accion = $_REQUEST["Accion"];
		$ID = $_REQUEST["ID"];

		

		if($Accion == "Eliminar" && $ID != ""){
			$SQL = "delete from Datos_Personales where Id = $ID";
		}
			
		else if($Accion == "Modificar" && $ID != ""){
			$SQL = "update  Datos_Personales set Nombre = '$Nombre', NIF = '$Nif', Nacido = '$Nacido', Altura = $Altura where ID = $ID";
		}


		else{


			$SQL = "insert into Datos_Personales";
			$SQL .= "(Nombre, NIF, Nacido, Altura) values";
			$SQL .= "('$Nombre', '$Nif', '$Nacido', '$Altura')";


		}

	if(!mysqli_query($Conexion, $SQL))
		echo "Error: " . mysql_error($Conexion);

	else
		echo "Valores insertados correctamente";

	

}

	else{
		die("Error al conectar con la base de datos!!!");
	}


?>

<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body >
	
<div class="col-md-12">
<h1 class="titulos"> Tabla de resultados </h1>
</div>

<div class="col-md-8 col-md-offset-4" >

	<?php

	echo "<table border='1'>";

	$SQL = "select * from Datos_Personales order by id desc";
	$Resultado = mysqli_query($Conexion, $SQL);
	echo "<tr><td >" . "Nombre" . "</td><td>" . "NIF" . "</td>";
	echo "<td>" . "Nacido" . "</td><td>" . "Altura"  . "</td>";
	while($Tupla = mysqli_fetch_array($Resultado, MYSQLI_ASSOC)){

		echo "<tr><td>" . $Tupla["Nombre"] . "</td><td>" . $Tupla["NIF"] . "</td>";
		echo "<td>" . $Tupla["Nacido"] . "</td><td>" . $Tupla["Altura"]  . "</td>";

		echo "<td><a href='Formulario.php?Accion=Editar&ID=".$Tupla["ID"]."'>Editar</a></td>";
		echo "<td><a href='insertar.php?Accion=Eliminar&ID=".$Tupla["ID"]."'>Eliminar</a></td></tr>";
	}

	echo "</table>";



	mysqli_close($Conexion);



	?>

</div>
</body>
</html>

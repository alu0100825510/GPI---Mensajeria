



<?php

function CrearConexion(){

	$Servidor = "localhost";
	$Usuario = "gpi";
	$Clave = "gpi";
	$BaseDatos = "Prueba";

	$Conexion_MySQL = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos);


	return $Conexion_MySQL;
}


function DameFecha($Fecha)
	{
		$F = strtotime($Fecha);
		
		return date("d-m-Y", $F) . " a las " . date("H:i", $F) . " horas.";
	}
	
	

function Ejecutar($Conexion, $SQL)
	{
		$Resultado = mysqli_query($Conexion, $SQL);
		if (!$Resultado) die("Error en la ejecución");
		
		return $Resultado;
	}





?>
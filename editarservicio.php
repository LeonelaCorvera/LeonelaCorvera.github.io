<?php

include 'funciones\database_min.php';

$des= $_POST['des']; 
$id= $_POST['id']; 

	$consulta="select * from servicio where idServicio=".$id.";";
	$resultado=db_query($consulta);

	$consulta2="UPDATE servicio SET ";
	$tex="";
	$param=0;

	foreach($resultado as $fila){

		if ($fila['descripcion']!=$des) {
			$tex=" descripcion='".$des."'";
			$param=1;
		} if ($tex!="") {
			$tex.=" where idServicio=".$id.";";
			$consulta2.=$tex;
			$resultado2=db_query($consulta2);
		}
	}


	header("Location: principal.php?menu=ListadoServicios");

?>
<?php

include 'C:\xampp\htdocs\AdminLTE\AdminLTE-2.4.10\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.vehiculo;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		if ($fila['seguroAlDia']==1) {
			$seguro='Si';
		}else{
			$seguro='No';
		}

		switch ($fila['idTipoDeVehiculo']) {
			case '1':
				$tipo='auto';
				break;
			case '2':
				$tipo='camioneta chica';
				break;
			case '3':
				$tipo='camioneta mediana';
				break;
			case '4':
				$tipo='camioneta grande';
				break;
			case '5':
				$tipo='camion chico';
				break;
		
		}

		echo "<tr><td>"."$fila[idVehiculo]"."</td>
			<td>"."$fila[patente]"."</td>
			<td>"."$fila[marca]"."</td>
			<td>"."$fila[modelo]"."</td>
			<td>"."$fila[anio]"."</td>
			<td>"."$seguro"."</td>
			<td>"."$tipo"."</td>
			<td>
			<a href='index.php?menu=DetalleVehiculo' class='btn btn-primary'><i class='fa fa-eye'></i></a>
			<a href='index.php?menu=EditVehiculo' class='btn btn-success'><i class='fa fa-edit'></i></a>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
			</td></tr>";


	}

?>
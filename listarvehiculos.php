<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';


	$consulta="SELECT * FROM acercarlogistca.vehiculo;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){

		$id = (isset($fila['idVehiculo'])) ? $fila['idVehiculo'] : 0 ;

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
			<button type='button' value='".$id."' class='btn btn-success' onclick='sendId(this.value)';><i class='fa fa-edit'></i></button>
			<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalConfirmDelete'><i class='fa fa-trash'></i></button>
			</td></tr>";


	}

?>

<?php

include 'C:\xampp\htdocs\AdminLTE\Acercarlogistica-master\funciones\database_min.php';

 $chofer= ( empty($_POST['chofer']) ) ? NULL : $_POST['chofer'];

	$consulta="UPDATE chofer
				SET disponibilidad = 1,
				fecha_ultima_disponibilidad = now()
				WHERE idChofer = ".$chofer.";";

	$resultado=db_query($consulta);


?>
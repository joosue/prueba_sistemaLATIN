<?php
	
	require ('../conexion.php');
	
	$idProv = $_POST['idProv'];
	
	$queryM = "SELECT idDist, distrito FROM ubdistrito WHERE idProv = '$idProv' ORDER BY distrito";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Distrito</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idDist']."'>".$rowM['distrito']."</option>";
	};
	
	echo $html;
?>		
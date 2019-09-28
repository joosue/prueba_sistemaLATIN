<?php
	
	require('../conexion.php');
	
	$idDepa = $_POST['idDepa'];
	
	$queryP = "SELECT idProv, provincia FROM ubprovincia WHERE idDepa = '$idDepa' ORDER BY provincia ASC";
	$resultadoP = $mysqli->query($queryP);
	
	$html= "<option value='0'>Seleccionar Provincia</option>"; 	
	
	while ($rowP = $resultadoP->fetch_assoc())
	{
		$html.= "<option value='".$rowP['idProv']."'>".$rowP['provincia']."</option>";
	}
	
	echo $html;
?>		
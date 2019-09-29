<?php
	
	require ('../conexion.php');
	
	$id_estado = $_POST['id_estado'];
	
	$queryM = "SELECT idProv, provincia FROM ubprovincia WHERE idDepa = '$id_estado' ORDER BY provincia";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Provincia</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idDist']."'>".$rowM['distrito']."</option>";
	};
	
	echo $html;
?>		
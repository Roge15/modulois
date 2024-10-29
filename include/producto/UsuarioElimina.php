<?php
include("../../Config/conexion.php");
$usu_id = $_GET["USU_ID"];

	// *************************************************************
	// MODIFICA TABLA PERSONA
	// *************************************************************
	$Update="UPDATE usuario SET USU_ESTADO = '0' WHERE USU_ID = '".$usu_id."' ";
	$Modifica = pg_query($Update);
?>
	<script type="text/javascript">
		 // document.location='../xframe/frameUsuario.php';
	</script>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
include("../../Config/conexion.php"); 
$usu_id = $_GET["USU_ID"];
$per_id = $_GET["PER_ID"];

if(isset($OPERATOR)&&($OPERATOR=='_REGISTRAR_'))
{
	// *************************************************************
	// MODIFICA TABLA PERSONA
	// *************************************************************
	$Update="UPDATE persona SET PER_NOMBRE = '".$per_nombre."',PER_PATERNO = '".$per_paterno."',PER_MATERNO = '".$per_materno."',PER_CI= '".$per_ci."',PER_TELEFONO = '".$per_telefono."',PER_CELULAR = '".$per_celular."',PER_EMAIL = '".$per_email."' WHERE PER_ID = '".$per_id."' ";
	$Modifica = pg_query($Update);
	// *************************************************************
	// MODIFICA TABLA USUARIO
	// *************************************************************
	$Update="UPDATE usuario SET USU_CODIGO = '".$usu_codigo."',USU_PASWORD = '".$usu_pasword."' WHERE USU_ID = '".$usu_id."' ";
	$Modifica = pg_query($Update);
	
	?>
	<script type="text/javascript">
		parent.self.location.href='../xframe/frameUsuario.php';
		parent.$.modal().close();
	</script>
	<?php
}
?>
<link rel="stylesheet" type="text/css" href="../../Resource/Css/stylePopup.css" />
<script type="text/javascript">
<!--
function Validar(f,op){
	if( op == '_REGISTRAR_'){
		document.getElementById("OPERATOR").value = op;
		f.submit();
	}	
}
//-->
</script>
</head>
<body>
<div id="contenedorPopup">
	<h1 class="titulo1">Registro de Usuario</h1>
	<form name="form1" method="POST" action="" >
	<?php $repord = mysql_query("	SELECT * FROM usuario U, persona P WHERE U.PER_ID=P.PER_ID AND U.USU_ID='".$usu_id."' AND P.PER_ID='".$per_id."' ");
		 if($row=mysql_fetch_array($repord)){?>
		<fieldset>
			<legend>DATOS PERSONALES WIL</legend>
			<div class="filaDiv">
				<label for="paterno">Nombre</label>
				<input type="text" name="per_nombre" id="per_nombre" placeholder="" autocomplete="off" value="<?php echo $row['PER_NOMBRE'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">Apellido Paterno</label>
				<input type="text" name="per_paterno" id="per_paterno"  placeholder="" autocomplete="off" value="<?php echo $row['PER_PATERNO'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">Apellido Materno</label>
				<input type="text" name="per_materno" id="per_materno"  placeholder="" autocomplete="off" value="<?php echo $row['PER_MATERNO'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">C.I.</label>
				<input type="text" name="per_ci" id="per_ci"  placeholder="" autocomplete="off" value="<?php echo $row['PER_CI'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">Telefono</label>
				<input type="text" name="per_telefono" id="per_telefono"  placeholder="" autocomplete="off" value="<?php echo $row['PER_TELEFONO'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">Celular</label>
				<input type="text" name="per_celular" id="per_celular"  placeholder="" autocomplete="off" value="<?php echo $row['PER_CELULAR'];?>" />
			</div>
			<div class="filaDiv">
				<label for="materno">Email</label>
				<input type="text" name="per_email" id="per_email"  placeholder="" autocomplete="off" value="<?php echo $row['PER_EMAIL'];?>"/>
			</div>
		</fieldset>
		<fieldset>
			<legend>DATOS SEGURIDAD</legend>
			<div class="filaDiv">
				<label for="paterno">Codigo</label>
				<input type="text" name="usu_codigo" id="usu_codigo" placeholder="" autocomplete="off" value="<?php echo $row['USU_CODIGO'];?>"/>
			</div>
			<div class="filaDiv">
				<label for="materno">Contraseña</label>
				<input type="text" name="usu_pasword" id="usu_pasword"  placeholder="" autocomplete="off" value="<?php echo $row['USU_PASWORD'];?>"/>
			</div>
		</fieldset>
		<div id="cssboton">
			<a class="a_demo_four" href="javascript:void(0);" onClick="Validar(document.form1,'_REGISTRAR_')"><img src="../../Resource/Iconos/save_32.png" style="margin: 0 5px -12px 0; border:none;">Guardar</a>	
			<a class="a_demo_four" href="javascript:void(0);" onclick="parent.$.modal().close()"><img src="../../Resource/Iconos/close_32.png" style="margin: 0 5px -12px 0; border:none;">Cerrar</a>
		</div>
		<input  name="OPERATOR" id="OPERATOR" type="hidden" value="" />
		<input  name="usu_id" id="usu_id" type="hidden" value="<?php echo $usu_id; ?>" />
		<input  name="per_id" id="per_id" type="hidden" value="<?php echo $per_id; ?>" />
	<?php } ?>
	</form>
</div>
</body>
</html>
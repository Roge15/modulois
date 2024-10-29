<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
include("../../Config/conexion.php"); 
if(isset($OPERATOR)&&($OPERATOR=='_REGISTRAR_'))
{
	// *************************************************************
	// registro del producto
	// *************************************************************
	//INSERCION DE DATOS A LA TABLA PERSONA
	$rp = "INSERT INTO producto (idproducto, nombreproducto, descripcion, costo, precio, stock)
	VALUES('".$txtidp."','".$txtnom."','".$txtdes."','".$txtcos."','".$txtpre."','".$txtsto."')";
	$rp = mysqli_query($link, $rp);
	?>
	<script type="text/javascript">
		parent.self.location.href='../xframe/frameProducto.php';
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
	<h1 class="titulo1">NUEVO PRODUCTO</h1>
	<form name="form1" method="POST" action="" >
		<fieldset>
			<legend>REGISTRE UN NUEVO PRODUCTO</legend>
			<div class="filaDiv">
				<label for="paterno">IDPRODUCTO</label>
				<input type="text" name="txtidp" id="txtidp" placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">PRODUCTO</label>
				<input type="text" name="txtnom" id="txtnom"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">DESCRIPCIÓN</label>
				<input type="text" name="txtdes" id="txtdes"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">COSTO</label>
				<input type="text" name="txtcos" id="txtcos"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">STOCK</label>
				<input type="text" name="txtsto" id="txtsto"  placeholder="" autocomplete="off" />
			</div>
		</fieldset>
		<div id="cssboton">
			<a class="a_demo_four" href="javascript:void(0);" onClick="Validar(document.form1,'_REGISTRAR_')"><img src="../../Resource/Iconos/save_32.png" style="margin: 0 5px -12px 0; border:none;">Guardar</a>	
			<a class="a_demo_four" href="javascript:void(0);" onclick="parent.$.modal().close()"><img src="../../Resource/Iconos/close_32.png" style="margin: 0 5px -12px 0; border:none;">Cerrar</a>
		</div>
		<input  name="OPERATOR" id="OPERATOR" type="hidden" value="" />
	</form>
</div>
</body>
</html>
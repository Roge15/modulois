<?php 
include("../../Config/conexion.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../Resource/Css/stylePopup.css" />
</head>
<body>
<div id="contenedorPopup">
	<h1 class="titulo1">Nuevo Producto</h1>
	<form name="form1" method="POST" action="" >
		<fieldset>
			<legend>Registro de un nuevo producto</legend>
			<div class="filaDiv">
				<label for="paterno">IDPRODUCTO</label>
				<input type="text" name="idp" id="idp" placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">PRODUCTO</label>
				<input type="text" name="nom" id="nom"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">DESCRIPCION</label>
				<input type="text" name="des" id="des"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">COSTO</label>
				<input type="text" name="cos" id="cos"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">PRECIO</label>
				<input type="text" name="pre" id="pre"  placeholder="" autocomplete="off" />
			</div>
			<div class="filaDiv">
				<label for="materno">STOCK</label>
				<input type="text" name="sto" id="sto"  placeholder="" autocomplete="off" />
			</div>
		</fieldset>
		<div id="cssboton">
			<input type="submit" name="Guardar">
			<input type="reset" name="Reestablecer">
		</div>
	</form>
<?php
	//if($_POST['idp'] != '')
	//{
		// *************************************************************
		// registro del producto
		// *************************************************************
		//INSERCION DE DATOS A LA TABLA PERSONA
		@$rp = "INSERT INTO producto (idproducto, nombreproducto, descripcion, costo, precio, stock) VALUES('".$_POST['idp']."','".$_POST['nom']."','".$_POST['des']."','".$_POST['cos']."','".$_POST['pre']."','".$_POST['sto']."')";
		@$rp = mysqli_query($link, $rp);
	//}

?>
</div>
</body>
</html>
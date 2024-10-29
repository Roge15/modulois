            <?php include_once("../../config/conexion.php"); ?>
            <table width="95%" border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td colspan="8"><h1>Ejemplificando el registro del producto</h1></td>
                </tr>
                <tr>
                    <td colspan="8" align="right">
                        <a href="../producto/productoNuevo.php" onclick="$(this).modal({width:450, height:500}).open(); return false;"><img src="../../resource/imagenes/iconos/page_add.png" height="25" border="0" />Nuevo Producto</a>
                    </td>
                </tr>               
                <tr>
                    <td class="tabla1" width="32">N&ordm;</td>
                    <td class="tabla1">IDPRODUCTO</td>
                    <td class="tabla1">PRODUCTO</td>
                    <td class="tabla1">DESCRIPCION</td>
                    <td class="tabla1">COSTO</td>
					<td class="tabla1">PRECIO</td>
                    <td class="tabla1">STOCK</td>
                    <td class="tabla1" width="32">&nbsp;</td>
                    <td class="tabla1" width="32">&nbsp;</td>
                </tr>
				<?php 
                $i=1;
				$query = "select idproducto, nombreproducto, descripcion, costo,precio, stock from producto order by (nombreproducto) asc;";
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_array($result))
                { 
                ?>
                <tr onmouseover="this.style.backgroundColor='#FFFF80'" onmouseout="this.style.backgroundColor='#FFFFFF'">
                    <td class="tabla2"><?php echo $i ?></td>
                    <td class="tabla2"><?php echo $row[0] ?></td>
                    <td class="tabla2"><?php echo $row[1] ?></td>
                    <td class="tabla2"><?php echo $row[2] ?> </td>
                    <td class="tabla2"><?php echo $row[3] ?></td>
                    <td class="tabla2"><?php echo $row[4] ?></td>
                    <td class="tabla1"><?php echo $row[5] ?></td>
                    <td class="tabla2">&nbsp;</td>
                    <td class="tabla2">&nbsp;</td>
                </tr>

                <?php                     
                            $i++;
                } 

				?>
            </table>
            <script language="JavaScript" type="text/JavaScript">
                function Confirmar(URL,Msg) {
                    if (confirm(Msg))
                        document.location=URL;
                }
            </script>
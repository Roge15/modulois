
    <?php
 
   // Dirección o IP del servidor MySQL
    $host = "localhost";
   // Puerto del servidor MySQL
    $puerto = "3306";
    // Nombre de usuario del servidor MySQL
   $usuario = "root";
    // Contraseña del usuario
   $contrasena = "";
   // Nombre de la base de datos
   $baseDeDatos ="bdventa";
   
    function Conectarse()
   {
     global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
     if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       //echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $baseDeDatos)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
     }
        return $link; 
    } 
 
    $link = Conectarse();
 
   ?>
   <?php

    //$query = "SELECT * FROM usuario";
    //$result = mysqli_query($link, $query);
    //while($row = mysqli_fetch_array($result))
   //{ 
     // printf("<tr><td>%s</td><td>%s</td></tr>", $row[0],$row[1]); 
       // echo $row[0]."ejejeje".$row[1];
    //} 
 
    //mysqli_free_result($result); 
 
    //mysqli_close($link); 
 
    ?>
 
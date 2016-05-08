<?php
  include("funciones.php");
  include("datos2.php");

  if(isset($_POST["usuario"],$_POST["clave"]) AND $_POST["usuario"]<>"" AND $_POST["clave"]<>"")
  {
  	$usuario=mysql_real_escape_string($_POST["usuario"]);
  	$clave=mysql_real_escape_string($_POST["clave"]);
  $claveHasheada=md5($clave);
  //echo $claveHasheada;

  	if(conectarBDA($host,$user,$pass,$bda)){
  		$consulta="SELECT * FROM usuarios 
  		WHERE usuario='$usuario' AND clave='$claveHasheada'";

  		if($paquete=consultar($consulta)){
  			echo "<H2>Bienvenido al contenido secreto<H2><p>";
  		}else{
  			 echo "No tienes permiso para acceder al contenido secreto";
  		}
  	}
  
  }else{
  	 echo "<p> No has completado el formulario </p>";
  }


?>
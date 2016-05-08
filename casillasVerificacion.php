<?php
  include("datos.php");
  include("funciones.php");

  if(conectarBDA($host,$usuario,$clave,$bda)){
  	 //echo "ok";
     $label="Empleados";
     $query="SELECT * FROM empleados";

     if($paquete=consultar($query)){

	  	 $codigoCasilla=crearCasillas($paquete,$label);

	  	echo $codigoCasilla;
      }
  }else{
  	echo "error";
  }
?>
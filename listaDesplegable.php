<?php
  include("datos.php");
  include("funciones.php");

  if(conectarBDA($host,$usuario,$clave,$bda)){
  	 //echo "ok";
     $label="Empleados";
     $name="empleados";
     $query="SELECT id,nombre FROM empleados";

     if($paquete=consultar($query)){

	  	 $codigoMenu=generarMenuSeleccion($paquete,$name,$label);

	  	echo $codigoMenu;
      }
  }else{
  	echo "error";
  }

?>
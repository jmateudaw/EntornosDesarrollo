<?php
  include("datos.php");

  function conectarBDA($host,$usuario,$clave,$bda){

  	if(!$enlace = mysql_connect($host,$usuario,$clave)){
  		return false;
  	}elseif (!mysql_select_db($bda)){
  		return false;
  	}else{
  		return true;
  	}
  }

  function consultar($consulta){
  	 if(!$datos = mysql_query($consulta) or mysql_num_rows($datos)<1){
  	 	 return false;
  	 }else{
  	 	return $datos;
  	 }
  }

  function generarMenuSeleccion($datos,$name,$label){
  	 $codigo = '<label>' . $label . ' </label>' . "\n";
  	 $codigo = $codigo . '<select name="' . $name . 
  	 '">' . "\n";

  	 while($fila=mysql_fetch_array($datos)){
  	 	 $codigo= $codigo . '<option value="' . $fila["id"] . '">'
  	 	  . $fila["nombre"] . '</option>' . "\n";
  	 }

  	 $codigo = $codigo . "</select>\n";

  	 return $codigo;
  }

  function crearCasillas($datos,$leyenda){

  	//LEYENDA
  	 $codigo='<fieldset><legend>'. $leyenda . '</legend>' ."\n";

  	 while($fila=mysql_fetch_array($datos)){
        
        //MOSTRAMOS LABEL
  	 	$codigo .= '<label>' . $fila["nombre"];
     
        //MOSTRAMOS UN INPUT
  	 	$codigo = $codigo . '<input type="checkbox" name="dato' 
  	 	. $fila["id"] . '"
  	 	 id="dato' . $fila["id"] . '" /> ' . "\n";

  	 	$codigo .= "</label> <br/> " . "\n";

  	 		 	
  	 }
     
     $codigo .= '</fieldset>' . "\n";
     
  	 return $codigo;
  }

?>
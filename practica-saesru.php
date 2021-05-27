<?php
/**Autor**/
@autor Santiago Espigares Ruiz
/**Version**/
@version 1.0
/**Parametros de entrada de la funcion**/
@param string $param1
/**Parametros de salida de la funcion**/
@param return $param2
/**Funcion ejemplo para el ejercicio**/
function  funcionEjemplo($param1){
echo "Hola";
$param2 = "Hola ".($param1);
return $param2;
}

@access public
echo "La cadena queda: ".functionEjemplo("amigo");
?>

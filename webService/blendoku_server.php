<?php
if(!extension_loaded("soap")){
      dl("php_soap.dll");
}
 
ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("blendoku.wsdl");
 
function restar($operando1,$operando2){
      return $operando1-$operando2;
}
 
$server->AddFunction("restar");
$server->handle();
?>
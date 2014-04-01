<?php
try{
    $clienteSOAP = new SoapClient('http://localhost/blendokuGitHub/webService/blendoku.wsdl');

    $resultado_resta = $clienteSOAP->restar(2.7, 3.5);

    echo "la diferencia de 2.7 menos 3.5 es: " . $resultado_resta . "<br/>";

} catch(SoapFault $e){
    var_dump($e);
}
?>
<?php
$operacion =
$val1 = $_POST['valor1'];

$val2 = $_POST['valor2'];

$operador = $_POST['operador'];

$calcular = function ($val1, $val2, $operador){
    $resultado = "";
    switch ($operador){
        case "suma":
            $resultado = $val1+$val2;
            break;
        case "resta":
            $resultado = $val1-$val2;
            break;
        case "multiplicación":
            $resultado = $val1*$val2;
            break;
        case "división":
            $resultado = $val1/$val2;
            break;
    }
    return $resultado;
};
echo "Resultado de  la operación $operador es: ".$calcular($val1, $val2, $operador);


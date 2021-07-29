<?php
$frutas = array('manzanas', 'peras', 'pepinos');

#para obtener posición: [posicion]


if ($frutas[0] === 'manzanas') {
    echo "$frutas[0]<br>";
} else {
    echo "nope";
}

$frutasDos = array('nombre' => 'manzana', 'nombre2' => 'uva');

echo $frutasDos['nombre2'] . "<br>";

$frutasTres = array(["nombre" => "manzana"], ["nombre" => "uva", "nombre2" => "pera"]);

echo $frutasTres[1]["nombre2"];
?>
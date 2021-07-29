<?php
$numeros = array(1, 2, 3, 4, 5, 6);

for ($i = 0; $i < sizeof($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
#equivalencia: {clave: 'valor'}
$equipo = array('delantero' => 'pedri', 'actor' => 'almodovar');

foreach ($equipo as $posicion => $nombre) {
    echo "posición: $posicion <br> y su nombre es: $nombre<br>";
}


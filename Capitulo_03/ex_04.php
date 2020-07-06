<?php

// Sabado -> 6
$sabado = 6 - date('N');

// é domingo?
if ($sabado == -1) {
    $sabado = 6;
}

echo "Faltam " . $sabado . " para sábado";
echo " agora são " . date('H:i:s');
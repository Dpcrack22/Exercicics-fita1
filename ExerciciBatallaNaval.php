<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Batalla Naval</title>
<style>
    table { border-collapse: collapse; margin:20px auto; }
    th, td { width: 40px; height: 40px; text-align: center; border: 1px solid #333; }
    th { background:#eee; }
    .barco { background: lightblue; font-weight:bold; }
</style>
</head>
<body>
<h2 style="text-align:center">⚓ Batalla Naval ⚓</h2>

<?php

$filas = 10;
$cols  = 10;
$letras = range('A','J');


$tablero = [];
for ($r = 0; $r < $filas; $r++) {
    $fila = [];
    for ($c = 0; $c < $cols; $c++) {
        $fila[$c] = '';
    }
    $tablero[$r] = $fila;
}


$barcos = [
    "F" => 1, // Fragata
    "S" => 2, // Submarino
    "D" => 3, // Destructor
    "P" => 4, // Portaaviones
];


foreach ($barcos as $simbolo => $tam) {
    $colocado = false;
    while (!$colocado) {
        $direccion = rand(0,1) ? 'Horizontal' : 'Vertical';
        if ($direccion === 'Horizontal') {
            $fila = rand(0, $filas - 1);
            $col = rand(0, $cols - $tam);
            for ($i = 0; $i < $tam; $i++) {
                $tablero[$fila][$col + $i] = $simbolo;
            }
            $colocado = true;
        } else {
            $fila = rand(0, $filas - $tam);
            $col = rand(0, $cols - 1);
            for ($i = 0; $i < $tam; $i++) {
                $tablero[$fila + $i][$col] = $simbolo;
            }
            $colocado = true;
        }
    }
}

echo "<table>";
echo "<tr><th></th>";
for ($num = 1; $num <= $cols; $num++) {
    echo "<th>$num</th>";
}
echo "</tr>";

for ($r = 0; $r < $filas; $r++) {
    echo "<tr>";
    echo "<th>{$letras[$r]}</th>";
    for ($c = 0; $c < $cols; $c++) {
        $cel = $tablero[$r][$c];
        if ($cel !== '') {
            echo "<td class='barco'>{$cel}</td>";
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

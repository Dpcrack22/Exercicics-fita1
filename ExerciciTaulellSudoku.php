<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercici Taulell Sudoku</h1>
    <!-- HAY QUE HACER UN TABLERO MARCANDO BIEN LAS LINEAS 9X9 DE SUDOKU -->

    <?php
        echo "<table style='border-collapse: collapse;'>";

        for($i=1; $i<10; $i++){
            echo "<tr>";
            for($j=1; $j<10; $j++){
                $style = "";
                if($i % 3 == 1) {
                    $style .= "border-top: 3px solid black;";
                } else {
                    $style .= "border-top: 1px solid black;";
                }
                if($j % 3 == 1) {
                    $style .= "border-left: 3px solid black;";
                } else {
                    $style .= "border-left: 1px solid black;";
                }
              
                
                $style .= "border-right: 1px solid black; border-bottom: 1px solid black;";
                
                echo "<td style='$style padding: 10px; width: 40px; height: 40px; text-align: center;'></td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    ?>
    
</body>
</html>
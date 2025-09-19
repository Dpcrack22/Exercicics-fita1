<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .footer {
        background-color: lightblue;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3em;
        text-align: center;
        padding-top: 1em;        
    }

    td{
        border: 1px solid black;
        padding: 10px;
    }
</style>
<body>

<h1>Exercicis PHP Fita 1</h1>

<!-- Taula HTML estàtica 
<table>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
</table>
-->

<?php
    echo "Exercici 1";
    
    echo "<table>";

    echo "<tr>";
    for($j=0; $j<10; $j++){
        echo "<td>".$j."</td>";
    }
    echo "</tr>";
    
    echo "</table>";
?>

<?php
    echo "Exercici 2";

    $n=10;
    echo "<table>"; 

    echo "<tr>";
    for($i=0; $i<$n; $i++){
        echo "<td>".chr(65+$i)."</td>"; 
    }
    echo "</tr>"; 

    echo "<tr>";
    for($i=0; $i<$n; $i++){
        echo "<td>".$i."</td>";
    }
    echo "</tr>";   
      
    echo "</table>";

    
?>


<?php
    echo "Exercici 3";

    echo "<table>";
    for($i=0; $i<=5; $i++){
        echo "<tr>";
        for($j=0; $j<=5; $j++){
            echo "<td>".$i+$j."</td>";
          
        }
        echo "</tr>";

    }
    echo "</table>";
?>


<?php
   echo "Exercici 4";
    echo "<table>";
    echo "<tr><td></td>";
    for($i=0; $i<10; $i++){
        echo "<td>".$i."</td>";
    }
    echo "</tr>";   
    for($i=0; $i<10; $i++){
        echo "<tr>";
        echo "<td>".chr(65+$i)."</td>";
        for($j=0; $j<10; $j++){
            echo "<td>"."</td>";
        }
        echo "</tr>";

    }
    echo "</table>";
?>

<!--
<div class="footer">Footer</div>
-->
    
</body>
</html>
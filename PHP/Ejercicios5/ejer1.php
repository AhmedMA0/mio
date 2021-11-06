<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style> 
        table{
            border: 1px solid black;
        }
        td {
            width: 75px;
            border: 1px solid black;
        } 
    </style>
</head>
<body>
    <?php   
        for ($i = 0; $i <= 19; $i++) {
            $numer[$i] = rand(0, 100);
            $cuadrado[$i] = pow($numer[$i],2);
            $cubo[$i] = pow($numer[$i],3);

            echo "<table> <tr> <td>",$numer[$i],"</td>", "<td>", $cuadrado[$i],"</td>", "<td>",$cubo[$i], "</td>";
        }
    ?>
</body>
</html>
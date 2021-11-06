<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>
    <?php

        $num = $_POST['num'];
        $total = $_POST['total'];
        $count = $_POST['count'];
        $countI = $_POST['countI'];
        $pares = $_POST['pares'];
        $media = 0;

        if ($num >= 0) {
            
            $count++;
            //los numero pares introducidos no afectan en nada a la media de los pares por eso el contador solo suma 1 si el numeor introducido es impar
            if ($num%2==0) {
                if ($num > $pares) {
                    $pares = $num;
                }
            }

            else {
                $total += $num;
                ++$countI;
            }

    ?>
            <form action="ejer21_1.php" method="post">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="count" value="<?php echo $count; ?>">
            <input type="hidden" name="countI" value="<?php echo $countI;?>">
            <input type="hidden" name="pares" value="<?php echo $pares; ?>">
            <input type="submit" value="Continuar">
            </form><?php
        }

        else {

            $media = $total / $countI;
            echo "Número negativo introducido, la media de los impares es de: ", $total, " entre ", $countI, " = ", $media,
            '<br>' , 'El mayor numero par introducido es: '. $pares,
            '<br>' , 'El total de numeros es: ' , $count;

        }
    ?>
</body>
</html>
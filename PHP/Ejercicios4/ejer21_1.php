<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
        </head>
    <body>
            Introduzca un número.
        <?php
            $total = $_POST['total'];
            $count = $_POST['count'];
            $countI = $_POST['countI'];
            $pares = $_POST['pares'];

        ?>
            <form action="ejer21_2.php" method="post">
            <input type="number" name="num">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="count" value="<?php echo $count;?>">
            <input type="hidden" name="countI" value="<?php echo $countI;?>">
            <input type="hidden" name="pares" value="<?php echo $pares;?>">
            <input type="submit" value="Continuar">
            </form>
    </body>
</html>
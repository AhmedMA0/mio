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

        ?>
            <form action="ejer23_2.php" method="post">
            <input type="number" name="num">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="count" value="<?php echo $count;?>">
            <input type="submit" value="Continuar">
            </form>
    </body>
</html>
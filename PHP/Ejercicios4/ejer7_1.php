<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
        </head>
    <body>
            Introduzca la combinación.
        <?php

            $o = $_POST['op'];

            if (!isset($o)) {
                $o= 5;
            }
        ?>

            <form action="ejer7_2.php" method="post">
            <input type="number" name="numeroIntroducido">
            <input type="hidden" name="oportunidades" value="<?php echo $o; ?>">
            <input type="submit" value="Continuar">
            </form>
    </body>
</html>
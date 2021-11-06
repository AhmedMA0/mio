<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>¿ES CAPICÚA?</h1>
    <?php

        $num=$_POST['num'];

        //comprobamos que el numero exista y sea positivo y con mamximo 5 cifras, en este caso comienza la ejecución y en el caso contrario
        //se pide al usuario que vuelva a intorducir un numero
        if ($num && $num <= 99999 && $num > 0) {
           
            //variable para no perder el numero introducido
            $num_aux= $num;

            //le damos la vuelta al numero para compararlo con el original y saber si es capicua
            while ($num_aux>0) {
                $reves = ($reves * 10) + ($num_aux%10);
                $num_aux=floor($num_aux/10);
            }

            //si el numero del reves es igual al original es capicua y en el caso contrario no lo es
            //no se tienen en cuenta los ceros a la izquierda ya que no significan nada
            if ($num == $reves) {
                echo 'El numero es capicua';
            }

            else {
                echo 'El numero no es capicua';
            }

            echo '<form action="#" method="POST">
            Introduce otro numero: <input type="number" name="num">
            <input type="submit" value="Continuar">
            </form>';
            
        }

        else {
            
            echo 'El numero debe tener como maximo 5 cifras y ser positivo.' , '<br>';

            echo '<form action="#" method="POST">
            Introduce el numero: <input type="number" name="num">
            <input type="submit" value="Continuar">
            </form>';
        }

    ?>
</body>
</html>
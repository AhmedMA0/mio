<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>MEDIA PIRAMIDE Y SU SOMBRA</h1>

    <?php

        $height=$_POST['height'];

        //comprobamos que el numero exista y sea positivo, en este caso comienza la ejecución y en el caso contrario
        //se pide al usuario que vuelva a intorducir un numero
        if ($height && $height>0) {
            
            $aux= $height; //variable auxiliar para no perder el valor inical de la altura

            //en este bucle calculamos los espacios que inicalmente tenemos que sacar en nuestra piramide sabiendo que cada numero equivale al tamaño de 2 espacios
            //y que por cada fila habra dos numeros mas, o lo que es lo mismo, 4 espacios.
            while ($aux > 1) {
                $spaces += 4;
                --$aux;
            }            
            
            //el primer bucle, el bucle global, va del 1 hasta la altura, y es el que dicta el numero de filas
            //comienza desde el 1 porque me interesa usar ese valor mas adelante
            for ($i=1; $i <= $height; $i++) { 
                
                //quiero sacar numeros desde el uno hasta el numero de la fila en donde lo saco, este ultimo incluido
                //para ello empiezo desde el uno y sigo aumentando mientras el numero sea mayor o igual a la fila en donde lo saco
                //las filas se cuentan desde el uno por el bucle global
                for ($j=1; $j <= $i ; $j++) { 
                    echo $j;
                }
                
                //saco el numero de espacios calculado anteriormente
                for ($e=$spaces; $e > 0 ; $e--) { 
                    echo '&nbsp';
                }

                //aqui basicamente hago lo mismo que en el primer bucle pero al reves y despues de los espacios
                for ($j=$i; $j > 0 ; $j--) { 
                    echo $j;
                }

                //para que las lineas salgan una debajo de otras
                echo '<br>';

                //le quito 4 al numero de espacios por cada iteracion por lo que explique al calcular los espacios
                $spaces -= 4;
            }
            

            echo '<form action="#" method="POST">
            Introduce otro numero: <input type="number" name="height">
            <input type="submit" value="Continuar">
            </form>';
            
        }

        else {
            
            echo 'El numero debe ser positivo.' , '<br>';

            echo '<form action="#" method="POST">
            Introduce el numero: <input type="number" name="height">
            <input type="submit" value="Continuar">
            </form>';
        }

    ?>
</body>
</html>
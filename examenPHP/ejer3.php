<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>FIBONACCI Y POTENCIAS</h1>

    <?php

        $num=$_POST['num'];

        //comprobamos que el numero exista y sea positivo o cero, en este caso comienza la ejecución y en el caso contrario
        //se pide al usuario que vuelva a intorducir un numero
        if ($num && $num > 0) {
            
            echo 'Fibonacci: ';

            $num_aux= $num; //variable auxiliar para no perder el valor inical del num y poder usarlo en la segunda parte del ejercicio
            $num1 = 0;  //primer valor de Fibonacci
            $num2 = 1;  //segundo valor de Fibonacci

            //si el numero introducido es 1 solo sacamos el primer valor de Fibonacci
            if ($num_aux == 1) {
                echo $num1;
            }

            //si el numero introducido es 2 sacamos el primer y segundo valor de Fibonacci
            elseif ($num_aux == 2) {
                echo $num1, '&nbsp' , $num2;
            }

            //si el numero introducido es mayor de 2 ya calculamos la serie
            else {
                //de primeras ya sacamos los dos primeros valores ya que el numero es mayor que 2 y estos dos valores nunca cambiaran
                echo $num1, '&nbsp', $num2, '&nbsp';

                //con un while vamos calculando y sacando la serie, evaluamos hasta el 2 en el bucle ya que ya hemos sacado los dos primeros valores
                while ($num_aux > 2) {

                    //el calculo de la sucesion se basa basicamente en sumar los dos valores, asignar el segundo valor al primero, y la suma al segundo
                    //tabla explicativa en los folios
                    $suma= $num1 + $num2;

                    $num1 = $num2;

                    $num2 = $suma;

                    //sacamos la suma o lo que seria lo mismo el numero 2
                    echo $suma, '&nbsp';

                    //le quitamos una por iteracion para recorrerlo correctamente
                    --$num_aux;
                }
            }

            echo '<br>', 'Potencias: ';

            //para sacar las potencias sencillamente voy desde el 0 hasta el numero anterior al numero introducido con un for
            //sacando 2 elevado al contador del propio bucle por cada iteracion
            for ($i=0; $i < $num; $i++) { 
                echo '2^', $i, '&nbsp';
            }
            echo '<form action="#" method="POST">
            Introduce otro numero: <input type="number" name="num">
            <input type="submit" value="Continuar">
            </form>';
            
        }

        else {
            
            echo 'El numero debe ser positivo.' , '<br>';

            echo '<form action="#" method="POST">
            Introduce el numero: <input type="number" name="num">
            <input type="submit" value="Continuar">
            </form>';
        }

    ?>
</body>
</html>
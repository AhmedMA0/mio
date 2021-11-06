<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>¿ES PRIMO?</h1>

    <?php

        $num=$_POST['num'];
        $primo = 'true'; //esta variable nos servira para saber si el numero es primo o no y guardara ese dato


        //comprobamos que el numero exista y sea positivo, en este caso comienza la ejecución y en el caso contrario
        //se pide al usuario que vuelva a intorducir un numero
        if ($num && $num > 0) {
           
            //vamos dividiendo el numero desde el dos hasta el numero anterior al numero introducido 
            //si es divisible, es decir que el modulo devuelva 0, entre alguno de estos valores, la variable que guarda si es primo o no pasaria al valor de falso
            //si el modulo nunca devuelve 0, la variable primo no cambiaria su valor a false y sabremos que es primo
            for ($i=2; $i <$num ; $i++) { 
                
                if ($num%$i==0) {
                    $primo='false';
                }
                
            }

            //simplemente si primo vale true significa que es primo y lo indicamos y el caso contrario
            if ($primo== 'true') {
                echo 'El numero es primo.';
            }

            else {
                echo 'El numero no es primo.';
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
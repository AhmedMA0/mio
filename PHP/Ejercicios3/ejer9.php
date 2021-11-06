<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a= $_POST['a'];
        $b= $_POST['b'];
        $c= $_POST['c'];
        
        if ($a && $b && $c) {

            $raiz=sqrt(($b*$b)-4 * $a * $c);

            if ($raiz){
            $resP=(-($b) + $raiz)/2*$a;
            $resN=(-($b) - $raiz)/2*$a;
            echo 'El primer resultado es: ' . $resP .'</br>' .'El segundo resultado es: '. $resN;
        
            echo '<form action="#" method="post">
            Introduzca la primera incógnita: <input type="number" name="a"/><br>
            Introduzca la segunda incógnita: <input type="number" name="b"/><br>
            Introduzca la tercera incógnita: <input type="number" name="c"/><br>
            <input type="submit" value="Go"/>
            </form>';
            }

            else {
                echo 'Esa ecuación no tiene resultado.';
            }
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca la primera incógnita: <input type="number" name="a"/><br>
            Introduzca la segunda incógnita: <input type="number" name="b"/><br>
            Introduzca la tercera incógnita: <input type="number" name="c"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

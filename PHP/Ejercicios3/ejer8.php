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
        $nota1= $_POST['a'];
        $nota2= $_POST['b'];
        $nota3= $_POST['c'];
        
        if ($nota1 && $nota2 && $nota3) {

            $res = round(($nota1 + $nota2 + $nota3)/3);

            if ($res > 0 && $res < 5) {
                echo 'Insuficiente'.'<br>';
            }

            elseif ($res == 5) {
                echo 'Suficiente'.'<br>';
            }

            elseif ($res == 6) {
                echo 'Bien'.'<br>';
            }

            elseif ($res == 7 || $res == 8) {
                echo 'Notable'.'<br>';
            }

            else{
                echo 'Sobresaliente'.'<br>';
            }

            
            
            echo 'La media es: ' . $res.'<br>';
        
            echo '<form action="#" method="post">
            Introduzca la primera nota: <input type="number" name="a"/><br>
            Introduzca la segunda nota: <input type="number" name="b"/><br>
            Introduzca la tercera nota: <input type="number" name="c"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca la primera nota: <input type="number" name="a"/><br>
            Introduzca la segunda nota: <input type="number" name="b"/><br>
            Introduzca la tercera nota: <input type="number" name="c"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

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
        
        if ($a && $b) {

            $res=(0-$b)/$a;

            echo 'El resultado es: ' . $res;
        
            echo '<form action="#" method="post">
            Introduzca el primer número: <input type="number" name="a"/><br>
            Introduzca el segundo número: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
            }

        
        else {
            echo ' <form action="#" method="post">
            Introduzca el primer número: <input type="number" name="a"/><br>
            Introduzca el segundo número: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

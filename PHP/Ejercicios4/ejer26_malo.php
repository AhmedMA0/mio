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
        $num= $_POST['a'];
        $posi= $_POST['b'];
        
        if ($num && $posi) {

            echo "La posicion ". $posi . " del numero" . $num . " es: " . substr($num,$posi,1);

            echo "<br>" .' <form action="#" method="post">
            Introduzca otro numero: <input type="number" name="a"/><br>
            Introduzca otra posicion: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca el numero: <input type="number" name="a"/><br>
            Introduzca la posicion (contando desde 0): <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

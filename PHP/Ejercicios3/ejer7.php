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

            $res = ($nota1 + $nota2 + $nota3)/3;
            
            echo 'La media es: ' . $res;
        
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

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
        $h= $_POST['a'];
        $g = 9.8;
        
        if ($h) {

            $t=round(sqrt((2*$h)/9.8));

            echo 'El resultado es: ' . $t;
        
            echo '<form action="#" method="post">
            Introduzca la altura: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
            }

        
        else {
            echo ' <form action="#" method="post">
            Introduzca la altura: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

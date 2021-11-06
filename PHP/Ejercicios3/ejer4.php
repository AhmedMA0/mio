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
        $horas= $_POST['a'];
        
        if ($horas && $horas>0) {

            if ($horas < 41) {
                $res= $horas * 12;
            }

            else {

                $extra = $horas-40;
                $res = (40*12)+($extra * 16);
            }

            echo 'El resultado es: ' . $res;
        
            echo '<form action="#" method="post">
            Introduzca el numero de horas: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
            }

        
        else {
            echo ' <form action="#" method="post">
            Introduzca el numero de horas: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

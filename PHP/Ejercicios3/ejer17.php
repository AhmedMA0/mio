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
        
        if ($num) {

            if($num<100000){

            $res = substr($num,0,1);

            echo $res. '<br>' .
            '<form action="#" method="post">
            Introduzca el numero: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
            }

            else {
                echo 'El numero es de mas de 6 dígitos, introduzca uno de menos de 6.' , ' <form action="#" method="post">
                Introduzca el numero: <input type="number" name="a"/><br>
                <input type="submit" value="Go"/>
                </form>';
            }
            
        }

        
        else {
            echo ' <form action="#" method="post">
            Introduzca el numero: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

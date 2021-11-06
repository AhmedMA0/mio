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
        $max = $num;
        if ($num) {
            echo 'El factorial de ' . $num . ' es: ' . $num;

            for ($i=1; $i < $max; $i++) { 
                $num = $num * $i;
                echo '*' . $i;    
            }

            echo '= ' . $num;

            echo "<br>" .' <form action="#" method="post">
            Introduzca otro numero: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
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

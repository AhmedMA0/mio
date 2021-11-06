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
        $base= $_POST['a'];
        $exp= $_POST['b'];

        
        if ($base && $exp) {
            for ($i=1; $i <= $exp; $i++) { 
                echo $base , '^' , $i , '<br>';
            }

            echo "<br>" .' <form action="#" method="post">
            Introduzca otra base: <input type="number" name="a"/><br>
            Introduzca otro exponente: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca la base: <input type="number" name="a"/><br>
            Introduzca el exponente: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

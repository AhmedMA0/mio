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
        
        if($num>=6 && $num<=12){
            echo 'Buenos dias';
        }
        elseif ($num>=13 && $num<=20) {
            echo 'Buenas tardes';
        }
        else {
            echo 'Buenas noches';
        }
            
        echo '<form action="#" method="post">
        Introduzca la num del dia: <input type="text" name="a"/><br>
        <input type="submit" value="Go"/>
        </form>';
        }
        
        else {
            echo '<form action="#" method="post">
            Introduzca un número: <input type="text" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

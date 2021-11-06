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
        $hora= $_POST['a'];
        
        if ($hora) {
        
        if($hora>=6 && $hora<=12){
            echo 'Buenos dias';
        }
        elseif ($hora>=13 && $hora<=20) {
            echo 'Buenas tardes';
        }
        else {
            echo 'Buenas noches';
        }
            
        echo '<form action="#" method="post">
        Introduzca la hora del dia: <input type="text" name="a"/><br>
        <input type="submit" value="Go"/>
        </form>';
        }
        
        else {
            echo '<form action="#" method="post">
            Introduzca la hora del dia: <input type="text" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

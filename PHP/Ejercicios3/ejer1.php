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
        $dia= strtolower($_POST['a']);
        
        if($dia){
            
            switch ($dia) {
                
                case 'lunes': case 'viernes':

                    echo 'La primera asignatura es DAW';
                    break;

                case 'martes'||'miercoles':

                    echo 'La primera asignatura es Entorno Server';
                    break;


                case 'jueves':
                    echo 'La primera asignatura es Empresa';
                    break;

                default:
                    echo 'Introduza un dia de la semana valido (de lunes a viernes)';
                    break;
            }
            
            echo ' <form action="#" method="post">
            Introduzca el dia de la semana: <input type="text" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca el dia de la semana: <input type="text" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

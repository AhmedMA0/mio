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

            $num1 = 0;
            $num2 = 1;

            echo $num1 . '&nbsp;' . $num2 . '&nbsp'; 

            for ($i=$num-2; $i > 0; $i--) { 

                $sum=$num1+$num2;

                echo $sum . '&nbsp;';

                $num1 = $num2;
                
                $num2 = $sum;
            }

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

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

                $n1 = $num;
                $n2 = $num;

                while ($n1 > 0) {
                    $n1 = floor($n1/10);
                    $long++;
                }

                for ($i=$long; $i > 1; $i--) { 
                    $n2=floor($n2/10);
                }

                $n3 = $num%10;

                if ($n2==$n3) {

                    echo "Es capicuo.";
                }

                else {
                    echo "No es capicuo";
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

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
            $dig= $_POST['b'];
            
            if ($num && $dig) {

                $n1 = $num;
                $n2 = $num;

                while ($n1 > 0) {
                    $n1 = floor($n1/10);
                    $long++;
                }

                while ($n2>0) {
                    if (($n2%10)==$dig) {
                        echo $long . '<br>';
                    }
                    
                    $n2 = floor($n2/10);
                    $long--;
                    
                }



                echo "<br>" .' <form action="#" method="post">
                Introduzca otro numero: <input type="number" name="a"/><br>
                Introduzca otro digito: <input type="number" name="b"/><br>
                <input type="submit" value="Go"/>
                </form>';
            }
            
            else {
                echo ' <form action="#" method="post">
                Introduzca el numero: <input type="number" name="a"/><br>
                Introduzca el digito: <input type="number" name="b"/><br>
                <input type="submit" value="Go"/>
                </form>';
            }
            ?>
    </body>
</html>

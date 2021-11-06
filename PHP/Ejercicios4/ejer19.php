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
        $h = $_POST['a'];
        $c = $_POST['b'];

        if ($h && $c) {

            $c = substr($c,0);
            $co = 1;
            $cs = $h;

            for ($j=0; $j < $h; $j++) { 
            
                for ($m=$cs; $m > 0 ; $m--) { 
                    echo '&nbsp;';
                }
                for ($i=$co; $i > 0; $i--) { 
                    echo $c;
                }

                --$cs;
                ++$co;

                echo '<br>';
            }
            

            echo "<br>" .' <form action="#" method="post">
            Introduzca otra altura: <input type="number" name="a"/><br>
            Introduzca otro caracter para la piramide: <input type="text" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca la altura: <input type="number" name="a"/><br>
            Introduzca un caracter para la piramide: <input type="text" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

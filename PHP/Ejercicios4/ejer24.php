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

        if ($h) {

            $c = substr($c,0);
            $co = 1;
            $cs = $h *2;

            for ($j=0; $j < $h; $j++) { 
            
                for ($m=0; $m <= $cs ; $m++) { 
                    echo '&nbsp;';
                }
                
                for ($i=1, $r = 2; $i <= $co; $i++) { 

                    if ($i > ($j+1)) {
                        
                        echo $i-$r;
                        $r +=2;
                    }

                    else {
                        echo $i;
                    }
                }

                $cs-=2;
                $co+=2;
                echo '<br>';
            }
            

            echo "<br>" .' <form action="#" method="post">
            Introduzca otra altura: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca la altura: <input type="number" name="a"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

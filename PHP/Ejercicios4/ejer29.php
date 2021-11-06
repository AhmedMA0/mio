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
        $numd=$_POST['b'];

        if ($num && $numd) {

            for ($i= $num; $i>0; $i--) { 
                
                if ($i%$numd!==0){
                    echo $i;
                }
                
                else{
                    echo '*';
                }
            }

            echo "<br>" .' <form action="#" method="post">
            Introduzca otro numero: <input type="number" name="a"/><br>
            Introduzca otro  otro numero: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        
        else {
            echo ' <form action="#" method="post">
            Introduzca el numero: <input type="number" name="a"/><br>
            Introduzca el otro numero: <input type="number" name="b"/><br>
            <input type="submit" value="Go"/>
            </form>';
        }
        ?>
    </body>
</html>

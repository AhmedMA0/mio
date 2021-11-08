<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $word=$_POST['word'];

        

        if (!isset($word)) {
            
            echo '<form action="#" method="POST">
            Introduce una palabra: <input type="text" name="word" autofocus>
            <input type="submit" value="Continuar">
            </form>';

        }

        else {        
            $words = ['libro' => 'book','barco' => 'ship', 'pantalla' => 'screen', 'mesa' => 'table', 'suelo' => 'floor',
            'teclado' => 'keyboard','guardar' => 'save', 'correr' => 'run', 'vista' => 'view','andar' => 'walk'];
            
            echo $words[$word];
        }
    ?>
</body>
</html>
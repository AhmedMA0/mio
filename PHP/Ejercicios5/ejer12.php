<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
         
        for ($i=0; $i < 5; $i++) { 
            
            $a[$i]=$_POST[$i];
        }

        
        $words = ['libro' => 'book','barco' => 'ship', 'pantalla' => 'screen', 'mesa' => 'table', 'suelo' => 'floor',
                'teclado' => 'keyboard','guardar' => 'save', 'correr' => 'run', 'vista' => 'view','andar' => 'walk'];
            

        if (!isset($a[0])) {

            for ($i=0; $i < 5; $i++) { 
                $a[$i]=array_rand($words);
            }

            echo '<form action="#" method="POST">
            ',$a[0],': <input type="text" name="word0" autofocus><br>
            ',$a[1],': <input type="text" name="word1"><br>
            ',$a[2],': <input type="text" name="word2"><br>
            ',$a[3],': <input type="text" name="word3"><br>
            ',$a[4],': <input type="text" name="word4"><br>';

            for ($i=0; $i < 5; $i++) { 
                echo '<input type="hidden" name="',$i,'" value="',$a[$i],'">';
            }

            echo'<input type="submit" value="Continuar">
            </form>';
        }


            $word0=$_POST['word0'];
            $word1=$_POST['word1'];
            $word2=$_POST['word2'];
            $word3=$_POST['word3'];
            $word4=$_POST['word4'];
    
            $right=0;
            $wrong=0;

            if ($word0==$words[$a[0]]) {
                ++$right;
            }

            else {
                ++$wrong;
            }

            if ($word1==$words[$a[1]]) {
                ++$right;
            }

            else {
                ++$wrong;
            }

            if ($word2==$words[$a[2]]) {
                ++$right;
            }

            else {
                ++$wrong;
            }

            if ($word3==$words[$a[3]]) {
                ++$right;
            }

            else {
                ++$wrong;
            }

            if ($word4==$words[$a[4]]) {
                ++$right;
            }

            else {
                ++$wrong;
            }

            echo 'Correctas: ' . $right, '.<br>', 'Incorrectas: ', $wrong, '.';
    ?>
</body>
</html>
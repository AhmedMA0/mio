<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $num=$_POST['num'];
        $count=$_POST['count'];
        $nums=$_POST['nums'];

        

        if (!isset($num)||$count<15) {
            
            $count++;
            echo '<form action="#" method="POST">
            Introduce numero: <input type="number" name="num" autofocus>
            <input type="hidden" name="count" value="',$count,'">
            <input type="hidden" name="nums" value="',$nums.strval($num).'?','">
            <input type="submit" value="Continuar">
            </form>';

            $nums .= strval($num);

        }

        else {
            $nums .= strval($num);

            $nums2=explode("?",$nums);

            unset($nums2[0]);

            $nums2= array_map('intval',$nums2);

            $aux=$nums2[15];
            
            //el array va del 1 al c porque le quito la primera antes
            for ($i=15, $j=14; $i > 1; $j--,$i--) { 
                $nums2[$i]=$nums2[$j];
            }

            $nums2[1]=$aux;
                 
            foreach ($nums2 as $b) {
                echo $b, ', ';
            }        
        }
    ?>
</body>
</html>
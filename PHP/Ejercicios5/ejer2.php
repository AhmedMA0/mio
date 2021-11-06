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

        

        if (!isset($num)||$count<10) {
            
            $count++;
            echo '<form action="#" method="POST">
            Introduce numero: <input type="number" name="num" autofocus>
            <input type="hidden" name="count" value="',$count,'">
            <input type="hidden" name="nums" value="',$nums.strval($num).'?','">
            <input type="submit" value="Continuar">
            </form>';
        }

        else {
            $nums .= strval($num);
        }

        $a=explode("?",$nums);

        unset($a[0]);

        $a= array_map('intval',$a);

        foreach ($a as $b) {
            echo $b, ', ';
        }


    ?>
</body>
</html>
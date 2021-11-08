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

        

        if (!isset($num)||$count<8) {
            
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
     
            foreach ($nums2 as $b) {
                
                if ($b%2==0) {
                    echo '<span style="color:red;">',$b,', ','</span>';
                }

                else {
                    echo '<span style="color:blue;">',$b,', ','</span>';
                }
            }
        }
    ?>
</body>
</html>
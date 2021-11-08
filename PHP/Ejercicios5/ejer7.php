<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        for ($i=0; $i < 20; $i++) { 
            $nums[$i]=rand(0,100);
        }

        for ($j=0; $j < 20; $j++) { 

            if ($nums[$j]%2==0) {

                array_unshift($nums,$nums[$j]);

                unset($nums[$j]);
            }
        }

        if ($nums[20]%2==0) {

            array_unshift($nums,$nums[20]);

            unset($nums[20]);
        }
        

        foreach ($nums as $b) {
           echo $b, ', ';
        }
    ?>
</body>
</html>
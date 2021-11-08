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

            $nums .= strval($num);

        }

        else {        
            $nums .= strval($num);

            $nums2=explode("?",$nums);

            unset($nums2[0]);

            $nums2= array_map('intval',$nums2);
            
            echo '<table border=1><th colspan="2">Antes: </th>';
            for ($x=1; $x <= 10; $x++) { 
                echo '<tr><td>',$x,'</td><td>',$nums2[$x],'</td></tr>';
            }
            echo '</table>';

            for ($j=1; $j < 10; $j++) { 

                $primo = true;
                for ($i=2; $i <$nums2[$j]; $i++) { 
                
                    if ($nums2[$j]%$i==0) {
                        $primo=false;
                    }
                    
                }

                if ($primo) {
                    print_r($nums2);
                    echo '<br>';
                    array_unshift($nums2,$nums2[$j]);
    
                    unset($nums2[$j]);
                }

            }

            $primo = true;
                for ($i=2; $i <$nums2[10]; $i++) { 
                
                    if ($nums2[10]%$i==0) {
                        $primo=false;
                    }
                    
                }

                if ($primo) {
                    print_r($nums2);
                    echo '<br>';
                    array_unshift($nums2,$nums2[10]);
    
                    unset($nums2[10]);
                }
            print_r($nums2);

            echo '<table border=1><th colspan="2">Despues: </th>';
            for ($h=0; $h <= 10; $h++) { 
                echo '<tr><td>',$h,'</td><td>',$nums2[$h],'</td></tr>';
            }
            echo '</table>';

        }
    ?>
</body>
</html>
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
        $a1 = "DIW";
        $a2 = "E.Server";
        $a3 = "E.Cliente";
        $a4 = "DAW";
        $a5 = "Empresa";

        echo "<table border=1>";
        echo "<th>Hora</th>
                 <th>Lunes</th> 
                 <th>Martes</th> 
                 <th>Miercoles</th>
                 <th>Jueves</th>
                 <th>Viernes</th>
                 </tr>";
                 
        echo "<td>8:25/9:20</td>
              <td>$a4</td>
              <td>$a2</td>
              <td>$a2</td>
              <td>$a5</td>
              <td>$a2</td>
              </tr>";
        
        echo "<td>9:20/10:15</td>
              <td>$a4</td>
              <td>$a2</td>
              <td>$a2</td>
              <td>$a3</td>
              <td>$a2</td>
              </tr>";
        
        echo "<td>10:15/11:10</td>
              <td>$a3</td>
              <td>$a1</td>
              <td>$a5</td>
              <td>$a3</td>
              <td>$a1</td>
              </tr>";
        
        echo "<td>11:30/12:25</td>
              <td>$a3</td>
              <td>$a1</td>
              <td>$a4</td>
              <td>$a1</td>
              <td>$a1</td>
              </tr>";
        
        echo "<td>12:25/13:20</td>
              <td>$a2</td>
              <td>$a3</td>
              <td>$a4</td>
              <td>$a1</td>
              <td>$a5</td>
              </tr>";
        
        echo "<td>13:20/14:15</td>
              <td>$a2</td>
              <td>$a3</td>
              <td>$a1</td>
              <td>$a4</td>
              <td>$a1</td>
              </tr>";
        ?>
    </body>
</html>

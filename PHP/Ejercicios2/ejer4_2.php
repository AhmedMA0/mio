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
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "La suma de $a mas $b es ", $a + $b."<br>";
            echo "La resta de $a menos $b es ", $a - $b."<br>";
            echo "El producto de $a por $b es ", $a * $b."<br>";
            echo "El cociente de $a entre $b es ", $a / $b."<br>";

        ?>
</html>

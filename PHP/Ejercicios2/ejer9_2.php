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
            $pi = 3.1416;
            $res = 0.3 * $pi * ($a * $a) * $b;
            echo "El volumen del cono es ", $res ."<br>";
        ?>
</html>

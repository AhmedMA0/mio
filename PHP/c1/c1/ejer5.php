<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="number" name="c">
    <input type="submit" value="Enviar">
</form>
    <?php 
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        
        $sqrt=sqrt(($b*$b)-4*$a*$c);

        echo (($b*-1) + $sqrt)/2*$a, "<br>";
        echo (($b*-1) - $sqrt)/2*$a, "<br>";

    ?>
</body>
</html>

